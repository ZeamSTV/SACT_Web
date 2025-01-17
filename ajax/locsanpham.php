

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

  





        @$cid=$_POST['cid'];
         $d->reset();
            $sql="select ten_vi,id,tenkhongdau_vi,id_cat from #_product_cat where hienthi=1 and com='cat1' and id_cat=".$cid."  order by stt asc, id desc ";

            $d->query($sql);
            $listcap2=$d->result_array();
          $d->reset();
           $sqlsp="select ten_vi,tenkhongdau_vi,id,gia,giacu,photo,mota_vi from #_product where hienthi=1 and id_cat=".$cid;
      

        
       
         foreach ($listcap2 as $key => $v) {
          
            if($_POST[q_bodautv1($v['ten_vi']).'search']!=''){


                $giatri=explode(',',$_POST[q_bodautv1($v['ten_vi']).'search']);

                array_pop($giatri);
            
                $sqlsp.=" and (";
                if(count($giatri)>1){

                      foreach ($giatri as $key1 => $v1) {
                          if($key1==0){

                            $sqlsp.=" (id_cat2 like '%".$v1."%') ";
                          }else
                          {
                            $sqlsp.=" or (id_cat2 like '%".$v1."%') ";

                          }
                      }
                }else
                {

                     $sqlsp.=" id_cat2 like '%".$giatri[0]."%'";

                }


                $sqlsp.=" )";
            
             

              }
         }



        if($_POST['searchOrder']!=''){

          $sqlsp.=' '.$_POST['searchOrder'];
        }else
        {
          $sqlsp.=" order by stt asc, id desc";
        }
        
 
 
        $d->query($sqlsp);

        $product=$d->result_array();





        $data1='';

        foreach ($product as $key => $v) {



                        

                  
                        $data1.='  <div class="grid_sp item_sp col-md-3 col-sm-4 col-xs-6">';

                         $data1.='      <figure>';
                          $data1.='         <a href="'.q_bodautv($v['ten_vi']).'-'.$v['id'].'.htm"><img style="width: auto;max-width: 100%" src="thumb/220x220/2/'._upload_sanpham_l.$v['photo'].'"></a>';
                           $data1.='    </figure>';
                           $data1.='    <figcaption>';
                            $data1.='       <h3><a href="'.q_bodautv($v['ten_vi']).'-'.$v['id'].'.htm">'.$v['ten_vi'].'</a></h3>';
                           

                            if(coutncauhinh($v['id'])>0) {
                              $data1.='  <p>Tùy chọn cấu hình: '.coutncauhinh($v['id']).'</p>';

                             } 

                              $data1.='     <div class="price_sp">';

                                

                               if($v['giacu']!=0){
                                       $data1.='     <span class="price_moi">';


                                       if($v['gia']!=0){

                                        $data1.=   number_format($v['gia'],0, ',', '.')." đ";
                                       }else
                                       {
                                            $data1.=' Liên hệ';
                                       }
                                      



                                       $data1.=' </span>';



                                      $data1.='<span class="price_cu">';



                                         if($v['giacu']!=0){

                                        $data1.=   number_format($v['giacu'],0, ',', '.')." đ";
                                       }else
                                       {
                                            $data1.=' Liên hệ';
                                       }
                                      



                                      $data1.='</span>';

                                    } else {

                                           $data1.=' <span class="price_moi">';


                                           if($v['gia']!=0){

                                               $data1.=   number_format($v['gia'],0, ',', '.')." đ";
                                             }else
                                             {
                                                  $data1.=' Liên hệ';
                                             }
                                      


                                         $data1.='</span>';
                                 } 

                                      
                               $data1.='    </div>';
                          $data1.='     </figcaption>';

                     
                               if(($v['gia']<$v['giacu'])&&$v['gia']!=0&&$v['giacu']!=0){
                                      $giamgia=100-($v['gia']/$v['giacu']*100);
                                  
                                             $data1.='   <div class="iconsale">';

                                 $data1.='-'.round($giamgia).'%';
                                   $data1.='  </div>';
                               }  
                           
                             if($v['hot']==1) {
                           $data1.='    <span class="pos-label pr-new">Hot</span>';
                            } 
                        $data1.='   </div>';
                      
               } 


    $result = array('data1'=>$data1);

echo json_encode($result);







?>

