<header id="header" class="header has-sticky sticky-jump" style="background-color: #ffffff;">
    <div class="header-wrapper" style="height: auto">
        <link rel="stylesheet" type="text/css" href="css.php">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <div id="masthead" class="header-main">
            <div class="header-inner container flex-row" style="display: flex;  align-items: center; justify-content: space-around;height: 100px; max-width: 100%;">
                <!-- Logo -->
                <div id="logo" class="logo" style="flex: 1; text-align: left;">
                    <a href="" title="<?=$company['title_vi']?>" rel="home">
                        <img width="150px" height="150px" src="https://images.careerviet.vn/employer_folders/lot8/274748/172357logosact_-10.png" class="header_logo" alt="Logo"/>
                    </a>
                </div>

                <!-- Navigation Menu -->
                <nav class="nav header-nav" style="flex: 6; display: flex; justify-content: center;">
                    <ul class="header-nav-main nav" style="display: flex; list-style: none; padding: 0; margin: 0;font-size: 13px;">
                        <li><a href="" class="nav-link">Trang chủ</a></li>
                        <li><a href="gioi-thieu" class="nav-link">Giới thiệu</a></li>
                        <li id="menu-i" class="menu-i menu-i-type-post_type menu-i-object-page menu-i-has-children menu-i menu-i-design-default has-dropdown" style="padding: 0;bottom:2px;">
                            <a href="san-pham" class="nav-link" style="padding-bottom: 6px;">Sản phẩm<i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu nav-drop nav-drop-default">
                                <?php foreach ($cat_main as $key => $v) {?>
                                    <li id="menu-i" class="menu-i menu-i-type-post_type menu-i-object-page menu-i" style="width:250px; height:50px"><a href="<?=$v['tenkhongdau_vi']?>"><?=$v['ten_vi']?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li><a href="huongdan-sudung" class="nav-link">Hướng dẫn sử dụng</a></li>
                        <li><a href="kienthuc-dautu" class="nav-link">Kiến thức đầu tư</a></li>
                        <li><a href="lien-he" class="nav-link">Liên hệ</a></li>
                    </ul>
                </nav>

                <!-- Contact Info -->
                <div class="contact-info" style="flex: 2; display: flex; justify-content: flex-end; gap: 30px;font-size: 14px;">
               
                    <div class="info-item">
                        <i class="fas fa-clock" style="color: #c4090f;"></i>
                        <span style="color: #000">08:30 - 17:30 (Thứ 2 - Thứ 6)</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone-volume" style="color: #c4090f;"></i>
                        <a href="tel:<?=$company['dienthoai']?>" style="color: #000;">Hotline: <?=$company['dienthoai']?></a>
                    </div>
                </div>

                <!-- User Actions -->
                <div class="user-actions" style="flex: 2.5; display: flex; justify-content: flex-end;">
                    <?php if (!isset($_SESSION['login1']['id'])) { ?>
                        <a href="dang-ky.html" class="user-link">Đăng ký</a>
                        <span style="margin: 0 5px;">|</span>
                        <a href="dang-nhap.html" class="user-link">Đăng nhập</a>
                    <?php } else { $ten1 = explode(' ', $_SESSION['login1']['ten']); ?>
                        <a href="thoat.html" class="user-link">Thoát</a>
                        <span style="margin: 0 5px;">|</span>
                        <a href="thong-tin-user.html" class="user-link">Chào: <?=$ten1[count($ten1)-1]?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <style>
       /* Cấu trúc chung */
       .header {
    background-color: #ffffff;
    border-bottom: 1px solid #ddd;
}

.nav-link {
    text-decoration: none;
    color: #000;
    text-transform: uppercase;
    padding: 10px 15px;
    border-radius: 100px;
   
}

.nav-link:hover {
    padding: 10px;
    margin: 10px;
    color:rgb(0, 0, 0);
    background-color:rgb(255, 255, 255);
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
}

.menu-i {
    position: relative;
    padding-right: 25px;
}

.menu-i-has-children > a {
    position: relative;
   
}


/* Sub-menu cơ bản */
/* Cải tiến dropdown menu */
.sub-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    min-width: 220px;
    background-color: #ffffff;
    border-radius: 10px;
    padding: 10px 0;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
    opacity: 0;
    visibility: hidden;
    transform: translateY(-15px);
    transition: all 0.3s ease-in-out;
}

/* Khi hover vào menu chính, hiển thị dropdown */
.menu-i-has-children:hover .sub-menu {
    display: block;
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

/* Sub-menu item */
.sub-menu li {
    position: relative;
    padding: 8px 15px;
    transition: background-color 0.3s ease;
}

/* Link trong sub-menu */
.sub-menu li a {
    text-decoration: none;
    color: #333;
    font-size: 15px;
    font-weight: 500;
    display: flex;
    align-items: center;
    transition: all 0.3s ease-in-out;
}

/* Hiệu ứng khi hover vào sub-menu item */
.sub-menu li:hover {
    background-color:rgb(240, 106, 106);
    border-radius: 8px;
}

/* Hiệu ứng hover icon */
.sub-menu li a i {
    margin-right: 8px;
    color: #c4090f;
    transition: transform 0.3s ease-in-out;
}

.sub-menu li:hover a i {
    transform: scale(1.2);
}

/* Mũi tên icon đẹp hơn */
.menu-i-has-children > a i {
    margin-left: 5px;
    transition: transform 0.3s ease-in-out;
}

.menu-i-has-children:hover > a i {
    transform: rotate(180deg);
}


.sub-menu-link {
    text-decoration: none;
    color: #000;
    padding: 10px 15px;
    display: block;
    font-size: 14px;
    font-weight: bold;
}


.header-nav > li.menu-i {
    position: relative;
}


.header-nav .menu-i > .sub-menu {
    display: none; 
    position: absolute;
    top: 30px; 
    left: 0;
    background-color: #fff; 
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); 
    padding: 10px 0;
    min-width: 200px; 
    z-index: 999; 
    opacity: 0; 
    visibility: hidden; 
    transition: all 0.3s ease; 
}


.header-nav .menu-i:hover > .sub-menu {
   list-style: none;
    display: block; 
    opacity: 1; 
    visibility: visible; 
    transform: translateY(10px); 
}


.header-nav .menu-i > .sub-menu li a {
    color: #333; 
    padding: 10px 20px; 
    text-decoration: none; /
    display: block;
    transition: background-color 0.3s ease, color 0.3s ease;
}


.header-nav .menu-i:hover .sub-menu {
    transform: translateY(10px); 
}


.header-nav .menu-i > .sub-menu li a .icon {
    margin-right: 8px;
    font-size: 13px;
    color: #555;
}


.header-nav .menu-i > .sub-menu li:hover > .sub-menu {
    visibility: visible;
    opacity: 1;
}
/* Container chứa hai nút */
.user-actions {
    display: flex;
    align-items: center;
    gap: 15px;
}

/* Thiết kế chung cho nút */
.user-link {
    display: inline-block;
    padding: 10px 20px;
    font-size: 14px;
    font-weight: bold;
    text-transform: uppercase;
    text-decoration: none;
    border-radius: 25px;
    transition: all 0.3s ease-in-out;
}

/* Nút Đăng ký */
.user-link:first-child {
    background-color: #c4090f;
    color: white;
    border: 2px solid #c4090f;
}

.user-link:first-child:hover {
    background-color: white;
    color: #c4090f;
    box-shadow: 0px 4px 10px rgba(196, 9, 15, 0.3);
}

/* Nút Đăng nhập */
.user-link:last-child {
    background-color: white;
    color: #c4090f;
    border: 2px solid #c4090f;
}

.user-link:last-child:hover {
    background-color: #c4090f;
    color: white;
    box-shadow: 0px 4px 10px rgba(196, 9, 15, 0.3);
}

/* Khoảng cách giữa 2 nút */
.user-actions span {
    font-weight: bold;
    color: #c4090f;
}

    </style>

</header>
