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





$id=$_POST['id'];



			$d->reset();
			$sqlcauhinh=" select * from #_product_cauhinh where id=".$id." order by stt asc, id desc";
			$d->query($sqlcauhinh);
			$cauhinh=$d->fetch_array();



$tensp=$cauhinh['ten'];

$giasp='';



                                        if($cauhinh['gia']!=0&&$cauhinh['giacu']!=0&&($cauhinh['gia']<$cauhinh['giacu'])) {
                                       $giasp.='   <span class="new-pr" id="getprice"><strong class="showPrice">'.number_format($cauhinh['gia'],0, ',', '.').'</strong> đ</span>';

                                          $giasp.=' <span class="old-pr"><strong class="showPriceold">'.number_format($cauhinh['giacu'],0, ',', '.').'</strong> đ</span>';
                                        }else {

                                                    $giasp.='   <span class="new-pr" id="getprice"><strong class="showPrice">'.number_format($cauhinh['gia'],0, ',', '.').'</strong> đ</span>';
                                           } 

                                         $giasp.='<p class="conhang"><i class="fa fa-check"></i>Còn hàng</p>';

$motasp=$cauhinh['mota'];

$cauhinhsp=$cauhinh['cauhinh'];


$noidungsp=$cauhinh['noidung'];





$result = array('tensp'=>$tensp,'giasp'=>$giasp,'motasp'=>$motasp,'cauhinhsp'=>$cauhinhsp,'noidungsp'=>$noidungsp);

echo json_encode($result);





?>