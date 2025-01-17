

<div class="title_ttt">

      <h1><?=$title_ttt?></h1>

</div>
<p class="dembds">Hiện tại có <span><?=$count_sp?></span> bất động sản</p>

<div class="title_cat">
      <span><?=$title_ttt?></span>

</div>

<div class="khungcat">

    <?php foreach ($product as $key => $v) {?>

            <div class="item_sanpham">



                <div class="hinhsp">

                  <a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm"><img src="thumb/188x140/1/<?=_upload_sanpham_l.$v['photo']?>"></a>

                </div>

                <div class="motasp">

                  <div class="title-sp">

                    

                      <h3>


                        <a class="a1" href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm"><?=catchuoi($v['ten_vi'],65)?></a>
                        <a class="a2" href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm"><?=catchuoi($v['ten_vi'],30)?></a>



                      </h3>

                            <?php if($v['id_cat']==358||$v['id_cat']==360||$v['id_cat']==406){?>

                      <div class="gialeft">Giá: <span><?=jam_read_num_forvietnamese($v['gia'])?></span></div>

                    <?php }else{?>

                      <div class="gialeft">Giá: <span><?=$v['gia']?></span></div>





                    <?php } ?>



                  </div>

                  <div class="diachi-ngaydang">

                                <span class="diachi"><?=$v['diachi']?><?=($v['id_phuong']>0)?', '.get_phuong($v['id_phuong']):''?><?=($v['id_quan']>0)?', '.get_quan($v['id_quan']):''?></span>

                      <span class="ngaydang"><?=date('d/m/Y',$v['ngaytao'])?></span>

                  </div>

                  <p><?=catchuoi($v['noidung_vi'],150)?></p>

                  <ul>

                  

                    <li><i class="fa fa-circle"></i><span>Diện tích:</span> <?=$v['dientich']?></li>



                    <?php if($v['id_cat']==358||$v['id_cat']==360){?>

                    <li><i class="fa fa-circle"></i><span>Hướng:</span> <?=$v['huongnha']?></li>

                    <li><i class="fa fa-circle"></i><span>Số phòng:</span> <?=$v['sophongngu']?></li>

                    <li><i class="fa fa-circle"></i><span>Vị trí:</span> <?=$v['vitri']?></li>

                  <?php } ?>



                  </ul>

                  <a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm" class="xemthemsp">Xem thêm</a>

                </div>



            </div>

    <?php } ?>

      <?php

                     if($count_sp>$maxR)

                      {

                      ?>

              <div class="w-100" align="center">

                    <div class="pagination">

                      <?=$paging['paging']?>

                    </div>

                  </div>

                  <?php

                      }   

          ?>





</div>