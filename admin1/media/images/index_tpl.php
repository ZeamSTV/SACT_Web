
<?php
    
$d->reset();
$sql="select * from #_photo where hienthi=1 and com='slideshow1' order by stt asc, id desc";
$d->query($sql);
$anhslidets=$d->result_array();

$d->reset();
$sql="select * from #_photo where hienthi=1 and id=369";
     $d->query($sql);
    $anhnents=$d->fetch_array();

?>

<div id="taisao-n">
    <div class="margin">
        <div id="owl-ts">
        <?php foreach ($anhslidets as $v) { ?>
            <div class="item-ts">
            	<div class="title-ts">
                	<p class="tieude-ts" style="text-transform: uppercase;margin:0 0 5px;"> <a href="ve-chung-toi.html">Viện nha khoa thẩm mỹ quốc tế san dentist</a></p>
                    <div class="sao-gt"><img src="img/hinhanh/sao.png" alt="Giới thiệu"></div>
                     <p class="tieude-ts" style="color: #4798b5"><?=$v['ten_vi']?></p>
                </div>
                <div class="left-ts">
                    <!--a href="<?=$v['link']?>"><img src="thumb/595x377/1/<?=_upload_hinhanh_l.$v['photo']?>" alt="<?=$v['ten_vi']?>"></a-->
					<!--a href="<?=$v['link']?>" class="video-container">
						<iframe width="400" height="250" src="https://www.youtube.com/embed/8YUBn4j0Ybk" frameborder="0" allowfullscreen></iframe>
						
					</a-->
					<div class="video-container">
						
						<iframe width="400" height="300" src="https://www.youtube.com/embed/8YUBn4j0Ybk?rel=0&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
                </div>
				
                <div class="right-ts">
                    
                    <div  id="mota-ts<?=$v['id']?>" class="mota-ts"><?=$v['mota_vi']?> </div>
                    <a class="xt-nd-ts" id="xt-nd-ts<?=$v['id']?>" onclick="showts<?=$v['id']?>()" href="<?=$v['link']?>">Xem thêm ></a>
                    <a class="xt-nd-ts" id="gon-nd-ts<?=$v['id']?>"  style="display:none;" onclick="hidets<?=$v['id']?>()">Thu gọn ></a>
                </div>
       
                
                <div class="xemthem-ts">
 <div class="box-nutphai"><a onclick="$('html, body').animate({scrollTop: $('.box-phaituvan').offset().top - 150}, 'slow');">Đặt lịch tư vấn</a></div>            	</div>
            </div>
            
        <?php } ?>
        
        </div>
         
        <!--script>
                                $("#owl-ts").owlCarousel({
                                    items : 1,
                                    //autoPlay:true,
                                    lazyLoad : true,
                                    navigation : true,
                                    pagination:false,
                                    itemsDesktop : [1199, 1],
                                    itemsDesktopSmall : [979, 1],
                                    itemsTablet : [768, 1],
                                    itemsTabletSmall : [450, 1],
                                    itemsMobile : [375, 1]
                                  });
                                  
                            </script-->
                            
                            
    </div> 
</div>
<div style="clear:both"></div>


