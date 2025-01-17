<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>
<?php 

        function get_main_category($a)
          {      global $d;
            $sql="select * from table_tin3cap_cat where com='cat' order by stt asc,id desc";
            $stmt=mysqli_query($d->db,$sql);
            $str='
              <select  name="id_cat" class="form-control select2" id="id_cat" style="width: 100%;">
               <option value="0">Chọn danh mục cấp 1</option>
              ';
            while ($row=@mysqli_fetch_array($stmt)) 
            {
              if($row["id"]==(int)@$a)
                $selected="selected";
              else 
                $selected="";
              $str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';     
            }
            $str.='</select>';
            return $str;
          }
          function get_main_category1($a,$b)
          {      global $d;
            $sql="select * from table_tin3cap_cat where com='cat1' and id_cat=$a order by stt asc,id desc";
            $stmt=mysqli_query($d->db,$sql);
            $str='
              <select id="id_cat1" name="id_cat1" class="form-control select2">
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
?>
<script>
  $(document).ready(function(e) {
    $("#id_cat").change(function(e) {
            var id=$(this).val();
      $.ajax({
        url:'ajax/cat_tin3cap.php',
        type:'get',
        data:'id='+id,
        dataType:'html',
        success:function(data){
          $("#cat_div").html(data);

      
          
        }
      });
    });

               
            


        
    });
</script>
<section class="content-header">
   <h1>Danh mục cấp
      
   </h1>
   <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i>Bảng điều khiển</a></li>
      <li><a href="index.php?com=tin3cap&act=man">Bài viết</a></li>
      <li class="active">Thêm mới</li>
   </ol>
</section>
<section class="content">


    <form method="post" name="frm" action="index.php?com=tin3cap&act=save<?=$chuoi_noi_curpage1?>" enctype="multipart/form-data" class="basic-form inline-form">
               <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
      <div class="row">
         <div class="col-md-8">
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Nội dung</h3>
               </div>
               <div class="box-body">



                  <div class="row">

                        <div class="col-md-6">

                           <div class="form-group">
                              <label>Danh mục cấp 1  </label>
                              <?=get_main_category($item['id_cat']);?>

                            </div>
                        </div>
                        <div class="col-md-6">

                           <div class="form-group" id="cat_div">
                              <label>Danh mục cấp 2  </label>
                                 <?=get_main_category1($item['id_cat'],$item['id_cat1']);?>

                            </div>
                        </div>

                  </div>

                      <div class="row ">
                     <div class="col-md-12">
                        <div class="form-group">
                           <label>Tag bài viết</label>
                           <div >
                              <?php
                                 $d->reset();
                                 $sql_tintuc = "select * from #_tinnho where hienthi=1  and com=14 order by stt asc";
                                 $d->query($sql_tintuc);
                                 $mausac = $d->result_array();
                                 
                                 
                                 $mangmau=explode(',', $item['listtag']);
                                 
                                 
                                 
                                 ?>
                              <?php foreach ($mausac as $v) {?>
                              <?php if(in_array($v['id'], $mangmau)) {?>
                              <label style="display: inline-block;margin: 10px 0;margin-right: 10px" class="checkbox-inline">
                              <input style=" width: 20px;    margin-top: 2px;" id="chonmau<?=$v['id']?>" data-id="<?=$v['id']?>"  name="listtag[]" checked="checked" type="checkbox" value="<?=$v['id']?>"><?=$v['ten_vi']?>
                              </label>
                              <?php } else {?>
                              <label style="display: inline-block;margin: 10px 0;margin-right: 10px" class="checkbox-inline">
                              <input style=" width: 20px;    margin-top: 2px;" id="chonmau<?=$v['id']?>" data-id="<?=$v['id']?>" name="listtag[]" type="checkbox" value="<?=$v['id']?>"><?=$v['ten_vi']?>
                              </label>
                              <?php } ?>
                              <script type="text/javascript">
                                 $('#chonmau<?=$v['id']?>').change(function(){
                                   
                                 
                                   var id=$(this).attr('data-id');
                                         if($(this).prop('checked') == true){
                                             $('#inputcolor'+id).removeClass('hide');
                                         }else{
                                             $('#inputcolor'+id).addClass('hide');
                                         }
                                     });
                                 
                                    
                                 
                                 
                                 
                                 
                                 
                                 
                              </script>
                              <?php } ?>
                           </div>
                        </div>
                     </div>
                  </div>
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
                             <div class="form-group">
                     <label>URL</label>
                     <input type="text" name="tenkhongdau_<?=$value?>" id="tenkhongdau_<?=$value?>" value="<?=$item['tenkhongdau_'.$value]?>" class="form-control">
                     <span class="cus_help">Link hiển thị. Không dấu và ký tự đặc biệt, khoảng trắng thay thế bằng dấu gạch ngang (-)</span>
                  </div>
                          <div class="form-group">
                              <label>Tên <?= $config["langs"][$value]?> <span class="text-red">(* Bắt buộc) </span></label>
                              <input type="text" name="ten_<?= $value ?>" id="ten_<?= $value ?>" value="<?=$item['ten_'.$value]?>" class="form-control" id="auto_convert_name">
                              <span class="cus_help">Nhập tên. Tốt nhất là 60 ký tự</span>
                           </div>
                           
                          
                           <div class="form-group">
                              <label>Mô tả ngắn <?= $config["langs"][$value]?></label>
<textarea name="mota_<?=$value?>" class="form-control " cols="50" rows="5" id="mota_<?=$value?>" placeholder="Mô tả"><?=@$item['mota_'.$value]?></textarea>
                              <span class="cus_help">Nhập mô tả ngắn</span>
                           </div>
                          
                           <div class="form-group">
                              <label>Nội dung <?= $config["langs"][$value]?><a class="cus_tool" title="Viết nội dung chính"></a></label>
                              <textarea name="noidung_<?= $value ?>" id="noidung_<?= $value ?>" class="form-control editor" rows="10" cols="80"><?=$item['noidung_'.$value]?></textarea>
                           </div>
                  </div>

                 <?php } ?>

               </div>
                
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Thông tin thêm </h3>
               </div>
               <div class="box-body">
                  <div class="form-group">
                     <!-- avatar -->

                       <div class="avatar-upload">
                             <div class="avatar-edit">
                                 <input type='file' name='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                 <label for="imageUpload"></label>
                             </div>

                           <?php if ($_REQUEST['act']=='edit'&&$item['photo']!=''){?>
                             <div class="avatar-preview">
                                 <div id="imagePreview" style="background-image: url(<?=_upload_tin3cap.$item['photo']?>);">
                                 </div>
                             </div>
                           <?php } else{?>

                              <div class="avatar-preview">
                                 <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=5);">
                                 </div>
                             </div>
                           <?php } ?>
                         </div>

                     <!-- end avartar -->
                     <span class="cus_help">Hình đại diện. Kích thước 600 x 600px</span>
                  </div>
               
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Trạng thái</label>
                           <select class="form-control" name="hienthi">
                              <option <?=($item['hienthi']==1)?'selected':''?> value="1">Hiển thị</option>
                              <option <?=($item['hienthi']==0)?'selected':''?> value="0">Ẩn</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Nổi bật</label>
                           <select class="form-control" name="noibat">
                              <option <?=($item['noibat']==0)?'selected':''?> value="0">Không</option>
                              <option <?=($item['noibat']==1)?'selected':''?> value="1">Có</option>
                           </select>
                        </div>
                     </div>
                  </div>
              <!--     <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Mới</label>
                           <select class="form-control" name="moi">
                              <option value="0">Không</option>
                              <option value="1">Có</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Bán chạy</label>
                           <select class="form-control" name="banchay">
                              <option value="0">Không</option>
                              <option value="1">Có</option>
                           </select>
                        </div>
                     </div>
                  </div> -->
                 <!--  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Trang chủ</label>
                           <select class="form-control" name="trangchu">
                              <option value="0">Không</option>
                              <option value="1">Có</option>
                           </select>
                        </div>
                     </div>
                  </div> -->
                  <div class="form-group">
                     <label>Thứ tự</label>
                     <input type="number" name="stt" value="<?=$item['stt']?>" class="form-control" placeholder="0">
                     <span class="cus_help">Thứ tự sẽ sắp xếp từ nhỏ đến lớn</span>
                  </div>
               </div>
            </div>
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">SEO </h3>
                  
               </div>
               <div class="box-body">
                  <div class="form-group">
                     <label>Tiêu đề</label>
                     <input type="text" name="title_vi" value="<?=$item['title_vi']?>" class="form-control">
                     <span class="cus_help">Nội dung thẻ meta Title</span>
                  </div>
                  <div class="form-group">
                     <label>Mô tả</label>
                     <textarea name="description_vi" class="form-control" rows="5"><?=$item['description_vi']?></textarea>
                     <span class="cus_help">Nội dung thẻ meta Description</span>
                  </div>
                  <div class="form-group">
                     <label>Từ khóa</label>
                     <input type="text" name="keywords_vi" value="<?=$item['keywords_vi']?>" class="form-control">
                     <span class="cus_help">Nội dung thẻ meta Keyword</span>
                  </div>
                  <div class="form-group">
                     <label>Schema</label>
                     <textarea name="schema_sp" class="form-control" rows="10"><?=$item['schema_sp']?></textarea>
       
                  </div>
               </div>
               <div class="box-footer clearfix">
                  <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o"></i> Lưu lại</button>
               </div>
            </div>
         </div>
      </div>
   </form>
</section>

