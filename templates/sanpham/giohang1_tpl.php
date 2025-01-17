<?php 
   $d->reset();
   $sql="select * from table_product_phu where com='ptthanhtoan' ";
   $d->query($sql);
   $phuongthuctt=$d->result_array();
   
   ?>
<section class="content_trong width_100">
   <input type="hidden" name="id_cat" id="id_cat" value="<?=$id_cat?>">
   <nav class="width_100" aria-label="breadcrumb">
      <ol class="breadcrumb bg-none padding-l-0 padding-r-0">
         <li class="breadcrumb-item"><a href="" title="Trang chủ">Trang chủ</a></li>
         <li class="breadcrumb-item active" aria-current="page">
            Giỏ hàng
         </li>
      </ol>
   </nav>
   <div class="block-content width_100">


    <form action="thanh-toan.html" method="POST" id="frmThanhtoan">
      <!-- left gio hang -->
      <div class="left-thanhtoan  col-md-7 col-sm-12 col-xs-12">
         <div class="title-thanhtoan">
            <h3>Địa chỉ thanh toán và vận chuyển</h3>
         </div>
         <div class="form-order-cart-thanhtoan">
            <div class="tit-thanhtoan">Thông tin nhận hàng</div>
            <div class="content-one row">
               <div class="input-icon col-md-6 col-sm-6 col-xs-12">
                  <label>Họ và tên<span>*</span></label>
                  <input type="text" class="form-control" id="names"  name="names" value="">
               </div>
               <div class="input-icon col-md-6 col-sm-6 col-xs-12">
                  <label>Điện thoại<span>*</span></label>
                  <input type="text" class="form-control" id="phones"   name="phones" value="">
               </div>
               <div class="input-icon col-md-6 col-sm-6 col-xs-12">
                  <label>Ghi chú<span>*</span></label>
                  <input type="text" name="noteds" id="notes"   class="form-control">
               </div>
               <div class="input-icon col-md-6 col-sm-6 col-xs-12">
                  <label>Địa chỉ<span>*</span></label>
                  <input type="text" class="form-control"   id="addresss" name="addresss" value="">
               </div>
            </div>
            <div class="switch-same-address">
               Thanh toán cùng địa chỉ?
        <!--        <p><input type="radio" id="co" name="samadd" value="co" >
                  <label for="co"><span class="btn-same-add"></span>Có</label>
               </p>
               <p><input type="radio" checked id="khong" value="khong" name="samadd">
                  <label for="khong"><span class="btn-no-same-add active"></span>Không</label>
               </p>
 -->
              <div style="float: right;">
               <label class="container2">Có
                  <input type="radio" checked="checked" name="choseadd" value="co">
                  <span class="checkmark1"></span>
                </label>
                <label class="container2">Không
                  <input type="radio" name="choseadd" value="khong">
                  <span class="checkmark1"></span>
                </label>
         
              </div>
               <script>
                  $(function() {                   
                      $(".btn-no-same-add").click(function() {  
                        //$('.content-same-address').css('display', 'block');
                        $(".btn-same-add").removeClass("active");
                        $(".btn-no-same-add").addClass("active");
                      });
                      $(".btn-same-add").click(function() {  
                        //$('.content-same-address').css('display', 'none');
                        $(".btn-same-add").addClass("active");
                        $(".btn-no-same-add").removeClass("active");
                      });
                    });
               </script>
            </div>
            <div class="content-same-address">
               <div class="tit-thanhtoan">Thông tin thanh toán</div>
               <div class="content-one row">
                  <div class="input-icon col-md-6 col-sm-6 col-xs-12">
                     <label>Họ và tên</label>
                     <input type="text" class="form-control" id="namer" name="namer">
                  </div>
                  <div class="input-icon col-md-6 col-sm-6 col-xs-12">
                     <label>Điện thoại</label>
                     <input type="text" class="form-control" id="phoner" name="phoner">
                  </div>
                  <div class="input-icon col-md-6 col-sm-6 col-xs-12">
                     <label>Ghi chú</label>
                     <input type="text" name="notedr" id="noter" class="form-control">
                  </div>
                  <div class="input-icon col-md-6 col-sm-6 col-xs-12">
                     <label>Địa chỉ</label>
                     <input type="text" class="form-control" id="addressr" name="addressr">
                  </div>
               </div>
            </div>
          
            <div class="k-step-tt">Phương thức thanh toán</div>
            <div class="content-step-tt row10">
               <ul class="list-choose-tt graduate_tabchon">
                  <?php foreach ($phuongthuctt as $key => $v) {?>
                  <li class="col-md-6 col-sm-6 col-xs-12 <?=($key==0)?'active':''?>" >
                     <a onclick="getThanhtoan(<?=$v['id']?>)" href="javascript:void(0)" data-id="<?=$v['id']?>" data-toggle="tab"><?=$v['ten_vi']?><span>*</span>
                     <i><?=$v['mota_vi']?></i>
                     </a> 
                  </li>
                  <?php } ?>
               </ul>
               <div class="tab-content-choose graduate_tabtext">
                  <?php foreach ($phuongthuctt as $key => $v) {?>
                  <div class="info-chosse <?=($key==0)?'active':''?>" id="chose_<?=$v['id']?>">
                     <?=$v['noidung_vi']?>
                  </div>
                  <?php } ?>
               </div>
               <script>
                  function getThanhtoan(id){
                    $('#getThanhtoan').val(id); 
                    
                    $('.graduate_tabtext div').removeClass('active');
                    $('#chose_'+id).addClass('active');
                  }
                  
                  $('.graduate_tabchon li').click( function() {
                    $('.graduate_tabchon li').removeClass('active');
                    $(this).addClass('active');
                  });
               </script>
            </div>
         </div>
      </div>
      <!-- end left gio hang -->
      <!-- right gio hang -->
      <div class="right-thanhtoan col-md-5 col-sm-12 col-xs-12">
         <div class="title-thanhtoan">
            <h3>Sản phẩm đặt mua</h3>
         </div>

         <?php   if(count($_SESSION['cart'])>0){ ?>

         <div class="list-sp-thanhtoan">

           <?php
                            
                                   $max=count($_SESSION['cart']);
                             for($i=0;$i<$max;$i++){
                               $pid=$_SESSION['cart'][$i]['productid'];
                               $q=$_SESSION['cart'][$i]['qty'];    
                              $id_cauhinh=$_SESSION['cart'][$i]['id_cauhinh'];
                            $namecauhinh=get_cauhinh($pid,$id_cauhinh);
                               $pname=get_product_name($pid,$lang);
                             
                           
                               $pimg=get_product_img($pid);
                           
                               if($q==0) continue;
                           ?>
            <div class="item-sp-tt">
               <img class="img-responsive" alt="" src="<?=_upload_sanpham_l.$pimg?>">
               <h3>
                  <a><?=$pname?> 

                  <?php if( $namecauhinh!=''){?>
                   - <?=$namecauhinh?>
                  <?php } ?>

                 </a>
               </h3>
               <p><?=$q?> x <?=(get_price($pid,$id_cauhinh)!=0)?(number_format(get_price($pid,$id_cauhinh),0, ',', '.')." <sup>đ</sup>"):'Liên hệ' ?></p>
               <div class="clearfix"></div>
               <a class="item_sub_sp1 " data-del="<?=$pid?>" data-delcauhinh="<?=$id_cauhinh?>">
               <span class="delete-pr"><i class="fa fa-trash"></i></span>
               </a>   
            </div>


          <?php } ?>

         </div>
         <div class="box-cart-tt">
            <div class="sum-sp"><?=get_total()?> sản phẩm <span><?=(get_order_total()!=0)?(number_format(get_order_total(),0, ',', '.')." <sup>đ</sup>"):'Liên hệ' ?></span></div>
            <!--<div class="more-pp-tt">Phụ phí thanh toán <span>1.234.000 <sup>đ</sup></span></div>-->
         </div>
         <!--
            <div class="box-mgg">
               <input type="text" name="company" class="form-control" placeholder="Thẻ quà tặng hoặc mã giảm giá" />
               <button class="btn-mgg">Áp dụng</button>
            </div>
            -->
         <div class="sum-sum-tt">
            Thành tiền <span><?=(get_order_total()!=0)?(number_format(get_order_total(),0, ',', '.')." <sup>đ</sup>"):'Liên hệ' ?></span>
         </div>

         <input type="hidden" name="httt" id="httt" value="">
         <button type="submit" id="hoantatthanhtoan" class="sum-dh">Đặt hàng</button> &nbsp;&nbsp; <strong id="errormsg"></strong>         

       <?php } else {?>

          <p>Bạn chưa có sản phẩm nào trong giỏ hàng !</p>

       <?php } ?>
      </div>
      <!-- end right gio hang -->
    </form>
   </div>
