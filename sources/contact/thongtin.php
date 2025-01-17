<?php  if(!defined('_source')) die("Error");		
	
	$title_bar = "Gửi thông tin - ".$title_bar;
	
	if(!empty($_POST)){
		
		$tensp=$_POST['txt_ten_sp_ttkh'];
		$masp=$_POST['txt_ma_sp_ttkh'];
		$giaban=$_POST['txt_gia_sp_ttkh'];
		$mamau=$_POST['txt_mamau_sp_ttkh'];
		$soluong=$_POST['txt_soluong_sp_ttkh'];
		$hoten=$_POST['txt_hoten_sp_ttkh'];	
		$diachi=$_POST['txt_diachi_sp_ttkh'];	
		$dienthoai=$_POST['txt_dienthoai_sp_ttkh'];	
		$email=$_POST['txt_email_sp_ttkh'];	
		$noidung=$_POST['txt_noidung_sp_ttkh'];	
		
		//validate dữ liệu
				
		if($giaban=='Liên hệ')
			$giaban = 0;
		if($giaban!=''){
			$giaban = str_replace(' VND','',$giaban);		
			$giaban = str_replace('.','',$giaban);
		}
	
		$tensp = trim(strip_tags($tensp));
		$masp = trim(strip_tags($masp));
		$giaban = trim(strip_tags($giaban));
		$mamau = trim(strip_tags($mamau));
		$soluong = trim(strip_tags($soluong));
		$hoten = trim(strip_tags($hoten));
		$dienthoai = trim(strip_tags($dienthoai));	
		$diachi = trim(strip_tags($diachi));	
		$email = trim(strip_tags($email));			
		$noidung = trim(strip_tags($noidung));			

		if (get_magic_quotes_gpc()==false) {
			$tensp = mysql_real_escape_string($tensp);
			$masp = mysql_real_escape_string($masp);
			$giaban = mysql_real_escape_string($giaban);
			$mamau = mysql_real_escape_string($mamau);
			$soluong = mysql_real_escape_string($soluong);
			$hoten = mysql_real_escape_string($hoten);
			$dienthoai = mysql_real_escape_string($dienthoai);
			$diachi = mysql_real_escape_string($diachi);
			$email = mysql_real_escape_string($email);
			$noidung = mysql_real_escape_string($noidung);						
		}
		
		$giaban = doubleval($giaban);
		$soluong = intval($soluong);
		
		$coloi=false;		
		
		
		if ($mamau == NULL) { 
			$coloi=true; $error_hoten = "Mã màu không được để trống <br />";
		} 
		if ($soluong == NULL || $soluong == 0) { 
			$coloi=true; $error_hoten = "Số lượng phải lớn hơn hoặc bằng 1 <br />";
		} 
		if ($hoten == NULL) { 
			$coloi=true; $error_hoten = "Họ và tên khách hàng không được để trống <br />";
		} 		
		if ($dienthoai == NULL) { 
			$coloi=true; $error_dienthoai = "Bạn chưa nhập số điện thoại<br />";
		}
		if ($diachi == NULL) { 
			$coloi=true; $error_diachi = "Bạn chưa nhập địa chỉ<br />";
		}	
		
		if ($email == NULL) { 
			$coloi=true; $error_email = "Bạn chưa nhập email<br />";
		}elseif (filter_var($email,FILTER_VALIDATE_EMAIL)==FALSE) { 
			$coloi=true; $error_email="Bạn nhập email không đúng<br />";
		}
		
		
	
		if($error_diachi!="")
			transfer($error_diachi, "trang-chu.html");
	
		if ($coloi==FALSE) {
			include_once "phpMailer/class.phpmailer.php";	
			$mail = new PHPMailer();
			$mail->IsSMTP(); // Gọi đến class xử lý SMTP
			$mail->Host       = $config_host; // tên SMTP server
			$mail->SMTPAuth   = true;                  // Sử dụng đăng nhập vào account
			$mail->Username   = $config_email; // SMTP account username
			$mail->Password   = $config_pass;
			
			
	
			//Thiet lap thong tin nguoi gui va email nguoi gui
			$mail->SetFrom($config_email,$hoten);
	
			//Thiết lập thông tin người nhận
			$mail->AddAddress($company['email'], $company['ten']);
			//Thiết lập email nhận email hồi đáp
			//nếu người nhận nhấn nút Reply
			$mail->AddReplyTo($email,$hoten);
	
			/*=====================================
			 * THIET LAP NOI DUNG EMAIL
			*=====================================*/
	
			//Thiết lập tiêu đề
			$mail->Subject    = "Thông tin đơn hàng - ".$company['ten'];
			$mail->IsHTML(true);
			//Thiết lập định dạng font chữ
			$mail->CharSet = "utf-8";	
	
			$body = '<table>';
			$body .= '
				<tr>
					<th colspan="2">&nbsp;</th>
				</tr>
				<tr>
					<th colspan="2">Thư liên hệ từ website <a href="http://'.$company['website'].'">'.$company['website'].'</a></th>
				</tr>
				<tr>
					<th colspan="2">&nbsp;</th>
				</tr>
				<tr>
					<th>Tên sản phẩm :</th><td>'.$tensp.'</td>
				</tr>
				<tr>
					<th>Mã sản phẩm :</th><td>'.$masp.'</td>
				</tr>
				<tr>
					<th>Giá bán :</th><td>'.(($giaban!=0)?(number_format($giaban,0, ',', '.')." VND"):"Liên hệ").'</td>
				</tr>
				<tr>
					<th>Mã màu :</th><td>'.$mamau.'</td>
				</tr>
				<tr>
					<th>Số lượng :</th><td>'.$soluong.'</td>
				</tr>
				<tr>
					<th>Họ tên :</th><td>'.$hoten.'</td>
				</tr>
				<tr>
					<th>Địa chỉ :</th><td>'.$diachi.'</td>
				</tr>
				<tr>
					<th>Điện thoại :</th><td>'.$dienthoai.'</td>
				</tr>
				<tr>
					<th>Email :</th><td>'.$email.'</td>
				</tr>				
				<tr>
					<th>Nội dung :</th><td>'.$noidung.'</td>
				</tr>';
			$body .= '</table>';
			
			$mail->Body = $body;
			if($mail->Send())
			transfer("Thông tin yêu cầu được gửi.<br>Cảm ơn.", "trang-chu.html");
			else
			 transfer("Xin lỗi quý khách.<br>Hệ thống bị lỗi, xin quý khách thử lại sau ít phút.", "trang-chu.html");
											
				
				
		}
	
	}
?>