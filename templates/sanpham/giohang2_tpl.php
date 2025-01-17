
<script type="text/javascript">
  function del1(pid){
    if(confirm('Do you really mean to delete this item')){
      document.form3.pid.value=pid;
      document.form3.command.value='delete1';
      document.form3.submit();
    }
  }
  function clear_cart(){
    if(confirm('This will empty your shopping cart, continue?')){
      document.form3.command.value='clear';
      document.form3.submit();
    }
  }
  function update_cart1(){
    document.form3.command.value='update1';
    document.form3.submit();
  }
</script>


<div id="giohang">

        <div class="title_cate">
               <div class="margin">
                  <div class="nav-bredcrum">
                     <a href="">Trang chủ</a> <span>/</span> Giỏ hàng                                
                  </div>
               </div>
            </div>

                 <div class="content-trangcon">
               <div class="margin">
    <div class="ghtrai col-md-9 col-sm-9 col-xs-12">

 
             <?php if(count($_SESSION['cart'])>0) {?>
                  <form action="gio-hang.html" name="form3" method="post">
                         
                        <input type="hidden" name="command" />
                      <div class="cart block_donhang_cart table-wrapper">

                          <table class="tb_giohang" style="    width: 100%;">
                            
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

                                              <a href="" title="" tabindex="-1" class="product-item-photo photo1">
                                    
                                               <img  src="thumb/90x90/2/<?=_upload_sanpham_l.$pimg?>" >
                                                                            
                                             </a>
                                              <div class="product-item-details info_sp_donhang">

                                                    <strong class="product-item-name">
                                                         <a href="">

                                                                <?=$pname?>
                                                          </a>
                                                        
                                                        
                                                    </strong>



                                                    <a class="item_sub_sp1" data-del="<?=$pid?>" data-delcolor="<?=$mausac?>"><i class="fa fa-close"></i> Xóa</a>
                                              </div>

                                        </td>
                                        <td class="col price text-right " >
                                        
                                                  <span class="price-excluding-tax" >
                                                          <span class="cart-price">
                                                              <span class="price"><?=number_format(get_price($pid),0, ',', ',')?>  ₫</span>            </span>

                                                  </span>
                                        </td>
                                        <td class="col qty text-right" style="    float: right;">
                                              

                                              <div class="input-group spinner" data-trigger="spinner">
                                                <input style="width: 40px" type="text" class="form-control text-center" name="product<?=$pid?>_<?=$mausac?>" value="<?=$q?>" data-rule="month">
                                                <div class="input-group-addon" style="padding: 5px">
                                                  <a style="color: #000" href="javascript:;" class="spin-up" data-spin="up"><i class="fa fa-caret-up"></i></a>
                                                  <a style="color: #000" href="javascript:;" class="spin-down" data-spin="down"><i class="fa fa-caret-down"></i></a>
                                                </div>
                                              </div>


                                        </td>
                                        <td class="col subtotal text-right tongtien1">
                                            <span class="price-excluding-tax" style="    padding-right: 10px;">
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
                                <span>< Tiếp tục mua hàng</span>
                            </a>
                            <button type="submit"  onclick="update_cart1()"  title="Cập nhật giỏ hàng" class="action updatecartpop capnhapgh">
                                <span> <i class="fa fa-refresh fa-spin" style="font-size:16px"></i> Cập nhật giỏ hàng</span>
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


    <div class="ghphai col-md-3 col-sm-3 col-xs-12">

        <div class="cart-summary">

              <div class="tieudetong">
                  Hóa đơn của bạn
              </div>


              <div class="col-xs-12">

                  <table class="tablegiohang">
                    
                      <tr>
                          <td>Tạm tính:</td>
                          <td style="text-align: right;"><?=number_format(get_order_total(),0, ',', ',')?> ₫</td>
                      </tr>
                       <tr>
                          <td>Tổng tiền:</td>
                          <td style="    color: #ff6600;
    font-weight: bold;
    text-align: right;"><?=number_format(get_order_total(),0, ',', ',')?> ₫</td>
                      </tr>

                  </table>
                  <a href="thanh-toan.html" class="btn1 btn_site_2 checkoutenable" style="     margin-top: 15px;
    margin-bottom: 10px;
    width: 100%;
    text-align: center;
    padding: 7px 10px">
                                <span style="color:#fff">Tiến hành đặt hàng</span>
                   </a> 
              </div>

        </div>
      </div>

    </div>

    </div>




    <?php

            $mangidcat=array();
            $mangidsp=array();
             $max=count($_SESSION['cart']);
              for($i=0;$i<$max;$i++){
               $mangidcat[]=get_idcat($_SESSION['cart'][$i]['productid']);
                $mangidsp[]=$_SESSION['cart'][$i]['productid'];
              }

            $mangidcat=implode(',', $mangidcat);

            $mangidsp=implode(',', $mangidsp);
          

            if($mangidcat!=''&&$mangidsp!='')
            {

              $d->reset();
            $sql="select * from #_product where id_cat in ($mangidcat) and id not in ($mangidsp)";
            $d->query($sql);

            $product_khac=$d->result_array();
            }

            


    ?>





</div>



  <script type="text/javascript">
    

  $('.item_sub_sp1').click(function(){

    var id=$(this).attr('data-del');

        $.ajax({
          type: "POST",
          url: "ajax/huycart1.php",
         data: {'id':id},
   
         dataType: 'html',

          success: function(data){
                    
          

       

             

                     window.location.href = 'gio-hang.html';

              } 
      });
  });

      $("#owl-spchitiet").owlCarousel({
             items : 5,
                
        loop:true,
        slideSpeed : 2000,
        nav: true,
        autoplay: true,
        navText: ["<img src='img/nutprev.png'>","<img src='img/nutnext.png'>"],
         responsive:{
        0:{
                                                      items:2,
                                                      nav:false,
                                                      loop:true
                                                  },
                                                  600:{
                                                      items:3,
                                                      nav:false,
                                                      loop:true
                                                  },
                                                  1000:{
                                                      items:5,
                                                      nav:true,
                                                      loop:false
                                                   
                                                  }
                                              }

                                               

    
      });
  </script>

  


  <?php if($com=='gio-hang'){?>



      <script type="text/javascript">
        
              $(window).bind('scroll', function () {
    if ($(window).scrollTop() > 150) {
     $('.headertop1').removeClass('headertopfix');
    }

});

      </script>



  <?php } ?>