<?php
/*
Template Name: Full Banner Page
Template Post Type: post, page
*/

get_header();
?>

<?php 
    if ( have_posts() ) {
        $content    = get_the_content();

        if (trim($content) == '') {
            $request_url    = $wp->request;
            $faq_post_id    = REDIRECT_FAQ_EN;
            $lang           = get_bloginfo("language");

            if ($lang == 'ms-MY') {
                $faq_post_id    = REDIRECT_FAQ_BM;
            } else if ($lang == 'zh-CN') {
                $faq_post_id    = REDIRECT_FAQ_CH;
            }

            $faq_post       = get_post($faq_post_id);

            $content        = $faq_post->post_content;
            $content        = apply_filters('the_content', $content);
            $content        = str_replace(']]>', ']]&gt;', $content);
            echo $content;
        } else {
            while ( have_posts() ) :
                the_post();
                $custom_code_css    = get_post_meta($post->ID, 'yesmy_custom_css', true);
                $custom_code_js     = get_post_meta($post->ID, 'yesmy_custom_js', true);
        
                if ($custom_code_css) echo $custom_code_css;
        
                the_content();
        
                if ($custom_code_js) echo $custom_code_js;
            endwhile;
        }
    }
?>

<?php get_footer(); ?>