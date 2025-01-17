<?php  if(!defined('_kiemtraweb') || _kiemtraweb!=$check_website) die('Eror');
        $d->reset();
    $sql_tintuc = "select ten_$lang,id from #_congtrinh_cat where hienthi=1  order by stt asc, id desc ";
    $d->query($sql_tintuc);
    $cap1duan = $d->result_array();

    










    if($news['title_$lang']!="")
      $title_bar = $news['title_$lang'];
    if($news['description_$lang']!="")
      $description = $news['description_$lang'];
    if($news['keywords_$lang']!="")
      $keywords = $news['keywords_$lang'];	  
    
    $title_bar = "Dự án - ".$title_bar;		

?>