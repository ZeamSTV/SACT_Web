<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>
<section class="content-header">
   <h1>Quản lý yêu cầu báo giá<small> </small>
      <!-- <a href="index.php?com=ykien&act=add<?=$chuoi_noi_curpage1?>" class="btn btn-success btn-flat">
      <i class="fa fa-plus-circle"></i> Thêm mới
      </a> -->
   </h1>
   <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i>Bảng điều khiển</a></li>
      <li class="active">Danh sách</li>
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
                           <th>Email</th> 
                         
                        <th>Điện thoại</th> 
                            <th>Địa chỉ</th> 
                             <th>Nội dung</th> 
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
               
                    
                      
                    <td><?=$v['hoten']?></td>
                             <td><?=$v['email']?></td>
                       <td><?=$v['dienthoai']?></td>
                                <td><?=$v['diachi']?></td>
                       <td><?=$v['noidung']?></td>
                     <td class="text-center">
                        <a  class="anhienajax thea" thaydoiloai="hienthi"   thaydoitable="table_ykien" thaydoiid="<?=$v['id']?>" id="idcsshienthi<?=$v['id']?>">
                            <?=($v['hienthi']==1)?'<i class="fa fa-check-circle-o"></i> ':'<i class="fa fa-times-circle-o"></i>'?>                     

                         </a>
                     </td>
                     <td class="text-center">
                        <!-- <a href="index.php?com=ykien&act=edit&id=<?=$v['id']?><?=$chuoi_noi_curpage1?>" class="btn btn-sm btn-social-icon btn-warning" title="Chỉnh sửa"><i class="fa fa-edit fa-fw"></i></a> -->
                        <a  href="index.php?com=ykien&act=delete&id=<?=$v['id']?><?=$chuoi_noi_curpage1?>" onClick="if(!confirm('Xác nhận xóa')) return false;" class="btn btn-sm btn-social-icon btn-danger" title="Xóa"><i class="fa fa-trash-o fa-fw"></i></a>
                     </td>
                  </tr>


            <?php } } ?>
               </table>
            </div>
            <div class="box-footer clearfix">
                 <a href="index.php?com=ykien&act=add<?=$chuoi_noi_curpage1?>" class="btn btn-success btn-flat">
                  <i class="fa fa-plus-circle"></i> Thêm mới
                  </a>
            </div>
         </div>
      </div>
   </div>
</section>
