 <header id="header" class="header has-sticky sticky-jump">
                  <div class="header-wrapper">
                    <!--  <div id="top-bar" class="header-top hide-for-sticky nav-dark">
                        <div class="flex-row container">
                           <div class="flex-col hide-for-medium flex-left">
                              <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
                               
                                 <li class="html custom html_topbar_left">
                                    <a href="mo-tai-khoan">
                                       <span><strong>TẠO TÀI KHOẢN</strong></span>
                                 </li>
                                 <li class="html header-button-2">
                                 <div class="header-button">
                              
                                 </div>
                                 </li>
                              </ul>
                           </div>
                           <div class="flex-col hide-for-medium flex-center">
                              <ul class="nav nav-center nav-small  nav-divided">
                              </ul>
                           </div>
                           <div class="flex-col hide-for-medium flex-right">
                              <ul class="nav top-bar-nav nav-right nav-small  nav-divided">
                              </ul>
                           </div>
                           <div class="flex-col show-for-medium flex-grow">
                              <ul class="nav nav-center nav-small mobile-nav  nav-divided">
                                 <li class="html custom html_topbar_left">
                                    <a href="mo-tai-khoan">
                                       <span><strong>TẠO TÀI KHOẢN</strong></span>
                                 </li>
                                  
                              </ul>
                           </div>
                        </div>
                     </div> -->
                     <div id="masthead" class="header-main ">
                        <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
                           <!-- Logo -->
                           <div id="logo" class="flex-col logo">
                              <!-- Header logo -->
                              <a href="" title="<?=$company['title_vi']?>" rel="home">
                              <img width="1020" height="337" src="<?=_upload_company_l.$company['logore']?>" class="header_logo header-logo" alt=""/><img  width="1020" height="337" src="<?=_upload_company_l.$company['logore']?>" class="header-logo-dark" alt=""/></a>
                           </div>
                           <!-- Mobile Left Elements -->
                           <div class="flex-col show-for-medium flex-left">
                              <ul class="mobile-nav nav nav-left ">
                              </ul>
                           </div>
                           <!-- Left Elements -->
                           <div class="flex-col hide-for-medium flex-left
                              flex-grow">
                              <ul class="header-nav header-nav-main nav nav-left  nav-size-xsmall nav-spacing-xsmall nav-uppercase" >
                                 <li class="header-block">
                                    <div class="header-block-block-1">
                                       <div class="row row-collapse align-middle header-block-top"  id="row-1698526656" style="align-items: start!important;">
                                          <div id="col-2137817430" class="col no-bottom medium-6 small-12 large-6"  >
                                             <div class="col-inner"  >
                                                <div class="icon-box featured-box icon-box-left text-left"  >
                                                   <div class="icon-box-img" >
                                                      <div class="icon">
                                                         <i style="font-size: 20px;color: #c4090f" class="fas fa-map-marked-alt"></i>
                                                      </div>
                                                   </div>
                                                   <div class="icon-box-text last-reset">
                                                      <p><strong>Địa chỉ </strong></p>
                                                      <p><?=$company['diachi_vi']?></p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="col-1632036840" class="col no-bottom medium-3 small-12 large-3"  >
                                             <div class="col-inner"  >
                                                <div class="icon-box featured-box icon-box-left text-left"  >
                                                   <div class="icon-box-img" >
                                                      <div class="icon">
                                                          <i style="font-size: 20px;color: #c4090f" class="fas fa-clock"></i>
                                                      </div>
                                                   </div>
                                                   <div class="icon-box-text last-reset">
                                                      <p><strong>Thứ 2 - Thứ 6</strong></p>
                                                      <p>08:30 - 17:30</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="col-1141033402" class="col no-bottom medium-3 small-12 large-3"  >
                                             <div class="col-inner"  >
                                                <div class="icon-box featured-box icon-box-left text-left"  >
                                                   <div class="icon-box-img" >
                                                      <div class="icon">
                                                             <i style="font-size: 20px;color: #c4090f" class="fas fa-phone-volume"></i>
                                                      </div>
                                                   </div>
                                                   <div class="icon-box-text last-reset">
                                                      <p><strong>Hotline hỗ trợ</strong></p>
                                                      <p><a href="tel:<?=$company['dienthoai']?>"><?=$company['dienthoai']?></a></p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                          
                           <!-- Mobile Right Elements -->
                           <div class="flex-col show-for-medium flex-right">
                              <ul class="mobile-nav nav nav-right ">
                                 <li class="nav-icon has-icon">
                                    <div class="header-button">      <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="icon primary button round is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">
                                       <i class="icon-menu" ></i>
                                       <span class="menu-title uppercase hide-for-small">Menu</span>     </a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                            <!-- Right Elements -->
                           <div class="flex-col hide-for-large flex-right" style="    flex-basis: 40%;
    order: 2;">
                              <ul class="header-nav header-nav-main nav nav-right  nav-size-xsmall nav-spacing-xsmall nav-uppercase">
                                      <?php if($_SESSION['login1']['id']==''){?>
                                 <li class="html header-social-icons ml-0">
                                       <a href="dang-ky.html" style=" padding: 0 10px;font-size: 13px;">Đăng ký</a>
                                 </li>
                                 <li style="color: #000;">
                               |                                     </li>
                                 <li class="html header-social-icons ml-0">
                                       <a href="dang-nhap.html" style=" padding: 0 10px;font-size: 13px;">Đăng nhập</a>
                                 </li>
                              <?php } else {

                                   $ten1=explode(' ', $_SESSION['login1']['ten']);
                                 ?>
                                  <li class="html header-social-icons ml-0">
                                       <a href="thoat.html" style=" padding: 0 10px;font-size: 13px;">Thoát</a>
                                 </li>
                                 <li style="color: #000;">
                               |                                     </li>
                                 <li class="html header-social-icons ml-0">
                                       <a href="thong-tin-user.html" style=" padding: 0 10px;font-size: 13px;">Chào: <?=$ten1[count($ten1)-1]?></a>
                                 </li>

                              <?php } ?>
                              </ul>
                           </div>
                        </div>
                        <div class="container">
                           <div class="top-divider full-width"></div>
                        </div>
                     </div>
                     <div id="wide-nav" class="header-bottom wide-nav nav-dark hide-for-medium">
                        <div class="flex-row container">
                           <div class="flex-col hide-for-medium flex-left" style="    flex-grow: 1;">
                              <ul class="nav header-nav header-bottom-nav nav-left  nav-uppercase">
                                 <li id="menu-item-72" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-72 active menu-item-design-default đăng ký  tạo tài khoản"><a href="" aria-current="page" class="nav-top-link">Trang chủ</a></li>
                                 <li id="menu-item-73" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-73 menu-item-design-default"><a href="gioi-thieu" class="nav-top-link">Giới thiệu</a></li>
                                 <li id="menu-item-462" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-462 menu-item-design-default has-dropdown">
                                    <a href="san-pham" class="nav-top-link">Sản phẩm<i class="icon-angle-down" ></i></a>
                                    <ul class="sub-menu nav-dropdown nav-dropdown-default">

                                       <?php foreach ($cat_main as $key => $v) {?>
                                       <li id="menu-item-461" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-461"><a href="<?=$v['tenkhongdau_vi']?>"><?=$v['ten_vi']?></a></li>
                                       <?php } ?>
                                    </ul>
                                 </li>

                              <?php foreach ($dmtintuc as $key => $v) {

                                    $d->reset();
                                    $sql= "select ten_$lang,tenkhongdau_vi,id from #_tin3cap_cat where hienthi=1 and id_cat=".$v['id']." and com='cat1' order by stt asc, id desc";
                                    $d->query($sql);
                                    $dmtintuc1 = $d->result_array();     

                                 ?>  
                                 <li id="menu-item-75" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-75 menu-item-design-default has-dropdown">
                                    <a href="<?=$v['tenkhongdau_vi']?>" class="nav-top-link"><?=$v['ten_vi']?>

                                    <?php if(count($dmtintuc1)>0&&$dmtintuc1){?>
                                    <i class="icon-angle-down" ></i>
                                       <?php } ?>
                                 </a>
                                    <ul class="sub-menu nav-dropdown nav-dropdown-default">
                                        <?php foreach ($dmtintuc1 as $key1 => $v1) {?>

                                       <li id="menu-item-2558" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2558"><a href="<?=$v1['tenkhongdau_vi']?>"><?=$v1['ten_vi']?></a></li> 
                                    <?php } ?>
                                      
                                    </ul>
                              
                                 </li>
                            
                              <?php } ?>
                              </ul>
                           </div>
                           <div class="flex-col hide-for-medium flex-right flex-grow" style="    flex-grow: 2;    flex-basis: 10%;">
                              <ul class="nav header-nav header-bottom-nav nav-right  nav-uppercase" style="    height: 55px;
    background: #000;
    justify-content: space-around;
    padding: 0 10px">


                              <?php if($_SESSION['login1']['id']==''){?>
                                 <li class="html header-social-icons ml-0">
                                       <a href="dang-ky.html">Đăng ký</a>
                                 </li>
                                 <li style="color: #fff;">
                               |                                     </li>
                                 <li class="html header-social-icons ml-0">
                                       <a href="dang-nhap.html">Đăng nhập</a>
                                 </li>
                              <?php } else {

                                   $ten1=explode(' ', $_SESSION['login1']['ten']);
                                 ?>
                                  <li class="html header-social-icons ml-0">
                                       <a href="thoat.html">Thoát</a>
                                 </li>
                                 <li style="color: #fff;">
                               |                                     </li>
                                 <li class="html header-social-icons ml-0">
                                       <a href="thong-tin-user.html">Chào: <?=$ten1[count($ten1)-1]?></a>
                                 </li>

                              <?php } ?>

                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="header-bg-container fill">
                        <div class="header-bg-image fill"></div>
                        <div class="header-bg-color fill"></div>
                     </div>
                  </div>
               </header>