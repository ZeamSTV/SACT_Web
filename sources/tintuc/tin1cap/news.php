<?php  if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die('Eror');						

		




			$d->reset();	

			$sql_tintuc = "select * from #_tin3cap where hienthi=1 order by stt asc, id desc";					

			$d->query($sql_tintuc);

			$news = $d->result_array();




			$title_ttt="Bất động sản";			

			$count_sp = count($news); 

			

			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;

			$url="dich-vu.html/";

			$maxR=16;

			$maxP=5;

			$paging=paging_home($news, $url, $curPage, $maxR, $maxP);

			$news=$paging['source'];			

		

		

		$title_bar ="Bất động sản - ".$title_bar;

?>