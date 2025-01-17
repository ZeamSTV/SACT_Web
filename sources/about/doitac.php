<?php  if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die('Eror');

		$d->reset();

    $sql_tintuc = "select link,photo from #_photo where com='slideshow1' order by stt asc, id desc";

    $d->query($sql_tintuc);

    $doitac = $d->result_array();


    

    $title_bar = _doitac;		



?>