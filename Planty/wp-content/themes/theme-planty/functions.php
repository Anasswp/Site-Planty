<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

function theme_enqueue_style () {
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
}

// END ENQUEUE PARENT ACTION

add_action('wp_enqueue_scripts', 'theme_enqueue_style');

function add_admin_link_to_menu ($items,$args) {
    if (is_user_logged_in() && $args->menu=='header') {
        $admin_link='<li class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a href="'.admin_url().'" class="hfe-menu-item">Admin</a>';
        $items_array=explode('</li>', $items);
        array_splice($items_array,1,0,$admin_link);
        $items=implode('</li>',$items_array);
    }
    return $items;
}

add_filter( 'wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2 );