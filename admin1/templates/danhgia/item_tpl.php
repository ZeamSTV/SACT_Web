<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>

<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "exact",
        elements : "noidung",
		theme : "advanced",
		convert_urls : false,
		plugins : "autolink,lists,pagebreak,style,layer,table,advhr,advimage,imagemanager,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",
height:"500px",
    width:"100%",
	remove_script_host : false,

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",		
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>

<script>
$(document).ready(function() {
$("#chonhet").click(function(){
	var status=this.checked;
	$("input[name='chon']").each(function(){this.checked=status;})
});

$("#send").click(function(){
	var listid="";
	$("input[name='chon']").each(function(){
		if (this.checked) listid = listid+","+this.value;
    	})
	listid=listid.substr(1);	 //alert(listid);
	if (listid=="") { alert("Bạn chưa chọn mục nào"); return false;}
	hoi= confirm("Xác nhận muốn gửi thư đi?");
	if (hoi==true){ document.frm.listid.value=listid; document.frm.submit();}
});
});
</script>

<?php

  function get_tenspdanhgia($id)
  {
    global $d;
    $sql="select ten_vi from #_product where id=".$id;
    $d->query($sql);
    $ten=$d->fetch_array($sql);
    return $ten['ten_vi'];

  }
    function get_hinhspdanhgia($id)
    {
      global $d;
    $sql="select photo from #_product where id=".$id;
    $d->query($sql);
    $ten=$d->fetch_array($sql);
    return $ten['photo'];

    }
      function get_tennguoidanhgia($id)
  {
    global $d;
    $sql="select ten from #_member where id=".$id;
    $d->query($sql);
    $ten=$d->fetch_array($sql);
    return $ten['ten'];

  }
?>
<!-- Breadcrumbs Start -->
  <div class="row breadcrumbs">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <ul class="breadcrumbs">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="index.php?com=danhgia&act=man" title="Email đăng ký">Đánh giá</a></li>
      </ul>
    </div>
  </div>
  <!-- Breadcrumbs End -->
        
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  	  	<!--<div class="inner" style="margin-bottom:10px;">
            <div class="message-box info">
              <i class="fa fa-exclamation-circle"></i>
              <p>Lưu ý: Chỉ nên có tối đa 4-5 bản đồ, tên bản đồ không nên đặt dài quá!</p>
            </div>
        </div>-->
        
      <!-- Inline Form Start -->      	      
        <div class="boxed no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="inner">
          	            
            <!-- Title Bar Start -->
            <div class="title-bar">               
              <!-- <div class="col-md-8" style="padding-left:0px; padding-top:7px; padding-bottom:7px;">                 
              	<h4>Danh sách ý kiến</h4>     
              </div> -->
            <!--   <div class="col-md-4 paging_0px">  
              	<form action="index.php?com=danhgia&act=man<?=$chuoi_noi_curpage?>" method="post" class="inline-form">
                	<div id="timkiem_khung">
                    	<input type="text" name="search" id='search' value="<?=@$_REQUEST['search']?>" placeholder="Nhập email cần tìm ..." class='timkiem_input' />
                        <input type="image" name="btnSearch" src="media/images/search-focus.png" value="Tìm kiếm" id='nut_timkiem' />
                    </div>                    
                </form>
              </div> -->
              <div class="clear"></div>     
            </div>
            <!-- Title Bar End -->                                  
            
            <form name="frm" method="post" action="index.php?com=danhgia&act=send" enctype="multipart/form-data">		    
				<input type="hidden" name="listid">
            <!-- Table Holder Start -->
            <div class="table-holder">

              <table class="stripe-rows" cellspacing="0" cellpadding="0" width="100%" border="1">            
                <thead>
                  <th style="width:5%;"><input type="checkbox" name="chonhet" id="chonhet" /></th>
                  <th>Hình</th>
                  <th>Sản phẩm được đánh giá</th> 
                   <th>Người đánh giá</th> 
                    <th>Star</th>   
                     <th>Thời gian đánh gía</th>                  
                  <th style="width:5%;">Xóa</th>
                  <th style="width:5%;">Xem</th>
                </thead>
                <tbody>
                  <?php 
				  	if(count($items)!=0){
						foreach($items as $k=>$v){
				  ?>
                  <tr>
                    <td style="width:5%;"><input type="checkbox" name="chon" id="chon" value="<?=$v['id']?>" class="chon" /></td>    
                    <td><img width="50" src="<?=_upload_sanpham.get_hinhspdanhgia($v['id_sp'])?>"></td>                
                    <td><b><?=get_tenspdanhgia($v['id_sp'])?></b></td>
                     <td><b><?=get_tennguoidanhgia($v['id_user'])?></b></td>
                      <td><b><?=$v['loai']?></b></td>
                       <td><b><?=date('H:i | d/m/Y',$v['ngaytao'])?></b></td>
                    <td style="width:5%;"><a href="index.php?com=danhgia&act=delete&id=<?=$v['id']?><?=$chuoi_noi_curpage?>" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="media/images/delete.png" border="0" title="Xóa" /></a></td>
                      <td style="width:5%;"><a href="index.php?com=danhgia&act=edit&id=<?=$v['id']?><?=$chuoi_noi_curpage?>" ><img src="media/images/edit.png" border="0" title="Xem" /></a></td>
                  </tr>
                  <?php	
						}
					}
				  ?>
                                                      
                </tbody>
              </table>
              <div class="clear"></div>

            </div>
            <!-- Table Holder End -->

            <div class="clearfix"></div>
           
            </form>

          </div>
        </div>
        <!-- Inline Form End -->
  </div>