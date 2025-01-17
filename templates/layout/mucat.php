<section class="width_100 muccatnb">
		<div class="container">

			<div class="khungcat width_100">

					<div id="owl-catnb" class="owl-carousel owl-theme">

						<?php foreach ($catnb as $key => $v) {?>
							<div class="item_catnb">

									<div class="hinhcatnb">
											<a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><img src="thumb/250x250/1/<?=_upload_sanpham_l.$v['photo']?>"></a>
									</div>
									<div class="title_cat width_100">
											<h3><a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a></h3>
									</div>

							</div>
						<?php } ?>
					</div>
			</div>

		</div>
</section>
