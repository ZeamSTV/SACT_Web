<?php

	function get_product_name($pid,$lang){

		global $d, $row,$row1;

		$sql = "select ten_$lang from #_product where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();	
		return $row['ten_'.$lang];

	}


	function get_donvitinh($pid,$lang){

		global $d, $row,$row1;

		$sql = "select dvt from #_product where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();	
		return $row['dvt'];

	}
	function get_khoiluong($pid,$lang){

		global $d, $row,$row1;

		$sql = "select khoiluong from #_product where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();	
		return $row['khoiluong'];

	}


	function get_masp($pid){

		global $d, $row;

		$sql = "select masp from #_product where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['masp'];

	}



	function get_idcat($pid){

		global $d, $row;

		$sql = "select id_cat from #_product where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['id_cat'];

	}



		function get_maugh($pid){

	

		global $d, $row;

		$sql = "select ten_vi,ten_en from #_tinnho where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['ten_en'];

	}

	

	

	function get_product_img($pid){

		global $d, $row;

		$sql = "select photo from #_product where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['photo'];

	}

	

	function get_price($pid){

		global $d, $row;

		$sql = "select * from table_product where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();



		if($row['loaikm']!='') 

		{

					$ktkm=kiemtrakhuyenmai($pid);

					if($ktkm>0) {



									  $chuoikm=$row['loaikm'];

                                          $d->reset();

                                          $sql="select * from #_khuyenmai where id in ($chuoikm) order by uutien asc";

                                          $d->query($sql);

                                          $thutu=$d->result_array();





                                            foreach ($thutu as $v1) {

                                          



                                            $d->reset();

                                            $sql="select * from #_khuyenmai where id=".$v1['id'];

                                            $d->query($sql);

                                            $khuyenmai=$d->fetch_array();





                                     	

                                $tgbd=strtotime(date($khuyenmai['thoigianbatdau']));

                                $tgkt=strtotime(date($khuyenmai['thoigianketthuc']));



                                $tght=strtotime(date('Y-m-d'));

                                 if( $tght>=$tgbd && $tght<=$tgkt)

                               	 {



			                  		$giagiohang = gettienkhuyenmai($row['id'],$v1['id']);

			                  		 break;

			                	  }





            				  }



            	}

            	else

            	{

            		$giagiohang = $row['gia'];

            	}



		}

	

		else

		{





			$giagiohang = $row['gia'];



		}





			















			

		

		

		return $giagiohang;

	}

	function remove_product($pid){

		$pid=intval($pid);

		$max=count($_SESSION['cart']);

		for($i=0;$i<$max;$i++){

			if($pid==$_SESSION['cart'][$i]['productid']){

				unset($_SESSION['cart'][$i]);

				break;

			}

		}

		$_SESSION['cart']=array_values($_SESSION['cart']);

	}

		function remove_productall(){



				unset($_SESSION['cart']);

		}

	function get_order_total(){

			

			$max=count($_SESSION['cart']);

			$sum=0;

		

		for($i=0;$i<$max;$i++){

			$pid=$_SESSION['cart'][$i]['productid'];

				$q=$_SESSION['cart'][$i]['qty'];

		

				$price=get_price($pid);

			

				

				 $sum+= ($price*$q);



				 	

			 

		}



		

		



		if($_SESSION['magiamgia'])

		{

			$magiam=$_SESSION['magiamgia'];

			$sum=$sum-$magiam;

		}

		if($_SESSION['phivanchuyen'])

		{

			

			$sum+=$_SESSION['phivanchuyen'];

		}

		return $sum;

	}

		

	

	function get_order_total1(){

			

		

		$max=count($_SESSION['cart']);

		$sum=0;

		

		for($i=0;$i<$max;$i++){

			$pid=$_SESSION['cart'][$i]['productid'];

				$q=$_SESSION['cart'][$i]['qty'];

		

				$price=get_price($pid);

			

				

				 $sum+= ($price*$q);



				 	

			 

		}



		



	

	

		return $sum;

		}

	function get_total(){



		$sum=0;



			if(isset($_SESSION['cart']))

			{

				$max=count($_SESSION['cart']);

		

				for($i=0;$i<$max;$i++){

					$pid=$_SESSION['cart'][$i]['productid'];

					$q=$_SESSION['cart'][$i]['qty'];

					$sum+=$q;

				}

			}

		

		return $sum;

	}

	

	

	function addtocart($pid,$q,$mausacgh){

		

		if($pid<1 or $q<1) return;

		

		if(is_array($_SESSION['cart'])){

			

			if(product_exists($pid,$q,$mausacgh)) return;

			$max=count($_SESSION['cart']);

			$_SESSION['cart'][$max]['productid']=$pid;

			$_SESSION['cart'][$max]['qty']=$q;



		}

		else{

			$_SESSION['cart']=array();

			$_SESSION['cart'][0]['productid']=$pid;

			 $_SESSION['cart'][0]['qty']=$q;

			



			 

			 

			

			

		}

	}

	function product_exists($pid,$q){

		$pid=intval($pid);

		$max=count($_SESSION['cart']);

		$flag=0;

		for($i=0;$i<$max;$i++){

			if($pid==$_SESSION['cart'][$i]['productid']){

				$_SESSION['cart'][$i]['qty'] += $q; 

				$flag=1;

				break;

			}

		}

		return $flag;

	}



?>