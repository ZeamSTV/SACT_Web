<?php	if(!defined('_source')) die("Error");

		if(!empty($_POST)){
				$urllogin=$_POST['urllogin'];
				$tk=htmlspecialchars(addslashes($_POST['emaildn']));
				$password = md5($_POST['passworddn']);

					if(strpos($tk,'@'))
						{

							

							$sql = "select * from #_member where email='$tk' and password='$password'";
						}
						else
						{
							
							$sql = "select * from #_member where dienthoai='$tk' and password='$password'";
						}

			

			$d->query($sql);
			if($d->num_rows() == 1){
				$row = $d->fetch_array();
				if($row['hienthi']==1){								
					$_SESSION[$login_name] = true;
						$_SESSION['login1']['email'] = $row['email'];
						$_SESSION['login1']['dienthoai'] = $row['dienthoai'];
						$_SESSION['login1']['pass'] = $_POST['txtpass'];
						$_SESSION['login1']['id'] = $row['id'];
						$_SESSION['login1']['role'] = $row['role'];
						$_SESSION['login1']['ten'] = $row['ten'];

				
					
					transfer("Đăng nhập thành công",'thong-tin-user.html');	
						
				}
				else
					transfer("Bạn cần kích hoạt tài khoản trước khi đăng nhập!","trang-chu.html");
			}
			transfer("Email hoặc mật khẩu không chính xác.", "trang-chu.html");
	}

?>