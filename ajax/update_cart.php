<?php

// die('x');
	session_start();
	error_reporting(E_ALL & ~E_NOTICE & ~8192);
	
	if(!isset($_SESSION['lang']))
	{
	$_SESSION['lang']='vi';
	}
	
	$lang=$_SESSION['lang'];
	
	@define ( '_lib' , '../admin/lib/');
	@define ( '_source' , '../sources/');
	include_once _lib."config.php";
	include_once _lib."constant.php";
	// require_once _source."lang_$lang.php";
	include_once _lib."functions.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);
	
	
	
	@$id = $_POST['id'];
	@$q = $_POST['sl'];

	

	
	
	$max=count($_SESSION['cart']);
	for($i=0;$i<$max;$i++){
		if($id==$_SESSION['cart'][$i]['productid']){
			if($q){
				$_SESSION['cart'][$i]['qty'] = $q;
			}
			
			break;
		}
	}

?>


