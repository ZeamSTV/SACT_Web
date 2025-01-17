<?php

	session_start();

	date_default_timezone_set('Asia/Ho_Chi_Minh');

	error_reporting(E_ALL & ~E_NOTICE & ~8192);

	@define ( '_template' , './templates/');

	@define ( '_source' , './sources/');

	@define ( '_lib' , './lib/'); 



	include_once _lib."config.php";

    

    @define ( '_kiemtraweb' , $check_website);  //Một đoạn mã dành riêng cho 1 website.

    

	include_once _lib."constant.php";

	include_once _lib."functions.php";



	include_once _lib."q_functions.php";

	include_once _lib."library.php";

	include_once _lib."class.database.php";

	















	

	

	$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";

	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";	

	

	$d = new database($config['database']);

	

	include_once _lib."new.php";

	

	

	//Kiểm tra tính hợp lệ

	if((!isset($_SESSION[$login_name]) || $_SESSION[$login_name]==false) && $act!="login"){

		$_SESSION[$login_name] = false;

		unset($_SESSION['login']);

		redirect("index.php?com=user&act=login");		

	}

	if(isset($_SESSION['login'])){

		$username = htmlspecialchars(strip_tags(addslashes(trim($_SESSION['login']['username']))));

		$username = magic_quote($username);

		$password = taomatkhau($_SESSION['login']['password']);

		$sql = "select ten from #_user where username='$username' and password='$password' ";

		$d->query($sql);

		if($d->num_rows() == 0){

			$_SESSION[$login_name] = false;

			unset($_SESSION['login']);

			redirect("index.php?com=user&act=login");

		}

	}

	if($_SESSION['login']['role']==1 && $_GET['com']!='' && $_GET['act']!='logout' && $_GET['act']!='login'){

		if(phanquyen_tv($_GET['com'],$_SESSION['login']['quyen'],$_GET['act'])==0){

			$_SESSION['edit']['quyen'] = 'false';

			transfer("Bạn Không có quyền vào đây !","index.php");

		} else {

			$_SESSION['edit']['quyen'] = 'true';

		}

	}

	

	$active_menu = '';

	
	$_SESSION['SCRIPT_FILENAME'] = str_replace("/cmsnew/index.php","",$_SERVER['SCRIPT_FILENAME']);
	$_SESSION['SERVER_FOLDER'] = $config['finder']['folder'];
	$_SESSION['UPLOAD_DIR'] = $config['finder']['dir'];

	switch($com){

		//Quản lý thành viên

		case 'user':

			$source = "user";

			break;	

		case 'member':

			$source = "member";

			break;	
			case 'quanlytin':

			$source = "quanlytin";

			break;		

		case 'newsletter':

			$source = "newsletter";

			break;	

		case 'thongbaocohang':

			$source = "thongbaocohang";

			break;	

				case 'ykien':

			$source = "ykien";

			break;	

		case 'newsletter_mailthanhvien':

			$source = "newsletter_mailthanhvien";

			break;	

		

		

		//TIN 1 NỘI DUNG



			case 'mucmedia':

			$source = "mucmedia";

	case 'trangtinh':

			$source = "trangtinh";

			break;

			case 'media':

			$source = "media";

			

			break;

		case 'about':

			$active_menu = 'about';

			$source = "about";

			break;

		case 'phanquyen':

			$source = "phanquyen";

			break;	

		case 'com1':

			$source = "com";

			break;	



		//Dạng tin tức		

		case 'tinnho':

			$source = "tintuc/tinnho";

			break;

		case 'tracking':

			$source = "tintuc/tracking";

			break;				

		//TIN 3 CẤP

		case 'tin3cap':

			$source = "tintuc/tin3cap";

			break;

        case 'congtrinh':

			$source = "tintuc/congtrinh";

			break;

		

			case 'hethong':

			$source = "hethong/hethong";

			break;

		

			case 'binhluan':

			$source = "binhluan";

			break;

			case 'danhgia':

			$source = "danhgia";

			break;

			case 'cauhoi':

			$source = "cauhoi";

			break;

			case 'magiamgia':

			$source = "magiamgia";

			break;

			case 'khuyenmai':

			$source = "khuyenmai";

			break;

			case 'traloi':

			$source = "traloi";

			break;

		//THông tin công ty		

		case 'company':

			$active_menu = 'company';

			$source = "company";

			break;					

				

		

	

		

		//LIÊN QUAN ĐẾN ẢNH	

		case 'photo':

			$active_menu = 'photo';

			$source = "photo";

			break;			

	case 'images':

			$source = "hinhanh/images";

			break;	

		

		

	

		//DOWNLOAD

		case 'download':

			$source = "download";

			break;			

		

		

		

	

		//LIÊN QUAN ĐẾN SẢN PHẨM

		case 'product':

			$source = "sanpham/product";

			break;		

			

		case 'product1':

			$source = "sanpham/product1";

			break;		

		

		case 'donhang':

			$source = "sanpham/donhang";

			break;

		

		

			

		default: 

			$source = "index";

			$template = "index";

			break;

	}

	

	

	if($source!="") include _source.$source.".php";

