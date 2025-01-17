<?php  if(!defined('_source')) die("Error");



					@$idc = intval(trim($_GET['idc']));

					@$idi = intval(trim($_GET['idi']));		

					@$ide = intval(trim($_GET['ide']));	

				





			















				$d->reset();



				$sql2="select * from #_product where hienthi=1 ";

				if($_REQUEST['idi']!='')

				{

					$sql2.=" and id_cat1=".$_REQUEST['idi'];

				}



				$sql2.='  order by rand()';

				$d->query($sql2);



				$goiy=$d->result_array();



				

				

				$d->reset();













				$sql1="select * from #_product where hienthi=1  ";



			if($idc !=''){	



				$d->reset();

				$sql = "select * from #_product_cat where hienthi=1 and com='cat' and id=$idc";

				$d->query($sql);

				$cat_ttt = $d->fetch_array();



				$d->reset();

				$sql = "select * from #_product_cat where hienthi=1 and com='cat1' and id_cat=$idc";

				$d->query($sql);

				$dmcap2 = $d->result_array();









				$maucap1 = $cat_ttt['mau'];

				$title_ttt = $cat_ttt['ten_'.$lang];	

				$id_cat = $idc;

				

				if($cat_ttt['title_'.$lang]!="")

					$title_bar = $cat_ttt['title_'.$lang];

				if($cat_ttt['description_'.$lang]!="")

					$description = $cat_ttt['description_'.$lang];

				if($cat_ttt['keywords_'.$lang]!="")

					$keywords = $cat_ttt['keywords_'.$lang];

				

				$sql1.= " and id_cat='$idc' ";	





			}



			else if($idi!='')



			{

				$sql = "select tb1.hinhnho,tb1.mota_vi, tb1.tenkhongdau_vi,tb1.title,tb1.description,tb1.keywords,tb1.ten_$lang,tb2.ten_$lang as cat,tb1.id_cat from #_product_cat as tb1 LEFT JOIN #_product_cat as tb2 ON tb1.id_cat=tb2.id where tb1.hienthi=1 and tb1.com='cat1' and tb1.id='$idi'";

				$d->query($sql);

				$cat_ttt = $d->fetch_array();	

				$idc = $cat_ttt['id_cat'];



				$sqlcap1="select * from #_product_cat where com='cat' and id='$idc'";

				$d->query($sqlcap1);

				$cap1=$d->fetch_array();



				$d->reset();

				$sql = "select * from #_product_cat where hienthi=1 and com='cat2' and id_cat1=$idi";

				$d->query($sql);

				$dmcap3 = $d->result_array();

		

				$id_cat = $cat_ttt['id_cat'];	

				

					if($cat_ttt['title_'.$lang]!="")

					$title_bar = $cat_ttt['title_'.$lang];

				if($cat_ttt['description_'.$lang]!="")

					$description = $cat_ttt['description_'.$lang];

				if($cat_ttt['keywords_'.$lang]!="")

					$keywords = $cat_ttt['keywords_'.$lang];

						

				$sql1.= " and id_cat1='$idi' ";		



















			} else if($ide!='')



			{





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

				$cap22=$d->fetch_array();









				if($cat_ttt['title_'.$lang]!="")

					$title_bar = $cat_ttt['title_'.$lang];

				if($cat_ttt['description_'.$lang]!="")

					$description = $cat_ttt['description_'.$lang];

				if($cat_ttt['keywords_'.$lang]!="")

					$keywords = $cat_ttt['keywords_'.$lang];

						

				$sql1.= " and id_cat2='$ide' ";		









            $url=getCurrentPageURL();



            $chuoi1=parse_url($url);          

            parse_str($chuoi1['query'], $mangres1);  





            foreach($mangres1 as $key => $v) {

				    if($key=='sort') {

				        $item = $mangres1[$key];

				        unset($mangres1[$key]);

				        $mangres1[$key]=$item;

				        break;

				    }

			}          

            foreach ($mangres1 as $k => $v ) {



                    if($k==='sort'){



                			

                  		

                         	if($mangres1['sort']==='moi-nhat')

      						{

      							 $sql1 .= " order by id asc";

      						}

      						else if($mangres1['sort']==='cu-nhat')

      						{

      							 $sql1 .= " order by id desc";

      						}

      						else if($mangres1['sort']==='thap-cao')

      						{

      							 $sql1 .= " order by gia asc";

      						}

      						else if($mangres1['sort']==='cao-thap')

      						{

      							 $sql1 .= " order by gia desc";

      						}



                  			



                                          

                     }

                     else if($k==='minprice'){



                              $sql1 .= "  and gia>=".$mangres1['minprice'];



                     }

                     else if($k=='maxprice'){



                     		$sql1 .= "  and gia<=".$mangres1['maxprice'];



                     }





            }

                        

	

			}	


				else



			{


					$d->reset();

						$sql= "select photo,link from #_photo where hienthi=1 and id=395 ";

						$d->query($sql);

						$bannermuc = $d->fetch_array();

						$title_ttt='Sản phẩm';	

						if(isset($_REQUEST['search'])){

							$search = htmlspecialchars(addslashes(trim($_POST['keyword'])));
						

							

						$search = str_replace('%20',' ',$search);			

						$search = str_replace('/','',$search);	

						

						$sql1.=" and ten_vi like '%$search%' or tenkhongdau_vi like '%$search%' ";

					

						

						$title_ttt = 'Tìm kiếm: '.$search;			

						}		
						if(isset($_REQUEST['loai'])){

								$sql1.=" and sale=1 ";
								$title_ttt = 'Sản phẩm sale ';	
							
						}								

						

			}

				




				$sql1.=" order by stt asc, id desc";


				$d->query($sql1);

				$product = $d->result_array();

				$count_sp = count($product);

			

				$curPage = isset($_GET['p']) ? $_GET['p'] : '1';			

				$url = 'san-pham.html';									

				$maxR=16;

				$maxP=5;

				$paging=paging_home($product, $url, $curPage, $maxR, $maxP);

				$product=$paging['source'];

		







?>