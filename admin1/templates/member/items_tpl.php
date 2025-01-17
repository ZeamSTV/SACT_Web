<div class="row breadcrumbs">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

      <ul class="breadcrumbs">

        <li><a href="index.php"><i class="fa fa-home"></i></a></li>

        <li><a href="index.php?com=member&act=add">Quản lý thành viên</a></li>

      </ul>

    </div>

  </div>



 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

 

 <div class="boxed no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <div class="inner">

	<div class="title-bar"> 

              <div class="col-md-8" style="padding-left:0px; padding-top:7px; padding-bottom:7px;">                 

              	<h4> <a class="btn btn-success"  href="index.php?com=member&act=add">Thêm thành viên</a></h4>     

              </div>

              <div class="col-md-4 paging_0px">  

              	<form action="index.php?com=member&act=man<?=$chuoi_noi_curpage?>" method="post" class="inline-form">

                	<div id="timkiem_khung">

                    	<input type="text" name="search" id='search' value="<?=@$_REQUEST['search']?>" placeholder="Nhập tên cần tìm ..." class='timkiem_input' />

                        <input type="image" name="btnSearch" src="media/images/search-focus.png" value="Tìm kiếm" id='nut_timkiem' />

                    </div>                   

                </form>

              </div>

              <div class="clear"></div>      

            </div>

			

<div class="table-holder">			

 <table class="stripe-rows" cellspacing="0" cellpadding="0" width="100%" border="1">

	 <thead style="text-align:center">

		<th style="width:5%;">STT</th>



		

		<th>Tên</th>

		<th>Email</th>

		<th>Số điện thoại</th>

	

		<th>Hiển thị</th>

		<th style="width:5%;" >Sửa</th>

		<th  style="width:5%;" >Xóa</th>

	</thead>

	<?php for($i=0, $count=count($items); $i<$count; $i++){?>

	<tr>

		<td style="width:6%;"><?=$items[$i]['stt']?></td>

	

		

		<td style="width:6%;"><?=$items[$i]['ten']?></td>

		<td style="width:28%;">

			<a href="index.php?com=member&act=edit&id=<?=$items[$i]['id']?><?php if($_REQUEST['curPage']!='') echo "&curPage=".$_REQUEST['curPage'];?>">

				<?=$items[$i]['email']?>

            </a>

        </td>

		 <td style="width:28%;">

			<a href="index.php?com=member&act=edit&id=<?=$items[$i]['id']?><?php if($_REQUEST['curPage']!='') echo "&curPage=".$_REQUEST['curPage'];?>">

				<?=$items[$i]['dienthoai']?>

            </a>

        </td>

		     

				<td style="width:6%;">

			<a class="clickhienthi" thaydoiloai="hienthi"   thaydoitable="table_member" thaydoiid="<?=$items[$i]['id']?>" id="idcsshienthi<?=$items[$i]['id']?>">

			<?php if(@$items[$i]['hienthi']){?>

            	<img src="media/images/active_1.png" />

			<?php }else{?>

            	<img src="media/images/active_0.png" />

			<?php }?>

        	</a>

        </td>   

	

		<td style="width:6%;"><a href="index.php?com=member&act=edit&id=<?=$items[$i]['id']?><?php if($_REQUEST['curPage']!='') echo "&curPage=".$_REQUEST['curPage'];?>"><img src="media/images/edit.png" /></a></td>

		<td style="width:6%;"><a href="index.php?com=member&act=delete&id=<?=$items[$i]['id']?><?php if($_REQUEST['curPage']!='') echo "&curPage=".$_REQUEST['curPage'];?>" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="media/images/delete.png" /></a></td>

	</tr>

	<?php	}?>

</table>

	<div class="clear"></div>





	</div>

	<div class="col-md-12 margin_bottom_10px">

                <div class="col-md-8 paging_0px">         

                           <a href="export1.php" class="btn btn-warning"><i class="fa fa-check"></i>Xuất DANH SÁCH</a>          

                 <a href="index.php?com=member&act=add" class="btn btn-success"><i class="fa fa-check"></i> Thêm thành viên</a>

                  <a href="index.php?com=member&act=man" class="btn btn-info"><i class="fa fa-share"></i> Thoát</a> 

                </div>

                <div class="col-md-8 paging_0px">    

                  <div class="paging"><?=$paging['paging']?></div>

                </div>

    

                <div class="clearfix"></div>

	</div>

    <div class="clearfix"></div>





</div>





</div>

</div>



















