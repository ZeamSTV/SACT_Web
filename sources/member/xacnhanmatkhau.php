<?php	if(!defined('_source')) die("Error");

	
	$id = $_GET['id'];	
	$pass = htmlspecialchars(addslashes($_GET['pass']));	

	$sql = "select id,hienthi from #_member where id='$id' and password2='$pass'";
	$d->query($sql);
	if($d->num_rows() == 1){
		$row = $d->fetch_array();
		if($row['hienthi']==1){															
			$data['password'] = $pass;
			$data['password2'] = "";
			
			$d->setTable('member');
			$d->setWhere('id', $row['id']);
			if($d->update($data)){					
				transfer("Mật khẩu mới đã có hiệu lực. Bạn nên đổi lại mật khẩu sau khi đã đăng nhập. Cảm ơn.", "trang-chu.html");										
			}
			transfer("Thay đổi mật khẩu không thành công!", "trang-chu.html");						
		}
		else
			transfer("Có lỗi xảy ra! Có phải bạn là hacker??","trang-chu.html");
	}
	else
		transfer("Mã xác nhận mật khẩu đã bị xóa. Bạn vui lòng", "trang-chu.html");


?>