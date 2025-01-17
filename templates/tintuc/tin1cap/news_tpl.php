<style type="text/css">
   #content{
      padding: 30px 0;
   }
</style>
<header class="archive-page-header">
   <div class="row">
   <div class="large-12 text-center col">
   <h1 class="page-title is-large uppercase">
      <?=$title_ttt?>
     </h1>
      </div>
   </div>
</header>
<div class="row row-large row-divided ">
   <div class="large-9 col">
      <div class="row large-columns-2 medium-columns- small-columns-1">


      <?php if($news&&count($news)>0){
         foreach ($news as $key => $v) {?>
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
      <?php }} ?>
         
      </div>

       <?php
      if($count_sp>$maxR)
      
       {
      
       ?>
   <div class="w-100" align="center"  >
      <div class="pagination">
         <?=$paging['paging']?>
      </div>
   </div>
   <?php
      }   
      
      ?>
     <!--  <ul class="page-numbers nav-pagination links text-center">
         <li><span aria-current="page" class="page-number current">1</span></li>
         <li><a class="page-number" href="https://sgmk.vn/thong-bao/page/2/">2</a></li>
         <li><a class="page-number" href="https://sgmk.vn/thong-bao/page/3/">3</a></li>
         <li><a class="page-number" href="https://sgmk.vn/thong-bao/page/4/">4</a></li>
         <li><span class="page-number dots">…</span></li>
         <li><a class="page-number" href="https://sgmk.vn/thong-bao/page/11/">11</a></li>
         <li><a class="next page-number" href="https://sgmk.vn/thong-bao/page/2/"><i class="icon-angle-right"></i></a></li>
      </ul> -->
   </div>
  <?php include_once _template."layout/left.php"; ?>
</div>