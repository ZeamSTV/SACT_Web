<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>

<!-- Breadcrumbs Start -->
  <div class="row breadcrumbs">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <ul class="breadcrumbs">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="index.php?com=product&act=man_cat4">Danh mục cấp 5</a></li>
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
						$sql="select * from table_product_cat where com='cat' order by stt asc,id desc";
						$stmt=mysql_query($sql);
						$str='
							<select id="id_cat" name="id_cat">
							 <option value="0">Chọn danh mục cấp 1</option>
							';
						while ($row=@mysql_fetch_array($stmt)) 
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
					function get_main_category1($a,$b)
					{
						$sql="select * from table_product_cat where com='cat1' and id_cat=$a order by stt asc,id desc";
						$stmt=mysql_query($sql);
						$str='
							<select id="id_cat1" name="id_cat1">
							 <option value="0">Chọn danh mục cấp 2</option>
							';
						while ($row=@mysql_fetch_array($stmt)) 
						{
							if($row["id"]==(int)@$b)
								$selected="selected";
							else 
								$selected="";
							$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';			
						}
						$str.='</select>';
						return $str;
					}
					function get_main_category2($a,$b)
					{
						$sql="select * from table_product_cat where com='cat2' and id_cat1=$a order by stt asc,id desc";
						$stmt=mysql_query($sql);
						$str='
							<select id="id_cat2" name="id_cat2">
							 <option value="0">Chọn danh mục cấp 3</option>
							';
						while ($row=@mysql_fetch_array($stmt)) 
						{
							if($row["id"]==(int)@$b)
								$selected="selected";
							else 
								$selected="";
							$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';			
						}
						$str.='</select>';
						return $str;
					}
						function get_main_category3($a,$b)
					{
						$sql="select * from table_product_cat where com='cat3' and id_cat2=$a order by stt asc,id desc";
						$stmt=mysql_query($sql);
						$str='
							<select id="id_cat3" name="id_cat3">
							 <option value="0">Chọn danh mục cấp 4</option>
							';
						while ($row=@mysql_fetch_array($stmt)) 
						{
							if($row["id"]==(int)@$b)
								$selected="selected";
							else 
								$selected="";
							$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';			
						}
						$str.='</select>';
						return $str;
					}
					
				?>
                
                <script type="text/javascript">
					$(document).ready(function(e) {
						$("#id_cat").change(function(e) {
							var id=$(this).val();
							$.ajax({
								url:'ajax/cat.php',
								type:'get',
								data:'id='+id,
								dataType:'html',
								success:function(data){
									$("#cat_div").html(data);
									$("#id_cat1").selectbox(); 
										$("#id_cat1").change(function(e) {
										var id=$(this).val();
										$.ajax({
											url:'ajax/cat1.php',
											type:'get',
											data:'id='+id,
											dataType:'html',
											success:function(data){
												$("#cat1_div").html(data);	
												$("#id_cat2").selectbox();  

													$("#id_cat2").change(function(e) {
														var id=$(this).val();
														$.ajax({
															url:'ajax/cat2.php',
															type:'get',
															data:'id='+id,
															dataType:'html',
															success:function(data){
																$("#cat2_div").html(data);	
																$("#id_cat3").selectbox();  

																
															}
														});
													});  	
											}
										});
									});  	
								}
							});
						});


			// 			$("#id_cat1").change(function(e) {
   //          var id=$(this).val();
			// $.ajax({
			// 	url:'ajax/cat1.php',
			// 	type:'get',
			// 	data:'id='+id,
			// 	dataType:'html',
			// 	success:function(data){
			// 		$("#cat1_div").html(data);	
			// 		$("#id_cat2").selectbox();  
			// 	}
			// });
   //      });
					});
				</script>

              <form method="post" name="frm" action="index.php?com=product&act=save_cat4<?=$chuoi_noi_curpage3?>" enctype="multipart/form-data" class="basic-form inline-form">
			  <div class="col-md-2"><label>Số thứ tự</label></div>
                <div class="col-md-10"><input type="text" name="stt" id="stt" value="<?=isset($item['stt'])?$item['stt']:1?>" placeholder="Số thứ tự" /></div>
                <div class="col-md-2"><label>Danh mục cấp 1 </label></div>
                <div class="col-md-10"><?=get_main_category($item['id_cat']);?></div>
                <div class="col-md-2"><label>Danh mục cấp 2 </label></div>
                <div class="col-md-10" id='cat_div'><?=get_main_category1(@$item["id_cat"],$item["id_cat1"]);?></div>
                  <div class="col-md-2"><label>Danh mục cấp 3 </label></div>
                <div class="col-md-10" id='cat1_div'><?=get_main_category2(@$item["id_cat1"],$item["id_cat2"]);?></div>
                 <div class="col-md-2"><label>Danh mục cấp 4 </label></div>
                <div class="col-md-10" id='cat2_div'><?=get_main_category3(@$item["id_cat2"],$item["id_cat3"]);?></div>
                <div class="col-md-2"><label>Tên </label></div>
                <div class="col-md-10"><input type="text" name="ten_vi" id="ten" value="<?=$item['ten_vi']?>" placeholder="Tên" /></div>
                
                <div class="col-md-2"><label>Title</label></div>
                <div class="col-md-10"><input type="text" name="title_vi" id="title_vi" value="<?=$item['title_vi']?>" placeholder="Title" /></div>
                <div class="col-md-2"><label>Keywords</label></div>
                <div class="col-md-10"><textarea name="keywords_vi" cols="50" rows="6" placeholder="Keywords"><?=$item['keywords_vi']?></textarea></div>
                <div class="col-md-2"><label>Description</label></div>
                <div class="col-md-10"><textarea name="description_vi" cols="50" rows="6" placeholder="Description"><?=$item['description_vi']?></textarea></div>   
                
                
                <div class="col-md-2"></div>
                <div class="col-md-10"><input type="checkbox" name="hienthi" class="icheck-blue" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?> /> <span class="hienthi_text">Hiển thị</span></div>
                
                
				<input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
                
                <div class="col-md-10 col-md-offset-2">                  
                  <button type="button" onclick="javascript:document.frm.submit()" class="btn btn-success"><i class="fa fa-check"></i> Lưu</button>
                  <button type="button" onclick="javascript:window.location='index.php?com=product&act=man_cat4<?=$chuoi_noi_curpage3?>'" class="btn btn-info"><i class="fa fa-share"></i> Thoát</button>
                </div>

                <div class="clearfix"></div>

              </form>

            </div>
          </div>
          <!-- Inline Form End -->
	</div>