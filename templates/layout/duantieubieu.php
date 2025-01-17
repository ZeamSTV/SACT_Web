<section id="duantieubieu" class="width_100">
		<div class="container">
				<div class="title_tc width_100">
						<span><?=_duantieubieu?></span>
				</div>
				<div class="tabs_cat width_100 ">
					<div class="tab_linkcat width_100">
						
						<?php foreach ($cat_nb as $key => $v) {?>
							<a rel="<?=$v['id']?>" class="<?=($key==0)?'active':''?>" data-loai="1"><?=$v['ten_'.$lang]?> </a>
						<?php } ?>
					</div>
					<div class="tab_content_cat width_100 margintop30">

					
						<!-- show tab cat -->

					 <?php foreach ($cat_nb as $key => $v) {?>
							
							

							<div class="tab_content_<?=$v['id']?> width_100 tab_content_cat1 <?=($key==0)?'active':''?> ">
								<?php if($key==0){
								$d->reset();
								$sql="select photo,id,ten_$lang,tenkhongdau from #_tin3cap where hienthi=1 and noibat=1 and id_cat=".$v['id']." order by stt asc, id desc";
								$d->query($sql);
								$duan=$d->result_array();
								$count=count($duan);
								?>
									<div class="owl-duan owl-carousel owl-theme " data-lg-items="3" data-md-items="3"data-sm-items="3" data-xs-items="2" data-xss-items="2" data-margin="15" data-nav="false" data-dot="true">

										<?php for ($i=0; $i <$count ; $i+=2) {
											$v1=$duan[$i];
											$v2=$duan[$i+1];
										 ?>
											<div class="item_duanowl1">

												<div class="item_duanowl width_100">
													<a href="<?=$v1['tenkhongdau']?>-<?=$v1['id']?>.htm"><img src="thumbb/395x220/1/<?=_upload_tin3cap_l.$v1['photo']?>"></a>
												</div>
												<div class="item_duanowl width_100">
													<a href="<?=$v2['tenkhongdau']?>-<?=$v2['id']?>.htm"><img src="thumbb/395x220/1/<?=_upload_tin3cap_l.$v2['photo']?>"></a>
												</div>
											</div>

										<?php } ?>
									</div>

								<?php } ?>
							</div>

						
						<?php } ?>
						<!-- end showw tab -->

					</div> 
				</div>
		</div>
</section>

