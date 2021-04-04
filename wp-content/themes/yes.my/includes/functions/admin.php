<?php 
    /**
     * Initiate all admin functions 
     */

    /**
     * Class Custom_Walker
     * Class to extend Walker_Nav_Menu to change the navigation rendering walker 
     */
    class Custom_Walker extends Walker_Nav_Menu 
    {
        function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
            $classes        = empty($item->classes) ? array() : (array) $item->classes;
            $class_names    = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
            !empty($class_names) and $class_names = " class='".esc_attr($class_names)."'";
            // $output         .= "<div id='menu-item-$item->ID' $class_names>";
            $output         .= "";
            $attr           = " id='menu-item-$item->ID' $class_names";
            !empty($item->attr_title) and $attr .= " title='".esc_attr($item->attr_title)."'";
            !empty($item->target) and $attr     .= " target='".esc_attr($item->target)."'";
            !empty($item->xfn) and $attr        .= " rel='".esc_attr($item->xfn)."'";
            !empty($item->url) and $attr        .= " href='".esc_attr($item->url)."'";
            $title          = apply_filters('the_title', $item->title, $item->ID);
            $item_output    = "$args->before <a $attr>$args->link_before$title</a>$args->link_after $args->after";
            $output         .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
        }
    }

    /**
     * Function register_menus()
     * Function to register custom menus for yes.my theme
     */
    if (!function_exists('register_menus')) {
        function register_menus() {
            if (function_exists('register_nav_menus')) {
                register_nav_menus(
                    array(
                        'corporate'         => esc_html__('Corporate', 'yes.my'), 
                        'primary'           => esc_html__('Primary', 'yes.my'), 
                        'support'           => esc_html__('Support', 'yes.my'), 
                        'support_mobile'    => esc_html__('Support Mobile', 'yes.my'), 
                        'selfcare'          => esc_html__('Selfcare', 'yes.my'), 
            
                        'footer_sitemap_1'  => esc_html__('Footer Sitemap 1', 'yes.my'), 
                        'footer_sitemap_2'  => esc_html__('Footer Sitemap 2', 'yes.my'), 
                        'footer_sitemap_3'  => esc_html__('Footer Sitemap 3', 'yes.my') 
                    )
                );
            }
        }
    }
    if (function_exists('register_menus')) add_action('init', 'register_menus');


    /**
     * Function fullbanner_body_class()
     * Function to add class to body if the page is using fullbanner layout
     */
    if (!function_exists('fullbanner_body_class')) {
        function fullbanner_body_class ($classes) {
            if (is_page_template('layout-fullbanner.php')) {
                $classes[]  = 'transparent-nav';
            }
            return $classes;
        }
    }
    if (function_exists('fullbanner_body_class')) add_filter('body_class', 'fullbanner_body_class');
?>