<?php
/**
 * Theme functions and definitions
 *
 * @package GrowUp-Web
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! isset( $content_width ) ) {
	$content_width = 800;
}


if ( ! function_exists( 'growuptheme_setup' ) ) :
	function growuptheme_setup() {
        /**Filters and actions**/
        add_filter( 'body_class', 'growup_body_classes', 999);
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 250, 250 ); 
        add_filter( 'excerpt_length', 'growup_custom_length', 999 );


        /**Customize**/
        add_theme_support( 'custom-background', apply_filters( 'args', array(
            'default-color' => 'F1F1F1',
            'default-image' => '',
        ) ) );
        add_theme_support( 'custom-logo', array(
            'height'      => 100, 
            'width'       => 247, 
            'flex-height' => true,
            'flex-width'  => true,
        ) );
		register_nav_menus( array(
			'primary'   => __( 'Primary Menu', 'growuptheme' ),
		) );
        
        /**Scripts**/
        add_action('wp_enqueue_scripts', 'call_jquery');
        wp_enqueue_style( 'tailwindcss_output', get_template_directory_uri() . '/dist/css/output.css', array(), '1.0', 'all' );
	}
endif;
add_action( 'after_setup_theme', 'growuptheme_setup' );

/**Custom functions **/

function growup_body_classes( $classes ){
    if ( is_home() ) {
        $classes[] = 'home-page mx-auto container';
    }
    if ( is_singular() ) {
        $classes[] = 'single-post container mx-auto';
    }
    if ( is_archive() ) {
        $classes[] = 'archive-post container mx-auto';
    }
    if ( is_search() ) {
        $classes[] = 'search container mx-auto';
    }
    if ( is_author() ) {
        $classes[] = 'author-page container mx-auto';
    }
    return $classes;
}

function remove_wpemoji() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'remove_wpemoji' );

function growup_custom_length( $length ) {
    return 20; 
}

function call_jquery(){
    wp_enqueue_script( 'jquery' );
}
