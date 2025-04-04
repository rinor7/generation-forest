<?php

register_taxonomy('our-team-category', 'our-team', array( //if you need "Uncategorized" category, replace "our-team-category" with "category"
    'hierarchical' => true,
    'labels' => array('name' => 'Categories', 'singular_name' => 'Custom Taxonomy'),
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'our-team-category'),//if you need "Uncategorized" category, replace "our-team-category" with "category"
));


register_taxonomy('page-category', 'page', array( //if you need "Uncategorized" category, replace "page-category" with "category"
    'hierarchical' => true,
    'labels' => array('name' => 'Categories', 'singular_name' => 'Custom Taxonomy'),
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'page-category'),//if you need "Uncategorized" category, replace "page-category" with "category"
));