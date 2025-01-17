<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>



<!-- Breadcrumbs Start -->

  <div class="row breadcrumbs">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

      <ul class="breadcrumbs">

        <li><a href="index.php"><i class="fa fa-home"></i></a></li>

        <li><a href="index.php?com=product&act=man_cat1">Danh mục cấp 2</a></li>

      </ul>

    </div>

  </div>

  <!-- Breadcrumbs End -->

        

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    	<!--<div class="inner" style="margin-bottom:10px;">

            <div class="message-box info">

              <i class="fa fa-exclamation-circle"></i>

              <p>Lưu ý: Chỉ nên có tối đa 4-5 bản đồ, tên bản đồ không nên đặt dài quá, nên đặt số thứ tự chính xác để dễ quản lý!</p>

            </div>

        </div>-->

    

    

		<!-- Inline Form Start -->

          <div class="boxed no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="inner">



              <!-- Title Bar Start -->

              <div class="title-bar">

                <h4><button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button></h4>

              </div>

              <!-- Title Bar End -->

			

              <?php

				function get_main_category($a)

					{
              global $d;
						$sql="select * from table_product_cat where com='cat' order by stt asc,id desc";

						$stmt=mysqli_query($d->db,$sql);

						$str='

							<select id="id_cat" name="id_cat">

							 <option value="0">Chọn danh mục cấp 1</option>

							';

						while ($row=@mysqli_fetch_array($stmt)) 

						{

							if($row["id"]==(int)@$a)

								$selected="selected";

							else 

								$selected="";

							$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';			

						}

						$str.='</select>';

						return $str;

					}

					

				?>



              <form method="post" name="frm" action="index.php?com=product&act=save_cat1<?=$chuoi_noi_curpage2?>" enctype="multipart/form-data" class="basic-form inline-form">

			  

			  

			           	<div class="col-md-2"><label>Số thứ tự</label></div>

                <div class="col-md-10"><input type="text" name="stt" id="stt" value="<?=isset($item['stt'])?$item['stt']:1?>" placeholder="Số thứ tự" /></div>

                <?php if ($_REQUEST['act']=='edit_cat1'){?>

                <div class="col-md-2"><label>Hình hiện tại</label></div>

                <div class="col-md-10"><img src="<?=_upload_sanpham.$item['photo']?>"  width="261" alt="NO PHOTO" /><br /><br /></div>

                <?php }?>

                   <div class="clearfix"></div>

                <div class="col-md-2"><label>Hình</label></div>

                <div class="col-md-10">

                	<input type="file" name="file" /> 

                    <span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn: Width:500px - Height:500px.</span>

                    <br /><br />

                </div>

				

				



