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
    <h2 class="home-title"><?php if($autoparts['lastprod-title']) { echo $autoparts['lastprod-title']; }?></h2>
    <div class="caruselproduct-slider container">
        <?php
        $args = array(
            'posts_per_page' => 10,
            'post_type' => 'product',
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