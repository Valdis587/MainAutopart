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
 * Enqueue scripts and styles.
 */
function autoparts_scripts() {
    wp_enqueue_style('autoparts-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), _S_VERSION);

    wp_enqueue_style('autoparts-jgrowl', get_template_directory_uri() . '/css/jquery.jgrowl.min.css', array(), _S_VERSION);

    wp_enqueue_style('autoparts-style-theme', get_template_directory_uri() . '/css/style.min.css', array(), _S_VERSION);

    wp_enqueue_style( 'autoparts-style', get_stylesheet_uri(), array(), _S_VERSION );


    wp_enqueue_script( 'autoparts-jQuery', get_template_directory_uri() . '/js/jQuery.min.js', array(), _S_VERSION, true);



    wp_enqueue_script( 'autoparts-owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), _S_VERSION, true);

    wp_enqueue_script( 'autoparts-magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), _S_VERSION, true );

    global $autoparts;
    if($autoparts['messages-on']) {
        wp_enqueue_script('autoparts-jgrowl', get_template_directory_uri() . '/js/jquery.jgrowl.min.js', array(), _S_VERSION, true);
    }
    wp_enqueue_script( 'autoparts-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );

    wp_enqueue_script( 'autoparts-quick', get_template_directory_uri() . '/js/quick.js', array(), _S_VERSION, true );
    wp_localize_script('autoparts-quick', 'quick', array(
        'url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('quick_nonce')
    ));

    if($autoparts['messages-on']) {

        wp_enqueue_script('autoparts-messages', get_template_directory_uri() . '/js/messages.js', array(), _S_VERSION, true);
        wp_localize_script('autoparts-messages', 'messages', array(
            'url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('messages_nonce')
        ));

    }

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'autoparts_scripts' );