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

remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

add_action('woocommerce_before_main_content', 'autoparts_output_content_toppanel', 2);
function autoparts_output_content_toppanel() { ?>
    <?php global $autoparts; ?>
<section class="toppanel" style="background-image: url('<?php if($autoparts['headpage-url']) { echo $autoparts['headpage-url']['url']; }?>');">
    <div class="toppanel__content">
    <h1 class="toppanel__title"><?php wp_title(''); ?></h1>
<?php }
add_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 5);
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

add_action('woocommerce_before_main_content', 'autoparts_output_content_toppanel_end', 8);
function autoparts_output_content_toppanel_end() { ?>
    </div>
    </section>
<?php }

add_action('woocommerce_before_main_content', 'autoparts_output_content_wrapper', 10);
function autoparts_output_content_wrapper() { ?>
    <div class="shop">
        <div class="container">
<?php }
add_action('woocommerce_sidebar', 'autoparts_output_content_wrapper_end', 10);
function autoparts_output_content_wrapper_end() { ?>
    </div>
    </div>
    <!--end -shop-->
<?php }
remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
remove_action('woocommerce_archive_description', 'woocommerce_product_archive_description', 10);
add_action('woocommerce_archive_description', 'autoparts_shop__content', 5);
function autoparts_shop__content()  { ?>
    <div class="shop__content">
<?php }
add_action('woocommerce_after_shop_loop', 'autoparts_shop__content_end', 15);
function autoparts_shop__content_end() { ?>
    </div>
    <!--end -shop content-->
<?php }
remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);
add_action('woocommerce_archive_description', 'autoparts_shop_sidebar', 10);
function autoparts_shop_sidebar() {
if ( ! is_active_sidebar( 'sidebar-shop' ) ) {
    return;
}
?>
    <div class="sidebar shop__sidabar ">
    <?php dynamic_sidebar( 'sidebar-shop' ); ?>
</div><!-- #secondary -->
<?php }
add_action('woocommerce_archive_description', 'autoparts_shop_product', 15);
function autoparts_shop_product() { ?>
    <div class="shop__shop-product">
<?php }
add_action('woocommerce_after_shop_loop', 'autoparts_shop_product_end', 10);
function autoparts_shop_product_end() { ?>
    </div>
    <!--end -shop-product-->
<?php }
add_action('woocommerce_before_shop_loop', 'autoparts_shop_info', 10);
function autoparts_shop_info() { ?>
    <div class="shop__shop-info">
        <h2 class="shop__shop-title"><?php wp_title(''); ?></h2>
    <?php global $autoparts;
if($autoparts['banner-url']) {
    ?>
        <div class="shop__shop-banner">
            <img src="<?php echo $autoparts['banner-url']['url']; ?>" alt="<?php bloginfo('name'); ?>">
        </div>
    <?php } ?>
        <div class="shop__shop-filter">
            <div class="shop__shop-filter-buttons">
                <button class="shop__shop-filter-buttons-grid"><i class="icon-grip-horizontal"></i></button>
                <button class="shop__shop-filter-buttons-list"><i class="icon-list"></i></button>
            </div>
<?php }
add_action('woocommerce_before_shop_loop', 'autoparts_shop_info_end', 35);
function autoparts_shop_info_end() { ?>
    </div>
    </div>
<?php }
add_action('woocommerce_before_shop_loop', 'autoparts_shop_vetrine', 37);
function autoparts_shop_vetrine() { ?>
    <div class="shop__shop-vetrine">
<?php }
add_action('woocommerce_after_shop_loop', 'autoparts_shop_vetrine_end', 15);
function autoparts_shop_vetrine_end() { ?>
    </div>
    <!--end -shop-vetrine-->
<?php }
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);

