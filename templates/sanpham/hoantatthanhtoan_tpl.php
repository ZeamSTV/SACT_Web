
<?php

	 	 @$id = intval($_GET['id']);

		$d->reset();
		$sql="select * from #_donhang where id=".$id;
		$d->query($sql);
		$donhang=$d->fetch_array();


		

?>
<div style="padding: 20px 50px;">
<div class="block_check_susscess">


		<p class="txt_15">Chào bạn <span class="txt_color_1"><?=get_name($donhang['idmember'])?></span>,</p>
		<p>Cảm ơn bạn đã đặt hàng thành công tại THIENMINHPHU.COM!</p>
		<p>Thời gian dự kiến giao hàng từ 2 đến 3 ngày kể từ thời gian đặt</b>
                                (Không tính CN &amp; ngày lễ, không bao gồm sản phẩm đặt hàng trước)
                            </p>
         <p>Thông tin chi tiết về đơn hàng đã được gửi đến địa chỉ email <b class="txt_color_1"><?=$donhang['email']?></b>. Nếu không tìm thấy vui lòng kiểm tra hộp thư <b>Spam</b> hoặc <b>Junk Folder</b></p>


         <p>Để việc xử lý giao hàng nhanh chóng, Nacos.vn có thể sẽ không gọi điện thoại xác nhận đơn hàng. Hệ thống tự động xử lý và nhân viên giao hàng sẽ liên hệ trực tiếp với bạn.</p>
         <div>Mọi thắc mắc vui lòng liên hệ: <b class="txt_color_1"><?=$company['dienthoai']?></b></div>


</div>

</div>