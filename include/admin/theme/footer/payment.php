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
        'title'      => esc_html__( 'Оплата', 'your-textdomain-here' ),
        'id'         => 'payment',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'payment-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Оплата Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
            array(
                'id'       => 'payment-url1',
                'type'     => 'media',
                'title'    => esc_html__( 'Оплата 1', 'your-textdomain-here' ),
                'url'      => false,
                'preview'  => true,
                'default'      => array(
                    'url'    => get_template_directory_uri() . '/images/payment/payment-1.png',
                ),
            ),
            array(
                'id'       => 'payment-url2',
                'type'     => 'media',
                'title'    => esc_html__( 'Оплата 2', 'your-textdomain-here' ),
                'url'      => false,
                'preview'  => true,
                'default'      => array(
                    'url'    => get_template_directory_uri() . '/images/payment/payment-2.png',
                ),
            ),
            array(
                'id'       => 'payment-url3',
                'type'     => 'media',
                'title'    => esc_html__( 'Оплата 3', 'your-textdomain-here' ),
                'url'      => false,
                'preview'  => true,
                'default'      => array(
                    'url'    => get_template_directory_uri() . '/images/payment/payment-3.png',
                ),
            ),
            array(
                'id'       => 'payment-url4',
                'type'     => 'media',
                'title'    => esc_html__( 'Оплата 4', 'your-textdomain-here' ),
                'url'      => false,
                'preview'  => true,
                'default'      => array(
                    'url'    => get_template_directory_uri() . '/images/payment/payment-4.png',
                ),
            ),
            array(
                'id'       => 'payment-url5',
                'type'     => 'media',
                'title'    => esc_html__( 'Оплата 5', 'your-textdomain-here' ),
                'url'      => false,
                'preview'  => true,
                'default'      => array(
                    'url'    => get_template_directory_uri() . '/images/payment/payment-5.png',
                ),
            ),
        ),
    )
);