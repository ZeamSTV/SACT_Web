 

<div class="post-product">





 <div class="post-bg-Title mgt10">

                  <h1>Đăng tin rao bán, cho thuê nhà đất</h1>

                  <div>

                  (Qúy khách nên đăng nhập/đăng ký thành viên để quản lý tin đăng dễ dàng hơn)

                  </div>

 </div>
 <p class="pp">Vui lòng chọn đúng mục phù hợp để tin được duyệt và dễ dàng tiếp cận đúng khách hàng mục tiêu</p>
 <div class="dang-tin-rao-tab">

		<a class="<?=($com=='dang-tin-rao-vat-ban-nha-dat')?'active':''?> fl" href="dang-tin-rao-vat-ban-nha-dat.html" title="Cần bán/Cho thuê">Cần bán/Cho thuê</a>

		<a class="<?=($com=='dang-tin-rao-vat-can-mua-nha-dat')?'active':''?> fl" href="dang-tin-rao-vat-can-mua-nha-dat.html" title="Cần mua/Cần thuê">Cần mua/Cần thuê</a>
        <a class="<?=($com=='dang-tin-rao-vat-moi-gioi')?'active':''?> fl" href="dang-tin-rao-vat-moi-gioi.html" title="Tin môi giới">Tin môi giới</a>

