<?php

// Template Name: About Us

get_header(); ?>


<?php get_template_part('parts/header/page-header');?>

<?php get_template_part('parts/header/about-hero');?>

<?php get_template_part('parts/content/company-summary');?>

<?php get_template_part('parts/content/mission-vision');?>

<div class="grid-container full rellax">
    <div class="grid-x">
        <div class="cell large-12 buildIn-fadeIn relative panel-image" style="min-height: 50vh;background-position: center;" data-interchange="[<?php echo get_stylesheet_directory_uri(); ?>/assets/images/photos/small-hero-bg-2.jpg , small], [<?php echo get_stylesheet_directory_uri(); ?>/assets/images/photos/hero-bg-2.jpg, medium]">
            <div class="filter filter-primary-gradient"></div>
        </div>
    </div>
</div>

<?php get_template_part('parts/content/summary-about-us');?>

<?php get_template_part('parts/content/call-to-action');?>


<?php get_footer(); ?>
