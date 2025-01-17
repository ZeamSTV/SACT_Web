<?php
	if(!isset($item)){
?>
<script language="javascript" src="media/scripts/my_script.js"></script>
<script language="javascript">
function js_submit(){
	if(isEmpty(document.frm.email, "Chưa nhập email.")){
		return false;
	}
	
	if(isEmpty(document.frm.password, "Chưa nhập mật khẩu.")){
		return false;
	}
	
	if(document.frm.password.value.length<6){
		alert("Mật khẩu phải từ 6 ký tự trở lên.");
		document.frm.oldpassword.focus();
		return false;
	}
	
	if(!isEmpty(document.frm.email) && !check_email(document.frm.email.value)){
		alert('Email không hợp lệ.');
		document.frm.email.focus();
		return false;
	}
}
</script>
<?php
	}
?>




<!-- Breadcrumbs Start -->
  <div class="row breadcrumbs">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <ul class="breadcrumbs">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="index.php?com=member&act=man">Quản lý thành viên</a></li>
      </ul>
    </div>
  </div>
  <!-- Breadcrumbs End -->
  


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 <div class="boxed no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12">
 <div class="inner">
 
  <!-- Title Bar Start -->
              <div class="title-bar">
                <h4><button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button></h4>
              </div>
              <!-- Title Bar End -->
			  
			  
<form name="frm" method="post" action="index.php?com=member&act=save<?php if($_REQUEST['curPage']!='') echo "&curPage=".$_REQUEST['curPage'];?>" enctype="multipart/form-data"  class="basic-form inline-form" onSubmit="return js_submit(); " >


				

 
	
	
	 <div class="col-md-2"> <label>Số thứ tự</label> </div>
	 
	
	 <div class="col-md-10">  <input class="input" type="text" name="stt" value="<?=isset($item['stt'])?$item['stt']:1?>" ><br /></div>
	 
	 
	 

	 
	 <div class="col-md-2"> <label>Email</label> </div>
	 
	
	 <div class="col-md-10"> <input type="text" name="email" id="email" value="<?=$item['email']?>" class="input" /><br /></div>
	 
	 
	<div class="col-md-2"> <label> Mật khẩu *</label> </div>

	<div class="col-md-10"><input  type="password" name="password" id="password" value="" class="input" /><span class="require" required></span><br /></div>
	
	
				
				
				
				
    <div class="col-md-2"> <label>Họ tên</label> </div>
	<div class="col-md-10"><input type="text" name="ten" id="ten" value="<?=$item['ten']?>" class="input" /><br />	</div>
	
	
	
	 	
	 
	<div class="col-md-2"> <label>Ngày sinh </label> </div>
	
	<div class="col-md-10">  <input type="text" name="ngaysinh" id='ngaysinh' value="<?=$item['ngaysinh']?>" class="input" /><br /></div>
	
	
		
 
	 
	<div class="col-md-2"> <label>Điện thoại</label> </div>

	<div class="col-md-10"> <input type="text" name="dienthoai" value="<?=$item['dienthoai']?>" class="input" /><br /></div>
	
    <div class="col-md-2"> <label>Giới tính</label> </div>
	<div class="col-md-10"> 
    	<input type="radio" <?=(!isset($item['sex']) || $item['sex']==1)?' checked="checked"':''?> name="gioitinh" value="1" /> Nam &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" <?=($item['sex']==0)?' checked="checked"':''?> name="gioitinh" value="0" /> Nữ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" <?=($item['sex']==2)?' checked="checked"':''?> name="gioitinh" value="2" /> Khác
	</div>
	
    



			

              
			
	
	
	

	<input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
	<div class="col-md-10 col-md-offset-2">                  
                  <button type="submit" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button>
				  
                  <button type="button" onclick="javascript:window.location='index.php?com=member&act=man<?php if($_REQUEST['curPage']!='') echo "&curPage=".$_REQUEST['curPage'];?>'" class="btn btn-info"><i class="fa fa-share"></i> Thoát</button>
        </div>
                               
     <div class="clearfix"></div>
				
</div>

	
</form>
</div>
</div>












 