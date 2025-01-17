<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die('Eror');		

				




		$title_bar = _lienhe;					

					

		if(!empty($_POST)){

			$captcha = $_POST['captcha'];

		

			if(q_ckcaptcha($captcha)==0){

			$error11="Mã xác nhận không đúng!";

			transfer($error11, "lien-he.html");

			}


			

			

			include_once "media/phpMailer/class.phpmailer.php";	

			$mail = new PHPMailer();

			$mail->IsSMTP(); // Gọi đến class xử lý SMTP

			$mail->Host       = $config_host; // tên SMTP server

			$mail->SMTPAuth   = true;                  // Sử dụng đăng nhập vào account

			$mail->Username   = $config_email; // SMTP account username

			$mail->Password   = $config_pass;

			

			

	

			//Thiet lap thong tin nguoi gui va email nguoi gui

			$mail->SetFrom($config_email,$_POST['txthoten']);

	

			//Thiết lập thông tin người nhận

			$mail->AddAddress($company['email'], $company['ten_vi']);

			//Thiết lập email nhận email hồi đáp

			//nếu người nhận nhấn nút Reply

			$mail->AddReplyTo($_POST['txtemail'],$_POST['txthoten']);

	

			/*=====================================

			 * THIET LAP NOI DUNG EMAIL

			*=====================================*/

	

			//Thiết lập tiêu đề

			$mail->Subject    ='THÔNG TIN LIÊN HỆ';

			$mail->IsHTML(true);

			//Thiết lập định dạng font chữ

			$mail->CharSet = "utf-8";	



			$body = '<table>';

			$body .= '

				<tr>

					<th colspan="2">&nbsp;</th>

				</tr>

				<tr>

					<th colspan="2">Thư liên hệ từ website: <a href="http://'.$company['website'].'">'.$company['website'].'</a></th>

				</tr>

				<tr>

					<th colspan="2">&nbsp;</th>

				</tr>

				<tr>

					<th>Họ tên :</th><td>'.$_POST['txthoten'].'</td>

				</tr>';



			
						
					$body .='	<tr>

					<th>Số điện thoại :</th><td>'.$_POST['txtdienthoai'].'</td>

				</tr>';
			
			


					$body .='		
					<tr>

					<th>Email :</th><td>'.$_POST['txtemail'].'</td>

				</tr>

					
				

				
				<tr>

					<th>Nội dung :</th><td>'.$_POST['txtnoidung'].'</td>

				</tr>';

			$body .= '</table>';

			

			$mail->Body = $body;

			if($mail->Send()){

				//Lưu vào thông báo

				$d->reset();

				$data = null;

				$data['ten'] = 'Khách hàng <b>'.$_POST['txthoten'].'</b> mới gửi 1 mail vào email:'.$company["email"].' của công ty!';

				$data['ngaytao'] = time();

				$d->setTable('thongbao');

				$d->insert($data);

				

				transfer("Thông tin liên hệ đã được gửi. <br /> Cảm ơn!", "lien-he");

			}

			else

			 transfer("Xin lỗi bạn. <br /> Hệ thống bị lỗi, bạn vui lòng thử lại sau ít phút.", "lien-he");

		}

			

?>