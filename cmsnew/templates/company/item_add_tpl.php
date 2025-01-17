<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>
<section class="content-header">
   <h1>Thông tin công ty
      
   </h1>
   <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i>Bảng điều khiển</a></li>
      <li><a href="index.php?com=company&act=capnhap">Thông tin công ty</a></li>
      <li class="active">Cập nhập</li>
   </ol>
</section>
<section class="content">


    <form method="post" name="frm" action="index.php?com=company&act=save_capnhap<?=$chuoi_noi_curpage1?>" enctype="multipart/form-data" class="basic-form inline-form">
               <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
      <div class="row">
         <div class="col-md-8">
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Nội dung</h3>
               </div>
               <div class="box-body">


                 

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
       
                      
                          <div class="form-group">
                              <label>Địa chỉ <?= $config["langs"][$value]?> </label>
                              <input type="text" name="diachi_<?= $value ?>" id="diachi_<?= $value ?>" value="<?=$item['diachi_'.$value]?>" class="form-control" id="auto_convert_name">
                          
                           </div>
       
                          
                           <div class="form-group">
                              <label>Thông tin footer 1<?= $config["langs"][$value]?></label>
                              <textarea name="mota_<?=$value?>" class="form-control editor" cols="50" rows="5" id="mota_<?=$value?>" placeholder="Mô tả"><?=@$item['mota_'.$value]?></textarea>
                              <span class="cus_help">Nhập mô tả ngắn</span>
                           </div>

                          
                           <div class="form-group">
                              <label>Thông tin footer 2<?= $config["langs"][$value]?><a class="cus_tool" title="Viết nội dung chính"></a></label>
                              <textarea name="noidung_<?= $value ?>" id="noidung_<?= $value ?>" class="form-control editor" rows="10" cols="80"><?=$item['noidung_'.$value]?></textarea>
                           </div>
                          
                       <!--      <div class="form-group">
                              <label>Sologan <?= $config["langs"][$value]?></label>
                              <textarea name="h1_<?=$value?>" class="form-control " cols="50" rows="5" id="h1_<?=$value?>" placeholder="Mô tả"><?=@$item['h1_'.$value]?></textarea>
                              <span class="cus_help">Nhập mô tả ngắn</span>
                           </div> -->
                  </div>

                 <?php } ?>

               </div>
                
                  <div class="form-group">
                     <label>Website</label>
                     <input type="text" name="website" id="website" value="<?=$item['website']?>" class="form-control">
                     
                  </div>
                    <div class="form-group">
                     <label>Số zalo</label>
                     <input type="text" name="camera" id="camera" value="<?=$item['camera']?>" class="form-control">
                     
                  </div>
                  <div class="form-group">
                     <label>Hotline</label>
                     <input type="text" name="hotline" id="hotline" value="<?=$item['hotline']?>" class="form-control">
                     
                  </div>
                   <div class="form-group">
                     <label>Điện thoại</label>
                     <input type="text" name="dienthoai" id="dienthoai" value="<?=$item['dienthoai']?>" class="form-control">
                     
                  </div>
                   <div class="form-group">
                     <label>Email</label>
                     <input type="text" name="email" id="email" value="<?=$item['email']?>" class="form-control">
                     
                  </div>
                  <div class="form-group">
                     <label>Copyright:</label>
                     <input type="text" name="copyright" id="copyright" value="<?=$item['copyright']?>" class="form-control">
                     
                  </div>
                   
                    <div class="form-group">
                     <label>Fanpage</label>
                     <input type="text" name="fanface" id="email" value="<?=$item['fanface']?>" class="form-control">
                     
                  </div>
                  <div class="form-group">
                     <label>Link chatface</label>
                     <input type="text" name="chatface" id="chatface" value="<?=$item['chatface']?>" class="form-control">
                     
                  </div>
                  <div class="form-group">
                     <label>Link BCT</label>
                     <input type="text" name="linkbct" id="linkbct" value="<?=$item['linkbct']?>" class="form-control">
                     
                  </div>
                   <div class="form-group">
                     <label>Iframe googlemap</label>
                     <textarea name="diachi" class="form-control" cols="50" rows="5" id="diachi" placeholder="Mô tả"><?=@$item['diachi']?></textarea>
                     
                  </div>
                  <div class="form-group">
                              <label>Analytics và Google Webmaster<a class="cus_tool" title="Viết nội dung chính"></a></label>
                              <textarea name="script" id="script" class="form-control" rows="10" cols="80"><?=$item['script']?></textarea>
                   </div>
                   <div class="form-group">
                              <label>V-chat<a class="cus_tool" title="Viết nội dung chính"></a></label>
                              <textarea name="vchat" id="vchat" class="form-control" rows="10" cols="80"><?=$item['vchat']?></textarea>
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

                           <?php if ($_REQUEST['act']=='capnhap'&&$item['logore']!=''){?>
                             <div class="avatar-preview">
                                 <div id="imagePreview" style="background-image: url(<?=_upload_company.$item['logore']?>);">
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
                     <span class="cus_help">Hình đại diện logo công ty. Kích thước 600 x 600px</span>
                  </div>

                   <div class="form-group">

                  <label>Hình Logofooter</label></div>
                   <div ><img src="<?=_upload_company.$item['logofooter']?>"  style="max-width:100%" alt="NO PHOTO" />

                  </div>
                  <div class="form-group">
                     <label>Logofooter</label>
                     <input type="file" name="file3" class="form-control">
                     
                  </div>
                 <div class="form-group">

                  <label>Favioon hiện tại</label></div>
                   <div ><img src="<?=_upload_company.$item['favicon']?>"  style="max-width:100%" alt="NO PHOTO" />

                  </div>
                  <div class="form-group">
                     <label>Favicon</label>
                     <input type="file" name="file1" class="form-control">
                     
                  </div>
               
                  <div class="row hidden">
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
                              <option <?=($item['noibat']==1)?'selected':''?> value="0">Không</option>
                              <option <?=($item['noibat']==0)?'selected':''?> value="1">Có</option>
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
               </div>
               <div class="box-footer clearfix">
                  <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o"></i> Lưu lại</button>
               </div>
            </div>
         </div>
      </div>
   </form>
</section>

