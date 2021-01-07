<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="cache-control" content="max-age=604800" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	

	<title>Website title - bootstrap html template</title>

	<!-- jQuery -->
	<script src="{{ asset('js/jquery-2.0.0.min.js')}}" type="text/javascript"></script>

	<!-- Bootstrap4 files-->
	<script src="{{ asset('js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
	<link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>


	<link rel="stylesheet" href="{{ asset('css/all.min.css')}}">
	<link href="{{ asset('css/ui.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('css/responsive.css')}}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

</head>
<body>


	<header class="section-header">
		@include('inc.header')
	</header> <!-- section-header.// -->


	<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
		@include('inc.nav')
	</nav>
	@include('inc.errors')
	@yield('content')

	<!-- ========================= FOOTER ========================= -->
	<footer class="section-footer border-top bg">
		<div class="container">
			@include('inc.footer')
		</div><!-- //container -->
	</footer>
	<!-- ========================= FOOTER END // ========================= -->
	<!-- custom javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="{{ asset('js/script.js')}}" type="text/javascript"></script>
</body>
</html>