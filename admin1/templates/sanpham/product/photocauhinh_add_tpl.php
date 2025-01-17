<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>

<script src="ckeditor/ckeditor.js"></script>


<!-- Breadcrumbs Start -->

  <div class="row breadcrumbs">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

      <ul class="breadcrumbs">

        <li><a href="index.php"><i class="fa fa-home"></i></a></li>

        <li>Sản phẩm : <b><?php

				$sql="select * from #_product where id='".intval($_REQUEST['id_cat'])."'";	

				$d->query($sql);

				$pro = $d->fetch_array();

				echo $pro['ten_vi'];

			?></b>

        </li>

        <li><a href="index.php?com=product&act=man_photocauhinh<?=$chuoi_noi_curpagephoto?>">Cấu hình</a></li>

      </ul>

    </div>

  </div>

  <!-- Breadcrumbs End -->

        

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    	<!--<div class="inner" style="margin-bottom:10px;">

            <div class="message-box info">

              <i class="fa fa-exclamation-circle"></i>

              <p>Lưu ý: Chỉ nên có tối đa 4-5 bản đồ, tên bản đồ không nên đặt dài quá, nên đặt số thứ tự chính xác để dễ quản lý!</p>

            </div>

        </div>-->

    

    

		<!-- Inline Form Start -->

          <div class="boxed no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="inner">



              <!-- Title Bar Start -->

              <div class="title-bar">

                <h4>Thêm hình ảnh cho sản phẩm : <b><?=$pro['ten_vi']?></b></h4>

              </div>

              <!-- Title Bar End -->

			            

              <form method="post" name="frm" action="index.php?com=product&act=save_photocauhinh<?=$chuoi_noi_curpagephoto?>" enctype="multipart/form-data" class="basic-form inline-form">

          

	

                    

                <div class="col-md-2"><label>Tên cấu hình</label></div>

                <div class="col-md-10"><input type="text" name="ten" placeholder="Tên" value="<?=$item['ten']?>" /></div>

                         <div class="clearfix"></div>
            <div class="col-md-2"><label>Giá cu</label></div>
                <div class="col-md-10"><input type="text"  name="giacu" id="gia" value="<?=number_format($item['giacu'],0, ',', '.')?>" placeholder="Giá cũ" /></div>



                <div class="col-md-2"><label>Giá bán</label></div>
                <div class="col-md-10"><input type="text"  name="gia" id="gia" value="<?=number_format($item['gia'],0, ',', '.')?>" placeholder="Giá" /></div>
        <!--          <div class="col-md-2"><label>Qùa tặng </label></div>
                      <div class="col-md-10"><textarea name="quatang" cols="50" rows="5" class="ckeditor" placeholder="Qùa tặng"><?=@$item['quatang']?></textarea><br /></div> -->
                       <div class="col-md-2"><label>Mô tả </label></div>
                      <div class="col-md-10"><textarea name="mota" cols="50" rows="5" class="ckeditor" placeholder="Mô tả"><?=@$item['mota']?></textarea><br /></div>
               <div class="col-md-2"><label>Cấu hình</label></div>
                      <div class="col-md-10"><textarea name="cauhinh" cols="50" rows="5" class="ckeditor" placeholder="Cấu hình"><?=@$item['cauhinh']?></textarea><br /></div>  


                     <div class="col-md-2"><label>Nội dung</label></div>
                      <div class="col-md-10"><textarea name="noidung" cols="50" rows="5" class="ckeditor" placeholder="Nội dung"><?=@$item['noidung']?></textarea><br /></div>      
                <div class="col-md-2"><label>Số thứ tự</label></div>

          
                <div class="col-md-10"><input type="text" name="stt" id="stt" value="<?=isset($item['stt'])?$item['stt']:1?>" placeholder="Số thứ tự" /></div>

                


                
                <div class="col-md-2"></div>

                <div class="col-md-10"><input type="checkbox" name="hienthi<?=$i?>" class="icheck-blue" checked="checked" /> <span class="hienthi_text">Hiển thị</span></div>

                

                <div class="clearfix"></div>
             


        <input type="hidden" name="id" id="id"  value="<?=@$item['id']?>" />
                

                <div class="col-md-10 col-md-offset-2">                  

                  <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button>

                  <button type="button" onclick="javascript:window.location='index.php?com=product&act=man_photocauhinh<?=$chuoi_noi_curpagephoto?>'" class="btn btn-info"><i class="fa fa-share"></i> Thoát</button>

                </div>



                <div class="clearfix"></div>



              </form>



            </div>

          </div>

          <!-- Inline Form End -->

	</div>

                      <script>
var roxyFileman = '../tiny/index.html?integration=ckeditor';

$('.ckeditor').each(function()
    {
     CKEDITOR.replace( $(this).attr('id'),{filebrowserBrowseUrl:roxyFileman, 
                               filebrowserImageBrowseUrl:roxyFileman+'&type=image',
                               removeDialogTabs: 'link:upload;image:upload'});
  });
</script>