			<style>
			#cblienketwweb1{width:100%;height:17px;line-height:17px}
			</style>
            <div class="footer_info">                       
					<?php
                        $sql = "select id,ten,link from #_photo where com='video' and hienthi=1 order by stt asc";
                        $d->query($sql);
                        $video_ct = $d->result_array();								
                    ?>
                <div id='video'>
                     <iframe width="257" height="174" src="http://www.youtube.com/embed/<?=($video_ct[0]['link']!="")?$video_ct[0]['link']:""?>" frameborder="0" allowfullscreen></iframe>                     	
                </div>        
                                                                       
                    <script type="text/javascript">
                    $(function () {
                        $("#cblienketwweb1").selectbox();
                    });
                    </script>
                   
                    <div style="padding-top:10px;">
                    <select id="cblienketwweb1">
                        <option value="0">Chọn video</option>
                        <?php                                   
                            if(count($video_ct)!=0){
                                foreach($video_ct as $v){
                        ?>
                        <option value="<?=$v['id']?>"><?=$v['ten']?></option>  					
                        <?php	
                                }
                            }
                        ?>
                                                                
                    </select>  
                    </div>
                     <!--Phần Video Clip-->
                    <script type="text/javascript">
                        $(window).load(function() {                                
							$("#cblienketwweb1").change(function(){									
                                var id=this.value;
                                $("#video").load("sources/ajax/tienich/video/video.php", "id="+ id);
                                return false;
                            });
                        });
                    </script>
                    
                    <div class="clear"></div>
            </div>