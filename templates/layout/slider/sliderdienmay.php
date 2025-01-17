

<?php

	$d->reset();

	$sql = "select * from #_photo where com='slideshow' and hienthi=1 order by stt asc,id desc ";

	$d->query($sql);

	$slide_show = $d->result_array();	

?>







<aside class="hm-bn">

	



		<div id="sync1" class="owl-carousel owl-theme">





			<?php foreach ($slide_show as $key => $v) {?>

		  	<div class="item">

			   <a href=''><img style='cursor:pointer' src='thumb/829x312/1/<?=_upload_hinhanh_l.$v['photo']?>' alt='<?=$v['ten_vi']?>' width='829' height='312'></a>   



			   </div>                     

		  	<?php } ?>

		</div>

		<div id="sync2" class="owl-carousel owl-theme hidden-sm hidden-xs">

			<?php foreach ($slide_show as $key => $v) {?>

		   <div class="item">

		      <h3><?=$v['ten_vi']?></h3>

		   </div>



		   <?php } ?>

		

		</div>



</aside>











<script type="text/javascript">

	

$(document).ready(function() {

  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var slidesPerPage =6; //globaly define number of elements per page
  var syncedSecondary = true;

  sync1.owlCarousel({
    items : 1,
    slideSpeed : 2000,
    nav: true,
    autoplay: true,
    dots: false,
    loop: true,
    responsiveRefreshRate : 200,
    navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #fff;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>','<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #fff;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
  }).on('changed.owl.carousel', syncPosition);

  sync2
    .on('initialized.owl.carousel', function () {
      sync2.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
    items : slidesPerPage,
    dots: true,
    nav: true,
    smartSpeed: 200,
    slideSpeed : 500,
    slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
    responsiveRefreshRate : 100
  }).on('changed.owl.carousel', syncPosition2);

  function syncPosition(el) {
    //if you set loop to false, you have to restore this next line
    //var current = el.item.index;
    
    //if you disable loop you have to comment this block
    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);
    
    if(current < 0) {
      current = count;
    }
    if(current > count) {
      current = 0;
    }
    
    //end block

    sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();
    
    if (current > end) {
      sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }
  
  function syncPosition2(el) {
    if(syncedSecondary) {
      var number = el.item.index;
      sync1.data('owl.carousel').to(number, 100, true);
    }
  }
  
  sync2.on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).index();
    sync1.data('owl.carousel').to(number, 300, true);
  });
});


</script>

<style type="text/css">
  .hm-bn img{
    width:100%;
    /* height:300px; */
    vertical-align:top;
}
.hm-bn #sync1{
    display:block;
    height: auto;
}
.hm-bn #sync1 .item{
    background:#f8f8f8;
    text-align:center;
    /* height:300px; */
    color:#fff;
}
.hm-bn #sync1 .owl-buttons div{
    top:135px;
    display:none
}
.hm-bn #sync1 .owl-nav
{
  margin-top: 0;
}
.hm-bn #sync1:hover .owl-buttons div{
    display:block
}
.hm-bn #sync2{

    width:100%;
    border:1px solid #e5e5e5;
    border-top:0;
    background:#fff;
    height:55px
}
.hm-bn #sync2 .owl-item{
    height:55px;
    position:relative
}
.hm-bn #sync2 .owl-item.synced .item{
    border-top:4px solid #00701b
}
.hm-bn #sync2 .owl-item.synced .item h3{

}
.hm-bn #sync2 .owl-item:after {
    content: '';
    float: right;
    height: 55px;
    border-right: 1px solid #e5e5e5;
    position: absolute;
    top: 0;
    right: 0;
}
.hm-bn #sync2 .owl-item .item{
    display:table;
    width:98%;
    vertical-align:middle;
    position:relative;
    background:#fff;
    color:#666;
    text-align:center;
    cursor:pointer;
    height:55px;
    font-size:12px;
    padding:0 1%;
    border-top:4px solid #fff
}
.hm-bn #sync2 .owl-item .item h3{
    font-size:13px;
    line-height:1.3em;
    display:inline-block;
    vertical-align:middle;
    display:table-cell;
    color:#000;
}

#sync2 .owl-item.active.current .item
{
    border-bottom: 1px solid #c08d00;
}
#sync2 .owl-item.active.current .item h3
{
    color: #c08d00;
    font-size: 13px;
}


.owl-theme .owl-nav [class*='owl-'] {
    transition: all 0.3s ease;
    margin: 0;
}
.owl-theme .owl-nav [class*=owl-]
{
border-radius: 0px;
background: rgba(0,0,0,0.7);
opacity: 0;

}
.owl-theme:hover .owl-nav [class*=owl-]
{
    
          opacity: 1;
}
#sync1.owl-theme {
  position: relative;

}
#sync1.owl-theme   .owl-next, #sync1.owl-theme  .owl-prev,#lstviewed.owl-theme   .owl-next,#lstviewed.owl-theme  .owl-prev {
    width: 30px;
    height: 51px;
    margin-top: -20px;
    position: absolute;
    top: 50%;
  }
 #sync1.owl-theme  .owl-prev, #lstviewed.owl-theme  .owl-prev {
    left: 0px;

  }
  #sync1.owl-theme .owl-next, #lstviewed.owl-theme .owl-next  {
    right: 0px;
  }


#lstviewed.owl-theme   .owl-next,#lstviewed.owl-theme  .owl-prev 
{
    top: 35%;
}
#lstviewed.owl-theme .owl-nav [class*=owl-]
{
    opacity: 1;
}

</style>