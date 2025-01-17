<div class="bg_load_page" style="background-image:url(<?=_upload_hinhanh_l.$bannermuc['photo']?>);">
   <div class="container">
      <div class="link_page">
         <h2>Hỏi đáp</h2>
         <ul>
            <li><a href="https://vuabien.com">Trang Chủ</a> // <a href="#">Hỏi đáp</a> </li>
         </ul>
      </div>
   </div>
</div>



<div class="khungtrong width_100 contact">


    <div class="container">
     <div class="title width_100" style="margin-bottom: 30px;">
            <span>hỏi đáp</span>

    </div>
    <div class="row">
         <div class="col-sm-12">
            <div class="row">
               <div class="col-md-4 col-sm-4 col-xs-12">
                  <div id="login">

                     <p class="title1">Ý Kiến Khách Hàng</p>
                     <div class="showText width_100">
                        <p>Nếu quý khách có ý kiến, câu hỏi nào cần sự hỗ trợ, vui lòng gửi câu hỏi cho chúng tôi qua form kế bên. Chúng tôi sẽ hồi đáp Quý vị trong thời gian sớm nhất.</p>
                        <p>Chân thành cảm ơn sự quan tâm của Quý khách!</p>          
                     </div>

                     <form accept-charset="UTF-8" action="hoi-dap.html" id="contact" method="post">
                                <p class="title1">Ý Kiến Phản Hồi</p>
 
                        <div id="emtry_contact" class="form-signup form_contact clearfix">
                           <div class="row row-8Gutter">
                              <div class="col-md-12">
                                 <fieldset class="form-group">              
                                    <input type="text" placeholder="Họ tên*" name="name" id="name" class="form-control  form-control-lg" required="">
                                 </fieldset>
                              </div>
                              <div class="col-md-12">
                                 <fieldset class="form-group">              
                                    <input type="email" placeholder="Email*" name="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,63}$" data-validation="email" id="email" class="form-control form-control-lg" required="">
                                 </fieldset>
                              </div>
                              <div class="col-md-12">
                                 <fieldset class="form-group">            
                                    <input type="tel" placeholder="Điện thoại*" name="dienthoai" data-validation="tel" class="fixnumber form-control form-control-lg" required="">
                                 </fieldset>
                              </div>
                           </div>
                           <fieldset class="form-group">              
                              <textarea name="noidung" placeholder="Nhập nội dung*" id="comment" class="form-control form-control-lg" rows="6" required=""></textarea>
                           </fieldset>
                           <div>
                              <button tyle="summit" class="btn btn-primary" style="padding:0 40px;text-transform: inherit;">Gửi liên hệ</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-md-8 col-sm-8 col-xs-12 showcauhoi">
                     <!-- list câu hỏi tra lời -->

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

<?php foreach ($hoidap as $key => $v) {?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading<?=$v['id']?>">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$v['id']?>" aria-expanded="<?=($key==0)?'true':'false'?>" aria-controls="collapse<?=$v['id']?>">
          <?=$v['noidung']?>
          <span> </span>
        </a>
      </h4>
    </div>
    <div id="collapse<?=$v['id']?>" class="panel-collapse collapse <?=($key==0)?'in':''?>" role="tabpanel" aria-labelledby="heading<?=$v['id']?>">
      <div class="panel-body">
          <?=$v['traloi']?>
      </div>
    </div>
  </div>


<?php } ?>

 <!--  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
         <span></span>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
 -->




</div>


                     <!-- end -->
               </div>
            </div>
         </div>
    
    </div>

    </div>
</div>


<style>
  #accordion .panel,
#accordion .panel-heading,
#accordion panel-title,
#accordion .panel-body {
  border: 0;
}
#accordion .panel {
  box-shadow: none;
}
#accordion .panel .panel-heading {
  border-radius: 0;
}
#accordion .panel .panel-heading .panel-title a {
     background: #eee;
    line-height: 30px;
    text-transform: capitalize;
    color: #333;
    font-size: 16px;
    padding: 11px 20px;
    font-weight: bold;
    list-style: none;
    display: block;
    margin-bottom: 10px;
    border-left: solid #004394 3px;
    border-right: solid #004394 3px;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -o-border-radius: 10px;
}
#accordion .panel .panel-heading .panel-title a span {
  float: right;
  width: 50px;
}
#accordion .panel .panel-heading .panel-title a span:after {
  content: "\2014";
  color: #1B5062;
  font-size: 20px;
}
#accordion .panel .panel-heading .panel-title a.collapsed span:after {
  content: "+";
}
.panel-heading
{
   padding: 0;
}
</style>