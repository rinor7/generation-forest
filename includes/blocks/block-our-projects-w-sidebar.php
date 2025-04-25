<?php if (!get_field('pt-swiper')['disable_section'] ?? false): ?>
<section class="our-projects__section-w-sidebar" aria-label="Projects Section">
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
        <!-- <div class="" style="position: relative;"> -->
        <div class="mySided-our-projects">
            
            <div class="row">

                <aside class="sidebar left-side">
                    <?php 
                    $group_field_values = get_field('pt-swiper', get_the_ID()); // Get group field
                    if ($group_field_values): 
                        $partner_title = $group_field_values['partner_sidebar']; // Replace with your actual field name
                        if ($partner_title): 
                    ?>
                        <div class="sidebar-caption"><?php echo($partner_title); ?></div>
                    <?php 
                        endif;
                    endif; 
                    ?>
                </aside>


                <main class="my-content col-lg-8">
                    <?php
                        $args = array(
                            'post_type' => 'our-content',
                            'posts_per_page' => 10,
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
                            <div class="content">
                                <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>                
                </main>

            </div>
            
        </div>
    </div>
</section>
<?php endif; ?>