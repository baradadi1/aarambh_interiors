<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from www.aarambhinteriors.co.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Mar 2025 18:00:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<!-- Metas -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<!-- Title  -->
		<title>Aarambh Interiors</title>
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{url('Frontend/img/fav.jpg')}}" />
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
			rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,500,600,700,800,900&amp;display=swap"
			rel="stylesheet">
		<!-- Plugins -->
		<link rel="stylesheet" href="{{url('Frontend/css/plugins.css')}}" />
		<link href="{{ url('Frontend/css/twentytwenty.css') }}" rel="stylesheet" type="text/css" />
		<!-- Core Style Css -->
		<link rel="stylesheet" href="{{url('Frontend/css/style.css')}}" />

		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{url('jquery.fancybox.min.css')}}" />
	</head>
	<body>
		<!-- ==================== Start Loading ==================== -->
		<div id="preloader">
			<div class="loading-text">Aarambh Interiors</div>
		</div>
		<!-- ==================== End Loading ==================== -->
		<!-- ==================== Start progress-scroll-button ==================== -->
		<div class="progress-wrap cursor-pointer">
			<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
				<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
			</svg>
		</div>
		<!-- ==================== End progress-scroll-button ==================== -->
		<!-- ==================== Start cursor ==================== -->
		<div class="mouse-cursor cursor-outer d-non"></div>
		<div class="mouse-cursor cursor-inner d-non"></div>
		<!-- ==================== End cursor ==================== -->
		<!-- ==================== Start Navbar ==================== -->

		<nav class="navbar change navbar-expand-lg">
			<div class="container">
				<!-- Logo -->
				<a class="" href="{{ route('home.index') }}">
					<img src="{{url('Frontend/img/h-logo.png')}}" alt="Aarambh logo" style="width:180px">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"><i class="fas fa-bars"></i></span>
				</button>
				<!-- navbar links -->
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
							<li class="nav-item">
							<a class="nav-link" href="{{ route('home.index') }}">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('about.index') }}">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('project.index') }}">Our Projects</a>
						</li>
						<!--li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="project.php" role="button"
								aria-haspopup="true" aria-expanded="false">Our Projects</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="project.php">Sample Spaces</a>
								<a class="dropdown-item" href="project.php">Work Space</a>
								<a class="dropdown-item" href="project.php">Living Space</a>
							</div>
						</li-->
						<li class="nav-item">
							<a class="nav-link" href="{{ route('contact.index') }}">Contact Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('inquery.index') }}">Inquiry Now</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
