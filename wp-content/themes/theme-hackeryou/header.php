<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/ulock.png"/>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

  <link href='http://fonts.googleapis.com/css?family=Oswald:700|Lato:300,400,700' rel='stylesheet' type='text/css'>

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
  <div class="overlay">
<header>
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_locations' => 'primary'
    )); ?>
  <div class="container">
  <div class="containerOverlay">
    <h1>
        <?php bloginfo( 'name' ); ?>  
    </h1>
  
  </div> <!-- /.container -->
</header><!--/.header-->

