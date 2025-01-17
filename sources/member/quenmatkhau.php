<?php	if(!defined('_source')) die("Error");

		if(!empty($_POST)){

	


			 $tk = htmlspecialchars(addslashes($_POST['emailquen']));	



	 				if(strpos($tk,'@'))
						{

							

							$sql = "select * from #_member where email='$tk'";
						}
						else
						{
							
							$sql = "select * from #_member where dienthoai='$tk'";
						}
				


					$d->query($sql);
					if($d->num_rows() == 1){
						$row = $d->fetch_array();
						if($row['hienthi']==1){	
							$pass_moi = q_chuoingaunhien(8);													
							$data['password2'] = md5($pass_moi);
							
							$d->setTable('member');
							$d->setWhere('id', $row['id']);
							if($d->update($data)){
								include_once "media/phpMailer/class.phpmailer.php";	
								$mail = new PHPMailer();
								$mail->IsSMTP(); // Gọi đến class xử lý SMTP
								$mail->Host       = $config_host; // tên SMTP server
								$mail->SMTPAuth   = true;                  // Sử dụng đăng nhập vào account
								$mail->Username   = $config_email; // SMTP account username
								$mail->Password   = $config_pass;  
						
								//Thiet lap thong tin nguoi gui va email nguoi gui
								$mail->SetFrom($config_email,$ten_cty);
						
								//Thiết lập thông tin người nhận
								$mail->AddAddress($row['email'], "Quý khách");
						
								//Thiết lập email nhận email hồi đáp
								//nếu người nhận nhấn nút Reply
								$mail->AddReplyTo($company['email'],$company['ten_vi']);
						
								/*=====================================
								 * THIET LAP NOI DUNG EMAIL
								*=====================================*/
						
								//Thiết lập tiêu đề
								$mail->Subject    = "Lấy lại mật khẩu";
								$mail->IsHTML(true);
								//Thiết lập định dạng font chữ
								$mail->CharSet = "utf-8";
								$body =
								'Xin chào,<br>
						
									- Bạn có 1 yêu cầu lấy lại mật khẩu từ website : '.$company['website'].' .<br>
									- Nếu bạn là người yêu cầu lấy lại mật khẩu, bạn cần click vào link sau: <a href="http://'.$config_url.'/index.php?com=xac-nhan-mat-khau&id='.$row['id'].'&pass='.md5($pass_moi).'">http://'.$config_url.'/index.php?com=xac-nhan-mat-khau&id='.$row['id'].'&pass='.md5($pass_moi).'</a> để mật khẩu mới có hiệu lực.<br>
									- Mật khẩu mới của bạn: <span style="color:#F00;">'.$pass_moi.'</span><br />
								Lưu ý: Sau khi đăng nhập, bạn nên thay đổi mật khẩu của mình thành 1 mật khẩu dễ nhớ nhất với bạn!<br />
								
								 Thân ái<br>
						
								 Website: '.$company['website'];
								$mail->Body = $body;
								if($mail->Send()) {						
									transfer("Một email chứa mật khẩu mới đã được gửi đến email của bạn! Xin kiểm tra lại email để lấy mật khẩu mới! Cảm ơn!", "trang-chu.html");	
								}else
									 transfer("Xin lỗi bạn, hệ thống đang bận, mong bạn quay lại sau ít phút.", "trang-chu.html");
													
							}
							transfer("Thay đổi mật khẩu không thành công!", "trang-chu.html");						
						}
						else
							transfer("Bạn cần kích hoạt tài khoản trước!","trang-chu.html");
					}
					else
						transfer("Email chưa được đăng ký, bạn vui lòng kiểm tra lại.", "trang-chu.html");
				



		}

?>