

<?php if($_REQUEST['idc']!='') {?>


   <div id="noidungchinh">

            <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs" style="margin-bottom:0">
                      <a href="" title="Back to the frontpage"><i class="fa fa-home"></i> Trang chủ</a>
                      
                                                  <span aria-hidden="true"> › </span>
                         <a href="tin-tuc.html">Tin tức</a>
                                                 <span aria-hidden="true"> › </span>
                         <span><?=$news['ten_vi']?></span>

                        
          </nav>
          <div class="noidungbaiviet noidungbaiviet1">


              
                <div class="content_wrap">
                    <h1 class="tieudedetail"> <?=$news['ten_vi']?></h1>
                     <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> <?=date('M, d Y H:i:s A',$news['ngaytao'])?> - <i class="fa fa-eye" aria-hidden="true"> </i> <?=$news['luotxem']?> </div>
                     <?=$news['noidung_vi']?>
                     <div class="tt_top" style="    margin-top: 20px;
                font-size: 20px;
          font-family: RobotoMedium;margin-bottom: 10px;"><h3>Các tin khác</h3></div>

                  <?php foreach ($newskhac as $key => $v) {?>
                  <div style="padding-left:10px; height:auto;"><a href="tin-tuc/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html" style="text-decoration:none;"><img style="margin:0" src="img/sao.png" border="0">&nbsp;&nbsp;<span style="font-size:14px; color:#666;"><?=$v['ten_vi']?></span></a></div>

                  <?php } ?>
                </div>
                
           


          </div>
  


   </div> 


  
  


<?php } else {?>

<div id="noidungchinh">


  
        <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs" style="margin-bottom:0">
                      <a href="" title="Back to the frontpage"><i class="fa fa-home"></i> Trang chủ</a>
                      
                                                  <span aria-hidden="true"> › </span>
                         <span>Tin tức</span>

                        
        </nav>

        <div class="noidungbaiviet">



            <!-- list congtrinh-->
      <?php $dem=0;  

      foreach ($news as $k=> $v) {

          

        ?>


          <?php if($dem==0){?>

            <div class="coldm col-md-6 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="sanphamdm">
                            <div class="sanphamdm1" style=" background: #ededed;">
                              <div class="hinhspdanhmuc col-md-5 col-sm-6 col-xs-12">
                                  <a href="tin-tuc/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><img src="thumb/200x200/1/<?=_upload_tinnho_l.$v['photo']?>"></a>
                              </div>
                              <div class="descdm col-md-7 col-sm-6 col-xs-12">

                             

                                      <h3><a href="tin-tuc/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_'.$lang]?></a></h3>
                                      <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> <?=date('M, d Y',$v['ngaytao'])?> </div>

                                      <div class="desc_cont">

                                          <?=catchuoi($v['mota_'.$lang],130)?>
                                      </div>
                                 

                              </div>

                            </div>

                        </div>

                      </div>

                </div>


                <?php $dem++; } else if($dem==3){?>
                <div class="coldm col-md-6 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="sanphamdm">
                            <div class="sanphamdm1" style=" background: #ededed;">
                              <div class="hinhspdanhmuc col-md-5 col-sm-6 col-xs-12">
                                  <a href="tin-tuc/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><img src="thumb/200x200/1/<?=_upload_tinnho_l.$v['photo']?>"></a>
                              </div>
                              <div class="descdm col-md-7 col-sm-6 col-xs-12">

                             

                                      <h3><a href="tin-tuc/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_'.$lang]?></a></h3>
                                      <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> <?=date('M, d Y',$v['ngaytao'])?> </div>

                                      <div class="desc_cont">

                                          <?=catchuoi($v['mota_'.$lang],130)?>
                                      </div>
                                 

                              </div>

                            </div>

                        </div>

                      </div>

                </div>

                <?php 

                $dem=0;

                } else {?>

                <div class="coldm col-md-6 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="sanphamdm">
                            <div class="sanphamdm1" >
                              <div class="hinhspdanhmuc col-md-5 col-sm-6 col-xs-12">
                                  <a href="tin-tuc/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><img src="thumb/200x200/1/<?=_upload_tinnho_l.$v['photo']?>"></a>
                              </div>
                              <div class="descdm col-md-7 col-sm-6 col-xs-12">

                             

                                      <h3><a href="tin-tuc/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_'.$lang]?></a></h3>
                                      <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> <?=date('M, d Y',$v['ngaytao'])?> </div>

                                      <div class="desc_cont">

                                          <?=catchuoi($v['mota_'.$lang],130)?>
                                      </div>
                                 

                              </div>

                            </div>

                        </div>

                      </div>

                </div>

                <?php

              $dem++; 

                 } ?>


          <?php   } ?>
            <!-- end -->


        </div>

    


</div>


<?php } ?>