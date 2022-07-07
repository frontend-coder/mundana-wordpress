<div class="container">
  <div class="jumbotron jumbotron-fluid mb-3 pl-0 pt-0 pb-0 bg-white position-relative">
    <div class="h-100 tofront">
      <div class="row justify-content-between">
        <div class="col-md-6 pt-6 pb-6 pr-6 align-self-center">
          <p class="text-uppercase font-weight-bold">
            <?php the_category( ', ' ) ?>
          </p>
          <h1 class="display-4 secondfont mb-3 font-weight-bold"><?php the_title(); ?></h1>
          <p class="mb-3">
            Analysts told CNBC that the currency could hit anywhere between $1.35-$1.40 if the deal gets passed
            through the U.K. parliament.
          </p>
          <div class="d-flex align-items-center">
            <!-- <?php the_post_thumbnail_url( 'full' ) ?> -->

            <img class="rounded-circle" src="assets/img/demo/avatar2.jpg" width="70">

            <small class="ml-2">
              <?php the_author(); ?><span
                class="text-muted d-block"><?php echo munduna_get_human_time(); echo mundana_single_readtime($post->ID); ?></span>
            </small>
          </div>
        </div>
        <div class="col-md-6 pr-0">
          <?php the_post_thumbnail( 'full' ) ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Header -->
<!--------------------------------------
MAIN
--------------------------------------->
<div class="container pt-4 pb-4">
  <div class="row justify-content-center">
    <div class="col-lg-2 pr-4 mb-4 col-md-12">
      <div class="sticky-top text-center">
        <div class="text-muted">
          Share this
        </div>
        <div class="share d-inline-block">
          <!-- AddToAny BEGIN -->
          <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
            <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
            <a class="a2a_button_facebook"></a>
            <a class="a2a_button_twitter"></a>
          </div>
          <script async src="https://static.addtoany.com/menu/page.js"></script>
          <!-- AddToAny END -->
        </div>
      </div>
    </div>
    <div class="col-md-12 col-lg-8">



      <article class="article-post">
        <?php the_content(''); ?>
      </article>

      <div class="border p-5 bg-lightblue">
        <div class="row justify-content-between">
          <div class="col-md-5 mb-2 mb-md-0">
            <h5 class="font-weight-bold secondfont">Become a member</h5>
            Get the latest news right in your inbox. We never spam!
          </div>
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Enter your e-mail address">
              </div>
              <div class="col-md-12 mt-2">
                <button type="submit" class="btn btn-success btn-block">Subscribe</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>