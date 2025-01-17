<div id="tieude_khungchinh2"><h1><?=$title_ttt?></h1></div>

<div id="noidung_khungchinh2">
		<div id="bentraidichvu">
			<div id="tieudedichvuanhthu"><h2><a>Dịch vụ anh thư</a></h2></div>
			<div id="noidungdichvuanhthu">
			
				<?php
				$d->reset();
				$sql="select * from #_tin3cap where hienthi=1 order by id desc limit 0,6";	
				$d->query($sql);
				$dichvuanhthu = $d->result_array();
				for($i1=0;$i1<count($dichvuanhthu);$i1++){
					$v = $dichvuanhthu[$i1];
					?>
					<div class="mucdichvuanhthu">
						<span class="sttdichvu"><?=$i1+1?>.</span>
						
						<img src="<?=_upload_tin3cap_l.$v['thumb']?>" alt="<?=$v['ten']?>"/>
						
						<div class="tenmucdichvutrai"><h3><a><?=catchuoi($v['ten'],$tu4)?></a></h3></div>
					
					</div>
				
				<?php }?>
			
			</div>
		
		</div>
		<div id="benphaidichvu">
    	
					<div id="noidungtrong">
   		
						<?=$news['noidung']?>
					</div>	
			</div>	
		
</div>