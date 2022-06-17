	<?php
  
function mundana_add_admin_page() {
$hook_sufix =  add_menu_page(__('Mondana Theme Option','mondana'), __('Theme Option','mondana'), 'manage_options', 'mundana-options', 'munduna_create_page', 'dashicons-admin-customizer', 81 );
// test-options - слаг
// 'dashicons-admin-customizer' or get_template_directory_uri().'/assets/img/moon.png' 

add_action("admin_print_scripts-{$hook_sufix}", "mundana_admin_styles");

// активую опції
add_action('admin_init', 'mundana_custom_setting');

//add_action('admin_enqueue_scripts', 'test_admin_styles');
}
function munduna_create_page() { 
// функція, яка створює сторінку зі всіма елементами
?>
	<div class="wrap mundana-options-wrap">
	  <h3><?php echo __('Theme options page', 'mundana') ?> </h3>
	  <!-- // обробка помилок на панелі з опціями теми -->
	  <?php settings_errors(); ?>
	  <form action="options.php" method="post">
	    <?php settings_fields('mundana_general_group' );?>
	    <?php do_settings_sections('mundana-options' );?>


	    <?php submit_button();?>

	  </form>

	</div>
	<?php
}

add_action('admin_menu', 'mundana_add_admin_page');

function mundana_custom_setting(){
  // рееструю опцію
register_setting( 'mundana_general_group', 'main_post' );

// рееструю секцію
add_settings_section( 'mundana_general_section', __('Home page settings', 'mundana'), '', 'mundana-options' );
  // рееструю поле вводу в секції mundana_general_section
add_settings_field('main_post',  __('Home article', 'mundana'), 'mundana_general_mainpost', 'mundana-options','mundana_general_section' );

}

function mundana_general_mainpost() {
  $main_post_id = esc_attr( get_option('main_post'));
	// значення поля забирается з input, який має атрибут name = main_post
	if($main_post_id) {
		$main_post = get_post($main_post_id);
	}
	
	$main_post_title = ! empty($main_post) ? $main_post->post_title : '';
	echo '<input style="border:3px solid #eeeeee " type="text" id="main_post" class="regular_text">';
  echo '<p class="description" id="main_post_title" >';
	if($main_post_title) {
		echo '<strong>' . __('Post selected ', 'mundana') . '</strong>' .$main_post_title ;
	}
	echo '</p>';
  ?>

	<input type="hidden" name="main_post" id="main_post_id" class="regular_text" value="<?php echo $main_post_id; ?>">
	<!-- name="main_post" повинно відповідати другому параметру register_setting  -->
	<?php
}


//як підєднати стілі до адмінки

function mundana_admin_styles() {
wp_enqueue_style('mundana-jquery-ui-style', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.1/themes/base/jquery-ui.css');

wp_enqueue_style('mundana-admin-style', get_template_directory_uri().'/assets/css/admin-style.css');
wp_enqueue_script('mundana-admin-scripts', get_template_directory_uri().'/assets/js/admin-js.js', array('jquery', 'jquery-ui-autocomplete'), false, true);
//jquery-ui-autocomplete іде в комплекті і забезпечує пошук данних на сервері, це забезпечує работу поля в панелі опцій теми

}

/** Працюю з AJAX запитом  */  

add_action('wp_ajax_main_post_action', function(){
$main_post_s = $_GET['term'];
$result= [
	['label' => 'gggg',
	'id' => 1,
	] ,
	['label' => 'frregggg',
	'id' => 2,
],
['label' => '4reergggg',
'id' => 3,
],

];
echo json_encode($result);
wp_die();
});