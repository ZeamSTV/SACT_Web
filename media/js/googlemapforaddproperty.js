// JavaScript Document
var geocoder;
var map;
var marker;
var image = "../../map/img/home_map.gif";
var image1 = "http://www.google.com/mapfiles/shadow50.png";
var infowindow;
var defLat = 10.810583;
var defLng = 106.70914;
function InitMap(latitude, longitude) {
    if (latitude != 0) {
        defLat = latitude;
        defLng = longitude;
    }
    geocoder = new google.maps.Geocoder();
    var defaultPosition = new google.maps.LatLng(defLat, defLng);
    var options = {
        scrollwheel: false,
        zoom: 16,
        center: defaultPosition,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        panControl: true,
        zoomControl: true
    };
    map = new google.maps.Map(document.getElementById('map'), options);

    var address;
    marker = new google.maps.Marker({
        map: map,
        position: defaultPosition,
        clickable: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        draggable: true,
        icon: image,
        shadow: image1
    });

    infowindow = new google.maps.InfoWindow({
        content: "Hồ Chí Minh"
    }); //end InfoWindow

    google.maps.event.addListener(marker, 'click', function() {
        UpdateMarkerPosition(marker);
        showAddress(marker.getPosition());
    });
    google.maps.event.addListener(marker, 'drag', function() {
        UpdateMarkerPosition(marker);
        showAddress(marker.getPosition());
    });
    google.maps.event.addListener(marker, 'dragen', function() {
        UpdateMarkerPosition(marker);
        showAddress(marker.getPosition());
    });
    UpdateMapByAddress(GetPropertyAddress());
    
    showAddress(marker.getPosition());
}

function UpdateMapByAddressAfterLoadPage(latitude, longitude) {
    
}
function GetPropertyAddress() {
    var noHouse = "";
    var street = "";
    var ward = "";
    var district = "";
    var province = "";
    var address = "";

    if ($('.post-content .duong').val() != "" && $('.post-content .duong').val() != "0") {
        address += $(".post-content .duong option:selected").text() + ", ";
    } else {
        if ($('.post-content .phuong').val() != "" && $('.post-content .phuong').val() != "0") {
            address += $(".post-content .phuong option:selected").text() + ", ";
        } 
    }
    if ($('.post-content .huyen').val() != "" && $('.post-content .huyen').val() != "0") {
        address += $(".post-content .huyen option:selected").text() + ", ";
    }
    if ($('.post-content .tinh').val() != "" && $('.post-content .tinh').val() != "0") {
        address += $(".post-content .tinh option:selected").text();
    }
    return address;
}
function ChangeStreetAndUpdateMapByAddres(){
    $('#changedstreet').val(1);
    UpdateMapByAddress(GetPropertyAddress());
}
function UpdateMapByAddress(address) {
    if($('#map').html() != ''){
        if (map == null)
            return;
        if (address.length == 0)
            return;

        if (geocoder == null) {
            geocoder = new google.maps.Geocoder();
        }

        geocoder.geocode(
        { 'address': address },
        function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                var pos = results[0].geometry.location;
                map.setCenter(pos);

                if (marker == null) {
                    marker = new google.maps.Marker({
                        map: map,
                        position: pos,
                        draggable: true
                    });
                }

                marker.setPosition(pos);
                UpdateMarkerPosition(marker);
                showAddress(pos);
                infowindow.close();
            }
        });
    }else{
        $('.static_map').html("<div class='over'></div><iframe title='Bản đồ' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com/maps?&amp;q="+address+"&amp;output=embed'></iframe>");
    }
}


function UpdateMarkerPosition(curMarker) {    
    $("#map_lat").val(curMarker.getPosition().lat());
    $("#map_lng").val(curMarker.getPosition().lng());
}

function showAddress(pos) {
    geocoder.geocode({
        latLng: pos
    }, function(responses) {
        if (responses && responses.length > 0) {
            infowindow.setContent("<span id='address'><b>Vị trí gần đúng : </b>" + responses[0].formatted_address + "</span>");
            infowindow.open(map, marker);
        } else {
            infowindow.setContent("<span id='address'><b>Địa chỉ : </b> Không xác định được tên đường.</span>");
        infowindow.open(map, marker);
        infowindow.close();
        }
    });
}
function InitStaticMap(){        
        var lat = $('#map_lat').val();
        var lng = $('#map_lng').val();
        if($('.post-content #matin').val() != ""){
            if(lat != 0 && lng != 0){
                $('.static_map').html("<iframe title='Bản đồ' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com/maps?&amp;q=+"+lat+",+"+lng+"&amp;output=embed'></iframe>");
            }else{
                var address = GetPropertyAddress();
                $('.static_map').html("<iframe title='Bản đồ' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com/maps?&amp;q="+address+"&amp;output=embed'></iframe>");
            }
        }else{
            $('.static_map').html("<iframe title='Bản đồ' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com/maps?&amp;q=+"+lat+",+"+lng+"&amp;output=embed'></iframe>");
        }
}
function ShowMapInFrame() {
    var mapFlag = $('.map-flag').val();
    var webversion = $('.web-version').val();
    if (mapFlag == "1" && webversion == "1") {//display on pc
        InitStaticMap();
    } else {
        if (mapFlag == "2" && webversion == "2") {//display on mb
            InitStaticMap();
        } else {
            if (mapFlag == "3") {//display on both
                InitStaticMap();
            } else {
                $('.bando').hide();
            }
        }
    }
}