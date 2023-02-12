<?php
/**
 * Redux Framework switch config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux_Metaboxes::set_box(
    $opt_name,
    array(
        'id'         => 'dopimg',
        'post_types' => array( 'product' ),
        'position'   => 'side', // normal, advanced, side.
        'priority'   => 'default', // high, core, default, low.
        'sections'   => array(
            array(
                'icon_class' => 'icon-large',
                'icon'       => 'el-icon-home',
                'fields'     => array(
            array(
                'id'       => 'dopimg-url',
                'type'     => 'media',
                'title'    => esc_html__( 'Дополнительная картинка', 'your-textdomain-here' ),
                'url'      => false,
                'preview'  => true,
            ),
                ),
            ),
        ),
    )
);

Redux_Metaboxes::set_box(
    $opt_name,
    array(
        'id'         => 'badgik',
        'title'      => esc_html__( 'Бэйджики', 'your-textdomain-here' ),
        'post_types' => array( 'product' ),
        'position'   => 'normal', // normal, advanced, side.
        'priority'   => 'high', // high, core, default, low.
        'sections'   => array(
            array(
                'title'  => esc_html__( 'Бэйджики', 'your-textdomain-here' ),
                'id'     => 'badgik-title',
                'icon'   => 'el-icon-cogs',
                'fields' => array(
                    array(
                        'id'       => 'badgik-new',
                        'type'     => 'checkbox',
                        'title'    => esc_html__( 'Бэйджик Новый товар', 'your-textdomain-here' ),
                        'default'  => false,
                    ),
                    array(
                        'id'       => 'badgik-hit',
                        'type'     => 'checkbox',
                        'title'    => esc_html__( 'Бэйджик Хит продаж', 'your-textdomain-here' ),
                        'default'  => false,
                    ),
                ),
            ),
        ),
    )
);

