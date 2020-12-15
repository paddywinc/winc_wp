<?php

function winc_wp_register_menus() {
	register_nav_menus(
		array(
			'primary' => __( 'Primary' ),
		)
	);
}
add_action( 'init', 'winc_wp_register_menus' );
