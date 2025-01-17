<?php  if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die('Eror');

		$d->reset();

    $sql_tintuc = "select ten_$lang from #_tinnho where com=7 order by stt asc, id desc";

    $d->query($sql_tintuc);

    $hopdong = $d->result_array();


    $d->reset();

    $sql_tintuc = "select ten_$lang from #_tinnho where com=8 order by stt asc, id desc";

    $d->query($sql_tintuc);

    $thietke = $d->result_array();
    $d->reset();

    $sql_tintuc = "select ten_$lang from #_tinnho where com=9 order by stt asc, id desc";

    $d->query($sql_tintuc);

    $thicong = $d->result_array();


    $title_bar = _dichvu;		



?>