<?php if (!get_field('three_box-default')['disable_section'] ?? false): ?>
<section class="our-impact__section" aria-label="Our Impact">
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
        <div class="row">
            <?php
            // Define the fields for the three boxes
            $boxes = [
                ['img' => 'box1img', 'title' => 'title1', 'sub' => 'sub1'],
                ['img' => 'box2img', 'title' => 'title2', 'sub' => 'sub2'],
                ['img' => 'box3img', 'title' => 'title3', 'sub' => 'sub3']
            ];

            // Loop through the boxes
            foreach ($boxes as $box): ?>
                <div class="box col-lg-4 col-sm-4">
                    <div class="box__wrap">
                        <div class="img">
                            <img src="<?php echo ( get_field('three_box-default')[$box['img']] );?>" alt="Image" loading="lazy">
                        </div>
                        <h2><?php echo ( get_field('three_box-default')[$box['title']] );?></h2>
                        <p><?php echo ( get_field('three_box-default')[$box['sub']] );?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>
