<?php

set_include_path(__DIR__ .'/phpseclib');
include('Net/SSH2.php');
include('Net/SFTP.php');
include('Crypt/RSA.php');

class sftp{

	var $ssh_conn;
	var $sftp_conn;
	var $error;
	var $log_on = 1;
	var $auth_pass;
	var $sftp;
	var $ssh;
	
	function __construct(){
	}
	
	//removed $pub since while accessing we need only private key
	function connect($host, $port, $user, $password = '', $pri = '', $passphrase = ''){
		$this->sftp = new Net_SFTP($host, $port);
		if(!empty($pri)){
			$key = new Crypt_RSA();
			if(!empty($passphrase)){
				$key->setPassword($passphrase);
			}
			
			$key->loadKey($pri);
		}
		
		if (!$this->sftp->login($user, !empty($password) ? $password : $key)) {
			return false;
		}
		
		return true;
	}
	
	function delete($filename){
		return $this->sftp->delete($filename);
	}
	
	function is_dir($dir){
		$org = $this->sftp->pwd();
		$this->sftp->chdir($dir);
		if($dir == trim($this->sftp->pwd())){
			$this->sftp->chdir($org);
			return true;
		}
		return false;
	}
	
	function chdir($dir){
		return $this->sftp->chdir($dir);;
	}
	
	function pwd(){
		return $this->sftp->pwd();
	}
	
	function chmod($pathname, $mode, $rec = 0){
		return $this->sftp->chmod($mode, $pathname, $rec);
	}
	
	// Test it
	function utime($pathname, $mtime) {
		// Try to set the mtime with touch command
		$output = $this->sftp->exec("touch -m -t ".substr_replace($mtime, '.', -2, 0)." ".$pathname);
		return TRUE;
	}
	
	function file_exists($file){
		$output = $this->sftp->stat($file);
		if(is_array($output)){
			return true;
		}
		return false;
	}
	
	function copy($source, $dest, $rec = 1){
		if($this->file_exists($source) || $this->is_dir($source)){
			$output = $this->sftp->exec("cp ".(!empty($rec) ? '-R ' : '')."$source $dest");
		}else{
			return false;
		}
		if($this->file_exists($dest) || $this->is_dir($dest)){
			return true;
		}else{
			$this->error = "Could not copy $source to $dest";
			return false;
		}
	}
	
	function rename($from, $to){
		return $this->sftp->rename($from, $to);
	}
	
	function rmdir($dir, $rec = 1){
		return $this->sftp->delete($dir, $rec);
	}
	
	function mkdir($dirname, $mode = 0755, $rec = 0){
		backuply_log(' sftp mkdir, dirname : '.$dirname.' , mode : '.$mode.' , rec : '.$rec);
		return $this->sftp->mkdir($dirname, $mode, $rec);
	}

	function mmkdir($dir, $mode = 0755) {
		backuply_log(' sftp mmkdir, dir : '.$dir.' , mode : '.$mode);
		return $this->sftp->mkdir($dir, $mode, 1);
	}
	
	function exec($command, $blocking = true, $error = false){
		$this->sftp->enableQuietMode();
		$this->sftp->exec($command);
		if(!empty($error)){
			$this->error[] = $this->sftp->getStdError();
		}
		return $this->sftp->getExitStatus();
	}
	
	/* function realpath($filename){
		return ssh2_sftp_realpath($this->sftp_conn, $filename);
	} */
	
	function put($local_file, $remote_file, $mode = 0644){
		
		// Check last file and skip the files that have been already transferred...
		if(!empty($GLOBALS['last_file']) && $GLOBALS['start'] == 0){
			if(preg_match('#^'.$GLOBALS['last_file'].'$#', $local_file)){
				$GLOBALS['start'] = 1; // give a jump start once the last transferred file is found..
			}
			return true; //return true to skip files
		}
		
		if(!$this->sftp->put($remote_file, $local_file, NET_SFTP_LOCAL_FILE)){
			return false;
		}
		
		//We can run the scripts for the end time already set
		if(time() >= $GLOBALS['end']){
			$GLOBALS['end_file'] = $local_file; // set end file so that we know where to start from
		}
		
		return true;
	}
	
