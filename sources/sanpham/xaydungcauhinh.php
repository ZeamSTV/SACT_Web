<?php  if(!defined('_source')) die("Error");


            $d->reset();
            $sql="select * from #_tin3cap_cat where hienthi=1 and com='cat' order by stt asc, id desc ";
            $d->query($sql);
            $listloc=$d->result_array();
     
            @$loai = intval(trim($_GET['idc']));
            $sql22='';
            if($loai==22)
            {     $stt=1;
                  $step='dau-ghi';
                  $title_chon='Chọn Đầu ghi';

                  if($_SESSION['cauhinh']['camera']!='')
                  {
                        
                        $d->reset();
                        $sql11="select id_cat from #_product where id=".$_SESSION['cauhinh']['camera'];
                        $d->query($sql11);
                        $laycap1=$d->fetch_array();
                        $id_cat=$laycap1['id_cat'];
                        
                        $sql22.=' and id_cat='.$id_cat;


                     
                  }

            }
            if($loai==11)
            {     $stt=2;
                  $step='camera';
                  $title_chon='Chọn Camera';


                  if($_SESSION['cauhinh']['dau-ghi']!='')
                  {
                        
                        $d->reset();
                        $sql11="select id_cat from #_product where id=".$_SESSION['cauhinh']['dau-ghi'];
                        $d->query($sql11);
                        $laycap1=$d->fetch_array();
                        $id_cat=$laycap1['id_cat'];
                        
                        $sql22.=' and id_cat='.$id_cat;


                     
                  }


            }
            if($loai==44)
            {
                 $stt=3;
                  $step='o-cung';
                  $title_chon='Chọn Ổ cứng';
            }
            if($loai==55)
            {
                 $stt=4;
                  $step='phu-kien';
                  $title_chon='Chọn Phụ kiện';
            }



		       $d->reset();	
            $sql1="select  * from #_product where hienthi=1  ";
           


            $sql1.=" and idtheloai=".$loai;

            $sql1.=$sql22;





            $url=getCurrentPageURL();

            $chuoi=parse_url($url);          
            parse_str($chuoi['query'], $mangres);            
            foreach ($mangres as $k => $v ) {

                    if($k==='chuan'){

                
                  
                         $sql1 .= "  and id_cong_suat=".$mangres['chuan'];
                  

                                          
                     }
                     else if($k==='kenh'){

                              $sql1 .= "  and id_so_kenh=".$mangres['kenh'];

                     }


            }
                        





            $sql1.=" order by stt asc, id desc";
	     $d->query($sql1);
	      $xaydungcauhinh=$d->result_array();



        

?>