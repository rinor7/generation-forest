<?php if (!get_field('pt-noswiper')['disable_section'] ?? false): ?>
<section class="slider__boxes-section-plus">
    <div class="container">
        <?php
            $group_field_values = get_field('pt-noswiper', get_the_ID()); // Assuming you're inside the loop
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
        <div class="row">
            <?php
                $args = array(
                'post_type' => 'posttype',
                'posts_per_page' => '-1',
                'order' => 'ASC',
                );
                $loop = new WP_Query($args);
                $post_count = $loop->post_count;
                // Determine the column class based on the number of posts
                $col_class = 'col-lg-3';
                if ($post_count == 6) {
                    $col_class = 'col-lg-4';
                }
                while($loop->have_posts()):
                    $loop->the_post();
                ?>
            <div class="box__wrapper <?php echo esc_attr($col_class); ?>">
                <div class="img">
                    <img src="<?php the_post_thumbnail_url();?>" alt="Image" loading=“lazy”>
                </div>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
                ?>
        </div>
    </div>
</section>
<?php endif; ?>