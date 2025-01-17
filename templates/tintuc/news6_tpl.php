   
<?php if($comall=="tintucall"){?>

   <div id="right">
               <div class="tieude_giua">
                  <div><?=$news['ten_vi']?></div>
                  <span></span>
               </div>
               <div class="box_container">
                  <div class="content">
                    <?=$news['noidung_vi']?>
                     <div class="addthis_native_toolbox"><b>Chia sẻ: </b></div>
                     <div class="othernews">
                        <div class="cactinkhac">Tin liên quan</div>
                        <ul class="khac">


                           <?php if($newskhac&&count($newskhac)>0){
                              foreach ($newskhac as $key => $v) {?>
                           <li><a href="<?=$v['tenkhongdau_vi']?>" title="<?=$v['ten_vi']?>"><?=$v['ten_vi']?></a> (<?=date('d.m.Y',$v['ngaytao'])?>)</li>

                        <?php } } ?>
                          
                        </ul>
                       
                     </div>
                     <!--.othernews-->
                  </div>
                  <!--.content-->
               </div>
               <!--.box_contai -->

</div>
<?php } else {?>

    <div id="right">
               <div class="tieude_giua">
                  <div>Hỗ trợ kỹ thuật</div>
                  <span></span>
               </div>
               <div class="box_container">
                  <div class="wap_box_new">



                     <?php if($news&&count($news)>0){
                        foreach ($news as $key => $v) {?>
                     <div class="box_news">
                        <a href="<?=$v['tenkhongdau_vi']?>" title="<?=$v['ten_vi']?>"><img src="thumb/170x130/1/<?=_upload_tinnho_l.$v['photo']?>" alt="<?=$v['ten_vi']?>" /></a>      
                        <h3><a href="<?=$v['tenkhongdau_vi']?>" title="<?=$v['ten_vi']?>"><?=$v['ten_vi']?></a></h3>
                        <div class="mota"></div>
                        <div class="clear"></div>
                     </div>
                     <?php }} ?>
                  </div>
                  <!---END .wap_box_new-->
                  <div class="clear"></div>
                  <div class="pagination"></div>
               </div>
               <!---END .box_container--> 
            </div>


<?php } ?>