<?php if(!defined('_lib')) die("Error");

	function get_tenkhongdautintuc($pid){

		global $d, $row;

		$sql = "select tenkhongdau from #_tin3cap_cat where id=$pid";

		$d->query($sql);

		$row = $d->fetch_array();

		return $row['tenkhongdau'];

	}


	

	function get_sobaiviet($pid){

		global $d, $row;

		$sql = "select * from #_tin3cap where id_cat1=$pid";

		$d->query($sql);

		$row = $d->result_array();

		return count($row);

	}


function genAMPVideo($id){
	return '<amp-youtube data-videoid="'.$id.'" layout="responsive" width="480" height="270"></amp-youtube>';
}
function LinkConvert($str) {
	$pattern = '|<a.+?href\="(.+?)".*?>(.+?)</a>|i';
	return preg_replace_callback($pattern, function ($matches) {
		$matches[2] = strip_tags($matches[0]);
		$link = $matches[1];
		$text = $matches[2];
		return "<a href='$link'>$text</a>";
	}, $str);
}
function VidConvert($iframeCode,$check=false) {
	$pattern = '/<iframe\s+.*?\s+src=(".*?").*?<\/iframe>/';
	if($check){
		return preg_match_all($pattern, $iframeCode, $matches);
	}
	return preg_replace_callback($pattern, function ($matches) {
		$youtubeUrl = $matches[1];
		$youtubeUrl = trim($youtubeUrl, '"');
		$youtubeUrl = trim($youtubeUrl, "'");
		preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $youtubeUrl, $videoId);
		return $youtubeVideoId = isset($videoId[1]) ? genAMPVideo($videoId[1]) : "";
	}, $iframeCode);
}
function ampify($html='') {
	$html = LinkConvert($html);
	$html = VidConvert($html);
	$html = str_ireplace(array('<img','<video','/video>','<audio','/audio>','<iframe','/iframe>'),array('<amp-img','<amp-video','/amp-video>','<amp-audio','/amp-audio>','<amp-iframe','/amp-iframe>'),$html);

	$html = preg_replace('/<amp-img(.*?)\/?>/','<amp-img$1 layout="responsive" ></amp-img>',$html);


	

	
	$html = preg_replace('/border=\\"[^\\"]*\\"/', '', $html);
	$html = preg_replace('/new=\\"[^\\"]*\\"/', '', $html);
	$html = preg_replace('/style=\\"[^\\"]*\\"/', '', $html);
	$html = preg_replace('/<span(.*?)\/?>/','<span>',$html);
	$html = preg_replace('/<div(.*?)\/?>/','<div>',$html);
	$html = preg_replace('/<td(.*?)\/?>/','<td>',$html);
	$html = preg_replace('/<article(.*?)\/?>/','<article>',$html);
		$html = preg_replace('/<ul(.*?)\/?>/','<ul>',$html);
	$html = preg_replace('/<h3(.*?)\/?>/','<h3>',$html);
	$html = preg_replace('/<p(.*?)\/?>/','<p>',$html);
	$html = preg_replace('/<h2(.*?)\/?>/','<h2>',$html);
	$html = preg_replace('/<h4(.*?)\/?>/','<h4>',$html);
	$html = preg_replace('/<h5(.*?)\/?>/','<h5>',$html);
	$html = preg_replace('/<h6(.*?)\/?>/','<h6>',$html);
	$html = preg_replace('/<em(.*?)\/?>/','<em>',$html);
	$html = preg_replace('/<table(.*?)\/?>/','<table>',$html);
	$html = preg_replace('/<a style(.*?)\/?>/','</a>',$html);
	$html = preg_replace('/<div style(.*?)\/?>/','</div>',$html);
	$html = preg_replace('/<p style(.*?)\/?>/','</p>',$html);
	$html = preg_replace('/<span style(.*?)\/?>/','</span>',$html);
	$html = preg_replace('/<strong(.*?)\/?>/','<strong>',$html);
	$html = strip_tags($html,'<h1><h2><h3><h4><h5><h6><a><p><ul><ol><li><blockquote><q><cite><ins><del><strong><em><code><pre><svg><table><thead><tbody><tfoot><th><tr><td><dl><dt><dd><article><section><header><footer><aside><figure><time><abbr><div><span><hr><small><br><amp-img><amp-audio><amp-video><amp-ad><amp-anim><amp-carousel><amp-fit-rext><amp-image-lightbox><amp-instagram><amp-lightbox><amp-twitter><amp-youtube>');
	$html = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $html);
	return $html;
}
function getCurrentPageURL_AMP() {
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"]."/amp".$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"]."/amp".$_SERVER["REQUEST_URI"];
	}
	$pageURL = explode("/page=", $pageURL);
	return $pageURL[0];
}



function getCurrentPageURL_CANO() {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    $pageURL = str_replace("amp/", "", $pageURL);
	$pageURL = explode("&page=", $pageURL);
	$pageURL = explode("?", $pageURL[0]);
	$pageURL = explode("#", $pageURL[0]);
	//$pageURL = explode("index", $pageURL[0]);
    return $pageURL[0];
}


function getCurrentPageURL_VI() {
     $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }

    $pageURL = str_replace("en/", "vi/", $pageURL);
	$pageURL = explode("&page=", $pageURL);
	$pageURL = explode("?", $pageURL[0]);
	$pageURL = explode("#", $pageURL[0]);
	//$pageURL = explode("index", $pageURL[0]);
    return $pageURL[0];
}

function getCurrentPageURL_EN() {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }

    $pageURL = str_replace("vi/", "en/", $pageURL);
	$pageURL = explode("&page=", $pageURL);
	$pageURL = explode("?", $pageURL[0]);
	$pageURL = explode("#", $pageURL[0]);
	//$pageURL = explode("index", $pageURL[0]);
    return $pageURL[0];
}


function vn_to_str ($str){
 
$unicode = array(
 
'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
 
'd'=>'đ',
 
'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
 
'i'=>'í|ì|ỉ|ĩ|ị',
 
'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
 
'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
 
'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
 
'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
 
'D'=>'Đ',
 
'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
 
'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
 
'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
 
'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
 
'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
 
);
 
foreach($unicode as $nonUnicode=>$uni){
 
$str = preg_replace("/($uni)/i", $nonUnicode, $str);
 
}
$str = substr($str,0,210);
 
return $str;
 
}






function upload_photos($file, $extension, $folder, $newname=''){
if(isset($file) && !$file['error']){

$ext = end(explode('.',$file['name']));
$name = basename($file['name'], '.'.$ext);
//alert('Chỉ hỗ trợ upload file dạng '.$ext);
if(strpos($extension, $ext)===false){
alert('Chỉ hỗ trợ upload file dạng '.$ext.'-////-'.$extension);
return false; // không hỗ trợ
}

if($newname=='' && file_exists($folder.$file['name']))
for($i=0; $i<100; $i++){
if(!file_exists($folder.$name.$i.'.'.$ext)){
$file['name'] = $name.$i.'.'.$ext;
break;
}
}
else{
$file['name'] = $newname.'.'.$ext;
}

if (!copy($file["tmp_name"], $folder.$file['name']))	{
if ( !move_uploaded_file($file["tmp_name"], $folder.$file['name']))	{
return false;
}
}
return $file['name'];
}
return false;
}




