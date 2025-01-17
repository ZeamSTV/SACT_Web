<?php   
    session_start();
    error_reporting(E_ALL & ~E_NOTICE & ~8192);
    
    if(!isset($_SESSION['lang']))
    {
    $_SESSION['lang']='vi';
    }
    
    $lang=$_SESSION['lang'];
    
    @define ( '_lib' , '../admin/lib/');
    @define ( '_source' , '../sources/');
    include_once _lib."config.php";
    include_once _lib."constant.php";
    // require_once _source."lang_$lang.php";
          include_once _lib."tridepzai.php";
    include_once _lib."functions.php";
    include_once _lib."functions_giohang.php";
    include_once _lib."class.database.php";
    $d = new database($config['database']);
  






@$id=$_GET['id'];

    $d->reset();
                          $sql="select * from #_diadiem_cat   order by id asc";

                          $d->query($sql);
                          $diadiemcat=$d->result_array();

?>



    <?php if($id==1) {?>



                                                <div class="block_noinhan" >
                                                        <div class="cot1">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-tn-12">
                                                                <div class="txt_form">
                                                                       <b >Email</b>
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-tn-12">
                                                                <div class="control">
                                                                    <input type="text" value="<?=($_SESSION['login1']['email']!='')?$_SESSION['login1']['email']:$_SESSION['login1']['dienthoai']?>" readonly="readonly" style="background: #ddd"  placeholder="Nhập email " class="input-text" name="emailtt" id="emailtt">
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cot1">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-tn-12">
                                                                <div class="txt_form">
                                                                       <b >Họ và tên</b>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-tn-12">
                                                                <div class="control">
                                                                    <input type="text" placeholder="Nhập họ và tên" class="input-text" id="hotentt" name="hotentt">
                                                                   <div class="mage-error" id="hotentt_error" generated="true" >Vui lòng bổ sung thông tin.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cot1">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-tn-12">
                                                                <div class="txt_form">
                                                                       <b>Tỉnh/Thành phố</b>
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-tn-12">
                                                                <div class="control">
                                                                    <select name="tinhtt" id="diadiem_cat_tt">
                                                                        <option>Chọn Tỉnh/Thành phố</option>
                                                                         <?php for($i=0;$i<count($diadiemcat);$i++){?>
                                                                        <option value="<?=$diadiemcat[$i]['id']?>"><?=$diadiemcat[$i]['ten_vi']?></option>
                                                                    <?php } ?>
                                                                    </select>
                                                                    <div class="mage-error" id="tinhtt_error" generated="true" >Vui lòng bổ sung thông tin.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cot1">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-tn-12">
                                                                <div class="txt_form">
                                                                       <b>Quận/Huyện</b>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-tn-12">
                                                                <div class="control">
                                                                    <select name="quantt" id="diadiem_item_tt">
                                                                        <option>Chọn Quận/Huyện</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cot1">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-tn-12">
                                                                <div class="txt_form">
                                                                       <b >Địa chỉ</b>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-tn-12">
                                                                <div class="control">
                                                                    <input type="text" placeholder="Nhập địa chỉ" class="input-text" name="diachitt" id="diachitt">
                                                                    <div class="mage-error" id="diachitt_error" generated="true" >Vui lòng bổ sung thông tin.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cot1">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-tn-12">
                                                                <div class="txt_form">
                                                                       <b >Số điện thoại nhận hàng</b>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-tn-12">
                                                                <div class="control">
                                                                    <input type="text" placeholder="Nhập số điện thoại di động" class="input-text" name="sdttt" id="sdttt">
                                                                    <div class="mage-error" id="sdttt_error" generated="true" >Vui lòng bổ sung thông tin.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cot1">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-tn-12">
                                                                <div class="txt_form">
                                                                       <b >Ghi chú</b>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-tn-12">
                                                                <div class="control">
                                                                    <textarea name="noidungtt" placeholder="Nhập ghi chú"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cot1" style="margin: 0">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-tn-12">
                                                                
                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-tn-12">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" class="checkbox" name="shipping-save-in-address-book" id="shipping-save-in-address-book" >
                                                                    Lưu vào sổ địa chỉ.
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="cot1" style="margin-top: 0">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-tn-12">
                                                                
                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-tn-12">
                                                                <a   class="btn btn_site_4 huybo" >Hủy bỏ</a>
                                                            </div>
                                                        </div>

                                                        </div>

    <?php } else if($id==2) {


            $d->reset();
                                                        $sql="select * from #_taodiachi where id_user=".$_SESSION['login1']['id'];
                                                        $d->query($sql);
                                                        $listdiachi=$d->result_array();
        ?>


        <div class="block_listdiachi">
                                                                <?php foreach ($listdiachi as $v) {?>
                                                                <div class="item_diachinhanhang">
                                                                    <label>
                                                                        <input name="chondiachi" value="<?=$v['id']?>" type="radio" <?=($v['stt']==1)?'checked="checked"':''?> >
                                                                        <b class="name_nhanhang"><?=$v['hoten']?></b>
                                                                        <p><?=$v['diachi']?>, <?=get_quan($v['quan'])?>, <?=get_tinh($v['tinh'])?></p>
                                                                        <p>Điện thoai: <?=$v['dienthoai']?></p>

                                                                        <?php if($v['stt']==1){?>
                                                                            <span class="txt_default" >Mặc định</span>

                                                                        <?php } ?>
                                                                    </label>
                                                                </div>

                                                                <?php } ?>
                                                                <div class="item_diachinhanhang">

                                                                    <a class="btn_xemthem_title" >+ Thêm địa chỉ khác </a>

                                                                </div>

                                                                <div class="cot1" style="padding: 0px 80px 0 50px;">
                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-tn-12">
                                                                        <div class="txt_form">
                                                                               <b >Ghi chú</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-tn-12">
                                                                        <div class="control">
                                                                            <textarea placeholder="Nhập ghi chú"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                        </div>


    <?php } ?>


