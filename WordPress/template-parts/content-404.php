<div class="container">
  <div class="jumbotron jumbotron-fluid mb-3 pl-0 pt-0 pb-0 bg-white position-relative">
    <div class="h-100 tofront">
      <div class="row justify-content-between">
        <div class="col-md-12 pt-6 pb-6 pr-6 align-self-center">
          <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'mundana' ); ?></h1>
          <p>
            <?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'mundana' ); ?>
          </p>
        </div>
        <div class="col-md-12 pr-0">

          <div class="widget widget_categories">
            <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'mundana' ); ?></h2>
            <ul>
              <?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
            </ul>


            <?php
					/* translators: %1$s: smiley */
					$mundana_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'mundana' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$mundana_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>





          </div>
        </div>
      </div>
    </div>
  </div>
</div>