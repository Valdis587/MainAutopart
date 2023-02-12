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
<section class="caruselproduct margin-home">
    <h2 class="home-title"><?php if($autoparts['featured-title']) { echo $autoparts['featured-title']; }?></h2>
    <div class="caruselproduct-slider container">
        <?php
        $args = array(
            'post_type' => 'product',
            'tax_query' => array(
                array(
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'featured',
                ),
            ),
        );
        $featured = new WP_Query( $args );
        if ( $featured->have_posts() ) {
        ?>
        <ul class="products caruselproduct__cart owl-carousel owl-theme">
            <?php
            while ( $featured->have_posts() ) {
                $featured->the_post();
                wc_get_template_part('content', 'product');
            }
            ?>
        </ul>
        <?php }  ?>
    </div>
</section>