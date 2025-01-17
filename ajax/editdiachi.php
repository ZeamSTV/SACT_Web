<?php

	
	  session_start();
    error_reporting(E_ALL & ~E_NOTICE & ~8192);
    
    if(!isset($_SESSION['lang']))
    {
    $_SESSION['lang']='vi';
    }
    
    $lang=$_SESSION['lang'];
    
    @define ( '_lib' , '../admin/lib/');
    @define ( '_source' , '../sources/');
    include_once _lib."config.php";
    include_once _lib."constant.php";
    // require_once _source."lang_$lang.php";
    include_once _lib."functions.php";
      include_once _lib."tridepzai.php";
    include_once _lib."functions_giohang.php";
    include_once _lib."class.database.php";
    $d = new database($config['database']);
  

 $id = $_POST['id'];


 $sql="select * from #_taodiachi where id=".$id;
 $d->query($sql);
 $row1=$d->fetch_array();



?>

<script type="text/javascript">
		$('#btndiachi').click(function(){

		
												var frm = $('#frmtaodiachi');
											


												var name = frm.find('#fullnamedc').val();
								            
								                    if(name==''){

								                        $('#fullname-error').html('');
								                        $("#fullnamedc").after('<div for="email" generated="true" class="mage-error" id="fullname-error">Vui lòng nhập họ tên</div>');
								         
								                        return false;


								                   	 }
								                   

								                       name=name.trim();
								                        var splValue = name.split(' ');

								                         if(splValue.length < 2){

								                                $('#fullname-error').html('');
								                                $("#fullnamedc").after('<div for="email" generated="true" class="mage-error" id="fullname-error">Vui lòng nhập đầy đủ họ tên</div>');
								                              
								                                frm.find('#fullnamedc').val('');
								                                return false;
								                            }
								                            else
								                            {
								                                $('#fullname-error').html('');
								                            }




								                            var diachi= frm.find('#addressdc').val();
								            
								                    if(diachi=='')
								                    {

								                        $('#email-error').html('');
								                         $("#addressdc").after('<div for="email" generated="true" class="mage-error" id="email-error">VUi lòng nhập địa chỉ.</div>');
								                        frm.find('#addressdc').val('');
								                        return false;

								                    }
								                    

												 var value = frm.find('#dienthoaidc').val();   
											     var telephonePattern = /^09[0-9]{8}|01[0-9]{9}|08[0-9]{8}/;
								                   
								                    if(value=='')
								                    {

								                        $('#email-error').html('');
								                         $("#dienthoaidc").after('<div for="email" generated="true" class="mage-error" id="email-error">VUi lòng nhập số điện thoại.</div>');
								                        frm.find('#dienthoaidc').val('');
								                        return false;

								                    }
								                    if(value != '' && ((!telephonePattern.test(value)) || (telephonePattern.test(value) && value.match(telephonePattern)[0] != value))){
								                        $('#email-error').html('');
								                         $("#dienthoaidc").after('<div for="email" generated="true" class="mage-error" id="email-error">Số điện thoại  không đúng định dạng.</div>');
								                        frm.find('#dienthoaidc').val('');
								                        return false;
								                    }
								                    else
								                    {
								                        $('#email-error').html('');
								                    }

								                    var tinh=$('#diadiem_cat_tt').val();
								                    var huyen=$('#diadiem_item_tt').val();
								                    if(tinh==''||huyen=='')
								                    {
								                    	alert('Vui lòng nhập đủ thông tin');
								                    	return false;
								                    }
								                  


								                
								            frm.submit();
								            return false;
										});

		 				  $('#diadiem_cat_tt').change(function(){
						      var id = $(this).val();
						      $.ajax({
						        type: "POST",
						        url: "ajax/ajax_quan.php",
						        data: "id="+id,
						        success: function(result){
						          $('#diadiem_item_tt').html(result);
						          
						        }
						      });
						    })
</script>


<div class="relative width_common block_input_account">

      								<div class="row">
	      								<form action="so-dia-chi.html" method="post" id="frmtaodiachi" name="frmtaodiachi">	
	      									<div class="col-lg-6 col-md-6 col-sm-8">
		      									<div class="main_input_info_account">
		      										<div class="col-lg-12 col-md-12 col-sm-12">
							                            <div class="form-group relative block_icon_form">
							                                <div class="title_profile_page">Thông tin địa chỉ</div>
							                            </div>
							                        </div>

							                        <div class="col-lg-12 col-md-12 col-sm-12" style="display: none;">
							                            <div class="form-group relative block_icon_form">
							                                <input class="form-control" value="<?=$row1['id']?>" type="text" placeholder="Họ và tên" id="iddc" name="iddc" ">
							                          
							                            </div>
							                        </div>
							                       <div class="col-lg-12 col-md-12 col-sm-12">
							                            <div class="form-group relative block_icon_form">
							                                <input class="form-control" value="<?=$row1['hoten']?>" type="text" placeholder="Họ và tên" id="fullnamedc" name="fullnamedc" ">
							                          
							                            </div>
							                        </div>

							                        <div class="col-lg-12 col-md-12 col-sm-12">
								                        <div class="form-group">
								                        	<select id="diadiem_cat_tt" name="diadiem_cat_tt" class="form-control validate-select required-entry" aria-required="true" >

								                        		<?=listtinh($row1['tinh'])?>

								                        	
								                        	</select>
								                        </div>

							                        </div>
							                         <div class="col-lg-12 col-md-12 col-sm-12">
								                        <div class="form-group">
								                        	<select id="diadiem_item_tt" name="diadiem_item_tt" class="form-control validate-select required-entry" aria-required="true" >

								                        		<?=listquan($row1['quan'])?>
								                        	</select>
								                        </div>

							                        </div>
							                         <div class="col-lg-12 col-md-12 col-sm-12">
							                            <div class="form-group relative block_icon_form">
							                                <input class="form-control" value="<?=$row1['diachi']?>" type="text" placeholder="Địa chỉ" id="addressdc" name="addressdc" ">
							                          
							                            </div>
							                        </div>
							                         <div class="col-lg-12 col-md-12 col-sm-12">
							                            <div class="form-group relative block_icon_form">
							                                <input class="form-control" value="<?=$row1['dienthoai']?>" type="text" placeholder="Số điện thoại" id="dienthoaidc" name="dienthoaidc" ">
							                          
							                            </div>
							                        </div>
							                        <div class="col-lg-12 col-md-12 col-sm-12 space_bottom_5">
							                            <span class="txt_666">Nacos sẽ liên hệ số điện thoại này để giao hàng đến bạn và kiểm tra tình trang đơn hàng, đổi trả hàng khi cần.</span>
							                        </div>
							                         <div class="col-lg-12 col-md-12 col-sm-12">
							                            <div class="form-group">
							                                <label class="checkbox-inline">
							                                    <input type="checkbox" name="default_shipping" <?=($row1['stt']==1)?'checked="checked"':''?> id="defaultShipping" value="1"> Sử dụng địa chỉ này làm địa chỉ giao hàng
							                                </label>

							                            </div>
							                        </div>
							                        <div class="col-lg-3 ">
							                            <button id="btndiachi" name="btndiachi" type="submit" class="btn2 btn_site_1 width_common update-add">Lưu</button>
							                        </div>
		      									</div>
	      									</div>
	      								</form>
      								</div>
      							</div>