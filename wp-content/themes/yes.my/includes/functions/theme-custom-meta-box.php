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
        
    }
?>