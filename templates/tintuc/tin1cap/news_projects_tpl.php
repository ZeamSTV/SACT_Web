
<link href="css/flexisel.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.flexisel.js"></script>

 <script>
		  	$(document).ready(function(e) {
               
            });
</script>

<ul id="flexiselDemo3" class="nbs-flexisel-ul" >
 <!--
    <li><a href="#"><img src="media/images/kk1.png" /></a>
		<p><a href="#">Chair</a></p>
	</li>
    <li><a href="#"><img src="media/images/kk2.png" /></a>
	<p><a href="#">Chair</a></p>
	</li>  
    <li><a href="#"><img src="media/images/kk3.png" /></a><p><a href="#">Chair</a></p></li>    
     <li><a href="#"><img src="media/images/kk4.png" /></a><p><a href="#">Chair</a></p></li>
	 -->
	 <?php
		for($s1=0;$s1<count($news);$s1++){
			$v = $news[$s1];
			$id_cap1 = $v['id'];
	 ?>
	
	 
     <li  class="masanpham" masanpham="<?=$v['id']?>" ><a href="projects/<?=($v['ten']!='')?q_bodautv($v['ten']):'-'?>-<?=$v['id']?>.htm" ><img   src="<?=_upload_tin3cap_l.$v['thumb']?>" /></a><p><a href="projects/<?=($v['ten']!='')?q_bodautv($v['ten']):'-'?>-<?=$v['id']?>.htm"><?=$v['ten']?></a></p></li>   
	<?php 
		}
    ?>	

</ul>
 
<div class="clearout"></div>

<script type="text/javascript">

$(window).load(function() {
    $("#flexiselDemo1").flexisel();
    $("#flexiselDemo2").flexisel({
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });

    $("#flexiselDemo3").flexisel({
        visibleItems: 2,
        animationSpeed: 1500,
        autoPlay: false,
        autoPlaySpeed: 9000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });

    $("#flexiselDemo4").flexisel({
        clone:false
    });
	
	 $(".masanpham").click(function(e) {
                    var masanpham = $(this).attr("masanpham");
					$.get('sources/ajax/kkfurniture.php',{masanpham:masanpham},function(data){
						$('#flexiselDemo1').html(data);
					});
					
			
                });
    
});
</script>
<?php 
$d->reset();
$sql1="select * from #_tinnho where id=32";
$d->query($sql1);
$chuthich = $d->fetch_array();
?> 
<div class="mota_furniture">
	<div class="tieude_furniture"><h1>KK Design Studio</h1></div>
	<div class="noidung_furniture">
		<div id="noidung_projects">
		<?=$chuthich['mota'];?>
		</div>
	</div>
</div>

