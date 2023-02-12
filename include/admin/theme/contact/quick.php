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
        'title'      => esc_html__( 'Быстрый просмотр', 'your-textdomain-here' ),
        'id'         => 'quick',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'quick-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Быстрый просмотр Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
            array(
                'id'       => 'quick-color',
                'type'     => 'color',
                'title'    => esc_html__( 'Цвет рамки окна', 'your-textdomain-here' ),
                'default'  => '#387d09',
                'validate' => 'color',
                'output'   => array(
                    'border-color' => '.themeModal__body',
                ),
            ),
        ),
    )
);