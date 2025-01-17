<?php
	$d->reset();	
	$sql = "select * from #_photo where hienthi=1 and com='lkweb' order by stt asc";
	$d->query($sql);
	$lkwebhinh = $d->result_array();	                              
                            
?>


<?php for($f11=0;$f11<count($lkwebhinh);$f11++){ 
		$v = $lkwebhinh[$f11];
?>
				<a href="<?=$v['link']?>" target="_blank"><img  class="hvr-pulse-shrink" src="<?=_upload_hinhanh_l.$v['photo']?>" alt="<?=$v['ten']?>"/></a>
<?php }?>	
                      



				
	