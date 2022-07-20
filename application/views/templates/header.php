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
	<title><?= $title; ?></title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="<?= base_url() ?>assets/img/cw.png">
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
								<li class="current-list-item"><a href="<?= base_url('beranda') ?>">Beranda</a></li>
								<li><a href="<?= base_url('tentang') ?>">Tentang Kami</a></li>
								<li><a href="#">Barang</a>
									<ul class="sub-menu">
										<li><a href="<?= base_url('barang/resi') ?>">Resi</a></li>
										<li><a href="<?= base_url('barang/status') ?>">Lacak Pengiriman</a></li>
										<li><a href="<?= base_url('barang/tagihan') ?>">Transaksi</a></li>
									</ul>
								</li>
								<li><a href="<?= base_url('profil') ?>">Profil</a></li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href=""></a>
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