<?php

		@define ( '_lib' , '../admin/lib/');
	@define ( '_source' , '../sources/');
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";

	include_once _lib."class.database.php";
	$d = new database($config['database']);




								if($_POST['id_hinhthuc']!='')


								{


											$d->reset();
				            					$sql = "select * from #_product_phu where hienthi=1 and com='ptthanhtoan' and id=".$_POST['id_hinhthuc']." order by stt asc, id desc";
												$d->query($sql);
												$ht = $d->fetch_array();
												echo $ht['mota_vi'];
								}

								else
								{
									echo 'Bạn chưa chọn hình thức thanh toán';
								}







?>

