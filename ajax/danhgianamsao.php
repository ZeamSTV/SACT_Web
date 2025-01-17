<?php


	  session_start();
    error_reporting(E_ALL & ~E_NOTICE & ~8192);
    
    if(!isset($_SESSION['lang']))
    {
    $_SESSION['lang']='vi';
    }
    
    $lang=$_SESSION['lang'];
    
    @define ( '_lib' , '../admin/lib/');
    @define ( '_source' , '../sources/');
    include_once _lib."config.php";
    include_once _lib."constant.php";
    // require_once _source."lang_$lang.php";
    include_once _lib."functions.php";
      include_once _lib."tridepzai.php";
    include_once _lib."functions_giohang.php";
    include_once _lib."class.database.php";
    $d = new database($config['database']);
  

    @$idsp = $_POST['idsp'];
    @$iduser = $_POST['iduser'];
    @$star = $_POST['star'];
    @$tieude = $_POST['tieude'];
    @$noidung = $_POST['noidung'];

    $ngaytao=time();
    if($tieude!=''&&$noidung!='')
    {
        $sql="insert into table_comment(id_user,id_sp,title,mess,hienthi,ngaytao)  values ('$iduser','$idsp','$tieude','$noidung',0,'$ngaytao') ";
        $d->query($sql);
    }

    $d->reset();
    $sql="select * from table_rating where id_user='$iduser' and id_sp='$idsp' ";
     $d->query($sql);
    if($d->num_rows() == 1){

         $sql1="update table_rating set loai=$star,ngaytao='$ngaytao' where id_user='$iduser' and id_sp='$idsp' "   ;
           if($d->query($sql1))
        {
            $data="Cảm ơn bạn đã đánh giá sản phẩm, đánh giá sẽ hiển thị sau khi được duyệt";
        }

        else
        {
            $data="Đánh giá thất bại";
        }

    } 
    else
   
    {


        $sql1="insert into table_rating(id_sp,id_user,loai,ngaytao)  values ('$idsp','$iduser','$star','$ngaytao')";
        if($d->query($sql1))
        {
            $data="Cảm ơn bạn đã đánh giá sản phẩm, đánh giá sẽ hiển thị sau khi được duyệt";
        }

        else
        {
            $data="Đánh giá thất bại";
        }


    }







echo $data;

?>