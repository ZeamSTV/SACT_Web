

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

  







    @$id_inch=$_POST['id_inch'];

    @$price=$_POST['id_gia'];

       @$id_thuong_hieu=$_POST['id_thuong_hieu'];

 @$id_tien_ich=$_POST['id_tien_ich'];

  @$id_cong_suat=$_POST['id_cong_suat'];

   @$id_dung_tich=$_POST['id_dung_tich'];

    @$id_noi_san_xuat=$_POST['id_noi_san_xuat'];

     @$id_so_kenh=$_POST['id_so_kenh'];





    $d->reset();



    $sql="select id,loaikm,gia,ten_vi,tenkhongdau_vi,id_thuong_hieu,giacu,photo,photo1,id_cat1 from #_product where hienthi=1";



    if($_POST['com1']=='hang-moi-ve')

    {

      $sql.=" and spmoi=1";

    }





    if($_POST['cat']!=0)

    {

      $sql.=" and id_cat=".$_POST['cat'];

    }

     if($_POST['cat1']!=0)

    {

      $sql.=" and id_cat1=".$_POST['cat1'];

    }

     if($_POST['cat2']!=0)

    {

      $sql.=" and id_cat2=".$_POST['cat2'];

    }



  if($_POST['id_gia']){





       @$id_gia=$_POST['id_gia'];



               $id_gia=explode(',', $id_gia);

          for($i=1,$count = count($id_gia);$i<$count;$i++){

                $idi[] = $id_gia[$i-1];

            }



            if(count($idi)>1){ 



                    $sql.=" and (";

                  foreach ($idi as $k1 => $v1) {

                   

                      $sql2="select ten_vi,mota_vi from #_tinnho where com=7 and id=".$idi[$k1];

                      $d->query($sql2);

                      $gia1=$d->fetch_array();

                          if($k1==0)

                          {



                           $sql.="(gia >= ".$gia1['ten_vi']."  and gia<= ".$gia1['mota_vi'].") ";

                          }else

                          {

                               $sql.=" or (gia >= ".$gia1['ten_vi']."  and gia<= ".$gia1['mota_vi'].") ";

                          }

                     

                     



                  }



                  $sql.=" )";





            } else 

            {



                     $sql2="select ten_vi,mota_vi from #_tinnho where com=7 and id=".$idi[0];

                $d->query($sql2);

                $gia1=$d->fetch_array();

               

                     $sql.="  and  (gia >= ".$gia1['ten_vi']."  and gia<= ".$gia1['mota_vi'].") ";

               





            }

         









    }



     if($_POST['id_inch']){



               @$id_inch=$_POST['id_inch'];



               $id_inch=explode(',', $id_inch);

          for($i=1,$count = count($id_inch);$i<$count;$i++){

                $idi[] = $id_inch[$i-1];

            }

            $idi = implode(',',$idi);

            $sql .= " and id_inch IN ($idi)";

       

    }

      if($_POST['id_thuong_hieu']){



      



               $id_thuong_hieu=explode(',', $id_thuong_hieu);

          for($i=1,$count = count($id_thuong_hieu);$i<$count;$i++){

                $idth[] = $id_thuong_hieu[$i-1];

            }

            $idth = implode(',',$idth);

            $sql .= " and id_thuong_hieu IN ($idth)";

       

     }





      if($_POST['id_tien_ich']){



      



               $id_tien_ich=explode(',', $id_tien_ich);

          for($i=1,$count = count($id_tien_ich);$i<$count;$i++){

                $idti[] = $id_tien_ich[$i-1];

            }

            $idti = implode(',',$idti);

            $sql .= " and id_tien_ich IN ($idti)";

       

     }



      if($_POST['id_cong_suat']){



      



               $id_cong_suat=explode(',', $id_cong_suat);

          for($i=1,$count = count($id_cong_suat);$i<$count;$i++){

                $idcs[] = $id_cong_suat[$i-1];

            }

            $idcs = implode(',',$idcs);

            $sql .= " and id_cong_suat IN ($idcs)";

       

     }

       if($_POST['id_so_kenh']){



      



               $id_so_kenh=explode(',', $id_so_kenh);

          for($i=1,$count = count($id_so_kenh);$i<$count;$i++){

                $idsk[] = $id_so_kenh[$i-1];

            }

            $idsk = implode(',',$idsk);

            $sql .= " and id_so_kenh IN ($idsk)";

       

     }





         if($_POST['id_dung_tich']){



      



               $id_dung_tich=explode(',', $id_dung_tich);

          for($i=1,$count = count($id_dung_tich);$i<$count;$i++){

                $iddt[] = $id_dung_tich[$i-1];

            }

            $iddt = implode(',',$iddt);

            $sql .= " and id_dung_tich IN ($iddt)";

       

     }



          if($_POST['id_noi_san_xuat']){



      



               $id_noi_san_xuat=explode(',', $id_noi_san_xuat);

          for($i=1,$count = count($id_noi_san_xuat);$i<$count;$i++){

                $idnsx[] = $id_noi_san_xuat[$i-1];

            }

            $idnsx = implode(',',$idnsx);

            $sql .= " and id_noi_san_xuat IN ($idnsx)";

       

     }















    if($_POST['order']){

        $order=$_POST['order'];



        if($order==='name')

                            {

                                 $sql .= "  order by ten_vi asc";

                            }

                            else if($order==='position')



                            {

                                 $sql.= "  order by id desc";

                            }

                            else if($order==='promotion')



                            {

                                 $sql .= "  and sale=1 order by stt asc ,id desc";

                            }

                            else if($order==='topsale')

                            {

                                 $sql .= "  and spbanchay=1 order by stt asc ,id desc";



                            }

                            else if($order==='highlight')

                            {

                                 $sql .= "  and noibat=1 order by stt asc ,id desc";



                            }

                            else if($order==='priceasc')



                            {

                                 $sql .= "  order by gia asc";

                            }



        

    }







    $sql3.=$sql;

                

    $d->query($sql3);



    $tongsp=$d->result_array();



   



    if(count($tongsp)>0)

    {

         $total_records = count($tongsp);

    }

    else

    {

         $total_records = 1;

    }





                if($_POST['page']!='')

                {

                      $current_page =$_POST['page'];

                       

                }

                else

                {

                    $current_page=1;

                }

                if($_POST['limit'])

                {

                      $limit =$_POST['limit'];

                       

                }

                else

                {

                        $limit=40;

                }

                $total_page = ceil($total_records / $limit);







          





                if ($current_page > $total_page){

                    $current_page = $total_page;

                }

                else if ($current_page < 1){

                    $current_page = 1;

                }

                 

                $start = ($current_page - 1) * $limit;





                $sql.=" limit $start,$limit ";

                $d->query($sql);

                $product = $d->result_array();



        $data1='';





 foreach ($product as $k=> $v) {

                                

   $d->reset();

                $sql="select mau from #_product_cat where com='cat1' and id=".$v['id_cat1'];

                $d->query($sql);

                $kichco=$d->fetch_array();



                $kc=explode(',', $kichco['mau']);









          $data1.='  <li class="col2 col-md-4 col-sm-3 col-xs-6">';







                             $data1.='  <a href="'.$v['tenkhongdau_vi'].'-'.$v['id'].'.htm" title="'.$v['ten_vi'].'">';

                                $data1.='      <div class="img-container">';

                                    $data1.='     <img class="cate1944" width="130" height="130" src="thumb/'.$kc[0].'x'.$kc[1].'/1/'._upload_sanpham_l.$v['photo'].'" alt="'.$v['ten_vi'].'">';

                                    

                                    $data1.='  </div>';

                                    $data1.='  <p class="pName">'.$v['ten_vi'].'<span></span></p>';

                                     $data1.=' <div class="pos-rela">';

                                    

                                           $data1.='  <strong>'.number_format($v['gia'],0, ',', ',')." ₫".'</strong>';



                                          $data1.='  <span class="linethough">'.number_format($v['giacu'],0, ',', ',')." ₫".'</span>';

                                        $data1.=' <label class="cplb-disc">(-'.layphantram($v['gia'],$v['giacu']).'%)</label>';

                                     $data1.=' </div>';

                                 

                                  $data1.=' </a>';

                                  $data1.=' <p class="rating-lst none-padding"><span><b>'.danhgiasaotrungbinh($v['id']).'</b>/5<i class="icondmx-star"></i></span><span class="sl-rating">'.tongnguoidanhgia($v['id']).' đánh giá</span></p>';



                      





                 $data1.=' </li>';















                        }















