<?php

	

	

	$_SESSION['pupop']=true;

	

?> 







<script type="text/javascript">

  

  $(window).load(function(){

    init_my_popup();

  });

  $(window).resize(function(){

        $windowWidth = $(window).width();

  });

  function init_my_popup(){

    $('#my_popup').fadeIn(1000);

    check_content_popup();

    margin_top_popup();

    add_element_my_popup();

    $('body,html').addClass('overflow_my_body_popup');

  }



  function reset_all_init(){

    $('body,html').removeClass('overflow_my_body_popup');

  }



  function add_element_my_popup(){

    $('.content_popup').append('<span class="close_my_popup"></span>');

  }



  function margin_top_popup(){

    var margin_my_box_popup=$('.my_box_popup').css('margin-top');

    var height_content=$('.inner_content_popup').outerHeight();

    var half_height_content=height_content/2+parseInt(margin_my_box_popup)/2;

    $('.content_popup').css({'margin-top':-half_height_content});

  }



  function check_content_popup(){

    var height_content=$('.content_popup').outerHeight();

    var height_box_popup=$('.inner_content_popup').outerHeight();

    if(height_content<height_box_popup){

      $('.inner_content_popup').css({'overflow-y':'scroll','height':height_content});

    }

  }



  $(document).delegate(".close_my_popup","click",function(e){

    reset_all_init();

    $my_popup=$('#my_popup');

    $('#my_popup').fadeOut(1000);

    setTimeout(function(){

      $my_popup.remove();

      

    },1000);

  });



</script>





<style>

    .overflow_my_body_popup{position: relative;}

    /*popup*/

#my_popup{position: fixed;top:0px;left: 0px;bottom: 0px;right: 0px;background: rgba(0,0,0,0.5);z-index: 9999;overflow: hidden;text-align: center;display: none;}

.my_box_popup{display: inline-block;height: 450px;margin-top: 7%;max-width: 50%;position: relative;}

.content_popup{position: relative;top:50%;max-height: 100%;}

.inner_content_popup *{max-width: 100%;height: 320px;    border: 3px solid #fff;

    border-radius: 5px;}

.close_my_popup{position: absolute;width: 53px;height: 18px;background: url(media/images/close_popup.png);display: block;top:-25px;right: 0px;cursor: pointer;}



</style>

<div id="my_popup">

    <div class="my_box_popup">

        <div class="content_popup">

            <div class="inner_content_popup">

               <a href="<?=$bgtc[0]['link']?>"> <img src="<?=_upload_hinhanh_l.$bgtc[0]['photo']?>"/></a>

            </div>

        </div>

    </div>

</div>

<div class="clear"></div>





