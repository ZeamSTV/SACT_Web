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

	$passworddk = addslashes($_POST['personal_password']);
	$passworddk = htmlspecialchars($passworddk);


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
  	$passworddk1= md5($passworddk);

   
   $sql = "select id from #_member where email='$email'";
   $d->query($sql);
   if($d->num_rows()>0){
      transfer("Tài khoản nãy đã đăng ký", "trang-chu.html");      
      return;  
   }
   $d->reset();
   $sql = "insert into #_member ( ten,ngaysinh,email,password,diachi,dienthoai,loaicmnd,cmnd,ngaycap,noicap,tknh,nganhang,photo,photo1, stt,hienthi) value('$fullname','$birthday','$personal_email','$passworddk1','$personal_address','$personal_phone','$identify_type','$identify_number','$identify_date','$identify_address','$bank_number','$bank_name','$photox','$photoy',1,1)";
   if($d->query($sql)){ 
      
            
      	transfer("Bạn đã đăng ký thành công!", "trang-chu.html");      
   }
   else {
   	transfer("Hệ thống đang bận, xin quý khách vui lòng thử lại sau", "trang-chu.html");   
   
   }

}

?>