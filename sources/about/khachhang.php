<?php  if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die('Eror');

		$d->reset();

    $sql_tintuc = "select link,photo,id from #_photo where com='slideshow2' order by stt asc, id desc";

    $d->query($sql_tintuc);

    $khachhang = $d->result_array();


    

    $title_bar = _khachhang;		



?>