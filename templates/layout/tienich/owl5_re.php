<?php 
$d->reset();
$sql = "select * from #_product where hienthi=1 and noibat=1 order by id desc limit 0,80";
$d->query($sql);
$spnoibat_re = $d->result_array();
?>
<!-- Owl Carousel Assets -->
<!--
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
	-->
  <div id="owl-demo5_re" class="owl-carousel">
				
					
				<?php for($i4=0;$i4<count($spnoibat_re);$i4++) {
					$v = $spnoibat_re[$i4];
					?>
					
					<div class="sanpham <?php if(($i4+1)% 4==0){echo "sanpham1";} ?>">
						<div class="sale_sanpham">
						<?php if($v['sale']==1){  ?>
							<span>Sale</span>
							<?php }?>
						
						</div>
						<div class="hinhsanpham"><a href="san-pham/<?=$v['tenkhongdau']?>-<?=$v['id']?>.htm"><img src="<?=_upload_sanpham_l.$v['thumb']?>" alt="<?=$v['ten']?>"/></a></div>
						<div class="tensanpham"><h3><a href="san-pham/<?=$v['tenkhongdau']?>-<?=$v['id']?>.htm"><?=$v['ten']?></a></h3></div>
						<div class="giasanpham"><?=($v['gia']!=0)?(number_format($v['gia'],0, ',', '.')." đ"):"Liên hệ" ?></div>
						<div class="giohangsanpham"> <a href="index.php?command=add&productid=<?=$v['id']?>">Thêm vào giỏ hàng</a></div>
						
					</div>
						
				
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

<!--
    <script>
    $(document).ready(function() {

      $("#owl-demo").owlCarousel({
        items : 1,
		autoPlay:true,
        lazyLoad : true,
        navigation : true
      });

    });
    </script>

-->