<form class="d-flex" method="get" id="searchform" action="<?php echo home_url('/' ); ?>">
  <i class="fa fa-search"></i>
  <input type="search" name="s" id="s" class="form-control mr -2"
    placeholder="<?php esc_html_e('Have a question? Ask Now','mundana') ?>">
  <button class="btn btn-outline-success"><?php esc_html_e('Search','mundana') ?></button>
</form>