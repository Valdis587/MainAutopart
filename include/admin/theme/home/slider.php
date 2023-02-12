<?php
/**
 * Redux Framework slides config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Слайдер', 'your-textdomain-here' ),
        'id'         => 'sliderhome',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'sliderhome-url',
                'type'     => 'media',
                'title'    => esc_html__( 'Фон слайдера', 'your-textdomain-here' ),
                'url'      => false,
                'preview'  => true,
            ),
            array(
                'id'       => 'sliderhome-button-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Заголовок кнопки', 'your-textdomain-here' ),
                'default'  => 'В магазин',
            ),
            array(
                'id'       => 'sliderhome-button-link',
                'type'     => 'text',
                'title'    => esc_html__( 'Ссылка кнопки', 'your-textdomain-here' ),
                'default'  => '#',
            ),
            array(
                'id'       => 'sliderhome-button-color',
                'type'     => 'color',
                'title'    => esc_html__( 'Цвет кнопки', 'your-textdomain-here' ),
                'default'  => '#387d09',
                'validate' => 'color',
                'output'   => array(
                    'background-color' => '.homeSlider__button',
                ),
            ),
            array(
                'id'          => 'opt-sliderhome',
                'type'        => 'slides',
                'title'       => esc_html__( 'Слайд', 'your-textdomain-here' ),
                'placeholder' => array(
                    'title'       => esc_html__( 'Заголовок', 'your-textdomain-here' ),
                    'description' => esc_html__( 'Описание', 'your-textdomain-here' ),
                ),
            ),
        ),
    )
);
