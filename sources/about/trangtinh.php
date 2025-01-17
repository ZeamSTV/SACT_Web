<?php  if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die('Eror');
				
	
		$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";


	  $sql_tintuc = "select * from #_trangtinh where tenkhongdau='$act'";
	  $d->query($sql_tintuc);
	  $news = $d->fetch_array();
	  
	  $title_ttt = '<a href="ve-chung-toi.html" title="Về chúng tôi" class="transition_03s">Về chúng tôi</a>';
	  
	  if($news['title']!="")
		  $title_bar = $news['title'];
	  if($news['description']!="")
		  $description = $news['description'];
	  if($news['keywords']!="")
		  $keywords = $news['keywords'];	  
	  
	  $title_bar = $news['ten']." - ".$title_bar;			
?>