	function get($remote_file, $local_file, $offset = 0, $length = -1){
		return $this->sftp->get($remote_file, $local_file, $offset, $length);
	}
	
	function mget($remote, $local=".", $continious=false, $include_only=array()) {
		
		global $__settings;
		
		if(!@file_exists($local)) {
			if(!@mkdir($local)) {
				$this->error[] = "Cannot create folder \"".$local."\"";
				return FALSE;
			}
		}
		
		$list = $this->rawlist($remote);
		
		if($list===false) {
			$this->error[] = "Can't read remote folder \"".$remote."\" contents";
			return FALSE;
		}
		
		if(empty($list)) return true;
		
		foreach($list as $k=>$v) {
			$v['name'] = $k;
			$list[$k] = $this->_parselisting($v);
			if($list[$k]["name"]=="." or $list[$k]["name"]=="..") unset($list[$k]);
		}
		
		$ret=true;
		foreach($list as $ek => $el) {
		
			if($el['size'] == '0'){
				if($el['type'] == 'f'){
					$empty_file = @fopen($local.'/'.$el['name'], "w");
					@fclose($empty_file);
				}elseif($el['type'] == 'd'){
					mkdir($local.'/'.$el['name']);
				}
				@chmod($local.'/'.$el['name'], $el['perms']);
				
				$t=$el["time"];
				//echo 'Path :'.$local."/".$el["name"].' Date : '.$el["date"].' Strtotime : '.$t.'<br />';
				if($t!==-1 and $t!==false) @touch($local."/".$el["name"], $t);
				
				unset($list[$ek]);
				continue;
			}
			
			$extension = get_extension($el['name']);
			if(!empty($include_only) && !in_array($el['name'], $include_only) && $extension !== 'sql'){
				unset($list[$ek]);
				continue;
			}
			
			$current_file = $el["path"].$el["name"];
			//To exclude some files/folder
			if(!empty($__settings['exclude_files']) && in_array($current_file, $__settings['exclude_files'])){
				unset($list[$ek]);
				continue;
			}
			
			if($el["type"]=="d") {
				if(!$this->mget($remote."/".$el["name"], $local."/".$el["name"], $continious)) {
					$this->error[] = "Can't copy remote folder \"".$remote."/".$el["name"]."\" to local \"".$local."/".$el["name"]."\"";
					$ret=false;
					if(!$continious) break;
				}
			} else {
				
				//To exclude some files if set in script's clone.php's __pre_unzip() function
				if(!empty($__settings['exclude_ext']) && in_array($extension, $__settings['exclude_ext'])){
					unset($list[$ek]);
					continue;
				}
				
				if(!$this->get($remote."/".$el["name"], $local."/".$el["name"])) {
					$this->error[] = "Can't copy remote file \"".$remote."/".$el["name"]."\" to local \"".$local."/".$el["name"]."\"";
					$ret=false;
					if(!$continious) break;
				}
			}
			@chmod($local."/".$el["name"], $el["perms"]);
			
			$t=$el["time"];
			//echo 'Path :'.$local."/".$el["name"].' Date : '.$el["date"].' Strtotime : '.$t.'<br />';
			if($t!==-1 and $t!==false) @touch($local."/".$el["name"], $t);
		}
		
		return $ret;
	}
	
