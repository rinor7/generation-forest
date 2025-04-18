<?php 

function custom_post_type() {
    register_post_type('our-team', array(
        'labels' => array('name' => 'Our Team'),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions'),
        'taxonomies' => array('our-team-category', 'post_tag'), //if you need "Uncategorized" category, replace "custom_taxonomy" with "category"
        'menu_position' => 8,
        'menu_icon' => 'dashicons-welcome-add-page',
    ));

    register_post_type('our-projects', array(
        'labels' => array('name' => 'Our Projects'),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions'),
        'taxonomies' => array('category', 'post_tag'), //if you need "Uncategorized" category, replace "custom_taxonomy" with "category"
        'menu_position' => 8,
        'menu_icon' => 'dashicons-welcome-add-page',
    ));

    register_post_type('our-partners', array(
        'labels' => array('name' => 'Our Partners'),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions'),
        'taxonomies' => array('our-partners-category', 'post_tag'), //if you need "Uncategorized" category, replace "custom_taxonomy" with "category"
        'menu_position' => 8,
        'menu_icon' => 'dashicons-welcome-add-page',
    ));
}
add_action('init', 'custom_post_type');
