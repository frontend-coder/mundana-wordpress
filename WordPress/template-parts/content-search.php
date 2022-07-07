<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mundanapro
 */

?>

<div <?php post_class('mb-3 d-flex justify-content-between 9'); ?>>
  <div class="pr-3">
    <h2 class="mb-1 h4 font-weight-bold">
      <a class="text-dark" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    </h2>
    <div>
      <?php the_excerpt(  ); ?>
    </div>
    <div class="card-text text-muted small">
      <?php the_author() . _e(' in category ', 'mundana ') . the_category(', ')  ; ?>
    </div>
    <small class="text-muted"> <?php echo mundana_post_data($post->ID); ?> </small>
  </div>
  <img height="120" src="<?php the_post_thumbnail_url( 'full' ) ?>" />
</div>