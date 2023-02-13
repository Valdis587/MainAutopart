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
require get_template_directory() . '/include/tgm/example.php';

require get_template_directory() . '/include/functions/scripts.php';

require get_template_directory() . '/include/functions/settings.php';

require get_template_directory() . '/include/admin/admin.php';

require get_template_directory() . '/include/admin/theme/config.php';

require get_template_directory() . '/include/functions/menu-category.php';

require get_template_directory() . '/include/functions/menu-primary.php';

require get_template_directory() . '/include/functions/menu-footer.php';

require get_template_directory() . '/include/functions/breadcrumbs.php';

require get_template_directory() . '/include/functions/sidebar.php';

require get_template_directory() . '/include/functions/paginations.php';

require get_template_directory() . '/widgets/last-news.php';

require get_template_directory() . '/include/functions/reviews.php';

require get_template_directory() . '/widgets/reviews.php';

require get_template_directory() . '/include/functions/brands.php';

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
    require get_template_directory() . '/inc/woocommerce.php';

    require get_template_directory() . '/woocommerce/include/woo.php';

    require get_template_directory() . '/woocommerce/include/quick.php';

    require get_template_directory() . '/woocommerce/include/messages.php';

    require get_template_directory() . '/woocommerce/include/shop-sidebar.php';

    require get_template_directory() . '/widgets/category.php';

    require get_template_directory() . '/widgets/prodsale.php';

    require get_template_directory() . '/widgets/prodnew.php';

    require get_template_directory() . '/widgets/prodhit.php';

    require get_template_directory() . '/widgets/prosmprod.php';
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}

