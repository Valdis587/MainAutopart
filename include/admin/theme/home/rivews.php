<?php
/**
 * Redux Framework switch config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Отзывы', 'your-textdomain-here' ),
        'id'         => 'homereviews',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'homereviews-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Отзывы', 'your-textdomain-here' ),
                'default'  => 'Отзывы',
            ),
        ),
    )
);