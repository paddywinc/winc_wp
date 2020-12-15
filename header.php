<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title( '&ndash;', true, 'right' ); ?></title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
	  <a href="<?= esc_url(home_url('/')); ?>">
    <img class="brand" src="<?php the_field('logo','option');?>">
  </a>
 <div id="nav-burger">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
   </div>
</header>
  <nav role="navigation" class="nav">
   <?php
	wp_nav_menu( array( 
	    'theme_location' => 'primary' ) ); 
	?>
  </nav>
  
<main class="main">
