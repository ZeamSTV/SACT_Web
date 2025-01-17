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

function loaitin($loai){


    
  switch ($loai) {
    case 1:
    $kq='Tin thường';
    break;
    case 2:
    $kq='Tin ưu tiên';
    break;
    case 3:
    $kq='Tin nổi bật';
    break;
    case 4:
    $kq='Tin Vip';
    break;
    case 5:
    $kq='Tin đặc biệt';
    break;
  
  }

  return $kq;

}

?>

<!-- Breadcrumbs Start -->

  <div class="row breadcrumbs">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

      <ul class="breadcrumbs">

        <li><a href="index.php"><i class="fa fa-home"></i></a></li>

        <li><a href="index.php?com=quanlytin&act=man" title="Email đăng ký">Quản lý tin</a></li>

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

              <div class="col-md-8" style="padding-left:0px; padding-top:7px; padding-bottom:7px;">                 

          

   <!--              <a href="index.php?com=quanlytin&act=add<?=$chuoi_noi_curpage?>" class="btn btn-success"><i class="fa fa-check"></i> Thêm mã giảm giá</a>  -->

       <!--           <a href="index.php?com=quanlytin&act=add<?=$chuoi_noi_curpage?>" class="btn btn-success"><i class="fa fa-check"></i> Kích hoạt mã đã tạo</a> -->



          <!--         <a href="#" class="btn btn-danger" id="xoahet"><i class="fa fa-times"></i> Xóa mã chưa kích hoạt</a>  -->

          

              </div>

         <!--      <div class="col-md-4 paging_0px">  

              	<form action="index.php?com=quanlytin&act=man<?=$chuoi_noi_curpage?>" method="post" class="inline-form">

                	<div id="timkiem_khung">

                    	<input type="text" name="search" id='search' value="<?=@$_REQUEST['search']?>" placeholder="Nhập email cần tìm ..." class='timkiem_input' />

                        <input type="image" name="btnSearch" src="media/images/search-focus.png" value="Tìm kiếm" id='nut_timkiem' />

                    </div>                    

                </form>

              </div> -->

              <div class="clear"></div>     

            </div>

            <!-- Title Bar End -->                                  

            

            <form name="frm" method="post" action="index.php?com=quanlytin&act=send" enctype="multipart/form-data">		    

				<input type="hidden" name="listid">

            <!-- Table Holder Start -->

            <div class="table-holder">



              <table class="stripe-rows" cellspacing="0" cellpadding="0" width="100%" border="1">            

                <thead>



                  <th>Mã tin đăng</th>

                  <th>Loại tin đăng</th> 

                   <th>Ngày đăng</th> 

                    <th>Ngày hết hạn</th>   

                    <th>Số ngày</th>

                     <th>Đã thanh toán </th>

                     <th>Tên liên hệ</th>                   

                  



                  <th >Số điện thoại</th>



                    <th style="width:5%;">Mail</th>

<!--                   <th style="width:5%;">Xóa</th>
 -->
       

                </thead>

                <tbody>

                  <?php 

				  	if(count($items)!=0){

						foreach($items as $k=>$v){




				  ?>

                  <tr>

                <td><b><?=$v['matin']?></b></td>                

                    <td><b><?=loaitin($v['loaitin'])?></b></td>

                     <td><b><?=date('d/m/Y',$v['ngaytao'])?></b></td>

                            <td><b><?=date('d/m/Y',$v['ngaytao']+30*24*60*60)?></b></td>

                      <td><b></b></td>

                       <td><b></b></td>

                        <td><b><?=$v['tenlienhe']?></b></td>
                        <td><b><?=$v['dienthoailienhe']?></b></td>
                        <td><b><?=$v['emaillienhe']?></b></td>


                 <!--          <td style="width:5%;"><a href="index.php?com=quanlytin&act=delete&id=<?=$v['id']?><?=$chuoi_noi_curpage?>" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="media/images/delete.png" border="0" title="Xóa" /></a></td> -->

                      <?php } ?>

                  </tr>

                  <?php	

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