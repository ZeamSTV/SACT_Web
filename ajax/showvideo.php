
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
      include_once _lib."tridepzai.php";
    // require_once _source."lang_$lang.php";
    include_once _lib."functions.php";
    include_once _lib."functions_giohang.php";
    include_once _lib."class.database.php";
    $d = new database($config['database']);
  


$value=$_POST['value'];


?>
   <iframe width="560" height="315" src="https://www.youtube.com/embed/<?=$value?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>