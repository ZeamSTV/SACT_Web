<div id="headerdd">


			<div id="logode" class="col-xs-12  wow zoomIn">
						<a href="trang-chu.html"><img src="<?=_upload_company_l.$company['logore']?>"></a>
			</div>

			<div class="icontkdd">
					<img src="img/icontk.png">
			</div>

			<div class="search-formdd">

					<div class="form-row-searchdd">

								<form action="tim-kiem/sp.html" id="search" method="post">
														
										<input id="qsearch" type="text" name="txtTimkiem"  placeholder="Tìm kiếm" >

								</form>

					</div>

			</div>

			<a href="gio-hang.html"><span class="cart-icon image-icon">
				<strong id="count-cartdd"><?=get_total()?></strong>
			</span></a>


			<div  class="ngonngudd">
					<?php if($lang=='vi'){?>
														<a href="index.php?com=ngonngu&lang=en">E</a>
												<?php } else {?>
															<a href="index.php?com=ngonngu&lang=vi">V</a>

												<?php } ?>
			</div>
 			<?php include_once _template."layout/menu/menurespon1.php"; ?>


</div>