add_action('woocommerce_before_shop_loop_item_title', 'autoparts_loop_product_thumbnail', 10);
function autoparts_loop_product_thumbnail() { ?>
    <div class="product__left">
        <div class="product__img">
            <a href="<?php the_permalink(); ?>">
                <?php
                global $product;
                global $autoparts;
                $attachment_ids = $product->get_gallery_image_ids();
                $main=$product->get_image_id();
                $thumbs=wp_get_attachment_image_src($main, 'product-archive');
                if($autoparts['dopimg-url']) {
                ?>
                <img class="product__img1"  src="<?php echo $thumbs['0']; ?>" alt="<?php the_title(''); ?>">
                <img class="product__img2" src="<?php echo $autoparts['dopimg-url']['url']; ?>" alt="<?php the_title(''); ?>">
                    <?php }  else { ?>
                <img class="product__img3" src="<?php echo $thumbs['0']; ?>" alt="<?php the_title(''); ?>">
                <?php } ?>
    <?php if($autoparts['quick-on']) { ?>
                <a id="product__quick" class="product__quick" data-product-id="<?php echo get_the_ID() ?>" href="#quick-modal"><i class="icon-search"></i></a>
    <?php } ?>
        </a>
        </div>
    <?php
    if($autoparts['badges-on']) {
    if($autoparts['badgik-new']) { ?>
        <span class="label-product label-new"><?php if($autoparts['badges-new']) { echo $autoparts['badges-new']; }?></span>
    <?php }
    $regulare_price=wc_get_price_to_display( $product, array( 'price' => $product->get_regular_price()) );
    $sale_price=wc_get_price_to_display( $product, array( 'price' => $product->get_sale_price() ) );
    $percentage = round( ( ( $regulare_price -  $sale_price ) / $regulare_price ) * 100 );
    if($percentage) {
    ?>
    <?php if($autoparts['badgik-hit']) { ?>
        <span style="margin-top: 50px;" class="label-product label-sale"><?php if($autoparts['badges-hit']) { echo $autoparts['badges-hit']; }?></span>
    <?php } ?>
        <span  class="label-product label-hit">-<?php echo $percentage; ?>%</span>
    <?php } else {
         if($autoparts['badgik-hit']) { ?>
            <span  class="label-product label-sale"><?php if($autoparts['badges-hit']) { echo $autoparts['badges-hit']; }?></span>
        <?php }
            } } ?>
    </div>
<?php }

