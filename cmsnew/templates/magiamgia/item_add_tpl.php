<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>
<section class="content-header">
   <h1>Mã giảm giá
      
   </h1>
   <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i>Bảng điều khiển</a></li>
      <li><a href="index.php?com=magiamgia&act=man">Dịch vụ</a></li>
      <li class="active">Thêm mới</li>
   </ol>
</section>
<section class="content">


    <form method="post" name="frm" action="index.php?com=magiamgia&act=save<?=$chuoi_noi_curpage1?>" enctype="multipart/form-data" class="basic-form inline-form">
               <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
      <div class="row">
         <div class="col-md-6 ">

            <div class="box">
                <div class="box-body">
                  <div class="form-group">
                     <label>Giá trị mã giảm giá* (1)</label>
                     <input type="number" name="giatrima" value="<?=$item['giatrimagiamgia']?>" class="form-control">
                    
                  </div>
                   <div class="form-group">
                     <label>Giá trị đơn hàng tối thiểu*</label>
                     <input type="number" name="giatridonhang" value="<?=$item['giatridonhangtoithieus']?>" class="form-control">
                    
                  </div>
                   <div class="form-group">
                     <label>Số lượt sử dụng (lượt)* (2) </label>
                     <input type="number" name="soluot" min="0" value="<?=$item['soluot']?>" class="form-control">
                    
                  </div>
                   <div class="form-group">
                     <label>Thời hạn sử dụng * (3)</label>
                     <input type="number" name="songaysudung" min="0" value="<?=$item['songaysudung']?>" class="form-control">
                    
                  </div>
                  <div class="box-footer clearfix">
                  <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o"></i> Lưu lại</button>
                 </div>
               </div>
              </div>
         </div>
         <div class="col-md-6">

              <div class="box">

                  <div class="box-body">
                       <div class="inner" style="padding: 15px;">
                        <div class="col-md-12" style="padding: 0"><label>Lưu ý:</label></div>
                      <p>(1) <span style="color:#f00">Mỗi mã giảm giá có giá trị không cao hơn 30% giá trị đơn hàng tối thiểu</span></p>
                      <p>(2) <span style="color:#f00">Số lượt sử dụng là số đơn hàng khách hàng có thể được giảm giá khi sử dụng mã này</span></p>
                        <p>(3) <span style="color:#f00">Thời gian sử dụng mã này từ khi kích hoạt</span></p>
                      </div>

                  </div>

              </div>

          </div>
      </div>
   </form>
</section>

