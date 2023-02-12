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

<ul class="footer__contact">
    <?php if($autoparts['phone']) { ?>
    <li class="footer__contact-link"><i class="icon-phone-alt"></i><a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $autoparts['phone']) ?>"><?php echo $autoparts['phone']; ?></a></li>
    <?php } ?>
    <?php if($autoparts['email']) { ?>
    <li class="footer__contact-link"><i class="icon-envelope"></i><a href="mailto:<?php echo $autoparts['email']; ?>"><?php echo $autoparts['email']; ?></a></li>
    <?php } ?>
    <?php if($autoparts['adres']) { ?>
    <li><i class="icon-map-marker-alt"></i><a href="#"><?php echo $autoparts['adres']; ?></a></li>
    <?php } ?>
    <?php if($autoparts['time']) { ?>
    <li><i class="icon-clock"></i><a href="#"><?php echo $autoparts['time']; ?></a></li>
    <?php } ?>
</ul>
