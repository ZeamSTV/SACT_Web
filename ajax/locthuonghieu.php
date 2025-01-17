
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

        include_once _lib."tridepzai.php";
    include_once _lib."functions.php";
    include_once _lib."functions_giohang.php";
    include_once _lib."class.database.php";
    $d = new database($config['database']);
  


    @$id_thuonghieu=$_POST['id'];
  
     @$dactinh=$_POST['dactinh'];
    @$loaida=$_POST['loaida'];
    @$theloai=$_POST['theloai'];
    @$xuatxu=$_POST['xuatxu'];
    @$price=$_POST['price'];


    $d->reset();

    $sql="select id,gia,loaikm,ten_vi,tenkhongdau_vi,id_thuonghieu,giacu,photo,photo1 from #_product where hienthi=1 and id_thuonghieu=".$id_thuonghieu;


  if($_POST['price']){



    $gialoc=explode('_', $price);

        $sql.=" and (gia >=".$gialoc[0]." and gia<=".$gialoc[1]." ) ";



    }

     if($_POST['theloai']){

        $sql.=" and id_theloai=".$theloai;
    }
    if($_POST['loaida']){

        $sql.=" and id_loaida=".$loaida;
    }
     if($_POST['id_quantam']){

               @$id_quantam=$_POST['id_quantam'];

               $id_quantam=explode(',', $id_quantam);
          for($i=1,$count = count($id_quantam);$i<$count;$i++){
                $idi[] = $id_quantam[$i-1];
            }
            $idi = implode(',',$idi);
            $sql .= " and id_quantam IN ($idi)";
       
    }
     if($_POST['xuatxu']){

        $sql.=" and id_xuatxu=".$xuatxu;
    } if($_POST['dactinh']){

        $sql.=" and id_dactinh=".$dactinh;
    }

    $d->query($sql);
    $product=$d->result_array();





            





$data1='';


 foreach ($product as $k=> $v) {
                                


                              $data1.='  <div class="product_item col-md-3 col-sm-4 col-xs-6">

                                                <div  class="item_shopping txt_link_hasaki">

                                                        <div class="main_thumb_shopping">
                                                            <a title="'.$v['ten_vi'].'" href="'.$v['tenkhongdau_vi'].'-'.$v['id'].'.htm"><img alt="'.$v['ten_Vi'].'" src="thumb/300x300/2/'._upload_sanpham_l.$v['photo'].'"> ';

                                                         if($v['photo1']!='') {    
                                                                      $data1.='    <img class="photo image img_thumb_sub" src="thumb/300x300/2/'._upload_sanpham_l.$v['photo1'].'" width="300" height="300" alt="Tem phụ">';
                                                             } else {

                                                                            $data1.='      <img class="photo image img_thumb_sub" src="thumb/300x300/2/'._upload_sanpham_l.$v['photo'].'" width="300" height="300" alt="Tem phụ">';

                                                              } 
                                                           
                                                                    $data1.='  </a> ';

                                                          $data1.='    </div> ';
                                                  

                                                     $data1.='<div class="info_shopthuonghieu">';

                                                         $data1.=' <div class="price_item_shopping">';
                                                              
                                                            // phan gia


                                                                  if($v['loaikm']!='') {

                                          $chuoikm=$v['loaikm'];
                                          $d->reset();
                                          $sql="select * from #_khuyenmai where id in ($chuoikm) order by uutien asc";
                                          $d->query($sql);
                                          $thutu=$d->result_array();


                                            $dem=kiemtrakhuyenmai($v['id']);

                                           if($dem>0) {
                                            foreach ($thutu as $v1) {
                                          

                                            $d->reset();
                                            $sql="select * from #_khuyenmai where id=".$v1['id'];
                                            $d->query($sql);
                                            $khuyenmai=$d->fetch_array();



                                          
                             $tgbd=strtotime(date($khuyenmai['thoigianbatdau']));
                                              $tgkt=strtotime(date($khuyenmai['thoigianketthuc']));

                                              $tght=strtotime(date('Y-m-d'));
                                               if( $tght>=$tgbd && $tght<=$tgkt)
                                              {
                                            
                                    $data1.='<span class="giamoithuonghieu">';
                                            $data1.='<span>'.number_format(gettienkhuyenmai($v['id'],$v1['id']),0, ',', '.')." đ".'</span>    ';              
                                         $data1.='</span>';
                                        $data1.=' <span class="giacuthuonghieu">';
                                      $data1.='  <span>'.($v['gia']!=0)?(number_format($v['gia'],0, ',', ',')." đ"):'Liên hệ'.'</span>';
                                   $data1.='</span> ';

                                       

                                               break;
                                             
                                              } 

                                              

                                    }} else {


                                     $data1.='   <span class="giamoithuonghieu">';
                                       $data1.=' <span>'.($v['gia']!=0)?(number_format($v['gia'],0, ',', ',')." đ"):'Liên hệ'.'</span>';
                                   $data1.=' </span> ';




                                  } 




                                      } else { 





                            $data1.='  <span class="giamoithuonghieu">';
                                     $data1.='  <span>'.($v['gia']!=0)?(number_format($v['gia'],0, ',', ',')." đ"):'Liên hệ'.'</span>';
                                  $data1.='  </span> ';


                                     } 



                                                            // end phan gia



                                                             $data1.='</div>';
                                                                 $data1.='<div class="thuonghieudeal">';
                                                                     $data1.='<span>'.get_thuonghieu($v['id_thuonghieu']).'</span>';
                                                                 $data1.='</div>';
                                                                $data1.=' <div class="tensanphamdeal">';
                                                                  $data1.='   <h3><a href="'.$v['tenkhongdau_vi'].'-'.$v['id'].'.htm">'.$v['ten_vi'].'</a></h3>';
                                                                 $data1.='</div>';

                                                   $data1.='  </div>';

                                                 $data1.='</div> ';

                                           $data1.=' </div> ';


                        }