add_action('woocommerce_shop_loop_item_title', 'autoparts_loop_product__right', 5);
function autoparts_loop_product__right() { ?>
    <div class="product__right">
<?php }
add_action('woocommerce_after_shop_loop_item', 'autoparts_loop_product__right_end', 15);
function autoparts_loop_product__right_end() { ?>
    </div>
<?php }
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', 'autoparts_template_loop_product_title', 10);
function autoparts_template_loop_product_title() { ?>
    <a href="<?php the_permalink(); ?>"><h3 class="product__name"><?php the_title(''); ?></h3></a>
<?php }
add_action('woocommerce_after_shop_loop_item_title', 'autoparts_rating_wrapper', 3);
function autoparts_rating_wrapper() { ?>
    <div class="star-rating">
<?php }
add_action('woocommerce_after_shop_loop_item_title', 'autoparts_rating_wrapper_end', 7);
function autoparts_rating_wrapper_end() { ?>
    </div>
<?php }
add_action('woocommerce_after_shop_loop_item_title', 'autoparts_product_desc', 9);
function autoparts_product_desc() { ?>
    <div class="product__desc">
        <p><?php do_excerpt(get_the_excerpt(), 25); ?></p>
    </div>
<?php }
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
add_action('woocommerce_after_shop_loop_item_title', 'autoparts_template_loop_price', 10);
function autoparts_template_loop_price() { ?>
    <div class="product__price">
    <?php
    global $product;
    $regulare_price=wc_get_price_to_display( $product, array( 'price' => $product->get_regular_price()) );
    $sale_price=wc_get_price_to_display( $product, array( 'price' => $product->get_sale_price() ) );
    $percentage = round( ( ( $regulare_price -  $sale_price ) / $regulare_price ) * 100 );
    if($percentage) {
        ?>
        <span class="product__price-sale"><?php echo $sale_price; echo get_woocommerce_currency_symbol(); ?></span>
        <span class="product__price-old"><?php echo wc_get_price_to_display( $product, array( 'price' => $product->get_regular_price()) ); echo get_woocommerce_currency_symbol(); ?></span>
        <?php } else {?>
        <span class="product__price-price"><?php echo $sale_price; echo get_woocommerce_currency_symbol(); ?></span>
            <?php } ?>
    </div>
<?php }
add_action('woocommerce_after_shop_loop_item', 'autoparts_button_wrapper', 7);
function autoparts_button_wrapper() { ?>
    <div class="product__buttons">
<?php }
add_action('woocommerce_after_shop_loop_item', 'autoparts_button_wrapper_end', 15);
function autoparts_button_wrapper_end() { ?>
    </div>
<?php }
remove_action('woocommerce_no_products_found', 'wc_no_products_found', 10);
remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);
add_action('woocommerce_after_shop_loop', 'autoparts_pagination', 10);
function autoparts_pagination() {
    wp_main_pagination();
}
remove_action('woocommerce_before_single_product', 'woocommerce_output_all_notices', 10);
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);
add_action('woocommerce_before_single_product_summary', 'autoparts_show_product_images', 20);
function autoparts_show_product_images() { ?>
    <div class="shop__miniature">
        <div class="shop__miniature-big">
            <div id="big" class="shop__miniature-big-wrapper owl-carousel owl-theme">
                <?php
                global $product;
                $attachment_ids = $product->get_gallery_image_ids();
                $main=$product->get_image_id();
                $thumbs=wp_get_attachment_image_src($main, 'product-single'); ?>
                <div class="shop__miniature-big-item" id="slide1">
                    <img src="<?php echo $thumbs['0']; ?>" data-echo="<?php echo $thumbs['0']; ?>" alt="<?php the_title(''); ?>">
                </div>
    <?php
    if($attachment_ids) {
        $item=0;
        foreach ( $attachment_ids as $post)  {
            $item++;
            $image = wp_get_attachment_image_src($post, 'product-archive');  ?>
                <div class="shop__miniature-big-item " id="slide<?php echo $item; ?>">
                    <img src="<?php echo $image['0']; ?>" data-echo="<?php echo $image['0']; ?>" alt="<?php the_title(''); ?>">
                </div>
        <?php } }  ?>
            </div>
        </div>
        <?php  if($attachment_ids) { ?>
        <div class="shop__miniature-small ">
            <div id="small" class="shop__miniature-small-wrapper owl-carousel owl-theme">
    <?php

        $item=0;
        foreach ( $attachment_ids as $post)  {
            $item++;
            $image = wp_get_attachment_image_src($post, 'product-archive');  ?>
                <div class="shop__miniature-small-item ">
                    <a class="horizontal-thumb" data-target=".shop__miniature-big-wrapper" data-slide="<?php echo $item; ?>" href="#slide<?php echo $item; ?>">
                        <img src="<?php echo $image['0']; ?>" alt="<?php the_title(''); ?>">
                    </a>
                </div>
        <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
<?php }
remove_action('woocommerce_cart_collaterals', 'woocommerce_cross_sell_display');
add_action('woocommerce_cart_collaterals', 'woocommerce_cross_sell_display', 15);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 15);

add_action('wp_footer', 'pop_quick');
function pop_quick() { ?>
    <div id="quick-modal" class="themeModal">
        <div class="themeModal__body">
            <button class="modal-close"><i class="icon-times"></i></button>
                    <div class="shop">
                        <div class="shop__pop-content">
                        </div>
                    </div>
        </div>
    </div>
    <?php
 }

/*
add_action('autoparts-quick-views-theme', 'woocommerce_template_single_title', 5);
add_action('autoparts-quick-views-theme', 'woocommerce_template_single_rating', 10);
add_action('autoparts-quick-views-theme', 'woocommerce_template_single_price', 15);
add_action('autoparts-quick-views-theme', 'woocommerce_template_single_excerpt', 20);
add_action('autoparts-quick-views-theme', 'woocommerce_template_single_add_to_cart', 25);
add_action('autoparts-quick-views-theme', 'woocommerce_template_single_meta', 17);
*/
add_action('autoparts-quick-views-theme-left', 'autoparts_show_product_images', 20);






