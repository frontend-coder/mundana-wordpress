<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Mundanapro
 */

get_header();
?>

<main id="primary" class="site-main">

  <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : 	the_post(); ?>
  <!--------------------------------------
HEADER
--------------------------------------->

  <?php get_template_part( 'template-parts/single', get_post_format() ); ?>

  <?php endwhile;
	      endif; ?>

  <?php get_template_part( 'template-parts/futured-posts' ); ?>

  <!-- End Main -->

</main><!-- #main -->

<?php
get_footer();
