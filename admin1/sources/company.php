<?php	if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die("Error");

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

$chuoi_noi_curpage = (($_REQUEST['curPage']!='')?'&curPage='.$_REQUEST['curPage']:'');

switch($act){
	
	
	//THÔNG TIN CÔNG TY-----------------------------
	case "capnhap":
		get_capnhap();
		$template = "company/item_add";
		break;
	case "save_capnhap":
		save_capnhap();
		break;
	
	
	//BẢN ĐỒ --------------------------
	case "man":
		get_items();
		$template = "company/address/items";
		break;
	case "add":
		$template = "company/address/item_add";
		break;
	case "edit":		
		get_item();		
		$template = "company/address/item_add";
		break;
	case "save":
		save_item();
		break;
	case "delete":
		delete_item();
		break;
	
	//BẢN ĐỒ DẠNG TỌA ĐỘ --------------------------
	case "man1":
		get_items1();
		$template = "company/toado/items";
		break;
	case "add1":
		$template = "company/toado/item_add";
		break;
	case "edit1":		
		get_item1();		
		$template = "company/toado/item_add";
		break;
	case "save1":
		save_item1();
		break;
	case "delete1":
		delete_item1();
		break;
	
		
	default:
		$template = "index";
}


//THÔNG TIN CÔNG TY-----------------------------
function get_capnhap(){
	global $d, $item;

	$sql = "select * from #_company where com='company' limit 0,1";
	$d->query($sql);	
	$item = $d->fetch_array();
}

function save_capnhap(){
	global $d,$config;
	$file_name=q_tenhinh($_FILES['file']['name']);	
	$file_name1=q_tenhinh($_FILES['file1']['name']);
	$file_name2=q_tenhinh($_FILES['file2']['name']);
	$file_name3=q_tenhinh($_FILES['file3']['name']);
	$file_name4=q_tenhinh($_FILES['file4']['name']);
	$file_name5=q_tenhinh($_FILES['file5']['name']);
	$file_name6=q_tenhinh($_FILES['file6']['name']);
	
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=company&act=capnhap");
	
	
	
	
	$data['com'] = 'company';
	
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
             
        }
	
	$data['script'] = magic_quote($_POST['script']);		
	$data['vchat'] = $_POST['vchat'];		
	$data['linkbct'] = magic_quote($_POST['linkbct']);	
	$data['email'] = magic_quote($_POST['email']);
	$data['website'] = magic_quote($_POST['website']);
	$data['fanface'] = magic_quote($_POST['fanface']);
	$data['chatface'] = magic_quote($_POST['chatface']);
	$data['copyright'] = magic_quote($_POST['copyright']);
	
	$data['camera'] = magic_quote($_POST['camera']);
	$data['diachi'] = magic_quote($_POST['diachi']);
	$data['chinhanh'] = magic_quote($_POST['chinhanh']);
	$data['dienthoai'] = magic_quote($_POST['dienthoai']);
	$data['hotline'] = magic_quote($_POST['hotline']);
	$data['linkbocongthuong'] = magic_quote($_POST['linkbocongthuong']);
	
	$d->reset();
	
	$sql = "select * from #_company where com='company' limit 0,1";
	$d->query($sql);
	if($d->num_rows()==0){	//Nếu chưa tồn tại thông tin công ty
		$d->reset();
		$d->setTable('company');
		if($d->insert($data))
			transfer("Thêm dữ liệu thành công", "index.php?com=company&act=capnhap");
	}
	else{		

		//Nếu đã tồn tại cập nhật com='company'
		
		
		if($favicon = upload_image("file1", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF',_upload_company,$file_name1)){
			
			$data['favicon'] = $favicon;
			
			$d->setTable('company');
			$d->setWhere('com', 'company');
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_company.$row['favicon']);
				
			}
	}	
		
		
	if($logore = upload_image("file", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF|SVG|svg',_upload_company,$file_name)){
			
			
			$data['logore'] = $logore;
			
			$d->setTable('company');
			$d->setWhere('com', 'company');
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_company.$row['logore']);
				
			}
	}	
	
	
	
	if($logofooter = upload_image("file3", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF',_upload_company,$file_name3)){
			$data['logofooter'] = $logofooter;
			
			$d->setTable('company');
			$d->setWhere('com', 'company');
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_company.$row['logofooter']);
				
			}
	}	
	
	
	
	
	if($bgfooter = upload_image("file4", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF',_upload_company,$file_name4)){
			$data['bgfooter'] = $bgfooter;
			
			$d->setTable('company');
			$d->setWhere('com', 'company');
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_company.$row['bgfooter']);
				
			}
	}	
	
	
	
	if($banner = upload_image("file5", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF',_upload_company,$file_name5)){
			$data['banner'] = $banner;
			
			$d->setTable('company');
			$d->setWhere('com', 'company');
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_company.$row['banner']);
				
			}
	}	
	if($bocongthuong = upload_image("file6", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF',_upload_company,$file_name6)){
			$data['bocongthuong'] = $bocongthuong;
			
			$d->setTable('company');
			$d->setWhere('com', 'company');
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_company.$row['bocongthuong']);
				
			}
	}	
	
	
		$d->reset();
		$d->setTable('company');
		$d->setWhere('com', 'company');	
		if($d->update($data))
		transfer("Dữ liệu đã được cập nhật", "index.php?com=company&act=capnhap");	
	}					
}


