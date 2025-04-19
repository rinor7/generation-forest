<?php 
// Remove WP Block ( Patterns from Appearance )
function remove_wp_block_menu() {
    remove_submenu_page( 'themes.php', 'edit.php?post_type=wp_block' );
}
add_action('admin_init', 'remove_wp_block_menu', 100);



// Disable Theme FileEditor from Appearance
function disable_theme_file_editor() {
    if ( ! defined('DISALLOW_FILE_EDIT') ) {
        define('DISALLOW_FILE_EDIT', false);
    }
}
add_action('init', 'disable_theme_file_editor');



// 
// 
//
//
//
//
//Remove Comments Option from Admin Menu 
function df_disable_comments_admin_menu() {
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'df_disable_comments_admin_menu');
// Remove comments from the admin bar
function df_remove_comments_admin_bar() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action('wp_before_admin_bar_render', 'df_remove_comments_admin_bar');
// Remove comments and trackbacks support from post types
function df_remove_comment_support() {
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
}
add_action('init', 'df_remove_comment_support', 100);
// Redirect any user trying to access comments page
function df_redirect_comments_page() {
    global $pagenow;
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }
}
add_action('admin_init', 'df_redirect_comments_page');
// Close comments on the front-end
function df_disable_comments_status() {
    return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);
// Hide existing comments
function df_hide_existing_comments($comments) {
    $comments = array();
    return $comments;
}
add_filter('comments_array', 'df_hide_existing_comments', 10, 2);


if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'  => 'Theme Settings',
        'menu_title'  => 'Theme Settings',
        'menu_slug'   => 'theme-settings',
        'capability'  => 'edit_posts',
        'redirect'    => false
    ));
}



//AKAX for blog posts pagination
function enqueue_ajax_blog_script() {
    wp_enqueue_script('ajax-pagination', get_template_directory_uri() . '/js/ajax-pagination.js', array('jquery'), null, true);
    wp_localize_script('ajax-pagination', 'my_ajax_obj', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_ajax_blog_script');

function load_more_blogs() {
    $paged = $_POST['paged'] ?? 1;

    $args = array(
        'posts_per_page' => 9,
        'paged' => $paged,
    );
    $query = new WP_Query($args);

    ob_start();
    if ($query->have_posts()):
        while ($query->have_posts()): $query->the_post(); ?>
            <div class="col-lg-4">
                <a href="<?php the_permalink(); ?>">
                <div class="blog-inner">
                    <div class="img">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="Image" loading="lazy">
                    </div>
                    <div class="content">
                        <span><?php echo strtoupper(get_the_modified_date('F')) . ' ' . get_the_modified_date('j') . ', ' . get_the_modified_date('g:i A'); ?></span>
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
                </a>
            </div>
        <?php endwhile;
    endif;
    $posts_html = ob_get_clean();

    ob_start();
    echo paginate_links(array(
        'total' => $query->max_num_pages,
        'current' => $paged,
        'prev_text' => '«',
        'next_text' => '»',
        'format' => '?paged=%#%',
        'type' => 'list',
    ));
    $pagination_html = ob_get_clean();

    wp_send_json(array(
        'posts' => $posts_html,
        'pagination' => $pagination_html,
    ));
}
add_action('wp_ajax_load_more_blogs', 'load_more_blogs');
add_action('wp_ajax_nopriv_load_more_blogs', 'load_more_blogs');
