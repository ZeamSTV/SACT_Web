<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>



<script>

$(document).ready(function() {

$("#chonhet").click(function(){

	var status=this.checked;

	$("input[name='chon']").each(function(){this.checked=status;})

});



$("#xoahet").click(function(){

	var listid="";

	$("input[name='chon']").each(function(){

		if (this.checked) listid = listid+","+this.value;

    	})

	listid=listid.substr(1);	 //alert(listid);

	if (listid=="") { alert("Bạn chưa chọn mục nào"); return false;}

	hoi= confirm("Bạn có chắc chắn muốn xóa?");

	if (hoi==true) document.location = "index.php?com=tin3cap&act=delete&listid=" + listid + "<?=$chuoi_noi_curpage?>";

});

});

</script>

<!-- Breadcrumbs Start -->

  <div class="row breadcrumbs">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

      <ul class="breadcrumbs">

        <li><a href="index.php"><i class="fa fa-home"></i></a></li>

        <li><a href="index.php?com=tin3cap&act=man">Bài viết</a></li>

      </ul>

    </div>

  </div>

  <!-- Breadcrumbs End -->

        

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

  	  	<!--

        <div class="inner" style="margin-bottom:10px;">

            <div class="message-box info">

              <i class="fa fa-exclamation-circle"></i>

              <p>Lưu ý: Project nổi bật sẽ hiển thị ngoài trang chủ, có ít nhất 8 Project.</p>

            </div>

        </div>

        -->

        

      <!-- Inline Form Start -->      	      

        <div class="boxed no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <div class="inner">

          	            

            <!-- Title Bar Start -->

            <div class="title-bar">

              <div class="col-md-8" style="padding-left:0px; padding-top:7px; padding-bottom:7px;">                 

              	<h4> <a href="index.php?com=tin3cap&act=add<?=$chuoi_noi_curpage?>" class="btn btn-success"><i class="fa fa-check"></i> Thêm </a></h4>      

              </div>

              <div class="col-md-4 paging_0px">  

              	<form action="index.php?com=tin3cap&act=man<?=$chuoi_noi_curpage?>" method="post" class="inline-form">

                	<div id="timkiem_khung">

                    	<input type="text" name="search" id='search' value="<?=@$_REQUEST['search']?>" placeholder="Nhập tên cần tìm ..." class='timkiem_input' />

                        <input type="image" name="btnSearch" src="media/images/search-focus.png" value="Tìm kiếm" id='nut_timkiem' />

                    </div>                    

                </form>

              </div>

              <div class="clear"></div>  

            </div>

        

            <div class="title-bar" style="padding-bottom:0px;">

              <div class="col-md-2 paging_0px" style="padding-top:5px;"><label>Lọc thông tin:</label></div>

              <div class="col-md-10 paging_0px">

				

                  <div class="col-md-3 paging_right_10px" style="margin-bottom:10px;">                 

                    <?=get_main_category();?>

                  </div>  
                    <div class="col-md-3 paging_right_10px" style="margin-bottom:10px;">                 

                    <?=get_main_category1();?>

                  </div>    

		<!-- 	 	 

                 

               <div class="col-md-3 paging_right_10px" style="margin-bottom:10px;">                 

                    <?=get_main_category2();?>

                  </div> 
 -->
                           

						   

              </div>

              <div class="clear"></div>  

            </div>

		

            <!-- Title Bar End -->  

            

            <script language="javascript">

				function select_onchange()

				{

					var b=document.getElementById("id_cat");

					if(b!=0)

						window.location ="index.php?com=tin3cap&act=man&id_cat="+b.value+"";	

					else

						window.location ="index.php?com=tin3cap&act=man";	

					return true;

				}

				function select_onchange1()

				{

					var b=document.getElementById("id_cat");

					var c=document.getElementById("id_cat1");

					if(c!=0)

						window.location ="index.php?com=tin3cap&act=man&id_cat="+b.value+"&id_cat1="+c.value+"";	

					else

						window.location ="index.php?com=tin3cap&act=man&id_cat="+b.value+"";

					return true;

				}	

				function select_onchange2()

				{	

					var b=document.getElementById("id_cat");

					var c=document.getElementById("id_cat1");

					var e=document.getElementById("id_cat2");

					if(e==0)

						window.location ="index.php?com=tin3cap&act=man&id_cat="+b.value+"&id_cat1="+c.value;	

					else

						window.location ="index.php?com=tin3cap&act=man&id_cat="+b.value+"&id_cat1="+c.value+"&id_cat2="+e.value;	

					return true;

				}

			</script>

			<?php

			

				function get_main_category()

				{	

					global $d;

					$sql="select * from table_tin3cap_cat where com='cat'  order by stt asc,id desc";

					$stmt=mysqli_query($d->db,$sql);

					$str='

						<select id="id_cat" name="id_cat" onchange="select_onchange()">

						 <option value="0">Chọn danh mục cấp 1</option>

						';

					while ($row=@mysqli_fetch_array($stmt)) 

					{

						if($row["id"]==(int)@$_REQUEST["id_cat"])

							$selected="selected";

						else 

							$selected="";

						$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';			

					}

					$str.='</select>';

					return $str;

				}

				

				function get_main_category1()

				{
						global $d;
					$sql="select * from table_tin3cap_cat where com='cat1' and id_cat='".(int)@$_REQUEST["id_cat"]."' order by stt asc,id desc";

					$stmt=mysqli_query($d->db,$sql);

					$str='

						<select id="id_cat1" name="id_cat1" onchange="select_onchange1()">

						 <option value="0">Chọn danh mục cấp 2</option>

						';

					while ($row=@mysqli_fetch_array($stmt)) 

					{

						if($row["id"]==(int)@$_REQUEST["id_cat1"])

							$selected="selected";

						else 

							$selected="";

						$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';			

					}

					$str.='</select>';

					return $str;

				}	

				function get_main_category2()

				{
						global $d;
					$sql_huyen="select * from table_tin3cap_cat where com='cat2' and id_cat1='".intval($_REQUEST['id_cat1'])."' ORDER BY stt asc, id DESC";

					$result=mysqli_query($d->db,$sql_huyen);

					$str='

						<select id="id_cat2" name="id_cat2" onchange="select_onchange2()" >

						<option>Chọn danh mục cấp 3</option>	

						';

					while ($row_huyen=@mysqli_fetch_array($result)) 

					{

						if($row_huyen["id"]==(int)@$_REQUEST["id_cat2"])

							$selected="selected";

						else 

							$selected="";

						$str.='<option value='.$row_huyen["id"].' '.$selected.'>'.$row_huyen["ten_vi"].'</option>';			

					}

					$str.='</select>';

					return $str;

				}

					

			?>                     

            

            <!-- Table Holder Start -->

            <div class="table-holder">                            

              <table class="stripe-rows" cellspacing="0" cellpadding="0" width="100%" border="1">   

                <thead>

                  <th style="width:3%;"><input type="checkbox" name="chonhet" id="chonhet" /></th>

                  <th style="width:5%;">STT</th>

				<!-- 	  <th >Xem </th> -->

                  <th style="width:20%;">

                    Cấp 1 / Cấp 2 <!-- / Cấp 3
 -->
                 </th>

					

                  <th style="width:76px;">Ảnh đại diện</th>

                  <th>Tên</th>

                     <th>Hình ảnh</th>

              <th style="width:5%;">Thông báo</th>

                             	 <th style="width:5%;">Tin mới</th>


          

       

           <!--     <th style="width:5%;">Menu</th>  -->
           <!--      <th style="width:5%;">Tin thường</th>  -->
                  <th style="width:5%;">Hiển<br />thị</th>

                  <th style="width:5%;">Sửa</th>

                  <th style="width:5%;">Xóa</th>

                </thead>

                <tbody>

                  <?php 

				  	if($items&&count($items)!=0){

						foreach($items as $k=>$v){

				  ?>

                  <tr>

                    <td style="width:3%;"><input type="checkbox" name="chon" id="chon" value="<?=$v['id']?>" /></td>

                    <td style="width:5%;"><?=$v['stt']?></td>

  <td style=" width:20%;">

						

                    	<b class="cap1">Cấp 1: <?php

							$sql_danhmuc1="select ten_vi from table_tin3cap_cat where id='".$v['id_cat']."'";

							$result=mysqli_query($d->db,$sql_danhmuc1);

							$item_danhmuc1 =mysqli_fetch_array($result);

							echo @$item_danhmuc1['ten_vi'];

						?>

                        </b><br />

						
 <b class="cap2">Cấp 2: <?php

							$sql_danhmuc1="select ten_vi from table_tin3cap_cat where id='".$v['id_cat1']."'";

							$result=mysqli_query($d->db,$sql_danhmuc1);

							$item_danhmuc1 =mysqli_fetch_array($result);

							echo @$item_danhmuc1['ten_vi'];

						?>

                        </b><br />  
					

                      <!--  
					

                

                            <b class="cap3">Cấp 3: <?php

							$sql_danhmuc1="select ten_vi from table_tin3cap_cat where id='".$v['id_cat2']."'";

							$result=mysqli_query($d->db,$sql_danhmuc1);

							$item_danhmuc1 =mysqli_fetch_array($result);

							echo @$item_danhmuc1['ten_vi'];

						?>

                        </b>   -->

					

					

                    </td> 

     <td style="width:76px;"><a href="index.php?com=tin3cap&act=edit&id=<?=$v['id']?><?=$chuoi_noi_curpage?>"><img src="<?=_upload_tin3cap.$v['photo']?>" border="1" class="sp_img" style="width:90px;height:auto" /></a></td> 


                    <td><a href="index.php?com=tin3cap&act=edit&id=<?=$v['id']?><?=$chuoi_noi_curpage?>"><?=$v['ten_vi']?></a></td> 



                    	<td style="width:5%;"><a href="index.php?com=tin3cap&act=man_photo&id_cat=<?=$v['id']?><?=$chuoi_noi_curpage?>">Thêm+</a></td>

                   	<td style="width:5%;"><a class="clickchange" thaydoiloai="noibat"   thaydoitable="table_tin3cap"  thaydoiid="<?=$v['id']?>" id="idcssnoibat<?=$v['id']?>"><img src="<?=($v['noibat']==1)?'media/images/yes-km.gif':'media/images/no-km.gif'?>" border="0" /></a></td>

					

               

              <td style="width:5%;"><a class="clickchange" thaydoiloai="tinmoi"   thaydoitable="table_tin3cap"  thaydoiid="<?=$v['id']?>" id="idcsstinmoi<?=$v['id']?>"><img src="<?=($v['tinmoi']==1)?'media/images/yes-km.gif':'media/images/no-km.gif'?>" border="0" /></a></td>

				
<!-- 
			
			<td style="width:5%;"><a class="clickchange" thaydoiloai="tinthuong"   thaydoitable="table_tin3cap"  thaydoiid="<?=$v['id']?>" id="idcsstinthuong<?=$v['id']?>"><img src="<?=($v['tinthuong']==1)?'media/images/yes-km.gif':'media/images/no-km.gif'?>" border="0" /></a></td> -->

                <td style="width:5%;"><a class="clickhienthi" thaydoiloai="hienthi"   thaydoitable="table_tin3cap" thaydoiid="<?=$v['id']?>" id="idcsshienthi<?=$v['id']?>"><img src="<?=($v['hienthi']==1)?'media/images/active_1.png':'media/images/active_0.png'?>" border="0" /></a></td>

                    <td style="width:5%;"><a href="index.php?com=tin3cap&act=edit&id=<?=$v['id']?><?=$chuoi_noi_curpage?>"><img src="media/images/edit.png" border="0" title="Sửa" /></a></td>

                    <td style="width:5%;"><a href="index.php?com=tin3cap&act=delete&id=<?=$v['id']?><?=$chuoi_noi_curpage?>" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="media/images/delete.png" border="0" title="Xóa" /></a></td>                                        

                  </tr>

                  <?php	

						}

					}

				  ?>

                                                      

                </tbody>

              </table>

              <div class="clear"></div>

                           

            </div>

            <!-- Table Holder End -->

            

			<div class="col-md-12 margin_bottom_10px">

                <div class="col-md-6 paging_right_10px">                  

                  <a href="index.php?com=tin3cap&act=add<?=$chuoi_noi_curpage?>" class="btn btn-success"><i class="fa fa-check"></i> Thêm </a>

                  <a href="index.php?com=tin3cap&act=man" class="btn btn-info"><i class="fa fa-share"></i> Thoát</a> 

                  <a href="#" class="btn btn-danger" id="xoahet"><i class="fa fa-times"></i> Xóa tất cả</a> 

                </div>

                <div class="col-md-6 paging_0px">    

                  <div class="paging"><?=$paging['paging']?></div>

                </div>

    

                <div class="clearfix"></div>

			</div>

            <div class="clearfix"></div>



          </div>

        </div>

        <!-- Inline Form End -->

  </div>