         <script type="text/javascript">
    
$( document ).ready(function() {
    

        $('#btndangnhap1').click(function(){

        
            var frm = $('#frmDN1');
            

                var value = frm.find('#emaildn1').val();     
                
                    if(value=='')
                    {

                            $('#emaildn-error').html('');
                         $("#emaildn1").after('<div for="email" generated="true" class="mage-error" id="emaildn-error">VUi lòng nhập số điện thoại hoặc email .</div>');
                       return false;

                    }
                    else
                    {
                        $('#emaildn-error').html('');

                    }
                
                    var pass1 = frm.find('#passworddn1');
                    if(pass1.val()==''){

                            $('#passdn-error').html('');
                             $("#passworddn1").after('<div for="email" generated="true" class="mage-error" id="passdn-error">Vui lòng nhập mật khẩu</div>');
                            return false;

                    }
                    else
                    {
                         $('#passdn-error').html('');
                    }
                    



                
            frm.submit();
            return false;
        });
         
});

</script>
 <div id="page_register">
          <div class="container">
        <div class="main_form_register">

                <div id="lg_register">

                    <div class="main_content_sub_res">
                            <form action="dang-nhap.html" method="post" id="frmDN1" name="frmDN1">
                                    <div class="block_more_login">
                                    <div class="space_bottom_10"><b>ĐĂNG NHẬP</b></div>
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
                                       
                                          <input type="text" hidden="hidden" name="urllogin" value="<?=q_getCurrentPageURL1()?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="checkbox-inline"><input type="checkbox"> Nhớ mật khẩu</label>
                                        <a href="quen-mat-khau.html" class="popup-forgot txt_color_1 pull-right"  >Quên mật khẩu</a>
                                        
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
</div>