function paging_home1($r, $url='', $curPg=1, $mxR=5, $mxP=5, $class_paging='')

	{

		if($curPg<1) $curPg=1;

		if($mxR<1) $mxR=5;

		if($mxP<1) $mxP=5;

		$totalRows=count($r);

		if($totalRows==0)	

			return array('source'=>NULL, 'paging'=>NULL);

		$totalPages=ceil($totalRows/$mxR);

		if($curPg > $totalPages) $curPg=$totalPages;

		

		$_SESSION['maxRow']=$mxR;

		$_SESSION['curPage']=$curPg;



		$r2=array();

		$paging="";

		

		//-------------tao array------------------

		$start=($curPg-1)*$mxR;

		$end=($start+$mxR)<$totalRows?($start+$mxR):$totalRows;

		#echo $start;

		#echo $end;

		

		$j=0;

		for($i=$start;$i<$end;$i++)

			$r2[$j++]=$r[$i];

			

		//-------------tao chuoi------------------

		$curRow = ($curPg-1)*$mxR+1;	

		if($totalRows>$mxR)

		{

			$start=1;

			$end=1;

			$paging1 ="";				 	 

			for($i=1;$i<=$totalPages;$i++)

			{	

				if(($i>((int)(($curPg-1)/$mxP))* $mxP) && ($i<=((int)(($curPg-1)/$mxP+1))* $mxP))

				{

					if($start==1) $start=$i;

					if($i==$curPg){

						$paging1.=" <span style='display: inline-block;height: 27px;width: 33px;     -webkit-border-radius: 5px;

    -moz-border-radius: 5px;

    border-radius: 5px; line-height: 27px;text-align: center;color: #ea3a3c;background:#0c0c0c; font-weight: bold;border:1px solid #ddd'>".$i."</span> ";//dang xem

					} 		  	

					else    

					{

						$paging1 .= " <a href='".$url."p=".$i."'  style='display: inline-block; color: #fff;background:#0c0c0c;   font-weight: bold;width:33px;     -webkit-border-radius: 5px;

    -moz-border-radius: 5px;

    border-radius: 5px;height:27px;line-height:27px;border:1px solid #ddd '>".$i."</a> ";	

					}

					$end=$i;	

				}

			}//tinh paging

			//$paging.= "Go to page :&nbsp;&nbsp;" ;

			#if($curPg>$mxP)

			#{

				$paging .=" <a href='".$url."p=1' style='display: inline-block; color: #fff; background:#0c0c0c;  font-weight: bold;width:38px;    -webkit-border-radius: 5px;

    -moz-border-radius: 5px;

    border-radius: 5px; height:27px;line-height:27px;border:1px solid #ddd ' >

				<<

				</a> "; //ve dau

				

				#$paging .=" <a href='".$url."p=".($start-1)."' class=\"{$class_paging}\" >&#8249;</a> "; //ve truoc

				$paging .=" <a href='".$url."p=".($curPg-1)."' style='display: inline-block; color: #fff; background:#0c0c0c;  font-weight: bold;width:38px;    -webkit-border-radius: 5px;

    -moz-border-radius: 5px;

    border-radius: 5px;height:27px;line-height:27px;border:1px solid #ddd; font-size:18px; ' >&#8249;</a> "; //ve truoc

			#}

			$paging.=$paging1; 

			#if(((int)(($curPg-1)/$mxP+1)*$mxP) < $totalPages)  

			#{

				#$paging .=" <a href='".$url."p=".($end+1)."' class=\"{$class_paging}\" >&#8250;</a> "; //ke

				$paging .=" <a href='".$url."p=".($curPg+1)."'  style='display: inline-block; color: #fff; background:#0c0c0c;  font-weight: bold;width:38px;    -webkit-border-radius: 5px;

    -moz-border-radius: 5px;

    border-radius: 5px;height:27px;line-height:27px;border:1px solid #ddd; font-size:18px; ' >&#8250;</a> "; //ke

				

				$paging .=" <a href='".$url."p=".($totalPages)."' style='display: inline-block; color: #fff; background:#0c0c0c;  font-weight: bold;width:38px;    -webkit-border-radius: 5px;

    -moz-border-radius: 5px;

    border-radius: 5px;height:27px;line-height:27px;border:1px solid #ddd ' >

				>>

				</a> "; //ve cuoi

			#}

		}

		$r3['curPage']=$curPg;

		$r3['source']=$r2;

		$r3['paging']=$paging;

		#echo '<pre>';var_dump($r3);echo '</pre>';

		return $r3;

	}

	

#

#	$id_connect : ket noi database

#





        function get_loaicat($a)

          {

            $sql="select * from table_product_cat where com='cat1' order by stt asc,id desc";

            $stmt=mysql_query($sql);

            $str='

              <select id="id_cat" name="loai_cat">

               <option value="0">Chọn danh mục</option>

              ';

            while ($row=@mysql_fetch_array($stmt)) 

            {

              if($row["id"]==(int)@$a)

                $selected="selected";

              else 

                $selected="";

              $str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';     

            }

            $str.='</select>';

            return $str;

          }





    function doisort($val)

    {



    	switch ($val) {

    		case 'cu-nhat':

    			$value='Cũ nhất';

    			break;

    		case 'moi-nhat':

    			$value='Mới nhất';

    			break;

    		case 'thap-cao':

    			$value='Giá: Thấp->Cao';

    			break;

    		

    		case 'cao-thap':

    			$value='Giá: Cao->Thấp';

    			break;

    		

    	

    	}



    	return $value;

    }





