<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
    'column_space' => array(
        'type'  => 'select',
        'value' => 'no-space',
        'desc' => 'This setting controls the space between column.',
        'choices' => array(
            'no-space' => __('No Space', '{domain}'),
            'tiny-space' => __('Tiny Space', '{domain}'),
            'small-space' => __('Small Space', '{domain}'),
            'normal-space' => __('Normal Space', '{domain}'),
        ),
    ),
    'column_border' => array(
        'type'  => 'select',
        'value' => 'no-border',
        'desc' => 'This setting controls the border between column.',
        'choices' => array(
            'no-border' => __('No Border', '{domain}'),
            'all-border' => __('Border All', '{domain}'),
            'border-left' => __('Border Left', '{domain}'),
            'border-right' => __('Border Right', '{domain}'),
            'border-top' => __('Border Top', '{domain}'),
            'border-bottom' => __('Border Bottom', '{domain}'),
        ),
    ),
	'custom_class' => array(
		'label' => __('Block Class', 'fw'),
		'desc'  => __('If yo want to add block with custom class', 'fw'),
		'type'  => 'text',
	),
	'custom_class_2' => array(
		'label' => __('Block Class 2', 'fw'),
		'desc'  => __('If yo want to add wrapper block with custom class', 'fw'),
		'type'  => 'text',
	),
);
