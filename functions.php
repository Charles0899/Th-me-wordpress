<?php
add_theme_support('title-tag');

function register_my_menu() {
register_nav_menu('header-menu',__( 'Header Menu' ));
register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_theme_support( 'post-thumbnails' );

function themename_custom_header_setup() {
$args = array(
'default-image' => get_template_directory_uri() . '/img/header.jpg',
'width' => 20,
'height' => 50,
'flex-width' => true,
'flex-height' => true,
);
add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );

function test_register_assets() {
wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css');
wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js', [ 'popper'], false, true);
wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], false, true);
wp_enqueue_style('bootstrap');
wp_enqueue_style('style', get_stylesheet_uri());
wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'test_register_assets');
add_action('wp_euqueue_scripts', 'montheme_register_assets');

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

function themename_custom_logo_setup() {
$defaults = array(
'default-image' => get_template_directory_uri() . '/img/logo.png',
'height' => 50,
'width' => 50,
'flex-height' => true,
'flex-width' => true,
'header-text' => array( 'site-title', 'site-description' ),
'class' => 'icon-diamond'
);
add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


register_sidebar( array(
	'id' => 'blog-sidebar',
	'name' => 'Blog',
	'before_widget'  => '<div class="site__sidebar__widget %2$s">',
 'after_widget'  => '</div>',
 'before_title' => '<p class="site__sidebar__widget__title">',
 'after_title' => '</p>',
) );

register_sidebar( array(
	'id' => 'footer-sidebar',
	'name' => 'Footer',
	'before_widget'  => '<div class="site__sidebar__widget %2$s">',
 'after_widget'  => '</div>',
 'before_title' => '<p class="site__sidebar__widget__title">',
 'after_title' => '</p>',
) );


?>
