<?php  if(!defined('_source')) die("Error");

		@$idc = intval(trim($_GET['idc']));
		@$idi = intval(trim($_GET['idi']));
				
		$d->reset();
							
			if($idc !=''){	
				$sql = "select title,keywords,description,ten from #_product_phu where hienthi=1 and com='quanhuyen' and id='$idc'";
				$d->query($sql);
				$cat_ttt = $d->fetch_array();
				
				$title_ttt = '<a href="dia-diem/'.(($cat_ttt['ten']!="")?q_bodautv($cat_ttt['ten']):"-").'-'.$idc.'.html" title="'.$cat_ttt['ten'].'">'.$cat_ttt['ten'].'</a>';	
				
				if($cat_ttt['title']!="")
					$title_bar = $cat_ttt['title'];
				if($cat_ttt['description']!="")
					$description = $cat_ttt['description'];
				if($cat_ttt['keywords']!="")
					$keywords = $cat_ttt['keywords'];
				
				$sql = "select id,ten,ten1,ten2,ten3,ten4,ten5,gia,giacu,thumb,photo,toado,luotxem,ngaytao,spmoi from #_product where hienthi=1 and id_list6='$idc' ";								
			}	
			else if($idi !=''){	
				$sql = "select tb1.title,tb1.keywords,tb1.description,tb1.ten,tb2.ten as cat from #_product_phu as tb1 LEFT JOIN #_product_phu as tb2 ON tb1.id_cat1=tb2.id where tb1.hienthi=1 and tb1.com='duongpho' and tb1.id='$idi'";
				$d->query($sql);
				$cat_ttt = $d->fetch_array();
				
				$title_ttt = '<a href="dia-diem/'.(($cat_ttt['cat']!="")?q_bodautv($cat_ttt['cat']):"-").'/'.(($cat_ttt['ten']!="")?q_bodautv($cat_ttt['ten']):"-").'-'.$idi.'.html" title="'.$cat_ttt['ten'].'">'.$cat_ttt['ten'].'</a>';	
				
				if($cat_ttt['title']!="")
					$title_bar = $cat_ttt['title'];
				if($cat_ttt['description']!="")
					$description = $cat_ttt['description'];
				if($cat_ttt['keywords']!="")
					$keywords = $cat_ttt['keywords'];
				
				$sql = "select id,ten,ten1,ten2,ten3,ten4,ten5,gia,giacu,thumb,photo,toado,luotxem,ngaytao,spmoi from #_product where hienthi=1 and id_list7='$idi' ";								
			}		
			else{
				$title_ttt = '<a href="san-pham.html" title="Sản phẩm">Sản phẩm</a>';			
				
				$sql = "select id,ten,ten1,ten2,ten3,ten4,ten5,gia,giacu,thumb,photo,toado,luotxem,ngaytao,spmoi from #_product where hienthi=1 ";													
			}												
			$sql.=" order by stt asc,id desc limit 0,5";
					
			$d->query($sql);
			$product = $d->result_array();
			
			
			$sql_khac_luu = str_replace(' limit 0,5','',$sql);
			$_SESSION['sql_ajax'] = $sql_khac_luu;
			
			/*$count_sp = count($product);
			
			$curPage = isset($_GET['p']) ? $_GET['p'] : '1';			
			$url = q_getCurrentPageURL();									
			$maxR=12;
			$maxP=5;
			$paging=paging_home($product, $url, $curPage, $maxR, $maxP);
			$product=$paging['source'];*/
															
		
		$title_bar = "Địa điểm - ".$title_bar;
?>