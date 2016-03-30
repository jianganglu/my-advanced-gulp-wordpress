<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">

    <link href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url'); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php get_search_form(); ?>
    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    <?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
    <?php
      if( function_exists( 'wp_nav_menu' ) ) {
        wp_nav_menu(array( 'theme_location' => 'primary', 'menu_id' => 'nav', 'container' => 'ul' ));
      }
    ?>