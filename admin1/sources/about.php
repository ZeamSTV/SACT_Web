<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die("Error");
$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";


switch($act){
	//GIỚI THIỆU
	case "capnhap":
		gets(0,'capnhap');
		$template = "about/item_add";
		break;
	case "save":
		save(0,'capnhap');
		break;
	
	//GIỚI THIỆU 1
	case "capnhap1":
		gets(1,'capnhap1');
		$template = "about/item1_add";
		break;
	case "save1":
		save(1,'capnhap1');
		break;
		
	//GIỚI THIỆU 2
	case "capnhap2":
		gets(2,'capnhap2');
		$template = "about/item2_add";
		break;
	case "save2":
		save(2,'capnhap2');
		break;
		//GIỚI THIỆU 3
	case "capnhap3":
		gets(3,'capnhap3');
		$template = "about/item3_add";
		break;
	case "save3":
		save(3,'capnhap3');
		break;
			break;
		//GIỚI THIỆU 3
	case "capnhap4":
		gets(4,'capnhap4');
		$template = "about/item4_add";
		break;
	case "save4":
		save(4,'capnhap4');
		break;
		

	case "capnhap5":
		gets(5,'capnhap5');
		$template = "about/item5_add";
		break;
	case "save5":
		save(5,'capnhap5');
		break;



	case "capnhap6":
		gets(6,'capnhap6');
		$template = "about/item6_add";
		break;
	case "save6":
		save(6,'capnhap6');
		break;
case "capnhap7":
		gets(7,'capnhap7');
		$template = "about/item7_add";
		break;
	case "save7":
		save(7,'capnhap7');
		break;

case "capnhap8":
		gets(8,'capnhap8');
		$template = "about/item8_add";
		break;
	case "save8":
		save(8,'capnhap8');
		break;
case "capnhap9":
		gets(9,'capnhap9');
		$template = "about/item9_add";
		break;
	case "save9":
		save(9,'capnhap9');
		break;
case "capnhap10":
		gets(10,'capnhap10');
		$template = "about/item10_add";
		break;
	case "save10":
		save(10,'capnhap10');
		break;

	default:
		$template = "index";
}


//GIỚI THIỆU
function gets($c,$act){
	global $d, $item;

	$sql = "select * from #_about where com=$c";
	$d->query($sql);
	$item = $d->fetch_array();
}

function save($c,$act){
	global $d,$config;


		$file_name=q_tenhinh($_FILES['file']['name']);
		$file_name1=q_tenhinh($_FILES['file1']['name']);
		$file_name2=q_tenhinh($_FILES['file2']['name']);
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=about&act=$act");			
	
	$sql = "select * from #_about where com=$c limit 0,1";
	$d->query($sql);
	if($d->num_rows()!=0){
		$d->reset();
		
			
		  foreach ($config['lang'] as $key => $value) {


                 $data['h1_'.$value] = magic_quote($_POST['h1_'.$value]);
            $data['h2_'.$value] = magic_quote($_POST['h2_'.$value]);
                        $data['h3_'.$value] = magic_quote($_POST['h3_'.$value]);
            $data['title_'.$value] = magic_quote($_POST['title_'.$value]);
        
            $data['keywords_'.$value] = magic_quote($_POST['keywords_'.$value]);
            $data['description_'.$value] = magic_quote($_POST['description_'.$value]);
            $data['mota_'.$value] = magic_quote($_POST['mota_'.$value]);
            $data['noidung_'.$value] = magic_quote($_POST['noidung_'.$value]);
        }




			if($photo = upload_image("file", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF|webp|WEBP|mp3|MP3|MP4|mp4',_upload_tinnho,$file_name)){
			$data['photo'] = $photo;

			$d->setTable('about');
		
			$d->setWhere('com', ''.$c);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_tinnho.$row['photo']);
			
			}



				}	

				if($photo1 = upload_image("file1", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF|mp4|MP4',_upload_tinnho,$file_name1)){
			$data['photo1'] = $photo1;

			$d->setTable('about');
		
			$d->setWhere('com', ''.$c);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_tinnho.$row['photo1']);
			
			}



				}		
	if($photo2 = upload_image("file2", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF',_upload_tinnho,$file_name2)){
			$data['photo2'] = $photo2;

			$d->setTable('about');
		
			$d->setWhere('com', ''.$c);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_tinnho.$row['photo2']);
			
			}



				}	
		$d->setTable('about');
		$d->setWhere('com',''.$c);
		if($d->update($data))
			transfer("Dữ liệu được cập nhập", "index.php?com=about&act=$act");
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=about&act=$act");
	}
	else{
		$d->reset();
		$data['com'] = $c;
		if($photo = upload_image("file", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF|mp3|MP3|MP4|mp4',_upload_tinnho,$file_name)){
			$data['photo'] = $photo;
		

		}	
	
		if($photo1 = upload_image("file1", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF|mp4|MP4',_upload_tinnho,$file_name1)){
			$data['photo1'] = $photo1;
		

		}	
		if($photo2 = upload_image("file2", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF',_upload_tinnho,$file_name2)){
			$data['photo2'] = $photo2;
		

		}	
		foreach ($config["lang"] as $key => $value)  {


            $data['h1_'.$value] = magic_quote($_POST['h1_'.$value]);
            $data['h2_'.$value] = magic_quote($_POST['h2_'.$value]);
                        $data['h3_'.$value] = magic_quote($_POST['h3_'.$value]);
            $data['title_'.$value] = magic_quote($_POST['title_'.$value]);
        
            $data['keywords_'.$value] = magic_quote($_POST['keywords_'.$value]);
            $data['description_'.$value] = magic_quote($_POST['description_'.$value]);
            $data['mota_'.$value] = magic_quote($_POST['mota_'.$value]);
            $data['noidung_'.$value] = magic_quote($_POST['noidung_'.$value]);
        }

		$d->setTable('about');
		if($d->insert($data))
			transfer("Dữ liệu được thêm vào", "index.php?com=about&act=$act");
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=about&act=$act");	
	}
			
			
}


?>