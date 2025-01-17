<?php	if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die("Error");

$act = (isset($_REQUEST['act'])) ? magic_quote($_REQUEST['act']) : "";

$chuoi_noi_curpage = ((@$_REQUEST['search']!="")?("&search=".$_REQUEST['search'].""):"").(($_REQUEST['curPage']!='')?'&curPage='.$_REQUEST['curPage']:'');

switch($act){
	//$c là biến lưu vào com để phân biệt tin tức -> là các số từ 0-99, $act là $_REQUEST['act'] của mỗi tin tức;
	//$width: độ rộng ảnh thumb , $height: độ cao ảnh thumb , $truonghop: là các trường hợp 1,2,3 khi tạo ảnh thumb.

	//--TIN TỨC-----------------------------------
	case "man":
		gets();
		$template = "khuyenmai/item";
		break;
	case "add":
		$template = "khuyenmai/item_add";
		break;
	case "edit":
		get();
		$template = "khuyenmai/item_add";
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
	
		// thaydoi_hienthi('tinhtrang','table_khuyenmai','khuyenmai','man',$chuoi_noi_curpage);
	
	if($_REQUEST['tinhtrang']!='')
	{

		$id_up=$_REQUEST['tinhtrang'];
	
		$sql_up="select * from #_khuyenmai where id=".$id_up;
		$d->query($sql_up);
		$cats=$d->fetch_array();	
		$spdc1=$cats['tinhtrang'];
		if($spdc1==0){

			$khuyenmai=strtoupper(ChuoiNgauNhien(8));
			$ngaykichhoat=time();
			$songay=$cats['songaysudung'];

			$ngayhethan=$ngaykichhoat + $songay*24*60*60;

			

			$sqlUPDATE_ORDER = "UPDATE table_khuyenmai SET tinhtrang = 1,khuyenmai='$khuyenmai',ngaykichhoat='$ngaykichhoat',ngayhethan='$ngayhethan' WHERE  id = ".$id_up."";
			$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");









		}
		else{
			$sqlUPDATE_ORDER = "UPDATE table_khuyenmai SET tinhtrang = 0  WHERE  id = ".$id_up."";
			$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");	
		}	
		redirect("index.php?com=khuyenmai&act=man".$chuoi_noi_curpage);	
	}



	$sql = "select * from #_khuyenmai  ";
	
	// if($_REQUEST['search']!=''){
	// 	$ten = magic_quote($_REQUEST['search']);
	// 	$ten = str_replace('%20',' ',$ten);
	// 	$sql.=" and ten like '%$ten%'";
	// }
	$sql .= " order by uutien asc";
	
	$d->query($sql);
	$items = $d->result_array();
	
	
}

function get(){
	global $d, $item, $chuoi_noi_curpage;
	$id = isset($_GET['id']) ? intval($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=khuyenmai&act=man".$chuoi_noi_curpage);
	






	$sql = "select * from #_khuyenmai where  id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=khuyenmai&act=man".$chuoi_noi_curpage);
	$item = $d->fetch_array();
}

