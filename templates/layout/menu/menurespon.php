
<div class="menu_mobile " >
                                <div class="icon_menu">
                                    <span>&nbsp;</span>
                                    <span>&nbsp;</span>
                                    <span>&nbsp;</span>


                                </div>
                             
                                <div class="divmm">
                                    <div class="mmContent">
                                        <div class="mmMenu">


                                        
                                          
                                        
                                            <div class="space_block_menu" style="    padding: 10px 0;
    font-size: 14px;
    text-transform: uppercase;
    padding-left: 14px; ">MENU</div>                   
                                            <div class="menucon">
                                            
                                            
                                                <ul>
                                                        
                                              




<li><a href="">Trang Chủ</a></li>
            <li><a href="gioi-thieu.html">Về Good Girl</a></li>
              <li class="<?=($com=='cau-lac-bo-con-gai-yeu')?'active':''?> wow fadeInDown " data-wow-delay="0.3s"><a href="<?=$dolotkhangkhuanmenu[0]['tenkhongdau_vi']?>-<?=$dolotkhangkhuanmenu[0]['id']?>.html">Đồ Lót Kháng Khuẩn</a>
                <div class="button-submenu"></div>

                  <ul class="sub11">
                              <?php foreach ($dolotkhangkhuanmenu as $key => $v) {
  
                               ?>

                                      <li><a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a>

                                             
                                    </li>
                                
                            <?php } ?>
                          </ul>

              </li>
              <li class="<?=($com=='all1'&&$id_cat==413)?'active':''?> wow fadeInDown " data-wow-delay="0.4s"><a href="do-lot-con-gai-413.html">Đồ Lót Con Gái</a>
                <div class="button-submenu"></div>

                  <ul class="sub11">
                              <?php foreach ($cat_main11 as $key => $v) {
  
                               ?>

                                      <li><a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a>

                                             
                                    </li>
                                
                            <?php } ?>
                          </ul>

              </li>



              <li class="<?=($com=='all1'&&$id_cat==412)?'active':''?> wow fadeInDown " data-wow-delay="0.5s"><a href="do-lot-cho-me-412.html">Đồ Lót Cho Mẹ</a>
                <div class="button-submenu"></div>
                 <ul class="sub11">
                              <?php foreach ($cat_main12 as $key => $v) {
  
                               ?>

                                      <li><a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a>

                                             
                                    </li>
                                
                            <?php } ?>
                          </ul>

              </li>
                <li class="<?=($com=='all1'&&$id_cat==420)?'active':''?> wow fadeInDown " data-wow-delay="0.5s"><a href="qua-tang-420.html">Quà Tặng</a>


              </li>
              <li class="<?=($com=='con-gai-yeu')?'active':''?> wow fadeInDown " data-wow-delay="0.6s"><a href="con-gai-yeu.html">Con gái yêu</a>
                <div class="button-submenu"></div>
                 <ul class="sub11">
                              <?php foreach ($cat_maintin3cap as $key => $v) {
  
                               ?>

                                      <li><a href="<?=$v['tenkhongdau']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a>

                                             
                                    </li>
                                
                            <?php } ?>
                          </ul>
              </li>
            <li><a href="he-thong-phan-phoi.html">Hệ Thống Phân Phối</a></li>














                                                </ul> 
                                             </div>


                                              <div class="space_block_menu">&nbsp;</div>

                                                <div class="menucon">

                                                 <ul>
                                                    <li><a>Hotline: <?=$company['dienthoai']?></a></li>
                                                  </ul>
                                                </div>
                                        </div>
                                        <div class="close-mmenu"></div>
                                    </div>
                                    <div class="divmmbg"></div>
                                </div>
                                <div class="clear"></div>
                            </div>



<script type="text/javascript">$(".menu_mobile .icon_menu").click(function(event){$(this).parent().find(".divmm").addClass('show');$('.menu_mobile').addClass("showmenu");$('html').addClass("openmenu");$('body').css({})});$(".menu_mobile .divmm .divmmbg , .menu_mobile .divmm .mmContent .close-mmenu").click(function(event){$(this).parents(".menu_mobile").find(".divmm").removeClass('show');setTimeout(function(){$('.menu_mobile').removeClass("showmenu");$('html').removeClass("openmenu")},500)});$(window).resize(function(){if($(window).innerWidth()>1199){$(".menu_mobile").find(".divmm").removeClass('show');$('.menu_mobile').removeClass("showmenu");$('html').removeClass("openmenu")}});$('.button-submenu').click(function(e){e.preventDefault();if(!$(this).hasClass('showcon1'))
{$(this).addClass('showcon1');$(this).closest("li").children(".sub11").addClass('showcon2')}else{$(this).removeClass('showcon1');$(this).closest("li").children(".sub11").removeClass('showcon2')}});</script>