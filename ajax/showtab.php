

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

      include_once _lib."tridepzai.php";

    // require_once _source."lang_$lang.php";

    include_once _lib."functions.php";

    include_once _lib."functions_giohang.php";

    include_once _lib."class.database.php";

    $d = new database($config['database']);

  


$data='';

               @$id = $_POST['id'];
             $d->reset();
                $sql="select photo,id,ten_$lang ,tenkhongdau from #_tin3cap where hienthi=1 and noibat=1 and id_cat=".$id." order by stt asc, id desc";
                $d->query($sql);
                $duan=$d->result_array();
                $count=count($duan);

               $data.=' <div class="owl-duan owl-carousel owl-theme ajax-carousel" data-lg-items="4" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xss-items="2" data-margin="15" data-nav="false" data-dot="true">';

                    for ($i=0; $i <$count ; $i+=2) {
                      $v1=$duan[$i];
                      $v2=$duan[$i+1];
                     
                      $data.=' <div class="item_khoahoc width_100">';

                            $data.=' <div class="item_khoahoc1">';

                              $data.=' <div class="title_kh width_100">';
                                 $data.='  <h3><a href="'.$v1['tenkhongdau'].'-'.$v1['id'].'.htm">'.$v1['ten_vi'].'</a></h3>';
                              $data.=' </div>';

                              $data.=' <div class="hinh_kh width_100">';
                                   $data.='<a href="'.$v1['tenkhongdau'].'-'.$v1['id'].'.htm"><img src="thumb/300x300/1/'._upload_tin3cap_l.$v1['photo'].'"></a>';

                                   $data.='<div class="muitendetail">';
                                      $data.=' <a href="'.$v1['tenkhongdau'].'-'.$v1['id'].'.htm"><img src="img/muitendetail.png"></a>';
                                   $data.='</div>';
                              $data.=' </div>';
                              $data.=' <div class="danhgia width_100">';
                                  $data.=' <img src="img/stars.png">';
                              $data.=' </div>';
                             $data.='</div>';
                              
                           $data.='</div>';

                       } 
                  $data.='</div>';
echo $data;
?>