<?php   
$d->reset();
$sql="select * from #_photo where hienthi=1 and com='quangcao2ben_right' order by stt asc, id desc";
$d->query($sql);
$anhtren=$d->result_array();
?>
<div id="khuhinhtc"  style="background: url(<?=_upload_hinhanh_l.$anhtren[0]['photo']?>) no-repeat top left; background-size:cover;">
    <div class="margin1" style="background: url(<?=_upload_hinhanh_l.$anhtren[1]['photo']?>) no-repeat top left; background-size:100% auto;">
        <div id="top-imgqc">
                <div class="left-imgqc">
                    <img src="<?=_upload_hinhanh_l.$anhtren[2]['photo']?>" alt="<?=$company['ten_vi']?>">
                    <div class="box-nut">
                        <div class="box-nutphai"><a onclick="$('html, body').animate({scrollTop: $('.box-phaituvan').offset().top - 150}, 'slow');">Đặt lịch tư vấn</a></div>
                        <div class="box-nuttrai"><a href="<?=$anhtren[2]['link']?>" target="_blank">Tìm hiểu thêm</a></div>
    
                    </div>
                </div>
                <div class="right-imgqc">
                    <img src="<?=_upload_hinhanh_l.$anhtren[3]['photo']?>" alt="<?=$company['ten_vi']?>" >
                </div> 
        </div>	
		<div class="center-imgqc">
            	<img src="<?=_upload_hinhanh_l.$anhtren[4]['photo']?>" alt="<?=$company['ten_vi']?>">
      	</div>
		<div id="bottom-imgqc">
                <div class="left-imgqc">
                    <img src="<?=_upload_hinhanh_l.$anhtren[5]['photo']?>" alt="<?=$company['ten_vi']?>">
                    <div class="box-nut">
                        <div class="box-nutphai"><a onclick="$('html, body').animate({scrollTop: $('.box-phaituvan').offset().top - 150}, 'slow');">Đặt lịch tư vấn</a></div>
                        <div class="box-nuttrai"><a href="<?=$anhtren[5]['link']?>" target="_blank">Tìm hiểu thêm</a></div>
    
                    </div>
                </div>
                <div class="right-imgqc">
                    <img src="<?=_upload_hinhanh_l.$anhtren[6]['photo']?>" alt="<?=$company['ten_vi']?>" >
                </div> 
        </div>        
    </div>
</div>
<div style="clear: both"></div>



<?php
$d->reset();
$sql="select * from #_product_cat where hienthi=1 and com='cat1' and noibat=1 order by stt asc, id desc limit 0,5";
$d->query($sql);
$suthammynb=$d->result_array();





$d->reset();
$sql="select * from #_tin3cap_cat where hienthi=1 order by stt asc, id desc";
$d->query($sql);
$tin3capcat=$d->result_array();
?>

<div id="suthammy">
            	<div class="title-ts">
                	<p class="tieude-ts" style="text-transform: uppercase;margin:0 0 5px;"> <a href="dich-vu.html">Những dịch vụ tại San Dentist</a></p>
                    <div class="sao-gt"><img src="img/hinhanh/sao.png" alt="Những dịch vụ tại San Dentist"></div>
                </div>
        
        <div class="thammy-box-mobile">
    <div class="container">
        <div class="row">
                <div class="owl-suthammy">
                    <?php foreach ($suthammynb as $value){ ?>
                        <div class="box-thammymobile">
                                    <?php 
                                        $d->reset();
                                        $sql="select * from #_product_cat where hienthi=1 and com='cat' and noibat=1 and id='".$value['id_cat']."' ";
                                        $d->query($sql);
                                        $cat_thammynb=$d->fetch_array();
                                    ?>
                                    <div class="box-img-chinh">
                                    <a href="su-tham-my/<?=$value['tenkhongdau_vi']?>/<?=$value['tenkhongdau_vi']?>-<?=$value['id']?>.html">
                                    <img src="thumb/203x210/2/<?=_upload_sanpham_l.$value['photo']?>" alt="<?=$value['ten_vi']?>">
                                        <div class="hinhtron"><img src="img/hinhanh/bi.png" alt="Họa tiết tròn"></div>
                                        <div class="hinhnhan"><img src="img/hinhanh/x.png" alt="Họa tiết chéo"></div>
                                    </a>
                                    </div>
                                    <div class="box-des-bg1">
                                        <div class="img-nenxanh">
                                        <a href="su-tham-my/<?=$value['tenkhongdau_vi']?>/<?=$value['tenkhongdau_vi']?>-<?=$value['id']?>.html"><img src="img/hinhanh/nenxanh-rangsuthammy.png" alt="Nền xanh"></a>
                                        <h4><a href="su-tham-my/<?=$value['tenkhongdau_vi']?>/<?=$value['tenkhongdau_vi']?>-<?=$value['id']?>.html"><?=$value['ten_vi']?></a></h4>
                                        </div>

                                    </div>
                            </div>
                    <?php } ?>
                        


                    </div>       
        </div>
    </div>
  <!--script>
                                $(".owl-suthammy").owlCarousel({
                                    items : 4,
                                    autoPlay:true,
                                    lazyLoad : true,
                                    navigation : true,
                                    pagination:false,
                                    itemsDesktop : [1199, 4],
                                    itemsDesktopSmall : [979, 3],
                                    itemsTablet : [768, 3],
                                    itemsTabletSmall : [425, 2],
                                    itemsMobile : [375, 2]
                                  });
                                  
                            </script-->