?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <meta name="author" content="" />
  <meta name="copyright" content="" />

  <title>Administrator</title>  
 <link href="" rel="shortcut icon" type="image/x-icon" />
    <link rel='stylesheet' type='text/css' href='media/assets/jquery-ui/ui-lightness/jquery-ui-1.10.3.custom.css' />  
  <link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="library/font-awesome/font-awesome.min.css">
  <link rel="stylesheet" href="library/Ionicons/ionicons.min.css">

   <link rel="stylesheet" href="library/css/select2.min.css">


  <link rel="stylesheet" href="library/css/AdminLTE.min.css">

  	 <link rel="stylesheet" href="library/css/skin-blue.min.css">

     	  
  		 <!-- Date Picker -->
      	<link rel="stylesheet" href="library/bootstrap/bootstrap-datepicker.min.css">

      	  <!-- Daterange picker -->
 			 <link rel="stylesheet" href="library/bootstrap/daterangepicker.css">

 		<!-- bootstrap wysihtml5 - text editor -->
  		<link rel="stylesheet" href="library/bootstrap/bootstrap3-wysihtml5.min.css">

 		 <link rel="stylesheet" href="library/iCheck/blue.css">
 		 <link href="library/multiupload/jquery.filer.css" type="text/css" rel="stylesheet" />
         <link href="library/multiupload/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
         <link rel="stylesheet" href="library/multiupload/jquery.minicolors.css">


          <link rel="stylesheet" href="library/css/custom.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700&amp;subset=vietnamese">


  	<?php if($act!='login'){?>
 	<script  src="media/js/jquery-1.7.2.js"></script>


 	  <!-- Ckeditor -->
      <script src="ckeditor/ckeditor.js"></script>
      <!-- Ckfinder -->
      <script src="ckfinder/ckfinder.js"></script>

      <script type="text/javascript">
           $(document).ready(function() {
        $('.editor').each(function(index, el) {
    var id=$(this).attr('id');
    CKEDITOR.replace( id, {
    height : 400,
    entities: false,
        basicEntities: false,
        entities_greek: false,
        entities_latin: false,
    skin:'office2013',
    filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
    allowedContent:
      'h1 h2 h3 p blockquote strong em;' +
      'a[!href];' +
      'img(left,right)[!src,alt,width,height];' +
      'table tr th td caption;' +
      'span{!font-family};' +
      'span{!color};' +
      'span(!marker);' +
      'del ins'
    });

  });
         });
      </script>
 	
	<?php } ?>





</head>

<body class="<?=($act=='login')?'':'skin-blue sidebar-mini'?>">


	<?php if(($act=="login" && $com=='user') || !isset($_SESSION['login']) || $_SESSION[$login_name]==false){?>
			  <?php include _template.$template."_tpl.php";?>

	<?php } else {?>
		<div class="wrapper">
			<?php include _template."header_tpl.php"?>    
			 <?php include _template."menu_tpl.php";?>  


			 <div class="content-wrapper">
            

		 			  <?php include _template.$template."_tpl.php";?>

            
            </div>


		</div>
	<?php } ?>

<?php if($act=='login'){?>
<script src="library/jquery/jquery.min.js"></script>
<?php } ?>

<script src="media/assets/bootstrap/js/bootstrap.min.js"></script>

<?php if($act!='login'){?>
   <!-- AdminLTE App -->
      <script src="library/js/adminlte.min.js"></script>
<?php } ?>
     <script src="library/iCheck/icheck.min.js"></script>

     <!-- jQuery UI -->
