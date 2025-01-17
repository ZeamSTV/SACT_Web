jQuery(document).ready(function () {
  const acc_type_radio = jQuery(".acc_type_radio");
  acc_type_radio.change(function () {
    const type_id = jQuery(this).data("id");
    jQuery(".account-type-item").removeClass("active");
    jQuery(`#${type_id}`).addClass("active");
  });
  const input_Identify = jQuery(".input_Identify");
  input_Identify.change(function () {
    const files = jQuery(this)[0].files[0];
    console.log(files);
    const fileType = files.type;
    const type = jQuery(this).data("type");
    const previewEle =
      type == "front"
        ? jQuery(".identify-front-preview")
        : jQuery(".identify-back-preview");
    const validImageTypes = ["image/gif", "image/jpeg", "image/png"];
    if (!validImageTypes.includes(fileType)) {
      swal("ThĂ´ng bĂ¡o", "Vui lĂ²ng chá»‰ upload hĂ¬nh áº£nh", "warning");
      return false;
    }
    const maxSize = 2;
    const fileSize = Math.round(files.size / (1024 * 1024));
    console.log(fileSize);
    if (fileSize > maxSize) {
      swal("ThĂ´ng bĂ¡o", `Dung lÆ°á»£ng upload tá»‘i Ä‘a ${maxSize} MB`, "warning");
      return false;
    }
    const reader = new FileReader();
    reader.onload = function () {
      previewEle.attr("src", reader.result);
    };
    reader.readAsDataURL(files);
  });
  jQuery("input[name='is_bank']").change(function () {
    if (jQuery(this).is(":checked")) {
      jQuery(this).val(1);
      jQuery("#anotherBank").fadeIn();
    } else {
      jQuery(this).val(0);
      jQuery("#anotherBank").hide();
    }
  });
  jQuery("input[name='is_connect']").change(function () {
    let is_connect = jQuery(this).val();
    let listTrade = jQuery("#listTrade");
    if (is_connect == 1) {
      listTrade.fadeIn();
    } else {
      listTrade.hide();
    }
  });
  jQuery("#form-register").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      fullname: "required",
      birthday: "required",
      personal_address: "required",
      personal_phone: "required",
      identify_number: "required",
      identify_date: "required",
      identify_address: "required",
      bank_number: "required",
      bank_name: "required",
      // businness_name: "required",
      // businness_owner: "required",
      // business_phone: "required",
      // business_fax: "required",
      // businness_address: "required",
       personal_password: "required",
      // business_password: "required",
      personal_email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true,
      },
      businness_email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true,
      },
      password: {
        required: true,
        minlength: 5,
      },
    },
    // Specify validation error messages
    messages: {
      fullname: "Vui lòng nhập họ tên",
      birthday: "Vui lòng nhập ngày sinh",
      personal_address: "Vui lòng nhập địa chỉ",
      personal_phone: "Vui nhập số điện thoại",
      identify_number: "Vui lòng nhập CMND ",
      identify_date: "Vui lòng nhập ngày cấp CMND",
      identify_address: "Vui lòng nhập nơi cấp CMND",
      bank_number: "Vui lòng nhập ngân hàng",
      // businness_name: "Vui lĂ²ng nháº­p tĂªn cĂ´ng ty",
      // businness_owner: "Vui lĂ²ng nháº­p Ä‘áº¡i diá»‡n doanh nghiá»‡p",
      // businness_address: "Vui lĂ²ng nháº­p Ä‘á»‹a chá»‰ doanh nghiá»‡p",
      // business_phone: "Vui lĂ²ng nháº­p sá»‘ Ä‘iá»‡n thoáº¡i doanh nghiá»‡p",
      // business_fax: "Vui lĂ²ng nháº­p sá»‘ fax cá»§a doanh nghiá»‡p",
      personal_password: {
        required: "Vui lòng nhập password",
        minlength: "Password phải từ 5 ký tự",
      },
      // business_password: {
      //   required: "Vui lĂ²ng nháº­p máº­t kháº©u",
      //   minlength: "Your password must be at least 5 characters long",
      // },
      // businness_email: {
      //   required: "Vui lĂ²ng nháº­p email",
      //   email: "Email khĂ´ng há»£p lá»‡.",
      // },
      personal_email: {
        required: "Vui lòng nhập email ",
        email: "Email không hợp lệ",
      },
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function (form) {
      const formtest = jQuery("#form-register");
      formtest.submit();
      // const params = getFormData(formtest);
      // const url = formtest.data("url");
      // console.log(params);
      // register_submit(params, url);
      // return false;
    },
  });
  jQuery("#form-login").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true,
      },
      password: {
        required: true,
        minlength: 5,
      },
    },
    // Specify validation error messages
    messages: {
      password: {
        required: "Vui lĂ²ng nháº­p password",
        minlength: "Máº­t kháº©u Ă­t nháº¥t 5 kĂ½ tá»±",
      },
      email: {
        required: "Vui lĂ²ng nháº­p email",
        email: "Email khĂ´ng há»£p lá»‡.",
      },
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function (form) {
      const formLogin = jQuery("#form-login");
      const paramsLogin = getFormData(formLogin);
      const urlLogin = formLogin.data("url");
      login_submit(paramsLogin, urlLogin);
      return false;
    },
  });
  jQuery("#form-order").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      name: "required",
      account_id: "required",
      phone: "required",
      product_type: "required",
      contract_cycle: "required",
    },
    // Specify validation error messages
    messages: {},
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function (form) {
      const formEle = jQuery("#form-order");
      const params = getFormData(formEle);
      const url = formEle.data("url");
      order_submit(params, url);
      return false;
    },
  });
  jQuery("#copyLink").click(function () {
    const textLink = jQuery("#linkText").text();
    navigator.clipboard.writeText(textLink);
    swal("ThĂ´ng bĂ¡o", "Copy thĂ nh cĂ´ng", "success");
  });
});
function getFormData($form) {
  var unindexed_array = $form.serializeArray();
  var indexed_array = {};
  jQuery.map(unindexed_array, function (n, i) {
    indexed_array[n["name"]] = n["value"];
  });
  return indexed_array;
}
function order_submit(params, url = "") {
  params["action"] = "saveItemOrderForm";
  jQuery.ajax({
    type: "post",
    url: url,
    data: params,
    dataType: "json",
    beforeSend: function (response) {
      jQuery("#btnOrderForm").text("Äang xá»­ lĂ½ .....");
    },
    success: function (response) {
      let data = response.data;
      let status = data.status;
      let msg = data.msg;
      if (status == 400) {
      } else {
        swal("ThĂ´ng bĂ¡o", msg, "success").then(() => {
          location.reload();
        });
      }
    },
    error: function (response) {
      swal("Ráº¥t tiáº¿c", "ÄĂ£ cĂ³ lá»—i xáº£y ra, vui lĂ²ng thá»­ láº¡i thao tĂ¡c", "error");
    },
    complete: function (response) {
      jQuery("#btnOrderForm").text("Gá»­i thĂ´ng tin");
    },
  });
}
function login_submit(params, url = "") {
  params["action"] = "saveItemLoginForm";
  jQuery.ajax({
    type: "post",
    url: url,
    data: params,
    dataType: "json",
    beforeSend: function (response) {
      jQuery("#btnLogin").text("Äang xá»­ lĂ½ .....");
    },
    success: function (response) {
      let data = response.data;
      let status = data.status;
      let msg = data.msg;
      if (status == 400) {
        if (msg.userInfo) {
          swal("ThĂ´ng bĂ¡o", msg.userInfo, "warning");
          return false;
        }
        if (msg.userStatus) {
          swal("ThĂ´ng bĂ¡o", msg.userStatus, "warning");
          return false;
        }
      } else {
        swal("ThĂ´ng bĂ¡o", msg, "success").then(() => {
          window.location.href = data.redirect;
        });
      }
    },
    error: function (response) {
      swal("Ráº¥t tiáº¿c", "ÄĂ£ cĂ³ lá»—i xáº£y ra, vui lĂ²ng thá»­ láº¡i thao tĂ¡c", "error");
    },
    complete: function (response) {
      jQuery("#btnLogin").text("ÄÄƒng nháº­p");
    },
  });
}
function register_submit(params, url = "") {
  var formData = new FormData(document.getElementById("form-register"));
  formData.append("action", "saveItemRegisterForm");
  jQuery.ajax({
    type: "post",
    url: url,
    data: formData,
    dataType: "json",
    cache: false,
    processData: false,
    contentType: false,
    beforeSend: function (response) {
      jQuery("#btnRegisterSubmit").text("Äang xá»­ lĂ½ .....");
    },
    success: function (response) {
      const status = response.data.status;
      const msg = response.data.msg;
      console.log("type of msg", typeof msg);
      console.log(response);
      if (status == 200) {
        swal(
          "Tuyá»‡t vá»i",
          "Báº¡n Ä‘Ă£ Ä‘Äƒng kĂ½ thĂ nh viĂªn thĂ nh cĂ´ng.",
          "success"
        ).then(function () {
          location.reload();
        });
      } else {
        swal(
          "Ráº¥t tiáº¿c",
          "ÄĂ£ cĂ³ lá»—i xáº£y ra. Vui lĂ²ng kiá»ƒm tra vĂ  thao tĂ¡c láº¡i thĂ´ng tin",
          "warning"
        ).then(function () {
          for (let key in msg) {
            const msg_item = msg[key];
            parent = jQuery(`input[name='${key}']`).parent();
            parent.append(
              `<label id='${key}-error' class="error" for='${key}'>${msg_item}</label>`
            );
          }
        });
      }
    },
    error: function (response) {
      swal("Ráº¥t tiáº¿c", "ÄĂ£ cĂ³ lá»—i xáº£y ra, vui lĂ²ng thá»­ láº¡i thao tĂ¡c", "error");
    },
    complete: function (response) {
      jQuery("#btnRegisterSubmit").text("Gá»­i thĂ´ng tin");
    },
  });
  return false;
}