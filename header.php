<!DOCTYPE html>
<html lang="pl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="Damian Ficek" content="Damian Ficek">


    <title>
        <?php
        //echo bloginfo('name');
        //echo wp_title();
  if(is_archive()) {
    echo ucfirst(trim(wp_title('', false))) . ' - ';
  } else
  if(!(is_404()) && (is_single()) || (is_page())) {
    $title = wp_title('', false);
    if(!empty($title)) {
      echo $title . ' - ';
    }
  } else
  if(is_404()) {
    echo 'Nie znaleziono strony ';
  }
  if(is_home()) {
    bloginfo('name');
    echo ' - ';
    bloginfo('description');
  } else {
    echo bloginfo('name');
  }
  global $paged;
  if($paged > 1) {
    echo ' - strona ' . $paged;
  }
  ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?php bloginfo('template_url'); ?>/sass/grid.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <?php wp_head(); ?>
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet">

</head>

<body id="page-top" <?php body_class(); ?>>
    <div class="body_wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container-fluid">
                <a class="navbar-brand js-scroll-trigger" href="<?php echo esc_url(home_url('/')); ?>"><img
                        src="<?php the_field('logo', 6); ?>" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <?php wp_nav_menu(array('theme_location' => 'poziome-menu_1',
                                  'menu_class' => 'navbar-nav',
                                  'container' => false
           )); ?>
                    </ul>
                </div>
            </div>
        </nav>