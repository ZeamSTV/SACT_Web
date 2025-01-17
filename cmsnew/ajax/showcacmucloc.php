<?php	
	
	@define ( '_lib' , '../lib/');
	

	include_once _lib."config.php";
	include_once _lib."functions.php";
        include_once _lib."tridepzai.php";
	include_once _lib."library.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);

   $mangloc=array(6=>'Thương hiệu',11=>'Inch',8=>'Số kênh',9=>"Công suất",10=>"Tiện ích",12=>'Dung tích',13=>"Nơi sản xuất");
    $sql = "select * from table_product_cat where com='cat1' and id='".intval($_REQUEST['id'])."' order by stt asc,id desc";
    $d->query($sql);    
    $cat = $d->fetch_array();

    $loc=explode(',', $cat['mucloc']);

?>
    

         <?php foreach ($mangloc as $k=> $v) {?>
                                 <?php if(in_array($k, $loc)) {?>



                                       <div class="col-md-6"> <?=showmucloc($k,$mangloc[$k]);?></div>


                                 <?php } ?>
    

         <?php } ?>
  
    