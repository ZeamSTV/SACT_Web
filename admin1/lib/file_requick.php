<?php
	if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die('Eror');
			$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";

	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

	$d = new database($config['database']);

	$trangchu_index = 0;


	//Thông tin Website
	$sql = "select * from #_company where com='company' limit 0,1";
	$d->query($sql);
	$company = $d->fetch_array();			
	
	$title_bar = $company['title_'.$lang];
	$description = $company['description_'.$lang];
	$keywords = $company['keywords_'.$lang];
	
	$image =_upload_company_l . $company['logore'];





	switch($com){
						
		
			
			
		case 'kien-thuc-nha-khoa':		
			
			$source = "tintuc/news1";
						
			
			$template = "tintuc/news1";
			
			break;

				case 'gallery':		
			
			$source = "tintuc/news8";
						
			
			$template = "tintuc/news8";
			
			break;
	
		
		case 'hop-tac-kinh-doanh':			
			$source = "about/hoptackinhdoanh";
			$template = "about/hoptackinhdoanh";
			break;
	case 'dai-ly':			
			$source = "about/daily";
			$template = "about/daily";
			break;
	case 'cong-tac-vien-ban-hang':			
			$source = "about/ctvbanhang";
			$template = "about/ctvbanhang";
			break;


	case 'ctv':			
			$source = "about/congtacvien";
			$template = "about/congtacvien";
			break;

			case 'nhan-bao-gia':			
			$source = "about/baogiaweb";
		
			break;


			case 'sap-xep':			
			$source = "sanpham/sapxep";
			
			break;


		case 'bang-gia':			
			$source = "about/about2";
			$template = "about/about2";
			break;


			case 'gioi-thieu':		

			$source = "about/about3";
			$template = "about/about3";
			break;



				case 'dieu-khoan-su-dung':			
			$source = "about/about4";
			$template = "about/about4";
			break;
					case 'ho-so':	
			
			$source = "about/tintin";
			break;
					
			
			case 'kiem-tra-don-hang':			
			// $source = "about/about3";
			$template = "about/kiemtradonhang";
			break;
			// case 've-chung-toi':			
			// $source = "about/about";
			// $template = "about/about";
			// break;
			
			case 'chinh-sach-gia-si':			
			$source = "about/about2";
			$template = "about/about2";
			break;
			


		case 'tai-khoan':			
			$source = "about/tintin";
			$template = "about/tintin";
			break;
        
     
          
case 'bang-mau-son':
		$source = "about/bangmauson";		
		$template = "about/bangmauson";
		break;	
			
     	
					
		
		//Tin bài viết
	/*
		case 'gioi-thieu':	
			$source = "tintuc/news";
						
			
			$template = "tintuc/news";
		
			break;
			*/
		case 'may-moc-thiet-bi':	
			$source = "tintuc/news3";
						
			
			$template = "tintuc/news3";
		
			break;
			
		
			
			// case 'blog':	
			// $source = "tintuc/news1";
			// $template = "tintuc/news1";
		
			// break;
			
			case 'chinh-sach':	
			$source = "tintuc/news4";
			$template = "tintuc/news4";
		
			break;


		case 'ho-tro-ky-thuat':	
			$trangchu_index = 1;				
			$source = "tintuc/news6";
			$template = "tintuc/news6";
			break;
			case 'chuong-trinh':	
			$trangchu_index = 1;				
			$source = "tintuc/news";
			$template = "tintuc/news";
			break;
		case 'brand':	
			$trangchu_index = 1;				
			$source = "tintuc/news6";
			$template = "tintuc/news6";
			break;
		case 'skin-solution':	
			$trangchu_index = 1;				
			$source = "tintuc/news7";
			$template = "tintuc/news7";
			break;
			
			

			
	
		
		

			
		case 'hoi-dap':	
			$trangchu_index = 1;				
			$source = "tintuc/news3";
			$template = "tintuc/news3";
			break;	
			
            
            
		
		
			
		
			
		case 'contact':		
			$source = "contact/contact";
			$template = "contact/contact";
			break;	
			
		
			
		
			
		case 'dat-phong':		
		$source = "contact/datphong";
			$template = "contact/datphong";
		break;	
			

		// 	case 'book':		
			
		// 	// $template = "contact/datphong";
		// break;	
			
			
			

		case 'lien-he':		
			$source = "contact/contact";
			$template = "contact/contact";
		break;	
				case 'dat-lich':		
			$source = "newsletter/datlich";
			// $template = "contact/contact_toado2";
			break;	
			
			
		case 'lien-he-nhanh':		
			$source = "contact/contactnhanh";
			
			break;		

		
			
			
		
		case 'san-pham':	
			$com1="san-pham";					
			$source = "sanpham/productnangcao";
			$template = isset($_GET['id']) ? "sanpham/chitiet" : "sanpham/product";	
			break;	



		case 'product':	
			$com1="san-pham";					
			$source = "sanpham/product";
			$template = isset($_GET['id']) ? "sanpham/chitiet" : "sanpham/product";	
			break;	
			
			case 'deals-dang-dien-ra':						
			$source = "sanpham/sanphamdeal";
			$template =  "sanpham/sanphamdeal";	
			break;	

			case 'san-pham-moi':	

			$com1="san-pham-moi";					
			// $source = "sanpham/hangmoive";
			$template =  "sanpham/hangmoive";	
			break;	



			case 'san-pham-ban-chay':
			$com1="san-pham-ban-chay";						
			// $source = "sanpham/banchay";
			$template =  "sanpham/banchay";	
			break;	
		

				case 'thuong-hieu':						
			$source = "sanpham/thuonghieu";
			$template = isset($_GET['idc']) ? "sanpham/thuonghieu_detail" : "sanpham/thuonghieu";	
			break;		

			case 'tags':						
			$source = "sanpham/tags";
			$template = isset($_GET['idc']) ? "sanpham/tags_detail" : "sanpham/tags";	
			break;		


			case 'all':						
			$source = "sanpham/all";
	
			break;	

				case 'allxx':						
			$source = "sanpham/allxx";
	
			break;	

			case 'all11':						
			$source = "sanpham/all11";
	
			break;	
			case 'all1':						
			$source = "sanpham/all1";
	
			break;	
			

			case 'all2':						
			$source = "sanpham/all2";
	
			break;	
		case 'the-loai':						
			$source = "sanpham/theloai";
			$template = isset($_GET['id']) ? "sanpham/product_detail_news" : "sanpham/product";	
			break;	
			
		case 'tim-kiem-nang-cao':						
			$source = "sanpham/timkiemnangcao";
			$template = isset($_GET['id']) ? "sanpham/product_detail_news" : "sanpham/product";	
			break;	

				case 'so-sanh':						
			
			$template = "sanpham/sosanh";	
			break;		

				case 'yeu-thich':						
			
			$template = "sanpham/yeuthich";	
			break;		

			case 'favorite':						
			
			$template = "sanpham/yeuthich";	
			break;		
	case 'search':						
			$source = "sanpham/timkiem";
			$template = "sanpham/timkiem";	
			break;	
			
			case 'tim-kiem':						
			$source = "sanpham/timkiem";
			$template = "sanpham/timkiem";	
			break;		

			case 'chung-nhan':						
			$source = "tintuc/tin1cap/news1";
			$template = "tintuc/tin1cap/news1";
			
			break;
			case 'dich-vu':						
			$source = "tintuc/tin1cap/news";
			$template = "tintuc/tin1cap/news";
			
			break;
/*
			case 'tim-kiem':						
			$source = "sanpham/product";
			$template = "sanpham/product";	
			break;
*/
		
	
			
		

			
		// case 'gio-hang':
		// 	$trangchu_index = 2;
		// 	$source = "sanpham/giohang";
		// 	$template = "sanpham/giohang";
		// 	break;	


			case 'shopping-cart':
			$trangchu_index = 2;
			$source = "sanpham/giohang";
			$template = "sanpham/giohang1";
			break;	

		case 'gio-hang':
			$trangchu_index = 2;
			$source = "sanpham/giohang";
			$template = "sanpham/giohang2";
			break;	
		// case 'thanh-toan':
		// 	$trangchu_index = 2;
		// 	$source = "sanpham/thanhtoan";
		// 	$template = "sanpham/thanhtoan";
		// 	break;

			case 'thanh-toan':
			$trangchu_index = 2;
			$source = "sanpham/thanhtoan";
			$template = "sanpham/thanhtoan2";
			break;

		case 'check-out1':
			$trangchu_index = 2;
			// $source = "sanpham/thanhtoan";
			$template = "sanpham/thanhtoan1";
			break;
				case 'check-out':
			$trangchu_index = 2;
			// $source = "sanpham/thanhtoan";
			$template = "sanpham/thanhtoan2";
			break;
		case 'hoan-thanh':
			$trangchu_index = 2;
			//$source = "sanpham/thanhtoan";
			$template = "sanpham/hoantatthanhtoan";
			break;
		
		case 'hinh-anh':
			$trangchu_index = 2;
			$source = "hinhanh/hinhanh";
			$template = "hinhanh/hinhanh";
			break;
		
		
		
		//USER
		case 'dang-ky':
			$source = "member/register";
			$template = "member/register";
			break;

		case 'dang-ky-cong-tac-vien':
			$source = "member/dangkyctv";

			break;

		case 'thong-tin':
			$source = "member/thongtin";
			$template = "member/thongtin";
			break;
			
			
			
		case 'dang-nhap':
			$source = "member/login1";
			$template = "member/login1";			
			break;
		case 'quen-mat-khau':
			$source = "member/quenmatkhau";
			$template = "member/quenmatkhau";			
			break;
		case 'xac-nhan-mat-khau':
			$source = "member/xacnhanmatkhau";
					
			break;
		case 'logout':
			$source = "member/logout";
				
			break;
		case 'activation':
			$source = "member/activation";
			$template = "index";
			break;
		
		//ĐĂNG KÝ NHẬN TIN
		case 'dang-ky-nhan-tin':
			$source = "newsletter/newsletter";
			break;
			
		case 'dang-ky-nhan-tin-thanh-vien':
			$source = "newsletter/newslettermailthanhvien";
			break;
			
		case 'gui-yeu-cau':		
			$source = "contact/contact";
			//$template = "contact/contact_toado11";
			break;	
				
			case 'dang-nhap1':
				$template = "index";
			break;


				case 'mo-tai-khoan':	

		
			$source ="about/motaikhoan";
			$template = "about/motaikhoan";
			break;
	
			case 'video':	

		
			//$source = "about/thuvien";
			$template = "about/video";
			break;



			case 'phan-hoi':	

				
			$source = "about/phanhoi";
			$template = "phanhoi";
			break;

			case 'cau-hoi-thuong-gap':	

		
			$source = "about/cauhoi";
			$template = "about/cauhoi";
			break;


			case 'trang-chu':
			$trangchu_index = 1;
			$source = "index";
			$template = "index";
			break;

			default: 			
			$trangchu_index = 1;
			$source = "index";
			$template = "index";
			break;
	}



	

    

	//CODE SÀI CHUNG CHO WEBSITE	

	



	
	$d->reset();
	$sql_noibat = "select * from #_tin3cap where  hienthi=1 and noibat=1 order by  id desc limit 0,3";

	$d->query($sql_noibat);

	$baivietmoif = $d->result_array();	

	$d->reset();
	$sql= "select photo,link,ten_vi from #_photo where hienthi=1 and com='chiase' order by id asc";
	$d->query($sql);
	$chiase = $d->result_array();



		$d->reset();
	$sql= "select photo,link,ten_vi from #_photo where hienthi=1 and com='lkweb' order by id asc";
	$d->query($sql);
	$lkweb = $d->result_array();
