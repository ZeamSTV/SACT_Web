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

    include_once _lib."functions.php";
    include_once _lib."functions_giohang.php";
        include_once _lib."tridepzai.php";
    include_once _lib."class.database.php";
    $d = new database($config['database']);
  

    @$id = (int)$_GET['id'];


    $from = 'from #_product';


    $where = 'where hienthi=1 and noibat=1' ;
    if($id!=0) {
    $where.=' and id_cat='.$id;
   }
    $d->reset();
    $sql = "select *  $from $where";
    $sql.= " order by stt asc, id desc";
    




     $d->query($sql);
    $product = $d->result_array();

    $data='';


    $data.='<div class="row row-product">';
    foreach ($product as $key => $v) {
     

            $data.='<div class="col-product wow fadeInUpSmall col-md-3 col-6">';
      $data.='<div class="san-pham">';
         $data.=' <figure>
         <a href="'.$v['tenkhongdau_vi'].'" class="aspect-ratio-box">
         <img data-src="thumb/280x280/1/upload/sanpham/'.$v['photo'].'" alt="'.$v['ten_vi'].'" class="aspect-ratio-box-inside img-full loaded" src="thumb/280x280/1/upload/sanpham/'.$v['photo'].'" data-was-processed="true">
         </a>
      </figure>';
         $data.=' <div class="san-pham-content">
         <h2 class="san-pham-title"><a href="'.$v['tenkhongdau_vi'].'">'.$v['ten_vi'].'</a></h2>
         <div class="gia">
            <div class="gia-ban"><strong>'.(number_format($v['gia'],0, ',', ',')." VNĐ").'</strong></div>
         </div>
      </div>
   </div>
</div>';

    }
    $data.='</div>';

echo $data;
?>

