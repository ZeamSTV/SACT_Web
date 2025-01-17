<?php
/**
 * Reference
 * admin/sources/sanpham/product.php:29
 * @var $pageSize integer
 * @var $total integer
 * @var $sort string
 */
?>
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
	if (hoi==true) document.location = "index.php?com=product&act=delete&listid=" + listid + "<?=$chuoi_noi_curpage?>";
});
});
</script>
<!-- Breadcrumbs Start -->
  <div class="row breadcrumbs">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <ul class="breadcrumbs">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="index.php?com=product&act=man">Sản phẩm</a></li>
      </ul>
    </div>
  </div>
  <!-- Breadcrumbs End -->
        
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  	  	<!--<div class="inner" style="margin-bottom:10px;">
            <div class="message-box info">
              <i class="fa fa-exclamation-circle"></i>
              <p>Lưu ý: Sản phẩm nổi bật sẽ hiển thị ngoài trang chủ, có ít nhất 8 Sản phẩm.</p>
            </div>
        </div>-->
        
      <!-- Inline Form Start -->      	      
        <div class="boxed no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="inner">
          	            
            <!-- Title Bar Start -->
            <div class="title-bar">
              <div class="col-md-8" style="padding-left:0px; padding-top:7px; padding-bottom:7px;">                 
              <h4><a href="index.php?com=product&act=add<?=$chuoi_noi_curpage?>" class="btn btn-success"><i class="fa fa-check"></i> Thêm Sản phẩm</a></h4>     
              </div>
              <div class="col-md-4 paging_0px">  
              	<form action="index.php?com=product&act=man<?=$chuoi_noi_curpage?>" method="post" class="inline-form">
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
			  
               <div class="col-md-4 paging_right_10px" style="margin-bottom:10px;">                 
                    <?=get_main_category();?>
                  </div>  
				
			
                 <div class="col-md-4 paging_right_10px" style="margin-bottom:10px;">                 
                    <?=get_main_category1();?>
                  </div> 
			
				
				
			
                   <div class="col-md-4 paging_right_10px" style="margin-bottom:10px;">                 
                    <?=get_main_category2();?>
                  </div>    

                 <!--   <div class="col-md-4 paging_right_10px" style="margin-bottom:10px;">                 
                    <?=get_main_category3();?>
                  </div> 

                   <div class="col-md-4 paging_right_10px" style="margin-bottom:10px;">                 
                    <?=get_main_category4();?>
                  </div> 
 -->

				 
			
              </div>
              <div class="clear"></div>  
            </div>
              <div class="title-bar form-horizontal">
                  <span class="col-md-2 form-control-static paging_0px"><b><?=$total?></b> Sản phẩm</span>
                  <div class="col-md-10 paging_0px">
                      <span class="col-md-1 form-control-static paging_0px">Hiển thị </span>
                      <div class="col-md-3 paging_right_10px">
                          <?=get_pager($pageSize);?>
                      </div>
                      <span class="col-md-1 form-control-static paging_0px">Sắp xếp </span>
                      <div class="col-md-3 paging_right_10px">
                          <?=get_sorter($sort);?>
                      </div>
                  </div>
                  <div class="clear"></div>
              </div>
		
            <!-- Title Bar End -->  
            
            <script language="javascript">
				function select_onchange()
				{
					var b=document.getElementById("id_cat");
					if(b!=0)
						window.location ="index.php?com=product&act=man&id_cat="+b.value+"";	
					else
						window.location ="index.php?com=product&act=man";	
					return true;
				}
				function select_onchange1()
				{
					var b=document.getElementById("id_cat");
					var c=document.getElementById("id_cat1");
					if(c!=0)
						window.location ="index.php?com=product&act=man&id_cat="+b.value+"&id_cat1="+c.value+"";	
					else
						window.location ="index.php?com=product&act=man&id_cat="+b.value+"";
					return true;
				}	
				function select_onchange2()
				{	
					var b=document.getElementById("id_cat");
					var c=document.getElementById("id_cat1");
					var e=document.getElementById("id_cat2");
					if(e==0)
						window.location ="index.php?com=product&act=man&id_cat="+b.value+"&id_cat1="+c.value;	
					else
						window.location ="index.php?com=product&act=man&id_cat="+b.value+"&id_cat1="+c.value+"&id_cat2="+e.value;	
					return true;
				}
				function select_onchange3()
				{	
					var b=document.getElementById("id_cat");
					var c=document.getElementById("id_cat1");
					var e=document.getElementById("id_cat2");
					var f=document.getElementById("id_cat3");
					if(f==0)
						window.location ="index.php?com=product&act=man&id_cat="+b.value+"&id_cat1="+c.value+"&id_cat2="+e.value;	
					else
						window.location ="index.php?com=product&act=man&id_cat="+b.value+"&id_cat1="+c.value+"&id_cat2="+e.value+"&id_cat3="+f.value;	
					return true;
				}
				function select_onchange4()
				{	
					var b=document.getElementById("id_cat");
					var c=document.getElementById("id_cat1");
					var e=document.getElementById("id_cat2");
					var f=document.getElementById("id_cat3");
					var g=document.getElementById("id_cat4");
					if(g==0)
						window.location ="index.php?com=product&act=man&id_cat="+b.value+"&id_cat1="+c.value+"&id_cat2="+e.value+"&id_cat3="+f.value;	
					else
						window.location ="index.php?com=product&act=man&id_cat="+b.value+"&id_cat1="+c.value+"&id_cat2="+e.value+"&id_cat3="+f.value+"&id_cat4="+g.value;	
					return true;
				}

				function pager_onchange() {
				    var pager = document.getElementById("pager");
                    var newURL = updateURLParameter(window.location.href, 'pageSize', pager.value);
                    window.location = newURL;
                    return true;
                }
                function sorter_onchange() {
                    var sorter = document.getElementById("sorter");
                    var newURL = updateURLParameter(window.location.href, 'sort', sorter.value);
                    window.location = newURL;
                    return true;
                }
			</script>
			<?php
			
				function get_main_category()
				{
					$sql="select * from table_product_cat where com='cat'  order by stt asc,id desc";
					$stmt=mysql_query($sql);
					$str='
						<select id="id_cat" name="id_cat" onchange="select_onchange()">
						 <option value="0">Chọn danh mục cấp 1</option>
						';
					while ($row=@mysql_fetch_array($stmt)) 
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
					$sql="select * from table_product_cat where com='cat1' and id_cat='".(int)@$_REQUEST["id_cat"]."' order by stt asc,id desc";
					$stmt=mysql_query($sql);
					$str='
						<select id="id_cat1" name="id_cat1" onchange="select_onchange1()">
						 <option value="0">Chọn danh mục cấp 2</option>
						';
					while ($row=@mysql_fetch_array($stmt)) 
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
					$sql_huyen="select * from table_product_cat where com='cat2' and id_cat1='".intval($_REQUEST['id_cat1'])."' ORDER BY stt asc, id DESC";
					$result=mysql_query($sql_huyen);
					$str='
						<select id="id_cat2" name="id_cat2" onchange="select_onchange2()" >
						<option>Chọn danh mục cấp 3</option>	
						';
					while ($row_huyen=@mysql_fetch_array($result)) 
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
					function get_main_category3()
				{
					$sql_huyen="select * from table_product_cat where com='cat3' and id_cat2='".intval($_REQUEST['id_cat2'])."' ORDER BY stt asc, id DESC";
					$result=mysql_query($sql_huyen);
					$str='
						<select id="id_cat3" name="id_cat3" onchange="select_onchange3()" >
						<option>Chọn danh mục cấp 4</option>	
						';
					while ($row_huyen=@mysql_fetch_array($result)) 
					{
						if($row_huyen["id"]==(int)@$_REQUEST["id_cat3"])
							$selected="selected";
						else 
							$selected="";
						$str.='<option value='.$row_huyen["id"].' '.$selected.'>'.$row_huyen["ten_vi"].'</option>';			
					}
					$str.='</select>';
					return $str;
				}

					function get_main_category4()
				{
					$sql_huyen="select * from table_product_cat where com='cat4' and id_cat3='".intval($_REQUEST['id_cat3'])."' ORDER BY stt asc, id DESC";
					$result=mysql_query($sql_huyen);
					$str='
						<select id="id_cat4" name="id_cat4" onchange="select_onchange4()" >
						<option>Chọn danh mục cấp 5</option>	
						';
					while ($row_huyen=@mysql_fetch_array($result)) 
					{
						if($row_huyen["id"]==(int)@$_REQUEST["id_cat4"])
							$selected="selected";
						else 
							$selected="";
						$str.='<option value='.$row_huyen["id"].' '.$selected.'>'.$row_huyen["ten_vi"].'</option>';			
					}
					$str.='</select>';
					return $str;
				}

				function get_pager($pageSize) {
				    $pagers = [20, 50, 100, 200];
                    $content = '';
                    foreach ($pagers as $pager) {
                        $selected = $pageSize == $pager ? 'selected' : '';
                        $content .= "<option value='$pager' $selected>$pager</option>";
                    }
				    return "<select id='pager' name='pager' onchange='pager_onchange()'>$content</select>";
                }

                function get_sorter($sortKey) {
                    $sorters = [
                        'gia_asc' => 'Giá thấp đến cao',
                        'gia_desc' => 'Giá cao đến thấp',
                        'ten_asc' => 'Tên sản phẩm A-Z',
                        'ten_desc' => 'Tên sản phẩm Z-A',
                    ];
                    $content = '<option value="">Thứ tự</option>';
                    foreach ($sorters as $key => $sorter) {
                        $selected = $sortKey == $key ? 'selected' : '';
                        $content .= "<option value='$key' $selected>$sorter</option>";
                    }
                    return "<select id='sorter' name='sorter' onchange='sorter_onchange()'>$content</select>";
                }
			?>                     
            
            <!-- Table Holder Start -->
            <div class="table-holder">                            
              <table class="stripe-rows" cellspacing="0" cellpadding="0" width="100%" border="1">   
                <thead>
                  <th style="width:3%;"><input type="checkbox" name="chonhet" id="chonhet" /></th>
                  <th style="width:5%;">STT</th>
				  <th >Xem </th>
                  <th style="width:20%;">
                    Cấp 1 / Cấp 2 / Cấp 3 
                  </th>
			
                  <th style="width:76px;">Ảnh đại diện</th>
                  <th>Tên</th>
           
       <!--     	 <th style="width:5%;">Photo</th> -->
               	 <th style="width:5%;">Photo color</th>
              
				
                 <th style="width:5%;">Bán chạy </th>
				 
           <th style="width:5%;">Hot </th>
			

				
           
                  <th style="width:5%;">Deals</th>
				 <th style="width:5%;">Nổi bật</th>
				    -<th style="width:5%;">Mới</th>
	<!-- 			<th style="width:5%;">Tình trạng</th> -->
                  <th style="width:5%;">Hiển<br />thị</th>
                  <th style="width:5%;">Sửa</th>
                  <th style="width:5%;">Xóa</th>
                </thead>
                <tbody>
                  <?php 
				  	if(count($items)!=0){
						foreach($items as $k=>$v){
				  ?>
                  <tr>
                    <td style="width:3%;"><input type="checkbox" name="chon" id="chon" value="<?=$v['id']?>" /></td>
                    <td style="width:5%;"><?=$v['stt']?></td>
                          <td style="width:5%;"><a target="blank" href="../<?=$v['tenkhongdau_vi']?>-<?=$v['id']?>.htm"><i class="fa fa-eye"></i></a></td>
					
        <td style=" width:25%;">
                    	<b class="cap1">Cấp 1: <?php
							$sql_danhmuc1="select ten_vi from table_product_cat where id='".$v['id_cat']."'";
							$result=mysql_query($sql_danhmuc1);
							$item_danhmuc1 =mysql_fetch_array($result);
							echo @$item_danhmuc1['ten_vi'];
						?>
						
                        </b><br />
		
                        <b class="cap2">Cấp 2: <?php
							$sql_danhmuc1="select ten_vi from table_product_cat where id='".$v['id_cat1']."'";
							$result=mysql_query($sql_danhmuc1);
							$item_danhmuc1 =mysql_fetch_array($result);
							echo @$item_danhmuc1['ten_vi'];
						?>
                        </b><br />
				
						                        <b class="cap3">Cấp 3: <?php
							$sql_danhmuc1="select ten_vi from table_product_cat where id='".$v['id_cat2']."'";
							$result=mysql_query($sql_danhmuc1);
							$item_danhmuc1 =mysql_fetch_array($result);
							echo @$item_danhmuc1['ten_vi'];
						?>
                        </b>
                        <!-- <br />
				
						                        <b  style="    color: green;">Cấp 4: <?php
							$sql_danhmuc1="select ten_vi from table_product_cat where id='".$v['id_cat3']."'";
							$result=mysql_query($sql_danhmuc1);
							$item_danhmuc1 =mysql_fetch_array($result);
							echo @$item_danhmuc1['ten_vi'];
						?>
                        </b>
                        <br />
				
						                        <b style="color: #d49200">Cấp 5: <?php
							$sql_danhmuc1="select ten_vi from table_product_cat where id='".$v['id_cat4']."'";
							$result=mysql_query($sql_danhmuc1);
							$item_danhmuc1 =mysql_fetch_array($result);
							echo @$item_danhmuc1['ten_vi'];
						?>
                        </b> -->
				
                    </td> 
					
                    <td style="width:76px;"><a href="index.php?com=product&act=edit&id=<?=$v['id']?><?=$chuoi_noi_curpage?>" style="text-decoration:none;"><img src="<?=_upload_sanpham.$v['photo']?>" border="1" class="sp_img" /></a></td> 
                 
                    <td><a href="index.php?com=product&act=edit&id=<?=$v['id']?><?=$chuoi_noi_curpage?>" style="text-decoration:none;"><?=$v['ten_vi']?></a></td>
                 
                    <!-- <td style="width:5%;"><a href="index.php?com=product&act=man_photo&id_cat=<?=$v['id']?>"><i class="fa fa-plus"></i> Add</a></td> -->
              
                    <?php if($v['mausac']!='') {?>
                    <td style="width:5%;"><a href="index.php?com=product&act=mancolor_photo&id_cat=<?=$v['id']?>"><i class="fa fa-plus"></i> Add</a></td>
              		<?php } else {?>

              			 <td style="width:5%;"><a style="color:#ccc"><i class="fa fa-plus"></i> Add</a></td>


              		<?php } ?>


					   <td style="width:5%;"><a class="clickchange" thaydoiloai="spbanchay"   thaydoitable="table_product"  thaydoiid="<?=$v['id']?>" id="idcssspbanchay<?=$v['id']?>"><img src="<?=($v['spbanchay']==1)?'media/images/yes-km.gif':'media/images/no-km.gif'?>" border="0" /></a></td>  
					
        
    <td style="width:5%;"><a class="clickchange" thaydoiloai="hot"   thaydoitable="table_product"  thaydoiid="<?=$v['id']?>" id="idcsshot<?=$v['id']?>" ><img src="<?=($v['hot']==1)?'media/images/yes-km.gif':'media/images/no-km.gif'?>" border="0" /></a></td> 
	  
        <td style="width:5%;"><a   class="clickchange" thaydoiloai="sale"   thaydoitable="table_product"  thaydoiid="<?=$v['id']?>" id="idcsssale<?=$v['id']?>"><img src="<?=($v['sale']==1)?'media/images/yes-km.gif':'media/images/no-km.gif'?>" border="0" /></a></td>  

			 <td style="width:5%;"><a class="clickchange" thaydoiloai="noibat"   thaydoitable="table_product"  thaydoiid="<?=$v['id']?>" id="idcssnoibat<?=$v['id']?>" ><img src="<?=($v['noibat']==1)?'media/images/yes-km.gif':'media/images/no-km.gif'?>" border="0" /></a></td> 
             
                 
				 <td style="width:5%;"><a class="clickchange" thaydoiloai="spmoi"   thaydoitable="table_product"  thaydoiid="<?=$v['id']?>" id="idcssspmoi<?=$v['id']?>"><img src="<?=($v['spmoi']==1)?'media/images/yes-km.gif':'media/images/no-km.gif'?>" border="0" /></a></td>
               


                   <!--   <td style="width:5%;"><a   class="clickchange" thaydoiloai="tinhtrang"   thaydoitable="table_product"  thaydoiid="<?=$v['id']?>" id="idcsssale<?=$v['id']?>"><img src="<?=($v['tinhtrang']==1)?'media/images/yes-km.gif':'media/images/no-km.gif'?>" border="0" /></a></td>  -->
					 
                    <td style="width:5%;"><a class="clickhienthi" thaydoiloai="hienthi"   thaydoitable="table_product"  thaydoiid="<?=$v['id']?>" id="idcsshienthi<?=$v['id']?>" >  <img src="<?=($v['hienthi']==1)?'media/images/active_1.png':'media/images/active_0.png'?>" border="0" /></a></td>
                    <td style="width:5%;"><a href="index.php?com=product&act=edit&id=<?=$v['id']?><?=$chuoi_noi_curpage?>"><img src="media/images/edit.png" border="0" title="Sửa" /></a></td>
                    <td style="width:5%;"><a href="index.php?com=product&act=delete&id=<?=$v['id']?><?=$chuoi_noi_curpage?>" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="media/images/delete.png" border="0" title="Xóa" /></a></td>                                        
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
                 <a href="index.php?com=product&act=add<?=$chuoi_noi_curpage?>" class="btn btn-success"><i class="fa fa-check"></i> Thêm Sản phẩm</a>
                  <a href="index.php?com=product&act=man" class="btn btn-info"><i class="fa fa-share"></i> Thoát</a> 
                  
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
<script type="text/javascript">
    function updateURLParameter(url, param, paramVal){
        var newAdditionalURL = "";
        var tempArray = url.split("?");
        var baseURL = tempArray[0];
        var additionalURL = tempArray[1];
        var temp = "";
        if (additionalURL) {
            tempArray = additionalURL.split("&");
            for (var i=0; i<tempArray.length; i++){
                if(tempArray[i].split('=')[0] != param){
                    newAdditionalURL += temp + tempArray[i];
                    temp = "&";
                }
            }
        }

        var rows_txt = temp + "" + param + "=" + paramVal;
        return baseURL + "?" + newAdditionalURL + rows_txt;
    }
</script>