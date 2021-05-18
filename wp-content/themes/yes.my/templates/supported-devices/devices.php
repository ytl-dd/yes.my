<?php 
    $args   = [
        'post_type'     => 'supported-device', 
        'post_status'   => 'publish', 
        'posts_per_page'=> -1, 
        'orderby'       => 'id', 
        'order'         => 'ASC' 
    ];
    $loop   = new WP_Query($args);

    while ($loop->have_posts()) : 
        $loop->the_post();
        $post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
        $post_brands    = get_the_terms($post->ID, 'supported-device-category');
        $post_brand     = '';
        if ($post_brands) {
            foreach ($post_brands as $brand) {
                if ($brand->slug != 'uncategorized') {
                    $post_brand = $brand->slug;
                    break;
                }
            }
        }
        $post_supports  = get_the_terms($post->ID, 'supported-device-tag');
        $post_support   = '';
        if ($post_supports) {
            foreach ($post_supports as $support) {
                $post_support   = $support->slug;
                break;
            }
        }
?>
<div class="storegrid show" type="<?=$post_support?>" brand="<?=$post_brand?>">
    <div class="image"><img src="<?=$post_thumbnail[0]?>" class="cover"></div>
    <div class="desc"><?php the_title(); ?></div>
</div>
<?php 
    endwhile;

    wp_reset_postdata();
?>

