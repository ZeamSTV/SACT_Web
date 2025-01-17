

<?php
	$d->reset();
	$sql = "select link,photo from #_photo where com='slideshow' and hienthi=1 order by stt asc,id desc";
	$d->query($sql);
	$slide_show = $d->result_array();	
?>



<div id="slideshow">
    <div class="box-slide">
        <div class="slider-wrapper theme-default">
                    <div id="slider-main" class="nivoSlider">

                      <?php foreach ($slide_show as $key => $v) {?>                            <a href="<?=$v['id']?>" target="_blank" title=""><img src="thumb/1366x436/2/upload/hinhanh/<?=$v['photo']?>" data-thumb="upload/hinhanh/<?=$v['photo']?>" alt=""/></a>
                          
                      <?php } ?>
                                                          </div>
        </div>
    </div>
</div>



    <script type="text/javascript" src="media/nivoslider/jquery.nivo.slider.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){

            $('#slider-main').nivoSlider({

                effect: 'random',

                slices: 15,

                boxCols: 8,

                boxRows: 4,

                animSpeed: 1000,

                pauseTime: 3500,

                startSlide: 0,

                directionNav: true,

                controlNav: false,

                controlNavThumbs: false,

                pauseOnHover: true,

                manualAdvance: false,

                prevText: 'Prev',

                nextText: 'Next',

                randomStart: false,

                beforeChange: function(){},

                afterChange: function(){},

                slideshowEnd: function(){},

                lastSlide: function(){},

                afterLoad: function(){}

            });

        });

    </script>

    <!-- End Slider -->