</div>
        <div class="margin">
            <div class="box-suthammy">

                    <?php for($i=0;$i<count($suthammynb); $i++) {
						$v=$suthammynb[$i]; ?>
                            <div class="box-thammy<?=$i+1?> box-thammy">
                                <?php 
                                    $d->reset();
                                    $sql="select * from #_product_cat where hienthi=1 and com='cat' and id='".$v['id_cat']."' ";
                                    $d->query($sql);
                                    $cat_thammynb=$d->fetch_array();
                                ?>
                                <div class="box-img-chinh">
                                <a href="su-tham-my/<?=$cat_thammynb['tenkhongdau_vi']?>/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html">
                                <img class="hieuung" src="thumb/203x210/2/<?=_upload_sanpham_l.$v['photo']?>" alt="<?=$v['ten_vi']?>">
                                    <div class="hinhtron"><img src="img/hinhanh/bi.png" alt="Họa tiết tròn"></div>
                                    <div class="hinhnhan"><img src="img/hinhanh/x.png" alt="Họa tiết chéo"></div>
                                </a>
                                </div>
                                <div class="box-des-bg">
                                    <div class="img-nenxanh">
                                    <a href="su-tham-my/<?=$cat_thammynb['tenkhongdau_vi']?>/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><img class="anhxanh" src="img/hinhanh/nenxanh-rangsuthammy.png" alt="Nền xanh"></a>
                                    <h4><a href="su-tham-my/<?=$cat_thammynb['tenkhongdau_vi']?>/<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.html"><?=$v['ten_vi']?></a></h4>
                                    </div>

                                </div>
                            </div>
                           
                            <?php } ?>
                            
                            <?php 
							if (count($suthammynb)<5) {
	$d->reset();
$sql="select * from #_tin3cap_cat where hienthi=1 and com='cat' and noibat=1 order by stt asc, id desc limit 0,".(5-count($suthammynb));
$d->query($sql);
$dichvunb=$d->result_array();
	
							for( $j= 0;$j<count($dichvunb); $j++) {
						$v1=$dichvunb[$j]; ?> 
                            <div class="box-thammy<?=count($suthammynb)+1+$j?> box-thammy">
                                
                                <div class="box-img-chinh">
                                <a href="dich-vu/<?=$v1['tenkhongdau']?>-<?=$v1['id']?>.html">
                                <img class="hieuung" src="thumb/203x210/2/<?=_upload_tin3cap_l.$v1['thumb']?>" alt="<?=$v1['ten_vi']?>">
                                    <div class="hinhtron"><img src="img/hinhanh/bi.png" alt="Họa tiết tròn"></div>
                                    <div class="hinhnhan"><img src="img/hinhanh/x.png" alt="Họa tiết chéo"></div>
                                </a>
                                </div>
                                <div class="box-des-bg">
                                    <div class="img-nenxanh">
                                    <a href="dich-vu/<?=$v1['tenkhongdau']?>-<?=$v1['id']?>.html"><img class="anhxanh" src="img/hinhanh/nenxanh-rangsuthammy.png" alt="Nền xanh"></a>
                                    <h4><a href="dich-vu/<?=$v1['tenkhongdau']?>-<?=$v1['id']?>.html"><?=$v1['ten_vi']?></a></h4>
                                    </div>

                                </div>
                            </div>
                          
                            <?php } }?>
                            
                              <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>                          
                            <div class="box-phaituvan">
                                <form action="dang-ky-nhan-tin-thanh-vien.html" method="post">
                                      
                                        <select class="js-example-basic-single" name="loaituvan" id="loaituvan">
                                            <option value="0" >Chọn dịch vụ tư vấn </option>
                                        <?php foreach ($tuvancat as  $v) {?>

                                        
                                                    <option value="<?=$v['ten_vi']?>"><?=$v['ten_vi']?></option>
                                           
                                        <?php } ?>
                                        <?php foreach ($tin3capcat as  $v) {?>

                                       
                                                    <option  value="<?=$v['ten_vi']?>"><?=$v['ten_vi']?></option>
                                           
                                        <?php } ?>

                                      
                                        </select>
                                            <input type="text" id="hoten" name="hoten" placeholder="Họ và tên:" required="required">
                                            <input type="text" id="dienthoai" name="dienthoai" placeholder="Số điện thoại:" required="required">
                                            <textarea type="text" id="noidung" name="noidung" required="required" placeholder="Nội dung"></textarea> 
                                            <button type="submit" id="sendform" name="sendform">Đặt lịch tư vấn</button>
                                    </form>
                            </div>

                           



            </div>
        </div>        

