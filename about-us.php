<?php //Template Name: About Us
include("includes/headers/default.php"); 
?>

<main id="primary" class="site-about-us site-main-seperator">
    
<?php get_template_part('includes/blocks/block-banner-one', null, array()); ?>

<?php get_template_part('includes/blocks/block-simple-content-two-sides', null, array()); ?>

<?php get_template_part('includes/blocks/block-company-structure', null, array()); ?>

<?php get_template_part('includes/blocks/block-our-team', null, array()); ?>

<?php get_template_part('includes/blocks/block-ecosystem', null, array()); ?>

<?php get_template_part('includes/blocks/block-banner-three', null, array()); ?>

</main>

<?php include("includes/footers/default.php"); ?>