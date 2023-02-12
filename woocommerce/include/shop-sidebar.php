<?php
/**
 * Autopart functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Autopart
 */

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function autoparts_widgets_init_shop() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Сайдбар магазина', 'autoparts' ),
            'id'            => 'sidebar-shop',
            'description'   => esc_html__( 'Add widgets here.', 'autoparts' ),
            'before_widget' => '<div id="%1$s" class="sidebar__sidebar-widget widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="sidebar__sidebar-widget-head"><h2 class="sidebar__sidebar-widget-title">',
            'after_title'   => '</h2></div>',
        )
    );
}
add_action( 'widgets_init', 'autoparts_widgets_init_shop' );