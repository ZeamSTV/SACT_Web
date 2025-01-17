





<?php

			$d->reset();

			$sql="select fanface from #_company where com='company'";

			$d->query($sql);

			$fanface = $d->fetch_array();

?>



<div class="fb-page" data-href="<?=$fanface['fanface']?>" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-width="380px" data-height="240px"></div>		