<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Autopart
 */

?>
<div id="post-<?php the_ID(); ?>" class="blog__news-item">
    <div class="blog__news-left">
        <div class="blog__news-img">
            <a href="<?php the_permalink(); ?>">
                <?php
                $id = get_post_thumbnail_id();
                $main=wp_get_attachment_image_src( $id, 'blog' );
                ?>
                <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
            </a>
        </div>
        <div class="blog__news-date">
            <span class="date"><?php echo date('d'); ?></span>
            <span class="mons"><?php echo date('M'); ?></span>
        </div>
    </div>
    <div class="blog__news-right">
        <a href="<?php the_permalink(); ?>">
            <h2 class="blog__news-title"><?php the_title(''); ?></h2>
        </a>
        <div class="blog__news-autor">
            <span><i class="icon-user"></i>Автор: <?php the_author(); ?></span>
        </div>
        <div class="blog__news-desc">
            <p><?php do_excerpt(get_the_excerpt(), 15); ?></p>
        </div>
        <a href="<?php the_permalink(); ?>" class="blog__news-link">Читать далее...</a>
    </div>
</div><!-- #post-<?php the_ID(); ?> -->
