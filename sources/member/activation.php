<?php

	$title_bar = "Kích hoạt tài khoản - ";
	if($_GET['id']){
		$id=htmlspecialchars($_GET['id']);
		$d->setTable('member');
		$d->setWhere('id', $id);
		$d->select('id');
		if($d->num_rows()>0){
			$data['hienthi'] = 1;
			$d->setTable('member');
			$d->setWhere('id', $_GET['id']);
			if($d->update($data)) transfer("Tài khoản của bạn đã kích hoạt thành công, xin sử dụng chức năng đăng nhập!", "trang-chu.html");				
		}else{
		transfer("Xin lỗi quý khách.<br>Hệ thống bị lỗi, xin quý khách thử lại.", "trang-chu.html");		
		}
	}
?>