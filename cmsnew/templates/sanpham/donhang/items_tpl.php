<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>
<section class="content-header">
   <h1>Đơn hàng
     
   </h1>
   <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i>Bảng điều khiển</a></li>
      <li class="active">Đơn hàng</li>
   </ol>
</section>
<section class="content">
   <div class="row">
      <div class="col-xs-12">
         <div class="box">
           
            <div class="msg"></div>
            <div class="box-body table-responsive no-padding mailbox-messages">
               <table class="table table-hover cus_text_mid">
                  <tr class="btn-default">
                    <!--  <th class="cus_td_50">
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
                     </th> -->
                     <th class="cus_td_50">STT</th>
                     <th class="text-center">Mã đơn hàng</th>
                     <th class="text-center">Họ tên</th>
                     <th class="text-center">Ngày đặt</th>
                     <th class="text-center">Tổng tiền</th>
                  
                     <th class="text-center">Trạng thái</th>
                     <th class="text-center" style="width: 100px">Hành động</th>
                  </tr>

                         <?php 

            if(count($items)!=0){

            foreach($items as $k=>$v){

          ?>
                  <tr class='row_1'>
                     <!-- <td class="text-center"><input type="checkbox" name="id[]" value="1"></td> -->
                     <td class="cus_td_50"><?=$v['id']?></td>
                      <td class="text-center">--| <strong><?=$v['madonhang']?></strong>
                      
                       
                     </td>
                     <td class="text-center"><?=$v['hoten']?></td>
                       <td class="text-center"><?=date('d/m/Y',$v['ngaytao'])?></td>
                         <td class="text-center"><?=number_format($v['tonggia'],0, ',', '.')?>&nbsp;VNĐ</td>
                           <td class="text-center">

						<?php 

							$sql="select ten from table_product_phu where com='tinhtrang' and id= '".$v['trangthai']."' ";

							$d->query($sql);

							$result=$d->fetch_array();

						
				  	 if ($v['trangthai']==5){ //moi
              echo "<span class='btn  btn-danger'>".$result['ten']."</span>";
              }
              if ($v['trangthai']==6){ //
              echo "<span class='btn  btn-success'>".$result['ten']."</span>";
              }

					   ?>

                    </td>

                  
               
                     <td class="text-center">
                        <a href="index.php?com=donhang&act=edit&id=<?=$v['id']?><?=$chuoi_noi_curpage1?>" class="btn btn-sm btn-social-icon btn-warning" title="Chỉnh sửa"><i class="fa fa-edit fa-fw"></i></a>
                        <a  href="index.php?com=donhang&act=delete&id=<?=$v['id']?><?=$chuoi_noi_curpage1?>" onClick="if(!confirm('Xác nhận xóa')) return false;" class="btn btn-sm btn-social-icon btn-danger" title="Xóa"><i class="fa fa-trash-o fa-fw"></i></a>
                     </td>
                  </tr>


            <?php } } ?>
               </table>
            </div>
       <!--      <div class="box-footer clearfix">
                 <a href="index.php?com=product&act=add_cat<?=$chuoi_noi_curpage1?>" class="btn btn-success btn-flat">
                  <i class="fa fa-plus-circle"></i> Thêm mới
                  </a>
            </div> -->
         </div>
      </div>
   </div>
</section>
