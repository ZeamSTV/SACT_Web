<?php
	$d->reset();
	$sql = "select photo,link,ten from #_photo where com='slideshow1' and hienthi=1 order by stt asc,id desc";
	$d->query($sql);
	$slide_show1 = $d->result_array();	
?>
			<div class="left_ttt">QUẢNG CÁO
            	<div class="clear"></div>
            </div>
            <div class="left_info" style="padding:9px 7px 7px 7px;">
				<style>
                    #hinhanhhoatdong{
                        height:210px;
						height:350px;
                        position:relative;
                        overflow:hidden;
                    }
                    #hinhanhhoatdong a{
                        width:208px;
                        float:left;
                        border:1px solid #DDD;
                        
                        transition:0.4s;
                        -moz-transition:0.4s;
                        -ms-transition:0.4s;
                        -o-transition:0.4s;
                        -webkit-transition:0.4s;
                    }
					#hinhanhhoatdong a img{
						width:208px;
						border:none;
					}
                    #hinhanhhoatdong a:hover{
                        border:1px solid #999;                       
                    }
                </style>
                <div id='hinhanhhoatdong'>
                    <table border="0" cellpadding="0" cellspacing="0" id="hinhanh_hoatdong">
                        <tr>
                        	<?php
								if(count($slide_show1)!=0){
									foreach($slide_show1 as $v){
							?>
                            <td><a href="<?=$v['link']?>" title="<?=$v['ten']?>"><img src="<?php echo _upload_hinhanh_l.$v['photo']; ?>" title="<?=$v['ten']?>" alt="<?=$v['ten']?>" /></a></td>
                            <?php	
									}
								}
							?>                            
                        </tr>
                    </table>
                    <script type="text/javascript">createScroller("myQuangCao11", "hinhanhhoatdong", "hinhanh_hoatdong",0,70,1,0,1);</script>
                </div>
                <div class="clear"></div>
			</div>