<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
<div class="trang-ch">
    <div class="banner-container">
        <div class="banner-wrapper">
            <div class="banner-slide"
                style="width:1476px; height: 508px; background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20191120/pngtree-financial-fashion-simple-stock-market-webpage-advertising-banner-background-image_322675.jpg');">
            </div>
            <div class="banner-slide"
                style="width:1476px; height: 508px; background-image: url('https://giacatloi.vn/wp-content/uploads/2020/05/chung-khoan-forex-phai-sinh-hang-hoa.jpg');">
            </div>
            <div class="banner-slide"
                style="width:1476px; height: 508px; background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20210906/pngtree-financial-stock-trend-blue-business-image_805475.jpg');">
            </div>
        </div>

        <svg class="arrow-chevron-left" onclick="prevSlide()" width="49" height="48" viewBox="0 0 49 48" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M33.8733 35.818L21.8089 23.9999L33.8733 12.1817L30.625 9L15.3125 23.9999L30.625 39L33.8733 35.818Z"
                fill="white" />
        </svg>
        <svg class="arrow-chevron-right" onclick="nextSlide()" width="48" height="48" viewBox="0 0 48 48" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M14.8181 12.182L26.6362 24.0001L14.8181 35.8183L18 39L33 24.0001L18 9L14.8181 12.182Z"
                fill="white" />
        </svg>
    </div>
    <?php
