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
    @$id_cat = $_POST['id_cat'];
    @$id_item = $_POST['id_item'];


    $sql="select * from #_color_sanpham where id=".$id;
    $d->query($sql);
    $hinhchinh=$d->fetch_array();


    $sql1="select * from #_photo_color where id_cat=".$id_cat." and id_item=".$id_item." "; 
    $d->query($sql1);
    $listphu=$d->result_array();



 ?>

  <link href="magic/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
<script src="magic/magiczoomplus.js" type="text/javascript"></script>

             <div class="images_galley">
                    <a data-options="selectorTrigger: hover" href="<?=_upload_sanpham_l.$hinhchinh['photo']?>" class="MagicZoom" id="Zoom-1" >
                        <img class="image-product-detail" src="thumb/400x350/2/<?= _upload_sanpham_l.$hinhchinh['photo']?>" />
                    </a>
                </div>
                <div class="images_list">
                    <div class="item_img">
                        <a class="mz-thumb" data-zoom-id="Zoom-1" href="<?=_upload_sanpham_l.$hinhchinh['photo']?>?>"  data-image="thumb/400x350/2/<?=_upload_sanpham_l.$hinhchinh['photo']?>">
                            <img  src="<?=_upload_sanpham_l.$hinhchinh['photo']?>" >
                        </a>
                    </div>
                    <?php for($i=0;$i<count($listphu);$i++) { ?>
                    <div class="item_img">
                        <a class="mz-thumb" data-zoom-id="Zoom-1" href="http://<?=$config_url?>/<?=_upload_sanpham_l.$listphu[$i]['photo']?>"  data-image="http://<?=$config_url?>/thumb/400x350/2/<?=_upload_sanpham_l.$listphu[$i]['thumb']?>">
                            <img  src="http://<?=$config_url?>/<?=_upload_sanpham_l.$listphu[$i]['photo']?>" alt="<?=$listphu['ten_'.$lang]?>" >
                        </a>
                    </div>
                    <?php } ?>
                </div>
