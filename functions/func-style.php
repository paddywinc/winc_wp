<?php

function winc_wp_theme_styles() {

	$theme_handle_prefix = 'wincwp';

	wp_enqueue_style( $theme_handle_prefix . '-styles', get_template_directory_uri() . '/assets/css/' . $theme_handle_prefix .'.min.css', array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'winc_wp_theme_styles' );
