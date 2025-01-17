<link href="css/showYtVideo.css" rel="stylesheet" type="text/css">
<div class="jquery-script-ads" style="margin:50px auto;"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>


<script src="js/jquery.showYtVideo.js"></script>
		<?php for($g31=0;$g31<count($chungtoi1);$g31++){
						$v = $chungtoi1[$g31];
					?>
			<script>
			 jQuery(document).ready(function ($) {
						$('.show-modal<?=$g31?>').on('click', function () {
							$.showYtVideo({
								videoId: '<?=$v['mota']?>'
							});
						});
					});
			</script>
		<?php }?>
		
		
		
		
		<?php for($g3=0;$g3<count($chungtoi1);$g3++){
						$v = $chungtoi1[$g3];
					?>
					<div class="muc_chungtoilamgi show-modal<?=$g3?>">
						<div class="hinh_muc_chungtoilamgi"><img class="transition_09s transform_scale_12" src="<?=_upload_tinnho_l.$v['thumb']?>"/></div>
						<div class="noidung_muc_chungtoilamgi">
							<div class="noidung_muc_chungtoilamgi1">
								<div class="tieude1_muc_chungtoilamgi"><?=$v['ten']?></div>
									
								<div class="tieude2_muc_chungtoilamgi">
									<?=$v['noidung']?>
										
								</div>
								<img class="goc_gioithieu" src="media/images/goc_gioithieu.png"/>
							</div>
						</div>
					</div>
					
					<?php } ?>