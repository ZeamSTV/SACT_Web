
            <!--THỐNG KÊ FOOTER-->
        <style>
		#thongke{
			width:135px;
			margin-top:10px;
			color:#373737;
			font-size:12px;
		}	
		#thongke b{
			font-weight:bold;
			color:#fe0000;
			font-size:12px;
			margin-bottom:7px;
			display:block;
		}
		#thongke p{
			line-height:20px;
			background:url(media/images/chidan1.png) center left no-repeat;
			padding-left:10px;			
		}
		#thongke p span{
			font-weight:bold;
		}
		</style>
        
        
        <div id='thongke'>
        	<!--<b>VISITS</b>-->
        	<p>Online: <span><?php $count=count_online(); echo $count['dangxem'];?></span></p>
            <p>Yesterday: <span><?=$yesterday_visitors?></span></p>
           <!-- <p>Hôm nay: <span><?=$today_visitors?></span></p>
            <p>Tuần này: <span><?=$week_visitors?></span></p>
            <p>Tháng này: <span><?=$month_visitors?></span></p>
            <p>Tổng truy cập: <span><?=$all_visitors?></span></p>
            -->
            <p>Visits: <span><?php $count=count_online(); echo $count['daxem'];?></span></p>
            </span></p>
        </div>