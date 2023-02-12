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
<section class="homenews margin-home">
    <h2 class="home-title"><?php if($autoparts['newshome-title']) { echo $autoparts['newshome-title']; }?></h2>
    <?php
    $args = array(
        'posts_per_page' => 10,
        'post_type' => 'post',
    );
    $news = new WP_Query( $args );
    if ( $news->have_posts() ) {
    ?>
    <div class="homenews__carusel container owl-carousel owl-theme blog">
        <?php
        while ( $news->have_posts() ) {
            $news->the_post();
            get_template_part( 'template-parts/content', get_post_type() );
        }
        ?>
    </div>
    <?php }  ?>
</section>