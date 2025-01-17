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




    $data ='    <option value="0">Dự án</option>';
    if($id){
        $d->reset();
        $sql = "select id,ten_vi from #_congtrinh where id_tinh_duan='$id' order by id asc";
        $d->query($sql);
        $diadiem_cat = $d->result_array();
        
        
        for($i=0;$i<count($diadiem_cat);$i++){
           
            $data .='<option value="'.$diadiem_cat[$i]['id'].'">'.$diadiem_cat[$i]['ten_vi'].'</option>';
        }
    }
    echo $data;
    

?>