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
<section class="homeCategory margin-home">
    <h2 class="home-title"><?php if($autoparts['homecat-title']) { echo $autoparts['homecat-title']; }?></h2>
    <div class="homeCategory__content container owl-carousel owl-theme">
        <?php
        $terms = get_terms(array(
            'taxonomy' => 'product_cat',
            'hide_empty' => true,
            'pad_counts' => true,
            'orderby' => 'name',
            'parent' => 0
        ));
        if($terms) {
        foreach($terms as $term) {
        ?>
        <div class="homeCategory__item">
            <div class="homeCategory__img">
                <?php
                $thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
                $image = wp_get_attachment_url( $thumbnail_id ); ?>
                <img src="<?php echo $image; ?>" alt="<?php echo $term->name;?>">
            </div>
            <div class="homeCategory__links">
                <a href="<?php echo get_category_link($term->term_id);?>">
                    <h3 class="homeCategory__categry-title"><?php echo $term->name;?></h3>
                </a>
                <?php
                $tax = $term->taxonomy;
                $children_terms = get_terms( array(
                    'taxonomy' => $tax,
                    'hide_empty' => true,
                    'parent' => $term->term_id
                ) );
                if($children_terms) { ?>
                <ul class="homeCategory__subcat-list">
          <?php foreach ($children_terms as $children_term) { ?>
                    <li><i class="icon-angle-double-right"></i><a href="<?php echo get_category_link($children_term->term_id);?>"><?php echo $children_term->name; ?></a></li>
            <?php } ?>
                </ul>
                <?php } ?>
            </div>
        </div>
<?php } } ?>
    </div>
</section>
