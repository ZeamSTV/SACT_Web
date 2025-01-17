<?php  if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die('Eror');
		$idmemberlichsumuahang = $_SESSION['login1']['id'];		
		$d->reset();
	  $sql_tintuc = "select * from #_donhang where idmember=$idmemberlichsumuahang ";
	  $d->query($sql_tintuc);
	  $news = $d->result_array();
	  
	  $d->reset();
	  $sql_tintuc = "select sum(tonggia) as tongtonggia from #_donhang where idmember=$idmemberlichsumuahang ";
	  $d->query($sql_tintuc);
	  $tongtonggia = $d->fetch_array();
	 
	 
	  $title_ttt = '<a href="lich-su-mua-hang.html" title="Lịch sử mua hàng" class="transition_03s">Lịch sử mua hàng</a>';
	  
	  if($news['title']!="")
		  $title_bar = 'Lịch sử mua hàng';
	   
	  
	  $title_bar = "Lịch sử mua hàng - ".$title_bar;			
?>