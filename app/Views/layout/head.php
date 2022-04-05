<?php

use App\Models\Konfigurasi_model;

$konfigurasi  = new Konfigurasi_model;
$site         = $konfigurasi->listing();
?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="<?php echo strip_tags($description) ?>" name="description" content="Free HTML5 Website Template by freehtml5.co" />
  <meta name="keywords" content="<?php echo $keywords ?>" />
  <meta name="author" content="freehtml5.co" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content="" />
  <meta property="og:image" content="" />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/upload/image/' . $site['icon']) ?>" rel="icon">
  <link href="<?php echo base_url('assets/upload/image/' . $site['icon']) ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

  <!-- Animate.css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/css/bootstrap.css">






  <!-- Magnific Popup -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/css/magnific-popup.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/css/owl.theme.default.min.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/css/style.css">

  <!-- Modernizr JS -->
  <script src="<?= base_url(); ?>/assets/template/js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->



</head>

<body>