$cards = [
    [
        "title" => "Về chúng tôi",
        "subhead" => "CÔNG TY CỔ PHẦN ĐẦU TƯ HÀNG HÓA VIỆT NAM",
        "image" => "https://hanghoavietnam.com.vn/upload/tinnho/80f532428d425b1c0253-16993633044.jpg",
        "description" => [
            "Đăng ký, hướng dẫn, đặt lệnh, nộp/rút tiền và giải đáp tất cả các thắc mắc liên quan",
            "Cung cấp thông tin thị trường, nhận định hàng ngày, khuyến nghị đầu tư",
            "Tư vấn chiến lược hàng ngày và chiến lược dài hạn"
        ]
    ],
    [
        "title" => "Dịch vụ của chúng tôi",
        "subhead" => "GIẢI PHÁP ĐẦU TƯ HIỆU QUẢ",
        "image" => "https://hanghoavietnam.com.vn/upload/tinnho/80f532428d425b1c0253-16993633044.jpg",
        "description" => [
            "Tư vấn đầu tư cá nhân và tổ chức",
            "Phân tích thị trường chuyên sâu",
            "Hỗ trợ giao dịch và quản lý danh mục"
        ]
    ],
    [
        "title" => "Liên hệ với chúng tôi",
        "subhead" => "KẾT NỐI NGAY HÔM NAY",
        "image" => "https://hanghoavietnam.com.vn/upload/tinnho/80f532428d425b1c0253-16993633044.jpg",
        "description" => [
            "Hotline: 0123-456-789",
            "Email: contact@company.com",
            "Địa chỉ: 123 Đường ABC, TP. XYZ"
        ]
    ]
];
?>

    <div class="cards-container">
        <?php foreach ($cards as $card): ?>
        <div class="stacked-card">
            <div class="card-state-layer-outlined">
                <div class="state-layer"></div>
            </div>
            <div class="content-container">
                <div class="media-text-content">
                    <img class="media" src="<?= $card['image']; ?>" style="height: 180px; object-fit: cover;"
                        alt="<?= $card['title']; ?>" />
                    <div class="text-content">
                        <div class="headline">
                            <div class="title"> <?= $card['title']; ?> </div>
                            <div class="subhead"> <?= $card['subhead']; ?> </div>
                        </div>
                        <div class="supporting-text">
                            <ul>
                                <?php foreach ($card['description'] as $item): ?>
                                <li><?= $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="actions">
                            <div class="primary-button">
                                <div class="state-layer2">
                                    <div class="label-text cta-button"> Xem thêm chi tiết </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Bố cục sản phẩm giao dịch -->
    <div class="product-layout">

        <div class="left-column">
            <img class="sideslide-01-16978617950-1" src="sideslide-01-16978617950-10.png" alt="Sản phẩm giao dịch">
            <img class="bantinhanghoa"
                src="bantinhanghoaphaisinhnguyenlieucongnghiepcapherobusta-720-x-4751-16978618106-10.png"
                alt="Sản phẩm giao dịch 2">
        </div>
        <!-- Cột phải -->
        <div class="right-column">
            <div class="s-n-ph-m-giao-d-ch">Sản phẩm giao dịch</div>
            <div class="primary-button2">
                <div class="state-layer2">
                    <a href="san-pham" class="label-text cta-button"><span> Xem thêm chi tiết </span></a>
                </div>
            </div>
            <img class="_26-16978617877-1" src="_26-16978617877-10.png" alt="Sản phẩm giao dịch 3">
            <div class="s-n-ph-m-giao-d-ch-c-a-ch-ng-t-i-v-giao-d-ch-to-n-c-u">
                Sản phẩm giao dịch của chúng tôi, và giao dịch toàn cầu
            </div>
            <img class="cafetrangchu-1" src="cafetrangchu-10.png" alt="Café trang chủ">
        </div>
    </div>


    <div class="market-insight">
        <div class="nhandinhthitruongtitle"> Nhận định thị trường hàng ngày </div>
        <img class="nhandinhthitruong-1" src="nhandinhthitruong-10.png" />
    </div>

    <!-- TradingView Widget BEGIN -->
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-wrapper">
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript"
                src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [{
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
                "isTransparent": true,
                "displayMode": "adaptive",
                "colorTheme": "light",
                "locale": "en"
            }
            </script>
        </div>
    </div>
    <!-- TradingView Widget END -->
    <section class="about-section">
        <div class="section-container">
            <div class="about-content">
                <h2 class="section-subtitle"><?=$motalydo['h1_vi']?></h2>
                <h1 class="section-title"><?=$motalydo['h2_vi']?></h1>
                <div class="section-description">
                    <?=$motalydo['mota_vi']?>
                </div>
                <a href="dang-ky-tai-khoan" class="cta-button">
                    <span>Mở tài khoản ngay</span>
                    <i class="fa fas-chevron-right"></i>
                </a>
            </div>

            <div class="reasons-grid">
                <h3 class="reasons-title"><?=$motalydo['h3_vi']?></h3>
                <div class="reasons-container">
                    <?php foreach ($lydo as $key => $v) { ?>
                    <div class="reason-item">
                        <div class="reason-icon">
                            <img src="<?=_upload_tinnho_l.$v['photo']?>" alt="<?=$v['ten_vi']?>">
                        </div>
                        <div class="reason-content">
                            <h4><?=$v['ten_vi']?></h4>
                            <p><?=$v['mota_vi']?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <div class="newss">
        <div class="tin-t-c-m-i-nh-t"> TIN TỨC MỚI NHẤT </div>

        <div class="newfeed-g-1">
            <div class="product-info-card">
                <img class="image" src="image0.png" />
                <div class="bi-n-giao-ng-gi-l-g-c-ch-x-c-nh-bi-n-giao-ng">
                    BIÊN ĐỘ GIAO ĐỘNG GIÁ LÀ GÌ? <br />
                    CÁCH XÁC ĐỊNH BIÊN ĐỘ GIAO ĐỘNG<br />
                </div>
            </div>



            <div class="product-info-card">
                <img class="image" src="image0.png" />
                <div class="bi-n-giao-ng-gi-l-g-c-ch-x-c-nh-bi-n-giao-ng">
                    BIÊN ĐỘ GIAO ĐỘNG GIÁ LÀ GÌ? <br />
                    CÁCH XÁC ĐỊNH BIÊN ĐỘ GIAO ĐỘNG<br />
                </div>
            </div>


            <div class="product-info-card">
                <img class="image" src="image0.png" />
                <div class="bi-n-giao-ng-gi-l-g-c-ch-x-c-nh-bi-n-giao-ng">
                    BIÊN ĐỘ GIAO ĐỘNG GIÁ LÀ GÌ? <br />
                    CÁCH XÁC ĐỊNH BIÊN ĐỘ GIAO ĐỘNG<br />
                </div>
            </div>
        </div>

        <div class="tt-khac">
            <div class="button1"> TIN TỨC KHÁC </div>
        </div>
    </div>



    <div class="rectangle-container">
        <div class="ch-a-co-ta-i-khoa-n"> Chưa có tài khoản? </div>
        <div class="ha-y-ng-ha-nh-cu-ng-sact-co-th-a-t-l-i-nhu-n-m-i-tha-ng"> Hãy đồng hành cùng SACT để có thể
            đạt lợi nhuận mỗi tháng. </div>
        <div class="button2">
            <div class="state-layer2">
                <div class="label-text2"> Đăng ký </div>
            </div>
        </div>
    </div>

    <div class="rectangle-container">
        <div class="ch-a-co-ta-i-khoa-n"> Chưa có tài khoản? </div>
        <div class="ha-y-ng-ha-nh-cu-ng-sact-co-th-a-t-l-i-nhu-n-m-i-tha-ng"> Hãy đồng hành cùng SACT để có thể
            đạt lợi nhuận mỗi tháng. </div>
        <div class="button2">
            <div class="state-layer2">
                <div class="label-text2"> Đăng ký </div>
            </div>
        </div>
    </div>




</div>
<style>
.trang-ch,
.trang-ch * {
    box-sizing: border-box;

}

.trang-ch {
    background: #ffffff;
    position: relative;
    overflow: hidden;
}

.banner-container {
    position: absolute;
    width: 100%;
    height: 508px;
    overflow: hidden;
}

.banner-wrapper {
    display: flex;
    width: 100%;
    height: 100%;
    transition: transform 1s ease-in-out;
}

.banner-slide {
    position: relative;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    flex-shrink: 0;
}

.arrow-chevron-left,
.arrow-chevron-right {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
}

.arrow-chevron-left {
    left: 20px;
}

.arrow-chevron-right {
    right: 20px;
}

.cards-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;

    /* opacity: 0;
    transform: translateY(100px);
    /* Áp dụng animation */
    animation: fadeUp 1s ease-out forwards;
    */
}

/* @keyframes fadeUp {
  0% {
    opacity: 0;
    transform: translateY(100px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
} */

.stacked-card {
    border-radius: 12px;
    display: flex;
    flex-direction: row;
    gap: 0px;
    align-items: flex-start;
    justify-content: flex-start;
    width: 341px;
    height: 520px;
    position: relative;
    margin-top: 350px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);

    opacity: 0;
    transform: translateY(100px);
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;

    /* Animation 0.8s, 
       forwards giữ trạng thái cuối cùng 
       (opacity=1, translateY(0)) */
    animation: fadeUp 0.8s ease-out forwards;
    */
}

