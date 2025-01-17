<div id="tieude_khungchinh2">
<a href="trang-chu.html" title="trang chủ" class="atrangchu">Trang chủ</a>

<h1><?=$title_ttt?></h1> </div>

<div  id="noidung_khungchinh2">
	<div class='noidung_motbaiviet_lon'>
	<div class="quyenthanhvien">  Quyền thành viên: 
		<span>
		<?php 
		if($_SESSION['login1']['role']==1){echo "Thành viên bình thường";}
		if($_SESSION['login1']['role']==4){echo "Thành viên ưu tiên";}
		if($_SESSION['login1']['role']==1){echo "Thành viên chính thức";}
		?>
		</span>
	</div>
	
	<div class="quyenthanhvien">  Tên thành viên: 
		<span>
		<?=$_SESSION['login1']['ten']?>
		</span>
	</div>
		<table class="tablelichsumuahang" style="width:100%">
		  <tr class="trdaulichsumuahang">
			<td>Mã đơn hàng</td>
			<td>Họ tên</td> 
			<td>Tổng giá</td>
			<td>Ngày đặt</td>
		  </tr>
		  
		  <?php for($i1=0;$i1<count($news);$i1++){
			$v = $news[$i1];
		  ?>
		  <tr>
			<td><?=$v['madonhang']?></td>
			<td><?=$v['hoten']?></td> 
			<td><?=number_format($v['tonggia'],0, ',', '.')?>&nbsp;VNĐ</td>
			<td><?=date('d/m/Y',$v['ngaytao'])?></td>
		  </tr>
		  <?php } ?>
</table>
	<div id="tongtientatcahoadon" >Tổng tiền tất cả hóa đơn đã từng mua: <span> <?=number_format($tongtonggia['tongtonggia'],0, ',', '.')?>&nbsp;VNĐ</span></div>
	</div>
</div>