<?php
function custom_theme_support() {
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
	add_theme_support( 'menus' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'custom_theme_support' );

function readScript() {
	wp_enqueue_style( 'ress', get_template_directory_uri() . '/sass/Foundation/ress-master/ress.css', array(), $theme_version );
	wp_enqueue_style( 'mplus', '//mplus-fonts.sourceforge.jp/webfonts/basic_latin/mplus_webfonts.css', array(), '1.0.0' );
	wp_enqueue_style( 'mplus', '//mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css', array(), '1.0.0' );
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), $theme_version );
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', '', '3.4.1', true );
	wp_enqueue_script( 'sideber-script', get_template_directory_uri() . '/js/sideber-menu.js', 'jquery' , $theme_version , true );
}
add_action( 'wp_enqueue_scripts', 'readScript' );

add_filter( 'show_admin_bar', '__return_false' );
