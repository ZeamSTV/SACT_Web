<body>
    <!-- Banner Section -->
    <section class="banner-section">
        <div class="banner-container">
            <div class="banner-wrapper">
                <div class="banner-slide" style="background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20191120/pngtree-financial-fashion-simple-stock-market-webpage-advertising-banner-background-image_322675.jpg');"></div>
                <div class="banner-slide" style="background-image: url('https://giacatloi.vn/wp-content/uploads/2020/05/chung-khoan-forex-phai-sinh-hang-hoa.jpg');"></div>
                <div class="banner-slide" style="background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20210906/pngtree-financial-stock-trend-blue-business-image_805475.jpg');"></div>
            </div>
            
            <!-- Navigation Arrows -->
            <svg class="arrow-chevron-left" onclick="prevSlide()" width="49" height="48" viewBox="0 0 49 48" fill="none">
                <path d="M33.8733 35.818L21.8089 23.9999L33.8733 12.1817L30.625 9L15.3125 23.9999L30.625 39L33.8733 35.818Z" fill="white"/>
            </svg>
            <svg class="arrow-chevron-right" onclick="nextSlide()" width="48" height="48" viewBox="0 0 48 48" fill="none">
                <path d="M14.8181 12.182L26.6362 24.0001L14.8181 35.8183L18 39L33 24.0001L18 9L14.8181 12.182Z" fill="white"/>
            </svg>
        </div>
    </section> 

    <!-- Main Content Section -->
    <main class="main-content-section">
        <div class="content-grid">
            <!-- Main Content Column -->
            <div class="main-content-column">
                <article class="about-content">
                    <h2>Về chúng tôi</h2>
                    <a style="color:#000;"><?=$news['noidung_vi']?></a>
                </article>
            </div>

            <!-- Sidebar Column -->
            <aside class="sidebar-column">
                <?php include_once _template."layout/left.php"; ?>
            </aside>
        </div>
    </main>

    <style>
        /* Banner Styles */
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
        .arrow-chevron-left, .arrow-chevron-right {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }
         .arrow-chevron-left { left: 20px; }
         .arrow-chevron-right { right: 20px; }
        /* Page Title Styles */
        .page-title-section .title-bg {
            background-size: cover;
            background-position: center;
            min-height: 300px;
        }
        .main-title {
            color: #000;
            text-align: center;
            padding: 2rem 0;
        }

        /* Main Content Layout */
        .content-grid {
            display: grid;
            grid-template-columns: 3fr 1fr;
            gap: 2rem;
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
        }

        /* Responsive Handling */
        @media (max-width: 768px) {
            .content-grid {
                grid-template-columns: 1fr;
            }
            .page-title-section .title-bg {
                min-height: 150px;
            }
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
</body>