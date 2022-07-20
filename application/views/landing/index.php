<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Cloudify Warehouse</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="<?= base_url() ?>assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css">

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
								<img src="<?= base_url() ?>assets/img/random.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li>
									<div class="header-icons">
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	
	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->

	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Selamat Datang</p>
							<h1>Bring You Closer To Get Your Wishlist</h1>
							<div class="hero-btns">
								<a href="<?= base_url('login') ?>" class="boxed-btn">Masuk</a>
								<a href="<?= base_url('daftar') ?>" class="bordered-btn">Daftar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

<!-- features list section -->
<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Pengiriman Mingguan</h3>
							<p>Box penuh dikirimkan setiap minggu</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Layanan</h3>
							<p>Dapatkan pelayanan setiap hari</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-money-bill-wave"></i>
						</div>
						<div class="content">
							<h3>Tarif Terjangkau</h3>
							<p>Dapatkan tarif murah!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Layanan</span> Kami</h3>
						<p>Kami menyediakan layanan jasa warehouse dengan dua pilihan yaitu sharing dan direct</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
						<div class="product-image">
							<a href="single-product.html"><img src="<?= base_url() ?>assets/img/activity/1.jpg" alt=""></a>
						</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
						<div class="product-image">
							<a href="single-product.html"><img src="<?= base_url() ?>assets/img/activity/2.jpg" alt=""></a>
						</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
						<div class="product-image">
							<a href="single-product.html"><img src="<?= base_url() ?>assets/img/activity/3.jpg" alt=""></a>
						</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
						<div class="product-image">
							<a href="single-product.html"><img src="<?= base_url() ?>assets/img/activity/4.jpg" alt=""></a>
						</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
						<div class="product-image">
							<a href="single-product.html"><img src="<?= base_url() ?>assets/img/activity/5.jpg" alt=""></a>
						</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
						<div class="product-image">
							<a href="single-product.html"><img src="<?= base_url() ?>assets/img/activity/6.jpg" alt=""></a>
						</div>
				</div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- end product section -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2022 - Cloudify Warehouse,  All Rights Reserved.
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
	<script src="<?= base_url() ?>assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="<?= base_url() ?>assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="<?= base_url() ?>assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="<?= base_url() ?>assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="<?= base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="<?= base_url() ?>assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="<?= base_url() ?>assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="<?= base_url() ?>assets/js/main.js"></script>

</body>
</html>