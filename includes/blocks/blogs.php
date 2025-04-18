<?php if (!get_field('pt-blogs')['disable_section'] ?? false): ?>
<section class="blogs__section">
    <div class="container">
    <?php
        $group_field_values = get_field('pt-blogs', get_the_ID()); // Assuming you're inside the loop
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
        <div class="row">
        <?php 
            $args = array(
            'posts_per_page' => 9,
            // 'category_name' => 'blogs'
            ); 
            $the_query = new WP_Query( $args );
            if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
        ?>

        <div class="col-lg-4">
           <a href="<?php the_permalink(); ?>">
           <div class="blog-inner">
                <div class="img">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="Image" loading="lazy">
                </div>
                <div class="content">
                <span><?php echo strtoupper(get_the_modified_date('F')) . ' ' . get_the_modified_date('j') . ', ' . get_the_modified_date('g:i A'); ?></span>
                <h2><?php the_title(); ?></h2>
                </div>
            </div>
           </a>
        </div>

        <?php
                endwhile;
                endif;
                wp_reset_postdata();
            ?>
            </div>
    </div>
</section>
<?php endif; ?>