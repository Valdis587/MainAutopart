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

add_action( 'wp_ajax_quick_action', 'autoparts_popup_quick_view_callback' );
add_action( 'wp_ajax_nopriv_quick_action', 'autoparts_popup_quick_view_callback' );
function autoparts_popup_quick_view_callback() {
    if (!wp_verify_nonce($_POST['nonce'], 'quick_nonce')) {
        wp_die('Данные отправлены с левого адреса');
    }

    $product_id = (int) $_POST['id'];
    global $product;

    wp( 'p=' . $product_id . '&post_type=product' );

    ob_start();

   
    while ( have_posts() ) :
        the_post();
    ?>

                <div itemtype="<?php echo woocommerce_get_product_schema(); ?>" class="shop__tovar-left" id="product-<?php echo $product->id; ?>">
                    <?php do_action( 'autoparts-quick-views-theme-left' ); ?>
                </div>

                <div itemtype="<?php echo woocommerce_get_product_schema(); ?>" class="shop__tovar-right" id="product-<?php echo $product->id; ?>">
                   <?php do_action( 'autoparts_quick_views_theme' ); ?>
                        </div>
           
    <?php

    endwhile;
 
    $data['product'] = ob_get_clean();
    wp_send_json($data);
    wp_die();
    // phpcs:enable WordPress.Security.NonceVerification.Recommended

}



