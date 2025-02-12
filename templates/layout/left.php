 <div id="col-437943583" class="col medium-3 small-12 large-3" style="padding-left: 30px;">
            <div class="col-inner">
               <ul class="sidebar-wrapper ul-reset">
                  <aside id="nav_menu-2" class="widget widget_nav_menu">
                     <span class="widget-title "><span>Sản phẩm</span></span>
                     <div class="is-divider small"></div>
                     <div class="menu-menu-san-pham-container">
                        <ul id="menu-menu-san-pham" class="menu">


                  <?php if($cat_main&&count($cat_main)>0){
                           foreach ($cat_main as $key => $v) {

                             $d->reset();
                              $sql= "select ten_$lang,tenkhongdau_vi from #_product where hienthi=1 and id_cat=".$v['id']." order by stt asc, id desc";
                              $d->query($sql);
                              $cat_main1 = $d->result_array();
                            ?>

                           <li id="menu-item-818" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-818 has-child" aria-expanded="false">
                              <a href="<?=$v['tenkhongdau_vi']?>"><?=$v['ten_vi']?></a>


                           <?php if($cat_main1&&count($cat_main1)>0){?>
                              
                              <ul class="sub-menu">
                                
                                       <?php  foreach ($cat_main1 as $key1 => $v1) {?>
                             
                                              <li id="menu-item-832" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-832"><a href="<?=$v1['tenkhongdau_vi']?>"><?=$v1['ten_vi']?></a></li>
                                                <?php } ?>
                              </ul>
                            <?php } ?>
                           </li>
                        <?php }} ?>
                        </ul>
                     </div>
                  </aside>
               </ul>
            </div>
         </div>
