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
        'title'      => esc_html__( 'Главное меню', 'your-textdomain-here' ),
        'id'         => 'prim-line',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'prim-line-color',
                'type'     => 'color',
                'title'    => esc_html__( 'Фон главного меню', 'your-textdomain-here' ),
                'default'  => '#387d09',
                'validate' => 'color',
                'output'   => array(
                    'background-color' => '.header__menu-box',
                ),
            ),
        ),
    )
);