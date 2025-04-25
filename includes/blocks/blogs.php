<?php 
$blog_settings = get_field('pt-blogs');
if (!($blog_settings['disable_section'] ?? false)):
?>
<section id="blogs-section" class="blogs__section">    
    <div class="container">

        <?php if (!empty($blog_settings['section_title']) || !empty($blog_settings['section_subtitle'])): ?>
        <div class="section-header">
            <?php if (!empty($blog_settings['section_title'])): ?>
                <h2 class="<?php echo (empty($blog_settings['section_subtitle']) ? 'only-title' : ''); ?>">
                    <?php echo esc_html($blog_settings['section_title']); ?>
                </h2>
            <?php endif; ?>
            <?php if (!empty($blog_settings['section_subtitle'])): ?>
                <h3 class="<?php echo (empty($blog_settings['section_title']) ? 'only-subtitle' : ''); ?>">
                    <?php echo esc_html($blog_settings['section_subtitle']); ?>
                </h3>
            <?php endif; ?>
        </div>
        <?php endif; ?>

         <!-- Tabs -->
         <ul class="blog-tabs nav-tabs">
            <?php 
            $categories = [
                'all' => 'All',
                'articles' => 'Articles',
                'videos' => 'Videos',
                'podcasts' => 'Podcasts'
            ];
            $current_cat = $_GET['category'] ?? 'all';

            foreach ($categories as $slug => $label):
                $active = ($slug === $current_cat) ? 'active' : '';
                $url = add_query_arg('category', $slug, get_permalink()) . '#category-title';
            ?>
                <li class="<?php echo esc_attr($active); ?>">
                    <a href="<?php echo esc_url($url); ?>"><?php echo esc_html($label); ?></a>
                </li>
            <?php endforeach; ?>
        </ul>

        <!-- Latest Post -->
        <?php 
        $latest_post = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC',
        ]);

        if ($latest_post->have_posts()) : $latest_post->the_post(); ?>
        <div class="latest-blog">
            <div class="row">
                <div class="lefts col-lg-6">
                    <div class="img">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="Image" loading="lazy">
                    </div>
                </div>
                <div class="rights col-lg-6">
                    <div class="up-content">
                        <span><?php echo strtoupper(get_the_modified_date('F')) . ' ' . get_the_modified_date('j') . ', ' . get_the_modified_date('g:i A'); ?></span>
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="bottom-content">
                        <div class="buttons">
                            <div class="default-btn">
                                <a href="<?php the_permalink(); ?>" class="link-btn">
                                Find out more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; wp_reset_postdata(); ?>

        <?php if (!empty($categories[$current_cat])): ?>
            <h2 id="category-title" class="active-category-title">
                <?php echo esc_html($categories[$current_cat]); ?>
            </h2>
        <?php endif; ?>

        <!-- Blog Grid -->
        <div id="ajax-posts" class="row">
        <?php 
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $query_args = [
                'post_type' => 'post',
                'posts_per_page' => 9,
                'paged' => $paged,
                'post__not_in' => [$latest_post->posts[0]->ID], // Exclude latest post from grid
            ];

            if ($current_cat !== 'all') {
                $query_args['category_name'] = $current_cat;
            }

            $the_query = new WP_Query($query_args);

            if ($the_query->have_posts()):
                while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
                <?php endwhile;
            else: ?>
                <div class="col-12"><p>No posts found in this category.</p></div>
            <?php endif; wp_reset_postdata(); ?>
        </div>

        <!-- Pagination -->
        <div class="pagination-wrapper">
            <?php
            echo paginate_links([
                'total' => $the_query->max_num_pages,
                'current' => $paged,
                'prev_text' => '«',
                'next_text' => '»',
                'format' => '?paged=%#%' . ($current_cat !== 'all' ? '&category=' . urlencode($current_cat) : ''),
                'type' => 'list',
            ]);
            ?>
        </div>

    </div>
</section>
<?php endif; ?>