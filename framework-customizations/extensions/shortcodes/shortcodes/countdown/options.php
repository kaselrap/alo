<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'countdown_date_time' => array(
        'type'  => 'datetime-picker',
        'label' => __('Countdown to date', '{domain}'),
        'desc'  => __('Choose the date and time', '{domain}'),
        'datetime-picker' => array(
            'format'        => 'Y/m/d H:i', // Format datetime.
            'maxDate'       => false,  // By default there is not maximum date , set a date in the datetime format.
            'minDate'       => false,  // By default minimum date will be current day, set a date in the datetime format.
            'timepicker'    => true,   // Show timepicker.
            'datepicker'    => true,   // Show datepicker.
            'defaultTime'   => '00:00' // If the input value is empty, timepicker will set time use defaultTime.
        ),
    ),

    'countdown_font'       => array(
        'type'         => 'typography',
        'label'        => __('Font', 'fw'),
        'desc'         => __('Choose font-size for digit and for label under digit.'),
        'value'        => array(
            'size'  => 70,
            'color' => '#222',
        ),
        'components'   => array(
            'size'   => true,
            'color'  => true,
            'family' => false,
        ),
    ),
    'countdown_font_line' => array(
        'type'         => 'color-picker',
        'label'        => __('Color line', 'fw'),
        'desc'         => __('Choose color for line under digit.'),
        'value'        => '#0078FF',
    ),
);