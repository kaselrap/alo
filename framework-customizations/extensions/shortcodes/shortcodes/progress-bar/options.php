<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'progress_bar_title' => array(
        'label' => __( 'Title', 'fw' ),
        'desc'  => __( 'Enter the title for progress bar', 'fw' ),
        'type'  => 'text'
    ),
    'progress_bar_color' => array(
        'label' => __( 'Color', 'fw' ),
        'desc'  => __( 'Enter the color for progress bar', 'fw' ),
        'type'  => 'color-picker'
    ),
    'progress_bar_percantage' => array(
        'label' => __( 'Percentage', 'fw' ),
        'desc'  => __( 'Enter the percentage your skill from 1 to 100', 'fw' ),
        'type'  => 'text'
    ),
);