<div class="slider-wrapper relative custome-slide" id="slider-1483250841" >
                        <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal"
                           data-flickity-options='{
                           "cellAlign": "center",
                           "imagesLoaded": true,
                           "lazyLoad": 1,
                           "freeScroll": false,
                           "wrapAround": true,
                           "autoPlay": 5000,
                           "pauseAutoPlayOnHover" : true,
                           "prevNextButtons": true,
                           "contain" : true,
                           "adaptiveHeight" : true,
                           "dragThreshold" : 10,
                           "percentPosition": true,
                           "pageDots": true,
                           "rightToLeft": false,
                           "draggable": true,
                           "selectedAttraction": 0.1,
                           "parallax" : 0,
                           "friction": 0.6        }'
                           >
                           <?php foreach ($slide_show as $v) {?>
                           <div class="banner has-hover has-slide-effect slide-zoom-in" id="banner-911773482">
                              <div class="banner-inner fill">
                                 <div class="banner-bg fill" >
                                    <div class="bg fill bg-fill "></div>
                                 </div>
                                 <div class="banner-layers container">
                                    <div class="fill banner-link"></div>
                                    <div id="text-box-895046455" class="text-box banner-layer x0 md-x0 lg-x0 y50 md-y50 lg-y50 res-text">
                                       <div data-animate="fadeInUp">
                                          <div class="text-box-content text dark">
                                             <div class="text-inner text-left">
                                                <div id="text-2120030139" class="text">
                                                   <h3 class="uppercase"><strong><?=$v['ten_vi']?></strong></h3>
                                                  
                                                </div>
                                                <div class="is-divider divider clearfix" style="max-width:70px;height:5px;background-color:rgb(0, 174, 239);"></div>
                                                <div id="text-1565145803" class="text">
                                                 <?=$v['mota_vi']?>
                                                     
                                                </div>
                                                <div id="gap-1628918654" class="gap-element clearfix" style="display:block; height:auto;">
                                                   <style>
                                                      #gap-1628918654 {
                                                      padding-top: 30px;
                                                      }
                                                   </style>
                                                </div>
                                                <a href="<?=$v['link']?>" class="button alert is-shade box-shadow-3 box-shadow-5-hover lowercase"  style="border-radius:5px;">
                                                <span>Tìm hiểu thêm</span>
                                                <i class="icon-play" ></i></a>
                                             </div>
                                          </div>
                                       </div>
                                       <style>
                                          #text-box-895046455 {
                                          width: 50%;
                                          }
                                          #text-box-895046455 .text-box-content {
                                          font-size: 100%;
                                          }
                                       </style>
                                    </div>
                                 </div>
                              </div>
                              <div class="height-fix is-invisible"><img width="1600" height="592" src="<?=_upload_hinhanh_l.$v['photo']?>" class="attachment-original size-original" alt="" decoding="async" /></div>
                              <style>
                                 #banner-911773482 .bg.bg-loaded {
                                 background-image: url(<?=_upload_hinhanh_l.$v['photo']?>);
                                 }
                                 #banner-911773482 .ux-shape-divider--top svg {
                                 height: 150px;
                                 --divider-top-width: 100%;
                                 }
                                 #banner-911773482 .ux-shape-divider--bottom svg {
                                 height: 150px;
                                 --divider-width: 100%;
                                 }
                              </style>
                           </div>
                           <?php } ?>
                        </div>
                        <div class="loading-spin dark large centered"></div>
   </div>
      <section class="section section2 no-bottom" id="section_221537382">
                        <div class="bg section-bg fill bg-fill  bg-loaded" >
                        </div>
                        <div class="section-content relative">
                           <div class="row align-middle"  id="row-898350847">
                              <div id="col-1344756602" class="col cot1 medium-6 small-12 large-6"  >
                                 <div class="col-inner"  >
                                    <h3>Về chúng tôi</h3>
                                  
                                   <?=$gioithieutc['mota_vi']?>
                                    <a href="gioi-thieu" target="_self" class="button alert lowercase"  style="border-radius:10px;">
                                    <span>Tìm hiểu thêm</span>
                                    <i class="icon-angle-right" ></i></a>
                                 </div>
                                 <style>
                                    #col-1344756602 > .col-inner {
                                    padding: 0px 30px 0px 0px;
                                    }
                                 </style>
                              </div>
                              <div id="col-332443327" class="col cot2 medium-6 small-12 large-6"  >
                                 <div class="col-inner"  >
                                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1531560350">
                                       <div class="img-inner dark" >
                                          <img width="448" height="632" src="<?=_upload_tinnho_l.$gioithieutc['photo']?>" class="attachment-original size-original" alt="Giấy chứng nhận" decoding="async" loading="lazy" srcset="<?=_upload_tinnho_l.$gioithieutc['photo']?> 448w, <?=_upload_tinnho_l.$gioithieutc['photo']?> 213w" sizes="(max-width: 448px) 100vw, 448px" />                 
                                       </div>
                                       <style>
                                          #image_1531560350 {
                                          width: 100%;
                                          }
                                       </style>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <style>
                           #section_221537382 {
                           padding-top: 50px;
                           padding-bottom: 50px;
                           }
                           #section_221537382 .ux-shape-divider--top svg {
                           height: 150px;
                           --divider-top-width: 100%;
                           }
                           #section_221537382 .ux-shape-divider--bottom svg {
                           height: 150px;
                           --divider-width: 100%;
                           }
                        </style>
                     </section>
                     <section class="section section2" id="section_1360640561">
                        <div class="bg section-bg fill bg-fill  bg-loaded" >
                        </div>
                        <div class="section-content relative">
                           <div class="row"  id="row-2104630229">
                              <div id="col-558900948" class="col cot1 small-12 large-12"  >
                                 <div class="col-inner text-center"  >
                                    <h3 class="uppercase">Sản phẩm</h3>
                                 </div>
                              </div>
                           </div>
                           <div class="row row-small"  id="row-417101767">
                           <?php foreach ($dmcat as $key => $v) {?>
                              <div id="col-695501367" class="col cot2 medium-3 small-12 large-3"  >
                                 <div class="col-inner text-center"  >

                                    <?php if($key%2!=0){?>
                                       <div id="gap-151217106" class="gap-element clearfix" style="display:block; height:auto;">
      
                                       <style>
                                       #gap-151217106 {
                                         padding-top: 50px;
                                       }
                                       </style>
                                          </div>
                                    <?php } ?>
                                    <h4 class="uppercase text-h4">
                                       <?=$v['ten_vi']?>
                                    </h4>
                                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_328830819">
                                       <div class="img-inner image-cover dark" style="padding-top:100%;">
                                          <img width="773" height="800" src="<?=_upload_sanpham_l.$v['photo']?>" class="attachment-original size-original" alt="" decoding="async" loading="lazy" srcset="<?=_upload_sanpham_l.$v['photo']?> 773w, <?=_upload_sanpham_l.$v['photo']?> 290w, <?=_upload_sanpham_l.$v['photo']?> 768w" sizes="(max-width: 773px) 100vw, 773px" />                  
                                       </div>
                                       <style>
                                          #image_328830819 {
                                          width: 100%;
                                          }
                                       </style>
                                    </div>
                                    <p><?=$v['mota_vi']?></p>
                                 </div>
                              </div>
                           <?php } ?>
                           
                           </div>
                        </div>
                        <style>
                           #section_1360640561 {
                           padding-top: 0px;
                           padding-bottom: 0px;
                           }
                           #section_1360640561 .ux-shape-divider--top svg {
                           height: 150px;
                           --divider-top-width: 100%;
                           }
                           #section_1360640561 .ux-shape-divider--bottom svg {
                           height: 150px;
                           --divider-width: 100%;
                           }
                        </style>
                     </section>
                 <section class="section section2 no-bottom" id="section_858919509">
                        <div class="bg section-bg fill bg-fill  bg-loaded" >
                        </div>
                        <div class="section-content relative">
                           <div class="row align-bottom"  id="row-110031677">
                              <div id="col-922287566" class="col cot1 medium-5 small-12 large-5"  >
                                 <div class="col-inner"  >
                                    <h3><?=$motalydo['h1_vi']?></h3>
                                    <h2><?=$motalydo['h2_vi']?></h2>
                                    <?=$motalydo['mota_vi']?>
                                    <a href="dang-ky-tai-khoan" target="_self" class="button alert is-underline lowercase"  style="border-radius:10px;">
                                    <span>Mở tài khoản ngay</span>
                                    <i class="icon-angle-right" ></i></a>
                                 </div>
                              </div>
                              <div id="col-1882755191" class="col cot2 medium-7 small-12 large-7"  >
                                 <div class="col-inner"  >
                                    <div class="row row-small"  id="row-1526952484">
                                       <div id="col-1367537956" class="col small-12 large-12"  >
                                          <div class="col-inner"  >
                                             <h4><?=$motalydo['h3_vi']?></h4>
                                          </div>
                                       </div>
                                    <?php foreach ($lydo as $key => $v) {?>
                                       <div id="col-1950388332" class="col medium-6 small-12 large-6"  >
                                          <div class="col-inner"  >
                                             <div class="icon-box featured-box icon-box-left text-left"  >
                                                <div class="icon-box-img" style="width: 60px">
                                                   <div class="icon">
                                                      <div class="icon-inner" >
                                                         <img width="57" height="57" src="<?=_upload_tinnho_l.$v['photo']?>" class="attachment-medium size-medium" alt="" decoding="async" loading="lazy" />               
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="icon-box-text last-reset">
                                                   <h3><?=$v['ten_vi']?></h3>
                                                   <p><?=$v['mota_vi']?></p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    <?php } ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <style>
                           #section_858919509 {
                           padding-top: 50px;
                           padding-bottom: 50px;
                           }
                           #section_858919509 .ux-shape-divider--top svg {
                           height: 150px;
                           --divider-top-width: 100%;
                           }
                           #section_858919509 .ux-shape-divider--bottom svg {
                           height: 150px;
                           --divider-width: 100%;
                           }
                        </style>
                     </section>
                     <section class="section" id="section_1060327157">
                        <div class="bg section-bg fill bg-fill  " >
                        </div>
                        <div class="section-content relative">
                           <div class="row align-middle"  id="row-796742510">
                              <div id="col-636549774" class="col no-bottom medium-7 small-12 large-7"  >
                                 <div class="col-inner text-right dark"  >
                                    <h3><span style="color: #c4090f; font-size: 110%;">ĐĂNG KÝ NHẬN BẢN TIN CỦA CHÚNG TÔI</span></h3>
                                    <p>Đăng ký ngay để nhận bản tin của chúng tôi sớm nhất và nhanh nhất!</p>
                                 </div>
                              </div>
                              <div id="col-979796447" class="col no-bottom nhan-tin medium-5 small-12 large-5"  >
                                 <div class="col-inner"  >
                                    <div class="wpcf7 no-js" id="wpcf7-f229-p10-o1" lang="vi" dir="ltr">
                                       <div class="screen-reader-response">
                                          <p role="status" aria-live="polite" aria-atomic="true"></p>
                                          <ul></ul>
                                       </div>
                                       <form action="dang-ky-nhan-tin.html" method="post">
                                          
                                          <div class="flex-row form-flat medium-flex-wrap">
                                             <div class="flex-col flex-grow">
                                                <p><span class="wpcf7-form-control-wrap" data-name="email-50"><input size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" required placeholder="Nhập địa chỉ email*" value="" type="email" name="txtEmail" /></span>
                                                </p>
                                             </div>
                                             <div class="flex-col ml-half">
                                                <p><input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="Gửi" />
                                                </p>
                                             </div>
                                          </div>
                                          <div class="wpcf7-response-output" aria-hidden="true"></div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <style>
                           #section_1060327157 {
                           padding-top: 30px;
                           padding-bottom: 30px;
                           }
                           #section_1060327157 .section-bg.bg-loaded {
                           background-image: url(img/bg.jpg);
                           }
                           #section_1060327157 .ux-shape-divider--top svg {
                           height: 150px;
                           --divider-top-width: 100%;
                           }
                           #section_1060327157 .ux-shape-divider--bottom svg {
                           height: 150px;
                           --divider-width: 100%;
                           }
                        </style>
                     </section>
                     <section class="section section2" id="section_882887034">
                        <div class="bg section-bg fill bg-fill  bg-loaded" >
                        </div>
                        <div class="section-content relative">
                           <div class="row cot1"  id="row-1848897421">
                              <div id="col-2016993133" class="col small-12 large-12"  >
                                 <div class="col-inner text-center"  >
                                    <h3>TIN TỨC MỚI NHẤT</h3>
                                    <p>Bài viết, tin tức liên quan luôn được chúng tôi cập nhật</p>
                                    <div class="row large-columns-3 medium-columns-1 small-columns-1 slider row-slider slider-nav-reveal slider-nav-push"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>


                                    <?php foreach ($tinmoi as $key => $v) {?>
                                       <div class="col post-item" >
                                          <div class="col-inner">
                                             <a href="<?=$v['tenkhongdau_vi']?>" class="plain">
                                                <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                                   <div class="box-image" >
                                                      <div class="image-cover" style="padding-top:56.25%;">
                                                         <img width="300" height="169" src="<?=_upload_tin3cap_l.$v['photo']?>" class="attachment-medium size-medium wp-post-image" alt="" decoding="async" srcset="<?=_upload_tin3cap_l.$v['photo']?> 300w, <?=_upload_tin3cap_l.$v['photo']?> 1024w, <?=_upload_tin3cap_l.$v['photo']?> 768w, <?=_upload_tin3cap_l.$v['photo']?> 1200w" sizes="(max-width: 300px) 100vw, 300px" />                                                            
                                                      </div>
                                                   </div>
                                                   <div class="box-text text-center" >
                                                      <div class="box-text-inner blog-post-inner">
                                                         <h5 class="post-title is-large "><?=$v['ten_vi']?></h5>
                                                         <div class="is-divider"></div>
                                                         <p class="from_the_blog_excerpt "><?=$v['mota_vi']?> </p>
                                                      </div>
                                                   </div>
                                                   <div class="badge absolute top post-date badge-outline">
                                                      <div class="badge-inner">
                                                         <span class="post-date-day"><?=date('d',$v['ngaytao'])?></span><br>
                                                         <span class="post-date-month is-xsmall">Th<?=date('m',$v['ngaytao'])?></span>
                                                      </div>
                                                   </div>
                                                </div>
                                             </a>
                                          </div>
                                       </div>
                                    <?php } ?>
                                    </div>
                                    <a href="tin-tuc" target="_self" class="button primary"  style="border-radius:10px;">
                                    <span>Xem tin tức khác</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="row cot1"  id="row-799547644">
                              <div id="col-1562151707" class="col small-12 large-12"  >
                                 <div class="col-inner text-center"  >
                                    <h3>THÔNG BÁO</h3>
                                    <p>Các thông báo mới nhất luôn được chúng tôi cập nhật tới Quý Đối tác, Quý Khách hàng.</p>
                                    <div class="row large-columns-3 medium-columns-1 small-columns-1 slider row-slider slider-nav-reveal slider-nav-push"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                                          <?php foreach ($thongbao as $key => $v) {?>
                                       <div class="col post-item" >
                                          <div class="col-inner">
                                             <a href="<?=$v['tenkhongdau_vi']?>" class="plain">
                                                <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                                   <div class="box-image" >
                                                      <div class="image-cover" style="padding-top:56.25%;">
                                                         <img width="300" height="169" src="<?=_upload_tin3cap_l.$v['photo']?>" class="attachment-medium size-medium wp-post-image" alt="" decoding="async" srcset="<?=_upload_tin3cap_l.$v['photo']?> 300w, <?=_upload_tin3cap_l.$v['photo']?> 1024w, <?=_upload_tin3cap_l.$v['photo']?> 768w, <?=_upload_tin3cap_l.$v['photo']?> 1200w" sizes="(max-width: 300px) 100vw, 300px" />                                                            
                                                      </div>
                                                   </div>
                                                   <div class="box-text text-center" >
                                                      <div class="box-text-inner blog-post-inner">
                                                         <h5 class="post-title is-large "><?=$v['ten_vi']?></h5>
                                                         <div class="is-divider"></div>
                                                         <p class="from_the_blog_excerpt "><?=$v['mota_vi']?> </p>
                                                      </div>
                                                   </div>
                                                   <div class="badge absolute top post-date badge-outline">
                                                      <div class="badge-inner">
                                                         <span class="post-date-day"><?=date('d',$v['ngaytao'])?></span><br>
                                                         <span class="post-date-month is-xsmall">Th<?=date('m',$v['ngaytao'])?></span>
                                                      </div>
                                                   </div>
                                                </div>
                                             </a>
                                          </div>
                                       </div>
                                    <?php } ?>
                                    </div>
                                    <a href="tin-tuc" target="_self" class="button primary"  style="border-radius:10px;">
                                    <span>Xem tất cả thông báo</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <style>
                           #section_882887034 {
                           padding-top: 50px;
                           padding-bottom: 50px;
                           }
                           #section_882887034 .ux-shape-divider--top svg {
                           height: 150px;
                           --divider-top-width: 100%;
                           }
                           #section_882887034 .ux-shape-divider--bottom svg {
                           height: 150px;
                           --divider-width: 100%;
                           }
                        </style>
                     </section>