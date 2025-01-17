<?php  if(!defined('_source')) die("Error");



	if(isset($_POST)){

			

		$sql="select * from #_product where hienthi=1";


		if($_POST['id_tinmoigioi']!='')
		{
				$sql.=" and tinmoigioi=1";
		}
		if($_POST['id_cat']!=''&&$_POST['id_cat']!=0){



			$sql.=" and id_cat=".$_POST['id_cat'];



		}



		$tukhoa=$_POST['txttukhoa'];

		if($tukhoa!='')

		{

			$sql.="and ten_vi like '%$tukhoa%'";

		}

		if($_POST['loainhadat']!=0){



				$sql.=" and id_cat1=".$_POST['loainhadat'];

		}

		if($_POST['id_tinh']!=0){



				$sql.=" and id_tinh=".$_POST['id_tinh'];

		}

		if($_POST['id_quan']!=0){



				$sql.=" and id_quan=".$_POST['id_quan'];

		}

		if($_POST['id_phuong']!=0){



				$sql.=" and id_phuong=".$_POST['id_phuong'];

		}

		if($_POST['id_duan']!=0){



				$sql.=" and id_duan=".$_POST['id_duan'];

		}

		if($_POST['vitri']!=0){



				$sql.=" and vitri='".$_POST['vitri']."' ";

		}

		if($_POST['huong']!=0){



				$sql.=" and huongnha='".$_POST['huongnha']."' ";

		}

		if($_POST['hientrang']!=0){



				$sql.=" and huongbancong='".$_POST['hientrang']."' ";

		}

		$dientich=$_POST['dientich'];



		if($dientich==1)

		{

			$sql.=" and dientich<=30";

		}elseif($dientich==2){

			$sql.=" and (dientich>30 and dientich<=50) ";

		}elseif($dientich==3){

			$sql.=" and (dientich>50 and dientich<=80) ";

		}

		elseif($dientich==4){

			$sql.=" and (dientich>80 and dientich<=100) ";

		}

		elseif($dientich==5){

			$sql.=" and (dientich>100 and dientich<=150) ";

		}

		elseif($dientich==6){

			$sql.=" and (dientich>150 and dientich<=200) ";

		}

		elseif($dientich==7){

			$sql.=" and (dientich>200 and dientich<=250) ";

		}

		elseif($dientich==8){

			$sql.=" and (dientich>250 and dientich<=300) ";

		}

		elseif($dientich==9){

			$sql.=" and (dientich>300 and dientich<=500) ";

		}

		elseif($dientich==10){

			$sql.=" and dientich>500 ";

		}

		if($_POST['sophong']!=0){



				$sql.=" and sophongngu='".$_POST['sophong']."' ";

		}

		$giaban=$_POST['gia'];

		if($giaban==1){

			$sql.=" and gia=0 ";



		}elseif($giaban==2){



					$sql.=" and gia<500000000 ";

		}

		elseif($giaban==3){



				$sql.=" and (gia<500000000 and gia<=800000000) ";

		}

		elseif($giaban==4){

				$sql.=" and (gia>800000000 and gia<=1000000000) ";

			

		}

		elseif($giaban==5){



					$sql.=" and (gia>1000000000 and gia<=2000000000) ";

		}

		elseif($giaban==6){



			$sql.=" and (gia>2000000000 and gia<=3000000000) ";

		}

		elseif($giaban==7){

			$sql.=" and (gia>3000000000 and gia<=5000000000) ";

			

		}elseif($giaban==8){



			$sql.=" and gia>5000000000 ";

		}

		$sql.=" order by ngaytao desc";

		$d->query($sql);

		$product=$d->result_array();

		

	$count_sp = count($product);

			

			$curPage = isset($_GET['p']) ? $_GET['p'] : '1';			

			$url = q_getCurrentPageURL();									

			$maxR=10;

			$maxP=10;

			$paging=paging_home1($product, $url, $curPage, $maxR, $maxP);

			$product=$paging['source'];


															

	}	

		$title_bar = "Tìm kiếm nâng cao - ".$title_bar;

?>