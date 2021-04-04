<?php
/*
Template Name: Full Banner Page
Template Post Type: post, page
*/

get_header();
?>

<?php 
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
?>

<?php get_footer(); ?>