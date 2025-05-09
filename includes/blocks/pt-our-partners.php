<?php if (!get_field('pt-partners')['disable_section'] ?? false): ?>
<section class="slider__partners-section">
    <div class="container">
        <?php
            $group_field_values = get_field('pt-partners', get_the_ID()); // Assuming you're inside the loop
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
    </div>
    <div class="swiper mySwiper mySwiper-our-partners">
            <div class="swiper-wrapper">
                <?php
                    $args = array(
                        'post_type' => 'our-partners',
                        'posts_per_page' => -1,
                        'order' => 'ASC',
                    );
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()):
                        $loop->the_post();
                    ?>
                <div class="swiper-slide">
                    <div class="slider-wrap">
                        <div class="img">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="Image" loading="lazy">
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
            </div>
        </div>
</section>
<?php endif; ?>