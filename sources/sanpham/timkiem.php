<?php  if(!defined('_source')) die("Error");

	if(isset($_POST)){
		$sql = "select * from #_product where hienthi=1 ";
		
				$search = htmlspecialchars(addslashes(trim($_POST['txtTimkiem'])));

				$catmain = htmlspecialchars(addslashes(trim($_POST['catmain'])));

						
					$search = str_replace('%20',' ',$search);			
					$search = str_replace('/','',$search);	
					

					
				
		if($_POST['catmain']!=0){
			$sql.=" and id_cat=".$catmain;
		}

		if($_POST['txtTimkiem']!=''){
			$sql.=" and ten_vi like '%$search%' or tenkhongdau_vi like '%$search%' ";
		}

		$d->query($sql);
		$product = $d->result_array();	
		$count_sp = count($product);
						
		$curPage = isset($_GET['p']) ? $_GET['p'] : '1';			
		$url = 'tim-kiem-nang-cao.html/';						
		$maxR=12;
		$maxP=5;
		$paging=paging_home($product, $url, $curPage, $maxR, $maxP);
		$product=$paging['source'];
															
	}	
		$title_bar = "Tìm kiếm  - ".$title_bar;
?>