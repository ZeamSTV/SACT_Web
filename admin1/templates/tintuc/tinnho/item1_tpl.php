<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>



<!-- Breadcrumbs Start -->

  <div class="row breadcrumbs">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

      <ul class="breadcrumbs">

        <li><a href="index.php"><i class="fa fa-home"></i></a></li>

        <li><a href="index.php?com=tinnho&act=man1">Lý do</a></li>

      </ul>

    </div>

  </div>

  <!-- Breadcrumbs End -->

        

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

  	  	<div class="inner" style="margin-bottom:10px;">

            <div class="message-box info">

              <i class="fa fa-exclamation-circle"></i>

             <!-- <p>Lưu ý: Nổi bật là tin sẽ hiển thị khi click vào Hướng dẫn mua hàng trên MENU TOP!</p>-->

            </div>

        </div>

        

      <!-- Inline Form Start -->      	      

        <div class="boxed no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <div class="inner">

          	            

            <!-- Title Bar Start -->

            <div class="title-bar"> 

              <div class="col-md-8" style="padding-left:0px; padding-top:7px; padding-bottom:7px;">                 

            	<h4><a href="index.php?com=tinnho&act=add1<?=$chuoi_noi_curpage?>" class="btn btn-success"><i class="fa fa-check"></i> Thêm</a></h4>    

              </div>

              <div class="col-md-4 paging_0px">  

              	<form action="index.php?com=tinnho&act=man1<?=$chuoi_noi_curpage?>" method="post" class="inline-form">

                	<div id="timkiem_khung">

                    	<input type="text" name="search" id='search' value="<?=@$_REQUEST['search']?>" placeholder="Nhập tên cần tìm ..." class='timkiem_input' />

                        <input type="image" name="btnSearch" src="media/images/search-focus.png" value="Tìm kiếm" id='nut_timkiem' />

                    </div>                    

                </form>

              </div>

              <div class="clear"></div>      

            </div>

            <!-- Title Bar End -->                                  

            

            <!-- Table Holder Start -->

            <div class="table-holder">



              <table class="stripe-rows" cellspacing="0" cellpadding="0" width="100%" border="1">            

                <thead>

                  <th style="width:5%;">STT</th>                                                    

                  <th>Tên</th>
<!-- 
				   <th>Hình</th> -->

<!--                <th style="width:5%;">Nổi bật</th> -->

                <!--   <th style="width:5%;">Tin mới</th> -->

                  <th style="width:5%;">Hiển thị</th>

                  <th style="width:5%;">Sửa</th>

					<th style="width:5%;">Xóa</th>

                </thead>

                <tbody>

                  <?php 

				  	if(count($items)!=0){

						foreach($items as $k=>$v){

				  ?>

                  <tr>

                    <td style="width:5%;"><?=$v['stt']?></td>                    

                    <td><a href="index.php?com=tinnho&act=edit1&id=<?=$v['id']?><?=$chuoi_noi_curpage?>" style="text-decoration:none;"><?=$v['ten_vi']?></a></td>
<!-- 
					<td><a href="index.php?com=tinnho&act=edit1&id=<?=$v['id']?><?=$chuoi_noi_curpage?>" style="text-decoration:none;"><img src="<?=_upload_tinnho.$v['photo']?>" width="100px"/></a></td> -->


<!-- 
					<td style="width:5%;"><a class="clickchange" thaydoiloai="noibat"   thaydoitable="table_tinnho"  thaydoiid="<?=$v['id']?>" id="idcssnoibat<?=$v['id']?>"><img src="<?=($v['noibat']==1)?'media/images/yes-km.gif':'media/images/no-km.gif'?>" border="0" /></a></td> -->

                <!--    <td style="width:5%;"><a class="clickchange" thaydoiloai="tinmoi"   thaydoitable="table_tinnho"  thaydoiid="<?=$v['id']?>" id="idcsstinmoi<?=$v['id']?>"><img src="<?=($v['tinmoi']==1)?'media/images/yes-km.gif':'media/images/no-km.gif'?>" border="0" /></a></td>

                   -->  <td style="width:5%;"><a class="clickhienthi" thaydoiloai="hienthi"   thaydoitable="table_tinnho" thaydoiid="<?=$v['id']?>" id="idcsshienthi<?=$v['id']?>"><img src="<?=($v['hienthi']==1)?'media/images/active_1.png':'media/images/active_0.png'?>" border="0" /></a></td>

                    <td style="width:5%;"><a href="index.php?com=tinnho&act=edit1&id=<?=$v['id']?><?=$chuoi_noi_curpage?>"><img src="media/images/edit.png" border="0" title="Sửa" /></a></td>

                    <td style="width:5%;"><a href="index.php?com=tinnho&act=delete1&id=<?=$v['id']?><?=$chuoi_noi_curpage?>" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="media/images/delete.png" border="0" title="Xóa" /></a></td> 

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

                <div class="col-md-4 paging_0px">                  

<!--     <a href="index.php?com=tinnho&act=add1<?=$chuoi_noi_curpage?>" class="btn btn-success"><i class="fa fa-check"></i> Thêm</a> 
 -->
                  <a href="index.php?com=tinnho&act=man1" class="btn btn-info"><i class="fa fa-share"></i> Thoát</a> 

                </div>

                <div class="col-md-8 paging_0px">    

                  <div class="paging"><?=$paging['paging']?></div>

                </div>

    

                <div class="clearfix"></div>

			</div>

            <div class="clearfix"></div>



          </div>

        </div>

        <!-- Inline Form End -->

  </div>