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
  

    @$id = (int)$_POST['id'];


    $from = 'from #_product';


    $where = 'where hienthi=1 and noibat=1' ;
    if($id!=0) {
    $where.=' and id_cat1='.$id;
   }
    $d->reset();
    $sql = "select ten_vi,tenkhongdau_vi,id,gia,giacu,id_cat1,photo $from $where";
    $sql.= " order by stt asc, id desc";
    
    $sql .=" limit 0, 10";



     $d->query($sql);
    $product = $d->result_array();

    $data='';

    $data.='<div class="row row-product">';


    foreach ($product as $key => $v) {
         $d->reset();
                $sql="select mau from #_product_cat where com='cat1' and id=".$v['id_cat1'];
                $d->query($sql);
                $kichco=$d->fetch_array();

                $kc=explode(',', $kichco['mau']);

          $data.='  <li class="col2 col-md-4 col-sm-3 col-xs-6">';



                         
                             $data.='  <a href="'.$v['tenkhongdau_vi'].'-'.$v['id'].'.htm" title="'.$v['ten_vi'].'">';
                                $data.='      <div class="img-container">';
                                    $data.='     <img class="cate1944" width="130" height="130" src="thumb/'.$kc[0].'x'.$kc[1].'/1/'._upload_sanpham_l.$v['photo'].'" alt="'.$v['ten_vi'].'">';
                                    
                                    $data.='  </div>';
                                    $data.='  <p class="pName">'.$v['ten_vi'].'<span></span></p>';
                                   
                                     $data.='  <div class="pos-rela">';
                                  

                                           $data.='  <strong>'.number_format($v['gia'],0, ',', ',')." ₫".'</strong>';

                                          $data.='  <span class="linethough">'.number_format($v['giacu'],0, ',', ',')." ₫".'</span>';



                                        $data.='  <label class="cplb-disc">(-'.layphantram($v['gia'],$v['giacu']).'%)</label>';
                                     $data.='  </div>';
                                 
                                  $data.=' </a>';
                                  $data.=' <p class="rating-lst none-padding"><span><b>'.danhgiasaotrungbinh($v['id']).'</b>/5<i class="icondmx-star"></i></span><span class="sl-rating">'.tongnguoidanhgia($v['id']).' đánh giá</span></p>';

                      

                      


                 $data.=' </li>';

    }


  $data.='</div>';

echo $data;
?>

