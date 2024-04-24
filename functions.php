<?php 
define( 'THEME_URL', get_stylesheet_directory() );
define('THEME_URL', get_template_directory());
require_once( THEME_URL.'/core/menu-bootstrap.php' );

if ( !function_exists('comma_theme_setup') ) {
    function comma_theme_setup() {
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats', array(
            'image',
            'video',
            'gallery',
            'quote',
            'link'
        ) );
        register_nav_menu( 'primary-menu', __('Primary Menu', 'comma') );
        register_nav_menu( 'footer-menu', __('Footer Menu', 'comma') );

        $footer_top_sidebar = array(
            'name' => __('Footer Top Left Sidebar', 'comma'),
            'id' => 'footer_top_sidebar',
            'description' => __('Footer Top Left Sidebar'),
            'class' => 'footer_top_sidebar',
            'before_title' => '',
            'after_title' => ''
        );
        register_sidebar( $footer_top_sidebar );

        $footer_top_right_sidebar = array(
            'name' => __('Footer Top Right Sidebar', 'comma'),
            'id' => 'footer_top_right_sidebar',
            'description' => __('Footer Top Right Sidebar'),
            'class' => 'footer_top_right_sidebar',
            'before_title' => '',
            'after_title' => ''
        );
        register_sidebar( $footer_top_right_sidebar );

        $footer_bottom_col_1_sidebar = array(
            'name' => __('Footer Bottom Column 1 Sidebar', 'comma'),
            'id' => 'footer_bottom_col_1_sidebar',
            'description' => __('Footer Bottom Column 1 Sidebar'),
            'class' => 'footer_bottom_col_1_sidebar',
            'before_title' => '',
            'after_title' => ''
        );
        register_sidebar( $footer_bottom_col_1_sidebar );

        $footer_bottom_col_2_sidebar = array(
            'name' => __('Footer Bottom Column 2 Sidebar', 'comma'),
            'id' => 'footer_bottom_col_2_sidebar',
            'description' => __('Footer Bottom Column 2 Sidebar'),
            'class' => 'footer_bottom_col_2_sidebar',
            'before_title' => '',
            'after_title' => ''
        );
        register_sidebar( $footer_bottom_col_2_sidebar );

        $footer_bottom_col_3_sidebar = array(
            'name' => __('Footer Bottom Column 3 Sidebar', 'comma'),
            'id' => 'footer_bottom_col_3_sidebar',
            'description' => __('Footer Bottom Column 3 Sidebar'),
            'class' => 'footer_bottom_col_3_sidebar',
            'before_title' => '',
            'after_title' => ''
        );
        register_sidebar( $footer_bottom_col_3_sidebar );
    }
    add_action( 'init', 'comma_theme_setup' );
}

