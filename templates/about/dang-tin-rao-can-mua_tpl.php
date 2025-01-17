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

  

   <form action="dang-tin-rao-vat-can-mua-nha-dat.html" method="post" id="frm_dangtin" enctype="multipart/form-data" >

             





                <div class="col-lg-12" style="padding: 0;">



                   <div class="box-header" style="text-align: left;padding: 12px 15px;line-height: normal;text-transform: uppercase;">

                         Thông tin mô tả

                   </div> 

                     <div class="mucdangtin">



                      <div class="main_content_sub_res">

                            <div class="form-group row">





                                    <input type="hidden" name="id">

                                    <div class="col-xs-12">



                                       <label>Tiêu đề (*) </label>

                                       <input name="txttenduan" value="" id="txttenduan" type="text" placeholder="Tiêu đề dự án" class="form-control" >

                               

                                    </div>

                             </div>

                             <div class="form-group row">

                                        <div class="col-xs-12">



                                             <label style="width: 100%;">(*) Mô tả tối đa chỉ 3000 ký tự</label>

                                            

                                             

                                             <textarea name="txtmota" placeholder="Quý khách nên mô tả đầy đủ thông tin BĐS. Bao gồm và không giới hạn các nội dung: (1) Đặc điểm Bất động sản, vị trí địa lý; (2) Tình trạng/hiện trạng BĐS; (3) Pháp lý; (4) Khoảng cách BĐS kết nối tới các cơ quan, trường học, bệnh viện, chợ, công viên, khu vui chơi giải trí cho trẻ em; (5) Tình trạng dân cư khu vực (sầm uất, yên tĩnh, buôn bán)…" id="txtmota" class="form-control" rows="50" cols="100" style="height: 170px;"></textarea>

                                          </div>

                              </div>

                                <div class="form-group row">



                                          <div class="col-xs-12">



                                                <p style="    font-size: 13px;">

                                                Tối thiểu 3 ảnh và tối đa 8 ảnh. Mỗi ảnh tối đa 2MB. Trường hợp đăng tin chính chủ phải có ảnh hồ sơ pháp lý và địa chỉ bất động sản rõ ràng. Trường hợp đăng không hợp lệ tin đăng sẽ không được duyệt.

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















                    </div>







                  </div>

                    <div class="box-header box-next" style="text-align: left;padding: 12px 15px;line-height: normal;text-transform: uppercase;">

                         Thông tin cơ bản

                    </div> 

                    <!-- thông tin cơ bản-->



                    <div class="mucdangtin">



                      <div class="main_content_sub_res">

                            

                             <div class="form-group row">

                                      <div class="col-md-6 col-sm-6 col-xs-12">

                                               <label>Hình thức  (*)</label>

                                            <select class="form-control" name="id_hinhthuc" id="id_hinhthuc">



                                                   <option value="0">Hình thức</option>

                                                     <?php foreach ($cat_main2 as $key => $v) {?>





                                                            <option   value="<?=$v['id']?>"><?=$v['ten_vi']?></option>





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





                                                            <option   value="<?=$v['id']?>"><?=$v['name']?></option>





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

                                                   <input name="txtdiachi" value="" id="txtdiachi" type="text" placeholder="Số nhà + Đường" class="form-control" >

                                          </div>

                                 </div>

                                 <div class="form-group row">

                                               <div class="col-md-6 col-sm-6 col-xs-12">

                                                        <label>Dự án</label>

                                                     <select class="form-control" name="id_duan" id="id_duan">



                                                          

                                                         

                                                     </select>



                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                      <label>Diện tích</label>

                                                        <select class="form-control" name="txtdientich" id="txtdientich">



                                                            <option  value="0">Chưa xác định</option>

                                                            <option  value="30 - 50 m">30 - 50 m2</option>

                                                            <option  value="50 - 80 m2">50 - 80 m2</option>

                                                            <option  value="80 - 100 m2">80 - 100 m2</option>

                                                            <option  value="100 - 150 m2">100 - 150 m2</option>

                                                            <option  value="150 - 200 m2">150 - 200 m2</option>

                                                            <option  value="200 - 250 m2">200 - 250 m2</option>

                                                            <option  value="250 - 300 m2">250 - 300 m2</option>

                                                            <option  value="300 - 500 m2">300 - 500 m2</option>

                                                            <option  value=">= 500 m2"> >= 500 m2</option>

                                                        

                                                     </select>

                                                </div>



                                 </div>

                                  <div class="form-group row">

                                               <div class="col-xs-12">

                                                      <label>Giá bán</label>

                                                       <input name="txtgiaban" value="" id="txtgiaban" type="text" placeholder="Giá bán" class="form-control" >



                                                </div>

                                              



                                 </div>



                      </div>



                    </div>



                    <!--end thông tin cơ bản -->

                    <!-- lien he-->



                   <div class="box-header box-next" style="text-align: left;padding: 12px 15px;line-height: normal;text-transform: uppercase;">

                         Liên hệ

                  </div> 

                  <div class="mucdangtin">



                            <div class="main_content_sub_res">

                                   <div class="form-group row">

                                               <div class="col-md-6 col-sm-6 col-xs-12">

                                                        <label class="label1">Tên liên hệ</label>

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



                        <button id="guitin" name="guitin" type="button" class="btn2 btn_site_1" style="    width: 100%;

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

                  var donvi=$('#txtdonvi').val();

                  var dientich=$('#txtdientich1').val();

               

                   $.ajax({

                          type: "POST",

                          url: "ajax/laygia.php",

                          data: "gia="+gia+"&donvi="+donvi+"&dientich="+dientich,

                          success: function(result){

                    

                              $('#txtgiaban1').attr('value',result);

                                      

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

                          data: "gia="+gia+"&donvi="+donvi+"&dientich="+dientich,

                          success: function(result){

                    

                              $('#txtgiaban1').attr('value',result);

                                      

                          } 

                    });



              })

 });

   

</script>

















