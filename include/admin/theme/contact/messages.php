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
        'title'      => esc_html__( 'Уведомления', 'your-textdomain-here' ),
        'id'         => 'messages',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'messages-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Уведомления Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
            array(
                'id'       => 'messages-color',
                'type'     => 'color',
                'title'    => esc_html__( 'Цвет рамки Уведомления', 'your-textdomain-here' ),
                'default'  => '#387d09',
                'validate' => 'color',
                'output'   => array(
                    'border-color' => '.jGrowl-notification',
                ),
            ),
            array(
                'id'       => 'messages-link',
                'type'     => 'color',
                'title'    => esc_html__( 'Цвет ссылки Уведомления', 'your-textdomain-here' ),
                'default'  => '#387d09',
                'validate' => 'color',
                'output'   => array(
                    'color' => '.messages__cart a',
                ),
            ),
        ),
    )
);