<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die('Eror');		
				
		$title_bar = "Liên hệ - ".$title_bar;					
		
		if(!empty($_POST)){
			/*
			$captcha = $_POST['captcha'];
		
			if(q_ckcaptcha($captcha)==0){
			$error11="Mã xác nhận không đúng!";
			transfer($error11, "lien-he.html");
			}
			*/
			
			include_once "media/phpMailer/class.phpmailer.php";	
			$mail = new PHPMailer();
			$mail->IsSMTP(); // Gọi đến class xử lý SMTP
			$mail->Host       = $config_host; // tên SMTP server
			$mail->SMTPAuth   = true;                  // Sử dụng đăng nhập vào account
			$mail->Username   = $config_email; // SMTP account username
			$mail->Password   = $config_pass;
			
			
	
			//Thiet lap thong tin nguoi gui va email nguoi gui
			$mail->SetFrom($config_email,$_POST['name']);
	
			//Thiết lập thông tin người nhận
			$mail->AddAddress($company['email'], $company['ten']);
			//Thiết lập email nhận email hồi đáp
			//nếu người nhận nhấn nút Reply
			$mail->AddReplyTo($_POST['email'],$_POST['name']);
	
			/*=====================================
			 * THIET LAP NOI DUNG EMAIL
			*=====================================*/
	
			//Thiết lập tiêu đề
			$mail->Subject    = $_POST['tieude']." - ".$company['ten'];
			$mail->IsHTML(true);
			//Thiết lập định dạng font chữ
			$mail->CharSet = "utf-8";	

			$body = '<table>';
			$body .= '
				<tr>
					<th colspan="2">&nbsp;</th>
				</tr>
				<tr>
					<th colspan="2">Thư yêu cầu tư vấn từ website: <a href="http://'.$company['website'].'">'.$company['website'].'</a></th>
				</tr>
				<tr>
					<th colspan="2">&nbsp;</th>
				</tr>
				<tr>
					<th>Họ tên :</th><td>'.$_POST['fullname_qc'].'</td>
				</tr>
				<tr>
					<th>Địa chỉ :</th><td>'.$_POST['area'].'</td>
				</tr>
				<tr>
					<th>Số điện thoại :</th><td>'.$_POST['number_qc'].'</td>
				</tr>
				<tr>
					<th>Email :</th><td>'.$_POST['email_qc'].'</td>
				</tr>
				
				<tr>
					<th>Tiêu đề :</th><td>'.$_POST['title_qc'].'</td>
				</tr>
				<tr>
					<th>Nội dung :</th><td>'.$_POST['content_qc'].'</td>
				</tr>';
			$body .= '</table>';
			
			$mail->Body = $body;
			if($mail->Send()){
				//Lưu vào thông báo
				$d->reset();
				$data = null;
				$data['ten'] = 'Khách hàng <b>'.$_POST['name'].'</b> mới gửi 1 mail vào email:'.$company["email"].' của công ty!';
				$data['ngaytao'] = time();
				$d->setTable('thongbao');
				$d->insert($data);
				
				transfer("Thông tin liên hệ đã được gửi. <br /> Cảm ơn!", "trang-chu.html");
			}
			else
			 transfer("Xin lỗi bạn. <br /> Hệ thống bị lỗi, bạn vui lòng thử lại sau ít phút.", "trang-chu.html");
		}
			
?>