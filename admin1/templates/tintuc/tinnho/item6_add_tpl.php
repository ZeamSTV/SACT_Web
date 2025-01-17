<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>



<script type="text/javascript">

  tinyMCE.init({

    // General options

    mode : "exact",

        elements : "noidung_vi,noidung_en,noidung_cn,noidung_hq)",

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







<!-- Breadcrumbs Start -->

  <div class="row breadcrumbs">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

      <ul class="breadcrumbs">

        <li><a href="index.php"><i class="fa fa-home"></i></a></li>

        <li><a href="index.php?com=tinnho&act=man6"> HỖ TRỢ KỸ THUẬT</a></li>

      </ul>

    </div>

  </div>

  <!-- Breadcrumbs End -->

        

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

      <!--<div class="inner" style="margin-bottom:10px;">

            <div class="message-box info">

              <i class="fa fa-exclamation-circle"></i>

              <p>Lưu ý: Chỉ nên có tối đa 4-5 bản đồ, tên bản đồ không nên đặt dài quá, nên đặt số thứ tự chính xác để dễ quản lý!</p>

            </div>

        </div>-->

    

    

    <!-- Inline Form Start -->

          <div class="boxed no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="inner">



              <!-- Title Bar Start -->

              <div class="title-bar">

                <h4><button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button></h4>

              </div>

              <!-- Title Bar End -->

                    

              <form method="post" name="frm" action="index.php?com=tinnho&act=save6<?=$chuoi_noi_curpage?>" enctype="multipart/form-data" class="basic-form inline-form">              

       



    

                    

        <?php if ($_REQUEST['act']=='edit6'){?>

                <div class="col-md-2"><label>Hình hiện tại</label></div>

                <div class="col-md-10"><img src="<?=_upload_tinnho.$item['photo']?>"  style="max-width:100%" alt="NO PHOTO" /><br /><br /></div>

                <?php }?><div class="clearfix"></div>

                <div class="col-md-2"><label>Hình đại diện</label></div>

                <div class="col-md-10" >

                  <input type="file" name="file" /> 

                    <span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn:

          Width:244px - Height: 375px

          </span>

                    <br /><br />

                </div>  






<!-- 
               <?php if ($_REQUEST['act']=='edit6'){?>

                <div class="col-md-2"><label>Hình hiện tại</label></div>

                <div class="col-md-10"><img src="<?=_upload_tinnho.$item['download']?>"  style="max-width:100%" alt="NO PHOTO" /><br /><br /></div>

                <?php }?><div class="clearfix"></div>

                <div class="col-md-2"><label>Icon</label></div>

                <div class="col-md-10" >

                  <input type="file" name="file1" /> 

                    <span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn:

          Width:244px - Height: 375px

          </span>

                    <br /><br />

                </div>  
 -->




               <div class="col-md-2"><label>Số thứ tự</label></div>

                <div class="col-md-10"><input type="text" name="stt" id="stt" value="<?=isset($item['stt'])?$item['stt']:1?>" placeholder="Số thứ tự" /></div>

                <div class="col-md-2"><label>URL</label></div>

                       <div class="col-md-10"><input type="text" name="tenkhongdau_vi" id="tenkhongdau_vi" value="<?=$item['tenkhongdau_vi']?>" placeholder="URL" /></div>

                <div class="col-md-2"></div>

                <div class="col-md-10"><input type="checkbox" name="hienthi" class="icheck-blue" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?> /> <span class="hienthi_text">Hiển thị</span></div>

                      

                        <div class="clearfix"></div>



           <!-- PHẦN DƯỚI LÀ DÀNH CHO NỘI DUNG ĐA NGÔN NGỮ-->

                

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

                      

                       <div class="col-md-2"><label>Tên <?= $config["langs"][$value]?></label></div>

                       <div class="col-md-10"><input type="text" name="ten_<?= $value ?>" id="ten_<?= $value ?>" value="<?=$item['ten_'.$value]?>" placeholder="Tên" /></div>

            

                      <div class="col-md-2"><label>Mô tả</label></div>

                       <div class="col-md-10"><textarea name="mota_<?= $value ?>" cols="50" rows="6" id="mota_<?= $value ?>" placeholder="Mô tả"><?=$item['mota_'.$value]?></textarea></div>

            

                   



                      <div class="col-md-2"><label>Nội dung <?=$config["langs"][$value]?> </label></div>

                      <div class="col-md-10"><textarea name="noidung_<?= $value ?>" id="noidung_<?= $value ?>" placeholder="Nội dung"><?=$item['noidung_'.$value]?></textarea><br /></div>

                

                      
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



    <!--END NỘI DUNG ĐA NGÔN NGỮ -->



                

        <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />

                

                <div class="col-md-10 col-md-offset-2">                  

                  <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button>

                  <button type="button" onclick="javascript:window.location='index.php?com=tinnho&act=man6<?=$chuoi_noi_curpage?>'" class="btn btn-info"><i class="fa fa-share"></i> Thoát</button>

                </div>

                               

                <div class="clearfix"></div>



              </form>



            </div>

          </div>

          <!-- Inline Form End -->

  </div>

  <script type="text/javascript">

  



            $('#ten_vi').keyup(function(){



            var tenkhongdau=$(this).val();

 









                $.ajax({

                  type: "POST",

                  url: "ajax/tenkhongdau.php",

                 data: {'tenkhongdau':tenkhongdau},

                

                  success: function(data){

              

                          



                            $('#tenkhongdau_vi').val(data);



                          }

               });





        })





</script>