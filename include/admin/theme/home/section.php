<?php
/**
 * Redux Repeater Sample config.
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux Pro
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Секции', 'your-textdomain-here' ),
        'id'         => 'section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'section-homepage',
                'type'     => 'sorter',
                'title'    => 'Управление секциями домашней страницы',
                'compiler' => 'true',
                'options'  => array(
                    'disabled' => array(
                        
                    ),
                    'enabled'  => array(
                        'sliderhome' => 'Слайдер',
                        'cathome' => 'Категории',
                        'featuredhome' => 'Рекомендованные товары',
                        'banner1home' => 'Блок баннеров 1',
                        'lasthome' => 'Последние поступления',
                        'banner2home' => 'Блок баннеров 2',
                        'reviews' => 'Отзывы',
                        'newshome' => 'Новости',
                    ),

                ),
            ),
        ),
    )
);