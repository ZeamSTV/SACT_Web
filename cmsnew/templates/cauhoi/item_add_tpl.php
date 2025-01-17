<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>

<?php

  function get_tenspcauhoi($id)
  {
    global $d;
    $sql="select ten_vi from #_product where id=".$id;
    $d->query($sql);
    $ten=$d->fetch_array($sql);
    return $ten['ten_vi'];

  }

      function get_tennguoicauhoi($id)
  {
    global $d;
    $sql="select ten from #_member where id=".$id;
    $d->query($sql);
    $ten=$d->fetch_array($sql);
    return $ten['ten'];

  }
?>
<!-- Breadcrumbs Start -->
  <div class="row breadcrumbs">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <ul class="breadcrumbs">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="index.php?com=cauhoi&act=man" title="Email đăng ký">Chi tiết câu hỏi</a></li>
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
                <h4>Nội dung câu hỏi</h4>
              </div>
              <!-- Title Bar End -->
			              
              <form method="post" name="frm" action="index.php?com=cauhoi&act=save<?=$chuoi_noi_curpage?>" enctype="multipart/form-data" class="basic-form inline-form">                             
                

                <div class="col-md-2"><label>Họ tên </label></div>
                <div class="col-md-10"><input style="    background: #eee;" type="text" name="hoten" readonly="readonly" value="<?=get_tennguoicauhoi($item['id_user'])?>"  /></div>
                 <div class="col-md-2"><label>Sản phẩm </label></div>
                <div class="col-md-10"><input style="    background: #eee;" type="text" name="hoten" readonly="readonly" value="<?=get_tenspcauhoi($item['id_sp'])?>"  /></div>
                

                        <div class="col-md-2"><label>Nội dung </label></div>
                      <div class="col-md-10"><textarea cols="50" rows="5" name="cauhoi" ><?=$item['cauhoi']?></textarea></div>
                       <div class="clearfix"></div>
                 <div class="col-md-2"><label>Lượt like</label></div>
                 <div class="col-md-10"><input  type="number" min="0"  name="luotlike"  value="<?=$item['luotlike']?>"  /></div>
                

     

                
                
				<input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
                
                <div class="col-md-10 col-md-offset-2">                  
                       <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button>
               
                  <button type="button" onclick="javascript:window.location='index.php?com=cauhoi&act=man<?=$chuoi_noi_curpage?>'" class="btn btn-info"><i class="fa fa-share"></i> Thoát</button>
                </div>
                               
                <div class="clearfix"></div>

              </form>

            </div>
          </div>
          <!-- Inline Form End -->
	</div>
