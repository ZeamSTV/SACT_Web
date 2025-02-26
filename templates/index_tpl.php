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

    <div class="primary-button2">
        <div class="state-layer2">
            <a href="san-pham" class="label-text cta-button"><span> Xem thêm chi tiết </span></a>
        </div>
    </div><img class="sideslide-01-16978617950-1"
        src="https://hanghoavietnam.com.vn/upload/sanpham/sideslide01-16978617950.jpg" />
    <div class="s-n-ph-m-giao-d-ch"> Sản phẩm giao dịch </div><img class="cafetrangchu-1"
        src="https://hanghoavietnam.com.vn/upload/sanpham/bantinhanghoaphaisinhnguyenlieucongnghiepcapherobusta720x4751-16978618106.jpg" /><img
        class="bantinhanghoaphaisinhnguyenlieucongnghiepcapherobusta-720-x-4751-16978618106-1"
        src="https://hanghoavietnam.com.vn/upload/sanpham/nonferrousmetalsvfqh1-16978618058.jpg" /><img
        class="_26-16978617877-1" src="https://hanghoavietnam.com.vn/upload/sanpham/26-16978617877.jpg" />
    <div class="s-n-ph-m-giao-d-ch-c-a-ch-ng-t-i-v-giao-d-ch-to-n-c-u"> Sản phẩm giao dịch của chúng tôi, và giao dịch
        toàn cầu </div>

    <img class="nhandinhthitruong-1" src="https://hanghoa3d.com/images/photos/nhandinhthitruong.jpg" />
    <div class="nhandinhthitruongtitle"> Nhận định thị trường hàng ngày </div>
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
    <div class="tin-t-c-m-i-nh-t"> TIN TỨC MỚI NHẤT </div>
    <div class="newfeed-g-1">
        <div class="product-info-card">
            <img class="image" src="image0.png" />
        </div>
        <div class="bi-n-giao-ng-gi-l-g-c-ch-x-c-nh-bi-n-giao-ng"> BIÊN ĐỘ GIAO ĐỘNG GIÁ LÀ GÌ? <br />CÁCH XÁC ĐỊNH BIÊN
            ĐỘ GIAO ĐỘNG<br /> </div>
    </div>
    <div class="newfeed-g-2">
        <div class="product-info-card2">
            <img class="image" src="image1.png" />
        </div>
        <div class="bi-n-giao-ng-gi-l-g-c-ch-x-c-nh-bi-n-giao-ng2"> BIÊN ĐỘ GIAO ĐỘNG GIÁ LÀ GÌ? <br />CÁCH XÁC ĐỊNH
            BIÊN ĐỘ GIAO ĐỘNG<br /> </div>
    </div>
    <div class="newfeed-g-3">
        <div class="product-info-card3">
            <img class="image" src="image2.png" />
        </div>
        <div class="bi-n-giao-ng-gi-l-g-c-ch-x-c-nh-bi-n-giao-ng3"> BIÊN ĐỘ GIAO ĐỘNG GIÁ LÀ GÌ? <br />CÁCH XÁC ĐỊNH
            BIÊN ĐỘ GIAO ĐỘNG<br /> </div>
    </div>
    <div class="tt-khac">
        <div class="button1"> TIN TỨC KHÁC </div>
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
    height: 3915px;
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
}

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
    top: 350px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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

.primary-button2 {
    background: #d0172e;
    border-radius: 100px;
    display: flex;
    flex-direction: column;
    gap: 8px;
    align-items: center;
    justify-content: center;
    height: 40px;
    position: absolute;
    left: 813px;
    top: 1046px;
    overflow: hidden;
}

.sideslide-01-16978617950-1 {
    border-radius: 6px;
    width: 294.11px;
    height: 279px;
    position: absolute;
    left: 115.97px;
    top: 923px;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    object-fit: cover;
}

.s-n-ph-m-giao-d-ch {
    color: #000000;
    text-align: left;
    font-family: "Roboto", serif;
    font-size: 48px;
    line-height: 20px;
    letter-spacing: 0.25px;
    font-weight: 800;
    position: absolute;
    left: 778px;
    top: 923px;
    width: 520px;
}

.cafetrangchu-1 {
    border-radius: 6px;
    width: 314.77px;
    height: 442px;
    position: absolute;
    left: 432px;
    top: 981px;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    object-fit: cover;
}

.bantinhanghoaphaisinhnguyenlieucongnghiepcapherobusta-720-x-4751-16978618106-1 {
    border-radius: 6px;
    width: 296.08px;
    height: 343px;
    position: absolute;
    left: 114px;
    top: 1223px;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    object-fit: cover;
}

._26-16978617877-1 {
    border-radius: 6px;
    width: 548.87px;
    height: 324px;
    position: absolute;
    left: 768.13px;
    top: 1130px;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    object-fit: cover;
}

.s-n-ph-m-giao-d-ch-c-a-ch-ng-t-i-v-giao-d-ch-to-n-c-u {
    color: #6f6f6f;
    text-align: left;
    font-family: "Roboto", serif;
    font-size: 20px;
    line-height: 20px;
    letter-spacing: 0.25px;
    font-weight: 500;
    position: absolute;
    left: 780.91px;
    top: 981px;
    width: 505.59px;
}


