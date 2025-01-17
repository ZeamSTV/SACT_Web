<!--Quang cao truoc khi vao web-->
	<script type="text/javascript">
    function PopupClose()
    {
        document.getElementById("popupContact").style.display = "none";
        document.getElementById("popupContactClose").style.display = "none";
        document.getElementById("backgroundPopup").style.display = "none";
        document.getElementById("popupContain").style.display = "none";
		document.getElementById("khung_popup").style.display = "none";
    }
	$(document).ready(function(e) {
        $("#popupContactClose").click(function(e) {
            $("#popupContact,#popupContactClose,#backgroundPopup,#popupContain,#khung_popup").css('display','block').fadeOut(1000);
        });
    });
</script>
<style type="text/css">
	#khung_popup{
		width:100%;
		height:100%;
		float:left;
		position:fixed;
		top:0;
		left:0;
		z-index:999999;
	}
	#backgroundPopup {
        background: none repeat scroll 0 0 #000000;
        border: 1px solid #CECECE;
        height: 100%;
        left: 0;       
        opacity: 0.5;     
        top: 0;
        width: 100%;
		position:absolute;
        z-index: 888888;
    }
    #popupContact {
        font-size: 12px;
        height: 120px;
        margin: 0 auto;
		padding:1px;
        position:relative;
        width: 350px;
        z-index: 999999;
		margin-top:250px;
		margin-left:450px;
		border:2px solid #ffffff;
		background-color:#FFFFFF;
		
		border-radius:6px;
		-moz-border-radius:6px;
		-webkit-border-radius:6px;
		-ms-border-radius:6px;
		-o-border-radius:6px;
    }
    
	#popupContactClose{
		float:right;
		right:5px;
		top:5px;
		position:absolute;;
		z-index:99999;		
		cursor:pointer !important;
		
	}	
</style>
	
<?php if(!isset($_GET['com']) || (isset($_GET['com']) && $_REQUEST['com']=='trang-chu') && !isset($_SESSION['email_dk'])) { ?>
<div id='khung_popup'>
    <div id="popupContact">
        
        <a id="popupContactClose" onclick="PopupClose()"><img style="float:right; " src="media/images/icon/delete.png" width="13" height="12" border="0" /></a>
       
        <div style="width:300px; margin:auto; margin-top:20px;">
        	<style>				
				.text_tv1{
					width:280px;
					height:30px;
					line-height:30px;
					font-size:13px;
					padding:0px 10px;
					color:#333;
					float:left;
					font-weight:bold;
					border:1px solid #333;;						
				}
				.dk_submit1{
					width:100px;
					height:25px;
					border:none;
					float:left;
					line-height:25px;
					margin-left:100px;
					cursor:pointer;
					text-align:center;
					color:#FFF;
					font-weight:bold;
					background:url(media/images/nen_menu_top.png) repeat-x;
					
					border-radius:6px;
					-moz-border-radius:6px;
					-webkit-border-radius:6px;
					-ms-border-radius:6px;
					-o-border-radius:6px;
				}
				.dk_submit1:hover{
					color:#FF0000;
				}
			</style>
        	<form action="newsletter.php" id='frmSend1' method="post">
            <p align="center" style="width:100%; line-height:30px; font-size:15px; color:#000; font-weight:bold; float:left;">Đăng ký nhận thông tin khuyến mãi</p>
            <br />                      
            <p><input type="text" name="email_tv" class="text_tv1" id='text_tv1' size="20" placeholder="Email của bạn ..." />
            </p>   
            <div class="clear"></div>         
            <p class="dktv" style="margin-top:10px;"><input type="submit" name="btn_gui1" class="dk_submit1" id='dk_submit_gui1' value="Gửi" /></p>
            </form>
            <script>
                $(document).ready(function(e) {
                    $('#dk_submit_gui1').click(function(){
                        var el = $('#text_tv1');						
                        var emailRegExp = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.([a-z]){2,4})$/;
                        if(el.val()==''){
                            alert('Xin vui lòng nhập địa chỉ email của bạn');
                            el.focus();
                            return false;}
                        if(!emailRegExp.test(el.val())){
                            el.focus();
                            alert('Email không đúng định dạng');
                            return false;
                        }
                        document.frmSend1.submit();																									
                    });
                });
            </script>
            
            <div class="clear"></div>
        </div>
        
        
            
        
    </div>
    <div id="backgroundPopup"></div>
</div>
<?php }?>

<!--Quang cao truoc khi vao web-->