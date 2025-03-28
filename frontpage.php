
<?php /* Template Name: Home */ 
include("includes/headers/default.php"); 
?>

<main id="primary" class="site-main">

<?php get_template_part('includes/blocks/block-banner-one', null, array()); ?>

<?php get_template_part('includes/blocks/block-accordions-one', null, array()); ?>

<?php get_template_part('includes/blocks/block-form-one', null, array()); ?>

</main>

<?php include("includes/footers/default.php");  ?>