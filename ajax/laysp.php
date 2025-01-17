
<?php   
    session_start();
    error_reporting(E_ALL & ~E_NOTICE & ~8192);
    
    if(!isset($_SESSION['lang']))
    {
    $_SESSION['lang']='vi';
    }
    
    $lang=$_SESSION['lang'];
    
    @define ( '_lib' , '../admin/lib/');
    @define ( '_source' , '../sources/');
    include_once _lib."config.php";
    include_once _lib."constant.php";
      include_once _lib."tridepzai.php";
    // require_once _source."lang_$lang.php";
    include_once _lib."functions.php";
    include_once _lib."functions_giohang.php";
    include_once _lib."class.database.php";
    $d = new database($config['database']);
  

 @$id = $_POST['id'];

$sql="select photo,photo1,photo2 from #_product where id=".$id;
$d->query($sql);
$laysp=$d->fetch_array();

    





?>
<style type="text/css">
  
  .carousel
  {
    width: 100%;
    height: 400px;
  }
  .carousel img
  {
    width: 100%;
    height: 400px;
  }
  .carousel-inner{
    height: 400px;
  }
      .carousel .item {

  background-size: cover;
}
.carousel .item:nth-child(1) {
  background-image: url('https://via.placeholder.com/1280x720?text=Slide 1');
}
.carousel .item:nth-child(2) {
  background-image: url('https://via.placeholder.com/1280x720?text=Slide 2');
}
.carousel .item:nth-child(3) {
  background-image: url('https://via.placeholder.com/1280x720?text=Slide 3');
}
.carousel.vertical .carousel-inner > .item {
  transition: 0.6s ease-in-out top;
}
@media all and (transform-3d), (-webkit-transform-3d) {
  .carousel.vertical .carousel-inner > .item {
    transition: -webkit-transform 0.6s ease-in-out;
    transition: transform 0.6s ease-in-out;
    transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -ms-perspective: 1000;
    -webkit-perspective: 1000;
    perspective: 1000;
  }
  .carousel.vertical .carousel-inner > .item.next,
  .carousel.vertical .carousel-inner > .item.active.right {
    top: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }
  .carousel.vertical .carousel-inner > .item.prev,
  .carousel.vertical .carousel-inner > .item.active.left {
    top: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  .carousel.vertical .carousel-inner > .item.next.left,
  .carousel.vertical .carousel-inner > .item.prev.right,
  .carousel.vertical .carousel-inner > .item.active {
    top: 0;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}
.carousel.vertical .carousel-inner > .active {
  top: 0;
}
.carousel.vertical .carousel-inner > .next,
.carousel.vertical .carousel-inner > .prev {
  top: 0;
  height: 100%;
  width: 100%;
}
.carousel.vertical .carousel-inner > .next {
  left: 0;
  top: 100%;
}
.carousel.vertical .carousel-inner > .prev {
  left: 0;
  top: -100%;
}
.carousel.vertical .carousel-inner > .next.left,
.carousel.vertical .carousel-inner > .prev.right {
  top: 0;
}
.carousel.vertical .carousel-inner > .active.left {
  left: 0;
  top: -100%;
}
.carousel.vertical .carousel-inner > .active.right {
  left: 0;
  top: 100%;
}
.carousel.vertical .carousel-indicators,
.carousel-indicators-vertical {
  right: 20px;
  top: 50%;
  -webkit-transform: translate(-50%);
          transform: translate(-50%);
  bottom: auto;
  left: auto;
  width: auto;
  margin: 0;
  padding: 0;
}
.carousel.vertical .carousel-indicators li,
.carousel-indicators-vertical li {
  display: block;
  margin: 5px 0;
      border: 1px solid #333;
}

    .carousel-indicators .active
    {
        width: 10px;
        height: 10px;
          border: 1px solid #f00!important;
    }
</style>
<!-- 
<script type="text/javascript" src="media/js/jquery-3.2.1.min.js"></script>

<script type="text/javascript" src="media/js/bootstrap.min.js"></script> -->
  <div class="carousel slide vertical" id="carousel-vertical" data-ride="carousel" data-interval="true">
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-vertical" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-vertical" data-slide-to="1"></li>
                            <li data-target="#carousel-vertical" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner" role="listbox">
                            <div class="item active"><img src="<?=_upload_sanpham_l.$laysp['photo']?>"></div>
                            <div class="item"><img  src="<?=_upload_sanpham_l.$laysp['photo1']?>"></div>
                            <div class="item"><img  src="<?=_upload_sanpham_l.$laysp['photo2']?>"></div>
                          </div>
  </div>



<script type="text/javascript">
  $(document).ready(function() {
  var delta = 0;
  var scrollThreshold = 5;

  // detect available wheel event
  wheelEvent = "onwheel" in document.createElement("div") ? "wheel" : // Modern browsers support "wheel"
      document.onmousewheel !== undefined ? "mousewheel" :         // Webkit and IE support at least "mousewheel"
      "DOMMouseScroll";                                            // let's assume that remaining browsers are older Firefox

  // Bind event handler
  $(window).on(wheelEvent, function (e) {
      // Do nothing if we weren't scrolling the carousel
      var carousel = $('.carousel.vertical:hover');
      if (carousel.length === 0)  return;

      // Get the scroll position of the current slide
      var currentSlide = $(e.target).closest('.item')
      var scrollPosition = currentSlide.scrollTop();

      // --- Scrolling up ---
      if (e.originalEvent.detail < 0 || e.originalEvent.deltaY < 0 || e.originalEvent.wheelDelta > 0) {
          // Do nothing if the current slide is not at the scroll top
          if(scrollPosition !== 0) return;

          delta--;

          if ( Math.abs(delta) >= scrollThreshold) {
              delta = 0;
              carousel.carousel('prev');
          }
      }

      // --- Scrolling down ---
      else {
          // Do nothing if the current slide is not at the scroll bottom
          var contentHeight = currentSlide.find('> .content').outerHeight();
          if(contentHeight > currentSlide.outerHeight() && scrollPosition + currentSlide.outerHeight() !== contentHeight) return;

          delta++;
          if (delta >= scrollThreshold)
          {
              delta = 0;
              carousel.carousel('next');
          }
      }

      // Prevent page from scrolling
      return false;
  });

    $('.carousel').carousel({
      interval: 5000
    })
  $('.carousel-indicators  li').on('mouseover',function(){
    $(this).trigger('click');
})
})
</script>