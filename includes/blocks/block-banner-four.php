<?php 
$group_banner = get_field('group_banner-four');

if (!($group_banner['disable_section'] ?? false)): ?>
<section class="banner__section-four" aria-label="Banner">
    <div class="container">
        <div class="banner-four__section" aria-label="Banner">
                <div class="row">
                    <div class="left-side">
                        <?php if (!empty($group_banner['title'])) : ?>
                            <h2><?php echo $group_banner['title']; ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="right-side">
                        <?php if (!empty($group_banner['subtitle'])) : ?>
                            <div class="text"><?php echo wp_kses_post($group_banner['subtitle']); ?></div>
                        <?php endif; ?>
                        <div class="bottomside">
                            <?php if ((!empty($group_banner['link1']) && !empty($group_banner['name1'])) || (!empty($group_banner['link2']) && !empty($group_banner['name2']))): ?>
                            <div class="buttons">
                                <?php if (!empty($group_banner['link1']) && !empty($group_banner['name1'])): ?>
                                    <div class="btn-base btn-base-one">
                                        <a 
                                            <?php if (!empty($group_banner['link1_target_blank'])) echo 'target="_blank"'; ?> 
                                            href="<?php echo esc_attr($group_banner['link1']); ?>">
                                            <?php echo esc_html($group_banner['name1']); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
<?php endif; ?>
