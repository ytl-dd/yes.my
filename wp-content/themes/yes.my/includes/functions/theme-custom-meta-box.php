<?php 
    require_once(THEME_FUNCTIONS_PATH.'/meta-box-class/my-meta-box-class.php');

    if (is_admin()) {

        if (!function_exists('add_meta_page_post')) {
            function add_meta_page_post() {
                $prefix     = 'yesmy_';
                $config_custom_fields   = [
                    'id'            => 'content_custom_meta', 
                    'title'         => 'Custom Content Code', 
                    'pages'         => ['page', 'post'], 
                    'context'       => 'normal', 
                    'priority'      => 'high', 
                    'fields'        => [], 
                    'local_images'  => false, 
                    'use_with_theme'=> true 
                ];
                $meta_custom    = new AT_Meta_Box($config_custom_fields);
                $meta_custom->addTextarea($prefix."custom_css", ['name' => "Additional CSS Code"]);
                $meta_custom->addTextarea($prefix."custom_js", ['name' => "Additional JavaScript Code"]);
                $meta_custom->Finish();
            }

            add_action('init', 'add_meta_page_post');
        }

        if (!function_exists('add_meta_media_centre')) {
            function add_meta_media_centre() {
                $prefix     = 'yesmy_';
                $config_custom_fields   = [
                    'id'            => 'media_centre_theme_opt', 
                    'title'         => 'Media Centre Theme Options', 
                    'pages'         => ['media-centre'], 
                    'context'       => 'normal', 
                    'priority'      => 'high', 
                    'fields'        => [], 
                    'local_images'  => false, 
                    'use_with_theme'=> true 
                ];
                $meta_custom    = new AT_Meta_Box($config_custom_fields);
                $meta_custom->addSelect($prefix."media_centre_theme", ['none' => 'None', 'light' => 'Light'], ['name' => "Post Theme Class"]);
                $meta_custom->addImage($prefix."media_centre_bg_image", ['name' => "Post Theme Background Image"]);
                $meta_custom->Finish();
            }

            add_action('init', 'add_meta_media_centre');
        }

        if (!function_exists('add_meta_deals')) {
            function add_meta_deals() {
                $prefix     = 'yesmy_';
                $config_custom_fields   = [
                    'id'            => 'deals_meta_data', 
                    'title'         => 'Deals Meta Data', 
                    'pages'         => ['deals'], 
                    'context'       => 'normal', 
                    'priority'      => 'high', 
                    'fields'        => [], 
                    'local_images'  => false, 
                    'use_with_theme'=> true 
                ];
                $meta_custom    = new AT_Meta_Box($config_custom_fields);
                $meta_fields    = [
                    ['type' => 'textarea',  'id' => $prefix."deal_excerpt",         'name' => 'Deal Front Copy'], 
                    ['type' => 'image',     'id' => $prefix."deal_display_image",   'name' => 'Deal Display Image'], 
                    ['type' => 'image',     'id' => $prefix."deal_logo_image",      'name' => 'Deal Logo Image'], 
                    ['type' => 'editor',    'id' => $prefix."deal_sub_copy",        'name' => 'Deal Sub Copy'], 
                    ['type' => 'text',      'id' => $prefix."deal_date",            'name' => 'Deal Date'], 
                    ['type' => 'editor',    'id' => $prefix."deal_promo_code",      'name' => 'Deal Promo Code'], 
                    ['type' => 'editor',    'id' => $prefix."deal_present",         'name' => 'Deal Present'], 
                    ['type' => 'editor',    'id' => $prefix."deal_website",         'name' => 'Deal Website'], 
                    ['type' => 'editor',    'id' => $prefix."deal_tnc",             'name' => 'Deal Terms & Conditions'], 
                    ['type' => 'editor',    'id' => $prefix."deal_call_details",    'name' => 'Deal Call Details'], 
                    ['type' => 'editor',    'id' => $prefix."deal_email_details",   'name' => 'Deal Email Details'], 
                    ['type' => 'editor',    'id' => $prefix."deal_sms_details",     'name' => 'Deal SMS Details'], 
                    ['type' => 'editor',    'id' => $prefix."deal_shop_now",        'name' => 'Deal Shop Now'], 
                ];

                foreach ($meta_fields as $field) {
                    switch ($field['type']) {
                        case 'image' :
                            $meta_custom->addImage($field['id'], ['name' => $field['name']]);
                            break;
                        case 'editor' : 
                            $meta_custom->addWysiwyg($field['id'], ['name' => $field['name']]);
                            break;
                        case 'text' : 
                            $meta_custom->addText($field['id'], ['name' => $field['name']]);
                            break;
                        case 'textarea' : 
                            $meta_custom->addTextarea($field['id'], ['name' => $field['name']]);
                            break;
                        default :
                    }
                }

                $outlet_fields[]    = $meta_custom->addText($prefix."outlet_name", ['name' => 'Oulet Name'], true);
                $outlet_fields[]    = $meta_custom->addTextarea($prefix."outlet_address", ['name' => 'Outlet Address'], true);
                $outlet_fields[]    = $meta_custom->addText($prefix."outlet_tel", ['name' => 'Outlet Telephone Number'], true);
                $outlet_fields[]    = $meta_custom->addText($prefix."outlet_fax", ['name' => 'Outlet Fax Number'], true);

                $meta_custom->addRepeaterBlock($prefix."deal_outlet", ['name' => 'Deal Outlet', 'fields' => $outlet_fields]);

                $meta_custom->Finish();
            }

            add_action('init', 'add_meta_deals');
        }

        if (!function_exists('add_meta_openings')) {
            function add_meta_openings() {
                $prefix     = 'yesmy_opening_';
                $config_custom_fields   = [
                    'id'            => 'opening_info', 
                    'title'         => 'Opening Information', 
                    'pages'         => ['openings'], 
                    'context'       => 'normal', 
                    'priority'      => 'high', 
                    'fields'        => [], 
                    'local_images'  => false, 
                    'use_with_theme'=> true 
                ];
                $meta_custom    = new AT_Meta_Box($config_custom_fields);
                $meta_fields    = [
                    ['type' => 'text',      'id' => $prefix."experience",           'name' => 'Experience'], 
                    ['type' => 'number',    'id' => $prefix."vacancies",            'name' => 'Vacancies'], 
                    ['type' => 'date',      'id' => $prefix."closing_date",         'name' => 'Closing Date'], 
                    ['type' => 'editor',    'id' => $prefix."skill_qualities",      'name' => 'Skill Qualities'], 
                    ['type' => 'editor',    'id' => $prefix."job_responsibilities", 'name' => 'Job Responsibilities'], 
                    ['type' => 'editor',    'id' => $prefix."assignment_summary",   'name' => 'Assignment Summary'], 
                    ['type' => 'editor',    'id' => $prefix."requirement",          'name' => 'Requirement'], 
                    ['type' => 'editor',    'id' => $prefix."other_skill_set",      'name' => 'Other Skill Set'], 
                    ['type' => 'editor',    'id' => $prefix."competencies",         'name' => 'Competencies'], 
                    ['type' => 'editor',    'id' => $prefix."academic_qualification", 'name' => 'Academic Qualification'], 
                    ['type' => 'editor',    'id' => $prefix."qualification",        'name' => 'Qualification'], 
                    ['type' => 'editor',    'id' => $prefix."technical_skill",      'name' => 'Technical Skill'], 
                    ['type' => 'editor',    'id' => $prefix."working_relation_internal", 'name' => 'Working Relationships Internal'], 
                    ['type' => 'editor',    'id' => $prefix."working_relation_external", 'name' => 'Working Relationships External'] 
                ];

                foreach ($meta_fields as $field) {
                    switch ($field['type']) {
                        case 'image' :
                            $meta_custom->addImage($field['id'], ['name' => $field['name']]);
                            break;
                        case 'editor' : 
                            $meta_custom->addWysiwyg($field['id'], ['name' => $field['name']]);
                            break;
                        case 'text' : 
                            $meta_custom->addText($field['id'], ['name' => $field['name']]);
                            break;
                        case 'textarea' : 
                            $meta_custom->addTextarea($field['id'], ['name' => $field['name']]);
                            break;
                        case 'number' : 
                            $meta_custom->addNumber($field['id'], ['name' => $field['name']]);
                            break;
                        case 'date' : 
                            $meta_custom->addDate($field['id'], ['name' => $field['name'], 'format' => 'yy-mm-dd']);
                            break;
                        default :
                    }
                }
                
                $meta_custom->Finish();
            }

            add_action('init', 'add_meta_openings');
        }

        if (!function_exists('add_meta_roaming_rates')) {
            function add_meta_roaming_rates() {
                $prefix     = 'yesmy_roaming_';
                $config_custom_fields   = [
                    'id'            => 'roaming_info', 
                    'title'         => 'Roaming Telco Information', 
                    'pages'         => ['roaming-rates'], 
                    'context'       => 'normal', 
                    'priority'      => 'high', 
                    'fields'        => [], 
                    'local_images'  => false, 
                    'use_with_theme'=> true 
                ];
                $meta_custom    = new AT_Meta_Box($config_custom_fields);
                $meta_fields    = [
                    ['type' => 'text',      'id' => $prefix."operator_name",        'name' => 'Roaming Operator Name <sup>*</sup>'], 
                    ['type' => 'text',      'id' => $prefix."internet_rate",        'name' => 'Roaming Internet Rate <sup>*</sup>'], 
                    ['type' => 'select',    'id' => $prefix."internet_rate_type",   'name' => 'Roaming Internet Rate Type <sup>*</sup>', 'options' => ['' => 'Select Type', '/MB' => 'MB', '/Day' => 'Day', '/Week' => 'Week', '/Month' => 'Month']], 
                    ['type' => 'text',      'id' => $prefix."daily_quota",          'name' => 'Roaming Daily Quota'], 
                    ['type' => 'textarea',  'id' => $prefix."quota_disclaimer",     'name' => 'Roaming Quota Disclaimer', 'desc' => 'If telco has quota and disclaimer is blank, will default to display "Once the quota is finished, the data speed will be reduced until your day pass expires without additional cost."'], 
                    ['type' => 'checkbox',  'id' => $prefix."is_4g_lte",            'name' => 'Roaming Is 4G LTE', 'desc' => 'Roaming is in 4G LTE'], 
                    ['type' => 'text',      'id' => $prefix."call_rate",            'name' => 'Roaming Call Rate <sup>*</sup>'], 
                    ['type' => 'text',      'id' => $prefix."call_back",            'name' => 'Roaming Call Back to Malaysia <sup>*</sup>'], 
                    ['type' => 'text',      'id' => $prefix."call_other_country",   'name' => 'Roaming Call to Other Country <sup>*</sup>'], 
                    ['type' => 'text',      'id' => $prefix."receiving_calls",      'name' => 'Roaming Receiving Calls <sup>*</sup>'], 
                    ['type' => 'text',      'id' => $prefix."sms",                  'name' => 'Roaming SMS <sup>*</sup>'], 
                ];

                foreach ($meta_fields as $field) {
                    switch ($field['type']) {
                        case 'text' : 
                            $block_fields[] = $meta_custom->addText($field['id'], ['name' => $field['name']], true);
                            break;
                        case 'textarea' : 
                            $field_attrs    = ['name' => $field['name']];
                            if (isset($field['desc'])) $field_attrs['desc'] = $field['desc'];
                            $block_fields[] = $meta_custom->addTextarea($field['id'], $field_attrs, true);
                            break;
                        case 'select' : 
                            $block_fields[] = $meta_custom->addSelect($field['id'], $field['options'], ['name' => $field['name']], true);
                            break;
                        case 'checkbox' : 
                            $field_attrs    = ['name' => $field['name']];
                            // if (isset($field['desc'])) $field_attrs['desc'] = $field['desc'];
                            $block_fields[] = $meta_custom->addCheckbox($field['id'], $field_attrs, true);
                            break;
                        default :
                    }
                }
                
                $meta_custom->addRepeaterBlock($prefix."operator", ['name' => 'Telcos', 'fields' => $block_fields]);

                $meta_custom->Finish();
            }

            add_action('init', 'add_meta_roaming_rates');
        }

        if (!function_exists('add_meta_idd_postpaid_rates')) {
            function add_meta_idd_postpaid_rates() {
                $prefix     = 'yesmy_idd_postpaid_';
                $config_custom_fields   = [
                    'id'            => 'idd_postpaid_info', 
                    'title'         => 'Postpaid IDD Rates Information', 
                    'pages'         => ['idd-rates'], 
                    'context'       => 'normal', 
                    'priority'      => 'high', 
                    'fields'        => [], 
                    'local_images'  => false, 
                    'use_with_theme'=> true 
                ];
                $meta_custom    = new AT_Meta_Box($config_custom_fields);
                $meta_custom->addText($prefix."country_code",       ['name' => "Country Code"]);
                $meta_custom->addText($prefix."call_rate_fixed",    ['name' => "Fixed Call Rate"]);
                $meta_custom->addText($prefix."call_rate_mobile",   ['name' => "Mobile Call Rate"]);
                $meta_custom->addText($prefix."sms_rate",           ['name' => "SMS Rate"]);
                $meta_custom->Finish();
            }

            add_action('init', 'add_meta_idd_postpaid_rates');
        }

        if (!function_exists('add_meta_idd_prepaid_rates')) {
            function add_meta_idd_prepaid_rates() {
                $prefix     = 'yesmy_idd_prepaid_';
                $config_custom_fields   = [
                    'id'            => 'idd_prepaid_info', 
                    'title'         => 'Prepaid IDD Rates Information', 
                    'pages'         => ['idd-rates'], 
                    'context'       => 'normal', 
                    'priority'      => 'high', 
                    'fields'        => [], 
                    'local_images'  => false, 
                    'use_with_theme'=> true 
                ];
                $meta_custom    = new AT_Meta_Box($config_custom_fields);
                $meta_custom->addText($prefix."country_code",       ['name' => "Country Code"]);
                $meta_custom->addText($prefix."call_rate_fixed",    ['name' => "Fixed Call Rate"]);
                $meta_custom->addText($prefix."call_rate_mobile",   ['name' => "Mobile Call Rate"]);
                $meta_custom->addText($prefix."sms_rate",           ['name' => "SMS Rate"]);
                $meta_custom->Finish();
            }

            add_action('init', 'add_meta_idd_prepaid_rates');
        }
        
    }

    if (!function_exists('get_query_meta')) {
        function get_query_meta($wp_query = '') {
            if ((empty($wp_query)) || (!empty($wp_query) && !empty($wp_query->posts) && isset($wp_query->posts[0]->post_meta))) return $wp_query;

            $sql        = $post_meta = '';
            $post_ids   = wp_list_pluck($wp_query->posts, 'ID');
            if (!empty($post_ids)) {
                global $wpdb;
                $post_ids   = implode(',', $post_ids);
                $sql        = " SELECT meta_key, meta_value, post_id
                                FROM $wpdb->postmeta 
                                WHERE post_id IN ($post_ids)";
                $post_metas = $wpdb->get_results($sql, OBJECT);
                if (!empty($post_metas)) {
                    foreach ($wp_query->posts as $pKey => $pValue) {
                        $wp_query->posts[$pKey]->post_meta  = new StdClass();

                        foreach ($post_metas as $mKey => $mValue) {
                            if ($post_metas[$mKey]->post_id == $wp_query->posts[$pKey]->ID) {
                                if (strpos($post_metas[$mKey]->meta_key, 'yesmy_') !== false) {
                                    // $new_meta[$mKey]    = new StdClass();
                                    // $new_meta[$mKey]->meta_key  = $post_metas[$mKey]->meta_key;
                                    // $new_meta[$mKey]->meta_value= maybe_unserialize($post_metas[$mKey]->meta_value);

                                    $new_meta[$post_metas[$mKey]->meta_key] = maybe_unserialize($post_metas[$mKey]->meta_value);
    
                                    $wp_query->posts[$pKey]->post_meta  = (object) array_merge((array) $wp_query->posts[$pKey]->post_meta, (array) $new_meta);
    
                                    unset($new_meta);
                                }
                            }
                        }
                    }
                }

                unset($post_ids); unset($sql); unset($post_metas);
            }

            return $wp_query;
        }
    }
?>