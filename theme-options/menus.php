<?php 

function menu_setup() {
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'standard' ),
			'menu-2' => esc_html__( 'Secondary', 'standard' ),
			'menu-3' => esc_html__( 'Third', 'standard' ),
		)
	);
}
add_action( 'after_setup_theme', 'menu_setup' );