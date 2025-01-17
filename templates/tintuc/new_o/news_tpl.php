<section class="main_info">   
        <div class='main_ttt' id='danhdau'>
        	<h1>            	
				<?php			
                    if(isset($_REQUEST['idc'])){				
                ?> 
                <a href="services/<?=($news["ten"]!="")?q_bodautv($news["ten"]):"-"?>-<?=$news['id']?>.html" title="<?php echo $news["ten"]; ?>"><?php echo $news["ten"]; ?></a>
                <?php	}else{ ?>
                <a href="services.html" title="Services">Services</a>
                <?php } ?>                
            </h1>
            <div class="clear"></div>
        </div>	
        <div class="clear"></div>
        <div class="main_noidung_info">			
			<?php
                if(count($news) != 0){
                    if(!isset($_GET['idc'])){	//Nếu là danh sách Services						
						$temp=0;
                        foreach($news as $v){							
							if($temp==3){
								$temp=0;
								echo '<div style="width:100%; height:15px; float:left;"></div>';
							}
							$temp++;
            ?>            
            <div class="tin_info_o" <?=($temp==2)?' style="margin-right:0px;"':''?> <?=($temp==3)?' style="margin-right:0px; float:right;"':''?>>
                <a href="services/<?=($v["ten"]!="")?q_bodautv($v["ten"]):"-"?>-<?=$v['id']?>.html" class="tin_img_o" title="<?=$v['ten']?>"><img src="<?=_upload_tinnho_l.$v['thumb']?>" border="0" title="<?=$v['ten']?>" alt="<?=$v['ten']?>" />
                	<?php if($v['mota']!=''){ ?><h3><?=$v['mota']?></h3><?php } ?>
                </a>
                <div class="clear"></div>
                <h2><a href="services/<?=($v["ten"]!="")?q_bodautv($v["ten"]):"-"?>-<?=$v['id']?>.html" class="tin_ten_o" title="<?=$v['ten']?>"><?=$v['ten']?></a></h2>                
                <div class="clear"></div>
            </div>                                       
            <?php							
                        }
                        if($count_sp>9){
            ?>
                    <div class="clear"></div>
                    <div align="center"><div class="paging"><?=$paging['paging']?></div></div>        
            <?php
                        }
                    }
                    else{		//Nếu là chi tiết sản phẩm								
            ?>
                <div id='ct_tintuc'>                    	
                    <h2 class="tieude_new"><?php echo $news["ten"]; ?></h2>
                    <p class="ngay_new">Day: (<?=date('d-m-Y - h:i A',$news['ngaytao'])?>) - Views: <?=$luotxem?></p>
                    <div class="mota_new"><h2><?php echo $news["mota"]; ?></h2></div>
                    <div class="noidung_new"><?php echo $news["noidung"]; ?></div>
                </div>
                <div class="clear"></div>
                
            </div>
            
            <div class="main_ttt" style="margin-top:10px;">  
                <h2>
                    <a href="services.html" title="Other Services">Other Services</a>  
                </h2>             
                <div class="clear"></div>            
            </div>	
            <div class="main_noidung_info">                        
             <?php
              if(count($newskhac) != 0){									
                  $temp=0;
				  foreach($newskhac as $v){							
					  if($temp==3){
						  $temp=0;
						  echo '<div style="width:100%; height:15px; float:left;"></div>';
					  }
					  $temp++;
              ?>					                                                						
              <div class="tin_info_o" <?=($temp==2)?' style="margin-right:0px;"':''?> <?=($temp==3)?' style="margin-right:0px; float:right;"':''?>>
                <a href="services/<?=($v["ten"]!="")?q_bodautv($v["ten"]):"-"?>-<?=$v['id']?>.html" class="tin_img_o" title="<?=$v['ten']?>"><img src="<?=_upload_tinnho_l.$v['thumb']?>" border="0" title="<?=$v['ten']?>" alt="<?=$v['ten']?>" />
                	<?php if($v['mota']!=''){ ?><h3><?=$v['mota']?></h3><?php } ?>
                </a>
                <div class="clear"></div>
                <h2><a href="services/<?=($v["ten"]!="")?q_bodautv($v["ten"]):"-"?>-<?=$v['id']?>.html" class="tin_ten_o" title="<?=$v['ten']?>"><?=$v['ten']?></a></h2>                
                <div class="clear"></div>
            </div>   
              <?php
                  }		
              }
              else{
              ?>
              <p style=" font-weight:bold;">Information is being updated</p>
              <?php
              }
              ?>
                    
         
            <?php
                    }
                }
                else{
            ?>
                <p style="font-weight:bold;">Information is being updated</p>
            <?php
                }
            ?>       
  			<div class="clear"></div>                               
		</div>     	
</section>

        <!--END MAIN INFO-->