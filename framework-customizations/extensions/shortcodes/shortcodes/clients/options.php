<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'clients_option' => array(
        'type'          => 'addable-popup',
        'label'         => __('Clients', '{domain}'),
        'popup-title'   => __( 'Add/Edit Clients', 'fw' ),
        'desc'          => __('Add here yours clients', '{domain}'),
        'template'      => '{{=title}}',
        'popup-options' => array(
            'title'         => array(
                'label' => __( 'Title', 'fw' ),
                'desc'  => __( 'Option Testimonials Title', 'fw' ),
                'type'  => 'text',
            ),
            'image'     => array(
                'type'  => 'upload',
                'label' => __('Choose Image', '{domain}'),
                'desc'  => __('Either upload a new, or choose an existing image from your media library', '{domain}'),
            ),
            'hover' => array(
                'type'    => 'group',
                'options' => array(
                    'type-hover' => array(
                        'type'         => 'switch',
                        'label'        => __( 'Choose type hover', 'fw' ),
                        'desc'         => __( 'Select here if you want to use image as hover', 'fw' ),
                        'right-choice' => array(
                            'value' => 'zoom-in',
                            'label' => __( 'Zoom In', 'fw' ),
                        ),
                        'left-choice'  => array(
                            'value' => 'image-hover',
                            'label' => __( 'Image Hover', 'fw' ),
                        ),
                    ),
                    'image-hover'   => array(
                        'type'  => 'upload',
                        'label' => __( 'Choose Image Hover', 'fw' ),
                        'desc'  => __( 'It\'s work, only if type hover is "hover"', 'fw' )
                    ),

                ),
            ),
            'enable_link'   => array(
                'type'         => 'switch',
                'label'        => __( 'Enable Link', 'fw' ),
                'desc'         => __( 'Select here if you want to enable link', 'fw' ),
                'value'        => 'no',
                'right-choice' => array(
                    'value' => 'yes',
                    'label' => __( 'Yes', 'fw' ),
                ),
                'left-choice'  => array(
                    'value' => 'no',
                    'label' => __( 'No', 'fw' ),
                ),
            ),
            'link'   => array(
                'label' => __( 'Client Link', 'fw' ),
                'desc'  => __( 'Where should your client link to', 'fw' ),
                'type'  => 'text',
                'value' => '#'
            ),
            'target' => array(
                'type'  => 'switch',
                'label'   => __( 'Open Link in New Window', 'fw' ),
                'desc'    => __( 'Select here if you want to open the linked page in a new window', 'fw' ),
                'right-choice' => array(
                    'value' => '_blank',
                    'label' => __('Yes', 'fw'),
                ),
                'left-choice' => array(
                    'value' => '_self',
                    'label' => __('No', 'fw'),
                ),
            ),
        ),
    ),
    'clients_number_of_items' => array(
        'type'  => 'text',
        'label' => __('Number of Items', '{domain}'),
        'desc'  => __('The number of items you want to see on the screen.', '{domain}'),
    ),
    'clients_autoplay' => array(
        'type'         => 'switch',
        'label'        => __( 'Enable autoplay slider', 'fw' ),
        'desc'         => __( 'Select here if you want to enable autoplay', 'fw' ),
        'value'        => 'yes',
        'right-choice' => array(
            'value' => 'yes',
            'label' => __( 'Yes', 'fw' ),
        ),
        'left-choice'  => array(
            'value' => 'no',
            'label' => __( 'No', 'fw' ),
        ),
    ),
    'clients_autoplay_timeout' => array(
        'type'  => 'text',
        'label' => __('Autoplay interval timeout', '{domain}'),
        'desc'  => __('Autoplay interval timeout type here. As default 5000 ms', '{domain}'),
    ),
    'clients_animation_speed' => array(
        'type'  => 'text',
        'label' => __('Animation speed', '{domain}'),
        'desc'  => __('Animation speed ', '{domain}'),
    ),
    'clients_loop' => array(
        'type'         => 'switch',
        'label'        => __( 'Enable infinity loop on slider', 'fw' ),
        'desc'         => __( 'Select here if you want to enable loop', 'fw' ),
        'value'        => 'yes',
        'right-choice' => array(
            'value' => 'yes',
            'label' => __( 'Yes', 'fw' ),
        ),
        'left-choice'  => array(
            'value' => 'no',
            'label' => __( 'No', 'fw' ),
        ),
    ),
    'clients_navigation' => array(
        'type'         => 'switch',
        'label'        => __( 'Enable navigation', 'fw' ),
        'desc'         => __( 'Select here if you want to enable navigation', 'fw' ),
        'value'        => 'no',
        'right-choice' => array(
            'value' => 'yes',
            'label' => __( 'Yes', 'fw' ),
        ),
        'left-choice'  => array(
            'value' => 'no',
            'label' => __( 'No', 'fw' ),
        ),
    ),
    'clients_pagination' => array(
        'type'         => 'switch',
        'label'        => __( 'Enable pagination', 'fw' ),
        'desc'         => __( 'Select here if you want to enable pagination', 'fw' ),
        'value'        => 'no',
        'right-choice' => array(
            'value' => 'yes',
            'label' => __( 'Yes', 'fw' ),
        ),
        'left-choice'  => array(
            'value' => 'no',
            'label' => __( 'No', 'fw' ),
        ),
    ),
);