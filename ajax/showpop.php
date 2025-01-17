

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


        $d->reset();

    $sql_tintuc = "select link,photo,id,mota,ten_vi from #_photo where id=".$id." order by stt asc, id desc";

    $d->query($sql_tintuc);

    $khachhang = $d->fetch_array();




$src='thumb/300x300/1/'._upload_hinhanh_l.$khachhang['photo'];
$tenkh=$khachhang['ten_vi'];
$mota=$khachhang['mota'];
$result = array('src' => $src,'tenkh' => $tenkh,'mota' => $mota);

echo json_encode($result);

  
    



?>



