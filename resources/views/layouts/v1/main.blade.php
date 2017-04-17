<!DOCTYPE html>
<html>
<head>
	<title>@yield('title',config('app.name'))</title>
	<!-- Bootstrap css-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Font ionicons -->
	<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- style v1 -->
	<link rel="stylesheet" type="text/css" href="{{ asset('layouts/v1/css/style.css') }}">

</head>
<body>
	@include('layouts.v1._include._navbar')
	@yield('content')
	<!-- JQuery cdn -->
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap js -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>