<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Daniprisma</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php bloginfo('template_url'); ?>/assets/img/favicon.png" rel="icon">
  <link href="<?php bloginfo('template_url'); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php bloginfo('template_url'); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
  crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
  crossorigin="anonymous" />

  <!-- Template Main CSS File -->
  <link href="<?php bloginfo('template_url'); ?>/assets/css/main.css" rel="stylesheet">

  <?php wp_head();?>
</head>

<body <?php body_class(); ?>>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.jpg" alt="" class="img-fluid">
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <!-- <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="#">Our Companies</a></li>
          <li><a href="news.html">News</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Career</a></li>
        </ul> -->
        <?php wp_nav_menu('menu top en'); ?>
        <ul class="lang-switch"><?php pll_the_languages(array('display_names_as' => 'slug'));?></ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->