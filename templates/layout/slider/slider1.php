<?php
    $d->reset();

    $sql = "select photo,mota_vi,ten_vi,link from #_photo where com='slideshow' and hienthi=1 order by stt asc,id desc";

    $d->query($sql);

    $slide_show = $d->result_array();   

?>

<section class="w-100" id="slideshow-n">
      

<div class="box-slide">

  <div class="slider-wrapper theme-default">
    <div id="slider-main" class="nivoSlider">
        <?php foreach ($slide_show as $v) {?>
            <a href="<?=$v['link']?>" target="_blank" title=""><img src="thumb/1366x461/1/<?=_upload_hinhanh_l.$v['photo']?>" data-thumb="<?=_upload_hinhanh_l.$v['photo']?>" alt=""/> </a>
       <?php } ?>

          </div>
  </div>
  
</div>

<!-- Begin Slider --> 
<script type="text/javascript" src="media/nivoslider/jquery.nivo.slider.js"></script> 
<script type="text/javascript">
        $(document).ready(function(){
            $('#slider-main').nivoSlider({
                effect: 'random',
                slices: 15,
                boxCols: 8,
                boxRows: 4,
                animSpeed: 2000,
                pauseTime: 3500,
                startSlide: 0,
                directionNav: true,
                controlNav: true,
                controlNavThumbs: false,
                pauseOnHover: true,
                manualAdvance: false,
                prevText: 'Prev',
                nextText: 'Next',
                randomStart: false,
                beforeChange: function(){$('.nivo-caption').removeClass('nn');},
                afterChange: function(){$('.nivo-caption').addClass('nn');},
                slideshowEnd: function(){},
                lastSlide: function(){},
                afterLoad: function(){}
            });
        });
      

      
    </script> 
<!-- End Slider --> 
    </section>