</div>



    <form action="dang-tin-rao-vat-ban-nha-dat.html"  method="post" id="frm_dangtin" enctype="multipart/form-data" >

             





                <div class="col-lg-12" style="padding: 0;">





                  <!-- thong tin co bản -->

                  <div class="box-header" style="text-align: left;padding: 12px 15px;line-height: normal;text-transform: uppercase;">

                         Thông tin cơ bản

                   </div> 

                   <div class="mucdangtin">



                      <div class="main_content_sub_res">



                         



                              <!-- nhập thông tin đăng dự án -->

                                 <div class="form-group row">





                                    <input type="hidden" name="id" value="<?=$_REQUEST['id']?>">

                                    <div class="col-xs-12">



                                       <label>Tiêu đề (*) </label>

                                       <input name="txttenduan" value="<?=$item['ten_vi']?>" id="txttenduan" type="text" placeholder="Tiêu đề dự án" class="form-control" >

                               

                                    </div>

                                 </div>



                                 <div class="form-group row">

                                      <div class="col-md-6 col-sm-6 col-xs-12">

                                               <label>Hình thức  (*)</label>

                                            <select class="form-control" name="id_hinhthuc" id="id_hinhthuc">



                                                   <option value="0">Hình thức</option>

                                                     <?php foreach ($cat_main1 as $key => $v) {?>





                                                            <option <?=($v['id']==$item['id_cat'])?'selected':''?>  value="<?=$v['id']?>"><?=$v['ten_vi']?></option>





                                                      <?php } ?>



                                            </select>



                                       </div>

                                       <div class="col-md-6 col-sm-6 col-xs-12">

                                             <label>Loại  (*)</label>

                                               <select class="form-control" name="id_phanmuc" id="id_phanmuc">



                                               



                                            </select>

                                       </div>



                                 </div>

                                   <div class="form-group row">

                                      <div class="col-md-6 col-sm-6 col-xs-12">

                                               <label>Tỉnh/Thành phố  (*)</label>

                                            <select class="form-control" name="id_tinh" id="id_tinh">



                                                   <option value="0">Tỉnh/Thành phố</option>

                                                    <?php foreach ($showtinh as $key => $v) {?>





                                                            <option <?=($v['id']==$item['id_tinh'])?'selected':''?>  value="<?=$v['id']?>"><?=$v['name']?></option>





                                                      <?php } ?>

                                            </select>



                                       </div>

                                       <div class="col-md-6 col-sm-6 col-xs-12">

                                             <label>Quận/Huyện  (*)</label>

                                               <select class="form-control" name="id_quan" id="id_quan">

                                               

                                                  

                                            </select>

                                       </div>



                                 </div>

                                 <div class="form-group row">

                                         <div class="col-md-6 col-sm-6 col-xs-12">

                                                  <label>Phường/Xã</label>

                                               <select class="form-control" name="id_phuong" id="id_phuong">



                                               

                                                   

                                               </select>



                                          </div>

                                          <div class="col-md-6 col-sm-6 col-xs-12">

                                                <label>Địa chỉ BĐS (*)</label>

                                                   <input name="txtdiachi" value="<?=$item['diachi']?>" id="txtdiachi" type="text" placeholder="Số nhà + Đường" class="form-control" >

                                          </div>

                                 </div>

                                 <div class="form-group row">

                                               <div class="col-md-6 col-sm-6 col-xs-12">

                                                        <label>Dự án</label>

                                                     <select class="form-control" name="id_duan" id="id_duan">



                                                       

                                                         

                                                     </select>



                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                      <label>Diện tích (m2)</label>

                                                         <input name="txtdientich" value="<?=$item['dientich']?>" id="txtdientich1" type="number" placeholder="Diện tích" class="form-control" >

                                                </div>



                                 </div>

                                  <div class="form-group row">

                                               <div class="col-md-6 col-sm-6 col-xs-12">

                                                      <label>Giá bán</label>

                                                       <input name="txtgia1" value="<?=$item['gia1']?>" id="txtgia1" type="text" placeholder="Giá bán" class="form-control" >



                                                </div>

                                                  <div class="col-md-6 col-sm-6 col-xs-12">

                                                      <label>Đơn vị</label>

                                                      <select name="txtdonvi" id="txtdonvi1" class="form-control">

                                                            <option value="0">Thỏa thuận</option>

                                                            <option value="1">Triệu</option>

                                                            <option value="2">Tỷ</option>

                                                            <option value="3">Trăm nghìn/m2</option>

                                                            <option value="4">Triệu/m2</option>

                                                      </select>

                                                </div>



                                 </div>

                                  <div class="form-group row">

                                       <div class=" col-xs-12">

                                               <label>Tổng giá</label>

                                                        <input style="background: none;color: #f00;border: none;outline: none;box-shadow: none;" readonly="readonly" value="" id="txtgiaban1" type="text" placeholder="" class="form-control" >

                                                       <input type="hidden" name="txtgiaban" id="txtgiaban2" value="">



                                          

                                      </div>

                                  </div>

                              <!-- end thong tin-->



               



                       </div>



                  </div>

                  <!-- end thông tin cơ bản-->







                  <!--thông tin mô tả-->



                       <div class="box-header box-next"  style="text-align: left;padding: 12px 15px;line-height: normal;text-transform: uppercase;">

                         Thông tin mô tả

                       </div> 

                        <div class="mucdangtin">



                            <div class="main_content_sub_res">



                               



                                    <!-- nhập thông tin đăng dự án -->

                                       <div class="form-group row">

                                          <div class="col-xs-12">



                                             <label style="width: 100%;">(*)Tối đa chỉ 3000 ký tự</label>

                                            

                                             

                                             <textarea name="txtmota" placeholder="Quý khách nên mô tả đầy đủ thông tin BĐS. Bao gồm và không giới hạn các nội dung: (1) Đặc điểm Bất động sản, vị trí địa lý; (2) Tình trạng/hiện trạng BĐS; (3) Pháp lý; (4) Khoảng cách BĐS kết nối tới các cơ quan, trường học, bệnh viện, chợ, công viên, khu vui chơi giải trí cho trẻ em; (5) Tình trạng dân cư khu vực (sầm uất, yên tĩnh, buôn bán)…
