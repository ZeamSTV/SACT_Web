
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

				
			</script>
<?php 

				function get_main_category()
				{	
					global $d;
					$sql="select * from table_product_cat where com='cat'  order by stt asc,id desc";
					$stmt=mysqli_query($d->db,$sql);
					$str='
						<select id="id_cat" name="id_cat"  class="form-control select2" style="width: 100%;" onchange="select_onchange()">
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
				{global $d;
					$sql="select * from table_product_cat where com='cat1' and id_cat='".(int)@$_REQUEST["id_cat"]."' order by stt asc,id desc";
					$stmt=mysqli_query($d->db,$sql);
					$str='
						<select id="id_cat1" name="id_cat1" class="form-control select2" onchange="select_onchange1()">
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
				{global $d;
					$sql_huyen="select * from table_product_cat where com='cat2' and id_cat1='".intval($_REQUEST['id_cat1'])."' ORDER BY stt asc, id DESC";
					$result=mysqli_query($d->db,$sql_huyen);
					$str='
						<select id="id_cat2" name="id_cat2" class="form-control select2" onchange="select_onchange2()" >
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
<section class="content-header">
   <h1> <small>Sản phẩm</small>
      <a href="index.php?com=product&act=add<?=$chuoi_noi_curpage1?>" class="btn btn-success btn-flat">
      <i class="fa fa-plus-circle"></i> Thêm mới
      </a>
   </h1>
   <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i>Bảng điều khiển</a></li>
      <li class="active">Sản phẩm</li>
   </ol>
</section>
<section class="content">
   <div class="row">
      <div class="col-xs-12">
         <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title">Danh sách</h3>
               (<?=$danhsachsp?>) 
            </div>
            <div class="msg"></div>
            <div class="row" style="margin: 0 -10px">
             
		              <div class="col-md-8" style="padding: 0 10px;margin-top: 15px;">
		              	<div class="col-md-3 paging_left_10px" style="margin-bottom:10px;">                 
		                    <?=get_main_category();?>
		                  </div>  
					  
		             	  
							
		                    <div class="col-md-3 paging_left_10px" style="margin-bottom:10px;">                 
		                    <?=get_main_category1();?>
		                  </div>  
						 <!-- 
							    <div class="col-md-3 paging_left_10px" style="margin-bottom:10px;">                 
		                    <?=get_main_category2();?>
		                  </div>   -->
		              </div>
		              <div class="col-md-4 paging_0px" style="padding: 0 10px;margin-top: 15px;">  
			              	<form action="index.php?com=product&act=man<?=$chuoi_noi_curpage?>" method="post" class="inline-form">
			                	<div id="timkiem_khung">
			                    	<input type="text" name="search" id='search' value="<?=@$_REQUEST['search']?>" placeholder="Nhập tên cần tìm ..." class='timkiem_input' />
			                        <input type="image" name="btnSearch" src="media/images/search-focus.png" value="Tìm kiếm" id='nut_timkiem' />
			                    </div>                    
			                </form>
			           </div>
     
            </div>
              



            <div class="box-body table-responsive no-padding mailbox-messages">
               <table class="table table-hover cus_text_mid">
                  <tr class="btn-default">
                   
                                  <th class="cus_td_50" style="width:3%;"><input type="checkbox" name="chonhet" id="chonhet" /></th>
                     <th class="cus_td_50">STT</th>
                     <th class="text-center" style="width: 100px;">Photo</th>
                     <th class="text-center" width="30%">Tên</th>
                     <th class="text-center"> Cấp 1 / Cấp 2<!--  / Cấp 3 --> </th>
                     <th class="text-center">Nổi bật</th>
           <!--            <th class="text-center">Còn hàng</th> -->
                     <th class="text-center">Trạng thái</th>
                     <th class="text-center" style="width: 100px">Hành động</th>
                  </tr>

                         <?php 

            if($items&&count($items)!=0){

            foreach($items as $k=>$v){

          ?>
                  <tr class='row_1'>
                     <td class="text-center"><input type="checkbox"  name="chon" id="chon" value="<?=$v['id']?>"></td>
                     <td class="cus_td_50"><?=$v['stt']?></td>
                      <td style="width:76px;"><a href="index.php?com=product&act=edit&id=<?=$v['id']?><?=$chuoi_noi_curpage?>" style="text-decoration:none;"><img src="<?=_upload_sanpham.$v['photo']?>" border="1" class="sp_img" /></a></td> 
                      <td>--| <strong><?=$v['ten_vi']?></strong>
                      
                        <a target="_blank" href="../vi/<?=$v['tenkhongdau_vi']?>" class="cus_view_flast"><i class="fa fa-eye"></i> Xem</a>
                     </td>

                     <td >
                     	<b class="cap1">1. <?php
							$sql_danhmuc1="select ten_vi from table_product_cat where id='".$v['id_cat']."'";
							$result=mysqli_query($d->db,$sql_danhmuc1);
							$item_danhmuc1 =mysqli_fetch_array($result);
							echo @$item_danhmuc1['ten_vi'];
						?>
						
                        </b>
		  			<b class="cap2">2. ---- <?php
							$sql_danhmuc1="select ten_vi from table_product_cat where id='".$v['id_cat1']."'";
							$result=mysqli_query($d->db,$sql_danhmuc1);
							$item_danhmuc1 =mysqli_fetch_array($result);
							echo @$item_danhmuc1['ten_vi'];
						?>
                    </b><br /> 
	
                     </td>
                      <td class="text-center">
                       
                         <a class="clickchange thea" thaydoiloai="noibat"   thaydoitable="table_product"  thaydoiid="<?=$v['id']?>" id="idcssspnoibat<?=$v['id']?>">
                            <?=($v['noibat']==1)?'<i class="fa fa-check-circle-o"></i> ':'<i class="fa fa-times-circle-o"></i>'?>              

                         </a>

                     </td> 
    <!--             <td class="text-center">
                       
                         <a class="clickchange thea" thaydoiloai="spmoi"   thaydoitable="table_product"  thaydoiid="<?=$v['id']?>" id="idcssspmoi<?=$v['id']?>">
                            <?=($v['spmoi']==1)?'<i class="fa fa-check-circle-o"></i> ':'<i class="fa fa-times-circle-o"></i>'?>              

                         </a>

                     </td>  -->
                     <td class="text-center">
                        <a  class="anhienajax thea" thaydoiloai="hienthi" thaydoitable="table_product" thaydoiid="<?=$v['id']?>" id="idcsshienthi<?=$v['id']?>">
                            <?=($v['hienthi']==1)?'<i class="fa fa-check-circle-o"></i> ':'<i class="fa fa-times-circle-o"></i>'?>                     

                         </a>
                     </td>
                     <td class="text-center">
                        <a href="index.php?com=product&act=edit&id=<?=$v['id']?><?=$chuoi_noi_curpage1?>" class="btn btn-sm btn-social-icon btn-warning" title="Chỉnh sửa"><i class="fa fa-edit fa-fw"></i></a>
                        <a  href="index.php?com=product&act=delete&id=<?=$v['id']?><?=$chuoi_noi_curpage1?>" onClick="if(!confirm('Xác nhận xóa')) return false;" class="btn btn-sm btn-social-icon btn-danger" title="Xóa"><i class="fa fa-trash-o fa-fw"></i></a>
                     </td>
                  </tr>


            <?php } } ?>
               </table>
            </div>

              <div class="col-md-12 paging_0px" style="margin-top: 15px;">    
                  <div class="paging"><?=$paging['paging']?></div>
                </div>
    
            <div class="box-footer clearfix">
               	  <a href="index.php?com=product&act=add<?=$chuoi_noi_curpage1?>" class="btn btn-success btn-flat">
                  <i class="fa fa-plus-circle"></i> Thêm mới
                  </a>
                  <button type="button" id="xoahet" class="btn  btn-danger btn-flat" url="http://cms.demoiweb247.com/admin/product/del_all">Xóa hết</button>
            </div>
         </div>
      </div>
   </div>
</section>