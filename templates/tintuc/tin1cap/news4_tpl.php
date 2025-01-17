<div id="khungchinh_tong">
<div id="khungchinh_tong1">

 <script src="js/prefixfree.min.js"></script>

  <link rel="stylesheet" href="css/minimal3d.css">
  <section>

    <div class="cascade-slider_container" id="cascade-slider">
      <div class="cascade-slider_slides">
		
		
		<?php for($t1=0;$t1<count($news);$t1++){
				$v = $news[$t1];
		?>	
        <div class="cascade-slider_item">
          <h3> <a href="xay-dung-nha-dan-dung/<?=$v['tenkhongdau']?>-<?=$v['id']?>.htm"><?=catchuoi($v['ten'],$tu4)?></a></h3>
          <a href="xay-dung-nha-dan-dung/<?=$v['tenkhongdau']?>-<?=$v['id']?>.htm" ><img src="<?=_upload_congtrinh_l.$v['thumb']?>" alt="<?=$v['ten']?>"></a>
        </div>
        <?php }?>
      </div>

      <ol class="cascade-slider_nav">
	  <?php for($t2=0;$t2<count($news);$t2++){
				$v = $news[$t2];
		?>	
        <li class="cascade-slider_dot"></li>
	  <?php } ?>
      </ol>
	<div id="tieudechinh_trong">  <h1><?=$title_ttt?></h1></div>	
      <span class="cascade-slider_arrow cascade-slider_arrow-left" style=""  data-action="prev"></span>
      <span style=" " class="cascade-slider_arrow cascade-slider_arrow-right" data-action="next"></span>
    </div>
  </section>


  <script src="js/cascade-slider.js"></script>

  <script>
    $('#cascade-slider').cascadeSlider({
      
    });
  </script>
</div>		  
</div>	



