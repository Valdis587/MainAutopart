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
        'title'      => esc_html__( 'Последние поступления', 'your-textdomain-here' ),
        'id'         => 'lastprod',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'lastprod-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Последние поступления', 'your-textdomain-here' ),
                'default'  => 'Последние поступления',
            ),
        ),
    )
);