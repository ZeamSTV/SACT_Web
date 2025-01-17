<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Trang quản trị</title>
      <meta name="robots" content="noindex, nofollow">
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link rel="stylesheet" href="http://cms.demoiweb247.com/public/admin/library/bootstrap/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="http://cms.demoiweb247.com/public/admin/library/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="http://cms.demoiweb247.com/public/admin/library/Ionicons/css/ionicons.min.css">
      <link rel="stylesheet" href="http://cms.demoiweb247.com/public/admin/library/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="http://cms.demoiweb247.com/public/admin/plugins/iCheck/flat/blue.css">
      <link rel="stylesheet" href="http://cms.demoiweb247.com/public/admin/css/AdminLTE.min.css">
      <link rel="stylesheet" href="http://cms.demoiweb247.com/public/admin/css/skin-blue.min.css">
      <link rel="stylesheet" href="http://cms.demoiweb247.com/public/admin/library/bootstrap-daterangepicker/daterangepicker.css">
      <link rel="stylesheet" href="http://cms.demoiweb247.com/public/admin/css/custom.css">
      <link rel="icon" href="http://cms.demoiweb247.com/public/admin/img/Logo/favicon-2.png" type="image/x-icon">
      <link rel="shortcut icon" href="http://cms.demoiweb247.com/public/admin/img/Logo/favicon-2.png" type="image/x-icon">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700&subset=latin-ext,vietnamese">
      <!-- jQuery 3 -->
      <script src="http://cms.demoiweb247.com/public/admin/library/jquery/dist/jquery.min.js"></script>
   </head>
   <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
         <header class="main-header">
            <a href="http://cms.demoiweb247.com/admin/" class="logo">
            <span class="logo-mini"><img src="http://cms.demoiweb247.com/public/admin/img/Logo/favicon-1.png"></span>
            <span class="logo-lg"><img src="http://cms.demoiweb247.com/public/admin/img/Logo/logo-120-x-32.png"></span>
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
               <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"><span class="sr-only">MENU</span></a>
               <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                     <li><a href="http://cms.demoiweb247.com/" target="_blank"><i class="fa fa-hand-o-right"></i> Website</a></li>
                     <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="http://cms.demoiweb247.com/public/admin/img/user2-160x160.jpg" class="user-image">
                        <span class="hidden-xs">Root</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li class="user-header">
                              <img src="http://cms.demoiweb247.com/public/admin/img/user2-160x160.jpg" class="img-circle">
                              <p>Root                  <small>Thành viên từ: 08/06/2018 11:59 AM</small>
                              </p>
                           </li>
                           <li class="user-footer">
                              <div class="pull-left">
                                 <a href="http://cms.demoiweb247.com/admin/admin/edit/-1" class="btn btn-default btn-flat">Tài khoản</a>
                              </div>
                              <div class="pull-right">
                                 <a href="http://cms.demoiweb247.com/admin/home/logout" class="btn btn-default btn-flat">Đăng xuất</a>
                              </div>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>

         
         <aside class="main-sidebar">
            <section class="sidebar">
               <div class="user-panel">
                  <div class="pull-left image"><img src="http://cms.demoiweb247.com/public/admin/img/user2-160x160.jpg" class="img-circle"></div>
                  <div class="pull-left info">
                     <p>Root</p>
                     <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                  </div>
               </div>
               <ul class="sidebar-menu" data-widget="tree">
                  <li class="header"><a href="http://cms.demoiweb247.com/admin/">BẢNG ĐIỀU KHIỂN</a></li>
                  <!-- <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li> -->
                  <li><a href="http://cms.demoiweb247.com/admin/trang"><i class="fa fa-file-text"></i> <span>Trang</span></a></li>
                  <li class="treeview">
                     <a href="#"><i class="fa fa-newspaper-o"></i> <span>Quản lý bài viết</span>
                     <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="http://cms.demoiweb247.com/admin/news">Bài viết</a></li>
                        <li><a href="http://cms.demoiweb247.com/admin/catalognew">Danh mục</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#"><i class="fa fa-th-large"></i> <span>Quản lý sản phẩm</span>
                     <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="http://cms.demoiweb247.com/admin/product">Sản phẩm</a></li>
                        <li><a href="http://cms.demoiweb247.com/admin/catalog">Danh mục</a></li>
                        <li><a href="http://cms.demoiweb247.com/admin/donhang">Đơn hàng</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#"><i class="fa fa-user-md"></i> <span>Quản lý dich vụ</span>
                     <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="http://cms.demoiweb247.com/admin/service">Dịch vụ</a></li>
                        <li><a href="http://cms.demoiweb247.com/admin/catalogservice">Danh mục</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#"><i class="fa fa-handshake-o"></i> <span>Quản lý khách hàng</span>
                     <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="http://cms.demoiweb247.com/admin/emailtintuc">Khách hàng tư vấn</a></li>
                        <li><a href="http://cms.demoiweb247.com/admin/lienhe">Khách hàng liên hệ</a></li>
                     </ul>
                  </li>
                  <li><a href="http://cms.demoiweb247.com/admin/menu"><i class="fa fa-bars"></i> <span>Quản lý menu</span></a></li>
                  <li><a href="http://cms.demoiweb247.com/admin/slide"><i class="fa fa-picture-o"></i> <span>Quản lý Slide</span></a></li>
                  <li><a href="http://cms.demoiweb247.com/admin/notlink"><i class="fa fa-bookmark"></i> <span>Quản lý điểm khác biệt</span></a></li>
                  <li><a href="http://cms.demoiweb247.com/admin/logodoitac"><i class="fa fa-hand-paper-o"></i> <span>Quản lý đối tác</span></a></li>
                  <li><a href="http://cms.demoiweb247.com/admin/hotrotructuyen"><i class="fa fa-mobile"></i> <span>Hỗ trợ trực tuyến</span></a></li>
                  <li><a href="http://cms.demoiweb247.com/admin/ykien"><i class="fa fa-comments-o"></i> <span>Ý kiến khách hàng</span></a></li>
                  <li><a href="http://cms.demoiweb247.com/admin/video"><i class="fa fa-video-camera"></i> <span>Quản lý video</span></a></li>
                  <li><a href="http://cms.demoiweb247.com/admin/thongketruycap"><i class="fa fa-line-chart"></i> <span>Thống kê truy cập</span></a></li>
                  <li><a href="http://cms.demoiweb247.com/admin/cauhoithuonggap"><i class="fa fa-question-circle"></i> <span>Câu hỏi thường gặp</span></a></li>
                  <li class="treeview">
                     <a href="#"><i class="fa fa-cogs"></i> <span>Cấu hình website</span>
                     <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="http://cms.demoiweb247.com/admin/trangchu">Trang chủ</a></li>
                        <li><a href="http://cms.demoiweb247.com/admin/tranglienhe">Trang liên hệ</a></li>
                        <li><a href="http://cms.demoiweb247.com/admin/header">Header</a></li>
                        <li><a href="http://cms.demoiweb247.com/admin/footer">Footer</a></li>
                        <li><a href="http://cms.demoiweb247.com/admin/sidebar">Sidebar</a></li>
                        <li><a href="http://cms.demoiweb247.com/admin/mangxahoi">Mạng xã hội</a></li>
                        <li><a href="http://cms.demoiweb247.com/admin/script">Script</a></li>
                        <li><a href="http://cms.demoiweb247.com/admin/thongtinchung">Thông tin chung</a></li>
                        <li><a href="http://cms.demoiweb247.com/admin/deletecache">Xóa Cache</a></li>
                     </ul>
                  </li>
                  <li><a href="http://cms.demoiweb247.com/public/admin/plugins/ckfinder/ckfinder.html"><i class="fa fa-folder"></i> <span>Quản lý hình ảnh</span></a></li>
                  <li class="treeview">
                     <a href="#"><i class="fa fa-object-group"></i> <span>Quản lý tài khoản</span>
                     <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                     </a>
                     <ul class="treeview-menu">
                        <li class="treeview">
                           <a href="#"><i class="fa fa-users"></i> Quản trị
                           <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                           </a>
                           <ul class="treeview-menu">
                              <li><a href="http://cms.demoiweb247.com/admin/admin"><i class="fa fa-user-secret"></i> Quản trị viên</a></li>
                              <li><a href="http://cms.demoiweb247.com/admin/admingroup"><i class="fa fa-user-circle"></i> Nhóm quản trị</a></li>
                           </ul>
                        </li>
                     </ul>
                  </li>
               </ul>
            </section>
         </aside>



         <div class="content-wrapper">
            <section class="content">
               <div class="margin-bottom">
                  <div class="msg"></div>
               </div>
               <div class="row">
                  <div class="col-lg-3 col-xs-6">
                     <div class="small-box bg-aqua">
                        <div class="inner">
                           <h3>1</h3>
                           <p>Bài viết</p>
                        </div>
                        <div class="icon">
                           <i class="ion ion-ios-paper"></i>
                        </div>
                        <a href="http://cms.demoiweb247.com/admin/news" class="small-box-footer">Quản lý <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-3 col-xs-6">
                     <div class="small-box bg-green">
                        <div class="inner">
                           <h3>3</h3>
                           <p>Sản phẩm</p>
                        </div>
                        <div class="icon">
                           <i class="ion ion-bag"></i>
                        </div>
                        <a href="http://cms.demoiweb247.com/admin/product" class="small-box-footer">Quản lý <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-3 col-xs-6">
                     <div class="small-box bg-yellow">
                        <div class="inner">
                           <h3>2</h3>
                           <p>Dịch vụ</p>
                        </div>
                        <div class="icon">
                           <i class="ion ion-person-add"></i>
                        </div>
                        <a href="http://cms.demoiweb247.com/admin/service" class="small-box-footer">Quản lý <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-3 col-xs-6">
                     <div class="small-box bg-red">
                        <div class="inner">
                           <h3>297</h3>
                           <p>Lượng truy cập</p>
                        </div>
                        <div class="icon">
                           <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="http://cms.demoiweb247.com/admin/thongketruycap" class="small-box-footer">Quản lý <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
               </div>
            </section>
         </div>
         <footer class="main-footer">
            <div class="pull-right hidden-xs">Version Beta 1</div>
            <strong>Copyright &copy; 2016 <a href="http://iweb247.net">iWeb247</a>.</strong> All rights reserved.
         </footer>
         <div class="control-sidebar-bg"></div>
      </div>
      <!-- Bootstrap 3.3.7 -->
      <script src="http://cms.demoiweb247.com/public/admin/library/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- AdminLTE App -->
      <script src="http://cms.demoiweb247.com/public/admin/js/adminlte.min.js"></script>
      <!-- iCheck -->
      <script src="http://cms.demoiweb247.com/public/admin/plugins/iCheck/icheck.min.js"></script>
      <!-- Select2 -->
      <script src="http://cms.demoiweb247.com/public/admin/library/select2/dist/js/select2.full.min.js"></script>
      <!-- Ckeditor -->
      <script src="http://cms.demoiweb247.com/public/admin/plugins/ckeditor/ckeditor.js"></script>
      <!-- Ckfinder -->
      <script src="http://cms.demoiweb247.com/public/admin/plugins/ckfinder/ckfinder.js"></script>
      <!-- Moment DateRangePicker and DateRangePicker-->
      <script src="http://cms.demoiweb247.com/public/admin/library/moment/min/moment.min.js"></script>
      <script src="http://cms.demoiweb247.com/public/admin/library/bootstrap-daterangepicker/daterangepicker.js"></script>
      <!-- Input-mask -->
      <script src="http://cms.demoiweb247.com/public/admin/plugins/input-mask/jquery.inputmask.js"></script>
      <!-- Format-price -->
      <script src="http://cms.demoiweb247.com/public/admin/js/jquery.priceformat.min.js"></script>
      <!-- Alert custom -->
      <!-- Custom -->
      <script src="http://cms.demoiweb247.com/public/admin/js/custom.js"></script>
      <script type="text/javascript">
         // Open CKFinder for choose avatar
         function openCKfinder(div){
           $(div).parent('.tongimg').find('.cus_delete_img').remove();
           CKFinder.popup({
             chooseFiles: true,
             width: 800,
             height: 600,
             onInit: function(finder){
               finder.on('files:choose', function(evt){
                 var file = evt.data.files.first();
                 $(div).find('.cus_ckfinder').val(file.getUrl());
                 $(div).find('.show_img').html('<img class="img" src="'+file.getUrl()+'">');
                 $(div).parent('.tongimg').append('<span class="cus_delete_img" title="Xóa" onclick="deleteOneImg(this)"><i class="fa fa-times fa-fw"></i></span>');
               });
               finder.on( 'file:choose:resizedImage', function( evt ) {
                 $(div).find('.cus_ckfinder').val(evt.data.resizedUrl);
                 $(div).find('.show_img').html('<img class="img" src="'+evt.data.resizedUrl+'"><span class="cus_delete_img" title="Xóa" onclick="deleteOneImg(this)"><i class="fa fa-times fa-fw"></i></span>');
                 $(div).parent('.tongimg').append('<span class="cus_delete_img" title="Xóa" onclick="deleteOneImg(this)"><i class="fa fa-times fa-fw"></i></span>');
               });
             }
           });
         };
         // Delete avatar
         function deleteOneImg(img){
           var parent = $(img).parent('.tongimg');
           parent.find('.img').remove();
           parent.find('.show_img').html('<b>Chọn ảnh đại diện</b>');
           parent.find('.image_link').attr('value', '');
           $(img).remove();
         }
         // Open and choose Muti image
         function openCKfinderMulti(){
           //$(div).parent('.tongimg').find('.cus_delete_img').remove();
           CKFinder.popup({
             chooseFiles: true,
             width: 800,
             height: 600,
             onInit: function(finder){
               finder.on('files:choose', function(evt){
               //  console.log(evt.data.files);
                 var filesArr = evt.data.files;
                 var countI = 0;
                 filesArr.forEach(function(file){
                   countI++;
                   //set source image vo
                   var strAppend = '<div class="col-md-6">';
                   strAppend += '<input name="anh_kem_theo[]" type="hidden" value="' + file.getUrl() + '">';
                   strAppend += '<div class="cus_img_box"><img src="'+ file.getUrl() +'" class="img-responsive"/></div>';
                   strAppend += '<input name="alt_anh_kem_theo[]" type="text" placeholder="Alt ảnh...">';
                   strAppend += '<span class="cus_delete_img" title="Xóa" onclick="deleteAnhKemTheo(this)"><i class="fa fa-times fa-fw"></i></span>';
                   strAppend += '</div>';
                   $('#div_anh_kem_theo').append(strAppend);           
                 });          
               });
             }
           });
         };
         // Delete muti image
         function deleteAnhKemTheo(img){
           var parent = $(img).parent();
           parent.remove()
           // console.log(parent);
           // parent.find('img.anh-kem-theo').attr('src', 'http://placehold.it/150x100');
           // parent.find('.hidden-anh-kem-theo').remove();
           // $(img).remove();
           // var parent = $(img).parent().remove();
         }
         
         $(document).ready(function(){
           $('.cus_tool').tooltip(); 
         });
      </script>
   </body>
</html>