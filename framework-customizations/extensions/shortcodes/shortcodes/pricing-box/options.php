<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'price_box_title' => array(
        'label' => __( 'Title', 'fw' ),
        'desc'  => __( 'Enter the title for Price Box', 'fw' ),
        'type'  => 'text'
    ),
    'price_box_background' => array(
        'label' => __('Price Box Background Color', 'fw'),
        'desc'  => __('Please select the background color', 'fw'),
        'type'  => 'color-picker',
    ),
    'price_box_spacing_switch' => array(
        'type'  => 'switch',
        'label'   => __( 'Default spacing', 'fw' ),
        'desc'    => __( 'Use default spacing?', 'fw' ),
        'value' => 'yes',
        'right-choice' => array(
            'value' => 'yes',
            'label' => __('Yes', 'fw'),
        ),
        'left-choice' => array(
            'value' => 'no',
            'label' => __('No', 'fw'),
        ),
    ),
    'price_box_spacing' => array(
        'type' => 'fw-multi-inline',
        'label' => __('Additional spacing', 'fw'),
        'value' => array(
            'right' =>'',
            'left' =>'',
            'top' =>'',
            'bottom' =>'',
        ),

        'fw_multi_options' => array(
            'right' => array(
                'type' =>'short-text',
                'title' => __('right', 'fw'),
            ),
            'left' => array(
                'type' =>'short-text',
                'title' => __('left', 'fw'),
            ),
            'top' => array(
                'type' =>'short-text',
                'title' => __('top', 'fw'),
            ),
            'bottom' => array(
                'type' =>'short-text',
                'title' => __('bottom', 'fw'),
            ),
        ),
    ),
    'price_box_price' => array(
        'type'     => 'multi-picker',
        'label'    => false,
        'desc'     => false,
        'picker' => array(
            'price_box_type' => array(
                'type'    => 'select',
                'label'   => __( 'Price Box Type', 'fw' ),
                'desc'    => __( 'Here you can set the some options', 'fw' ),
                'choices' => array(
                    'with-time'    => __( 'Price with Time', 'fw' ),
                    'without-time' => __( 'Price without Time', 'fw' ),
                )
            )
        ),
        'choices'     => array(
            'without-time' => array(
                'price_amount' => array(
                    'type'  => 'text',
                    'label' => __( 'Price', 'fw' ),
                    'desc'  => __( 'Enter the price for Price Box', 'fw' ),
                ),
            ),
            'with-time' => array(
                'price_amount' => array(
                    'type'  => 'text',
                    'label' => __( 'Price', 'fw' ),
                    'desc'  => __( 'Enter the price for Price Box', 'fw' ),
                ),
                'price_time' => array(
                    'type'  => 'select',
                    'value' => 'month',
                    'label' => __('Price time', '{domain}'),
                    'desc'  => __('Choose time for price', '{domain}'),
                    'choices' => array(
                        array(
                            'attr'    => array('label' => __('Hours', '{domain}')),
                            'choices' => array(
                                'hour' => __('One Hour', '{domain}'),
                                '2-hours' => __('2 Hours', '{domain}'),
                                '3-hours' => __('3 Hours', '{domain}'),
                                '6-hours' => __('6 Hours', '{domain}'),
                                '12-hours' => __('12 Hours', '{domain}'),
                                '24-hours' => __('24 Hours', '{domain}'),
                            ),
                        ),
                        array(
                            'attr'    => array('label' => __('Months', '{domain}')),
                            'choices' => array(
                                'month' => __('One Month', '{domain}'),
                                '3-months' => __('3 Months', '{domain}'),
                                '6-months' => __('6 Months', '{domain}'),
                            ),
                        ),
                        'year' => __('Year', '{domain}'),
                    ),
                ),
            ),
        )
    ),
    'price_box_icon'  => array(
        'type'  => 'icon',
        'label' => __( 'Price Icon', 'fw' ),
        'set'   => 'currency',
    ),
    'price_box_option' => array(
        'type'  => 'addable-option',
        'label' => __('Options', '{domain}'),
        'desc'  => __('Enter the options for Price Box', '{domain}'),
        'option' => array(
            'type' => 'multi',
            'inner-options' => array(
                'name_option' => array(
                    'type'  => 'text',
                    'label' => __('Name option', '{domain}'),
                    'value' => __('Option', '{domain}'),
                ),
                'disabled_option' => array( 'type' => 'checkbox', 'label' => __('Disabled Option', '{domain}'), ),
            ),
            'help' => __('Type options, if you\'re wanna to disabled some options, select checkbox', '{domain}'),
        ),
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
    ),
    'price_box_button' => array(
        'type'  => 'popup',
        'label' => __('Button', '{domain}'),
        'popup-options' => array(
            'button' => array(
                'type'  => 'button',
            ),
        ),
    ),
);