<?php
	$d->reset();
	$sql_tintuc = "select ten,link,photo,thumb from #_photo where hienthi=1 and com='chiase' order by stt asc";					
	$d->query($sql_tintuc);
	$chiase = $d->result_array();	
					
?>

<div id="link1"><h3><a href="<?=$chiase[0]['link']?>" title="<?=$chiase[0]['ten']?>" target="_blank"><?=$chiase[0]['ten']?></a></h3></div>
				<div id="link2"><h3><a href="<?=$chiase[1]['link']?>" title="<?=$chiase[1]['ten']?>" target="_blank"><?=$chiase[1]['ten']?></a></h3></div>
  
                  <!--                 
					<a href="<?=$v['link']?>" title="<?=$v['ten']?>" target="_blank"><img src="<?=_upload_hinhanh_l.$v['photo']?>" border="0" title="<?=$v['ten']?>" alt="<?=$v['ten']?>" />
                    </a>
					-->
                  