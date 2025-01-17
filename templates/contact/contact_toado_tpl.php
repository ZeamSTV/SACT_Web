





<?php
   $d->reset();
$sql="select * from #_tinnho  where com=3 order by stt asc, id desc ";
$d->query($sql);
$chinhsach= $d->result_array();

?>


 <script type="text/javascript">


$( document ).ready(function() {
  

    $('#send_request').click(function(){
    
      var frm = $('#frmLienhe');
      

         var tieude = frm.find('#title_lh');
      if(tieude.val()==''){alert("Vui lòng nhập tiêu đề.");tieude.focus();return false;}

      var content = frm.find('#content_lh');
      if(content.val()==''){alert("Vui lòng nhập nội dung.");content.focus();return false;}
      
      var username = frm.find('#fullname_lh');
      if(username.val()==''){alert("Vui lòng nhập tên ");username.focus();return false;}

      
    
   
   
    
         var email = frm.find('#email_lh');
      if(email.val()==''){alert("Vui lòng nhập Email");email.focus();return false;}else{var emailRegExp = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.([a-z]){2,4})$/;if(!emailRegExp.test(email.val())){email.val("");alert('Địa chỉ Email không hợp lệ');email.focus();return false;}}      
       
         var phone = frm.find('#phone_lh');if(phone.val()==''){alert("Vui lòng nhập số điện thoại");phone.focus();return false;}else{var str = "0123456789";for(var j=0; j < phone.val().length; j++){if(str.indexOf(phone.val().charAt(j))==-1){alert("Số điện thoại không hợp lệ");phone.val("");phone.focus();return false;}}}
  
      
      frm.submit();
      return false;
    });
     
});


</script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
                            <script type="text/javascript">
                                var map;
                                var infowindow;
                                var marker= new Array();
                                var old_id= 0;
                                var infoWindowArray= new Array();
                                var infowindow_array= new Array();function initialize(){
                                   var defaultLatLng = new google.maps.LatLng(<?=$toado['website']?>);
                                   var myOptions= {
                                       zoom: 16,
                                       center: defaultLatLng,
                                       scrollwheel : false,
                                       mapTypeId: google.maps.MapTypeId.ROADMAP
                                    };
                                    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);map.setCenter(defaultLatLng);
                                    
                                   var arrLatLng = new google.maps.LatLng(<?=$toado['website']?>);
                                   infoWindowArray[7895] = '<div class="map_description"><div class="map_title"><?=$toado['ten']?></div><div><?=_diachi?> : <?=$toado["diachi_$lang"]?> </div> <div><?=_dienthoai?> : <?=$toado['dienthoai']?> </div> <div>Email : <?=$company['email']?> </div> <div>Website : <?=$company['website']?> </div></div>';
                                   loadMarker(arrLatLng, infoWindowArray[7895], 7895);
                                   
                                   moveToMaker(7895);}function loadMarker(myLocation, myInfoWindow, id){marker[id] = new google.maps.Marker({position: myLocation, map: map, visible:true});
                                   var popup = myInfoWindow;infowindow_array[id] = new google.maps.InfoWindow({ content: popup});google.maps.event.addListener(marker[id], 'mouseover', function() {if (id == old_id) return;if (old_id > 0) infowindow_array[old_id].close();infowindow_array[id].open(map, marker[id]);old_id = id;});google.maps.event.addListener(infowindow_array[id], 'closeclick', function() {old_id = 0;});}function moveToMaker(id){var location = marker[id].position;map.setCenter(location);if (old_id > 0) infowindow_array[old_id].close();infowindow_array[id].open(map, marker[id]);old_id = id;}
                            </script>
<section id="muctrong">


       
      <div class="duongdan">
          <ul class="breadcrumb">
            <li><i class="fa fa-home" aria-hidden="true" style="color:#000;"></i><a style="padding-left:5px" href="#">Trang chủ</a></li>
            <li><a class="active" href="lien-he.html">Liên hệ</a></li>
        
         
        </ul>
      </div>
       <div class="khungnoidung">    

          

           
          <div class="col-xs-12">
                     
                  <!-- noidung lien he -->

            
                       <div id="lienhe_page" class="block_content_support">
                          <div class="title_support_page">
                            <span class="_cms_block">Chúng tôi trân trọng ý kiến của quý khách.</span>
                          </div>
                           <div class="intro_contact_page space_bottom_20">Quý khách vui lòng gửi thắc mắc hoặc ý kiến đóng góp qua biểu mẫu.</div>
                  
                           <div class="lienhetrai col-lg-6 col-md-6 col-sm-12">
                              <form id="frmLienhe" class="form_lienhe row" method="post" name="frmLienhe" >
                        
                                 <div class=" col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                       <label>Tiêu đề (<span class="txt_error">*</span>)</label>
                                       <input name="title_lh" id="title_lh" type="text" class="form-control" placeholder="Tiêu đề">
                                    </div>
                                 </div>
                                 <div class=" col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                       <label>Chi tiết (<span class="txt_error">*</span>)</label>
                                       <textarea name="content_lh" id="content_lh" class="form-control" placeholder="Hãy mô tả chi tiết" ></textarea>
                                    </div>
                                 </div>
                                 <div class=" col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                       <label>Tên (<span class="txt_error">*</span>)</label>
                                       <input name="fullname_lh" id="fullname_lh" type="text" placeholder="Nhập đầy đủ họ và tên" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-md-5 col-sm-12">
                                    <div class="form-group">
                                       <div class="form-group ">
                                          <label>Số điện thoại  (<span class="txt_error">*</span>)</label>
                                          <input name="phone_lh" id="phone_lh" placeholder="Số điện thoại" type="text" class="form-control" >
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-8 col-md-7 col-sm-12">
                                    <div class="form-group">
                                       <label>Email  (<span class="txt_error">*</span>)</label>
                                       <input name="email_lh" id="email_lh" placeholder="Email liên hệ" type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class=" col-lg-12 col-md-12 col-sm-12 space_bottom_20">
                                    <button type="button" name="send_request" class="btn2 btn_site_1" id="send_request">Gửi yêu cầu</button>
                                 </div>
                              </form>
                           </div>
                           <div class="lienhephai col-lg-6 col-md-6 col-sm-12">
                              <div class="block_info_lienhe width_common">
                                    <?=$company['h1_vi']?>
                              </div>
                           </div>
                           <div class="bandoduoi col-sm-12">
                            
                                    <div id="map_canvas" >
                                      <?php include _template."layout/map.php"; ?>
                                      </div>

                            </div>
                      </div>
                    
                  
        
            </div>
      
       </div>


</section>