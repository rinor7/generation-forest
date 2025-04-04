<?php if (!get_field('company-structure')['disable_section'] ?? false): ?>
<section class="company-structure__section" aria-label="Company Structure">
    <div class="container">
        <div class="section-header">
            <?php 
            // Fetch the entire 'three_box-default' group
            $company_structure = get_field('company-structure');
            
            // Check for the section title and subtitle
            $has_title = !empty($company_structure['section_title']);
            $has_subtitle = !empty($company_structure['section_subtitle']);
            ?>
            
            <?php if ($has_title): ?>
                <h2 class="<?php echo (!$has_subtitle ? 'only-title' : ''); ?>">
                    <?php echo esc_html($company_structure['section_title']); ?>
                </h2>
            <?php endif; ?>
            
            <?php if ($has_subtitle): ?>
                <h3 class="<?php echo (!$has_title ? 'only-subtitle' : ''); ?>">
                    <?php echo esc_html($company_structure['section_subtitle']); ?>
                </h3>
            <?php endif; ?>
        </div>
       
        <div class="company-structure__section-inner">
            <?php 
            $company_structure = get_field('company-structure');
            $desktop_bg = $company_structure['desktop_background'] ?? null;
            $mobile_bg = $company_structure['mobile_background'] ?? null;

            $background_image = wp_is_mobile() && $mobile_bg ? $mobile_bg : $desktop_bg;

            if ($background_image): ?>
                <div class="company-structure-background">
                    <img src="<?php echo esc_url($background_image['url']); ?>" alt="Company Structure Background">
                </div>
            <?php endif; ?>
        </div>


    </div>
</section>
<?php endif; ?>
