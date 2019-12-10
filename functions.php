<?php 

//Set up the theme 

function add_theme_scripts() {

    wp_enqueue_style( 'theme_style', get_template_directory_uri() . '/assets/css/master.css', false, '', 'all' );

    wp_enqueue_script('theme_script', get_template_directory_uri().'/assets/js/master.js', array('jquery'), '', false);

    wp_enqueue_style( 'dashicons' );

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

add_theme_support( 'menus' );
function register_theme_menus() {

    register_nav_menus(
        array(
            'top-menu' => __( 'Top Menu' ),
            'footer-menu-1' => __( 'Who We Are Menu' ),
            'footer-menu-2' => __( 'Help and Support Menu' ),
            'footer-menu-3' => __( 'Account Menu' ),
            'footer-menu-4' => __( 'Contact Us Menu' )
        )
    );

}
add_action( 'init', 'register_theme_menus' );

//Set up the thme supports
add_theme_support( 'custom-logo' );

function custom_theme_setup() {



    //WooCommerce
    add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
    add_theme_support( 'wc-product-gallery-zoom' );
    
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

