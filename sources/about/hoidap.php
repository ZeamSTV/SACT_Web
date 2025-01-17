<?php if(!defined('_source')) die("Error");
     
        $d->reset();

        $sql= "select photo,link from #_photo where hienthi=1 and id=412 ";

        $d->query($sql);

        $bannermuc = $d->fetch_array();


$d->reset();

$sql="select * from #_ykien where hienthi=1 order by id desc ";

$d->query($sql);

$hoidap= $d->result_array();


    if(!empty($_POST)){


  if($_POST['name'])

    $name = htmlspecialchars(addslashes(trim(@$_POST['name'])));

  if($_POST['email'])

    $email = htmlspecialchars(addslashes(trim(@$_POST['email'])));

  if($_POST['dienthoai'])

    $dienthoai = htmlspecialchars(addslashes(trim(@$_POST['dienthoai'])));

  if($_POST['noidung'])

    $noidung = htmlspecialchars(addslashes(trim(@$_POST['noidung'])));

  
  $data['name']=$name;
  $data['email']=$email;
  $data['dienthoai']=$dienthoai;
  $data['noidung']=$noidung;
  $data['hienthi']=0;


      $d->setTable('ykien'); 

      if($d->insert($data)){


            transfer("Bạn đã đăng ký thành công", "hoi-dap.html");    

       }

          else  transfer("Hệ thống đang bận, xin quý khách vui lòng thử lại sau", "hoi-dap.html");  



    }





    $title_bar = "Hỏi đáp";		



?>