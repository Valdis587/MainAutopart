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

// This theme uses wp_nav_menu() in one location.
register_nav_menus(
    array(
        'menu-footer1' => esc_html__( 'Меню футера 1', 'autoparts' ),
    )
);

function AutoParts_menu_footer1() {
    wp_nav_menu([
        'theme_location'  => 'menu-footer1',
        'menu'            => 'footer1',
        'container'       => false,
        'before'           => '<i class="icon-angle-double-right"></i>',
        'menu_class'      => 'footer__menu',
    ]);
}

// This theme uses wp_nav_menu() in one location.
register_nav_menus(
    array(
        'menu-footer2' => esc_html__( 'Меню футера 2', 'autoparts' ),
    )
);

function AutoParts_menu_footer2() {
    wp_nav_menu([
        'theme_location'  => 'menu-footer2',
        'menu'            => 'footer2',
        'container'       => false,
        'before'           => '<i class="icon-angle-double-right"></i>',
        'menu_class'      => 'footer__menu',
    ]);
}

// This theme uses wp_nav_menu() in one location.
register_nav_menus(
    array(
        'menu-footer3' => esc_html__( 'Меню футера 3', 'autoparts' ),
    )
);

function AutoParts_menu_footer3() {
    wp_nav_menu([
        'theme_location'  => 'menu-footer3',
        'menu'            => 'footer3',
        'container'       => false,
        'before'           => '<i class="icon-angle-double-right"></i>',
        'menu_class'      => 'footer__menu',
    ]);
}