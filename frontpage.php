
<?php /* Template Name: Home */ 
include("includes/headers/default.php"); 
?>

<main id="primary" class="site-main site-main-seperator">

<?php get_template_part('includes/blocks/block-banner-one', null, array()); ?>


<?php get_template_part('includes/blocks/block-our-concept', null, array()); ?>


<?php get_template_part('includes/blocks/block-tree', null, array()); ?>


<?php get_template_part('includes/blocks/block-impact-boxes', null, array()); ?>


<?php get_template_part('includes/blocks/block-corporate-carbon-concession', null, array()); ?>


<?php get_template_part('includes/blocks/block-our-projects', null, array()); ?>


<?php get_template_part('includes/blocks/block-accordions-one', null, array()); ?>


</main>

<?php include("includes/footers/default.php");  ?>