$d->reset();
	$sql= "select photo,link,ten_vi from #_photo where hienthi=1 and com='video' order by id asc";
	$d->query($sql);
	$videox = $d->result_array();

	$d->reset();
	$sql= "select photo from #_photo where  com='banner' limit 0,1";
	$d->query($sql);
	$bannerheader = $d->fetch_array();



		$d->reset();
	$sql= "select * from #_photo where hienthi=1 and com='hotline' order by stt asc,id desc";
	$d->query($sql);
	$iconht = $d->result_array();


	$d->reset();
	$sql= "select photo,title_$lang,keywords_$lang,description_$lang from #_tinnho where hienthi=1 and com=1 order by stt asc";
	$d->query($sql);
	$metaseo = $d->result_array();

	$d->reset();
	$sql= "select ten_$lang,tenkhongdau_$lang,photo from #_product where hienthi=1  order by stt asc, id desc";
	$d->query($sql);
	$dsspchinh = $d->result_array();		

	
	$d->reset();
	$sql= "select ten_$lang,tenkhongdau_vi,id from #_tin3cap_cat where hienthi=1 and com='cat' order by stt asc, id desc";
	$d->query($sql);
	$dmtintuc = $d->result_array();		

		$d->reset();
	$sql= "select ten_$lang,tenkhongdau_vi,id,photo from #_product_cat where hienthi=1 and com='cat' order by stt asc, id desc";
	$d->query($sql);
	$cat_main = $d->result_array();		




			$d->reset();
			$sql_tintuc = "select ten_$lang,tenkhongdau_$lang from #_tinnho where hienthi=1 and com=7 order by stt asc, id desc";
			$d->query($sql_tintuc);
			$chinhsach = $d->result_array();
		





	if($source!="") include _source.$source.".php";			
				
?>