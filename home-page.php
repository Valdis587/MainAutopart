<?php
/*
Template Name: Главная
*/
get_header();
global $autoparts;
$layout = $autoparts['section-homepage']['enabled'];
if ($layout): foreach ($layout as $key=>$value) {

    switch($key) {

        case 'sliderhome': get_template_part( 'template/homeslider' );
            break;

        case 'cathome': get_template_part( 'template/homecategory' );
            break;

        case 'featuredhome': get_template_part( 'template/homefeatured' );
            break;

        case 'banner1home': get_template_part( 'template/homebanner1' );
            break;

        case 'lasthome': get_template_part( 'template/lastproduct' );
            break;

        case 'banner2home': get_template_part( 'template/homebanner2' );
            break;

        case 'reviews': get_template_part( 'template/homereviews' );
            break;

        case 'newshome': get_template_part( 'template/homenews' );
            break;
    }

}

endif;

get_footer();