//BẢN ĐỒ --------------------------
function get_items(){
	global $d, $items, $paging;
	
	if(@$_REQUEST['hienthi']!='')
	{
		$id_up = intval($_REQUEST['hienthi']);
		$sql_sp = "SELECT id,hienthi FROM table_company where id='$id_up' ";
		$d->query($sql_sp);
		$cats= $d->fetch_array();
		$hienthi=$cats['hienthi'];		
		if($hienthi==0)
		{
			$sqlUPDATE_ORDER = "UPDATE table_company SET hienthi =1 WHERE  id = ".$id_up."";
			$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
		}
		else
		{
			$sqlUPDATE_ORDER = "UPDATE table_company SET hienthi =0  WHERE  id = ".$id_up."";
			$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
		}	
		redirect("index.php?com=company&act=man".$chuoi_noi_curpage);	
	}
	
	$sql = "select * from #_company where com='bando' order by stt asc,id desc";
	
	$d->query($sql);
	$items = $d->result_array();
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=company&act=man";
	$maxR=20;
	$maxP=4;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}

function get_item(){
	global $d, $item;
	$id = isset($_GET['id']) ? intval($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=company&act=man".$chuoi_noi_curpage);
	
	$sql = "select * from #_company where id='".$id."' and com='bando'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=company&act=man".$chuoi_noi_curpage);
	$item = $d->fetch_array();
}

function save_item(){
	global $d;	
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=company&act=man".$chuoi_noi_curpage);
	$id = isset($_POST['id']) ? intval($_POST['id']) : "";
	$file_name=q_tenhinh($_FILES['file']['name']);
	
	if($id){
		$id =  intval($_POST['id']);
		if($photo = upload_image("file", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF',_upload_hinhanh,$file_name)){
			$data['email'] = $photo;			
			$d->setTable('company');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_hinhanh.$row['email']);				
			}
		}
		$data['ten'] = magic_quote($_POST['ten']);
		$data['mota'] = magic_quote($_POST['mota']);
		$data['noidung'] = magic_quote($_POST['noidung']);
		
		
		$data['stt'] = magic_quote($_POST['stt']);
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		
		$d->setTable('company');
		$d->setWhere('id', $id);
		$d->setWhere('com', 'bando');
		if($d->update($data))
				redirect("index.php?com=company&act=man".$chuoi_noi_curpage);
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=company&act=man".$chuoi_noi_curpage);
	}else{				
		if($photo = upload_image("file", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF',_upload_hinhanh,$file_name)){
			$data['email'] = $photo;						
		}
		
		$data['com'] = 'bando';
		
		$data['ten'] = magic_quote($_POST['ten']);
		$data['mota'] = magic_quote($_POST['mota']);
		$data['noidung'] = magic_quote($_POST['noidung']);
		
		
		$data['stt'] = magic_quote($_POST['stt']);
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		
		$d->setTable('company');
		if($d->insert($data))
			redirect("index.php?com=company&act=man");
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=company&act=man".$chuoi_noi_curpage);
	}
}

