
<style type="text/css">
  
  .bannerdau
  {
    background: url(img/bgduan.png) no-repeat center;
    background-size: cover;
  }
</style>
<div class="bannerdau">


        <div class="container">


                <div class="motabanner">

                      <h3>Dự án</h3>
                      <h1>Công ty xây dựng chánh nghĩa</h1>
                </div>


        </div>


</div>


<div class="listmucduan">
  <ul class="tabs">

    <?php 
      if(count($cap1duan)>0) {

    foreach ($cap1duan as $key => $v) {?>

        <?php if($key==0) {?>

        <li class="tab-link current tab-<?=$key?>" data-tab="tab-<?=$key?>"><a><?=$v['ten_'.$lang]?></a>
           </li>
         <?php } else {?>
         <li class="tab-link  tab-<?=$key?>" data-tab="tab-<?=$key?>"><a><?=$v['ten_'.$lang]?></a>
           </li>
          <?php } ?>

    <?php } } ?>

  </ul>
</div>
<?php 
      if(count($cap1duan)>0) {

    foreach ($cap1duan as $key => $v) {



      ?>

        <?php if($key==0) {


      $d->reset();
      $sql="select * from #_congtrinh where hienthi=1 and id_cat=".$v['id']." order by stt asc, id desc";
      $d->query($sql);
      $dsduan=$d->result_array();



          ?>

          <div id="tab-<?=$key?>" class="tab-content current">


            <!--show du an-->


            <?php foreach ($dsduan as $key1 => $v1) {


                  $d->reset();
                  $sql1="select photo from #_congtrinh_photo where id_cat=".$v1['id'];
                  $d->query($sql1);
                  $hinhphoto=$d->result_array();
              ?>
                <div class="khungduan">


                      <div class="khungduan1">

                            <!-- slider tren -->

                                <div id="sync1<?=$v1['id']?>" class="owl-carousel owl-theme owlll">
                                   <div class="itemduan">
                                    
                                      <img src="<?=_upload_congtrinh_l.$v1['photo']?>">
                                  </div>


                                  <?php if(count($hinhphoto)>0) {

                                    foreach ($hinhphoto as $key2 => $v2) {?>
                                      <div class="itemduan">
                                    
                                        <img src="<?=_upload_congtrinh_l.$v2['photo']?>">
                                     </div>


                                  <?php }} ?>
                                  
                              
                                </div>




                            <!-- end slider tren -->


                            <div class="box-duan1" style="animation-delay: 550ms">

                            </div>

                            <div class="box-duan2" style="animation-delay: 550ms">
                                  <div class="container2">

                                         <!-- slider duoi-->

                                              <div id="sync2<?=$v1['id']?>" class="owl-carousel owl-theme owllll">
                                                   <div class="itemduan1" style="animation-delay: 550ms">
                                    
                                                        <img src="<?=_upload_congtrinh_l.$v1['photo']?>">
                                                    </div>


                                                    <?php if(count($hinhphoto)>0) {

                                                      foreach ($hinhphoto as $key2 => $v2) {?>


                                                        <?php if($key2==1){?>
                                                        <div class="itemduan1" style="animation-delay: 650ms">
                                                      
                                                          <img src="<?=_upload_congtrinh_l.$v2['photo']?>">
                                                       </div>

                                                     <?php } else {?>

                                                          <div class="itemduan1" style="animation-delay: 750ms">
                                                      
                                                          <img src="<?=_upload_congtrinh_l.$v2['photo']?>">
                                                       </div>

                                                     <?php } ?>


                                                    <?php }} ?>

                                               
                                              </div>

                                              <div class="motaduanduoi">


                                                      <ul>
                                                          
                                                            <li>- Tên dự án: <?=$v1['ten_'.$lang]?></li>
                                                            <li>- Số lượng căn hộ: <?=$v1['soluongcanho_'.$lang]?></li>
                                                            <li>- Chủ đầu tư: <?=$v1['chudautu_'.$lang]?></li>
                                                            <li>- Tình trạng: <?=$v1['tinhtrang_'.$lang]?></li>
                                                            <li>- Hạng mục thi công: <?=$v1['hangmucthicong_'.$lang]?></li>
                                                            <li>- Tư vấn giám sat: <?=$v1['tuvangiamsat_'.$lang]?></li>
                                                            <li>- Thời gian hoàn thành: <?=$v1['thoigianhoanthanh_'.$lang]?></li>
                                                      </ul>

                                              </div>

                                            <!-- end slider duoi-->
                                  </div>
                            </div>

                            <div class="box-duan3" style="animation-delay: 750ms">

                                    <span style="animation-delay: 800ms">dự án <?=$v['ten_'.$lang]?></span>
                                    
                                    <h3 style="animation-delay: 850ms"><?=$v1['ten_'.$lang]?></h3>
                            </div>
                      </div>

                      <div class="box-motatrai">
                            <!-- <span class="tt1">Hôm nay</span> -->
                            <span class="tt2" style="animation-delay: 550ms"><?=date('d/m/Y',$v1['ngaytao'])?></span>
                            <span class="mucduan" style="animation-delay: 650ms">dự án <?=$v['ten_'.$lang]?></span>
                            <h3 style="animation-delay: 750ms">Tổng quan dự án</h3>
                      </div>
                </div>

            <?php } ?>
            <!--show du an-->

          </div>
    <?php }else { 


      $d->reset();
      $sql="select * from #_congtrinh where hienthi=1 and id_cat=".$v['id']." order by stt asc, id desc";
      $d->query($sql);
      $dsduan=$d->result_array();


      ?>

      <div id="tab-<?=$key?>" class="tab-content ">
              
            <?php foreach ($dsduan as $key1 => $v1) {


                  $d->reset();
                  $sql1="select photo from #_congtrinh_photo where id_cat=".$v1['id'];
                  $d->query($sql1);
                  $hinhphoto=$d->result_array();
              ?>
                <div class="khungduan">


                      <div class="khungduan1">

                            <!-- slider tren -->

                                <div id="sync1<?=$v1['id']?>" class="owl-carousel owl-theme owlll">
                                   <div class="itemduan">
                                    
                                      <img src="<?=_upload_congtrinh_l.$v1['photo']?>">
                                  </div>


                                  <?php if(count($hinhphoto)>0) {

                                    foreach ($hinhphoto as $key2 => $v2) {?>
                                      <div class="itemduan">
                                    
                                        <img src="<?=_upload_congtrinh_l.$v2['photo']?>">
                                     </div>


                                  <?php }} ?>
                                  
                              
                                </div>




                            <!-- end slider tren -->


                            <div class="box-duan1" style="animation-delay: 550ms">

                            </div>

                            <div class="box-duan2" style="animation-delay: 550ms">
                                  <div class="container2">

                                         <!-- slider duoi-->

                                              <div id="sync2<?=$v1['id']?>" class="owl-carousel owl-theme owllll">
                                                   <div class="itemduan1" style="animation-delay: 550ms">
                                    
                                                        <img src="<?=_upload_congtrinh_l.$v1['photo']?>">
                                                    </div>


                                                    <?php if(count($hinhphoto)>0) {

                                                      foreach ($hinhphoto as $key2 => $v2) {?>


                                                        <?php if($key2==1){?>
                                                        <div class="itemduan1" style="animation-delay: 650ms">
                                                      
                                                          <img src="<?=_upload_congtrinh_l.$v2['photo']?>">
                                                       </div>

                                                     <?php } else {?>

                                                          <div class="itemduan1" style="animation-delay: 750ms">
                                                      
                                                          <img src="<?=_upload_congtrinh_l.$v2['photo']?>">
                                                       </div>

                                                     <?php } ?>


                                                    <?php }} ?>

                                               
                                              </div>

                                              <div class="motaduanduoi">


                                                      <ul>
                                                          
                                                            <li>- Tên dự án: <?=$v1['ten_'.$lang]?></li>
                                                            <li>- Số lượng căn hộ: <?=$v1['soluongcanho_'.$lang]?></li>
                                                            <li>- Chủ đầu tư: <?=$v1['chudautu_'.$lang]?></li>
                                                            <li>- Tình trạng: <?=$v1['tinhtrang_'.$lang]?></li>
                                                            <li>- Hạng mục thi công: <?=$v1['hangmucthicong_'.$lang]?></li>
                                                            <li>- Tư vấn giám sat: <?=$v1['tuvangiamsat_'.$lang]?></li>
                                                            <li>- Thời gian hoàn thành: <?=$v1['thoigianhoanthanh_'.$lang]?></li>
                                                      </ul>

                                              </div>

                                            <!-- end slider duoi-->
                                  </div>
                            </div>

                            <div class="box-duan3" style="animation-delay: 750ms">

                                    <span style="animation-delay: 800ms">dự án <?=$v['ten_'.$lang]?></span>
                                    
                                    <h3 style="animation-delay: 850ms"><?=$v1['ten_'.$lang]?></h3>
                            </div>
                      </div>

                      <div class="box-motatrai">
                            <!-- <span class="tt1">Hôm nay</span> -->
                            <span class="tt2" style="animation-delay: 550ms"><?=date('d/m/Y',$v1['ngaytao'])?></span>
                            <span class="mucduan" style="animation-delay: 650ms">dự án <?=$v['ten_'.$lang]?></span>
                            <h3 style="animation-delay: 750ms">Tổng quan dự án</h3>
                      </div>
                </div>

            <?php } ?>
            <!--show du an-->


       </div>



    <?php } ?>

<?php } } ?>








<script type="text/javascript">
    $('ul.tabs li').click(function(){

    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
  });
</script>