<!DOCTYPE html>
<html>
<head>
	<title>Đặt lịch khám</title>
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
	<script type="text/javascript" src="{{ asset('js/jquery.als-1.7.js')}}"></script>
	<script src="{{ asset('js/jquery.easing.1.3.js')}}" type="text/javascript"></script>
	<script src="{{ asset('js/swiper.min.js')}}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.scrollTo-1.4.3.1-min.js')}}"></script>
	<script src="http://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyBLRp5potmIciUpRJQ6qH4e6Uk0oKLDQbo&callback=initAutocomplete&libraries=places" async defer></script>	
	<script src="{{ asset('js/wow.js')}}"></script>
	<script src="{{ asset('js/jquery-ui.js')}}"></script>
	<script src="{{ asset('js/jquery-ui.min.js')}}"></script>
	<script src="{{ asset('js/jquery.timepicker.js')}}"></script>
	<script src="{{ asset('js/common.js')}}" type="text/javascript"></script>	
  @yield('js')
</body>
</html>
