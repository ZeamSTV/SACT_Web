<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>
<section class="content-header">
   <h1>Quản lý <small></small>
      <a href="index.php?com=tinnho&act=add5<?=$chuoi_noi_curpage1?>" class="btn btn-success btn-flat">
      <i class="fa fa-plus-circle"></i> Thêm mới
      </a>
   </h1>
   <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i>Bảng điều khiển</a></li>
      <li class="active">Câu hỏi</li>
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
                  <!--   <th>Photo</th> -->
                     <th>Tên</th>
  <!--                    <th class="text-center">Nổi bật</th> -->
                     <th class="text-center">Trạng thái</th>
                     <th class="text-center" style="width: 100px">Hành động</th>
                  </tr>

                         <?php 

            if($items&&count($items)!=0){

            foreach($items as $k=>$v){

          ?>
                  <tr class='row_1'>
                     <!-- <td class="text-center"><input type="checkbox" name="id[]" value="1"></td> -->
                     <td class="cus_td_50"><?=$v['stt']?></td>
                     <!-- <td><a href="index.php?com=tinnho&act=edit4&id=<?=$v['id']?><?=$chuoi_noi_curpage?>" style="text-decoration:none;"><img src="<?=_upload_tinnho.$v['photo']?>" width="100px"/></a></td> -->
                      <td>--| <strong><?=$v['ten_vi']?></strong>
                      
                   
                     </td>
                 <!--    <td class="text-center">
                       
                         <a class="clickchange thea" thaydoiloai="noibat"   thaydoitable="table_tinnho"  thaydoiid="<?=$v['id']?>" id="idcssnoibat<?=$v['id']?>">
                            <?=($v['noibat']==1)?'<i class="fa fa-check-circle-o"></i> ':'<i class="fa fa-times-circle-o"></i>'?>              

                         </a>

                     </td> -->
                     <td class="text-center">
                        <a  class="anhienajax thea" thaydoiloai="hienthi"   thaydoitable="table_tinnho" thaydoiid="<?=$v['id']?>" id="idcsshienthi<?=$v['id']?>">
                            <?=($v['hienthi']==1)?'<i class="fa fa-check-circle-o"></i> ':'<i class="fa fa-times-circle-o"></i>'?>                     

                         </a>
                     </td>
                     <td class="text-center">
                        <a href="index.php?com=tinnho&act=edit5&id=<?=$v['id']?><?=$chuoi_noi_curpage1?>" class="btn btn-sm <!-- btn-social-icon btn-warning" title="Chỉnh sửa"><i class="fa fa-edit fa-fw"></i></a>
                       <a  href="index.php?com=tinnho&act=delete5&id=<?=$v['id']?><?=$chuoi_noi_curpage1?>" onClick="if(!confirm('Xác nhận xóa')) return false;" class="btn btn-sm btn-social-icon btn-danger" title="Xóa"><i class="fa fa-trash-o fa-fw"></i></a>
                  </tr>


            <?php } } ?>
               </table>
            </div>
            <div class="box-footer clearfix">
                 <a href="index.php?com=tinnho&act=add5<?=$chuoi_noi_curpage1?>" class="btn btn-success btn-flat">
                  <i class="fa fa-plus-circle"></i> Thêm mới
                  </a>
            </div>
         </div>
      </div>
   </div>
</section>
