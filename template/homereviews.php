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

<section class="rewievs margin-home">
    <h2 class="home-title"><?php if($autoparts['homereviews-title']) { echo $autoparts['homereviews-title']; }?></h2>
    <?php
    $args = array(
        'posts_per_page' => 10,
        'post_type' => 'revews',
    );
    $reviews = new WP_Query( $args );
    if ( $reviews->have_posts() ) {
    ?>
    <div class="rewievs__content container owl-carousel owl-theme">
        <?php
        while ( $reviews->have_posts() ) {
            $reviews->the_post();
            get_template_part( 'template/reviews' );
        }
        ?>
    </div>
    <?php }  ?>
</section>
