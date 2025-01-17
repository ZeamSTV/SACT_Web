		<script language="javascript">
			function addtocart(pid){
				document.form1.productid.value=pid;
				document.form1.command.value='add';
				document.form1.submit();
			}
		</script>
        <form name="form1" action="index.php">
            <input type="hidden" name="productid" />
            <input type="hidden" name="command" />
        </form>
				<?php include_once _template."layout/left.php"; ?>
				<section id="main_info1">
                	<div style="border-bottom:1px solid #CCC; padding:15px 0px 5px 0px;">
                    	<?php include_once _template."layout/timkiemnangcao.php"; ?>
                    </div>
                    <div class="main_ttt1">
                    	<h1>                    	
                        	<a href="tim-kiem-nang-cao.html" title="Tìm kiếm nâng cao">Tìm kiếm nâng cao</a>                        
                       </h1>
                        <div class="clear"></div>
                    </div>                                        
                                        
                    <div class="main_noidung_info">                     	                              	
                    	<?php						
							if(count($product)!=0){
								$temp=0;
								foreach($product as $v){
									$te="";
									if($temp==2)
										$te=' style="margin-right:0px;"';												
									if($temp==3){
										echo "<div style='width:95%; height:15px; float:left;'></div>";
										$temp=0;
									}
									$temp++;
						?>
						<div class="sp_info" <?=$te?>>
							<a href="san-pham/<?=($v['cat']!="")?q_bodautv($v['cat']):"-"?>/<?=($v['cat1']!="")?q_bodautv($v['cat1']):"-"?>/<?=($v['cat2']!="")?q_bodautv($v['cat2']):"-"?>/<?=($v['ten']!="")?q_bodautv($v['ten']):"-"?>-<?=$v['id']?>.html" class="sp_img" title="<?=$v['ten']?>"><img src="<?=_upload_sanpham_l.$v['thumb']?>" width="210" height="170" border="0" title="<?=$v['ten']?>" alt="<?=$v['ten']?>"></a>
							<div class="clear" style="width:100%; height:5px;"></div>
							<h2>
							<a href="san-pham/<?=($v['cat']!="")?q_bodautv($v['cat']):"-"?>/<?=($v['cat1']!="")?q_bodautv($v['cat1']):"-"?>/<?=($v['cat2']!="")?q_bodautv($v['cat2']):"-"?>/<?=($v['ten']!="")?q_bodautv($v['ten']):"-"?>-<?=$v['id']?>.html" class="sp_ten" title="<?=$v['ten']?>"><?=$v['ten']?></a>
							</h2>
							<div class="clear" style="width:100%; height:6px;"></div> 
							<p class="sp_gia">Giá: <?=($v['gia']!=0)?(number_format($v['gia'],0, ',', '.')." VND"):"Liên hệ" ?></p>
						</div>
						<?php	
								}
								if($count_sp>12){
						?>
						<div class="clear"></div>
						<div align="center"><div class="paging"><?=$paging['paging']?></div></div>        
						<?php
								}
							}
							else{
						?>
                        <p>Thông tin đang được cập nhập ...</p>
                        <?php	
							}
						?>  
						<div class="clear"></div>				
                    </div>
                    
                   
                
                </section>
                 <div class="clear"></div>			
                              