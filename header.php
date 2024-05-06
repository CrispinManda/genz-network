<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title><?php wp_title(); ?></title>

  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_template_directory_uri());?>/assets/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(get_template_directory_uri());?>/assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(get_template_directory_uri());?>/assets/img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url(get_template_directory_uri());?>/assets/img/favicons/favicon.ico">
  <link rel="manifest" href="<?php echo esc_url(get_template_directory_uri());?>/assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="<?php echo esc_url(get_template_directory_uri());?>/assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">

  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/theme.css" rel="stylesheet" />

</head>



  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
<main class="main" id="top">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container">
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/gallery/genz-removebg.png" width="150" alt="logo" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
          <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="<?php echo esc_url(home_url('/')); ?>#about"><strong>About Us</strong></a></li>
          <li class="nav-item px-2"><a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>#departments"><strong>Our Impact</strong></a></li>
          <li class="nav-item px-2"><a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>#findUs"><strong>Programmes</strong></a></li>
          <li class="nav-item px-2"><a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>#findUs"><strong>Services</strong></a></li>
          <li class="nav-item px-2"><a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>#departments"><strong>Young People</strong></a></li>
          <li class="nav-item px-2"><a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>#departments"><strong>Support Us</strong> </a></li>
          <li class="nav-item px-2"><a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>#departments"><strong>Latest</strong> </a></li>
          <li class="nav-item px-2"><a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>#departments"><strong>Donate</strong> </a></li>
          <li class="nav-item px-2"><a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>#findUs"><strong>Contact</strong></a></li>
        </ul>
        <!-- <a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="#!">Sign In</a> -->
      </div>
    </div>
  </nav>

