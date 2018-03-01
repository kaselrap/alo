<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'image'            => array(
		'type'  => 'upload',
		'label' => __( 'Choose Image', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
	),
	'hover-type-group' => array(
	    'type'  => 'group',
        'options' => array(
            'hover-target' => array(
                'type'         => 'switch',
                'label'        => __( 'Enable hover effects', 'fw' ),
                'desc'         => __( 'Select here if you want to show hover effects on your image', 'fw' ),
                'right-choice' => array(
                    'value' => '1',
                    'label' => __( 'Yes', 'fw' ),
                ),
                'left-choice'  => array(
                    'value' => '0',
                    'label' => __( 'No', 'fw' ),
                ),
            ),
            'hover-type' => array(
                'type'  => 'select',
                'value' => 'hover-overlay',
                'label' => __('Hover type', '{domain}'),
                'desc'  => __('Choose one of the hover types, that you would like to be shown on this site.', '{domain}'),
                'choices' => array(
                    '' => '---',
                    'hover-overlay' => __('Hover Type Overlay', '{domain}'),
                    'hover-type-2' => __('Hover Type 2', '{domain}'),
                    'hover-type-3' => __('Hover Type 3', '{domain}'),
                    'hover-type-4' => __('Hover Type 4', '{domain}'),
                ),
            ),
            'hover-color'   => array(
                'type'  => 'color-picker',
                'value' => '#0078ff',
                'label' => __('Color for Hover effects', '{domain}'),
                'desc'  => __('Select color what you want', '{domain}'),
            ),
        ),
    ),
	'image-link-group' => array(
		'type'    => 'group',
		'options' => array(
			'link'   => array(
				'type'  => 'text',
				'label' => __( 'Image Link', 'fw' ),
				'desc'  => __( 'Where should your image link to?', 'fw' )
			),
			'target' => array(
				'type'         => 'switch',
				'label'        => __( 'Open Link in New Window', 'fw' ),
				'desc'         => __( 'Select here if you want to open the linked page in a new window', 'fw' ),
				'right-choice' => array(
					'value' => '_blank',
					'label' => __( 'Yes', 'fw' ),
				),
				'left-choice'  => array(
					'value' => '_self',
					'label' => __( 'No', 'fw' ),
				),
			),
		)
	)
);

