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
        'title'      => esc_html__( 'Баннер', 'your-textdomain-here' ),
        'id'         => 'banner',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'banner-url',
                'type'     => 'media',
                'title'    => esc_html__( 'Баннер', 'your-textdomain-here' ),
                'url'      => false,
                'preview'  => true,
                'default'      => array(
                    'url'    => get_template_directory_uri() . '/images/banner/1518370215111453184.jpg',
                ),
            ),
        ),
    )
);