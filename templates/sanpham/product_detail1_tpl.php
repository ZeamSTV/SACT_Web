<link href="media/fancybox3/jquery.fancybox.css" rel="stylesheet"/>
<script src="media/fancybox3/jquery.fancybox.js"></script>
<script src="media/bxslider/jquery.bxslider.js"></script>
<link rel="stylesheet" href="media/bxslider/jquery.bxslider.css" />

<div class="content_trong width_100" >

         <nav class="width_100" aria-label="breadcrumb">
             <ol class="breadcrumb bg-none padding-l-0 padding-r-0">
                <li class="breadcrumb-item"><a href="" title="Trang chủ">Trang chủ</a></li>
               <li class="breadcrumb-item"><a href="san-pham.html" title="Sản phẩm">Sản phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                   <?=$title_ttt?>
                </li>
             </ol>
          </nav>

        <div class="block-content width_100">
            



                    <!-- noidung chitiet -->


                     
                        <div class="ftn-body-ctn">
                           <h1> <?=$title_ttt?> <span class="cauhinh">
                              <?php if(count($listcauhinh)>0){?>
                              <?=$listcauhinh[0]['ten']?>

                               <?php } ?>
                                 


                              </span></h1>

                           <div class="col-xs-12">

                           <div class="row">
                           <div class="image-detail-pr col-md-4 col-sm-5 col-xs-12 padding15">
                              <div class="f-pr-image-zoom">
                                 <ul class="bxslider">
                                    <li class="image-gallery">
                                       <a class="fancybox" data-fancybox-group="gallery" href="<?=_upload_sanpham_l.$product_detail['photo']?>" title="Hinh 1">
                                       <img src="thumb/300x300/2/<?=_upload_sanpham_l.$product_detail['photo']?>" class="img-responsive"/>
                                       </a>
                                    </li>


                              <?php foreach ($photo_sp as $key => $v) {?>
                                 <li class="image-gallery">
                                       <a class="fancybox" data-fancybox-group="gallery" href="<?=_upload_sanpham_l.$v['photo']?>" title="Hinh 1">
                                       <img src="thumb/300x300/2/<?=_upload_sanpham_l.$v['photo']?>" class="img-responsive"/>
                                       </a>
                                    </li>

                              <?php } ?>
                               
                               
                                 </ul>
                                 <div id="bx-pager">
                                    <ul class="owl-carousel">
                                       <li>
                                          <a data-slide-index="0" title="Hinh 1">
                                          <img src="<?=_upload_sanpham_l.$product_detail['photo']?>" class="img-responsive"/>
                                          </a>
                                       </li>

                              <?php foreach ($photo_sp as $key => $v) {?>   
                                       <li>
                                          <a data-slide-index="<?=$key+1?>" title="Hinh 2">
                                          <img src="<?=_upload_sanpham_l.$v['photo']?>" class="img-responsive"/>
                                          </a>
                                       </li>
                              <?php } ?>
                                    
                                    </ul>
                                 </div>
                              </div>
                           </div>
                          
                           <div class="pr-detail-info col-md-5 col-sm-7 col-xs-12 padding15">
                              <div class="info-price-detail width_100">
                                 <?php if(count($listcauhinh)>0 ){?>


                                          <?php if($listcauhinh[0]['gia']!=0&&$listcauhinh[0]['giacu']!=0&&($listcauhinh[0]['gia']<$listcauhinh[0]['giacu'])) {?>
                                          <span class="new-pr" id='getprice'><strong class="showPrice"><?=number_format($listcauhinh[0]['gia'],0, ',', '.')?></strong> đ</span>

                                          <span class="old-pr"><strong class="showPriceold"><?=number_format($listcauhinh[0]['giacu'],0, ',', '.')?></strong> đ</span>
                                          <?php }else {?>

                                                    <span class="new-pr" id='getprice'><strong class="showPrice"><?=number_format($listcauhinh[0]['gia'],0, ',', '.')?></strong> đ</span>
                                          <?php } ?>
                                    <?php } else {?>

                                               <?php if($product_detail['gia']!=0&&$product_detail['giacu']!=0&&($product_detail['gia']<$product_detail['giacu'])) {?>
                                          <span class="new-pr" id='getprice'><strong class="showPrice"><?=number_format($product_detail['gia'],0, ',', '.')?></strong> đ</span>

                                          <span class="old-pr"><strong class="showPriceold"><?=number_format($product_detail['giacu'],0, ',', '.')?></strong> đ</span>
                                          <?php }else {?>

                                                    <span class="new-pr" id='getprice'><strong class="showPrice"><?=number_format($product_detail['gia'],0, ',', '.')?></strong> đ</span>
                                          <?php } ?>
                                    <?php } ?>
                                 <p class="conhang"><i class="fa fa-check"></i>Còn hàng</p>
                              </div>
                          
                              <!--brandt-->
                              <div class="short-dt motacauhinh width_100">
                                    <?=$listcauhinh[0]['mota']?>
                              </div>
                              <div class="box-color width_100">


                                 <?php if(count($listcauhinh)>1) {?>
                                 <ul>

                                    <?php foreach ($listcauhinh as $key => $v) {?>
                                    <li class="padding5 classcauhinh choncauhinh <?=($key==0)?'active':''?>" data-id="<?=$v['id']?>" >
                                       <p>Cấu hình <?=$key+1?>:</p>
                                       <div class="option-ch " >
                                          <p><?=$v['ten']?></p>
                                          <span><?=number_format($v['gia'],0, ',', '.')?><sup>đ</sup></span>
                                          <label></label>
                                       </div>
                                    </li>

                                    <?php } ?>
                                 </ul>

                              <?php } ?>
                              </div>
            
                              <div class="box-sales width_100" style="margin-top: 10px;">
                                 <div class="tit-box-sales">Khuyến mãi</div>
                                 <div class="content-box-sales">
                                          <?=$product_detail['noidung_vi']?>
                                 </div>
                              </div>
                              <!--<div class="tragop">
                                 <p>Trả góp: Dell XPS 15 9560 2017 15.6 ... Giá từ: 2.573.293 <sup>đ</sup></p>
                                 </div>-->
                              <div class="box-addtocart">
                                 <a class="mn addcart" title="Mua ngay" rel="<?=$product_detail['id']?>"><img src="img/icon-add-cart.png"/>Mua ngay</a>
                                 <!--<a class="tg"  href="#"><img src="{$path_url}/images/icon-gop.png"/>Mua trả góp</a>-->
                                 <a class="gl" data-toggle="modal" data-target="#myModal"><img src="https://maytinhviet.vn/images/icon-phone.png"/> Gọi lại cho tôi</a>
                                 <div id="myModal" class="modal fade " role="dialog" >
                                    <div class="baomodal">
                                       <div class="wraptopboxlike">
                                          <div class="tit-login">Gọi lại cho tôi</div>
                                          <a   data-dismiss="modal" title="Close" class="close">X</a>
                                       </div>
                                       <div class="content-callback">
                                          <div class="item-pr-call">
                                             <img src="thumb/300x300/2/<?=_upload_sanpham_l.$product_detail['photo']?>"  class="img-responsive"/>
                                             <h3><?=$title_ttt?> 
                                              <?php if(count($listcauhinh)>0){?>
                                                <?=$listcauhinh[0]['ten']?>

                                                 <?php } ?>
                                                 </h3>
                                          </div>
                                          <div class="fr-callback">

                                            <form action="goi-cho-toi.html" method="post" id="frmgoichotoi">

                                            <input type="hidden" name="idgct" value="<?=$product_detail['id']?>">
                                             <input type="text" name="namegct" id="namegct" placeholder="Họ tên (bắt buộc)"/>
                                             <input type="text" name="phonegct" id="phonegct" placeholder="Điện thoại (bắt buộc)"/>
                                             <input type="text" name="emailgct" id="emailgct" placeholder="Email (bắt buộc)"/>
                                             <textarea name="contentgct" id="contentgct"  placeholder="Nội dung (bắt buộc)"></textarea>
                                             <button id="goichotoigct" type="submit" >Gửi</button>
                                            </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                          <div class="ftn-right-dt col-md-3 hidden-sm hidden-xs">

                           
                                 <div class="block-dt-pr">
                                    <div class="title-support">Hỗ trợ online</div>
                                   
                                    <div class="content-support width_100">
                                          <?=$company['noidung_vi']?>
                                    </div>
                                 </div>

                              
                           </div>
                            <div class="clearfix"></div>
                            <div class="content-detail-sp col-xs-12" style="position:relative">
                                 <div class="artseed-detail-content padding15">
                                    <div class="tab-cauhinh width_100">
                                       <div class="titl-tab"><span>cấu hình</span></div>
                                       <div class="content-tab-detail-product" id="cauhinhshowhide">
                                          
                                           <?=$listcauhinh[0]['cauhinh']?>
                                       </div>
                                       <div class="cl-info-dt">
                                          <a class="cauhinh-show">Thu gọn cấu hình</a>
                                          <a class="cauhinh-hide">Chi tiết cấu hình</a>
                                       </div>
                                    </div>
                                    <div class="titl-tab"><span>Mô tả</span></div>
                                    <div class="content-tab-detail-product" id="mota">
                                           <?=$listcauhinh[0]['noidung']?>
                                    </div>
                                    <div class="cl-info-dt">
                                       <a class="cl-show">Chi tiết bài viết</a>
                                       <a class="cl-hide">Thu gọn bài viết</a>
                                    </div>

                                    <div class="pr-related width_100">
                                      <div class="pr-title-block">
                                            <span>Sản phẩm liên quan</span>
                                           
                                        </div>
                                      </div>
                                      <!-- spn lien quan -->

                                          <div class="khungsp width_100">

                                        <div id="owl-splienquan" class="owl-carousel owl-theme">


                                          <?php foreach ($product_khac as $key => $v) {



                                            ?>

                                            <div class="item_owl_sp">
                                              <div class="item_sp">

                                                  <figure>
                                                      <a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm"><img style="width: auto;max-width: 100%" src="thumb/220x220/2/<?=_upload_sanpham_l.$v['photo']?>"></a>
                                                  </figure>
                                                  <figcaption>
                                                      <h3><a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm"><?=$v['ten_vi']?></a></h3>
                                                      <?php if(coutncauhinh($v['id'])>0) {?>
                                                        <p>Tùy chọn cấu hình: <?=coutncauhinh($v['id'])?></p>

                                                          <?php } ?>
                                                      <div class="price_sp">

                                                    


                                                            <?php if($v['giacu']!=0){?>
                                                              <span class="price_moi"><?=($v['gia']!=0)?(number_format($v['gia'],0, ',', '.')." đ"):'Liên hệ' ?></span>



                                                              <span class="price_cu"><?=($v['giacu']!=0)?(number_format($v['giacu'],0, ',', '.')." đ"):'Liên hệ' ?></span>

                                                            <?php } else {?>

                                                              <span class="price_moi"><?=($v['gia']!=0)?(number_format($v['gia'],0, ',', '.')." đ"):'Liên hệ' ?></span>
                                                            <?php } ?>

                                                          
                                                      </div>
                                                  </figcaption>

                                                  
                                                    <?php if(($v['gia']<$v['giacu'])&&$v['gia']!=0&&$v['giacu']!=0){
                                                          $giamgia=100-($v['gia']/$v['giacu']*100);
                                                      ?>

                                                      <div class="iconsale">
                                                      -<?=round($giamgia)?>%
                                                      </div>
                                                    <?php } ?>
                                                  
                                                <?php if($v['hot']==1) {?>
                                                  <span class="pos-label pr-new">Hot</span>
                                                <?php } ?>

                                              </div>
                                            </div>
                                          <?php } ?>
                                        </div>

                                    </div>

                                      <!-- end sp lien quan -->
                                    <div class="clearfix"></div>
                                 </div>
                                 <!--artseed-detail-content-->
                              </div>

                           </div>
                        </div>



                           <!--pr-detail-info-->
                         
                           <!--artseed-ftn-dt-->    
                         
                           <!--content-detail-sp-->      
                        </div>
             

                    <!-- end noidung chi tiết -->


        </div>