function phanquyen_tv($tencom,$quyen,$act){

	global $d;

		switch($act){



			case 'man':

			$com = 0;

			break;	

			case 'man1':

				$com=1;

			break;

			case 'man2':

				$com=2;

			break;

			case 'man3':

				$com=3;

			break;

			case 'man4':

				$com=4;

			break;

			case 'man5':

				$com=5;

			break;

			

			case 'man_cat':

				$com='cat';

				break;

			case 'man_cat1':

			 	$com='cat1';

			 break;

			 case 'man_cat2';

			  $com='cat2';

			  break;





			  case 'man_ptthanhtoan':

				$com='ptthanhtoan';

				break;

			case 'man_ptgiaonhan':

			 	$com='ptgiaonhan';

			 break;

			 case 'capnhap_banner';

			  $com='capnhap_banner';

			  break;

			   case 'man_chiase';

			  $com='chiase';

			  break;



			   case 'capnhap_background';

			  $com='background';

			  break;

			   case 'man_lkweb';

			  $com='lkweb';

			  break;



			    case 'man_slideshow';

			  $com='slideshow';

			  break;







//edit

			  	case 'edit':

			$com = 0;

			break;	

			case 'edit1':

				$com=1;

			break;

			case 'edit2':

				$com=2;

			break;

			case 'edit3':

				$com=3;

			break;

			case 'edit4':

				$com=4;

			break;

			case 'edit5':

				$com=5;

			break;

			

			case 'edit_cat':

				$com='cat';

				break;

			case 'edit_cat1':

			 	$com='cat1';

			 break;

			 case 'edit_cat2';

			  $com='cat2';

			  break;



case 'edit_ptthanhtoan':

				$com='ptthanhtoan';

				break;

			case 'edit_ptgiaonhan':

			 	$com='ptgiaonhan';

			 break;

			 case 'edit_banner';

			  $com='capnhap_banner';

			  break;

			   case 'edit_chiase';

			  $com='chiase';

			  break;



			   case 'edit_background';

			  $com='background';

			  break;

			   case 'edit_lkweb';

			  $com='lkweb';

			  break;

			  //delete--------------

			  	case 'delete':

			$com = 0;

			break;	

			case 'delete1':

				$com=1;

			break;

			case 'delete2':

				$com=2;

			break;

			case 'delete3':

				$com=3;

			break;

			case 'delete4':

				$com=4;

			break;

			case 'delete5':

				$com=5;

			break;

			

			case 'delete_cat':

				$com='cat';

				break;

			case 'delete_cat1':

			 	$com='cat1';

			 break;

			 case 'delete_cat2';

			  $com='cat2';

			  break;

			    case 'delete_ptthanhtoan':

				$com='ptthanhtoan';

				break;

			case 'delete_ptgiaonhan':

			 	$com='ptgiaonhan';

			 break;

			 case 'delete_banner';

			  $com='capnhap_banner';

			  break;

			   case 'delete_chiase';

			  $com='chiase';

			  break;



			   case 'delete_background';

			  $com='background';

			  break;

			   case 'delete_lkweb';

			  $com='lkweb';

			  break;









//add-----

			  	case 'add':

			$com = 0;

			break;	

			case 'add1':

				$com=1;

			break;

			case 'add2':

				$com=2;

			break;

			case 'add3':

				$com=3;

			break;

			case 'add4':

				$com=4;

			break;

			case 'add5':

				$com=5;

			break;

			

			case 'add_cat':

				$com='cat';

				break;

			case 'add_cat1':

			 	$com='cat1';

			 break;

			 case 'add_cat2';

			  $com='cat2';

			  break;



			  case 'add_ptthanhtoan':

				$com='ptthanhtoan';

				break;

			case 'add_ptgiaonhan':

			 	$com='ptgiaonhan';

			 break;

			 case 'add_banner';

			  $com='capnhap_banner';

			  break;

			   case 'add_chiase';

			  $com='chiase';

			  break;



			   case 'add_background';

			  $com='background';

			  break;

			   case 'add_lkweb';

			  $com='lkweb';

			  break;

//save

  	case 'save':

			$com = 0;

			break;	

			case 'save1':

				$com=1;

			break;

			case 'save2':

				$com=2;

			break;

			case 'save3':

				$com=3;

			break;

			case 'save4':

				$com=4;

			break;

			case 'save5':

				$com=5;

			break;

			

			case 'save_cat':

				$com='cat';

				break;

			case 'save_cat1':

			 	$com='cat1';

			 break;

			 case 'save_cat2';

			  $com='cat2';

			  break;

			  case 'save_ptthanhtoan':

				$com='ptthanhtoan';

				break;

			case 'save_ptgiaonhan':

			 	$com='ptgiaonhan';

			 break;

			 case 'save_banner';

			  $com='capnhap_banner';

			  break;

			   case 'save_chiase';

			  $com='chiase';

			  break;



			   case 'save_background';

			  $com='background';

			  break;

			   case 'save_lkweb';

			  $com='lkweb';

			  break;

//delete





			     case 'capnhap1';

			  $com='1';

			  break;

			    case 'capnhap2';

			  $com='2';

			  break;

			    case 'capnhap3';

			  $com='3';

			  break;

			    case 'capnhap4';

			  $com='4';

			  break;

     case 'capnhap';

			  $com='company';



			}



	

	$d->reset();

	$sql = "select * from #_phanquyen where id='".$quyen."' ";

	$d->query($sql);

	$phanquyen = $d->fetch_array();



	$d->reset();

	$sql = "select * from #_com where ten_com='".$tencom."' and com='".$com."' ";

	$d->query($sql);

	$com_manager = $d->fetch_array();



	$xem_s = json_decode($phanquyen['xem']);

	$them_s = json_decode($phanquyen['them']);

	$xoa_s = json_decode($phanquyen['xoa']);

	$sua_s = json_decode($phanquyen['sua']);



	$xem_arr = explode('|',"capnhat|man|man1|man2|man3|man4|man5|man_cat1|man_cat2|man_cat|man_ptthanhtoan|man_ptgiaonhan|capnhap_banner|man_chiase|capnhap_background|capnhap2|capnhap3|capnhap|capnhap4|man_lkweb|save_background|save_banner");

	$them_arr = explode('|',"add|add1|add2|add3|add4|add5|add_cat|add_cat1|add_cat2|save|save1|save2|save3|save4|save5|save_cat|save_cat1|save_cat2|add_ptthanhtoan|add_ptgiaonhan|add_chiase|add_lkweb|save_ptthanhtoan|save_ptgiaonhan|save_chiase|save_lkweb");

	$xoa_arr = explode('|',"delete|delete1|delete2|delete3|delete4|delete5|delete_cat|delete_cat1|delete_cat2|delete_ptthanhtoan|delete_ptgiaonhan|delete_chiase|delete_lkweb");

	$sua_arr = explode('|',"edit|edit1|edit2|edit3|edit4|edit5|edit_cat|edit_cat1|edit_cat2|edit_ptthanhtoan|edit_ptgiaonhan|edit_chiase|edit_lkweb|save_ptthanhtoan|save_ptgiaonhan|save_chiase|save_lkweb");



	if(in_array($act,$xem_arr)){

		if(in_array($com_manager['id'].'|1',$xem_s)){

			return 1;

		} else {

			return 0;

		}

	} elseif(in_array($act,$them_arr)) {

		if(in_array($com_manager['id'].'|1',$them_s)){

			return 1;

		} else {

			return 0;

		}

	} elseif(in_array($act,$xoa_arr)){

		if(in_array($com_manager['id'].'|1',$xoa_s)){

			return 1;

		} else {

			return 0;

		}

	} elseif(in_array($act,$sua_arr)){

		if(in_array($com_manager['id'].'|1',$sua_s)){

			return 1;

		} else {

			return 0;

		}

	} else {

		return 0;

	}



			

}

function dongdauanh($newname,$folder)	

{



	  $uploadimage=$folder.$newname;



	  $actual = $folder.$newname;



	  // Load the mian image

	  // $source = imagecreatefromjpeg($uploadimage);





	  switch(end(explode('.', $uploadimage))){

		case 'gif':

			$source = imagecreatefromgif($uploadimage);

			break;

		case 'jpg':

		case 'jpeg':

			$source = imagecreatefromjpeg($uploadimage);

			break;

		case 'png':

			$source = imagecreatefrompng($uploadimage);

			break;

		default:

			die('Not a valid image type.');

	}





	  // load the image you want to you want to be watermarked

	  $watermark = imagecreatefrompng('../upload/watermark.png');

	  $size = getimagesize($uploadimage);  













	  // get the width and height of the watermark image

	  $water_width = imagesx($watermark);

	  $water_height = imagesy($watermark);



	  // get the width and height of the main image image

	  $main_width = imagesx($source);

	  $main_height = imagesy($source);



	  // Set the dimension of the area you want to place your watermark we use 0

	  // from x-axis and 0 from y-axis 

	  $dime_x = ($size[0] - $water_width)/1.1;  

	  $dime_y = ($size[1] - $water_height)/1.1;



	  // copy both the images

	  imagecopy($source, $watermark, $dime_x, $dime_y, 0, 0, $water_width, $water_height);



	  // Final processing Creating The Image

	  imagejpeg($source, $actual, 100);

	  

}









function magic_quote($str, $id_connect=false)	

{	

	if (is_array($str))

	{

		foreach($str as $key => $val)

		{

			$str[$key] = escape_str($val);

		}

		

		return $str;

	}

	

	if (is_numeric($str)) {

		return $str;

	}

	

	if(get_magic_quotes_gpc()){

		$str = stripslashes($str);

	}



	if (function_exists('mysql_real_escape_string') AND is_resource($id_connect))

	{

		return mysql_real_escape_string($str, $id_connect);

	}

	elseif (function_exists('mysql_escape_string'))

	{

		return mysql_escape_string($str);

	}

	else

	{

		return addslashes($str);

	}

}



#

#	$id_connect : ket noi database

#

function escape_str($str, $id_connect=false)	

