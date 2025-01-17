<script>
		function validateEmail(email) {
			//alert(email);
		  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		  return re.test(email);
		}
	
		function InvalidMsg(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập họ tên');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		function InvalidMsgTinnhanMailthanhvien(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập tin nhắn');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		
		
		function InvalidMsgHotenLienhe(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập họ tên');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		function InvalidMsgDiachi(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập địa chỉ');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		function InvalidMsgHotenMailthanhvien(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập họ tên');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		function InvalidMsgHotenLienhenhanh(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập họ tên');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		function InvalidMsgThanhphoLienhenhanh(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập họ tên');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		function InvalidMsgTieudeLienhenhanh(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập họ tên');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		function InvalidMsgCongtyLienhenhanh(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập công ty');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		
		function InvalidMsgNoidungLienhenhanh(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập nội dung');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		function InvalidMsgTendangnhapDangky(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập tên đăng nhập');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		function InvalidMsgTendangnhapDangnhap(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập tên đăng nhập');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		
		function InvalidMsgTenDathangnhanh(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập họ tên');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		function InvalidMsgNoidungDathangnhanh(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập nội dung');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		

		
		
		
		
		function InvalidMsgDiachiDathangnhanh(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập địa chỉ');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		function InvalidMsgDiachiDangky(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập địa chỉ');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		
		
		function InvalidMsgHotenDangky(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập họ tên');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		
		function InvalidMsgMatkhau(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập mật khẩu');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		
		function InvalidMsgMatkhaudangky(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập mật khẩu');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		function InvalidMsgNhaplaimatkhaudangky(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập mật khẩu');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		
		function InvalidMsgDiachiThanhtoan(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập địa chỉ');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		
		function InvalidMsgHotenThanhtoan(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập họ tên');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
			
		function InvalidMsgMailLienhe(textbox) {
    
			
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập email');
			} else if (!validateEmail(textbox.value)){
				textbox.setCustomValidity('Email không hợp lệ');
			}
					
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		function InvalidMsgMailLienhe(textbox) {
    
			
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập email');
			} else if (!validateEmail(textbox.value)){
				textbox.setCustomValidity('Email không hợp lệ');
			}
					
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		
		
		function InvalidMsgMailLienhenhanh(textbox) {
    
			
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập email');
			} else if (!validateEmail(textbox.value)){
				textbox.setCustomValidity('Email không hợp lệ');
			}
					
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		function InvalidMsgMailMailthanhvien(textbox) {
    
			
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập email');
			} else if (!validateEmail(textbox.value)){
				textbox.setCustomValidity('Email không hợp lệ');
			}
					
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		
		
		
		function InvalidMsgMailDangky(textbox) {
    
			
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập email');
			} else if (!validateEmail(textbox.value)){
				textbox.setCustomValidity('Email không hợp lệ');
			}
					
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		
		function InvalidMsgMailQuenmatkhau(textbox) {
    
			
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập email');
			} else if (!validateEmail(textbox.value)){
				textbox.setCustomValidity('Email không hợp lệ');
			}
					
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		
		
		
		
		
		function InvalidMsgMailDangnhap(textbox) {
    
			
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập email');
			} else if (!validateEmail(textbox.value)){
				textbox.setCustomValidity('Email không hợp lệ');
			}
					
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		
		
		function InvalidMsgMailThanhtoan(textbox) {
    
			
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập email');
			} else if (!validateEmail(textbox.value)){
				textbox.setCustomValidity('Email không hợp lệ');
			}
					
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		
		
		function InvalidMsgDienthoaiLienhe(textbox) {
			var numphone = textbox.value;
			
			var numphone2 = numphone.length;
			
		
			
			
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập số điện thoại');
			}
			else if (numphone2<8 || numphone2>11||numphone2==9){
				textbox.setCustomValidity('Số điện thoại không hợp lệ');
			}
			else if (isNaN(numphone)){
				textbox.setCustomValidity('Vui lòng nhập số');
			}
			
			
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		
		function InvalidMsgDienthoaiMailthanhvien(textbox) {
			var numphone = textbox.value;
			
			var numphone2 = numphone.length;
			
		
			
			
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập số điện thoại');
			}
			else if (numphone2<8 || numphone2>11||numphone2==9){
				textbox.setCustomValidity('Số điện thoại không hợp lệ');
			}
			else if (isNaN(numphone)){
				textbox.setCustomValidity('Vui lòng nhập số');
			}
			
			
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		
		
		function InvalidMsgDienthoaiLienhenhanh(textbox) {
			var numphone = textbox.value;
			
			var numphone2 = numphone.length;
			
		
			
			
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập số điện thoại');
			}
			else if (numphone2<8 || numphone2>11||numphone2==9){
				textbox.setCustomValidity('Số điện thoại không hợp lệ');
			}
			else if (isNaN(numphone)){
				textbox.setCustomValidity('Vui lòng nhập số');
			}
			
			
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		
		function InvalidMsgDienthoaiDangky(textbox) {
			var numphone = textbox.value;
			
			var numphone2 = numphone.length;
			
		
			
			
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập số điện thoại');
			}
			else if (numphone2<8 || numphone2>11||numphone2==9){
				textbox.setCustomValidity('Số điện thoại không hợp lệ');
			}
			else if (isNaN(numphone)){
				textbox.setCustomValidity('Vui lòng nhập số');
			}
			
			
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		function InvalidMsgPhoneDathangnhanh(textbox) {
			var numphone = textbox.value;
			
			var numphone2 = numphone.length;
			
		
			
			
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập số điện thoại');
			}
			else if (numphone2<8 || numphone2>11||numphone2==9){
				textbox.setCustomValidity('Số điện thoại không hợp lệ');
			}
			else if (isNaN(numphone)){
				textbox.setCustomValidity('Vui lòng nhập số');
			}
			
			
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		
		
		
		function InvalidMsgDienthoaiThanhtoan(textbox) {
			var numphone = textbox.value;
			
			var numphone2 = numphone.length;
			
		
			
			
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập số điện thoại');
			}
			else if (numphone2<8 || numphone2>11||numphone2==9){
				textbox.setCustomValidity('Số điện thoại không hợp lệ');
			}
			else if (isNaN(numphone)){
				textbox.setCustomValidity('Vui lòng nhập số');
			}
			
			
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		
		function InvalidMsgNoidungLienhe(textbox) {
    
			if (textbox.value == '') {
				textbox.setCustomValidity('Vui lòng nhập nội dung');
			}
			
			else {
				textbox.setCustomValidity('');
			}
			return true;
		}
		
		</script>