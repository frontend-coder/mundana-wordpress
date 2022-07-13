<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Mundanapro
 */

get_header();
?>

<main id="primary" class="site-main">

  <?php get_template_part( 'template-parts/content', '404' ); ?>

</main><!-- #main -->

<?php
get_footer();