{	

	if (is_array($str))

	{

		foreach($str as $key => $val)

		{

			$str[$key] = escape_str($val);

		}

		

		return $str;

	}

	

	if (is_numeric($str)) {

		return $str;

	}

	

	if(get_magic_quotes_gpc()){

		$str = stripslashes($str);

	}



	if (function_exists('mysql_real_escape_string') AND is_resource($id_connect))

	{

		return "'".mysql_real_escape_string($str, $id_connect)."'";

	}

	elseif (function_exists('mysql_escape_string'))

	{

		return "'".mysql_escape_string($str)."'";

	}

	else

	{

		return "'".addslashes($str)."'";

	}

}



// dem so nguoi online //

/////////////////////////

function count_online(){

/*

CREATE TABLE `camranh_online` (

  `id` int(10) unsigned NOT NULL auto_increment,

  `session_id` varchar(255) NOT NULL,

  `time` int(10) unsigned NOT NULL,

  PRIMARY KEY  (`id`)

) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;

*/

	global $d;

	$time = 600; // 10 phut

	$ssid = session_id();



	// xoa het han

	$sql = "delete from #_online where time<".(time()-$time);

	$d->query($sql);

	//

	$sql = "select id,session_id from #_online order by id desc";

	$d->query($sql);

	$result['dangxem'] = $d->num_rows();

	$rows = $d->result_array();

	$i = 0;

	while(($rows[$i]['session_id'] != $ssid) && $i++<$result['dangxem']);

	

	if($i<$result['dangxem']){

		$sql = "update #_online set time='".time()."' where session_id='".$ssid."'";

		$d->query($sql);

		$result['daxem'] = $rows[0]['id'];

	}

	else{

		$sql = "insert into #_online (session_id, time) values ('".$ssid."', '".time()."')";

		$d->query($sql);

		$result['daxem'] = mysql_insert_id();

		$result['dangxem']++;

	}

	

	return $result; // array('dangxem'=>'', 'daxem'=>'')

}





function make_date($time,$dot='.',$lang='vi',$f=false){

	

	$str = ($lang == 'vi') ? date("d{$dot}m{$dot}Y",$time) : date("m{$dot}d{$dot}Y",$time);

	if($f){

		$thu['vi'] = array('Chủ nhật','Thứ hai','Thứ ba','Thứ tư','Thứ năm','Thứ sáu','Thứ bảy');

		$thu['en'] = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

		$str = $thu[$lang][date('w',$time)].', '.$str;

	}

	return $str;

}



function alert($s){

	echo '<script language="javascript"> alert("'.$s.'") </script>';

}



function delete_file($file){

		return @unlink($file);

}



function upload_image($file, $extension, $folder, $newname=''){

	if(isset($_FILES[$file]) && !$_FILES[$file]['error']){

		

		$ext = end(explode('.',$_FILES[$file]['name']));

		$name = basename($_FILES[$file]['name'], '.'.$ext);

		



		if(strpos($extension, $ext)===false){

			alert('Chỉ hỗ trợ upload file dạng '.$extension);

			return false; 

		}

		

		if($newname=='' && file_exists($folder.$_FILES[$file]['name']))

			for($i=0; $i<100; $i++){

				if(!file_exists($folder.$name.$i.'.'.$ext)){

					$_FILES[$file]['name'] = $name.$i.'.'.$ext;

					break;

				}

			}

		else{

			$_FILES[$file]['name'] = $newname.'.'.$ext;

		}

		

		if (!copy($_FILES[$file]["tmp_name"], $folder.$_FILES[$file]['name']))	{

			if ( !move_uploaded_file($_FILES[$file]["tmp_name"], $folder.$_FILES[$file]['name']))	{

				return false;

			}

		}

		return $_FILES[$file]['name'];

	}

	return false;

}



function upload_image_mutil($file, $extension, $folder,$listhinh){




	$list='';

	$listhinh=explode(',', $listhinh);


	
	foreach($_FILES[$file]["tmp_name"] as $key=>$tmp_name){



		$newname=q_tenhinh($_FILES[$file]['name'][$key]);

		

		$ext = end(explode('.',$_FILES[$file]['name'][$key]));

		$name = basename($_FILES[$file]['name'][$key], '.'.$ext);

		

		if($ext!=''){

		if(strpos($extension, $ext)===false){

			alert('Chỉ hỗ trợ upload file dạng '.$extension);

			return false; // không hỗ trợ

		}

		}





		if(in_array($_FILES[$file]['name'][$key], $listhinh)) {



					$ext = end(explode('.',$_FILES[$file]['name'][$key]));

					$name = basename($_FILES[$file]['name'][$key], '.'.$ext);

		


					if($newname=='' && file_exists($folder.$_FILES[$file]['name'][$key]))

						for($i=0; $i<100; $i++){

							if(!file_exists($folder.$name.$i.'.'.$ext)){

								$_FILES[$file]['name'][$key] = $name.$i.'.'.$ext;

								break;

							}

						}

					else{

						$_FILES[$file]['name'][$key] = $newname.'.'.$ext;

					}







				$list.=$_FILES[$file]['name'][$key].',';

				

				if (!copy($_FILES[$file]["tmp_name"][$key], $folder.$_FILES[$file]['name'][$key]))	{

					if (!move_uploaded_file($_FILES[$file]["tmp_name"][$key], $folder.$_FILES[$file]['name'][$key]))	{

						return false;

					}

				}





		}



	}

		return $list;



	return false;

}

function upload_image_mutil1($file, $extension, $folder){


	$list='';

	foreach($_FILES[$file]["tmp_name"] as $key=>$tmp_name){

		$newname=q_tenhinh($_FILES[$file]['name'][$key]);
		
		$ext = end(explode('.',$_FILES[$file]['name'][$key]));
		$name = basename($_FILES[$file]['name'][$key], '.'.$ext);
		
		if($ext!=''){
			if(strpos($extension, $ext)===false){
				alert('Chỉ hỗ trợ upload file dạng '.$extension);
				return false; // không hỗ trợ
			}
		}



					if($newname=='' && file_exists($folder.$_FILES[$file]['name'][$key]))
						for($i=0; $i<100; $i++){
							if(!file_exists($folder.$name.$i.'.'.$ext)){
								$_FILES[$file]['name'][$key] = $name.$i.'.'.$ext;
								break;
							}
						}
					else{
						$_FILES[$file]['name'][$key] = $newname.'.'.$ext;
					}



				$list.=$_FILES[$file]['name'][$key].',';
				
				if (!copy($_FILES[$file]["tmp_name"][$key], $folder.$_FILES[$file]['name'][$key]))	{
					if (!move_uploaded_file($_FILES[$file]["tmp_name"][$key], $folder.$_FILES[$file]['name'][$key]))	{
						return false;
					}
				}


		}

		
		return $list;

	return false;
}
function q_tenhinh1($tenhinh){	//Tạo tên hình, truyền vào $_FILES['file']['name']	

	$ten_anh=explode(".",$tenhinh);

	$result = q_bodautv($ten_anh[0]);

	return $result;	

}

function thumb_image($file, $width, $height, $folder){	



	if(!file_exists($folder.$file))	return false; // không tìm thấy file

	

	if ($cursize = getimagesize ($folder.$file)) {					

		$newsize = setWidthHeight($cursize[0], $cursize[1], $width, $height);

		$info = pathinfo($file);

		

		$dst = imagecreatetruecolor ($newsize[0],$newsize[1]);

		

		$types = array('jpg' => array('imagecreatefromjpeg', 'imagejpeg'),

					'gif' => array('imagecreatefromgif', 'imagegif'),

					'png' => array('imagecreatefrompng', 'imagepng'));

		$func = $types[$info['extension']][0];

		$src = $func($folder.$file); 

		imagecopyresampled($dst, $src, 0, 0, 0, 0,$newsize[0], $newsize[1],$cursize[0], $cursize[1]);

		$func = $types[$info['extension']][1];

		$new_file = str_replace('.'.$info['extension'],'_thumb.'.$info['extension'],$file);

		

		return $func($dst, $folder.$new_file) ? $new_file : false;

	}

}





