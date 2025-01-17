<style>
#hotline{
	min-height:50px;
	padding-left:45px;
	background:url(media/images/hotline.png) 5px 5px no-repeat;
}
#hotline p{
	font-size:15px;
	color:#FFF;
	font-weight:bold;
	line-height:20px;
}
</style>

			 	<div id='hotline'>
                    <?php
						$sql_tintuc = "select link from #_photo where hienthi=1 and com='hotline' order by stt asc, id desc";					
						$d->query($sql_tintuc);
						$hotline = $d->result_array();	
						if(count($hotline)!=0){
							foreach($hotline as $v){
					?>
                   	<p><?=$v['link']?></p>
					<?php	
							}
						}
					?>
                    <div class="clear"></div>
                </div>