.nhandinhthitruong-1 {
    width: 1203px;
    height: 440px;
    position: absolute;
    left: 114px;
    top: 2298px;
    object-fit: cover;
}

.nhandinhthitruongtitle {
    color: #000000;
    text-align: left;
    font-family: "Roboto", serif;
    font-size: 48px;
    line-height: 67px;
    letter-spacing: 0.25px;
    font-weight: 800;
    position: absolute;
    left: 118px;
    top: 2155px;
    width: 518px;
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

.new-feeds {
    position: absolute;
    inset: 0;
}

.tin-t-c-m-i-nh-t {
    color: #000000;
    text-align: left;
    font-family: "Roboto", serif;
    font-size: 48px;
    line-height: 20px;
    letter-spacing: 0.25px;
    font-weight: 900;
    position: absolute;
    left: 499px;
    top: 2959px;
}

.newfeed-g-1 {
    width: 354px;
    height: 350px;
    position: static;
}

.product-info-card {
    background: var(--var-sds-color-background-default-default, #ffffff);
    border-radius: var(--var-sds-size-radius-200, 8px);
    border-style: solid;
    border-color: var(--var-sds-color-border-default-default, #d9d9d9);
    border-width: 1px;
    padding: var(--var-sds-size-space-400, 16px);
    display: flex;
    flex-direction: column;
    gap: var(--var-sds-size-space-400, 16px);
    align-items: flex-start;
    justify-content: flex-start;
    width: 354px;
    height: 337px;
    min-width: 240px;
    position: absolute;
    left: 130px;
    top: 3060px;
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
    line-height: 140%;
    font-weight: 900;
    position: absolute;
    left: 170px;
    top: 3344px;
}

.newfeed-g-2 {
    width: 354px;
    height: 350px;
    position: static;
}

.product-info-card2 {
    background: var(--var-sds-color-background-default-default, #ffffff);
    border-radius: var(--var-sds-size-radius-200, 8px);
    border-style: solid;
    border-color: var(--var-sds-color-border-default-default, #d9d9d9);
    border-width: 1px;
    padding: var(--var-sds-size-space-400, 16px);
    display: flex;
    flex-direction: column;
    gap: var(--var-sds-size-space-400, 16px);
    align-items: flex-start;
    justify-content: flex-start;
    width: 354px;
    height: 337px;
    min-width: 240px;
    position: absolute;
    left: 544px;
    top: 3060px;
}

.bi-n-giao-ng-gi-l-g-c-ch-x-c-nh-bi-n-giao-ng2 {
    color: #000000;
    text-align: center;
    font-family: "Roboto", serif;
    font-size: 16px;
    line-height: 140%;
    font-weight: 900;
    position: absolute;
    left: 584px;
    top: 3344px;
}

.newfeed-g-3 {
    width: 354px;
    height: 350px;
    position: static;
}

.product-info-card3 {
    background: var(--var-sds-color-background-default-default, #ffffff);
    border-radius: var(--var-sds-size-radius-200, 8px);
    border-style: solid;
    border-color: var(--var-sds-color-border-default-default, #d9d9d9);
    border-width: 1px;
    padding: var(--var-sds-size-space-400, 16px);
    display: flex;
    flex-direction: column;
    gap: var(--var-sds-size-space-400, 16px);
    align-items: flex-start;
    justify-content: flex-start;
    width: 354px;
    height: 337px;
    min-width: 240px;
    position: absolute;
    left: 958px;
    top: 3060px;
}

.bi-n-giao-ng-gi-l-g-c-ch-x-c-nh-bi-n-giao-ng3 {
    color: #000000;
    text-align: center;
    font-family: "Roboto", serif;
    font-size: 16px;
    line-height: 140%;
    font-weight: 900;
    position: absolute;
    left: 998px;
    top: 3344px;
}

.tt-khac {
    background: #d0172e;
    border-radius: 100px;
    border-style: solid;
    border-color: var(--var-sds-color-border-danger-secondary, #c00f0c);
    border-width: 1px;
    padding: var(--var-sds-size-space-300, 12px);
    display: flex;
    flex-direction: row;
    gap: var(--var-sds-size-space-200, 8px);
    align-items: center;
    justify-content: center;
    width: 259px;
    height: 59px;
    position: absolute;
    left: 592px;
    top: 3440px;
    overflow: hidden;
}

.button1 {
    color: var(--var-sds-color-text-danger-on-danger, #fee9e7);
    text-align: left;
    font-family: var(--var-sds-typography-body-font-family, "Roboto", serif);
    font-size: var(--var-sds-size-icon-small, 24px);
    line-height: 100%;
    font-weight: 400;
    position: relative;
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
    position: absolute;
    top: 3630px;
    flex-direction: column;
    padding: 40px 20px;
    color: #ffffff;
    width: 100%;
    justify-content: center;
    align-items: center;
    box-sizing: border-box;
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
    position: relative;
    top: 950px;
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
    position: absolute;
    overflow: hidden;
    border-radius: 6px;
    margin: 0 auto;
    position: relative;
    top: 2260px;
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
</script>