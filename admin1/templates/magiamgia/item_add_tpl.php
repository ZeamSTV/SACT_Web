<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>


<!-- Breadcrumbs Start -->
  <div class="row breadcrumbs">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <ul class="breadcrumbs">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="index.php?com=magiamgia&act=man" title="Email đăng ký">Tạo mã giảm giá mới</a></li>
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
          <div class="boxed no-padding col-lg-7 col-md-7 col-sm-7 col-xs-12">
            <div class="inner">

              <!-- Title Bar Start -->
        
              <!-- Title Bar End -->
			              
              <form method="post" name="frm" action="index.php?com=magiamgia&act=save<?=$chuoi_noi_curpage?>" enctype="multipart/form-data" class="basic-form inline-form">                             
                

                <div class="col-md-4"><label>Giá trị mã giảm giá* (1)</label></div>
                <div class="col-md-8"><input type="number" name="giatrima" value="<?=$item['giatrimagiamgia']?>"  /></div>
                 <div class="col-md-4"><label>Giá trị đơn hàng tối thiểu*</label></div>
                <div class="col-md-8"><input  type="number" name="giatridonhang"  value="<?=$item['giatridonhangtoithieu']?>"  /></div>
                

                  <div class="col-md-4"><label>Số lượt sử dụng (lượt)* (2) </label></div>
                  <div class="col-md-8"><input  type="number" min="0"  name="soluot"  value="<?=$item['soluot']?>"  /></div>
                  <div class="clearfix"></div>
                 <div class="col-md-4"><label>Thời hạn sử dụng * (3)</label></div>
                 <div class="col-md-8"><input  type="number" min="0"  name="songaysudung"  value="<?=$item['songaysudung']?>"  /></div>
                

     

                
                
			           	<input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
                
                <div class="col-md-10 col-md-offset-2">                  
                       <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button>
               
                  <button type="button" onclick="javascript:window.location='index.php?com=magiamgia&act=man<?=$chuoi_noi_curpage?>'" class="btn btn-info"><i class="fa fa-share"></i> Thoát</button>
                </div>
                               
                <div class="clearfix"></div>

              </form>

            </div>
          </div>

          <div class="boxed no-padding col-lg-5 col-md-5 col-sm-5 col-xs-12">
              
                <div class="col-xs-12">
                  <div class="inner" style="padding: 15px;">
                        <div class="col-md-12" style="padding: 0"><label>Lưu ý:</label></div>
                      <p>(1) <span style="color:#f00">Mỗi mã giảm giá có giá trị không cao hơn 30% giá trị đơn hàng tối thiểu</span></p>
                      <p>(2) <span style="color:#f00">Số lượt sử dụng là số đơn hàng khách hàng có thể được giảm giá khi sử dụng mã này</span></p>
                        <p>(3) <span style="color:#f00">Thời gian sử dụng mã này từ khi kích hoạt</span></p>
                  </div>
              </div>
          </div>
          <!-- Inline Form End -->
	</div>
