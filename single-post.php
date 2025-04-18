<?php
include("includes/headers/default.php"); 
?>

	<main id="primary" class="site-single single-page site-main-seperator">

	
	<div class="single-blog-post">
        <div class="container">

			<?php 
			$custom_image = get_field('custom_image');
			
			if ($custom_image) : ?>
				<div class="col-xl-12 img-thumb custom-img">
					<img src="<?php echo esc_url($custom_image['url']); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
					<h1><?php the_title(); ?></h1>
				</div>
			<?php else : ?>
				<div class="col-xl-12 img-thumb default-thumb">
					<?php the_post_thumbnail('full'); ?>
					<h1><?php the_title(); ?></h1>
				</div>
			<?php endif; ?>


			<div class="post-date">
			<span><?php echo strtoupper(get_the_modified_date('F')) . ' ' . get_the_modified_date('j') . ', ' . get_the_modified_date('g:i A'); ?></span>
			</div>

			<div class="content-post">
				<?php the_content(); ?>
			</div>

		</div>
	</div>
		

	</main><!-- #main -->



	<?php include("includes/footers/default.php");  ?>