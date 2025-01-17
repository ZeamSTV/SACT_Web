<?php if($com=='san-pham'){?>
<section class="section" id="section_852465756">
   <div class="bg section-bg fill bg-fill bg-loaded">
   </div>
   <div class="section-content relative">
      <div class="row row-collapse row-full-width" id="row-1385602535">
         <div id="col-733435112" class="col small-12 large-12">
            <div class="col-inner">
               <div id="page-header-1143005062" class="page-header-wrapper">
                  <div class="page-title hide-for-medium dark featured-title">
                     <div class="page-title-bg">
                        <div class="title-bg fill bg-fill parallax-active" data-parallax-container=".page-title" data-parallax-background="" data-parallax="-">
                        </div>
                        <div class="title-overlay fill"></div>
                     </div>
                     <div class="page-title-inner container align-center text-center flex-row-col medium-flex-wrap">
                        <div class="title-wrapper uppercase is-large flex-col">
                           <h1 class="entry-title mb-0">
                             Sản phẩm         
                           </h1>
                        </div>
                        <div class="title-content flex-col">
                           <div class="title-breadcrumbs pb-half pt-half"></div>
                        </div>
                     </div>
                     <style>
                        #page-header-1143005062 .page-title-inner {
                        min-height: 300px;
                        }
                        #page-header-1143005062 .title-bg {
                        background-image: url(img/weiland123.jpg);
                        }
                     </style>
                  </div>
               </div>
               <div id="page-header-720254283" class="page-header-wrapper">
                  <div class="page-title show-for-medium dark featured-title">
                     <div class="page-title-bg">
                        <div class="title-bg fill bg-fill parallax-active" data-parallax-container=".page-title" data-parallax-background="" data-parallax="-">
                        </div>
                        <div class="title-overlay fill"></div>
                     </div>
                     <div class="page-title-inner container align-center flex-row medium-flex-wrap">
                        <div class="title-wrapper flex-col text-left medium-text-center">
                           <h1 class="entry-title mb-0">
                             Sản phẩm        
                           </h1>
                        </div>
                        <div class="title-content flex-col flex-right text-right medium-text-center">
                           <div class="title-breadcrumbs pb-half pt-half"></div>
                        </div>
                     </div>
                     <style>
                        #page-header-720254283 .page-title-inner {
                        min-height: 150px;
                        }
                        #page-header-720254283 .title-bg {
                        background-image: url(img/weiland123.jpg);
                        }
                     </style>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <style>
      #section_852465756 {
      padding-top: 0px;
      padding-bottom: 0px;
      }
      #section_852465756 .ux-shape-divider--top svg {
      height: 150px;
      --divider-top-width: 100%;
      }
      #section_852465756 .ux-shape-divider--bottom svg {
      height: 150px;
      --divider-width: 100%;
      }
   </style>
</section>
<div class="row" id="row-757144722">
   <div id="col-2016503614" class="col small-12 large-12">
      <div class="col-inner">
         <div class="row" id="row-1562809190">

         <?php foreach ($cat_main as $key => $v) {?>
            <div id="col-1529814311" class="col medium-6 small-6 large-6">
               <div class="col-inner">
                  <div class="box has-hover   has-hover box-overlay dark box-text-middle">
                     <div class="box-image">
                        <div class="image-zoom image-cover" style="padding-top:75%;">
                           <img width="512" height="314" src="<?=_upload_sanpham_l.$v['photo']?>" class="attachment-original size-original" alt="Nông sản" decoding="async" fetchpriority="high" srcset="<?=_upload_sanpham_l.$v['photo']?> 512w, <?=_upload_sanpham_l.$v['photo']?> 300w" sizes="(max-width: 512px) 100vw, 512px">           
                           <div class="overlay" style="background-color:rgba(0, 0, 0, 0.5)"></div>
                        </div>
                     </div>
                     <div class="box-text text-center">
                        <div class="box-text-inner">
                           <div id="text-759682190" class="text">
                              <p style="text-align: center;"><strong><a href="<?=$v['tenkhongdau_vi']?>"><?=$v['ten_vi']?></a>&nbsp;</strong></p>
                              <style>
                                 #text-759682190 {
                                 font-size: 2rem;
                                 }
                              </style>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <?php } ?>
          
         </div>
      </div>
   </div>
