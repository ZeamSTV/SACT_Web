 <div class="container">
                           <div class="con-xs-12 col-md-8">
                              <div class="news-content">
                                 <div class="">
                                    <div class="header">
                                       <h2><?=$news['ten_vi']?></h2>
                                       <div class="date"><?=date('d/m/Y',$news['ngaytao'])?></div>
                                       <div style="max-height:50px;overflow:hidde">
                                          <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53a83dd63e4b5e75"></script>
                                          <div class="addthis_native_toolbox"></div>
                                       </div>
                                    </div>
                                    <div class="description">
                                     <?=$news['mota_vi']?>
                                    </div>
                                    <div class="content">
                                       <?=$news['noidung_vi']?>
                                       <div class="clearfix">
                                       </div>
                                       <div id="fb-root"></div>
                                       <script>(function(d, s, id) {
                                          var js, fjs = d.getElementsByTagName(s)[0];
                                          if (d.getElementById(id)) return;
                                          js = d.createElement(s); js.id = id;
                                          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=580130358671180&version=v2.3";
                                          fjs.parentNode.insertBefore(js, fjs);
                                          }(document, 'script', 'facebook-jssdk'));
                                       </script>
                                     

                                           <?php include_once _template."layout/tienich/facebook/comment_face.php"; ?>
                                       <div class="other-news">
                                          <h3>Thông tin khác</h3>
                                          <ul>


                                             <?php foreach ($newskhac as $key => $v) {?>
                                             <li>&raquo;&nbsp;<a href="<?=$v['tenkhongdau_vi']?>"  title="<?=$v['ten_vi']?>"><?=$v['ten_vi']?></a> <span class="date">(<?=date('d/m/Y',$v['ngaytao'])?>)</span></li>
                                          <?php } ?>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                           <?php include_once _template."layout/left.php"; ?>
                        </div>