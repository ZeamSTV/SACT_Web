<?php  if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die('Eror');

				







		if(!empty($_POST)){





						$file_name=q_tenhinh($_FILES['file']['name']);

						// 

						 $tenduan = addslashes($_POST['txttenduan']);

						 $hinhthuc = addslashes($_POST['id_hinhthuc']);

						 $phanmuc = addslashes($_POST['id_phanmuc']);

						 $id_tinh = addslashes($_POST['id_tinh']);

						 $id_quan = addslashes($_POST['id_quan']);

						 $id_phuong = addslashes($_POST['id_phuong']);

						 $id_duan = addslashes($_POST['id_duan']);

						 $diachi = addslashes($_POST['txtdiachi']);

						 $dientich = addslashes($_POST['txtdientich']);

						$giaban = addslashes($_POST['txtgiaban']);

						$mota = addslashes($_POST['txtmota']);

						$tenlienhe = addslashes($_POST['txttenlienhe']);

						$diachilienhe = addslashes($_POST['txtdiachilienhe']);

						$dienthoailienhe = addslashes($_POST['txtdienthoailienhe']);

						$emaillienhe = addslashes($_POST['txtemaillienhe']);

					//



						 $tenduan = htmlspecialchars($tenduan);

						 $hinhthuc = htmlspecialchars($hinhthuc);

						 $phanmuc = htmlspecialchars($phanmuc);

						 $id_tinh = htmlspecialchars($id_tinh);

						 $id_quan = htmlspecialchars($id_quan);

						 $id_phuong = htmlspecialchars($id_phuong);

						 $id_duan = htmlspecialchars($id_duan);

						 $diachi = htmlspecialchars($diachi);

						 $dientich = htmlspecialchars($dientich);

						$giaban = htmlspecialchars($giaban);

						$mota = htmlspecialchars($mota);

						$tenlienhe = htmlspecialchars($tenlienhe);

						$diachilienhe = htmlspecialchars($diachilienhe);

						$dienthoailienhe = htmlspecialchars($dienthoailienhe);

						$emaillienhe = htmlspecialchars($emaillienhe);		

						 $listhinh = addslashes($_POST['listhinh']);



					     if($listhinh!='')

					     {

					        $listhinh1=array();

					        $listhinh=explode(',', $listhinh);

					        for ($i=1; $i <count($listhinh) ; $i++) { 

					            $listhinh1[]=$listhinh[$i-1];

					        }

					        $listhinh1=implode(',', $listhinh1);

					     }



					   	$data['ten_vi'] = $tenduan;

					   	$data['id_cat'] = $hinhthuc;

					   	$data['id_cat1'] = $phanmuc;

					   	$data['id_tinh'] = $id_tinh;

					   	$data['id_quan'] = $id_quan;

					   	$data['id_phuong'] = $id_phuong;

					   	$data['id_duan'] = $id_duan;

					   	$data['diachi'] = $diachi;

					   	$data['dientich'] = $dientich;

					   	$data['gia'] = $giaban;

					   	$data['noidung_vi'] = $mota;

					   	$data['tenlienhe'] = $tenlienhe;

					   	$data['diachilienhe'] = $diachilienhe;

					   	$data['dienthoailienhe'] = $dienthoailienhe;

					   	$data['emaillienhe'] = $emaillienhe;

					   	$data['tenkhongdau_vi']=q_bodautv($tenduan);

					    $data['ngaytao'] = time();

					    $data['hienthi'] = 0;
					    $data['loaitin'] = 1;
					    $data['id_user'] = $_SESSION['login1']['id'];

					   

					     if($anhdaidien = upload_image("file", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$file_name)){

					                 $data['photo'] = $anhdaidien;

					      }









				      // if($hinhdinhkem = upload_image_mutil("files", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$listhinh1)){

				      //       $data['hinhdinhkem'] = $hinhdinhkem;     

				            

				      //   }





				    

				   



				       		
				       	$ngay=date('d');
				       		$thang=date('m');

				       		$d->reset();
				       		$sql="select * from #_product order by id asc";
				       		$d->query($sql);
				       		$dshnay=$d->result_array();
				       		$dem=0;
				       		foreach ($dshnay as $key => $v) {
				       			if(date('d',$v['ngaytao'])==$ngay&&date('m',$v['ngaytao'])==$thang)
				       			{
				       				$dem++;
				       			}
				       		}
						   
				       		$macode='';
				       		$yeaer=date('y');
				       		$yeaer1=substr($yeaer,-1);
				       		$macode.=$yeaer1;
				       		$macode.=date('m');
				       		$macode.=date('d');
				       		 $macode.=changethutu($dem+1);



					    	$data['matin']=$macode;

				  

					        $d->setTable('product');

					        if($d->insert($data))

					         {

							         	    	$id_bds = mysql_insert_id();

							         	$data1['id_cat']=$id_bds;
							     	  	for($i=1; $i<9; $i++){			
											$filename=q_tenhinh($_FILES['img'.$i]['name']);
									
											
											if($photo = upload_image("img".$i, 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$filename.$i)){
												$data1['photo'] = $photo;

										
												$data1['hienthi'] = 1;
										
												$d->setTable('product_photo');
												$d->insert($data1);
											}
											
											
											
											
											
											
											}


					         		



					         





					         		  transfer1("Đăng bài thành công ", "dang-tin-rao-vat-can-mua-nha-dat.html",$macode);



					         }





					        else

					        {

					            transfer("Hệ thống đang bận ", "dang-tin-rao-vat-can-mua-nha-dat.html");

					        }

							













			}

	  

	  $title_bar = "Đăng tin rao bán cho thuê- ".$title_bar;			

?>