<?php

function standard_widgets_init() {
	register_sidebar(
		array('name'          => esc_html__( 'Dark Logo', 'standard' ),
			'id'            => 'widget-1',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Light Logo', 'standard' ),
			'id'            => 'widget-1-light',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Footer Newsletter', 'standard' ),
			'id'            => 'footer-8',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Footer Copyright Links', 'standard' ),
			'id'            => 'footer-6',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Footer Copyright Text', 'standard' ),
			'id'            => 'footer-7',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Footer Column 1', 'standard' ),
			'id'            => 'footer-1',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Footer Column 2', 'standard' ),
			'id'            => 'footer-2',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Footer Column 3', 'standard' ),
			'id'            => 'footer-3',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Footer Column 4', 'standard' ),
			'id'            => 'footer-4',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Footer Column 5', 'standard' ),
			'id'            => 'footer-5',)
	);
}
add_action( 'widgets_init', 'standard_widgets_init' );