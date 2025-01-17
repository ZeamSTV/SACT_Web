<?php	if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die("Error");

$act = (isset($_REQUEST['act'])) ? magic_quote($_REQUEST['act']) : "";

$chuoi_noi_curpage = ((@$_REQUEST['search']!="")?("&search=".$_REQUEST['search'].""):"").(($_REQUEST['curPage']!='')?'&curPage='.$_REQUEST['curPage']:'');

switch($act){
	//$c là biến lưu vào com để phân biệt tin tức -> là các số từ 0-99, $act là $_REQUEST['act'] của mỗi tin tức;
	//$width: độ rộng ảnh thumb , $height: độ cao ảnh thumb , $truonghop: là các trường hợp 1,2,3 khi tạo ảnh thumb.

	//--TIN TỨC-----------------------------------
	case "man":
		gets();
		$template = "com/items";
		break;
	case "add":
		$template = "com/item_add";
		break;
	case "edit":
		get();
		$template = "com/item_add";
		break;
	case "save":
		save();
		break;
	case "delete":
		delete();
		break;
	
	
	
	default:
		$template = "index";
}



function gets(){ 	//$c là biến lưu vào com để phân biệt tin tức, $act là $_REQUEST['act'] của mỗi tin tức;
thaydoi_hienthi('hienthi','table_com','com',$act,$chuoi_noi_curpage);
	global $d, $items, $paging, $chuoi_noi_curpage;
	
	$sql = "select * from #_com ";
	
	if($_REQUEST['search']!=''){
		$ten = magic_quote($_REQUEST['search']);
		$ten = str_replace('%20',' ',$ten);
		$sql.=" and ten like '%$ten%'";
	}
	$sql .= " order by id desc";
	
	$d->query($sql);
	$items = $d->result_array();
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=com1&act=man";
	if(isset($_REQUEST['search']))
		$url .= "&search=".$_REQUEST['search'];	
	$maxR=20;
	$maxP=4;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}

function get(){
	global $d, $item, $chuoi_noi_curpage;
	$id = isset($_GET['id']) ? intval($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=com1&act=man".$chuoi_noi_curpage);
	
	$sql = "select * from #_com where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=com1&act=man".$chuoi_noi_curpage);
	$item = $d->fetch_array();
}


function save(){
	global $d, $chuoi_noi_curpage;
	
	
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=com1&act=man".$chuoi_noi_curpage);
	$id = isset($_POST['id']) ? intval($_POST['id']) : "";
		
		if($id){
		
		$data['ten'] = magic_quote($_POST['ten']);
		$data['ten_com'] =magic_quote( $_POST['ten_com']);
		$data['act_com'] = magic_quote($_POST['act_com']);
				$data['act'] = magic_quote($_POST['act1']);
				$data['them'] = magic_quote($_POST['them']);
					$data['xoa'] = magic_quote($_POST['xoa']);
					$data['sua'] = magic_quote($_POST['sua']);
					$data['xem'] = magic_quote($_POST['xem']);
	$data['com'] = magic_quote($_POST['com1']);
		$data['danhmuc'] = isset($_POST['danhmuc']) ? 1 : 0;

		$data['stt'] = $_POST['stt'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		
		$d->setTable('com');
		$d->setWhere('id', $id);
		if($d->update($data))
			transfer("Dữ liệu đã được cập nhật", "index.php?com=com1&act=man");
		else
			transfer("Cập nhật dữ liệu bị lỗi ", "index.php?com=com1&act=man");
	}else{

		$data['ten'] = magic_quote($_POST['ten']);
		$data['ten_com'] =magic_quote($_POST['ten_com']);
		$data['act_com'] = magic_quote($_POST['act_com']);
			$data['act'] = magic_quote($_POST['act1']);
	$data['com'] = magic_quote($_POST['com1']);
		$data['them'] = magic_quote($_POST['them']);
					$data['xoa'] = magic_quote($_POST['xoa']);
					$data['sua'] = magic_quote($_POST['sua']);
					$data['xem'] = magic_quote($_POST['xem']);
		$data['stt'] = $_POST['stt'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['danhmuc'] = isset($_POST['danhmuc']) ? 1 : 0;
		
		$d->setTable('com');
		if($d->insert($data))
			transfer("Dữ liệu đã được lưu", "index.php?com=com1&act=man");
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=com1&act=man");
	}
}

function delete(){
	global $d;
        if(isset($_GET['id'])){
		$id =  intval($_GET['id']);
			$sql = "delete from #_com where id='".$id."'";
			$d->query($sql);
		if($d->query($sql))
			redirect("index.php?com=com1&act=man".$id_catt."");
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=com1&act=man");
	}else transfer("Không nhận được dữ liệu", "index.php?com=com1&act=man");

}


?>