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
        'title'      => esc_html__( 'Шапка страниц', 'your-textdomain-here' ),
        'id'         => 'headpage',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'headpage-url',
                'type'     => 'media',
                'title'    => esc_html__( 'Шапка страниц фоновая картинка', 'your-textdomain-here' ),
                'url'      => false,
                'preview'  => true,
                'default'      => array(
                    'url'    => get_template_directory_uri() . '/images/banner/1595913054133768222.jpg',
                ),
            ),
            array(
                'id'       => 'headpage-bread',
                'type'     => 'color',
                'title'    => esc_html__( 'Цвет активной страницы хлебные крошки', 'your-textdomain-here' ),
                'default'  => '#387d09',
                'validate' => 'color',
                'output'   => array(
                    'color' => '.woocommerce-breadcrumb',
                ),
            ),
            array(
                'id'       => 'headpage-bread-link',
                'type'     => 'color',
                'title'    => esc_html__( 'Цвет ссылки при наведении хлебные крошки', 'your-textdomain-here' ),
                'default'  => '#387d09',
                'validate' => 'color',
                'output'   => array(
                    'color' => '.woocommerce-breadcrumb a:hover',
                ),
            ),
        ),
    )
);