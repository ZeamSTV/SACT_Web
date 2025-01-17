<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>

<script type="text/javascript">
	
	tinyMCE.init({
		// General options
		mode : "exact",
        elements : "noidung_vi,noidung_en,noidung_cn,noidung_hq,mota_vi,h1_vi,h2_vi",
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


<script>
$(document).ready(function(e) {
        $("#id_cat").change(function(e) {
            var id=$(this).val();
			$.ajax({
				url:'ajax/cat.php',
				type:'get',
				data:'id='+id,
				dataType:'html',
				success:function(data){
					$("#cat_div").html(data);
					$("#id_cat1").selectbox();  	
					
					$("#id_cat1").change(function(e) {
						var id=$(this).val();
						$.ajax({
							url:'ajax/cat1.php',
							type:'get',
							data:'id='+id,
							dataType:'html',
							success:function(data){
								$("#cat1_div").html(data);	
								$("#id_cat2").selectbox();  


										$("#id_cat2").change(function(e) {
											var id=$(this).val();
											$.ajax({
												url:'ajax/cat2.php',
												type:'get',
												data:'id='+id,
												dataType:'html',
												success:function(data){
													$("#cat2_div").html(data);	
													$("#id_cat3").selectbox();  
													$("#id_cat3").change(function(e) {
															var id=$(this).val();
															$.ajax({
																url:'ajax/cat3.php',
																type:'get',
																data:'id='+id,
																dataType:'html',
																success:function(data){
																	$("#cat3_div").html(data);	
																	$("#id_cat4").selectbox();  
																}
															});
														});
												}
											});
										});
							}
						});
					});
					
				}
			});
        });
		$("#id_cat1").change(function(e) {
            var id=$(this).val();
			$.ajax({
				url:'ajax/cat1.php',
				type:'get',
				data:'id='+id,
				dataType:'html',
				success:function(data){
					$("#cat1_div").html(data);	
					$("#id_cat2").selectbox();  
				}
			});
        });
									$("#id_cat2").change(function(e) {
											var id=$(this).val();
											$.ajax({
												url:'ajax/cat2.php',
												type:'get',
												data:'id='+id,
												dataType:'html',
												success:function(data){
													$("#cat2_div").html(data);	
													$("#id_cat3").selectbox();  
												
												}
											});
										});

										$("#id_cat3").change(function(e) {
															var id=$(this).val();
															$.ajax({
																url:'ajax/cat3.php',
																type:'get',
																data:'id='+id,
																dataType:'html',
																success:function(data){
																	$("#cat3_div").html(data);	
																	$("#id_cat4").selectbox();  
																}
															});
											});


				
    });
</script>
<style type="text/css">
.custom-file-input {
 /* color: transparent;*/
  padding: 0;
  margin-bottom: 20px;
}
.custom-file-input::-webkit-file-upload-button {
  visibility: hidden;
}
.custom-file-input::before {
      content: 'Chọn hình ';
    color: black;
    display: inline-block;
    background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
    border: 1px solid #999;
    border-radius: 3px;
    padding: 5px 8px;
    outline: none;
    white-space: nowrap;
    -webkit-user-select: none;
    cursor: pointer;
    text-shadow: 1px 1px #fff;
    font-weight: 700;
    font-size: 8pt;
}
.custom-file-input:hover::before {
  border-color: black;
}
.custom-file-input:active {
  outline: 0;
}
.custom-file-input:active::before {
  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9); 
}
[type="radio"]:checked,
[type="radio"]:not(:checked) {
    position: absolute;
    left: -9999px;
}
[type="radio"]:checked + label,
[type="radio"]:not(:checked) + label
{
    position: relative;
    padding-left: 28px;
    cursor: pointer;
    line-height: 20px;
    display: inline-block;
    color: #666;
}
[type="radio"]:checked + label:before,
[type="radio"]:not(:checked) + label:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 18px;
    height: 18px;
    border: 1px solid #ddd;
    border-radius: 100%;
    background: #fff;
}
[type="radio"]:checked + label:after,
[type="radio"]:not(:checked) + label:after {
    content: '';
    width: 12px;
    height: 12px;
    background: #F87DA9;
    position: absolute;
    top: 3px;
    left: 3px;
    border-radius: 100%;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
[type="radio"]:not(:checked) + label:after {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
}
[type="radio"]:checked + label:after {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
}
</style>


<!-- Breadcrumbs Start -->
  <div class="row breadcrumbs">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <ul class="breadcrumbs">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="index.php?com=product&act=man">Sản phẩm</a></li>
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
			
              <?php



              	  
				function get_main_category($a)
					{	global $d;
						$sql="select * from table_product_cat where com='cat' order by stt asc,id desc";
						$stmt=mysqli_query($d->db,$sql);
						$str='
							<select id="id_cat" name="id_cat">
							 <option value="0">Chọn danh mục cấp 1</option>
							';
						while ($row=@mysqli_fetch_array($stmt)) 
						{
							if($row["id"]==(int)@$a)
								$selected='selected';
							else 
								$selected='';
							$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';		

							  
						}
						$str.='</select>';
						return $str;
					}
					      
					function get_main_category1($a,$b)
					{	global $d;
						$sql="select * from table_product_cat where com='cat1' and id_cat=$a order by stt asc,id desc";
						$stmt=mysqli_query($d->db,$sql);
						$str='
							<select id="id_cat1" name="id_cat1">
							 <option value="0">Chọn danh mục cấp 2</option>
							';
						while ($row=@mysqli_fetch_array($stmt)) 
						{
							if($row["id"]==(int)@$b)
								$selected="selected";
							else 
								$selected="";
							$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';			
						}
						$str.='</select>';
						return $str;
					}
					function get_main_category2($a,$b)
					{	global $d;
						$sql="select * from table_product_cat where com='cat2' and id_cat1=$a order by stt asc,id desc";
						$stmt=mysqli_query($d->db,$sql);
						$str='
							<select id="id_cat2" name="id_cat2">
							 <option value="0">Chọn danh mục cấp 3</option>
							';
						while ($row=@mysqli_fetch_array($stmt)) 
						{
							if($row["id"]==(int)@$b)
								$selected="selected";
							else 
								$selected="";
							$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';			
						}
						$str.='</select>';
						return $str;
					}
							function get_main_category3($a,$b)
					{
						$sql="select * from table_product_cat where com='cat3' and id_cat2=$a order by stt asc,id desc";
						$stmt=mysql_query($sql);
						$str='
							<select id="id_cat3" name="id_cat3">
							 <option value="0">Chọn danh mục cấp 4</option>
							';
						while ($row=@mysql_fetch_array($stmt)) 
						{
							if($row["id"]==(int)@$b)
								$selected="selected";
							else 
								$selected="";
							$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';			
						}
						$str.='</select>';
						return $str;
					}
						function get_main_category4($a,$b)
					{
						$sql="select * from table_product_cat where com='cat4' and id_cat3=$a order by stt asc,id desc";
						$stmt=mysql_query($sql);
						$str='
							<select id="id_cat4" name="id_cat4">
							 <option value="0">Chọn danh mục cấp 5</option>
							';
						while ($row=@mysql_fetch_array($stmt)) 
						{
							if($row["id"]==(int)@$b)
								$selected="selected";
							else 
								$selected="";
							$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';			
						}
						$str.='</select>';
						return $str;
					}


					
				?>               
              <form method="post" name="frm" action="index.php?com=product&act=save<?=$chuoi_noi_curpage?>" enctype="multipart/form-data" class="basic-form inline-form">
			
              	<?php if ($_REQUEST['act']=='edit'){?>
                <div class="col-md-2"><label>Hình hiện tại</label></div>
                <div class="col-md-10"><img src="<?=_upload_sanpham.$item['photo']?>"  width="274" alt="NO PHOTO" /><br /><br /></div>
                <?php }?>

                 <div class="clearfix"></div>
                <div class="col-md-2"><label>Hình ảnh chính</label></div>
                <div class="col-md-10">
				
                	<input type="file"  name="file"  /> 
                    <span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn:  Width:600px - Height:600px.</span>
                    <br /><br />
                </div>

                	<?php if ($_REQUEST['act']=='edit'){?>
                <div class="col-md-2"><label>Background hiện tại</label></div>
                <div class="col-md-10"><img src="<?=_upload_sanpham.$item['photo2']?>"  width="274" alt="NO PHOTO" /><br /><br /></div>
                <?php }?>

                 <div class="clearfix"></div>
                <div class="col-md-2"><label>Background</label></div>
                <div class="col-md-10">
				
                	<input type="file"  name="file3"  /> 
                    <span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn:  Width:1366px - Height:300px.</span>
                    <br /><br />
                </div>






    
                <div class="col-md-2"><label>Danh mục cấp 1 & 2 </label></div>
                <div class="col-md-5"><?=get_main_category($item['id_cat']);?></div>
   	

               <div class="col-md-5" id="cat_div"><?=get_main_category1($item['id_cat'],$item['id_cat1']);?></div>







     		


             
         
                	<div class="col-md-2"><label>URL tùy chỉnh</label></div>
                       <div class="col-md-10"><input  type="text" name="tenkhongdau_vi" id="tenkhongdau_vi" value="<?=$item['tenkhongdau_vi']?>" placeholder="URL" /></div>

              <!--               			  <div class="col-md-2"><label>Giá cu</label></div>
                <div class="col-md-10"><input type="text"  name="giacu" id="gia" value="<?=number_format($item['giacu'],0, ',', '.')?>" placeholder="Giá cũ" /></div>



             
         


                
<div class="col-md-2"><label>Mã sản phẩm</label></div>
                       <div class="col-md-10"><input  type="text" name="masp" id="masp" value="<?=$item['masp']?>" placeholder="" /></div>

 -->      <!--   <div class="col-md-2"><label>Giá bán</label></div>
                <div class="col-md-10"><input type="number" min="0"  name="gia" id="gia" value="<?=number_format($item['gia'],0, ',', '.')?>" placeholder="Giá" /></div> -->
			 <div class="clearfix"></div>
                <div class="col-md-2"><label>Số thứ tự</label></div>
                <div class="col-md-10"><input type="text" name="stt" id="stt" value="<?=isset($item['stt'])?$item['stt']:1?>" placeholder="Số thứ tự" /></div>
              

           <!--   <div class="col-md-2"></div>
                <div class="col-md-10"><input type="checkbox" name="tinhtrang" class="icheck-blue" <?=(!isset($item['tinhtrang']) || $item['tinhtrang']==1)?'checked="checked"':''?> /> <span class="hienthi_text">Còn hàng</span></div>
        -->
                <div class="col-md-2"></div>
                <div class="col-md-10"><input type="checkbox" name="hienthi" class="icheck-blue" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?> /> <span class="hienthi_text">Hiển thị</span></div>
                
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
                       <div class="col-md-10"><input  type="text" name="ten_<?= $value ?>" id="ten_<?= $value ?>" value="<?=$item['ten_'.$value]?>" placeholder="Tên" /></div>
            	
                      
                    
						<div class="col-md-2"><label>Giới thiệu <?= $config["langs"][$value]?> </label></div>
                      <div class="col-md-10"><textarea name="mota_<?=$value?>" cols="50" rows="5" id="mota_<?=$value?>" placeholder="Mô tả"><?=@$item['mota_'.$value]?></textarea><br /></div>
                    
                
                      <div class="col-md-2"><label>Đặc tả hợp đồng <?=$config["langs"][$value]?> </label></div>
                      <div class="col-md-10"><textarea name="noidung_<?= $value ?>" id="noidung_<?= $value ?>" placeholder="Nội dung"><?=$item['noidung_'.$value]?></textarea><br /></div>
          
         
     	 <div class="col-md-2"><label>Tiêu chuẩn chất lượng <?=$config["langs"][$value]?> </label></div>
                      <div class="col-md-10"><textarea name="h1_<?= $value ?>" id="h1_<?= $value ?>" placeholder="Nội dung"><?=$item['h1_'.$value]?></textarea><br /></div>
                       <div class="col-md-2"><label>Lịch đáo hạn <?=$config["langs"][$value]?> </label></div>
                      <div class="col-md-10"><textarea name="h2_<?= $value ?>" id="h2_<?= $value ?>" placeholder="Nội dung"><?=$item['h2_'.$value]?></textarea><br /></div>
        
                
                   <!--     <div class="col-md-2"><label>h2 <?=$value?></label></div>
                <div class="col-md-10"><input type="text" name="h2_<?= $value ?>" id="h2_<?= $value ?>" value="<?=$item['h2_'.$value]?>" placeholder="thẻ h2" /></div>
                 <div class="col-md-2"><label>h3 <?=$value?></label></div>
                <div class="col-md-10"><input type="text" name="h3_<?= $value ?>" id="h3_<?= $value ?>" value="<?=$item['h3_'.$value]?>" placeholder="thẻ h3" /></div>
              -->    <div class="col-md-2"><label>Title <?=$config["langs"][$value]?></label></div>
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



				<input type="hidden" name="id" id="id"  value="<?=@$item['id']?>" />
                
                <div class="col-md-10 col-md-offset-2">                  
                  <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button>
                  <button type="button" onclick="javascript:window.location='index.php?com=product&act=man<?=$chuoi_noi_curpage?>'" class="btn btn-info"><i class="fa fa-share"></i> Thoát</button>
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


            $('.cat2div').click(function(){




        			var listcat1='';
				      $("input:checkbox[name='mucloc1[]']:checked").each(function(){

							listcat1=listcat1 + $(this).attr('data-id')+',';
							
					 });
				     var idsp=$('#id').val();

            		 $.ajax({
		                  type: "POST",
		                  url: "ajax/laycat3.php",
		                 data: {'listcat1':listcat1,'idsp':idsp},
		                
		                  success: function(data){
		              
		                          

		                             $('#cat1_div').html(data);

		                    }
		               });
            })


</script>