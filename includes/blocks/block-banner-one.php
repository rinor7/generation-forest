<?php 
$group_banner = get_field('group_banner');

if (!($group_banner['disable_section'] ?? false)):

    $uncropped_image = $group_banner['uncropped_image_src'] ?? '';
    $use_uncropped = !empty($uncropped_image);

    // Set height
    $min_height = $group_banner['min_height_desktop'] ?? '';
    if (wp_is_mobile() && !empty($group_banner['min_height_mobile'])) {
        $min_height = $group_banner['min_height_mobile'];
    }
    if (is_numeric($min_height)) {
        $min_height .= 'px';
    }

    // Background image logic (used only if uncropped image is NOT filled)
    $background_image = esc_url($group_banner['image'] ?? '');
    $style_attr = '';
    if (!$use_uncropped && $background_image) {
        $style_attr .= "background-image: url('{$background_image}');";
    }
    if (!empty($min_height)) {
        $style_attr .= " min-height: {$min_height};";
    }

    $banner_classes = 'banner-one__section';
    if ($use_uncropped) {
        $banner_classes .= ' no-cropped';
    }
?>
<section class="banner__section" aria-label="Banner">
    <div class="container">
        <div class="<?php echo esc_attr($banner_classes); ?>" style="<?php echo esc_attr($style_attr); ?>" aria-label="Banner">
            <?php if ($use_uncropped): ?>
                <img src="<?php echo esc_url($uncropped_image); ?>" alt="" class="uncropped-image" />
            <?php endif; ?>
            <div class="container">
                <div class="row">
                    <div class="centers col-lg-12">
                        <h1><?php echo $group_banner['title'] ?? ''; ?></h1>

                        <?php if ((!empty($group_banner['link1']) && !empty($group_banner['name1'])) || (!empty($group_banner['link2']) && !empty($group_banner['name2']))): ?>
                            <div class="bottomside">
                                <div class="buttons">
                                    <?php if (!empty($group_banner['link1']) && !empty($group_banner['name1'])): ?>
                                        <div class="btn-base btn-base-one">
                                            <a href="<?php echo esc_attr($group_banner['link1']); ?>"><?php echo esc_html($group_banner['name1']); ?></a>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (!empty($group_banner['link2']) && !empty($group_banner['name2'])): ?>
                                        <div class="btn-base btn-base-two">
                                            <a target="_blank" href="<?php echo esc_url($group_banner['link2']); ?>"><?php echo esc_html($group_banner['name2']); ?></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
