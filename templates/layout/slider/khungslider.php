<?php

	$d->reset();

	$sql = "select photo,mota_vi,ten_vi,link from #_photo where com='slideshow' and hienthi=1 order by stt asc,id desc";

	$d->query($sql);

	$slide_show = $d->result_array();	
	$d->reset();

	$sql = "select photo from #_photo where com='quangcao2ben_right' and hienthi=1 order by stt asc,id desc";

	$d->query($sql);

	$haihinh = $d->result_array();	

?>



<div class="slidertrai">

		<a href=""><img src="thumb/610x655/1/<?=_upload_hinhanh_l.$haihinh[0]['photo']?>"></a>

</div>

<div class="slidergiua">

	<div id="mucslider" class="width_100">

		











							<div id="owl-slider" class="owl-carousel owl-theme">





										<?php foreach ($slide_show as $v) {?>



												               <div class="item">

	                                                <a href="<?=$v['link']?>" target="_blank" title=""><img  src="thumb/640x700/1/<?=_upload_hinhanh_l.$v['photo']?>"  alt=""/>









	                                                </a>

	                                                

	                                            </div>

	                                        

	                                      <?php } ?>

							</div>






		



	</div>


</div>

<div class="sliderphai">

		<a href=""><img src="thumb/610x655/1/<?=_upload_hinhanh_l.$haihinh[1]['photo']?>"></a>

</div>















