<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>


  <?php

          function tinhtrang($i=0)

          {

            global $d;

            $sql="select * from table_product_phu where com='tinhtrang' order by stt,id desc";

            $stmt=mysqli_query($d->db,$sql);

            $str='

              <select id="id_trangthai" name="id_trangthai" class="form-control select2">          

              ';

            while ($row=@mysqli_fetch_array($stmt)) 

            {

              if($row["id"]==$i || ($i==0 && $row["noibat"]==1))

                $selected="selected";

              else 

                $selected="";

              $str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten"].'</option>';      

            }

            $str.='</select>';

            return $str;

          }       

        ?>   
<section class="content-header">
   <h1>Chi tiết đơn hàng
      
   </h1>
   <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i>Bảng điều khiển</a></li>

   </ol>
</section>
<section class="content">


    <form method="post" name="frm" action="index.php?com=donhang&act=save<?=$chuoi_noi_curpage1?>" enctype="multipart/form-data" class="basic-form inline-form">
               <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
      <div class="row">
         <div class="col-md-12">
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Nội dung</h3>
               </div>
               <div class="box-body">

              
                     <div class="col-md-2"><label>Mã đơn hàng </label></div>

                <div class="col-md-10 text">: <?=@$item['madonhang']?></div>

                <div class="clearfix"></div>

                <div class="col-md-2"><label>Họ tên </label></div>

                <div class="col-md-10 text">: <?=@$item['hoten']?></div>

                <div class="clearfix"></div>

                <div class="col-md-2"><label>Điện thoại </label></div>

                <div class="col-md-10 text">: <?=@$item['dienthoai']?></div>
<!-- 
                <div class="clearfix"></div>

                <div class="col-md-2"><label>Email </label></div>

                <div class="col-md-10 text">: <?=@$item['email']?></div>
 -->
                <div class="clearfix"></div>

                <div class="col-md-2"><label>Địa chỉ </label></div>

                <div class="col-md-10 text">: <?=@$item['diachi']?></div>

                <div class="clearfix"></div>

                

                <div class="col-md-2" style="width:100%"><label>Danh sách SP</label></div>

                <div class="col-md-10">

                            <div class="box-body table-responsive no-padding mailbox-messages">
                              <?=@$item['donhang']?>
                                
                               </div> 

                    </div> 

                <div class="clearfix"></div>

                <div class="col-xs-12" style="    margin-top: 15px;">
                      <div class="form-group">

                          <label>Nội dung:</label>
            
                          <?=@$item['noidung']?>
   

                    

                      </div>
                </div>
                <div class="clearfix"></div>                                

                               

                <div class="col-md-2"><label>Tình trạng:</label></div>

                <div class="col-md-3"><?=tinhtrang($item['trangthai'])?></div>

                <div class="clearfix"></div>
          
                 <div class="box-footer clearfix" style="    margin-top: 30px;">
                  <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o"></i> Lưu lại</button>
               </div>
               </div>
            </div>
                
         </div>
      
      </div>
   </form>
</section>

