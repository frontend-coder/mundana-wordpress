<?php
$main_post_c = get_option('main_post');
// взяти число з адмінки в якому визначено кількість постів number of futured posts
$main_post_c = 2;
//var_dump();

if($main_post_c ) {

$exclude = '';
if( is_singular() ) {
  $exclude = $post->ID;
}

$fp = get_posts( array(
  // вивисти пости де е мета поля с значенням is_featured 
  'meta_key' => 'is_featured',
  'posts_per_page' => $main_post_c <4 ? $main_post_c :4,
  // 'exclude' => $exclude,
  ));
//echo '-------'; 
//echo count($fp);


if(count($fp) >1) {
  $mfp = array_shift($fp);
}
}
?>

<?php if( !empty( $fp ) ) :?>
<div class="container pt-4 pb-4">
  <h5 class="font-weight-bold spanborder"><span><?php _e('Read next', 'mundana'); ?></span></h5>
  <div class="row">
    <?php if(!isset($mfp)) : // всього 1 пост у вибраному ?>

    <div class="col-lg-12">
      <?php $post = $fp[0]; setup_postdata( $post ); ?>
      <div class="card border-0 mb-4 box-shadow h-xl-300">
        <div
          style="min-height:150px; background-position:center; background-image: url(<?php echo the_post_thumbnail_url( 'full' ) ?>);background-size: cover; background-repeat: no-repeat;  ">
        </div>
        <div class=" card-body px-0 pb-0 d-flex flex-column align-items-start">
          <h2 class="h4 font-weight-bold">
            <a class="text-dark" href="<?php the_permalink( ); ?>"><?php the_title( ); ?></a>
          </h2>
          <div class="card-text">
            <?php the_excerpt(); ?>
          </div>
          <div>
            <small class="d-block"><?php the_author(); ?></small>
            <small class="text-muted"><?php echo mundana_data($post->ID); ?> ·
              <?php echo mundana_single_readtime($post->ID)?></small>
          </div>
        </div>
      </div>
      <?php wp_reset_postdata(); ?>
    </div>

    <?php else: //більше одного поста в вибраному  ?>

    <div class="col-lg-6">
      <?php $post = $mfp; setup_postdata( $post ); ?>
      <div class="card border-0 mb-4 box-shadow h-xl-300">
        <div
          style="height:150px; min-height:150px; background-position:center; background-image: url(<?php echo the_post_thumbnail_url( 'full' ) ?>);background-size: cover; background-repeat: no-repeat;  ">
        </div>
        <div class=" card-body px-0 pb-0 d-flex flex-column align-items-start">
          <h2 class="h4 font-weight-bold">
            <a class="text-dark" href="<?php the_permalink( ); ?>"><?php the_title( ); ?></a>
          </h2>
          <div class="card-text">
            <?php the_excerpt(); ?>
          </div>
          <div>
            <small class="d-block"><?php the_author(); ?></small>
            <small class="text-muted"><?php echo mundana_data($post->ID); ?> ·
              <?php echo mundana_single_readtime($post->ID)?></small>
          </div>
        </div>
      </div>
      <?php wp_reset_postdata(); ?>
    </div>

    <div class="col-lg-6">
      <div class="flex-md-row mb-4 box-shadow h-xl-300">

        <?php foreach($fp as $post) : setup_postdata( $post ); ?>

        <div class="mb-3 d-flex align-items-center">
          <img height="80" src="<?php echo the_post_thumbnail_url( 'full' ) ?>">

          <div class="pl-3">
            <h2 class="mb-2 h6 font-weight-bold">
              <a class="text-dark" href="<?php the_permalink( ); ?>"><?php the_title( ); ?></a>
            </h2>
            <div class="card-text text-muted small">
              Jake Bittle in LOVE/HATE
            </div>
            <small class="text-muted">Dec 12 · 5 min read</small>
          </div>
        </div>

        <?php wp_reset_postdata();
        endforeach;
        ?>

      </div>
    </div>


    <?php endif; ?>











  </div>
</div>

<?php endif; ?>