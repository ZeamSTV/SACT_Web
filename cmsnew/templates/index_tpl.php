<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>
<style type="text/css">


.counter-box {
    display: block;
    background: #f6f6f6;
    padding: 40px 20px 37px;
    text-align: center
}

.counter-box p {
    margin: 5px 0 0;
    padding: 0;
    color: #909090;
    font-size: 18px;
    font-weight: 500
}

.counter-box i {
    font-size: 60px;
    margin: 0 0 15px;
    color: #d2d2d2
}

.counter {
    display: block;
    font-size: 32px;
    font-weight: 700;
    color: #666;
    line-height: 28px
}

.counter-box.colored {
    background: #3acf87
}

.counter-box.colored p,
.counter-box.colored i,
.counter-box.colored .counter {
    color: #fff
}
</style>

<section class="content">
   <div class="margin-bottom">
      <div class="msg"></div>
   </div>
   <div class="row">
      <div class="col-lg-3 col-xs-6">
         <div class="small-box bg-aqua">
            <div class="inner">
               <h3><?=$tongdh?></h3>
               <p>Thành viên</p>
            </div>
            <div class="icon">
               <i class="ion ion-person"></i>
            </div>
            <a href="index.php?com=member&act=man" class="small-box-footer">Quản lý <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div>
      <div class="col-lg-3 col-xs-6">
         <div class="small-box bg-green">
            <div class="inner">
               <h3><?=$tongsp?></h3>
               <p>Sản phẩm</p>
            </div>
            <div class="icon">
               <i class="ion ion-bag"></i>
            </div>
            <a href="index.php?com=product&act=man" class="small-box-footer">Quản lý <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div>
      <div class="col-lg-3 col-xs-6">
         <div class="small-box bg-yellow">
            <div class="inner">
               <h3><?=$tongtintuc?></h3>
               <p>Tin tức</p>
            </div>
            <div class="icon">
               <i class="ion ion-ios-paper"></i>
            </div>
            <a href="index.php?com=tin3cap&act=man" class="small-box-footer">Quản lý <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div>
      <div class="col-lg-3 col-xs-6">
         <div class="small-box bg-red">
            <div class="inner">
               <h3><?=$all_visitors?></h3>
               <p>Lượng truy cập</p>
            </div>
            <div class="icon">
               <i class="ion ion-pie-graph"></i>
            </div>
            <a href="index.php" class="small-box-footer">Quản lý <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div>
   </div>
    <div class="row">

      <div class="col-md-8">

        <div class="row">
          <div class="four col-md-6 col-xs-6 " style="margin-bottom: 20px">
              <div class="counter-box colored"> <i class="fa fa-circle text-success text-success" style="color:#3c763d"></i> <span class="counter"><?=$online_visitors?></span>
                  <p>Đang online</p>
              </div>
          </div>
          <div class="four col-md-6 col-xs-6" style="margin-bottom: 20px">
              <div class="counter-box"> <i class="fa fa-user"></i> <span class="counter"><?=$today_visitors?></span>
                  <p>Hôm nay</p>
              </div>
          </div>
          <div class="four col-md-6 col-xs-6" style="margin-bottom: 20px">
              <div class="counter-box"> <i class="fa fa-calendar"></i> <span class="counter"><?=$month_visitors?></span>
                  <p>Tháng này</p>
              </div>
          </div>
          <div class="four col-md-6 col-xs-6" style="margin-bottom: 20px">
              <div class="counter-box"> <i class="fa fa-group"></i> <span class="counter"><?=$all_visitors?></span>
                  <p>Tổng truy cập</p>
              </div>
          </div>
        </div>
      </div>

 


      <div class="col-md-4">


        <div class="row">
         <div class="col-sm-12 paging_right_10px">   

                    <div class="box calendar">                 

                        <!-- Title Bar Start -->

                        <div class="title-bar"><i class="fa fa-signal"></i>Bây giờ : &nbsp;&nbsp;&nbsp;                       

                            <b id="clock">Loading...</b>

                            <script type="text/javascript"> 

                                function refrClock() {

                            

                                var d=new Date();

                                

                                var s=d.getSeconds();

                                

                                var m=d.getMinutes();

                                

                                var h=d.getHours();

                                

                                var am_pm;

                                

                                if (s<10) {s="0" + s}

                                

                                if (m<10) {m="0" + m}

                                

                                if (h>12)

                                

                                {h-=12;AM_PM = "PM"}

                                

                                else {AM_PM="AM"}

                                

                                if (h<10) {h="0" + h}

                            

                                document.getElementById("clock").innerHTML=" " + h + " : " + m + " : " + s + " " + AM_PM; 

                                setTimeout("refrClock()",1000); } 

                                refrClock();

                            </script>

                        </div>

                        <!-- Title Bar End -->

                    </div>                                        

          </div>
        </div>
         <div class="row">

                <div class="col-sm-12 paging_right_10px">

                    <div class="box calendar">

                        <!-- Title Bar Start -->

                        <div class="title-bar"><i class="fa fa-calendar"></i>Tiện ích :: Lịch</div>

                        <!-- Title Bar End -->

                        <div class="calendar-widget"></div>

                    </div>

                </div>

              </div>
      </div>
    </div>
    
</section>


<script type="text/javascript">
  $(document).ready(function() {

$('.counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 4000,
easing: 'swing',
step: function (now) {
$(this).text(Math.ceil(now));
}
});
});

});
</script>