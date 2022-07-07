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


        <h5 class="font-weight-bold spanborder"><span><?php _e('Search by query: ','mundana'); ?></span>
          <?php echo get_search_query(); ?>
        </h5>

        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : 	the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'search' ); ?>

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
          <h5 class="font-weight-bold spanborder">
            <span>Popular in Science</span>
          </h5>
          <ol class="list-featured">
            <li>
              <span>
                <h6 class="font-weight-bold">
                  <a href="./article.html" class="text-dark">Did Supernovae Kill Off Large Ocean Animals?</a>
                </h6>
                <p class="text-muted">Jake Bittle in SCIENCE</p>
              </span>
            </li>
            <li>
              <span>
                <h6 class="font-weight-bold">
                  <a href="./article.html" class="text-dark">Humans Reversing Climate Clock: 50 Million Years</a>
                </h6>
                <p class="text-muted">Jake Bittle in SCIENCE</p>
              </span>
            </li>
            <li>
              <span>
                <h6 class="font-weight-bold">
                  <a href="./article.html" class="text-dark">Unprecedented Views of the Birth of Planets</a>
                </h6>
                <p class="text-muted">Jake Bittle in SCIENCE</p>
              </span>
            </li>
            <li>
              <span>
                <h6 class="font-weight-bold">
                  <a href="./article.html" class="text-dark">Effective New Target for Mood-Boosting Brain Stimulation
                    Found</a>
                </h6>
                <p class="text-muted">Jake Bittle in SCIENCE</p>
              </span>
            </li>
          </ol>
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