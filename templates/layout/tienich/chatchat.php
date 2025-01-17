<style type="text/css">
  
  #chatchat1 {
    width: 236px;
    height: 112px;
    position: fixed;
    bottom: 1px;
    right: 4px;
    background: url(img/chiduong.png) no-repeat center;
    background-clip: padding-box;
    min-height: 100px;
}
#chatchat1 ul{margin:0px;padding:0px; list-style:none; margin-top:35px;}
#chatchat1 ul li{width:100%;float:left;height:auto;position:relative;text-align:center;}
#chatchat1 ul li a
{
  color: #fff;
  font-size: 12px;
  font-family: UTM_Avo;
  font-weight: bold;
}
#chatchat1 ul li:hover a{color:#fff}  
#chatchat1 ul li:hover a i{color:#fff}
#chatchat1 ul li:hover a span{color:#fff}
/*#chatchat1 ul li ul{padding:0px;margin:0px; display:none;position:absolute;bottom:32px;right:-39px;}
#chatchat1 ul li a span{color:#fff;font-size:12px;float:right;text-transform:uppercase;width:100px;text-align:left;margin-left:10px}
*/
</style>
 <div id="chatchat1">
  

    <ul><?php 
          $d->reset();
          $sql="select * from #_tinnho where com=4 and hienthi=1 ";
          $d->query($sql);
          $chiduong = $d->fetch_array();
          ?>
      <li><a target="_blank" href="<?=$chiduong['noidung']?>"><img src="img/iconmap.png"> <span>Chỉ đường</span></a>
        
      </li> 
      <li><a href="tel:<?=$company['dienthoai']?>"><img src="img/iconphone.png"> <span>Gọi hỗ trợ</span></a></li>
      <li><a target="_blank" href="<?=$company['chatface']?>"><img src="img/iconchatface.png"><span>Inbox facebook</span></a></li>
    </ul>
</div> 