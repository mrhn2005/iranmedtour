<html dir="ltr" lang="en">
<head>

	<!-- Meta Tags -->	
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content="Healthcube - Medical & Health Responsive HTML Template">
	<meta name="keywords" content="medical, doctor, health">
	<meta name="author" content="YokoTheme">

	<!-- Title -->
	<title>
	    @yield('title')
	</title>

	<!-- Apple Touch Icons -->
	<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
	<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
	<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
	<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
	
	<!-- Favicon -->
	<link href="images/favicon.png" rel="shortcut icon" type="image/png">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/slicknav.css">
	<link rel="stylesheet" href="css/superfish.css">
	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/hover.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/color-switcher.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">

	<script src="js/modernizr.min.js"></script>
	
    @yield('style')
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	@yield('content')
	


	<!-- Scripts -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>	
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/owl.animate.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/color-switcher.js"></script>
	<script src="js/custom.js"></script>
	@yield('js')
	
</body>
</html>