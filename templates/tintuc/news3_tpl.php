<section id="muctrong">
  


    <?php if($_REQUEST['idc']=='') {?>
      <div class="duongdan">
          <ul class="breadcrumb">
            <li><i class="fa fa-home" aria-hidden="true" style="color:#000;"></i><a style="padding-left:5px" href="#">Trang chủ</a></li>
            <li><a class="active" href="chinh-sach.html">Chính sách</a></li>
        
         
        </ul>
      </div>

      <div class="khungnoidung">
         
          <?php foreach ($news as $key => $v) {?>
            <div class="col-md-3 col-sm-6 col-xs-12 tintuc">
                <div class="tintuc1">

                      <div class="hinhtin">
                            
                      </div>
                      <div class="tieudetin">
                           <h3><a href="chinh-sach/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html" class="tin_ten" title="?=$v['ten_vi']?>"><?=$v['ten_vi']?></a></h3>
                             
                      </div>
                      <div class="ngaydang">
                        <span><i class="fa fa-clock-o"></i></span> <?=date('d/m/Y',$v['ngaytao'])?>    
                      </div>
                      <div class="luotxem">
                          <span>Lượt xem:</span><?=$v['luotxem']?>        
                      </div>
                      <div class="chitiet">
                      <a href="chinh-sach/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html">Chi tiết</a>
                      </div>


                  </div>
             </div>


        <?php } ?>
        

        </div>


    <?php } else {?>
        <div class="duongdan">
          <ul class="breadcrumb">
            <li><i class="fa fa-home" aria-hidden="true" style="color:#000;"></i><a style="padding-left:5px" href="#">Trang chủ</a></li>
             <li><a class="active" href="chinh-sach.html"><?=$title_ttt?></a></li>
         
        </ul>
       </div>
       <div class="khungnoidung">

            <div class="noidungbaiviet">
                  <h2 class="tieudedetail"> <?=$title_ttt?></h2>
                  <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Đăng lúc: <?=date('H:i:s d/m/Y',$news['ngaytao'])?> - <i class="fa fa-eye" aria-hidden="true"> </i> Lượt xem: <?=$news['luotxem']?> </div>

                  <div class="noidungcon">
                        <?=$news['noidung_vi']?>

                  </div>
                  <div class="tt_top" style=""><h3>Chính sách liên quan</h3></div>


                  <?php foreach ($newskhac as $key => $v) {?>
                  <div style="padding-left:10px; height:auto;"><a href="chinh-sach/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html" style="text-decoration:none;"><img style="margin:0" src="img/sao.png" border="0" alt="Babystore">&nbsp;&nbsp;<span style="    font-size: 13px;
                   color: #333;
                     font-weight: bold;"><?=$v['ten_vi']?></span></a></div>
                  <?php } ?>
            </div>

       </div>



    <?php } ?>
</section>