<script type="text/javascript">
    

$(".btn_xemthem_title").click(function(){

     $("#blockdiachitren").load("ajax/loadaddress.php", "id=1");

     $("#hoantatthanhtoan").addClass('btn_dathang1');

});
 $(".huybo").click(function(){
     $("#blockdiachitren").load("ajax/loadaddress.php", "id=2");
      $("#hoantatthanhtoan").removeClass('btn_dathang1');

});

 $('#hotentt').blur(function(){


    var value=$(this).val();
    if(value=='')
    {
          $('#hotentt_error').html('');
         $("#hotentt").after('<div for="email" generated="true" class="mage-error" id="hotentt_error">Vui lòng nhập họ tên</div>');
           

    }
    else
    {
                value=value.trim();
                var splValue = value.split(' ');


                            if(splValue.length < 2){

                                $('#hotentt_error').html('');
                                $("#hotentt").after('<div for="email" generated="true" class="mage-error" id="hotentt_error">Vui lòng nhập đầy đủ họ tên</div>');
                              
                          
                            
                            }
                            else
                            {
                                $('#hotentt_error').html('');
                            }


    }




 });

    $('#diadiem_cat_tt').change(function(){


              var value=$(this).val();
            if(value=='')
            {
                  $('#tinhtt_error').html('');
                 $("#diadiem_cat_tt").after('<div for="email" generated="true" class="mage-error" id="tinhtt_error">Vui lòng chọn tỉnh</div>');
                   

            }
            else
            {
                 $('#tinhtt_error').html('');
            }
              var id = $(this).val();
                              $.ajax({
                                type: "POST",
                                url: "ajax/ajax_quan.php",
                                data: "id="+id,
                                success: function(result){
                                  $('#diadiem_item_tt').html(result);
                                  
                                }
                              });
            
    });
 $('#diachitt').blur(function(){


    var value=$(this).val();
    if(value=='')
    {
          $('#diachitt_error').html('');
         $("#diachitt").after('<div for="email" generated="true" class="mage-error" id="diachitt_error">Vui lòng nhập địa chỉ</div>');
           

    }
    else
    {
              
          $('#diachitt_error').html('');

    }




 });
 $('#sdttt').blur(function(){

        var telephonePattern = /^09[0-9]{8}|01[0-9]{9}|08[0-9]{8}/;
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    var value=$(this).val();
    if(value=='')
    {
          $('#sdttt_error').html('');
         $("#sdttt").after('<div for="email" generated="true" class="mage-error" id="sdttt_error">Vui lòng nhập số điện thoại</div>');
           

    }
    if(value != '' && ((!telephonePattern.test(value) && !emailPattern.test(value)) || (telephonePattern.test(value) && value.match(telephonePattern)[0] != value)))
    {
                        $('#sdttt_error').html('');
                         $("#sdttt").after('<div for="email" generated="true" class="mage-error" id="sdttt_error">Số điện thoại  không đúng định dạng.</div>');
                       
    }
    else
                    {
                        $('#sdttt_error').html('');
                    }


 });



 $('.btn_dathang1').click(function(){



            var frm = $('#frmThanhtoan');
            var value=$("#hotentt").val();
            if(value=='')
            {
                $('#hotentt_error').html('');
                 $("#hotentt").after('<div for="email" generated="true" class="mage-error" id="hotentt_error">Vui lòng nhập họ tên</div>');
                   
                 return false;
            }
            else
            {
                        value=value.trim();
                        var splValue = value.split(' ');


                                    if(splValue.length < 2){

                                        $('#hotentt_error').html('');
                                        $("#hotentt").after('<div for="email" generated="true" class="mage-error" id="hotentt_error">Vui lòng nhập đầy đủ họ tên</div>');
                                        $("#hotentt").val('')
                                         return false;
                                    
                                    }
                                    else
                                    {
                                        $('#hotentt_error').html('');
                                    }


            }



                var value2=$('#diachitt').val();
                if(value2=='')
                {
                      $('#diachitt_error').html('');
                     $("#diachitt").after('<div for="email" generated="true" class="mage-error" id="diachitt_error">Vui lòng nhập địa chỉ</div>');
                       return false;

                }
                else
                {
                          
                      $('#diachitt_error').html('');

                }
                var value3=$('#diadiem_cat_tt').val();
                    if(value3=='')
                    {
                          $('#tinhtt_error').html('');
                         $("#diadiem_cat_tt").after('<div for="email" generated="true" class="mage-error" id="tinhtt_error">Vui lòng chọn tỉnh</div>');
                           
                         return false;
                    }
                    else
                    {
                         $('#tinhtt_error').html('');
                    }

                     var telephonePattern = /^09[0-9]{8}|01[0-9]{9}|08[0-9]{8}/;
                     var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                    var value1=$('#sdttt').val();
                    if(value1=='')
                    {
                          $('#sdttt_error').html('');
                         $("#sdttt").after('<div for="email" generated="true" class="mage-error" id="sdttt_error">Vui lòng nhập số điện thoại</div>');
                           
                           return false;
                    }
                    if(value1 != '' && ((!telephonePattern.test(value1) && !emailPattern.test(value1)) || (telephonePattern.test(value1) && value1.match(telephonePattern)[0] != value1)))
                    {
                                        $('#sdttt_error').html('');
                                         $("#sdttt").after('<div for="email" generated="true" class="mage-error" id="sdttt_error">Số điện thoại  không đúng định dạng.</div>');

                                         $('#sdttt').val('');
                                        return false;
                    }
                    else
                    {
                        $('#sdttt_error').html('');
                    }


            frm.submit();
            return false;

 });


</script>