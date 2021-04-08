<?php 
    require_once(THEME_FUNCTIONS_PATH.'/meta-box-class/my-meta-box-class.php');

    if (is_admin()) {
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
?>