<?php  if(!defined('_source')) die("Error");

	


	if($com=='nha-dat-ban-noi-bat'){

		$title_ttt='Nhà đất bán nổi bật';
			$sql = "select ten_vi,tenkhongdau_vi,id,photo,gia,dientich,huongnha,vitri,sophongngu,id_cat,ngaytao,noidung_vi,id_quan,id_tinh,id_phuong,diachi from #_product where  hienthi=1 and loaitin in (3,4,5) and id_cat in (360,406) order by ngaytao desc  ";

	}elseif($com=='nha-dat-cho-thue-noi-bat'){

				$title_ttt='Nhà đất cho thuê nổi bật';
				$sql = "select ten_vi,tenkhongdau_vi,id,photo,gia,dientich,huongnha,vitri,sophongngu,id_cat,ngaytao,noidung_vi,id_quan,id_tinh,id_phuong,diachi  from #_product where  hienthi=1 and loaitin in (3,4,5) and id_cat=358 order by ngaytao desc  ";

	}elseif($com=='tin-moi-gioi-noi-bat'){

				$title_ttt='Tin môi giới nổi bật';
				$sql = "select ten_vi,tenkhongdau_vi,id,photo,gia,dientich,huongnha,vitri,sophongngu,id_cat,ngaytao,noidung_vi,id_quan,id_tinh,id_phuong,diachi from #_product where  hienthi=1 and loaitin in (3,4,5) and id_cat in (412,413,414) order by ngaytao desc  ";
	}

	





		$d->query($sql);

		$product=$d->result_array();

		

		$count_sp = count($product);

			

		$curPage = isset($_GET['p']) ? $_GET['p'] : '1';			

		$url = q_getCurrentPageURL();									

		$maxR=10;

		$maxP=10;

		$paging=paging_home1($product, $url, $curPage, $maxR, $maxP);

		$product=$paging['source'];

		$title_bar = $title_ttt.$title_bar;

?>