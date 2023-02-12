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
        'title'      => esc_html__( 'Меню категорий', 'your-textdomain-here' ),
        'id'         => 'menu-cat',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'menu-cat-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Меню категорий Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
            array(
                'id'       => 'menu-cat-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Заголовок меню категорий', 'your-textdomain-here' ),
                'default'  => 'Все категории',
            ),
            array(
                'id'       => 'search-shop-color',
                'type'     => 'color',
                'title'    => esc_html__( 'Цвет меню категорий', 'your-textdomain-here' ),
                'default'  => '#282828',
                'validate' => 'color',
                'output'   => array(
                    'background-color' => '.header__category',
                ),
            ),
        ),
    )
);