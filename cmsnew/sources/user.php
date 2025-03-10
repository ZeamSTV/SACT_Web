<?php	if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin();

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

switch($act){
	case "login":
		if(!empty($_POST)) login();
		$template = "user/login";
		break;
	case "admin_edit":
		edit();
		$template = "user/admin_add";
		break;
	case "logout":
		logout();
		break;	
		
	
	case "man":
		get_items();
		$template = "user/items";
		break;
	case "add":
		$template = "user/item_add";
		break;
	case "edit":
		get_item();
		$template = "user/item_add";
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
	if($_SESSION['login']['role']!='3'){
		transfer("Chỉ có admin mới được vào mục này . ", "index.php");
	}
	$sql = "select * from #_user where role=1 order by username";
	$d->query($sql);
	$items = $d->result_array();
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=user&act=man";
	$maxR=10;
	$maxP=4;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}

function get_item(){
	global $d, $item;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=user&act=man");
	
	$sql = "select * from #_user where id='".$id."' and role=1";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=user&act=man");
	$item = $d->fetch_array();
}

function save_item(){
	global $d;
	
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=user&act=man");
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	if($id){ // cap nhat
		$id =  themdau($_POST['id']);
		
		// kiem tra
		$d->reset();
		$d->setTable('user');
		$d->setWhere('id', $id);
		$d->select();
		if($d->num_rows()>0){
			$row = $d->fetch_array();
			if($row['role'] != 1) transfer("Bạn không có quyền trên tài khoản này.<br>Mọi thắc mắc xin liên hệ quản trị website.", "index.php?com=user&act=man");
		}
		
		$data['username'] = $_POST['username'];
		if($_POST['password']!="")
		$data['password'] = taomatkhau($_POST['password']);
		$data['email'] = $_POST['email'];
		$data['ten'] = $_POST['ten'];
		$data['sex'] = $_POST['sex'];
		$data['dienthoai'] = $_POST['dienthoai'];
		$data['nick_yahoo'] = $_POST['nick_yahoo'];
		$data['nick_skype'] = $_POST['nick_skype'];
		$data['diachi'] = $_POST['diachi'];
		$data['congty'] = $_POST['congty'];
		$data['country'] = $_POST['country'];
		$data['city'] = $_POST['city'];
		$data['quyen'] = $_POST['quyen'];
		$d->reset();
		$d->setTable('user');
		$d->setWhere('id', $id);
		$d->setWhere('role', 1);
		if($d->update($data))
			transfer("Dữ liệu đã được cập nhật", "index.php?com=user&act=man");
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=user&act=man");
	
	}else{ // them moi
	
		// kiem tra ten trung
		$d->reset();
		$d->setTable('user');
		$d->setWhere('username', $_POST['username']);
		$d->select();
		if($d->num_rows()>0) transfer("Tên dăng nhập nay đã có.<br>Xin chọn tên khác.", "index.php?com=user&act=edit&id=".$id);
		
		if($_POST['password']=="") transfer("Chưa nhập mật khẩu", "index.php?com=user&act=add");
		
		$data['username'] = $_POST['username'];
		$data['password'] =taomatkhau($_POST['password']);
		$data['email'] = $_POST['email'];
		$data['ten'] = $_POST['ten'];
		$data['sex'] = $_POST['sex'];
		$data['dienthoai'] = $_POST['dienthoai'];
		$data['nick_yahoo'] = $_POST['nick_yahoo'];
		$data['nick_skype'] = $_POST['nick_skype'];
		$data['diachi'] = $_POST['diachi'];
		$data['congty'] = $_POST['congty'];
		$data['country'] = $_POST['country'];
		$data['city'] = $_POST['city'];
		$data['quyen'] = $_POST['quyen'];
		$data['role'] = 1;
		$data['com'] = "user";
		
		$d->setTable('user');
		if($d->insert($data))
			transfer("Dữ liệu đã được lưu", "index.php?com=user&act=man");
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=user&act=man");
	}
}

function delete_item(){
	global $d;
	
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		
		// kiem tra
		$d->reset();
		$d->setTable('user');
		$d->setWhere('id', $id);
		$d->select();
		if($d->num_rows()>0){
			$row = $d->fetch_array();
			if($row['role'] != 1) transfer("Bạn không có quyền trên tài khoản này.<br>Mọi thắc mắc xin liên hệ quản trị website.", "index.php?com=user&act=man");
		}
		
		// xoa item
		$sql = "delete from #_user where id='".$id."'";
		if($d->query($sql))
			transfer("Dữ liệu đã được xóa", "index.php?com=user&act=man");
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=user&act=man");
	}else transfer("Không nhận được dữ liệu", "index.php?com=user&act=man");
}


///////////////////////
function edit(){
	global $d, $item, $login_name;
	$session_username = magic_quote($_SESSION['login']['username']);
	
	if(!empty($_POST)){
		$username = magic_quote($_POST['username']);		
		
		$sql = "select * from #_user where username!='$session_username' and username='$username' and role=3";
		$d->query($sql);
		if($d->num_rows() > 0) transfer("Tên đăng nhập này đã có","index.php?com=user&act=admin_edit");
		
		$sql = "select * from #_user where username='$session_username'";
		$d->query($sql);
		if($d->num_rows() == 1){
			$row = $d->fetch_array();
			if($row['password'] != taomatkhau($_POST['oldpassword'])) transfer("Mật khẩu không chính xác","index.php?com=user&act=admin_edit");
		}else{
			transfer("Tài khoản này không tồn tại, quý khách vui lòng kiểm tra lại!","index.php?com=user&act=admin_edit");
		}
		
		$data['username'] = $username;
		
		if($_POST['new_pass']!="") 
			$data['password'] = taomatkhau($_POST['new_pass']);		
		
		$d->reset();
		$d->setTable('user');
		$d->setWhere('username', $session_username);
		if($d->update($data)){
			$_SESSION[$login_name] = false;
			$_SESSION['isLoggedIn'] = false;
			unset($_SESSION['login']);
			unset($_SESSION['menu']);
			transfer("Dữ liệu đã được lưu, quý khách vui lòng thực hiện đăng nhập lại.","index.php");
		}
	}
	
	$sql = "select * from #_user where username='$session_username'";
	$d->query($sql);
	if($d->num_rows() == 1){
		$item = $d->fetch_array();
	}
}
	
function login(){
	global $d, $login_name;
	
	$username = htmlspecialchars(strip_tags(addslashes(trim($_POST['username']))));
	$username = magic_quote($username);
	$password = taomatkhau($_POST['password']);
	
	$sql = "select * from #_user where username='$username' and password='$password' ";
	$d->query($sql);
	$row=$d->fetch_array();
	if($d->num_rows() == 1){		
		$_SESSION[$login_name] = true;
		$_SESSION['isLoggedIn'] = true;
		$_SESSION['login']['role']=$row['role'];
		$_SESSION['login']['quyen']=$row['quyen'];
		$_SESSION['login']['username'] = $_POST['username'];
		$_SESSION['login']['password'] = $_POST['password'];
		transfer("Đăng nhập thành công","index.php");		
	}
	transfer("Tên đăng nhập, mật khẩu không chính xác", "index.php?com=user&act=login");
}

function logout(){
	global $login_name;
	$_SESSION[$login_name] = false;
	$_SESSION['isLoggedIn'] = false;
	unset($_SESSION['login']);
	unset($_SESSION['menu']);
	transfer("Đăng xuất thành công", "index.php?com=user&act=login");
}
?>