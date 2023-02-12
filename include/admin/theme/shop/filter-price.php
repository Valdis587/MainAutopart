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
        'title'      => esc_html__( 'Фильтер по цене', 'your-textdomain-here' ),
        'id'         => 'filter',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'filter-color',
                'type'     => 'color',
                'title'    => esc_html__( 'Цвет фильтера по цене', 'your-textdomain-here' ),
                'default'  => '#387d09',
                'validate' => 'color',
                'output'   => array(
                    'background-color' => '.widget_price_filter .ui-slider .ui-slider-range, .widget_price_filter .ui-slider .ui-slider-handle',
                ),
            ),
            array(
                'id'       => 'filter-button-color',
                'type'     => 'color',
                'title'    => esc_html__( 'Цвет кнопки фильтера по цене', 'your-textdomain-here' ),
                'default'  => '#387d09',
                'validate' => 'color',
                'output'   => array(
                    'background-color' => '.sidebar .wp-element-button',
                ),
            ),
        ),
    )
);