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
        'title'      => esc_html__( 'Категории', 'your-textdomain-here' ),
        'id'         => 'homecat',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'homecat-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Категории', 'your-textdomain-here' ),
                'default'  => 'Категории',
            ),
        ),
    )
);