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
<section class="homebanner">
    <div class="homebanner__content container">
        <div class="homebanner__content-item">
            <?php if($autoparts['bannerhome2-url1']) { ?>
                <img src="<?php echo $autoparts['bannerhome2-url1']['url']; ?>" alt="<?php bloginfo('name'); ?>">
            <?php } ?>
        </div>
        <div class="homebanner__content-item">
            <?php if($autoparts['bannerhome2-url2']) { ?>
                <img src="<?php echo $autoparts['bannerhome2-url2']['url']; ?>" alt="<?php bloginfo('name'); ?>">
            <?php } ?>
        </div>
    </div>
</section>