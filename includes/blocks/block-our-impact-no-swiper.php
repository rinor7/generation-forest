<?php if (!get_field('impact-group')['disable_section'] ?? false): ?>
<section class="our-impact__section-no-swiper" aria-label="Our Impact">
    <div class="container">
        <div class="our-impact-wrapper" 
                <?php 
                // Fetch the 'background_section' field from 'impact-group'
                $impact_group_values = get_field('impact-group'); // Fetch the entire group
                $background_image = $impact_group_values['background_section']; // Get the background image
                
                if ($background_image): ?>
                    style="background-image: url('<?php echo esc_url($background_image['url']); ?>');"
                <?php endif; ?>
            >
                
                <?php
                    // Fetch the 'impact-group' field values
                    if ($impact_group_values):
                        $has_title = !empty($impact_group_values['section_title']);
                        $has_subtitle = !empty($impact_group_values['section_subtitle']);
                ?>
                <div class="section-header">
                    <?php if ($has_title): ?>
                        <h2 class="<?php echo (!$has_subtitle ? 'only-title' : ''); ?>">
                            <?php echo esc_html($impact_group_values['section_title']); ?>
                        </h2>
                    <?php endif; ?>
                    <?php if ($has_subtitle): ?>
                        <h3 class="<?php echo (!$has_title ? 'only-subtitle' : ''); ?>">
                            <?php echo esc_html($impact_group_values['section_subtitle']); ?>
                        </h3>
                    <?php endif; ?>
                </div>
                <?php endif; ?>

                <div class="no-mySwiper-our-concept">
                    <div class="no-swiper-wrapper">
                        <?php 
                        // Loop through the 3 slides using the fields inside the 'concept-group' field
                        for ($i = 1; $i <= 3; $i++): 
                            // Access each slide's subtitle, title, and image dynamically
                            $subtitle = $impact_group_values["sub{$i}"];
                            $title = $impact_group_values["title{$i}"];
                            $icon = $impact_group_values["box{$i}img"];

                            // Only show the slide if at least one field is filled
                            if ($subtitle || $title || $image): 
                        ?>
                        <div class="swiper-slide">
                            <div class="slider-wrap">
                                <div class="slider-wrap-inner">
                                <?php if ($icon): ?>
                                    <span class="icon">
                                        <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($title); ?>">
                                    </span>
                                <?php endif; ?>
                                <?php if ($title): ?>
                                    <h2><?php echo esc_html($title); ?></h2>
                                <?php endif; ?>
                                <?php if ($subtitle): ?>
                                    <h3><?php echo esc_html($subtitle); ?></h3>
                                <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
    </div>
</section>
<?php endif; ?>
