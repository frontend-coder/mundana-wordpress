<div <?php post_class('mb-3 d-flex justify-content-between 9'); ?>>
  <div class="pr-3">
    <img height="120" src="<?php the_post_thumbnail_url( 'full' ) ?>" />
    <h2 class="mb-1 h4 font-weight-bold">
      <a class="text-dark" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    </h2>
  </div>

</div>