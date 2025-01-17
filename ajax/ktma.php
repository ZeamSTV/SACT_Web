<?php

  session_start();
    error_reporting(E_ALL & ~E_NOTICE & ~8192);
    
    if(!isset($_SESSION['lang']))
    {
    $_SESSION['lang']='vi';
    }
    
    $lang=$_SESSION['lang'];
    
    @define ( '_lib' , '../admin/lib/');
    @define ( '_source' , '../sources/');
    include_once _lib."config.php";
    include_once _lib."constant.php";
    // require_once _source."lang_$lang.php";
    include_once _lib."functions.php";
        include_once _lib."tridepzai.php";
    include_once _lib."functions_giohang.php";
    include_once _lib."class.database.php";
    $d = new database($config['database']);


    @$magiamgia=$_POST['ma'];

    if($_SESSION['login1']['id'])
    {

    	$ngayhientai=time();
    	$sql="select * from #_magiamgia where magiamgia='".$magiamgia."' ";
		$d->query($sql);
		if($d->num_rows() == 1){

				$giamgia=$d->fetch_array();
				
				if(isset($_SESSION['magiamgia']))
				{
					 $thongbao= "<span style='color:#7a9c59'>+ Phiếu giảm giá '".$magiamgia."' đã được kích hoạt </span>";

				
				}
				else
				{


					
						if(get_order_total1()>=$giamgia['giatridonhangtoithieu'])
						{
									if($ngayhientai<=$giamgia['ngayhethan'])
								{
									if($giamgia['dasudung']<$giamgia['soluot'])
									{
										$_SESSION['magiamgia']=$giamgia['giatrimagiamgia'];
										$thongbao= "<span style='color:#7a9c59'>+ Phiếu giảm giá '".$magiamgia."' đã được kích hoạt </span>";

										$updatema="update table_magiamgia set dasudung=dasudung+1 where magiamgia='".$_POST['ma']."'";
										$d->query($updatema);
									}
									else
									{
										 $thongbao= "<span style='color:#b20000'>Mã giảm giá đã hết lượt sử dụng </span>";
									}
								}
								else
								{

									 $thongbao= "<span style='color:#b20000'>Mã giảm giá đã hết thời gian sử dụng </span>";

								}
						}
						else

						{

								 $thongbao=  "<span style='color:#b20000'>Tổng hóa đơn của bạn nhỏ hơn giá trị đơn hàng tối thiểu để được giảm giá</span>";
						}

						
				}
				

				 
				  


		} 
		else

		{

			$thongbao=  "<span style='color:#b20000'>+ Phiếu giảm giá '".$magiamgia."' không tồn tại</span>";
		}

	} 
	else
	{

		$thongbao=  "<span style='color:#b20000'>Bạn cần đăng nhập để sử dụng mã giảm giá</span>";
	}



$tongtien=get_order_total();



$data='';


$data.=' <div class="txt_giatien"  >'.number_format($tongtien,0, ',', ',').' ₫</div>';





$result = array('datatien'=>$data,'thongbao'=>$thongbao);
echo json_encode($result);


?>