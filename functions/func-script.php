<?php

function winc_wp_theme_scripts() {


	$theme_handle_prefix = 'wincwp';

	
	wp_enqueue_script( $theme_handle_prefix . '-vendor-scripts', get_template_directory_uri() . '/assets/js/' . $theme_handle_prefix . '-vendor.min.js', array( 'jquery' ), '1.0.0', true );

	wp_enqueue_script( $theme_handle_prefix . '-scripts', get_template_directory_uri() . '/assets/js/' . $theme_handle_prefix . '.min.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'winc_wp_theme_scripts' );
