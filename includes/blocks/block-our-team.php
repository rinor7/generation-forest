<?php if (!get_field('our-team-cat-seperate')['disable_section'] ?? false): ?>
<section class="team__boxes-section">
    <div class="container">
        <?php
            $group_field_values = get_field('our-team-cat-seperate', get_the_ID()); // Assuming you're inside the loop
            if ($group_field_values): ?>
        <div class="section-header">
            <?php if ($group_field_values['section_title']): ?>
            <h2><?php echo esc_html($group_field_values['section_title']); ?></h2>
            <?php endif; ?>
            <?php if ($group_field_values['section_subtitle']): ?>
            <h3><?php echo esc_html($group_field_values['section_subtitle']); ?></h3>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        <div class="swiper mySwiper mySwiper-our-team">
            <div class="swiper-wrapper">
                <?php
                    $args = array(
                        'post_type' => 'our-team',
                        'posts_per_page' => -1,
                        'order' => 'ASC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'our-team-category',
                                'field'    => 'slug',
                                'terms'    => 'our-core-team',
                            ),
                        ),
                    );
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()):
                        $loop->the_post();
                    ?>
                <div class="swiper-slide">
                    <div class="team__boxes-section-wrap">
                        <div class="img">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="Image" loading="lazy">
                        </div>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (!get_field('our-team-cat-seperate')['disable_section2'] ?? false): ?>
<section class="team__boxes-section">
    <div class="container">
        <?php
            $group_field_values = get_field('our-team-cat-seperate', get_the_ID()); // Assuming you're inside the loop
            if ($group_field_values): ?>
        <div class="section-header">
            <?php if ($group_field_values['section_title2']): ?>
            <h2><?php echo esc_html($group_field_values['section_title2']); ?></h2>
            <?php endif; ?>
            <?php if ($group_field_values['section_subtitle2']): ?>
            <h3><?php echo esc_html($group_field_values['section_subtitle2']); ?></h3>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        <div class="swiper mySwiper mySwiper-our-team">
            <div class="swiper-wrapper">
                <?php
                    $args = array(
                        'post_type' => 'our-team',
                        'posts_per_page' => -1,
                        'order' => 'ASC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'our-team-category',
                                'field'    => 'slug',
                                'terms'    => 'our-non-executive-board',
                            ),
                        ),
                    );
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()):
                        $loop->the_post();
                    ?>
                <div class="swiper-slide">
                    <div class="team__boxes-section-wrap">
                        <div class="img">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="Image" loading="lazy">
                        </div>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>