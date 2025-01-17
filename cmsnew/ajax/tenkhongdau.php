<?php	
	
	@define ( '_lib' , '../lib/');
	

	include_once _lib."config.php";
	include_once _lib."functions.php";
	include_once _lib."library.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);



    @$tenkhongdau=q_bodautv($_POST['tenkhongdau']);



    echo $tenkhongdau;



?>