
/* ==========================================================================
	Asynchronous Loading Google Maps
============================================================================= */
function loadScript() {
	var script = document.createElement('script');
	script.type = 'text/javascript';
	script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
	document.body.appendChild(script);
}
window.onload = loadScript;

/* ==========================================================================
	Google Maps SETTING's
============================================================================= */
/*
 * define the coordinates of your company
 */

lat = 28.65850;
lng = 77.20341;

var map;
var MY_MAPTYPE_ID = 'custom_style';
  
  function initialize() {
        var map = L.map('page_maps',{scrollWheelZoom: false,zoomControl: false}).setView([34.8862145,-1.3056963], 13); // LIGNE 14

        	var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

	var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox.light', attribution: mbAttr}),
		streets  = L.tileLayer(mbUrl, {id: 'mapbox.streets',   attribution: mbAttr});
		
    
        map.addLayer(streets);
        new L.Control.Zoom({ position: 'bottomleft' }).addTo(map);
        var customIcon = L.icon({
		    iconUrl: 'http://sunumap.fr/images/icon-location@2x.png',
		    //shadowUrl: 'icon-shadow.png',
		    iconSize:     [64, 64], // taille de l'icone
		    //shadowSize:   [50, 64], // taille de l'ombre
		    iconAnchor:   [32, 64], // point de l'icone qui correspondra à la position du marker
		    //shadowAnchor: [32, 64],  // idem pour l'ombre
		    popupAnchor:  [-3, -76] // point depuis lequel la popup doit s'ouvrir relativement à l'iconAnchor
		});

	L.marker([34.8862145,-1.3056963], {icon: customIcon}).addTo(map);
	var baseLayers = {
		
		"Streets": streets,
		"Grayscale": grayscale
	};

	 

	L.control.layers(baseLayers).addTo(map);

    }
/*
function initialize() {

	  var featureOpts = [
		 {
				"featureType": "landscape",
				"stylers": [
				  { "weight": 0.1 },
				  { "color": "grey" }
				]
			  },{
				"featureType": "road",
				"elementType": "geometry",
				"stylers": [
				  { "visibility": "simplified" },
				  { "color": "brown" }
				]
			  },{
				"featureType": "poi",
				"elementType": "geometry",
				"stylers": [
				  { "color": "yellow" }
				]
			  },{
				"featureType": "road",
				"elementType": "labels.text.fill",
				"stylers": [
				  { "color": "#2c3e50" }
				]
			  },{
					"featureType": "poi",
					"elementType": "labels.text.fill",
					"stylers": [
					  { "color": "#e74c3c" }
					]
				  },{
				"featureType": "road",
				"elementType": "labels.text.stroke",
				"stylers": [
				  { "color": "Yellow" }
				]
			  },{
				"featureType": "water",
				"stylers": [
				  { "color": "blue" }
				]
			  }
			];
  
  var myLatlng = new google.maps.LatLng(lat,lng);
  var mapOptions = {
    zoom: 11,
    scrollwheel: false,
    mapTypeControl:false,
    streetViewControl:false,
    center: myLatlng,
    mapTypeControlOptions: {
        mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
      },
      mapTypeId: MY_MAPTYPE_ID
  };
  
  var map = new google.maps.Map(document.getElementById('page_maps'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
  	icon: "images/marker.png",
      map: map
  });
  
  var styledMapOptions = {
		    name: 'Custom Style'
		  };
  
	var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions); 
	map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
	google.maps.event.addDomListener(window, 'load', initialize);
}

*/

/*-----------------------------------------------------------------*/
