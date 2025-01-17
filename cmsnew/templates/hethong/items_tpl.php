<?php if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) daysangtranglogin(); ?>

    <script language="javascript">
        function select_onchange()
        {
          var b=document.getElementById("id_cat");
          if(b!=0)
            window.location ="index.php?com=hethong&act=man&id_cat="+b.value+"";  
          else
            window.location ="index.php?com=hethong&act=man"; 
          return true;
        }
        function select_onchange1()
        {
          var b=document.getElementById("id_cat");
          var c=document.getElementById("id_cat1");
          if(c!=0)
            window.location ="index.php?com=hethong&act=man&id_cat="+b.value+"&id_cat1="+c.value+"";  
          else
            window.location ="index.php?com=hethong&act=man&id_cat="+b.value+"";
          return true;
        } 
        function select_onchange2()
        { 
          var b=document.getElementById("id_cat");
          var c=document.getElementById("id_cat1");
          var e=document.getElementById("id_cat2");
          if(e==0)
            window.location ="index.php?com=hethong&act=man&id_cat="+b.value+"&id_cat1="+c.value; 
          else
            window.location ="index.php?com=hethong&act=man&id_cat="+b.value+"&id_cat1="+c.value+"&id_cat2="+e.value; 
          return true;
        }
        function select_onchange3()
        { 
          var b=document.getElementById("id_cat");
          var c=document.getElementById("id_cat1");
          var e=document.getElementById("id_cat2");
          var f=document.getElementById("id_cat3");
          if(f==0)
            window.location ="index.php?com=hethong&act=man&id_cat="+b.value+"&id_cat1="+c.value+"&id_cat2="+e.value; 
          else
            window.location ="index.php?com=hethong&act=man&id_cat="+b.value+"&id_cat1="+c.value+"&id_cat2="+e.value+"&id_cat3="+f.value; 
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
            window.location ="index.php?com=hethong&act=man&id_cat="+b.value+"&id_cat1="+c.value+"&id_cat2="+e.value+"&id_cat3="+f.value; 
          else
            window.location ="index.php?com=hethong&act=man&id_cat="+b.value+"&id_cat1="+c.value+"&id_cat2="+e.value+"&id_cat3="+f.value+"&id_cat4="+g.value; 
          return true;
        }

        
      </script>
<?php 

        function get_main_category()
        {
          global $d;
          $sql="select * from table_hethong_cat where com='cat'  order by stt asc,id desc";
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
        { global $d;
          $sql="select * from table_hethong_cat where com='cat1' and id_cat='".(int)@$_REQUEST["id_cat"]."' order by stt asc,id desc";
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

?>
<section class="content-header">
   <h1>Danh mục <small>Bài viết</small>
      <a href="index.php?com=hethong&act=add<?=$chuoi_noi_curpage1?>" class="btn btn-success btn-flat">
      <i class="fa fa-plus-circle"></i> Thêm mới
      </a>
   </h1>
   <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i>Bảng điều khiển</a></li>
      <li class="active">Danh mục</li>
   </ol>
</section>
<section class="content">
   <div class="row">
      <div class="col-xs-12">
         <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title">Danh sách</h3>
          
            </div>
            <div class="msg"></div>
                    <div class="row" style="margin: 0 -10px">
             
                  <div class="col-md-8" style="padding: 0 10px;margin-top: 15px;">
            
                    <div class="col-md-3 paging_left_10px" style="margin-bottom:10px;">                 
                        <?=get_main_category();?>
                      </div>  
              
               
          
                  </div>
                  <div class="col-md-4 paging_0px" style="padding: 0 10px;margin-top: 15px;margin-bottom: 15px;">  
                      <form action="index.php?com=hethong&act=man<?=$chuoi_noi_curpage?>" method="post" class="inline-form">
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
                    <!--  <th class="cus_td_50">
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
                     </th> -->
                     <th class="cus_td_50">STT</th>
                     <th>Tên</th>

                     <th>Photo</th>
                      <th  class="text-center">Danh mục</th>
                    <!--  <th class="text-center">Nổi bật</th> -->
                     <th class="text-center">Trạng thái</th>
                     <th class="text-center" style="width: 100px">Hành động</th>
                  </tr>

                         <?php 

            if($items&&count($items)!=0){

            foreach($items as $k=>$v){

          ?>
                  <tr class='row_1'>
                     <!-- <td class="text-center"><input type="checkbox" name="id[]" value="1"></td> -->
                     <td class="cus_td_50"><?=$v['stt']?></td>
                      <td>--| <strong><?=$v['ten_vi']?></strong>
                      
                     
                     </td>




                   <td>
                       <a href="index.php?com=hethong&act=edit&id=<?=$v['id']?><?=$chuoi_noi_curpage1?>"><img style="width: 100px" src="<?=_upload_hethong.$v['photo']?>"></a>
                     </td>

                       <td class="text-center">
                      <b class="cap1">Cấp 1: <?php
                    $sql_danhmuc1="select ten_vi from table_hethong_cat where id='".$v['id_cat']."'";
                    $result=mysqli_query($d->db,$sql_danhmuc1);
                    $item_danhmuc1 =mysqli_fetch_array($result);
                    echo @$item_danhmuc1['ten_vi'];
                  ?>
            
                        </b>
                     </td>
              
                     <td class="text-center">
                        <a  class="anhienajax thea" thaydoiloai="hienthi" thaydoitable="table_hethong" thaydoiid="<?=$v['id']?>" id="idcsshienthi<?=$v['id']?>">
                            <?=($v['hienthi']==1)?'<i class="fa fa-check-circle-o"></i> ':'<i class="fa fa-times-circle-o"></i>'?>                     

                         </a>
                     </td>
                     <td class="text-center">
                        <a href="index.php?com=hethong&act=edit&id=<?=$v['id']?><?=$chuoi_noi_curpage1?>" class="btn btn-sm btn-social-icon btn-warning" title="Chỉnh sửa"><i class="fa fa-edit fa-fw"></i></a>
                        <a  href="index.php?com=hethong&act=delete&id=<?=$v['id']?><?=$chuoi_noi_curpage1?>" onClick="if(!confirm('Xác nhận xóa')) return false;" class="btn btn-sm btn-social-icon btn-danger" title="Xóa"><i class="fa fa-trash-o fa-fw"></i></a>
                     </td>
                  </tr>


            <?php } } ?>
               </table>
            </div>
            <div class="box-footer clearfix">
                 <a href="index.php?com=hethong&act=add<?=$chuoi_noi_curpage1?>" class="btn btn-success btn-flat">
                  <i class="fa fa-plus-circle"></i> Thêm mới
                  </a>
            </div>
         </div>
      </div>
   </div>
</section>
