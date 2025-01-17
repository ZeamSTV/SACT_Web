   <link href="assets/css/news.css" type="text/css" rel="stylesheet" />
                        <link href="assets/css/news_special.css" type="text/css" rel="stylesheet" />
                        <div class="container">
                           <div class="con-xs-12 col-md-8">
                              <div class="box_containerlienhe">
                                 <div class="title-global">
                                    <h2><?=$title_ttt?></h2>
                                    <div class="clearfix"></div>
                                 </div>
                                 <div class="wrap-box-news">
                                    <div class="">


                                    <?php if($news&&count($news)>0){
                                       foreach ($news as $key => $v) {?>
                                       <div class="news-item fadeInDown wow" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">
                                          <div class="header">
                                             <div class="date">
                                                <div><?=date('d',$v['ngaytao'])?></div>
                                                <div>Tháng <?=date('m',$v['ngaytao'])?></div>
                                             </div>
                                             <div class="name">
                                                <h3><a href="<?=$v['tenkhongdau_vi']?>.html" title="<?=$v['ten_vi']?>"><?=$v['ten_vi']?></a></h3>
                                                <div class="clearfix"></div>
                                             
                                             </div>
                                             <div class="clearfix"></div>
                                          </div>
                                          <div class="content">
                                             <div class="row-8">
                                                <div class="col-xs-4 col-8">
                                                   <a href="<?=$v['tenkhongdau_vi']?>.html" title=" <?=$v['ten_vi']?>  ">
                                                   <img class="img-responsive image-thumb" src="thumb/600x400/1/<?=_upload_tin3cap_l.$v['photo']?>" alt="<?=$v['ten_vi']?>" />                    </a>
                                                </div>
                                                <div class="col-xs-8 col-8">
                                                 <?=$v['mota_vi']?>             
                                                </div>
                                                <div class="left-position-link col-xs-offet-5">
                                                   <a href="<?=$v['tenkhongdau_vi']?>.html" title="<?=$v['ten_vi']?>">Xem chi tiết</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="clearfix"></div>
                                       </div>
                                    <?php }} ?>
                                    </div>
                                 </div>
                                 <!---END .wrap-box-news-->
                                 <div class='clearfix'></div>
                                 <div class="phantrang" ></div>
                                 <div class="clear"></div>
                              </div>
                           </div>
                          


                     <?php include_once _template."layout/left.php"; ?>
                           <div class="clearfix"></div>
                        </div>
                        <script>
                           $().ready(function(){
                            $(".wrap-image").click(function(){
                              window.location.href=$(this).find("a").attr("href");
                            })
                           })
                        </script> 