<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Autopart
 */

?>
<div class="rewievs__content-item">
    <div class="rewievs__content-img">
        <?php
        $id = get_post_thumbnail_id();
        $main=wp_get_attachment_image_src( $id, 'reviews' );
        ?>
        <img src="<?php echo $main[0]; ?>" alt="<?php bloginfo('name'); ?>">
    </div>
    <div class="rewievs__content-info">
        <div class="rewievs__content-rewiev">
            <?php the_content(); ?>
        </div>
        <span class="rewievs__content-name"><?php the_title(''); ?></span>
    </div>
</div>
