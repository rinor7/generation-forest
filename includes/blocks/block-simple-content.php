<?php 
$block_content = get_field('block-simple-content');
if (!($block_content['disable_section'] ?? false)): 
    $gradient_class = $block_content['gradient_class'] ?? '';
    $left_empty = empty($block_content['titleh1']);
    $max_width = $block_content['full_section_max_width'] ?? '';
    $section_inner_class = trim($gradient_class . ($left_empty ? ' full-section' : ''));
?>
<section class="simple-textarea__section" aria-label="Section Text">
    <div class="container">
        <div class="simple-textarea__section-inner <?php echo esc_attr($section_inner_class); ?>">
            <div class="row">
                <?php if (!$left_empty): ?>
                    <div class="lefts col-lg-4">
                        <h2><?php echo esc_html($block_content['titleh1']); ?></h2>
                    </div>
                    <div class="rights col-lg-8">
                        <?php echo wp_kses_post($block_content['titleh2']); ?>
                    </div>
                <?php else: ?>
                    <div class="rights col-12" <?php echo $max_width ? 'style="margin:0 auto; max-width:' . esc_attr($max_width) . 'px;"' : ''; ?>>
                        <?php echo wp_kses_post($block_content['titleh2']); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
