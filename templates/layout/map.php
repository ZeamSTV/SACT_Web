
<?php   
        $d->reset();
        $sql = "select * from #_company where com='toado' limit 0,1 ";
    $d->query($sql);
    $company1 = $d->fetch_array();   
        
                        
$toado1 = explode(',', $company1['website']);

 ?>

<div class="bando_tc">
<script language="javascript" src="admin/media/scripts/my_script.js"></script>

        <script>
            var gmap = {lat: <?php echo $toado1[0];?>, lng: <?php echo $toado1[1];?>};
            function initMap() {
                var mapDiv = document.getElementById('map1');
                var map = new google.maps.Map(mapDiv, {
                    center: {lat: <?php echo $toado1[0];?>, lng: <?php echo $toado1[1];?>},
                    zoom: 16,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });
                var styles = [
                    {
                        featureType: 'road.arterial',
                        elementType: 'all',
                        stylers: [
                            {hue: '#fff'},
                            {saturation: 100},
                            {lightness: -48},
                            {visibility: 'on'}
                        ]
                    }, {
                        featureType: 'road',
                        elementType: 'all',
                        stylers: []
                    },
                    {
                        featureType: 'water',
                        elementType: 'geometry.fill',
                        stylers: [
                            {color: '#adc9b8'}
                        ]
                    }, {
                        featureType: 'landscape.natural',
                        elementType: 'all',
                        stylers: [
                            {hue: '#809f80'},
                            {lightness: -35}
                        ]
                    }
                ];
                var text;
                text = "<b style='color:#000;' " +
                    "style='text-align:center; color:#f00'><span style='color:#449C44'><?php echo $company['ten_vi'];?></span><br />" +
                    "<?php echo 'Địa chỉ';?>: <span style='color:#333; font-weight:100'><?php echo $company['diachi_vi'];?></span><br />" +
                     
                    "<?php echo 'Điện thoại';?>: <span style='color:#333; font-weight:100'><?php echo $company['dienthoai'];?></span><br />" +


                    "</b>";
                var infowindow = new google.maps.InfoWindow({
                    content: text,
                    map: map,
                    draggable: true,
                    animation: google.maps.Animation.DROP,
                    position: gmap
                });
                infowindow.open(map);
                var marker = new google.maps.Marker({});

                var styledMapType = new google.maps.StyledMapType(styles);
                map.mapTypes.set('Styled', styledMapType);

                marker = new google.maps.Marker({
                    map: map,
                    draggable: true,
                    animation: google.maps.Animation.DROP,
                    position: gmap
                });
                google.maps.event.addListener(marker, 'click', toggleBounce);
            }

            function toggleBounce() {

                if (marker.getAnimation() !== null) {
                    marker.setAnimation(null);
                } else {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                }
            }
        </script>
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnUR-5FrPxcYHMTkm_5xR1qca1i8NGRps&callback=initMap"
            async defer></script>

            <div id="map1" style="width: 100%;height: 100%;"></div>
</div>