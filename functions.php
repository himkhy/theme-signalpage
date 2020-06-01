<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 *
 */
//Register style in functions
function add_style(){
	wp_enqueue_style('style',get_template_directory_uri()."/css/style.css");
	wp_enqueue_style('bootstrap',get_template_directory_uri()."/css/bootstrap.min.css");
}
add_action('wp_enqueue_scripts','add_style');

//Register script in functions
function add_script(){
	wp_enqueue_script('prefixfree',get_template_directory_uri().'/js/prefixfree.min.js');	
	wp_enqueue_script('myscript',get_template_directory_uri().'/js/myscript.js');

}
add_action('wp_enqueue_scripts', 'add_script');


//Register multiple menu in functions
function register_my_menus() {
register_nav_menus(
	array(	     
	      'header-menu' => __('Header Menu')	      
	 ) 
 );
}
add_action( 'init', 'register_my_menus' );

//Register Post Type (add imagee)
function add_image(){
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','add_image');

//Register Post Type (slide)
register_post_type('slideimage',array(
	'labels'=>array(
	'name'=>'slide',
    	'add_new_item'=>'Add New slide',
	),
	'menu_icon'=>'dashicons-format-gallery',
	'public'=>true ,
	'supports' => array('thumbnail','page-attributes' ),
));



