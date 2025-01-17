<?php



	 session_start();
	error_reporting(E_ALL & ~E_NOTICE & ~8192);
	
	
	
	@define ( '_lib' , '../admin/lib/');
	@define ( '_source' , '../sources/');




	include_once _lib."config.php";



$lang_arr = array("vi", "en","cn","hq");
if (isset($_GET['lang']) == true) {
    if (in_array($_GET['lang'], $lang_arr) == true) {
        $lang = $_GET['lang'];
        $_SESSION['lang'] = $lang;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
if (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else {

    $lang = $config["lang_defult"];
}

require_once _source . "language/lang_$lang.php";


	include_once _lib."constant.php";
	// require_once _source."lang_$lang.php";
	include_once _lib."functions.php";
    include_once _lib."ajax_phantrang.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."class.database.php";


	$d = new database($config['database']);
	

	



$per_page = 4;


if($_POST['page'])
{
    $page=$_POST['page'];
}
$start = ($page-1)*$per_page;
$where="hienthi=1 ";
if($_POST['idc'])
{
  $idc=$_POST['idc'];
  $where.=" and id_cat=$idc";
}
if($_POST['loai'])
{

  $loai=$_POST['loai'];

  if($loai==0)
  {
     $where.=" and spmoi=1";
  }
  else
  {

    $where.=" and sale=1";

  }


}

$sql_query = "select * FROM table_product where $where  limit $start,$per_page";
$d->query($sql_query);
$row=$d->result_array();


 ?>



<?php foreach ($row as $k=>$v) { ?>


    <?php if($k==0||$k==4){ ?>
                             <div class="canhleft col-md-3 col-sm-4 col-xs-12">

                            <?php } else if($k==3||$k==7) {?>

                              <div class="canhright col-md-3 col-sm-4 col-xs-12">

                            <?php } else {?>

                              <div class="col-md-3 col-sm-4 col-xs-12">


                            <?php } ?>

                                <div class="sanpham">
                                  <div class="nensp">

                                    <img src="img/khungbac.png">

                                  </div>
                                  <div class="iconkm">

                                    <img class="hvr hvr-pulse1" src="img/iconhot.png">

                                  </div>
                                  <div class="sanpham1">
                                    <div class="hinhsanpham">

                              <a href="san-pham/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm">    <img src="<?=_upload_sanpham_l.$v['photo']?>"></a>

                                    </div>

                                    <div class="linesp">

                                    <img src="img/linegiua.png">

                                    </div>

                                    <div class="tensp">

                                        <h3><a href="san-pham/<?=$v['tenkhongdau']?>-<?=$v['id']?>.htm"> <?=$v['ten_vi']?></a></h3>

                                    </div>
                                    <div class="giasp">

                                      <span><?=($v['gia']!=0)?(number_format($v['gia'],0, ',', '.')." VNĐ"):'<?=_lienhe?>' ?></span>

                                    </div>
                                    <div class="icondathang">
                                     <a href="index.php?command=add&productid=<?=$v['id']?>"> <img class="hvr hvr-push" src="img/dh.png"></a>
                                    </div>
                                  </div>

                                </div>

                             </div>


<?php } ?>