<div id="tieude_khungchinh2">
<a href="trang-chu.html" title="trang chủ" class="atrangchu">Trang chủ</a>
<span class="muitenthanhtieude"> > </span>
  <h1><a href="dang-ky.html" title="Đăng ký">Đăng ký thành viên</a></h1></div>
		
                  <link rel="stylesheet" href="media/js/datapicker/js/themes/base/jquery.ui.all.css" />					
                  <script src="media/js/datapicker/js/ui/jquery.ui.core.js"></script>
                  <script src="media/js/datapicker/js/ui/jquery.ui.widget.js"></script>
                  <script src="media/js/datapicker/js/ui/jquery.ui.datepicker.js"></script>
                 <script type="text/javascript">
                    $(function() {
                        $( "#ngaysinh1" ).datepicker({
                            defaultDate: "+1w",									 
                            changeMonth: true,
                            changeYear: true,
                            dateFormat:'dd/mm/yy',
                            numberOfMonths: 1,       
                            onSelect: function( selectedDate ) {
                                                                                  
                            }
                        });
                        
                    });
                </script> 
                
                 <style>
                      #form_dangky1{
                          background-color:#fff;
                          
                          padding:10px;
                          width:500px;
						  line-height:40px;
                          margin:auto;                                                                        
                          border-radius:10px;
                          -moz-border-radius:10px;
                          -ms-border-radius:10px;
                          -o-border-radius:10px;
                          -ms-border-radius:10px;																
                      }
                                                     
                      #form_dangky1 .txt_dk{
                          width:240px;
                          line-height:25px;
                          padding:0px 5px;
                          margin:2px 0px;
                      }
                      #form_dangky1 #btnDk1,#btnReset1{
                          padding:0px 5px;
                          height:25px;
                          line-height:25px;
                          background-color:#eb4182;
                          color:#FFF;
                          font-weight:bold;
                          border:none;
                          border-radius:5px;
                          -moz-border-radius:5px;
                          -ms-border-radius:5px;
                          -webkit-border-radius:5px;
                          -o-border-radius:5px;
                          cursor:pointer;
                      }
                      #form_dangky1 #btnDk1:hover,#btnReset1:hover{
                          text-decoration:underline;
                      }							
                      #form_dangky1 span{
                          color:#F00;
                      }
                 </style>
                 
                 
                 
                 <script language="javascript" src="admin/media/scripts/my_script.js"></script>
                  <script language="javascript">
                  function setDangKy1(){					
                      //KIểm tra email
                      if(isEmpty(document.getElementById('txtemail_dk1'), "Xin nhập Email.")){						
                          document.getElementById('txtemail_dk1').focus();
                          return false;
                      }
                      if(!check_email(document.frmDK1.txtemail_dk.value)){					
                          alert("Email không hợp lệ");
                          document.frmDK1.txtemail_dk1.focus();
                          return false;
                      }
                      
                      //Kiểm tra mật khẩu
                      if(isEmpty(document.getElementById('txtmatkhau_dk1'), "Xin nhập Mật Khẩu.")){						
                          document.getElementById('txtmatkhau_dk1').focus();
                          return false;
                      }
                      if(document.getElementById('txtmatkhau_dk1').value.length<6){
                          alert("Mật khẩu phải lớn hơn hoặc bằng 6 ký tự!");						
                          document.getElementById('txtmatkhau_dk1').focus();
                          return false;
                      }
                      if(isEmpty(document.getElementById('txtnlmatkhau_dk1'), "Xin nhập Xác Nhận Lại Mật Khẩu.")){				
                          document.getElementById('txtnlmatkhau_dk1').focus();
                          return false;
                      }
                      if(document.getElementById('txtnlmatkhau_dk1').value.length<6){
                          alert("Xác nhận mật khẩu phải lớn hơn hoặc bằng 6 ký tự!");						
                          document.getElementById('txtnlmatkhau_dk1').focus();
                          return false;
                      }
                      if(document.getElementById('txtmatkhau_dk1').value != document.getElementById('txtnlmatkhau_dk1').value){				
                          alert("Mật khẩu và xác nhận mật khẩu không trùng nhau.");
                          document.getElementById('txtnlmatkhau_dk1').focus();
                          return false;
                      }
                      
                      //Kiểm tra họ tên
                      if(isEmpty(document.getElementById('txthoten_dk1'), "Xin nhập Họ Tên.")){								
                          document.getElementById('txthoten_dk1').focus();
                          return false;
                      }
                      
                      //Kiểm tra Số Điện Thoại
                      if(isEmpty(document.getElementById('txtdienthoai_dk1'), "Xin nhập Số Điện Thoại.")){		
                          document.getElementById('txtdienthoai_dk1').focus();
                          return false;
                      }                            
                      if(!isNumber(document.getElementById('txtdienthoai_dk1'), "Số Điện Thoại không hợp lệ.")){
                          document.getElementById('txtdienthoai_dk1').focus();
                          return false;
                      }
                      
                      //Kiểm tra địa chỉ
                      if(isEmpty(document.getElementById('txtdiachi_dk'), "Xin nhập Địa Chỉ.")){								
                          document.getElementById('txtdiachi_dk').focus();
                          return false;
                      }
                                                  
                      
                      document.frmDK1.submit();
                  
                  }
                  </script> 
				  <!--
                  <script type="text/javascript">
                  function dcv_random(a){

                      for(var b="",c=0;c<a;c++)b+="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890".charAt(Math.floor(Math.random()*62));
                      return b
                  }
                  function nv_change_captcha(a,b){
                      var c=document.getElementById(a);
                      nocache=dcv_random(10);
                      c.src="captcha_image.php?&nocache="+nocache;	
                      document.getElementById(b).value="";return!1
                  }
                  </script> 
