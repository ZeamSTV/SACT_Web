<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>
<section class="content-header">
   <h1>Slideshow
      
   </h1>
   <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i>Bảng điều khiển</a></li>
      <li><a href="index.php?com=photo&act=man_lkweb">Slideshow</a></li>
      <li class="active">Thêm mới</li>
   </ol>
</section>
<section class="content">


    <form method="post" name="frm" action="index.php?com=photo&act=save_lkweb<?=$chuoi_noi_curpage1?>" enctype="multipart/form-data" class="basic-form inline-form">
               <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
      <div class="row">
         <div class="col-md-8">
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Nội dung</h3>
               </div>
               <div class="box-body">


                 

                  <div class="form-group">
                     <label>Link</label>
                     <input type="text" name="link" id="link" value="<?=$item['link']?>" class="form-control">
                    
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
                              <label>Tên <?= $config["langs"][$value]?> <span class="text-red">(* Bắt buộc) </span></label>
                              <input type="text" name="ten_<?= $value ?>" id="ten_<?= $value ?>" value="<?=$item['ten_'.$value]?>" class="form-control" id="auto_convert_name">
                              <span class="cus_help">Nhập tên. Tốt nhất là 60 ký tự</span>
                           </div>
                 
                    <!--     
                           <div class="form-group">
                              <label>Mô tả ngắn <?= $config["langs"][$value]?></label>
                              <textarea name="mota_<?=$value?>" class="form-control" cols="50" rows="5" id="mota_<?=$value?>" placeholder="Mô tả"><?=@$item['mota_'.$value]?></textarea>
                              <span class="cus_help">Nhập mô tả ngắn</span>
                           </div>
                           -->
                          <!--    <div class="form-group">
                              <label>Nội dung <?= $config["langs"][$value]?><a class="cus_tool" title="Viết nội dung chính"></a></label>
                              <textarea name="noidung_<?= $value ?>" id="noidung_<?= $value ?>" class="form-control editor" rows="10" cols="80"><?=$item['noidung_'.$value]?></textarea>
                           </div> -->
                  </div>

                 <?php } ?>

               </div>
                
               </div>
                <div class="box-footer clearfix">
                  <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o"></i> Lưu lại</button>
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

                           <?php if ($_REQUEST['act']=='edit_lkweb'&&$item['photo']!=''){?>
                             <div class="avatar-preview">
                                 <div id="imagePreview" style="background-image: url(<?=_upload_hinhanh.$item['photo']?>);">
                                 </div>
                             </div>
                           <?php } else{?>

                              <div class="avatar-preview">
                                 <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                                 </div>
                             </div>
                           <?php } ?>
                         </div>

                     <!-- end avartar -->
                     <span class="cus_help">Hình đại diện. Kích thước 600 x 600px</span>
                  </div>
               
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <label>Trạng thái</label>
                           <select class="form-control" name="hienthi">
                              <option <?=($item['hienthi']==1)?'selected':''?> value="1">Hiển thị</option>
                              <option <?=($item['hienthi']==0)?'selected':''?> value="0">Ẩn</option>
                           </select>
                        </div>
                     </div>
                  <!--    <div class="col-md-6">
                        <div class="form-group">
                           <label>Nổi bật</label>
                           <select class="form-control" name="noibat">
                              <option <?=($item['noibat']==1)?'selected':''?> value="0">Không</option>
                              <option <?=($item['noibat']==0)?'selected':''?> value="1">Có</option>
                           </select>
                        </div>
                     </div> -->
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
             <!--   <div class="box-header with-border">
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
                     <input type="text" name="keyword_vi" value="<?=$item['keyword_vi']?>" class="form-control">
                     <span class="cus_help">Nội dung thẻ meta Keyword</span>
                  </div>
               </div> -->
              
            </div>
         </div>
      </div>
   </form>
</section>

