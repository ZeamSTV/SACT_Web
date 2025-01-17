<?php	
	
	@define ( '_lib' , '../lib/');
	
 include_once _lib."constant.php";
	include_once _lib."config.php";
	include_once _lib."functions.php";
	include_once _lib."library.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);


    $temp=$_POST['temp'];
    $id=$_POST['id'];
    $d->reset();
    $sql="select hinhdinhkem from table_product where id=".$id;
    $d->query($sql);
    $hinh=$d->fetch_array();

    $chuoi=explode(',', $hinh['hinhdinhkem']);

    for ($i=1; $i < count($chuoi); $i++) { 
        if($chuoi[$i-1]==$temp)
        {
            unset($chuoi[$i-1]);
            $chuoi = array_values($chuoi); 
        }
    }
    $chuoi=implode(',', $chuoi);

    $update="update table_product set hinhdinhkem='$chuoi' where id=".$id;
    $d->query($update);
      $d->reset();
    $sql="select hinhdinhkem from table_product where id=".$id;
    $d->query($sql);
    $hinh1=$d->fetch_array();



?>

<?php


$chuoihinh=explode(',',$hinh1['hinhdinhkem']);
 if($hinh1['hinhdinhkem']!='') {

                        for ($i=1; $i <count($chuoihinh) ; $i++) { ?>
                        <div class="anhdinhkem" style="width: 80px;text-align: center;float: left;border:1px solid #ccc;margin-right: 5px;position: relative;"><img src="<?=_upload_sanpham.$chuoihinh[$i-1]?>"  width="70" style="max-width: 100%" alt="NO PHOTO" />

                            <span data-temp="<?=$chuoihinh[$i-1]?>" class="remove_img">x</span>
                        </div>

                    <?php } }?> 


           <script type="text/javascript">
                    
                    $('.remove_img').click(function(){

                        var temp=$(this).attr('data-temp');
                        var id=<?=$id?>;
                            $.ajax({
                              type: "POST",
                              url: "ajax/xoahinhdinhkem.php",
                             data: {'id':id,'temp':temp},
                            
                              success: function(data){
                          
                                        
                                        // alert('Bạn đã xóa 1 hình đính kèm');
                                        $('#showhinhdinhkem').html(data);

                                 }
                           });
                    })
                </script>