</div>

   

   <script type="text/javascript">
        $('.addcart').click(function(){


            var idsp=$(this).attr('rel');
            var id_cauhinh=$('.choncauhinh.active').attr('data-id');

               $.ajax({

                  type: "POST",

                  url: "ajax/addcart.php",

                 data: {'idsp':idsp,'id_cauhinh':id_cauhinh},

                 dataType: 'json',

                

                     success: function(result){


                           window.location.href = 'gio-hang.html';

              
                          
     
                     }

                  });
            

        });
         $('.choncauhinh').click(function(){

            var id=$(this).attr('data-id');

               if(!$(this).hasClass('active')){

                  $('.choncauhinh').removeClass('active');
                  $(this).addClass('active');

                        $.ajax({

                  type: "POST",

                  url: "ajax/thaydoicauhinh.php",

                 data: {'id':id},

                 dataType: 'json',

                

                     success: function(result){


                           $('.cauhinh').html(result.tensp);
                           $('.motacauhinh ').html(result.motasp);
                           $('#cauhinhshowhide').html(result.cauhinhsp);
                           $('#mota').html(result.noidungsp);
                           $('.info-price-detail').html(result.giasp);
     
                     }

                  });
               }


         })
   </script>
                  
  <script type="text/javascript">
        $(document).ready(function() {

                $('.fancybox').fancybox();
            
        });
    </script>  

    <script>
                  $(document).ready(function(){
                    $('.bxslider').bxSlider({ 
                        pagerCustom: '#bx-pager', 
                        auto: true, 
                        autoControls: true
                        });
                    });

    </script>

    <script type="text/javascript">

    $(document).ready(function() {  

          var carouselProTab = $("#bx-pager ul");

          carouselProTab.owlCarousel({

                           items : 5,

                

        loop:false,

        slideSpeed : 2000,

        nav: false,

        autoplay: true,

        dots:false,

        margin:0,



         responsive:{

               0:{

                items:3,

                 nav:false,

                loop:false

                 },

                 600:{

               items:3,

               nav:false,

                 loop:false

                },

           1000:{

                items:5,

                                                      nav:true,

                                                      loop:false

                                                   

                                                  }

                                              }



      });

              });

              

    

