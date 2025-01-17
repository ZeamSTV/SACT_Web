<?php	
	
	@define ( '_lib' , '../lib/');
	

	include_once _lib."config.php";
	include_once _lib."functions.php";
	include_once _lib."library.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);			

	
	$thaydoiloai = $_POST['thaydoiloai'];
	$thaydoitable = $_POST['thaydoitable'];

	$thaydoiid = $_POST['thaydoiid'];
	
    
		$sql_sp = "SELECT id,$thaydoiloai FROM $thaydoitable where id='".$thaydoiid."' ";
		$d->query($sql_sp);
		$cats= $d->fetch_array();
		$spdc1=$cats[$thaydoiloai];
		if($spdc1==0){
			$sqlUPDATE_ORDER = "UPDATE $thaydoitable SET $thaydoiloai = 1 WHERE  id = ".$thaydoiid."";
			$resultUPDATE_ORDER = mysqli_query($d->db,$sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
		}
		else{
			$sqlUPDATE_ORDER = "UPDATE $thaydoitable SET $thaydoiloai = 0  WHERE  id = ".$thaydoiid."";
			$resultUPDATE_ORDER = mysqli_query($d->db,$sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");	
		}	
	
?>
<img src="<?=($spdc1==0)?'media/images/yes-km.gif':'media/images/no-km.gif'?>" border="0" />




  