<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>
<script>
  $(document).ready(function(e) {
        $("#id_cat").change(function(e) {
            var id=$(this).val();
      $.ajax({
        url:'ajax/cat.php',
        type:'get',
        data:'id='+id,
        dataType:'html',
        success:function(data){
          $("#cat1_div").html(data);
       
          
          $("#id_cat1").change(function(e) {
            var id=$(this).val();
            $.ajax({
              url:'ajax/cat1.php',
              type:'get',
              data:'id='+id,
              dataType:'html',
              success:function(data){
                $("#cat2_div").html(data);  
            

              }
            });
          });
          
        }
      });
        });
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
        }
      });
        });
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

                    $("#id_cat3").change(function(e) {
                              var id=$(this).val();
                              $.ajax({
                                url:'ajax/cat3.php',
                                type:'get',
                                data:'id='+id,
                                dataType:'html',
                                success:function(data){
                                  $("#cat3_div").html(data);  
                                  $("#id_cat4").selectbox();  
                                }
                              });
                      });


        
    });
</script>
<style type="text/css">
  

.sx {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    margin-bottom: 20px!important;
}

/* Hide the browser's default radio button */
.sx input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: -1px;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.sx:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.sx input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.sx input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.sx .checkmark:after {
  top: 6px;
  left: 6px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}




#addpromotion .modal-dialog {
    width: 870px;
}
.modal-header {
    background: rgb(248, 103, 47);
    border-radius: 5px 5px 0px 0px;
}
.modal-header h4 {
    font-size: 14px;
    color: #FFF;
    font-weight: 600;
}
.search_bar_input_select {
    position: relative;
}
.product_add_promotion .search_bar_input_select .box {
    margin-bottom: 10px;
    float: left;
    width: 22%;
    box-shadow: none;
    padding-right: 10px;
}
.product_add_promotion .search_bar_input_select .box > span {
    margin-bottom: 10px;
    display: block;
}
.form-control {
    border-radius: 3px;
    background-clip: padding-box;
    border-color: #ddd;
    border-width: 1px;
    box-shadow: none;
    font-size: 13px;
    height: 33px;
}
.search_promotion.btn.btn-danger {
    margin-top: 0px!important;
}
.btn.btn-danger {
    background: #ff795f;
    color: #FFF;
    font-size: 13px;
    border: 0;
    border-top: 2px #ff502e solid;
}
.product_add_promotion .list_item {
    max-height: 300px;
    overflow-y: scroll;
}
.product_add_promotion .table {
    border: 1px solid #ddd;
}
.checkbox-nice
{
  text-align: center;
}
.checkbox-nice input[type=checkbox] {
    visibility: hidden;
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
}
.checkbox-nice label {
    padding-top: 3px;
    cursor: pointer;
    position: relative;
    padding-left: 28px;
    line-height: 26px;
}
 .checkbox-nice label:before {
        cursor: pointer;
        position: absolute;
        width: 20px;
        height: 20px;
        left: 1px;
        top: 6px;
        background: #ffffff;
        content: "";
        border: 1px solid #c7c7c7;
        border-radius: 3px;
        background-clip: padding-box;
    }

    .checkbox-nice label:after {
        opacity: 0;
        content: '';
        position: absolute;
        width: 12px;
        height: 7px;
        background: transparent;
        top: 11px;
        left: 6px;
        border: 3px solid #f4786e;
        border-top: none;
        border-right: none;
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
    }

    .checkbox-nice label:hover::after {
        opacity: 0.3;
    }

    .checkbox-nice input[type=checkbox]:checked + label:after {
        opacity: 1;
    }
    .listproinpromotion .table {
    border: 1px solid #ddd;
    margin-top: 10px;
}
.listproinpromotion .grid_data .table>thead>tr>th {
    vertical-align: middle;
}
.table tbody tr:nth-child(even) {
    background-color: #EDF3F3;
}
/*    table tbody tr.bggrey {
    background: #eee;
}*/

#showsanphamdathem tr td
{
  vertical-align: middle;
}
</style>


