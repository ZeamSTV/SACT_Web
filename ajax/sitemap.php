<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php



		// @define ( '_template' , '../templates/');
	@define ( '_lib' , '../admin/lib/');
	@define ( '_source' , '../sources/');
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";

	include_once _lib."class.database.php";
	$d = new database($config['database']);

	$d->reset();
	$sql_setting = "select * from #_company where com='company' limit 0,1";
	$d->query($sql_setting);
	$row_setting= $d->fetch_array();

	$lang_arr = array("vi", "en","cn","hq");
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


	


$header_xml = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n<urlset xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">

<author>".$row_setting['ten_'.$lang]."</author>";
$footer_xml = "<author>".$row_setting['ten_'.$lang]."</author></urlset>";
$file_topic = fopen("../sitemap.xml", "w+");
fwrite($file_topic, $header_xml);

fwrite($file_topic, "<url><loc>http://".$config_url."/trang-chu.html</loc><lastmod>1/12/2015 - 4:43 PM</lastmod><changefreq>daily</changefreq><priority>0.1</priority></url>");
fwrite($file_topic, "<url><loc>http://".$config_url."/gioi-thieu.html</loc><lastmod>1/12/2015 - 4:43 PM</lastmod><changefreq>daily</changefreq><priority>0.1</priority></url>");
fwrite($file_topic, "<url><loc>http://".$config_url."/dich-vu.html</loc><lastmod>1/12/2015 - 4:43 PM</lastmod><changefreq>daily</changefreq><priority>0.1</priority></url>");
fwrite($file_topic, "<url><loc>http://".$config_url."/khach-hang.html</loc><lastmod>1/12/2015 - 4:43 PM</lastmod><changefreq>daily</changefreq><priority>0.1</priority></url>");
fwrite($file_topic, "<url><loc>http://".$config_url."/tuyen-dung.html</loc><lastmod>1/12/2015 - 4:43 PM</lastmod><changefreq>daily</changefreq><priority>0.1</priority></url>");
fwrite($file_topic, "<url><loc>http://".$config_url."/lien-he.html</loc><lastmod>1/12/2015 - 4:43 PM</lastmod><changefreq>daily</changefreq><priority>0.1</priority></url>");
fwrite($file_topic, "<url><loc>http://".$config_url."/bao-gia.html</loc><lastmod>1/12/2015 - 4:43 PM</lastmod><changefreq>daily</changefreq><priority>0.1</priority></url>");


// $d->reset();
// $sql="select DISTINCT type from #_baiviet";
// $d->query($sql);
// $type_baiviet=$d->result_array(); 

// for ($i=0; $i <count($type_baiviet) ; $i++) { 
// 	$d->reset();
// 	$sql = "select * from #_baiviet where type='".$type_baiviet[0]['type']."' order by stt,id desc ";
// 	$d->query($sql);
// 	$baiviet = $d->result_array();

// 	if($baiviet){
// 		foreach ($baiviet as $key => $value) {
// 			fwrite($file_topic, "<url><loc>http://".$config_url."/".get_com_by_type($value['type'])."/".$value['tenkhongdau']."-".$value['id'].".html</loc><lastmod>".date('d/m/Y - g:i A',$value['ngaytao'])."</lastmod><changefreq>daily</changefreq><priority>1</priority></url>");
// 		}
// 	}
	
// }


// $d->reset();
// $sql="select DISTINCT type from #_product";
// $d->query($sql);
// $type_product=$d->result_array(); 
// for ($i=0; $i <count($type_product) ; $i++) { 
// 	$d->reset();
// 	$sql = "select * from #_baiviet where type='".$type_product[0]['type']."' order by stt,id desc ";
// 	$d->query($sql);
// 	$product = $d->result_array();

// 	if($product){
// 		foreach ($product as $key => $value) {
// 			fwrite($file_topic, "<url><loc>http://".$config_url."/".get_com_by_type($value['type'])."/".$value['tenkhongdau']."-".$value['id'].".html</loc><lastmod>".date('d/m/Y - g:i A',$value['ngaytao'])."</lastmod><changefreq>daily</changefreq><priority>1</priority></url>");
// 		}
// 	}
	
// }

 
fwrite($file_topic, $footer_xml);
fclose($file_topic);


fwrite($file_topic, $footer_xml);
fclose($file_topic);

transfer("Đã tạo xong sitemap ! ", "http://".$config_url."/sitemap.xml");
?>