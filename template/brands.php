<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Autopart
 */

?>
<?php global $autoparts; ?>
<?php if($autoparts['brands-on']) { ?>
<section class="brands margin-home">
    <?php
    $args = array(
        'posts_per_page' => 10,
        'post_type' => 'brands',
    );
    $brands = new WP_Query( $args );
    if ( $brands->have_posts() ) {
        ?>
    <div class="brands__carusel container owl-carousel owl-theme">
        <?php
        while ( $brands->have_posts() ) {
            $brands->the_post(); ?>
        <div class="brands__carusel-item">
            <?php
            $id = get_post_thumbnail_id();
            $main=wp_get_attachment_image_src( $id, 'brands' );
            ?>
            <img src="<?php echo $main[0]; ?>" alt="<?php bloginfo('name'); ?>">
        </div>
    <?php }  ?>
    </div>
    <?php } ?>
</section>
<?php } ?>