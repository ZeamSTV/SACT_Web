<?php


	session_start();
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	error_reporting(E_ALL & ~E_NOTICE & ~8192);

	$session=session_id();




	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './admin/lib/');

	include_once _lib."config.php";
	
	@define ( '_kiemtraweb' , $check_website);  //Một đoạn mã dành riêng cho 1 website.


$lang_arr = array("vi", "en");
if (isset($_GET['lang']) == true) {
    if (in_array($_GET['lang'], $lang_arr) == true) {
        $lang = $_GET['lang'];
        $_SESSION['lang'] = $lang;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
if (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else {

    $lang = $config["lang_defult"];
}

	require_once _source . "language/lang_$lang.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."tridepzai.php";
	include_once _lib."q_functions.php";	//Các hàm bổ sung
	include_once _lib."functions_giohang.php";		
	include_once _lib."class.database.php";
	include_once _lib."file_requick.php";
	include_once _lib."new.php";
	require "simple_html_dom.php";

$urltrangbao='http://luzanaff.com/cosmetics-294';


for($i=1;$i<=6;$i++){
// cao thanhnienviet.vn
				if($i==1){
					$html=file_get_html($urltrangbao);

				}else{

					$html=file_get_html($urltrangbao.'/p='.$i);

				}
			
			
				$tins = $html->find(".block-sp .item-sp");


				foreach ($tins as $key => $v) {
						
				

							$img = $v->find("img", 0)->src;
							
							$img=str_replace('thumb/320x480/2/', '', $img);
							$img='http://luzanaff.com/'.$img;
			
							 $u = 'upload/hinhcao/cosmetics/'. basename($img);
							 file_put_contents($u, file_get_contents($img));



							
				}
			

			
}

echo 1;
?>



