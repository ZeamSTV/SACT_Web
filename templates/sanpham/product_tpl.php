<?php if($com=='san-pham'){?>
<!-- Banner Section -->
<section class="banner-section">
    <div class="banner-container">
        <div class="banner-wrapper">
            <div class="banner-slide"
                style="background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20191120/pngtree-financial-fashion-simple-stock-market-webpage-advertising-banner-background-image_322675.jpg');">
            </div>
            <div class="banner-slide"
                style="background-image: url('https://giacatloi.vn/wp-content/uploads/2020/05/chung-khoan-forex-phai-sinh-hang-hoa.jpg');">
            </div>
            <div class="banner-slide"
                style="background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20210906/pngtree-financial-stock-trend-blue-business-image_805475.jpg');">
            </div>
        </div>

        <!-- Navigation Arrows -->
        <svg class="arrow-chevron-left" onclick="prevSlide()" width="49" height="48" viewBox="0 0 49 48" fill="none">
            <path d="M33.8733 35.818L21.8089 23.9999L33.8733 12.1817L30.625 9L15.3125 23.9999L30.625 39L33.8733 35.818Z"
                fill="white" />
        </svg>
        <svg class="arrow-chevron-right" onclick="nextSlide()" width="48" height="48" viewBox="0 0 48 48" fill="none">
            <path d="M14.8181 12.182L26.6362 24.0001L14.8181 35.8183L18 39L33 24.0001L18 9L14.8181 12.182Z"
                fill="white" />
        </svg>
    </div>
</section>

<div class="row row-small" id="row-products">
    <?php foreach ($cat_main as $key => $v) {?>
    <div class="col medium-4 small-12 large-4">
        <div class="col-inner">
            <div class="product-box">
                <div class="product-image" style="background-image: url('<?=_upload_sanpham_l.$v['photo']?>');"></div>
                <div class="product-info text-center">
                    <h3><a href="<?=$v['tenkhongdau_vi']?>"><?=$v['ten_vi']?></a></h3>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <style>
    .banner-section {
        padding-bottom: 50px;
    }


    .banner-container {
        position: relative;
        height: 508px;
        overflow: hidden;
    }

    .banner-wrapper {
        display: flex;
        height: 100%;
        transition: transform 1s ease;
    }

    .banner-slide {
        flex: 0 0 100%;
        height: 508px;
        background-size: cover;
        background-position: center;
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

    .product-box {
        border-radius: 10px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .product-box:hover {
        transform: scale(1.05);
    }

    .product-image {
        width: 100%;
        padding-top: 75%;
        background-size: cover;
        background-position: center;
    }

    .product-info {
        padding: 15px;
    }

    .product-info h3 a {
        color: #333;
        text-decoration: none;
        font-size: 1.2rem;
    }
    </style>
</div>

<?php } else {?>

<section class="section" id="section_other">
    <div class="section-content relative">
        <div class="row" id="row-title">
            <div class="col small-12 large-12 text-center">
                <h1 class="entry-title mb-0"><?=$title_ttt?></h1>
            </div>
        </div>
    </div>
</section>

<section class="section" id="section_product_list">
    <div class="section-content relative">
        <div class="row row-small">
            <div class="col medium-9 small-12 large-9">
                <div class="col-inner">
                    <div class="row row-small">
                        <?php if($product && count($product) > 0) {
                            foreach ($product as $key => $v) { ?>
                        <div class="col medium-4 small-12 large-4">
                            <div class="col-inner">
                                <div class="card">
                                    <div class="card-image"
                                        style="background-image: url('<?=_upload_sanpham_l.$v['photo']?>');">
                                    </div>
                                    <div class="card-content text-center">
                                        <h3><a href="<?=$v['tenkhongdau_vi']?>"><?=$v['ten_vi']?></a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } } ?>
                    </div>
                </div>
            </div>
            <?php include_once _template."layout/left.php"; ?>
        </div>
    </div>
</section>
<?php } ?>
<style>
.card {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background: #fff;
    transition: transform 0.3s ease-in-out;
}

.card:hover {
    transform: translateY(-5px);
}

.card-image {
    width: 100%;
    height: 200px;
    background-size: cover;
    background-position: center;
}

.card-content {
    padding: 15px;
}

.card-content h3 {
    margin: 0;
    font-size: 18px;
}

.card-content a {
    text-decoration: none;
    color: #333;
}
</style>
<script>
// Slideshow Logic
let currentSlide = 0;
const sliderWrapper = document.querySelector('.banner-wrapper');

function updateSlide() {
    sliderWrapper.style.transform = `translateX(-${currentSlide * 100}%)`;
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % 3;
    updateSlide();
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + 3) % 3;
    updateSlide();
}

setInterval(nextSlide, 3000);
</script>