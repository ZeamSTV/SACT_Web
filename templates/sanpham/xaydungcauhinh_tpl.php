

<section id="muctrong">


   	 <div class="duongdan">
          <ul class="breadcrumb">
            <li><i class="fa fa-home" aria-hidden="true" style="color:#000;"></i><a style="padding-left:5px" href="#">Trang chủ</a></li>
            <li><a class="active" >Xây dựng cấu hình </a></li>
        
         
        </ul>
      </div>

      <div class="khungnoidung col-xs-12">

      			<div class="builder-sidebar">
      					<div class="step <?=($_REQUEST['idc']==22)?'instep':''?>">
						   <a href="xay-dung-cau-hinh/dau-ghi-22.html">
						      <div class="step_label">
						         <strong>Bước 1:</strong> <br> Đầu ghi
						      </div>
						   </a>
						   <div class="step_thumb" id="dau-ghi">
						   		<?php

						   			if($_SESSION['cauhinh']['dau-ghi']!=''){
						   					$sql="select photo,ten_vi,id from #_product where id=".$_SESSION['cauhinh']['dau-ghi'];
												$d->query($sql);
												$hinhsp=$d->fetch_array();
								?>				
									<span class="buildpc_remove_item" data-id="<?=$_SESSION['cauhinh']['dau-ghi']?>" data-step="dau-ghi">Bỏ chọn</span>	
									<img src="<?=_upload_sanpham_l.$hinhsp['photo']?>">
						   		<?php 	}


						   		 ?>
						   </div>
						</div>
						<div class="step <?=($_REQUEST['idc']==11)?'instep':''?>">
						   <a href="xay-dung-cau-hinh/camera-11.html">
						      <div class="step_label">
						         <strong>Bước 2:</strong> <br> Camera
						      </div>
						   </a>
						   <div class="step_thumb" id="camera">
						   			<?php

						   			if($_SESSION['cauhinh']['camera']!=''){
						   					$sql="select photo,ten_vi,id from #_product where id=".$_SESSION['cauhinh']['camera'];
												$d->query($sql);
												$hinhsp=$d->fetch_array();
								?>	
									<span class="buildpc_remove_item" data-id="<?=$_SESSION['cauhinh']['camera']?>" data-step="camera">Bỏ chọn</span>		
									<img src="<?=_upload_sanpham_l.$hinhsp['photo']?>">
						   		<?php 	}


						   		 ?>
						   </div>
						</div>
						<div class="step ">
						   <a href="xay-dung-cau-hinh/o-cung-44.html">
						      <div class="step_label">
						         <strong>Bước 3:</strong> <br> Ổ cứng
						      </div>
						   </a>
						   <div class="step_thumb" id="o-cung">

						   				<?php

						   			if($_SESSION['cauhinh']['o-cung']!=''){
						   					$sql="select photo,ten_vi,id from #_product where id=".$_SESSION['cauhinh']['o-cung'];
												$d->query($sql);
												$hinhsp=$d->fetch_array();
								?>				
									<span class="buildpc_remove_item" data-id="<?=$_SESSION['cauhinh']['o-cung']?>" data-step="o-cung">Bỏ chọn</span>	
									<img src="<?=_upload_sanpham_l.$hinhsp['photo']?>">
						   		<?php 	}


						   		 ?>
						   </div>
						</div>
						<div class="step ">
						   <a href="xay-dung-cau-hinh/phu-kien-55.html">
						      <div class="step_label">
						         <strong>Bước 4:</strong> <br> Phụ kiện khác
						      </div>
						   </a>
						   <div class="step_thumb" id="phu-kien">

						   		<?php

						   			if($_SESSION['cauhinh']['phu-kien']!=''){
						   					$sql="select photo,ten_vi,id from #_product where id=".$_SESSION['cauhinh']['phu-kien'];
												$d->query($sql);
												$hinhsp=$d->fetch_array();
								?>				
									<span class="buildpc_remove_item" data-id="<?=$_SESSION['cauhinh']['phu-kien']?>" data-step="phu-kien">Bỏ chọn</span>	
									<img src="<?=_upload_sanpham_l.$hinhsp['photo']?>">
						   		<?php 	}


						   		 ?>
						   </div>
						</div>

						<a href="hoan-thanh-cau-hinh.html" class="builder-finish">
						<div class="step ">
							<div class="step_label">
							<strong>Bước 5:</strong> <br> Tính toán chi phí
							</div>
							
						</div>
						</a>
      			</div>
      			<div class="builder-product">

      				<!--show sp-->
      				<?php foreach ($xaydungcauhinh as $key => $v) {?>
      					<div class="builder-product-item">
						   <div class="builder-product-img">
						      <a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm">
						      <img  src="thumb/200x200/2/<?=_upload_sanpham_l.$v['photo']?>">
						      </a>
						   </div>
						   <div class="builder-product-desc">
						      <h2><a href="san-pham/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm" title="<?=$v['ten_vi']?>"><?=$v['ten_vi']?></a></h2>
						     <?=$v['h2_vi']?>
						   </div>
						   <div class="add-to-builder">
						      <p class="pro-price"><?=($v['gia']!=0)?(number_format($v['gia'],0, ',', ',')." ₫"):'Liên hệ' ?></p>
						      <span class="btn-dang-ky btn-add-builder" data-id="<?=$v['id']?>" data-step="<?=$step?>">
						      Chọn sản phẩm
						      </span>
						   </div>
						</div>
					<?php } ?>
      				<!--end show sp -->

      			</div>

      			<div class="builder-filter">
      			<!-- fitter -->

      				<div class="sidebar-widget">
						   <h2 class="widget-title">
						      <?=$stt?>. <?=$title_chon?>	 <?=$id_cat?>	                    
						   </h2>
						   <div class="widget-sub widget-filter">
						      <ul>

						      <?php 

						      if($step=='dau-ghi'||$step=='camera') {
						      foreach ($listloc as $key => $v) {

						      		   $d->reset();
							            $sql="select * from #_tin3cap where hienthi=1  and id_cat=".$v['id']." order by stt asc, id desc ";
							            $d->query($sql);
							            $listloc1=$d->result_array();

						      	?>
						         <li>
						            <a><?=$v['ten_vi']?><span>+</span></a>


						            <ul>
						            <?php foreach ($listloc1 as $key2=> $v2) {?>
						               <li><a rel="<?=$v['tenkhongdau']?>" data-id="<?=$v2['id']?>" ><?=$v2['ten_vi']?></a></li>
									<?php } ?>
						            </ul>
						         </li>
							<?php } }?>
						      </ul>
						   </div>
						</div>
      			<!-- filter-->

      			</div>
      </div>


</section>