Thời gian xem BĐS, thời gian liên hệ (vui lòng liên hệ số ….. từ …h đến …..h. Giá có thỏa thuận không…..
" id="txtmota" class="form-control" rows="50" cols="100" style="height: 170px;"></textarea>

                                          </div>

                                       </div>



                                    <!-- end thong tin-->



                     



                             </div>



                  </div>

                  <!-- end thông tin mô tả -->



                   <!--thông tin khác-->



                       <div class="box-header box-next" style="text-align: left;padding: 12px 15px;line-height: normal;text-transform: uppercase;">

                         Thông tin khác

                       </div> 

                        <div class="mucdangtin">



                            <div class="main_content_sub_res">



                               



                                    <!-- nhập thông tin đăng dự án -->

                                       <div class="form-group row">

                                             <div class="col-md-6 col-sm-6 col-xs-12">

                                                        <label>Hướng nhà</label>

                                                     <select class="form-control" name="huongnha" id="huongnha">



                                                               <option  value="KXĐ">KXĐ</option>

                                                               <option  value="Đông">Đông</option>

                                                               <option  value="Tây">Tây</option>

                                                               <option  value="Nam">Nam</option>

                                                               <option  value="Bắc">Bắc</option>

                                                               <option  value="Đông-Bắc">Đông - Bắc</option>

                                                               <option value="Tây-Bắc">Tây - Bắc</option>

                                                               <option value="Tây-Nam">Tây - Nam</option>

                                                               <option  value="Đông-Nam">Đông - Nam</option>

                                                         

                                                     </select>



                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                       <label>Hiện trạng</label>

                                                     <select class="form-control" name="huongbancong" id="huongbancong">



                                                            

                                                            <option value="KXĐ">KXĐ</option>

                                                            <option  value="Nhà nát">Nhà nát</option>

                                                            <option  value="Đang ở">Đang ở</option>

                                                            <option  value="Nhà mới">Nhà mới</option>

                                                         

                                                     </select>

                                                </div>

                                       </div>

                                       <div class="form-group row">

                                               <div class="col-md-6 col-sm-6 col-xs-12">

                                                        <label>Số phòng ngủ</label>

                                                           <input name="txtsophongngu" value="" id="txtsophongngu" type="number" placeholder="Số phòng ngủ" class="form-control" >



                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                      <label>Số toilet</label>

                                                         <input name="txtsotoilet" value="" id="txtsotoilet" type="number" placeholder="Số toilet" class="form-control" >

                                                </div>



                                        </div>

                                        <div class="form-group row">

                                               <div class="col-md-6 col-sm-6 col-xs-12">

                                                        <label>Số tầng</label>

                                                           <input name="txtsotang" value="" id="txtsotang" type="number" placeholder="Số tầng" class="form-control" >



                                                </div>

                                                  <div class="col-md-6 col-sm-6 col-xs-12">

                                                        <label>Vị trí</label>

                                                            <select name="txtvitri" class="form-control">

                                                                     <option  value="KXĐ">KXĐ</option>

                                                               <option value="Mặt tiền">Mặt tiền</option>

                                                               <option  value="Mặt tiền NB">Mặt tiền NB</option>

                        <option  value="Hẻm >4m">Hẻm >4m</option>

                        <option  value="Hẻm <4m">Hẻm <4m</option>

                                                         

                                                            

                                                         </select>



                                                </div>



                                        </div>

                                      

                                       <div class="form-group row">

                                          <div class="col-xs-12">



                                             <label style="width: 100%;">Nội thất</label>

                                            

                                             

                                             <textarea name="txtnoithat" placeholder="Quý khách nên mô tả các loại nội thất đi kèm nhà, tình trạng, chất lượng…..hệ thống điện, cấp nước, thoát nước." class="form-control" rows="50" cols="100" style="height: 120px;"></textarea>

                                          </div>

                                       </div>

                                       <div class="form-group row">

                                          <div class="col-xs-12">



                                             <label style="width: 100%;">Bản đồ ( Nhập iframe )</label>

                                            <textarea name="txtbando" placeholder="Truy cập https://www.google.com/maps. => B1: Xác định vị trí trên bản đồ (C1: click chuột (1 cái) vào vị trí BĐS, 1 bảng địa chỉ sẽ hiện ra phía dưới bản đồ, click vào địa chỉ sẽ tự động nhập vào ô “Search google maps”. Bạn có thể sửa lại địa chỉ cho chính xác; C2: nhập trực tiếp địa chỉ vào ô “Search google maps”)
=> B2: Click vào nút share (chia sẻ) xuất hiện bảng mới. => B3: Chuyển sang thẻ thứ 2 “Embed a map” hay “Nhúng bản đồ”. => B4: Click nút “Copy HTML” và paste vào ô.
" class="form-control" rows="50" cols="100" style="height: 120px;"></textarea>

                                          </div>

                                       </div>



                                    <!-- end thong tin-->



                     



                             </div>



                  </div>

                  <!-- end thông tin khác-->

                  <!--hinh ảnh-->





                   <div class="box-header box-next" style="text-align: left;padding: 12px 15px;line-height: normal;text-transform: uppercase;">

                         Hình ảnh

                  </div> 

                  <div class="mucdangtin">



                        <div class="main_content_sub_res">

                                    <div class="form-group row">

                                                 <div class="col-xs-12">

                                                  <p style="    font-size: 13px;">
Tối thiểu 3 ảnh và tối đa 8 ảnh, mỗi ảnh tối đa 2MB. Đối với tin đăng chính chủ ghi pháp lý đầy đủ, phải có ảnh chụp sổ/hợp đồng để tin đăng được duyệt nhanh hơn. Nếu không đầy đủ, tin đăng sẽ được chuyển sang mục TIN MÔI GIỚI. Ảnh nên chụp gồm tổng quan đường/hẻm trước BĐS, chính diện cổng có bảng số nhà, và chi tiết bên trong BĐS.

                                                </p >





                                              </div>

                                                 <div class="col-md-6 col-sm-6 col-xs-12">

                                                   <label>Ảnh Xem trước</label>



                                                   <div style="margin: 10px 0;">

                                                     <img  style="width: 164px" id="blah" src="#"  />



                                                    </div>

                                              </div>

                                               <div class="col-md-12 col-sm-12 col-xs-12">

                                                        <label>Chọn ảnh đại diện</label>

                                                           <div class="spanButtonPlaceholder block-upload-item" id="upload-drop-zone" style="position: relative; overflow: hidden; direction: ltr;">

                                                            <p>(Click để tải ảnh<br> hoặc kéo thả ảnh vào đây)</p>

                                                              <input  type="file" name="file" id="imgInp" style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;">

                                                         </div>



                                                </div>

                                                

                                    </div>

                                  <div class="form-group">

                                  <!-- up nhiêu ghình -->
                                      <div class="upload-image-box">

                                            <div class="item">
                                                  <div>
                                                    <div class="filename"></div>
                                                    <label for="img1" >
                                                    <img class="thumbnail" id="img11" src="img/upload-image.png">         
                                                    </label>            
                                                    <input name="img1" type="file" id="img1" class="inputimage" accept="image/*">   
                                                    <input type="hidden" name="rotate1" class="rotate rotate1">
                                                    <div class="upload-controls">
                                                     <!--   <label class="btnChooseImage">Chọn ảnh</label> -->
                                                       <label class="btnRemoveImage">Xóa</label>   
                                                    </div>
                                                 </div>
                                           </div>
                                          <div class="item">
                                                  <div>
                                                    <div class="filename"></div>
                                                    <label for="img2">
                                                    <img class="thumbnail" id="img22" src="img/upload-image.png">         
                                                    </label>            
                                                    <input name="img2" type="file" id="img2" class="inputimage" accept="image/*">   
                                                    <input type="hidden" name="rotate1" class="rotate rotate1">
                                                    <div class="upload-controls">
                                                   <!--     <label class="btnChooseImage">Chọn ảnh</label> -->
                                                       <label class="btnRemoveImage">Xóa</label>   
                                                    </div>
                                                 </div>
                                           </div>
                                          <div class="item">
                                                  <div>
                                                    <div class="filename"></div>
                                                    <label for="img3">
                                                    <img class="thumbnail" id="img33" src="img/upload-image.png">         
                                                    </label>            
                                                    <input name="img3" type="file" id="img3" class="inputimage" accept="image/*">   
                                                    <input type="hidden" name="rotate1" class="rotate rotate1">
                                                    <div class="upload-controls">
                                                <!--        <label class="btnChooseImage">Chọn ảnh</label> -->
                                                       <label class="btnRemoveImage">Xóa</label>   
                                                    </div>
                                                 </div>
                                           </div>
                                                  <div class="item">
                                                  <div>
                                                    <div class="filename"></div>
                                                    <label for="img4">
                                                       <img class="thumbnail" id="img44" src="img/upload-image.png">         
                                                    </label>            
                                                    <input name="img4" type="file" id="img4" class="inputimage" accept="image/*">   
                                                    <input type="hidden" name="rotate1" class="rotate rotate1">
                                                    <div class="upload-controls">
                                      <!--                  <label class="btnChooseImage">Chọn ảnh</label> -->
                                                       <label class="btnRemoveImage">Xóa</label>   
                                                    </div>
                                                 </div>
                                           </div>
                                                  <div class="item">
                                                  <div>
                                                    <div class="filename"></div>
                                                    <label for="img5">
                                                    <img class="thumbnail" id="img55" src="img/upload-image.png">         
                                                    </label>            
                                                    <input name="img5" type="file" id="img5" class="inputimage" accept="image/*">   
                                                    <input type="hidden" name="rotate1" class="rotate rotate1">
                                                    <div class="upload-controls">
                                        <!--                <label class="btnChooseImage">Chọn ảnh</label> -->
                                                       <label class="btnRemoveImage">Xóa</label>   
                                                    </div>
                                                 </div>
                                           </div>
                                                  <div class="item">
                                                  <div>
                                                    <div class="filename"></div>
                                                    <label for="img6">
                                                    <img class="thumbnail" id="img66" src="img/upload-image.png">         
                                                    </label>            
                                                    <input name="img6" type="file" id="img6" class="inputimage" accept="image/*">   
                                                    <input type="hidden" name="rotate1" class="rotate rotate1">
                                                    <div class="upload-controls">
                                               <!--         <label class="btnChooseImage">Chọn ảnh</label> -->
                                                       <label class="btnRemoveImage">Xóa</label>   
                                                    </div>
                                                 </div>
                                           </div>
                                          <div class="item">
                                                  <div>
                                                    <div class="filename"></div>
                                                    <label for="img7">
                                                    <img class="thumbnail" id="img77" src="img/upload-image.png">         
                                                    </label>            
                                                    <input name="img7" type="file" id="img7" class="inputimage" accept="image/*">   
                                                    <input type="hidden" name="rotate1" class="rotate rotate1">
                                                    <div class="upload-controls">
                                                 <!--       <label class="btnChooseImage">Chọn ảnh</label> -->
                                                       <label class="btnRemoveImage">Xóa</label>   
                                                    </div>
                                                 </div>
                                           </div>
                                            <div class="item">
                                                  <div>
                                                    <div class="filename"></div>
                                                    <label for="img8">
                                                    <img class="thumbnail" id="img88" src="img/upload-image.png">         
                                                    </label>            
                                                    <input name="img8" type="file" id="img8" class="inputimage" accept="image/*">   
                                                    <input type="hidden" name="rotate1" class="rotate rotate1">
                                                    <div class="upload-controls">
                                                     <!--   <label class="btnChooseImage">Chọn ảnh</label> -->
                                                       <label class="btnRemoveImage">Xóa</label>   
                                                    </div>
                                                 </div>
                                           </div>
                                      </div>
                                  </div>
                                    <!-- up nhiêu ghình -->
                        </div>



                   </div>

                  <!-- end hình ảnh -->

                  <!-- lien he-->



                   <div class="box-header box-next" style="text-align: left;padding: 12px 15px;line-height: normal;text-transform: uppercase;">

                         Liên hệ

                  </div> 

                  <div class="mucdangtin">



                            <div class="main_content_sub_res">

                                   <div class="form-group row">

                                               <div class="col-md-6 col-sm-6 col-xs-12">

                                                        <label class="label1"> Tên liên hệ</label>

                                                           <input name="txttenlienhe" value="" id="txttenlienhe" type="text" placeholder="Tên liên hệ" class="form-control input1" >



                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                      <label class="label2">Địa chỉ</label>

                                                         <input name="txtdiachilienhe" value="" id="txtdiachilienhe" type="text" placeholder="Địa chỉ" class="form-control input2" >

                                                </div>



                                    </div>

                                    <div class="form-group row">

                                               <div class="col-md-6 col-sm-6 col-xs-12">

                                                        <label class="label1">Điện thoại (*)</label>

                                                           <input name="txtdienthoailienhe" value="" id="txtdienthoailienhe" type="text" placeholder="Điện thoại" class="form-control input1" >



                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                      <label class="label2">Email</label>

                                                         <input name="txtemaillienhe" value="" id="txtemaillienhe" type="text" placeholder="Email" class="form-control input2" >

                                                </div>



                                    </div>

                           </div>



                     </div>



                  <!-- end liên hệ-->



                  <!-- gui tin -->



                        <button id="guitin" name="guitin" type="submit" class="btn2 btn_site_1" style="    width: 100%;

                        float: left;

                        padding: 8px 0;

                        font-size: 15px;margin-top: 20px;background: #ff6b00">Đăng tin</button>



                  <!-- end gui tin-->



                </div>

               

          </form>



</div>































<script type="text/javascript">





  //xem trươc 1 hình



  function readURL(input) {

  if (input.files && input.files[0]) {

    var reader = new FileReader();
    reader.onload = function(e) {

      $('#blah').attr('src', e.target.result);

    }
    reader.readAsDataURL(input.files[0]);
  }
}

  function readURL1(input) {

  if (input.files && input.files[0]) {

    var reader = new FileReader();
    reader.onload = function(e) {

      $('#img11').attr('src', e.target.result);

    }
    reader.readAsDataURL(input.files[0]);
  }
}
  function readURL2(input) {

  if (input.files && input.files[0]) {

    var reader = new FileReader();
    reader.onload = function(e) {

      $('#img22').attr('src', e.target.result);

    }
    reader.readAsDataURL(input.files[0]);
  }
}

  function readURL3(input) {

  if (input.files && input.files[0]) {

    var reader = new FileReader();
    reader.onload = function(e) {

      $('#img33').attr('src', e.target.result);

    }
    reader.readAsDataURL(input.files[0]);
  }
}
  function readURL4(input) {

  if (input.files && input.files[0]) {

    var reader = new FileReader();
    reader.onload = function(e) {

      $('#img44').attr('src', e.target.result);

    }
    reader.readAsDataURL(input.files[0]);
  }
}
  function readURL5(input) {

  if (input.files && input.files[0]) {

    var reader = new FileReader();
    reader.onload = function(e) {

      $('#img55').attr('src', e.target.result);

    }
    reader.readAsDataURL(input.files[0]);
  }
}
  function readURL6(input) {

  if (input.files && input.files[0]) {

    var reader = new FileReader();
    reader.onload = function(e) {

      $('#img66').attr('src', e.target.result);

    }
    reader.readAsDataURL(input.files[0]);
  }
}
  function readURL7(input) {

  if (input.files && input.files[0]) {

    var reader = new FileReader();
    reader.onload = function(e) {

      $('#img77').attr('src', e.target.result);

    }
    reader.readAsDataURL(input.files[0]);
  }
}
  function readURL8(input) {

  if (input.files && input.files[0]) {

    var reader = new FileReader();
    reader.onload = function(e) {

      $('#img88').attr('src', e.target.result);

    }
    reader.readAsDataURL(input.files[0]);
  }
}

////////////

$("#imgInp").change(function() {

  readURL(this);

});


$("#img1").change(function() {

  readURL1(this);

});
$("#img2").change(function() {

  readURL2(this);

});


$("#img3").change(function() {

  readURL3(this);

});


$("#img4").change(function() {

  readURL4(this);

});
$("#img5").change(function() {

  readURL5(this);

});


$("#img6").change(function() {

  readURL6(this);

});

$("#img7").change(function() {

  readURL7(this);

});

$("#img8").change(function() {

  readURL8(this);

});


$("body").on('click', '.btnRemoveImage', function() {
        var noImage = "img/upload-image.png";
        input = $(this).parents('.item').find('input');
        input.replaceWith(input.clone(true)); //repace with new
        $(this).parents('.item').find('img').attr('src', noImage);
        $(this).parents('.item').find('.filename').html("");
        $(this).parents('.item').find('.btnChooseImage').html("Chọn ảnh");
        $(this).parents('.item').find('.imgrotate').remove();
        CaculateFileSize();
         $(this).parents('.item').find('input').val('');
 });









</script>

<script type="text/javascript">

   $(document).ready(function(){

            $('#isChangePass').click(function(){

                if($(this).prop('checked') == true){

                    $('.block_nhapmatkhau').removeClass('hide');

                }else{

                    $('.block_nhapmatkhau').addClass('hide');

                }

            });

   

   

                $('#id_tinh').change(function(){

                        var id = $(this).val();

                        $.ajax({

                          type: "POST",

                          url: "ajax/ajax_quan.php",

                          data: "id="+id,

                          success: function(result){

                              $('#id_quan').html(result);

                                $('#id_phuong').html('   <option value="0">Phường/Xã</option>');

                               $('#id_quan').change(function(){

                                    var id = $(this).val();

                                    $.ajax({

                                      type: "POST",

                                      url: "ajax/ajax_phuong.php",

                                      data: "id="+id,

                                      success: function(result){

                                        $('#id_phuong').html(result);

                                       

                                      }

                                    });

                              })

                          }

                        });

                      $.ajax({

                                      type: "POST",

                                      url: "ajax/ajax_duan.php",

                                      data: "id="+id,

                                      success: function(result){

                                        $('#id_duan').html(result);

                                       

                                    }

                     });



                  })







             $('#id_quan').change(function(){

                                    var id = $(this).val();

                                    $.ajax({

                                      type: "POST",

                                      url: "ajax/ajax_phuong.php",

                                      data: "id="+id,

                                      success: function(result){

                                        $('#id_phuong').html(result);

                                       

                                      }

                                    });

             })





              $('#id_hinhthuc').change(function(){

                                    var id = $(this).val();

                                    $.ajax({

                                      type: "POST",

                                      url: "ajax/ajax_hinhthuc.php",

                                      data: "id="+id,

                                      success: function(result){

                                        $('#id_phanmuc').html(result);

                                       

                                      }

                                    });

             })



                $('#txtgia1').blur(function(){





                  var gia=$(this).val();

                  var donvi=$('#txtdonvi1').val();

                  var dientich=$('#txtdientich1').val();

               

                   $.ajax({

                          type: "POST",

                          url: "ajax/laygia.php",

                                 data: {'gia':gia,'donvi':donvi,'dientich':dientich},

                           dataType: 'json',

                          success: function(result){

                    

                              $('#txtgiaban1').attr('value',result.data1);

                                 $('#txtgiaban2').attr('value',result.data2);         

                          } 

                    });







              })



              $('#txtdonvi1').change(function(){



                   var gia=$('#txtgia1').val();

                  var donvi=$(this).val();

                  var dientich=$('#txtdientich1').val();

               

                   $.ajax({

                          type: "POST",

                          url: "ajax/laygia.php",

                          data: {'gia':gia,'donvi':donvi,'dientich':dientich},

                           dataType: 'json',

                          success: function(result){

                    

                            $('#txtgiaban1').attr('value',result.data1);

                                 $('#txtgiaban2').attr('value',result.data2);

                                      

                          } 

                    });



              })

                $('#txtdientich1').change(function(){



                   var gia=$('#txtgia1').val();

                  var donvi=$('#txtdonvi1').val();

                  var dientich=$(this).val();

               

                   $.ajax({

                          type: "POST",

                          url: "ajax/laygia.php",

                          data: {'gia':gia,'donvi':donvi,'dientich':dientich},

                           dataType: 'json',

                          success: function(result){

                    

                              $('#txtgiaban1').attr('value',result.data1);

                                 $('#txtgiaban2').attr('value',result.data2);

                                      

                          } 

                    });



              })

 });

   

</script>

















