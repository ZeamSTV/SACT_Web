<?php			
    if(!isset($_REQUEST['idc'])){				
?> 
<div id="tieude_khungchinh2"><h1><?=$title_ttt?></h1></div>

<div id="noidung_khungchinh2">
	<?php for($t1=0;$t1<count($news);$t1++){
	$v = $news[$t1];
	?>
	
	<div class="mucdichvu">
	
			<a href="tin-tuc/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html"><img src="<?=_upload_tinnho_l.$v['thumb']?>" alt="<?=$v['ten']?>" align="left"/></a>
	
			<h3><a href="tin-tuc/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html"><?=catchuoi($v['ten'],$tu5)?></a></h3>
			<p class="ngaymucdichvu"> <i class="fa fa-calendar-o" aria-hidden="true"></i>  <span><?=date('d-m-Y - h:i A',$v['ngaytao'])?></span></p>
			<p><?=catchuoi($v['mota'],$tu60);?></p>
			
			<a class="xemthemmucdichvu"  href="tin-tuc/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html">Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
	</div>
	
	<?php } ?>
	
			<?php
                       
                        if($count_sp>$maxR){
            ?>
                    <div class="clear"></div>
                    <div align="center"><div class="paging"><?=$paging['paging']?></div></div>        
            <?php
                        }
			?>
</div>
<?php }else{?>

<div id="tieude_khungchinh2"><h1><?=$title_ttt?></h1></div>

<div id="noidung_khungchinh2">
		

    	
					<div id="noidungtrong">
   		
						<?=$news['noidung']?>
					</div>	
				
		
</div>

<?php }?>
			

        