function setWidthHeight($width, $height, $maxWidth, $maxHeight){

	$ret = array($width, $height);

	$ratio = $width / $height;

	if ($width > $maxWidth || $height > $maxHeight) {

		$ret[0] = $maxWidth;

		$ret[1] = $ret[0] / $ratio;

		if ($ret[1] > $maxHeight) {

			$ret[1] = $maxHeight;

			$ret[0] = $ret[1] * $ratio;

		}

	}

	return $ret;

}





function transfer($msg,$page="index.php")

{

	 $showtext = $msg;

	 $page_transfer = $page;

	 include("./templates/transfer_tpl.php");

	 exit();

}


function transfer1($msg,$page="index.php",$ma)

{

	 $showtext = $msg;

	 $page_transfer = $page;

	 $matin=$ma;

	 include("./templates/transfer1_tpl.php");

	 exit();

}





function redirect($url=''){

	echo '<script language="javascript">window.location = "'.$url.'" </script>';

	exit();

}



function back($n=1){

	echo '<script language="javascript">history.go = "'.-intval($n).'" </script>';

	exit();

}



function chuanhoa($s){

	$s = str_replace("'", '&#039;', $s);

	$s = str_replace('"', '&quot;', $s);

	$s = str_replace('<', '&lt;', $s);

	$s = str_replace('>', '&gt;', $s);

	return $s;

}



function themdau($s){

	$s = addslashes($s);

	return $s;

}



function bodau($s){

	$s = stripslashes($s);

	return $s;

}



function dump($arr, $exit=1){

	echo "<pre>";	

		var_dump($arr);

	echo "<pre>";	

	if($exit)	exit();

}


	function paging($r, $url='', $curPg=1, $mxR=5, $mxP=5, $class_paging='btn btn-xs btn-default')

	{

	    $class_paging='btn btn-xs btn-default';

       

		if($curPg<1) $curPg=1;

		if($mxR<1) $mxR=5;

		if($mxP<1) $mxP=5;

		$totalRows=count($r);

		if($totalRows==0)	

			return array('source'=>NULL, 'paging'=>NULL);

		$totalPages=ceil($totalRows/$mxR);

		if($curPg > $totalPages) $curPg=$totalPages;

		

		$_SESSION['maxRow']=$mxR;

		$_SESSION['curPage']=$curPg;



		$r2=array();

		$paging="";

		

		//-------------tao array------------------

		$start=($curPg-1)*$mxR;

		$end=($start+$mxR)<$totalRows?($start+$mxR):$totalRows;

		#echo $start;

		#echo $end;

		

		$j=0;

		for($i=$start;$i<$end;$i++)

			$r2[$j++]=$r[$i];

			

		//-------------tao chuoi------------------

		$curRow = ($curPg-1)*$mxR+1;	

		if($totalRows>$mxR)

		{

			$start=1;

			$end=1;

			$paging1 ="";				 	 

			for($i=1;$i<=$totalPages;$i++)

			{	

				if(($i>((int)(($curPg-1)/$mxP))* $mxP) && ($i<=((int)(($curPg-1)/$mxP+1))* $mxP))

				{

					if($start==1) $start=$i;

					if($i==$curPg){

						$paging1.=" <a href='javascript:void(0);' class=\"btn btn-xs btn-info\">".$i."</a> ";//dang xem

					} 		  	

					else    

					{

						$paging1 .= " <a href='".$url."&curPage=".$i."'  class=\"{$class_paging}\">".$i."</a> ";	

					}

					$end=$i;	

				}

			}//tinh paging

			//$paging.= "Go to page :&nbsp;&nbsp;" ;

			#if($curPg>$mxP)

			#{

				$paging .=" <a href='".$url."' class=\"{$class_paging}\" >&laquo;</a> "; //ve dau

				

				#$paging .=" <a href='".$url."&curPage=".($start-1)."' class=\"{$class_paging}\" >&#8249;</a> "; //ve truoc

				$paging .=" <a href='".$url."&curPage=".($curPg-1)."' class=\"{$class_paging}\" >&#8249;</a> "; //ve truoc

			#}

			$paging.=$paging1; 

			#if(((int)(($curPg-1)/$mxP+1)*$mxP) < $totalPages)  

			#{

				#$paging .=" <a href='".$url."&curPage=".($end+1)."' class=\"{$class_paging}\" >&#8250;</a> "; //ke

				$paging .=" <a href='".$url."&curPage=".($curPg+1)."' class=\"{$class_paging}\" >&#8250;</a> "; //ke

				

				$paging .=" <a href='".$url."&curPage=".($totalPages)."' class=\"{$class_paging}\" >&raquo;</a> "; //ve cuoi

			#}

		}

		$r3['curPage']=$curPg;

		$r3['source']=$r2;

		$r3['paging']=$paging;

		#echo '<pre>';var_dump($r3);echo '</pre>';

		return $r3;

	}




	function paging1($r, $url='', $curPg=1, $mxR=5, $mxP=5, $class_paging='btn btn-xs btn-default')

	{

	    $class_paging='btn btn-xs btn-default';

       

		if($curPg<1) $curPg=1;

		if($mxR<1) $mxR=5;

		if($mxP<1) $mxP=5;

		$totalRows=count($r);

		if($totalRows==0)	

			return array('source'=>NULL, 'paging'=>NULL);

		$totalPages=ceil($totalRows/$mxR);

		if($curPg > $totalPages) $curPg=$totalPages;

		

		$_SESSION['maxRow']=$mxR;

		$_SESSION['curPage']=$curPg;



		$r2=array();

		$paging="";

		

		//-------------tao array------------------

		$start=($curPg-1)*$mxR;

		$end=($start+$mxR)<$totalRows?($start+$mxR):$totalRows;

		#echo $start;

		#echo $end;

		

		$j=0;

		for($i=$start;$i<$end;$i++)

			$r2[$j++]=$r[$i];

			

		//-------------tao chuoi------------------

		$curRow = ($curPg-1)*$mxR+1;	

		if($totalRows>$mxR)

		{

			$start=1;

			$end=1;

			$paging1 ="";				 	 

			for($i=1;$i<=$totalPages;$i++)

			{	

				if(($i>((int)(($curPg-1)/$mxP))* $mxP) && ($i<=((int)(($curPg-1)/$mxP+1))* $mxP))

				{

					if($start==1) $start=$i;

					if($i==$curPg){

						$paging1.=" <a href='javascript:void(0);' class=\"btn btn-xs btn-info\">".$i."</a> ";//dang xem

					} 		  	

					else    

					{

						$paging1 .= " <a href='".$url."p=".$i."'  class=\"{$class_paging}\">".$i."</a> ";	

					}

					$end=$i;	

				}

			}//tinh paging

			//$paging.= "Go to page :&nbsp;&nbsp;" ;

			if($curPg>1)

			{

				//$paging .=" <a href='".$url."' class=\"{$class_paging}\" >&laquo;</a> "; //ve dau

				

				#$paging .=" <a href='".$url."p=".($start-1)."' class=\"{$class_paging}\" >&#8249;</a> "; //ve truoc

				$paging .=" <a href='".$url."p=".($curPg-1)."' class=\"{$class_paging}\" >&#8249;</a> "; //ve truoc

			}

			$paging.=$paging1; 

			#if(((int)(($curPg-1)/$mxP+1)*$mxP) < $totalPages)  

			#{

				#$paging .=" <a href='".$url."p=".($end+1)."' class=\"{$class_paging}\" >&#8250;</a> "; //ke

			if($curPg<$totalPages){
				$paging .=" <a href='".$url."p=".($curPg+1)."' class=\"{$class_paging}\" >&#8250;</a> "; //ke

			}	

				//$paging .=" <a href='".$url."p=".($totalPages)."' class=\"{$class_paging}\" >&raquo;</a> "; //ve cuoi

			#}

		}

		$r3['curPage']=$curPg;

		$r3['source']=$r2;

		$r3['paging']=$paging;

		#echo '<pre>';var_dump($r3);echo '</pre>';

		return $r3;

	}





