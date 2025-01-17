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
      @$idhethong = $_POST['idhethong'];
          @$idsp = $_POST['idsp'];


          $sql="select * from table_product where id=".$idsp;
          $d->query($sql);
          $sp=$d->fetch_array();

          $listgia=$sp['listgia'];


          $listgia=explode(',', $listgia);
          $listgia1=array();
    				for ($i=1; $i < count($listgia); $i++) { 
       				 $listgia1[]=$listgia[$i-1];
  				  }

  					for ($j=0; $j <count($listgia1) ; $j++) { 

                            $giacon=explode(':', $listgia1[$j]);
                            if($giacon[0]==$idhethong)
                            {
                            	$gia=$giacon[1];

                            }
                        }

              echo number_format($gia,0, ',', ',')." đ";
 ?>