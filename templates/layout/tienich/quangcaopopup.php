<?php

		
		$sql_web2="select photo,link from #_photo where com='popup' and hienthi=1 limit 0,1";
		$d->query($sql_web2);
		$popup_main=$d->fetch_array();
		if($popup_main['photo']!=""){
?>
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
        height: 400px;
        margin: 0 auto;
		padding:1px;
        position:relative;
        width: 600px;
        z-index: 999999;
		margin-top:100px;
		margin-left:300px;
		border:2px solid #ffffff;
    }
    
	#popupContactClose{
		float:right;
		right:5px;
		top:5px;
		position:absolute;;
		z-index:99999;
		opacity:0.7;
		cursor:pointer !important;
				
		transition:0.2s;
		-moz-transition:0.2s;
		-ms-transition:0.2s;
		-o-transition:0.2s;
		-webkit-transition:0.2s;
	}
	#popupContactClose:hover{
		opacity:1;		
	}
</style>
	
<?php if((!isset($_GET['com']) || (isset($_GET['com']) && $_REQUEST['com']=='trang-chu')) && !isset($_SESSION['popup'])) { 
	$_SESSION['popup']=1;
?>
<div id='khung_popup'>
    <div id="popupContact">
        
        <a id="popupContactClose" onclick="PopupClose()"><img style="float:right; " src="media/images/icon/delete.png" width="13" height="12" border="0" /></a>
       
        <a id='popup_click' href="<?=$popup_main['kink']?>" target="_blank" onclick="PopupClose()">
            <img src="<?=_upload_hinhanh_l.$popup_main['photo'] ?>" height="400" width="600" />
        </a>
        
        
            
        
    </div>
    <div id="backgroundPopup"></div>
</div>
<?php }?>
<?php } ?>

<!--Quang cao truoc khi vao web-->