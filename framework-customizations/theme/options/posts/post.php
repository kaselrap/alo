<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'main' => array(
        'title'   => 'Post Options',
        'type'    => 'box',
        'context' => 'normal',
        'options' => array(
            'short_desc' => array(
                'type'  => 'wp-editor',
                'label' => __('Short Description', '{domain}'),
                'desc'  => __('Write here you short description', '{domain}'),
            ),
            'quote_text' => array(
                'type'  => 'text',
                'label' => __('Quote Author', '{domain}'),
                'desc'  => __('Write here you quote', '{domain}'),
            ),
            'post_link' => array(
                'type'  => 'text',
                'label' => __('Text Link', '{domain}'),
                'desc'  => __('Write here you text link', '{domain}'),
            ),
            'gallery_images' => array(
                'type'  => 'multi-upload',
                'value' => 'image-2',
                'label' => __('Thumbnail Gallery Images', '{domain}'),
                'desc'  => __('Upload Images for Thumbnail Gallery', '{domain}'),
            ),
            'post__video' => array(
                'type'  => 'oembed',
                'value' => '',
                'desc'  => __('Insert here a link to the video', '{domain}'),
            ),
        ),
    ),
);