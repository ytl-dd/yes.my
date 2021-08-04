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
        // wp_enqueue_style('ckeditor', get_template_directory_uri().'/css/ckeditor.css');
        wp_enqueue_style('yescss', get_template_directory_uri().'/css/yes.css');

        wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.min.js');
        wp_enqueue_script('jquerystd', get_template_directory_uri().'/js/jquery.std.js', array('jquery'));
        wp_enqueue_script('libbundle', get_template_directory_uri().'/js/lib.bundle.js', array('jquery'));
        wp_enqueue_script('yesjs', get_template_directory_uri().'/js/yes.js', array('jquery'));
    }
    add_action('wp_enqueue_scripts', 'yes_enqueue_scripts');


    // add_action('wp_print_scripts', function () {
    //     global $post;
    //     if ( is_a( $post, 'WP_Post' ) && !has_shortcode( $post->post_content, 'contact-form-7') && ('openings' != get_post_type()) ) {
    //         wp_dequeue_script( 'google-recaptcha' );
    //         wp_dequeue_script( 'wpcf7-recaptcha' );
    //     }
    // });

    // add_filter( 'wpcf7_recaptcha_threshold',
    //     function( $threshold ) {
    //         $threshold = 0.0; // decrease threshold to 0.3
    //         return $threshold;
    //     },
    //     10, 1
    // );
?>