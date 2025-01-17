<?php  if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die('Eror');

		$d->reset();

    $sql_tintuc = "select * from #_tin3cap where hienthi=1 order by stt asc";

    $d->query($sql_tintuc);

    $danhsachbando = $d->result_array();


    

    $title_bar = "Hệ thống phân phối";		



?>