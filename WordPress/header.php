<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mundanapro
 */
  
?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/favicon.ico" />
  <link rel="icon" type="image/png" href="./assets/img/favicon.ico" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
    name="viewport" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!--------------------------------------
NAVBAR
--------------------------------------->
  <nav class="topnav navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo home_url('/' ); ?>"><strong><?php bloginfo( 'name' );?></strong></a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02"
        aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbarColor02" style="">

        <?php wp_nav_menu( array(
	'theme_location' => 'header_menu',
	'container' => false,
	'menu_class' => 'navbar-nav mr-auto d-flex align-items-center',
	'walker' => new  Mundana_Menu(), 
	) );

?>


        <!-- <ul class="navbar-nav mr-auto d-flex align-items-center">
          <li class="nav-item">
            <a class="nav-link" href="./index.html">Intro <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./article.html">Culture</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./article.html">Tech</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./article.html">Politics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./article.html">Health</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./article.html">Collections</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./docs.html">Template <span class="badge badge-secondary">docs</span></a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto d-flex align-items-center">
          <li class="nav-item highlight">
            <a class="nav-link" href="https://www.wowthemes.net/mundana-free-html-bootstrap-template/">Get this
              Theme</a>
          </li>
        </ul> -->


        <?php get_search_form(); ?>



      </div>
    </div>
  </nav>
  <!-- End Navbar -->