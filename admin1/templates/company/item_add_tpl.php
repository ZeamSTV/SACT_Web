<script type="text/javascript">

	tinyMCE.init({

		// General options

		mode : "exact",

        elements : "noidung_vi,noidung_en,noidung_cn,noidung_hq,mota_vi,mota_cn,mota_en,mota_hq",

		theme : "advanced",

		convert_urls : false,

		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,imagemanager,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

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





<script type="text/javascript">   

  $(document).ready(function() {

    $('.chonngonngu li a').click(function(event) {

      var lang = $(this).attr('href');

      $('.chonngonngu li a').removeClass('active');

      $(this).addClass('active');

      $('.lang_hidden').removeClass('active');

      $('.lang_'+lang).addClass('active');

      return false;

    });

  });

</script>

<!-- Breadcrumbs Start -->

  <div class="row breadcrumbs">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

      <ul class="breadcrumbs">

        <li><a href="index.php"><i class="fa fa-home"></i></a></li>

        <li><a href="index.php?com=company&act=capnhap">Cập nhập thông tin công ty</a></li>

      </ul>

    </div>

  </div>

  <!-- Breadcrumbs End -->

        

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

      <!-- Inline Form Start -->

        <div class="boxed no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <div class="inner">



            <!-- Title Bar Start -->

            <div class="title-bar">

              <h4>Cập nhập thông tin công ty</h4>

            </div>

            <!-- Title Bar End -->



            <form method="post" name="frm" action="index.php?com=company&act=save_capnhap" enctype="multipart/form-data" class="basic-form inline-form" style="padding:10px;">

            	<!-- Tabs Navigation Start -->

                <ul class="nav nav-tabs">

                  <?php

                        foreach ($config["lang"] as $key => $value) {

                            # code...

                            $active = '';

                            if ($key == 0) {

                                $active = "active";

                            }



                            echo '<li class="' . $active . '"><a href="#tab' . $value . '" class="clicktab" data-toggle="tab">' . $config["langs"][$value] . '</a></li>';

                        }

                        ?>

                </ul>

                <!-- Tabs Navigation End -->



                <!-- Tab panes -->

                  <div class="tab-content">

                    <?php

                    foreach ($config["lang"] as $key => $value) {

                        # code...

                        $active = '';

                        $active_block = '';

                        if ($key == 0) {



                            $active = "active";

                            $active_block = "style='display:block;'";

                        }

                        ?> 



                  <div class="tab-pane <?=$active?>" id="tab<?= $value ?>">

                      



                      <div class="col-md-2"><label>Tên công ty <?= $config["langs"][$value]?> </label></div>

                      <div class="col-md-10"><textarea name="ten_<?=$value?>" cols="50" rows="3" id="ten_<?=$value?>" placeholder="Tên công ty"><?=@$item['ten_'.$value]?></textarea><br /></div>

                    

                

                      <div class="col-md-2"><label>Thông tin footer 1   <?= $config["langs"][$value]?> </label></div>

                      <div class="col-md-10"><textarea name="mota_<?=$value?>" cols="50" rows="5" id="mota_<?=$value?>" placeholder="Thông tin footer"><?=@$item['mota_'.$value]?></textarea><br /></div>

                    

                

                      <div class="col-md-2"><label>Thông tin footer 2 <?=$config["langs"][$value]?> </label></div>

                      <div class="col-md-10"><textarea name="noidung_<?= $value ?>" id="noidung_<?= $value ?>" placeholder="Thông tin footer"><?=$item['noidung_'.$value]?></textarea><br /></div>

		              



                   <div class="col-md-2"><label>Địa chỉ <?=$config["langs"][$value]?> </label></div>

		                <div class="col-md-10"><textarea name="diachi_<?= $value ?>" id="diachi_<?= $value ?>" placeholder="Địa chỉ"><?=$item['diachi_'.$value]?></textarea><br /></div>

		         



           <!--      <div class="col-md-2"><label>Thông tin liên hệ</label></div>

                <div class="col-md-10"><textarea name="h1_vi" id="h1_vi" placeholder="Địa chỉ"><?=$item['h1_vi']?></textarea><br /></div>
 -->
                       <!-- 
                                <div class="col-md-2"><label>Title contact home <?=$value?></label></div>

                <div class="col-md-10"><input type="text" name="h2_<?= $value ?>" id="h2_<?= $value ?>" value="<?=$item['h2_'.$value]?>" placeholder="" /></div> -->

<!-- 

             


                                <div class="col-md-2"><label>h3 <?=$value?></label></div>

                <div class="col-md-10"><input type="text" name="h3_<?= $value ?>" id="h3_<?= $value ?>" value="<?=$item['h3_'.$value]?>" placeholder="thẻ h3" /></div>

              



 -->

                 <div class="col-md-2"><label>Title <?=$config["langs"][$value]?></label></div>

                <div class="col-md-10"><input type="text" name="title_<?= $value ?>" id="title_<?= $value ?>" value="<?=$item['title_'.$value]?>" placeholder="Title" /></div>

      

                <div class="col-md-2"><label>Keywords <?=$config["langs"][$value]?></label></div>

                <div class="col-md-10"><textarea name="keywords_<?= $value ?>" cols="50" rows="6" placeholder="Keywords"><?=$item['keywords_'.$value]?></textarea></div>

                <div class="col-md-2"><label>Description <?=$config["langs"][$value]?></label></div>

                <div class="col-md-10"><textarea name="description_<?= $value ?>" cols="50" rows="6" placeholder="Description"><?=$item['description_'.$value]?></textarea></div>   

                  





                  </div>

                  



                    <div class="clearfix"></div>

                  <?php }?>

                </div>    

				        
<!-- 
				              <div class="col-md-2"><label>Website</label></div>

                        <div class="col-md-10 "><input type="text" name="website" id="website" value="<?=$item['website']?>" placeholder="website " /></div> -->

                        <div class="col-md-2"><label>Copyright</label></div>

                        <div class="col-md-10 "><input type="text" name="copyright" id="copyright" value="<?=$item['copyright']?>" placeholder=" " /></div>
<!-- 
 

                      <div class="col-md-2"><label>Số điện thoại footer</label></div>

                        <div class="col-md-10 "><input type="text" name="camera" id="copyright" value="<?=$item['camera']?>" placeholder="" /></div>  -->

      <!--                 <div class="col-md-2"><label>MST</label></div>

                        <div class="col-md-10 "><input type="text" name="mst" id="copyright" value="<?=$item['mst']?>" placeholder="" /></div>  -->
<!-- 
                         <div class="col-md-2"><label>Địa chỉ</label></div>

                        <div class="col-md-10 "><input type="text" name="h1_vi" id="copyright" value="<?=$item['h1_vi']?>" placeholder="" /></div>  -->

       <!--                   <div class="col-md-2"><label>VPGD</label></div>

                        <div class="col-md-10 "><input type="text" name="h2_vi" id="copyright" value="<?=$item['h2_vi']?>" placeholder="" /></div> 
 -->

                    		<div class="col-md-2"><label>Điện thoại</label></div>

                    		<div class="col-md-10 "><input type="text" name="dienthoai" id="dienthoai" value="<?=$item['dienthoai']?>" placeholder="Hotline 1" /></div>

                       <div class="col-md-2"><label>Số Zalo</label></div>

                        <div class="col-md-10 "><input type="text" name="hotline" id="hotline" value="<?=$item['hotline']?>" placeholder="Hotline 1" /></div>

                       

					             <div class="col-md-2"><label>Email</label></div>

                        <div class="col-md-10 "><input type="text" name="email" id="email" value="<?=$item['email']?>" placeholder="Email" /></div>

                        <div class="col-md-2"><label>Link fanpage</label></div>

                        <div class="col-md-10 "><input type="text" name="fanface" id="fanpage" value="<?=$item['fanface']?>" placeholder="Ví dụ: zing.vn" /></div> 

                    <div class="col-md-2"><label>Link Chatface</label></div>

                       <div class="col-md-10 "><input type="text" name="chatface" id="chatface" value="<?=$item['chatface']?>" placeholder="Ví dụ: zing.vn" /></div> 

          

							          <div class="col-md-2"><label>Map Liên hệ</label></div>

                        <div class="col-md-10 "><textarea cols="50" rows="5" name="diachi" id="fanpage"><?=$item['diachi']?></textarea> </div> 

            

						 	<div class="col-md-2"><label>Favioon hiện tại</label></div>

							<div class="col-md-10"><img src="<?=_upload_company.$item['favicon']?>"  style="max-width:100%;width: 200px" alt="NO PHOTO" /><br /><br /></div>

							

                    <div class="clearfix"></div>

							<div class="col-md-2"><label>Favicon</label></div>

							<div class="col-md-10">

								<input type="file" name="file1" /> 

								<span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn: Width:200px - Height:200px </span>

								<br /><br />

							</div>

							<div class="cachfavicon"></div>

						

                    <div class="clearfix"></div>

							<div class="col-md-2"><label>Logo hiện tại</label></div>

							<div class="col-md-10"><img src="<?=_upload_company.$item['logore']?>"  style="max-width:100%;width: 200px" alt="NO PHOTO" /><br /><br /></div>

						

                    <div class="clearfix"></div>

							<div class="col-md-2"><label>Logo</label></div>

							<div class="col-md-10">

								<input type="file" name="file" /> 

								<span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn: Width:325px - Height:auto </span>

								<br /><br />

								</div>





              <div class="clearfix"></div>

              <div class="col-md-2"><label>Logo footer hiện tại</label></div>

              <div class="col-md-10"><img src="<?=_upload_company.$item['logofooter']?>"  style="max-width:100%;width: 200px" alt="NO PHOTO" /><br /><br /></div>

            

			

                   <div class="clearfix"></div>

              <div class="col-md-2"><label>Logo footer</label></div>

              <div class="col-md-10">

                <input type="file" name="file3" /> 

                <span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn: Width:325px - Height:auto </span>

                <br /><br />

                </div>

      



               <div class="col-md-2"><label>Analytics và Google Webmaster</label></div>

                <div class="col-md-10 paging_0px"><textarea name="script" cols="50" rows="15" placeholder="Dán code Google Analytics và Google Webmaster vào đây ... "><?=$item['script']?></textarea></div>                        

                           

                <div class="col-md-2"><label>Code Vchat</label></div>

                <div class="col-md-10 paging_0px"><textarea name="vchat" cols="50" rows="15" placeholder="Dán code vchat vào đây ... "><?=$item['vchat']?></textarea></div>                        

                                    

                           

  <!--                 <div class="col-md-2"><label>Geo meta</label></div>

                <div class="col-md-10 paging_0px"><textarea name="geo_meta" cols="50" rows="15" placeholder="Dán code geo meta vào đây ... "><?=$item['geo_meta']?></textarea></div>                        

                                      
 -->
             

				  

                  

                </div>

                                     

              <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />

              

              <div class="col-md-10 col-md-offset-2 paging_0px">                  

                <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu thông tin</button>

                <button type="button" onclick="javascript:window.location='index.php'" class="btn btn-info"><i class="fa fa-share"></i> Thoát</button>

              </div>



              <div class="clearfix"></div>



            </form>



          </div>

        </div>

        <!-- Inline Form End -->

  </div>