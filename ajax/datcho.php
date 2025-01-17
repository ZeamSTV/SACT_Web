<?php

		@define ( '_lib' , '../admin/lib/');
	@define ( '_source' , '../sources/');
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";

	include_once _lib."class.database.php";
	$d = new database($config['database']);


		$hoten=$_POST['hoten'];
		$dienthoai=$_POST['dienthoai'];
		$diachi=$_POST['diachi'];

		$noidung=$_POST['noidung'];
		



		$d->reset();
		$sql = "insert into #_datcho (hoten,diachi,dienthoai,noidung) value('$hoten','$diachi','$dienthoai','$noidung')";
		



		if($d->query($sql)){	
		
				$d->reset();
				$data = null;
				$data['ten'] = 'Thông tin đặt chỗ: Khách hàng <b>'.$_POST['hoten'].'</b> mới gửi 1 mail vào email:'.$company["email"].' của công ty! <a href="index.php?com=donhang&act=man"> Xem </a>';
				$data['ngaytao'] = time();
				$d->setTable('thongbao');
				$d->insert($data);


				echo " Bạn đã đặt lịch thành công !!!"


		}

	
		


?>