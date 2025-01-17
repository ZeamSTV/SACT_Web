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


 $sql="select noidung_vi from #_product_phu where hienthi=1 and com='ptgiaonhan' and id=".$id;
 $d->query($sql);
 $phivanchuyen=$d->fetch_array();

 if($phivanchuyen['noidung_vi']>0)
 {

 	$_SESSION['phivanchuyen']=$phivanchuyen['noidung_vi'];
 }
 else
 {
 	$_SESSION['phivanchuyen']=0;
 }

$_SESSION['id_vanchuyen']=$id;

$data='';


$data.=' <div class="txt_giatien"  >'.number_format(get_order_total(),0, ',', ',').' ₫</div>';



$result = array('phi' => number_format($_SESSION['phivanchuyen'],0, ',', ','),'datatien'=>$data);
echo json_encode($result);










 ?>