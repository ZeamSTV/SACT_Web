<style type="text/css">
	#content
	{
		margin-top: 0;
	}
</style>

<section id="mucdoitac" class="width_100">
	
		<div class="container">
				    <div class="title_tc title_tc1 width_100">
           				 <span><?=_doitac?></span>
        			</div>
        			 <div class="content_detail width_100 margintop20" >

        			 		<div class="khungdoitac width_100">

        			 				<div class="owl-doitac1 owl-carousel owl-theme">
        			 				<?php for ($i=0; $i < count($doitac); $i+=2) { 
        			 				
        			 						$v=$doitac[$i];
        			 						$v1=$doitac[$i+1];

        			 					?>

        			 					<div class="itemdoitac11">
	        			 					<div class="item_doitac1 width_100 marginbot20">
	        			 							<a href="<?=$v['link']?>"><img style="width: auto;" src="<?=_upload_hinhanh_l.$v['photo']?>"></a>
	        			 					</div>
	        			 					<div class="item_doitac1 width_100">
	        			 							<a href="<?=$v1['link']?>"><img style="width: auto;" src="<?=_upload_hinhanh_l.$v1['photo']?>"></a>
	        			 					</div>
        			 					</div>
        			 				<?php } ?>

        			 				</div>

        			 		</div>

        			 </div>
		</div>

</section>
    <?php include_once _template."layout/duantieubieu.php"; ?>