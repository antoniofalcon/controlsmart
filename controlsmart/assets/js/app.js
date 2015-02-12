var geocoder;
var map;
var infowindow;
var marker;

var app = {
	initialize: function () {
        'use strict';
        geocoder = new google.maps.Geocoder();
        app.detectBrowser();
        infowindow = new google.maps.InfoWindow();
        var mapOptions = {
            zoom: 4,
            center: new google.maps.LatLng(29.009871495806316,-110.90291887521744)
        };
        map = new google.maps.Map($('#map-canvas'),
          mapOptions);

        google.maps.event.addListener(map, 'click', function(e) {
            app.placeMarker(e.latLng, map);
        });
        var comment = $('#txtComment');
        google.maps.event.addListener(infowindow, 'content_changed', function() {
            // whatever you want to do once the DOM is ready
        comment.value=infowindow.getContent();
        });
	},
	bindEvents: function () {

	},
    detectBrowser: function(){
        var useragent = navigator.userAgent;
        var mapdiv = $('#map-canvas');

        if (useragent.indexOf('iPhone') != -1 || useragent.indexOf('Android') != -1 ) {
            //mapdiv.style.width = '100%';
            //mapdiv.style.height = '100%';
        } else {
            //mapdiv.style.width = '700px';
            //mapdiv.style.height = '600px';
        }
    },
    placeMarker: function(position){
        if(marker){
            marker.setMap(null);
        }
        marker = new google.maps.Marker({
            position: position,
            map: map
        });
        map.panTo(position);
        var lat =$('#txtLat');
        var lng =$('#txtLng');
        lat.value=marker.position.lat();
        lng.value=marker.position.lng();
        codeLatLng(marker.position.lat(),marker.position.lng());
        
        google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
        });
    },
    codeLatLng: function(lat,lng){
        var latlng = new google.maps.LatLng(lat, lng);
        geocoder.geocode({'latLng': latlng}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (results[1]) {
                infowindow.setContent(results[1].formatted_address);
                infowindow.open(map, marker);
                }
            } else {
                infowindow.setContent('This is an invalid address');
            }
        });
    }
};

$(document).ready(function () {
	'use strict';
    google.maps.event.addDomListener(window, 'load', app.initialize);
	//app.initialize();
});