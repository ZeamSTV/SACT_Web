<div id="khungchinh_tong">
<div id="khungchinh2">

<div id="tieude_khungchinh2"><h1><?=$title_ttt?></h1> </div>
<div  id="noidung_khungchinh2">

    	
		
					
					

				

<!-- Begin ImageZoom  -->
<link rel="stylesheet" type="text/css" href="media/js/fancybox/custom.css" />
<link rel="stylesheet" type="text/css" href="media/js/fancybox/css/cloud-zoom.css" />
<link rel="stylesheet" type="text/css" href="media/js/fancybox/css/jquery.fancybox-1.3.4.css" />
<script type="text/javascript" src="media/js/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="media/js/fancybox/cloud-zoom.1.0.2.js"></script>
<script type="text/javascript">
	$(function() {
		/*
		fancybox init on each cloud-zoom element
		 */
		$("#zoom .cloud-zoom").fancybox({
			'transitionIn'	:	'elastic',
			'transitionOut'	:	'none',
			'speedIn'		:	600,
			'speedOut'		:	200,
			'overlayShow'	:	true,
			'overlayColor'	:	'#000',
			'cyclic'		:	true,
			'easingIn'		:	'easeInOutExpo'
		});

		/*
		because the cloud zoom plugin draws a mousetrap
		div on top of the image, the fancybox click needs
		to be changed. What we do here is to trigger the click
		the fancybox expects, when we click the mousetrap div.
		We know the mousetrap div is inserted after
		the <a> we want to click:
		 */
		$("#zoom .mousetrap").live('click',function(){
			$(this).prev().trigger('click');
		});

		/*
		the content element;
		each list item / group with several images
		 */
		var $content	= $('#zoom'),
		$thumb_list = $content.find('.thumb > ul');
		/*
		we need to set the width of each ul (sum of the children width);
		we are also defining the click events on the right and left arrows
		of each item.
		 */
		$thumb_list.each(function(){
			var $this_list	= $(this),
			total_w		= 0,
			loaded		= 0,
			//preload all the images first
			$images		= $this_list.find('img'),
			total_images= $images.length;
			$images.each(function(){
				var $img	= $(this);
				$('<img/>').load(function(){
					++loaded;
					if (loaded == total_images){
						$this_list.data('current',0).children().each(function(){
							total_w	+= $(this).width();
						});
						$this_list.css('width', total_w + 'px');

						//next / prev events

						$this_list.parent()
						.siblings('.next')
						.bind('click',function(e){
							var current = $this_list.data('current');
							if(current == $this_list.children().length -1) return false;
							var	next	= ++current,
							ml		= -next * $this_list.children(':first').width();

							$this_list.data('current',next)
							.stop()
							.animate({
								'marginLeft'	: ml + 'px'
							},400);
							e.preventDefault();
						})
						.end()
						.siblings('.prev')
						.bind('click',function(e){
							var current = $this_list.data('current');
							if(current == 0) return false;
							var	prev	= --current,
							ml		= -prev * $this_list.children(':first').width();

							$this_list.data('current',prev)
							.stop()
							.animate({
								'marginLeft'	: ml + 'px'
							},400);
							e.preventDefault();
						});
					}
				}).attr('src',$img.attr('src'));
			});
		});
	});