function paging_home($r, $url='', $curPg=1, $mxR=5, $mxP=5, $class_paging='')

	{

		if($curPg<1) $curPg=1;

		if($mxR<1) $mxR=5;

		if($mxP<1) $mxP=5;

		$totalRows=count($r);

		if($totalRows==0)	

			return array('source'=>NULL, 'paging'=>NULL);

		$totalPages=ceil($totalRows/$mxR);

		if($curPg > $totalPages) $curPg=$totalPages;

		

		$_SESSION['maxRow']=$mxR;

		$_SESSION['curPage']=$curPg;



		$r2=array();

		$paging="";

		

		//-------------tao array------------------

		$start=($curPg-1)*$mxR;

		$end=($start+$mxR)<$totalRows?($start+$mxR):$totalRows;

		#echo $start;

		#echo $end;

		

		$j=0;

		for($i=$start;$i<$end;$i++)

			$r2[$j++]=$r[$i];

			

		//-------------tao chuoi------------------

		$curRow = ($curPg-1)*$mxR+1;	

		if($totalRows>$mxR)

		{

			$start=1;

			$end=1;

			$paging1 ="";				 	 

			for($i=1;$i<=$totalPages;$i++)

			{	

				if(($i>((int)(($curPg-1)/$mxP))* $mxP) && ($i<=((int)(($curPg-1)/$mxP+1))* $mxP))

				{

					if($start==1) $start=$i;

					if($i==$curPg){

						$paging1.=" <span style='display: inline-block;width: 33px;     -webkit-border-radius: 5px;

    -moz-border-radius: 5px;

    border-radius: 5px; line-height: 27px;text-align: center;color: #fff;background:#959595; font-weight: bold;border:1px solid #ddd'>".$i."</span> ";//dang xem

					} 		  	

					else    

					{

						$paging1 .= " <a href='".$url."p=".$i."'  style='display: inline-block; color: #959595;background:#fff;   font-weight: bold;width:33px;     -webkit-border-radius: 5px;

    -moz-border-radius: 5px;

    border-radius: 5px;line-height:27px;border:1px solid #ddd '>".$i."</a> ";	

					}

					$end=$i;	

				}

			}//tinh paging

			//$paging.= "Go to page :&nbsp;&nbsp;" ;

			#if($curPg>$mxP)

			#{

				$paging .=" <a href='".$url."' style='display: inline-block; color: #959595; background:#fff;  font-weight: bold;width:38px;    -webkit-border-radius: 5px;

    -moz-border-radius: 5px;

    border-radius: 5px;line-height:27px;border:1px solid #ddd ' >

				<i class='fa fa-angle-double-left' aria-hidden='true'></i>

				</a> "; //ve dau

				

				#$paging .=" <a href='".$url."p=".($start-1)."' class=\"{$class_paging}\" >&#8249;</a> "; //ve truoc

				//$paging .=" <a href='".$url."p=".($curPg-1)."' style='display: inline-block; color: #6a6a6a; padding: 0px 5px;  font-weight: bold; ' >&#8249;</a> "; //ve truoc

			#}

			$paging.=$paging1; 

			#if(((int)(($curPg-1)/$mxP+1)*$mxP) < $totalPages)  

			#{

				#$paging .=" <a href='".$url."p=".($end+1)."' class=\"{$class_paging}\" >&#8250;</a> "; //ke

				//$paging .=" <a href='".$url."p=".($curPg+1)."' style='display: inline-block; color: #6a6a6a; padding: 0px 5px;  font-weight: bold; ' >&#8250;</a> "; //ke

				

				$paging .=" <a href='".$url."p=".($totalPages)."' style='display: inline-block; color: #959595; background:#fff;  font-weight: bold;width:38px;    -webkit-border-radius: 5px;

    -moz-border-radius: 5px;

    border-radius: 5px;line-height:27px;border:1px solid #ddd ' >

				<i class='fa fa-angle-double-right' aria-hidden='true'></i>

				</a> "; //ve cuoi

			#}

		}

		$r3['curPage']=$curPg;

		$r3['source']=$r2;

		$r3['paging']=$paging;

		#echo '<pre>';var_dump($r3);echo '</pre>';

		return $r3;

	}




function catchuoi($text, $maxchar) {
    if (strlen($text) > $maxchar || $text == '') {
        $words = preg_split('/\s/', $text);      
        $output = '';
        $i      = 0;
        while (1) {
            $length = strlen($output)+strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            } 
            else {
                $output .= " " . $words[$i];
                ++$i;
            }
        }
        $output .= '...';
    } 
    else {
        $output = $text;
    }
    return $output;
}


function stripUnicode($str){

  if(!$str) return false;

   $unicode = array(

     'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',

     'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

     'd'=>'đ',

     'D'=>'Đ',

     'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',

   	  'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

   	  'i'=>'í|ì|ỉ|ĩ|ị',	  

   	  'I'=>'Í|Ì|Ỉ|Ĩ|Ị',

     'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',

   	  'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

     'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',

   	  'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

     'y'=>'ý|ỳ|ỷ|ỹ|ỵ',

     'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'

   );

   foreach($unicode as $khongdau=>$codau) {

     	$arr=explode("|",$codau);

   	  $str = str_replace($arr,$khongdau,$str);

   }

return $str;

}// Doi tu co dau => khong dau



function changeTitle($str)

{

	if(!$str) return false;

	$unicode = array(

	 'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',

	 'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

	 'd'=>'đ',

	 'D'=>'Đ',

	 'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',

	  'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

	  'i'=>'í|ì|ỉ|ĩ|ị',	  

	  'I'=>'Í|Ì|Ỉ|Ĩ|Ị',

	 'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',

	  'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

	 'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',

	  'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

	 'y'=>'ý|ỳ|ỷ|ỹ|ỵ',

	 'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'

	);

	foreach($unicode as $khongdau=>$codau) {

		$arr=explode("|",$codau);

	  $str = str_replace($arr,$khongdau,$str);

	}



	$str = strtolower($str);

	$str = trim($str);

	$str=preg_replace('/[^a-zA-Z0-9\ ]/','',$str); 

	$str = str_replace("  "," ",$str);

	$str = str_replace(" ","-",$str);

	return $str;

	

}

function getCurrentPageURL() {


    $pageURL = 'http';

    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}

    $pageURL .= "://";

    if ($_SERVER["SERVER_PORT"] != "80") {

        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];

    } else {

        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];

    }

	$pageURL = explode("/p=", $pageURL);

    return $pageURL[0];

}


function getCurrentPageURL1() {

    $pageURL = 'http';

    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}

    $pageURL .= "://";



        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];

    
	$pageURL = explode("/p=", $pageURL);

    return $pageURL[0];

}


