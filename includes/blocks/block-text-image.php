<!-- if its needed background without container 
add image-no-container-right class on parent div two-side__section-text-image-->
<?php if (!get_field('two-side-text-image-group')['disable_section'] ?? false): ?>
<section class="two-side__section-text-image" aria-label="Section Text-Image">
    <div class="container">
        <div class="row">
            <div class="lefts col-lg-6">
                <?php $group = get_field('two-side-text-image-group'); ?>
                <?php if (!empty($group['titleh1']) || !empty($group['titleh2']) || !empty($group['titleh3'])): ?>
                    <div class="up-content">
                        <?php if (!empty($group['titleh1'])): ?>
                            <h2><?php echo esc_html($group['titleh1']); ?></h2>
                        <?php endif; ?>
                        <?php if (!empty($group['titleh2'])): ?>
                            <h3><?php echo esc_html($group['titleh2']); ?></h3>
                        <?php endif; ?>
                        <?php if (!empty($group['titleh3'])): ?>
                            <h4><?php echo esc_html($group['titleh3']); ?></h4>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php $group = get_field('two-side-text-image-group'); ?>
                <?php if (!empty($group['name1'])): ?>
                    <div class="bottom-content">
                        <?php if (!empty($group['link1'])): ?>
                            <div class="buttons">
                                <div class="default-btn">
                                    <a href="<?php echo esc_url($group['link1']); ?>" class="link-btn">
                                        <?php echo esc_html($group['name1']); ?>
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?> 
            </div>
            <div class="rights col-lg-6">
                <div class="img">
                    <img src="<?php echo ( get_field('two-side-text-image-group')['image'] );?>" alt="Background"
                        loading=“lazy”>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>