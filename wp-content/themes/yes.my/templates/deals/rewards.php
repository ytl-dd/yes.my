<?php 
    $args   = [
        'post_type'     => 'deals', 
        'post_status'   => 'publish', 
        'posts_per_page'=> -1, 
        'orderby'       => 'name', 
        'order'         => 'ASC' 
    ];
    $loop   = new WP_Query($args);

    while ($loop->have_posts()) : 
        $loop->the_post();
        $post_categories    = get_the_terms($post->ID, 'deals-category');
        $post_category      = '';
        if ($post_categories) {
            foreach ($post_categories as $category) {
                if ($category->slug != 'uncategorized') {
                    $post_category  = $category->name;
                    break;
                }
            }
        }
        $post_regions       = get_the_terms($post->ID, 'deals-tag');
        $post_region        = '';
        foreach ($post_regions as $region) {
            $post_region    = $region->name;
            break;
        }
        $img_logo       = get_post_meta($post->ID, 'yesmy_deal_logo_image', true);
        $img_main       = get_post_meta($post->ID, 'yesmy_deal_display_image', true);
        $deal_excerpt   = get_post_meta($post->ID, 'yesmy_deal_excerpt', true);
        $deal_date      = get_post_meta($post->ID, 'yesmy_deal_date', true);
        $deal_promo_code= get_post_meta($post->ID, 'yesmy_deal_promo_code', true);
        $deal_present   = get_post_meta($post->ID, 'yesmy_deal_present', true);
        $deal_website   = get_post_meta($post->ID, 'yesmy_deal_website', true);
        $deal_tnc       = get_post_meta($post->ID, 'yesmy_deal_tnc', true);
        $deal_phone     = get_post_meta($post->ID, 'yesmy_deal_call_details', true);
        $deal_email     = get_post_meta($post->ID, 'yesmy_deal_email_details', true);
        $deal_sms       = get_post_meta($post->ID, 'yesmy_deal_sms_details', true);
        $deal_shop_now  = get_post_meta($post->ID, 'yesmy_deal_shop_now', true);
        $deal_outlets   = get_post_meta($post->ID, 'yesmy_deal_outlet', true);
        // echo '<pre>'; var_dump($deal_outlets); echo '</pre>';
?>

<div class="col-12 col-md-6 col-lg-4 col-xl-3" style="display: block;">
    <div class="storeitem show" category="<?=$post_category?>" location="<?=$post_region?>">
        <div class="image">
            <img src="<?= ($img_logo && isset($img_logo['url'])) ? $img_logo['url'] : ''; ?>" class="cover">
        </div>
        <div class="desc"><?=$deal_excerpt?></div>
        <div class="extra">
            <img src="<?= ($img_main && isset($img_main['url'])) ? $img_main['url'] : ''; ?>" class="cover">
            <div class="row grey">
                <div class="col-12">
                    <?php the_content(); ?>
                </div>

                <?php if ($deal_phone) : ?>
                <div class="col-12">
                    <hr>
                </div>
                <?php endif; ?>

                <?php if ($deal_email) : ?>
                <div class="col-12 d-lg-none">
                    <hr>
                </div>
                <?php endif; ?>

                <?php if ($deal_date) : ?>
                <div class="col-12 col-lg-6">
                    <svg class="ia ia-calendar">
                        <use xlink:href="/ia-defs.svg#ia-calendar"></use>
                    </svg>
                    <div><?=$deal_date?></div>
                </div>
                <?php endif; ?>

                <?php if ($deal_sms) : ?>
                <div class="col-12 d-lg-none">
                    <hr>
                </div>
                <?php endif; ?>
                
                <?php if ($deal_present) : ?>
                <div class="col-12 col-lg-6">
                    <svg class="ia ia-gift">
                        <use xlink:href="/ia-defs.svg#ia-gift"></use>
                    </svg>
                    <div><?=$deal_present?></div>
                </div>
                <?php endif; ?>
                
                <?php if ($deal_promo_code) : ?>
                <div class="col-12 col-lg-6">
                    <svg class="ia ia-gift">
                        <use xlink:href="/ia-defs.svg#ia-gift"></use>
                    </svg>
                    <div><?=$deal_promo_code?></div>
                </div>
                <?php endif; ?>

                <?php if ($deal_sms) : ?>
                <div class="col-12">
                    <hr>
                </div>
                <?php endif; ?>

                <?php if ($deal_website) : ?>
                <div class="col-12 col-lg-6">
                    <svg class="ia ia-home">
                        <use xlink:href="/ia-defs.svg#ia-home"></use>
                    </svg>
                    <div><?=$deal_website?></div>
                </div>
                <?php endif; ?>

                <?php if ($deal_shop_now) : ?>
                <div class="col-12 d-lg-none">
                    <hr>
                </div>
                <?php endif; ?>

                <?php if ($deal_outlets) : ?>
                <div class="col-12 col-lg-6">
                    <?php 
                        foreach ($deal_outlets as $outlet) : 
                            $outlet_name    = $outlet['yesmy_outlet_name'];
                            $outlet_address = $outlet['yesmy_outlet_address'];
                    ?>
                    <svg class="ia ia-pin">
                        <use xlink:href="/ia-defs.svg#ia-pin"></use>
                    </svg>
                    <div>
                        <b><?=$outlet_name?></b><br>
                        <?=$outlet_address?><br><br>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <div class="col-12">
                    <hr>
                </div>

                <?php if ($deal_tnc) : ?>
                <div class="col-12">
                    <p><b>Terms &amp; Conditions</b></p>
                    <div><?=$deal_tnc?></div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php 
    endwhile;

    wp_reset_postdata();
?>