     <div class="tieude_giua">
            <div>Sản phẩm nổi bật</div>
         </div>
         <div class="wap_item chay_i control_slick">



               <?php if($spnb&&count($spnb)>0){
                     foreach ($spnb as $key => $v) {?>
            <div>
               <div class="item item_i">
                  <p class="sp_img zoom_hinh hover_sang3"><a href="<?=$v['tenkhongdau_vi']?>" title="<?=$v['ten_vi']?>">
                     <img src="thumb/250x250/1/<?=_upload_sanpham_l.$v['photo']?>" alt="<?=$v['ten_vi']?>" /></a>
                  </p>
                  <h3 class="sp_name"><a href="<?=$v['tenkhongdau_vi']?>" title="<?=$v['ten_vi']?>" ><?=$v['ten_vi']?></a></h3>
               </div>
            </div>
           

         <?php }} ?>

         </div>