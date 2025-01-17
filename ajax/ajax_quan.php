<?php



  session_start();

    error_reporting(E_ALL & ~E_NOTICE & ~8192);

    

    if(!isset($_SESSION['lang']))

    {

    $_SESSION['lang']='vi';

    }

    

    $lang=$_SESSION['lang'];

    

    @define ( '_lib' , '../admin/lib/');

    @define ( '_source' , '../sources/');

    include_once _lib."config.php";

    include_once _lib."constant.php";

    // require_once _source."lang_$lang.php";

    include_once _lib."functions.php";

    include_once _lib."functions_giohang.php";

    include_once _lib."class.database.php";

    $d = new database($config['database']);

  



 $id = $_POST['id'];









    $data ='    <option value="0">Quận/Huyện</option>';

    if($id){

        $d->reset();

        $sql = "select * from table_diadiem_item where id_cat='$id' order by ten_vi asc";

        $d->query($sql);

        $diadiem_cat = $d->result_array();

        

        

        for($i=0;$i<count($diadiem_cat);$i++){

           

            $data .='<option value="'.$diadiem_cat[$i]['id'].'">'.$diadiem_cat[$i]['ten_vi'].'</option>';

        }

    }

    echo $data;

    



?>