</script><script type="text/javascript">
   $(document).ready(function(){
      $('.cl-show').click(function(){
      $('#mota').css('height', 'auto');
      $(this).css('display', 'none');
      $('.cl-hide').css('display', 'block');
      
      });
      $('.cl-hide').click(function(){
      $('#mota').css('height', '400px');
      $(this).css('display', 'none');
      $('.cl-show').css('display', 'block');
      
      });
      
      
      $('.cauhinh-show').click(function(){
         $('#cauhinhshowhide').css('height', '320px');
         $(this).css('display', 'none');
         $('.cauhinh-hide').css('display', 'block');
      });
      $('.cauhinh-hide').click(function(){
      $('#cauhinhshowhide').css('height', 'auto');
      $(this).css('display', 'none');
      $('.cauhinh-show').css('display', 'block');
      
      });
   });

</script>

<script>


  $('#goichotoigct').click(function(){

         var frm = $('#frmgoichotoi');

                      var namegct = $("#namegct");
                        var phonegct = $("#phonegct");
                        var emailgct = $("#emailgct");
                        var contentgct = $("#contentgct");
          
                        var r = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                        if(namegct.val() == ''){
                          alert('Vui lòng nhập vào họ tên.');
                          namegct.focus();
                          return false;
                        }
                        else if(phonegct.val() == ''){
                          alert('Vui lòng nhập vào số điện thoại.');
                          phonegct.focus();
                          return false;
                        } 
                        else if(emailgct.val()==""){
                          alert('Vui lòng nhập địa chỉ email.');
                          emailgct.focus();
                          return false;
                        }
                        
                        else if(contentgct.val() == ''){
                          alert('Vui lòng nhập vào nội dung.');
                          contentgct.focus();
                          return false;
                        }

              frm.submit();

             return false;

  })




   </script>