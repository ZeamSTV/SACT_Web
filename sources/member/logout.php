<?php	if(!defined('_source')) die("Error");

	
	$_SESSION[$login_name1] = false;
 	
	unset($_SESSION['login1']);
	
	transfer("Đăng xuất thành công", "trang-chu.html");

?>