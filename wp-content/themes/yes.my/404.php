<?php

header("HTTP/1.1 301 Moved Permanently");

header("Location: https://www.yes.my/docs/faq");

exit();

?>

<?php /* get_header(); ?>

<?php 
    global $wp;

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
?>

<?php get_footer(); */ ?>