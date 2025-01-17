
<div class="container">
	<div class="title_ins trend width_100">
					<h2>Trending Designs!</h2>
					<p>Take these babies home with you</p>
	</div>	
	<div class="content_tren width_100">


			<div class="bao_spnb">


				<?php foreach ($product_nb as $key => $v) {?>
					<div class="item_sp">

							<figure>
									<a href=""><img src="thumb/320x450/1/<?=_upload_sanpham_l.$v['photo']?>"></a>
							</figure>
							 <figcaption>
                                    <h3><a href=""><?=$v['ten_'.$lang]?></a></h3>
                                      <span><?=($v['gia']!=0)?(number_format($v['gia'],0, ',', ',')." ₫"):'Liên hệ' ?></span>
                            </figcaption>

					</div>
				<?php } ?>

			</div>

	</div>

</div>