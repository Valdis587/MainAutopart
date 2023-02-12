<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Autopart
 */

get_header();
get_template_part( 'template-parts/content', 'head');
?>
    <div class="blog">
        <div class="blog__content container">
            <div class="blog__post">
                <h2 class="blog__post-title"><?php wp_title(''); ?></h2>
                <div class="blog__post-info">
                    <span>Автор: <?php the_author(); ?></span>
                    <span>Дата: <?php the_date(); ?></span>
                    <span><?php comments_number(); ?></span>
                </div>
                <div class="blog__post-img">
                    <?php
                    $id = get_post_thumbnail_id();
                    $main=wp_get_attachment_image_src( $id, 'blog-single' );
                    ?>
                    <a class="image-popup-no-margins"  href="<?php echo $main[0]; ?>">
                        <img src="<?php echo $main[0]; ?>" alt="<?php wp_title(''); ?>">
                    </a>
                </div>
                <div class="blog__post-desc-cont">
                    <?php the_content(); ?>
                </div>
                <?php comments_template(); ?>
            </div>
          <?php get_sidebar(); ?>
        </div>
    </div>
<?php
get_footer();
