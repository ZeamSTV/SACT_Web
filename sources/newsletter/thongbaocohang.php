<?php
if(!empty($_POST)){
	@define ( '_lib' , './admin/lib/');
	@define ( '_template' , './templates/');
	include_once _lib."config.php";
	include_once _lib."functions.php";
	include_once _lib."q_functions.php";	//Các hàm bổ sung
	include_once _lib."class.database.php";
	$d = new database($config['database']);
	

	if($_POST['hotentb'])
		$hoten = htmlspecialchars(addslashes(trim(@$_POST['hotentb'])));


	if($_POST['emailtb'])
		$email = htmlspecialchars(addslashes(trim(@$_POST['emailtb'])));

	if($email==""){
		transfer("Email không được để trống", "trang-chu.html");		
	}


	if($email==""){
		transfer("Email không được để trống", "trang-chu.html");		
	}
	if(q_ckemail1($email)==0){
		transfer("Email không đúng định dạng", "trang-chu.html");		
	}			
	

	if($_POST['noidungtb'])
		$noidung = htmlspecialchars(addslashes(trim(@$_POST['noidungtb'])));


	$d->reset();
	$sql = "insert into #_thongbaocohang (hoten,email,noidung,stt,hienthi) value('$hoten','$email','$noidung',1,1)";
	if($d->query($sql)){	
	
		transfer("Bạn đã đăng ký thành công", "trang-chu.html");		
	}
	else	transfer("Hệ thống đang bận, xin quý khách vui lòng thử lại sau", "trang-chu.html");	
	
}
?>