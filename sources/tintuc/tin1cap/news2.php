<?php  if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die('Eror');						
		
        
        $point_list = 1;	
		
		if(isset($_REQUEST['id'])){	//Chi tiết
            $point_list = 0;
            $id =  intval(trim($_REQUEST['id']));
        													
			$sql_tintuc = "select * from #_congtrinh where hienthi=1 and id='$id'";
			$d->query($sql_tintuc);
			$news = $d->fetch_array();
            
            $sql_tintuc = "select * from #_congtrinh_photo where hienthi=1 and id_cat=$id order by stt asc, id desc";					
			$d->query($sql_tintuc);
			$news_photo = $d->result_array();
			
			$title_ttt = '<a href="noi-that/'.(($news['ten']!='')?q_bodautv($news['ten']):"-").'-'.$news['id'].'.htm" title="'.$news['ten'].'" class="transition_03s">'.$news['ten'].'</a>';
			$title_ttt1 = '<a href="noi-that.html" title="Nội thất liên quan" class="transition_03s">Nội thất liên quan</a>';
			
			if($news['title']!='')
				$title_bar = $news['title'];
			if($news['description']!='')
				$description = $news['description'];
			if($news['keywords']!='')
				$keywords = $news['keywords'];
			
			//Dịch vụ khác			
			$sql = "select * from #_congtrinh where hienthi=1 and id !='$id'";
            if($news['id_cat'] > 0) {
                $sql .= " and id_cat=" . $news['id_cat'];
            }
            $sql .= " order by stt asc,id desc";
			$d->query($sql);
			$newskhac = $d->result_array();		
		}	
        else if(isset($_REQUEST['idc'])){	//Chi tiết            
            $id =  intval(trim($_REQUEST['idc']));
            
            $sql_tintuc = "select * from #_congtrinh_cat where hienthi=1 and id=$id";					
			$d->query($sql_tintuc);
			$news_cat = $d->fetch_array();
			$title_ttt = '<a href="noi-that/'.(($news_cat['ten']!='')?q_bodautv($news_cat['ten']):"-").'-'.$news_cat['id'].'.html" title="'.$news_cat['ten'].'" class="transition_03s">'.$news_cat['ten'].'</a>';
            
            if($news_cat['title']!='')
				$title_bar = $news_cat['title'];
			if($news_cat['description']!='')
				$description = $news_cat['description'];
			if($news_cat['keywords']!='')
				$keywords = $news_cat['keywords'];	
            
			$sql_tintuc = "select * from #_congtrinh where hienthi=1 and id_cat=$id order by stt asc, id desc";					
			$d->query($sql_tintuc);
			$news = $d->result_array();
				
			$count_sp = count($news); 
			
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url='noi-that/'.(($news_cat['ten']!='')?q_bodautv($news_cat['ten']):"-").'-'.$news_cat['id'].'.html/';
			$maxR=111112;
			$maxP=5;
			$paging=paging_home($news, $url, $curPage, $maxR, $maxP);
			$news=$paging['source'];        	
		}		
		else{	//Danh sách			
			$sql_tintuc = "select * from #_congtrinh where hienthi=1 and id_cat=10 order by stt asc, id desc";					
			$d->query($sql_tintuc);
			$news = $d->result_array();
			$title_ttt = '<a href="noi-that.html" title="Nội thất" class="transition_03s">Nội thất</a>';
					
			$count_sp = count($news); 
			
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url="noi-that.html/";
			$maxR=1111112;
			$maxP=5;
			$paging=paging_home($news, $url, $curPage, $maxR, $maxP);
			$news=$paging['source'];			
		}	
		
		$title_bar = "Nội thất - ".$title_bar;
?>