<nav>


		<ul id="menu2017" >

			<?php foreach ($cat_main as $key => $v1) {
						$d->reset();
						$sql= "select * from #_product_cat where hienthi=1 and com='cat1' and hot=1 and id_cat=".$v1['id']." order by id asc limit 0,3";
						$d->query($sql);
						$menucap2 = $d->result_array();	

				?>
				<li class="dropdown1">
					<span>
						<i class="<?=$v1['mota_vi']?>"></i>

						<?php 

						if(count($menucap2)>0){

						foreach ($menucap2 as $k2 => $v2) {?>
						<a href="san-pham/<?=$v1['tenkhongdau_vi']?>/<?=$v2['tenkhongdau_vi']?>-<?=$v2['id']?>.html" ><?=$v2['ten_vi']?></a>,
						<?php } 

						} ?>

					
					</span>

				
					<div id="submenu-1" class="subcate gd-menu" >

							<?php 	foreach ($menucap2 as $k2 => $v2) {?>
							   <aside>
						 	 	 <strong><?=$v2['ten_vi']?></a>
										 <a href="san-pham/<?=$v1['tenkhongdau_vi']?>/<?=$v2['tenkhongdau_vi']?>-<?=$v2['id']?>.html" class="">Xem tất cả</a>
								</strong> 
									<?php
										$d->reset();
										$sql= "select * from #_product_cat where hienthi=1 and com='cat1' and id=".$v2['id'];
										$d->query($sql);
										$listsub2 = $d->fetch_array();	
										if($listsub2['mucloc']!=''){
										

										
											$d->reset();
											$sql="select * from #_tinnho where hienthi=1 and com in (".$listsub2['mucloc'].") and com!=10  limit 0,10";
											$d->query($sql);
											$listsub3=$d->result_array();

											foreach ($listsub3 as $k3 => $v3) {
												if($v3['com']==7){
									?>


												<a href="san-pham/<?=$v1['tenkhongdau_vi']?>/<?=$v2['tenkhongdau_vi']?>-<?=$v2['id']?>.html?id_gia=<?=$v3['id']?>" class="">Từ <?=number_format($v3['ten_vi'],0, ',', ',')." ₫"?> - <?=number_format($v3['mota_vi'],0, ',', ',')." ₫"?></a>


												<?php 	} else {

											   		$mangloc=array(6=>'Thương hiệu',7=>'Giá',11=>'Inch',8=>'Số kênh',9=>"Công suất",10=>"Tiện ích",12=>'Dung tích',13=>"Nơi sản xuất");


												
													

															$comid=$v3['com'];

															$tenkd1=q_bodautv1($mangloc[$comid]);
												?>

														<a href="san-pham/<?=$v1['tenkhongdau_vi']?>/<?=$v2['tenkhongdau_vi']?>-<?=$v2['id']?>.html?id_<?=$tenkd1?>=<?=$v3['id']?>" class=""><?=$v3['ten_vi']?></a>


										<?php 		} ?>





									<?php }} ?>
						  	 </aside>

						  	<?php } ?>
						<!--    <aside>
						  		 <strong>LOA, ÂM THANH <a href="/dan-loa-dvd" class="">Xem tất cả</a></strong> <a href="/dan-loa-dvd?g=loa" class="">Loa thanh (Soundbar)</a> <a href="/dan-loa-dvd?g=loa-keo" class="">Loa kéo</a> <a href="/dan-loa-dvd?g=dan-am-thanh" class="">Dàn âm thanh</a> <a href="/cap-hdmi-cap-tivi" class="">Cáp HDMI, cáp Tivi</a> <a href="/micro" class="">Micro</a>
						   </aside> -->
						</div>
				
				</li>
			<?php } ?>
			
		</ul>

</nav>



<script type="text/javascript">
	

$('nav ul li.dropdown').hover(function(){

	$(this).addClass('active')

	},function(){
	$(this).removeClass('active')

	}


)


$('nav ul li.dropdown1').hover(function(){

	$(this).find('.subcate').css("display",'block');


},
 function () {
            
        	$(this).find('.subcate').css("display",'none');

        }
)


</script>