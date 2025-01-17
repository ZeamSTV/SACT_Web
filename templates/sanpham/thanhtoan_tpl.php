<script type="text/javascript">
function validEmail(obj) {
	var s = obj.value;
	for (var i=0; i<s.length; i++)
		if (s.charAt(i)==" "){
			return false;
		}
	var elem, elem1;
	elem=s.split("@");
	if (elem.length!=2)	return false;

	if (elem[0].length==0 || elem[1].length==0)return false;

	if (elem[1].indexOf(".")==-1)	return false;

	elem1=elem[1].split(".");
	for (var i=0; i<elem1.length; i++)
		if (elem1[i].length==0)return false;
	return true;
}//Kiem tra dang email
function IsNumeric(sText)
{
	var ValidChars = "0123456789";
	var IsNumber=true;
	var Char;

	for (i = 0; i < sText.length && IsNumber == true; i++) 
	{ 
		Char = sText.charAt(i); 
		if (ValidChars.indexOf(Char) == -1) 
		{
			IsNumber = false;
		}
	}
	return IsNumber;
}//Kiem tra dang so
function check()
		{
			var frm 	= document.frm_order;
			
			if(frm.ten.value=='') 
			{ 
				alert( "Bạn chưa điền họ tên." );
				frm.ten.focus();
				return false;
			}
			if(frm.dienthoai.value=='') 
			{ 
				alert( "Bạn chưa điền điện thoại." );
				frm.dienthoai.focus();
				return false;
			}
			if(frm.diachi.value=='') 
			{ 
				alert( "Bạn chưa điền địa chỉ." );
				frm.diachi.focus();
				return false;
			}
			/*
			if(frm.email.value=='') 
			{ 
				alert( "Bạn chưa điền email." );
				frm.email.focus();
				return false;
			}
			if(!validEmail(frm.email)){
				alert('Vui lòng nhập đúng địa chỉ email');
				frm.email.focus();
				return false;
			}	*/											
			frm.submit();		
		}	
</script>
<script language='javascript'>
  function isNumberKey(evt)
 {
 var charCode = (evt.which) ? evt.which : event.keyCode
 if (charCode > 31 && (charCode < 48 || charCode > 57))
 return false;
 return true;
 }
 
</script>


