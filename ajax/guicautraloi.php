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
  


    @$traloi = $_POST['traloi'];
    @$iduser = $_POST['id_user'];
    @$idcauhoi = $_POST['idcauhoi'];

    $ngaytao=time();

    $d->reset();
    $sql="insert into table_traloi(traloi,id_cauhoi,id_user,hienthi,ngaytao,luotlike,role) values('$traloi','$idcauhoi','$iduser',0,'$ngaytao',0,1)";
    if($d->query($sql))
    {

        $data="Bạn đã gửi phản hồi thành công";
    }
    


echo $data;










?>