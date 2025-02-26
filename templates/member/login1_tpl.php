<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
    .body-login {
        background: url('https://media.tapchitaichinh.vn/w1480/images/upload/giahan/08172022/chinh_sach_tai_khoa_la_gi_luanvan2s.jpg') no-repeat center center/cover;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: "Roboto", serif;
    }

    .login-container {
        background: rgba(255, 255, 255);
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        text-align: center;
        width: 100%;
        max-width: 400px;
    }

    .title-login {
        font-weight: 900;
        color: #000;
    }

    .login-container img {
        width: 80px;
        margin-bottom: 15px;
    }

    .form-control {
        margin-bottom: 15px;
    }

    .btn-signin {
        text-decoration: none;
        background-color: #28a745;
        color: white;
    }

    .btn-signin:hover {
        background-color: #218838;
    }

    .mt-3 {
        color: #000;
    }

    .text-primary {
        text-decoration: none;
    }
    </style>
</head>

<div class="body-login">
    <div class="login-container">
        <img src="https://images.careerviet.vn/employer_folders/lot8/274748/172357logosact_-10.png" class="header_logo"
            alt="Logo" style="width: 150px" />
        </a>
        <h4 class=" title-login">Đăng nhập</h4>
        <form action="dang-nhap.html" method="post" id="frmDN1">
            <input type="text" id="emaildn1" name="emaildn" class="form-control" placeholder="Username" required>
            <input type="password" id="passworddn1" name="passworddn" class="form-control" placeholder="Password"
                required>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <input type="checkbox" id="rememberMe"> <label for="rememberMe">Lưu đăng nhập</label>
                </div>
                <a href="quen-mat-khau.html" class="text-primary">Quên mật khẩu?</a>
            </div>
            <button type="submit" class="btn btn-signin w-100">Đăng nhập</button>
        </form>
        <p class="mt-3">Bạn chưa có tài khoản? <a href="dang-ky.html" class="text-primary">Đăng ký tài khoản</a></p>
    </div>
</div>

</html>