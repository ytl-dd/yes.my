<?php 
    // function yes_enqueue_scripts() {
    //     // wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
    //     // wp_enqueue_style( 'flexslider', get_template_directory_uri().'/css/flexslider.css' );
    //     // wp_enqueue_style( 'endlessRiver', get_template_directory_uri().'/css/endlessRiver.css' );
    //     // wp_enqueue_style( 'prettyPhoto', get_template_directory_uri().'/css/prettyPhoto.css' );
    //     // wp_enqueue_style( 'font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' );
    //     // wp_enqueue_style( 'font-arvo', 'http://fonts.googleapis.com/css?family=Arvo' );
    //     wp_enqueue_style( 'style', get_stylesheet_uri() );

    //     wp_enqueue_style( 'style_1', get_template_directory_uri().'/css/css_PbSDqcH4f9uo4TkRyxgSbZRMbfTU9dD32PSYrMIepKc.css' );
    //     wp_enqueue_style( 'style_2', get_template_directory_uri().'/css/css_PbSDqcH4f9uo4TkRyxgSbZRMbfTU9dD32PSYrMIepKc.css' );
    //     wp_enqueue_style( 'style_3', get_template_directory_uri().'/css/css_PbSDqcH4f9uo4TkRyxgSbZRMbfTU9dD32PSYrMIepKc.css' );
        

    //     wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js' );
    //     wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array( 'jquery' ) );
    //     wp_enqueue_script( 'flexslider', get_template_directory_uri().'/js/jquery.flexslider-min.js', array( 'jquery' ) );
    //     wp_enqueue_script( 'grids', get_template_directory_uri().'/js/grids.min.js', array( 'jquery' ) );
    //     wp_enqueue_script( 'endlessRiver', get_template_directory_uri().'/js/endlessRiver.js', array( 'jquery' ) );
    //     wp_enqueue_script( 'prettyPhoto', get_template_directory_uri().'/js/jquery.prettyPhoto.js', array( 'jquery' ) );
    //     wp_enqueue_script( 'ayvp', get_template_directory_uri().'/js/ayvp.js', array( 'jquery' ) );
    // }

    // add_action( 'wp_enqueue_scripts', 'yes_enqueue_scripts' );

    function yes_enqueue_scripts () {
        wp_enqueue_style('libbundle', get_template_directory_uri().'/css/lib.bundle.css');
        wp_enqueue_style('remote', get_template_directory_uri().'/css/remote.css');
        wp_enqueue_style('std', get_template_directory_uri().'/css/std.css');
        wp_enqueue_style('slick', get_template_directory_uri().'/css/slick.css');
        // wp_enqueue_style('ckeditor', get_template_directory_uri().'/css/ckeditor.css');
        wp_enqueue_style('yescss', get_template_directory_uri().'/css/yes.css');

        wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.min.js');
        wp_enqueue_script('jquerystd', get_template_directory_uri().'/js/jquery.std.js', array('jquery'));
        wp_enqueue_script('libbundle', get_template_directory_uri().'/js/lib.bundle.js', array('jquery'));
        wp_enqueue_script('yesjs', get_template_directory_uri().'/js/yes.js', array('jquery'));
    }
    add_action('wp_enqueue_scripts', 'yes_enqueue_scripts');


    add_action('wp_print_scripts', function () {
        global $post;
        if ( is_a( $post, 'WP_Post' ) && !has_shortcode( $post->post_content, 'contact-form-7') && ('openings' != get_post_type()) ) {
            wp_dequeue_script( 'google-recaptcha' );
            wp_dequeue_script( 'wpcf7-recaptcha' );
        }
    });

    // add_filter( 'wpcf7_recaptcha_threshold',
    //     function( $threshold ) {
    //         $threshold = 0.3;
    //         return $threshold;
    //     },
    //     10, 1
    // );
    
    
    /**
     * Function to initiate CORS for APIs
     */
    function initCORS($value) {
        $origin_url = '*';

        if (true === IS_PROD_ENV) {
            $origin_url = esc_url_raw(site_url());
        }

        header( 'Access-Control-Allow-Headers: Authorization, X-WP-Nonce,Content-Type, X-Requested-With' );
        header( 'Access-Control-Allow-Origin: '.$origin_url );
        header( 'Access-Control-Allow-Methods: GET' );
        header( 'Access-Control-Allow-Credentials: true' );
        header( 'Access-Control-Expose-Headers: Link', false );
        return $value;
    }
    add_action( 'rest_api_init', function () {
        remove_filter('rest_pre_serve_request', 'rest_send_cors_headers' );
        add_filter( 'rest_pre_server_request', 'initCORS' );
    }, 15 );


    add_filter( 'wpcf7_validate_email*', 'custom_email_confirmation_validation_filter', 20, 2 );
    function custom_email_confirmation_validation_filter( $result, $tag ) {
        if ( 'merdekaEmail' == $tag->name ) {
            $your_email = isset( $_POST['merdekaEmail'] ) ? trim( $_POST['merdekaEmail'] ) : '';
            $your_email_confirm = isset( $_POST['merdekaEmailConfirm'] ) ? trim( $_POST['merdekaEmailConfirm'] ) : '';
            if ( $your_email != $your_email_confirm ) {
                $result->invalidate( $tag, "Please make sure your email is the same" );
            }
        }
        return $result;
    }

    // Prevent Multi Submit on all WPCF7 forms
    add_action('wp_footer', 'prevent_cf7_multiple_emails');

    function prevent_cf7_multiple_emails() { ?>
        <script type="text/javascript">
            var submitText = jQuery(':input.wpcf7-submit').val();
            var ajaxLoader = jQuery('.ajax-loader');
            var disableSubmit = false;
            jQuery('input.wpcf7-submit[type="submit"]').click(function() {
                jQuery(ajaxLoader).css('visibility', 'visible');
                jQuery(':input[type="submit"]').attr('value', "Submitting...");
                if (disableSubmit == true) {
                    return false;
                }
                disableSubmit = true;
                return true;
            })

            var wpcf7Elm = document.querySelector('.wpcf7');
            if (jQuery(wpcf7Elm).length) {
                wpcf7Elm.addEventListener('wpcf7mailsent', function(event) {
                    jQuery(':input[type="submit"]').attr('value', "Submitted");
                    disableSubmit = false;
                    setTimeout(function() {
                        jQuery(ajaxLoader).css('visibility', 'hidden');
                        jQuery(':input[type="submit"]').attr('value', submitText);
                    }, 500);
                }, false);

                wpcf7Elm.addEventListener('wpcf7invalid', function(event) {
                    jQuery(':input[type="submit"]').attr('value', submitText);
                    disableSubmit = false;
                    setTimeout(function() {
                        jQuery(ajaxLoader).css('visibility', 'hidden');
                    }, 500);
                }, false);
            }
            
        </script>
<?php
    }

    add_action('wp_footer', 'cf7_keep_vx_url');
    
    function cf7_keep_vx_url() { ?>
        <script type="text/javascript">
            setTimeout(function() {
                var elementURL = $('input[name="vx_url"]');
                $(elementURL).val(window.location.href.split('?')[0]);
            }, 1000);
        </script>
<?php 
    }
?>