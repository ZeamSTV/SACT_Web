<script language="javascript" src="media/scripts/my_script.js"></script>
<script language="javascript">
function js_submit(){
	if(isEmpty(document.frm.username, "Chưa nhập tên đăng nhập.")){
		return false;
	}
	
	if(isEmpty(document.frm.oldpassword, "Chưa nhập mật khẩu cũ.")){
		return false;
	}
	
	if(!isEmpty(document.frm.new_pass) && document.frm.new_pass.value.length<5){
		alert("Mật khẩu phải nhiều hơn 4 ký tự.");
		document.frm.new_pass.focus();
		return false;
	}
	
	if(!isEmpty(document.frm.new_pass) && document.frm.new_pass.value!=document.frm.renew_pass.value){
		alert("Nhập lại mật khẩu mới không chính xác.");
		document.frm.renew_pass.focus();
		return false;
	}
	
	if(!isEmpty(document.frm.email) && !check_email(document.frm.email.value)){
		alert('Email không hợp lệ.');
		document.frm.email.focus();
		return false;
	}
}
</script>

<section class="content-header">
   <h1>Tài khoản admin
   </h1>
   <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i>Bảng điều khiển</a></li>
      <li><a href="index.php?com=user&act=admin_edit">Tài khoản admin</a></li>
      <li class="active">Cập nhập</li>
   </ol>
</section>
<section class="content">

              <form method="post" name="frm" action="index.php?com=user&act=admin_edit" enctype="multipart/form-data" class="basic-form inline-form" onSubmit="return js_submit();">
<div class="row">
 <div class="col-md-12">
   <div class="box">
      <div class="box-header with-border">
         <h3 class="box-title">Nội dung</h3>
      </div>
      <div class="box-body">
         <div class="col-md-6">
            <div class="form-group">
               <label>Tên đăng nhập <span class="text-red">(* Bắt buộc) </span></label>
               <input type="text" name="username" class="form-control" value="<?=$item['username']?>" placeholder="Nhập tên đăng nhập">
            </div>
         </div>
        
         <div class="col-md-6">
            <div class="form-group">
               <label>Mật khẩu cũ<span class="text-red">(* Bắt buộc) </span></label>
               <input type="password" name="oldpassword" id="oldpassword" class="form-control" placeholder="Nhập mật khẩu cũ">
            </div>
         </div>
            <div class="col-md-6">
            <div class="form-group">
               <label>Mật khẩu mới <span class="text-red">(* Bắt buộc) </span></label>
               <input type="password" name="new_pass" id="new_pass" class="form-control" placeholder="Nhập mật khẩu mới">
            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <label>Nhập lại mật khẩu <span class="text-red">(* Bắt buộc) </span></label>
               <input type="password" name="renew_pass" class="form-control" placeholder="Nhập lại mật khẩu">
            </div>
         </div>
         
      </div>
      <div class="box-footer clearfix">
        
         <button type="submit" value="Lưu lại" name="cus_btn_save" class="btn btn-success pull-right"><i class="fa fa-floppy-o"></i> Lưu lại</button>
      </div>
   </div>
</div>
</div>
</form>
</section>
