<?php

	@define ( '_lib' , '../lib/');
	

	include_once _lib."config.php";
	include_once _lib."functions.php";
	include_once _lib."library.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);


	@$id=$_POST['id'];
	@$value=$_POST['value'];


	$sql="update table_khuyenmai set uutien='$value' where id=".$id;
	$d->query($sql);
	




?>