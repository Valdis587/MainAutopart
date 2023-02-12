<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Autopart
 */

?>
<?php global $autoparts;
$layout = $autoparts['opt-sliderhome'];
?>

<section class="homeSlider">
    <div class="homeSlider__content owl-carousel owl-theme">
<?php
foreach ($layout as $slide) {
    ?>
        <div class="homeSlider__item-back" style="background-image: url('<?php echo $autoparts['sliderhome-url']['url']; ?>');">
            <div class="homeSlider__item" >
                <div class="homeSlider__left">
                    <h2 class="homeSlider__title"><?php echo $slide['title']; ?></h2>
                    <p class="homeSlider__desc"><?php echo $slide['description']; ?></p>
                    <?php if($autoparts['sliderhome-button-title']) { ?>
                    <a href="<?php if($autoparts['sliderhome-button-link']) { echo $autoparts['sliderhome-button-link']; }?>" class="homeSlider__button"><?php echo $autoparts['sliderhome-button-title']; ?></a>
                    <?php } ?>
                </div>
                <div class="homeSlider__right">
                    <div class="homeSlider__right-img">
                        <img src="<?php echo $slide['image']; ?>" alt="<?php bloginfo('name'); ?>">
                    </div>
                </div>
            </div>
        </div>
<?php } ?>
    </div>
</section>
