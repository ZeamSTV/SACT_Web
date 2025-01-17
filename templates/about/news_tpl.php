<section id='main_info'>   
    <div class='main_ttt1'>
        <h1>            	
            <?php			
                if(isset($_REQUEST['idc'])){				
            ?>             
            <a href="gioi-thieu/<?=($news["ten"]!="")?q_bodautv($news["ten"]):"-"?>-<?=$news['id']?>.html" title="<?php echo $news["ten"]; ?>"><?php echo $news["ten"]; ?></a>
            <?php	}
                else
                    echo 'GIỚI THIỆU';	
            ?>
        </h1>
    </div>	
    <div class="clear"></div>
    <div class="main_noidung_info">			
        <?php echo $news["noidung"]; ?>                
    </div>
        
    <div class="main_ttt">  
        <h2>GIỚI THIỆU KHÁC</h2>             
        <div class="clear"></div>            
    </div>	
    <div class="main_noidung_info">                        
     <?php
      if(count($newskhac) != 0){									
          foreach($newskhac as $v){
      ?>					                                                						
          <h3><a href="gioi-thieu/<?=($v["ten"]!="")?q_bodautv($v["ten"]):"-"?>-<?=$v['id']?>.html" class="tinkhac" title="<?php echo $v["ten"]; ?>">
          <?php echo $v["ten"]; ?>
          </a></h3>
      <?php
          }		
      }
      else{
      ?>
      <p style=" font-weight:bold;">Thông tin đang được cập nhập</p>
      <?php
      }
      ?>                                    
        <div class="clear"></div>                               
    </div>     	
</section>

        <!--END MAIN INFO-->