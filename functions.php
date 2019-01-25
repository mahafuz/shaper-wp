<?php


if( ! function_exists( 'get_all_cf7' ) ) {
    function get_all_cf7() {
        $forms = new WP_Query([
            'post_type' => 'wpcf7_contact_form'
        ]);

        $cf7 = [];
        while( $forms->have_posts() ) {
            $forms->the_post();

            $cf7[get_the_ID().'|'.get_the_title() ] = get_the_title();
        }
        wp_reset_query();

        return $cf7;
    }
}


// var_dump(get_all_cf7());

class Shaper_Core {

    public function __construct() {
        add_action( 'wp_enqueue_scripts', [$this, 'add_shaper_scripts'] );
        add_action( 'wp_enqueue_scripts', [$this, 'add_shaper_styles'] );
        $this->register_shaper_menu();
        $this->include_cs_framework();

        add_filter('nav_menu_css_class', [$this, 'filter_shaper_menu'], 10, 3);
    }

    public function add_shaper_styles() {
        wp_enqueue_style(
            'bootstrap', // handle
            get_template_directory_uri() . '/plugins/bootstrap/bootstrap.min.css', // src
            [], // deps
            '1.0.0', // version
            'all' // media
        );
    
        wp_enqueue_style(
            'themefisher-fonts', // handle
            get_template_directory_uri() . '/plugins/themefisher-fonts/themefisher-fonts.css', // src
            [], // deps
            '1.0.0', // version
            'all' // media
        );
    
        wp_enqueue_style(
            'owl.carousel', // handle
            get_template_directory_uri() . '/plugins/owl-carousel/owl.carousel.css', // src
            [], // deps
            '1.0.0', // version
            'all' // media
        );
    
        wp_enqueue_style(
            'magnific-popup', // handle
            get_template_directory_uri() . '/plugins/magnific-popup/magnific-popup.css', // src
            [], // deps
            '1.0.0', // version
            'all' // media
        );

        wp_enqueue_style(
            'fontaweomse-style', // handle
            get_template_directory_uri() . '/css/font-awesome.min.css', // src
            [], // deps
            '1.0.0', // version
            'all' // media
        );
    
        wp_enqueue_style(
            'shaper-style', // handle
            get_template_directory_uri() . '/css/style.css', // src
            [], // deps
            '1.0.0', // version
            'all' // media
        );
    }

    public function add_shaper_scripts() {
    
        wp_enqueue_script(
            'jquery'
        );
    
        
        wp_enqueue_script(
            'bootstrap',
            get_template_directory_uri() . '/plugins/bootstrap/bootstrap.min.js',
            [ 'jquery' ],
            '1.0.0',
            true
        );
    
        wp_enqueue_script(
            'owl.carousel',
            get_template_directory_uri() . '/plugins/owl-carousel/owl.carousel.min.js',
            [ 'jquery' ],
            '1.0.0',
            true
        );
    
        wp_enqueue_script(
            'jquery.magnific',
            get_template_directory_uri() . '/plugins/magnific-popup/jquery.magnific.popup.min.js',
            [ 'jquery' ],
            '1.0.0',
            true
        );
    
        wp_enqueue_script(
            'shaper-main',
            get_template_directory_uri() . '/js/main.js',
            [ 'jquery' ],
            '1.0.0',
            true
        );
    
    }

    public function register_shaper_menu() {
        register_nav_menus([
            'primary_menu' => __( 'Primary Menu', 'shaper-wp' )
        ]);
    }

    public function filter_shaper_menu($var) {
        $var[] = 'nav-item';
        return $var;
    }

    public function include_cs_framework() {
        require_once get_template_directory() . '/csframework/codestar-framework.php';
        require_once get_template_directory() . '/inc/shaper-theme-options.php';
    }



}


new Shaper_Core;


if( ! function_exists( 'cs_get_option' ) ) {
    function cs_get_option($option_id) {
        return get_option('shaper_options')[$option_id];
    }
}


function dump($data, $wish = 1) {
    if( $wish == 1 ) {
        echo '<pre>', print_r($data),'</pre>';
    }else {
        echo '<pre>', var_dump($data),'</pre>';
    }
}


