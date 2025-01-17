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
  


    @$noidung = $_POST['noidung'];
    @$iduser = $_POST['iduser'];
    @$idsp = $_POST['idsp'];

    $ngaytao=time();

    $d->reset();
    $sql="insert into table_hoidap(id_sp,id_user,cauhoi,hienthi,ngaytao,luotlike) values('$idsp','$iduser','$noidung',0,'$ngaytao',0)";
    if($d->query($sql))
    {

        $data="Bạn đã gửi thành công câu hỏi";
    }
    


echo $data;











?>