function create_thumb($file, $width, $height, $folder,$file_name,$zoom_crop='1'){



// ACQUIRE THE ARGUMENTS - MAY NEED SOME SANITY TESTS?



$new_width   = $width;

$new_height   = $height;



 if ($new_width && !$new_height) {

        $new_height = floor ($height * ($new_width / $width));

    } else if ($new_height && !$new_width) {

        $new_width = floor ($width * ($new_height / $height));

    }

	

$image_url = $folder.$file;

$origin_x = 0;

$origin_y = 0;

// GET ORIGINAL IMAGE DIMENSIONS

$array = getimagesize($image_url);

if ($array)

{

    list($image_w, $image_h) = $array;

}

else

{

     die("NO IMAGE $image_url");

}

$width=$image_w;

$height=$image_h;



// ACQUIRE THE ORIGINAL IMAGE

$image_ext = trim(strtolower(end(explode('.', $image_url))));

switch(strtoupper($image_ext))

{

     case 'JPG' :

     case 'JPEG' :

         $image = imagecreatefromjpeg($image_url);

		 $func='imagejpeg';

         break;

     case 'PNG' :

         $image = imagecreatefrompng($image_url);

		 $func='imagepng';

         break;

	 case 'GIF' :

	 	 $image = imagecreatefromgif($image_url);

		 $func='imagegif';

		 break;



     default : die("UNKNOWN IMAGE TYPE: $image_url");

}



// scale down and add borders

	if ($zoom_crop == 3) {



		$final_height = $height * ($new_width / $width);



		if ($final_height > $new_height) {

			$new_width = $width * ($new_height / $height);

		} else {

			$new_height = $final_height;

		}



	}



	// create a new true color image

	$canvas = imagecreatetruecolor ($new_width, $new_height);

	imagealphablending ($canvas, false);



	// Create a new transparent color for image

	$color = imagecolorallocatealpha ($canvas, 255, 255, 255, 127);



	// Completely fill the background of the new image with allocated color.

	imagefill ($canvas, 0, 0, $color);



	// scale down and add borders

	if ($zoom_crop == 2) {



		$final_height = $height * ($new_width / $width);

		

		if ($final_height > $new_height) {

			

			$origin_x = $new_width / 2;

			$new_width = $width * ($new_height / $height);

			$origin_x = round ($origin_x - ($new_width / 2));



		} else {



			$origin_y = $new_height / 2;

			$new_height = $final_height;

			$origin_y = round ($origin_y - ($new_height / 2));



		}



	}



	// Restore transparency blending

	imagesavealpha ($canvas, true);



	if ($zoom_crop > 0) {



		$src_x = $src_y = 0;

		$src_w = $width;

		$src_h = $height;



		$cmp_x = $width / $new_width;

		$cmp_y = $height / $new_height;



		// calculate x or y coordinate and width or height of source

		if ($cmp_x > $cmp_y) {



			$src_w = round ($width / $cmp_x * $cmp_y);

			$src_x = round (($width - ($width / $cmp_x * $cmp_y)) / 2);



		} else if ($cmp_y > $cmp_x) {



			$src_h = round ($height / $cmp_y * $cmp_x);

			$src_y = round (($height - ($height / $cmp_y * $cmp_x)) / 2);



		}



		// positional cropping!

		if ($align) {

			if (strpos ($align, 't') !== false) {

				$src_y = 0;

			}

			if (strpos ($align, 'b') !== false) {

				$src_y = $height - $src_h;

			}

			if (strpos ($align, 'l') !== false) {

				$src_x = 0;

			}

			if (strpos ($align, 'r') !== false) {

				$src_x = $width - $src_w;

			}

		}



		imagecopyresampled ($canvas, $image, $origin_x, $origin_y, $src_x, $src_y, $new_width, $new_height, $src_w, $src_h);



    } else {



        // copy and resize part of an image with resampling

        imagecopyresampled ($canvas, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);



    }

	





$new_file=$file_name.'_'.$new_width.'x'.$new_height.'.'.$image_ext;

// SHOW THE NEW THUMB IMAGE

if($func=='imagejpeg') $func($canvas, $folder.$new_file,100);

else $func($canvas, $folder.$new_file,floor ($quality * 0.09));



return $new_file;

}



function ChuoiNgauNhien($sokytu){

$chuoi="ABCDEFGHIJKLMNOPQRSTUVWXYZWabcdefghijklmnopqrstuvwxyzw0123456789";

for ($i=0; $i < $sokytu; $i++){

	$vitri = mt_rand( 0 ,strlen($chuoi) );

	$giatri= $giatri . substr($chuoi,$vitri,1 );

}

return $giatri;

} 
function ChuoiNgauNhien1($sokytu){

$chuoi="123456789";

for ($i=0; $i < $sokytu; $i++){

	$vitri = mt_rand( 0 ,strlen($chuoi) );

	$giatri= $giatri . substr($chuoi,$vitri,1 );

}

return $giatri;

} 


function showDigits($digits='00000'){

		$ret = "";

		$digits = str_split($digits);

		foreach($digits as $digit){

			$ret .= '<img src="images/counter/'.$digit.'.jpg" align="absmiddle" />';

		}

		return $ret;

	}



function _substr($str,$n){

if(strlen($str)<$n) return $str;

$html = substr($str,0,$n);

$html = substr($html,0,strrpos($html,' '));

return $html.'...';

}	



function daysangtranglogin(){

    $_SESSION[$login_name] = false;

	unset($_SESSION['login']);

    if($_REQUEST['com']!='user' || $_REQUEST['act']!='login')

	   redirect("index.php?com=user&act=login");

}



function taomatkhau($str){

    $temp = sha1(md5(trim($str)));

	return $temp;

}







function q_bodautv($str)

{

	if(!$str) return false;

	$unicode = array(

	 'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',

	 'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

	 'd'=>'đ',

	 'D'=>'Đ',

	 'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',

	  'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

	  'i'=>'í|ì|ỉ|ĩ|ị',	  

	  'I'=>'Í|Ì|Ỉ|Ĩ|Ị',

	 'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',

	  'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

	 'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',

	  'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

	 'y'=>'ý|ỳ|ỷ|ỹ|ỵ',

	 'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'

	);

	foreach($unicode as $khongdau=>$codau) {

		$arr=explode("|",$codau);

	  $str = str_replace($arr,$khongdau,$str);

	}



	$str = strtolower($str);

	$str = trim($str);

	$str=preg_replace('/[^a-zA-Z0-9\ ]/','',$str); 

	$str = str_replace("  "," ",$str);

	$str = str_replace(" ","-",$str);

	return $str;

}



function q_bodautv1($str)

{

	if(!$str) return false;

	$unicode = array(

	 'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',

	 'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

	 'd'=>'đ',

	 'D'=>'Đ',

	 'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',

	  'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

	  'i'=>'í|ì|ỉ|ĩ|ị',	  

	  'I'=>'Í|Ì|Ỉ|Ĩ|Ị',

	 'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',

	  'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

	 'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',

	  'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

	 'y'=>'ý|ỳ|ỷ|ỹ|ỵ',

	 'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'

	);

	foreach($unicode as $khongdau=>$codau) {

		$arr=explode("|",$codau);

	  $str = str_replace($arr,$khongdau,$str);

	}



	$str = strtolower($str);

	$str = trim($str);

	$str=preg_replace('/[^a-zA-Z0-9\ ]/','',$str); 

	$str = str_replace("  "," ",$str);

	$str = str_replace(" ","_",$str);

	return $str;

}

