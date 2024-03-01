<?php
/**
 * The template for displaying the header.
 *
 * @package GrowUp-Web
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$directory = esc_url( get_template_directory_uri() ); 

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo('description') ?>" /> 
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ) ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

        <?php wp_head(); ?>
        
        <?php 
            if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); 
        ?>
    </head>

<body <?php body_class(); ?>>
    <header>
        <?php 
            if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) {
        ?>
        <a href="index.php" title="<?php bloginfo('name'); ?>">
            <?php the_custom_logo();?>
        </a>
        <h1 class="text-3xl font-bold underline"><?php  bloginfo( 'name'); ?></h1>

        <?php
        } else {
            bloginfo( 'name' );
        }
        ?>
        <nav>
            <?php 
                wp_nav_menu( array( 
                    'theme_location' => 'secondary', 
                ) ); 
            ?>
        </nav>
    </header>

<?php
	