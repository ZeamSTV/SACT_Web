<?php	

	

	@define ( '_lib' , '../lib/');

	



	include_once _lib."config.php";

	include_once _lib."functions.php";

	include_once _lib."library.php";

	include_once _lib."class.database.php";

	$d = new database($config['database']);


if($_POST['listcat1']!='') {

    $listcat1=$_POST['listcat1'];


    $listcat1=explode(',', $listcat1);
    array_pop($listcat1);
    $listcat1=implode(',', $listcat1);
    $idsp=$_POST['idsp'];
    $sql = "select * from table_product_cat where com='cat1' and id in (".$listcat1.") order by stt asc,id desc";
     $d->query($sql);    

    $cat2= $d->result_array();      





if($idsp!=''){


$d->reset();
$sql = "select * from table_product where id=".$idsp;
     $d->query($sql);    

    $item_sp= $d->fetch_array();  

    $id_cat2=$item_sp['id_cat2'];
    $id_cat2=explode(',', $id_cat2);
?>

        
<?php foreach ($cat2 as $key => $v) {

        $d->reset();
        $sql = "select * from table_product_cat where com='cat2' and id_cat1 =".$v['id']." order by stt asc,id desc";
         $d->query($sql);    

        $cat3= $d->result_array();      

    ?> 
 


    <div class="col-md-2">
            <label><?=$v['ten_vi']?></label>
    </div>

    <div class="col-md-10">
    <select name="id_cat2[]" class="form-control">



            <option value="">Chọn <?=$v['ten_vi']?></option>


               <?php foreach ($cat3 as $key1 => $v1) {?>

                    <?php if(in_array($v1['id'],$id_cat2)){?>
                    <option selected value="<?=$v1['id']?>"><?=$v1['ten_vi']?></option>

                <?php } else {?>


                    <option value="<?=$v1['id']?>"><?=$v1['ten_vi']?></option>
                <?php } ?>

            <?php } ?>


    </select>

    </div>

  <div class="clearfix"></div>


<?php } ?>




<?php } else {?>



<?php foreach ($cat2 as $key => $v) {

        $d->reset();
        $sql = "select * from table_product_cat where com='cat2' and id_cat1 =".$v['id']." order by stt asc,id desc";
         $d->query($sql);    

        $cat3= $d->result_array();      

    ?> 


    <div class="col-md-2">
            <label><?=$v['ten_vi']?></label>
    </div>

    <div class="col-md-10">
    <select name="id_cat2[]" class="form-control">



            <option value="">Chọn <?=$v['ten_vi']?></option>


            <?php foreach ($cat3 as $key1 => $v1) {?>


                    <option value="<?=$v1['id']?>"><?=$v1['ten_vi']?></option>

            <?php } ?>

    </select>

    </div>

  <div class="clearfix"></div>

<?php } ?>


<?php } ?>
    

   
<?php } ?> 