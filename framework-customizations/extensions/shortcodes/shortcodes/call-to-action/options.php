<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'message' => array(
        'label' => __( 'Message', 'fw' ),
        'desc'  => __( 'Call to Action message', 'fw' ),
        'type'  => 'text',
        'value' => __( 'Message!', 'fw' ),
    ),
    'color' => array(
        'type'  => 'color-picker',
        'label' => __('Text Color', '{domains}'),
        'value' => '#222',
    ),
    'cta_button' => array(
        'type'  => 'popup',
        'label' => __('Button', '{domain}'),
        'popup-options' => array(
            'button' => array(
                'type'  => 'button',
            ),
        ),
    ),
);