function save(){
	global $d, $chuoi_noi_curpage;
	$file_name=q_tenhinh($_FILES['file']['name']);

	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=khuyenmai&act=man".$chuoi_noi_curpage);
	$id = isset($_POST['id']) ? intval($_POST['id']) : "";
		

	
	
$data['tieude'] =$_POST['tieude'];
$data['giatri'] =$_POST['giatri'];
$data['thoigianbatdau'] =$_POST['thoigianbatdau'];
$data['thoigianketthuc'] =$_POST['thoigianketthuc'];
$data['ngaytao']=time();
$data['loaigiam']=$_POST['loaigiam'];	
$data['tinhtrang']=1;	
	

$listsp=$_POST['listsp'];


$data['listsp']=$listsp;




	
	if($id){		



			if($photo = upload_image("file", 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF', _upload_khuyenmai,$file_name)){
			$data['photo'] = $photo;
	
			$d->setTable('khuyenmai');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_khuyenmai.$row['photo']);				
			}
		}									
		

		






		$d->setTable('khuyenmai');
		$d->setWhere('id', $id);

		if($d->update($data))
		{
			
				if($listsp!='')

				{
					
						$d->reset();
						$sql="select loaikm,id from #_product";
						$d->query($sql);
						$dssp=$d->result_array();
						foreach ($dssp as $v) {
							
								$listkm=$v['loaikm'];
								$listkm=explode(',', $listkm);
								

									for ($i=0; $i <count($listkm); $i++) { 
									
											if($listkm[$i]==$id)
											{
												unset($listkm[$i]);
												break;
											}

									}
								$listkm=implode(',', $listkm);

								$sqlup="update table_product set loaikm='$listkm' where id=".$v['id'];
								$d->query($sqlup);

						}

					$d->reset();
					$sql="select loaikm,id from #_product where id in ($listsp)";
					$d->query($sql);
					$dssp=$d->result_array();

					foreach ($dssp as $v) {
							
						if($v['loaikm']=='')
						{
							$sql1="update table_product set loaikm=".$id." where id=".$v['id'];

							$d->query($sql1);
						}
						else
						{

							$sql1="update table_product set loaikm=CONCAT(loaikm ,',',".$id.") where id=".$v['id'];

							$d->query($sql1);

						}
					}



				}


				transfer("Cập nhật dữ liệu thành công", "index.php?com=khuyenmai&act=man".$chuoi_noi_curpage);
		}
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=khuyenmai&act=man".$chuoi_noi_curpage);
	}else{		
	
		if($photo = upload_image("file", 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF', _upload_khuyenmai,$file_name)){
			$data['photo'] = $photo;
		}


		$thutu=$_POST['uutien'];
		$sqldem="select * from #_khuyenmai";
		$d->query($sqldem);
		$countkm=$d->result_array();

		
		$data['uutien']=count($countkm)+1;
		
	
	

		$d->setTable('khuyenmai');
		if($d->insert($data))

			{
				if($listsp!='')

				{

					$id_order = mysql_insert_id();
				
					
					$d->reset();
					$sql="select loaikm,id from #_product where id in ($listsp)";
					$d->query($sql);
					$dssp=$d->result_array();

					foreach ($dssp as $v) {
							
						if($v['loaikm']=='')
						{
							$sql1="update table_product set loaikm=".$id_order." where id=".$v['id'];

							$d->query($sql1);
						}
						else
						{

							$sql1="update table_product set loaikm=CONCAT(loaikm ,',',".$id_order.") where id=".$v['id'];

							$d->query($sql1);

						}
					}
				}
				
				

			transfer("Thêm khuyến mãi thành công", "index.php?com=khuyenmai&act=man");

			}		
					
			// redirect("index.php?com=khuyenmai&act=man");
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=khuyenmai&act=man".$chuoi_noi_curpage);
	}
}

function delete(){
	global $d, $chuoi_noi_curpage;
	
	if(isset($_GET['id'])){
		$id =  intval($_GET['id']);
		
		$d->reset();
		$sql = "select * from #_khuyenmai where id=$id ";
		$d->query($sql);
		if($d->num_rows()>0){
			
			$sql = "delete from #_khuyenmai where id=$id ";
			$d->query($sql);

			$sqlsp="select loaikm,id from #_product";
			$d->query($sqlsp);

			$dssp=$d->result_array();

			foreach ($dssp as $v) {
				
				$listkm=$v['loaikm'];

				$listkm=explode(',', $listkm);
				for ($i=0; $i <count($listkm); $i++) { 
									
						if($listkm[$i]==$id)
						{
							unset($listkm[$i]);
							break;
						}

				}
				$listkm=implode(',', $listkm);


				$sqlup="update table_product set loaikm='$listkm' where id=".$v['id'];
				$d->query($sqlup);

			}


		}
		
		if($d->query($sql))
			redirect("index.php?com=khuyenmai&act=man".$chuoi_noi_curpage);
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=khuyenmai&act=man".$chuoi_noi_curpage);
	}else transfer("Không nhận được dữ liệu", "index.php?com=khuyenmai&act=man".$chuoi_noi_curpage);
}

?>