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
        include_once _lib."q_functions.php";

    include_once _lib."functions_giohang.php";
    include_once _lib."class.database.php";
    $d = new database($config['database']);
  

    $gia = $_POST['gia'];
    $donvi = $_POST['donvi'];
 
    if($_POST['dientich']==''){

        $dientich=1;
    }
    else
    {
        $dientich = $_POST['dientich'];
    }



    if($donvi==0){

        $data2='';
    }elseif($donvi==1){


            $data2=$gia*1000000;

    }elseif($donvi==2){

         $data2=$gia*1000000000;

    }elseif($donvi==3){

         $data2=$gia*100000*$dientich;
         


    }else if($donvi==4){

              $data2=$gia*1000000*$dientich;

    }

if($data2==''){
     $data1='Thỏa thuận';
}else
{
     $data1=jam_read_num_forvietnamese($data2);
}

 $result = array('data1' => $data1,'data2'=>$data2);
echo json_encode($result);
    

?>