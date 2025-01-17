<?php  if(!defined('_source')) die("Error");								
		
		if(isset($_REQUEST['idc'])){	//Chi tiết
			$id =  intval(trim($_REQUEST['idc']));
								
			
			$sql_tintuc = "select * from #_tinnho where hienthi=1 and id='$id' and com=3";
			$d->query($sql_tintuc);
			$news = $d->fetch_array();
			
			
			$title_ttt =$news['ten_vi'];
			$luotxem = $news['luotxem']+1;
			$sql_update = "update #_tinnho SET luotxem=$luotxem where id='$id' and com=3";
			$d->query($sql_update);
			
			if($news['title']!="")
				$title_bar = $news['title'];
			if($news['description']!="")
				$description = $news['description'];
			if($news['keywords']!="")
				$keywords = $news['keywords'];
			
			//Chăm sóc khách hàng khác			
			$sql = "select * from #_tinnho where hienthi=1 and id!='$id' and com=3 order by stt asc,id desc limit 0,4";
			$d->query($sql);
			$newskhac = $d->result_array();		
		}		
		else{	//Danh sách			
			$sql_tintuc = "select * from #_tinnho where hienthi=1 and com=3 order by stt asc, id desc";					
			$d->query($sql_tintuc);
			$news = $d->result_array();
			$title_ttt = '<a href="cham-soc-khach-hang.html" title="Chăm sóc khách hàng" class="transition_03s">Chăm sóc khách hàng</a>';		
			$count_sp = count($news); 
			
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url="cham-soc-khach-hang.html/";
			$maxR=16;
			$maxP=5;
			$paging=paging_home($news, $url, $curPage, $maxR, $maxP);
			$news=$paging['source'];			
		}	
		
		$title_bar = "Chính sách - ".$title_bar;
?>