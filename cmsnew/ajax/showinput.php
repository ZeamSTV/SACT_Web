<?php	
	
	@define ( '_lib' , '../lib/');
	

	include_once _lib."config.php";
	include_once _lib."functions.php";
	include_once _lib."library.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);


    @$listhethong=$_POST['listhethong'];
    @$idsp=$_POST['idsp'];

    $listhethong=explode(',',$listhethong);

    $listhethong1=array();

    for ($i=1; $i <count($listhethong) ; $i++) { 
        $listhethong1[]=$listhethong[$i-1];



    }
    $sql="select * from table_product where id=".$idsp;
    $d->query($sql);

    $listgiahientai=$d->fetch_array();


    $listgia=explode(',', $listgiahientai['listgia']);


    $listgia1=array();
    for ($i=1; $i < count($listgia); $i++) { 
        $listgia1[]=$listgia[$i-1];
    }
    $mangid=array();

   for ($i=0; $i < count($listgia1); $i++) { 
        
            $idgia=explode(':', $listgia1[$i]);

            $mangid[]=$idgia[0];
    }

?>



  <?php   for ($i=0; $i < count($listhethong1); $i++) {

                                $d->reset();
                            $sql="select * from #_hethong_cat where id=".$listhethong1[$i];

                            $d->query($sql);
                            $tenht=$d->fetch_array(); 
   ?>




                            <?php if(in_array($listhethong1[$i], $mangid)) {

                                        



                                ?>



                        <?php for ($j=0; $j <count($listgia1) ; $j++) { 

                            $giacon=explode(':', $listgia1[$j]);
                            if($giacon[0]==$listhethong1[$i])
                            {
                            ?>
                            <div class="col-md-2">

                                    <label>Giá tại  <?=$tenht['ten_vi']?></label>
                            </div>

                            <div class="col-md-10">


                                                               
                                    <input type="text"  name="gia<?=$listhethong1[$i]?>" id="gia" value="<?=$giacon[1]?>" placeholder="Giá tại <?=$tenht['ten_vi']?>" />


                            



                                    

                            </div>

                        <?php } }?>


                            <?php } else { ?>

                                <div class="col-md-2">

                                        <label>Giá tại  <?=$tenht['ten_vi']?></label>
                                </div>

                                <div class="col-md-10">

                                        <input type="text"  name="gia<?=$listhethong1[$i]?>" id="gia" value="" placeholder="Giá tại <?=$tenht['ten_vi']?>" />

                                </div>


                            <?php } ?>





  <?php } ?>