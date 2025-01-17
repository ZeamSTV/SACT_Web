<script language="javascript" src="media/scripts/my_script.js"></script>
<script language="javascript">
function js_submit(){
	if(isEmpty(document.frm.username, "Chưa nhập tên đăng nhập.")){
		return false;
	}
	
	if(isEmpty(document.frm.password, "Chưa nhập mật khẩu.")){
		return false;
	}
	
	if(document.frm.password.value.length<5){
		alert("Mật khẩu phải nhiều hơn 4 ký tự.");
		document.frm.password.focus();
		return false;
	}
	
	if(!isEmpty(document.frm.email) && !check_email(document.frm.email.value)){
		alert('Email không hợp lệ.');
		document.frm.email.focus();
		return false;
	}
}
</script>
  <div class="row breadcrumbs">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <ul class="breadcrumbs">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="index.php?com=user&act=man">Tài khoản</a></li>
      </ul>
    </div>
  </div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <!--<div class="inner" style="margin-bottom:10px;">
            <div class="message-box info">
              <i class="fa fa-exclamation-circle"></i>
              <p>Lưu ý: Chỉ nên có tối đa 4-5 bản đồ, tên bản đồ không nên đặt dài quá, nên đặt số thứ tự chính xác để dễ quản lý!</p>
            </div>
        </div>-->
    <?php
	$sql = "select ten,id,mausac from #_phanquyen order by stt asc";
	$d->query($sql);
	$quyenhang = $d->result_array();
?>
    
    <!-- Inline Form Start -->
          <div class="boxed no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="inner">

              <!-- Title Bar Start -->
              <div class="title-bar">
                <h4><button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button></h4>
              </div>
              <!-- Title Bar End -->
                    
              <form method="post" name="frm" action="index.php?com=user&act=save<?=$chuoi_noi_curpage?>" enctype="multipart/form-data" class="basic-form inline-form">              
       
                <div class="col-md-2"><label>Username </label></div>
                <div class="col-md-10"><input type="text" name="username" id="username" value="<?=$item['username']?>" placeholder="Tên đăng nhập" /></div>
               
                   <div class="col-md-2"><label>Password </label></div>
                <div class="col-md-10"><input type="password" name="password" id="password" value="<?=$item['password']?>" placeholder="Mật khẩu" /></div>
                               <div class="col-md-2"><label>Email </label></div>
                <div class="col-md-10"><input type="text" name="email" id="email" value="<?=$item['email']?>" placeholder="Email" /></div>

                                               <div class="col-md-2"><label>Họ tên </label></div>
                <div class="col-md-10"><input type="text" name="ten" id="ten" value="<?=$item['ten']?>" placeholder="Tên" /></div>
                                               <div class="col-md-2"><label>Địa chỉ </label></div>
                <div class="col-md-10"><input type="text" name="diachi" id="diachi" value="<?=$item['diachi']?>" placeholder="Địa chỉ" /></div>
                                               <div class="col-md-2"><label>Số Điện thoại </label></div>
                       <div class="col-md-10"><input type="text" name="dienthoai" id="dienthoai" value="<?=$item['dienthoai']?>" placeholder="Điện thoại" /></div>

                 <div class="col-md-2">
                 	<label>Chọn quyền </label>
                 </div>
                 <div class="col-md-10">

						<div style="width: 100%;">
				        	<?php for($i=0;$i<count($quyenhang);$i++){?>
						    <p><label><input style="float: left;
    width: auto;margin-right: 10px;" type="radio" name="quyen" value="<?=$quyenhang[$i]['id']?>" <?php if($item['quyen'] == $quyenhang[$i]['id']){?> checked="checked"<?php } ?> /> 
						    <span style="margin-top:2px;float:left;color:<?=$quyenhang[$i]['mausac']?>"><?=$quyenhang[$i]['ten']?></span></label>


						    </p><div class="clear"></div>
						    <?php } ?>
						</div>
						<div class="clear"></div>
                 </div>






                    <div class="clear"></div>
               <div class="col-md-2"><label>STT</label></div>
                <div class="col-md-10"><input type="text" name="stt" id="stt" value="<?=isset($item['stt'])?$item['stt']:1?>" placeholder="Số thứ tự" /></div>
                <div class="col-md-2"></div>
                <div class="col-md-10"><input type="checkbox" name="hienthi" class="icheck-blue" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?> /> <span class="hienthi_text">Hiển thị</span></div>
                
                
              <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
                
                <div class="col-md-10 col-md-offset-2">                  
                  <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button>
                  <button type="button" onclick="javascript:window.location='index.php?com=user&act=man<?=$chuoi_noi_curpage?>'" class="btn btn-info"><i class="fa fa-share"></i> Thoát</button>
                </div>
                               
                <div class="clearfix"></div>

              </form>

            </div>
          </div>
          <!-- Inline Form End -->
  </div>