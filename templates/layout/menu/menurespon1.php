<div id="wrap_menu_res">


    
             <a href="#menu" title="Menu" id="hamburger"><span></span></a>


           <nav  id="menu">
              <ul>
               
           


            <li class="active"> <a class="event_tracking" data-cat="Top menu"  title="Trang chủ" href="">Trang chủ</a> </li>
            <?php foreach($cat_main as $v){?>
            <li> <a class="event_tracking"  href="<?=$v['tenkhongdau_vi']?>" title="<?=$v['ten_vi']?>" opa=""><?=$v['ten_vi']?></a> </li>
            <?php } ?>
            <li> <a class="event_tracking"   href="tin-tuc" title="Tin tức" opa="">Tin tức</a> </li>
            <li> <a class="event_tracking"  href="lien-he" title="Liên hệ" opa="">Liên hệ</a> </li>

      </ul>
          </nav>
        

</div>



