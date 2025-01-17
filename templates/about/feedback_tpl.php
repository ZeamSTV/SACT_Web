

  <section class="content_trong width_100">
    
  	<div class="container container1">

  				<div class="width_100 ngaytao-bv nav-bredcrum "> 
					<a href="" title="Trang chủ"> Trang chủ </a> <i class="fa fa-angle-double-right"></i><span>Hệ thống phân phối</span> 
				</div>
			  	<div class="content_trong width_100">
			   
			        <div class="title_detail width_100">
						<h1>Hệ thống phân phối</h1>
					</div>
			        <div class="content_detail width_100 margintop10" >
			            
			        	<?php foreach ($danhsachbando as $key => $v) {?>
				        	<div class="khungbando width_100">

				        			<div class="row">

				        					<div class="col-md-5 col-sm-5 col-xs-12 titlebando" style="<?=($key%2==0)?'float:right':''?>">

				        							<h3><?=$v['ten_vi']?></h3>

				        							<div class="motabando width_100">
				        								<?=$v['mota_vi']?>

				        							</div>

				        					</div>
				        					<div class="col-md-7 col-sm-7 col-xs-12">

				        							<div class="bandoht width_100">

				        									<?=$v['noidung_vi']?>
				        							</div>
				        					</div>

				        			</div>

				        	</div>
			        	<?php } ?>



			        </div>
			     </div>


 	</div>
  </section>