.stacked-card.in-view {
    opacity: 1;
    transform: translateY(0);
}

.stacked-card:nth-child(2) {
    transition-delay: 0.2s;
}

.stacked-card:nth-child(3) {
    transition-delay: 0.4s;
}

.card-state-layer-outlined {
    background: var(--m3-sys-light-surface, #fef7ff);
    border-radius: 12px;
    border-style: solid;
    border-color: #ff99a8;
    border-width: 1px;
    flex-shrink: 0;
    width: 100%;
    height: 100%;
    position: absolute;
    right: 0%;
    left: 0%;
    bottom: 0%;
    top: 0%;
    overflow: hidden;
}

.state-layer {
    padding: 10px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    position: absolute;
    right: 0%;
    left: 0%;
    bottom: 0%;
    top: 0%;
}

.content-container {
    border-radius: 12px;
    border-style: solid;
    border-color: #ff99a8;
    border-width: 1px;
    align-self: stretch;
    flex: 1;
    position: relative;
    overflow: hidden;
}

.media-text-content {
    display: flex;
    flex-direction: column;
    gap: 0px;
    align-items: center;
    justify-content: flex-start;
    width: 100%;
    height: 100%;
    position: absolute;
    right: 0%;
    left: 0%;
    bottom: 0%;
    top: 0%;
}

.media {
    align-self: stretch;
    flex: 1;
    position: relative;
}

.text-content {
    padding: 16px;
    display: flex;
    flex-direction: column;
    gap: 32px;
    align-items: flex-start;
    justify-content: flex-start;
    align-self: stretch;
    flex-shrink: 0;
    position: relative;
}

.headline {
    display: flex;
    flex-direction: column;
    gap: 0px;
    align-items: flex-start;
    justify-content: flex-start;
    align-self: stretch;
    flex-shrink: 0;
    position: relative;
}

.title {
    color: var(--m3-sys-light-on-surface, #1d1b20);
    text-align: left;
    font-family: var(--m3-body-large-font-family, 'Roboto', serif);
    font-size: var(--m3-body-large-font-size, 16px);
    line-height: var(--m3-body-large-line-height, 24px);
    letter-spacing: var(--m3-body-large-letter-spacing, 0.5px);
    font-weight: var(--m3-body-large-font-weight, 400);
    position: relative;
    width: 328px;
}

.subhead {
    color: var(--m3-sys-light-on-surface-variant, #49454f);
    text-align: left;
    font-family: var(--m3-body-medium-font-family, 'Roboto', serif);
    font-size: var(--m3-body-medium-font-size, 14px);
    line-height: var(--m3-body-medium-line-height, 20px);
    letter-spacing: var(--m3-body-medium-letter-spacing, 0.25px);
    font-weight: var(--m3-body-medium-font-weight, 400);
    position: relative;
    width: 328px;
}

.supporting-text {
    color: var(--m3-sys-light-on-surface-variant, #49454f);
    text-align: left;
    font-family: var(--m3-body-medium-font-family, 'Roboto', serif);
    font-size: var(--m3-body-medium-font-size, 14px);
    line-height: var(--m3-body-medium-line-height, 20px);
    letter-spacing: var(--m3-body-medium-letter-spacing, 0.25px);
    font-weight: var(--m3-body-medium-font-weight, 400);
    position: relative;
    align-self: stretch;
}

.supporting-text-span {
    color: var(--m3-sys-light-on-surface-variant, #49454f);
    font-family: var(--m3-body-medium-font-family, 'Roboto', serif);
    font-size: var(--m3-body-medium-font-size, 14px);
    line-height: var(--m3-body-medium-line-height, 20px);
    letter-spacing: var(--m3-body-medium-letter-spacing, 0.25px);
    font-weight: var(--m3-body-medium-font-weight, 400);
}


.actions {
    display: flex;
    flex-direction: row;
    gap: 8px;
    align-items: flex-start;
    justify-content: flex-end;
    align-self: stretch;
    flex-shrink: 0;
    position: relative;
}

.primary-button {
    background: #d0172e;
    border-radius: 100px;
    display: flex;
    flex-direction: column;
    gap: 8px;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    height: 40px;
    position: relative;
    overflow: hidden;
}



.label-text {
    color: var(--m3-sys-light-on-primary, #ffffff);
    text-align: center;
    font-family: var(--m3-label-large-font-family, 'Roboto', serif);
    font-size: var(--m3-label-large-font-size, 14px);
    line-height: var(--m3-label-large-line-height, 20px);
    letter-spacing: var(--m3-label-large-letter-spacing, 0.1px);
    font-weight: var(--m3-label-large-font-weight, 500);
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

.product {
    position: absolute;
    inset: 0;
}

.product-layout {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    grid-gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
    margin-top: 150px;
}

/* Cột trái chứa các ảnh */
.left-column {
    display: flex;
    flex-direction: column;
    gap: 20px;

    transform: translateX(-100px);
    opacity: 0;
    transition: transform 0.8s ease-out, opacity 0.8s ease-out;
}

/* Cột phải chứa tiêu đề, button, mô tả và ảnh khác */
.right-column {
    display: flex;
    flex-direction: column;
    gap: 20px;
    justify-content: center;
    transform: translateX(100px);
    opacity: 0;
    transition: transform 0.8s ease-out, opacity 0.8s ease-out;
}

/* Khi nhận class .in-view, chuyển sang trạng thái hiển thị */
.left-column.in-view {
    transform: translateX(0);
    opacity: 1;
}

.right-column.in-view {
    transform: translateX(0);
    opacity: 1;
}

/* Các ảnh chung */
.left-column img,
.right-column img {
    width: 100%;
    border-radius: 6px;
    object-fit: cover;
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
}

/* Giới hạn kích thước ảnh nếu cần */
.left-column img {
    max-width: 300px;
    height: auto;
    margin: 0 auto;
}

.right-column img {
    max-width: 600px;
    height: auto;
    margin: 0 auto;
}

/* Tiêu đề chính */
.s-n-ph-m-giao-d-ch {
    font-size: 48px;
    font-weight: 800;
    color: #000;
    text-align: left;
}

/* Mô tả dưới tiêu đề */
.s-n-ph-m-giao-d-ch-c-a-ch-ng-t-i-v-giao-d-ch-to-n-c-u {
    font-size: 20px;
    font-weight: 500;
    color: #6f6f6f;
    text-align: left;
}

/* Button "Xem thêm chi tiết" */
.primary-button2 {
    background: #d0172e;
    border-radius: 100px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    height: 40px;
    padding: 0 20px;
    overflow: hidden;
    margin: 20px 0;
    max-width: 300px;
}

.primary-button2 .label-text {
    color: #fff;
    font-size: 16px;
    font-weight: 700;
    text-decoration: none;
}

/* Responsive: căn giữa văn bản khi màn hình nhỏ */
@media (max-width: 768px) {

    .s-n-ph-m-giao-d-ch,
    .s-n-ph-m-giao-d-ch-c-a-ch-ng-t-i-v-giao-d-ch-to-n-c-u {
        text-align: center;
    }

    .primary-button2 {
        margin: 20px auto;
    }
}


.marketplace {
    margin-top: 150px;
}

.nhandinhthitruong-1 {
    width: 100%;
    max-width: 1200px;
    height: 450px;
    object-fit: cover;
    display: block;
    margin: 20px auto;
    margin-top: 50px;
}

.nhandinhthitruongtitle {
    color: #000000;
    text-align: center;
    font-family: "Roboto", serif;
    font-size: 48px;
    line-height: 67px;
    letter-spacing: 0.25px;
    font-weight: 800;
    width: 100%;
    max-width: 1018px;
    margin: 20px auto;
    margin-top: 100px;
}

.image-3 {
    width: 1391px;
    height: 112px;
    position: absolute;
    left: 25px;
    top: 2760px;
    object-fit: cover;
}

.decriptions {
    position: absolute;
    inset: 0;
}

.k-nh-u-t-h-ng-h-a-ph-i-sinh {
    color: #000000;
    text-align: left;
    font-family: "Roboto", serif;
    font-size: 48px;
    line-height: 67px;
    letter-spacing: 0.25px;
    font-weight: 800;
    position: absolute;
    left: 116px;
    top: 1668px;
    width: 520px;
}

.th-t-n-gi-n-v-nhanh-ch-ng-v-i-c-c-b-c-sau-ng-k-m-t-i-kho-n-u-t-giao-d-ch-h-ng-h-a-n-p-ti-n-k-qu-t-i-ph-n-m-m-giao-d-ch-giao-d-ch-ph-i-sinh {
    color: #6f6f6f;
    text-align: left;
    font-family: "Roboto", serif;
    font-size: 20px;
    line-height: 37px;
    letter-spacing: 0.25px;
    font-weight: 400;
    position: absolute;
    left: 118px;
    top: 1836px;
}

.th-t-n-gi-n-v-nhanh-ch-ng-v-i-c-c-b-c-sau-ng-k-m-t-i-kho-n-u-t-giao-d-ch-h-ng-h-a-n-p-ti-n-k-qu-t-i-ph-n-m-m-giao-d-ch-giao-d-ch-ph-i-sinh-span {
    color: #6f6f6f;
    font-family: "Roboto", serif;
    font-size: 20px;
    line-height: 37px;
    letter-spacing: 0.25px;
    font-weight: 400;
}

.th-t-n-gi-n-v-nhanh-ch-ng-v-i-c-c-b-c-sau-ng-k-m-t-i-kho-n-u-t-giao-d-ch-h-ng-h-a-n-p-ti-n-k-qu-t-i-ph-n-m-m-giao-d-ch-giao-d-ch-ph-i-sinh-span2 {
    color: #6f6f6f;
    list-style-type: disc;
    padding-left: 1em;
    font-family: "Roboto", serif;
    font-size: 20px;
    line-height: 37px;
    letter-spacing: 0.25px;
    font-weight: 400;
}

.primary-button3 {
    background: #d0172e;
    border-radius: 100px;
    display: flex;
    flex-direction: column;
    gap: 8px;
    align-items: center;
    justify-content: center;
    height: 40px;
    position: absolute;
    left: 116px;
    top: 2063px;
    overflow: hidden;
}

.image-2 {
    width: 751px;
    height: 410px;
    position: absolute;
    left: 636px;
    top: 1683px;
    object-fit: cover;
}


.newss {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.tin-t-c-m-i-nh-t {
    color: #000000;
    text-align: center;
    font-family: "Roboto", serif;
    font-size: 48px;
    line-height: 1.2;
    margin-bottom: 30px;
    font-weight: 900;

    opacity: 0;
    transform: translateY(-50px);
    transition: transform 0.8s ease-out, opacity 0.8s ease-out;
}

.tin-t-c-m-i-nh-t.in-view {
    opacity: 1;
    transform: translateY(0);
}

.newfeed-g-1 {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.product-info-card {
    background: #fff;
    border: 0px solid #d9d9d9;
    border-radius: 2px;
    padding: 16px;
    width: 354px;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    align-items: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1) opacity: 0;
    transform: translateY(100px);
    transition: transform 0.8s ease-out, opacity 0.8s ease-out;
}

.product-info-card.in-view {
    opacity: 1;
    transform: translateY(0);
}

.product-info-card .image {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 10px;
}

.image {
    display: flex;
    flex-direction: column;
    gap: 0px;
    align-items: center;
    justify-content: center;
    align-self: stretch;
    flex-shrink: 0;
    height: 247px;
    position: relative;
    overflow: hidden;
    object-fit: cover;
}

.bi-n-giao-ng-gi-l-g-c-ch-x-c-nh-bi-n-giao-ng {
    color: #000000;
    text-align: center;
    font-family: "Roboto", serif;
    font-size: 16px;
    line-height: 1.4;
    font-weight: 900;
}

.tt-khac {
    text-align: center;
    margin-top: 30px;
}

.button1 {
    display: inline-block;
    background-color: #d0172e;
    color: #ffffff;
    padding: 12px 20px;
    border-radius: 30px;
    font-size: 20px;
    font-weight: 700;
    text-transform: uppercase;
    cursor: pointer;
    text-decoration: none;
    width: 200px;

    opacity: 0;
    transform: translateY(50px);
    transition: transform 0.8s ease-out, opacity 0.8s ease-out;
}

.button1.in-view {
    opacity: 1;
    transform: translateY(0);
}


@media (max-width: 768px) {
    .product-info-card {
        width: 100%;
        max-width: 400px;
        margin: 0 auto;
    }

    .tin-t-c-m-i-nh-t {
        font-size: 32px;
    }

    .button1 {
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
    }
}

.ng-ky-trang-chu {
    position: absolute;
    inset: 0;
}

.rectangle-container {
    background: #022357;
    border-radius: 13px 13px 0px 0px;
    width: 100%;
    height: 290px;
    display: flex;
    flex-direction: column;
    padding: 40px 20px;
    color: #ffffff;
    width: 100%;
    justify-content: center;
    align-items: center;
    box-sizing: border-box;
    margin-top: 50px;
}

.ch-a-co-ta-i-khoa-n {
    color: #ffffff;
    text-align: center;
    font-family: "Roboto", serif;
    font-size: 48px;
    line-height: 67px;
    font-weight: 700;
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.ha-y-ng-ha-nh-cu-ng-sact-co-th-a-t-l-i-nhu-n-m-i-tha-ng {
    color: #ffffff;
    text-align: center;
    font-family: "Roboto", serif;
    font-size: 20px;
    line-height: 67px;
    font-weight: 400;
    width: 545px;
    height: 77.71px;
    /* display: flex; */


}

.button2 {
    background: var(--schemes-primary, #65558f);
    border-radius: 100px;
    display: flex;
    gap: 8px;
    align-items: center;
    justify-content: center;
    width: 168px;
    height: 59px;
    overflow: hidden;
}

.label-text2 {
    color: var(--schemes-on-primary, #ffffff);
    text-align: center;
    font-family: "Roboto", serif;
    font-size: 25px;
    line-height: var(--label-large-line-height, 20px);
    letter-spacing: var(--label-large-tracking, 0.1px);
    font-weight: 500;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

.about-section {
    padding: 80px 0;
    margin-top: 10px;
}

.section-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
}

.about-content {
    position: sticky;
    top: 100px;
    height: fit-content;

    /* Trạng thái khởi đầu: ẩn và dịch sang trái */
    transform: translateX(-100px);
    opacity: 0;
    transition: transform 0.8s ease-out, opacity 0.8s ease-out;
}

/* chuyển sang trạng thái hiển thị */
.about-content.in-view {
    transform: translateX(0);
    opacity: 1;
}

.section-subtitle {
    color: #000;
    font-weight: 800;
    font-size: 48px;
    margin-bottom: 15px;
}

.section-title {
    font-size: 2.5rem;
    line-height: 1.2;
    margin-bottom: 25px;
    color: #022357;
}

.section-description {
    line-height: 1.6;
    color: #4a5568;
    margin-bottom: 30px;
}

.cta-button {
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    padding: 12px 30px;
    font-size: 20px;
    background: #d0172e;
    color: white;
    border-radius: 30px;
    transition: transform 0.2s;
}

.cta-button:hover {
    transform: translateY(-2px);
}

.reasons-grid {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);

    transform: translateX(100px);
    opacity: 0;
    transition: transform 0.8s ease-out, opacity 0.8s ease-out;
}

.reasons-grid.in-view {
    transform: translateX(0);
    opacity: 1;
}

.reasons-title {
    font-size: 1.8rem;
    margin-bottom: 30px;
    color: #022357;
}

.reasons-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.reason-item {
    display: flex;
    gap: 20px;
    padding: 20px;
    background: #f8fafc;
    border-radius: 8px;
}

.reason-icon img {
    width: 60px;
    height: 60px;
    object-fit: contain;
}

.reason-content h4 {
    font-size: 1.1rem;
    margin-bottom: 10px;
    color: #1a202c;
}

.reason-content p {
    font-size: 0.95rem;
    color: #4a5568;
    line-height: 1.5;
}

.tradingview-widget-wrapper {
    overflow: hidden;
    border-radius: 6px;
    margin: 30px;

}

.tradingview-widget-container {
    height: 46px;
    width: auto;
}

@media (max-width: 992px) {
    .section-container {
        grid-template-columns: 1fr;
    }

    .reasons-container {
        grid-template-columns: 1fr;
    }

    .about-content {
        position: static;
    }
}
</style>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // slide show
    let currentSlide = 0;
    const slides = document.querySelectorAll('.banner-slide');
    const wrapper = document.querySelector('.banner-wrapper');

    function showSlide(index) {
        wrapper.style.transform = `translateX(-${index * 100}%)`;
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }

    setInterval(nextSlide, 3000);
    // ______________________observer-------------------
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.2
    };


    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                observer.unobserve(entry.target); // Chỉ chạy một lần để tránh dư thừa
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    // Các phần tử cần quan sát
    const elementsToObserve = [
        '.stacked-card',
        '.left-column',
        '.right-column',
        '.about-content',
        '.reasons-grid',
        '.tin-t-c-m-i-nh-t',
        '.product-info-card',
        '.button1'
    ];

    elementsToObserve.forEach(selector => {
        document.querySelectorAll(selector).forEach(element => observer.observe(element));
    });
});
</script>