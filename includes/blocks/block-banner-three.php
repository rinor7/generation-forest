<?php 
$group_banner = get_field('group_banner-three');

if (!($group_banner['disable_section'] ?? false)): ?>
<section class="banner__section-three" aria-label="Banner">
    <div class="container">
        <div class="banner-three__section" aria-label="Banner">
                <div class="row">
                    <div class="centers col-lg-12">
                        <?php if (!empty($group_banner['for_companies'])) : ?>
                            <span class="paragraph"><?php echo strip_tags($group_banner['for_companies']); ?></span>
                        <?php endif; ?>
                        <?php if (!empty($group_banner['title'])) : ?>
                            <h2><?php echo $group_banner['title']; ?></h2>
                        <?php endif; ?>

                        <?php if (!empty($group_banner['subtitle'])) : ?>
                            <div class="text"><?php echo wp_kses_post($group_banner['subtitle']); ?></div>
                        <?php endif; ?>
                        <div class="bottomside">
                            <?php if ((!empty($group_banner['link1']) && !empty($group_banner['name1'])) || (!empty($group_banner['link2']) && !empty($group_banner['name2']))): ?>
                            <div class="buttons">
                                <?php if (!empty($group_banner['link1']) && !empty($group_banner['name1'])): ?>
                                    <div class="btn-base btn-base-one">
                                        <a href="<?php echo esc_attr($group_banner['link1']); ?>"><?php echo esc_html($group_banner['name1']); ?></a>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($group_banner['link2']) && !empty($group_banner['name2'])): ?>
                                    <div class="btn-base btn-base-two">
                                        <a href="<?php echo esc_url($group_banner['link2']); ?>"><?php echo esc_html($group_banner['name2']); ?></a>
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
