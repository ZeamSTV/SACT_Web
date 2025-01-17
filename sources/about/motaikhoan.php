<?php
   @define ( '_lib' , './admin/lib/');
   @define ( '_template' , './templates/');
   include_once _lib."config.php";
   include_once _lib."functions.php";
   include_once _lib."q_functions.php";   //Các hàm bổ sung
   include_once _lib."class.database.php";
   $d = new database($config['database']);
   
if(!empty($_POST)){
   if($_POST['fullname'])
      $fullname = htmlspecialchars(addslashes(trim(@$_POST['fullname'])));

   
   if($_POST['birthday'])
      $birthday = htmlspecialchars(addslashes(trim(@$_POST['birthday'])));

   
   if($_POST['personal_email'])
      $personal_email = htmlspecialchars(addslashes(trim(@$_POST['personal_email'])));
   if($_POST['personal_address'])
      $personal_address = htmlspecialchars(addslashes(trim(@$_POST['personal_address'])));
   
   if($_POST['personal_phone'])
      $personal_phone = htmlspecialchars(addslashes(trim(@$_POST['personal_phone'])));         
   
   if($_POST['identify_type'])
      $identify_type = htmlspecialchars(addslashes(trim(@$_POST['identify_type'])));      

    if($_POST['identify_number'])
      $identify_number = htmlspecialchars(addslashes(trim(@$_POST['identify_number'])));         
      
   if($_POST['identify_date'])
      $identify_date = htmlspecialchars(addslashes(trim(@$_POST['identify_date'])));         
      
   if($_POST['identify_address'])
      $identify_address = htmlspecialchars(addslashes(trim(@$_POST['identify_address'])));      
   if($_POST['bank_number'])
      $bank_number = htmlspecialchars(addslashes(trim(@$_POST['bank_number'])));    
   if($_POST['bank_name'])
      $bank_name = htmlspecialchars(addslashes(trim(@$_POST['bank_name'])));   
      
    $file_name=q_tenhinh($_FILES['file']['identify_image_front']);  
     
   $file_name1=q_tenhinh($_FILES['file']['identify_image_back']);  


      if($photo = upload_image("identify_image_front", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF|webp|WEBP',_upload_member_l,$file_name)){
            
                                        $photox = $photo;
                                        
                                      
         }   
        
        if($photo1 = upload_image("identify_image_back", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF|webp|WEBP',_upload_member_l,$file_name1)){
            
                                        $photoy = $photo1;
                                        
                                        
                                      
         }      

   
   $sql = "select id from #_newsletter_mailthanhvien where email='$email'";
   $d->query($sql);
   if($d->num_rows()>0){
      transfer("Tài khoản nãy đã đăng ký", "trang-chu.html");      
      return;  
   }
   $d->reset();
   $sql = "insert into #_newsletter_mailthanhvien ( hoten,ngaysinh,email,diachi,dienthoai,loaicmnd,cmnd,ngaycap,noicap,tknh,nganhang,photo,photo1, stt,hienthi) value('$fullname','$birthday','$personal_email','$personal_address','$personal_phone','$identify_type','$identify_number','$identify_date','$identify_address','$bank_number','$bank_name','$photox','$photoy',1,1)";
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
      
 
      
            //Thiết lập tiêu đề
            $mail->Subject    = 'Khách hàng đã đăng ký mở tài khoản mới nhất!';
            $mail->IsHTML(true);
            //Thiết lập định dạng font chữ
            $mail->CharSet = "utf-8";  
      $body = 'Hi '. $company['ten_vi'].',<br>

         - Thư thông báo từ  website: '.$company['website'].' .<br>

         

         - Email: '.$email.' <br>
      
      
         
         - Truy cập trang Admin mục "Đăng ký tạo tài khoản" để cập nhật thông tin.
      
   

      ';
      
      $mail->Body = $body;
     
      if($mail->Send()){
               $data['ten'] = 'Khách hàng có email <b>'.$_POST['personal_email'].'</b> vừa đăng ký từ website.';
            $data['ngaytao'] = time();
            $d->setTable('thongbao');
            $d->insert($data);   
            
      transfer("Bạn đã đăng ký thành công!", "trang-chu.html");      
   }
   else  transfer("Hệ thống đang bận, xin quý khách vui lòng thử lại sau", "trang-chu.html");   
   
   }

}

?>