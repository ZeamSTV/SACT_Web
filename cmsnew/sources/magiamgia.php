<?php	if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die("Error");

$act = (isset($_REQUEST['act'])) ? magic_quote($_REQUEST['act']) : "";

$chuoi_noi_curpage = ((@$_REQUEST['search']!="")?("&search=".$_REQUEST['search'].""):"").(($_REQUEST['curPage']!='')?'&curPage='.$_REQUEST['curPage']:'');

switch($act){
	//$c là biến lưu vào com để phân biệt tin tức -> là các số từ 0-99, $act là $_REQUEST['act'] của mỗi tin tức;
	//$width: độ rộng ảnh thumb , $height: độ cao ảnh thumb , $truonghop: là các trường hợp 1,2,3 khi tạo ảnh thumb.

	//--TIN TỨC-----------------------------------
	case "man":
		gets();
		$template = "magiamgia/item";
		break;
	case "add":
		$template = "magiamgia/item_add";
		break;
	case "edit":
		get();
		$template = "magiamgia/item_add";
		break;
	case "save":
		save();
		break;
	case "delete":
		delete();
		break;
	

}

#==TIN TỨC==================================
//$c là biến lưu vào com để phân biệt tin tức -> là các số từ 0-99, $act là $_REQUEST['act'] của mỗi tin tức;
//$width: độ rộng ảnh thumb , $height: độ cao ảnh thumb , $truonghop: là các trường hợp 1,2,3 khi tạo ảnh thumb.

function gets(){ 	//$c là biến lưu vào com để phân biệt tin tức, $act là $_REQUEST['act'] của mỗi tin tức;
	global $d, $items, $paging, $chuoi_noi_curpage;
	
		// thaydoi_hienthi('tinhtrang','table_magiamgia','magiamgia','man',$chuoi_noi_curpage);
	
	if($_REQUEST['tinhtrang']!='')
	{

		$id_up=$_REQUEST['tinhtrang'];
	
		$sql_up="select * from #_magiamgia where id=".$id_up;
		$d->query($sql_up);
		$cats=$d->fetch_array();	
		$spdc1=$cats['tinhtrang'];
		if($spdc1==0){

			$magiamgia=strtoupper(ChuoiNgauNhien(8));
			$ngaykichhoat=time();
			$songay=$cats['songaysudung'];

			$ngayhethan=$ngaykichhoat + $songay*24*60*60;

			

			$sqlUPDATE_ORDER = "UPDATE table_magiamgia SET tinhtrang = 1,magiamgia='$magiamgia',ngaykichhoat='$ngaykichhoat',ngayhethan='$ngayhethan' WHERE  id = ".$id_up."";
			$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");









		}
		else{
			$sqlUPDATE_ORDER = "UPDATE table_magiamgia SET tinhtrang = 0  WHERE  id = ".$id_up."";
			$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");	
		}	
		redirect("index.php?com=magiamgia&act=man".$chuoi_noi_curpage);	
	}



	$sql = "select * from #_magiamgia  ";
	
	// if($_REQUEST['search']!=''){
	// 	$ten = magic_quote($_REQUEST['search']);
	// 	$ten = str_replace('%20',' ',$ten);
	// 	$sql.=" and ten like '%$ten%'";
	// }
	$sql .= " order by id desc";
	
	$d->query($sql);
	$items = $d->result_array();
	
	
}

function get(){
	global $d, $item, $chuoi_noi_curpage;
	$id = isset($_GET['id']) ? intval($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=magiamgia&act=man".$chuoi_noi_curpage);
	
	$sql = "select * from #_magiamgia where  id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=magiamgia&act=man".$chuoi_noi_curpage);
	$item = $d->fetch_array();
}

function save(){
	global $d, $chuoi_noi_curpage;


	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=magiamgia&act=man".$chuoi_noi_curpage);
	$id = isset($_POST['id']) ? intval($_POST['id']) : "";
		

	
	
$data['giatrimagiamgia'] =$_POST['giatrima'];

$data['giatridonhangtoithieu'] =$_POST['giatridonhang'];
$data['soluot'] =$_POST['soluot'];
$data['dasudung'] =0;
$data['songaysudung'] =$_POST['songaysudung'];
$data['ngaytao']=time();
	$data['tinhtrang']=0;	
	if($id){		

		$d->setTable('magiamgia');
		$d->setWhere('id', $id);

		if($d->update($data))
				transfer("Cập nhật dữ liệu thành công", "index.php?com=magiamgia&act=man".$chuoi_noi_curpage);
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=magiamgia&act=man".$chuoi_noi_curpage);
	}else{		
	
		

		$d->setTable('magiamgia');
		if($d->insert($data))
			redirect("index.php?com=magiamgia&act=man");
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=magiamgia&act=man".$chuoi_noi_curpage);
	}
}

function delete(){
	global $d, $chuoi_noi_curpage;
	
	if(isset($_GET['id'])){
		$id =  intval($_GET['id']);
		
		$d->reset();
		$sql = "select * from #_magiamgia where id=$id ";
		$d->query($sql);
		if($d->num_rows()>0){
			
			$sql = "delete from #_magiamgia where id=$id ";
			$d->query($sql);
		}
		
		if($d->query($sql))
			redirect("index.php?com=magiamgia&act=man".$chuoi_noi_curpage);
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=magiamgia&act=man".$chuoi_noi_curpage);
	}else transfer("Không nhận được dữ liệu", "index.php?com=magiamgia&act=man".$chuoi_noi_curpage);
}

?>