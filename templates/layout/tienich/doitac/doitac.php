




        <?php		

					$d->reset();

					$sql = "select photo,link from #_photo where com='slideshow2' and hienthi=1 order by stt asc,id desc";

					$d->query($sql);

					$doitac = $d->result_array();				


	?>	


<div class="mucdoitac width_100">

			<div class="container">

				<div class="tieudetc">

                        <span>HÃY CHỌN THƯƠNG HIỆU GAS CHO GIA ĐÌNH BẠN</span>

                  </div>
					<div class="noidungdoitac width_100">

							  <div id="owl-doitac" class="owl-carousel owl-theme">

		                                     <?php foreach ($doitac as $v) {?>

		                                              <div class="item">

		                                                      <a href="<?=$v['link']?>" target="_blank" title=""><img style="width: auto;"  src="thumb/278x278/2/<?=_upload_hinhanh_l.$v['photo']?>" data-thumb="<?=_upload_hinhanh_l.$v['photo']?>" alt=""/>

		                                                      </a>

		                                                      

		                                                  </div>

		                                          <?php } ?>
		                        </div>
                     </div>

			</div>

</div>

