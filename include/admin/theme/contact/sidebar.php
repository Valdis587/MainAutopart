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
        'title'      => esc_html__( 'Сайдбар', 'your-textdomain-here' ),
        'id'         => 'headsidebar',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'headsidebar-color',
                'type'     => 'color',
                'title'    => esc_html__( 'Цвет шапки сайдбара', 'your-textdomain-here' ),
                'default'  => '#387d09',
                'validate' => 'color',
                'output'   => array(
                    'background-color' => '.sidebar__sidebar-widget-title',
                ),
            ),
        ),
    )
);