<?php	if(!defined('_source')) die("Error");


$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

switch($act){
	case "login":
		if(isset($_POST['btndangnhap1'])){			
			login();			
		}
		break;
	case "user-info":
		if(!isset($_SESSION['login1'])) transfer("Bạn không có quyền truy xuất vào đây!", "trang-chu.html");	
		if(isset($_POST['btntt'])){			
			info_user();			
		}
		break;
	case "doi-mat-khau":
		if(!isset($_SESSION['login1'])) transfer("Bạn không có quyền truy xuất vào đây!", "trang-chu.html");	
		if(isset($_POST['btnDn'])){			
			change_password();			
		}
		break;
	case "quen-mat-khau":
		if(isset($_POST['btnQMK'])){	
			
			forget_password($config_host,$config_email,$config_pass,$config_url,$company['ten'],$company['email'],$company['website']);			
		}
		break;
	case "xac-nhan-mat-khau":
		if(isset($_GET)){						
			xacnhan_password($_GET['id'],$_GET['pass']);			
		}
		break;
		
	case "logout":
		if(!isset($_SESSION['login1'])) transfer("Bạn không có quyền truy xuất vào đây!", "trang-chu.html");	
		logout();			
		break;
	
	
	default:
		$template = "index";
}
//Đăng nhập
function login(){
	global $d, $login_name;
	
	$email = htmlspecialchars(addslashes($_POST['emaildn']));
	$password = md5($_POST['passworddn']);


	
	$sql = "select * from #_member where email='$email' and password='$password'";
	$d->query($sql);
	if($d->num_rows() == 1){
		$row = $d->fetch_array();
		if($row['hienthi']==1){								
			$_SESSION[$login_name] = true;
				$_SESSION['login1']['email'] = $_POST['txtname'];
				$_SESSION['login1']['pass'] = $_POST['txtpass'];
				$_SESSION['login1']['id'] = $row['id'];
				$_SESSION['login1']['role'] = $row['role'];
				$_SESSION['login1']['ten'] = $row['ten'];

		
		
			transfer("Đăng nhập thành công","thong-tin.html");	
				
		}
		else
			transfer("Bạn cần kích hoạt tài khoản trước khi đăng nhập!","trang-chu.html");
	}
	transfer("Email hoặc mật khẩu không chính xác.", "dang-nhap.html");
}

//Thông tin cá nhân
function info_user(){
	
		global $d, $login_name;
		
	$email = htmlspecialchars(addslashes($_SESSION['login1']['email']));
	$id =$_SESSION['login1']['id'];	
	
	$sql = "select * from #_member where email='$email' and id=$id";
	$d->query($sql);
	if($d->num_rows() == 1){
		$row = $d->fetch_array();
		if($row['hienthi']==1){											
			$txthoten_dk = addslashes($_POST['hotentt']);
			$txtdienthoai_dk = addslashes($_POST['phonett']);
			// $gioitinh_dk = addslashes($_POST['gioitinh_dk']);
			$txtdiachi_dk = addslashes($_POST['diachitt']);
			// $ngaysinh = addslashes($_POST['ngaysinh']);												
		
					
			
			$txthoten_dk = htmlspecialchars($txthoten_dk);
			$txtdienthoai_dk = htmlspecialchars($txtdienthoai_dk);
	
			$txtdiachi_dk = htmlspecialchars($txtdiachi_dk);
			// $ngaysinh = htmlspecialchars($ngaysinh);
			
			$data['ten'] = $txthoten_dk;
			$data['dienthoai'] = $txtdienthoai_dk;
			// $data['sex'] = $gioitinh_dk;
			// $data['ngaysinh'] = $ngaysinh;
			$data['diachi'] = $txtdiachi_dk;
			
			$d->setTable('member');
			$d->setWhere('id', $row['id']);
			if($d->update($data))
				transfer("Thay đổi thông tin thành công!", "thong-tin-ca-nhan.html");	
			transfer("Thay đổi thông tin không thành công!", "thong-tin-ca-nhan.html");						
		}
		else
			transfer("Bạn cần kích hoạt tài khoản trước khi sử dụng tài khoản!","thong-tin-ca-nhan.html");
	}
	else
		transfer("Mật khẩu không chính xác.", "thong-tin-ca-nhan.html");
}

