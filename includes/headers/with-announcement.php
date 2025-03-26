<?php
/**
 * @package Base Theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
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
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Lato-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">

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

        <header id="header-site-with-announcement" class="site-header">
            <!-- Announcement NAV -->
            <div class="topbar">
                <div class="container-fluid">
                    <div class="flex justify-end topbar-dir">
                        <?php
							wp_nav_menu( array( 
								'theme_location'    => 'menu-1',
							)); 
						?>
                        <?php if(is_active_sidebar('widget-2') ) { ?>
                        <div class="rightside_head-btn">
                            <ul>
                                <?php dynamic_sidebar('widget-2');?>
                            </ul>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- Normal NAV -->
            <div id="headerbar" class="headerbar header-w-announcementbar <?php 
            if (is_front_page()) echo 'frontpage-header'; 
            elseif (is_single()) echo 'single-header'; 
            elseif (is_404()) echo '404-header'; 
            else echo 'default-header'; 
            ?>">
                <div class="container-fluid">
                    <div class="menu-here">
                        <nav class="navbar navbar-expand-lg navbar-light navbar-center" id="scroll-change">

                            <?php if(is_active_sidebar('widget-1') ) { ?>
                            <a aria-label="logo" class="logo_header" href="<?php echo esc_url(home_url('/')); ?>">
                                <ul>
                                    <?php dynamic_sidebar('widget-1');?>
                                </ul>
                            </a>
                            <?php } ?>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <div class="menu-m">
                                    <span class="menu-global menu-top"></span>
                                    <span class="menu-global menu-middle"></span>
                                    <span class="menu-global menu-bottom"></span>
                                </div>
                            </button>

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

                            <div class="right-widget d-none-mobile">
                                <?php if(is_active_sidebar('widget-6') ) { ?>
                                <ul>
                                    <?php dynamic_sidebar('widget-6');?>
                                </ul>
                                <?php } ?>
                            </div>


                        </nav>
                    </div>
                </div>
            </div>
        </header><!-- #with-announcementbar -->

        <script>
        // Demo1 - Header with topbar
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("header-site-with-announcement").style.cssText =
                "top: 0px; transition: .5s";
            } else {
                document.getElementById("header-site-with-announcement").style.cssText =
                    "top: -31px; transition: .5s; box-shadow: 0px 10px 16px #1a1a2e10;";
            }
            prevScrollpos = currentScrollPos;
        }
        </script>