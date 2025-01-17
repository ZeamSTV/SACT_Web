<?php  if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die('Eror');

		$d->reset();

    $sql_tintuc = "select title_$lang,keywords_$lang,description_$lang,noidung_$lang,mota_$lang,photo,photo1,photo2,h2_$lang from #_about where com=3 limit 0,1";

    $d->query($sql_tintuc);

    $news = $d->fetch_array();



    



















  
        $d->reset();

        $sql= "select photo,link from #_photo where hienthi=1 and id=411 ";

        $d->query($sql);

        $bannermuc = $d->fetch_array();
          

    if($news['title_$lang']!="")

      $title_bar = $news['title_$lang'];

    if($news['description_$lang']!="")

      $description = $news['description_$lang'];

    if($news['keywords_$lang']!="")

      $keywords = $news['keywords_$lang'];	  

    

    $title_bar = _gioithieu;		



?>