$dsloc='';





$dsloc.='



    <script>



            function getParameterByName(name) {

                            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");

                            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),

                            results = regex.exec(location.search);

                            return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));

                        }





                 function removeQString1(key) {

                    var urlValue="'.$_POST['url'].'";

                    

                    //Get query string value

                    var searchUrl="'.$_POST['searchUrl1'].'";

                    

                    if(key!="") {

                        oldValue = getParameterByName(key);

                        removeVal=key+"="+oldValue;

                        if(searchUrl.indexOf("?"+removeVal+"&")!= "-1") {

                            urlValue=urlValue.replace("?"+removeVal+"&","?");

                        }

                        else if(searchUrl.indexOf("&"+removeVal+"&")!= "-1") {

                            urlValue=urlValue.replace("&"+removeVal+"&","&");

                        }

                        else if(searchUrl.indexOf("?"+removeVal)!= "-1") {

                            urlValue=urlValue.replace("?"+removeVal,"");

                        }

                        else if(searchUrl.indexOf("&"+removeVal)!= "-1") {

                            urlValue=urlValue.replace("&"+removeVal,"");

                        }

                    }

                    else {

                        var searchUrl="'.$_POST['searchUrl1'].'";

                        urlValue=urlValue.replace(searchUrl,"");

                    }

                    

                        window.location.href = urlValue;

                                               

                }



          function updateQueryStringParameter1(key, value) {

              

                var uri="'.$_POST['url'].'";

                var i = uri.indexOf("#");

                var hash = i === -1 ? ""  : uri.substr(i);

                     uri = i === -1 ? uri : uri.substr(0, i);



                var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");

                var separator = uri.indexOf("?") !== -1 ? "&" : "?";

                if (uri.match(re)) {

                    uri = uri.replace(re, "$1" + key + "=" + value + "$2");

                } else {

                    uri = uri + separator + key + "=" + value;

                }

                // finally append the hash as well  

                //window.history.pushState("string", "", uri + hash);

                                  window.location.href = uri + hash;





          }

                     $(".item_sort .del_item_sort").click(function(){



                            var resquestvar=$(this).closest(".item_sort").attr("data-request");



                        

                            $(this).closest(".item_sort").removeClass("active");

                            removeQString1(resquestvar) ;



                       

                    });





                      $(".item_sort3 .del_item_sort").click(function(){



                            var resquestvar=$(this).closest(".item_sort3").attr("data-request");

                             var value=$(this).closest(".item_sort3").attr("data-value");

                        

                            $(this).closest(".item_sort3").removeClass("active");

                           updateQueryStringParameter1(resquestvar,value);



                       

                    });







            















    </script>





