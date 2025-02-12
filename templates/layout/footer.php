<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Design</title>
    <style>
        body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #0A2742;
    color: #ffffff;
}

.footer {
    background-color: #0A2742;
    padding: 40px 20px;
    text-align: center;
}

.footer .content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    border-bottom: 1px solid #ffffff;
    padding-bottom: 20px;
}

.footer .logo-section {
    flex: 1;
    min-width: 200px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 20px;
}

.footer .logo-section img {
    width: 80px;
}

.footer .logo-section div {
    text-align: left;
}

.footer .column {
    flex: 1;
    min-width: 200px;
    margin-bottom: 20px;
}


.footer .column h4 {
    margin-bottom: 10px;
    font-size: 20px;
    text-transform: uppercase;
    color: white;
}

.footer .column ul {
    list-style: none;
    padding: 0;
}

.footer .column ul li {
    margin-bottom: 8px;
}

.footer .column ul li a {
    color: #ffffff;
    text-decoration: none;
    font-size: 14px;
}

.footer .column ul li a:hover {
    text-decoration: underline;
}

.footer .connect {
    text-align: center;
    margin: 40px 0 20px;
}

.footer .connect h4 {
    font-size: 20px;
    margin-bottom: 10px;
    color: white;
}

.footer .social-icons {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 20px;
}

.footer .social-icons img {
    width: 30px;
    height: 30px;
}

.footer .address {
    font-size: 20px;
    line-height: 1.6;
    margin-top: 20px;
}

    </style>
</head>
<body>
    <footer class="footer" id="footer-wrapper">
        <div class="content">
            <div class="logo-section">
                <img src="./img/sact_logo.png" alt="SACT Logo">
                <div>
                    <h4 style="color: white; text-transform: uppercase;">Về chúng tôi</h4>
                    <p>CÔNG TY CP GIAO DỊCH HÀNG HÓA<br>
                        ĐÔNG NAM Á (SACT)<br>
                        Thành viên kinh doanh chính thức của Sở Giao Dịch Hàng Hoá Việt Nam (MXV).
                    </p>
                </div>
            </div>

            <div class="column">
                <h4>Kiến thức</h4>
                <ul>
                    <li><a href="#">Giao dịch hàng hóa</a></li>
                    <li><a href="#">Phân tích cơ bản</a></li>
                    <li><a href="#">Just a simple test for texts</a></li>
                </ul>
            </div>

            <div class="column">
                <h4>Hỗ Trợ</h4>
                <ul>
                    <li><a href="#">Giao dịch hàng hóa</a></li>
                    <li><a href="#">Phân tích cơ bản</a></li>
                    <li><a href="#">Just a simple test for texts</a></li>
                </ul>
            </div>
        </div>

        <div class="connect">
            <h4>Connect</h4>
            <div class="social-icons">
                <img src="./img/twitter_icon.png" alt="Twitter">
                <img src="./img/facebook_icon.png" alt="Facebook">
                <img src="./img/youtube_icon.png" alt="YouTube">
            </div>
        </div>

        <div class="address">
            Trụ sở chính: CT36A, Định Công, Hoàng Mai, Hà Nội<br>
            CN HN1: 25 Sunrise B, The Manor Central Park, Hoàng Mai, Hà Nội<br>
            CN Hồ Chí Minh: Tầng 2, số 75 Hoàng Văn Thụ, Phường 15, Q. Phú Nhuận, TP HCM
        </div>
    </footer>
</body>
</html>