function q_tenhinh($tenhinh){	//Tạo tên hình, truyền vào $_FILES['file']['name']	

	$ten_anh=explode(".",$tenhinh);

	$result = q_bodautv($ten_anh[0])."-".time().rand(0,9);

	return $result;	

}



/*

function load_view($file){

	ob_start();

	include _template.$file."_tpl.php";

	$content = ob_get_contents();

	ob_end_clean();

	return $content;

}



function check_browser(){

	$useragent = $_SERVER['HTTP_USER_AGENT'];



	if (preg_match('|MSIE ([0-9].[0-9]{1,2})|',$useragent,$matched)) {

			$browser_version=$matched[1];

			$browser = 'IE';

	} elseif (preg_match( '|Opera ([0-9].[0-9]{1,2})|',$useragent,$matched)) {

			$browser_version=$matched[1];

			$browser = 'Opera';

	} elseif(preg_match('|Firefox/([0-9\.]+)|',$useragent,$matched)) {

			$browser_version=$matched[1];

			$browser = 'Firefox';

	} elseif(preg_match('|Safari/([0-9\.]+)|',$useragent,$matched)) {

			$browser_version=$matched[1];

			$browser = 'Safari';

	} else {

			// browser not recognized!

			$browser_version = 0;

			$browser= 'other';

	}

	return $browser;

}



function check_yahoo($nick_yahoo='nthaih'){

	$file = @fopen("http://opi.yahoo.com/online?u=".$nick_yahoo."&m=t&t=1","r");

	$read = @fread($file,200);

	

	if($read==false || strstr($read,"00"))

		$img = '<img src="media/images/yahoo_offline.gif" width="155" height="46" border="0" />';

	else

		$img = '<img src="media/images/yahoo_online.gif" width="155" height="46" border="0" />';

	return '<a href="ymsgr:sendIM?'.$nick_yahoo.'">'.$img.'</a>';

}



function check_skype($nick_skype='ha.ngoc.thai'){

#		if(strlen(@file_get_contents("http://mystatus.skype.com/bigclassic/".$nick_skype))>2000)

		$img = '<img src="media/images/skype_online.gif" width="93" height="46" border="0" />';

#		else

#			$img = '<img src="media/images/skype_offline.gif" width="93" height="46" border="0" />';

	//alert(strlen(@file_get_contents("http://mystatus.skype.com/bigclassic/".$nick_skype)));

	return '<a href="skype:'.$nick_skype.'?call">'.$img.'</a>';

}



function tran($s){

	global $translate;

	#return $translate['Họ tên'];

	return strtr($s, $translate);

}



function redirect_error($n){

	switch ($n) {

		case '404' :

			echo "<center><h1>PAGE NOT FOUND</h1></center>";

			#echo "<script language='javascript'> window.location = 'error_404.html' </-------------script>";

			exit();

		default :

			alert('Kiem tra lai redirect_error');

			exit();

	}

}



function bodau2($s){

	$s = chuanhoa($s);

	$s = stripslashes($s);

	return $s;

}

function parent_alert($s){

	echo '<script language="javascript"> parent.alert("'.$s.'") </script>';

}



function parent_redirect($ur=''){

	echo '<script language="javascript">parent.location = "'.site($ur).'" </script>';

	exit();

}

function back($n=1){

	echo '<script language="javascript"> history.go('.-$n.'); </script>';

}

function goto($ur=''){

	echo '<script language="javascript">window.location = "'.$ur.'" </script>';

	exit();

}

//////////////  URL  //////////////////

///////////////////////////////////////////

function site($s=''){

	if(!DEBUG)

		$s = url_encode($s);

	return 'index.php?'.$s;



	$ur = 'index.php?'.$s;

	return url_encode($s);

	return $ur;

}



function url_encode($s){

	return  base64_encode($s);

}



function url_decode($s)	{

	return base64_decode($s);

}



function get_url(){

	$get = array();

	

	$query_str = !DEBUG ? url_decode($_SERVER['QUERY_STRING']) : $_SERVER["QUERY_STRING"];

	

	$parts = explode('&',$query_str);

	$get['com'] = $parts[0];

	for($i=1; $i<count($parts); $i++){

		$seg = explode( '=', $parts[$i]);

		$get[$seg[0]] = $seg[1];

	}

	$get['com'] = str_replace('-','/',$get['com']);

	return $get;

}





function check_login(){

	if(!isset($_SESSION['site_log']) || $_SESSION['site_log']==false)

		$_GET["com"] = "login";

}



function get_file($com, $act){

	#$com = isset($_GET['com']) ? $_GET['com'] : "index";

	$act = empty($act) ? '' : '_'.$act;

	$file['mod'] = "app/mod/".$com.$act."_mod.php";

	$file['ctr'] = "app/ctr/".$com.$act.".php";

	$file['view'] = "app/view/".$com.$act."_tpl.php";

	return $file;

}



function error_404(){

	if( DEBUG )

		header("Location: ../errors/error_404.php?com=".$_GET['com']);

	else

		header("Location: ../errors/error_404.php");

}



function top_content(){

	require_once "view/layout/top_tpl.php";

}



function bottom_content(){

	require_once "view/layout/bottom_tpl.php";

}



function main_content(){

	$file = get_file();	

	$error_nopage = 0;

	#dump($file);

	if( file_exists($file['mod'])) 

		require_once $file['mod'];

	if( file_exists($file['ctr'])){

		require_once $file['ctr'];

		$error_nopage ++;

	}

	if( file_exists($file['view'])){

		require_once $file['view'];

		$error_nopage++;

	}

	if($error_nopage == 0)

		error_404();

}









//////////////  FORM  //////////////////

///////////////////////////////////////////

function form_select($conf, $vals){

	$name = $conf['n'];

	$v = $conf['v'];

	$t = $conf['t'];

	$s = $conf['s'];

	$danh_muc = '<select id="$name" name="$name">';

	$danh_muc .= '<option value=""> ---- Select ---- </option>';

	for($i=0; $i<count($vals); $i++){

		$danh_muc .= "<option value=".$vals[$i][$v];

		if($vals[$i][$v]==$s) 

			$danh_muc .= " selected ";

		$danh_muc .= ">";

		$danh_muc .= $vals[$i][$t];

		$danh_muc .= '</option>';

	}

	$danh_muc .= '</select>';

	return $danh_muc;

}



function form_select_2($conf, $vals){

	$name = $conf['n'];

	$v = $conf['v'];

	$t = $conf['t'];

	$s = $conf['s'];

	$danh_muc = '<select id="$name" name="$name">';

	$danh_muc .= '<option value=""> ---- Chọn danh mục ---- </option>';

	for($i=0; $i<count($vals); $i++){

		$danh_muc .= "<option value=".$vals[$i][$v];

		if($vals[$i][$v]==$s) 

			$danh_muc .= " selected ";

		$danh_muc .= ">";

		$danh_muc .= $vals[$i][$t."_vi"]." - ".$vals[$i][$t."_en"];

		$danh_muc .= '</option>';

	}

	$danh_muc .= '</select>';

	return $danh_muc;

}

// echo form_select(array('n'=>'id_cat', 'v'=>'id', 't'=>'ten_vi', 's'=>$id_cat), $news_cats);



//////////////  PHAN TRANG  //////////////////

///////////////////////////////////////////



	function getUrl()

	{

		if(strpos($_SERVER['QUERY_STRING'],'p')!==false)

			$url='?'.substr($_SERVER['QUERY_STRING'],0,strpos($_SERVER['QUERY_STRING'],'p'));

		else

			$url='?'.$_SERVER['QUERY_STRING'];

		return $url;

	}



*/

#----------------------------------------------------------	

?>