function delete_item(){
	global $d;
	
	if(isset($_GET['id'])){
		$id =  intval($_GET['id']);
		
		$d->reset();
		$sql = "select * from #_company where id='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_hinhanh.$row['email']);
			}		
		}
		
		$sql = "delete from #_company where id='".$id."'";
		
		if($d->query($sql))
			redirect("index.php?com=company&act=man".$chuoi_noi_curpage);
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=company&act=man".$chuoi_noi_curpage);
	}else transfer("Không nhận được dữ liệu", "index.php?com=company&act=man".$chuoi_noi_curpage);
}


//BẢN ĐỒ TỌA ĐỘ --------------------------
function get_items1(){
	global $d, $items, $paging;
	
	if(@$_REQUEST['hienthi']!='')
	{
		$id_up = intval($_REQUEST['hienthi']);
		$sql_sp = "SELECT id,hienthi FROM table_company where id='$id_up' ";
		$d->query($sql_sp);
		$cats= $d->fetch_array();
		$hienthi=$cats['hienthi'];		
		if($hienthi==0)
		{
			$sqlUPDATE_ORDER = "UPDATE table_company SET hienthi =1 WHERE  id = ".$id_up."";
			$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
		}
		else
		{
			$sqlUPDATE_ORDER = "UPDATE table_company SET hienthi =0  WHERE  id = ".$id_up."";
			$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
		}	
		redirect("index.php?com=company&act=man1".$chuoi_noi_curpage);	
	}
	
	$sql = "select * from #_company where com='toado' order by stt asc,id desc";
	
	$d->query($sql);
	$items = $d->result_array();
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=company&act=man1";
	$maxR=20;
	$maxP=4;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}

function get_item1(){
	global $d, $item;
	$id = isset($_GET['id']) ? intval($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=company&act=man1".$chuoi_noi_curpage);
	
	$sql = "select * from #_company where id='".$id."' and com='toado'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=company&act=man1".$chuoi_noi_curpage);
	$item = $d->fetch_array();
}

function save_item1(){
	global $d;	
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=company&act=man1".$chuoi_noi_curpage);
	$id = isset($_POST['id']) ? intval($_POST['id']) : "";
	
	if($id){		
		$data['ten_vi'] = magic_quote($_POST['ten_vi']);
		$data['diachi_vi'] = magic_quote($_POST['diachi_vi']);
		$data['dienthoai'] = magic_quote($_POST['dienthoai']);
		$data['website'] = magic_quote($_POST['website']);
		$data['title_vi'] = magic_quote($_POST['title_vi']);
		
		$data['stt'] = magic_quote($_POST['stt']);
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		
		$d->setTable('company');
		$d->setWhere('id', $id);
		$d->setWhere('com', 'toado');
		if($d->update($data))
				redirect("index.php?com=company&act=man1".$chuoi_noi_curpage);
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=company&act=man1".$chuoi_noi_curpage);
	}else{						
		$data['com'] = 'toado';
		
		$data['ten_vi'] = magic_quote($_POST['ten_vi']);
		$data['diachi_vi'] = magic_quote($_POST['diachi_vi']);
		$data['dienthoai'] = magic_quote($_POST['dienthoai']);
		$data['website'] = magic_quote($_POST['website']);
		$data['title_vi'] = magic_quote($_POST['title_vi']);
		
		$data['stt'] = magic_quote($_POST['stt']);
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		
		$d->setTable('company');
		if($d->insert($data))
			redirect("index.php?com=company&act=man1");
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=company&act=man1".$chuoi_noi_curpage);
	}
}

function delete_item1(){
	global $d;
	
	if(isset($_GET['id'])){
		$id =  intval($_GET['id']);				
		$sql = "delete from #_company where id='".$id."' and com='toado'";
		
		if($d->query($sql))
			redirect("index.php?com=company&act=man1".$chuoi_noi_curpage);
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=company&act=man1".$chuoi_noi_curpage);
	}else transfer("Không nhận được dữ liệu", "index.php?com=company&act=man1".$chuoi_noi_curpage);
}


?>