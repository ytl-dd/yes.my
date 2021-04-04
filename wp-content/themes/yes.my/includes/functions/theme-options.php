<?php 

    if (!class_exists('Yesmy_options_config')) {

        class Yesmy_options_config 
        {
            public $args        = [];
            public $tabs        = [];
            public $help_tab_sidebar;
            public $sections    = [];
            public $opt_name    = 'yesmy_opt';
            public $theme;
            public $ReduxFramework;

            public function __construct() {
                if (!class_exists('Redux')) {
                    return;
                }

                if (true == Redux_Helpers::isTheme(__FILE__)) {
                    $this->initSettings();
                } else {
                    add_action('plugin_loaded', array($this, 'initSettings'), 10);
                }
            }

            public function initSettings() {
                if( !isset( $this->opt_name ) ) {
                    return;
                }
                Redux::disable_demo();
                
                $this->setArguments();
                $this->setHelpTabs();
                $this->setSections();
            }

            public function setArguments() {
                $theme          = wp_get_theme();
                $this->args     = array(
                    'opt_name'              => $this->opt_name, 
                    'display_name'          => $theme->get('Name'), 
                    'display_version'       => $theme->get('Version'), 
                    'menu_type'             => 'menu', 
                    'allow_sub_menu'        => true, 
                    'menu_title'            => __('Yes.my Theme Options', 'yes.my'), 
                    'page_title'            => __('Yes.my Theme Options', 'yes.my'), 
                    'google_api_key'        => '', 
                    'google_update_weekly'  => false, 
                    'async_typography'      => true, 
                    'admin_bar'             => true, 
                    'admin_bar_icon'        => 'dashicons-admin-tools', 
                    'admin_bar_priority'    => 50, 
                    'global_variable'       => '', 
                    'dev_mode'              => false, 
                    'update_notice'         => true, 
                    'customizer'            => true, 
                    'page_priority'         => 59, 
                    'page_parent'           => '', 
                    'page_permission'       => 'manage_options', 
                    'menu_icon'             => '', 
                    'last_tab'              => '', 
                    'page_icon'             => 'dashicons-admin-tools', 
                    'page_slug'             => '_options', 
                    'save_defaults'         => true, 
                    'default_show'          => true, 
                    'default_mark'          => '', 
                    'show_import_export'    => false, 

                    'transient_time'        => 60 * MINUTE_IN_SECONDS, 
                    'output'                => true, 
                    'output_tag'            => true, 

                    'database'              => '', 

                    'use_cdn'               => true, 

                    'hints'                 => array(
                        'icon'          => 'icon-question-sign', 
                        'icon_position' => 'right', 
                        'icon_color'    => 'lightgray', 
                        'icon-size'     => 'normal', 
                        'tip_style'     => array(
                            'color'     => 'light', 
                            'shadow'    => true, 
                            'rounded'   => false, 
                            'style'     => '' 
                        ), 
                        'tip_position'  => array(
                            'my'    => 'top left', 
                            'at'    => 'bottom right' 
                        ), 
                        'tip_effect'    => array(
                            'show'  => array(
                                'effect'    => 'slide', 
                                'duration'  => '500', 
                                'event'     => 'mouseover' 
                            ), 
                            'hide'  => array(
                                'effect'    => 'slide', 
                                'duration'  => '500', 
                                'event'     => 'click mouseleave'
                            )  
                        ) 
                    ) 
                );

                if (!isset($this->args['global_variable']) || $this->args['global_variable'] == false) {
                    if (!empty($args['global_variable'])) {
                        $v  = $this->args['global_variable'];
                    } else {
                        $v  = str_replace('-', '_', $this->args['opt_name']);
                    }
                    $this->args['intro_text']   = sprintf(__('<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'yes.my'), $v);
                } else {
                    $this->args['intro_text']   = __('<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'yes.my');
                }

                $args['footer_text']    = __('<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'yes.my');

                Redux::setArgs($this->opt_name, $this->args);
            }

            public function setHelpTabs() {
                $this->tabs = array(
                    array(
                        'id'        => 'redux-help-tab-1', 
                        'title'     => __('Theme Information 1', 'yes.my'), 
                        'content'   => __('<p>This is the tab content, HTML is allowed.</p>', 'yes.my') 
                    ), 
                    array(
                        'id'        => 'redux-help-tab-2', 
                        'title'     => __('Theme Information 2', 'yes.my'), 
                        'content'   => __('<p>This is the tab content, HTML is allowed.</p>', 'yes.my') 
                    ) 
                );
                Redux::setHelpTab($this->opt_name, $this->tabs);

                $this->help_tab_sidebar = __('<p>This is the sidebar content, HTML is allowed.</p>', 'yes.my');
                Redux::setHelpSidebar($this->opt_name, $this->help_tab_sidebar);
            }

            public function setSections() {
                Redux::setSection($this->opt_name, array(
                    'title'     => __('Footer Fields', 'yes.my'), 
                    'desc'      => __('Footer Components', 'yes.my'), 
                    'icon'      => 'el el-link', 
                    'fields'    => array(
                        array(
                            'id'        => 'opt_footer_top_left', 
                            'type'      => 'editor', 
                            'title'     => __('Contact Us', 'yes.my'), 
                            'subtitle'  => __('HTML content for this field', 'yes.my'), 
                            'desc'      => __('Text area in footer top left (beside Sitemap navigations)', 'yes.my'), 
                            'default'   => '<p style="font-size: 18px; font-weight: bold;">Got a question?</p><p><a href="https://www.yes.my/faq/customer-service"><span class="footer-contact"><b>Contact Us</b></span></a></p>'
                        ), 
                        array(
                            'id'        => 'opt_footer_get_app', 
                            'type'      => 'editor', 
                            'title'     => __('Get App', 'yes.my'), 
                            'subtitle'  => __('HTML content for this field', 'yes.my'), 
                            'desc'      => __('Text area in footer where normally put the Get the MyYes App HTML', 'yes.my') 
                        ), 
                        array(
                            'id'        => 'opt_footer_social_links', 
                            'type'      => 'editor', 
                            'title'     => __('Social Links', 'yes.my'), 
                            'subtitle'  => __('HTML content for this field', 'yes.my'), 
                            'desc'      => __('Text area in footer where normally put the Social Links HTML', 'yes.my') 
                        ), 
                        array(
                            'id'        => 'opt_footer_certificate', 
                            'type'      => 'editor', 
                            'title'     => __('CTM Certificate', 'yes.my'), 
                            'subtitle'  => __('Upload an image for this field', 'yes.my'), 
                            'desc'      => __('The certificate image in footer', 'yes.my') 
                        ), 
                        array(
                            'id'        => 'opt_footer_logo', 
                            'type'      => 'media', 
                            'title'     => __('Footer Logo', 'yes.my'), 
                            'subtitle'  => __('Upload an image for this field', 'yes.my'), 
                            'desc'      => __('The yes logo in the footer', 'yes.my') 
                        ), 
                        array(
                            'id'        => 'opt_footer_company', 
                            'type'      => 'text', 
                            'title'     => __('Company Name', 'yes.my'), 
                            'subtitle'  => __('Normal text for this field', 'yes.my'), 
                            'desc'      => __('The company name text in the footer', 'yes.my') 
                        ), 
                        array(
                            'id'        => 'opt_footer_card_verified', 
                            'type'      => 'media', 
                            'title'     => __('Card Verified Logo', 'yes.my'), 
                            'subtitle'  => __('Upload an image for this field', 'yes.my'), 
                            'desc'      => __('The Card Verified image in the footer', 'yes.my') 
                        ) 
                    ) 
                ));
            }
        }

        new Yesmy_options_config();

    }

?>