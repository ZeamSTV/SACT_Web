<?php
$d->reset();
$sql="select * from #_product where hienthi=1 and spbanchay=1 order by stt asc";
$d->query($sql);
$spbc = $d->result_array();
?>
<!-- Owl Carousel Assets -->

    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

<div id="owl-cap1" class="owl-carousel">

	<?php for($s1=0;$s1<count($spbc);$s1++){ 
		$v = $spbc[$s1];
	?>
					<a href="san-pham/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm">
                        <div class="hinhspowl">
    						<img class="hvr-push" src="<?=_upload_sanpham_l.$v['photo']?>" alt="<?=$v['ten_$lang']?>"/>
    				        <div class="overlay1">

                                <div class="text1">
                                    <h3><?=$v['ten_'.$lang]?></h3>

                                    <span><?=($v['gia']!=0)?(number_format($v['gia'],0, ',', '.')." VNĐ"):'<?=_lienhe?>' ?></span>
                               
                                </div>
                            </div>
    					</div>

                    </a>
	<?php }?>				
				
</div>	


  
   


    <!-- Demo -->

    <style>
    #owl-demo .item{
       <!-- margin: 3px;-->
    }
	<!--
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }-->
    </style>

 <script src="js/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {

      $("#owl-cap1").owlCarousel({
        items : 5,
		autoPlay:true,
        lazyLoad : true,
        navigation : true,
        responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
      });

    });
    </script>

