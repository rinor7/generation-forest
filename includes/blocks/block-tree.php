<?php if (!get_field('tree')['disable_section'] ?? false): ?>
<section class="tree__section" aria-label="Tree Concept">
    <div class="container">
        <div class="section-header">
            <?php 
            // Fetch the entire 'three_box-default' group
            $three_box_values = get_field('three_box-default');
            
            // Check for the section title and subtitle
            $has_title = !empty($three_box_values['section_title']);
            $has_subtitle = !empty($three_box_values['section_subtitle']);
            ?>
            
            <?php if ($has_title): ?>
                <h2 class="<?php echo (!$has_subtitle ? 'only-title' : ''); ?>">
                    <?php echo esc_html($three_box_values['section_title']); ?>
                </h2>
            <?php endif; ?>
            
            <?php if ($has_subtitle): ?>
                <h3 class="<?php echo (!$has_title ? 'only-subtitle' : ''); ?>">
                    <?php echo esc_html($three_box_values['section_subtitle']); ?>
                </h3>
            <?php endif; ?>
        </div>
       
        <div class="tree-content">
            <?php 
            $tree_values = get_field('tree');
            $desktop_bg = $tree_values['desktop_background'] ?? null;
            $mobile_bg = $tree_values['mobile_background'] ?? null;

            $background_image = wp_is_mobile() && $mobile_bg ? $mobile_bg : $desktop_bg;

            if ($background_image): ?>
                <div class="tree-background">
                    <img src="<?php echo esc_url($background_image['url']); ?>" alt="Tree Background">
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>
<?php endif; ?>
