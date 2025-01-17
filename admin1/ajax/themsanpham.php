<?php


	@define ( '_lib' , '../lib/');
	

	include_once _lib."config.php";
	include_once _lib."functions.php";
	include_once _lib."library.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);


	@$loaigiam=$_POST['loaigiam'];
	@$listid=$_POST['listid'];
@$giatri=$_POST['giatri'];
	$listid=explode(',', $listid);
	array_pop($listid);

	$listid=implode(',', $listid);


?>


<?php 

if($listid!='')
{	
$sql="select * from #_product where hienthi=1 and id in ($listid)";
$d->query($sql);
$product=$d->result_array();


foreach ($product as $k=> $v) {?>

	<tr class="<?=($k%2==0)?'bggrey':''?>">
         <td style="vertical-align:middle;text-align: center;"><?=$k+1?></td>
        <td class="c_align has-relative">
            <img style="width: 55px"  src="../upload/sanpham/<?=$v['photo']?>">
            <span class="icon-inevent">
             
            </span>
        </td>
        <td ><?=$v['masp']?></td>
        <td><strong ><?=$v['ten_vi']?></strong></td>
        
        <td>



        <?php if($giatri!='') {?>


        	<?php if ($loaigiam==0) {  

        		$khuyenmai= round((100 - ($v['gia']-$giatri)/$v['gia']*100),0);

        		?>
        	
	        <span ><?=number_format($v['gia'],0, ',', ',')." đ"?></span>
	       
	            <div class="has-warning"><span class="help-block">Giá Flash Deal: <strong><?=number_format($v['gia']-$giatri,0, ',', ',')." đ"?></strong></span></div>
	      	</td>
			<td>
	          
	            <div>
	                <span class="red"  ><?=number_format($v['gia']-$giatri,0, ',', ',')." đ"?></span>
	            </div>
	       
	            <span class="red" ></span>
	      
	        </td>
	        <td>
	            <span ><?=$khuyenmai?> %</span>
	        </td>

	        <?php } else {

	        	$giakhuyenmai=round((100-$giatri)*$v['gia']/100,-3);

	        	?>


	       	<span ><?=number_format($v['gia'],0, ',', ',')." đ"?></span>
	       
	            <div class="has-warning"><span class="help-block">Giá Flash Deal: <strong><?=number_format($giakhuyenmai,0, ',', ',')." đ"?></strong></span></div>
	      	</td>
			<td>
	          
	            <div>
	                <span class="red"  ><?=number_format($giakhuyenmai,0, ',', ',')." đ"?></span>
	            </div>
	       
	            <span class="red" ></span>
	      
	        </td>
	        <td>
	            <span ><?=$giatri?> %</span>
	        </td>

	        <?php } ?>




        <?php } else {?>


        		<span ><?=number_format($v['gia'],0, ',', ',')." đ"?></span>
       
            
		      	</td>
				<td>
		          
		            <div>
		                <span class="red"  ><?=number_format($v['gia'],0, ',', ',')." đ"?></span>
		            </div>
		       
		            <span class="red" ></span>
		      
		        </td>
		        <td>
		            <span >0 %</span>
		        </td>


        <?php } ?>








        <td class="c_align">
            <img src="media/images/delicon.gif" class="xoa2" data-del="<?=$v['id']?>" width="14" height="17" style="cursor:pointer">
        </td>
    </tr>


<?php } }?>



<script type="text/javascript">
	
$('.xoa2').click(function(){

	    if(confirm('Bạn có muốn xóa sản phẩm này?')){
		  var id=$(this).attr('data-del');

			var listid='<?=$listid?>';

				var chuoiid=listid.split(',');

				var i = chuoiid.indexOf(id);
				if(i!=1)
				{
					chuoiid.splice(i,1);
				}

				chuoiid=chuoiid.toString();


			 var giatri= $('#giatri').val();
			  var idloaigiam=$('input:radio[name=loaigiam]:checked').val();

			     $.ajax({
		                        url:'ajax/xoasanpham1.php',
		                        type:'post',
		                        data: {'loaigiam':idloaigiam,'listid':listid,'giatri':giatri,'id':id},
		                      
		                        success:function(data){
		                      
		                             $('#showsanphamdathem').html(data);

                             			$('#listsp').val(chuoiid);
		                        }
		           });

		}
});

</script>