//Thay đổi mật khẩu
function change_password(){
	global $d, $login_name;
		
	$email = htmlspecialchars(addslashes($_SESSION['login1']['email']));
	$password_cu = md5($_POST['matkhaucu']);
	$password_moi = md5($_POST['matkhaumoi']);
	if($password_cu==$password_moi){
		$error11="Mật khẩu mới không được trùng với mật khẩu cũ.";
		transfer($error11, "trang-chu.html");
	}	
	
	$sql = "select * from #_member where email='$email' and password='$password_cu'";
	$d->query($sql);
	if($d->num_rows() == 1){
		$row = $d->fetch_array();
		if($row['hienthi']==1){														
			$data['password'] = $password_moi;
			
			$d->setTable('member');
			$d->setWhere('id', $row['id']);
			if($d->update($data)){
				$_SESSION[$login_name] = false;
				session_unset('login1');
				transfer("Thay đổi mật khẩu thành công! Bạn cần thực hiện đăng nhập lại tài khoản.", "trang-chu.html");	
			}
			transfer("Thay đổi mật khẩu không thành công!", "trang-chu.html");						
		}
		else
			transfer("Bạn cần kích hoạt tài khoản trước khi sử dụng tài khoản!","trang-chu.html");
	}
	else
		transfer("Mật khẩu cũ không chính xác.", "trang-chu.html");
}

//Quên mật khẩu
function forget_password($config_host,$config_email,$config_pass,$config_url,$ten_cty,$email_cty,$website_cty){
	global $d, $login_name;
	
	//Kiểm tra captcha
	//$captcha = $_POST['captcha_qmk'];
	
	//if(q_ckcaptcha($captcha)==0){
	//	$error11="Mã xác nhận không đúng!";
	//	transfer($error11, "trang-chu.html");
	//}
	
	 $email = htmlspecialchars(addslashes($_POST['txtemail_qmk']));	
	
	if($email==""){
		transfer("Email không được để trống!", "trang-chu.html");
	}
	else if(q_ckemail($email)==0){
		transfer("Email không đúng định dạng!", "trang-chu.html");
	}
	else{
	
		$sql = "select id,hienthi from table_member where email='$email'";

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
					$mail->AddAddress($email, "Quý khách");
			
					//Thiết lập email nhận email hồi đáp
					//nếu người nhận nhấn nút Reply
					$mail->AddReplyTo($email_cty,$ten_cty);
			
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
			
						- Bạn có 1 yêu cầu lấy lại mật khẩu từ website : '.$website_cty.' .<br>
						- Nếu bạn là người yêu cầu lấy lại mật khẩu, bạn cần click vào link sau: <a href="http://'.$config_url.'/index.php?com=dang-nhap&act=xac-nhan-mat-khau&id='.$row['id'].'&pass='.md5($pass_moi).'">http://'.$config_url.'/index.php?com=dang-nhap&act=xac-nhan-mat-khau&id='.$row['id'].'&pass='.md5($pass_moi).'</a> để mật khẩu mới có hiệu lực.<br>
						- Mật khẩu mới của bạn: <span style="color:#F00;">'.$pass_moi.'</span><br />
					Lưu ý: Sau khi đăng nhập, bạn nên thay đổi mật khẩu của mình thành 1 mật khẩu dễ nhớ nhất với bạn!<br />
					
					 Thân ái<br>
			
					 Website: '.$website_cty;
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
}

//Xác nhận thay đổi mật khẩu
function xacnhan_password($a,$b){
	global $d, $login_name;
		
	$id = intval($a);	
	$pass = htmlspecialchars(addslashes($b));	

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

}


function logout(){
	
		global $login_name1;
	$_SESSION[$login_name1] = false;
 	
	unset($_SESSION['login1']);
	
	transfer("Đăng xuất thành công", "trang-chu.html");

}
?>