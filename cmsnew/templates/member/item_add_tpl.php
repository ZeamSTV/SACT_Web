<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>
<section class="content-header">
   <h1>Thành viên
      
   </h1>
   <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i>Bảng điều khiển</a></li>
      <li><a href="index.php?com=member&act=man">Thành viên</a></li>
      <li class="active">Thêm mới</li>
   </ol>
</section>
<section class="content">


    <form method="post" name="frm" action="index.php?com=member&act=save<?=$chuoi_noi_curpage1?>" enctype="multipart/form-data" class="basic-form inline-form">
               <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
      <div class="row">
         <div class="col-md-8">
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Nội dung</h3>
               </div>
               <div class="box-body">


                 
               	<div class="form-group">
                     <label>Thứ tự</label>
                     <input type="number" name="stt" value="<?=$item['stt']?>" class="form-control" placeholder="0">
                     <span class="cus_help">Thứ tự sẽ sắp xếp từ nhỏ đến lớn</span>
                 </div>

                    <div class="form-group">
                     <label>Họ tên</label>
                     <input type="text" name="ten" id="ten" value="<?=$item['ten']?>" class="form-control">
                    
                  </div>
                    <div class="form-group">
                     <label>Ngày sinh</label>
                     <input type="text" name="ngaysinh" id="ngaysinh" " value="<?=$item['ngaysinh']?>" class="form-control">
                    
                  </div>
                    <div class="form-group">
                     <label>Email</label>
                     <input type="text" name="email" id="ten" readonly style="background: #eee" value="<?=$item['email']?>" class="form-control">
                    
                  </div>
                  <div class="form-group">
                     <label>Địa chỉ</label>
                     <input type="text" name="diachi" id="diachi" value="<?=$item['diachi']?>" class="form-control">
                  
                  </div>
                      <div class="form-group">
                     <label>Điện thoại</label>
                     <input type="text" name="dienthoai" id="dienthoai" value="<?=$item['dienthoai']?>" class="form-control">
                  
                  </div>


                     <div class="form-group">
                           <label>Loại CMND</label>
                           <select class="form-control" name="loaicmnd">
                              <option <?=($item['loaicmnd']=='cmnd')?'selected':''?> value="cmnd">CMND</option>
                              <option <?=($item['loaicmnd']=='cccd')?'selected':''?> value="cccd">CCCD</option>
                              <option <?=($item['loaicmnd']=='hochieu')?'selected':''?> value="hochieu">Hộ chiếu</option>
                           </select>
                        </div>

                  <div class="form-group">
                     <label>CMND</label>
                     <input type="text" name="cmnd" id="cmnd" value="<?=$item['cmnd']?>" class="form-control">
                  
                  </div>
            		
                   <div class="form-group">
                     <label>Ngày cấp</label>
                     <input type="text" name="ngaycap" id="ngaycap" value="<?=$item['ngaycap']?>" class="form-control">
                  
                  </div>
                   <div class="form-group">
                     <label>Nơi cấp</label>
                     <input type="text" name="noicap" id="noicap" value="<?=$item['noicap']?>" class="form-control">
                  
                  </div>

                    <div class="form-group">
                     <label>Ngân hàng</label>
                     <input type="text" name="nganhang" id="nganhang" value="<?=$item['nganhang']?>" class="form-control">
                  
                  </div>
                     <div class="form-group">
                     <label>Tài khoản ngân hàng</label>
                     <input type="text" name="tknh" id="tknh" value="<?=$item['tknh']?>" class="form-control">
                  
                  </div>

               

                    

               


                    <div class="box-footer clearfix">
                 		 <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o"></i> Lưu lại</button>
              		 </div>



                
               </div>
            </div>
         </div>
         <div class="col-md-4 ">
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

                           <?php if ($_REQUEST['act']=='edit6'&&$item['photo']!=''){?>
                             <div class="avatar-preview">
                                 <div id="imagePreview" style="background-image: url(<?=_upload_member.$item['photo']?>);">
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
                     <span class="cus_help">CMND mặt trước. Kích thước 600 x 600px</span>
                  </div>
                      <div class="form-group ">
                     <!-- avatar -->
                     <div class="avatar-upload">
                        <div class="avatar-edit">
                           <input type='file' name='file1' id="imageUpload1" accept=".png, .jpg, .jpeg" />
                           <label for="imageUpload1"></label>
                        </div>
                        <?php if ($_REQUEST['act']=='edit'&&$item['photo1']!=''){?>
                        <div class="avatar-preview">
                           <div id="imagePreview1" style="background-image: url(<?=_upload_member.$item['photo1']?>);">
                           </div>
                        </div>
                        <?php } else{?>
                        <div class="avatar-preview">
                           <div id="imagePreview1" style="background-image: url(http://i.pravatar.cc/500?img=5);">
                           </div>
                        </div>
                        <?php } ?>
                     </div>
                     <!-- end avartar -->
                     <span class="cus_help">CMND mặt sau. Kích thước 600 x 600px</span>
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
                  
               </div>
            </div>
            
         </div>
      </div>
   </form>
</section>

