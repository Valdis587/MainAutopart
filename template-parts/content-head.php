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
<section class="toppanel" style="background-image: url('<?php if($autoparts['headpage-url']) { echo $autoparts['headpage-url']['url']; }?>');">
    <div class="toppanel__content">
        <h1 class="toppanel__title"><?php wp_title(''); ?></h1>
        <?php get_breadcrumbs(); ?>
    </div>
</section>
