<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css" media="screen" />
	<link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}" type="text/css" media="screen" />
	<link rel="stylesheet" href="{{asset('css/common1.css')}}" type="text/css" media="screen,projection" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.datetimepicker.css')}}"/>
  @yield('css')
</head>
<body>
	<div id="wrap_content">
		  @yield('content')
	</div>
	<script src="{{asset('js/jquery-1.11.0.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/common1.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/jquery.datetimepicker.full.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
  @yield('js')
</body>
</html>
