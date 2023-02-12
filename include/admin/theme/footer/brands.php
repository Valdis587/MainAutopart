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
        'title'      => esc_html__( 'Бренды', 'your-textdomain-here' ),
        'id'         => 'brands',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'brands-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Бренды Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
        ),
    )
);