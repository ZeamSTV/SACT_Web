<header id="header" class="header has-sticky sticky-jump" style="background-color: #ffffff;">
    <div class="header-wrapper" style="height: auto">
        <link rel="stylesheet" type="text/css" href="css.php">
        <div id="masthead" class="header-main">
            <div class="header-inner container flex-row" style="display: flex;  align-items: center; justify-content: space-between;height: 100px;">
                <!-- Logo -->
                <div id="logo" class="logo" style="flex: 1; text-align: left;">
                    <a href="" title="<?=$company['title_vi']?>" rel="home">
                        <img width="150px" height="150px" src="https://images.careerviet.vn/employer_folders/lot8/274748/172357logosact_-10.png" class="header_logo" alt="Logo"/>
                    </a>
                </div>

                <!-- Navigation Menu -->
                <nav class="nav header-nav" style="flex: 6; display: flex; justify-content: center;">
                    <ul class="header-nav-main nav" style="display: flex; list-style: none; padding: 0; margin: 0;">
                        <li><a href="" class="nav-link">Trang chủ</a></li>
                        <li><a href="gioi-thieu" class="nav-link">Giới thiệu</a></li>
                        <li id="menu-item-462" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-462 menu-item-design-default has-dropdown" style="padding: 0">
                            <a href="san-pham" class="nav-link">Sản phẩm<i class="icon-angle-down"></i></a>
                            <ul class="sub-menu nav-dropdown nav-dropdown-default">
                                <?php foreach ($cat_main as $key => $v) {?>
                                    <li id="menu-item-461" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-461" style="width:250px; height:50px"><a href="<?=$v['tenkhongdau_vi']?>"><?=$v['ten_vi']?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li><a href="huongdan-sudung" class="nav-link">Hướng dẫn sử dụng</a></li>
                        <li><a href="kienthuc-dautu" class="nav-link">Kiến thức đầu tư</a></li>
                        <li><a href="lien-he" class="nav-link">Liên hệ</a></li>
                    </ul>
                </nav>

                <!-- Contact Info -->
                <div class="contact-info" style="flex: 2; display: flex; justify-content: flex-end; gap: 30px;">
               
                    <div class="info-item">
                        <i class="fas fa-clock" style="color: #c4090f;"></i>
                        <span>08:30 - 17:30 (Thứ 2 - Thứ 6)</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone-volume" style="color: #c4090f;"></i>
                        <a href="tel:<?=$company['dienthoai']?>" style="color: #000;">Hotline: <?=$company['dienthoai']?></a>
                    </div>
                </div>

                <!-- User Actions -->
                <div class="user-actions" style="flex: 1.5; display: flex; justify-content: flex-end;">
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
    font-weight: bold;
    text-transform: uppercase;
    padding: 10px 15px;
    border-radius: 100px;
}

.nav-link:hover {
    color:rgb(0, 0, 0);
    background-color:rgb(255, 255, 255);
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
}

.menu-item {
    position: relative;
    padding-right: 25px;
}

.menu-item-has-children > a {
    position: relative;
   
}


/* Sub-menu cơ bản */
.sub-menu {
    display: none; 
    position: absolute;
    top: 100%; /
    left: 0;
    z-index: 1000;
    min-width: 200px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 0;
    margin: 0;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
}


.menu-item-has-children:hover .sub-menu {
    display: block; 
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}


.sub-menu li {
    position: relative;
}

.sub-menu-link {
    text-decoration: none;
    color: #000;
    padding: 10px 15px;
    display: block;
    font-size: 14px;
    font-weight: bold;
}


.header-nav > li.menu-item {
    position: relative;
}


.header-nav .menu-item > .sub-menu {
    display: none; 
    position: absolute;
    top: 100%; 
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


.header-nav .menu-item:hover > .sub-menu {
   list-style: none;
    display: block; 
    opacity: 1; 
    visibility: visible; 
    transform: translateY(10px); 
}


.header-nav .menu-item > .sub-menu li a {
    color: #333; 
    padding: 10px 20px; 
    text-decoration: none; /
    display: block;
    transition: background-color 0.3s ease, color 0.3s ease;
}


.header-nav .menu-item:hover .sub-menu {
    transform: translateY(10px); 
}


.header-nav .menu-item > .sub-menu li a .icon {
    margin-right: 8px;
    font-size: 16px;
    color: #555;
}


.header-nav .menu-item > .sub-menu li:hover > .sub-menu {
    visibility: visible;
    opacity: 1;
}

    </style>

</header>
