<?php

	$d->reset();

	$sql = "select photo,mota_vi,ten_vi,link from #_photo where com='slideshow' and hienthi=1 order by stt asc,id desc";

	$d->query($sql);

	$slide_show = $d->result_array();	

?>





<div id="mucslider" class="w_100 wow fadeInUp">

	











						<div id="owl_slider" class="owl-carousel owl-theme">





									<?php foreach ($slide_show as $v) {?>



											   <div class="item">

                                             		   <a href="<?=$v['link']?>" target="_blank" title=""><img style="width: 100%"  src="<?=_upload_hinhanh_l.$v['photo']?>"  alt=""/>

                                              			  </a>




                                             		   	     <div class="cover">
										                        <div class="container">
										                            <div class="header-content">
										                                <div class="line"></div>
										                                <h2><?=$v['ten_vi']?></h2>
										                               
										                                <h4><?=$v['mota_vi']?></h4>
										                            </div>
										                        </div>
										                     </div>




                                                

                                            </div>

                                        

                                      <?php } ?>

						</div>






	



</div>




