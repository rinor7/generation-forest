<?php
/**
 * @package Base Theme
 */
?>


<footer id="footer-site" class="site-footer">
    
    <?php get_template_part('includes/blocks/block-form-one', null, array()); ?>

    <div class="footer-wrapper">
        <div class="columns">
            <div class="container" id="foooter">
                <div class="row">

                    <div class="col-lg-6 footer-left">
                        <a aria-label="logo" class="logo_footer" href="<?php echo esc_url(home_url('/')); ?>">
                            <ul>
                                <?php dynamic_sidebar('footer-1');?>
                            </ul>
                        </a>
                        <ul>
                            <?php dynamic_sidebar('footer-8');?>
                        </ul>
                    </div>
                    <div class="col-lg-6 footer-right">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 footer-right-left">
                                <ul>
                                    <?php dynamic_sidebar('footer-2');?>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-sm-6 footer-right-right">
                                <div class="footer-right-right-position">
                                    <ul class="upside-widget">
                                        <?php dynamic_sidebar('footer-3');?>
                                    </ul>
                                    <ul class="middle-widget">
                                        <?php dynamic_sidebar('footer-4');?>
                                    </ul>
                                    <ul class="downside-widget">
                                        <?php dynamic_sidebar('footer-5');?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyrights">
                <?php if ( is_active_sidebar( 'footer-7' ) ) : ?>
                    <ul class="copyrights-text">
                        <?php dynamic_sidebar( 'footer-7' ); ?>
                    </ul>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer-6' ) ) : ?>
                    <ul class="copyrights-navigation">
                        <?php dynamic_sidebar( 'footer-6' ); ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>


</div><!-- #page -->


<?php wp_footer(); ?>
</body>

</html>