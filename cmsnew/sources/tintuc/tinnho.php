<?php	if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die("Error");

$act = (isset($_REQUEST['act'])) ? magic_quote($_REQUEST['act']) : "";

$chuoi_noi_curpage = ((@$_REQUEST['search']!="")?("&search=".$_REQUEST['search'].""):"").(($_REQUEST['curPage']!='')?'&curPage='.$_REQUEST['curPage']:'');

switch($act){
	//$c là biến lưu vào com để phân biệt tin tức -> là các số từ 0-99, $act là $_REQUEST['act'] của mỗi tin tức;
	//$width: độ rộng ảnh thumb , $height: độ cao ảnh thumb , $truonghop: là các trường hợp 1,2,3 khi tạo ảnh thumb.

	//--TIN TỨC-----------------------------------
	case "man":
		gets(0,'man');
		$template = "tintuc/tinnho/item";
		break;
	case "add":
		$template = "tintuc/tinnho/item_add";
		break;
	case "edit":
		get(0,'man');
		$template = "tintuc/tinnho/item_add";
		break;
	case "save":
		save(0,'man',300,250,2);
		break;
	case "delete":
		delete(0,'man');
		break;
	
	//TIN TỨC 1 -----------------------------------
	case "man1":
		gets(1,'man1');
		$template = "tintuc/tinnho/item1";
		break;
	case "add1":
		$template = "tintuc/tinnho/item1_add";
		break;
	case "edit1":
		get(1,'man1');
		$template = "tintuc/tinnho/item1_add";
		break;
	case "save1":
		save(1,'man1',295,173,2);
		break;
	case "delete1":
		delete(1,'man1');
		break;
		
	//TIN TỨC 2 -----------------------------------
	case "man2":
		gets(2,'man2');
		$template = "tintuc/tinnho/item2";
		break;
	case "add2":
		$template = "tintuc/tinnho/item2_add";
		break;
	case "edit2":
		get(2,'man2');
		$template = "tintuc/tinnho/item2_add";
		break;
	case "save2":
		save(2,'man2',220,220,2);
		break;
	case "delete2":
		delete(2,'man2');
		break;
	
	//TIN TỨC 3 -----------------------------------
	case "man3":
		gets(3,'man3');
		$template = "tintuc/tinnho/item3";
		break;
	case "add3":
		$template = "tintuc/tinnho/item3_add";
		break;
	case "edit3":
		get(3,'man3');
		$template = "tintuc/tinnho/item3_add";
		break;
	case "save3":
		save(3,'man3',300,300,2);
		break;
	case "delete3":
		delete(3,'man3');
		break;
	
	
	
	//TIN TỨC 4 -----------------------------------
	case "man4":
		gets(4,'man4');
		$template = "tintuc/tinnho/item4";
		break;
	case "add4":
		$template = "tintuc/tinnho/item4_add";
		break;
	case "edit4":
		get(4,'man4');
		$template = "tintuc/tinnho/item4_add";
		break;
	case "save4":
		save(4,'man4',300,200,2);
		break;
	case "delete4":
		delete(4,'man4');
		break;
		
		
		
	//TIN TỨC 5 -----------------------------------
	case "man5":
		gets(5,'man5');
		$template = "tintuc/tinnho/item5";
		break;
	case "add5":
		$template = "tintuc/tinnho/item5_add";
		break;
	case "edit5":
		get(5,'man5');
		$template = "tintuc/tinnho/item5_add";
		break;
	case "save5":
		save(5,'man5',244,375,2);
		break;
	case "delete5":
		delete(5,'man5');
		break;	
	
	
	//TIN TỨC 6 -----------------------------------
	case "man6":
		gets(6,'man6');
		$template = "tintuc/tinnho/item6";
		break;
	case "add6":
		$template = "tintuc/tinnho/item6_add";
		break;
	case "edit6":
		get(6,'man6');
		$template = "tintuc/tinnho/item6_add";
		break;
	case "save6":
		save(6,'man6',260,110,2);
		break;
	case "delete6":
		delete(6,'man6');
		break;	
		
		
	//TIN TỨC 7 -----------------------------------
	case "man7":
		gets(7,'man7');
		$template = "tintuc/tinnho/item7";
		break;
	case "add7":
		$template = "tintuc/tinnho/item7_add";
		break;
	case "edit7":
		get(7,'man7');
		$template = "tintuc/tinnho/item7_add";
		break;
	case "save7":
		save(7,'man7',112,72,2);
		break;
	case "delete7":
		delete(7,'man7');
		break;	
		
		
		//TIN TỨC 8 -----------------------------------
	case "man8":
		gets(8,'man8');
		$template = "tintuc/tinnho/item8";
		break;
	case "add8":
		$template = "tintuc/tinnho/item8_add";
		break;
	case "edit8":
		get(8,'man8');
		$template = "tintuc/tinnho/item8_add";
		break;
	case "save8":
		save(8,'man8',112,82,2);
		break;
	case "delete8":
		delete(8,'man8');
		break;	
		
		//TIN TỨC 9 -----------------------------------
	case "man9":
		gets(9,'man9');
		$template = "tintuc/tinnho/item9";
		break;
	case "add9":
		$template = "tintuc/tinnho/item9_add";
		break;
	case "edit9":
		get(9,'man9');
		$template = "tintuc/tinnho/item9_add";
		break;
	case "save9":
		save(9,'man9',112,92,2);
		break;
	case "delete9":
		delete(9,'man9');
		break;	
		//TIN TỨC 10 -----------------------------------
	case "man10":
		gets(10,'man10');
		$template = "tintuc/tinnho/item10";
		break;
	case "add10":
		$template = "tintuc/tinnho/item10_add";
		break;
	case "edit10":
		get(10,'man10');
		$template = "tintuc/tinnho/item10_add";
		break;
	case "save10":
		save(10,'man10',112,102,2);
		break;
	case "delete10":
		delete(10,'man10');
		break;	
		//TIN TỨC 11 -----------------------------------
	case "man11":
		gets(11,'man11');
		$template = "tintuc/tinnho/item11";
		break;
	case "add11":
		$template = "tintuc/tinnho/item11_add";
		break;
	case "edit11":
		get(11,'man11');
		$template = "tintuc/tinnho/item11_add";
		break;
	case "save11":
		save(11,'man11',112,112,2);
		break;
	case "delete11":
		delete(11,'man11');
		break;	
		//TIN TỨC 12 -----------------------------------
	case "man12":
		gets(12,'man12');
		$template = "tintuc/tinnho/item12";
		break;
	case "add12":
		$template = "tintuc/tinnho/item12_add";
		break;
	case "edit12":
		get(12,'man12');
		$template = "tintuc/tinnho/item12_add";
		break;
	case "save12":
		save(12,'man12',122,122,2);
		break;
	case "delete12":
		delete(12,'man12');
		break;	
		//TIN TỨC 13 -----------------------------------
	case "man13":
		gets(13,'man13');
		$template = "tintuc/tinnho/item13";
		break;
	case "add13":
		$template = "tintuc/tinnho/item13_add";
		break;
	case "edit13":
		get(13,'man13');
		$template = "tintuc/tinnho/item13_add";
		break;
	case "save13":
		save(13,'man13',112,132,2);
		break;
	case "delete13":
		delete(13,'man13');
		break;	

		//TIN TỨC 14 -----------------------------------
	case "man14":
		gets(14,'man14');
		$template = "tintuc/tinnho/item14";
		break;
	case "add14":
		$template = "tintuc/tinnho/item14_add";
		break;
	case "edit14":
		get(14,'man14');
		$template = "tintuc/tinnho/item14_add";
		break;
	case "save14":
		save(14,'man14',112,142,2);
		break;
	case "delete14":
		delete(14,'man14');
		break;

		//TIN TỨC 15 -----------------------------------
	case "man15":
		gets(15,'man15');
		$template = "tintuc/tinnho/item15";
		break;
	case "add15":
		$template = "tintuc/tinnho/item15_add";
		break;
	case "edit15":
		get(15,'man15');
		$template = "tintuc/tinnho/item15_add";
		break;
	case "save15":
		save(15,'man15',112,152,2);
		break;
	case "delete15":
		delete(15,'man15');
		break;
		//TIN TỨC 16 -----------------------------------
	case "man16":
		gets(16,'man16');
		$template = "tintuc/tinnho/item16";
		break;
	case "add16":
		$template = "tintuc/tinnho/item16_add";
		break;
	case "edit16":
		get(16,'man16');
		$template = "tintuc/tinnho/item16_add";
		break;
	case "save16":
		save(16,'man16',112,162,2);
		break;
	case "delete16":
		delete(16,'man16');
		break;		
	default:
		$template = "index";
}

