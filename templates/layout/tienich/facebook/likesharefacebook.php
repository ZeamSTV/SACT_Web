


<?php
			$d->reset();
			$sql="select fanface from #_company where com='company'";
			$d->query($sql);
			$fanface = $d->fetch_array();
?>

<div class="fb-like" data-href="<?=$fanface['fanface']?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>