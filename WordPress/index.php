<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mundanapro
 */
  
get_header('mainpage');
?>
<?php
$main_post_cnt = 4;
if( $main_post_cnt ) {
  $featured_posts = get_posts(  array(
    'meta_key' => 'is_featured', 
    'posts_per_page' => $main_post_cnt,
  ) );
//  echo count($featured_posts);
if(count($featured_posts ) >1) {
  $mfp = array_shift($featured_posts);
}
}
?>


<?php if(!empty($featured_posts)) : ?>
<div class="container pt-4 pb-4">
  <div class="row">

    <?php if(!isset($mfp)): // якщо1 пост у вибраному -->
 ?>

    <div class="col-lg-12">
      <?php $post = $featured_posts[0]; setup_postdata( $post ); ?>
      <div class="card border-0 mb-4 box-shadow h-xl-300">
        <div style="
                background-image: url(<?php echo the_post_thumbnail_url( 'full' ); ?>);
                height: 150px;
                background-size: cover;
                background-repeat: no-repeat;
              "></div>
        <div class="card-body px-0 pb-0 d-flex flex-column align-items-start">
          <h2 class="h4 font-weight-bold">
            <a class="text-dark" href="<?php the_permalink()?>"><?php the_title(); ?></a>
          </h2>
          <p class="card-text">
            <?php the_content(''); ?>
          </p>
          <div>
            <small class="d-block">
              <?php the_author() . _e(' in category ', 'mundana') . the_category(', ')  ; ?></small>
            <!-- <small class="text-muted">Dec 12 &middot; 5 min read</small> -->
            <?php echo mundana_post_data($post->ID); ?>
          </div>
        </div>
      </div>
      <?php wp_reset_postdata(); ?>
    </div>

    <?php else: // якщо більше 1 поста у вибраному
?>

    <div class="col-lg-6">

      <?php $post = $mfp; setup_postdata($post); ?>
      <div class="card border-0 mb-4 box-shadow h-xl-300">
        <div style="
                background-image: url(<?php echo the_post_thumbnail_url('full'); ?>);
                height: 150px;
                background-size: cover;
                background-repeat: no-repeat;
              "></div>
        <div class="card-body px-0 pb-0 d-flex flex-column align-items-start">
          <h2 class="h4 font-weight-bold">
            <a class="text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
          <div class="card-text">
            <?php the_excerpt(); ?>

            <small class="d-block">
              <?php the_author() . _e(' in category ', 'mundana') . the_category(', ')  ; ?></small>
            <!-- <small class="text-muted">Dec 12 &middot; 5 min read</small> -->
            <?php echo mundana_post_data($post->ID); ?>

          </div>



        </div>
      </div>
      <?php wp_reset_postdata(); ?>
    </div>


    <div class="col-lg-6">
      <div class="flex-md-row mb-4 box-shadow h-xl-300">

        <?php foreach( $featured_posts as $post ) : setup_postdata($post); ?>
        <div class="mb-3 d-flex align-items-center">
          <img width="100" height="auto" src="<?php echo the_post_thumbnail_url( 'full' ) ?>" />
          <div class="pl-3">
            <h2 class="mb-2 h6 font-weight-bold">
              <a class="text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <div class=" card-text text-muted small">
              <?php the_author() . _e(' in category ', 'mundana ') . the_category(', ')  ; ?>
            </div>
            <!-- <small class="text-muted">Dec 12 &middot; 5 min read</small> -->
            <?php echo mundana_post_data($post->ID); ?>
          </div>
        </div>
        <?php endforeach;  wp_reset_postdata(); ?>




      </div>
    </div>
    <?php endif; ?>



  </div>
</div>
<?php endif; ?>

<div class=" container">
  <div class="row justify-content-between">
    <div class="col-md-8">
      <h5 class="font-weight-bold spanborder">
        <span><?php _e('All Stories', 'mundana'); ?></span>
      </h5>

      <?php if( have_posts() ) : while( have_posts() ) : the_post() ?>

      <?php get_template_part( 'template-parts/content','none' ); ?>

      <?php endwhile;
    
    the_posts_navigation(array('type' => 'list',));
    
    else:  ?>
      <p><?php _e('No posts yet', 'mundana'); ?></p>
      <?php endif; ?>




    </div>


    <div class="col-md-4 pl-4">
      <h5 class="font-weight-bold spanborder"><span>Popular</span></h5>
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
              <a href="./article.html" class="text-dark">Effective New Target for Mood-Boosting Brain
                Stimulation
                Found</a>
            </h6>
            <p class="text-muted">Jake Bittle in SCIENCE</p>
          </span>
        </li>
      </ol>
    </div>

  </div>
</div>




<!-- #main -->

<?php

get_footer();