<?php if (!get_field('pt-swiper')['disable_section'] ?? false): ?>
<section class="our-projects__section" aria-label="Projects Section">
    <div class="container">
        <?php
        $group_field_values = get_field('pt-swiper', get_the_ID()); // Assuming you're inside the loop
        if ($group_field_values):
            $has_title = !empty($group_field_values['section_title']);
            $has_subtitle = !empty($group_field_values['section_subtitle']);
        ?>
            <div class="section-header">
                <?php if ($has_title): ?>
                    <h2 class="<?php echo (!$has_subtitle ? 'only-title' : ''); ?>">
                        <?php echo esc_html($group_field_values['section_title']); ?>
                    </h2>
                <?php endif; ?>
                <?php if ($has_subtitle): ?>
                    <h3 class="<?php echo (!$has_title ? 'only-subtitle' : ''); ?>">
                        <?php echo esc_html($group_field_values['section_subtitle']); ?>
                    </h3>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="" style="position: relative;">
        <div class="swiper mySwiper mySwiper-our-projects">
            <div class="swiper-wrapper">
                <?php
                    $args = array(
                        'post_type' => 'our-projects',
                        'posts_per_page' => -1,
                        'order' => 'ASC',
                    );
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()):
                        $loop->the_post();
                    ?>
                <div class="swiper-slide">
                    <!-- <a href="<?php the_permalink(); ?>" class="main-href"> -->
                        <div class="slider-wrap">

                            <div class="content">
                                <?php
                                $badge = get_field('badge_status');
                                if ($badge) : ?>
                                    <div class="badge badge-<?php echo esc_attr($badge); ?>">
                                        <?php echo ucfirst($badge); ?>
                                    </div>
                                <?php endif; ?>
                                <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            </div>

                            <div class="img">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="Image" loading="lazy">
                                <a class="permalink-btn" href="<?php the_permalink(); ?>">
                                    Read more
                                </a>
                            </div>
                        </div>
                    <!-- </a> -->
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            
            </div>
        </div>
</section>
<?php endif; ?>