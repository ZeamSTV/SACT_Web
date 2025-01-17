<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>
<section class="content-header">
   <h1>Quản lý <small> Mã giảm giá</small>
     <!--  <a href="index.php?com=tinnho&act=add<?=$chuoi_noi_curpage1?>" class="btn btn-success btn-flat">
      <i class="fa fa-plus-circle"></i> Thêm mới
      </a> -->
   </h1>
   <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i>Bảng điều khiển</a></li>
      <li class="active">Mã giảm giá</li>
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
                 
                     <th class="cus_td_50">STT</th>
                
                        <th>Mã giảm giá</th>
                          <th>Ngày tạo</th> 
                           <th>Ngày kích hoạt</th> 
                            <th>Ngày hết hạn</th>   
                            <th>Giá trị mã giảm giá (đồng)</th>
                             <th>Giá trị đơn hàng tối thiểu (đồng) </th>
                             <th>Số lượt sử dụng</th>                   
                          

                          <th >Kích hoạt mã</th>

                     <th class="text-center" style="width: 100px">Hành động</th>
                  </tr>

                         <?php 

            if(count($items)!=0){

            foreach($items as $k=>$v){

          ?>
                  <tr class='row_1'>
                  
                     <td class="cus_td_50"><?=$k+1?></td>
                              
              
                              <td class="text-center"><b><?=$v['magiamgia']?></b></td>                
                    <td class="text-center"><b><?=date('d/m/Y',$v['ngaytao'])?></b></td>
                     <td class="text-center"><b><?=($v['ngaykichhoat']!='')?date('d/m/Y',$v['ngaykichhoat']):''?></b></td>
                      <td class="text-center"><b><?=($v['ngayhethan']!='')?date('d/m/Y',$v['ngayhethan']):''?></b></td>
                      <td class="text-center"><b><?=number_format($v['giatrimagiamgia'],0, ',', ',')." đ"?></b></td>
                       <td class="text-center"><b><?=number_format($v['giatridonhangtoithieu'],0, ',', ',')." đ"?></b></td>
                        <td class="text-center"><b><?=$v['dasudung']?>/<?=$v['soluot']?></b></td>

                    <td style="width:5%;"><a <?=($v['tinhtrang']==0)?'< href="index.php?com=magiamgia&act=man&tinhtrang='.$v['id'].''.$chuoi_noi_curpage.'"':'' ?>   ><img src="<?=($v['tinhtrang']==1)?'media/images/active_1.png':'media/images/active_0.png'?>" border="0" /></a></td>


                              <?php if($v['tinhtrang']==1) {?>
                     <td class="text-center">
                        <a  class="btn btn-sm btn-social-icon btn-warning" title="Chỉnh sửa"><img src="media/images/active_1.png" /></a>
                
                     </td>

                   <?php } else {?>
                        <td class="text-center">
                        <a href="index.php?com=magiamgia&act=edit&id=<?=$v['id']?><?=$chuoi_noi_curpage1?>" class="btn btn-sm btn-social-icon btn-warning" title="Chỉnh sửa"><i class="fa fa-edit fa-fw"></i></a>
                        <a  href="index.php?com=tinnho&act=magiamgia&id=<?=$v['id']?><?=$chuoi_noi_curpage1?>" onClick="if(!confirm('Xác nhận xóa')) return false;" class="btn btn-sm btn-social-icon btn-danger" title="Xóa"><i class="fa fa-trash-o fa-fw"></i></a>
                     </td>
                   <?php } ?>
                  </tr>


            <?php } } ?>
               </table>
            </div>
            <div class="box-footer clearfix">
                 <a href="index.php?com=magiamgia&act=add<?=$chuoi_noi_curpage1?>" class="btn btn-success btn-flat">
                  <i class="fa fa-plus-circle"></i> Thêm mới
                  </a>
            </div>
         </div>
      </div>
   </div>
</section>
