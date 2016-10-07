@extends('layouts.app')

@section('main-content')

    <div class="white">
      <h2>Nuevo Direccion para {{$place->name}}</h2>
      <style>
      	#map-canvas{
      		width: 750px;
      		height: 450px;
      	}
      </style>

      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&libraries=places"
        type="text/javascript"></script>

      <div class="container">
      	<div class="col-sm-4">

      		{{Form::open(array('url'=>'bo/address/', 'method'=>'POST','files'=>true))}}
      			<div class="form-group">

      				<input type="hidden" class="form-control input-sm" name="title" value="{{$place->name}}">
                    <input type="hidden" class="form-control input-sm" name="restaurants_id" value="{{$place->id}}">
                    <input type="hidden" class="form-control input-sm" name="status">
      			</div>

      			<div class="form-group">
      				<label for="">Map</label>
      				<input type="text" id="searchmap" name="address" class="form-control input-sm">
      				<div id="map-canvas"></div>
      			</div>

      			<div class="form-group">
      				<label for="">Lat</label>
      				<input type="text" class="form-control input-sm" name="lat" id="lat">
      			</div>

      			<div class="form-group">
      				<label for="">Lng</label>
      				<input type="text" class="form-control input-sm" name="lng" id="lng">
      			</div>

      			<button class="btn btn-sm btn-danger">Save</button>
      		{{Form::close()}}
      	</div>

      </div>

      <script>
      var poUno;
      var poDos;
      var map = new google.maps.Map(document.getElementById('map-canvas'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 15
        });

        var infoWindow = new google.maps.InfoWindow({map: map});


      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };


          // Add a marker at the center of the map.
          addMarker(pos, map);


          //infoWindow.setPosition(pos);
          //infoWindow.setContent('Location found.');
          map.setCenter(pos);

        }, function() {
          handleLocationError(true, infoWindow, map.getCenter());
        });
      } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
      }


     //  	var map = new google.maps.Map(document.getElementById('map-canvas'),{
     //  		center:{
     //  			lat: 27.72,
        //       	lng: 85.36
     //  		},
     //  		zoom:15
     //  	});

     // Adds a marker to the map.

    function addMarker(location, map) {
      // Add the marker at the clicked location, and add the next-available label
      // from the array of alphabetical characters.
     var  marker = new google.maps.Marker({
        position: location,
        //label: labels[labelIndex++ % labels.length],
        map: map,
        draggable: true
      });

      google.maps.event.addListener(marker,'position_changed',function(){
          var lat = marker.getPosition().lat();
          var lng = marker.getPosition().lng();
          $('#lat').val(lat);
          $('#lng').val(lng);

          var pos = {
            lat: lat,
            lng: lng
          };

          geocoder = new google.maps.Geocoder();
          geocoder.geocode({
            latLng: pos
          }, function(responses) {
            if (responses && responses.length > 0) {
              $('#searchmap').val(responses[0].formatted_address);
            } else {
             console.log('Cannot determine address at this location.');
            }

          });
      });
    }



      	var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
      	google.maps.event.addListener(searchBox,'places_changed',function(){
      		var places = searchBox.getPlaces();
      		var bounds = new google.maps.LatLngBounds();
      		var i, place;
      		for(i=0; place=places[i];i++){
        			bounds.extend(place.geometry.location);
        			marker.setPosition(place.geometry.location); //set marker position new...
        		}
        		map.fitBounds(bounds);
        		map.setZoom(15);
      	});

      </script>
        </div>
@endsection