#==TIN TỨC==================================
//$c là biến lưu vào com để phân biệt tin tức -> là các số từ 0-99, $act là $_REQUEST['act'] của mỗi tin tức;
//$width: độ rộng ảnh thumb , $height: độ cao ảnh thumb , $truonghop: là các trường hợp 1,2,3 khi tạo ảnh thumb.

function gets($c,$act){ 	//$c là biến lưu vào com để phân biệt tin tức, $act là $_REQUEST['act'] của mỗi tin tức;
	global $d, $items, $paging, $chuoi_noi_curpage;
	
	thaydoi_hienthi('noibat','table_tinnho','tinnho',$act,$chuoi_noi_curpage);
	thaydoi_hienthi('tinmoi','table_tinnho','tinnho',$act,$chuoi_noi_curpage);
	thaydoi_hienthi('hienthi','table_tinnho','tinnho',$act,$chuoi_noi_curpage);
			
	$sql = "select * from #_tinnho where com=$c ";
	
	if($_REQUEST['search']!=''){
		$ten = magic_quote($_REQUEST['search']);
		$ten = str_replace('%20',' ',$ten);
		$sql.=" and ten_vi like '%$ten%'";
	}
	$sql .= " order by stt asc";
	
	$d->query($sql);
	$items = $d->result_array();
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=tinnho&act=$act";
	if(isset($_REQUEST['search']))
		$url .= "&search=".$_REQUEST['search'];	
	$maxR=20;
	$maxP=4;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}

