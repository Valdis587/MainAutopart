<?php
/*
Template Name: Контакты
*/
get_header();
global $autoparts; ?>
    <div class="themepage">
        <div class="themepage__content container">
            <div class="themepage__content-contact">
                <?php get_template_part( 'template/contact' ); ?>
            </div>
            <div class="themepage__content-map">
                <?php if($autoparts['map']) { echo $autoparts['map']; }?>
            </div>
        </div>
    </div>

<?php get_footer();