<?php
/**
 * @package Base Theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="theme-color" content="#FFF" id="theme-color-meta">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Change this to "noindex, nofollow" when you go live -->
    <meta name="robots" content="noindex, nofollow"> 
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <!-- Open Graph Description (for social media platforms like Facebook, LinkedIn, etc.) -->
    <meta property="og:description" content="Base Wordpress Theme" />
    <meta name="twitter:card" content="summary_large_image" />
    <!-- Add a default image for sharing on social media -->
    <meta property="og:image" content="https://example.com/wp-content/uploads/default-share-image.jpg">
    <meta name="twitter:image" content="https://example.com/wp-content/uploads/default-share-image.jpg">
    <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>" />
    <meta property="og:type" content="website" />
    
    <!-- Profile link for XFN (XHTML Friends Network), used for linking to profiles -->
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Apple touch icon (for iOS devices) -->
    <link rel="apple-touch-icon" href="src/img/apple.png">

    <!-- Preloading font for performance improvement -->
    <!-- <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Montserrat-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous"> -->
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Montserrat-Regular.ttf" as="font" type="font/woff2" crossorigin="anonymous">

    <!-- Optional: Helps the browser connect to fonts.googleapis.com earlier for performance improvement -->
        <!-- <link rel="dns-prefetch" href="//fonts.googleapis.com"> -->

    <!-- Optional: Preload Google Font stylesheets to make fonts load faster -->
        <!-- <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'"> -->
        <!-- <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"></noscript> -->
     
    <!-- Adding a canonical URL tag to prevent duplicate content issues -->
     <link rel="canonical" href="<?php echo esc_url(home_url()); ?>" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <header id="header-site" class="site-header <?php 
            if (is_front_page()) echo 'frontpage-header'; 
            elseif (is_single()) echo 'single-header'; 
            elseif (is_404()) echo '404-header'; 
            elseif (is_page_template('solutions-for-companies.php')) echo 'green-header'; 
            elseif (is_page_template('news-media.php')) echo 'green-header'; 
            else echo 'default-header'; 
            ?>">
            <div class="headerbar header-default" id="headerbar">
                <?php 
                $container_type = 'container'; // default value
                if (is_front_page()) {
                    $container_type = 'container';
                } elseif (is_single()) {
                    $container_type = 'container';
                }
                ?>
                <div class="<?php echo $container_type; ?>">
                    <div class="menu-here">
                        <nav class="navbar navbar-expand-lg navbar-light navbar-center" id="scroll-change">

                            <?php if ( is_page_template('solutions-for-companies.php') || is_page_template('news-media.php') ) : ?>
                                <?php if (is_active_sidebar('widget-1-light')) : ?>
                                    <a aria-label="logo" class="logo_header" href="<?php echo esc_url(home_url('/')); ?>">
                                        <ul>
                                            <?php dynamic_sidebar('widget-1-light'); ?>
                                        </ul>
                                    </a>
                                <?php endif; ?>
                            <?php else : ?>
                                <?php if(is_active_sidebar('widget-1') ) { ?>
                                <a aria-label="logo" class="logo_header" href="<?php echo esc_url(home_url('/')); ?>">
                                    <ul>
                                        <?php dynamic_sidebar('widget-1');?>
                                    </ul>
                                </a>
                                <?php } ?>
                            <?php endif; ?>

                            <?php wp_nav_menu(
                                array(
                                'theme_location'    => 'menu-1',
                                'menu_id'        => 'primary-menu',
                                'menu_class'        => 'navbar-nav',
                                'container_class'  => 'collapse navbar-collapse main-nav-toggle',
                                'container_id'    => 'navbarNav',
                                )
                                ); 
                            ?>

                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <div class="menu-m">
                                        <span class="menu-global menu-top"></span>
                                        <span class="menu-global menu-middle"></span>
                                        <span class="menu-global menu-bottom"></span>
                                    </div>
                                </button>
                            </nav>


                        

                            <!-- <div class="right-widget d-none-mobile">
                                <?php if(is_active_sidebar('widget-6') ) { ?>
                                <ul>
                                    <?php dynamic_sidebar('widget-6');?>
                                </ul>
                                <?php } ?>
                            </div> -->

                        </nav>
                    </div>
                </div>
            </div>
        </header>