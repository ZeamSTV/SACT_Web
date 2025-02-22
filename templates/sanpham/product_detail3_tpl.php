<div id="product-detail">



    <div class="title_ttt">

        <h1><?=$title_ttt?></h1>

    </div>



    <div class="kqchitiet">

        <p><b>Khu vực:
            </b><a><?=$product_detail['diachi']?></a><?=($product_detail['id_phuong']>0)?', '.get_phuong($product_detail['id_phuong']):''?><?=($product_detail['id_quan']>0)?', '.get_quan($product_detail['id_quan']):''?><?=($product_detail['id_tinh']>0)?', '.get_tinh($product_detail['id_tinh']):''?>
        </p>

        <span><b>Giá: </b> <strong><?=jam_read_num_forvietnamese($product_detail['gia'])?></strong></span>

        <span><b>Diện tích: </b> <strong><?=$product_detail['dientich']?> m2</strong></span>

    </div>


    <div class="pm-mota">

        Thông tin mô tả

    </div>

    <div class="pm-desc">

        <?=$product_detail['noidung_vi']?>

    </div>



    <div class="slider-detail">



        <ul class="tabs-slider">

            <li class="tab-link active" data-tab="tab-1"><a> Xem Ảnh</a></li>

            <li class="tab-link " data-tab="tab-2"><a>Xem bản đồ</a></li>



        </ul>



        <div id="tab-1" class="tab-content-slider-detail active">



            <!--xem hinh anh-->



            <div id="sync1" class="owl-carousel owl-theme">

                <div class="item">



                    <div class="hinhchitiet">



                        <img src="thumb/600x500/2/<?=_upload_sanpham_l.$product_detail['photo']?>">



                    </div>







                </div>



                <?php 



                  if(count($photo_sp)>0){



                  foreach ($photo_sp as $key => $v) {?>

                <div class="item">

                    <div class="hinhchitiet">



                        <img src="thumb/600x500/2/<?=_upload_sanpham_l.$v['photo']?>">



                    </div>

                </div>

                <?php }} ?>

            </div>



            <div id="sync2" class="owl-carousel owl-theme">

                <div class="item">



                    <div class="hinhcon">



                        <img src="thumb/120x75/1/<?=_upload_sanpham_l.$product_detail['photo']?>">



                    </div>



                </div>

                <?php 



                  if(count($photo_sp)>0){



                  foreach ($photo_sp as $key => $v) {?>

                <div class="item">

                    <div class="hinhcon">



                        <img src="thumb/120x75/1/<?=_upload_sanpham_l.$v['photo']?>">



                    </div>

                </div>

                <?php }} ?>



            </div>

            <!-- end hinh anh-->



        </div>

        <div id="tab-2" class="tab-content-slider-detail">



            <!-- ban do-->



            <div class="bandodetail">



                <?=$product_detail['bando']?>



            </div>



            <!-- end bando-->



        </div>

    </div>



    <!-- bang thong tin-->



    <div class="div-table">



        <div class="div-table-row">



            <div class="div-table-cell table1">



                <div class="div-hold">

                    <div class="header">Đặc điểm bất động sản</div>

                    <div class="table-detail">



                        <div class="row">

                            <div class="left">

                                Loại tin rao

                            </div>

                            <div class="right">

                                <?=get_name_cap2($product_detail['id_cat1'])?>

                            </div>

                            <div style="clear: both"></div>

                        </div>

                        <div class="row">

                            <div class="left">

                                Địa chỉ

                            </div>

                            <div class="right">

                                <?=$product_detail['diachi']?>

                            </div>

                        </div>



                        <?php if($product_detail['id_cat']==361||$product_detail['id_cat']==366) {?>



                        <div class="row">

                            <div class="left">

                                Ngày đăng

                            </div>

                            <div class="right">

                                <?=date('d/m/Y',$product_detail['ngaytao'])?>

                            </div>

                        </div>





                        <?php } ?>

                        <?php if($product_detail['id_cat']==358||$product_detail['id_cat']==360) {?>

                        <!-- <div class="row">

                               

                             </div> -->

                        <div class="row">

                            <div class="tt1">



                                <div class="left">

                                    Số phòng ngủ

                                </div>

                                <div class="right">

                                    <?=$product_detail['sophongngu']?>

                                </div>



                            </div>

                            <div class="tt1">

                                <div class="left">

                                    Số toilet

                                </div>

                                <div class="right">

                                    <?=$product_detail['sotoilet']?>

                                </div>



                            </div>



                        </div>





                        <div class="row">



                            <div class="tt1">

                                <div class="left">

                                    Số tầng

                                </div>

                                <div class="right">

                                    <?=$product_detail['sotang']?>

                                </div>

                            </div>





                            <div class="tt1">

                                <div class="left">

                                    Hướng nhà

                                </div>

                                <div class="right">

                                    <?=$product_detail['huongnha']?>

                                </div>

                            </div>

                        </div>







                        <div class="row">

                            <div class="left">

                                Hiện trạng

                            </div>

                            <div class="right">

                                <?=$product_detail['huongbancong']?>

                            </div>

                        </div>

                        <div class="row">

                            <div class="left">

                                Vị trí

                            </div>

                            <div class="right">

                                <?=$product_detail['vitri']?>

                            </div>

                        </div>

                        <div class="row">

                            <div class="left">

                                Nội thất

                            </div>

                            <div class="right">

                                <?=$product_detail['noithat']?>

                            </div>

                        </div>

                        <!--     <div class="row">

                               <div class="left">

                                  Đường vào

                               </div>

                               <div class="right">

                                     <?=$product_detail['duongvao']?>

                               </div>

                             </div> -->





                        <?php } ?>











                    </div>



                    <?php if($product_detail['id_duan']>0&&($product_detail['id_cat']==358||$product_detail['id_cat']==360)){?>

                    <div id="project">

                        <div class="header" style="margin-top: 15px; line-height: 29px;">

                            Thông tin dự án

                            <div class="inproject">

                                <a
                                    href="<?=get_linkduan($product_detail['id_duan'])?>-<?=$product_detail['id_duan']?>.htm">Chi
                                    tiết dự án</a>

                            </div>

                            <div class="clear"></div>

                        </div>

                        <div class="table-detail">

                            <div class="row">

                                <div class="left">Tên dự án</div>

                                <div class="right">

                                    <?=get_tenduan($product_detail['id_duan'])?>

                                </div>

                                <div style="clear: both"></div>

                            </div>

                            <div class="row">

                                <div class="left">Chủ đầu tư</div>

                                <div class="right">

                                    <?=get_tenchudautu($product_detail['id_duan'])?>

                                </div>

                                <div style="clear: both"></div>

                            </div>

                            <div class="row">

                                <div class="left">Quy mô</div>

                                <div class="right">

                                    <?=get_quymo($product_detail['id_duan'])?>

                                </div>

                                <div style="clear: both"></div>

                            </div>

                        </div>

                    </div>

                    <?php    } ?>







                </div>

            </div>

            <div class="div-table-cell" style="width: 15px;"></div>

            <div class="div-table-cell table2">



                <div class="header">Liên hệ</div>

                <div class="table-detail">



                    <div id="divCustomerInfo">



                        <div id="LeftMainContent__productDetail_contactName" class="right-content">

                            <div class="normalblue left">

                                Tên liên lạc

                            </div>

                            <div class="right" style="text-transform:capitalize;">

                                <?=$product_detail['tenlienhe']?>

                            </div>



                        </div>

                        <div id="LeftMainContent__productDetail_contactMobile" class="right-content">

                            <div class="normalblue left">

                                Mobile

                            </div>

                            <div class="right">

                                <?=$product_detail['dienthoailienhe']?>

                            </div>



                        </div>



                        <div class="right-content">

                            <div class="normalblue left">

                                Email

                            </div>

                            <div class="right">

                                <?=$product_detail['emaillienhe']?>

                            </div>



                        </div>
                        <div class="right-content">

                            <div class="normalblue left">

                                Địa chỉ:

                            </div>

                            <div class="right">

                                <?=$product_detail['diachilienhe']?>

                            </div>



                        </div>



                    </div>



                </div>

            </div>

        </div>



    </div>



    <!-- end bảng thông tin-->


    <div class="prd-more-info">

        <div class="p111">
            <span>Mã tin đăng:</span>
            <div><?=$product_detail['matin']?></div>
        </div>
        <div class="p111">
            <span>Loại tin đăng:</span>
            <div><?=loaitin($product_detail['loaitin'])?></div>
        </div>

        <div class="p111">
            <span>Ngày đăng tin:</span>
            <div><?=date('d/m/Y',$product_detail['ngaytao'])?></div>
        </div>
        <div class="p111">
            <span>Ngày hết hạn:</span>
            <div><?=date('d/m/Y',$product_detail['ngaytao']+30*24*60*60)?></div>
        </div>


    </div>


    <!-- tin cùng khu vực -->





    <div class="title_cat">

        <span>Các tin cùng khu vực</span>

    </div>

    <div class="khungcat">

        <?php foreach ($product_khac as $key => $v) {?>

        <div class="item_sanpham">



            <div class="hinhsp">

                <a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm"><img
                        src="thumb/188x140/1/<?=_upload_sanpham_l.$v['photo']?>"></a>

            </div>

            <div class="motasp">

                <div class="title-sp">



                    <h3>


                        <a class="a1"
                            href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm"><?=catchuoi($v['ten_vi'],75)?></a>
                        <a class="a2"
                            href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm"><?=catchuoi($v['ten_vi'],30)?></a>



                    </h3>

                    <?php if($v['id_cat']==358||$v['id_cat']==360){?>

                    <div class="gialeft">Giá: <span><?=jam_read_num_forvietnamese($v['gia'])?></span></div>

                    <?php }else{?>

                    <div class="gialeft">Giá: <span><?=$v['gia']?></span></div>





                    <?php } ?>



                </div>

                <div class="diachi-ngaydang">

                    <span
                        class="diachi"><?=$v['diachi']?><?=($v['id_quan']>0)?', '.get_quan($v['id_quan']):''?><?=($v['id_tinh']>0)?', '.get_tinh($v['id_tinh']):''?></span>

                    <span class="ngaydang"><?=date('d/m/Y',$v['ngaytao'])?></span>

                </div>

                <p><?=catchuoi($v['mota_vi'],150)?></p>

                <ul>



                    <li><i class="fa fa-circle"></i><span>Diện tích:</span> <?=$v['dientich']?></li>



                    <?php if($v['id_cat']==358||$v['id_cat']==360){?>

                    <li><i class="fa fa-circle"></i><span>Hướng:</span> <?=$v['huongnha']?></li>

                    <li><i class="fa fa-circle"></i><span>Số phòng:</span> <?=$v['sophongngu']?></li>

                    <li><i class="fa fa-circle"></i><span>Vị trí:</span> <?=$v['vitri']?></li>

                    <?php } ?>



                </ul>

                <a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm" class="xemthemsp">Xem thêm</a>

            </div>



        </div>

        <?php } ?>


        <?php

                     if($count_sp>$maxR)

                      {

                      ?>

        <div class="w-100" align="center">

            <div class="pagination">

                <?=$paging['paging']?>

            </div>

        </div>

        <?php

                      }   

   ?>





    </div>



    <!--- end tin cùng khu vực -->





