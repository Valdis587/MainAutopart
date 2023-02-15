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
        'title'      => esc_html__( 'Цвета', 'your-textdomain-here' ),
        'id'         => 'head-color',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'head-color-link',
                'type'     => 'color',
                'title'    => esc_html__( 'Цвет при наведении', 'your-textdomain-here' ),
                'default'  => '#387d09',
                'validate' => 'color',
                'output'   => array(
                    'color' => '.header__top-menu-list li a:hover',
                    'background-color' => '.header__top-icons-list li a i:hover',
                ),
            ),
            array(
                'id'       => 'head-color-icon',
                'type'     => 'color',
                'title'    => esc_html__( 'Цвет иконки телефона', 'your-textdomain-here' ),
                'default'  => '#387d09',
                'validate' => 'color',
                'output'   => array(
                    'color' => '.header__top-menu-list li i',
                ),
            ),
            array(
                'id'       => 'head-color-item',
                'type'     => 'color',
                'title'    => esc_html__( 'Фон количества товаров в корзине и избранном', 'your-textdomain-here' ),
                'default'  => '#387d09',
                'validate' => 'color',
                'output'   => array(
                    'background-color' => '.header__cart-item, .header__witelist-item',
                ),
            ),
            array(
                'id'       => 'head-color-price',
                'type'     => 'color',
                'title'    => esc_html__( 'Цвет суммы в козине', 'your-textdomain-here' ),
                'default'  => '#387d09',
                'validate' => 'color',
                'output'   => array(
                    'color' => '.header__cart-coint',
                ),
            ),
        ),
    )
);