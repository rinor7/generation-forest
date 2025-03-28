<?php 
$group_banner = get_field('group_banner');

if (!($group_banner['disable_section'] ?? false)): ?>
<section class="banner__section ">
    <div class="container">
        <div class="banner-one__section"
            style="background-image: url(<?php echo esc_url($group_banner['image'] ?? ''); ?>);" aria-label="Banner">
            <div class="container">
                <div class="row">
                    <div class="centers col-lg-12">
                        <h1><?php echo $group_banner['title'] ?? ''; ?></h1>

                        <div class="bottomside">
                            <?php if ((!empty($group_banner['link1']) && !empty($group_banner['name1'])) || (!empty($group_banner['link2']) && !empty($group_banner['name2']))): ?>
                            <div class="buttons">
                                <?php if (!empty($group_banner['link1']) && !empty($group_banner['name1'])): ?>
                                    <div class="btn-base btn-base-one">
                                        <a href="tel:<?php echo esc_attr($group_banner['link1']); ?>"><?php echo esc_html($group_banner['name1']); ?></a>
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
    </div>
</section>
<?php endif; ?>
