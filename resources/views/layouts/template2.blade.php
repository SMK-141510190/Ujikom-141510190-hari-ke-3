<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ujikom</title>
	<meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Luka Cvetinovic for Codrops" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="asset/Cardio/img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="asset/Cardio/img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="asset/Cardio/img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="asset/Cardio/img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="asset/Cardio/img/favicons/manifest.json">
	<link rel="shortcut icon" href="asset/Cardio/img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="asset/Cardio/img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="asset/Cardio/css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="asset/Cardio/css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="asset/Cardio/css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="asset/Cardio/css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="asset/Cardio/fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="asset/Cardio/fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="asset/Cardio/css/cardio.css">
</head>

<body>
	<div class="preloader">
		<img src="asset/Cardio/img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><h4 class="light white">Ujikom</h4></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i><font size="4"> {{ Auth::user()->name }} </font><span class="caret"></span>
                                </a>


                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="light white">Hallo.</h3>
							<h1 class="white typed">Selamat Datang Di Aplikasi Penggajian</h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section>
		<div class="cut cut-top"></div>
		<div class="container">
			<div class="row intro-tables">
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading hide-hover">Jabatan</h5>
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular"><i class="fa fa-group fa-3x"></i></h4>
							<a href="{{ url('/jabatan') }}" class="btn btn-white-fill expand">Lihat</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading hide-hover">Golongan</h5>
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular"><i class="fa fa-group fa-3x"></i></h4>
							<a href="{{ url('/golongan') }}" class="btn btn-white-fill expand">Lihat</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading hide-hover">Kategori Lembur</h5>
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular"><i class="fa fa-clock-o fa-3x"></i></h4>
							<a href="{{ url('/kategorilembur') }}" class="btn btn-white-fill expand">Lihat</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading hide-hover">Lembur Pegawai</h5>
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular"><i class="fa fa-clock-o fa-3x"></i></h4>
							<a href="{{ url('/lemburpegawai') }}" class="btn btn-white-fill expand">Lihat</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading hide-hover">Tunjangan</h5>
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular"><i class="fa fa-dollar fa-3x"></i></h4>
							<a href="{{ url('/tunjangan') }}" class="btn btn-white-fill expand">Lihat</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading hide-hover">Tunjangan Pegawai</h5>
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular"><i class="fa fa-dollar fa-3x"></i></h4>
							<a href="{{ url('/tunjanganpegawai') }}" class="btn btn-white-fill expand">Lihat</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading hide-hover">Penggajian</h5>
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular"><i class="fa fa-money fa-3x"></i></h4>
							<a href="{{ url('/penggajian') }}" class="btn btn-white-fill expand">Lihat</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">SMK Assalaam Bandung</h3>
					<h5 class="light regular light-white"><i class="fa fa-map-marker"></i>  Jl. Situ Tarate, Kabupaten Bandung 40265</h5>
					<h5 class="light regular light-white"><i class="fa fa-phone"></i> (022) 5420220</h5>
					<h5 class="light regular light-white"><i class="fa fa-envelope"></i> info@smkassalaambandung.sch.id </h5>
				</div>
			</div>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy; 2015 All Rights Reserved. Powered by <a href="smkassalaambandung.sch.id">SMK Assalaam Bandung</a></p>
				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><a href="http://www.facebook.com/pages/Codrops/159107397912"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://www.twitter.com/codrops"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/101095823814290637419"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="asset/Cardio/js/jquery-1.11.1.min.js"></script>
	<script src="asset/Cardio/js/owl.carousel.min.js"></script>
	<script src="asset/Cardio/js/bootstrap.min.js"></script>
	<script src="asset/Cardio/js/wow.min.js"></script>
	<script src="asset/Cardio/js/typewriter.js"></script>
	<script src="asset/Cardio/js/jquery.onepagenav.js"></script>
	<script src="asset/Cardio/js/main.js"></script>
</body>

</html>
