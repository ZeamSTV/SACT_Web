

<style type="text/css">

	

input[type=radio]

	{

		margin:  2px 0 0;

	}

</style>



<?php

						$d->reset();

						  $sql="select * from #_diadiem_cat   order by id asc";



						  $d->query($sql);

						  $diadiemcat=$d->result_array();



?>



    
           <div class="title_cate">
               <div class="margin">
                  <div class="nav-bredcrum">
                     <a href="">Trang chủ</a> <span>/</span> Tiến hành đặt hàng                                
                  </div>
               </div>
            </div>
		



          <div id="content-trangcon">
          	          <div class="margin">
			<form action="thanh-toan.html" method="post" id="frmThanhtoan">

				<div class="noidungthanhtoan">

		

						<div class="row">

							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

									<div class="thongtinnhanhang">



											<div class="title_thanhtoan">

													<span><?=_thongtinnhanhang?></span>

<!-- 

													<?php if($_SESSION['login1']['id']!='') {?>

													

													<a class="dalogin">Bạn đã đăng nhập</a>

													<?php } else {?>





													<a data-toggle="modal" data-target="#myModallogin">Đăng nhập để đặt hàng</a>





													<?php } ?> -->

											</div>	



											<div class="noidungthongtinnhanhang">



												<?php if($_SESSION['login1']['id']!='') {





														$d->reset();

														$sql="select * from #_taodiachi where id_user=".$_SESSION['login1']['id'];

														$d->query($sql);

														$listdiachi=$d->result_array();



													?>



													<div id="blockdiachitren">

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

																	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-tn-12">

																		<div class="txt_form">

																	           <b >Ghi chú</b>

																	    </div>

																	</div>

																	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-tn-12">

																		<div class="control">

																			<textarea placeholder="Nhập ghi chú"></textarea>

																		</div>

																	</div>

																</div>







														</div>



														



													</div>

												<?php } else {?>



													<div class="block_noinhan">

													 <div class="cot1">

                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-tn-12">

                                                                <div class="txt_form">

                                                                       <b >Email</b>

                                                                </div>



                                                            </div>

                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-tn-12">

                                                                <div class="control">

                                                                    <input type="text"   placeholder="<?=_nhapemail?> " class="input-text" name="emailtt" id="emailtt">

                                                                   		  <div class="mage-error" id="emailtt_error" generated="true" ><?=_vuilongdienthongtin?></div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="cot1">

                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-tn-12">

                                                                <div class="txt_form">

                                                                       <b ><?=_hotencuaban?></b>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-tn-12">

                                                                <div class="control">

                                                                    <input type="text" placeholder="<?=_f1?>" class="input-text" id="hotentt" name="hotentt">

                                                                   <div class="mage-error" id="hotentt_error" generated="true" ><?=_vuilongdienthongtin?></div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="cot1">

                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-tn-12">

                                                                <div class="txt_form">

                                                                       <b><?=_matinhtp?></b>

                                                                </div>



                                                            </div>

                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-tn-12">

                                                                <div class="control">

                                                                    <select name="tinhtt" id="diadiem_cat_tt">

                                                                        <option><?=_matinhtp?></option>

                                                                         <?php for($i=0;$i<count($diadiemcat);$i++){?>

                                                                        <option value="<?=$diadiemcat[$i]['id']?>"><?=$diadiemcat[$i]['ten_vi']?></option>

                                                                    <?php } ?>

                                                                    </select>

                                                                    <div class="mage-error" id="tinhtt_error" generated="true" ><?=_vuilongdienthongtin?></div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="cot1">

                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-tn-12">

                                                                <div class="txt_form">

                                                                       <b><?=_quanhuyen?></b>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-tn-12">

                                                                <div class="control">

                                                                    <select name="quantt" id="diadiem_item_tt">

                                                                        <option><?=_quanhuyen?></option>

                                                                    </select>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="cot1">

                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-tn-12">

                                                                <div class="txt_form">

                                                                       <b ><?=_diachi?></b>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-tn-12">

                                                                <div class="control">

                                                                    <input type="text" placeholder="<?=_nhapdiachi?>" class="input-text" name="diachitt" id="diachitt">

                                                                    <div class="mage-error" id="diachitt_error" generated="true" ><?=_vuilongdienthongtin?></div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="cot1">

                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-tn-12">

                                                                <div class="txt_form">

                                                                       <b ><?=_sdtnhanhang?></b>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-tn-12">

                                                                <div class="control">

                                                                    <input type="text" placeholder="<?=_nhapdiachi?>" class="input-text" name="sdttt" id="sdttt">

                                                                    <div class="mage-error" id="sdttt_error" generated="true" ><?=_vuilongdienthongtin?></div>

                                                                </div>

                                                            </div>

                                                        </div>

														<div class="cot1">

															<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-tn-12">

																<div class="txt_form">

															           <b >Note</b>

															    </div>

															</div>

															<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-tn-12">

																<div class="control">

																	<textarea name="noidungtt" placeholder="<?=_nhapghichu?>"></textarea>

																</div>

															</div>

														</div>

														

													</div>





												<?php } ?>

											</div>



									</div>



									<div class="thongtinvanchuyen" >



										<div class="title_thanhtoan vanchuyen">

													<span><?=_phuongthucthanhtoan?> (*)</span>



													

										</div>	



										<div class="noidungvanchuyen" >

											<div class="space_bottom_5 " >

						                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-tn-12">

						                            <div class="txt_form"><b><?=_hinhthucvanchuyen?></b></div>

						                        </div>

						                    </div>



						                    <div class="form-group " style="margin-bottom: 0;">

						                    	<?php



						                    		$d->reset();

						                    		 	$sql = "select id,ten_$lang,noidung_vi from #_product_phu where hienthi=1 and com='ptgiaonhan' order by stt asc, id desc";

														$d->query($sql);

														$ptgiaohang = $d->result_array();

														if(count($ptgiaohang)>0) {

															foreach ($ptgiaohang as $k => $v) {

						                    	?>

						                    




						                    		    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-tn-12 row">

						                    			<span>

						                    				

						                    				<label class="radio-inline " style="display: flex;align-items: center;height: 30px">

						                    						<?php 

						                    							if($_SESSION['id_vanchuyen']!=''){

						                    								if($v['id']==$_SESSION['id_vanchuyen']){


						                    									$checked='checked="checked"';
						                    								}else{
						                    									$checked='';
						                    								}

						                    							}else{

						                    								if($k==0){
						                    									$checked='checked="checked"';
						                    								}else{
						                    									$checked='';
						                    								}
						                    							}

						                    						?>


						                    							<input <?=$checked?> class="tinhphi" type="radio" name="ptgiaonhan" value="<?=$v['id']?>" style="margin: 0;    margin-right: 5px;position: inherit;">

						                    							
						                    							<span style="margin-right: 5px;"><?=$v['ten_'.$lang]?>:</span>

						                    						<!-- 	<strong><?=number_format($v['noidung_vi'],0, ',', '.')?> đ</strong>
 -->


						                    				</label>



						                    			</span>

						                    		</div>


						                    		<?php }} ?>

						                    		<hr style="margin-top: 10px; margin-bottom: 10px; float: left; width: 100%;">

								                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-tn-12">

								                         <div class="txt_form"><b><?=_phuongthucthanhtoan?></b></div>

								                        </div>

								                    </div>



								                    <?php

								                    $d->reset();

								                    	$sql = "select id, mota_$lang,ten_$lang from #_product_phu where hienthi=1 and com='ptthanhtoan' order by stt asc, id desc";

													$d->query($sql);

													$ptthanhtoan = $d->result_array();



													if(count($ptthanhtoan)>0) {





														foreach ($ptthanhtoan as $k => $v) {



								                    ?>



								                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-tn-12 row">
						                    			<span>

						                    				

						                    				<label class="radio-inline" style="display: flex;align-items: center;height: 30px">



						                    							<input <?=($k==0)?'checked="checked"':''?> type="radio" name="ptthanhtoan" value="<?=$v['id']?>" style="margin: 0;    margin-right: 5px;position: inherit;">

						                    							<span ><?=$v['ten_'.$lang]?></span>



						                    				</label>



						                    			</span>

						                    		</div>

						                    	

						                    	<?php }} ?>



						                    </div>



							                 <div id="bank-info" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-tn-12 space_top_10">



							                 



							                 </div>

										</div>



							</div>

						

							<div class="thanhtoanphai col-lg-4 col-md-4 col-sm-4 col-xs-12">



								<div class="block_donhang space_bottom_20 width_100">

										<div class="title_donhang">



											<span><?=_donhangcuaban?></span>

											<!-- <a href="gio-hang.html" class="pull-right txt_back_cart txt_color_1">Sửa</a> -->

										</div>





										<div class="list_donhang">



												  <?php



	                        

	                      

					                                if(is_array($_SESSION['cart'])){

					                                        $max=count($_SESSION['cart']);

					                                  for($i=0;$i<$max;$i++){

					                                    $pid=$_SESSION['cart'][$i]['productid'];

					                                    $q=$_SESSION['cart'][$i]['qty'];    



					                                    $mausac= $_SESSION['cart'][$i]['mausacgh'];

					                                    $pname=get_product_name($pid,$lang);

					                                  

					                                  
					                                   
					                                    $pimg=get_product_img($pid);



					                                    if($q==0) continue;

					                           		 ?>





													<div class="item_list_donhang">



															<div class="thumb_donhang">



															<img src="thumb/180x180/2/<?=_upload_sanpham_l.$pimg?>">

															</div>

															<div class="info_donhang">

																<div class="title_sanpham_donhang" >

		                                                                <?=$pname?>  

															  </div>



		                                                  		<?php if($mausac!='') {?>

		                                                         <div class="item-options txt_12">



		                                                        	 <div> <span >Size</span>: <span >  <?=get_maugh($mausac)?>    </span> </div>



		                                                         </div>

		                                                          <?php } ?>
		                                                         


																<div class="qty">SL: <strong ><?=$q?></strong></div>



															</div>

															<div class="gia_thanh">

																     <span ><?=number_format(get_price($pid)*$q,0, ',', '.')?>  ₫</span>

																</div>

													</div>



											<?php }} ?>



										</div>



										<div class="item_list_donhang">



												<div class="space_bottom_10 width_100">

													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-7">

														<?=_tamtinh?>: 

													</div>

													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-5 text-right">

														<?=number_format(get_order_total1(),0, ',', ',')?> ₫

													</div>

												</div>

											<!-- 	<div class="payment-option _collapsible opc-payment-additional discount-code">

														<div class="payment-option-content">

															<div class="form form-discount" id="discount-form" >

																<div class="block_input_coupon relative">

																	<input class="input-text" type="text" id="discount-code" name="discount_code" placeholder="Nhập mã giảm giá">

																	<a class=" btn2 btn_site_1 action action-apply" id="applyCoupon" type="button"  value="Apply Discount">

													                    <span><span>Sử dụng</span></span>

													                </a>

																</div>



																<div id="thongbaoma" style="margin-top: 10px;padding-left: 2px;">



																</div>

															</div>

														</div>



												</div> -->



												<div class="phivanchuyen width_100" style="    margin-top: 25px;display: none;">

											        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">

											            Phí vận chuyển:

											        </div>

											        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3 text-right" id="showphivc" >
											        	<?php if(!isset($_SESSION['phivanchuyen'])){?>


											        	<?php 

											        		if($ptgiaohang[0]['noidung_vi']!=''){


											        		$_SESSION['phivanchuyen']=$ptgiaohang[0]['noidung_vi'];

											        		}else{

											        				$_SESSION['phivanchuyen']=0;
											        		}

											        	?>


											        			<?=($_SESSION['phivanchuyen']!='')?number_format($_SESSION['phivanchuyen'],0, ',', ','):'0'?> ₫

											       		 <?php } else{?>

											        	

											       		 	  	<?=($_SESSION['phivanchuyen']!='')?number_format($_SESSION['phivanchuyen'],0, ',', ','):'0'?> ₫
											     		   <?php } ?>


											     		 

											        </div>

											        <div class="clearfix"></div>

											    </div>

												<div class="phivanchuyen width_100">

											       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

												        <?=_thanhtien?>:<br>

												        (<?=_vat?>)

												    </div>

												    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right" id="showtonggia">

												        <div class="txt_giatien"  ><?=number_format(get_order_total(),0, ',', ',')?> ₫</div>

												    </div>

												    <div class="clearfix"></div>

											    </div>

											    <div class="btn_dathang space_bottom_20">

												    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

												        <button type="submit" id="hoantatthanhtoan" style="margin-top: 20px;width: 100%;" class="btn btn_site_2 <?=($_SESSION['login1']['id']=='')?'btn_dathang2':''?>"

												        ><?=_dathang?></button>

												    </div>

												    <div class="clearfix"></div>

												</div>

										</div>



								</div>

							</div>

						</div>



					





				</div>

			</form>
		</div>

