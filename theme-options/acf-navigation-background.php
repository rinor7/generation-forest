<?php

//create ACF field with type Text and name icon to add icons on nav item, same for background
// function my_wp_nav_menu_objects($items, $args) {
//     foreach ($items as &$item) {
//         $icon = get_field('icon', $item);
// 		$custom_text_field = get_post_meta($item->ID, 'custom_text_field', true);
//         $background_image_url = get_field('background-nav', $item);
//         if ($icon) { // Add font-awesome icon
//             $item->title .= ' <i class="fa fa-' . $icon . '"></i>';
//         }
// 		if ($custom_text_field) { // Add custom text field
//             $item->title .= ' <span class="custom-text-menu-item">' . esc_html($custom_text_field) . '</span>';
//         }
//         if ($background_image_url) {// Add background image style
//             $item->title .= ' <div style="background-image: url(' . esc_url($background_image_url) . ');" class="background-nav"></div>';
//         }
//     }
//     return $items;
// }
// add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);