<!-- 

                 <?php if ($_REQUEST['act']=='edit_cat1'){?>

                <div class="col-md-2"><label>Hình hiện tại</label></div>

                <div class="col-md-10"><img src="<?=_upload_sanpham.$item['hinhnho']?>"  width="600px" /><br /><br /></div>

                <?php }?>

                <div class="clearfix"></div>

                <div class="col-md-2"><label>Banner danh mục</label></div>

                <div class="col-md-10">

                  <input type="file" name="file1" /> 

                    <span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn: Width:900px - Height:350px.</span>

                    <br /><br />

                </div> -->

				

                <div class="col-md-2"><label>Danh mục cấp 1 </label></div>

                <div class="col-md-10"><?=get_main_category($item['id_cat']);?></div>

                
                  <div class="col-md-2"><label>URL tùy chỉnh</label></div>
                       <div class="col-md-10"><input  type="text" name="tenkhongdau_vi" id="tenkhongdau_vi" value="<?=$item['tenkhongdau_vi']?>" placeholder="URL" /></div>

                <div class="col-md-2"></div>

                <div class="col-md-10"><input type="checkbox" name="hienthi" class="icheck-blue" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?> /> <span class="hienthi_text">Hiển thị</span></div>

                  <!-- PHẦN DƯỚI LÀ DÀNH CHO NỘI DUNG ĐA NGÔN NGỮ-->

                

                         <ul class="nav nav-tabs">

      





                     <?php

                        foreach ($config["lang"] as $key => $value) {

                            # code...

                            $active = '';

                            if ($key == 0) {

                                $active = "active";

                            }



                            echo '<li class="' . $active . '"><a href="#tab' . $value . '" class="clicktab" data-toggle="tab">' . $config["langs"][$value] . '</a></li>';

                        }

                        ?>

                



                </ul>

                <!-- Tabs Navigation End -->





                





                <!-- Tab panes -->

                <div class="tab-content">

                    <?php

                    foreach ($config["lang"] as $key => $value) {

                        # code...

                        $active = '';

                        $active_block = '';

                        if ($key == 0) {



                            $active = "active";

                            $active_block = "style='display:block;'";

                        }

                        ?> 



                  <div class="tab-pane <?=$active?>" id="tab<?= $value ?>">

                      

                       <div class="col-md-2"><label>Tên <?= $config["langs"][$value]?></label></div>

                       <div class="col-md-10"><input type="text" name="ten_<?= $value ?>" id="ten_<?= $value ?>" value="<?=$item['ten_'.$value]?>" placeholder="Tên" /></div>

            

                      



          <!--       <div class="col-md-2"><label>h1 <?=$value?></label></div>

                <div class="col-md-10"><input type="text" name="h1_<?= $value ?>" id="h1_<?= $value ?>" value="<?=$item['h1_'.$value]?>" placeholder="thẻ h1" /></div>

                

                                <div class="col-md-2"><label>h2 <?=$value?></label></div>

                <div class="col-md-10"><input type="text" name="h2_<?= $value ?>" id="h2_<?= $value ?>" value="<?=$item['h2_'.$value]?>" placeholder="thẻ h2" /></div>

                                <div class="col-md-2"><label>h3 <?=$value?></label></div>

                <div class="col-md-10"><input type="text" name="h3_<?= $value ?>" id="h3_<?= $value ?>" value="<?=$item['h3_'.$value]?>" placeholder="thẻ h3" /></div> -->

                 <div class="col-md-2"><label>Title <?=$config["langs"][$value]?></label></div>

                <div class="col-md-10"><input type="text" name="title_<?= $value ?>" id="title_<?= $value ?>" value="<?=$item['title_'.$value]?>" placeholder="Title" /></div>

      

                <div class="col-md-2"><label>Keywords <?=$config["langs"][$value]?></label></div>

                <div class="col-md-10"><textarea name="keywords_<?= $value ?>" cols="50" rows="6" placeholder="Keywords"><?=$item['keywords_'.$value]?></textarea></div>

                <div class="col-md-2"><label>Description <?=$config["langs"][$value]?></label></div>

                <div class="col-md-10"><textarea name="description_<?= $value ?>" cols="50" rows="6" placeholder="Description"><?=$item['description_'.$value]?></textarea></div>   

                  





                  </div>

                  



                    <div class="clearfix"></div>

                  <?php }?>

                </div> 



    <!--END NỘI DUNG ĐA NGÔN NGỮ -->

           <!--       <div class="col-md-2"><label>Kích cỡ size</label></div>

                <div class="col-md-10"><textarea name="mau" cols="50" rows="2" placeholder="Kích cỡ size"><?=$item['mau']?></textarea>



                <span class="description">Ví dụ ảnh TIVI: 550X340=> 550,340</span>

                    <br /><br />

                </div>   --> 

		        		<input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />

                

                <div class="col-md-10 col-md-offset-2">                  

                  <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button>

                  <button type="button" onclick="javascript:window.location='index.php?com=product&act=man_cat1<?=$chuoi_noi_curpage2?>'" class="btn btn-info"><i class="fa fa-share"></i> Thoát</button>

                </div>



                <div class="clearfix"></div>



              </form>



            </div>

          </div>

          <!-- Inline Form End -->

	</div><script type="text/javascript">

  



            $('#ten_vi').keyup(function(){



            var tenkhongdau=$(this).val();

 









                $.ajax({

                  type: "POST",

                  url: "ajax/tenkhongdau.php",

                 data: {'tenkhongdau':tenkhongdau},

                

                  success: function(data){

              

                          



                            $('#tenkhongdau_vi').val(data);



                          }

               });





        })





</script>
