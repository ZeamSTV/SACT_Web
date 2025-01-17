<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>


<!-- Breadcrumbs Start -->
  <div class="row breadcrumbs">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <ul class="breadcrumbs">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="index.php?com=mucmedia&act=man" title="Email đăng ký">Chi tiết bảng</a></li>
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
                <h4>Nội dung </h4>
              </div>
              <!-- Title Bar End -->
                    
              <form method="post" name="frm" action="index.php?com=mucmedia&act=save<?=$chuoi_noi_curpage?>" enctype="multipart/form-data" class="basic-form inline-form">                             
                

                <div class="col-md-2"><label>Tên </label></div>
                <div class="col-md-10"><input  type="text" name="ten" value="<?=$item['ten']?>"  /></div>
                 <div class="col-md-2"><label>Bảng</label></div>
                <div class="col-md-10"><input  type="text" name="bang1" value="<?=$item['bang']?>"  /></div>
                
                 <div class="col-md-2"><label>Com</label></div>
                <div class="col-md-10"><input  type="text" name="com1" value="<?=$item['com']?>"  /></div>
                 <div class="col-md-2"><label>Đường dẫn</label></div>
                <div class="col-md-10"><input  type="text" name="duongdan" value="<?=$item['duongdan']?>"  /></div>

                
                
                
                <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
                
                <div class="col-md-10 col-md-offset-2">                  
                       <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button>
               
                  <button type="button" onclick="javascript:window.location='index.php?com=mucmedia&act=man<?=$chuoi_noi_curpage?>'" class="btn btn-info"><i class="fa fa-share"></i> Thoát</button>
                </div>
                               
                <div class="clearfix"></div>

              </form>

            </div>
          </div>
          <!-- Inline Form End -->
  </div>
