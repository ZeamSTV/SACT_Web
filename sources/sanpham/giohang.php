<?php		



	$title_bar = "Giỏ hàng - ".$title_bar;

	$d->reset();

					$sql= "select photo,link from #_photo where hienthi=1 and id=395 ";

					$d->query($sql);

					$bannermuc = $d->fetch_array();

	if($_REQUEST['command']=='delete' && $_REQUEST['pid']>0){

		remove_product($_REQUEST['pid']);

	}

	else if($_REQUEST['command']=='clear'){

		unset($_SESSION['cart']);

	}

	else if($_REQUEST['command']=='update'){

		$max=count($_SESSION['cart']);

		for($i=0;$i<$max;$i++){

			$pid=$_SESSION['cart'][$i]['productid'];

	

			$q=intval($_REQUEST['product'.$pid]);


			
		







			if($q>0 && $q<=999){

				$_SESSION['cart'][$i]['qty']=$q;

			}

			else{

				$msg='Cập nhập sản phẩm bị lỗi, số sản phẩm phải từ 1-999';

			}







		}	







	}











		if($_REQUEST['command']=='update1'){

		$max=count($_SESSION['cart']);

		for($i=0;$i<$max;$i++){

			$pid=$_SESSION['cart'][$i]['productid'];

				$mausac=$_SESSION['cart'][$i]['mausacgh'];

			$q=intval($_REQUEST['product'.$pid.'_'.$mausac]);



		







			if($q>0 && $q<=999){

				$_SESSION['cart'][$i]['qty']=$q;

			}

			else{

				$msg='Cập nhập sản phẩm bị lỗi, số sản phẩm phải từ 1-999';

			}







		}





	}



	// if(isset($_POST['btnmauudai']))

	// {



	// 	$magiamgia=$_POST['magiamgia'];





	// 	$sql="select * from #_tinnho where maptext='".$magiamgia."' ";

	// 	$d->query($sql);

	// 	if($d->num_rows() == 1){



	// 			$giamgia=$d->fetch_array();

				

	// 			if(isset($_SESSION['magiamgia']))

	// 			{

	// 				transfer("Bạn đang sử dụng mã ưu đãi", "gio-hang.html");



				

	// 			}

	// 			else

	// 			{

	// 				 $_SESSION['magiamgia']=$giamgia['mota_vi'];

	// 				  $thongbao=$giamgia['ten_vi'];

	// 			}

				



				 

				  





	// 	} else



	// 	{



	// 		 transfer("Mã không hợp lệ", "gio-hang.html");

	// 	}



	// }

?>