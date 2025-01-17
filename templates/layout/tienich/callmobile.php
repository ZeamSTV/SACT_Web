
<style type="text/css">
   
.lehieuit-bottom-contact 
{
   display: none;
}
      @media screen and (max-width: 1199px){


.lehieuit-bottom-contact {
    display: block;
    position: fixed;
    bottom: 0;
    background: #fff;
    width: 100%;
    z-index: 99;
    box-shadow: 2px 1px 9px #dedede;
    border-top: 1px solid #eaeaea;
}
.lehieuit-bottom-contact ul li {
    font-size: 72%!important;
    font-weight: 500;
}
.lehieuit-bottom-contact ul li {
    width: 25%;
    float: left;
    list-style: none;
    text-align: center;
    font-size: 13.5px;
}
.lehieuit-bottom-contact ul li img {
    width: 35px;
    margin-top: 10px;
    margin-bottom: 0;
}
.lehieuit-bottom-contact ul li span {
    color: #000;
}
      }
</style>

<div class="lehieuit-bottom-contact">
   <ul>
      <li>
         <a id="goidien" href="tel:<?=$company['dienthoai']?>">
         <img src="img/icon-phone2.png">
         <br>
         <span>Gọi điện</span>
         </a>
      </li>
      <li>
         <a id="nhantin" href="sms:<?=$company['dienthoai']?>">
         <img src="img/icon-sms2.png">
         <br>
         <span>Nhắn tin</span>
         </a>
      </li>
      <li>
         <a id="chatzalo" href="http://zalo.me/<?=$company['hotline']?>" target="_blank">
         <img src="img/icon-zalo2.png">
         <br>
         <span>Chat zalo</span>
         </a>
      </li>
      <li>
         <a id="chatfb" href="<?=$company['chatface']?>" target="_blank">
         <img src="img/icon-mesenger2.png">
         <br>
         <span>Chat Facebook</span>
         </a>
      </li>
   </ul>
</div>