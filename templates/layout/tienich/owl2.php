<?php
$d->reset();
$sql="select * from #_product where hienthi=1 and idhangsanxuat=".$dn64['id']." order by stt asc";
$d->query($sql);
$sptc2 = $d->result_array();

?>
<!-- Owl Carousel Assets -->

    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

<div id="owl-cap22" class="owl-carousel">

  <?php foreach ($sptc2 as $v) {?>

                   <div class="spowl">
                        <a href="san-pham/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm">
                        <div class="hinhspowl">
                            <img class="hvr-push" src="<?=_upload_sanpham_l.$v['photo']?>" alt="<?=$v['ten_$lang']?>"/>
                            
                        </div>
                        </a>
                        <div class="tenspowl">
                               <h3><a href="san-pham/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm"><?=$v['ten_'.$lang]?></a></h3>

                                    <span class="giamoi"><?=($v['gia']!=0)?(number_format($v['gia'],0, ',', '.')." VNĐ"):'<?=_lienhe?>' ?></span>
                                
                               <!--  <span class="giagiam"><?=($v['giacu']!=0)?(number_format($v['giacu'],0, ',', '.')." VNĐ"):'<?=_lienhe?>' ?></span>

                               <?php if($v['tag']>0){?>
                                <span class="phantram"><?=_tietkiem?>: (-<?=$v['tag']?>%)</span>

                                <?php } ?> 
 -->
                        </div>
                    </div>
                   
    <?php }?>               
                
</div>  


  
   


    <!-- Demo -->

    <style>
#owl-cap22 .owl-pagination
{
    display: none;
}
@media only screen and (min-width: 1px ) and (max-width: 767px){
#owl-cap22 .owl-prev, #owl-cap22 .owl-next

{
    display: none;
}

}
    </style>

 <script src="js/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {

      $("#owl-cap22").owlCarousel({
        items : 4,
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
            items:4,
            nav:true,
            loop:false
        }
    }
      });

    });
    </script>

