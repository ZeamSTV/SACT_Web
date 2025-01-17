$(function(){
    'use strict'
    // replace textare to ckeditor
    CKEDITOR.replaceAll('editor');
    //Initialize Select2 Elements
    $('.select2').select2();
    // Check string empty
    function isEmpty(str){
      return (!str || 0 === str.length);
    }
    // Format price
    $('[data-format_price]').priceFormat({
        prefix: '',
        centsLimit: 0,
        // centsSeparator: '.',
        thousandsSeparator: ',',
        clearOnEmpty: true
    });
    // convert VI to EN
    function change_alias(alias){
        var str = alias;
        str = str.toLowerCase();
        str = str.replace(/Ă |Ă¡|áº¡|áº£|Ă£|Ă¢|áº§|áº¥|áº­|áº©|áº«|Äƒ|áº±|áº¯|áº·|áº³|áºµ/g,"a"); 
        str = str.replace(/Ă¨|Ă©|áº¹|áº»|áº½|Ăª|á»|áº¿|á»‡|á»ƒ|á»…/g,"e"); 
        str = str.replace(/Ă¬|Ă­|á»‹|á»‰|Ä©/g,"i"); 
        str = str.replace(/Ă²|Ă³|á»|á»|Ăµ|Ă´|á»“|á»‘|á»™|á»•|á»—|Æ¡|á»|á»›|á»£|á»Ÿ|á»¡/g,"o"); 
        str = str.replace(/Ă¹|Ăº|á»¥|á»§|Å©|Æ°|á»«|á»©|á»±|á»­|á»¯/g,"u"); 
        str = str.replace(/á»³|Ă½|á»µ|á»·|á»¹/g,"y"); 
        str = str.replace(/Ä‘/g,"d");
        str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'|\"|\&|\#|\[|\]|~|\$|_|`|-|{|}|\||\\/g," ");
        str = str.replace(/ + /g," ");
        str = str.trim(); 
        return str;
    }
    //Date range picker with time picker
    $('.cus_timer').daterangepicker({
        "singleDatePicker": true,
        "showDropdowns": true,
        "timePicker": true,
        "drops": "down",
        "locale": {
          "format": "DD/MM/YYYY hh:mm A",
          "separator": " - ",
          "applyLabel": "Chá»n",
          "cancelLabel": "Há»§y",
          "daysOfWeek": [
              "CN",
              "Hai",
              "Ba",
              "TÆ°",
              "NÄƒm",
              "SĂ¡u",
              "Báº£y"
          ],
          "monthNames": [
              "ThĂ¡ng 1",
              "ThĂ¡ng 2",
              "ThĂ¡ng 3",
              "ThĂ¡ng 4",
              "ThĂ¡ng 5",
              "ThĂ¡ng 6",
              "ThĂ¡ng 7",
              "ThĂ¡ng 8",
              "ThĂ¡ng 9",
              "ThĂ¡ng 10",
              "ThĂ¡ng 11",
              "ThĂ¡ng 12"
          ],
          "firstDay": 1
        },
    });
    //Enable iCheck plugin for checkboxes
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });
    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function(){
      var clicks = $(this).data('clicks');
      if(clicks){
        //Uncheck all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      }else{
        //Check all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });
    //Handle starring for glyphicon and font awesome
    $(".mailbox-star").click(function(e){
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");
      //Switch states
      if(glyph){
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }
      if(fa){
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });
    // icheck for NhĂ³m quyá»n
  $('.add-nhomquyen input[type="checkbox"]').iCheck({
    checkboxClass: 'icheckbox_flat-blue',
    radioClass: 'iradio_flat-blue'
  });
  $(".checkbox-add").click(function(){
    var clicks = $(this).data('clicks');
    if($(".fa", this).hasClass("fa-check-square")){
      if(clicks === undefined){clicks = true}
    }
    if($(".fa", this).hasClass("fa-square-o")){
      if(clicks === undefined){clicks = false}
    }
    if(clicks){
      //Uncheck all checkboxes
      $(this).parents('.parentcheck').find('input[type="checkbox"]').iCheck("uncheck");
      $(".fa", this).removeClass("fa-check-square").addClass('fa-square-o');
    }else{
      //Check all checkboxes
      $(this).parents('.parentcheck').find('input[type="checkbox"]').iCheck("check");
      $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square');
    }
    $(this).data("clicks", !clicks);
  });


    //Xac thuc xoa du lieu
    $('a.btn_del_one').click(function(){
      if(!confirm('Dá»¯ liá»‡u xĂ³a sáº½ khĂ´ng khĂ´i phá»¥c Ä‘Æ°á»£c! Báº¡n cháº¯c cháº¯n muá»‘n xĂ³a ?')){
        return false;
      }
      // swal({
      //   title: "Báº¡n cháº¯c cháº¯n muá»‘n xĂ³a?",
      //   text: "Dá»¯ liá»‡u xĂ³a sáº½ khĂ´ng khĂ´i phá»¥c Ä‘Æ°á»£c!",
      //   icon: "warning",
      //   buttons: [
      //     'Há»§y',
      //     'Äá»“ng Ă½'
      //   ],
      //   dangerMode: true,
      // }).then(function(){
      //     return false;
      //   });
    });
    //xoa nhieu du lieu
    $('.btn_del_all').click(function(){ //tim toi the co id = submit,su kien click
      $('.cus_messenger_action').remove();
      if(!confirm('Báº¡n cháº¯c cháº¯n muá»‘n xĂ³a dá»¯ liá»‡u Ä‘Ă£ chá»n ?')){
        return false;
      }
      var ids = new Array();
      $('[name="id[]"]:checked').each(function(){
        ids.push($(this).val());
      });
      if(!ids.length) return false;
      var url = $(this).attr('url');
      //ajax Ä‘á»ƒ xĂ³a
      $.ajax({
        url: url,
        type: 'POST',
        data : {'ids': ids},
        success: function(data){
          var list_id = new Array();
          $(data).filter(".id_delete").each(function(){
            list_id.push($(this).text());
          });
          $('.msg').append('<div class="cus_messenger_action">'+data+'</div>');
          $(list_id).each(function(id, val){
            $('tr.row_'+val).fadeOut( "slow", function() {
              $('tr.row_'+val).remove();
            });
          });
        }
      })
    });

    $('input[name="name"]#auto_convert_name').blur(function(){
      var name = $.trim($(this).val());
      var url = $.trim($("input[name='url']").val());
      var type = $('#form').attr('data-type');
      var action = $('#form').attr('data-action');
      if(isEmpty(name)){
        return false;
      }
      if(!isEmpty(url)){
        return false;
      }
      var data = {'name': name, 'type': type, 'action':action}
      if(action == 'edit'){
        var id = $('#form').attr('data-id');
        data = {'name': name, 'type': type, 'action':action, 'id':id}
      }
      $.ajax({
        url: "/admin/ajax/convert_link",
        type: 'POST',
        data : data,
        success: function(data){
          $("input[name='url']").val(data);
        }
      });
    });

    $(".cus_btn_seo").click(function(){
      var name = $.trim($("input[name='name']").val());
      var title = $.trim($("input[name='title']").val());
      var description = $.trim($("textarea[name='description']").val());
      var keyword = $.trim($("input[name='keyword']").val());

      if(!isEmpty(name)){
        if(isEmpty(title)){
          $("input[name='title']").val(name);
        }
        if(isEmpty(description)){
          $("textarea[name='description']").val(name+', '+name+', '+name);
        }
        if(isEmpty(keyword)){
          $("input[name='keyword']").val(name+', '+change_alias(name));
        }
      }else{
        return false;
      }

    });

})