function get($c,$act){
	global $d, $item, $chuoi_noi_curpage,$list_trichdoan;
	$id = isset($_GET['id']) ? intval($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=tinnho&act=$act".$chuoi_noi_curpage);
	


	$sql = "select * from #_tinnho where com=$c and id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=tinnho&act=$act".$chuoi_noi_curpage);
	$item = $d->fetch_array();
}

function save($c,$act,$width,$height,$truonghop){
	global $d, $chuoi_noi_curpage,$config;
	$file_name=q_tenhinh($_FILES['file']['name']);
		$file_name1=q_tenhinh($_FILES['file1']['name']);
	$file_name2=q_tenhinh($_FILES['file2']['name']);
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=tinnho&act=$act".$chuoi_noi_curpage);
	$id = isset($_POST['id']) ? intval($_POST['id']) : "";
		

	
	
	$data['lat'] = magic_quote($_POST['lat']);
	$data['lng'] = magic_quote($_POST['lng']);
	
	$data['mapmota'] = magic_quote($_POST['mapmota']);
	

	$data['tel'] = magic_quote($_POST['tel']);
	$data['mob'] = magic_quote($_POST['mob']);
	$data['email'] = magic_quote($_POST['email']);
	$data['skype'] = magic_quote($_POST['skype']);
	$data['face'] = magic_quote($_POST['face']);
	$data['incenter'] = magic_quote($_POST['incenter']);
	$data['twiter'] = magic_quote($_POST['twiter']);
	$data['google'] = magic_quote($_POST['google']);




		foreach ($config["lang"] as $key => $value)  {

 			$data['ten_'.$value] = magic_quote($_POST['ten_'.$value]);
            $data['h1_'.$value] = magic_quote($_POST['h1_'.$value]);
            $data['h2_'.$value] = magic_quote($_POST['h2_'.$value]);
                        $data['h3_'.$value] = magic_quote($_POST['h3_'.$value]);
            $data['title_'.$value] = magic_quote($_POST['title_'.$value]);
        
            $data['keywords_'.$value] = magic_quote($_POST['keywords_'.$value]);
            $data['description_'.$value] = magic_quote($_POST['description_'.$value]);
            $data['mota_'.$value] = magic_quote($_POST['mota_'.$value]);
            $data['noidung_'.$value] = magic_quote($_POST['noidung_'.$value]);
              $data['diachi_'.$value] = magic_quote($_POST['diachi_'.$value]);
          
  			  $data['tenkhongdau_'.$value] = magic_quote($_POST['tenkhongdau_'.$value]);
        }

	$data['stt'] =($_POST['stt']!=0) ? $_POST['stt'] : 1;
	$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		
	if($id){		
		if($photo = upload_image("file", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF|webp|WEBP|svg|SVG',_upload_tinnho,$file_name)){
			$data['photo'] = $photo;
		
			$d->setTable('tinnho');
			$d->setWhere('id', $id);
			$d->setWhere('com', ''.$c);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_tinnho.$row['photo']);
		
			}
		}			


		if($download = upload_image("file1", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF|doc|DOC|docx|DOCX|pdf|PDF|xlsx|XLSX|webp|WEBP|svg|SVG',_upload_tinnho,$file_name1)){
			$data['download'] = $download;
		
			$d->setTable('tinnho');
			$d->setWhere('id', $id);
			$d->setWhere('com', ''.$c);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_tinnho.$row['download']);
				
			}
		}			
			if($logo = upload_image("file2", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF|doc|DOC|docx|DOCX|pdf|PDF|xlsx|XLSX|webp|WEBP',_upload_tinnho,$file_name2)){
			$data['logo'] = $logo;
		
			$d->setTable('tinnho');
			$d->setWhere('id', $id);
			$d->setWhere('com', ''.$c);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_tinnho.$row['logo']);
				
			}
		}	
	$data['maptext'] =magic_quote($_POST['maptext']);
		$data['ngaysua'] = time();
		$data['ngaytao'] = time();
		
		$d->setTable('tinnho');
		$d->setWhere('id', $id);
		$d->setWhere('com', ''.$c);
		if($d->update($data)){

					 if (isset($_FILES['files'])) {
   
                                          $arr_chuoi = str_replace('"','',$_POST['jfiler-items-exclude-files-0']);
                                              $arr_chuoi = str_replace('[','',$arr_chuoi);
                                             $arr_chuoi = str_replace(']','',$arr_chuoi);
                                             $arr_file_del = explode(',',$arr_chuoi);
               
               
                                                         for($i=0;$i<count($_FILES['files']['name']);$i++){
                                                            if($_FILES['files']['name'][$i]!=''){
                                                            if(!in_array(($_FILES['files']['name'][$i]),$arr_file_del,true))
                                                            {  

                                                         
                                                                  $file['name'] = $_FILES['files']['name'][$i];
                                                                  $file['type'] = $_FILES['files']['type'][$i];
                                                                  $file['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                                                                  $file['error'] = $_FILES['files']['error'][$i];
                                                                  $file['size'] = $_FILES['files']['size'][$i];
               
                                                              
                                                             
                                                                   
               
                                                                   $file_name = q_tenhinh($_FILES['files']['name'][$i]);
                                                                  $photo = upload_photos($file, 'jpg|png|gif|PNG|GIF|JPG|JPEG|jpeg', _upload_tinnho,$file_name);
                                                                  $data1['photo'] = $photo;
               
                                                                     // $data1['stt'] = (int)$_POST['stthinh'][$i];
                                                         
                                                                  $data1['id_cat'] = $id;
                                                                  $data1['hienthi'] = 1;
                                                                  $d->setTable('tinnho_photo');
                                                                  $d->insert($data1);
                                                               
                                                      
                                                              }
               
                                                           
                                                          
               
                                                         }
                                                       }
                                                   }
               
                                          /* end up nhiều */


				redirect("index.php?com=tinnho&act=$act".$chuoi_noi_curpage);

		}
		else{

			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=tinnho&act=$act".$chuoi_noi_curpage);
		}
	}else{		
		if($photo = upload_image("file", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF|webp|WEBP|svg|SVG',_upload_tinnho,$file_name)){
			$data['photo'] = $photo;

		}	

		if($download = upload_image("file1", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF|doc|DOC|docx|DOCX|pdf|PDF|xlsx|XLSX|webp|WEBP|svg|SVG',_upload_tinnho,$file_name1)){
			$data['download'] = $download;
			
		}	

		if($logo = upload_image("file2", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF|doc|DOC|docx|DOCX|pdf|PDF|xlsx|XLSX|webp|WEBP',_upload_tinnho,$file_name2)){
			$data['logo'] = $logo;
			
		}			

		$data['com'] = $c;				
		$data['ngaysua'] = time();
		$data['ngaytao'] = time();
		
		$d->setTable('tinnho');
		if($d->insert($data)){




					$id_bds = mysqli_insert_id($d->db);
      
   					         		    /* up nhiều hình ảnh */
  						 	  /* up nhiều hình ảnh */
   
                                       if (isset($_FILES['files'])) {
   
                                          $arr_chuoi = str_replace('"','',$_POST['jfiler-items-exclude-files-0']);
                                 			 $arr_chuoi = str_replace('[','',$arr_chuoi);
                                			 $arr_chuoi = str_replace(']','',$arr_chuoi);
                                 			$arr_file_del = explode(',',$arr_chuoi);
   
   
                                             for($i=0;$i<count($_FILES['files']['name']);$i++){
                                                if($_FILES['files']['name'][$i]!=''){
                                                if(!in_array(($_FILES['files']['name'][$i]),$arr_file_del,true))
                                    	   {  

                                             
                                                      $file['name'] = $_FILES['files']['name'][$i];
                                                      $file['type'] = $_FILES['files']['type'][$i];
                                                      $file['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                                                      $file['error'] = $_FILES['files']['error'][$i];
                                                      $file['size'] = $_FILES['files']['size'][$i];
   
                                                  
                                                 
                                                       
   
                                                       $file_name = q_tenhinh($_FILES['files']['name'][$i]);
                                                      $photo = upload_photos($file, 'jpg|png|gif|PNG|GIF|JPG|JPEG|jpeg', _upload_tinnho,$file_name);
                                                      $data1['photo'] = $photo;
   
                                                       
                                             
                                                      $data1['id_cat'] = $id_bds;
                                                      $data1['hienthi'] = 1;
                                                      $d->setTable('tinnho_photo');
                                                      $d->insert($data1);
                                                   
                                          
                                            }
   
                                               
                                              
   
                                             }
                                           }
                                       }
   
                              /* end up nhiều */
   


			redirect("index.php?com=tinnho&act=$act");
		}
		else{

			transfer("Lưu dữ liệu bị lỗi", "index.php?com=tinnho&act=$act".$chuoi_noi_curpage);
		}
	}
}

function delete($c,$act){
	global $d, $chuoi_noi_curpage;
	
	if(isset($_GET['id'])){
		$id =  intval($_GET['id']);
		
		$d->reset();
		$sql = "select * from #_tinnho where id=$id and com=$c";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_tinnho.$row['photo']);
				delete_file(_upload_tinnho.$row['thumb']);
			}
			$sql = "delete from #_tinnho where id=$id and com=$c";
			$d->query($sql);
		}
		
		if($d->query($sql))
			redirect("index.php?com=tinnho&act=$act".$chuoi_noi_curpage);
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=tinnho&act=$act".$chuoi_noi_curpage);
	}else transfer("Không nhận được dữ liệu", "index.php?com=tinnho&act=$act".$chuoi_noi_curpage);
}

?>