<?php

// die('x');
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

  $max=count($_SESSION['sosanh']);
    for($i=0;$i<$max;$i++){
      if($id==$_SESSION['sosanh'][$i]){
        unset($_SESSION['sosanh'][$i]);
        break;
      }
    }
    $_SESSION['sosanh']=array_values($_SESSION['sosanh']);
	

	$count=count($_SESSION['sosanh']);



$data='';

     if(is_array($_SESSION['sosanh'])){
		   $max=count($_SESSION['sosanh']);
                for($i=0;$i<$max;$i++){

                	    $pid=$_SESSION['sosanh'][$i];
                	    $sql="select ten_vi,tenkhongdau_vi,id,photo,mota_vi,h2_vi,gia from #_product where id=".$pid;
                	    $d->query($sql);
                	    $item=$d->fetch_array();
                        



        $data.=' <div class="product-item compare-item" >';
        $data.='  	<div class="product-img">';
        $data.='     	<a href="'.$item['tenkhongdau_vi'].'-'.$item['id'].'.htm">';
         $data.='              <img src="'._upload_sanpham_l.$item['photo'].'" alt="'.$item['ten_vi'].'">';
         $data.='              </a>';
          $data.='             <div class="pro-label-gift"></div>';
          $data.='          </div>';
          $data.='          <div class="product-desc">';
           $data.='            <h3 class="product-title"><a href="'.$item['tenkhongdau_vi'].'-'.$item['id'].'.htm">'.$item['ten_vi'].'</a></h3>';
            $data.='           <p class="product-price">';
             $data.=number_format($item['gia'],0, ',', ',')." ₫";		
              $data.='         </p>';
              $data.='      </div>';
               $data.='     <div class="product-info">';
               $data.=$item['h2_vi'];
               $data.='     </div>';
               $data.='     <div class="compare-action">';
               $data.='        <span class="btn-quick-add-cart btn-quick-add-cart'.$item['id'].'"  data-id="'.$item['id'].'">Thêm vào giỏ hàng</span>';
                $data.='       <span class="btn-remove-compare btn-remove-compare'.$item['id'].'" data-id="'.$item['id'].'">Bỏ khỏi so sánh</span>';
                $data.='    </div>';
             $data.='    </div>';




            }}




     $data.=' <script type="text/javascript">
  
  $("span.btn-remove-compare").click(function(){
        var idsp=$(this).attr("data-id");

      $.ajax({
          type: "POST",
          url: "ajax/huysosanh.php",
         data: {"id":idsp},
         dataType: "json",
                
          cache: false,
       
          success: function(result){
    
                     
                if(result.count<1)
                     {
                       $(".zing-popup").fadeOut();
               $("body").removeClass("zing-popup-open");
                     }
          
                
          		  $(".compare-list").html(result.data);

              }
      });


  });


   $("span.btn-quick-add-cart").click(function(){
        var idsp=$(this).attr("data-id");

      $.ajax({
          type: "POST",
          url: "ajax/addcart.php",
         data: {"id":idsp},
         dataType: "json",
                
          cache: false,
          beforeSend: function(){           
                    $("span.btn-quick-add-cart"+idsp).text("Đang xử lý");
               },
          success: function(result){
              
                $("#subcart").html("("+result.count+")");
                     
          
                    $("span.btn-quick-add-cart"+idsp).text("Đã thêm vào giỏ");

              }
      });


  });
</script>';




$result = array('count'=>$count,'data'=>$data);
echo json_encode($result);

?>


