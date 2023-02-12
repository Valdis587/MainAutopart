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
        'title'      => esc_html__( 'Новости', 'your-textdomain-here' ),
        'id'         => 'newshome',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'newshome-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Новости', 'your-textdomain-here' ),
                'default'  => 'Новости',
            ),
        ),
    )
);