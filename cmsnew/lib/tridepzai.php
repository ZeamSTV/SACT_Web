<?php if(!defined('_lib')) die("Error");



function is_https(){
    if ( ! empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off')
    {
        return TRUE;
    }
    elseif (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')
    {
        return TRUE;
    }
    elseif ( ! empty($_SERVER['HTTP_FRONT_END_HTTPS']) && strtolower($_SERVER['HTTP_FRONT_END_HTTPS']) !== 'off')
    {
        return TRUE;
    }
    return FALSE;
}

function get_URL(){
	 if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];   
    return $url;
}

function ob_html_compress($buf){
    return str_replace(array("\n","\r","\t"),'',$buf);
}


function minify_output($buffer) {
        $search = array(
            '/\>[^\S ]+/s',
            '/[^\S ]+\</s',
            '/(\s)+/s'
        );
        $replace = array(
            '>',
            '<',
            '\\1'
        );

        if (preg_match("/\<html/i", $buffer) == 1 && preg_match("/\<\/html\>/i", $buffer) == 1) {
            $buffer = preg_replace($search, $replace, $buffer);
        }

        return $buffer;
    }



    

function mautin($value)

{

	$kq='';

	switch ($value) {

		case '1':

			$kq="style='color:#68CDF7' ";

			break;

		case '2':

			$kq="style='color:#068009' ";

			break;
		case '3':

			$kq="style='color:#0068ff' ";

			break;
		case '4':

			$kq="style='color:#ff6803' ";

			break;
		case '5':

			$kq="style='color:#f00' ";

			break;

		

	

		

	}





echo $kq;





}
function mautin1($value)

{

	$kq='';

	switch ($value) {

		case '1':

			$kq="color:#68CDF7";

			break;

		case '2':

			$kq="color:#068009";

			break;
		case '3':

			$kq="color:#0068ff";

			break;
		case '4':

			$kq="color:#ff6803";

			break;
		case '5':

			$kq="color:#f00";

			break;

		

	

		

	}





echo $kq;





}
function is_email($str) {

    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;

}



function selectdate($id)

{





	$data='';











		for ($i=1; $i <=31 ; $i++) { 

		

       	 	 if($i==$id)

                $selected="selected";

              else 

                $selected="";



			$data.='<option value="'.$i.'" '.$selected.' title="'.htmlspecialchars($i).'">'.htmlspecialchars($i).'</option>';





		}



		echo $data;



}



function selectmonth($id)

{





	$data='';











		for ($i=1; $i <=12 ; $i++) { 

		

       	 	 if($i==$id)

                $selected="selected";

              else 

                $selected="";



			$data.='<option value="'.$i.'" '.$selected.' title="'.htmlspecialchars($i).'">'.htmlspecialchars($i).'</option>';





		}



		echo $data;



}

function selectyear($id)

{





	$data='';











		for ($i=1950; $i <=2018 ; $i++) { 

		

       	 	 if($i==$id)

                $selected="selected";

              else 

                $selected="";



			$data.='<option value="'.$i.'" '.$selected.' title="'.htmlspecialchars($i).'">'.htmlspecialchars($i).'</option>';





		}



		echo $data;



}





function modify_url($mod, $url ){

    $url_array = parse_url($url);



    // The original URL had a query string, modify it.

    if(!empty($url_array['query'])){

        parse_str($url_array['query'], $query_array);

        foreach ($mod as $key => $value) {

            if(!empty($query_array[$key])){

                $query_array[$key] = $value;

            }

        }

    }



    // The original URL didn't have a query string, add it.

    else{

        $query_array = $mod;

    }



    return $url_array['scheme'].'://'.$url_array['host'].'/'.$url_array['path'].'?'.http_build_query($query_array);

}









	function doi_product_order($value)

{

	$kq='';

	switch ($value) {

		case 'name':

			$kq='Tên sản phẩm';

			break;

		case 'position':

			$kq='Mới nhất';

			break;

		case 'priceasc':

			$kq='Giá';

			break;

		case 'promotion':

			$kq='Khuyến mãi';

			break;

		case 'topsale':

			$kq='Bán chạy';

			break;

		case 'highlight':

			$kq='Nổi bật';

			break;

	

		

	}





echo $kq;





}



	function doi_product_muc($value)

{

	$kq='';

	switch ($value) {

		case 'donvi':

			$kq='Đơn vị';

			break;

		case 'loaida':

			$kq='Loại da';

			break;

		case 'mausac':

			$kq='Màu sắc';

			break;

		case 'theloai':

			$kq='Thể loại';

			break;

		case 'dactinh':

			$kq='Đặc tính';

			break;

		case 'xuatxu':

			$kq='Xuất xứ';

			break;

		case 'quantam':

			$kq='Quan tâm';

			break;	

		case 'thuonghieu':

			$kq='Thương hiệu';

			break;

		case 'price':

			$kq='Giá';

			break;

		

	}





echo $kq;





}



function doi_tien_trieu($gia){

	





	if($gia>0 && $gia<1000000)

	{

			$kg=$gia/100000;

			$data=$kg.' Trăm nghìn';

	}else if($gia>=1000000 && $gia<1000000000)

	{

			$kg=$gia/1000000;

			$data=$kg.' Triệu';

	}else if($gia>=1000000000)

	{

		$kg=$gia/1000000000;

		$data=$kg.' Tỷ';



	}

	

	echo $data;

}

function jam_read_num_forvietnamese( $num = false ) {

    $str = '';

   

    
   if($num==0)
   {
   		  $str = 'Thỏa thuận';
   }else {

   	$num  = trim($num);
    $arr = str_split($num);

    $count = count( $arr );

    

    $f = number_format($num);

       //KHÔNG ĐỌC BẤT KÌ SỐ NÀO NHỎ DƯỚI 999 ngàn

    if ( $count < 7 ) {
    

    		  $str = $num;
    
      

    } else {

        // từ 6 số trở lên là triệu, ta sẽ đọc nó !

        // "32,000,000,000"
// "32,000,000,000,000"
        $r = explode(',', $f);

        switch ( count ( $r ) ) {

            case 5:

                $str = $r[0] . ' Nghìn';

                if ( (int) $r[1] ) { $str .= ' '. $r[1] . ' Tỷ'; }

            break;
            case 4:

                $str = $r[0] . ' Tỷ';

                if ( (int) $r[1] ) { $str .= ' '. $r[1] . ' Tr'; }

            break;

            case 3:

                $str = $r[0] . ' Triệu';

                if ( (int) $r[1] ) { $str .= ' '. $r[1] . 'K'; }

            break;

        }

    }


	}

    return ( $str  );

}

function changesao($so)

{



	switch ($so) {

		case '1':

			$kq='1.0';

			break;

		case '2':

			$kq='2.0';

			break;

			case '3':

			$kq='3.0';

			break;

			case '4':

			$kq='4.0';

			break;

			case '5':

			$kq='5.0';

			break;

			case '6':

			$kq='6.0';

			break;

			case '7':

			$kq='7.0';

			break;

			case '8':

			$kq='8.0';

			break;

			case '9':

			$kq='9.0';

			break;



		default:

			$kq=$so;

			break;

	}



	echo $kq;



}

function changethutu($so){
		global $d;
	$kq='';
		if($so<10)
		{
			$kq.='00'.$so;
		}elseif($so>=10&&$so<100){

			$kq.='0'.$so;
		}else
		{
			$kq.=$so;
		}

	return $kq;

}
function loaitin($loai){
		global $d;

		
	switch ($loai) {
		case 1:
		$kq='Tin thường';
		break;
		case 2:
		$kq='Tin ưu tiên';
		break;
		case 3:
		$kq='Tin nổi bật';
		break;
		case 4:
		$kq='Tin Vip';
		break;
		case 5:
		$kq='Tin đặc biệt';
		break;
	
	}

	return $kq;

}
/// kt km

function kiemtrakhuyenmai($id_sp){



	global $d;



	$sql="select loaikm from #_product where id=".$id_sp;

	$d->query($sql);

	$sp=$d->fetch_array();



	   $chuoikm=$sp['loaikm'];

                              $d->reset();

                              $sql="select * from #_khuyenmai where id in ($chuoikm) order by uutien asc";

                              $d->query($sql);

                              $thutu=$d->result_array();



                              $dem=0;

                              foreach ($thutu as $v) {







                                $d->reset();

                                $sql="select * from #_khuyenmai where id=".$v['id'];

                                $d->query($sql);

                                $khuyenmai=$d->fetch_array();







                                // $tgbd=$khuyenmai['thoigianbatdau'];

                                //   $tgbd=explode('-', $tgbd);

                                //  $tgkt=$khuyenmai['thoigianketthuc'];

                                //  $tgkt=explode('-', $tgkt);



                               	//   $ngay=kiemtrangaythang(date('d'));

                                //  $thang=kiemtrangaythang(date('m'));

                                //  $nam=date('y');



                                //  $ngaybd=kiemtrangaythang($tgbd[2]);

                                //    $ngaykt=kiemtrangaythang($tgkt[2]);

                                //     $thangbd=kiemtrangaythang($tgbd[1]);

                                //    $thangkt=kiemtrangaythang($tgkt[1]);



                                $tgbd=strtotime(date($khuyenmai['thoigianbatdau']));

                                $tgkt=strtotime(date($khuyenmai['thoigianketthuc']));



                                $tght=strtotime(date('Y-m-d'));

                                 if( $tght>=$tgbd && $tght<=$tgkt)

                                {



                                    

                                    	$dem++;



                                }



                              }



                           





return $dem;



}



function kiemtrangaythang($k){



	$kq='';



		switch ($k) {

		case '01':

			$kq=trim($k,0);

			break;

		case '02':

			$kq=trim($k,0);

			break;

			case '03':

			$kq=trim($k,0);

			break;

			case '04':

			$kq=trim($k,0);

			break;

			case '05':

			$kq=trim($k,0);

			break;

			case '06':

		$kq=trim($k,0);

			break;

			case '07':

		$kq=trim($k,0);

			break;

			case '08':

		$kq=trim($k,0);

			break;

			case '09':

		$kq=trim($k,0);

			break;



		default:

			$kq=$k;

			break;

	}



	return $kq;



}



// end ktkm

function tongnguoidanhgia($id_sp){

	global $d;

	$sql="select count(id) as total from #_rating where id_sp=$id_sp";

	$d->query($sql);

	$result=$d->fetch_array();

	return $result['total'];

}



function danhgiasaotrungbinh($id_sp){

	global $d;

	$sql="select sum(loai) as star from #_rating where id_sp=$id_sp";

	$d->query($sql);

	$result=$d->fetch_array();

	$totalStar = $result['star'];

	$totalPer = tongnguoidanhgia($id_sp);

	$numStar =round($totalStar/$totalPer, 1);

	return $numStar;

}

function sosaotungloai($id_sp,$num){

	global $d;

	$sql="select sum(loai) as total from #_rating where id_sp=$id_sp and loai=$num";

	$d->query($sql);

	$result=$d->fetch_array();



	return $result['total'];

}

function soluotdanhgiatheoloai($id_sp,$num){

	global $d;

	$sql="select count(id) as total from #_rating where id_sp=$id_sp and loai=$num";

	$d->query($sql);

	$result=$d->fetch_array();



	return $result['total'];

}

function phantramtungloaisao($id_sp,$num)

{

	global $d;

	$sql="select sum(loai) as star from #_rating where id_sp=$id_sp";

	$d->query($sql);

	$result=$d->fetch_array();

	$totalStar = $result['star'];





	$sosaotungloai=sosaotungloai($id_sp,$num);



	$phantram=round( ($sosaotungloai/$totalStar)*100,0);



	return $phantram;











}



function doi_product_hienthi($value)

{

	$kq='';

	switch ($value) {

		case '40':

			$kq='Hiển thị 40';

			break;

		case '60':

			$kq='Hiển thị 60';

			break;

		

	

		

	}





echo $kq;





}





	function listtinh($a)

	{



			global $d, $row;

			$sql="select * from table_diadiem_cat order by stt asc,id desc";

			$d->query($sql);

			$row=$d->result_array();



						$str='<option value="">Chọn Tỉnh/Thành phố</option>';





						foreach ($row as $v)



							 {

								

										if($v["id"]==$a)

												$selected="selected";

											else 

												$selected="";

										$str.='<option value='.$v["id"].' '.$selected.'>'.$v["ten_vi"].'</option>';



							}



							

						

	

			return $str;



	}

	function listquan($a)

	{

		global $d, $row;

			$sql="select * from table_diadiem_item order by stt asc,id desc";

			$d->query($sql);

			$row=$d->result_array();



						$str='<option value="">Chọn Quận/Huyện </option>';





						foreach ($row as $v)



							 {

								

										if($v["id"]==$a)

												$selected="selected";

											else 

												$selected="";

										$str.='<option value='.$v["id"].' '.$selected.'>'.$v["ten_vi"].'</option>';



							}



							

						

	

			return $str;



	}

	





	function getphantramsanpham($pid,$loaikm){

		global $d, $row;

		$sql = "select * from #_khuyenmai  where id=".$loaikm;

		$d->query($sql);

		$khuyenmai = $d->fetch_array();

		$sql1 = "select gia,loaikm from #_product  where id=".$pid;

		$d->query($sql1);

		$sp = $d->fetch_array();



		$loaigiam=$khuyenmai['loaigiam'];

		$giatri=$khuyenmai['giatri'];



		if($loaigiam==0)

		{

			$phantram=round((100 - ($sp['gia']-$giatri)/$sp['gia']*100),0);



		}

		else

		{



			$phantram=$giatri;



		}





		return $phantram;

	}





	function gettienkhuyenmai($pid,$loaikm){

		global $d, $row;

		$sql = "select * from #_khuyenmai  where id=".$loaikm;

		$d->query($sql);

		$khuyenmai = $d->fetch_array();

		$sql1 = "select gia,loaikm from #_product  where id=".$pid;

		$d->query($sql1);

		$sp = $d->fetch_array();



		$loaigiam=$khuyenmai['loaigiam'];

		$giatri=$khuyenmai['giatri'];



		if($loaigiam==0)

		{

			$tienkhuyenmai=$sp['gia']-$giatri;



		}

		else

		{



			$tienkhuyenmai=round((100-$giatri)*$sp['gia']/100,-3);



		}





		return $tienkhuyenmai;

	}











function listproduct_idc($pid){

		global $d, $row;

		$sql = "select * from #_product  where id_cat=".$pid;

		$d->query($sql);

		$row = $d->result_array();

		return count($row);

	}

	function listproduct_idi($pid){

		global $d, $row;

		$sql = "select * from #_product  where id_cat1=".$pid;

		$d->query($sql);

		$row = $d->result_array();

		return count($row);

	}

	function listproduct_ide($pid){

		global $d, $row;

		$sql = "select * from #_product  where id_cat2=".$pid;

		$d->query($sql);

		$row = $d->result_array();

		return count($row);

	}

	function get_tendichvu($pid){

		global $d, $row;

		
		$sql = "select ten_vi from #_tinnho where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['ten_vi'];

		

	}

		function get_tinh($pid=''){

		global $d, $row;

		if($pid!=''){

		$sql = "select ten_vi from #_diadiem_cat where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['ten_vi'];

		}else

		{

			return 1;

		}

	}



	function get_quan($pid=''){

		global $d, $row;

		if($pid!=''){

				$sql = "select ten_vi from #_diadiem_item where id=$pid";

				$d->query($sql);

				$row = $d->fetch_array();

				return $row['ten_vi'];

		}else{



				return 1;

		}

	}



		function get_phuong($pid=''){

		global $d, $row;

		if($pid!=''){

				$sql = "select name from ward where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

						return $row['name'];

		}

		else

		{

			return 1;

		}

	}







	function get_tenduan($pid){

		global $d, $row;

		$sql = "select ten_vi from #_congtrinh where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['ten_vi'];

	}


	function get_tenchudautu($pid){

		global $d, $row;

		$sql = "select tenchudautu from #_congtrinh where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['tenchudautu'];

	}

	function get_quymo($pid){

		global $d, $row;

		$sql = "select quymo from #_congtrinh where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['quymo'];

	}

	function get_linkduan($pid){

		global $d, $row;

		$sql = "select tenkhongdau from #_congtrinh where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['tenkhongdau'];

	}



	function get_name($pid){

		global $d, $row;

		$sql = "select ten from #_member where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['ten'];

	}

		function get_name_cap1($pid){

		global $d, $row;

		$sql = "select ten_vi from #_product_cat where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['ten_vi'];

	}


	function get_name_cap2($pid){

		global $d, $row;

		$sql = "select ten_vi from #_product_cat where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['ten_vi'];

	}



	function get_product($pid){

		global $d, $row;

		$sql = "select ten_vi from #_product where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['ten_vi'];

	}

	function get_matin($pid){

		global $d, $row;

		$sql = "select matin from #_product where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['matin'];

	}






 	function kiemtrasanphammuaonline($id_user,$id_sp)

 	{

 		global $d, $row;

 		$sql="select * from table_donhang ,table_order_detail where idmember=$id_user and table_donhang.madonhang=table_order_detail.id_order and id_product=$id_sp  ";



 		$d->query($sql);

		if($d->num_rows() == 1){



				return 1;

		}

		else

		{

			return 0;

		}









 	}

	function count_commnent($idsp){

		global $d, $row;

		$sql = "select * from #_comment where id_sp=$idsp";

		$d->query($sql);

		$row = $d->result_array();

		return count($row);

	}





	function get_tentheoloai($pid){

		global $d, $row;

		$sql = "select ten_vi from #_tinnho where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['ten_vi'];

	}



	function get_loaihinh($pid){

		global $d, $row;

		$sql = "select ten_vi from #_congtrinh_cat where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['ten_vi'];

	}

	function get_tentheoloai1($pid){

		global $d, $row;

		$sql = "select ten_vi,mota_vi from #_tinnho where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return number_format($row['ten_vi'],0, ',', ',').' ₫ - '. number_format($row['mota_vi'],0, ',', ',').' ₫';

	}



	function get_tenprice($gia)

	{	



			global $d, $row;





		   $gialoc=explode('_', $gia);



		   $kq=number_format($gialoc[0],0, ',', ',')." đ"." - ".number_format($gialoc[1],0, ',', ',')." đ";



		   return $kq;



	}

		function count_sp_mau($pid,$spmoi){

		global $d, $row,$dem;

		$sql = "select * from #_product  where spmoi=$spmoi";

		$d->query($sql);

		$row = $d->result_array();





		$dem=0;

		foreach ($row as $v) {

				

			$mausac=explode(',',$v['mausac']);

			if(in_array($pid, $mausac))

			{



				$dem++;

			}



		}

		return $dem;

	}

	function count_sp($loai,$pid,$thuonghieu){

		global $d, $row;

		$sql = "select * from #_product  where id_thuong_hieu=$thuonghieu  and $loai=$pid";

		$d->query($sql);

		$row = $d->result_array();

		return count($row);

	}

	function count_sp_hangmoi($loai,$pid,$spmoi){

		global $d, $row;

		$sql = "select * from #_product  where spmoi=$spmoi  and $loai=$pid";

		$d->query($sql);

		$row = $d->result_array();

		return count($row);

	}



	function count_sp_theogia($dau,$cuoi,$thuonghieu){

		global $d, $row;

		$sql = "select * from #_product  where id_thuong_hieu=$thuonghieu and gia>=$dau and gia<=$cuoi";

		$d->query($sql);

		$row = $d->result_array();

		return count($row);

	}

		function count_sp_theogiahangmoi($dau,$cuoi,$spmoi){

		global $d, $row;

		$sql = "select * from #_product  where spmoi=$spmoi and gia>=$dau and gia<=$cuoi";

		$d->query($sql);

		$row = $d->result_array();

		return count($row);

	}



	/// function đã xem

	function get_product_name_daxem($pid,$lang){

		global $d, $row;

		$sql = "select ten_$lang from #_product where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['ten_'.$lang];

	}

	function get_name_khongdau_daxem($pid){

		global $d, $row;

		$sql = "select tenkhongdau_vi from #_product where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['tenkhongdau_vi'];

	}



	function get_id_cat1($pid){

		global $d, $row;

		$sql = "select id_cat1 from #_product where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['id_cat1'];

	}

	function get_product_daxem($pid,$lang){

		global $d, $row;

		$sql = "select ten_$lang from #_product where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['ten_'.$lang];

	}

	function get_img_daxem ($pid){

		global $d, $row;

		$sql = "select photo from #_product where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['photo'];

	}



	function delete_product($id){

	global $d;	

	$d->reset();	

	

	if($id!=0 && $id!=''){

		//Xóa ảnh con của nó

		$sql = "select photo,thumb from #_product_photo where id_cat=$id";

		$d->query($sql);

		if($d->num_rows()>0){

			while($row = $d->fetch_array()){

				delete_file(_upload_sanpham.$row['photo']);

				delete_file(_upload_sanpham.$row['thumb']);

					

			}

		}

		$sql = "delete from #_product_photo where id_cat=$id";

		$d->query($sql);

				

		//Xóa ảnh của nó

		$sql = "select photo,thumb from #_product where id=$id";

		$d->query($sql);

		if($d->num_rows()>0){

			while($row = $d->fetch_array()){

				delete_file(_upload_sanpham.$row['photo']);

				delete_file(_upload_sanpham.$row['thumb']);

					

			}			

		}	

		$sql = "delete from #_product where id=$id";

		if($d->query($sql))

			return 1;

		return 0;

	}

	return 2;

}




	function delete_product1($id){

	global $d;	

	$d->reset();	

	

	if($id!=0 && $id!=''){

		//Xóa ảnh con của nó

		$sql = "select photo from bangtam where id_tam=$id";

		$d->query($sql);

		if($d->num_rows()>0){

			while($row = $d->fetch_array()){

				delete_file(_upload_download.$row['photo']);


					

			}

		}




		$sql = "delete from bangtam where id_tam=$id";

		$d->query($sql);

		return 1;


	}else
	{
		return 0;
	}



}






	function remove_daxem($pid) {



    $pid = intval($pid);

    $max = count($_SESSION['dx']);

    for ($i = 0; $i < $max; $i++) {

        if ($pid == $_SESSION['dx'][$i]['ssid']) {

            unset($_SESSION['dx'][$i]);

            break;

        }

    }

    $_SESSION['dx'] = array_values($_SESSION['dx']);

}



	function addtodaxem($dxid) {



    if (is_array($_SESSION['dx'])) {

        if (daxem_exists($dxid))

            return 0;

        $max = count($_SESSION['dx']);



        $_SESSION['dx'][$max]['dxid'] = $dxid;

    }

    else {

        $_SESSION['dx'] = array();

        $_SESSION['dx'][0]['dxid'] = $dxid;

    }

  

}

	function daxem_exists($dxid) {

	    $dxid = intval($dxid);

    $max = count($_SESSION['dx']);

    $flag = 0;

    for ($i = 0; $i < $max; $i++) {

        if ($dxid == $_SESSION['dx'][$i]['dxid']) {

            $flag = 1;

            break;

        }

    }

    return $flag;

}







function layphantram($gia,$giacu)

{

		$kq=100-round(($gia/$giacu)*100,0);

		return $kq;

}





function showmucloc($id,$ten)

{

		global $d, $row;







		$tenkd=q_bodautv1($ten);

		$sql="select * from table_tinnho where com=".$id." order by id asc,stt desc";

						$stmt=mysql_query($sql);





						if($id==10){



									$str='<div class="col-md-2"  style="padding:0"><label><b style="color:#333">Tiện ích :</b></label></div>';

								while ($row=@mysql_fetch_array($stmt)) 

								{

									

								$str.='<label style="display: inline-block;margin: 10px 0;margin-right: 10px" class="checkbox-inline">';

					     			$str.='<input style=" width: 20px;    margin-top: 2px;"   name="id_'.$tenkd.'[]" type="checkbox" value="'.$row['id'].'">'.$row['ten_vi'];

					    		$str.='</label>';



					    		}



						}else





						{

								$str='

							<select id="id_'.$tenkd.'" name="id_'.$tenkd.'">

							 <option value="0">Chọn '.$ten.'</option>

							';

								while ($row=@mysql_fetch_array($stmt)) 

								{

									

									$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';			

								}

								$str.='</select>';

						}

					





		return $str;	

}





?>