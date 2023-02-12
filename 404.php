<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Autopart
 */

get_header();
?>

    <div class="content404">
        <div class="content404__content">
            <h2 class="content404__title">404</h2>
            <p class="content404__desc">Страница не найдена!</p>
            <a class="homeSlider__button" href="<?php echo home_url(); ?>">На главную</a>
        </div>
    </div>

<?php
get_footer();
