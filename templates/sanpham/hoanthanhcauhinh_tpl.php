
<?php 
		$mangcauhinh=array();
	       if($_SESSION['cauhinh']['camera']!='')
	       {

	       		$mangcauhinh[]=$_SESSION['cauhinh']['camera'];

	       }
	        if($_SESSION['cauhinh']['dau-ghi']!='')
	       {

	       		$mangcauhinh[]=$_SESSION['cauhinh']['dau-ghi'];

	       }

	        if($_SESSION['cauhinh']['o-cung']!='')
	       {

	       		$mangcauhinh[]=$_SESSION['cauhinh']['o-cung'];

	       }

	        if($_SESSION['cauhinh']['phu-kien']!='')
	       {

	       		$mangcauhinh[]=$_SESSION['cauhinh']['phu-kien'];

	       }



	      $mangcauhinh=implode(',', $mangcauhinh);

	      $d->reset();
	      $sql="select mota_vi,h2_vi,ten_vi,tenkhongdau_vi,id,photo,gia from #_product where hienthi=1 and id in(".$mangcauhinh.") ";
	      $d->query($sql);
	      $litscauhinh=$d->result_array();


	      $tongchiphi==0;

?>
<section id="muctrong">


   	 <div class="duongdan">
          <ul class="breadcrumb">
            <li><i class="fa fa-home" aria-hidden="true" style="color:#000;"></i><a style="padding-left:5px" href="#">Trang chủ</a></li>
            <li><a class="active" >Hoàn thành cấu hình </a></li>
        
         
        </ul>
      </div>

      <div class="khungnoidung col-xs-12">

      		<div class="builder-checkout-wapper">
     

      				<?php if(count($litscauhinh)>0) {

      					foreach ($litscauhinh as $key => $v) {


	      $tongchiphi+=$v['gia'];

      						?>
      					<div class="builder-product-item">
						   <div class="builder-product-img">
						      <a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm">
						         <img  src="thumb/200x200/2/<?=_upload_sanpham_l.$v['photo']?>">
						      </a>
						   </div>
						   <div class="builder-product-desc">
						      <h2><a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm" title="<?=$v['ten_vi']?>" rel="bookmark"><?=$v['ten_vi']?></a></h2>
						      <p class="pro-price"><?=($v['gia']!=0)?(number_format($v['gia'],0, ',', ',')." ₫"):'Liên hệ' ?></p>
						      <?=$v['h2_vi']?>
						   </div>
						</div>

					<?php }} ?>
					<div class="clr"></div>

					<div class="builder-checkout-control">
					   <div class="builder-price">
					      <p>Chi phí dự tính <span><?=($tongchiphi!=0)?(number_format($tongchiphi,0, ',', ',').""):'Liên hệ' ?></span> ₫</p>
					   </div>
					   <div class="builder-action">
					      <a href="xay-dung-cau-hinh/dau-ghi-22.html" class="paymentbtn">Chọn lại sản phẩm</a>
					      <a style="cursor: pointer;" class="buidertocart">Cho hết vào giỏ hàng</a>
					  
					      <div class="clr"></div>
					   </div>
					</div>
						
      		</div>

      </div>


</section>

