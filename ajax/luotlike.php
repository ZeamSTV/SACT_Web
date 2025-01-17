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



  @$id = $_POST['id'];


  $sql="update table_hoidap set luotlike=luotlike+1 where id=".$id;

  $d->query($sql);



  $d->reset();

  $sql="select luotlike from table_hoidap where id=".$id;
  $d->query($sql);
  $tonglike=$d->fetch_array();


  echo $tonglike['luotlike'];



?>