



var code;

function createCaptcha() {

  //clear the contents of captcha div first 

  document.getElementById('captcha').innerHTML = "";

  var charsArray =

  "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*";

  var lengthOtp = 6;

  var captcha = [];

  for (var i = 0; i < lengthOtp; i++) {

    //below code will not allow Repetition of Characters

    var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array

    if (captcha.indexOf(charsArray[index]) == -1)

      captcha.push(charsArray[index]);

    else i--;

  }

  var canv = document.createElement("canvas");

  canv.id = "captcha";

  canv.width = 100;

  canv.height = 50;

  var ctx = canv.getContext("2d");

  ctx.font = "25px Georgia";

  ctx.strokeStyle = '#000';

  ctx.strokeText(captcha.join(""), 0, 30);

  //storing captcha so that can validate you can save it somewhere else according to your specific requirements

  code = captcha.join("");

  document.getElementById("captcha").appendChild(canv); // adds the canvas to the body element

}







$(document).ready(function() {

    $('#btndangky').click(function() {

        var frm = $('#frmDK');

        var value = frm.find('#emaildk').val();

        var telephonePattern = /^09[0-9]{8}|01[0-9]{9}|08[0-9]{8}/;

        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

        if (value == '') {

            $('#email-error').html('');

            $("#emaildk").after('<div for="email" generated="true" class="mage-error" id="email-error">VUi lòng nhập số điện thoại hoặc email .</div>');

            frm.find('#emaildk').val('');

            return false;

        }

        if (value != '' && ((!telephonePattern.test(value) && !emailPattern.test(value)) || (telephonePattern.test(value) && value.match(telephonePattern)[0] != value))) {

            $('#email-error').html('');

            $("#emaildk").after('<div for="email" generated="true" class="mage-error" id="email-error">Số điện thoại hoặc email không đúng định dạng.</div>');

            frm.find('#emaildk').val('');

            return false;

        } else {

            $('#email-error').html('');

        }

        var pass1 = frm.find('#passworddk');

        if (pass1.val() == '') {

            $('#pass-error').html('');

            $("#passworddk").after('<div for="email" generated="true" class="mage-error" id="email-error">Vui lòng nhập mật khẩu</div>');

            return false;

        }

        if (pass1.val() != '' && (pass1.val().length < 6 || pass1.val().length > 32)) {

            $('#pass-error').html('');

            $("#passworddk").after('<div for="email" generated="true" class="mage-error" id="pass-error">Mật khẩu từ 6 đến 32 ký tự</div>');

            pass1.val('');

            return false;

        } else {

            $('#pass-error').html('');

        }

        var name = frm.find('#fullname').val();

        if (name == '') {

            $('#fullname-error').html('');

            $("#fullname").after('<div for="email" generated="true" class="mage-error" id="fullname-error">Vui lòng nhập họ tên</div>');

            return false;

        }

        name = name.trim();

        var splValue = name.split(' ');

        if (splValue.length < 2) {

            $('#fullname-error').html('');

            $("#fullname").after('<div for="email" generated="true" class="mage-error" id="fullname-error">Vui lòng nhập đầy đủ họ tên</div>');

            frm.find('#fullname').val('');

            return false;

        } else {

            $('#fullname-error').html('');

        }





        var ktcapcha=$('#cpatchaTextBox').val();





        if(ktcapcha==''){



        	 	$('#capcha-error').html('');

       		 	$("#cpatchaTextBox").after('<div for="email" generated="true" class="mage-error" id="capcha-error">Bạn chưa nhập capcha</div>');

 

           		return false;



        }

        if(ktcapcha!=code)

        {	



       		 	$('#capcha-error').html('');

       		 	$("#cpatchaTextBox").after('<div for="email" generated="true" class="mage-error" id="capcha-error">Capcha chưa hợp lệ</div>');

           		frm.find('#cpatchaTextBox').val('');

           		createCaptcha();

           		return false;



        }else

        {

        		 $('#capcha-error').html('');

        }







        frm.submit();

        return false;

    });

    $('#btndangnhap').click(function() {

        var frm = $('#frmdangnhap');

        var value = frm.find('#emaildn').val();

        if (value == '') {

            $('#emaildn-error').html('');

            $("#emaildn").after('<div for="email" generated="true" class="mage-error" id="emaildn-error">VUi lòng nhập số điện thoại hoặc email .</div>');

            return false;

        } else {

            $('#emaildn-error').html('');

        }

        var pass1 = frm.find('#passworddn');

        if (pass1.val() == '') {

            $('#passdn-error').html('');

            $("#passworddn").after('<div for="email" generated="true" class="mage-error" id="passdn-error">Vui lòng nhập mật khẩu</div>');

            return false;

        } else {

            $('#passdn-error').html('');

        }

        frm.submit();

        return false;

    });

    $('#btndaquenmk').click(function() {

        var frm = $('#frmquen');

        var value = frm.find('#emailquen').val();

        if (value == '') {

            $('#emailquen-error').html('');

            $("#emailquen").after('<div for="email" generated="true" class="mage-error" id="emailquen-error">VUi lòng nhập số điện thoại hoặc email .</div>');

            return false;

        }

        frm.submit();

        return false;

    });













    //gui tin





        $('#guitin').click(function() {

   
        var frm = $('#frm_dangtin');


        var hinhdaidien=$('#imgInp').val();

alert(hinhdaidien);
exit();


        var tenduan=$('#txttenduan').val();

         if (tenduan == '') {

            $('#tenduan-error').html('');

            $("#txttenduan").after('<div for="email" generated="true" class="mage-error1" id="tenduan-error">Vui lòng nhập tên dự án</div>');

            return false;

        }else

        {

           $('#tenduan-error').html('');

        }





        var hinhthuc=$('#id_hinhthuc').val();

         if (hinhthuc==0) {

            $('#hinhthuc-error').html('');

            $("#id_hinhthuc").after('<div for="email" generated="true" class="mage-error1" id="hinhthuc-error">Vui lòng chọn hình thức</div>');

            return false;

        }



          var phanmuc=$('#id_phanmuc').val();

         if (phanmuc==0) {

            $('#phanmuc-error').html('');

            $("#id_phanmuc").after('<div for="email" generated="true" class="mage-error1" id="phanmuc-error">Vui lòng chọn phân mục</div>');

            return false;

        }else

        {

           $('#phanmuc-error').html('');

        }

         var diachi=$('#txtdiachi').val();

         if (diachi == '') {

            $('#diachi-error').html('');

            $("#txtdiachi").after('<div for="email" generated="true" class="mage-error1" id="diachi-error">Vui lòng nhập địa chỉ</div>');

            return false;

        }else

        {

          $('#diachi-error').html('');

        }

        var mota=$('#txtmota').val();

         if (mota == '') {

            $('#mota-error').html('');

            $("#txtmota").after('<div for="email" generated="true" class="mage-error1" id="mota-error">Vui lòng nhập mô tả</div>');

            return false;

        }else{

           $('#mota-error').html('');

        }

         if (hinhdaidien=='' ) {

            $('#imgInp-error').html('');

            $("#imgInp").after('<div for="email" generated="true" class="mage-error1" id="imgInp-error">Vui lòng chọn hình đại diện</div>');

            return false;

        }else

        {

             $('#imgInp-error').html('');

        }

        //  var listhinh=$('#listhinh').val();





        //  var listhinh1=listhinh.split(",");     

        //  if (listhinh1.length<4||listhinh1.length>8 ) {

        //     $('#listhinh-error').html('');

        //     $("#files").after('<div for="email" generated="true" class="mage-error1" id="listhinh-error">Vui lòng nhập tối thiểu 3 hình tối đa 8 hình</div>');

        //     return false;

        // }else

        // {

        //      $('#listhinh-error').html('');

        // }

        // var dem=0;
        // var elements = $('.upload-image-box .item');

        // for (var i = 0; i < elements.length; i++) {
         
        //     if(   elements[i].find('input').val()!='')
        //     {
        //       dem++;
        //     }
        // }
        // if(dem<3)
        // {
        //   alert('ban chưa chọn đủ hình');
        //   return false;
        // }
        

          var dienthoai=$('#txtdienthoailienhe').val();

         if (dienthoai == '') {

            $('#dienthoai-error').html('');

            $("#txtdienthoailienhe").after('<div for="email" generated="true" class="mage-error1" id="dienthoai-error">Vui lòng nhập điện thoại liên hệ</div>');

            return false;

        }else

        {

             $('#dienthoai-error').html('');

        }

         frm.submit();

        return false;

   });





    // end gui tin



    $('.resfresh_capcha i').click(function(){





        createCaptcha();

    })

});







