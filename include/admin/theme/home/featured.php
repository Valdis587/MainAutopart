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
        'title'      => esc_html__( 'Рекомендованные товары', 'your-textdomain-here' ),
        'id'         => 'featured',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'featured-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Рекомендованные товары', 'your-textdomain-here' ),
                'default'  => 'Рекомендованные',
            ),
        ),
    )
);