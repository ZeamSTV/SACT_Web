
 <script src="../../media/js/jquery-3.2.1.min.js"></script>

<script type="text/javascript">
    function ShowMap() {
    if($('#map').html() == '')
    {
        var mapLat = $('#map_lat').val();
        var mapLng = $('#map_lng').val();
        if($('#changedstreet').val() == '1'){
            mapLat = '0';
            mapLng = '0';
        }
        
        InitMap(mapLat, mapLng);        
    }
    $('#map_container').show();
    $('.map_description').hide();
    $('.static_map').hide();
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFAbchViwg96atvE9UxnYuQ8PQ_jMSv5Y" type="text/javascript"></script>





<script src='../../media/js/googlemapforaddproperty.js'></script>
<div class="post-content">

<div class="bando">
   <div class="title"><img src="../../map/img/new.gif"> Bản đồ</div>
   <div id="map_container">
      <div style="padding:5px;color:#d33320; font-weight:bold">Dùng chuột kéo biểu tượng <img style="width:20px" src="../../map/img/home_map.gif"> đến vị trí gần đúng nhất của tài sản để tin của bạn có vị trí cao trên Google.</div>
      <div id="map"></div>
   </div>
   <div class="map_description">Để tăng độ tin cậy và tin rao được nhiều người quan tâm hơn, hãy sửa vị trí tin rao của bạn trên bản đồ bằng cách <a href="javascript:void(0)" class="showmap" onclick="ShowMap()">Chọn lại vị trí bản đồ<span style="font-size:15px;line-height:17px;">✍</span></a></div>
   <div class="static_map"><iframe title="Bản đồ" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?&amp;q=+10.810835922150149,+106.70173710311892&amp;output=embed"></iframe></div>
   <input name="map_lat" type="hidden" id="map_lat" value="0">
   <input name="map_lng" type="hidden" id="map_lng" value="0">
   <input type="hidden" id="matin" name="">
   <input name="map_flag" type="hidden" id="map_flag" class="map-flag" value="3">
   <input name="web_version" type="hidden" id="web_version" class="web-version" value="1">
   <input name="changedstreet" type="hidden" id="changedstreet" class="changedstreet" value="1">
</div>

<a onclick="ShowMapInFrame()">show iframe</a>
</div>


<style type="text/css">
    .post-content #map_container {
    width: 100%;
    height: 435px;
    z-index: 1;
    display: none;
}.post-content .map_description {
    padding: 5px;
    color: #d33320;
    font-weight: 700;
}.post-content .showmap {
    font-weight: 700;
    color: Blue;
    cursor: pointer;
    text-decoration: none;
}.post-content .static_map {
    height: 400px;
    border: 1px solid #DDDDDDD;
    margin: 0;
    position: relative;
}.post-content .static_map iframe {
    width: 100%;
    height: 400px;
}.post-content #map {
    height: 400px;
    border: 1px solid #DDDDDDD;
    margin: 0;
}
</style>




