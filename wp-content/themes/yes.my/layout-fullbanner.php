<?php
/*
Template Name: Full Banner Page
Template Post Type: post, page
*/

get_header();
?>

<?php 
    if ( have_posts() ) {
        while ( have_posts() ) :
            the_post();
            $custom_code_css    = get_post_meta($post->ID, 'yesmy_custom_css', true);
            $custom_code_js     = get_post_meta($post->ID, 'yesmy_custom_js', true);
    
            if ($custom_code_css) echo $custom_code_css;
    
            the_content();
    
            if ($custom_code_js) echo $custom_code_js;
        endwhile;
    }
?>

<?php get_footer(); ?>