</section>

<script type="text/javascript">

  $('#hoantatthanhtoan').click(function(){
      var frm = $('#frmThanhtoan');
      var radioValue = $('input[name=choseadd]:checked').val();

      var namer=$('#namer').val();
      var phoner=$('#phoner').val();
      var noter=$('#noter').val();
      var addressr=$('#addressr').val();


      var names=$('#names').val();
      var phones=$('#phones').val();
      var notes=$('#notes').val();
      var addresss=$('#addresss').val();



      var httt=$('.graduate_tabchon li.active a').attr('data-id');
        $('#httt').val(httt);
            if(names==''){
              alert('Vui lòng nhập tên người nhận');
              return false;
            }
            if(phones==''){
              alert('Vui lòng nhập số điện thoại người nhận');
              return false;
            }
            if(notes==''){
              alert('Vui lòng nhập ghi chú người nhận');
              return false;
            }
              if(addresss==''){
              alert('Vui lòng nhập địa chỉ người nhận');
              return false;
            }

      if(radioValue=='khong'){

            if(namer==''){
              alert('Vui lòng nhập tên người thanh toán');
              return false;
            }
            if(phoner==''){
              alert('Vui lòng nhập số điện thoại người thanh toán');
              return false;
            }
            if(noter==''){
              alert('Vui lòng nhập ghi chú người thanh toán');
              return false;
            }
              if(addressr==''){
              alert('Vui lòng nhập địa chỉ người thanh toán');
              return false;
            }

      }
      

      frm.submit();

            return false;


  })

   $('.item_sub_sp1').click(function(){
   
     var id=$(this).attr('data-del');
    var id_cauhinh=$(this).attr('data-delcauhinh'); 
      if (confirm('Bạn có chắc muốn xóa Sản phẩm?')) {
         $.ajax({
           type: "POST",
           url: "ajax/huycart1.php",
          data: {'id':id,'id_cauhinh':id_cauhinh},
    
          // dataType: 'json',
   
           beforeSend: function(){
   
                     $('.page-loading').css("display","block");
                },
           success: function(data){
                     
           
   
              
   
                      window.location.href = 'gio-hang.html';
   
               } 
       });

        }
   });



   
</script>