<?php  if(!defined('_source')) die("Error");		

	// thanh tieu de

	

	

	$title_bar = "Gửi Đơn Hàng - ".$title_bar;

	

	

	

	if(!empty($_POST)){

		







		if($_SESSION['login1']['id']!='')

		{

			if(isset($_POST['chondiachi'])){



		

				$sql="select * from #_taodiachi where id=".$_POST['chondiachi'];

				$d->query($sql);

				$diachi=$d->fetch_array();





				$hoten=$diachi['hoten'];

				$sdtnhanhang=$diachi['dienthoai'];

				$diachinhanhang=$diachi['diachi'].", ".get_quan($diachi['quan']).", ".get_tinh($diachi['tinh']);

				$email=$_SESSION['login1']['email'];

			





			}

			else

			{



				$hoten=$_POST['hotentt'];

				$diachinhanhang=$_POST['diachitt'].', '.$_POST['phuongtt'].', '.get_quan($_POST['quantt']).', '.get_tinh($_POST['tinhtt']);

				$sdtnhanhang=$_POST['sdttt'];

				$email=$_POST['emailtt'];

			}



		}

		else

		{



				$hoten=$_POST['hotentt'];

				$diachinhanhang=$_POST['diachitt'].', '.get_quan($_POST['quantt']).', '.get_tinh($_POST['tinhtt']);

				$sdtnhanhang=$_POST['sdttt'];

				$email=$_POST['emailtt'];



		}





















		$noidung=$_POST['noidungtt'];

		$ptgiaohang=$_POST['ptgiaonhan'];

		$ptthanhtoan=$_POST['ptthanhtoan'];

	//validate dữ liệu

	

	$hoten = trim(strip_tags($hoten));

	$sdtnhanhang = trim(strip_tags($sdtnhanhang));	

	$diachinhanhang = trim(strip_tags($diachinhanhang));	

	$email = trim(strip_tags($email));	

	$noidung = trim(strip_tags($noidung));	

	$ptgiaohang = trim(strip_tags($ptgiaohang));

	$ptthanhtoan = trim(strip_tags($ptthanhtoan));	

	





	$d->reset();

	$sql = "select * from #_product_phu where hienthi=1 and com='ptthanhtoan' and id=".$ptthanhtoan." order by stt asc, id desc";

	$d->query($sql);

	$pttt = $d->fetch_array();



		$d->reset();

	$sql = "select * from #_product_phu where hienthi=1 and com='ptgiaonhan' and id=".$ptgiaohang." order by stt asc, id desc";

	$d->query($sql);

	$ptgn = $d->fetch_array();















	// if (get_magic_quotes_gpc()==false) {

	// 	$hoten = mysql_real_escape_string($hoten);

	// 	$dienthoai = mysql_real_escape_string($dienthoai);

	// 	$diachi = mysql_real_escape_string($diachi);

	// 	$email = mysql_real_escape_string($email);

	// 	$noidung = mysql_real_escape_string($noidung);		

	// 	$ptgiaohang = mysql_real_escape_string($ptgiaohang);					

	// }

	





		$mahoadon=strtoupper(ChuoiNgauNhien(6));

	if($error_diachi!="")

		transfer($error_diachi, "thanh-toan.html");

	

	if ($coloi==FALSE) {

			

										

			 $body.='<style>

		table.sp_giohang

		{

			border-collapse:collapse; font-family:Verdana, Geneva, sans-serif; font-size: 11px;

		}

		table.sp_giohang , table.sp_giohang td, table.sp_giohang th

		{

			border:1px solid #CCC;

			padding:3px 5px;

			line-height:25px;

			

		}

		.h2_class{

			font-size:16px; font-weight:500; color:#000; text-decoration:underline; margin-bottom:5px; text-transform:uppercase;

			font-family: "RobotoCondensedRegular",Tahoma, Geneva, sans-serif;

		}

		</style> 

        <table border="1" style="border-collapse:collapse;border:1px solid #CCC;line-height:50px;width:100% "  class="sp_giohang">';

			if(is_array($_SESSION['cart']))

			{

            	$body.='<tr style="background:#3ab0e4;text-align:center;"><td align="center" style="font-weight:bold;color:#fff">STT</td><td style="font-weight:bold;color:#fff">Tên</td><td style="font-weight:bold;color:#fff">Hình ảnh</td><td align="center" style="font-weight:bold;color:#fff">Giá</td><td align="center" style="font-weight:bold;color:#fff">Số lượng</td><td align="center" style="font-weight:bold;color:#fff">Tổng giá</td></tr>';

				   $max=count($_SESSION['cart']);

				for($i=0;$i<$max;$i++){

				$pid=$_SESSION['cart'][$i]['productid'];

				$q=$_SESSION['cart'][$i]['qty'];    



				 $mausac= $_SESSION['cart'][$i]['mausacgh'];

				 $pname=get_product_name($pid,$lang);

					                                  

					              
					                                            



				 $pimg=get_product_img($pid);



					 if($q==0) continue;

            		$body.='<tr  bgcolor="#FFFFFF"><td width="5%" align="center">'.($i+1).'</td>';

            		$body.='<td style="text-align:center" width="20%">'.$pname;	



            		if($mausac!='') {

            		$body.='- Size:'.get_maugh($mausac);		



            		}

					$body.='</td>';

					$body.='<td style="text-align:center" width="25%"><img src="http://'.$config_url.'/'._upload_sanpham_l.$pimg;				

					$body.='" width="150"/></td>';

                    $body.='<td style="text-align:center" width="20%">'.number_format(get_price($pid),0, ',', '.').'&nbsp;VNĐ</td>';

                    $body.='<td style="text-align:center" width="14%">'.$q.'</td>';                 

                    $body.='<td style="text-align:center">'.number_format(get_price($pid)*$q,0, ',', '.') .'&nbsp;VNĐ</td>

                    </tr>

					<br/>';

				}

				$body.='<tr><td colspan="6">

              <table width="100%" cellpadding="0" cellspacing="0" border="0">

              <tr>

              <td style="text-align:left;"> '; 

               $body.=' <strong style="color:#bb0000;padding-left:1%;">Tổng giá bán: '. number_format(get_order_total(),0, ',', '.') .' &nbsp;VNĐ</strong> ';





               	if($_SESSION['phivanchuyen']>0)

               	{



               		$body.='( đã tính phí vận chuyện '.$_SESSION['phivanchuyen'].' đ) ';

               	}





               		if($_SESSION['magiamgia']>0)

               	{



               		$body.='( Bạn được giảm giá '.$_SESSION['magiamgia'].' đ trên tổng hóa đơn) ';

               	}







              $body.=' </td>

              <td align="right">&nbsp;</td>

             </tr>

             </table>   

                </td></tr>';

				$body.='<tr>

              <td colspan="6"><h2  style="font-size:15px;padding-left:13px; text-decoration:none; margin-bottom:5px; text-transform:uppercase;" >Thông tin khách hàng</h2></td>

            </tr>



            <tr>

              <td colspan="2" align="center" >Mã hóa đơn</td>

        

			    <td colspan="4" style="text-align: left;padding-left: 20px!important;">'.$mahoadon.'</td>

            </tr>

            <tr>

              <td colspan="2" align="center" >Họ tên<span>*</span></td>

        

			    <td colspan="4" style="text-align: left;padding-left: 20px!important;">'.$hoten.'</td>

            </tr>

            <tr>

              <td colspan="2" align="center">Điện thoại<span>*</span></td>

              <td colspan="4" style="text-align: left;padding-left: 20px!important;">'.$sdtnhanhang.'</td>

            </tr>

            <tr>

              <td colspan="2" align="center">Địa chỉ<span>*</span></td>

              <td colspan="4" style="text-align: left;padding-left: 20px!important;">'.$diachinhanhang.'</td>

            </tr>

            <tr>

              <td colspan="2" align="center">E-mail<span>*</span></td>

              <td colspan="4" style="text-align: left;padding-left: 20px!important;">'.$email.'</td>

            </tr>

            <tr>

              <td colspan="2" align="center">Nội dung</td>

              <td colspan="4" style="text-align: left;padding-left: 20px!important;">'.$noidung.'</td>

            </tr>';

	

				$body.='<tr><td colspan="6" align="left">

					<br /><h1 style="font-size:15px;padding-left:13px; text-decoration:none; margin-bottom:5px; text-transform:uppercase;" align="left" >Phương thức thanh toán</h1>						

					  </td>

					</tr>

				<tr><td colspan="6"  align="left">



					<table width="98%" style="margin:15px auto 0px;" class="sp_giohang" border="0" cellpadding="0" cellspacing="5">

						<tr bgcolor="#f6f6f6" style="font-weight:bold;color:#000;height: 25px;">

							<td ><b>Phương thức thanh toán</b></td>

										

						</tr>					  

					<tr>

						<td>

							'.$pttt['ten_vi'].'

						</td>

						<td >

						

						</td>						

					 </tr>					

						 </table>

				</td></tr>';



				$body.='<tr><td colspan="6" align="left">

					<br /><h1 style="font-size:15px;padding-left:13px; text-decoration:none; margin-bottom:5px; text-transform:uppercase;" align="left" >Phương thức giao nhận</h1>						

					  </td>

					</tr>

				<tr><td colspan="6"  align="left">



					<table width="98%" style="margin:15px auto 0px;" class="sp_giohang" border="0" cellpadding="0" cellspacing="5">

						<tr bgcolor="#f6f6f6" style="font-weight:bold;color:#000;height: 25px;">

							<td ><b>Phương thức giao nhận</b></td>

										

						</tr>					  

					<tr>

						<td>

							'.$ptgn['ten_vi'].'

						</td>

						<td >

						

						</td>						

					 </tr>					

						 </table>

				</td></tr>';

            }

			else{

				$body.='<tr bgColor="#FFFFFF"><td colspan="6" align="left" >Không có sản phẩm trong giỏ hàng!</td>';

			}

       $body.='</table>';

  			

			$body = $body;

			

			

		





			$macode=strtoupper(ChuoiNgauNhien(10));



			$ngaydangky=time();

			$idmember=$_SESSION['login1']['id'];





			// $ndtt=$pttt['ten_vi'];

			// $ndgn=$ptgn['ten_vi'];



			$tonggia=get_order_total();

			

			$sql = "INSERT INTO  table_donhang (idmember,madonhang,hoten,dienthoai,diachi,email,httt,tonggia,noidung,donhang,ngaytao,trangthai,pttt,ptgn) 

				  VALUES ('$idmember','$mahoadon','$hoten','$sdtnhanhang','$diachinhanhang','$email','$httt','$tonggia','$noidung','$body','$ngaydangky',5,'$ptthanhtoan','$ptgiaohang')";	

			

			// $sql1="INSERT INTO table_magiamgia (code) values('$macode')";







			mysqli_query($d->db,$sql) or die(mysqli_error());



			



			$id_order =  mysqli_insert_id($d->db);


			// $d->reset();
			// $sql="select id from #_product where hienthi=1 order by stt asc, id desc";
			// $d->query($sql);
			// $tongsp=$d->result_array();

			// $mangid=array();
			// foreach ($tongsp as $key => $v) {
			// 	$mangid[]=$v['id'];
			// }
		
			//  foreach ($_SESSION['cart'] as $item_cart) {
				 	
			// 	 	if(in_array($item_cart['productid'],$mangid)){


			// 	 		$sql="update table_product set kichco= kichco + ".$item_cart['qty']." where id=".$item_cart['productid'];
				 	
			// 	 		$d->query($sql);
			// 	 	}
				 
			// }	

			 // foreach ($_SESSION['cart'] as $item_cart) {



			 // 	$sl=$item_cart['sl']

    //         $d->reset();

    //         $sql = "select * from table_product where id='" . $item_cart['productid'] . "'";

    //         $d->query($sql);

    //         $item_pro = $d->fetch_array();







            



    //         $sql_order_detail = "INSERT INTO  table_order_detail (id_order,id_product,gia,soluong,mausac) 

				//   				VALUES (".$id_order.",".$item_pro['id'].",".$item_pro['gia'].",".$item_cart['qty'].",'".$item_cart['mausacgh']."')";

    //         mysql_query($sql_order_detail) or die(mysql_error());

    //     }

			

			

				 unset($_SESSION['cart']);				 				

				      unset($_SESSION['phivanchuyen']);
               unset($_SESSION['id_vanchuyen']);
				 unset($_SESSION['magiamgia']);	

				  unset($_SESSION['cauhinh']);	

				 include_once "./media/phpMailer/class.phpmailer.php";	

				$mail = new PHPMailer();

				$mail->IsSMTP(); // Gọi đến class xử lý SMTP

				$mail->Host       = $config_host; // tên SMTP server

				$mail->SMTPAuth   = true;                  // Sử dụng đăng nhập vào account

				$mail->Username   = $config_email; // SMTP account username

				$mail->Password   = $config_pass;  

		

				//Thiet lap thong tin nguoi gui va email nguoi gui

				$mail->SetFrom($config_email,$_POST['hotentt']);

		

				//Thiết lập thông tin người nhận

				$mail->AddAddress($company['email'], $company['ten_vi']);

				

				$mail->AddAddress($_POST['emailtt'],$_POST['hotentt']);

				//Thiết lập email nhận email hồi đáp

				//nếu người nhận nhấn nút Reply

				$mail->AddReplyTo($_POST['emailtt'],$_POST['hotentt']);

		

				/*=====================================

				 * THIET LAP NOI DUNG EMAIL

				*=====================================*/

		

				//Thiết lập tiêu đề

				$mail->Subject    = "Đơn Đặt Hàng Website - ".$company['ten_vi'];

				$mail->IsHTML(true);

				//Thiết lập định dạng font chữ

				$mail->CharSet = "utf-8";	

		

					$body1 = '<table>';

					$body1 .= '

						<tr>

							<th colspan="2">&nbsp;</th>

						</tr>

						<tr>

							<th colspan="2" style="color:#3ab0e4;font-weight:600;">Đơn hàng từ website <a href="http://'.$company['website'].'">'.$company['website'].'</a></th>

						</tr>

						<tr>

							<th colspan="2">&nbsp;</th>

						</tr>

					



						';

					$body1 .= '</table>';

					

					$body = $body1.$body;

					$body = str_replace('\n','',$body);

					$body = str_replace('\"','',$body);

					$mail->Body = $body;

					if($mail->Send()){

						



							if(isset($_POST['shipping-save-in-address-book']))

							{



								$d->reset();

								$data1['hoten']=$_POST['hotentt'];

								$data1['quan']=$_POST['quantt'];

								$data1['tinh']=$_POST['tinhtt'];

								$data1['diachi']=$_POST['diachitt'];

								$data1['dienthoai']=$_POST['sdttt'];

								$data1['id_user']=$_SESSION['login1']['id'];

								$data1['stt']=0;

								$d->setTable('taodiachi');

								$d->insert($data1);	

							}









								$d->reset();

								$data = null;

								$data['ten'] = 'Thông tin đặt hàng: Khách hàng <span style="font-weight:bold;">'.$_POST['hotentt'].'</span> mới gửi 1 mail vào email:'.$company["email"].' của công ty! <a href="index.php?com=donhang&act=man"> Xem </a>';

								$data['ngaytao'] = time();

								$d->setTable('thongbao');

								$d->insert($data);	









						





					transfer("Đơn hàng của bạn đã được gửi.<br>Cảm ơn.", "trang-chu.html");

					}

					else{

					 transfer("Đơn hàng của bạn đã được lưu.<br>Cảm ơn", "trang-chu.html");

					}

				 

				 transfer("Đơn hàng của bạn đã được gửi", "trang-chu.html");

				 

			}

			

	

	

	}

?>