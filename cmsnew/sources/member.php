<?php	if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die("Error");

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

#=========TIN TỨC==================================================
$chuoi_noi = ((@$_REQUEST['id_cat']!="")?("&id_cat=".$_REQUEST['id_cat'].""):"").((@$_REQUEST['id_cat1']!="")?("&id_cat1=".$_REQUEST['id_cat1'].""):"").((@$_REQUEST['id_cat2']!="")?("&id_cat2=".$_REQUEST['id_cat2'].""):"");
$chuoi_noi_curpage = ((@$_REQUEST['search']!="")?("&search=".$_REQUEST['search'].""):"").$chuoi_noi.((@$_REQUEST['curPage']!="")?("&curPage=".$_REQUEST['curPage'].""):"");
#=========DANH MỤC CẤP 1 ================================	
$chuoi_noi_curpage1 = ((@$_REQUEST['search']!="")?("&search=".$_REQUEST['search'].""):"").((@$_REQUEST['curPage']!="")?("&curPage=".$_REQUEST['curPage'].""):"");
#======DANH MỤC CẤP 2====================================
$chuoi_noi2 = ((@$_REQUEST['id_cat']!="")?("&id_cat=".$_REQUEST['id_cat'].""):"");
$chuoi_noi_curpage2 = ((@$_REQUEST['search']!="")?("&search=".$_REQUEST['search'].""):"").$chuoi_noi2.((@$_REQUEST['curPage']!="")?("&curPage=".$_REQUEST['curPage'].""):"");
#==========DANH MỤC CẤP 3================================	
$chuoi_noi3 = ((@$_REQUEST['id_cat']!="")?("&id_cat=".$_REQUEST['id_cat'].""):"").((@$_REQUEST['id_cat1']!="")?("&id_cat1=".$_REQUEST['id_cat1'].""):"");
$chuoi_noi_curpage3 = ((@$_REQUEST['search']!="")?("&search=".$_REQUEST['search'].""):"").$chuoi_noi3.((@$_REQUEST['curPage']!="")?("&curPage=".$_REQUEST['curPage'].""):"");




switch($act){	
	case "man":
		get_items();
		$template = "member/items";
		break;
	case "add":
		$template = "member/item_add";
		break;
	case "edit":
		get_item();
		$template = "member/item_add";
		break;
	case "save":
		save_item();
		break;
	case "delete":
		delete_item();
		break;
	default:
		$template = "index";
}

//////////////////
function get_items(){
	global $d, $items, $paging;
	
	if($_REQUEST['hienthi']!='')
	{
		$id_up = $_REQUEST['hienthi'];
		$sql_sp = "SELECT id,hienthi FROM table_member where id='".$id_up."' ";
		$d->query($sql_sp);
		$cats= $d->result_array();
		$spdc1=$cats[0]['hienthi'];
		if($spdc1==0)
		{
			$sqlUPDATE_ORDER = "UPDATE table_member SET hienthi =1 WHERE  id = ".$id_up."";
			$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
		}
		else
		{
			$sqlUPDATE_ORDER = "UPDATE table_member SET hienthi =0  WHERE  id = ".$id_up."";
			$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	
		}	
		redirect("index.php?com=member&act=man".((@$_REQUEST['curPage']!="")?("&curPage=".$_REQUEST['curPage'].""):""));			
	}
	
	
	$sql = "select * from #_member where id >0 ";
	
	if($_REQUEST['search']!=''){
		$ten = magic_quote($_REQUEST['search']);
		$ten = str_replace('%20',' ',$ten);
		$sql.=" and ten like '%$ten%'";
	}
	
	$sql .= " order by id desc";
	$d->query($sql);
	$items = $d->result_array();
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=member&act=man";
	$maxR=17;
	$maxP=4;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}

function get_item(){
	global $d, $item;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=member&act=man");
	
	$sql = "select * from #_member where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=member&act=man");
	$item = $d->fetch_array();
}

