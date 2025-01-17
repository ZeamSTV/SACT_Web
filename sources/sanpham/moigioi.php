<?php  if(!defined('_source')) die("Error");

	if(isset($_POST)){
			
		$sql="select * from #_product where hienthi=1";


		$d->query($sql);
		$product=$d->result_array();
		

															
	}	
		$title_bar = "Tìm kiếm môi giới - ".$title_bar;
?>