</div>
<script type="text/javascript">
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
	
	
$("#sendform").click(function() {
	  if($('select#loaituvan option:checked').val()=='' ||$('select#loaituvan option:checked').val()==0 )
                {

                            alert('Bạn chưa chọn dịch vụ tư vấn');
                            return false;
             }

});


});
</script>
<div style="clear:both"></div>




<?php
$d->reset();
$sql="select * from #_congtrinh where hienthi=1 order by stt asc, id desc limit 0,4";
$d->query($sql);
$cauchuyenkh=$d->result_array();
?>
<div id="camnhankh">

    <div class="container">
        <div class="row">
           <div class="title-ts">
                	<p class="tieude-ts" style="text-transform: uppercase;margin:0 0 5px;"> <a>Câu chuyện khách hàng</a></p>
                    <div class="sao-gt"><img src="img/hinhanh/sao.png" alt="Câu chuyện khách hàng"></div>
                </div> 

            <?php foreach ($cauchuyenkh as $v) {?>
                <div class="col-md-6 itemscauchuyen">
                <div class="box-img-cauchuyen">

                    <div id="beforeafter<?=$v['id']?>" class="twentytwenty-container">
                      <!--img src="thumb/248x271/2/<?=_upload_congtrinh_l.$v['photo']?>" alt="Trước"-->
					  <img src="thumb/248x271/2/<?=_upload_congtrinh_l.$v['photo1']?>" alt="Trước" />
                      <img src="thumb/248x271/2/<?=_upload_congtrinh_l.$v['photo1']?>" alt="Sau" />
                    </div>
                </div>
                <div class="box-mota-cauchuyen">
                    <h3><?=$v['ten_vi']?></h3>
                    <h4><?=$v['mota_vi']?></h4>
                </div>
                </div>
                <script type="text/javascript">
                    $(window).load(function() {
                    $("#beforeafter<?=$v['id']?>").twentytwenty();
                        });
                </script>
            <?php } ?>
           
           
          
          
           
        </div>
        <div class="xemthem-ts">
 <div class="box-nutphai"><a onclick="$('html, body').animate({scrollTop: $('.box-phaituvan').offset().top - 150}, 'slow');">Đặt lịch tư vấn</a></div>            	</div>
            </div>
    </div>


 <script type="text/javascript" src="js/twentytwenty.js"></script>

<div style="clear:both"></div>



