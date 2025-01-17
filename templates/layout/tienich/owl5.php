<?php 
$d->reset();
$sql = "select * from #_product where hienthi=1 and noibat=1 order by id desc limit 0,80";
$d->query($sql);
$spnoibat = $d->result_array();
?>
<!-- Owl Carousel Assets -->
<!--
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
	-->
  <div id="owl-demo5" class="owl-carousel">
  
  <?php
					$cachb1 = 8;
					$cachb2 = 16;
					$cachb3 = 24;
					$cachb4 = 32;
					$cachb5 = 40;
					$cachb6 = 48;
					$cachb7 = 56;
					$cachb8 = 64;
					$cachb9 = 72;
					$cachb10 = 80;
					?>
				
					<div class="sanphannoibattrong2">
					<?php if($cachb1 > count($spnoibat)){$cachb1= count($spnoibat);} ?>
						<?php for($i8=0;$i8<$cachb1;$i8++) {
							$v = $spnoibat[$i8];
							?>
						<div class="sanpham <?php if(($i8+1)% 4==0){echo "sanpham1";} ?>">
							
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
					
					<?php if(count($spnoibat)>$cachb1){ ?>
						<div class="sanphannoibattrong2">
					<?php if($cachb2 > count($spnoibat)){$cachb2= count($spnoibat);} ?>
						<?php for($i8=8;$i8<$cachb2;$i8++) {
							$v = $spnoibat[$i8];
							?>
						<div class="sanpham <?php if(($i8+1)% 4==0){echo "sanpham1";} ?>">
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
					<?php }?>
					
					
					
					
					<?php if(count($spnoibat)>$cachb2){ ?>
						<div class="sanphannoibattrong2">
					<?php if($cachb3 > count($spnoibat)){$cachb3= count($spnoibat);} ?>
						<?php for($i8=16;$i8<$cachb3;$i8++) {
							$v = $spnoibat[$i8];
							?>
						<div class="sanpham <?php if(($i8+1)% 4==0){echo "sanpham1";} ?>">
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
					<?php }?>
					
					
					
					
					<?php if(count($spnoibat)>$cachb3){ ?>
						<div class="sanphannoibattrong2">
					<?php if($cachb4 > count($spnoibat)){$cachb4= count($spnoibat);} ?>
						<?php for($i8=24;$i8<$cachb4;$i8++) {
							$v = $spnoibat[$i8];
							?>
						<div class="sanpham <?php if(($i8+1)% 4==0){echo "sanpham1";} ?>">
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
					<?php }?>
					
					
					
					
					<?php if(count($spnoibat)>$cachb4){ ?>
						<div class="sanphannoibattrong2">
					<?php if($cachb5 > count($spnoibat)){$cachb5= count($spnoibat);} ?>
						<?php for($i8=32;$i8<$cachb5;$i8++) {
							$v = $spnoibat[$i8];
							?>
						<div class="sanpham <?php if(($i8+1)% 4==0){echo "sanpham1";} ?>">
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
					<?php }?>
					
					
					
					
					<?php if(count($spnoibat)>$cachb5){ ?>
						<div class="sanphannoibattrong2">
					<?php if($cachb6 > count($spnoibat)){$cachb6= count($spnoibat);} ?>
						<?php for($i8=40;$i8<$cachb6;$i8++) {
							$v = $spnoibat[$i8];
							?>
						<div class="sanpham <?php if(($i8+1)% 4==0){echo "sanpham1";} ?>">
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
					<?php }?>
					
					
					
					<?php if(count($spnoibat)>$cachb6){ ?>
						<div class="sanphannoibattrong2">
					<?php if($cachb7 > count($spnoibat)){$cachb7= count($spnoibat);} ?>
						<?php for($i8=48;$i8<$cachb7;$i8++) {
							$v = $spnoibat[$i8];
							?>
						<div class="sanpham <?php if(($i8+1)% 4==0){echo "sanpham1";} ?>">
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
					<?php }?>
					
					
					
					
					<?php if(count($spnoibat)>$cachb7){ ?>
						<div class="sanphannoibattrong2">
					<?php if($cachb8 > count($spnoibat)){$cachb8= count($spnoibat);} ?>
						<?php for($i8=56;$i8<$cachb8;$i8++) {
							$v = $spnoibat[$i8];
							?>
						<div class="sanpham <?php if(($i8+1)% 4==0){echo "sanpham1";} ?>">
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
					<?php }?>
					
					
					<?php if(count($spnoibat)>$cachb8){ ?>
						<div class="sanphannoibattrong2">
					<?php if($cachb9 > count($spnoibat)){$cachb9= count($spnoibat);} ?>
						<?php for($i8=64;$i8<$cachb9;$i8++) {
							$v = $spnoibat[$i8];
							?>
						<div class="sanpham <?php if(($i8+1)% 4==0){echo "sanpham1";} ?>">
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
					<?php }?>
					
					
					<?php if(count($spnoibat)>$cachb9){ ?>
						<div class="sanphannoibattrong2">
					<?php if($cachb10 > count($spnoibat)){$cachb10= count($spnoibat);} ?>
						<?php for($i8=72;$i8<$cachb10;$i8++) {
							$v = $spnoibat[$i8];
							?>
						<div class="sanpham <?php if(($i8+1)% 4==0){echo "sanpham1";} ?>">
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