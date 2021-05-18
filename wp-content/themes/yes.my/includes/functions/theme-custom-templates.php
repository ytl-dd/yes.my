<?php 
    if (!function_exists('custom_page_template')) {
        function custom_page_template($page_template) {
            global $post;
            
            switch ($post->ID) {
                case 77 : 
                case 821 :
                case 823 : 
                    if (file_exists(get_template_directory().'/page-reward-deals.php')) $page_template = get_template_directory().'/page-reward-deals.php';
                    break;
                case 79 : 
                case 882 : 
                case 887 : 
                    if (file_exists(get_template_directory().'/page-supported-devices.php')) $page_template = get_template_directory().'/page-supported-devices.php';
                    break;
                case 379 :
                case 381 : 
                case 383 : 
                    if (file_exists(get_template_directory().'/archive-media-centre.php')) $page_template = get_template_directory().'/archive-media-centre.php';
                    break;
                case 396 : 
                case 398 : 
                case 401 : 
                    if (file_exists(get_template_directory().'/page-career.php')) $page_template = get_template_directory().'/page-career.php';
                    break;
                default :
                    break;
            }

            return $page_template;
        }

        add_filter('page_template', 'custom_page_template');
    }
?>