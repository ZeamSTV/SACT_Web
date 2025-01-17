<div class="row row-large row-divided ">
 
  <?php include_once _template."layout/left.php"; ?>
   <div class="large-9 col medium-col-first">
      <article id="post-3995" class="post-3995 post type-post status-publish format-standard has-post-thumbnail hentry category-tat-toan-hop-dong-thong-bao category-thong-bao">
         <div class="article-inner ">
            <header class="entry-header">
               <div class="entry-header-text entry-header-text-top text-center">
               
                  <h1 class="entry-title"><?=$news['ten_vi']?></h1>
                  <div class="entry-divider is-divider small"></div>
               </div>
               <div class="entry-image relative">
                  <a href="<?=$v['tenkhongdau_vi']?>">
                  <img width="852" height="479" src="<?=_upload_tinnho_l.$news['photo']?>" class="attachment-large size-large wp-post-image" alt="" decoding="async" fetchpriority="high" srcset="<?=_upload_tinnho_l.$news['photo']?> 852w, <?=_upload_tinnho_l.$news['photo']?> 300w, <?=_upload_tinnho_l.$news['photo']?> 768w" sizes="(max-width: 852px) 100vw, 852px"></a>
               </div>
            </header>
            <div class="entry-content single-page">
               <?=$news['noidung_vi']?>
      
            </div>
         </div>
      </article>
 
   </div>
</div>
<style type="text/css">
   #content{
      padding: 30px 0;
   }
</style>