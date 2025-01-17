<?php if($com!='lien-he'){ ?>
<!--map-->

<style>

</style>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
var gmap = new google.maps.LatLng(<?=$toado['website']?>);
var marker="dhasjidhasijdhahshh";
function initialize()
{
    var mapProp = {
         center:new google.maps.LatLng(<?=$toado['website']?>),
         zoom:16,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };
 
    var map=new google.maps.Map(document.getElementById("googleMap")
    ,mapProp);
 
  var styles = [
    {
      featureType: 'road.arterial',
      elementType: 'all',
      stylers: [
        { hue: '#fff' },
        { saturation: 100 },
        { lightness: -48 },
        { visibility: 'on' }
      ]
    },{
      featureType: 'road',
      elementType: 'all',
      stylers: [
 
      ]
    },
    {
        featureType: 'water',
        elementType: 'geometry.fill',
        stylers: [
            { color: '#adc9b8' }
        ]
    },{
        featureType: 'landscape.natural',
        elementType: 'all',
        stylers: [
            { hue: '#809f80' },
            { lightness: -35 }
        ]
    }
  ];
/*
 
	var text;
text= "<b style='color:#000;' " + 
         "style='text-align:center; color:#f00'><span style='color:#449C44'><?=$toado['ten']?></span><br />" +

		 "Địa chỉ:<span style='color:#333; font-weight:100'><?=$toado['diachi']?></span><br />"+ 
		 "ĐT:<span style='color:#333; font-weight:100'><?=$toado['dienthoai']?></span><br />"+ 

		 
		 
     "</b>";

   var infowindow = new google.maps.InfoWindow(
    { content: text,
	 map:map,
    draggable:true,
    animation: google.maps.Animation.DROP,
    position: gmap

    });
       infowindow.open(map);    
    var marker = new google.maps.Marker({
		
		
  });
  
  
	 */
  
  var styledMapType = new google.maps.StyledMapType(styles);
  map.mapTypes.set('Styled', styledMapType);

  marker = new google.maps.Marker({
    map:map,
    draggable:true,
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
 
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!--map-->
<?php }?>
  <div id="googleMap" style="width: 100%; height: 192px;">Google Map</div>