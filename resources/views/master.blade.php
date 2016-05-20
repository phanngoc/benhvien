<!DOCTYPE html>
<html>
<head>
	<title>Register Examination</title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="{{ asset('img/front/favicon.ico')}}" type="image/x-icon" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" type="text/css" media="screen" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css')}}" type="text/css" media="screen" />
	<link rel="stylesheet" href="{{ asset('css/swiper.min.css')}}" type="text/css" media="screen" />
	<link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css')}}" type="text/css" media="screen" />
	<link rel="stylesheet" href="{{ asset('css/animate.css')}}">
	<link rel="stylesheet" href="{{ asset('css/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css')}}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link rel="stylesheet" href="{{ asset('css/common.css')}}" type="text/css" media="screen,projection" />
	<script src="{{ asset('js/jquery-1.11.0.min.js')}}" type="text/javascript"></script>

	@yield('css')
</head>
<body>
	@yield('content')
	<script src="{{ asset('js/jquery-1.11.0.min.js')}}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/materialize.js')}}"></script>
	<script src="{{ asset('js/flowup.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.als-1.7.js')}}"></script>
	<script src="{{ asset('js/jquery.easing.1.3.js')}}" type="text/javascript"></script>
	<script src="{{ asset('js/swiper.min.js')}}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.scrollTo-1.4.3.1-min.js')}}"></script>
	<script type="text/javascript">
		var map;

		function setMapByAddress(address) {
			var geocoder = new google.maps.Geocoder();      
			geocoder.geocode({ 'address': address}, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
				    map.setCenter(results[0].geometry.location);
				    map.setZoom(14);
				    var marker = new google.maps.Marker({
				        map: map,
				        position: results[0].geometry.location
				    });
				}
			});  
		}
		
		function initAutocomplete() {

			map = new google.maps.Map(document.getElementById('map'), {
			        center: {lat: 16.058929, lng: 108.212038},
			        zoom: 13,
			        mapTypeId: google.maps.MapTypeId.ROADMAP
			    });

			@if (isset($benhvien))
				setMapByAddress('{{ $benhvien->diachi }}');
			@endif
		    
		    // Create the search box and link it to the UI element.
		    var input = document.getElementById('input_search_google');
		    var searchBox = new google.maps.places.SearchBox(input);
		    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

		    // Bias the SearchBox results towards current map's viewport.
		    map.addListener('bounds_changed', function() {
		      searchBox.setBounds(map.getBounds());
		    });

		    var markers = [];
		    // Listen for the event fired when the user selects a prediction and retrieve
		    // more details for that place.
		    searchBox.addListener('places_changed', function() {
		      var places = searchBox.getPlaces();

		      if (places.length == 0) {
		        return;
		      }

		      // Clear out the old markers.
		      markers.forEach(function(marker) {
		        marker.setMap(null);
		      });
		      markers = [];

		      // For each place, get the icon, name and location.
		      var bounds = new google.maps.LatLngBounds();
		      places.forEach(function(place) {
		        var icon = {
		          url: place.icon,
		          size: new google.maps.Size(71, 71),
		          origin: new google.maps.Point(0, 0),
		          anchor: new google.maps.Point(17, 34),
		          scaledSize: new google.maps.Size(25, 25)
		        };

		        // Create a marker for each place.
		        markers.push(new google.maps.Marker({
		          map: map,
		          icon: icon,
		          title: place.name,
		          position: place.geometry.location
		        }));

		        if (place.geometry.viewport) {
		          // Only geocodes have viewport.
		          bounds.union(place.geometry.viewport);
		        } else {
		          bounds.extend(place.geometry.location);
		        }
		      });
		      map.fitBounds(bounds);
		    });
		}

	</script>
	<script src="http://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyBLRp5potmIciUpRJQ6qH4e6Uk0oKLDQbo&callback=initAutocomplete&libraries=places" async defer></script>	
	<script src="{{ asset('js/wow.js')}}"></script>
	<script src="{{ asset('js/jquery-ui.js')}}"></script>
	<script src="{{ asset('js/jquery-ui.min.js')}}"></script>
	<script src="{{ asset('js/jquery.timepicker.js')}}"></script>
	<script src="{{ asset('js/common.js')}}" type="text/javascript"></script>	
  @yield('js')
</body>
</html>
