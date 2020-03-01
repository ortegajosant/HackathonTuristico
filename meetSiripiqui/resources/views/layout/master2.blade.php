<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Join Siripiquí</title>
	<meta name="keywords" content="Sarapiqui">
	<meta name="description" content="@yield('meta_description', config('app.name'))">
	<meta name="author" content="@yield('meta_author', config('app.name'))">
	<!-- Favicon -->

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type='image/x-icon' href="{{asset("assets/images/favicon.ico")}}">


	<!-- bootstrap v3.3.6 css -->
	<link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
	<!-- font-awesome css -->
	<link rel="stylesheet" href="{{asset("assets/css/font-awesome.min.css")}}">
	<!-- owl-transition css -->
	<link rel="stylesheet" href="{{asset("assets/css/owl.transitions.css")}}">
	<!-- owl-carousel css -->
	<link rel="stylesheet" href="{{asset("assets/css/owl.carousel.css")}}">
	<!-- venobox css -->
	<link rel="stylesheet" href="{{asset("assets/css/venobox.css")}}">
	<!-- style css -->
	<link rel="stylesheet" href="{{asset("assets/style2.css")}}">
	
	<!-- responsive css -->
	<link rel="stylesheet" href="{{asset("assets/css/responsive2.css")}}">
	<link rel="stylesheet" type="text/css" href="{{asset("assets/slick/slick.css")}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset("assets/slick/slick-theme.css")}}"/>
	<!-- modernizr css -->
	<script src="{{asset("assets/js/vendor/modernizr-2.8.3.min.js")}}"></script>
	@yield('styles')



</head>

<body data-spy="scroll" data-target="#navbar-example">
	@yield('content')

	<!-- jquery latest version -->
	<script src="{{asset("assets/js/vendor/jquery-1.12.4.min.js")}}"></script>
	<!-- bootstrap js -->
	<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
	<!-- easing js -->
	<script src="{{asset("assets/js/easing.js")}}"></script>
	<!-- Form-validator js -->
	<script src="{{asset("assets/js/form-validator.min.js")}}"></script>
	<!-- Isotop min js -->
	<script src="{{asset("assets/js/isotope.pkgd.min.js")}}"></script>
	<!-- venobox js -->
	<script src="{{asset("assets/js/venobox.min.js")}}"></script>
	<!-- animated js -->
	<script src="{{asset("assets/js/owl.carousel.min.js")}}"></script>
	<!-- plugins js -->
	<script src="{{asset("assets/js/plugins.js")}}"></script>
	<!-- main js -->
	<script src="{{asset("assets/js/main.js")}}"></script>
	<script src="{{asset("assets/js/funciones.js")}}"></script>



	@yield('script')



</body>



</html>