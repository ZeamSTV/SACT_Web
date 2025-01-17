<?php	if(!defined('_source')) die("Error");

	$title_bar = "Đăng Ký - ".$title_bar;
	if(isset($_POST['btnDk'])){
		
	
		
		$id = $_SESSION['login1']['id'];
		
		$data['thongtintaikhoannganhangten'] = $_POST['thongtintaikhoannganhangten'];
		$data['thongtintaikhoannganhangso'] = $_POST['thongtintaikhoannganhangso'];
		$data['thongtintaikhoannganhangtennganhang'] = $_POST['thongtintaikhoannganhangtennganhang'];
				
		$d->setTable('member');
		$d->setWhere('id', $id);
		if($d->update($data)){	
			$_SESSION[$login_name] = false;
	session_unset('login1');
			transfer("Cập nhật dữ liệu thành công", "trang-chu.html");
			
		}else{
			transfer("Cập nhật dữ liệu bị lỗi", "dang-ky-cmnd.html");
	}
		
		
			
	}
?>