   <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
               <div class="sidebar-menu no-scrollbar ">
                  <ul class="nav nav-sidebar nav-vertical nav-uppercase" data-tab="1">
                   
                     <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-72 đăng ký  tạo tài khoản"><a href="" aria-current="page">Trang chủ</a></li>
                     <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-73"><a href="gioi-thieu">Giới thiệu</a></li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-462">
                        <a href="san-pham">Sản phẩm</a>
                        <ul class="sub-menu nav-sidebar-ul children">
                             <?php foreach ($cat_main as $key => $v) {?>
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-461"><a href="<?=$v['tenkhongdau_vi']?>"><?=$v['ten_vi']?></a></li>
                         <?php } ?>
                    
                        </ul>
                     </li>

                       <?php foreach ($dmtintuc as $key => $v) {

                                    $d->reset();
                                    $sql= "select ten_$lang,tenkhongdau_vi,id from #_tin3cap_cat where hienthi=1 and id_cat=".$v['id']." and com='cat1' order by stt asc, id desc";
                                    $d->query($sql);
                                    $dmtintuc1 = $d->result_array();     

                                 ?>   
                     <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-75">
                        <a href="<?=$v['tenkhongdau_vi']?>"><?=$v['ten_vi']?></a>
                        <?php if(count($dmtintuc1)>0&&$dmtintuc1){?>
                        <ul class="sub-menu nav-sidebar-ul children">
                           <?php foreach ($dmtintuc1 as $key1 => $v1) {?>
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2558"><a href="<?=$v1['tenkhongdau_vi']?>"><?=$v1['ten_vi']?></a></li>
                          <?php } ?>
                        </ul>
                      <?php } ?>
                     </li>


                   <?php } ?>


                   
                     <li class="html header-button-1">
                        <div class="header-button">
                           <a href="dang-ky-tai-khoan" class="button plain is-medium"  style="border-radius:99px;">
                           <span>Mở tài khoản</span>
                           </a>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>