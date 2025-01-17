<div id="mucthanhtoan">


	<div class="container">

			 <div class="thanhdanhmuc">

              <a href="gio-hang.html">Shopping Cart</a><span><i class="fa fa-angle-right"></i></span> <a class="current">Checkout details</a> <span><i class="fa fa-angle-right"></i></span><a class="no-click">Order Complete</a>

        </div>


        <div class="noidungthanhtoan">

	        	<div class="khachhangdangnhap">
	        		  	   Khách hàng cũ? <a class="showformlogin">Click vào đây để đăng nhập</a>
	        	</div>

	        	<div class="formkhacdangnnhap" style="margin-bottom: 10px;">
	        		<p>Nếu bạn đã đi mua sắm với chúng tôi trước đây, vui lòng nhập thông tin của bạn vào các ô bên dưới. Nếu bạn là một khách hàng mới, xin 	vui lòng đến Thanh toán và  phần vận chuyển.</p>

	        		<form action="dang-nhap.html" method="post">
	        			
	        				<div class="khlogin1 col-md-6 col-sm-6 col-xs-12">
	        					<p class="cotinput">
                                    <label>Tên đăng nhập hoặc địa chỉ Email *</label>

                                    <input type="text" name="txtname">
                                </p>

	        				</div>
	        				<div class="khlogin2  col-md-6 col-sm-6 col-xs-12">

	        					  <p class="cotinput">
                                    <label>Mật khẩu *</label>

                                    <input type="password" name="txtpass">
                                </p>
	        				</div>

	        				<div class="col-xs-12" style="padding: 0">
	        					
	        					
	        					 <div class="cotinput1">
                                        <button type="submit" name="btndangnhap">Đăng nhập</button>
                                        <div class="checkbox ">
                                          <label><input type="checkbox" value="">Ghi nhớ thông tin</label>
                                        </div>
                                 </div>
	        				</div>

	        				<div class="col-xs-12" style="padding: 0">
	        					<div class="cotinput" style="padding-top: 10px;">
                                        <a href="quen-mat-khau.html">Quên mật khẩu?</a>
                                 </div>
	        				</div>


	        		</form>

	        	</div>

	        	<div class="khachhangdangnhap" >
	        		  	 <i class="fa fa-tag" style="color: orangered"></i>  Bạn có mã ưu đãi <a class="showmauudai">Nhấp vào đây để nhập mã</a>
	        	</div>

	        	<div class="formkhachnhapma">
	        			<div class="has-border">
	        					<div class="coupon1">
									<form>
										
											<input type="text" name="" placeholder="Mã ưu đãi">
											<button>Áp dụng mã ưu đãi</button>

									</form>
								</div>
	        			</div>
	        	</div>

        </div>


	</div>


</div>



<script type="text/javascript">

	$('.showformlogin').click(function(){


			if(!$(this).hasClass('active'))
	{
		$(this).addClass('active');

			$(this).closest('.noidungthanhtoan').find('.formkhacdangnnhap').slideDown("slow");


	}
	else
	{	
		$(this).removeClass('active');

			$(this).closest('.noidungthanhtoan').find('.formkhacdangnnhap').slideUp("slow");
	}
	})


	$('.showmauudai').click(function(){


			if(!$(this).hasClass('active'))
	{
		$(this).addClass('active');

			$(this).closest('.noidungthanhtoan').find('.formkhachnhapma').slideDown("slow");


	}
	else
	{	
		$(this).removeClass('active');

			$(this).closest('.noidungthanhtoan').find('.formkhachnhapma').slideUp("slow");
	}
	})
</script>