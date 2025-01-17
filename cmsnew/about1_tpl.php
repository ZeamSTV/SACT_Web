<?php  
	
	
	$d->reset();
	$sql = "select ten_vi, ten_en from #_photo where hienthi=1 and id=363";
	$d->query($sql);
	$tongquan = $d->fetch_array();
	
	$d->reset();
	$sql = "select photo from #_tinnho where hienthi=1 and com=3 order by stt asc, id desc";
	$d->query($sql);
	$imgtq = $d->result_array();
	
	$d->reset();
	$sql = "select mota_vi, mota_en, noidung_vi, noidung_en from #_about where com=1";
	$d->query($sql);
	$motatq = $d->fetch_array();
	
	$d->reset();
	$sql = "select ten_vi, ten_en from #_photo where hienthi=1 and id=450";
	$d->query($sql);
	$tiemnang = $d->fetch_array();
	
	$d->reset();
	$sql = "select photo,ten_vi,ten_en,mota_vi,mota_en from #_tinnho where hienthi=1 and com=4 order by stt asc, id desc";
	$d->query($sql);
	$itemtn = $d->result_array();
	

	
	

	
?>

<div style=" clear:both"></div>
<section class="sec-tc" id="tongquan-n">
    	<div class="tieude-tc-xanh">
        	<h2><a href="du-an.html"><?=$tongquan['ten_'.$lang]?></a></h2>
        </div>
        
        <div data-wow-delay="0.3s" class=" wow fadeInLeft"  id="left-tq">
        	<img src="<?=_upload_tinnho_l.$imgtq[0]['photo']?>" alt="<?=$tongquan['ten_'.$lang]?>">
            <div id="text-left-tq">
            <div id="content-text">
            	<?=$motatq['mota_'.$lang]?>
                </div>
            </div>
        </div>
        
        <div data-wow-delay="0.3s" class=" wow fadeInRight" id="right-tq">
        	<div id="content-img">
        	<img src="<?=_upload_tinnho_l.$imgtq[1]['photo']?>" alt="<?=$tongquan['ten_'.$lang]?>" id="img-top-right">
            <img src="<?=_upload_tinnho_l.$imgtq[2]['photo']?>" alt="<?=$tongquan['ten_'.$lang]?>" id="img-bottom-right">
            </div>
            <div id="text-right-tq">
            	<?=$motatq['noidung_'.$lang]?>
            </div>
        </div>
        
       
</section>

<div style=" clear:both"></div>
<section class="sec-tc" id="tiemnang-n">
    	<div class="tieude-tc-xanh">
        	<h2><a href="du-an.html"><?=$tiemnang['ten_'.$lang]?></a></h2>
        </div>
        
        <?php 
		$i=0.2;
		foreach ($itemtn as $v) { 
		 $i=$i+0.1;
		?>
        <div data-wow-delay="<?=$i?>" class="sec-tc item-tn wow fadeInDown" >
        <div class="left-tn">
        	<img src="<?=_upload_tinnho_l.$v['photo']?>" alt="<?=$v['ten_'.$lang]?>">
        </div>
        
        <div class="right-tn">
        	<div class="tieude-tn">
            	<h3><?=$v['ten_'.$lang]?></h3>
            </div>
            <div class="content-tn">
            	<?=$v['mota_'.$lang]?>
            </div>
        </div>
        </div>
       <?php } ?>
</section>

