<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Home</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="<?= base_url('assets/img/favicon.png') ?>">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="<?= base_url('assets/css/all.min.css') ?>">
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
	<!-- owl carousel -->
	<link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.css') ?>">
	<!-- magnific popup -->
	<link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>">
	<!-- animate css -->
	<link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>">
	<!-- mean menu css -->
	<link rel="stylesheet" href="<?= base_url('assets/css/meanmenu.min.css') ?>">
	<!-- main style -->
	<link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
	<!-- responsive -->
	<link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="<?= base_url('assets/img/logo.png') ?>" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
                            <ul>
                                <li class="nav-item"><a class="nav-link" href="#"><?= lang('General.home'); ?></a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><?= lang('General.about'); ?></a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><?= lang('General.articles'); ?></a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><?= lang('General.products'); ?></a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><?= lang('General.contact'); ?></a></li>

                                <!-- Dropdown Bahasa -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                                        <?= lang('General.language'); ?>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="<?= base_url('language/switch/id'); ?>">🇮🇩 Indonesia</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url('language/switch/en'); ?>">🇬🇧 English</a></li>
                                    </ul>
                                </li>
                            </ul>
						</nav>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- home page slider -->
	<div class="homepage-slider"> 
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<h1><?= lang('General.carousel_text'); ?></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="single-homepage-slider homepage-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<h1><?= lang('General.carousel_text'); ?></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="single-homepage-slider homepage-bg-3">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<h1><?= lang('General.carousel_text'); ?></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end home page slider -->
    <!-- advertisement section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">
            <div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">				
                        <h3><?= lang('General.about_title1'); ?><span class="orange-text"><?= lang('General.about_title2'); ?></span></h3>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
						<img src="<?= base_url('assets\img\about-img.jpg') ?>" alt="">
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
                        <h5><?= lang('General.about_story'); ?></h5>
                        <p><?= lang('General.about_description'); ?></p>
						<a href="about.html" class="boxed-btn mt-4">know more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->
     
	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>34/8, East Hukupara, Gifirtok, Sadan.</li>
							<li>support@fruitkha.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html">Shop</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.<br>
						Distributed By - <a href="https://themewagon.com/">Themewagon</a>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="<?= base_url('assets/js/jquery-1.11.3.min.js') ?>"></script>
	<!-- bootstrap -->
	<script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
	<!-- count down -->
	<script src="<?= base_url('assets/js/jquery.countdown.js') ?>"></script>
	<!-- isotope -->
	<script src="<?= base_url('assets/js/jquery.isotope-3.0.6.min.js') ?>"></script>
	<!-- waypoints -->
	<script src="<?= base_url('assets/js/waypoints.js') ?>"></script>
	<!-- owl carousel -->
	<script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
	<!-- magnific popup -->
	<script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
	<!-- mean menu -->
	<script src="<?= base_url('assets/js/jquery.meanmenu.min.js') ?>"></script>
	<!-- sticker js -->
	<script src="<?= base_url('assets/js/sticker.js') ?>"></script>
	<!-- main js -->
	<script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>
</html>