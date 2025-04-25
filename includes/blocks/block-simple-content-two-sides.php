<?php 
$block_content = get_field('block-simple-content-two-sides');
if (!($block_content['disable_section'] ?? false)): 
    // Get the selected gradient class (only one can be chosen)
    $gradient_class = $block_content['gradient_class'] ?? '';
?>
<section class="simple-textarea__section-two-sides" aria-label="Section Text">
    <div class="container">
        <div class="row">
            

        <div class="simple-textarea__section-two-sides-inner col-lg-6 <?php echo esc_attr($gradient_class); ?>">
            <?php if (!empty($block_content['titleh1'])) : ?>
                <div class="upside">
                    <h2><?php echo wp_kses_post($block_content['titleh1']); ?></h2>
                </div>
            <?php endif; ?>

            <?php if (!empty($block_content['titleh2'])) : ?>
                <div class="downside">
                    <?php echo wp_kses_post($block_content['titleh2']); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="simple-textarea__section-two-sides-inner col-lg-6 <?php echo esc_attr($gradient_class); ?>">
            <?php if (!empty($block_content['titleh3'])) : ?>
                <div class="upside">
                    <h2><?php echo wp_kses_post($block_content['titleh3']); ?></h2>
                </div>
            <?php endif; ?>

            <?php if (!empty($block_content['titleh4'])) : ?>
                <div class="downside">
                    <?php echo wp_kses_post($block_content['titleh4']); ?>
                </div>
            <?php endif; ?>
        </div>



        </div>
    </div>
</section>
<?php endif; ?>
