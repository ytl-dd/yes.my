<?php get_header(); ?>

<?php 
    $lang       = get_bloginfo('language');

    $abs_path           = 'templates/roaming-idd';
    $page_template_path = "$abs_path/content-en";
    if ($lang == 'ms-MY') {
        $page_template_path = "$abs_path/content-bm";
    } else if ($lang == 'zh-CN') {
        $page_template_path = "$abs_path/content-ch";
    }

    $args_roaming   = [
        'post_type'     => 'roaming-rates', 
        'post_status'   => 'publish', 
        'posts_per_page'=> -1, 
        'orderby'       => 'name', 
        'order'         => 'ASC' 
    ];
    $loop                   = new WP_Query($args_roaming);
    $data_roaming           = [];
    $data_roaming_country   = [];
    if ($loop->have_posts()) : 
        // $loop   = get_query_meta($loop);
        while ($loop->have_posts()) : 
            $loop->the_post();

            // $is_4g  = get_post_meta($post->ID, 'yesmy_roaming_is_4g_lte', true);
            // $data_roaming[$post->ID]    = [
            //     'id'                => $post->ID, 
            //     'country_name'      => $post->post_title, 
            //     'country_slug'      => $post->post_name, 
            //     'operatorName'      => get_post_meta($post->ID, 'yesmy_roaming_operator_name', true), 
            //     'roamingRate'       => get_post_meta($post->ID, 'yesmy_roaming_internet_rate', true), 
            //     'roamingType'       => get_post_meta($post->ID, 'yesmy_roaming_internet_rate_type', true), 
            //     'quota'             => get_post_meta($post->ID, 'yesmy_roaming_daily_quota', true), 
            //     'quotaDisclaimer'   => get_post_meta($post->ID, 'yesmy_roaming_quota_disclaimer', true), 
            //     'is4g'              => ($is_4g == 'on') ? 1 : 0, 
            //     'callRate'          => get_post_meta($post->ID, 'yesmy_roaming_call_rate', true), 
            //     'callToMalaysia'    => get_post_meta($post->ID, 'yesmy_roaming_call_back', true), 
            //     'callToOther'       => get_post_meta($post->ID, 'yesmy_roaming_call_other_country', true), 
            //     'receivingCallRate' => get_post_meta($post->ID, 'yesmy_roaming_receiving_calls', true), 
            //     'smsRate'           => get_post_meta($post->ID, 'yesmy_roaming_sms', true) 
            // ];

            // $post_meta      = $post->post_meta;
            // $is_4g          = (isset($post_meta->yesmy_roaming_is_4g_lte)) ? $post_meta->yesmy_roaming_is_4g_lte : '';
            // $data       = [
            //     'id'                => $post->ID, 
            //     'country_name'      => $post->post_title, 
            //     'country_slug'      => $post->post_name, 
            //     'operatorName'      => (isset($post_meta->yesmy_roaming_operator_name))         ? $post_meta->yesmy_roaming_operator_name       : '', 
            //     'roamingRate'       => (isset($post_meta->yesmy_roaming_internet_rate))         ? $post_meta->yesmy_roaming_internet_rate       : '', 
            //     'roamingType'       => (isset($post_meta->yesmy_roaming_internet_rate_type))    ? $post_meta->yesmy_roaming_internet_rate_type  : '', 
            //     'quota'             => (isset($post_meta->yesmy_roaming_daily_quota))           ? $post_meta->yesmy_roaming_daily_quota         : '', 
            //     'quotaDisclaimer'   => (isset($post_meta->yesmy_roaming_quota_disclaimer))      ? $post_meta->yesmy_roaming_quota_disclaimer    : '', 
            //     'is4g'              => ($is_4g == 'on') ? 1 : 0, 
            //     'callRate'          => (isset($post_meta->yesmy_roaming_call_rate))             ? $post_meta->yesmy_roaming_call_rate           : '', 
            //     'callToMalaysia'    => (isset($post_meta->yesmy_roaming_call_back))             ? $post_meta->yesmy_roaming_call_back           : '', 
            //     'callToOther'       => (isset($post_meta->yesmy_roaming_call_other_country))    ? $post_meta->yesmy_roaming_call_other_country  : '', 
            //     'receivingCallRate' => (isset($post_meta->yesmy_roaming_receiving_calls))       ? $post_meta->yesmy_roaming_receiving_calls     : '', 
            //     'smsRate'           => (isset($post_meta->yesmy_roaming_sms))                   ? $post_meta->yesmy_roaming_sms                 : '' 
            // ];
            
            $arr_operators  = get_post_meta($post->ID, 'yesmy_roaming_operator', true);
            foreach ($arr_operators as $operator) : 
                $is_4g      = (isset($operator['yesmy_roaming_is_4g_lte'])) ? $operator['yesmy_roaming_is_4g_lte'] : '';
                $data       = [
                    'id'                => $post->ID, 
                    'country_name'      => $post->post_title, 
                    'country_slug'      => $post->post_name, 
                    'operatorName'      => $operator['yesmy_roaming_operator_name'], 
                    'roamingRate'       => $operator['yesmy_roaming_internet_rate'], 
                    'roamingType'       => $operator['yesmy_roaming_internet_rate_type'], 
                    'quota'             => $operator['yesmy_roaming_daily_quota'], 
                    'quotaDisclaimer'   => $operator['yesmy_roaming_quota_disclaimer'], 
                    'is4g'              => ($is_4g == 'on') ? 1 : 0, 
                    'callRate'          => $operator['yesmy_roaming_call_rate'], 
                    'callToMalaysia'    => $operator['yesmy_roaming_call_back'], 
                    'callToOther'       => $operator['yesmy_roaming_call_other_country'], 
                    'receivingCallRate' => $operator['yesmy_roaming_receiving_calls'], 
                    'smsRate'           => $operator['yesmy_roaming_sms'] 
                ];
                $data_roaming[$post->ID][]  = $data;
            endforeach;
        endwhile;
    endif;
    wp_reset_postdata();

    $args_idd       = [
        'post_type'     => 'idd-rates', 
        'post_status'   => 'publish', 
        'posts_per_page'=> -1, 
        'orderby'       => 'name', 
        'order'         => 'ASC' 
    ];
    $loop           = new WP_Query($args_idd);
    $data_idd       = [];
    while ($loop->have_posts()) : 
        $loop->the_post();
        $data_idd[$post->post_title]    = [
            'country_name'  => $post->post_title, 
            'country_slug'  => $post->post_name, 
            'prepaid'       => [
                'country'       => $post->post_title, 
                'countryCode'   => get_post_meta($post->ID, 'yesmy_idd_prepaid_country_code', true), 
                'callRateFixed' => get_post_meta($post->ID, 'yesmy_idd_prepaid_call_rate_fixed', true), 
                'callRateMobile'=> get_post_meta($post->ID, 'yesmy_idd_prepaid_call_rate_mobile', true), 
                'smsRate'       => get_post_meta($post->ID, 'yesmy_idd_prepaid_sms_rate', true) 
            ], 
            'postpaid'      => [
                'country'       => $post->post_title, 
                'countryCode'   => get_post_meta($post->ID, 'yesmy_idd_postpaid_country_code', true), 
                'callRateFixed' => get_post_meta($post->ID, 'yesmy_idd_postpaid_call_rate_fixed', true), 
                'callRateMobile'=> get_post_meta($post->ID, 'yesmy_idd_postpaid_call_rate_mobile', true), 
                'smsRate'       => get_post_meta($post->ID, 'yesmy_idd_postpaid_sms_rate', true) 
            ] 
        ];
    endwhile;
    wp_reset_postdata();

    // echo '<pre>'; print_r($data_roaming); print_r($data_idd); echo '</pre>';
?>

<script type="text/javascript">
    var jsonRoaming         = JSON.parse(JSON.stringify(<?=json_encode($data_roaming)?>));
    var jsonIdd             = JSON.parse(JSON.stringify(<?=json_encode($data_idd)?>));
    // console.log(jsonRoaming);
</script>

<?php get_template_part($page_template_path, '', ['data_roaming' => $data_roaming, 'data_idd' => $data_idd]); ?>

<?php get_template_part('templates/roaming-idd/scripts'); ?>

<?php get_footer(); ?>