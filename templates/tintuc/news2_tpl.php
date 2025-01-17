
<?php if(!$_REQUEST['idc']) {?>


  <div class="pro_right">


  <div class="noidungtrong1">

      <div class="tieudebaiviet">
        <h1>Thông tin cần biết</h1>
      </div>
      <div class="noidungbaiviet">

          <?php foreach ($news as $v) {?>
          <div class="col-xs-12">


              <div class="box_news">

                   <div class="hinhnew">
                          <a href="thong-tin-can-biet/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><img src="thumb/170x130/1/<?=_upload_tinnho_l.$v['photo']?>"></a>
                    </div>
                      <div class="tennew">
                        <h3> <a href="thong-tin-can-biet/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a></h3>
                    </div>
              </div>


          </div>


          <?php } ?>



      </div>
  </div>



</div>




<?php } else {?>


<div class="pro_right">


  <div class="noidungtrong1">

      <div class="tieudebaiviet">
        <h1><?=$news['ten_vi']?></h1>
      </div>
      <div class="noidungbaiviet">

          <?=$news['noidung_vi']?>

      </div>
  </div>



</div>

  <?php } ?>