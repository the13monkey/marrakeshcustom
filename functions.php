<?php 

//Set up the theme 

function add_theme_scripts() {

    wp_enqueue_style( 'theme_style', get_template_directory_uri() . '/assets/css/master.css', false, '', 'all' );

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function add_site_logo() {

    add_theme_support('custom-logo', array(
        'flex-width' => true, 
        'width' => 'auto',
        'flex-height' => false,
        'height' => 100,
    ));

}
add_action( 'after_setup_theme', 'add_site_logo' );

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