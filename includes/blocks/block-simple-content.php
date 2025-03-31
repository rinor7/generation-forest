<?php 
$block_content = get_field('block-simple-content');
if (!($block_content['disable_section'] ?? false)): 
    // Get the selected gradient class (only one can be chosen)
    $gradient_class = $block_content['gradient_class'] ?? '';
?>
<section class="simple-textarea__section" aria-label="Section Text">
    <div class="container">
        <div class="simple-textarea__section-inner <?php echo esc_attr($gradient_class); ?>">
            <div class="row">
                <div class="lefts col-lg-4">
                    <h2><?php echo esc_html($block_content['titleh1']); ?></h2>
                </div>
                <div class="rights col-lg-8">
                    <?php echo wp_kses_post($block_content['titleh2']); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
