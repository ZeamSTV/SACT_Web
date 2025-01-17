<?php	

	

	@define ( '_lib' , '../lib/');

	



	include_once _lib."config.php";

	include_once _lib."functions.php";

        include_once _lib."tridepzai.php";

	include_once _lib."library.php";

	include_once _lib."class.database.php";

	$d = new database($config['database']);







    

    $gia = $_POST['gia'];

    $donvi = $_POST['donvi'];

 

    if($_POST['dientich']==''){



        $dientich=1;

    }

    else

    {

        $dientich = $_POST['dientich'];

    }







    if($donvi==0){



        $data2=0;

    }elseif($donvi==1){





            $data2=$gia*1000000;



    }elseif($donvi==2){



         $data2=$gia*1000000000;



    }elseif($donvi==3){



         $data2=$gia*100000*$dientich;

         





    }else if($donvi==4){



              $data2=$gia*1000000*$dientich;



    }



if($data2==0){

     $data1='Thỏa thuận';

}else

{

     $data1=jam_read_num_forvietnamese($data2);

}



 $result = array('data1' => $data1,'data2'=>$data2);

echo json_encode($result);

    



?>

    

    

 

    