</div>



<script type="text/javascript">

	





$(".btn_xemthem_title").click(function(){



	 $("#blockdiachitren").load("ajax/loadaddress.php", "id=1");



	 $("#hoantatthanhtoan").addClass('btn_dathang1');



});



 $(".huybo").click(function(){

	 $("#blockdiachitren").load("ajax/loadaddress.php", "id=2");

	  $("#hoantatthanhtoan").removeClass('btn_dathang1');



});

</script>





<script type="text/javascript">

	

	    $('#diadiem_cat_tt').change(function(){

						      var id = $(this).val();

						      $.ajax({

						        type: "POST",

						        url: "ajax/ajax_quan.php",

						        data: "id="+id,

						        success: function(result){

						          $('#diadiem_item_tt').html(result);

						          

						        }

						      });

		})







	  $("#applyCoupon").click(function(){



			var ma=$('#discount-code').val();



		

                        $.ajax({

                  type: "POST",

                  url: "ajax/ktma.php",

                 data: {'ma':ma},

                 dataType: 'json',

                

                  success: function(result){



                  				      $('#showtonggia').html(result.datatien); 

                       			$('#thongbaoma').html(result.thongbao);

                       	

                       			$('#discount-code').val('');

                          }

               });







		



	});

 $('#emailtt').blur(function(){



        var telephonePattern = /^09[0-9]{8}|01[0-9]{9}|08[0-9]{8}/;

        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

    var value=$(this).val();

    if(value=='')

    {

          $('#emailtt_error').html('');

         $("#emailtt").after('<div for="email" generated="true" class="mage-error" id="emailtt_error">Vui lòng nhập Email</div>');

           



    }

    if(value != '' && ((!telephonePattern.test(value) && !emailPattern.test(value)) || (telephonePattern.test(value) && value.match(telephonePattern)[0] != value)))

    {

                        $('#emailtt_error').html('');

                         $("#emailtt").after('<div for="email" generated="true" class="mage-error" id="emailtt_error">Email không đúng định dạng.</div>');

                       

    }

    else

                    {

                        $('#emailtt_error').html('');

                    }



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


 $('#phuongtt').blur(function(){





    var value=$(this).val();

    if(value=='')

    {

          $('#phuongtt_error').html('');

      	   $("#phuongtt").after('<div for="email" generated="true" class="mage-error" id="phuongtt_error">Vui lòng nhập phường xã</div>');

           



    }else{
			$('#phuongtt_error').html('');

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



        // var telephonePattern = /^09[0-9]{8}|01[0-9]{9}|08[0-9]{8}/;

        // var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

                var telephonePattern = /^09[0-9]{8}|03[0-9]{8}|08[0-9]{8}|01[0-9]{8}|05[0-9]{8}|02[0-9]{8}|04[0-9]{8}|06[0-9]{8}|07[0-9]{8}/;

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





	     $('.btn_dathang2').click(function(){







            var frm = $('#frmThanhtoan');



















                 // var telephonePattern = /^09[0-9]{8}|01[0-9]{9}|08[0-9]{8}/;

                 //     var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                        var telephonePattern = /^09[0-9]{8}|03[0-9]{8}|08[0-9]{8}|01[0-9]{8}|05[0-9]{8}|02[0-9]{8}|04[0-9]{8}|06[0-9]{8}|07[0-9]{8}/;


                     var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

                    var value4=$('#emailtt').val();

                    if(value4=='')

                    {

                          $('#emailtt_error').html('');

                         $("#emailtt").after('<div for="email" generated="true" class="mage-error" id="emailtt_error">Vui lòng nhập email</div>');

                           

                           return false;

                    }

                    if(value4 != '' && ((!telephonePattern.test(value4) && !emailPattern.test(value4)) || (telephonePattern.test(value4) && value4.match(telephonePattern)[0] != value4)))

                    {

                                        $('#emailtt_error').html('');

                                         $("#emailtt").after('<div for="email" generated="true" class="mage-error" id="emailtt_error">Email  không đúng định dạng.</div>');



                                         $('#emailtt').val('');

                                        return false;

                    }

                    else

                    {

                        $('#emailtt_error').html('');

                    }







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






                var value22=$('#phuongtt').val();

                if(value22=='')

                {

                      $('#phuongtt_error').html('');

                     $("#phuongtt").after('<div for="email" generated="true" class="mage-error" id="phuongtt_error">Vui lòng nhập phường xã</div>');

                       return false;



                }

                else

                {

                          

                      $('#phuongtt_error').html('');



                }

             

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



	

	$('.tinhphi').change(function(){





		var id=$(this).val();



		  $.ajax({

                        type: "POST",

                        url: "ajax/phivanchuyen.php",

                       data: "id="+id,

                            dataType: 'json',



                        success: function(result){

                          $('#showphivc').html(result.phi+' ₫');

                          $('#showtonggia').html(result.datatien);    

                     }

               });



	});



	

</script>