';

        if($_POST['id_gia']){







                  if($_POST['id_gia']!='')

                  {

    

                       $id_th1=explode(',', $_POST['id_gia']);

                  

                            for($i=1,$count = count($id_th1);$i<$count;$i++){

                   





                        

                         $dsloc.='<div data-request="id_gia" data-value="'.$id_th1[$i-1].'"  class="item_sort3 active"> ';

                          $dsloc.='<a>Giá: '.get_tentheoloai1($id_th1[$i-1]).'</a>';

                           $dsloc.='<a  class="del_item_sort"><i class="fa fa-times" aria-hidden="true"></i></a>';

                             $dsloc.='</div> ';





                       }   



                  }

                    







        }







        if($_POST['id_thuong_hieu']){







                  if($_POST['id_thuong_hieu']!='')

                  {

    

                       $id_th1=explode(',', $_POST['id_thuong_hieu']);

                  

                            for($i=1,$count = count($id_th1);$i<$count;$i++){

                   





                        

                         $dsloc.='<div data-request="id_thuong_hieu" data-value="'.$id_th1[$i-1].'"  class="item_sort3 active"> ';

                          $dsloc.='<a>Thương hiệu: '.get_tentheoloai($id_th1[$i-1]).'</a>';

                           $dsloc.='<a  class="del_item_sort"><i class="fa fa-times" aria-hidden="true"></i></a>';

                             $dsloc.='</div> ';





                       }   



                  }

                    







        }





          if($_POST['id_inch']){







                  if($_POST['id_inch']!='')

                  {

    

                       $id_qt1=explode(',', $_POST['id_inch']);

                  

                            for($i=1,$count = count($id_qt1);$i<$count;$i++){

                   





                        

                         $dsloc.='<div data-request="id_inch" data-value="'.$id_qt1[$i-1].'" class="item_sort3 active"> ';

                          $dsloc.='<a>Inch: '.get_tentheoloai($id_qt1[$i-1]).'</a>';

                           $dsloc.='<a  class="del_item_sort"><i class="fa fa-times" aria-hidden="true"></i></a>';

                             $dsloc.='</div> ';





                       }   



                  }

                    







        }

          if($_POST['id_tien_ich']){







                  if($_POST['id_tien_ich']!='')

                  {

    

                       $id_qt1=explode(',', $_POST['id_tien_ich']);

                  

                            for($i=1,$count = count($id_qt1);$i<$count;$i++){

                   





                        

                         $dsloc.='<div data-request="id_tien_ich" data-value="'.$id_qt1[$i-1].'" class="item_sort3 active"> ';

                          $dsloc.='<a>Tiện ích: '.get_tentheoloai($id_qt1[$i-1]).'</a>';

                           $dsloc.='<a  class="del_item_sort"><i class="fa fa-times" aria-hidden="true"></i></a>';

                             $dsloc.='</div> ';





                       }   



                  }

                    







        }

          if($_POST['id_cong_suat']){







                  if($_POST['id_cong_suat']!='')

                  {

    

                       $id_qt1=explode(',', $_POST['id_cong_suat']);

                  

                            for($i=1,$count = count($id_qt1);$i<$count;$i++){

                   





                        

                         $dsloc.='<div data-request="id_cong_suat" data-value="'.$id_qt1[$i-1].'" class="item_sort3 active"> ';

                          $dsloc.='<a>Công suất: '.get_tentheoloai($id_qt1[$i-1]).'</a>';

                           $dsloc.='<a  class="del_item_sort"><i class="fa fa-times" aria-hidden="true"></i></a>';

                             $dsloc.='</div> ';





                       }   



                  }

                    







        }





          if($_POST['id_so_kenh']){







                  if($_POST['id_so_kenh']!='')

                  {

    

                       $id_qt1=explode(',', $_POST['id_so_kenh']);

                  

                            for($i=1,$count = count($id_qt1);$i<$count;$i++){

                   





                        

                         $dsloc.='<div data-request="id_so_kenh" data-value="'.$id_qt1[$i-1].'" class="item_sort3 active"> ';

                          $dsloc.='<a>Số kênh: '.get_tentheoloai($id_qt1[$i-1]).'</a>';

                           $dsloc.='<a  class="del_item_sort"><i class="fa fa-times" aria-hidden="true"></i></a>';

                             $dsloc.='</div> ';





                       }   



                  }

                    







        }

          if($_POST['id_noi_san_xuat']){







                  if($_POST['id_noi_san_xuat']!='')

                  {

    

                       $id_qt1=explode(',', $_POST['id_noi_san_xuat']);

                  

                            for($i=1,$count = count($id_qt1);$i<$count;$i++){

                   





                        

                         $dsloc.='<div data-request="id_noi_san_xuat" data-value="'.$id_qt1[$i-1].'" class="item_sort3 active"> ';

                          $dsloc.='<a>Nơi sản xuất: '.get_tentheoloai($id_qt1[$i-1]).'</a>';

                           $dsloc.='<a  class="del_item_sort"><i class="fa fa-times" aria-hidden="true"></i></a>';

                             $dsloc.='</div> ';





                       }   



                  }

                    







        }



       if($_POST['id_dung_tich']){







                  if($_POST['id_dung_tich']!='')

                  {

    

                       $id_qt1=explode(',', $_POST['id_dung_tich']);

                  

                            for($i=1,$count = count($id_qt1);$i<$count;$i++){

                   





                        

                         $dsloc.='<div data-request="id_dung_tich" data-value="'.$id_qt1[$i-1].'" class="item_sort3 active"> ';

                          $dsloc.='<a>Dung tích: '.get_tentheoloai($id_qt1[$i-1]).'</a>';

                           $dsloc.='<a  class="del_item_sort"><i class="fa fa-times" aria-hidden="true"></i></a>';

                             $dsloc.='</div> ';





                       }   



                  }

                    







        }



        // if($_POST['donvi']){



        //     $d->reset();

        //         $sql_tintuc = "select ten_vi from #_tinnho where id=".$_POST['donvi'];

        //         $d->query($sql_tintuc);

        //         $gettheloai = $d->fetch_array();

                

        //      $dsloc.='<div data-request="donvi" class="item_sort active"> ';

        //           $dsloc.='<a>Đơn vị: '.$gettheloai['ten_vi'].'</a>';

        //                 $dsloc.='<a  class="del_item_sort"><i class="fa fa-times" aria-hidden="true"></i></a>';

        //               $dsloc.='</div> ';

        // }



        // if($_POST['mausac']){



        //     $d->reset();

        //         $sql_tintuc = "select ten_vi from #_tinnho where id=".$_POST['mausac'];

        //         $d->query($sql_tintuc);

        //         $gettheloai = $d->fetch_array();

                

        //      $dsloc.='<div data-request="mausac" class="item_sort active"> ';

        //           $dsloc.='<a>Màu sắc: '.$gettheloai['ten_vi'].'</a>';

        //                 $dsloc.='<a  class="del_item_sort"><i class="fa fa-times" aria-hidden="true"></i></a>';

        //               $dsloc.='</div> ';

        // }

        // if($_POST['xuatxu']){



        //     $d->reset();

        //         $sql_tintuc = "select ten_vi from #_tinnho where id=".$_POST['xuatxu'];

        //         $d->query($sql_tintuc);

        //         $getxuatxu = $d->fetch_array();

        //      $dsloc.='<div data-request="xuatxu" class="item_sort active"> ';

        //           $dsloc.='<a>Xuất xứ: '.$getxuatxu['ten_vi'].'</a>';

        //                 $dsloc.='<a  class="del_item_sort"><i class="fa fa-times" aria-hidden="true"></i></a>';

        //               $dsloc.='</div> ';

        // }



        // if($_POST['loaida']){



        //       $d->reset();

        //         $sql_tintuc = "select ten_vi from #_tinnho where id=".$_POST['loaida'];

        //         $d->query($sql_tintuc);

        //         $getloaida = $d->fetch_array();  

        //      $dsloc.='<div data-request="loaida" class="item_sort active"> ';

        //           $dsloc.='<a>Loại da: '.$getloaida['ten_vi'].'</a>';

        //                 $dsloc.='<a  class="del_item_sort"><i class="fa fa-times" aria-hidden="true"></i></a>';

        //               $dsloc.='</div> ';

        // }





        // if($_POST['dactinh']){



        // $d->reset();

        //         $sql_tintuc = "select ten_vi from #_tinnho where id=".$_POST['dactinh'];

        //         $d->query($sql_tintuc);

        //         $getdactinh = $d->fetch_array();

        //      $dsloc.='<div data-request="dactinh" class="item_sort active"> ';

        //           $dsloc.='<a>Đặc tính: '.$getdactinh['ten_vi'].'</a>';

        //                 $dsloc.='<a  class="del_item_sort"><i class="fa fa-times" aria-hidden="true"></i></a>';

        //               $dsloc.='</div> ';

        // }

























$phantrang='';







         for ($i = 1; $i <= $total_page; $i++){ 



             if ($i == $current_page){ 



          $phantrang.='  <a value="'.$i.'" >Trang '.$i.' trong '.$total_page.'</a>';



            } else {

           $phantrang.=' <div>';

            $phantrang.='  <a value="'.$i.'" >Trang '.$i.' trong '.$total_page.'</a>';

              $phantrang.='  </div>';

            } 



             } 



    $result = array('data1'=>$data1,'dsloc'=>$dsloc,'phantrang'=>$phantrang);

echo json_encode($result);







?>

