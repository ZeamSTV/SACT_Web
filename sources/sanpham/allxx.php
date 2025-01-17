<?php  if(!defined('_source')) die("Error");

	@$id = addslashes($_GET['id']);

	@$tenkhongdau=addslashes($_GET['tenkhongdau']);


	@$search=addslashes($_GET['search']);
		$sqltintuc="select id,ten_vi,tenkhongdau_vi,mota_vi,photo,ngaytao from #_tin3cap where hienthi=1 ";
// kiêm tra id cấp 1 tin tức



	$d->reset();

	$sql="select ten_vi,id,tenkhongdau,title_vi,description_vi,keywords_vi from #_tin3cap_cat where com='cat'  and tenkhongdau_vi='".$tenkhongdau."' " ;



	$d->query($sql);

	if($d->num_rows()>0){

		

		$template = 'tintuc/tin1cap/news1';





			$cat_ttt = $d->fetch_array();	



		// xử lý 



				$id_cat=$cat_ttt['id'];

				$title_ttt = $cat_ttt['ten_vi'];

			

				



				$sqltintuc.=" and id_cat=".$id_cat." order by stt asc, id desc";

				$d->query($sqltintuc);

				$news=$d->result_array();

				

				$d->reset();

				$sql= "select photo,link from #_photo where hienthi=1 and id=408 ";

				$d->query($sql);

				$bannermuc = $d->fetch_array();
				

				if($cat_ttt['title_'.$lang]!="")

					$title_bar = $cat_ttt['title_'.$lang];

				if($cat_ttt['description_'.$lang]!="")

					$description = $cat_ttt['description_'.$lang];

				if($cat_ttt['keywords_'.$lang]!="")

					$keywords = $cat_ttt['keywords_'.$lang];

				

				









		// end xử lý chi tiết tin tức











	return false;

}


	$d->reset();

	$sql="select * from #_tin3cap where tenkhongdau_vi='".$tenkhongdau."' " ;



	$d->query($sql);

	if($d->num_rows()>0){

				$news = $d->fetch_array();
				$id=$news['id'];

			$template = 'tintuc/tin1cap/news1_detail';

		

	

            

            $sql_tintuc = "select * from #_tin3cap_photo where hienthi=1 and id_cat=$id order by stt asc, id desc";					

			$d->query($sql_tintuc);

			$news_photo = $d->result_array();


			$d->reset();


            $sql_tintuc1 = "select * from #_tin3cap_cat where hienthi=1 and id=".$news['id_cat']." and com='cat' order by stt asc, id desc";					

			$d->query($sql_tintuc1);

			$cat = $d->fetch_array();
			

			$title_ttt = $news['ten_vi'];

			$title_ttt1 = '<a href="dich-vu.html" title="Dịch vụ liên quan" class="transition_03s">Dịch vụ liên quan</a>';



			$luotxem = $news['luotxem']+1;

			$sql_update = "update #_tin3cap SET luotxem=$luotxem where id='$id'";

			$d->query($sql_update);

			

			
			if($news['title_'.$lang]!='')

				$title_bar = $news['title_'.$lang];

			if($news['description_'.$lang]!='')

				$description = $news['description_'.$lang];

			if($news['keywords_'.$lang]!='')

				$keywords = $news['keywords_'.$lang];


			

			//Dịch vụ khác			

			$sql = "select * from #_tin3cap where hienthi=1 and id!='$id'";

            // if($news['id_cat'] > 0) {

            //     $sql .= " and id_cat=" . $news['id_cat'];

            // }

            $sql .= " order by stt asc,id desc ";

			$d->query($sql);

			$newskhac = $d->result_array();

			

			

			$sql11 = "select * from #_tin3cap where hienthi=1 and id!='$id'";

			// if($news['id_cat'] > 0) {

   //              $sql11 .= " and id_cat=" . $news['id_cat'];

   //          }

            $sql11 .= " order by luotxem desc limit 0,10";

			$d->query($sql11);

			$newsxemnhieu = $d->result_array();		







return false;



}
$d->reset();

	$sql="select * from #_product where tenkhongdau_vi='".$tenkhongdau."' " ;


	$d->query($sql);

	if($d->num_rows()>0){



		$template = 'sanpham/product_detail';







		// xử lý chi tiết sản phẩm





			addtodaxem($id);

			

			$product_detail = $d->fetch_array();	




			$id=$product_detail['id'];








			$idc = $product_detail['id_cat'];	

				$idi = $product_detail['id_cat1'];	

			$stt = 	$product_detail['stt'];	

			$d->reset();	

			$sql = "select * from #_product_cat where id=$idc and com='cat'";			

			$d->query($sql);

			$procat = $d->fetch_array();

					$d->reset();	

			$sql = "select * from #_product_cat where id=$idi and com='cat1'";			

			$d->query($sql);

			$procat1 = $d->fetch_array();

			$anh_sp = _upload_sanpham_l.$product_detail['photo'];

			if($product_detail['mota_'.$lang]!=''){

				$mota_sp = $product_detail['mota_'.$lang];

			}

			$title_ttt = $product_detail['ten_'.$lang];

			

			$luotxem = $product_detail['luotxem']+1;

			$sql_update = "update #_product SET luotxem=$luotxem where id='$id'";

			$d->query($sql_update);

					

		







//chia se fb



						$share_facebook = '';










			if($product_detail['title_'.$lang]!="")

				$title_bar = $product_detail['title_'.$lang];

			if($product_detail['description_'.$lang]!="")

				$description = $product_detail['description_'.$lang];

			if($product_detail['keywords_'.$lang]!="")

				$keywords = $product_detail['keywords_'.$lang];

				

				

			$d->reset();												

			$sql = "select * from #_product_photo where id_cat=$id and hienthi=1 and com='sanpham' order by stt asc,id desc";			

			$d->query($sql);

			$photo_sp = $d->result_array();

			



			

			





			$d->reset();

			$sql = "select * from #_product where hienthi=1 and id!='$id'";

			// if($product_detail['id_cat4']!=0)

			// 	$sql .= " and id_cat4='".$product_detail['id_cat4']."'";

			// else if($product_detail['id_cat3']!=0)

			// 	$sql .= " and id_cat3='".$product_detail['id_cat3']."'";

			// if($product_detail['id_cat2']!=0)

			// 	$sql .= " and id_cat2='".$product_detail['id_cat2']."'";							

			// else if($product_detail['id_cat1']!=0)

			// 	$sql .= " and id_cat1='".$product_detail['id_cat1']."'";	



			if($product_detail['id_cat']!=0)

				$sql .= " and id_cat='".$product_detail['id_cat']."'";	

			





			$sqlstar.=$sql." order by   star desc ";		

			$sql.=" order by stt asc,id desc ";

			$d->query($sql);

			$product_khac = $d->result_array();



			$count_sp = count($product_khac);

			

			$curPage = isset($_GET['p']) ? $_GET['p'] : '1';			

			$url = q_getCurrentPageURL();		

		
					$maxR=5;

			
		

			$maxP=10;

			$paging=paging_home1($product_khac, $url, $curPage, $maxR, $maxP);

			$product_khac=$paging['source'];






			$d->query($sql_tip);

			$product_tip = $d->result_array();



			$d->query($sqlstar);



			$productstar=$d->result_array();



		









			if($product_detail['id_cat']!=0){

				$sql = "select * from #_product_cat where hienthi=1 and com='cat' and id='".intval($product_detail['id_cat'])."'";

				$d->query($sql);

				$cat_ttt = $d->fetch_array();

			}



			if($product_detail['id_cat1']!=0){

				$sql = "select * from #_product_cat where hienthi=1 and com='cat1' and id='".intval($product_detail['id_cat1'])."'";

				$d->query($sql);

				$cat_ttt1 = $d->fetch_array();

			}

			if($product_detail['id_cat2']!=0){

				$sql = "select * from #_product_cat where hienthi=1 and com='cat2' and id='".intval($product_detail['id_cat2'])."'";

				$d->query($sql);

				$cat_ttt2 = $d->fetch_array();

			}

			if($product_detail['id_cat3']!=0){

				$sql = "select * from #_product_cat where hienthi=1 and com='cat3' and id='".intval($product_detail['id_cat3'])."'";

				$d->query($sql);

				$cat_ttt3 = $d->fetch_array();

			}

				if($product_detail['id_cat4']!=0){

				$sql = "select * from #_product_cat where hienthi=1 and com='cat4' and id='".intval($product_detail['id_cat4'])."'";

				$d->query($sql);

				$cat_ttt4 = $d->fetch_array();

			}









		// end xử lý chi tiết sản phẩm











	return false;

}


?>