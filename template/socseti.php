<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Autopart
 */

?>
<?php
global $autoparts;
if($autoparts['socseti-on']) { ?>
    <ul class="header__top-icons-list">
        <?php if($autoparts['vk']) { ?>
            <li><a href="<?php echo $autoparts['vk']; ?>"><i class="icon-vk"></i></a></li>
        <?php } ?>
        <?php if($autoparts['wh']) { ?>
            <li><a href="<?php echo $autoparts['wh']; ?>"><i class="icon-whatsapp"></i></a></li>
        <?php } ?>
        <?php if($autoparts['vi']) { ?>
            <li><a href="<?php echo $autoparts['vi']; ?>"><i class="icon-viber"></i></a></li>
        <?php } ?>
        <?php if($autoparts['tg']) { ?>
            <li><a href="<?php echo $autoparts['tg']; ?>"><i class="icon-telegram-plane"></i></a></li>
        <?php } ?>
        <?php if($autoparts['sk']) { ?>
            <li><a href="<?php echo $autoparts['sk']; ?>"><i class="icon-skype"></i></a></li>
        <?php } ?>
        <?php if($autoparts['ok']) { ?>
            <li><a href="<?php echo $autoparts['ok']; ?>"><i class="icon-ok"></i></a></li>
        <?php } ?>
    </ul>
<?php } ?>
