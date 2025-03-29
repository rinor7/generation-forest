<?php 
$contact_bg = get_field('contact_background_image', 'option');
$contact_text = get_field('contact_text', 'option');
$contact_form = get_field('contact_form_shortcode', 'option');
?>

<section class="contact-section-base">
    <div class="container">
        <div class="upside">
            <?php if (!empty($contact_bg['url'])): ?>
                <img src="<?php echo esc_url($contact_bg['url']); ?>" alt="Contact Background" width="100%" />
            <?php endif; ?>
        </div>
        <div class="downside">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-text">
                        <?php echo wp_kses_post($contact_text); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <?php echo do_shortcode($contact_form); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
