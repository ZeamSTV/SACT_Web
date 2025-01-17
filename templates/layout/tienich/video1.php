
					<?php
                        $sql = "select id,ten,link from #_photo where com='video' and hienthi=1 order by stt asc limit 0,3";
                        $d->query($sql);
                        $video_ct = $d->result_array();								
                    ?>
                
                     
                <?php for($c5=0;$c5<count($video_ct);$c5++){
					$v = $video_ct[$c5];
					?>
						<div class="mucvideo">
						<iframe width="100%" height="106" src="http://www.youtube.com/embed/<?=($v['link']!="")?$v['link']:""?>" frameborder="0" allowfullscreen></iframe>                     	
						
						</div>
						<?php }?>
					
                                                                       
                   