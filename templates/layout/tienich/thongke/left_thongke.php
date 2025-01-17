			<div class="left_ttt">THỐNG KÊ TRUY CẬP</div>
            <div class="left_info border_radius_5px" style="padding:14px 19px;">
            	<style>
					#thongketruycap p{
						line-height:25px;
						display:block;
						position:relative;
						border-top:1px dotted #CCC;
					}
					#thongketruycap p span{
						color:#F00;
						font-weight:bold;
					}
				</style>
            	<div id='thongketruycap'>                	
                	<p style="border-top:none;">Đang truy cập: <span><?php $count=count_online(); echo $count['dangxem'];?></span></p>
                    <p>Hôm nay: <span><?=$today_visitors?></span></p>
                    <p>Tháng này: <span><?=$month_visitors?></span></p>
                    <p>Tổng truy cập: <span><?php $count=count_online(); echo $count['daxem'];?></span></p>
                    <div class="clear"></div>
                </div>                                
            </div>
            
            <?php /*if(1==0){ ?>
            
            <!--THỐNG KÊ FOOTER-->
        <style>
		#thongke{			
			color:#FFF;
			font-weight:bold;
			font-size:12px;
			padding-left:50px;
			min-height:50px;
			background:url(media/images/thongke.png) top left no-repeat;
		}		
		#thongke p{
			line-height:22px;
		}
		
		</style>
        
        
        <div id='thongke'>
        	<p>Đang Online: <span><?php $count=count_online(); echo $count['dangxem'];?></span></p>
           <!-- <p>Hôm nay: <span><?=$today_visitors?></span></p>
            <p>Tuần này: <span><?=$week_visitors?></span></p>
            <p>Tháng này: <span><?=$month_visitors?></span></p>
            <p>Tổng truy cập: <span><?=$all_visitors?></span></p>
            -->
            <p>Tổng truy cập: <span><?php $count=count_online(); echo $count['daxem'];?></span></p>
            </span></p>
        </div>
        <?php }*/ ?>