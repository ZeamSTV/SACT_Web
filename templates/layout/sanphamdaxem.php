<div class="viewedhome">

    <div class="title">Sản phẩm đã xem</div>
    <ul id="lstviewed" class="owl-carousel owl-theme">
        <?php if(count($_SESSION['dx'])>0){
          $max=count($_SESSION['dx']);
                            for($i=0;$i<$max;$i++){

                              $pid=$_SESSION['dx'][$i]['dxid'];
                               $pimgdx=get_img_daxem($pid);
                               $tenkhongdau=get_name_khongdau_daxem($pid);

                               $ten=get_product_name_daxem($pid,$lang);


                               $id_cat1=get_id_cat1($pid);

                                   $d->reset();
                              $sql="select mau from #_product_cat where com='cat1' and id=".$id_cat1;
                              $d->query($sql);
                              $kichco=$d->fetch_array();

                              $kc=explode(',', $kichco['mau']);


                                ?>
        <li>
         <a href="<?=$tenkhongdau?>-<?=$pid?>.htm" title="Tivi Asanzo 25 inch 25T350">
            <div>
               <img class="" width="65" height="45" src="thumb/<?=$kc[0]?>x<?=$kc[1]?>/1/<?=_upload_sanpham_l.$pimgdx?>" alt="<?=$ten?>">
            </div>
            <p><?=$ten?></p>
         </a>
        </li>
    <?php }} ?>

    </ul>
</div>


<script type="text/javascript">
  
      $("#lstviewed").owlCarousel({
             items : 8,
                
        loop:true,
        slideSpeed : 2000,
        nav: false,
        autoplay: true,
        dots:false,
        margin:10,
      navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #fff;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>','<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #fff;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
         responsive:{
               0:{
                items:3,
                 nav:false,
                loop:true
                 },
                 600:{
               items:6,
               nav:false,
                 loop:true
                },
           1000:{
                items:8,
                                                      nav:true,
                                                      loop:false
                                                   
                                                  }
                                              }

                                               

    
      });
</script>