function save_item(){
		global $d,$chuoi_noi, $chuoi_noi_curpage;;
	
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=member&act=man");
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
			$file_name=q_tenhinh($_FILES['file']['name']);
		$file_name1=q_tenhinh($_FILES['file1']['name']);
	if($id){ // cap nhat




		if($photo = upload_image("file", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF|webp|WEBP|svg|SVG',_upload_member,$file_name)){
			$data['photo'] = $photo;
		
			$d->setTable('member');
			$d->setWhere('id', $id);
			
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_member.$row['photo']);
		
			}
		}			


		if($photo1 = upload_image("file1", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF|doc|DOC|docx|DOCX|pdf|PDF|xlsx|XLSX|webp|WEBP|svg|SVG',_upload_member,$file_name1)){
			$data['photo1'] = $photo1;
		
			$d->setTable('member');
			$d->setWhere('id', $id);
	
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_member.$row['photo1']);
				
			}
		}







	
		$id =  themdau($_POST['id']);
	


		// kiem tra
		$d->reset();
		$d->setTable('member');
		$d->setWhere('id', $id);
		$d->select();
		if($d->num_rows()>0){
			$row = $d->fetch_array();
			
			
			if($row['role'] != 1) transfer("Bạn không có quyền trên tài khoản này.<br>Mọi thắc mắc xin liên hệ quản trị website.", "index.php?com=member&act=man");
		}
		
		if($_POST['password']!="")

		$data['ten'] = $_POST['email'];
		$data['ngaysinh'] = $_POST['ngaysinh'];
		$data['email'] = $_POST['email'];		
		$data['password'] = md5($_POST['password']);
		$data['diachi'] = $_POST['diachi'];
		$data['dienthoai'] = $_POST['dienthoai'];
		$data['loaicmnd'] = $_POST['loaicmnd'];
		$data['cmnd'] = $_POST['cmnd'];
		$data['ngaycap'] = $_POST['ngaycap'];
		$data['noicap'] = $_POST['noicap'];
		$data['tknh'] = $_POST['tknh'];
		$data['nganhang'] = $_POST['nganhang'];		
	
		$data['role'] = 1;

		$data['stt'] = $_POST['stt'];
		
		
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;	
		
		$d->reset();
		$d->setTable('member');
		$d->setWhere('id', $id);
		if($d->update($data))
			transfer("Dữ liệu đã được cập nhật", "index.php?com=member&act=man".$chuoi_noi_curpage);
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=member&act=man".$chuoi_noi_curpage);
	
	}else{ // them moi
	
		// kiem tra ten trung
		$d->reset();
		$d->setTable('member');
		$d->setWhere('email', $_POST['email']);
		$d->select();
		if($d->num_rows()>0) transfer("Email dăng nhập này đã tồn tại.<br>Xin chọn Email khác.", "index.php?com=member&act=add");
		
		if($_POST['password']=="") transfer("Chưa nhập mật khẩu", "index.php?com=member&act=add");
		if($_POST['password']!="")
		$data['password'] = md5($_POST['password']);
		$data['ten'] = $_POST['email'];
		$data['ngaysinh'] = $_POST['ngaysinh'];
		$data['email'] = $_POST['email'];		
		
		$data['diachi'] = $_POST['diachi'];
		$data['dienthoai'] = $_POST['dienthoai'];
		$data['loaicmnd'] = $_POST['loaicmnd'];
		$data['cmnd'] = $_POST['cmnd'];
		$data['ngaycap'] = $_POST['ngaycap'];
		$data['noicap'] = $_POST['noicap'];
		$data['tknh'] = $_POST['tknh'];
		$data['nganhang'] = $_POST['nganhang'];		
	
		$data['stt'] = $_POST['stt'];
		$data['role'] = 1;

		if($photo = upload_image("file", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF|webp|WEBP|svg|SVG',_upload_member,$file_name)){
			$data['photo'] = $photo;

		}	

		if($photo1 = upload_image("file1", 'jpg|png|gif|jpeg|JPEG|JPG|PNG|GIF|doc|DOC|docx|DOCX|pdf|PDF|xlsx|XLSX|webp|WEBP|svg|SVG',_upload_member,$file_name1)){
			$data['photo1'] = $photo1;
			
		}	











		
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;	
		$d->setTable('member');
		if($d->insert($data))
			transfer("Dữ liệu đã được lưu", "index.php?com=member&act=man".$chuoi_noi_curpage);
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=member&act=man".$chuoi_noi_curpage);
	}
}

function delete_item(){
	global $d;
	
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		
		// kiem tra
		$d->reset();
		$d->setTable('member');
		$d->setWhere('id', $id);
		$d->select();
		if($d->num_rows()>0){
			$row = $d->fetch_array();
			if($row['role'] != 1) transfer("Bạn không có quyền trên tài khoản này.<br>Mọi thắc mắc xin liên hệ quản trị website.", "index.php?com=member&act=man");
		}
		
		// xoa item
		$sql = "delete from #_member where id='".$id."'";
		if($d->query($sql))
			transfer("Dữ liệu đã được xóa", "index.php?com=member&act=man");
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=member&act=man");
	}else transfer("Không nhận được dữ liệu", "index.php?com=member&act=man");
}



?>