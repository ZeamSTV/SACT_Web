<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>
<section class="content-header">
   <h1>Bài viết
      
   </h1>
   <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i>Bảng điều khiển</a></li>
      <li><a href="index.php?com=about&act=capnhap5">Mô tả</a></li>

   </ol>
</section>
<section class="content">


    <form method="post" name="frm" action="index.php?com=about&act=save5<?=$chuoi_noi_curpage1?>" enctype="multipart/form-data"    class="basic-form inline-form">
               <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
      <div class="row">
         <div class="col-md-8">
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Nội dung</h3>
               </div>
               <div class="box-body">
                          <?php if ($_REQUEST['act']=='capnhap5'&&$item['photo']!=''){?>
                              <video width="320" height="240" controls>
                                  <source src="<?=_upload_tinnho.$item['photo']?>" type="video/mp4">
                                
                                Your browser does not support the video tag.
                                </video>

                          <?php } ?>
                              <div class="form-group">
                                 <label>Video hướng dẫn</label>
                                 <input type="file" name="file" class="form-control">
                                 
                              </div>
                         <div class="form-group">
                             <label>Link video hướng dẫn</label>
                             <input type="text" name="h1_vi" value="<?=$item['h1_vi']?>" class="form-control">
                              <span class="cus_help">Nội dung là đuôi link youtube VD: https://www.youtube.com/watch?v=<span style="color: #f00">08x0-_qrvvs</span></span>
                          </div>
               
               <ul class="nav nav-tabs">
      


                     <?php
                        foreach ($config["lang"] as $key => $value) {
                            # code...
                            $active = '';
                            if ($key == 0) {
                                $active = "active";
                            }

                            echo '<li class="' . $active . '"><a href="#tab' . $value . '" class="clicktab" data-toggle="tab">' . $config["langs"][$value] . '</a></li>';
                        }
                        ?>
                

                </ul>

               <div class="tab-content">
                      <?php
                    foreach ($config["lang"] as $key => $value) {
                        # code...
                        $active = '';
                        $active_block = '';
                        if ($key == 0) {

                            $active = "active";
                            $active_block = "style='display:block;'";
                        }
                        ?> 

                  <div class="tab-pane <?=$active?>" id="tab<?= $value ?>">

                        
                          
                       <!--   
                            <div class="form-group">
                              <label>Lĩnh vực <?= $config["langs"][$value]?><a class="cus_tool" title="Viết nội dung chính"></a></label>
                              <textarea name="h1_<?= $value ?>" id="h1_<?= $value ?>" class="form-control editor" rows="10" cols="80"><?=$item['h1_'.$value]?></textarea>
                           </div>
                            <div class="form-group">
                              <label>Phương châm <?= $config["langs"][$value]?><a class="cus_tool" title="Viết nội dung chính"></a></label>
                              <textarea name="h2_<?= $value ?>" id="h2_<?= $value ?>" class="form-control editor" rows="10" cols="80"><?=$item['h2_'.$value]?></textarea>
                           </div> -->
                             
                             <div class="form-group">
                              <label>Mô tả Đại ký - CTV <?= $config["langs"][$value]?></label>
                              <textarea name="mota_<?=$value?>" class="form-control " cols="50" rows="5" id="mota_<?=$value?>" placeholder="Mô tả"><?=@$item['mota_'.$value]?></textarea>
                              <span class="cus_help">Nhập mô tả ngắn</span>
                           </div>
                           <div class="form-group">
                              <label>Mô tả 3 bước kinh doanh <?= $config["langs"][$value]?><a class="cus_tool" title="Viết nội dung chính"></a></label>
                              <textarea name="noidung_<?= $value ?>" id="noidung_<?= $value ?>" class="form-control " rows="10" cols="80"><?=$item['noidung_'.$value]?></textarea>
                           </div>
                  </div>

                 <?php } ?>

               </div>
                
               </div>
                  <div class="box-footer clearfix">
                  <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o"></i> Lưu lại</button>
               </div>
            </div>
         </div>

      </div>
   </form>
</section>