<?php   
$d->reset();
$sql="select * from #_tinnho where hienthi=1 and com='3' order by stt asc, id desc limit 0,4";
$d->query($sql);
$bontinduoi=$d->result_array();
?>
<!--div id="hinhanhtuchon">
    <div class="margin">
        <div class="container">

        <?php foreach ($bontinduoi as $v) {?>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="box-sao-tuchon">
                <div class="box-img-tuchon"><img src="thumb/252x257/2/<?=_upload_tinnho_l.$v['photo']?>" alt="<?=$company['ten_vi']?>"></div>
                <div class="box-mota-tuchon"><h3><a href="<?=$v['link']?>"><?=catchuoi($v['ten_vi'],45)?></a></h3></div>
            </div>
        </div>
        <?php } ?>

    </div>
    </div>
</div-->
<script type="text/javascript">
$(".solieu").each(function() {
  var $this = $(this),
      countTo = $this.attr("data-count");

  $({ countNum: $this.text() }).animate(
    {
      countNum: countTo
    },

    {
      duration: 5000,
      easing: "linear",
      step: function() {
        $this.text(Math.floor(this.countNum));
      },
      complete: function() {
        $this.text(this.countNum);
        //alert('finished');
      }
    }
  );
});


</script>
<div style="clear:both"></div>

<?php 

$d->reset();
$sql="select * from #_photo where hienthi=1 and com='video' order by stt asc, id desc ";
$d->query($sql);
$video_home=$d->result_array();

$d->reset();
$sql="select * from #_photo where com='banner'";
$d->query($sql);
$videonb=$d->fetch_array();

?>
<!--div id="video-home">

<div class="margin">
<div class="noibat-video" id="khungiframevideo">
                <div class="video-tc">
                     <a onclick="showiframe()" ><img id="anhnoibat-video" src="<!--?=_upload_hinhanh_l.$videonb['photo']?>"></a>
                    <iframe id="iframe-video" src="https://www.youtube.com/embed/<!--?=$videonb['link']?>" frameborder="0" allowfullscreen=""></iframe>
                   
                </div>
                </div>
            </div>
<script type='text/javascript'> 

function showiframe(){ 
div = document.getElementById("anhnoibat-video");
div.style.display= "none";

div1 = document.getElementById("iframe-video");
div1.style.display= "block";

 } ; 

</script>


</div-->
<div style="clear:both"></div>
<?php 
$d->reset();
$sql="select * from #_hethong where hienthi=1 and id_cat='11' order by stt asc, id desc limit 0,8";
$d->query($sql);
$tintuctrangchu=$d->result_array();
?>
<!--div id="tintuc-home">
    <div class="container">
        <div class="row">
            <div id="owl-tintuccuoi">    
            <?php foreach ($tintuctrangchu as $v) { ?>

                <div class="col-md-12 box-items-tintuc">
                <div class="box-img-tt-home"><img src="thumb/241x185/2/<?=_upload_hethong_l.$v['photo']?>" alt="<?=$v['ten_vi']?>"></div>
                <div class="box-des-tt-home">
                    <h3><a href="blog/<?=$v['tenkhongdau']?>-<?=$v['id']?>.htm"><?=catchuoi($v['ten_vi'],60)?></a></h3>
                    <div class="mota-blog"><?=$v['mota_vi']?></div>
                    <p class="xemthem"><a href="blog/<?=$v['tenkhongdau']?>-<?=$v['id']?>.htm">Xem thêm</a> <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </p>
                </div>
            </div>
            <?php } ?>
            </div>
           
            
        </div>
    </div>
</div>
    <script>
                                $("#owl-tintuccuoi").owlCarousel({
                                    items : 4,
                                    autoPlay:true,
                                    lazyLoad : true,
                                    pagination : false,
                                    navigation:true,
                                    itemsDesktop : [1199, 3],
                                    itemsDesktopSmall : [979, 3],
                                    itemsTablet : [768, 3],
                                    itemsTabletSmall : [450, 2],
                                    itemsMobile : [375, 2]
                                  });
                                  
                            </script-->



<script>




$(".box-thammy").hover(function() {
 
  $(this).find(".box-img-chinh").children("img").css("top", "-20px");   
},
 function () {
            
        $(this).find(".box-img-chinh").children("img").css("top", "0");   

        }




);

</script>