<div class="container">
<div class="row">
<div class="noidungtrong" style="margin-top:0">

	

     <form method="post" name="frm_order" action="" enctype="multipart/form-data" onsubmit="return check();">
	     <div class="col-xs-12" >

	     		<div class="thongtinkhachhang col-md-5 col-sm-5 col-xs-12">


	     				<div class="tieudethanhtoan">

	     					<h3><?=_thongtinthanhtoan?></h3>

	     				</div>

	     				<div class="noidungthanhtoan">


	     					<div class="txtinput">
	     						<div class="col-xs-12"><label><?=_hoten?><span >*</span></label></div>
	     						<div class="col-xs-12"><input name="ten" id="ten" class="input" value="<?=$_SESSION['login1']['ten']?>" placeholder="<?=_hoten?>" oninvalid="InvalidMsgHotenLienhe(this);"  oninput="InvalidMsgHotenLienhe(this);"  required  /></div>

	     					</div>

	     					<div class="txtinput">
	     						<div class="col-xs-12"><label><?=_dienthoai?><span >*</span></label></div>
	     						<div class="col-xs-12"><input name="dienthoai" id="dienthoai" class="input" value="<?=$_SESSION['login1']['dienthoai']?>" placeholder="<?=_dienthoai?>"  oninvalid="InvalidMsgHotenLienhe(this);"  oninput="InvalidMsgHotenLienhe(this);"  required  /></div>

	     					</div>
	     					<div class="txtinput">
	     						<div class="col-xs-12"><label><?=_diachi?><span >*</span></label></div>
	     						<div class="col-xs-12"><input placeholder="<?=_diachi?>"  name="diachi" id="diachi" class="input" value="<?=$_SESSION['login1']['diachi']?>" oninvalid="InvalidMsgHotenLienhe(this);"  oninput="InvalidMsgHotenLienhe(this);"  required  /></div>


	     					</div>

	     					<div class="txtinput">
	     							<div class="col-xs-12"><label>Email <span >*</span></label></div>
	     							<div class="col-xs-12"><input placeholder="Email"  name="email" id="email" class="input" value="<?=$_SESSION['login1']['email']?>" oninvalid="InvalidMsgHotenLienhe(this);"  oninput="InvalidMsgHotenLienhe(this);"  required  /></div>

	     					</div>
	     					<div class="txtinput">
								<div class="col-xs-12"><label><?=_noidung?> <span >*</span></label></div>
	     						<div class="col-xs-12"><textarea placeholder="<?=_noidung?>"  name="noidung" id="areathanhtoan"  cols="50" rows="5" ><?=$_POST['noidung']?></textarea></div>
	     					</div>


	     				</div>


	     		</div>



	     		<div class="thongtinthanhtoan col-md-7 col-sm-7 col-xs-12">


	     				<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0">



	     					
					          <div class="ptgn col-xs-12" >

	     						<div class="tieudethanhtoan">

	     							<h3>Phương thức giao hàng</h3>

	     						</div>
	     						<table width="100%" style="margin:auto;" border="0" cellpadding="0" cellspacing="5">
					                <tr>
					                    <td><b>Phương thức giao hàng</b></td>
					                    <td><b>Thời gian</b></td>
					                    <td><b>Phí vận chuyển</b></td>
					                </tr>
					              <?php
								  	$sql = "select id,ten,ten2,noidung from #_product_phu where hienthi=1 and com='ptgiaonhan' order by stt asc, id desc";
									$d->query($sql);
									$ptgiaohang = $d->result_array();
									if(count($ptgiaohang)!=0){
										$t=0;
										foreach($ptgiaohang as $v){
											$temp="";
											if($t==0){
												$temp=" checked='checked'";	
												$t=1;
											}
								?>
					            <tr>
					            	<td>
						                <input type="radio" name="ptgiaohang" value="<?=$v['id']?>" <?=$temp?> />&nbsp;&nbsp;<?=$v['ten']?>
					                </td>
					                <td>
					                	<?=$v['ten2']?>
					                </td>
					                <td>
					                	<?=($v['noidung']!=0)?(number_format($v['noidung'],0, ',', '.')."đ"):"" ?>
					                </td>
					             </tr>
					            <?php	
										}
									}
								  ?>
					             	 </table>
					            </div>


					            <div class="pttt col-xs-12">
					            	<div class="tieudethanhtoan">

	     							<h3>Phương thức thanh tóan</h3>

	     							</div>


	     								<!-- pttt-->

	     									<table width="100%" style="margin:auto;" border="0" cellpadding="0" cellspacing="5">
								                <tr>
								                    <td width="40%"><b>Phương thức thanh toán</b></td>
								                    <td><b>Mô tả</b></td>                   
								                </tr>
								              <?php
											  	$sql = "select id,ten,noidung from #_product_phu where hienthi=1 and com='ptthanhtoan' order by stt asc, id desc";
												$d->query($sql);
												$ptgiaohang = $d->result_array();
												if(count($ptgiaohang)!=0){
													$t=0;
													foreach($ptgiaohang as $v){
														$temp="";
														if($t==0){
															$temp=" checked='checked'";	
															$t=1;
														}
											?>
								            <tr>
								            	<td style="float:left">
									                <input type="radio" name="ptthanhtoan" value="<?=$v['id']?>" <?=$temp?> />&nbsp;&nbsp;<?=$v['ten']?>
								                </td>
								                <td>
								                	<div><?=$v['noidung']?></div>
								                </td>                
								             </tr>
								            <?php	
													}
												}
											  ?>
								             	 </table>

	     								<!-- pttt -->


					            </div>


					          <div class="donhang col-xs-12">

					          		<div class="tieudethanhtoan">

	     								<h3><?=_dk14?></h3>

	     							</div>

	     							<div class="noidungdonhang">
	     								<div>
	     								<div class="tieudedonhang">

	     									<div class="col-xs-2">

	     										<span><?=_hinhanh?></span>

	     									</div>
	     									<div class="col-xs-3">

	     										<span><?=_sanpham?></span>

	     									</div>
	     									<div class="col-xs-2">

	     										<span><?=_gia?></span>

	     									</div>
	     									<div class="col-xs-2">

	     										<span><?=_soluong?></span>

	     									</div>
	     									<div class="col-xs-3">

	     										<span><?=_tongcong?></span>

	     									</div>

	     								</div>


 	<?php
			if(is_array($_SESSION['cart'])){
            	$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];					
					$pname=get_product_name($pid,$lang);
					$pimg=get_product_img($pid);
					if($q==0) continue;
			?>
	     								<div class="coldongsp">

	     									<div class="col-xs-2">

	     										<img id="hinhgiohang" src="<?=_upload_sanpham_l.$pimg?>" width="100" style="width:100%"/>

	     									</div>
	     									<div class="col-xs-3">

	     										<span><?=$pname?></span>

	     									</div>
	     									<div class="col-xs-2">

	     										<span><?=number_format(get_price($pid),0, ',', '.')?> VNĐ</span>

	     									</div>
	     									<div class="col-xs-2">

	     										<span><?=$q?></span>

	     									</div>
	     									<div class="col-xs-3">

	     										<span><?=number_format(get_price($pid)*$q,0, ',', '.') ?> VNĐ</span>

	     									</div>

	     								</div>

	     			<?php }} ?>

	     			</div>
	     			<div class="col-xs-12" style="border-bottom:1px solid #ccc;padding-bottom:7px;">
		     			<div class="couttongtien">

		     				<?=_tongtien?>:

		     				<span>   <?=number_format(get_order_total(),0, ',', '.')?> VNĐ</span>

		     			</div>

	     			</div>

	     			
	     			<div class="nutquaylai">

	     			<a href="gio-hang.html">< <?=_giohang?></a>
	     			</div>
	     			<div class="nutdathang">

	     				<button name="btngui"><?=_dathang?></button>

	     			</div>

	     							</div>


					          </div>


	     				</div>

	     				

	     		</div>


	     </div>




     </form>


</div>

</div>