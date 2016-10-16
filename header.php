<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- <link href="<?php bloginfo('template_directory'); ?>/carousel.css" rel="stylesheet"> -->

<link href='http://fonts.googleapis.com/css?family=Buenard:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<!-- Bootstrap Core CSS -->
<link href="<?php echo esc_url( bloginfo('template_directory') . '/startbootstrap-freelancer/vendor/bootstrap/css/bootstrap.min.css' ); ?>" rel="stylesheet">

<!-- Theme CSS -->
<link href="<?php echo esc_url( bloginfo('template_directory') . '/startbootstrap-freelancer/css/freelancer.css' ); ?>" rel="stylesheet">

<!-- Custom Fonts -->

<link href="<?php echo esc_url( bloginfo('template_directory') . '/startbootstrap-freelancer/vendor/font-awesome/css/font-awesome.min.css' ); ?>" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<?php
    /*
     *  Add this to support sites with sites with threaded comments enabled.
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );

    wp_get_archives('type=monthly&format=link');

    wp_head();
?>
</head>
<body id="page-top" class="index">

  <!-- Navigation -->
  <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand" href="#page-top">Fisitrónica</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php  /* menu */
            wp_nav_menu( array(
              'menu'              => 'primary',
              'theme_location'    => 'primary-menu',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
          );
        ?>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
  </nav>

  <!-- Header -->
  <header>
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-md-offset-3 col-md-2">
                    <img src="<?php echo esc_url( bloginfo('template_directory') . '/includes/img/logo.svg' ); ?>" alt="Fisitrónica" class="img-responsive">
                  </div>
                  <div class=" col-md-5">
                    <div class="intro-text">
                        <span class="name">Fisitrónica</span>
                        <span class="skills">Associació d'Electrònica i Robòtica de la Facultat de Física de la UB</span>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </header>

  <!-- <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
      <a class="navbar-brand" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
  <?php else : ?>
        <a class="navbar-brand" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a>
  <?php endif; ?> -->
