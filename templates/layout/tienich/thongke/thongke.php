<p>Tổng truy cập: <?php $count=count_online(); echo $count['daxem'];?></p>
						<p>Đang online: <?php $count=count_online(); echo $count['dangxem'];?></p>
						

            
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