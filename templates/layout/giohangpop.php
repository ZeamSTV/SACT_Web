<!--modal -->

<script type="text/javascript">
  function del(pid){
    if(confirm('Do you really mean to delete this item')){
      document.form2.pid.value=pid;
      document.form2.command.value='delete';
      document.form2.submit();
    }
  }
  function clear_cart(){
    if(confirm('This will empty your shopping cart, continue?')){
      document.form2.command.value='clear';
      document.form2.submit();
    }
  }
  function update_cart(){
    document.form2.command.value='update';
    document.form2.submit();
  }
</script>

  <div class="modal fade" id="myModalgiohang" role="dialog">
    <div class="modal-dialog modal-dialog1" style="margin-top: 40px;">
    
      <!-- Modal content-->
      <div class="modal-content">
      <!--   <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         


        </div> -->
        <div class="modal-body">
        	<button type="button" class="close" data-dismiss="modal">&times;</button>

            <div id="popupcart1" class="page-title-wrapper">


                  <h1 class="tieudecartpop">

                        <span>GIỎ HÀNG (<?=get_total()?> sản phẩm) </span>

                  </h1>

                  <?php if(count($_SESSION['cart'])>0) {?>
                  <form action="gio-hang.html" name="form2" method="post">
                         
                        <input type="hidden" name="command" />
                      <div class="cart block_donhang_cart table-wrapper">

                          <table class="tb_giohang">
                            
                              <tbody>
                                  <tr class="t_head_tb">
                                    <td class="w_sp" scope="col"><span>Sản phẩm</span></td>
                                    <td class="w_giatien" scope="col"><span>Giá</span></td>
                                    <td class="w_soluong" scope="col"><span>Số lượng</span></td>
                                    <td class="w_thanhtien" scope="col"><span>Thành tiền</span></td>
                                </tr>

                              </tbody>
                              <tbody class="cart item">

                              <?php

                        
                      
                                if(is_array($_SESSION['cart'])){
                                        $max=count($_SESSION['cart']);
                                  for($i=0;$i<$max;$i++){
                                    $pid=$_SESSION['cart'][$i]['productid'];
                                    $q=$_SESSION['cart'][$i]['qty'];    

                                    $mausac= $_SESSION['cart'][$i]['mausacgh'];
                                    $pname=get_product_name($pid,$lang);
                                  
                                  

                                    $pimg=get_product_img($pid);

                                    if($q==0) continue;
                            ?>






                                    <tr class="item-info ">

                                        <td data-th="Item" class="col item">

                                              <a href="" title="" tabindex="-1" class="product-item-photo">
                                    
                                               <img  src="thumb/80x80/2/<?=_upload_sanpham_l.$pimg?>" >
                                                                            
                                             </a>
                                              <div class="product-item-details info_sp_donhang">

                                                    <strong class="product-item-name">
                                                         <a href="">

                                                                <?=$pname?>
                                                          </a>
                                                        
                                                        
                                                    </strong>

                                                    <?php if($mausac!='') {?>
                                                    <dl class="item-options">
                                                              <dt>Màu sắc:</dt>
                                                              <dd>  <?=get_maugh($mausac)?>     </dd>
                                                                                                                            
                                                    </dl>
                                                    <?php } ?>


                                                    <a class="item_sub_sp" data-del="<?=$pid?>" data-delcolor="<?=$mausac?>"><i class="fa fa-close"></i> Xóa</a>
                                              </div>

                                        </td>
                                        <td class="col price text-right" data-th="Giá">
                                        
                                                  <span class="price-excluding-tax" data-label="Excl. Tax">
                                                          <span class="cart-price">
                                                              <span class="price"><?=number_format(get_price($pid),0, ',', ',')?>  ₫</span>            </span>

                                                  </span>
                                        </td>
                                        <td class="col qty text-right" style="    float: right;">
                                            <div class="input-group spinner" data-trigger="spinner">
                                                <input style="width: 40px" type="text" class="form-control text-center soluongpop"  name="product<?=$pid?>_<?=$mausac?>" value="<?=$q?>" data-rule="quantity">
                                                <div class="input-group-addon" style="padding: 5px">
                                                  <a style="color: #000" href="javascript:;" class="spin-up" data-spin="up"><i class="fa fa-caret-up"></i></a>
                                                  <a style="color: #000" href="javascript:;" class="spin-down" data-spin="down"><i class="fa fa-caret-down"></i></a>
                                                </div>
                                              </div>


                                        </td>
                                        <td class="col subtotal text-right">
                                            <span class="price-excluding-tax" data-label="Excl. Tax">
                                                <span class="cart-price">
                                                    <span class="price"><span class="price"><?=number_format(get_price($pid)*$q,0, ',', '.')?>  ₫</span></span>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>


                              <?php }}?>


                                  


                            
                              </tbody>
                          </table>

                      </div>

                      <div class="cart main actions">

                            <a class="action continue" href="trang-chu.html" title="Tiếp tục mua hàng">
                                <span>Tiếp tục mua hàng</span>
                            </a>
                            <button type="submit" name="update_cart_action" onclick="update_cart()"  title="Cập nhật giỏ hàng" class="action updatecartpop capnhapgh">
                                <span>Cập nhật giỏ hàng</span>
                            </button>
                            <a href="thanh-toan.html" class="btn1 btn_site_2 checkoutenable">
                                <span style="color:#fff">Tiến hành đặt hàng</span>
                            </a>
                      </div>
                  </form>



                  <?php } else {?>


                      <p style="    text-align: center;">Không có sản phẩm trong giỏ hàng !!!</p>

                  <?php } ?>
            </div>
            
        </div>
    
      </div>
      
    </div>
  </div>
  <!--END MODAL-->



  <script type="text/javascript">
    

  $('.item_sub_sp').click(function(){

    var id=$(this).attr('data-del');
     var mausac=$(this).attr('data-delcolor');
        $.ajax({
          type: "POST",
          url: "ajax/huycart.php",
         data: {'id':id,'mausac':mausac},
   
         dataType: 'json',
         cache: false,
          beforeSend: function(){

                    $('.page-loading').css("display","block");
               },
          success: function(data){
                    
          

                 

                   $('#cart-nho').html(data.count);

                   $('#popupcart1').html(data.ketqua);

              },
            complete: function () {
              $('.page-loading').css("display","none");
         }
      });
  });


  </script>