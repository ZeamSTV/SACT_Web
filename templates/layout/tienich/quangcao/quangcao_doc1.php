<?php
	$d->reset();
$sql = "select * from #_product where  hienthi=1 and noibat=1 order by stt asc,id desc";
	$d->query($sql);
	$quytrinhsanxuat_left1 = $d->result_array();	
?>

<div class="left_info border_radius_5px" style="padding:9px;">
    <style>
        #hinhanhhoatdong1{
            height:200px;
            height:430px;
            position:relative;
            overflow:hidden;
        }
        #hinhanhhoatdong1 a{
            width:100%;
            float:left;
			margin-bottom:7px;
           
            overflow:hidden;                                               
        }
        #hinhanhhoatdong1 a img{
            width:100%;
            border:none;		
			float:left;	
        }
        #hinhanhhoatdong1 a:hover{

        }
    </style>
    <div id='hinhanhhoatdong1'>
        <table border="0" cellpadding="0" cellspacing="0" id="hinhanh_hoatdong1">            
			<?php
                if(count($quytrinhsanxuat_left1)!=0){
                    foreach($quytrinhsanxuat_left1 as $v){
            ?>
            <tr><td><a class="transition_04s" href="<?=$v['link']?>" title="<?=$v['ten']?>"><img src="<?php echo _upload_sanpham_l.$v['photo']; ?>" title="<?=$v['ten']?>" alt="<?=$v['ten']?>" class="transition_04s transform_scale_12" /></a></td></tr>
            <?php	
                    }
                }
            ?>                                        
        </table>
        <script type="text/javascript">createScroller("myQuangCao12", "hinhanhhoatdong1", "hinhanh_hoatdong1",0,70,1,0,1);</script>
    </div>
    <div class="clear"></div>
</div>