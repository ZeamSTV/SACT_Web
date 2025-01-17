<div class="rightcontent hidden-xs hidden-sm" >

      <div class="khungright width_100">

            <div class="title_right width_100">

                <img src="img/icontitle1.png">
                <span>Sản phẩm bán chạy</span>
            </div>

            <div class="khungspchay width_100">
              
                <div class="slick_spbc">

                      <?php foreach ($spbanchay as $key => $v) {?>
                          <div class="item_spbc">
                              <figure>
                                  <a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm"><img src="thumb/235x180/1/<?=_upload_sanpham_l.$v['photo']?>"></a>
                              </figure>
                              <figcaption>
                                  <h3><a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm"><?=$v['ten_vi']?></a></h3>
                              </figcaption>
                          </div>

                        <?php } ?>

                </div>

            </div>

      </div>
      <div class="khungright width_100">

            <div class="title_right width_100">

                <img src="img/icontitle1.png">
                <span>Video</span>
            </div>

            <div class="khungspchay width_100">
              
                  <div id="khungvideo" class="khungvideo width_100">

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?=$video[0]['link']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div class="chonvideo width_100">

                        <select id="chonvideo">

                          <?php foreach ($video as $key => $v) {?>
                              <option value="<?=$v['link']?>"><?=$v['ten']?></option>
                          <?php } ?>
                        </select>

                  </div>
            </div>

      </div>

</div>