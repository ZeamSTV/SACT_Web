<?php if(!defined('_lib')) die("Error");
/*
	$config['servername'] = 'localhost';
	$config['username'] = 'root';
	$config['password'] = 'admin';
	$config['database'] = 'cafechoi';

	$d = new database($config);
	#$d->init($config);
	#$d->connect();
	
	// insert
	$data['ten'] = 'Danh mục 1';
	$data['mota'] = 'Mô tả cho Danh mục 1';
	$data['active'] = '0';

	if(!$d->insert($data)){
		$d->showError();
		$d->debug();
	}
	
	// update
	$data['active'] = '1';
	$d->setWhere("id",3);
	
	if(!$d->update($data)){
		$d->showError();
		$d->debug();
	}

	// select
	$d->setTable("pro_cat");
	$d->setWhere("id",3);
	$d->setOrder("id desc");
	$d->setLimit("0,3");
	
	if(!$d->select()){
		$d->showError();
		$d->debug();
	}else{
		var_dump($d->result_array());
	}

	// delete
	$d->setTable("pro_cat");
	$d->setWhere("id",3);
	$d->delete();
	
*/	
class database{
	
	var $db;
	var $result;
	var $insert_id;
	var $sql = "";
	var $refix = "";

	var $servername = 'localhost';
	var $username = 'hanghoa_1';
	var $password = 'admin';
	var $database = 'hanghoa_1';
	
	var $table = "";
	var $where = "";
	var $order = "";
	var $limit = "";
	
	var $error = array();

	function database($config = array()){
		if(!empty($config)){
			$this->init($config);
			$this->connect();
		}
	}

	function init($config = array()){
		foreach($config as $k=>$v)
			$this->$k = $v;
	}
	
	function connect(){
		$this->db = mysqli_connect($this->servername, $this->username, $this->password,$this->database);
		
		if( !$this->db){
			die('Could not connect: ' . mysqli_error());
		}
		
		if( !mysqli_select_db( $this->db,$this->database)){
			die(mysqli_error($this->db) . ": " . mysqli_error($this->db));
			return false;
		}
		
		mysqli_query($this->db,'SET NAMES "utf8"');
	}
	
	function query($sql=""){
		if($sql)
			$this->sql = str_replace('#_', $this->refix, $sql);
		$this->result = mysqli_query($this->db,$this->sql);
		if(!$this->result){
			#die(mysql_errno($this->db) . ": " . mysql_error($this->db));
			die("syntax error: ".$this->sql);
		}
		return $this->result;	
	}
	
	function insert($data = array()){
		$key = "";
		$value = "";
		foreach($data as $k => $v){
			$key .= "," . $k;
			$value .= ",'" . $v  ."'";
		}
		if($key{0} == ",") $key{0} = "(";
		$key .= ")";
		if($value{0} == ",") $value{0} = "(";
		$value .= ")";
		$this->sql = "insert into ".$this->refix.$this->table.$key." values ".$value;
		$this->query();
		$this->insert_id = mysqli_insert_id($this->db);
		return $this->result;
	}
	
	function update($data = array()){
		$values = "";
		foreach($data as $k => $v){
			$values .= ", " . $k . " = '" . $v  ."' ";
		}
		if($values{0} == ",") $values{0} = " ";
		$this->sql = "update " . $this->refix . $this->table . " set " . $values;
		$this->sql .= $this->where;
		return $this->query();
	}
	
	function delete(){
		$this->sql = "delete from " . $this->refix . $this->table . $this->where;
		return $this->query();
	}
	
	function select($str = "*"){
		$this->sql = "select " . $str;
		$this->sql .= " from " . $this->refix .$this->table;
		$this->sql .=  $this->where;
		$this->sql .=  $this->order;
		$this->sql .=  $this->limit;
		return $this->query();
	}
	
	function num_rows(){
		return mysqli_num_rows($this->result);
	}
	
	function fetch_array(){
		return mysqli_fetch_assoc($this->result);
	}
	
	function result_array(){
		$arr = array();
		while ($row = mysqli_fetch_assoc($this->result)) 
			$arr[] = $row;
		return $arr;
	}
	
	function setTable($str){
		$this->table = $str;
	}
	
	function setWhere($key, $value=""){
		if($value!=""){
			if($this->where == "")
				$this->where = " where " . $key . " = '" . $value . "'";
			else
				$this->where .= " and " . $key . " = '" . $value ."'";
		}
		else{
			if($this->where == "")
				$this->where = " where " . $key ;
			else
				$this->where .= " and " . $key ;
		}
	}
	
	function setWhereOr($key, $value){
		if($value!=""){
			if($this->where == "")
				$this->where = " where " . $key . " = " . $value;
			else
				$this->where .= " or " . $key . " = " . $value;
		}
		else{
			if($this->where == "")
				$this->where = " where " . $key ;
			else
				$this->where .= " or " . $key ;
		}
	}
	
	function setOrder($str){
		$this->order = " order by " . $str;
	}
	
	function setLimit($str){
		$this->limit = " limit " . $str;
	}
	
	function setError($msg){
		$this->error[] = $msg;
	}
	
	function showError(){
		foreach($this->error as $value)
			echo '<br>'.$value;
	}
	
	function reset(){
		$this->sql = "";
		$this->result = "";
		$this->where = "";
		$this->order = "";
		$this->limit = "";
		$this->table = "";
	}
	
	function debug(){
		echo "<br> servername: ".$this->servername;
		echo "<br> username: ".$this->username;
		echo "<br> password: ".$this->password;
		echo "<br> database: ".$this->database;
		echo "<br> ".$this->sql;
	}
	
	/**
	 * Escape String
	 *
	 * @access	public
	 * @param	string
	 * @return	string
	 */
	function escape_str($str)	
	{	
		if (is_array($str))
    	{
    		foreach($str as $key => $val)
    		{
    			$str[$key] = $this->escape_str($val);
    		}
    		
    		return $str;
    	}
	
		if (function_exists('mysql_real_escape_string') AND is_resource($this->db))
		{
			return mysql_real_escape_string($str, $this->db);
		}
		elseif (function_exists('mysql_escape_string'))
		{
			return mysql_escape_string($str);
		}
		else
		{
			return addslashes($str);
		}
	}
	
	function xssClean($str){
		#$str = htmlentities($str, ENT_QUOTES, "UTF-8");
		$str = str_replace("'", '&#039;', $str);
		$str = str_replace('"', '&quot;', $str);
		$str = str_replace('<', '&lt;', $str);
		$str = str_replace('>', '&gt;', $str);
		#$str = addslashes($str);
		return $str;
	}
}
?>