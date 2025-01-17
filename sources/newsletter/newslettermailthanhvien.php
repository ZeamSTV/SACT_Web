<?php
	@define ( '_lib' , './admin/lib/');
	@define ( '_template' , './templates/');
	include_once _lib."config.php";
	include_once _lib."functions.php";
	include_once _lib."q_functions.php";	//Các hàm bổ sung
	include_once _lib."class.database.php";
	$d = new database($config['database']);
	
	/*
	if($_POST['txtnhanemail'])
		$email = htmlspecialchars(addslashes(trim(@$_POST['txtnhanemail'])));*/


		if($_POST['txtnhanemail'])
		$email = htmlspecialchars(addslashes(trim(@$_POST['txtnhanemail'])));

	/*
	if($_POST['diachi'])
		$diachi = htmlspecialchars(addslashes(trim(@$_POST['diachi'])));
	if($_POST['dienthoai'])
		$dienthoai = htmlspecialchars(addslashes(trim(@$_POST['dienthoai'])));
	
	if($_POST['noidung'])
		$noidung = htmlspecialchars(addslashes(trim(@$_POST['noidung'])));			
		
	
	if($email==""){
		transfer("Email không được để trống", "trang-chu.html");		
	}
	if(q_ckemail($email)==0){
		transfer("Email không đúng định dạng", "trang-chu.html");		
	}
/*
	if($hoten==""){
		transfer("Họ tên không được để trống", "trang-chu.html");		
	}

	if($diachi==""){
		transfer("Địa chỉ không được để trống", "trang-chu.html");		
	}
	if($dienthoai==""){
		transfer("Điện thoại không được để trống", "trang-chu.html");		
	}		
	if($noidung==""){
		transfer("Nội dung không được để trống", "trang-chu.html");		
	}		
	*/
	$sql = "select id from #_newsletter_mailthanhvien where email='$email'";
	$d->query($sql);
	if($d->num_rows()>0){
		transfer("Email này đã đăng ký", "trang-chu.html");		
		return;	
	}
	$d->reset();
	$sql = "insert into #_newsletter_mailthanhvien ( email, stt,hienthi) value('$email',1,1)";
	if($d->query($sql)){	
		$_SESSION['email_dk']='1';
		
		include_once "./media/phpMailer/class.phpmailer.php";	
				$mail = new PHPMailer();
				$mail->IsSMTP(); // Gọi đến class xử lý SMTP
				$mail->Host       = $config_host; // tên SMTP server
				$mail->SMTPAuth   = true;                  // Sử dụng đăng nhập vào account
				$mail->Username   = $config_email; // SMTP account username
				$mail->Password   = $config_pass;  
		
				//Thiet lap thong tin nguoi gui va email nguoi gui
				$mail->SetFrom($config_email,$company['ten_vi']);
		
				//Thiết lập thông tin người nhận
				$mail->AddAddress($company['email'], $company['ten_vi']);
				//Thiết lập email nhận email hồi đáp
				//nếu người nhận nhấn nút Reply
				$mail->AddReplyTo($company['email'],$company['email']);
		
				/*=====================================
				 * THIET LAP NOI DUNG EMAIL
				*=====================================*/
		
				//Thiết lập tiêu đề
				$mail->Subject    = 'Khách hàng đã đăng ký nhận thông báo mới nhất!';
				$mail->IsHTML(true);
				//Thiết lập định dạng font chữ
				$mail->CharSet = "utf-8";	
		$body = 'Hi '. $company['ten_vi'].',<br>

			- Thư thông báo từ  website: '.$company['website'].' .<br>

			

			- Email: '.$email.' <br>
		
		
			
			- Truy cập trang Admin mục "Đăng ký nhận email thông báo" để cập nhật thông tin.
		
	

		';
		
		$mail->Body = $body;
	     $mail->Send();
		if($mail->Send()){
					$data['ten'] = 'Khách hàng có email <b>'.$_POST['txtnhanemail'].'</b> vừa đăng ký từ website.';
				$data['ngaytao'] = time();
				$d->setTable('thongbao');
				$d->insert($data);	
				
		transfer("Bạn đã đăng ký thành công!", "trang-chu.html");		
	}
	else	transfer("Hệ thống đang bận, xin quý khách vui lòng thử lại sau", "trang-chu.html");	
	
	}
?>