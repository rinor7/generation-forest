<?php 
$group_banner = get_field('group_banner');

if (!($group_banner['disable_section'] ?? false)):

    // Default to desktop height
    $min_height = $group_banner['min_height_desktop'] ?? '';

    // If mobile, use mobile height
    if (wp_is_mobile() && !empty($group_banner['min_height_mobile'])) {
        $min_height = $group_banner['min_height_mobile'];
    }

    // Make sure it ends with px if it's numeric
    if (is_numeric($min_height)) {
        $min_height .= 'px';
    }

    $background_image = esc_url($group_banner['image'] ?? '');
    $style_attr = "background-image: url('{$background_image}');";
    if (!empty($min_height)) {
        $style_attr .= " min-height: {$min_height};";
    }
?>
<section class="banner__section" aria-label="Banner">
    <div class="container">
        <div class="banner-one__section" style="<?php echo esc_attr($style_attr); ?>" aria-label="Banner">
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
                                        <a href="<?php echo esc_url($group_banner['link2']); ?>"><?php echo esc_html($group_banner['name2']); ?></a>
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
