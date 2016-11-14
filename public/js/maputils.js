var map;
var markers = [];

var initMap = function() {

   var tokyo = {lat: 35.682956, lng: 139.753969};

   map = new google.maps.Map(document.getElementById('map'), {
     zoom: 12,
     center: tokyo,
     streetViewControl: false,
     mapTypeControl: false,
     clickableIcons: false
   });

   // This event listener will call addMarker() when the map is clicked.
   map.addListener('click', function(e) {
     addMarker(e.latLng);
     setLatLong(e.latLng.lat(), e.latLng.lng());
   });

   // If submission error, and lat/long input are not empty
   if( $('#latitude').val() && $('#longitude').val() ) {
     var validLat = false;
     var validLng = false;
     var inputLat = parseFloat($('#latitude').val());
     var inputLng = parseFloat($('#longitude').val());
     if (typeof inputLat === 'number' && inputLat <= 90 && inputLat >= -90) {
       validLat = true;
     };
     if (typeof inputLng === 'number' && inputLng <= 180 && inputLng >= -180) {
       validLng = true;
     };
     if (validLat && validLng) {
       var newPos = {lat: inputLat, lng: inputLng};
       addMarker(newPos);
       map.setCenter(newPos);
       map.setZoom(15);
     }
   };

 }

  var addMarker = function(location) {
   deleteMarkers();
   var marker = new google.maps.Marker({
     position: location,
     map: map
   });
   markers.push(marker);
 }

  var setMapOnAll = function(map) {
   for (var i = 0; i < markers.length; i++) {
     markers[i].setMap(map);
   }
 }

var clearMarkers = function() {
   setMapOnAll(null);
 }

var showMarkers = function() {
   setMapOnAll(map);
 }

 var deleteMarkers = function() {
   clearMarkers();
   markers = [];
 }

var setLatLong = function(lat, lng) {
  var lat = parseFloat(lat.toFixed(6));
  var lng = parseFloat(lng.toFixed(6));
  $('#latitude').val(lat);
  $('#longitude').val(lng);
}
