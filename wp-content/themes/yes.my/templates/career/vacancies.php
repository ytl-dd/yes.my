<?php 
    $args   = [
        'post_type'     => 'openings', 
        'post_status'   => 'publish', 
        'posts_per_page'=> -1, 
        'orderby'       => 'id', 
        'order'         => 'DESC' 
    ];
    $loop   = new WP_Query($args);

    while ($loop->have_posts()) : 
        $loop->the_post();
        
        $post_divisions = get_the_terms($post->ID, 'openings-category');
        $post_division  = '';
        if ($post_divisions) {
            foreach ($post_divisions as $division) {
                $post_division  = $division->slug;
                break;
            }
        }

        $post_locations = get_the_terms($post->ID, 'openings-tag');
        $post_location  = '';
        $post_loc_name  = '';
        if ($post_locations) {
            foreach ($post_locations as $location) {
                $post_location  = $location->slug;
                $post_loc_name  = $location->name;
                break;
            }
        }

        $closing_date   = get_post_meta($post->ID, 'yesmy_opening_closing_date', true);
?>

<tr division="<?=$post_division?>" location="<?=$post_location?>">
    <td><b><?php the_title(); ?></b></td>
    <td><?=$post_loc_name?></td>
    <td><?=$closing_date?></td>
    <td><a class="accent" href="<?php the_permalink(); ?>"><u><b>Learn More</b></u></a></td>
</tr>

<?php 
    endwhile;

    wp_reset_postdata();
?>