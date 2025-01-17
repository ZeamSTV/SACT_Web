<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>

<?php

function get_cauhoi($id)
  {
    global $d;
    $sql="select cauhoi from #_hoidap where id=".$id;
    $d->query($sql);
    $ten=$d->fetch_array($sql);
    return $ten['cauhoi'];

  }

      function get_tennguoitraloi($id)
  {
    global $d;
    $sql="select ten from #_member where id=".$id;
    $d->query($sql);
    $ten=$d->fetch_array($sql);
    return $ten['ten'];

  }
?>
<!-- Breadcrumbs Start -->
  <div class="row breadcrumbs">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <ul class="breadcrumbs">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="index.php?com=traloi&act=man" title="Email đăng ký">Chi tiết phản hồi</a></li>
      </ul>
    </div>
  </div>
  <!-- Breadcrumbs End -->
        
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	<!--<div class="inner" style="margin-bottom:10px;">
            <div class="message-box info">
              <i class="fa fa-exclamation-circle"></i>
              <p>Lưu ý: Chỉ nên có tối đa 4-5 bản đồ, tên bản đồ không nên đặt dài quá, nên đặt số thứ tự chính xác để dễ quản lý!</p>
            </div>
        </div>-->
    
    
		<!-- Inline Form Start -->
          <div class="boxed no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="inner">

              <!-- Title Bar Start -->
              <div class="title-bar">
                <h4>Nội dung phản hồi</h4>
              </div>
              <!-- Title Bar End -->
			              
              <form method="post" name="frm" action="index.php?com=traloi&act=save<?=$chuoi_noi_curpage?>" enctype="multipart/form-data" class="basic-form inline-form">                             
                


           <?php if ($_REQUEST['act']=='edit'){?>

              <?PHP if($item['role']==1) {?>
                <div class="col-md-2"><label>Nguời trả lời </label></div>
                <div class="col-md-10"><input style="    background: #eee;" type="text" name="hoten" readonly="readonly" value="<?=get_tennguoitraloi($item['id_user'])?>"  /></div>
             <?php } else { ?>


              <div class="col-md-2"><label>Nguời trả lời </label></div>
                <div class="col-md-10"><input style="    background: #eee;" type="text" name="hoten" readonly="readonly" value="Admin"  /></div>

             <?php } ?>
                 <div class="col-md-2"><label>Câu hỏi </label></div>
                <div class="col-md-10"><input style="    background: #eee;" type="text" name="hoten" readonly="readonly" value="<?=get_cauhoi($item['id_cauhoi'])?>"  /></div>
           

                        <div class="col-md-2"><label>Câu trả lời</label></div>
                      <div class="col-md-10"><textarea cols="50" rows="5" name="traloi" ><?=$item['traloi']?></textarea></div>
                       <div class="clearfix"></div>
                 <div class="col-md-2"><label>Lượt like</label></div>
                 <div class="col-md-10"><input  type="number" min="0"  name="luotlike"  value="<?=$item['luotlike']?>"  /></div>
                
            <?php } else {?>

                    
                     <input  style="background: #eee;display: none;" type="text" name="id_cauhoi" readonly="readonly" value="<?=$_GET['id_cauhoi']?>"  />
                      <div class="col-md-2"><label>Câu trả lời</label></div>
                      <div class="col-md-10"><textarea cols="50" rows="5" name="traloi" ><?=$item['traloi']?></textarea></div>
                       <div class="clearfix"></div>

            <?php } ?>

     

                
                
				<input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
                
                <div class="col-md-10 col-md-offset-2">                  
                       <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button>
               
                  <button type="button" onclick="javascript:window.location='index.php?com=traloi&act=man<?=$chuoi_noi_curpage?>'" class="btn btn-info"><i class="fa fa-share"></i> Thoát</button>
                </div>
                               
                <div class="clearfix"></div>

              </form>

            </div>
          </div>
          <!-- Inline Form End -->
	</div>
