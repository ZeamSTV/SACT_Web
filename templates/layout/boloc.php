 
      <?php if($comcat!='') {

               $d->reset();
            $sql="select ten_vi,id,tenkhongdau_$lang,id_cat from #_product_cat where hienthi=1 and com='cat1' and id_cat=".$id_cat."  order by stt asc, id desc ";

            $d->query($sql);
            $listcap2=$d->result_array();

         ?> 
 <div class="f-filter-tit width_100">
   <div class="sort-list" id="pr-show">




         <?php foreach ($listcap2 as $key => $v) {

               $d->reset();
            $sql="select ten_vi,id,tenkhongdau_$lang,id_cat from #_product_cat where hienthi=1 and com='cat2' and id_cat1=".$v['id']." and id_cat=".$id_cat."  order by stt asc, id desc ";

            $d->query($sql);
            $listcap3=$d->result_array();

            ?>

         <div class="dfilter price">
            <p><?=$v['ten_vi']?><i class="fa fa-sort-down"></i></p>


            <?php if(count($listcap3)>0) {?>
            <ul class="menucon11">


               <?php foreach ($listcap3 as $key1 => $v1) {?>
               <li>
                  <input type="checkbox" id="<?=q_bodautv1($v['ten_vi'])?><?=$key1+1?>" name="<?=q_bodautv1($v['ten_vi'])?>search[]" onclick="searchmenupr()" value="<?=$v1['id']?>"> <label for="<?=q_bodautv1($v['ten_vi'])?><?=$key1+1?>"><span></span><?=$v1['ten_vi']?></label>
               </li>

               <?php } ?>

            </ul>

         <?php } ?>
         </div>







   <?php } ?>



      <div class="f-more-filter" id="myformRadio">
         <label class="btn-filt">Mới nhất
         <input type="radio" name="radiosearch" value="order by id desc" onchange="searchmenupr()">
         <span class="checkmark"></span>
         </label>
         <label class="btn-filt">Giá cao đến thấp
         <input type="radio" name="radiosearch" value="order by gia desc" onchange="searchmenupr()">
         <span class="checkmark"></span>
         </label>
         <label class="btn-filt">Giá thấp đến cao
         <input type="radio" name="radiosearch" value="order by gia asc" onchange="searchmenupr()">
         <span class="checkmark"></span>
         </label>
      </div>
   </div>
  
</div>
      <?php } ?>