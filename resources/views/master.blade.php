<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
	<meta charset="UTF-8">
	<title>Gallery application in AngularJS</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<script>var baseUrl = "{{ url('/') }}/" </script>
</head>
<body>
	<div class="container" ng-controller="globalController">
		<div ng-view></div>
	</div>

	<script type="text/javascript" src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"  ></script>
	<!-- Latest compiled and minified JavaScript -->
	<script type="text/javascript" src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"  ></script>
	<script type="text/javascript" src="{{asset('bower_components/angular/angular.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('bower_components/angular-route/angular-route.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('bower_components/angular-cookies/angular-cookies.min.js')}}"></script>
	<script type="text/javascript" src=" {{asset('js/app.js')}} "></script>
	<script type="text/javascript" src=" {{asset('js/models.js')}} "></script>
	<script type="text/javascript" src=" {{asset('js/controllers.js')}} "></script>
</body>
</html>