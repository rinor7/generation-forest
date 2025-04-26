<?php 
$ccc_section = get_field('group_ccc');

if (!($ccc_section['disable_section'] ?? false)): ?>
<section class="corporate-carbon-concession__section" aria-label="Corporate Carbon Concession">
    <div class="container">
       <div class="inner-wrapper">
        <div class="row">
                <div class="left-side">
                    <div class="left-side-wrapper">
                        <div class="content">
                            <h2><?php echo $ccc_section['title'] ?? ''; ?></h2>
                            <?php echo $ccc_section['subtitle'] ?? ''; ?>
                            <?php if ((!empty($ccc_section['link1']) && !empty($ccc_section['name1'])) || (!empty($ccc_section['link2']) && !empty($ccc_section['name2']))): ?>
                            <div class="buttons">
                                <?php if (!empty($ccc_section['link1']) && !empty($ccc_section['name1'])): ?>
                                    <div class="btn-base btn-base-one">
                                        <a 
                                            <?php if (!empty($ccc_section['link1_target_blank'])) echo 'target="_blank"'; ?> 
                                            href="<?php echo esc_attr($ccc_section['link1']); ?>">
                                            <?php echo esc_html($ccc_section['name1']); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="right-side">
                    <div class="image-content" style="background-image: url('<?php echo esc_url($ccc_section['right_background_image']['url']); ?>');">
                        <div class="content">
                            <h3><?php echo $ccc_section['title-right'] ?? ''; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
</section>
<?php endif; ?>
