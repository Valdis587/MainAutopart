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
        'title'      => esc_html__( 'Топ меню', 'your-textdomain-here' ),
        'id'         => 'top-line',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'top-line-color',
                'type'     => 'color',
                'title'    => esc_html__( 'Фон контактов', 'your-textdomain-here' ),
                'default'  => '#282828',
                'validate' => 'color',
                'output'   => array(
                    'background-color' => '.header__top',
                ),
            ),
        ),
    )
);