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
        'title'      => esc_html__( 'Контакты', 'your-textdomain-here' ),
        'id'         => 'contact',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'socseti-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Соцсети Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
            array(
                'id'       => 'vk',
                'type'     => 'text',
                'title'    => esc_html__( 'Ссылка VK', 'your-textdomain-here' ),
                'default'  => '#',
            ),
            array(
                'id'       => 'wh',
                'type'     => 'text',
                'title'    => esc_html__( 'Ссылка WhatsApp', 'your-textdomain-here' ),
                'default'  => '#',
            ),
            array(
                'id'       => 'vi',
                'type'     => 'text',
                'title'    => esc_html__( 'Ссылка Viber', 'your-textdomain-here' ),
                'default'  => '#',
            ),
            array(
                'id'       => 'tg',
                'type'     => 'text',
                'title'    => esc_html__( 'Ссылка Telegram', 'your-textdomain-here' ),
                'default'  => '#',
            ),
            array(
                'id'       => 'sk',
                'type'     => 'text',
                'title'    => esc_html__( 'Ссылка Skipe', 'your-textdomain-here' ),
                'default'  => '#',
            ),
            array(
                'id'       => 'ok',
                'type'     => 'text',
                'title'    => esc_html__( 'Ссылка Однокласники', 'your-textdomain-here' ),
                'default'  => '#',
            ),
            array(
                'id'       => 'phone',
                'type'     => 'text',
                'title'    => esc_html__( 'Телефон', 'your-textdomain-here' ),
                'default'  => '8(888)888-88-88',
            ),
            array(
                'id'       => 'email',
                'type'     => 'text',
                'title'    => esc_html__( 'Почта', 'your-textdomain-here' ),
                'default'  => 'contact@opencartworks.com',
            ),
            array(
                'id'       => 'adres',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Адрес', 'your-textdomain-here' ),
                'default'  => '5611 Wellington Road, Suite 115, Gainesville, VA 20155',
            ),
            array(
                'id'       => 'time',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Время работы', 'your-textdomain-here' ),
                'default'  => '7 Days a week from 10-00 am to 6-00 pm',
            ),
            array(
                'id'       => 'map',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Карта (script)', 'your-textdomain-here' ),
                'default'  => '',
            ),
        ),
    )
);