<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/fonts/fonts.min.css" />

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">

    <title><?php if(is_home()) { echo bloginfo("name"); echo " - "; echo bloginfo("description"); } else { echo wp_title(" - ", false, right); } ?></title>
  </head>
  <?php wp_head(); ?>
  <body>

<section class="header">
  <div class="container">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php bloginfo('home') ?>"><img src="<?php bloginfo('template_url') ?>/logo-evoke.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" href="<?php bloginfo('home') ?>">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php bloginfo( 'url' ); ?>/quem-somos">Quem Somos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php bloginfo( 'url' ); ?>/trabalhos">Trabalhos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php bloginfo( 'url' ); ?>/blog">Blog da Evoke</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php bloginfo( 'url' ); ?>/contato">Contato</a>
        </li>  

      </ul>
    </div>


  </nav>



  </div>
</section>
    
