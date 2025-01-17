<?php	if(!defined('_source')) die("Error");


if($_SESSION['login1']['id']!='') {


$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

	



	$d->reset();

	$sql="select * from #_member  where id=".$_SESSION['login1']['id'];



	$d->query($sql);

	$user=$d->fetch_array();










	$d->reset();

	$sql="select id,ten_vi from #_product_cat where com='cat' and id in (358,360,406)   order by id asc";

	$d->query($sql);

	$cat_main1=$d->result_array();


$d->reset();

	$sql="select id,ten_vi from #_product_cat where com='cat' and id in (414,413,412)   order by id asc";

	$d->query($sql);

	$cat_main11=$d->result_array();




	$d->reset();

	$sql="select id,ten_vi from #_product_cat where com='cat' and id in (366,361)    order by id asc";

	$d->query($sql);

	$cat_main2=$d->result_array();





if($act=='thong-tin')

{





		

}else if($act=='edit-user'){





					$d->reset();

					$sql = "select * from #_member where id=".$_SESSION['login1']['id'];

					$d->query($sql);

					$user=$d->fetch_array();

					if(!empty($_POST)){


						// update

						  if($_POST['fullname'])


		   $file_name=q_tenhinh($_FILES['file']['identify_image_front']);  
     
   $file_name1=q_tenhinh($_FILES['file']['identify_image_back']);  
      $fullname = htmlspecialchars(addslashes(trim(@$_POST['fullname'])));

   
   if($_POST['birthday'])
      $birthday = htmlspecialchars(addslashes(trim(@$_POST['birthday'])));

   
   if($_POST['personal_email'])
      $personal_email = htmlspecialchars(addslashes(trim(@$_POST['personal_email'])));

	$passworddk = addslashes($_POST['personal_password']);
	$passworddk = htmlspecialchars($passworddk);


   if($_POST['personal_address'])
      $personal_address = htmlspecialchars(addslashes(trim(@$_POST['personal_address'])));
   
   if($_POST['personal_phone'])
      $personal_phone = htmlspecialchars(addslashes(trim(@$_POST['personal_phone'])));         
   
   if($_POST['identify_type'])
      $identify_type = htmlspecialchars(addslashes(trim(@$_POST['identify_type'])));      

    if($_POST['identify_number'])
      $identify_number = htmlspecialchars(addslashes(trim(@$_POST['identify_number'])));         
      
   if($_POST['identify_date'])
      $identify_date = htmlspecialchars(addslashes(trim(@$_POST['identify_date'])));         
      
   if($_POST['identify_address'])
      $identify_address = htmlspecialchars(addslashes(trim(@$_POST['identify_address'])));      
   if($_POST['bank_number'])
      $bank_number = htmlspecialchars(addslashes(trim(@$_POST['bank_number'])));    
   if($_POST['bank_name'])
      $bank_name = htmlspecialchars(addslashes(trim(@$_POST['bank_name'])));   
      
 
  $data['ten']=$fullname;
  $data['ngaysinh']=$birthday;
  $data['email']=$personal_email;
	$data['diachi']=$personal_address;
  $data['dienthoai']=$personal_phone;
  $data['loaicmnd']=$identify_type;
  $data['cmnd']=$identify_number;
  $data['ngaycap']=$identify_date;
  $data['noicap']=$identify_address;
   $data['tknh']=$bank_number;
   $data['nganhang']=$bank_name;
     if($_POST['personal_password']!=''){
     	$data['password']= md5($passworddk);
     }
         				if($photo = upload_image("identify_image_front", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF|webp|WEBP',_upload_member_l,$file_name)){
            
                                        $data['photo'] = $photo;
                                        
                                        $d->setTable('member');
                                        $d->setWhere('id', $user['id']);
                                        $d->select();
                                        if($d->num_rows()>0){
                                            $row = $d->fetch_array();
                                            delete_file(_upload_member_l.$user['photo']);
                                            
                                        }
                                    }   
        


                                    if($photo1 = upload_image("identify_image_back", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF|webp|WEBP',_upload_member_l,$file_name)){
            
                                        $data['photo1'] = $photo1;
                                        
                                        $d->setTable('member');
                                        $d->setWhere('id', $user['id']);
                                        $d->select();
                                        if($d->num_rows()>0){
                                            $row = $d->fetch_array();
                                            delete_file(_upload_member_l.$user['photo1']);
                                            
                                        }
                                    }   
        
  						  $d->setTable('member');

			            $d->setWhere('id', $user['id']);

			            if ($d->update($data))

			            {

			                transfer("Thay đổi thông tin thành công!", "thong-tin-user.html");

			            }

  				



						// end update


					}





}else if($act=='thay-doi-mat-khau'){



		if(isset($_POST['capnhapmk']))

		{



				$password_cu = md5($_POST['passcuedit']);

				$password_moi = md5($_POST['passmoiedit']);

				$password_re=md5($_POST['repassedit']);

				if($password_cu==$password_moi){

				$error11="Mật khẩu mới không được trùng với mật khẩu cũ.";

				transfer($error11, "thay-doi-mat-khau.html");

				}	



				if($password_moi!=$password_re)

				{

					$error11="Mật khẩu mới phải trùng với Mật khẩu nhập lại";

					transfer($error11, "thay-doi-mat-khau.html");





				}

											

				if(strlen($password_moi)<6 || strlen($password_moi)>32)

				{

					$error11="Mật khẩu mới phải từ 6 đến 32 ký tự";

					transfer($error11, "thay-doi-mat-khau.html");

				}



				$data['password'] = $password_moi;		



				$d->setTable('member');

				$d->setWhere('id', $_SESSION['login1']['id']);	

				if($d->update($data))

				{

					transfer("Thay đổi mật khẩu thành công!", "thay-doi-mat-khau.html");

				}	else

				{

					transfer("Thay đổi mật khẩu không thành công!", "thay-doi-mat-khau.html");

				}							



		}







}else if($act=='dang-tin-rao-ban-cho-thue'){





		if($_REQUEST['id']>0)

		{



			$d->reset();

			$sql="select * from #_product where id=".$_REQUEST['id'];

			$d->query($sql);

			$item=$d->fetch_array();

			$d->reset();

			$sql="select * from #_product_photo where id_cat=".$_REQUEST['id'];

			$d->query($sql);

			$photo_tin=$d->result_array();


			$chuoihinh=array();
			foreach ($photo_tin as $key => $v) {
				
				$chuoihinh[]=$v['photo'];
			}
			$chuoihinh=implode(',', $chuoihinh);

			$chuoihinh.=',';

		}



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

						$gia1 = addslashes($_POST['txtgia1']);

							$donvi = addslashes($_POST['txtdonvi']);

						$mota = addslashes($_POST['txtmota']);

						$huongnha = addslashes($_POST['huongnha']);

						$huongbancong = addslashes($_POST['huongbancong']);

						$sophongngu = addslashes($_POST['txtsophongngu']);

						$sotoilet = addslashes($_POST['txtsotoilet']);

						$sotang = addslashes($_POST['txtsotang']);

						$mattien = addslashes($_POST['txtmattien']);

						$vitri = addslashes($_POST['txtvitri']);

						$duongvao = addslashes($_POST['txtduongvao']);

						$noithat = addslashes($_POST['txtnoithat']);



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

							$gia1 = htmlspecialchars($gia1);

								$donvi = htmlspecialchars($donvi);

						$mota = htmlspecialchars($mota);

						$huongnha = htmlspecialchars($huongnha);

						$huongbancong = htmlspecialchars($huongbancong);

						$sophongngu = htmlspecialchars($sophongngu);

						$sotoilet = htmlspecialchars($sotoilet);

						$sotang = htmlspecialchars($sotang);

						$mattien = htmlspecialchars($mattien);

						$vitri = htmlspecialchars($vitri);

						$duongvao = htmlspecialchars($duongvao);

						$noithat = htmlspecialchars($noithat);



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
					        // $listhinh1=array_unique($listhinh1);

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

					   	if($giaban=='Thỏa thuận'){

					   		$data['gia'] =0;

					   	}else

					   	{

					   		$data['gia'] = $giaban;

					   	}

					   	

					   	 $data['gia1'] = $gia1;

					   	 $data['donvi'] = $donvi;

					   	$data['noidung_vi'] = $mota;

					   	$data['huongnha'] = $huongnha;

					   	$data['huongbancong'] = $huongbancong;

					   	$data['sophongngu'] = $sophongngu;

					   	$data['sotoilet'] = $sotoilet;

					   	$data['sotang'] = $sotang;

					   	$data['mattien'] = $mattien;

					   	$data['vitri'] = $vitri;

					   	$data['duongvao'] = $duongvao;

					   	$data['noithat'] = $noithat;

					   	$data['bando'] = $_POST['txtbando'];

					   	$data['tenlienhe'] = $tenlienhe;

					   	$data['diachilienhe'] = $diachilienhe;

					   	$data['dienthoailienhe'] = $dienthoailienhe;

					   	$data['emaillienhe'] = $emaillienhe;

					   	$data['tenkhongdau_vi']=q_bodautv($tenduan);

					    $data['ngaytao'] = time();

					
					    $data['loaitin'] = 1;
					    $data['id_user'] = $_SESSION['login1']['id'];

					   



				        //update 



				      if($_POST['id']>0)

				       	{
				       		 


					     if($anhdaidien = upload_image("file", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$file_name)){

					                 $data['photo'] = $anhdaidien;
					                 	$d->setTable('product');
										$d->setWhere('id', $_POST['id']);
										$d->select();
										if($d->num_rows()>0){
											$row = $d->fetch_array();
											delete_file(_upload_sanpham.$row['photo']);
								
									}	
					      }



				       		$d->setTable('product');

							$d->setWhere('id', $_REQUEST['id']);




							if($d->update($data)){




									// $d->reset();
									// $sql="select hinhdinhkem from #_product where id=".$_POST['id'];
									// $d->query($sql);
									// $getdinhkem=$d->fetch_array();




									$d->reset();
									$sql="select photo from #_product_photo where id_cat=".$_POST['id'];
									$d->query($sql);
									$showhinhphoto=$d->result_array();

									$listgetdinhkem1=array();
									foreach ($showhinhphoto as $key => $v) {
												$listgetdinhkem1[]=$v['photo'];
									}

									if($_POST['listhinh']!=''){





										    $listdinhkem=explode(',', $_POST['listhinh']);
										    $listdinhkem1=array();

										    for ($i=1; $i <count($listdinhkem) ; $i++) { 
												$listdinhkem1[]=$listdinhkem[$i-1];
											}


											$listhinh123=array();
											for ($i=0; $i <count($listdinhkem1) ; $i++) { 
												if(!in_array($listdinhkem1[$i], $listgetdinhkem1))
													{
																	$listhinh123[]=$listdinhkem1[$i];
													}
												}

									

					     				   $listhinh1234=implode(',', $listhinh123);


					     				   	foreach ($showhinhphoto as $key => $v) {
															if(!in_array($v['photo'], $listdinhkem1))
															{
																$d->reset();
																$sql="delete from table_product_photo where id_cat=".$_POST['id']." and photo='".$v['photo']."'  ";
																$d->query($sql);
															}

											}
					     				 

						

											if(count($listhinh123)>0)
											{

												 if($upnhieuhinh = upload_image_mutil("files", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$listhinh1234)){  





											
												 		$upnhieuhinh1=explode(',', $upnhieuhinh);
													
												 	// 	echo count($upnhieuhinh1);
														// die();
														for ($i=1; $i <count($upnhieuhinh1) ; $i++) { 
																
																$d->reset();
															    $sql="insert into #_product_photo(photo,id_cat,hienthi) values('".$upnhieuhinh1[$i-1]."','".$_POST['id']."',1)";

															     $d->query($sql);

														}
													





													}
												


												
											}
				

									}







					         		  transfer("Cập nhập bài thành công ", "quan-ly-rao-ban-cho-thue.html");



							}	else{



								 transfer("Hệ thống đang bận ", "quan-ly-rao-ban-cho-thue.html");



							}





				       	}else{


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

					     
					       if($anhdaidien = upload_image("file", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$file_name)){

					                 $data['photo'] = $anhdaidien;

					      }


				  		  if($hinhdinhkem = upload_image_mutil("files", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$listhinh1)){

				            $data['hinhdinhkem'] = $hinhdinhkem;     


				     	  }
				     

				 

				     	   $data['hienthi'] = 0;
					        $d->setTable('product');

					        if($d->insert($data))

					         {

							         	

									if($_POST['listhinh']!=''){





											   	$id_bds = mysql_insert_id();

								         	$hinhdinhkem1=explode(',', $hinhdinhkem);

								         	for ($i=1; $i <count($hinhdinhkem1) ; $i++) { 

								          		

								          		$d->reset();

								          		$sql="insert into #_product_photo(photo,id_cat,hienthi) values('".$hinhdinhkem1[$i-1]."','$id_bds',1)";

								          		 $d->query($sql);



								   		  		  }



						         

									}









					         





					         		  transfer1("Đăng bài thành công ", "dang-tin-rao-ban-cho-thue.html",$macode);



					         }





					        else

					        {

					            transfer("Hệ thống đang bận ", "dang-tin-rao-ban-cho-thue.html");

					        }

							



					    // end insert

					      }











			}





}else if($act=='quan-ly-rao-ban-cho-thue'){





		$d->reset();

		$sql="select id,ten_vi,photo,tenkhongdau_vi,ngaytao,matin from #_product where id_user='".$_SESSION['login1']['id']."' and id_cat in (360,358) order by stt asc, id desc";

		$d->query($sql);

		$danhsachtin=$d->result_array();

		if($_REQUEST['del']>0){



			if(delete_product($_REQUEST['del'])==0 || delete_product($_REQUEST['del'])==2){





				 transfer("Xóa không thành công ", "quan-ly-rao-ban-cho-thue.html");

			}else

			{

					 transfer("Xóa tin thành công ", "quan-ly-rao-ban-cho-thue.html");

			}



		}

}else if($act=='dang-tin-can-mua-can-thue') {



		// xu ly dang tin cần mua cần thuê





		if($_REQUEST['id']>0)

		{



				$d->reset();

				$sql="select * from #_product where id=".$_REQUEST['id'];

				$d->query($sql);

				$item=$d->fetch_array();

				$d->reset();

				$sql="select * from #_product_photo where id_cat=".$_REQUEST['id'];

				$d->query($sql);

				$photo_tin=$d->result_array();


				$chuoihinh=array();
				foreach ($photo_tin as $key => $v) {
					
					$chuoihinh[]=$v['photo'];
				}
				$chuoihinh=implode(',', $chuoihinh);

				$chuoihinh.=',';



		}



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

	
					    $data['id_user'] = $_SESSION['login1']['id'];

					   

					  












				        //update 



				   		

				      if($_POST['id']>0)

				       	{
				       		    


					     if($anhdaidien = upload_image("file", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$file_name)){

					                 $data['photo'] = $anhdaidien;
					                 	$d->setTable('product');
										$d->setWhere('id', $_POST['id']);
										$d->select();
										if($d->num_rows()>0){
											$row = $d->fetch_array();
											delete_file(_upload_sanpham.$row['photo']);
								
									}	
					      }



				       		$d->setTable('product');

							$d->setWhere('id', $_REQUEST['id']);




							if($d->update($data)){




									// $d->reset();
									// $sql="select hinhdinhkem from #_product where id=".$_POST['id'];
									// $d->query($sql);
									// $getdinhkem=$d->fetch_array();




									$d->reset();
									$sql="select photo from #_product_photo where id_cat=".$_POST['id'];
									$d->query($sql);
									$showhinhphoto=$d->result_array();

									$listgetdinhkem1=array();
									foreach ($showhinhphoto as $key => $v) {
												$listgetdinhkem1[]=$v['photo'];
									}

									if($_POST['listhinh']!=''){





										    $listdinhkem=explode(',', $_POST['listhinh']);
										    $listdinhkem1=array();

										    for ($i=1; $i <count($listdinhkem) ; $i++) { 
												$listdinhkem1[]=$listdinhkem[$i-1];
											}


											$listhinh123=array();
											for ($i=0; $i <count($listdinhkem1) ; $i++) { 
												if(!in_array($listdinhkem1[$i], $listgetdinhkem1))
													{
																	$listhinh123[]=$listdinhkem1[$i];
													}
												}

									

					     				   $listhinh1234=implode(',', $listhinh123);


					     				   	foreach ($showhinhphoto as $key => $v) {
															if(!in_array($v['photo'], $listdinhkem1))
															{
																$d->reset();
																$sql="delete from table_product_photo where id_cat=".$_POST['id']." and photo='".$v['photo']."'  ";
																$d->query($sql);
															}

											}
					     				 

						

											if(count($listhinh123)>0)
											{

												 if($upnhieuhinh = upload_image_mutil("files", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$listhinh1234)){  





											
												 		$upnhieuhinh1=explode(',', $upnhieuhinh);
													
												 	// 	echo count($upnhieuhinh1);
														// die();
														for ($i=1; $i <count($upnhieuhinh1) ; $i++) { 
																
																$d->reset();
															    $sql="insert into #_product_photo(photo,id_cat,hienthi) values('".$upnhieuhinh1[$i-1]."','".$_POST['id']."',1)";

															     $d->query($sql);

														}
													





													}
												


												
											}
				

									}







					         		  transfer("Cập nhập bài thành công ", "quan-ly-tin-can-mua-can-thue.html");



							}	else{



								 transfer("Hệ thống đang bận ", "quan-ly-tin-can-mua-can-thue.html");



							}





				       	}else{


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

					    	  //   	  echo $listhinh1;

				     	  // die();
					       if($anhdaidien = upload_image("file", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$file_name)){

					                 $data['photo'] = $anhdaidien;

					      }


				  		  if($hinhdinhkem = upload_image_mutil("files", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$listhinh1)){

				            $data['hinhdinhkem'] = $hinhdinhkem;     


				     	  }


				 

				     	   $data['hienthi'] = 0;
					        $d->setTable('product');

					        if($d->insert($data))

					         {

							         	

									if($_POST['listhinh']!=''){





											   	$id_bds = mysql_insert_id();

								         	$hinhdinhkem1=explode(',', $hinhdinhkem);

								         	for ($i=1; $i <count($hinhdinhkem1) ; $i++) { 

								          		

								          		$d->reset();

								          		$sql="insert into #_product_photo(photo,id_cat,hienthi) values('".$hinhdinhkem1[$i-1]."','$id_bds',1)";

								          		 $d->query($sql);



								   		  		  }



						         

									}









					         





					         		  transfer1("Đăng bài thành công ", "dang-tin-can-mua-can-thue.html",$macode);



					         }





					        else

					        {

					            transfer("Hệ thống đang bận ", "dang-tin-can-mua-can-thue.html");

					        }

							



					    // end insert

					      }









			}



		// end xử lý đăng tin cần mua cần thuê





}else if($act=='quan-ly-tin-can-mua-can-thue'){





	$d->reset();

		$sql="select id,ten_vi,photo,tenkhongdau_vi,ngaytao,matin from #_product where id_user='".$_SESSION['login1']['id']."' and id_cat in (361,366) order by stt asc, id desc";

		$d->query($sql);

		$danhsachtin=$d->result_array();

		if($_REQUEST['del']>0){



			if(delete_product($_REQUEST['del'])==0 || delete_product($_REQUEST['del'])==2){





				 transfer("Xóa không thành công ", "quan-ly-tin-can-mua-can-thue.html");

			}else

			{

					 transfer("Xóa tin thành công ", "quan-ly-tin-can-mua-can-thue.html");

			}



		}







}else if($act=='dang-tin-moi-gioi'){





		if($_REQUEST['id']>0)

		{



			$d->reset();

			$sql="select * from #_product where id=".$_REQUEST['id'];

			$d->query($sql);

			$item=$d->fetch_array();

			$d->reset();

			$sql="select * from #_product_photo where id_cat=".$_REQUEST['id'];

			$d->query($sql);

			$photo_tin=$d->result_array();


			$chuoihinh=array();
			foreach ($photo_tin as $key => $v) {
				
				$chuoihinh[]=$v['photo'];
			}
			$chuoihinh=implode(',', $chuoihinh);

			$chuoihinh.=',';

			}



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

						$gia1 = addslashes($_POST['txtgia1']);

							$donvi = addslashes($_POST['txtdonvi']);

						$mota = addslashes($_POST['txtmota']);

						$huongnha = addslashes($_POST['huongnha']);

						$huongbancong = addslashes($_POST['huongbancong']);

						$sophongngu = addslashes($_POST['txtsophongngu']);

						$sotoilet = addslashes($_POST['txtsotoilet']);

						$sotang = addslashes($_POST['txtsotang']);

						$mattien = addslashes($_POST['txtmattien']);

						$vitri = addslashes($_POST['txtvitri']);

						$duongvao = addslashes($_POST['txtduongvao']);

						$noithat = addslashes($_POST['txtnoithat']);



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

							$gia1 = htmlspecialchars($gia1);

								$donvi = htmlspecialchars($donvi);

						$mota = htmlspecialchars($mota);

						$huongnha = htmlspecialchars($huongnha);

						$huongbancong = htmlspecialchars($huongbancong);

						$sophongngu = htmlspecialchars($sophongngu);

						$sotoilet = htmlspecialchars($sotoilet);

						$sotang = htmlspecialchars($sotang);

						$mattien = htmlspecialchars($mattien);

						$vitri = htmlspecialchars($vitri);

						$duongvao = htmlspecialchars($duongvao);

						$noithat = htmlspecialchars($noithat);



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
					        $listhinh1=array_unique($listhinh1);

					        $listhinh1=implode(',', $listhinh1);

					     }

					     // echo $listhinh1;
					     // exit();

					   	$data['ten_vi'] = $tenduan;

					   	$data['id_cat'] = $hinhthuc;

					   	$data['id_cat1'] = $phanmuc;

					   	$data['id_tinh'] = $id_tinh;

					   	$data['id_quan'] = $id_quan;

					   	$data['id_phuong'] = $id_phuong;

					   	$data['id_duan'] = $id_duan;

					   	$data['diachi'] = $diachi;

					   	$data['dientich'] = $dientich;

					   	if($giaban=='Thỏa thuận'){

					   		$data['gia'] =0;

					   	}else

					   	{

					   		$data['gia'] = $giaban;

					   	}

					   	

					   	 $data['gia1'] = $gia1;

					   	 $data['donvi'] = $donvi;

					   	$data['noidung_vi'] = $mota;

					   	$data['huongnha'] = $huongnha;

					   	$data['huongbancong'] = $huongbancong;

					   	$data['sophongngu'] = $sophongngu;

					   	$data['sotoilet'] = $sotoilet;

					   	$data['sotang'] = $sotang;

					   	$data['mattien'] = $mattien;

					   	$data['vitri'] = $vitri;

					   	$data['duongvao'] = $duongvao;

					   	$data['noithat'] = $noithat;

					   	$data['bando'] = $_POST['txtbando'];

					   	$data['tenlienhe'] = $tenlienhe;

					   	$data['diachilienhe'] = $diachilienhe;

					   	$data['dienthoailienhe'] = $dienthoailienhe;

					   	$data['emaillienhe'] = $emaillienhe;

					   	$data['tenkhongdau_vi']=q_bodautv($tenduan);

					    $data['ngaytao'] = time();

					
					    $data['loaitin'] = 1;
					    $data['id_user'] = $_SESSION['login1']['id'];

					   



				        //update 



				      if($_POST['id']>0)

				       	{
				       	


					     if($anhdaidien = upload_image("file", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$file_name)){

					                 $data['photo'] = $anhdaidien;
					                 	$d->setTable('product');
										$d->setWhere('id', $_POST['id']);
										$d->select();
										if($d->num_rows()>0){
											$row = $d->fetch_array();
											delete_file(_upload_sanpham.$row['photo']);
								
									}	
					      }



				       		$d->setTable('product');

							$d->setWhere('id', $_REQUEST['id']);




							if($d->update($data)){




									// $d->reset();
									// $sql="select hinhdinhkem from #_product where id=".$_POST['id'];
									// $d->query($sql);
									// $getdinhkem=$d->fetch_array();




									$d->reset();
									$sql="select photo from #_product_photo where id_cat=".$_POST['id'];
									$d->query($sql);
									$showhinhphoto=$d->result_array();

									$listgetdinhkem1=array();
									foreach ($showhinhphoto as $key => $v) {
												$listgetdinhkem1[]=$v['photo'];
									}

									if($_POST['listhinh']!=''){





										    $listdinhkem=explode(',', $_POST['listhinh']);
										    $listdinhkem1=array();

										    for ($i=1; $i <count($listdinhkem) ; $i++) { 
												$listdinhkem1[]=$listdinhkem[$i-1];
											}


											$listhinh123=array();
											for ($i=0; $i <count($listdinhkem1) ; $i++) { 
												if(!in_array($listdinhkem1[$i], $listgetdinhkem1))
													{
																	$listhinh123[]=$listdinhkem1[$i];
													}
												}

									

					     				   $listhinh1234=implode(',', $listhinh123);


					     				   	foreach ($showhinhphoto as $key => $v) {
															if(!in_array($v['photo'], $listdinhkem1))
															{
																$d->reset();
																$sql="delete from table_product_photo where id_cat=".$_POST['id']." and photo='".$v['photo']."'  ";
																$d->query($sql);
															}

											}
					     				 

						

											if(count($listhinh123)>0)
											{

												 if($upnhieuhinh = upload_image_mutil("files", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$listhinh1234)){  





											
												 		$upnhieuhinh1=explode(',', $upnhieuhinh);
													
												 	// 	echo count($upnhieuhinh1);
														// die();
														for ($i=1; $i <count($upnhieuhinh1) ; $i++) { 
																
																$d->reset();
															    $sql="insert into #_product_photo(photo,id_cat,hienthi) values('".$upnhieuhinh1[$i-1]."','".$_POST['id']."',1)";

															     $d->query($sql);

														}
													





													}
												


												
											}
				

									}







					         		  transfer("Cập nhập bài thành công ", "quan-ly-tin-moi-gioi.html");



							}	else{



								 transfer("Hệ thống đang bận ", "quan-ly-tin-moi-gioi.html");



							}





				       	}else{


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

					    	  //   	  echo $listhinh1;

				     	  // die();
					       if($anhdaidien = upload_image("file", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$file_name)){

					                 $data['photo'] = $anhdaidien;

					      }


				  		  if($hinhdinhkem = upload_image_mutil("files", 'jpg|png|gif|JPG|PNG|GIF|jpeg|JPEG', _upload_sanpham_l,$listhinh1)){

				            $data['hinhdinhkem'] = $hinhdinhkem;     


				     	  }


				 

				     	   $data['hienthi'] = 0;
					        $d->setTable('product');

					        if($d->insert($data))

					         {

							         	

									if($_POST['listhinh']!=''){





											   	$id_bds = mysql_insert_id();

								         	$hinhdinhkem1=explode(',', $hinhdinhkem);

								         	for ($i=1; $i <count($hinhdinhkem1) ; $i++) { 

								          		

								          		$d->reset();

								          		$sql="insert into #_product_photo(photo,id_cat,hienthi) values('".$hinhdinhkem1[$i-1]."','$id_bds',1)";

								          		 $d->query($sql);



								   		  		  }



						         

									}









					         





					         		  transfer1("Đăng bài thành công ", "dang-tin-moi-gioi.html",$macode);



					         }





					        else

					        {

					            transfer("Hệ thống đang bận ", "dang-tin-moi-gioi.html");

					        }

							



					    // end insert

					      }











			}






}else if($act=='quan-ly-tin-moi-gioi') {






		$d->reset();

		$sql="select id,ten_vi,photo,tenkhongdau_vi,ngaytao,matin from #_product where id_user='".$_SESSION['login1']['id']."' and id_cat in (360,358,406) and tinmoigioi=1 order by stt asc, id desc";

		$d->query($sql);

		$danhsachtin=$d->result_array();

		if($_REQUEST['del']>0){



			if(delete_product($_REQUEST['del'])==0 || delete_product($_REQUEST['del'])==2){





				 transfer("Xóa không thành công ", "quan-ly-tin-moi-gioi.html");

			}else

			{

					 transfer("Xóa tin thành công ", "quan-ly-tin-moi-gioi.html");

			}



		}


}






} else {


					 transfer("Bạn không có quyền vào trang này", "trang-chu.html");


}


?>