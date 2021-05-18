<div class="dropdown" id="ddYear">
    <button aria-expanded="false" aria-haspopup="true" class="btn dropdown-toggle" data-toggle="dropdown" type="button">Please Select</button>
    <div aria-labelledby="ddYear" class="dropdown-menu">
        <button class="dropdown-item" data-value="" type="button">Please Select</button>

        <?php 
            $args = [
                'post_type'     => 'media-centre', 
                'post_status'   => 'publish', 
                'orderby'       => 'date', 
                'order'         => 'DESC' 
            ];
    
            $loop   = new WP_Query($args);
            
            $arr_years  = [];

            while ($loop->have_posts()) : 
                $loop->the_post();
                $post_year      = get_the_date('Y');
                $arr_years[]    = $post_year;
            endwhile;

            $arr_years  = array_unique($arr_years);

            wp_reset_postdata();

            foreach ($arr_years as $year) : 
        ?>
        <button class="dropdown-item" data-value="<?=$year?>" type="button"><?=$year?></button>
        <?php 
            endforeach;
        ?>
    </div>
    <input id="year" name="year" type="hidden" />
</div>