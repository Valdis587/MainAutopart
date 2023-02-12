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
        'title'      => esc_html__( 'Заголовки', 'your-textdomain-here' ),
        'id'         => 'footer-title',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'footer-title-contact',
                'type'     => 'text',
                'title'    => esc_html__( 'Заголовок контактов', 'your-textdomain-here' ),
                'default'  => 'Контакты',
            ),
            array(
                'id'       => 'footer-title-page',
                'type'     => 'text',
                'title'    => esc_html__( 'Заголовок страницы', 'your-textdomain-here' ),
                'default'  => 'Страницы',
            ),
            array(
                'id'       => 'footer-title-myaccaunt',
                'type'     => 'text',
                'title'    => esc_html__( 'Заголовок мой аккаунт', 'your-textdomain-here' ),
                'default'  => 'Мой аккаунт',
            ),
            array(
                'id'       => 'footer-title-category',
                'type'     => 'text',
                'title'    => esc_html__( 'Заголовок категории', 'your-textdomain-here' ),
                'default'  => 'Категории',
            ),
        ),
    )
);