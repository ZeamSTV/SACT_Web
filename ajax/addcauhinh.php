
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
  

 @$id = $_POST['id'];

@$step=$_POST['step'];

$_SESSION['cauhinh'][$step]=$id;


$sql="select photo,ten_vi,id from #_product where id=".$id;
$d->query($sql);
$hinhsp=$d->fetch_array();

    

?>

<img src="<?=_upload_sanpham_l.$hinhsp['photo']?>">