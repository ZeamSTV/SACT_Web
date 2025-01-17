

<?php
$d->reset();
$sql="select ten_vi,photo from #_tin3cap where hienthi=1";
$d->query($sql);
$list11=$d->result_array();

?>
<div id="khungthongbao">

		<div class="img_pop">
			<img src="thumb/80x80/1/upload/tin3cap/<?=$list11[0]['photo']?>">
		</div>

		<div class="desc_pop">
			<span>Khóa cơ bản</span>
			<h3><?=$list11[0]['ten_vi']?></h3>
			<p>Vừa đăng ký cách đây 5 phút</p>
		</div>

</div>

<script type="text/javascript">
	
 $('#khungthongbao').hide();  
  setInterval(function () {
 $('#khungthongbao').slideToggle("slow");;


   setTimeout(function(){ 


   $('#khungthongbao').hide(1000); 


  },3000);
   setTimeout(function(){ 


    

      var thoigian= new Array();
      

    
        thoigian.push('Vừa đăng ký cách đây 5 phút');
   		thoigian.push('Vừa đăng ký cách đây 10 phút');
   		thoigian.push('Vừa đăng ký cách đây 15 phút');
   		thoigian.push('Vừa đăng ký cách đây 20 phút');
   		thoigian.push('Đã đăng ký cách đây 30 phút');
      	thoigian.push('Đã đăng ký cách đây 1 giờ');

    var tt= new Array();

    <?php foreach ($list11 as $key => $v) {?>
    
        var tt1= new Array("thumb/80x80/1/upload/tin3cap/<?=$v['photo']?>","<?=$v['ten_vi']?>");
        tt.push(tt1);
    <?php } ?>

      
    var iii = Math.floor(Math.random() * <?=count($list11)?>);
    var ii = Math.floor(Math.random() *6);


    // $('.desc_pop span').html(name[iii]);
      $('.desc_pop h3').html(tt[iii][1]);
      $('.desc_pop p').html(thoigian[ii]);
      $('.img_pop img').attr('src',tt[iii][0]);

  },5000);
      

},10000);



</script>