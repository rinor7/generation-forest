<?php 
$group_ecosystem = get_field('group_ecosystem');

if (!($group_ecosystem['disable_section'] ?? false)): ?>
<section class="ecosystem__section" aria-label="Ecosystem">
    <div class="container">

        <div class="section-header">
            <?php 
            $title_values = get_field('group_ecosystem');            
            $has_title = !empty($title_values['section_title']);
            $has_subtitle = !empty($title_values['section_subtitle']);
            ?>
            <?php if ($has_title): ?>
                <h2 class="<?php echo (!$has_subtitle ? 'only-title' : ''); ?>">
                    <?php echo esc_html($title_values['section_title']); ?>
                </h2>
            <?php endif; ?>
            
            <?php if ($has_subtitle): ?>
                <h3 class="<?php echo (!$has_title ? 'only-subtitle' : ''); ?>">
                    <?php echo esc_html($title_values['section_subtitle']); ?>
                </h3>
            <?php endif; ?>
        </div>

        <div class="ecosystem__section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 leftside">
                        <h2><?php echo wp_kses_post($group_ecosystem['title1']); ?></h2>
                    </div>
                    <div class="col-lg-10 rightside">
                        <?php echo wp_kses_post($group_ecosystem['description1']); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-2 leftside">
                        <h2><?php echo wp_kses_post($group_ecosystem['title2']); ?></h2>
                    </div>
                    <div class="col-lg-10 rightside">
                        <?php echo wp_kses_post($group_ecosystem['description2']); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-2 leftside">
                        <h2><?php echo wp_kses_post($group_ecosystem['title3']); ?></h2>
                    </div>
                    <div class="col-lg-10 rightside">
                        <?php echo wp_kses_post($group_ecosystem['description3']); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-2 leftside">
                        <h2><?php echo wp_kses_post($group_ecosystem['title4']); ?></h2>
                    </div>
                    <div class="col-lg-10 rightside">
                        <?php echo wp_kses_post($group_ecosystem['description4']); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
