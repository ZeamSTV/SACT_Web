 

<?php 

  $d->reset();
  $sql="select ten_vi,tenkhongdau_vi,photo,gia,giacu,id,mota_vi,h2_vi from #_product where hienthi=1 and sale=1 order by stt asc, id desc";
  $d->query($sql);
  $spcoqua=$d->result_array();

?>

  <section id="muctrong">
  


      <div class="duongdan">
          <ul class="breadcrumb" >
            <li><i class="fa fa-home" aria-hidden="true" ></i><a style="padding-left:5px;" href="#">Trang chủ</a></li>
     
            <li><a class="active" >Danh sách khuyến mãi</a></li>
         </ul>

      </div>

      <div class="khungnoidung col-xs-12">
         
        
            <div class="tieudemuc">
              <span><?=$cat_ttt['ten_vi']?></span>
           </div>
           <div class="khungsanpham" >
             
                    <?php if(count($spcoqua)>0) {

                      foreach ($spcoqua as $key => $v) {?>
                      
                      <div class="col55 col-md-3 col-sm-4 col-xs-12">

                        <div class="item_sp">

                            <div class="imgsp">
                                <a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm"><img class="image-product-detail" src="thumb/220x220/2/<?=_upload_sanpham_l.$v['photo']?>"></a>
                            </div>
                            <div class="tensp">

                              <h3><a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm"><?=$v['ten_vi']?></a></h3>

                            </div>
                            <div class="giasp">
                                <span><?=($v['gia']!=0)?(number_format($v['gia'],0, ',', ',')." ₫"):'Liên hệ' ?></span>
                            </div>
                            <div class="themgiohang">
                              <a class="addcartindex" data-id="<?=$v['id']?>"><i class="fa fa-shopping-cart"></i> <span>Thêm vào giỏ</span></a>
                              <p class="fright btn-add-compare" title="So sánh">
                              <?php if(in_array($v['id'], $mangidss)) {?>
                                                <label><input type="checkbox" checked="checked" data-id="<?=$v['id']?>"><span>So sánh</span></label>

                                                <?php } else {?>

                                                        <label><input type="checkbox" data-id="<?=$v['id']?>"><span>So sánh</span></label>

                                                <?php } ?>
                                </p>
                            </div>

                        </div>

                      </div>
                    <?php }} ?>

              
           </div>
     </div>



</section>