</script>
<!-- Begin ImageZoom  -->
<section class="main_info">   

    <div class="main_noidung_info">      
    <style>
        /*CHI TIẾT SẢN PHẨM*/
        .left_sp{
            width:450px;
			margin-left:17px;
			padding:17px;border:1px solid #981B1B;
            float:left;							
            text-align:center;
        }			
       
       .right_sp{
                width: 612px;
    float: right;
    margin-left: 17px;
    border: none;                  
        }	
       
        ul#sanpham_chitiet_ul{
            list-style:none;              		
        } 
        ul#sanpham_chitiet_ul li{
               background: url(media/images/chidan.png) left 8px no-repeat !important;
    /* padding-left: 12px; */
    line-height: 40px;
    display: block;
    border-bottom: 1px dotted #981B1B;
}
        }
        .sp_p_left{
            float:left;
            width:90px;			               
        }
        
        
        
        .noidung_sp_ct, .noidung_sp_ct img, .noidung_sp_ct table,.noidung_sp_ct iframe{
            max-width:200px !important;
        }
		#sanphamlienquan{    margin-top: 17px;
    margin-left: 17px;
    margin-right: 17px;
    margin-bottom: 17px;
    /* line-height: 27px; */
    padding-bottom: 13px;
    border-bottom: 1px solid #981B1B;}
	#sanphamlienquan h2 a{font-weight:100}
	#tieude_thongtinchitiet{font-size: 14px;
    text-transform: uppercase;
    color: #981B1B;
    /* font-weight: 600; */
    padding-top: 17px;
    padding-bottom: 17px;}
	#noidung_thongtinchitiet{line-height:27px}
                                    
        /*END CHI TIẾT SẢN PHẨM*/
               
    </style>

      <div id='sanpham_chitiet'>
        <div class="left_sp"> 
           <div id="zoom" class="zoom">
            <div class="item">
              <div class="thumb_wrapper">
                <div class="thumb">
                  <ul>
                    <li class="active" value="0"><a rev="group2" rel="zoomHeight:327, zoomWidth:450, adjustX: 0, adjustY:-10, position:'body'" class='cloud-zoom' href="<?=_upload_congtrinh_l.$news['photo']?>" title="<?=$news["ten"]?>"><img src="<?=_upload_congtrinh_l.$news['thumb']?>" width="450" height="327" alt="<?=$news["ten"]?>" title="<?=$news["ten"]?>"/></a></li>
                    <?php for($i=1,$count = count($news_photo) ; $i<=$count; $i++){	
                       ?>
                    <li value="<?=$i;?>"><a rev="group2" rel="zoomHeight:327, zoomWidth:450, adjustX: 0, adjustY:-4, position:'body'" class='cloud-zoom' href="<?= _upload_congtrinh_l.$news_photo[$i-1]['photo']?>" title="<?=$news["ten"]?>"><img src="<?= _upload_congtrinh_l.$news_photo[$i-1]['thumb']?>"  width="450" height="327" title="<?=$news["ten"]?>" alt="<?=$news["ten"]?>"/></a></li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          
          <link rel="stylesheet" type="text/css" href="media/js/GridNavigationEffects/css/gridNavigation.css" />				          
          <script type="text/javascript" src="media/js/GridNavigationEffects/js/jquery.gridnav.js"></script>
          <script type="text/javascript">
              $(function() {
                  $('#tj_container').gridnav({
                      rows    : 1,
                      navL    : '#tj_prev',
                      navR    : '#tj_next',
                      type    : {
                          mode        : 'seqfade',  
                          speed       : 1000,          
                          easing      : '',           
                          factor      : 50,           
                          reverse     : false        
                      }
                  });
                  
              });
          </script>
          <script type="text/javascript">
              $(document).ready(function() {
                  $('#tj_container ul li').css('cursor','pointer');
                  $('#tj_container ul li').click(function(){
                      
                      $("#tj_container ul li").removeClass('active');
                      $(this).addClass('active'); 
                      $value_thumbs = $(this).attr('value');
                      if($value_thumbs == $('.thumb ul li.active').attr('value')) 
                          return false;
                      $('.thumb ul li').each(function (){
                          var $value = $(this).attr('value');
                          if($value_thumbs == $value){
                              $('.thumb ul li.active').removeClass('active');
                              $(this).addClass('active').css({opacity: 0}).animate({opacity: 1},1000);	
                          }
                      });	
                      return false;
                  });
              });       
          </script>
          <div class="clear"></div>
          
          <div id="tj_container" class="tj_container">
              <?php
                  if(count($news_photo)>2){
              ?> 
              <div class="tj_nav">
                  <span id="tj_prev" class="tj_prev">Previous</span>
                  <span id="tj_next" class="tj_next">Next</span>
              </div>
              <?php
                  }
              ?>
                                
              <div class="tj_wrapper">
                  <ul class="tj_gallery">
                      <li class="active" value="0"><img src="<?=_upload_congtrinh_l.$news['thumb']?>" width="48" height="48" alt="<?=$news["ten"]?>" title="<?=$news["ten"]?>" border="0" /></li>                   
                      <?php
                          if(count($news_photo)!=0){
                              foreach($news_photo as $k=>$v){																	
                      ?>
                      <li value="<?=($k+1);?>"><img src="<?=_upload_congtrinh_l.$v['thumb']?>" width="48" height="48" alt="<?=$news["ten"]?>" title="<?=$news["ten"]?>" border="0" /></li>
                      <?php	
                              }	
                          }
                      ?>                    
                      
                  </ul>
              </div>
              
          </div> 
              
              <div class="clear"></div>            
        </div>     
        
        
        
        <!--Product detail-->  
        <div class="right_sp">
          <ul id='sanpham_chitiet_ul'>
              <li style="padding:3px 0px; display:block; background:none !important;"><h2 style="font-size:18px; font-weight:500; font-family: 'RobotoCondensedRegular',Tahoma, Geneva, sans-serif;"><?=$news['ten']?></h2></li>
		 </ul>
		  <div id="tieude_thongtinchitiet">Thông tin chi tiết:</div>
		  <div id="noidung_thongtinchitiet"><?=$news['mota']?></div>
		  <?php include_once _template."layout/tienich/facebook/chiase_hinh.php"; ?>
     
          <div class="clear" style="height:10px; width:100%;"></div> 
         
        </div>  
        <div class="clear"></div>   
        
             
      </div>    
      <div class="clear"></div>   
      
      
    </div>  
	
	
<div style=" min-height:50px; margin-top:20px;  margin-bottom: 7px; padding-left:17px;padding-right:17px">
				<ul class="tabs" data-persist="true">
			 
					<li><a href="#view1">NỘI DUNG</a></li>
				</ul>
				<div class="tabcontents">
		
				<div id="view1"><?=$news['noidung']?></div>
				</div>		  
</div>
   
   
   
	
	<div id="tieude_khungchinh2"><h2><?=$title_ttt1?></h2> </div>
	
	
    <div  > 
             
       

	<?php for($i1=0;$i1<count($newskhac);$i1++){ 
	$v = $newskhac[$i1];
?>
					<div class="sanpham <?php if(($i1+1)%3==0){echo"sanpham1";} ?>">
						<div class="hinhsanpham"><a href="xay-dung-nha-cong-nghiep/<?=$v['tenkhongdau']?>-<?=$v['id']?>.htm"><img class="transition_09s transform_scale_12" src="<?=_upload_congtrinh_l.$v['photo']?>" alt="<?=$v['ten']?>"/></a></div>
						<div class="tensanpham"><a href="xay-dung-nha-cong-nghiep/<?=$v['tenkhongdau']?>-<?=$v['id']?>.htm"><?=catchuoi($v['ten'],$tu8)?></a></div>
					</div>
<?php }?>	
    </div>       	          
</section>


		</div>
</div>
</div>