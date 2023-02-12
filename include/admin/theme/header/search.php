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
        'title'      => esc_html__( 'Поиск', 'your-textdomain-here' ),
        'id'         => 'search',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'search-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Поиск Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
            array(
                'id'       => 'search-shop-color',
                'type'     => 'color',
                'title'    => esc_html__( 'Цвет кнопки поиска', 'your-textdomain-here' ),
                'default'  => '#387d09',
                'validate' => 'color',
                'output'   => array(
                    'background-color' => '.header__search-button',
                ),
            ),
        ),
    )
);