// $dsloc='';
// $dsloc.='Sản phẩm lọc theo:';

//         $dsloc.='<span>';

//          if($_POST['price']){

//                 $gialoc=explode('_', $price);
//              $dsloc.='<div data-request="price" class="item_sort active"> ';
//                   $dsloc.='<a>Giá:'.number_format($gialoc[0],0, ',', ',')." đ".' - '.number_format($gialoc[1],0, ',', ',')." đ".'</a>';
//                         $dsloc.='<a  class="del_item_sort"><i class="fa fa-times" aria-hidden="true"></i></a>';
//                       $dsloc.='</div> ';
//         }

//         if($_POST['theloai']){

//             $d->reset();
//                 $sql_tintuc = "select * from #_tinnho where id=".$_POST['theloai'];
//                 $d->query($sql_tintuc);
//                 $gettheloai = $d->fetch_array();
                
//              $dsloc.='<div data-request="theloai" class="item_sort active"> ';
//                   $dsloc.='<a>Thể loại: '.$gettheloai['ten_vi'].'</a>';
//                         $dsloc.='<a  class="del_item_sort"><i class="fa fa-times" aria-hidden="true"></i></a>';
//                       $dsloc.='</div> ';
//         }

//         if($_POST['xuatxu']){

//             $d->reset();
//                 $sql_tintuc = "select * from #_tinnho where id=".$_POST['xuatxu'];
//                 $d->query($sql_tintuc);
//                 $getxuatxu = $d->fetch_array();
//              $dsloc.='<div data-request="xuatxu" class="item_sort active"> ';
//                   $dsloc.='<a>Xuất xứ: '.$getxuatxu['ten_vi'].'</a>';
//                         $dsloc.='<a  class="del_item_sort"><i class="fa fa-times" aria-hidden="true"></i></a>';
//                       $dsloc.='</div> ';
//         }

//         if($_POST['loaida']){

//               $d->reset();
//                 $sql_tintuc = "select * from #_tinnho where id=".$_POST['loaida'];
//                 $d->query($sql_tintuc);
//                 $getloaida = $d->fetch_array();  
//              $dsloc.='<div data-request="loaida" class="item_sort active"> ';
//                   $dsloc.='<a>Loại da: '.$getloaida['ten_vi'].'</a>';
//                         $dsloc.='<a  class="del_item_sort"><i class="fa fa-times" aria-hidden="true"></i></a>';
//                       $dsloc.='</div> ';
//         }


//         if($_POST['dactinh']){

//         $d->reset();
//                 $sql_tintuc = "select * from #_tinnho where id=".$_POST['dactinh'];
//                 $d->query($sql_tintuc);
//                 $getdactinh = $d->fetch_array();
//              $dsloc.='<div data-request="dactinh" class="item_sort active"> ';
//                   $dsloc.='<a>Đặc tính: '.$getdactinh['ten_vi'].'</a>';
//                         $dsloc.='<a  class="del_item_sort"><i class="fa fa-times" aria-hidden="true"></i></a>';
//                       $dsloc.='</div> ';
//         }


// $dsloc.='</span>';


// $dsloc.='

//     <script>

//         function removeQString(key) {
//                     var urlValue=document.location.href;
                    
//                     //Get query string value
//                     var searchUrl=location.search;
                    
//                     if(key!="") {
//                         oldValue = getParameterByName(key);
//                         removeVal=key+"="+oldValue;
//                         if(searchUrl.indexOf("?"+removeVal+"&")!= "-1") {
//                             urlValue=urlValue.replace("?"+removeVal+"&","?");
//                         }
//                         else if(searchUrl.indexOf("&"+removeVal+"&")!= "-1") {
//                             urlValue=urlValue.replace("&"+removeVal+"&","&");
//                         }
//                         else if(searchUrl.indexOf("?"+removeVal)!= "-1") {
//                             urlValue=urlValue.replace("?"+removeVal,"");
//                         }
//                         else if(searchUrl.indexOf("&"+removeVal)!= "-1") {
//                             urlValue=urlValue.replace("&"+removeVal,"");
//                         }
//                     }
//                     else {
//                         var searchUrl=location.search;
//                         urlValue=urlValue.replace(searchUrl,"");
//                     }
//                     history.pushState({state:1, rand: Math.random()}, "", urlValue);
//                 }

//             $(".sort_from_left .item_sort .del_item_sort").click(function(){

//                             var resquestvar=$(this).parent().attr("data-request");
//                             $(this).closest(".item_sort").removeClass("active");
//                             removeQString(resquestvar) 

//                     });


//     </script>


// ';



    $result = array('data1'=>$data1,'dsloc'=>$dsloc);
echo json_encode($result);



?>
