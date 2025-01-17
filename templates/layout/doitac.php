  
<?php 

      $d->reset();
   $sql_noibat = "select * from #_photo where  hienthi=1 and com='slideshow1' order by  stt asc, id desc ";

   $d->query($sql_noibat);

   $khachhang = $d->result_array(); 


?>

  <section>
               <div id="wrap-logo">
                  <div class="" id="logo-partne">
                     <div class="container">
                        <div class="row">
                           <div class="clearfix"></div>
                        </div>
                        <ul id="flexiselDemo3">


                                        <?php foreach ($khachhang as $v) {?>

                           <li class="wow fadeInUp" data-wow-offset="100" data-wow-duration="1" data-wow-delay="0s">
                              <div>
                                 <div class="inner-target"><a target="_blank" title="<?=$v['ten_vi']?>" href="<?=$v['link']?>"><img src="<?=_upload_hinhanh_l.$v['photo']?>" /></a></div>
                              </div>
                           </li>
                           <?php } ?>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
            </section>
            <script>
               $().ready(function(){
                 $("#flexiselDemo3").flexisel({
                  visibleItems:6,
                  animationSpeed: 1000,
                  autoPlay: 1,
                  autoPlaySpeed: 3000,            
                  pauseOnHover: true,
                  enableResponsiveBreakpoints: true,
                  
                });
               })
            </script> 