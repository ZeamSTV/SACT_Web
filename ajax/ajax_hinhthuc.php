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
  

 $id = $_POST['id'];




    $data ='    <option value="0">Phân mục</option>';
    if($id){
        $d->reset();
        $sql = "select id,ten_vi from #_product_cat where id_cat='$id' and com='cat1' order by id asc";
        $d->query($sql);
        $phanmuc = $d->result_array();
        
        
        for($i=0;$i<count($phanmuc);$i++){
           
            $data .='<option value="'.$phanmuc[$i]['id'].'">'.$phanmuc[$i]['ten_vi'].'</option>';
        }
    }
    echo $data;
    

?>