-->				  
                           
                    <div id='form_dangky1'>                
                        <form action="dang-ky.html" name="frmDK" id='frmDK1' method="post" enctype="multipart/form-data" onsubmit="return setDangKy1()" >
						  
                            <table border="0" cellpadding="0" cellpadding="0">
                                <tr>
                                    <td>Email</td>
                                    <td><span>(*)</span>:&nbsp; <input type="text" name="txtemail_dk" id='txtemail_dk1' class="txt_dk" /></td>
                                </tr>
                                <tr>
                                    <td>Mật khẩu</td>
                                    <td><span>(*)</span>:&nbsp; <input type="password" name="txtmatkhau_dk" id='txtmatkhau_dk1' class="txt_dk" /></td>
                                </tr>
                                <tr>
                                    <td>Nhập lại mật khẩu</td>
                                    <td><span>(*)</span>:&nbsp; <input type="password" name="txtnlmatkhau_dk" id='txtnlmatkhau_dk1' class="txt_dk" /></td>
                                </tr>
                                <tr>
                                    <td>Họ tên</td>
                                    <td><span>(*)</span>:&nbsp; <input type="text" name="txthoten_dk" id='txthoten_dk1' class="txt_dk" /></td>
                                </tr>
                                <tr>
                                    <td>Số điện thoại</td>
                                    <td><span>(*)</span>:&nbsp; <input type="text" name="txtdienthoai_dk" id='txtdienthoai_dk1' class="txt_dk" /></td>
                                </tr>
                                <tr>
                                    <td>Giới tính</td>
                                    <td><span>(*)</span>:&nbsp; 
                                        <input type="radio" checked="checked" value="1" name="gioitinh_dk" /> Nam &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="gioitinh_dk" value="0" /> Nữ
                                    </td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ</td>
                                    <td><span>(*)</span>:&nbsp; <input type="text" name="txtdiachi_dk" id='txtdiachi_dk' class="txt_dk" /></td>
                                </tr>
                                <tr>
                                    <td>Ngày sinh</td>
                                    <td><span>(*)</span>:&nbsp;
                                        <input type="text" name="ngaysinh" id='ngaysinh1'  class="txt_dk" value="<?php $now = getdate(); echo ($now["mday"]."/".$now["mon"]."/".$now["year"]); ?>" />
                                    </td>
                                </tr>
								<!--
								 <tr>
                                    <td>Trở thành thành viên ưu tiên</td>
                                    <td><span>(*)</span>:&nbsp; 
                                        <input type="radio"  value="1"  name="trothanhtvut" /> Có &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio"  value="0"  checked="checked" name="trothanhtvut" /> Không
                                    </td>
                                </tr>
								
								<tr>
                                    <td>Mặt trước chứng minh nhân dân:</td>
                                    <td><span>(*)</span>:&nbsp;
                                      <input type="file" name="file" id="file"> </br>
                                    </td>
                                </tr>
								
								
								<tr>
                                    <td>Mặt sau chứng minh nhân dân:</td>
                                    <td><span>(*)</span>:&nbsp;
                                        <input type="file" name="file1" id="fileToUpload"></br>
                                    </td>
                                </tr>
								
								-->
								<!--
                                <tr>
                                    <td>Mã kiểm tra</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <img src="captcha_image.php" name="vimg" id="vimg" style="height:27px;"> <img src="media/images/icon/reload.png" alt="Reload" onclick="nv_change_captcha('vimg','fcode_iavim');" style="cursor: pointer;">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nhập mã</td>
                                    <td><span>(*)</span>:&nbsp;
                                        <input type="text" id="captcha" name="captcha" class="txt_dk">
                                    </td>
                                </tr>
								-->
                                <tr>
                                    <td colspan="2" align="right" style="padding-top:10px;">
                                        <input type="submit" name="btnDk" id='btnDk1' value="Đăng ký" />
                                        <input type="reset" name="btnReset" id='btnReset1' value="Reset" />
                                    </td>                                
                                </tr>
                            </table>
                        </form>
                    </div>        
                <div class="clear"></div>
                
       




