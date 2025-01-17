<?php  if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die('Eror');				

	
	
	$d->reset();

	$sql = "select photo,mota_vi,ten_vi,link from #_photo where com='slideshow' and hienthi=1 order by stt asc,id desc";

	$d->query($sql);

	$slide_show = $d->result_array();	

	$d->reset();
	$sql_noibat = "select mota_vi,photo,h3_vi,h2_vi,photo1 from #_about where com=3";

	$d->query($sql_noibat);

	$gioithieutc = $d->fetch_array();	

	$d->reset();
	$sql_noibat = "select mota_vi,h1_vi,h2_vi,h3_vi from #_about where com=2";

	$d->query($sql_noibat);

	$motalydo = $d->fetch_array();	





	$d->reset();
	$sql_noibat = "select photo,ten_vi,mota_vi from #_tinnho where  hienthi=1 and com=1 order by  stt asc, id desc ";

	$d->query($sql_noibat);

	$lydo = $d->result_array();	




	$d->reset();
	$sql_noibat = "select photo,ten_vi,mota_vi,tenkhongdau_vi,ngaytao from #_tin3cap where  hienthi=1 and tinmoi=1 order by  stt asc, id desc limit 0,6";

	$d->query($sql_noibat);

	$tinmoi = $d->result_array();	

	$d->reset();
	$sql_noibat = "select photo,ten_vi,mota_vi,tenkhongdau_vi,ngaytao from #_tin3cap where  hienthi=1 and noibat=1 order by  stt asc, id desc limit 0,6";

	$d->query($sql_noibat);

	$thongbao = $d->result_array();


	$d->reset();
	$sql_noibat = "select id,tenkhongdau_vi,photo,ten_$lang,mota_vi from #_product_cat where com='cat'  and hienthi=1 and noibat=1 order by  stt asc, id desc ";

	$d->query($sql_noibat);

	$dmcat = $d->result_array();	


		$d->reset();
	$sql_noibat = "select id,tenkhongdau_vi,photo,ten_vi from #_product where   hienthi=1 and noibat=1 order by  stt asc, id desc ";

	$d->query($sql_noibat);

	$spnb = $d->result_array();	

	

	$d->reset();
	$sql_noibat = "select id,tenkhongdau_vi,photo,ten_vi from #_product where   hienthi=1  order by  stt asc, id desc ";

	$d->query($sql_noibat);

	$dssp = $d->result_array();	




			$count_sp = count($dssp);

			$curPage = isset($_GET['p']) ? $_GET['p'] : '1';			
		
			$url = '';									

			$maxR=16;

			$maxP=5;

			$paging=paging_home($dssp, $url, $curPage, $maxR, $maxP);

			$dssp=$paging['source'];

















	





	$d->reset();
	$sql_noibat = "select link,photo from #_photo where  hienthi=1 and com='video' order by  stt asc, id desc ";

	$d->query($sql_noibat);

	$video = $d->result_array();	





?>