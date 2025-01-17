<style>
.face_goo{
	width:100%;float:left
}
.facebook_like,.google,.twetter{
	float:left;
	display:inlineblock;
	margin-right:5px;
	margin-top:0px;
	width:100px;
}
</style>
						<div class='face_goo'>
                        	<div class="facebook_like">
                            	<div id="fb-root"></div>
								<script>(function(d, s, id) {
                                  var js, fjs = d.getElementsByTagName(s)[0];
                                  if (d.getElementById(id)) return;
                                  js = d.createElement(s); js.id = id;
                                  js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
                                  fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                                <div class="fb-like" data-href="<?=q_getCurrentPageURL()?>" data-width="130" data-layout="button_count" data-show-faces="false" data-send="true"></div>
                            </div>
                            <div class="google">
                            	<!-- Đặt thẻ này vào phần đầu hoặc ngay trước thẻ đóng phần nội dung của bạn. -->
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'vi'}
</script>

                                <!-- Đặt thẻ này vào nơi bạn muốn Nút +1 kết xuất. -->
                                <div class="g-plusone" data-size="medium" data-annotation="none" data-href="<?=q_getCurrentPageURL()?>"></div>
                            </div>                           
                            <div class="twetter">
                            	<!-- AddThis Button BEGIN -->
                                <div class="addthis_toolbox addthis_default_style" style="float:right;">               
                                <a class="addthis_button_tweet"></a>               
                                <!--<a class="addthis_counter addthis_pill_style"></a>-->
                                </div>
                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=undefined"></script>
                            </div>
                            <div class="clear"></div>
                        </div>