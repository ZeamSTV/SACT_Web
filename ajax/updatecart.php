
<?php   
    session_start();
    error_reporting(E_ALL & ~E_NOTICE & ~8192);
    
    if(!isset($_SESSION['lang']))
    {
    $_SESSION['lang']='vi';
    }
    
    $lang=$_SESSION['lang'];
    
    @define ( '_lib' , '../admin/lib/');
    @define ( '_source' , '../sources/');
    include_once _lib."config.php";
    include_once _lib."constant.php";
    // require_once _source."lang_$lang.php";
    include_once _lib."functions.php";
    include_once _lib."functions_giohang.php";
    include_once _lib."class.database.php";
    $d = new database($config['database']);
  

 @$id = $_POST['id'];

 @$maugh = $_POST['mausac'];
 remove_product($id,$maugh);


$count = get_total();

$data='';


 $data.='<h1 class="tieudecartpop">';



         $data.='          </h1>';

               $data.='    <div class="cart block_donhang_cart table-wrapper">';

                  $data.='     <table class="tb_giohang">';
                        
                         $data.='    <tbody>';
                              $data.='  <tr class="t_head_tb">';
                                $data.='  <td class="w_sp" scope="col"><span>Sản phẩm</span></td>';
                                 $data.=' <td class="w_giatien" scope="col"><span>Giá</span></td>';
                                 $data.=' <td class="w_soluong" scope="col"><span>Số lượng</span></td>';
                                 $data.=' <td class="w_thanhtien" scope="col"><span>Thành tiền</span></td>';
                           $data.='  </tr>';

                       $data.='     </tbody>';
                  $data.='         <tbody class="cart item">';

                      
                    
                            if(is_array($_SESSION['cart'])){
                                    $max=count($_SESSION['cart']);
                              for($i=0;$i<$max;$i++){
                                $pid=$_SESSION['cart'][$i]['productid'];
                                $q=$_SESSION['cart'][$i]['qty'];    

                                $mausac= $_SESSION['cart'][$i]['mausacgh'];
                                $pname=get_product_name($pid,$lang);
                              
                                if($mausac!='')
                                {
                                  $maugh=get_maugh($mausac);
                                }
                                

                                $pimg=get_product_img($pid);

                                if($q==0) continue;
                        


               


                         $data.='         <tr class="item-info ">';

                                 $data.='     <td data-th="Item" class="col item">';

                                       $data.='    <a href="" title="" tabindex="-1" class="product-item-photo">';
                                
                                        $data.='    <img  src="thumb/80x80/2/'._upload_sanpham_l.$pimg.'" >';
                                                                        
                                         $data.=' </a>';
                                         $data.='   <div class="product-item-details info_sp_donhang">';

                                             $data.='     <strong class="product-item-name">';
                                                    $data.=' <a href="">

                                                            '.$pname.'
                                                   </a>';
                                                    
                                                    
                                             $data.='    </strong>';

                                                 if($maugh!="") {
                                                $data.=' <dl class="item-options">';
                                                   $data.='       <dt>Màu sắc:</dt>';
                                                      $data.='     <dd>  '.$maugh.'   </dd>';
                                                                                                                        
                                                $data.=' </dl>';
                                              } 


                                        $data.='         <a class="item_sub_sp" data-del="'.$pid.'" data-delcolor="'.$mausac.'"><i class="fa fa-close"></i> Xóa</a>';
                                          $data.=' </div>';

                                  $data.='   </td>';
                                  $data.='   <td class="col price text-right" data-th="Giá">';
                                    
                                          $data.='      <span class="price-excluding-tax" data-label="Excl. Tax">';
                                        $data.='        <span class="cart-price">';
                                        $data.='      <span class="price">'.number_format(get_price($pid),0, ',', ',').'  ₫</span>            </span>';

                                              $data.='  </span>';
                                     $data.=' </td>';
                                  $data.='   <td class="col qty text-right" style="    float: right;">';
                                $data.='    <div class="input-group spinner" data-trigger="spinner">';
                                $data.='<input style="width: 35px" type="text" class="form-control text-center" value="'.$q.'" data-rule="month">';
                                 $data.='   <div class="input-group-addon" style="padding: 5px">';
                                 $data.='<a style="color: #000" href="javascript:;" class="spin-up" data-spin="up"><i class="fa fa-caret-up"></i></a>';
                         $data.=' <a style="color: #000" href="javascript:;" class="spin-down" data-spin="down"><i class="fa fa-caret-down"></i></a>';
                                        $data.='    </div>';
                                         $data.='   </div>';
                                    $data.='  </td>';
                                   $data.='  <td class="col subtotal text-right">';
                                    $data.='      <span class="price-excluding-tax" data-label="Excl. Tax">';
                                         $data.='     <span class="cart-price">';
                                 $data.=' <span class="price"><span class="price">'.number_format(get_price($pid)*$q,0, ',', '.').'  ₫</span></span>';
                                        $data.='  </span>';
                                       $data.='   </span>';
                                    $data.='  </td>';
                               $data.='  </tr>';


                         }} 
                           $data.='</tbody>';
                      $data.=' </table>';

                 $data.=' </div>';

              $data.='     <div class="cart main actions">';

                 $data.='         <a class="action continue" href="trang-chu" title="Tiếp tục mua hàng">';
                     $data.='         <span>Tiếp tục mua hàng</span>';
                      $data.='   </a>';
 $data.=' <button type="submit" name="update_cart_action" data-cart-item-update="" value="update_qty" title="Cập nhật giỏ hàng" class="action update capnhapgh">';
                          $data.='   <span>Cập nhật giỏ hàng</span>';
                        $data.=' </button>';
                        $data.='  <button type="button" data-role="proceed-to-checkout" title="Tiến hành đặt hàng" class="btn1 btn_site_2 checkoutenable">';
                          $data.='    <span>Tiến hành đặt hàng</span>';
                        $data.=' </button>';
                  $data.='  </div> ';







   $data.=' <script >
    

  $(".item_sub_sp").click(function(){

    var id=$(this).attr("data-del");
 var mausac=$(this).attr("data-delcolor");
        $.ajax({
          type: "POST",
          url: "ajax/huycart.php",
         data: {"id":id,"mausac":mausac},
   
         dataType: "json",

          beforeSend: function(){

                    $(".page-loading").css("display","block");
               },
          success: function(data){
                    
          

                   $(".page-loading").css("display","none");

                   $("#cart-nho").html(data.count);

                   $("#popupcart1").html(data.ketqua);

              }
      });
  });


  </script>';



















$result = array('count' => $count,'ketqua'=>$data);
echo json_encode($result);
  
?>

