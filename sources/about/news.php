<?php  if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die('Eror');						
		
		if(isset($_REQUEST['idc'])){	//Chi tiết
			$id =  intval(trim($_REQUEST['idc']));
								
			
			$sql_tintuc = "select title,keywords,description,id,ten,mota,noidung,ngaytao,luotxem from #_tinnho where hienthi=1 and id='$id' and com=4";
			$d->query($sql_tintuc);
			$news = $d->fetch_array();
			
			$luotxem = $news['luotxem']+1;
			$sql_update = "update #_tinnho SET luotxem=$luotxem where id='$id' and com=4";
			$d->query($sql_update);
			
			if($news['title']!="")
				$title_bar = $news['title'];
			if($news['description']!="")
				$description = $news['description'];
			if($news['keywords']!="")
				$keywords = $news['keywords'];
			
			//Dịch vụ khác			
			$sql = "select id,ten from #_tinnho where hienthi=1 and id!='$id' and com=4 order by stt asc,id desc limit 0,10";
			$d->query($sql);
			$newskhac = $d->result_array();		
		}		
		else{	//Danh sách			
			/*$sql_tintuc = "select id,ten,mota,thumb,ngaytao from #_tinnho where hienthi=1 and com=4 order by stt asc, id desc";					
			$d->query($sql_tintuc);
			$news = $d->result_array();
					
			$count_sp = count($news); 
			
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url="gioi-thieu.html/";
			$maxR=10;
			$maxP=5;
			$paging=paging_home($news, $url, $curPage, $maxR, $maxP);
			$news=$paging['source'];		*/	
		}	
		
		$title_bar = "Giới thiệu - ".$title_bar;
?>