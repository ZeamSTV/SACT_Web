<?php  if(!defined('_source')) die("Error");								

		

		if(isset($_REQUEST['idc'])){	//Chi tiết

			$id =  intval(trim($_REQUEST['idc']));

								

			$d->reset();

			$sql_tintuc = "select * from #_tinnho where hienthi=1 and id='$id' and com=11";

			$d->query($sql_tintuc);

			$news = $d->fetch_array();

		
			$d->reset();

			$sql= "select photo,link from #_photo where hienthi=1 and id=396 ";

			$d->query($sql);

			$bannermuc = $d->fetch_array();

			

			$title_ttt = $news['ten_'.$lang];

			$luotxem = $news['luotxem']+1;

			$sql_update = "update #_tinnho SET luotxem=$luotxem where id='$id' and com=11";

			$d->query($sql_update);

			

			if($news['title_'.$lang]!="")

				$title_bar = $news['title_'.$lang];

			if($news['description_'.$lang]!="")

				$description = $news['description_'.$lang];

			if($news['keywords_'.$lang]!="")

				$keywords = $news['keywords_'.$lang];

						//Dịch vụ khác			

			$sql = "select * from #_tinnho where hienthi=1 and id<>'$id' and com=11 order by stt asc,id desc";

			$d->query($sql);

			$newskhac = $d->result_array();	

		

		}		

		else{	//Danh sách			

			$sql_tintuc = "select * from #_tinnho where hienthi=1 and com=11 order by stt asc, id desc limit 0,50";					

			$d->query($sql_tintuc);

			$news = $d->result_array();

			$title_ttt = 'Dịch vụ';		

			$count_sp = count($news); 

			

			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;

			$url="chinh-sach.html/";

			$maxR=6;

			$maxP=5;

			$paging=paging_home($news, $url, $curPage, $maxR, $maxP);

			$news=$paging['source'];			

		}	

		

		$title_bar = "Thông tin hỗ trợ - ".$title_bar;

?>