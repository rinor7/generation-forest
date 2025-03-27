<?php

function standard_widgets_init() {
	register_sidebar(
		array('name'          => esc_html__( 'Widget 1', 'standard' ),
			'id'            => 'widget-1',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Footer Newsletter', 'standard' ),
			'id'            => 'footer-8',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Widget 2', 'standard' ),
			'id'            => 'widget-2',)
	); 
	register_sidebar(
		array('name'          => esc_html__( 'Widget 3', 'standard' ),
			'id'            => 'widget-3',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Widget 4', 'standard' ),
			'id'            => 'widget-4',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Widget 5', 'standard' ),
			'id'            => 'widget-5',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Widget 6', 'standard' ),
			'id'            => 'widget-6',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'footer 1', 'standard' ),
			'id'            => 'footer-1',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'footer 2', 'standard' ),
			'id'            => 'footer-2',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'footer 3', 'standard' ),
			'id'            => 'footer-3',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'footer 4', 'standard' ),
			'id'            => 'footer-4',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'footer 5', 'standard' ),
			'id'            => 'footer-5',)
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
		array('name'          => esc_html__( 'Contact Form 1', 'standard' ),
			'id'            => 'cf-1',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Contact Form 2', 'standard' ),
			'id'            => 'cf-2',)
	);
}
add_action( 'widgets_init', 'standard_widgets_init' );