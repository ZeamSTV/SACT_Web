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
	$id=$_GET['id'];
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
		$sql = "select ten from #_user where username='$username' and password='$password' and role=3";
		$d->query($sql);
		if($d->num_rows() == 0){
			$_SESSION[$login_name] = false;
			unset($_SESSION['login']);
			redirect("index.php?com=user&act=login");
		}
	}
	
$d->reset();
	$sql="SELECT * FROM table_member order by id asc";
$d->query($sql);
$thanhvien=$d->result_array();	

	include 'PHPExcel.php';

/** PHPExcel_Writer_Excel */
include 'PHPExcel/Writer/Excel5.php';
include 'PHPExcel/Worksheet/MemoryDrawing.php';
// Create new PHPExcel object
$objPHPExcel = new PHPExcel();


// Set properties
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw");
$objPHPExcel->getProperties()->setLastModifiedBy("Maarten Balliauw");
$objPHPExcel->getProperties()->setTitle("Office 2007 XLSX Test Document");
$objPHPExcel->getProperties()->setSubject("Office 2007 XLSX Test Document");
$objPHPExcel->getProperties()->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.");

// Add some data









$objPHPExcel->setActiveSheetIndex( 0 )->mergeCells( 'A1:F1' );




$objPHPExcel->getActiveSheet()->getStyle( 'A1:F1' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => 'fe8431' ),'name' => 'Arial', 'bold' => true, 'italic' => false, 'size' => 24), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ) ) );
$objPHPExcel->getActiveSheet()->getStyle( 'A2:F2' )->applyFromArray( array( 'font' => array( 'color' => array( 'rgb' => '333' ),'name' => 'Arial', 'bold' => false, 'italic' => false, 'size' => 11), 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'wrap' => true ) ) );

$objPHPExcel->getActiveSheet()->getStyle('A2:F2')->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);





$objPHPExcel->getActiveSheet()->getColumnDimension( 'A' )->setWidth( 4 );
$objPHPExcel->getActiveSheet()->getColumnDimension( 'B' )->setWidth( 21);
$objPHPExcel->getActiveSheet()->getColumnDimension( 'C' )->setWidth( 20 );
$objPHPExcel->getActiveSheet()->getColumnDimension( 'D' )->setWidth( 50 );
$objPHPExcel->getActiveSheet()->getColumnDimension( 'E' )->setWidth( 30 );
$objPHPExcel->getActiveSheet()->getColumnDimension( 'F' )->setWidth( 20 );



     
$objPHPExcel->setActiveSheetIndex(0)->setCellValue( 'A1','DANH SÁCH THÀNH VIÊN' );
$objPHPExcel->setActiveSheetIndex(0)->setCellValue( 'A2','ID');

$objPHPExcel->setActiveSheetIndex(0)->setCellValue( 'B2','HỌ TÊN');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue( 'C2','ĐIỆN THOẠI');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue( 'D2','EMAIL');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue( 'E2','NGÀY SINH');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue( 'F2','GIỚI TÍNH' );

$vitri=3;
for($i=0;$i<count($thanhvien);$i++ )
{

	$objPHPExcel->getActiveSheet()->getStyle('A'.$vitri.':F'.$vitri.'')->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

$objPHPExcel->setActiveSheetIndex(0)->setCellValue( 'A'.$vitri,$thanhvien[$i]['id']);

$objPHPExcel->setActiveSheetIndex(0)->setCellValue( 'B'.$vitri,$thanhvien[$i]['ten']);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue( 'C'.$vitri,$thanhvien[$i]['dienthoi']);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue( 'D'.$vitri,$thanhvien[$i]['email']);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue( 'E'.$vitri,$thanhvien[$i]['ngaysinh']);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue( 'F'.$vitri,($thanhvien[$i]['sex']==1)?'Nam':'Nữ' );





$objPHPExcel->getActiveSheet()->getStyle('A1')->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
$vitri++;	
}
/* End */




	// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle('DANH SÁCH THÀNH VIÊN');

	/* Ảnh */
/* ADD LOGO */
/* $objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('../images/zoom-travel11123.jpg');
$objDrawing->setCoordinates('D1');
// set resize to false first
$objDrawing->setResizeProportional(false);
// set width later
$objDrawing->setWidth(20);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
$objPHPExcel->getActiveSheet()->getRowDimension(1)->setRowHeight(20); */
/* END LOGO */


// Save Excel 2007 file
//$objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
//$objWriter->save(str_replace('.php', '.xls', __FILE__));

//Redirect output to a client’s web browser (Excel5)
      header( 'Content-Type: application/vnd.ms-excel' );
      header( 'Content-Disposition: attachment;filename="danh-sach-thanh-vien.xls"' );
      header( 'Cache-Control: max-age=0' );

      $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
      $objWriter->save( 'php://output' );	

?>