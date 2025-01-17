<?php


	@define ( '_lib' , '../lib/');
	

	include_once _lib."config.php";
	include_once _lib."functions.php";
	include_once _lib."library.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);


	@$id=$_POST['id'];
	@$idkm=$_POST['idkm'];




	$sql="select * from #_khuyenmai where id=".$idkm;
	$d->query($sql);
	$khuyenmai=$d->fetch_array();



	$listid=$khuyenmai['listsp'];
	$listid=explode(',', $listid);




	for ($i=0; $i <count($listid); $i++) { 
	
			if($listid[$i]==$id)
			{
				unset($listid[$i]);
				break;
			}

	}


	$listid=implode(',', $listid);



	$sql1="update table_khuyenmai set listsp='$listid' where id=".$idkm;
	$d->query($sql1);
	

	// $sql2="update table_product set loaikm='' where id=".$id;
	// $d->query($sql2);



	$d->reset();
	$sql="select loaikm,id from #_product where id=".$id;
	$d->query($sql);
	$sp=$d->fetch_array();
		$litskm=$sp['loaikm'];
		$litskm=explode(',', $litskm);
								

	for ($i=0; $i <count($litskm); $i++) { 
									
	if($litskm[$i]==$idkm)
	{
		unset($litskm[$i]);
		break;
	}

	}
	$litskm=implode(',', $litskm);

	$sqlup="update table_product set loaikm='$litskm' where id=".$id;
	$d->query($sqlup);

?>
