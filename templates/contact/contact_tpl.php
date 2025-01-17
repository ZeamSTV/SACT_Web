<div class="title_cate">
                   <div class="margin">
                       <div class="nav-bredcrum">
                    
                        
                        <a href="">Trang chủ</a> <span>/</span> Liên hệ                                

                       </div>
                   </div>
 
             </div>
             <div class="content-trangcon" id="trang-lienhe">
  <div class="margin">
  <div class="tieude-tc">
      <h2><a href="lien-he.html">
        Liên hệ        </a></h2>
    </div>
    
  <div class="noidung-baiviet">
    <div class="w-100 grid-2 grid-mar-15">
      <div class="w-100" id="left-lh">
         
            <div class="w-100" id="thongtin-lh" style="margin-top:20px;">
        


                <?=$company['mota_'.$lang]?>

          </div>
        </div>
        <div class="w-100" id="right-lh">
        <form method="post" name="frm" action="lien-he.html">
              
                        <label>Họ và tên *</label>
                        <input name="txthoten" type="text" class="tflienhe" id="name" size="50" required="required">
                        
                    
                        <label>Số điện thoại *</label>
                        <input name="txtdienthoai" type="text" class="tflienhe" id="dienthoai" size="50" required="required">
                        <label>Email *</label>
                        <input name="txtemail" id="email" type="text" class="tflienhe" size="50" required="required">
                   
                        <label>Nội dung *</label>
                        <textarea name="txtnoidung" cols="50" rows="5" class="tflienhe" id="noidung" style=" height:80px" required="required"></textarea>
                        
                        <button type="submit" name="btn_lienhe" class="nut_lienhe" style="margin-right:10px;">
                          Gửi                          </button>
                          <input type="reset" name="btn_Reset" value="Nhập lại" class="nut_lienhe">
                      
          </form>
        </div>
    </div>
    </div>
  </div>
</div>