</div>









<style type="text/css">
#sync1 {

    .item {

        background: #0c83e7;

        padding: 80px 0px;

        margin: 5px;

        color: #FFF;

        -webkit-border-radius: 3px;

        -moz-border-radius: 3px;

        border-radius: 3px;

        text-align: center;

    }

}



#sync2 {

    .item {

        background: #C9C9C9;

        padding: 10px 0px;

        margin: 5px;

        color: #FFF;

        -webkit-border-radius: 3px;

        -moz-border-radius: 3px;

        border-radius: 3px;

        text-align: center;

        cursor: pointer;

        h1 {

            font-size: 18px;

        }

    }

    .current .item {

        background: #0c83e7;

    }

}







.owl-theme {

    .owl-nav {

        /*default owl-theme theme reset .disabled:hover links */

        [class*='owl-'] {

            transition: all .3s ease;

            &.disabled:hover {

                background-color: #D6D6D6;

            }

        }



    }

}



//arrows on first carousel

#sync1.owl-theme {

    position: relative;

    .owl-next,
    .owl-prev {

        width: 22px;

        height: 40px;

        margin-top: -20px;

        position: absolute;

        top: 50%;

    }

    .owl-prev {

        left: 10px;



    }

    .owl-next {

        right: 10px;

    }

}

