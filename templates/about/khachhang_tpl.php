<style type="text/css">
	#content
	{
		margin-top: 0;
	}
</style>

<section id="muckhachhang" class="width_100">
	
		<div class="container">
				    <div class="title_tc  width_100">
           				 <span><?=_khachhang?></span>
        			</div>
        			 <div class="content_detail width_100 margintop20" >

        			 		<div class="khungdoitac width_100">

        			 				<div class="owl-khachhang owl-carousel owl-theme">
        			 				<?php for ($i=0; $i < count($khachhang); $i+=3) { 
        			 				
        			 						$v=$khachhang[$i];
        			 						$v1=$khachhang[$i+1];
                                            $v2=$khachhang[$i+2];
        			 					?>

        			 					<div class="itemkhachhang1">
	        			 					<div class="itemkhachhang11 width_100 marginbot20">
	        			 							<a data-id="<?=$v['id']?>"><img style="width: auto;" src="thumb/396x218/1/<?=_upload_hinhanh_l.$v['photo']?>"></a>
	        			 					</div>
	        			 					<div class="itemkhachhang11 width_100 marginbot20">
	        			 							<a data-id="<?=$v1['id']?>"><img style="width: auto;" src="thumb/396x218/1/<?=_upload_hinhanh_l.$v1['photo']?>"></a>
	        			 					</div>
                                            <div class="itemkhachhang11 width_100">
                                                    <a data-id="<?=$v2['id']?>"><img style="width: auto;" src="thumb/396x218/1/<?=_upload_hinhanh_l.$v2['photo']?>"></a>
                                            </div>
        			 					</div>
        			 				<?php } ?>

        			 				</div>

        			 		</div>

        			 </div>
		</div>

</section>
    <?php include_once _template."layout/duantieubieu.php"; ?>



<!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
               
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                    <div class="khungpop width_100">
                            <div class="col-md-6 col-sm-6 col-xs-12 hinhpop">
                                        <img src="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 despop">
                                    <div class="title_pop width_100">
                                            <span></span>
                                    </div>
                                    <div class="noidungpop width_100">
                                        
                                    </div>
                            </div>
                    </div>
              </div>
              <div class="modal-footer" style="display: none;">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
              </div>
            </div>
          </div>
        </div>

<!-- end modal -->


