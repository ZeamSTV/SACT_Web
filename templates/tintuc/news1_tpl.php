

<?php if($id!='') {?>

  <section class="content_trong width_100">
    
    <div class="container container1">

          <div class="width_100 ngaytao-bv nav-bredcrum "> 
          <a href="" title="Trang chủ"> Trang chủ </a> <i class="fa fa-angle-double-right"></i>  <a href="#">Đồ lót kháng khuẩn</a> <i class="fa fa-angle-double-right"></i> <span><?=$news['ten_vi']?></span> 
        </div>
          
         
         <div class="title_detail width_100">
            <h1><?=$news['ten_vi']?></h1>
         </div>
        <div class="content_detail width_100 margintop10" >
                <?=$news['noidung_vi']?>
         </div>
         <div class="othernews width_100 margintop10">
           <h2 class="t11">Bài viết khác</h2>
           <ul style="margin: 0px; padding: 0px;">
              <div class="box_newskhac" style="padding: 5px 10px 0px 10px;border: none;">
                <?php foreach ($newskhac as $key => $v) {?>
                 <h2> <a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html" title="+ Quy trình hoạt động">+ <?=$v['ten_vi']?></a></h2>
                <?php } ?>
              </div>
           
           </ul>
        </div>
          

          
  </div>
  </section>



<?php } else {?>




  <section class="content_trong width_100">
    
    <div class="container container1">

          <div class="width_100 ngaytao-bv nav-bredcrum "> 
          <a href="" title="Trang chủ"> Trang chủ </a> <i class="fa fa-angle-double-right"></i><span>Đồ lót kháng khuẩn</span> 
        </div>
          
         
         <div class="title_detail width_100">
            <h1>Tin tức</h1>
         </div>
        <div class="content_detail width_100 margintop10" >
    

                    <div class="khungtintuc1 width_100">

                      <?php foreach ($news as $key => $v) {?>
                        <div class="itemtintuc">


                              <div class="hinhtintuc width_100">

                                  <a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><img src="thumb/495x215/1/<?=_upload_tinnho_l.$v['photo']?>"></a>
                              </div>
                              <div class="motatintuc width_100">
                                  <h3><a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a></h3>
                              </div>
                              <div class="xemthemtintuc width_100">
                                  <a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html">Xem thêm</a>
                              </div>
                          </div>
                      <?php } ?>
                    </div>
              
       </div>
          

          
  </div>
  </section>


<?php } ?>