<!-- Breadcrumbs Start -->
  <div class="row breadcrumbs">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <ul class="breadcrumbs">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="index.php?com=khuyenmai&act=man" title="Email đăng ký">Tạo khuyến mãi mới</a></li>
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
        
              <!-- Title Bar End -->
			              
              <form method="post" name="frm" id="frmKM" action="index.php?com=khuyenmai&act=save<?=$chuoi_noi_curpage?>" enctype="multipart/form-data" class="basic-form inline-form">                             
                


                  <?php if ($_REQUEST['act']=='edit'){?>
                <div class="col-md-2"><label>Hình hiện tại</label></div>
                <div class="col-md-10"><img src="<?=_upload_khuyenmai.$item['photo']?>"  width="274" alt="NO PHOTO" /><br /><br /></div>
                <?php }?>

                 <div class="clearfix"></div>
                <div class="col-md-2"><label>Hình ảnh chính</label></div>
                <div class="col-md-10">
        
                  <input type="file"  name="file"  /> 
                    <span class="description">Type: .jpg|.gif|.png|.jpeg &nbsp;&nbsp;;&nbsp;&nbsp; Ảnh chuẩn:  Width:300px - Height:300px.</span>
                    <br /><br />
                </div>
                <div class="col-md-2"><label>Tên chương trình</label></div>
                <div class="col-md-10"><input type="text" id="tieude" name="tieude" value="<?=$item['tieude']?>"  /></div>


                 <div class="col-md-2"><label></label></div>
                <div class="col-md-10">
                  
                   

                        <label class="sx">Giảm giá theo %
                        <input style="width: auto;" type="radio"   <?=($item['loaigiam']==1)?'checked="checked"':''?> value="1" name="loaigiam">
                        <span class="checkmark"></span>
                      </label>
                      <label class="sx">Giảm giá theo số tiền
                        <input style="width: auto;"  type="radio" value="0"  <?=($item['loaigiam']==0)?'checked="checked"':''?> name="loaigiam">
                        <span class="checkmark"></span>
                      </label>
            



                </div>
                

                  <div class="col-md-2"><label>Giá trị </label></div>
                  <div class="col-md-10"><input  type="number" min="0"  name="giatri" id="giatri"  value="<?=$item['giatri']?>"  /></div>
                  <div class="clearfix"></div>
                 <div class="col-md-2"><label>Thời gian bắt đầu </label></div>
                 <div class="col-md-10"><input  type="date" min="0"  name="thoigianbatdau" id="thoigianbatdau" value="<?=$item['thoigianbatdau']?>"  /></div>
                   <div class="col-md-2"><label>Thời gian kết thúc </label></div>
                 <div class="col-md-10"><input  type="date" min="0"  name="thoigianketthuc" id="thoigianketthuc" value="<?=$item['thoigianketthuc']?>"  /></div>

                


                
               <div class="listproinpromotion">

                  <div class="title-bar"> 

                      <div class="col-md-8" style="padding-left:0px; padding-top:7px; padding-bottom:7px;">                 
                  
                        <a id="themsanpham" class="btn btn-success" data-toggle="modal" data-target="#addpromotion"><i class="fa fa-check"></i> Thêm sản phẩm</a> 
                      </div>      
                  </div>

                  <div class="grid_data" style="width: 100%;float: left;">


                      <div class="table-responsive">
                          <table class="table">
                                <thead>
                                    <tr>
                                       <th width="3%">STT</th>
                                        <th width="10%">Sản phẩm</th>
                                        <th width="12%">Mã sản phẩm</th>
                                        <th width="30%">Tên sản phẩm</th>
                                        <th width="12%">Giá bán</th>
                                      
                                        <th width="13%">Giá khuyến mãi</th>
                                        <th width="6%">Giảm(%)</th>
                                        <th width="5%">&nbsp;</th>
                                    </tr>
                                  </thead>
                                  <tbody id="showsanphamdathem">
                                          <?php

                                            $listid= $item['listsp'];
                                          
                                            $mangidkm=explode(',', $item['listsp']);
                                        



                                            if($listid!='') 
                                            {

                                              $sql="select * from #_product where hienthi=1 and id in ($listid)";
                                              $d->query($sql);
                                              $product=$d->result_array();
                                            }
                                            $d->reset();



                                              $giatri=$item['giatri'];
                                              $loaigiam=$item['loaigiam'];
                                            
                                          ?>
                                          <?php 


                                            if(count($product)>0) {
                                              foreach ($product as $k=>$v) {
                                            


                                            ?>

                                              <tr class="<?=($k%2==0)?'bggrey':''?>">
                                                     <td style="vertical-align:middle;text-align: center;" ><?=$k+1?></td>
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


                                                    <?php }  ?>








                                                    <td class="c_align">
                                                        <img src="media/images/delicon.gif" class="xoa1" data-del="<?=$v['id']?>" width="14" height="17" style="cursor:pointer">
                                                    </td>
                                                </tr>


                                            <?php } } ?>


                                  </tbody>
                          </table>
                      </div>





                  </div>


                </div>





                



                  <input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
                  <input type="hidden" name="listsp" id="listsp" value="<?=@$item['listsp']?>" />
                <div class="col-md-10 col-md-offset-2" style="text-align: right;">                  
                       <button type="button" id="btnluukhuyenmai"  class="btn btn-success"><i class="fa fa-check"></i> Lưu</button>
               
                  <button type="button" onclick="javascript:window.location='index.php?com=khuyenmai&act=man<?=$chuoi_noi_curpage?>'" class="btn btn-info"><i class="fa fa-share"></i> Thoát</button>
                </div>
                               
                <div class="clearfix"></div>


              </form>

            </div>
          </div>

        
          <!-- Inline Form End -->
	</div>




