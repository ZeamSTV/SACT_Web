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
                        background-image: url(<?=_upload_sanpham_l.$product_detail['photo2']?>);
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
                        background-image: url(<?=_upload_sanpham_l.$product_detail['photo2']?>);
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
<div class="row row-small" id="row-308256597">
   <div id="col-1932207386" class="col medium-9 small-12 large-9">
      <div class="col-inner">
         <div class="tabbed-content">
            <ul class="nav nav-tabs nav-uppercase nav-size-normal nav-left">
               <li class="tab active has-icon"><a href="#tab_giới-thiệu"><span>Giới thiệu</span></a></li>
               <li class="tab has-icon"><a href="#tab_Đặc-tả-hợp-đồng"><span>Đặc tả hợp đồng</span></a></li>
               <li class="tab has-icon"><a href="#tab_tiêu-chuẩn-chất-lượng"><span>Tiêu chuẩn chất lượng</span></a></li>
               <li class="tab has-icon"><a href="#tab_lịch-đáo-hạn"><span>Lịch đáo hạn</span></a></li>
            </ul>
            <div class="tab-panels">
               <div class="panel active entry-content" id="tab_giới-thiệu">
                  <?=$product_detail['mota_vi']?>
               </div>
               <div class="panel entry-content" id="tab_Đặc-tả-hợp-đồng">
                       <?=$product_detail['noidung_vi']?>
               </div>
               <div class="panel entry-content" id="tab_tiêu-chuẩn-chất-lượng">
                          <?=$product_detail['h1_vi']?>
               </div>
               <div class="panel entry-content" id="tab_lịch-đáo-hạn">
                       <?=$product_detail['h2_vi']?>
               </div>
            </div>
         </div>
      </div>
   </div>
      <?php include_once _template."layout/left.php"; ?>
</div>


<script type="text/javascript">
   
        

      jQuery('.entry-content table').each(function(){


            jQuery(this).wrap('<div style="overflow-x:auto;"></div>');


      })

</script>