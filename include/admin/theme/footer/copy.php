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
        'title'      => esc_html__( 'Права', 'your-textdomain-here' ),
        'id'         => 'copy',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'copy-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Авторские права', 'your-textdomain-here' ),
                'default'  => '© 2023',
            ),
        ),
    )
);