<script src="media/assets/jquery-ui/jquery-ui-1.10.3.custom.min.js"></script>



     <?php if($act!='login'){?>
      <script src="library/js/select2.full.min.js"></script>


      <!-- Moment DateRangePicker and DateRangePicker-->
      <script src="library/js/moment.min.js"></script>
     
      <!-- Input-mask -->
      <script src="library/js/jquery.inputmask.js"></script>
      <!-- Format-price -->
      <script src="library/js/jquery.priceformat.min.js"></script>
      <!-- Alert custom -->
      <!-- Custom -->

 	    <?php if($template=="index"){ ?>
     	      <!-- daterangepicker -->

		
		<!-- datepicker -->
		<!-- <script src="library/bootstrap/bootstrap-datepicker.min.js"></script> -->
		<script src="media/assets/fullcalendar/fullcalendar.min.js"></script>
		<script type="text/javascript" src="media/_demo/page-index.js"></script>
		<?php } ?>


         <script type="text/javascript" src="library/multiupload/jquery.filer.min.js"></script>
         <script src="library/multiupload/jquery.minicolors.js"></script>

  	

<script type="text/javascript">
		$('.file_input').filer({
            showThumbs: true,
            templates: {
                box: '<ul class="jFiler-item-list"></ul>',
                item: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <li><span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span></li>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                            </div>\
                        </li>',
                itemAppend: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                            </div>\
                        </li>',
                progressBar: '<div class="bar"></div>',
                itemAppendToEnd: true,
                removeConfirmation: true,
                _selectors: {
                    list: '.jFiler-item-list',
                    item: '.jFiler-item',
                    progressBar: '.bar',
                    remove: '.jFiler-item-trash-action',
                }
            },
            addMore: true
        });

          
   $('.remove_images').click(function(){
         if (confirm('Bạn có muốn xóa hình này ko ? ')) {
           var id = $(this).attr('data-id');
         var table = 'product_photo';
         var links = "upload/sanpham/";
           $.ajax ({
             type: "POST",
             url: "ajax/delete_images.php",
             data: {id:id,table:table,links:links},
             success: function(result) { 
             }
           });
           $(this).parent().slideUp();
         }
         return false;
       });
</script>

      <script src="library/js/custom.js"></script>



	<?php } ?>



<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

<?php if($act!='login'){?>

	<script type="text/javascript">


		    $('#ten_vi').keyup(function(){

            var tenkhongdau=$(this).val();
 




                $.ajax({
                  type: "POST",
                  url: "ajax/tenkhongdau.php",
                 data: {'tenkhongdau':tenkhongdau},
                
                  success: function(data){
              
                          

                            $('#tenkhongdau_vi').val(data);

                          }
               });


        })
		      $('#ten_en').keyup(function(){

            var tenkhongdau=$(this).val();
 




                $.ajax({
                  type: "POST",
                  url: "ajax/tenkhongdau.php",
                 data: {'tenkhongdau':tenkhongdau},
                
                  success: function(data){
              
                          

                            $('#tenkhongdau_en').val(data);

                          }
               });


        })
		$(".anhienajax").click(function(e) {

			var thaydoiloai =$(this).attr('thaydoiloai');

			var thaydoitable =$(this).attr('thaydoitable');

			

			var thaydoiid =$(this).attr('thaydoiid');

			var idcss = $(this).attr('id');;

			

			

						

			$.ajax({

				url:'ajax/thaydoi.php',

				type:'POST',

				dataType:"html",

				data:{thaydoiloai:thaydoiloai,thaydoitable:thaydoitable,thaydoiid:thaydoiid},

				success:function(data){

					$("#"+idcss).html(data);

				}

			});

			

			

		});

		$(".clickchange").click(function(e) {

			var thaydoiloai =$(this).attr('thaydoiloai');

			var thaydoitable =$(this).attr('thaydoitable');

	

			var thaydoiid =$(this).attr('thaydoiid');

			var idcss = $(this).attr('id');;

			

			

						

			$.ajax({

				url:'ajax/change.php',

				type:'POST',

				dataType:"html",

				data:{thaydoiloai:thaydoiloai,thaydoitable:thaydoitable,thaydoiid:thaydoiid},

				success:function(data){

					$("#"+idcss).html(data);

				}

			});

			

			

		});


	</script>
      <script type="text/javascript">
    
         
         $(document).ready(function(){
           $('.cus_tool').tooltip(); 
         });



       	  function readURL(input) {
			    if (input.files && input.files[0]) {
			        var reader = new FileReader();
			        reader.onload = function(e) {
			            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
			            $('#imagePreview').hide();
			            $('#imagePreview').fadeIn(650);
			        }
			        reader.readAsDataURL(input.files[0]);
			    }
			}
			$("#imageUpload").change(function() {
			    readURL(this);
			});

  	  function readURL1(input) {
			    if (input.files && input.files[0]) {
			        var reader = new FileReader();
			        reader.onload = function(e) {
			            $('#imagePreview1').css('background-image', 'url('+e.target.result +')');
			            $('#imagePreview1').hide();
			            $('#imagePreview1').fadeIn(650);
			        }
			        reader.readAsDataURL(input.files[0]);
			    }
			}
			$("#imageUpload1").change(function() {
			    readURL1(this);
			});

         
      </script>

<?php } ?>



</body>
</html>