</div>
<?php } else {?>

<section class="section" id="section_852465756">
   <div class="bg section-bg fill bg-fill bg-loaded">
   </div>
   <div class="section-content relative">
      <div class="row row-collapse row-full-width" id="row-1385602535">
         <div id="col-733435112" class="col small-12 large-12">
            <div class="col-inner">
               <div id="page-header-1143005062" class="page-header-wrapper">
                  <div class="page-title hide-for-medium dark featured-title">
                     <div class="page-title-bg">
                        <div class="title-bg fill bg-fill parallax-active" data-parallax-container=".page-title" data-parallax-background="" data-parallax="-">
                        </div>
                        <div class="title-overlay fill"></div>
                     </div>
                     <div class="page-title-inner container align-center text-center flex-row-col medium-flex-wrap">
                        <div class="title-wrapper uppercase is-large flex-col">
                           <h1 class="entry-title mb-0">
                             <?=$title_ttt?>            
                           </h1>
                        </div>
                        <div class="title-content flex-col">
                           <div class="title-breadcrumbs pb-half pt-half"></div>
                        </div>
                     </div>
                     <style>
                        #page-header-1143005062 .page-title-inner {
                        min-height: 300px;
                        }
                        #page-header-1143005062 .title-bg {
                        background-image: url(img/weiland123.jpg);
                        }
                     </style>
                  </div>
               </div>
               <div id="page-header-720254283" class="page-header-wrapper">
                  <div class="page-title show-for-medium dark featured-title">
                     <div class="page-title-bg">
                        <div class="title-bg fill bg-fill parallax-active" data-parallax-container=".page-title" data-parallax-background="" data-parallax="-">
                        </div>
                        <div class="title-overlay fill"></div>
                     </div>
                     <div class="page-title-inner container align-center flex-row medium-flex-wrap">
                        <div class="title-wrapper flex-col text-left medium-text-center">
                           <h1 class="entry-title mb-0">
                            <?=$title_ttt?>     
                           </h1>
                        </div>
                        <div class="title-content flex-col flex-right text-right medium-text-center">
                           <div class="title-breadcrumbs pb-half pt-half"></div>
                        </div>
                     </div>
                     <style>
                        #page-header-720254283 .page-title-inner {
                        min-height: 150px;
                        }
                        #page-header-720254283 .title-bg {
                        background-image: url(img/weiland123.jpg);
                        }
                     </style>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <style>
      #section_852465756 {
      padding-top: 0px;
      padding-bottom: 0px;
      }
      #section_852465756 .ux-shape-divider--top svg {
      height: 150px;
      --divider-top-width: 100%;
      }
      #section_852465756 .ux-shape-divider--bottom svg {
      height: 150px;
      --divider-width: 100%;
      }
   </style>
</section>
<section class="section" id="section_952970597">
   <div class="bg section-bg fill bg-fill bg-loaded">
   </div>
   <div class="section-content relative">
      <div class="row row-small" id="row-1709763057">
         <div id="col-738730648" class="col medium-9 small-12 large-9">
            <div class="col-inner">
               <div class="row row-small" id="row-1572461862">



               <?php if($product&&count($product)>0){
                  foreach ($product as $key => $v) {?>
                  <div id="col-285346088" class="col medium-4 small-12 large-4">
                     <div class="col-inner">
                        <div class="box has-hover   has-hover box-overlay dark box-text-middle">
                           <div class="box-image">
                              <div class="image-overlay-remove-50 image-cover" style="padding-top:100%;">
                                 <img width="1024" height="768" src="<?=_upload_sanpham_l.$v['photo']?>" class="attachment-original size-original" alt="" decoding="async" fetchpriority="high" srcset="<?=_upload_sanpham_l.$v['photo']?> 1024w, <?=_upload_sanpham_l.$v['photo']?> 300w, <?=_upload_sanpham_l.$v['photo']?> 768w" sizes="(max-width: 1024px) 100vw, 1024px">          
                                 <div class="overlay" style="background-color:rgba(0, 0, 0, 0.5)"></div>
                              </div>
                           </div>
                           <div class="box-text text-center">
                              <div class="box-text-inner">
                                 <div id="text-2973872013" class="text">
                                    <p style="text-align: center;"><a href="<?=$v['tenkhongdau_vi']?>"><strong><?=$v['ten_vi']?></strong></a></p>
                                    <style>
                                       #text-2973872013 {
                                       font-size: 1.5rem;
                                       }
                                    </style>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php }} ?>



               </div>
            </div>
         </div>
         <?php include_once _template."layout/left.php"; ?>
      </div>
   </div>
   <style>
      #section_952970597 {
      padding-top: 30px;
      padding-bottom: 30px;
      }
      #section_952970597 .ux-shape-divider--top svg {
      height: 150px;
      --divider-top-width: 100%;
      }
      #section_952970597 .ux-shape-divider--bottom svg {
      height: 150px;
      --divider-width: 100%;
      }
   </style>
</section>
<?php } ?>