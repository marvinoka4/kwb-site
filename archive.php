<?php
/**
 * Displays archive pages if a specific template is not set.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

 //global $wp_query;
 //$wp_query->set_404();
 //status_header( 404 );
 //get_template_part( 404 ); exit();

get_header();

get_template_part('/parts/loop/loop-header'); ?>

<?php get_template_part('parts/loop/loop-archive'); ?>

<?php get_footer(); ?>