<!-- modal -->


<?php

$d>reset();
$sql="select * from #_product_cat where com='cat' order by stt asc, id desc";
$d->query($sql);
$cat=$d->result_array();
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
?>
<div class="col-xs-12">



  <!-- Modal -->
  <div id="addpromotion" class="modal fade"  role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Thêm sản phẩm</h4>
        </div>
        <div class="modal-body">
              <!--noidung-->

                  <div class="product_add_promotion">

                       <div class="search_bar_input_select clearfix">
                              <div class="box">
                                
                                  <input type="text" name="textfield2" id="textfield2" class="fourper form-control"  placeholder="Tên sản phẩm">
                               </div>
                              <div class="box" id="cat_div" >
                             
                                  <select id="id_cat"  class="form-control">
                                      <option value="">Danh mục sản phẩm</option>

                                      <?php foreach ($cat as $v) {?>
                                      <option value="<?=$v['id']?>"><?=$v['ten_vi']?></option>
                                      <?php } ?>
                                  </select>
                              </div>
                              <div class="box" id="cat1_div">
                                
                                      <select id="id_cat1"  class="form-control">
                                      <option value="">Danh mục sản phẩm</option>
                                   
                                      </select>
                              </div>
                              <div class="box" id="cat2_div">
                            
                                  <select id="id_cat2"  class="form-control">
                                      <option value="">Danh mục sản phẩm</option>
                                     
                                      </select>
                              </div>
                              <a class="search_promotion btn btn-danger" id="timkiemsp1" >Tìm kiếm</a>
                        </div>

                        <div class="list_item">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th valign="middle">
                                                <div class="checkbox-nice">
                                                    <input type="checkbox" id="checkbox-23" >
                                                    <label for="checkbox-23">&nbsp;</label>
                                                </div>
                                            </th>


                                            <th valign="middle">Sản phẩm</th>
                                            <th valign="middle">Mã sản phẩm</th>
                                            <th valign="middle">Tên sản phẩm</th>
                                            <th valign="middle">Giá bán</th>
                                            <th valign="middle">Trạng thái</th>
                                            <th valign="middle">Tình trạng</th>
                                        </tr>
                                    </thead>
                                    <tbody id="showsanpham">



                                            <?php

                                                $d->reset();
                                                $sql="select * from #_product where hienthi=1 ";
                                                $d->query($sql);
                                                $product1=$d->result_array();

                                             ?>
                                            <?php foreach ($product1 as $k=> $v) {?>




                                             <tr class="<?=($k%2==0)?'bggrey':''?>">

                                                  <?php if(in_array($v['id'], $mangidkm)) {?>
                                                    <td align="center">

                                                        <div class="checkbox-nice">
                                                            <input type="checkbox" checked="checked" name="themsp" data-id="<?=$v['id']?>" id="<?=$v['id']?>" >
                                                            <label for="<?=$v['id']?>">&nbsp;</label>
                                                        </div>
                                                    </td>


                                                    <?php } else {?>

                                                       <td align="center">

                                                        <div class="checkbox-nice">
                                                            <input type="checkbox" name="themsp" data-id="<?=$v['id']?>" id="<?=$v['id']?>" >
                                                            <label for="<?=$v['id']?>">&nbsp;</label>
                                                        </div>
                                                      </td>


                                                    <?php } ?>
                                                    <td class="c_align">
                                                        <img style="width: 55px" src="../upload/sanpham/<?=$v['photo']?>">
                                                    </td>
                                                    <td ><?=$v['masp']?></td>
                                                    <td ><?=$v['ten_vi']?> </td>
                                                    <td>
                                                        
                                                           <!--  <del class="text-muted" >179,000đ</del> -->
                                                            <b class="center-block text-danger"><?=number_format($v['gia'],0, ',', ',')." đ"?></b>
                                                      
                                                    </td>
                                                    <td>
                                                        <div class="statusproduct">
                                                        
                                                            <span class="daduyet">
                                                                Đã duyệt
                                                            </span>
                                                      
                                                        </div>
                                                    </td>
                                               
                                                    <td align="center">Còn hàng</td>
                                              
                                                </tr>
                                          <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                  </div>

              <!-- end noidung -->
        </div>
        <div class="modal-footer">
        <button class="btn dongy_noicon btn btn-danger btn-sm" id="dongy_noicon" data-dismiss="modal" aria-hidden="true">Đồng ý</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<!-- modal-->













<script type="text/javascript">
  


    $('#btnluukhuyenmai').click(function(){



      var frm = $('#frmKM');
      var tieude = frm.find('#tieude').val();   
      var giatri = frm.find('#giatri').val();
      var thoigianbatdau = frm.find('#thoigianbatdau').val();
      var thoigianketthuc = frm.find('#thoigianketthuc').val();
      if(tieude=='')
      {
        alert('Bạn chưa nhập tên chương trình khuyến mãi');
        return false;
      }
        if(giatri=='')
      {
        alert('Bạn chưa nhập giá trị khuyến mãi');
        return false;
      }

        if(thoigianbatdau=='')
      {
        alert('Bạn chưa nhập thời gian bắt đầu khuyến mãi');
        return false;
      }
       if(thoigianketthuc=='')
      {
        alert('Bạn chưa nhập thời gian kết thúc khuyến mãi');
        return false;
      }
       frm.submit();
            return false;
    });


$('.xoa1').click(function(){
      if(confirm('Bạn có muốn xóa sản phẩm này?')){
  var id=$(this).attr('data-del');

  var idkm='<?=$_GET['id']?>';





       $.ajax({
                        url:'ajax/xoasanpham.php',
                        type:'post',
                        data: {'id':id,'idkm':idkm},
                      
                        success:function(data){
                      
                        

                                 window.location.href = "<?=q_getCurrentPageURL1()?>";
                        }
           });



      }

});








  $('#timkiemsp1').click(function(){




        var value=$('#textfield2').val();
        var cap1=$('#id_cat').val();
        var cap2=$('#id_cat1').val();
        var cap3=$('#id_cat2').val();

         $.ajax({
                        url:'ajax/locsp.php',
                        type:'post',
                        data: {'value':value,'cap1':cap1,'cap2':cap2,'cap3':cap3},
                      
                        success:function(data){
                      
                            $('#showsanpham').html(data);

                        }
           });




    });



$('#dongy_noicon').click(function(){

      var id_quantam='';
            jQuery("input:checkbox[name=themsp]:checked").each(function()
                              {
                                  id_quantam=id_quantam +jQuery(this).attr('data-id')+',';
            });

      

        var listid=id_quantam.substring(0, id_quantam.length - 1);
      var idloaigiam=$('input:radio[name=loaigiam]:checked').val();
      var giatri= $('#giatri').val();

         $.ajax({
                        url:'ajax/themsanpham.php',
                        type:'post',
                        data: {'loaigiam':idloaigiam,'listid':id_quantam,'giatri':giatri},
                      
                        success:function(data){
                      
                            $('#showsanphamdathem').html(data);

                             $('#listsp').val(listid);
                        }
           });
          
});


           

 
//      $("#thoigianbatdau").on('change', function(){
         
//          var date = Date.parse($(this).val());
      
//          var today = new Date();
//          var dd = today.getDate();
//     var mm = today.getMonth()+1; 
//     var yyyy = today.getFullYear();

//     if(dd<10){
//          dd='0'+dd;
//     } 
//     if(mm<10){
//             mm='0'+mm;
//     } 
//     var today1 = yyyy+'-'+mm+'-'+dd;

    
//          if (date < Date.parse(today1)){
//              alert('Vui lòng nhập ngày hợp lệ');
//              $(this).val('');
//          }
         
   
// });


//       $("#thoigianketthuc").on('change', function(){
         
//          var date = Date.parse($(this).val());
//        var date1= Date.parse($('#thoigianbatdau').val());
//          var today = new Date();
//          var dd = today.getDate();
//     var mm = today.getMonth()+1; 
//     var yyyy = today.getFullYear();

//     if(dd<10){
//          dd='0'+dd;
//     } 
//     if(mm<10){
//             mm='0'+mm;
//     } 
//     var today1 = yyyy+'-'+mm+'-'+dd;


//          if (date < Date.parse(today1)||date < date1){
//              alert('Thời gian kết thúc phải lớn hơn hoặc bằng Thời gian hiện tại');
//              $(this).val('');
//          }
      


         
   
// });
</script>