/*=====Nhúng file style.css=====*/
function comma_style() {

    wp_register_style( 'bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", 'all' );
    wp_enqueue_style('bootstrap');
    wp_register_style( 'font-awesome', get_template_directory_uri() . "/assets/css/font-awesome.min.css", 'all' );
    wp_enqueue_style('font-awesome');
    wp_register_style( 'slick-slider', get_template_directory_uri() . "/assets/css/slick.css", 'all' );
    wp_enqueue_style('slick-slider');
    wp_register_style( 'slick-themes', get_template_directory_uri() . "/assets/css/slick-theme.css", 'all' );
    wp_enqueue_style('slick-themes');
    wp_register_style( 'aos-css', get_template_directory_uri() . "/assets/css/aos.css", 'all' );
    wp_enqueue_style('aos-css');
    wp_register_style( 'wp-style', get_template_directory_uri() . "/style.css", 'all' );
    wp_enqueue_style('wp-style');
    wp_register_style( 'main', get_template_directory_uri() . "/assets/css/main.css", 'all', '1.1.9' );
    wp_enqueue_style('main');

    // Custom script
    wp_enqueue_script('jquery');
    wp_register_script( 'bootstrap', get_template_directory_uri() . "/assets/js/bootstrap.min.js", 'all', '', true );
    wp_enqueue_script('bootstrap');
    wp_register_script( 'slick-slider', get_template_directory_uri() . "/assets/js/slick.min.js", 'all', '', true );
    wp_enqueue_script('slick-slider');
    wp_register_script( 'aos-js', get_template_directory_uri() . "/assets/js/aos.js", 'all', '', true );
    wp_enqueue_script('aos-js');
    wp_register_script( 'TimelineLite-js', get_template_directory_uri() . "/assets/js/TweenMax.js", 'all', '', true );
    wp_enqueue_script('TimelineLite-js');
    wp_register_script( 'main', get_template_directory_uri() . "/assets/js/main.js", 'all', '1.1.9', true );
    wp_enqueue_script('main');
    $habeco = array( 
                    'site_url' => get_option( 'siteurl'),
                    'template_dir' => get_template_directory_uri()
                );
    wp_localize_script( 'main', 'habeco', $habeco );
    /*wp_deregister_script('jquery');
    wp_register_script( 'jquery', get_template_directory_uri() . "/asset/js/jquery-3.3.1.min.js", 'all' , '3.3.1', true );*/
}
add_action('wp_enqueue_scripts', 'comma_style');

function replace_core_jquery_version() {
    wp_deregister_script( 'jquery-core' );
    wp_register_script( 'jquery-core', get_template_directory_uri() . "/assets/js/jquery.min.js", array(), '3.1.1' );
}
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

function create_products_post_type() {
    $label = array(
        'name' => 'Products', 
        'singular_name' => 'products'
    );

    $args = array(
        'labels' => $label,
        'description' => 'Post Type Products', 
        'supports' => array(
            'title',
            'thumbnail',
            'editor'
        ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'show_in_nav_menus' => true, 
        'show_in_admin_bar' => true, 
        'menu_position' => 10, 
        'menu_icon' => 'dashicons-products', 
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true, 
        'capability_type' => 'post' 
    );
 
    register_post_type('products', $args);
 
}
add_action('init', 'create_products_post_type');
//Shareholder

function create_shareholder_post_type() {
    $label = array(
        'name' => 'Shareholder', 
        'singular_name' => 'shareholder'
    );

    $args = array(
        'labels' => $label,
        'description' => 'Post Type Shareholder', 
        'supports' => array(
            'title',
            'thumbnail',
            'editor',
        ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'show_in_nav_menus' => true, 
        'show_in_admin_bar' => true, 
        'menu_position' => 10, 
        'menu_icon' => 'dashicons-admin-users', 
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true, 
        'capability_type' => 'post' 
    );
 
    register_post_type('shareholder', $args);
 
}
add_action('init', 'create_shareholder_post_type');

//Categories Shareholder
function create_shareholder_taxonomies() {
    $labels = array(
        'name' => __( 'Shareholder Catogries' ),
        'singular_name' => __( 'Shareholder Categories' ),
        'search_items' => __( 'Search' ),
        'all_items' => __( 'All Categories' ),
        'parent_item' => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category :' ),
        'edit_item' => __( 'Edit Category' ),
        'update_item' => __( 'Update Category' ),
        'add_new_item' => __( 'Add New Category' ),
        'new_item_name' => __( 'New Category Name' ),
        'menu_name' => __( 'Shareholder Catogries' ),
    ); 
    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'shareholder-cat' ),
    );
    register_taxonomy( 'shareholder-cat', array('shareholder'), $args ); 
    flush_rewrite_rules();
}
add_action( 'init', 'create_shareholder_taxonomies', 0 ); 

//Tuy bien the excerpt
function wpdocs_custom_excerpt_length( $length ) {
    return 15; // mặc định
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

//Get post year

function get_posts_years_array() {
    global $wpdb;
    $result = array();
    $years = $wpdb->get_results(
        $wpdb->prepare(
            "SELECT YEAR(post_date) FROM {$wpdb->posts} WHERE post_status = 'publish' GROUP BY YEAR(post_date) DESC", array( $min_id, $status ) 
        ),
        ARRAY_N
    );
    if ( is_array( $years ) && count( $years ) > 0 ) {
        foreach ( $years as $year ) {
            $result[] = $year[0];
        }
    }
    return $result;
}