<?php


/**
 * Enqueue scripts and styles.
 */
function mundana_scripts() {
	wp_enqueue_style( 'mundana-style', get_stylesheet_uri(), array(), _S_VERSION );
	
	
	wp_enqueue_style( 'mundana-google-font', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Source+Sans+Pro:400,600,700');
	wp_enqueue_style( 'mundana-awesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css');
	wp_enqueue_style( 'mundana-maincss',  get_template_directory_uri() .'/assets/css/main.css');


	wp_style_add_data( 'mundana-style', 'rtl', 'replace' );


wp_deregister_script( 'jquery' );
wp_register_script('jquery', get_template_directory_uri(  ).'/assets/js/vendor/jquery.min.js', array(), false, true);
wp_enqueue_script('jquery');

wp_enqueue_script( 'mundana-popper', get_template_directory_uri() . '/assets/js/vendor/popper.min.js', array(), false, true );

wp_enqueue_script( 'mundana-bootstrapjs', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array(), false, true );
wp_enqueue_script( 'mundana-function', get_template_directory_uri() . '/assets/js/functions.js', array(), false, true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mundana_scripts' );

