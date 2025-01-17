<!-- <link rel="stylesheet" href="media/js/datapicker/js/themes/base/jquery.ui.all.css" />			

		 -->

<script src="media/js/datapicker/js/ui/jquery.ui.core.js"></script>

<script src="media/js/datapicker/js/ui/jquery.ui.widget.js"></script>

<script src="media/js/datapicker/js/ui/jquery.ui.datepicker.js"></script>

<script type="text/javascript">

  $(function() {

	  $( "#ngaysinh" ).datepicker({

		  defaultDate: "+1w",

		  changeMonth: true,

		  changeYear: true,

		  dateFormat:'dd/mm/yy',

		  numberOfMonths: 1,

		  numberOfYeas: 1,

		  dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

		  onSelect: function( selectedDate ) {

																

		  }

	  });

	  

  });

</script>





  

        <?php

            if($_REQUEST['act']=='login'){

        ?>

        



        <div id="page_register">



        <div class="main_form_register">



                <div id="lg_register">



                    <div class="main_content_sub_res">

                            <form action="dang-nhap.html" method="post" id="frmDN1" name="frmDN1">

                                    <div class="block_more_login">

                                    <div class="space_bottom_10">Đăng nhập với Nacos.vn</div>

                                    <div class="form-group">

                                        <div class="relative">

                                              <input name="emaildn" id="emaildn1" type="text" placeholder="Nhập email hoặc số điện thoại" class="form-control">



                                        

                                            <i aria-hidden="true" class="fa fa-envelope-o"></i>

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <div class="relative">

                                            <input  name="passworddn"  id="passworddn1" autocomplete="off" type="password" placeholder="Nhập mật khẩu từ 6 - 32 ký tự" class="form-control" >

                                            <i aria-hidden="true" class="fa fa-lock"></i>

                                        </div>

                                       

                                

                                    </div>

                                    <div class="form-group">

                                        <label class="checkbox-inline"><input type="checkbox"> Nhớ mật khẩu</label>

                                        <a class="popup-forgot txt_color_1 pull-right" id="quenmk" >Quên mật khẩu</a>

                                        

                                        <div class="clearfix"></div>

                                    </div>

                                

                                

                          

                                  



                                    <button id="btndangnhap1" name="btndangnhap1" type="submit" class="btn btn_site_1">Đăng nhập</button>

                                </div>

                            </form>

                    </div>



                </div>

            



        </div>

        <div class="block_register_page_login">

            <div class="space_bottom_5 txt_15">Bạn chưa có tài khoản?</div>

            <a href="dang-ky.html" class="btn1 btn_site_2">Đăng ký</a>

        </div>



</div>

        <script type="text/javascript">

    

$( document ).ready(function() {

    



        $('#btndangnhap1').click(function(){



        

            var frm = $('#frmDN1');

            



                    var value = frm.find('#emaildn1').val();        

                     var telephonePattern = /^09[0-9]{8}|01[0-9]{9}|08[0-9]{8}/;

                    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

                    if(value=='')

                    {

                        alert('Vui lòng nhập thông tin tài khoản');

                        return false;

                    }

                    if(value != '' && ((!telephonePattern.test(value) && !emailPattern.test(value)) || (telephonePattern.test(value) && value.match(telephonePattern)[0] != value))){

                        

                        alert('Số điện thoại hoặc email không đúng định dạng');

                        frm.find('#emaildn1').val('');

                        return false;

                    }

                    

            

                    var pass1 = frm.find('#passworddn1');

                    if(pass1.val()==''){alert("Vui lòng nhập mật khẩu");pass1.val('');return false;}

                    if(pass1.val().length <6 || pass1.val().length >32){alert("Mật khẩu từ 6 đến 32 ký tự");pass1.val('');return false;}

                    





                

            frm.submit();

            return false;

        });

         

});



</script>



        <?php	

            }

			if($_REQUEST['act']=='quen-mat-khau'){







        ?>

		<div id="tieude_khungchinh2">



   <h1><a href="quen-mat-khau.html" title="QUÊN MẬT KHẨU">Quên mật khẩu</a></h1></div>

                          

        <article class="main_info_noidung">

            <style>							

				#dang_nhap_table{

					width:50%;

					margin:auto;

					

				

					font-weight:bold;

					margin-bottom:17px;

				

				}

				#title_dangnhap{

					color:#fff; text-align:center;  margin-bottom:6px; font-size:20px;

				}

				.txt_dk{

					        width: 98%;

    line-height: 40px;

    padding-left: 1%;

    border: 1px solid #ddd;

    margin: 11px 0px;

    border-radius: 5px;

    -moz-border-radius: 5px;

    -ms-border-radius: 5px;

    -webkit-border-radius: 5px;

    -o-border-radius: 5px;

				}

				#btnQMK{

					    height: 46px;

    width: 100%;

    margin-bottom: 11px;

    line-height: 25px;

    background: url(media/images/nen_menu.png) center left repeat-x;

    color: #FFF;

    background: #f26f21;

    font-weight: bold;

    border: none;

    border-radius: 5px;

    -moz-border-radius: 5px;

    -ms-border-radius: 5px;

    -webkit-border-radius: 5px;

    -o-border-radius: 5px;

    cursor: pointer;

    float: right;

				}

				#btnQMK:hover{

					background:#f26f21

				}	

				#frmQMK a{color:#f26f21}

				

				#frmQMK a:hover{

					text-decoration:underline;

				}

		   </style>

           <script language="javascript" src="admin/media/scripts/my_script.js"></script>

           <script language="javascript">

			function setQuenMatKhau(){					

				//KIểm tra email

				if(isEmpty(document.getElementById('txtemail_qmk'), "Xin nhập Email.")){						

					document.getElementById('txtemail_qmk').focus();

					return false;

				}

				if(!check_email(document.frmQMK.txtemail_qmk.value)){					

					alert("Email không hợp lệ");

					document.frmQMK.txtemail_qmk.focus();

					return false;

				}				

				

				document.frmQMK.submit();

			

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

            <form action="quen-mat-khau.html" name="frmQMK" id="frmQMK" method="post" onsubmit="return setQuenMatKhau()">

            <table border="0" cellpadding="0" cellpadding="0" id='dang_nhap_table'>

			<!--

                <tr>

                    <td colspan="2"><h2 style="color:#5EAF00; text-align:center; text-shadow:1px 0px 0px #FFFFFF,-1px 0px 0px #FFFFFF,0px 1px 0px #FFFFFF,0px -1px 0px #FFFFFF;">QUÊN MẬT KHẨU</h2></td>

                </tr>

				-->

                <tr>

                 

                    <td colspan="2"> <input type="text" name="txtemail_qmk" id='txtemail_qmk' placeholder="Email" class="txt_dk" oninvalid="InvalidMsgMailLienhe(this);"  oninput="InvalidMsgMailLienhe(this);"  required /></td>

                </tr> 

				<!--

                <tr>

                    <td>Mã xác nhận</td>

                    <td>:&nbsp;

                        <img src="captcha_image.php" name="qmkimg" id="qmkimg" style="height:27px;"> <img src="media/images/icon/reload.png" alt="Reload" onclick="nv_change_captcha('qmkimg','fcode_iavim');" style="cursor: pointer;">

                    </td>

                </tr>  

                <tr>

                    <td>Nhập mã xác nhận (*)</td>

                    <td>:&nbsp;

                        <input type="text" id="captcha_qmk" name="captcha_qmk" class="txt_dk">

                    </td>

                </tr> 

-->				

                <tr>

                    <td colspan="2" align="right" style="padding-top:10px;">

                        <input type="submit" name="btnQMK" id='btnQMK' value="Gửi lại mật khẩu" />         

                    </td>                                

                </tr>

                <tr>

                        <td colspan="2" align="right" style="padding-top:10px;">

                        	 <a href="dang-nhap.html" title="Đăng nhập">Đăng nhập</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="dang-ky.html" title="Đăng ký">Đăng ký</a>

                            

                        </td>                                

                    </tr>

            </table>

        </form>

            

        </article>

        <?php	

            }

			if($_REQUEST['act']=='user-info' && isset($_SESSION['login1']['email'])){

				 $email = htmlspecialchars(addslashes($_SESSION['login1']['email']));

                $d->reset();

                    $sql = "select * from #_member where email='$email'";

        

                $d->query($sql);

                $row = $d->fetch_array();

        ?>

		

	

  <script language="javascript" src="admin/media/scripts/my_script.js"></script>

            <script language="javascript">

            function setcapnhap(){                                   

                //Kiểm tra mật khẩu

                       

                //Kiểm tra họ tên

                if(isEmpty(document.getElementById('hotentt'), "Xin nhập Họ và tên của bạn.")){                             

                    document.getElementById('hotentt').focus();

                    return false;

                }

                

                //Kiểm tra Phone Number

                if(isEmpty(document.getElementById('phonett'), "Xin nhập Số Điện Thoại.")){     

                    document.getElementById('phonett').focus();

                    return false;

                }                            

                if(!isNumber(document.getElementById('phonett'), "Số điện thoại không hợp lệ.")){

                    document.getElementById('phonett').focus();

                    return false;

                }

                

                //Kiểm tra địa chỉ

                if(isEmpty(document.getElementById('diachitt'), "Xin nhập Địa chỉ.")){                              

                    document.getElementById('diachitt').focus();

                    return false;

                }

                                            

                

                document.frmTT.submit();

            

            }

            </script>   

          

            

            <div class="container">



                    <div class="tieudedangnhap">

                        <h2><?=_thongtincanhan?></h2>

                     </div>

                    <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom:30px;background:#f2f2f2">



                    <form action="thong-tin-ca-nhan.html" name="frmTT" id='frmTT' method="post" onsubmit="return setcapnhap()" >

                            <div class="thongtingiua">



                                    <div class="row_input">

                                            <div class="row_left col-xs-3">

                                                <label for="name">Họ tên (*)</label>

                                            </div>

                                            <div class="row_right  col-xs-9">

                                                    <input id="full_name" type="text" class="form-control valid" value="<?=$row['ten']?>" name="hotentt" placeholder="Họ tên (*)" aria-required="true" aria-invalid="false">



                                         </div>

                                           

                                    </div>



                                    <div class="row_input">

                                            <div class="row_left col-xs-3">

                                                <label for="address">Địa chỉ (*)</label>

                                            </div>

                                            <div class="row_right col-xs-9">

                                                    <input id="address" type="text" class="form-control" value="<?=$row['diachi']?>" name="diachitt" placeholder="Địa chỉ (*)">



                                            </div>

                                            <div class="clear"></div>

                                    </div>

                                    <div class="row_input">

                                            <div class="row_left col-xs-3">

                                                <label for="email">Email (*)</label>

                                            </div>

                                            <div class="row_right col-xs-9">



                                                    <input disabled="disabled" id="email1" type="text" class="form-control" value="phamquocductri1@gmail.com" name="email" placeholder="Email (*)">



                                                <!-- <input type="text" name="email" id="email" class="form-control" value="duyken@gmail.com" placeholder="Email (*)" /> -->

                                            </div>

                                            <div class="clear"></div>

                                        </div>

                                    <div class="row_input">

                                            <div class="row_left col-xs-3">

                                                <label for="phone">Điện thoại (*)</label>

                                            </div>

                                            <div class="row_right col-xs-9">



                                                    <input id="phone" type="text" class="form-control" value="<?=$row['dienthoai']?>" name="phonett" placeholder="Điện thoại (*)">



                                                <!-- <input type="text" name="phone" id="phone" class="form-control" value="0938938356" placeholder="Điện thoại (*)" /> -->

                                            </div>

                                            <div class="clear"></div>

                                        </div>



                                        <div class="row_input">

                                            <div class="row_left"></div>

                                            <div class="row_right">

                                                <button id="b-submit" name="btntt" type="submit" class="btn btnsubmit" value="1"><span>Lưu thay đổi</span></button>

                                            </div>

                                            <div class="clear"></div>

                                        </div>



                            </div>

                            </form>

                    </div>



            </div>



        <?php	

            }

			if($_REQUEST['act']=='doi-mat-khau' && isset($_SESSION['login1']['email'])){

		?>	



		

          <script language="javascript" src="admin/media/scripts/my_script.js"></script>

            <script language="javascript">

            function setDangNhap(){                 

                //Kiểm tra mật khẩu

                if(isEmpty(document.getElementById('matkhaucu'), "Xin nhập Mật khẩu cũ.")){                     

                    document.getElementById('matkhaucu').focus();

                    return false;

                }

                //KIểm tra mật khẩu mới

                if(isEmpty(document.getElementById('matkhaumoi'), "Xin nhập Mật khẩu mới.")){                      

                    document.getElementById('matkhaumoi').focus();

                    return false;

                }       

                //Kiểm tra mật khẩu

                if(document.getElementById('matkhaucu').value == document.getElementById('matkhaumoi').value){ 

                    alert("Mật khẩu cũ và mật khẩu mới không thể trùng nhau!");                 

                    document.getElementById('matkhaucu').focus();

                    return false;

                }

          

                

                document.frmDN1.submit();

            

            }

            </script>  

            

               <div class="container">



                    <div class="tieudedangnhap">

                        <h2><?=_doimatkhau?></h2>

                     </div>

                    <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom:30px;background:#f2f2f2">



                    <form action="doi-mat-khau.html" name="frmDN1" id="frmDN1" method="post" onsubmit="return setDangNhap()" >

                            <div class="thongtingiua">



                                    <div class="row_input">

                                            <div class="row_left col-xs-3">

                                                <label for="name">Pass cũ (*)</label>

                                            </div>

                                            <div class="row_right  col-xs-9">

                                                    <input  type="password" class="form-control valid" name="matkhaucu" placeholder="Nhập pass cũ (*)" aria-required="true" aria-invalid="false">



                                         </div>

                                           

                                    </div>



                                    <div class="row_input">

                                            <div class="row_left col-xs-3">

                                                <label for="address">Pass mới (*)</label>

                                            </div>

                                            <div class="row_right col-xs-9">

                                                    <input  type="password" class="form-control"  name="matkhaumoi" placeholder="Nhập pass mới (*)">



                                            </div>

                                            <div class="clear"></div>

                                    </div>

                                    



                                        <div class="row_input">

                                            <div class="row_left"></div>

                                            <div class="row_right">

                                                <button id="b-submit" name="btntt" type="submit" class="btn btnsubmit" value="1"><span>Lưu thay đổi</span></button>

                                            </div>

                                            <div class="clear"></div>

                                        </div>



                            </div>

                            </form>

                    </div>



            </div>

        <?php	

			}

        ?>

   