<style>
#doitac_khung{
	border-top:2px solid #FFA248;
	padding:7px 10px 5px 10px;
	margin-top:10px;
	position:relative;	
}
#logodoitac{
	background: url(media/images/logodoitac.png) no-repeat;
	width: 97px;
	height: 26px;
	line-height: 26px;
	padding-left: 10px;
	color: #FFFFFF; 
	float: left;
	position: absolute;
	top: -14px;
	left: 9px;
	font-size: 11px;
	font-weight: bold;
	text-transform: uppercase;
}
#doitac{
	overflow:hidden;
	position:relative;
	padding:7px 0px;
}
#doitac img{
	opacity:0.8;
	margin-right:15px;
	
	box-shadow:0px 0px 3px #FFF;
	-moz-box-shadow:0px 0px 3px #FFF;
	-ms-box-shadow:0px 0px 3px #FFF;
	-o-box-shadow:0px 0px 3px #FFF;
	-webkit-box-shadow:0px 0px 3px #FFF;
	
	transition:0.3s;
	-moz-transition:0.3s;
	-ms-transition:0.3s;
	-o-transition:0.3s;
	-webkit-transition:0.3s;
}
#doitac img:hover{
	opacity:1;
	
	box-shadow:0px 0px 3px #999;
	-moz-box-shadow:0px 0px 3px #999;
	-ms-box-shadow:0px 0px 3px #999;
	-o-box-shadow:0px 0px 3px #999;
	-webkit-box-shadow:0px 0px 3px #999;
}
</style>

<div id='doitac_khung'>

    <div id='doitac'>
        <table border="0" cellpadding="0" cellspacing="0" id='doi_tac'>
            <tr>
            	<?php		
					$d->reset();
					$sql = "select thumb,link,ten from #_photo where com='slideshow1' and hienthi=1 order by stt asc,id desc";
					$d->query($sql);
					$doitac_footer = $d->result_array();				
					if(count($doitac_footer)!=0){
						foreach($doitac_footer as $v){
				?>	
                <td><a href="<?=$v['link']?>" title="<?=$v['ten']?>" target="_blank"><img  class="hinhdoitac" src="<?=_upload_hinhanh_l.$v['thumb']?>" height="" width="100%" border='0' title="<?=$v['ten']?>" alt="<?=$v['ten']?>" /></a></td>
				<?php		
						}
					}
				?>                
            </tr>
        </table>
        <script type="text/javascript">createScroller("myDoiTac", "doitac", "doi_tac",1,70,1,0,1);</script>
    </div>
</div>