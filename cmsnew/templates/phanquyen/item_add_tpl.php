<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>

<script type="text/javascript">
  tinyMCE.init({
    // General options
    mode : "exact",
        elements : "noidung_vi,noidung_en",
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

<style type="text/css">
  .formRow {
    padding: 10px 14px;
    clear: both;
   
    border-top: 1px solid white;
    position: relative;
}
.formRow .formRight {
    display: block;
    float: right;
    width: 100%;
    margin-right: 18px;
}
.formRight label {
    float: left;
    margin-right: 10px;
    padding: 2px 0;
    cursor: pointer;
}

</style>
<?php
  $d->reset();
  $sql = "select ten,id,ten_com,com,danhmuc,act from #_com order by id asc";
  $d->query($sql);
  $com = $d->result_array();

    $d->reset();
    $sql = "select id,ten_vi from #_product_cat where com='cat' order by id desc";
    $d->query($sql);
    $row_list = $d->result_array();
?>
<script type="text/javascript">
    $(document).ready(function(){

        $('#id_list').change(function(){
            var id_list = $(this).val();
            $.ajax ({
                type: "POST", 
                url: "ajax/load_cat.php",
                data: {id_list:id_list},
                success: function(result) { 
                      $('#id_cat').html(result);
                 
                    $('#id_item').html('<option value="">Chọn danh mục</option>');
                    $('#id_cat').change(function(){
                        var id_cat = $(this).val();
                        $.ajax ({
                            type: "POST",
                            url: "ajax/load_item.php",
                            data: {id_cat:id_cat},
                            success: function(result) { 
                                $('#id_item').html(result);
                            }
                        });
                    })
                }
            });
        })

      
        <?php if($item['id_list']!=''){?>
            var id_list = <?=$item['id_list']?>;
        <?php } else { ?>
            var id_list = '';
        <?php } ?>

        <?php if($item['id_cat']!=''){?>
            var id_cat = <?=$item['id_cat']?>;
        <?php } else { ?>
            var id_cat = '';
        <?php } ?>

        <?php if($item['id_item']!=''){?>
            var id_item = <?=$item['id_item']?>;
        <?php } else { ?>
            var id_item = '';
        <?php } ?>

      

        $.ajax ({
            type: "POST",
            url: "ajax/load_cat.php",
            data: {id_list:id_list,id_cat:id_cat},
            success: function(result) { 
                $('#id_cat').html(result);
            }
        });

        $.ajax ({
            type: "POST",
            url: "ajax/load_item.php",
            data: {id_cat:id_cat,id_item:id_item},
            success: function(result) { 
                $('#id_item').html(result);
            }
        });

        $('#id_cat').change(function(){
            var id_cat = $(this).val();
            $.ajax ({
                type: "POST",
                url: "ajax/load_item.php",
                data: {id_cat:id_cat},
                success: function(result) { 
                    $('#id_item').html(result);
                }
            });
        })


    })
</script>

<!-- Breadcrumbs Start -->
  <div class="row breadcrumbs">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <ul class="breadcrumbs">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="index.php?com=phanquyen&act=man">Phân quyền</a></li>
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
                    
              <form method="post" name="frm" action="index.php?com=phanquyen&act=save" enctype="multipart/form-data" >              
              
              
                <div class="col-md-2"><label>Tên </label></div>
                <div class="col-md-10"><input type="text" name="ten" id="ten" value="<?=$item['ten']?>" placeholder="Tên ..." /></div>
              
                   <div class="col-md-2"><label>Màu thành viên </label></div>
                <div class="col-md-10"><input type="color" style="    -webkit-appearance: square-button;padding:0;
    width: 44px;
    height: 23px;
    background-color: buttonface;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(169, 169, 169);
    border-image: initial;" name="mausac" id="mausac" value="<?=$item['mausac']?>" placeholder="Màu sắc" />
    </div>
    <div class="clear">
    </div>
       <div class="col-md-2"><label>Phân vùng</label></div>

       <div class="col-md-10">
                              <div class="formRow">
        <div class="formRight">
            <?php 

    $xem_item = json_decode($item['xem']);
    $them_item = json_decode($item['them']);
    $xoa_item = json_decode($item['xoa']);
    $sua_item = json_decode($item['sua']);
    $com_item = json_decode($item['com']);
    
    for($i=0;$i<count($com);$i++){?>
    <p class="phanvung">
        <label style="width:300px; display:inline-block; font-weight:bold; font-weight:bold;">( Quản lý ) : <?=$com[$i]['ten']?></label>
        <label style="color:rgba(0,153,204,1)">Xem</label>
        <input style="width:15px;height:15px;float:left;margin-top:12px;margin-right: 20px;" type="checkbox" name="xem[]" value="<?=$com[$i]['id']?>|1" <?php if($xem_item!=''){if(in_array($com[$i]['id'].'|1',$xem_item)){?> checked="checked"<?php } } ?> />
        <label style="color:rgba(204,0,153,1)">Thêm</label>
        <input type="checkbox" style="width:15px;height:15px;float:left;margin-top:12px;margin-right: 20px;" name="them[]" value="<?=$com[$i]['id']?>|1" <?php if($them_item!=''){if(in_array($com[$i]['id'].'|1',$them_item)){?> checked="checked"<?php } } ?>/>
        <label style="color:rgba(0,0,0,1)">Xóa</label>
        <input type="checkbox" style="width:15px;height:15px;float:left;margin-top:12px;margin-right: 20px;" name="xoa[]" value="<?=$com[$i]['id']?>|1" <?php if($xoa_item!=''){if(in_array($com[$i]['id'].'|1',$xoa_item)){?> checked="checked"<?php } } ?>/>
        <label style="color:rgba(255,153,0,1)">Sửa</label>
        <input type="checkbox" style="width:15px;height:15px;float:left;margin-top:12px;margin-right: 20px;" name="sua[]" value="<?=$com[$i]['id']?>|1" <?php if($sua_item!=''){if(in_array($com[$i]['id'].'|1',$sua_item)){?> checked="checked"<?php } } ?>/>
    </p>
    <div class="clear"></div>
    <?php } ?>
        </div>
        <div class="clear"></div>
    </div>

       </div>
   <!--    <div class="col-md-2"><label>Phân Quyền</label></div>

       <div class="col-md-8">
                <div class="formRow">
                    <div class="formRight">

                          <div class="chon_danhmuc">
                             <div class="col-md-4"> <label>Chọn Danh mục 1 : </label> </div>
                              <div class="col-md-8"><select id="id_list" name="id_list[]" multiple="multiple">
                                      <?php 
                                      $row_list1 = json_decode($item['id_list']);
                                      for($i=0;$i<count($row_list);$i++){ ?>   
                                      <option value="<?=$row_list[$i]['id']?>" <?php if($row_list1!=''){if(in_array($row_list[$i]['id'],$row_list1)){?> selected="selected"<?php } } ?>> - <?=$row_list[$i]['ten_vi']?></option>
                                      <?php } ?>
                              </select><br /><br />
                              </div>

                              <div class="col-md-4"><label>Chọn Danh mục 2 : </label> </div>
                              <div class="col-md-8"  >
                                   <select name='id_cat' id='id_cat[]' multiple="multiple">
                                        
                                    </select>
                                <br /><br />
                              </div>
                              <div class="clear">
                              </div>
                              <div class="col-md-4"><label>Chọn Danh mục 3 : </label> </div>
                             <div class="col-md-8"> <select id="id_item" name="id_item[]" multiple="multiple"  >
                              </select><br /><br />
                              </div>
                        </div>

                    </div>
               </div>
      </div> -->
      <div class="clear"></div>
                <div class="col-md-2"><label>Số thứ tự</label></div>
                <div class="col-md-10"><input type="text" name="stt" id="stt" value="<?=isset($item['stt'])?$item['stt']:1?>" placeholder="Số thứ tự" /></div>
                <div class="col-md-2"></div>
                <div class="col-md-10"><input type="checkbox" name="hienthi" class="icheck-blue" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?> /> <span class="hienthi_text">Hiển thị</span></div>
                
                
        <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
                
                <div class="col-md-10 col-md-offset-2">                  
                  <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button>
                  <button type="button" onclick="javascript:window.location='index.php?com=phanquyen&act=man<?=$chuoi_noi_curpage?>'" class="btn btn-info"><i class="fa fa-share"></i> Thoát</button>
                </div>
                               
                <div class="clearfix"></div>

              </form>

            </div>
          </div>
          <!-- Inline Form End -->
  </div>