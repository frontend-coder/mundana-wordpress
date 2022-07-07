<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mundanapro
 */

get_header();
?>


<main id="primary" class="site-main">

  <!--------------------------------------
Main
--------------------------------------->
  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-md-8">
        <?php get_template_part( 'template-parts/futured-category-post' ); ?>

        <h5 class="font-weight-bold spanborder"><span><?php _e('Latest','mundana'); ?></span></h5>

        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : 	the_post(); ?>

        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

        <?php endwhile; ?>

        <?php the_posts_pagination(array(
						'type' => 'list',
						)); ?>
        <?php else : ?>
        <p> <?php _e('No posts yet', 'mundana') ?> </p>
        <?php endif; ?>

      </div>


      <div class="col-md-4 pl-4">
        <div class="sticky-top">

          <?php get_sidebar();?>

        </div>
      </div>

    </div>
  </div>

  <div class="container pt-4 pb-4">
    <div class="border p-5 bg-lightblue">
      <div class="row justify-content-between">
        <div class="col-md-6">
          <h5 class="font-weight-bold secondfont">Become a member</h5>
          Get the latest news right in your inbox. It's free and you can
          unsubscribe at any time. We hate spam as much as we do, so we never
          spam!
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="First name" />
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Last name" />
            </div>
            <div class="col-md-12 mt-3">
              <button type="submit" class="btn btn-success btn-block">
                Subscribe
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Main -->
</main><!-- #main -->






<?php
// get_sidebar();
get_footer();