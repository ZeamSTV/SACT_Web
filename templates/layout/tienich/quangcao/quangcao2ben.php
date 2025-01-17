<!--Quang Cao-->
<?php 
	$d->reset();
	$sql= "select hienthi,noibat from #_photo where id=404";
	$d->query($sql);
	$hienthiqcr = $d->fetch_array();	
	
	$d->reset();
	$sql= "select * from #_photo where com='quangcao2ben_left' and id!=404 order by stt asc, id desc limit 0,3";
	$d->query($sql);
	$quangcaoright = $d->result_array();
	
	$d->reset();
	$sql= "select hienthi,noibat from #_photo where id=405";
	$d->query($sql);
	$hienthiqcl = $d->fetch_array();	
	
	$d->reset();
	$sql= "select * from #_photo where com='quangcao2ben_right' and id!=405 order by stt asc, id desc limit 0,3";
	$d->query($sql);
	$quangcaoleft = $d->result_array();
?>
<div id="divAdRight" style="DISPLAY: none; POSITION: absolute; TOP: 0px;">
<div class="w-100" style="width:160px">

<?php if ($hienthiqcl['noibat']==1 && $hienthiqcl['hienthi']==0 ){ ?>
                  <a href="<?=$quangcaoleft[0]['link']?>" target="blank"> <img src="<?=_upload_hinhanh_l.$quangcaoleft[0]['photo']?>" class="show1" >  </a>
                  <?php } ?>
                  
                  <?php if ($hienthiqcl['noibat']==0 && $hienthiqcl['hienthi']==1 ){
					  foreach ($quangcaoleft as $v) { ?>
                  <a href="<?=$v['link']?>" target="blank">   <img src="<?=_upload_hinhanh_l.$v['photo2']?>" class="show2" >  </a>
                  <?php }} ?>
                  
          </div>        
		
 </div>
   
    <div id="divAdLeft" style="DISPLAY: none; POSITION: absolute; TOP: 0px;">
    <div class="w-100" style="width:160px">
    <?php if ($hienthiqcr['noibat']==1 && $hienthiqcr['hienthi']==0 ){ ?>
                  <a href="<?=$quangcaoright[0]['link']?>" target="blank"> <img class="show1" src="<?=_upload_hinhanh_l.$quangcaoright[0]['photo']?>" class="w-100" >  </a>
                  <?php } ?>
                  
                  <?php if ($hienthiqcr['noibat']==0 && $hienthiqcr['hienthi']==1 ){
					  foreach ($quangcaoright as $v) { ?>
                  <a href="<?=$v['link']?>" target="blank">   <img class="show2" src="<?=_upload_hinhanh_l.$v['photo2']?>" class="w-100" >  </a>
                  <?php }} ?>
                  
                  
		</div>
    
    </div>

<script>
      function FloatTopDiv()
        {
            startLX = ((document.body.clientWidth -MainContentW)/2)-LeftBannerW-LeftAdjust , startLY = TopAdjust+80;
            startRX = ((document.body.clientWidth -MainContentW)/2)+MainContentW+RightAdjust , startRY = TopAdjust+80;
            var d = document;
            function ml(id)
            {
                var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
                el.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};
                el.x = startRX;
                el.y = startRY;
                return el;
            }

            function m2(id)
            {
                var e2=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
                e2.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};
                e2.x = startLX;
                e2.y = startLY;
				return e2;
            }
            window.stayTopLeft=function()
            {
                if (document.documentElement && document.documentElement.scrollTop)
                    var pY =  document.documentElement.scrollTop;
                else if (document.body)
                    var pY =  document.body.scrollTop;
                if (document.body.scrollTop > 30){startLY = 3;startRY = 3;} else {startLY = TopAdjust;startRY = TopAdjust;};
                ftlObj.y += (pY+startRY-ftlObj.y)/16;
                ftlObj.sP(ftlObj.x, ftlObj.y);
                ftlObj2.y += (pY+startLY-ftlObj2.y)/16;
               ftlObj2.sP(ftlObj2.x, ftlObj2.y);
                setTimeout("stayTopLeft()", 1);
            }
            ftlObj = ml("divAdRight");
            //stayTopLeft();
            ftlObj2 = m2("divAdLeft");
            stayTopLeft();
        }
        function ShowAdDiv()
        {
            var objAdDivRight = document.getElementById("divAdRight");
            var objAdDivLeft = document.getElementById("divAdLeft");       
            if (document.body.clientWidth < 1000)
            {
                objAdDivRight.style.display = "none";
                objAdDivLeft.style.display = "none";
            }
            else
            {
                objAdDivRight.style.display = "block";
                objAdDivLeft.style.display = "block";
                FloatTopDiv();
           }
        } 
</script>

<script>
    document.write("<script type='text/javascript' language='javascript'>MainContentW = 1000;LeftBannerW = 160;RightBannerW = 160;LeftAdjust = 15;RightAdjust = 15;TopAdjust =1;ShowAdDiv();window.onresize=ShowAdDiv;<\/script>");
 </script>
<!--Quang cao 2 le-->

<!--END: Quang Cao-->