<section class="content_trong width_100">
  



          <nav class="width_100" aria-label="breadcrumb">
             <ol class="breadcrumb bg-none padding-l-0 padding-r-0">
                <li class="breadcrumb-item"><a href="" title="Trang chủ">Trang chủ</a></li>
         
                <li class="breadcrumb-item active" aria-current="page">
                    Mua trả góp
                </li>
             </ol>
          </nav>
          <div class="block-content width_100">
                <div class="row">

                    <div class="col-md-9 col-sm-12 col-xs-12 newsleft">
                        <div class="title-page-dt title-page-dt1">
                              <h1>    Mua trả góp</h1>
                                        
                         </div>
                         <div class="content_news_detail width_100">
                              <?=$news['noidung_vi']?>
                        </div>


                    </div>

                <div class="col-md-3 col-sm-12 col-xs-12 newsright hidden-xs hidden-sm">

                        <div class="title_newsr title_newsr1 width_100">
                                 <h2><span>Sản phẩm mới</span></h2>
                        </div>
                        <?php foreach ($spmoi as $key => $v) {?>
                      
                        <div class="f-bl-new">
                           <div class="f-img-n">
                              <a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm" title="<?=$v['ten_vi']?>">
                              <img src="thumb/135x80/2/<?=_upload_sanpham_l.$v['photo']?>" alt="<?=$v['ten_vi']?>" title="<?=$v['ten_vi']?>">
                              </a> 
                           </div>
                           <h3>
                              <a href="<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm" title="<?=$v['ten_vi']?>"><?=$v['ten_vi']?></a>
                           </h3>
                            <span><?=($v['gia']!=0)?(number_format($v['gia'],0, ',', '.')." VNĐ"):'Liên hệ' ?></span>
                        </div>

                      <?php } ?>
                    </div>

                </div>
     

      </div>  

</section>