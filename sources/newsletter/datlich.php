<?php
if( $_POST['datchodki']){
	@define ( '_lib' , './admin/lib/');
	@define ( '_template' , './templates/');
	include_once _lib."config.php";
	include_once _lib."functions.php";
	include_once _lib."q_functions.php";	//Các hàm bổ sung
	include_once _lib."class.database.php";
	$d = new database($config['database']);
	
	if($_POST['hotendk'])
		$hoten = htmlspecialchars(addslashes(trim(@$_POST['hotendk'])));
	if($_POST['diachidk'])
		$diachi = htmlspecialchars(addslashes(trim(@$_POST['diachidk'])));
	if($_POST['sdtdk'])
		$sdt = htmlspecialchars(addslashes(trim(@$_POST['sdtdk'])));
	if($_POST['noidungdk'])
		$noidung = htmlspecialchars(addslashes(trim(@$_POST['noidungdk'])));
	
	if($hoten==""){
		transfer("Họ tên không được để trống", "trang-chu.html");		
	}
	if($diachi==""){
		transfer("Địa chỉ không được để trống", "trang-chu.html");		
	}
	if($sdt==""){
		transfer("Số điện thoại không được để trống", "trang-chu.html");		
	}
	if($noidung==""){
		transfer("Nội dung không được để trống", "trang-chu.html");		
	}


	$d->reset();
	$sql = "insert into #_datcho (hoten,diachi,dienthoai,noidung) value('$hoten','$diachi','$dienthoai','$noidung')";
	if($d->query($sql)){	
		
		transfer("Bạn đã đặt lịch thành công", "trang-chu.html");		
	}
	else	transfer("Hệ thống đang bận, xin quý khách vui lòng thử lại sau", "trang-chu.html");	
	
}
?>