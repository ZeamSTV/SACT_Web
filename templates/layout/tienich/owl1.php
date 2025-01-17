




<div id="owl-cap11" class="owl-carousel">



  <?php foreach ($product_khac as $v) {?>


             <div class="item_sp" >

                    <figure>
                      <a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm"><img src="thumb/300x300/2/<?=_upload_sanpham_l.$v['photo']?>"></a>
                    </figure>
                    <figcaption>
                        <h3><a href=""><?=$v['ten_vi']?></a></h3>
                            <span><?=($v['gia']!=0)?(number_format($v['gia'],0, ',', '.')." VNĐ"):'Liên hệ' ?></span>
                          <div class="detail_sp width_100 ">
                              <a data-id="<?=$v['id']?>" >Thêm vào giỏ hàng +</a>
                          </div>
                    </figcaption>

                  </div>

    <?php }?>               

                

</div>  





  

   



<style type="text/css">
    
    #owl-cap11 .owl-prev
    {
       width: 22px;
    top: 40%;
    left: -35px;
    position: absolute;
    }
      #owl-cap11 .owl-next
    {
       width: 22px;
    top: 40%;
    right: -35px;
    position: absolute;
    }
  #owl-cap11   .owl-item
    {
      padding-bottom: 20px;
    }
</style>

    <!-- Demo -->

<script type="text/javascript">
       $("#owl-cap11").owlCarousel({

         items : 4,
        slideSpeed : 1000,

        nav: true,
      navText: ["<img src='img/nutslide_trai.png'>","<img src='img/nutslide_phai.png'>"],
        autoplay: true,
        margin:20,
        dots:false,




                   responsive:{

                         0:{

                          items:2,

                           nav:false,

                          loop:true

                           },

                           600:{

                         items:3,

                         nav:false,

                           loop:true

                          },

                         1000:{

                          items:4,

                                                                nav:true,

                                                                loop:true

                                                             

                                                            }

                                                        }



        

                                               



    

      });


</script>

