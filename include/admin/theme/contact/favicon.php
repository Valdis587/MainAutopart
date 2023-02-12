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
        'title'      => esc_html__( 'Фавиконка', 'your-textdomain-here' ),
        'id'         => 'favicon',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'favicon-url',
                'type'     => 'media',
                'title'    => esc_html__( 'Фавиконка', 'your-textdomain-here' ),
                'url'      => false,
                'preview'  => true,
                'default'      => array(
                    'url'    => get_template_directory_uri() . '/images/favicon.svg',
                ),
            ),
        ),
    )
);