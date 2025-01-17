<?php
	$d->reset();
	$sql = "select ten,ten1,ten2,link,hienthi,photo from #_photo where com='background' limit 0,1";
	$d->query($sql);
	$background = $d->fetch_array();	
?>

<style>
	body{		
		background: <?=($background['ten']!='')?'#'.$background['ten']:''?> <?=($background['hienthi']==1)?'url('._upload_hinhanh_l.$background['photo'].')':''?>  <?=($background['ten1']!='')?$background['ten1']:''?> <?=($background['ten2']!='')?$background['ten2']:''?> <?=($background['link']==1)?'fixed':''?>;					
	}
</style>