#sync1 .owl-next,
#sync1 .owl-prev {

    width: 30px;

    position: absolute;

    top: 40%;

    margin: 0;

    border-radius: 0;
    padding: 10px 7px 5px 7px;

}

#sync1 .owl-next {

    right: 0;

}

#sync1 .owl-prev {

    left: 0;

}

#sync2 .owl-item.active.current .hinhcon {

    border: 2px solid #055699;

}
</style>



<script type="text/javascript">
$(document).ready(function() {



    var sync1 = $("#sync1");

    var sync2 = $("#sync2");

    var slidesPerPage = 6; //globaly define number of elements per page

    var syncedSecondary = true;



    sync1.owlCarousel({

        items: 1,

        slideSpeed: 2000,

        nav: true,

        autoplay: true,

        dots: false,

        loop: true,

        responsiveRefreshRate: 200,

        navText: [
            '<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>',
            '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'
        ],

    }).on('changed.owl.carousel', syncPosition);



    sync2

        .on('initialized.owl.carousel', function() {

            sync2.find(".owl-item").eq(0).addClass("current");

        })

        .owlCarousel({

            items: slidesPerPage,

            dots: true,

            nav: false,

            smartSpeed: 200,

            slideSpeed: 500,

            margin: 10,



            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel

            responsiveRefreshRate: 100

        }).on('changed.owl.carousel', syncPosition2);



    function syncPosition(el) {

        //if you set loop to false, you have to restore this next line

        //var current = el.item.index;



        //if you disable loop you have to comment this block

        var count = el.item.count - 1;

        var current = Math.round(el.item.index - (el.item.count / 2) - .5);



        if (current < 0) {

            current = count;

        }

        if (current > count) {

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

        if (syncedSecondary) {

            var number = el.item.index;

            sync1.data('owl.carousel').to(number, 100, true);

        }

    }



    sync2.on("click", ".owl-item", function(e) {

        e.preventDefault();

        var number = $(this).index();

        sync1.data('owl.carousel').to(number, 300, true);

    });

});
</script>