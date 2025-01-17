<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>
<section class="content-header">
   <h1>Quản lý tạo tài khoản<small> </small>
    <!--   <a href="index.php?com=newsletter_mailthanhvien&act=add<?=$chuoi_noi_curpage1?>" class="btn btn-success btn-flat">
      <i class="fa fa-plus-circle"></i> Thêm mới
      </a> -->
   </h1>
   <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i>Bảng điều khiển</a></li>
      <li class="active">TÀI KHOẢN</li>
   </ol>
</section>
<section class="content">
   <div class="row">
      <div class="col-xs-12">
         <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title">Danh sách</h3>
               
            </div>
            <div class="msg"></div>
            <div class="box-body table-responsive no-padding mailbox-messages">
               <table class="table table-hover cus_text_mid">
                  <tr class="btn-default">
                    <!--  <th class="cus_td_50">
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
                     </th> -->
                     <th class="cus_td_50">STT</th>
               
                      <th>Họ tên</th>  
                  <th>Ngày sinh</th>  
                  <th>Email</th>  
                  <th>Điện thoại</th>  
                  <th>Địa chỉ</th>  
                  <th>CMND</th>  
                  <th>Ngày cấp</th>  
                  <th>Nơi cấp</th>  
                  <th>TKNH</th>  
                  <th>NH</th>  
                  <th>Hình cmnd trước</th>  
                  <th>Hình cmnd sau</th>  
                     <th class="text-center">Trạng thái</th>
                     <th class="text-center" style="width: 100px">Hành động</th>
                  </tr>

                         <?php 

            if(count($items)!=0){

            foreach($items as $k=>$v){

          ?>
                  <tr class='row_1'>
                     <!-- <td class="text-center"><input type="checkbox" name="id[]" value="1"></td> -->
                     <td class="cus_td_50"><?=$v['stt']?></td>
               
                    
                      
                    
                      <td><b><?=$v['hoten']?></b></td>
                      <td><b><?=$v['ngaysinh']?></b></td>
                      <td><b><?=$v['email']?></b></td>
                      <td><b><?=$v['dienthoai']?></b></td>
                      <td><b><?=$v['diachi']?></b></td>
                      <td><b><?=$v['cmnd']?></b></td>
                      <td><b><?=$v['ngaycap']?></b></td>
                      <td><b><?=$v['noicap']?></b></td>
                      <td><b><?=$v['tknh']?></b></td>
                      <td><b><?=$v['nganhang']?></b></td>
                      <td><b><img style="width: 100px" src="<?=_upload_member.$v['photo']?>"></b></td>
                      <td><b><img style="width: 100px" src="<?=_upload_member.$v['photo1']?>"></b></td>
                     <td class="text-center">
                        <!-- <a href="index.php?com=newsletter_mailthanhvien&act=edit&id=<?=$v['id']?><?=$chuoi_noi_curpage1?>" class="btn btn-sm btn-social-icon btn-warning" title="Chỉnh sửa"><i class="fa fa-edit fa-fw"></i></a> -->
                        <a  href="index.php?com=newsletter_mailthanhvien&act=delete&id=<?=$v['id']?><?=$chuoi_noi_curpage1?>" onClick="if(!confirm('Xác nhận xóa')) return false;" class="btn btn-sm btn-social-icon btn-danger" title="Xóa"><i class="fa fa-trash-o fa-fw"></i></a>
                     </td>
                  </tr>


            <?php } } ?>
               </table>
            </div>
           <!--  <div class="box-footer clearfix">
                 <a href="index.php?com=newsletter_mailthanhvien&act=add<?=$chuoi_noi_curpage1?>" class="btn btn-success btn-flat">
                  <i class="fa fa-plus-circle"></i> Thêm mới
                  </a>
            </div> -->
         </div>
      </div>
   </div>
</section>
