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
        'title'      => esc_html__( 'Блок баннеров 1', 'your-textdomain-here' ),
        'id'         => 'bannerhome1',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'bannerhome1-url1',
                'type'     => 'media',
                'title'    => esc_html__( 'Баннер левый', 'your-textdomain-here' ),
                'url'      => false,
                'preview'  => true,
                'default'      => array(
                    'url'    => get_template_directory_uri() . '/images/banner/t22.jpg',
                ),
            ),
            array(
                'id'       => 'bannerhome1-url2',
                'type'     => 'media',
                'title'    => esc_html__( 'Баннер правый', 'your-textdomain-here' ),
                'url'      => false,
                'preview'  => true,
                'default'      => array(
                    'url'    => get_template_directory_uri() . '/images/banner/t23.jpg',
                ),
            ),
        ),
    )
);