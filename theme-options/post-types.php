<?php 

function custom_post_type() {
    register_post_type('our-team', array(
        'labels' => array('name' => 'Our Team'),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions'),
        'taxonomies' => array('our-team-category', 'post_tag'), //if you need "Uncategorized" category, replace "custom_taxonomy" with "category"
        'menu_position' => 8,
        'menu_icon' => 'dashicons-universal-access-alt',
    ));

    register_post_type('our-projects', array(
        'labels' => array('name' => 'Our Projects'),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions'),
        'taxonomies' => array('category', 'post_tag'), //if you need "Uncategorized" category, replace "custom_taxonomy" with "category"
        'menu_position' => 8,
        'menu_icon' => 'dashicons-database-add',
    ));

    register_post_type('our-content', array(
        'labels' => array('name' => 'CCC Page Content'),
        'public' => false, // Not publicly queryable
        'publicly_queryable' => false, // Disable single post page
        'show_ui' => true, // Still show in admin
        'show_in_menu' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions'),
        'taxonomies' => array('our-content-category'),
        'menu_position' => 10,
        'menu_icon' => 'dashicons-database-add',
    ));    

    register_post_type('our-partners', array(
        'labels' => array('name' => 'Our Partners'),
        'public' => false, // Makes it not publicly accessible
        'show_ui' => true, // Still shows in admin for editing
        'show_in_menu' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions'),
        'taxonomies' => array('our-partners-category', 'post_tag'),
        'menu_position' => 8,
        'menu_icon' => 'dashicons-buddicons-buddypress-logo',
    ));    
}
add_action('init', 'custom_post_type');
