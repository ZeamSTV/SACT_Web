<script type="text/javascript">
	
	function checkValue(){
		if(document.getElementById('user').value==''){
			return false;	
		}
		if(document.getElementById('email').value==''){
			return false;	
		}
		document.frm_re_pass.submit();
		
	}
	
</script>
<div id="info-left">
  <div class="info-left-title"><span>QUÊN MẬT KHẨU</span></div>
  <div class="info-left-content">
  	<div class="text">
    	<p style="text-align:center; font-weight: bold; color: #777;">Vui lòng điền chính xác những thông tin dưới đây. Chúng tôi sẽ cấp lại password cho bạn.</p>
    	<form method="post" action="re-password.html" id="frm_re_pass" name="frm_re_pass">
        <table cellspacing="10" style="width: 350px; margin: 0px auto">
          <tr>
            <td><span style="font-weight: bold; color:#036;">User</span></td>
            <td><input type="text" name="user" id="user" value="" class="login" /></td>
          </tr>
          
          <tr>
            <td><span style="font-weight: bold; color:#036;">Email</span></td>
            <td><input type="text" name="email" id="email" value="" class="login" /></td>
          </tr>
          
          <tr>
          	<td></td>
            <td ><input type="button" value="Gửi đi" class="button" onclick="checkValue()" /></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div> 
