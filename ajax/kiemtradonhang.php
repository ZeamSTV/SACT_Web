<?php



		@define ( '_lib' , '../admin/lib/');
	@define ( '_source' , '../sources/');
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";

	include_once _lib."class.database.php";
	$d = new database($config['database']);


	$mahd=$_POST['mahd'];

		$data='';
		$sql="select * from table_donhang where madonhang='$mahd'";
		$d->query($sql);
			if($d->num_rows() == 1){


					$donhang=$d->fetch_array();

						$d->reset();
						$sql="select ten from table_product_phu where com='tinhtrang' and id= '".$donhang['trangthai']."' ";
							$d->query($sql);
							$result=$d->fetch_array();
							if($result['ten']==''){
								$d->reset();
								$sql="select ten from table_product_phu where com='tinhtrang' and noibat=1 order by stt,id desc";
								$d->query($sql);
								$result=$d->fetch_array();					
							}

				$data.='	<table class="table">
														<thead class="thead-dark" style="background: #333;
    color: #fff;">
														    <tr>
														      <th>ID</th>
														      <th>MÃ ĐƠN HÀNG</th>
														      <th>KHÁCH HÀNG</th>
														      <th>NGÀY ĐẶT</th>
														      <th>TỔNG TIỀN</th>
														      <th>TÌNH TRẠNG</th>
														      
														    </tr> 

														    </thead>
														    <tbody>
														    <tr>
														      <td>'.$donhang['id'].'</td>
														      <td>'.$donhang['madonhang'].'</td>
														      <td>'.$donhang['hoten'].'</td>
														      <td>'.date('d-m-Y',$donhang['ngaytao']).'</td>
														      <td>'.$donhang['tonggia'].'</td>
														      <td>'.$result['ten'].'</td>
														    
														    </tr>
														  	</tbody>
														  </table>';

			}


			else
			{	

				$data.='<p style="    color: red;
    text-align: center;
    border-bottom: 1px solid #000;
    padding-bottom: 5px;">Đơn hàng không tồn tại !</p>';

			}


echo $data;

?>