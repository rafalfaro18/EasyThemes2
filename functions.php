<?php
/**
 * Enqueue scripts and styles
 */
function customthemes_scripts() {
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'style', get_stylesheet_uri() ); 

	
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
		wp_enqueue_script( 'bootstrap_scripts', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
	//Because WordPress uses jquery itself just need a call to it
	wp_enqueue_script( 'jquery');
	
}

	add_action( 'wp_enqueue_scripts', 'customthemes_scripts' );
	
	
	
	
	//enqueues our locally supplied font awesome stylesheet
function enqueue_our_required_stylesheets(){
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');




/* enqueues our external font awesome stylesheet
function enqueue_our_required_stylesheets(){
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets'); */

/* ---------- Support for Featured Image ---------- */

add_theme_support( 'post-thumbnails' );
	

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'main menu', 'Easy Themes 2' ),
) );


/**
* Proper way to add Logo Upload Capability
*/

function themeslug_theme_customizer( $wp_customize ) {

$wp_customize->add_section( 'themeslug_logo_section' , array(
'title' => __( 'Logo', 'themeslug' ),
'priority' => 30,
'description' => 'Upload a logo to replace the default site name and description in the header',
) );

$wp_customize->add_setting( 'themeslug_logo' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
'label' => __( 'Logo', 'themeslug' ),
'section' => 'themeslug_logo_section',
'settings' => 'themeslug_logo',
) ) );

}

add_action('customize_register', 'themeslug_theme_customizer');

/************** Register Menu*******************/ 

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function my_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Left',
		'id'            => 'footer_left',
		
	) );
	register_sidebar( array(
		'name'          => 'Footer Center',
		'id'            => 'footer_center',
		
	) );
	register_sidebar( array(
		'name'          => 'Footer Right',
		'id'            => 'footer_right',
		
	) );
	register_sidebar( array(
		'name'          => ' Right Column Sidebar',
		'id'            => 'right_sidebar',
		
	) );
}
add_action( 'widgets_init', 'my_widgets_init' );

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a href="'. get_permalink($post->ID) . '">&nbsp;  read more  &#187;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

