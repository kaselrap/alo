<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'team_member_image' => array(
	    'type'          => 'upload',
        'label'         => __('Image', '{domain}'),
    ),
    'team_member_hover_image' => array(
        'type'    => 'select',
        'label'   => __( 'Image Hover Type', 'fw' ),
        'desc'    => __( 'Here you can choose the hover type', 'fw' ),
        'value'   => 'none',
        'choices' => array(
            'none'    => __( 'None Hover Type', 'fw' ),
            'zoomin'  => __( 'Zoom In Hover Type', 'fw' ),
            'zoomout' => __( 'Zoom Out Hover Type', 'fw' ),
        ),
    ),
    'team_member_border_image' => array(
        'type'    => 'fw-multi-inline',
        'label'   => __( 'Image Border', 'fw' ),
        'desc'    => __('As default image is not use border'),
        'value' => array(
            'pixels' =>'',
            'color' =>'#f9f9f9',
        ),
        'fw_multi_options' => array(
            'pixels' => array(
                'type' =>'short-text',
                'title' => __('Border Pixels', 'fw'),
            ),
            'color' => array(
                'type' =>'color',
                'title' => __('Border color', 'fw'),
            ),
        ),
    ),
    'team_member_aspect_ratio' => array(
        'type'          => 'aspect-ratio',
        'label'         => __('Ratio', '{domain}'),
    ),
    'team_member_name' => array(
        'type'          => 'text',
        'label'         => __('Name', '{domain}'),
        'desc'          => __('Type here name member', '{domain}'),
    ),
    'team_member_job' => array(
        'type'          => 'text',
        'label'         => __('Job', '{domain}'),
        'desc'          => __('Type here job member', '{domain}'),
    ),
    'team_member_description' => array(
        'type'          => 'textarea',
        'label'         => __('Description', '{domain}'),
        'desc'          => __('Type here description for job member', '{domain}'),
    ),
    'team_member_background' => array(
        'type' => 'multi',
        'label' => __('Background', '{domain}'),
        'desc'  => __('Background Color for box team member', '{domain}'),
        'value' => array(
            'color' => '#f9f9f9',
            'active' => false
        ),
        'inner-options' => array(
            'active'   => array(
                'type'  => 'switch',
                'right-choice' => array(
                    'value' => true,
                    'label' => __('Yes', '{domain}'),
                ),
                'left-choice' => array(
                    'value' => false,
                    'label' => __('No', '{domain}'),
                ),
                'label'  => __('Active', '{domain}'),
            ),
            'color' => array(
                'type'  => 'color-picker',
                'label' => __('Color', 'fw'),
            ),
        ),
    ),
    'team_member_color' => array(
        'type' => 'multi',
        'label' => __('Text Color', '{domain}'),
        'desc'  => __('Text Color for box team member', '{domain}'),
        'value' => array(
            'color' => '#777',
            'active' => false
        ),
        'inner-options' => array(
            'active'   => array(
                'type'  => 'switch',
                'right-choice' => array(
                    'value' => true,
                    'label' => __('Yes', '{domain}'),
                ),
                'left-choice' => array(
                    'value' => false,
                    'label' => __('No', '{domain}'),
                ),
                'label'  => __('Active', '{domain}'),
            ),
            'color' => array(
                'type'  => 'color-picker',
                'label' => __('Color', 'fw'),
            ),
        ),
    ),
    'team_member_spacing' => array(
        'type' => 'multi',
        'label' => __('Spacing', '{domain}'),
        'desc'  => __('Inner box spacing', '{domain}'),
        'value' => array(
            'space' => '0',
            'active' => false
        ),
        'inner-options' => array(
            'active'   => array(
                'type'  => 'switch',
                'right-choice' => array(
                    'value' => true,
                    'label' => __('Yes', '{domain}'),
                ),
                'left-choice' => array(
                    'value' => false,
                    'label' => __('No', '{domain}'),
                ),
                'label'  => __('Active', '{domain}'),
            ),
            'space' => array(
                'type'  => 'text',
                'label' => __('Spacing(px)', 'fw'),
            ),
        ),
    ),
    'team_member_social' => array(
        'type'          => 'social-icons',
        'label'         => __('Social Links', '{domain}'),
    ),
    'team_member_social_position' => array(
        'type' => 'image-picker',
        'label' => __('Position Icons', '{domains}'),
        'desc'  => __('Choose position Icons','{domains}'),
        'choices' => array(
            'first' => array(
                'small' => array(
                    'src' => get_template_directory_uri() . '/framework-customizations/extensions/shortcodes/shortcodes/team-member/static/img/type-1.png',
                    'height' => 150
                ),
            ),
            'second' => array(
                'small' => array(
                    'src' => get_template_directory_uri() . '/framework-customizations/extensions/shortcodes/shortcodes/team-member/static/img/type-2.png',
                    'height' => 150
                ),
            ),
        ),
    ),
);