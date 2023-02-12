<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Autopart
 */

?>
<?php global $autoparts;
get_template_part( 'template/brands' );
?>
<footer class="footer">
    <div class="footer__content container">
        <div class="footer__itembox">
            <h5 class="footer__title"><?php if($autoparts['footer-title-contact']) { echo $autoparts['footer-title-contact']; }?></h5>
            <?php get_template_part( 'template/contact' ); ?>
        </div>
        <?php  if( has_nav_menu('menu-footer1') ) { ?>
        <div class="footer__itembox">
            <h5 class="footer__title"><?php if($autoparts['footer-title-page']) { echo $autoparts['footer-title-page']; }?></h5>
            <?php AutoParts_menu_footer1(); ?>
        </div>
        <?php } ?>
        <?php  if( has_nav_menu('menu-footer2') ) { ?>
        <div class="footer__itembox">
            <h5 class="footer__title"><?php if($autoparts['footer-title-myaccaunt']) { echo $autoparts['footer-title-myaccaunt']; }?></h5>
            <?php AutoParts_menu_footer2(); ?>
        </div>
        <?php } ?>
        <?php  if( has_nav_menu('menu-footer3') ) { ?>
        <div class="footer__itembox">
            <h5 class="footer__title"><?php if($autoparts['footer-title-category']) { echo $autoparts['footer-title-category']; }?></h5>
            <?php AutoParts_menu_footer3(); ?>
        </div>
        <?php } ?>
    </div>
    <div class="footer__bottom container">
        <div class="footer__bottom-left">
            <?php get_template_part( 'template/socseti' ); ?>
        </div>
        <div class="footer__bottom-right">
            <?php if($autoparts['payment-on']) { ?>
            <ul class="footer__payment-list">
                <?php if($autoparts['payment-url1']) { ?>
                <li><img src="<?php echo $autoparts['payment-url1']['url']; ?>" alt="<?php bloginfo('name'); ?>"></li>
                <?php } ?>
                <?php if($autoparts['payment-url2']) { ?>
                    <li><img src="<?php echo $autoparts['payment-url2']['url']; ?>" alt="<?php bloginfo('name'); ?>"></li>
                <?php } ?>
                <?php if($autoparts['payment-url3']) { ?>
                    <li><img src="<?php echo $autoparts['payment-url3']['url']; ?>" alt="<?php bloginfo('name'); ?>"></li>
                <?php } ?>
                <?php if($autoparts['payment-url4']) { ?>
                    <li><img src="<?php echo $autoparts['payment-url4']['url']; ?>" alt="<?php bloginfo('name'); ?>"></li>
                <?php } ?>
                <?php if($autoparts['payment-url5']) { ?>
                    <li><img src="<?php echo $autoparts['payment-url5']['url']; ?>" alt="<?php bloginfo('name'); ?>"></li>
                <?php } ?>
            </ul>
            <?php } ?>
        </div>
    </div>
    <div class="footer__copyright">
        <?php if($autoparts['copy-title']) { ?>
        <p><?php echo $autoparts['copy-title']; ?></p>
        <?php } ?>
    </div>
    <div class="footer__back-to-top"><i class="icon-angle-down"></i></div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
