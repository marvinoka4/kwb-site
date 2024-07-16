<?php
/**
 * The template for displaying all single posts and attachments
 */

//global $wp_query;
//$wp_query->set_404();
//status_header( 404 );
//get_template_part( 404 ); exit();

get_header();

get_template_part('/parts/loop/loop-header'); ?>

<?php get_template_part('parts/loop/loop-single'); ?>


<?php get_footer(); ?>