	function mput($local=".", $remote=NULL, $continious=false, $include_only=array()) {
		
		global $__settings, $ftp;
		
		 if(!@$ftp->is_dir($remote)) {
			if(!@$ftp->mkdir($remote)) {
				$this->error[] = "mput: can't create folder, Can't create remote file \"".$remote;
				return FALSE;
			}
		}

		$list = filelist_fn($local, 0);
		
		if($list===false) {
			$this->error[] = "mput: can't retrive directory listing, Can't retrive directory listing of local folder \"".$local;
			return FALSE;
		}
		
		if(empty($list)) return TRUE;
		
		foreach($list as $k=>$v) {
			$stat = stat($k);			
			if($v['dir'] == '0'){
				$list[$k]['type'] = 'f';
			}else{
				$list[$k]['type'] = 'd';
			}
			$list[$k]['name'] = $v['name'];
			$list[$k]['size'] = $stat['size'];
			$list[$k]['perms'] = octdec(substr(sprintf('%o', $stat['mode']), -4));
			$list[$k]['time'] = date('YmdHis', $stat['mtime']);
			
			if($list[$k]["name"]=="." or $list[$k]["name"]=="..") unset($list[$k]);
		}
		$ret=true;
		
		foreach($list as $ek => $el) {
			
			// ----- break the loop once last file is found...
			if(!empty($GLOBALS['end_file'])){
				break;
			}
			
			if($el['size'] == '0'){
				if($el['type'] == 'f'){
					//Create an empty file
					if(!$this->put($local."/".$el["name"], $remote."/".$el["name"])) {
						$this->error[] = "mput: can't copy file, Can't copy local file \"".$local."/".$el["name"]."\" to remote \"".$remote."/".$el["name"]."\"";
						$ret=false;
						if(!$continious) break;
					}
				}elseif($el['type'] == 'd'){
					$ftp->mkdir($remote.'/'.$el['name']);
				}
				@$ftp->chmod($remote.'/'.$el['name'], $el['perms']);
			
				//Set modified time 
				$t=$el["time"];
				if($t!==-1 and $t!==false){
					$ftp->utime($remote.'/'.$el['name'], $el["time"]);
				}
			
				unset($list[$ek]);
				continue;
			}
			
			$extension = get_extension($el['name']);
			if(!empty($include_only) && !in_array($el['name'], $include_only) && $extension !== 'sql'){
				unset($list[$ek]);
				continue;
			}
			
			$current_file = $el["path"].$el["name"];
			//To exclude some files/folder
			if(!empty($__settings['exclude_files']) && in_array($current_file, $__settings['exclude_files'])){
				unset($list[$ek]);
				continue;
			}
			
			if($el["type"]=="d") {
				if(!$this->mput($local."/".$el["name"], $remote."/".$el["name"], $continious)){
					$this->error[] = "mput: can't copy folder, Can't copy local folder \"".$local."/".$el["name"]."\" to remote \"".$remote."/".$el["name"]."\"";
					$ret=false;
					if(!$continious) break;
				}
			}else{
				//To exclude some files if set in script's clone.php's __pre_unzip() function
				if(!empty($__settings['exclude_ext']) && in_array($extension, $__settings['exclude_ext'])){
					unset($list[$ek]);
					continue;
				}
				
				if(!$this->put($local."/".$el["name"], $remote."/".$el["name"])) {
					$this->error[] = "mput: can't copy file, Can't copy local file \"".$local."/".$el["name"]."\" to remote \"".$remote."/".$el["name"]."\"";
					$ret=false;
					if(!$continious) break;
				}
				
				
			}
			
			@$ftp->chmod($remote."/".$el["name"], $el["perms"]);
			
			//Set modified time 
			$t=$el["time"];
			if($t!==-1 and $t!==false){
				$ftp->utime($remote.'/'.$el['name'], $el["time"]);
			}
			
		}
		return $ret;
		
	}
	
	function rawlist($pathname="", $arg=""){
		return $this->sftp->rawlist($pathname);
	}
	
	function is_exists($file){
		if($this->file_exists($file)){
			return true;
		}
		return false;
	}
	
	// Takes the DATA rather than the LOCAL file name
	function softput($remotefile=NULL, $softdata, $rest=0) {
		return $this->sftp->put($remotefile, $softdata);
	}
	
	// Returns the Data
	function softget($remotefile=NULL) {
		return $this->sftp->get($remotefile);
	}
	
	function nlist($dir = '.'){
		return $this->sftp->nlist($dir);
	}
	
	function _parselisting($line) {
		
		$b = array();
		
		if($line['type'] == 2){
			$b['isdir'] = 1;
			$b['type'] = 'd';	
		}elseif($line['type'] == 3){
			$b['islink'] = 1;
			$b['type'] = 'l';
		}else{
			$b['type'] = 'f';
		}
		
		$b['perms'] = $line['permissions'] & 0777;	
		$b['size'] = $line['size'];
		$b['time'] = $line['mtime'];
		$b['name'] = $line['name'];
		
		return $b;

	}
	
	// For remote backup SFTP
	function backup_softput($remotefile=NULL, $softdata){
		
		$ret = $this->sftp->put($remotefile, $softdata, NET_SFTP_RESUME);
		
		return $ret;
		
	}

}


