<?php

// Template Name: Blog

get_header(); ?>

<?php get_template_part('/parts/loop/loop-header'); ?>

<?php get_template_part('parts/loop/loop-archive'); ?>

<?php previous_posts_link(); ?>

<?php next_posts_link(); ?>

<?php get_footer(); ?>