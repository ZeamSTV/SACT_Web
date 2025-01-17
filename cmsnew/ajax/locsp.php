<?php	
	
	@define ( '_lib' , '../lib/');
	

	include_once _lib."config.php";
	include_once _lib."functions.php";
	include_once _lib."library.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);


        @$value=$_POST['value'];
        @$cap1=$_POST['cap1'];
        @$cap2=$_POST['cap2'];
        @$cap3=$_POST['cap3'];

        $sql="select * from #_product where hienthi=1";

        if($value!='')
        {
            $sql.=" and  ten_vi like '%$value%' ";
        }
        if($cap1!=''&& $cap1>0)
        {

            $sql.=" and  id_cat=".$cap1;
        }
        if($cap2!=''&& $cap2>0)
        {

            $sql.=" and  id_cat1=".$cap2;
        }
        if($cap3!=''&& $cap3>0)
        {

            $sql.=" and  id_cat2=".$cap3;
        }


        $d->query($sql);
        $product=$d->result_array();

    

?>



<?php foreach ($product as $k=> $v) {?>




                                             <tr class="<?=($k%2==0)?'bggrey':''?>">
                                                    <td align="center">

                                                        <div class="checkbox-nice">
                                                            <input type="checkbox" name="themsp" data-id="<?=$v['id']?>" id="<?=$v['id']?>" >
                                                            <label for="<?=$v['id']?>">&nbsp;</label>
                                                        </div>
                                                    </td>
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
    

    
    