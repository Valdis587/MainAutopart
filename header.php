<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Autopart
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<?php global $autoparts; ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php if($autoparts['favicon-url']) { ?>
    <link rel="shortcut icon" href="<?php echo $autoparts['favicon-url']['url']; ?>" type="image/svg+xml" />
    <?php } ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
<header class="header">
    <div class="header__top">
        <div class="header__top-content container">
            <div class="header__top-icons">
            <?php get_template_part( 'template/socseti' ); ?>
            </div>
            <div class="header__top-menu">
                <button class="header__button-mob-primary" type="button" aria-label="menu"><i class="icon-bars"></i></button>
                <ul class="header__top-menu-list">
                    <li><i class="icon-phone-alt"></i><a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $autoparts['phone']) ?>"><?php echo $autoparts['phone']; ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header__center container">
        <div class="header__logo">
            <?php
            if($autoparts['logo-url']) {
            if(is_front_page()) { ?>
           <img src="<?php echo $autoparts['logo-url']['url']; ?>" alt="<?php bloginfo('name'); ?>">
            <?php } else { ?>
                <a href="<?php echo home_url(); ?>"><img src="<?php echo $autoparts['logo-url']['url']; ?>" alt="<?php bloginfo('name'); ?>"></a>
            <?php } } ?>
        </div>
        <div class="header__center-search">
            <?php
            if ( class_exists( 'WooCommerce' ) ) {
            if($autoparts['search-on']) {
                get_product_search_form();
             } } ?>
        </div>
        <div class="header__cart-witelist">
            <?php if ( class_exists( 'WooCommerce' ) ) {
            if( class_exists( 'YITH_WCWL' ) ) {
                ?>
            <a href="<?php echo home_url(); ?>/wishlist">
                <span class="header__witelist"><i class="icon-heart"></i></span></a>
            <?php } ?>
            <div class="header__cart-block">
                <a href="#">
                    <div class="header__cart-box">
                        <span class="header__cart"><i class="icon-shopping-basket"></i></span>
                        <span class="header__cart-item"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                        <?php if( class_exists( 'YITH_WCWL' ) ) { ?>
                        <span class="header__witelist-item"><?php echo YITH_WCWL()->count_products(); ?></span>
                        <?php } ?>
                    </div>
                    <span class="header__cart-name">Корзина <span class="header__cart-coint"><?php echo WC()->cart->get_cart_subtotal(); ?></span></span>
                </a>
                <?php woocommerce_mini_cart(); ?>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="header__menu-box">
        <div class="header__menu-content container">
            <button class="header__button-mob-category" type="button" aria-label="menu"><i class="icon-bars"></i></button>
            <?php
            if($autoparts['menu-cat-on']) {
            if( has_nav_menu('menu-cat') ) { ?>
            <div class="header__category">
                <span class="header__category-title"><i class="icon-bars"></i><?php if($autoparts['menu-cat-title']) { echo $autoparts['menu-cat-title']; }?></span>
                <nav class="header__menu-category">
                    <button class="header__mob-category-close" type="button" aria-label="menu-close"><i class="icon-times"></i></button>
                   <?php AutoParts_menu_category(); ?>
                </nav>
            </div>
            <?php } } ?>
            <div class="header__primary">
                <?php if( has_nav_menu('menu-primary') ) { ?>
                <nav class="header__menu-primary">
                    <button class="header__mob-primary-close" type="button" aria-label="menu-close"><i class="icon-times"></i></button>
                    <?php AutoParts_menu_primary(); ?>
                </nav>
                <?php } ?>
            </div>
        </div>
    </div>
</header>