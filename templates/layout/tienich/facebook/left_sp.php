	<div class="left_ttt">
    	<span>THIẾT BỊ</span>
    </div>
    <div class="left_info">
    	<ul>
			<?php
                $sql = "select id,ten,tenkhongdau from #_product_hang where hienthi=1 and com='thietbi' order by stt asc,id desc";
                $d->query($sql);
                $hang_footer = $d->result_array();
                if(count($hang_footer)!=0){
                    foreach($hang_footer as $v){
            ?>
            <li><img src="media/images/left_chimuc.png" width="6" height="7" border="0" /><a href="thiet-bi/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>"><?=$v['ten']?></a></li>
            <?php	
                    }
                }
            ?>                      	
        </ul>
    </div>   
    
    <div class="left_ttt">
    	<span>THƯƠNG HIỆU</span>
    </div>
    <div class="left_info">
    	<ul>
			<?php
                $sql = "select id,ten,tenkhongdau from #_product_hang where hienthi=1 and com='nhasanxuat' order by stt asc,id desc";
                $d->query($sql);
                $hang_footer = $d->result_array();
                if(count($hang_footer)!=0){
                    foreach($hang_footer as $v){
            ?>
            <li><img src="media/images/left_chimuc.png" width="6" height="7" border="0" /><a href="thuong-hieu/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>"><?=$v['ten']?></a></li>
            <?php	
                    }
                }
            ?>                      	
        </ul>
    </div>   
    
    <div class="left_ttt">
    	<span>BỘ SƯU TẬP</span>
    </div>
    <div class="left_info">
    	<ul>
			<?php
                $sql = "select id,ten,tenkhongdau from #_product_hang where hienthi=1 and com='bosuutap' order by stt asc,id desc";
                $d->query($sql);
                $hang_footer = $d->result_array();
                if(count($hang_footer)!=0){
                    foreach($hang_footer as $v){
            ?>
            <li><img src="media/images/left_chimuc.png" width="6" height="7" border="0" /><a href="bo-suu-tap/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>"><?=$v['ten']?></a></li>
            <?php	
                    }
                }
            ?>                      	
        </ul>
    </div>   
    
    <div class="left_ttt">
    	<span>PHỤ KIỆN</span>
    </div>
    <div class="left_info">
    	<ul>
        	<?php
				$sql = "select id,ten,tenkhongdau from #_product_hang where hienthi=1 and com='nhom' order by stt asc,id desc";
				$d->query($sql);
				$hang_footer = $d->result_array();
				if(count($hang_footer)!=0){
					foreach($hang_footer as $v){
			?>
			<li><img src="media/images/left_chimuc.png" width="6" height="7" border="0" /><a href="phu-kien/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>"><?=$v['ten']?></a></li>
			<?php	
					}
				}
			?>                      	
        </ul>
    </div> 
        
        
        