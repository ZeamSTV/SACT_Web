<?php  if(!defined('_source')) die("Error");

		@$idc = intval(trim($_GET['idc']));
		@$idi = intval(trim($_GET['idi']));		
		@$ide = intval(trim($_GET['ide']));	
		@$idf = intval(trim($_GET['idf']));	
		@$idg = intval(trim($_GET['idg']));	
		@$min_price=$_POST['amount1'];
		@$max_price=$_POST['amount2'];
		@$id = intval(trim($_GET['id']));	
							
		$d->reset();
		if($id){

			addtodaxem($id);
			$d->reset();	
			$sql_detail = "select * from #_product where hienthi=1 and id=$id";			
			$d->query($sql_detail);
			$product_detail = $d->fetch_array();			
			$idc = $product_detail['id_cat'];	
			$stt = 	$product_detail['stt'];	
			$d->reset();	
			$sql = "select * from #_product_cat where id=$idc and com='cat'";			
			$d->query($sql);
			$procat = $d->fetch_array();
			
			$anh_sp = _upload_sanpham_l.$product_detail['photo'];
			if($product_detail['mota_'.$lang]!=''){
				$mota_sp = $product_detail['mota_'.$lang];
			}
			$title_ttt = '<a href="san-pham/'.(($product_detail['ten_'.$lang]!="")?q_bodautv($product_detail['ten_'.$lang]):"-").'-'.$id.'.htm" title="'.$product_detail['ten_'.$lang].'">'.$product_detail['ten_'.$lang].'</a>';
			
			$luotxem = $product_detail['luotxem']+1;
			$sql_update = "update #_product SET luotxem=$luotxem where id='$id'";
			$d->query($sql_update);
					
		



//chia se fb

						$share_facebook = '
						<meta property="fb:app_id" content="521020208233528" />

						<meta property="og:url" content="'.getCurrentPageURL().'" />
<meta property="og:type" content="website" />
<meta property="og:title" content="'.$product_detail['ten_'.$lang].'" />
<meta property="og:description" content="'.strip_tags($product_detail['description_'.$lang]).'" />
<meta property="og:locale" content="vi" />
<meta property="og:image" content="http://'.$config_url.'/'._upload_sanpham_l.$product_detail['thumb'].'" />
<meta itemprop="name" content="'.$product_detail['title_'.$lang].'">
<meta itemprop="description" content="'.strip_tags($product_detail['description_'.$lang]).'">
<meta itemprop="image" content="http://'.$config_url.'/'._upload_sanpham_l.$product_detail['thumb'].'">
<meta property="og:image:width" content="250" />
<meta property="og:image:height" content="250" />
<meta name="twitter:card" content="product">
<meta name="twitter:site" content="'.$product_detail['ten_'.$lang].'">
<meta name="twitter:title" content="'.$product_detail['title_'.$lang].'">
<meta name="twitter:description" content="'.strip_tags($product_detail['description_'.$lang]).'">
<meta name="twitter:creator" content="'.$product_detail['title_'.$lang].'">
<meta name="twitter:image" content="http://'.$config_url.'/'._upload_sanpham_l.$product_detail['thumb'].'">
<script type="application/ld+json">
{
	"@context": "http://schema.org/",
	"@type": "Product",
	"name": "'.$company['ten_'.$lang].'",
	"author": "'.$company['ten_'.$lang].'",
	"image": "http://'.$config_url.'/'._upload_sanpham_l.$product_detail['photo'].'",
	"description": "'.strip_tags($product_detail['description_'.$lang]).'",
	"aggregateRating": {
		"@type": "Product",
		"ratingValue": "4.5",
		"reviewCount": "'.$product_detail['luotxem'].'",
		"bestRating": "5",
		"worstRating": "1"
	}
}
</script>';


//




			if($product_detail['title_'.$lang]!="")
				$title_bar = $product_detail['title_'.$lang];
			if($product_detail['description_'.$lang]!="")
				$description = $product_detail['description_'.$lang];
			if($product_detail['keywords_'.$lang]!="")
				$keywords = $product_detail['keywords_'.$lang];
				
				
			$d->reset();												
			$sql = "select * from #_product_photo where id_cat=$id and hienthi=1 order by stt asc,id desc";			
			$d->query($sql);
			$photo_sp = $d->result_array();
			



			
			$d->reset();
			$sql = "select * from #_product where hienthi=1 and id!='$id'";
			if($product_detail['id_cat4']!=0)
				$sql .= " and id_cat4='".$product_detail['id_cat4']."'";
			else if($product_detail['id_cat3']!=0)
				$sql .= " and id_cat3='".$product_detail['id_cat3']."'";
			else if($product_detail['id_cat2']!=0)
				$sql .= " and id_cat2='".$product_detail['id_cat2']."'";							
			else if($product_detail['id_cat1']!=0)
				$sql .= " and id_cat1='".$product_detail['id_cat1']."'";	

			else if($product_detail['id_cat']!=0)
				$sql .= " and id_cat='".$product_detail['id_cat']."'";	
				

			$sqlstar.=$sql." order by   star desc ";		
			$sql.=" order by stt asc,id desc ";
			$d->query($sql);
			$product_khac = $d->result_array();


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





	
		}
		else
		{						
			if($idc !=''){	
				$sql = "select * from #_product_cat where hienthi=1 and com='cat' and id=$idc";
				$d->query($sql);
				$cat_ttt = $d->fetch_array();
				$maucap1 = $cat_ttt['mau'];
				$title_ttt = '<a   href="san-pham/'.(($cat_ttt['ten_'.$lang]!="")?q_bodautv($cat_ttt['ten_'.$lang]):"-").'-'.$idc.'.html" title="'.$cat_ttt['ten_'.$lang].'">'.$cat_ttt['ten_'.$lang].'</a>';	
				$id_cat = $idc;
				
				if($cat_ttt['title_'.$lang]!="")
					$title_bar = $cat_ttt['title_'.$lang];
				if($cat_ttt['description_'.$lang]!="")
					$description = $cat_ttt['description_'.$lang];
				if($cat_ttt['keywords_'.$lang]!="")
					$keywords = $cat_ttt['keywords_'.$lang];
				
				$sql = "select * from #_product where hienthi=1 and id_cat='$idc' ";	


			}else if($idi !=''){	
			$sql = "select tb1.hinhnho,tb1.mota_vi, tb1.tenkhongdau_vi,tb1.title,tb1.description,tb1.keywords,tb1.ten_$lang,tb2.ten_$lang as cat,tb1.id_cat from #_product_cat as tb1 LEFT JOIN #_product_cat as tb2 ON tb1.id_cat=tb2.id where tb1.hienthi=1 and tb1.com='cat1' and tb1.id='$idi'";
				$d->query($sql);
				$cat_ttt = $d->fetch_array();	
				$idc = $cat_ttt['id_cat'];



				
				$sqlcap1="select * from #_product_cat where com='cat' and id='$idc'";
				$d->query($sqlcap1);
				$cap1=$d->fetch_array();


				
				$title_ttt = '<a href="san-pham/'.(($cat_ttt['cat']!="")?q_bodautv($cat_ttt['cat']):"-").'/'.(($cat_ttt['ten_'.$lang]!="")?q_bodautv($cat_ttt['ten_'.$lang]):"-").'-'.$idi.'.html" title="'.$cat_ttt['ten_'.$lang].'">'.$cat_ttt['ten_'.$lang].'</a>';
				$id_cat = $cat_ttt['id_cat'];	
				
					if($cat_ttt['title_'.$lang]!="")
					$title_bar = $cat_ttt['title_'.$lang];
				if($cat_ttt['description_'.$lang]!="")
					$description = $cat_ttt['description_'.$lang];
				if($cat_ttt['keywords_'.$lang]!="")
					$keywords = $cat_ttt['keywords_'.$lang];
						
				$sql = "select * from #_product where hienthi=1 and id_cat1='$idi' ";					
			}	
			else if($ide !=''){				
					$sql = "select tb1.hinhnho,tb1.mota_vi,tb1.tenkhongdau_vi, tb1.title,tb1.description,tb1.keywords,tb1.ten_$lang,tb2.ten_$lang as cat,tb1.id_cat,tb1.id_cat1 from #_product_cat as tb1 LEFT JOIN #_product_cat as tb2 ON tb1.id_cat1=tb2.id where tb1.hienthi=1 and tb1.com='cat2' and tb1.id='$ide'";
				$d->query($sql);
				$cat_ttt = $d->fetch_array();	
				
				$title_ttt =$cat_ttt['ten_'.$lang];




				$idc = $cat_ttt['id_cat'];	

				$idi = $cat_ttt['id_cat1'];	

				$sqlcap1="select * from #_product_cat where com='cat' and id='$idc'";
				$d->query($sqlcap1);
				$cap1=$d->fetch_array();

				$sqlcap2="select * from #_product_cat where com='cat1' and id='$idi'";
				$d->query($sqlcap2);
				$cap2=$d->fetch_array();




				if($cat_ttt['title_'.$lang]!="")
					$title_bar = $cat_ttt['title_'.$lang];
				if($cat_ttt['description_'.$lang]!="")
					$description = $cat_ttt['description_'.$lang];
				if($cat_ttt['keywords_'.$lang]!="")
					$keywords = $cat_ttt['keywords_'.$lang];
						
				$sql = "select * from #_product where hienthi=1 and id_cat2='$ide' ";						
			} else if($idf !=''){	


						$sql = "select tb1.hinhnho,tb1.mota_vi,tb1.tenkhongdau_vi,tb1.title,tb1.description,tb1.keywords,tb1.ten_$lang,tb2.ten_$lang as cat,tb1.id_cat,tb1.id_cat1,tb1.id_cat2 from #_product_cat as tb1 LEFT JOIN #_product_cat as tb2 ON tb1.id_cat2=tb2.id where tb1.hienthi=1 and tb1.com='cat3' and tb1.id='$idf'";
				$d->query($sql);
				$cat_ttt = $d->fetch_array();	
				
				$title_ttt =$cat_ttt['ten_'.$lang];




				$idc = $cat_ttt['id_cat'];	

				$idi = $cat_ttt['id_cat1'];	
				$ide = $cat_ttt['id_cat2'];	
				$sqlcap1="select * from #_product_cat where com='cat' and id='$idc'";
				$d->query($sqlcap1);
				$cap1=$d->fetch_array();

				$sqlcap2="select * from #_product_cat where com='cat1' and id='$idi'";
				$d->query($sqlcap2);
				$cap2=$d->fetch_array();
				$sqlcap3="select * from #_product_cat where com='cat2' and id='$ide'";
				$d->query($sqlcap3);
				$cap3=$d->fetch_array();



					if($cat_ttt['title_'.$lang]!="")
					$title_bar = $cat_ttt['title_'.$lang];
				if($cat_ttt['description_'.$lang]!="")
					$description = $cat_ttt['description_'.$lang];
				if($cat_ttt['keywords_'.$lang]!="")
					$keywords = $cat_ttt['keywords_'.$lang];
						
				$sql = "select * from #_product where hienthi=1 and id_cat3='$idf' ";	

			} else	if($idg !=''){	


						$sql = "select tb1.mota_vi,tb1.hinhnho,tb1.tenkhongdau_vi, tb1.title,tb1.description,tb1.keywords,tb1.ten_$lang,tb2.ten_$lang as cat,tb1.id_cat,tb1.id_cat1,tb1.id_cat2,tb1.id_cat3 from #_product_cat as tb1 LEFT JOIN #_product_cat as tb2 ON tb1.id_cat3=tb2.id where tb1.hienthi=1 and tb1.com='cat4' and tb1.id='$idg'";
				$d->query($sql);
				$cat_ttt = $d->fetch_array();	
				
				$title_ttt =$cat_ttt['ten_'.$lang];




				$idc = $cat_ttt['id_cat'];	

				$idi = $cat_ttt['id_cat1'];	
				$ide = $cat_ttt['id_cat2'];	
					$idf = $cat_ttt['id_cat3'];	
				$sqlcap1="select * from #_product_cat where com='cat' and id='$idc'";
				$d->query($sqlcap1);
				$cap1=$d->fetch_array();

				$sqlcap2="select * from #_product_cat where com='cat1' and id='$idi'";
				$d->query($sqlcap2);
				$cap2=$d->fetch_array();
				$sqlcap3="select * from #_product_cat where com='cat2' and id='$ide'";
				$d->query($sqlcap3);
				$cap3=$d->fetch_array();

				$sqlcap4="select * from #_product_cat where com='cat3' and id='$idf'";
				$d->query($sqlcap4);
				$cap4=$d->fetch_array();

					if($cat_ttt['title_'.$lang]!="")
					$title_bar = $cat_ttt['title_'.$lang];
				if($cat_ttt['description_'.$lang]!="")
					$description = $cat_ttt['description_'.$lang];
				if($cat_ttt['keywords_'.$lang]!="")
					$keywords = $cat_ttt['keywords_'.$lang];
						
				$sql = "select * from #_product where hienthi=1 and id_cat3='$idfg' ";	

			}			
			else{
				$title_ttt = '<a href="san-pham.html" title="Sản phẩm">Sản phẩm</a>';			
				
				$sql = "select * from #_product where hienthi=1 ";
				if(isset($_REQUEST['search'])){
						$search = htmlspecialchars(addslashes(trim($_POST['txtTimkiem'])));
						 $sanphamcap1 =  $_POST['sanphamcap1'];
						
					$search = str_replace('%20',' ',$search);			
					$search = str_replace('/','',$search);	
					
					$sql.=" and ten_vi like '%$search%' or tenkhongdau_vi like '%$search%' ";
					if($sanphamcap1>0){
						$sql.=" and id_cat=$sanphamcap1 ";
						
					}
					
					$title_ttt = '<a href="tim-kiem/'.$search.'.html" title="Tìm kiếm Sản phẩm">Tìm kiếm: '.$search.'</a>';			
				}										
			}		


		

	
			$sql1="";


			$sql1.=$sql." order by   star desc limit 0,5";



				if(isset($_POST['btnlocgia'])){


				$sql.=" and gia>=".$min_price." and gia <=".$max_price."  ";
				
				}

				if(isset($_POST['orderby']))
				{	

					if($_POST['orderby']=="popularity")
					{
						$sql.=" order by luotxem desc ";
					}
					else if($_POST['orderby']=="rating")
					{
						$sql.=" order by star desc ";
					}
					else if($_POST['orderby']=="date")
					{
						$sql.=" order by ngaytao desc ";
					}
					else if($_POST['orderby']=="price")
					{
						$sql.=" order by gia asc ";
					}
					else if($_POST['orderby']=="price-desc")
					{
							$sql.=" order by gia desc ";
					}


					

				}
				else
				{
						$sql.=" order by  stt asc, id desc";
				}

			


			$sql2.=$sql;

			$sql3.=$sql;

			$d->query($sql);
			$product = $d->result_array();



			$d->query($sql3);
			$product3 = $d->result_array();

			
			$d->reset();

			$d->query($sql1);
				$productstar = $d->result_array();
			
			/*$sql_khac_luu = str_replace(' limit 0,9','',$sql);
			$_SESSION['sql_ajax'] = $sql_khac_luu;*/
			
			//$anh_sp = _upload_sanpham_l.$product[0]['photo'];
			
			$count_sp = count($product);
			
			$curPage = isset($_GET['p']) ? $_GET['p'] : '1';			
			$url = q_getCurrentPageURL();									
			$maxR=20;
			$maxP=10;
			$paging=paging_home($product, $url, $curPage, $maxR, $maxP);
			$product=$paging['source'];
															
		}
		
		$title_bar = "Sản phẩm - ".$title_bar;
?>