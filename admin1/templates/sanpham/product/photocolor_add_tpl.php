<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>

<!-- Breadcrumbs Start -->
  <div class="row breadcrumbs">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <ul class="breadcrumbs">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li>Sản phẩm : <b><?php
				$sql="select * from #_product where id='".intval($_REQUEST['id_cat'])."'";	
				$d->query($sql);
				$pro = $d->fetch_array();
				echo $pro['ten_vi'];





			?></b>
        </li>
        <li><a href="index.php?com=product&act=mancolor_photo<?=$chuoi_noi_curpage2?>">Hình ảnh</a></li>
      </ul>
    </div>
  </div>
  <!-- Breadcrumbs End -->
        

  <?php 
        $d->reset();
        $sql="select * from #_product where id='".intval($_REQUEST['id_cat'])."'";  
        $d->query($sql);
        $maucat = $d->fetch_array();

      

     
            $chuoicolor=$maucat['mausac'];
            $d->reset();
                $sql_tintuc = "select * from #_tinnho where hienthi=1  and com=14  and id in ($chuoicolor)";
                $d->query($sql_tintuc);
                $mausac = $d->result_array();

       


  ?>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	<!--<div class="inner" style="margin-bottom:10px;">
            <div class="message-box info">
              <i class="fa fa-exclamation-circle"></i>
              <p>Lưu ý: Chỉ nên có tối đa 4-5 bản đồ, tên bản đồ không nên đặt dài quá, nên đặt số thứ tự chính xác để dễ quản lý!</p>
            </div>
        </div>-->
    
    
		<!-- Inline Form Start -->
          <div class="boxed no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="inner">

              <!-- Title Bar Start -->
              <div class="title-bar">
                <h4>Thêm hình ảnh color cho sản phẩm : <b><?=$pro['ten_vi']?></b></h4>
              </div>
              <!-- Title Bar End -->
			            
              <form method="post" name="frm" action="index.php?com=product&act=savecolor_photo<?=$chuoi_noi_curpage2?>" enctype="multipart/form-data" class="basic-form inline-form">

                    <?php for($i=0; $i<10; $i++){?>  
                   
                
                <div class="clearfix"></div>
                <div class="col-md-2"><label>Hình ảnh <?=$i+1?></label></div>
                <div class="col-md-10">
                  <input type="file" name="file<?=$i?>" /> 
                    <span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn: Width:800px - Height:804px.</span>
                    <br /><br />                    
                </div>  

                      



                <div class="col-md-2"><label>Màu sắc </label></div>
                <div class="col-md-10" id='cat1_div'>
                  

                      <select id="id_item" name="id_item<?=$i?>">
                        

                        <option value="0">Chọn màu</option>

                        <?php foreach ($mausac as $v) {?>

                            <option <?=($v['id']==$item['id_item'])?'selected="selected"':''?> value="<?=$v['id']?>"><?=$v['ten_vi']?></option>

                        <?php } ?>
                      </select>


                </div>
                <div class="col-md-2"><label>Tên </label></div>
                <div class="col-md-10"><input type="text" name="ten<?=$i?>" value="<?=$item['ten']?>" placeholder="Tên" /></div>
                <div class="col-md-2"><label>Số thứ tự</label></div>
          <div class="col-md-10"><input type="text" name="stt" value="<?=isset($item['stt'])?$item['stt']:1?>" placeholder="Số thứ tự" /></div>
                
              
                
                <div class="clearfix"></div>
                    
                <?php } ?>
                <div class="col-md-10 col-md-offset-2">                  
                  <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button>
                  <button type="button" onclick="javascript:window.location='index.php?com=product&act=mancolor_photo<?=$chuoi_noi_curpage2?>'" class="btn btn-info"><i class="fa fa-share"></i> Thoát</button>
                </div>

                <div class="clearfix"></div>

              </form>

            </div>
          </div>
          <!-- Inline Form End -->
	</div>