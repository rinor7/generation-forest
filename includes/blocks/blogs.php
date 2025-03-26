<?php if (!get_field('pt-blogs')['disable_section'] ?? false): ?>
<section class="blogs__section">
    <div class="container">
        <?php
            $group_field_values = get_field('pt-blogs', get_the_ID()); // Assuming you're inside the loop
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
        <?php 
                $args = array(
                'posts_per_page' => 4,
                // 'category_name' => 'blogs'
                ); 
                $the_query = new WP_Query( $args );
                if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
            ?>

        <?php the_title(); ?>

        <?php
                endwhile;
                endif;
                wp_reset_postdata();
            ?>
    </div>
</section>
<?php endif; ?>