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
        'id'         => 'footer-color',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'footer-color-color',
                'type'     => 'color',
                'title'    => esc_html__( 'Цвет футера', 'your-textdomain-here' ),
                'default'  => '#282828',
                'validate' => 'color',
                'output'   => array(
                    'background-color' => '.footer',
                ),
            ),
            array(
                'id'       => 'footer-color-title',
                'type'     => 'color',
                'title'    => esc_html__( 'Цвет заголовков', 'your-textdomain-here' ),
                'default'  => '#fff',
                'validate' => 'color',
                'output'   => array(
                    'color' => '.footer__title',
                ),
            ),
            array(
                'id'       => 'footer-color-icon',
                'type'     => 'color',
                'title'    => esc_html__( 'Цвет иконок', 'your-textdomain-here' ),
                'default'  => '#387d09',
                'validate' => 'color',
                'output'   => array(
                    'color' => '.footer__contact li i, .footer__menu li i',
                ),
            ),
            array(
                'id'       => 'footer-color-link',
                'type'     => 'color',
                'title'    => esc_html__( 'Цвет ссылок при наведении', 'your-textdomain-here' ),
                'default'  => '#387d09',
                'validate' => 'color',
                'output'   => array(
                    'color' => '.footer__contact-link a:hover, .footer__menu li a:hover',
                ),
            ),
            array(
                'id'       => 'footer-color-copy',
                'type'     => 'color',
                'title'    => esc_html__( 'Фон авторских прав', 'your-textdomain-here' ),
                'default'  => '#000',
                'validate' => 'color',
                'output'   => array(
                    'background-color' => '.footer__copyright',
                ),
            ),
            array(
                'id'       => 'footer-color-top',
                'type'     => 'color',
                'title'    => esc_html__( 'Фон кнопки при наведении', 'your-textdomain-here' ),
                'default'  => '#387d09',
                'validate' => 'color',
                'output'   => array(
                    'background-color' => 'footer__back-to-top:hover',
                ),
            ),
        ),
    )
);