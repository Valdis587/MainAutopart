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
        'title'      => esc_html__( 'Счетчик акций', 'your-textdomain-here' ),
        'id'         => 'count',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'count-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Счетчик акций Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => false,
            ),
            array(
                'id'       => 'count-color',
                'type'     => 'color',
                'title'    => esc_html__( 'Счетчик акций цвет фона', 'your-textdomain-here' ),
                'default'  => '#387d09',
                'validate' => 'color',
                'output'   => array(
                    'background-color' => '.product__count',
                ),
            ),
            array(
                'id'       => 'count-color-text',
                'type'     => 'color',
                'title'    => esc_html__( 'Счетчик акций цвет текста', 'your-textdomain-here' ),
                'default'  => '#ffffff',
                'validate' => 'color',
                'output'   => array(
                    'color' => '.product__count',
                ),
            ),
        ),
    )
);