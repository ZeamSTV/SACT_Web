<?php


		@define ( '_lib' , '../admin/lib/');
	@define ( '_source' , '../sources/');
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";

	include_once _lib."class.database.php";
	$d = new database($config['database']);

	@$key = $_POST['key'];
	
	$d->reset();
	$sql = "select * from #_product where hienthi=1 and ten_vi like '%$key%'";
	$d->query($sql);
	$product = $d->result_array();
	
	$data='';
	if(count($product)>0){


			$data.='<ul>';

				foreach ($product as $v) {
					

			$data.='<li>';
				$data.='<img src="'._upload_sanpham_l.$v['photo'].'"/>';
			$data.='<a href="san-pham/'.$v['tenkhongdau_vi'].'-'.$v['id'].'.htm">'.$v['ten_vi'].'</a>';

			$data.='<span>';
			$data.=($v['gia']!=0)?(number_format($v['gia'],0, ',', ',').' VND'):'Liên hệ' ;

			$data.='</span>';
			$data.='</li>';

				}



			$data.='</ul>';

	}
	 else
	{
			$data.='<p style="text-align:center;padding:10px">Không tìm thấy sản phẩm.</p>';
	}

	$result = array('data'=>$data,'key'=>$key);
echo json_encode($result);
?>