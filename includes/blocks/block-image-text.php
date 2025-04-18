<!-- if its needed background without container 
add image-no-container-left class on parent div two-side__section-image-text-->
<?php if (!get_field('two-side-image-text-group')['disable_section'] ?? false): ?>
<section class="two-side__section-image-text" aria-label="Section Image-Text">
    <div class="container">
        <div class="row">
            <div class="lefts col-lg-6">

                <div class="img">
                    <img src="<?php echo ( get_field('two-side-image-text-group')['image'] );?>" alt="Background"
                        loading=“lazy”>
                </div>

            </div>
            <div class="rights col-lg-6">
            
                <div class="up-content">
                <h2><?php echo ( get_field('two-side-image-text-group')['titleh1'] );?></h2>
                <h3><?php echo ( get_field('two-side-image-text-group')['titleh2'] );?></h3>
                <h4><?php echo ( get_field('two-side-image-text-group')['titleh3'] );?></h4>
                </div>

                <div class="bottom-content">
                <?php $group = get_field('two-side-image-text-group'); ?>
                <?php if (!empty($group['link1']) && !empty($group['name1'])): ?>
                    <div class="buttons">
                        <div class="default-btn">
                            <a href="<?php echo esc_url($group['link1']); ?>" class="link-btn">
                                <?php echo esc_html($group['name1']); ?>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
                </div>


            </div>
        </div>
    </div>
</section>
<?php endif; ?>