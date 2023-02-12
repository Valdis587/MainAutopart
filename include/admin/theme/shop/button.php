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
        'title'      => esc_html__( 'Кнопки', 'your-textdomain-here' ),
        'id'         => 'filter-but',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'filter-but-color',
                'type'     => 'color',
                'title'    => esc_html__( 'Цвет кнопок "Сетка/лист"', 'your-textdomain-here' ),
                'default'  => '#387d09',
                'validate' => 'color',
                'output'   => array(
                    'background-color' => '.shop__shop-filter-buttons-grid, .shop__shop-filter-buttons-list',
                ),
            ),
        ),
    )
);