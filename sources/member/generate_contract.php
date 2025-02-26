<?php
require 'vendor/autoload.php';
use PhpOffice\PhpWord\TemplateProcessor;

@define('_lib', './admin/lib/');
@define('_template', './templates/');

include_once _lib . "config.php";
include_once _lib . "functions.php";
include_once _lib . "q_functions.php";   // Các hàm bổ sung
include_once _lib . "class.database.php";

$d = new database($config['database']);
$d = new database($config['database']);

if (!empty($_POST)) {
    // Lấy dữ liệu từ form và xử lý
    $fullname         = htmlspecialchars(addslashes(trim($_POST['fullname'] ?? '')));
    $birthday         = htmlspecialchars(addslashes(trim($_POST['birthday'] ?? '')));
    $personal_email   = htmlspecialchars(addslashes(trim($_POST['personal_email'] ?? '')));
    $passworddk       = md5(addslashes($_POST['personal_password'] ?? ''));
    $personal_address = htmlspecialchars(addslashes(trim($_POST['personal_address'] ?? '')));
    $personal_phone   = htmlspecialchars(addslashes(trim($_POST['personal_phone'] ?? '')));
    $identify_type    = htmlspecialchars(addslashes(trim($_POST['identify_type'] ?? '')));
    $identify_number  = htmlspecialchars(addslashes(trim($_POST['identify_number'] ?? '')));
    $identify_date    = htmlspecialchars(addslashes(trim($_POST['identify_date'] ?? '')));
    $identify_address = htmlspecialchars(addslashes(trim($_POST['identify_address'] ?? '')));
    $bank_number      = htmlspecialchars(addslashes(trim($_POST['bank_number'] ?? '')));
    $bank_name        = htmlspecialchars(addslashes(trim($_POST['bank_name'] ?? '')));

    // Kiểm tra email đã tồn tại chưa
    $sql = "SELECT id FROM #_member WHERE email='$personal_email'";
    $d->query($sql);
    if ($d->num_rows() > 0) {
        transfer("Tài khoản này đã đăng ký", "trang-chu.html");
        return;
    }

    // Tạo thư mục lưu ảnh nếu chưa có
    $upload_dir = 'uploads/';
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // Xử lý upload ảnh CMND/CCCD
    $front_image = $upload_dir . basename($_FILES['identify_image_front']['name']);
    move_uploaded_file($_FILES['identify_image_front']['tmp_name'], $front_image);

    $back_image = $upload_dir . basename($_FILES['identify_image_back']['name']);
    move_uploaded_file($_FILES['identify_image_back']['tmp_name'], $back_image);

    // Lưu vào database
    $sql = "INSERT INTO #_member (ten, ngaysinh, email, password, diachi, dienthoai, loaicmnd, cmnd, ngaycap, noicap, tknh, nganhang, photo, photo1, stt, hienthi)
            VALUES ('$fullname', '$birthday', '$personal_email', '$passworddk', '$personal_address', '$personal_phone', '$identify_type', '$identify_number', '$identify_date', '$identify_address', '$bank_number', '$bank_name', '$front_image', '$back_image', 1, 1)";
    
    if ($d->query($sql)) {
        // Xử lý file Word
        $templatePath = _template . "HOP_DONG_TEMPLATE.docx";
        $outputPath = "output_hopdong/HOP_DONG_" . time() . ".docx";

        $templateProcessor = new TemplateProcessor($templatePath);
        $templateProcessor->setValue('fullname', $fullname);
        $templateProcessor->setValue('birthday', $birthday);
        $templateProcessor->setValue('email', $personal_email);
        $templateProcessor->setValue('address', $personal_address);
        $templateProcessor->setValue('phone', $personal_phone);
        $templateProcessor->setValue('id_type', $identify_type);
        $templateProcessor->setValue('id_number', $identify_number);
        $templateProcessor->setValue('id_date', $identify_date);
        $templateProcessor->setValue('id_place', $identify_address);
        $templateProcessor->setValue('bank_account', $bank_number);
        $templateProcessor->setValue('bank_name', $bank_name);
        $templateProcessor->saveAs($outputPath);

        // Hiển thị thông báo thành công và link tải hợp đồng
        echo "✅ Bạn đã đăng ký thành công! <br>";
        echo "<a href='$outputPath' download>Tải hợp đồng</a>";
    } else {
        transfer(" Hệ thống đang bận, xin quý khách vui lòng thử lại sau", "trang-chu.html");
    }
}
?>