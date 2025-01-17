<?php	if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die("Error");
$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

$chuoi_noi_curpage = ((@$_REQUEST['search']!="")?("&search=".$_REQUEST['search'].""):"").(($_REQUEST['curPage']!='')?'&curPage='.$_REQUEST['curPage']:'');

switch($act){
	case "man":
		get_mails();
		$template = "donhangnhanh/item";
		break;
	
	// case "add":
	// 	$template = "newsletter/item_add";
	// 	break;
	
	case "edit":		
		get_mail();
		$template = "donhangnhanh/item_add";
		break;	
		
	// case "send":		
	// 	send($config_host,$config_email,$config_pass);
	// 	break;
	
	// case "save":		
	// 	save_mail();
	// 	break;	
	
	case "delete":
		delete();
		break;	

		
	default:
		$template = "index";
}


function get_mails(){
	global $d, $items, $paging, $chuoi_noi_curpage;
	
	$sql = "select * from #_donhangnhanh ";
	
	if($_REQUEST['search']!=''){
		$ten = magic_quote($_REQUEST['search']);
		$ten = str_replace('%20',' ',$ten);
		$sql.=" and email like '%$ten%'";
	}
	$sql .= " order by id desc";
	
	$d->query($sql);
	$items = $d->result_array();
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=donhangnhanh&act=man";
	if(isset($_REQUEST['search']))
		$url .= "&search=".$_REQUEST['search'];	
	$maxR=20;
	$maxP=4;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}

function get_mail(){
	global $d, $item, $chuoi_noi_curpage;
	$id = isset($_GET['id']) ? intval($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=newsletter&act=man".$chuoi_noi_curpage);
	
	$sql = "select * from #_donhangnhanh where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=newsletter&act=man".$chuoi_noi_curpage);
	$item = $d->fetch_array();
}

function save_mail(){
	global $d, $chuoi_noi_curpage;
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=newsletter&act=man".$chuoi_noi_curpage);
	$id = isset($_POST['id']) ? intval($_POST['id']) : "";
	//Dùng chung
	$data['email'] = magic_quote($_POST['email']);
	$data['stt'] = magic_quote($_POST['stt']);
	$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
	
	if($id){

		$d->setTable('newsletter');
		$d->setWhere('id', $id);
		if($d->update($data))
				redirect("index.php?com=newsletter&act=man".$chuoi_noi_curpage);
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=donhangnhanh&act=man".$chuoi_noi_curpage);
	}else{
		
		$d->setTable('newsletter');
		if($d->insert($data))
			redirect("index.php?com=newsletter&act=man");
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=donhangnhanh&act=man".$chuoi_noi_curpage);
	}
}


function delete(){
	global $d, $chuoi_noi_curpage;
	if(isset($_GET['id'])){
		$id =  intval($_GET['id']);
		$sql = "delete from #_donhangnhanh where id='".$id."'";
		$d->query($sql);
		if($d->query($sql))
			redirect("index.php?com=donhangnhanh&act=man".$chuoi_noi_curpage);
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=donhangnhanh&act=man".$chuoi_noi_curpage);
	}else transfer("Không nhận được dữ liệu", "index.php?com=donhangnhanh&act=man".$chuoi_noi_curpage);
	
		
}




?>