<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'header_panel' => array(
        'title' => __('ALO: Header Settings', '{domain}'),
        'options' => array(

            'section_1' => array(
                'title' => __('Header Layout', '{domain}'),
                'options' => array(

                    'header_layout' => array(
                        'type'  => 'select',
                        'value' => 'version1',
                        'desc' => 'This setting controls the theme header site-wide. If you need to you can override this setting on specific posts and pages from within that posts edit screen.',
                        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                        'choices' => array(
                            'version1' => __('Header Version 1', '{domain}'),
                            'version2' => __('Header Version 2', '{domain}'),
                        ),
                    ),
                    'mobile_header_layout' => array(
                        'type'  => 'select',
                        'value' => 'version1',
                        'desc' => 'This setting controls the theme mobile header site-wide. If you need to you can override this setting on specific posts and pages from within that posts edit screen.',
                        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                        'choices' => array(
                            'version1' => __('Header Version 1', '{domain}'),
                            'version2' => __('Header Version 2', '{domain}'),
                        ),
                    ),

                ),
            ),
        ),
    ),
    'blog_panel' => array(
        'title' => __('ALO: Blog Settings', '{domain}'),
        'options' => array(
            'section_2' => array(
                'title' => __('Blog Layout', '{domain}'),
                'options' => array(
                    'blog_wide' => array(
                        'label'        => __('Full Width', 'fw'),
                        'type'         => 'switch',
                    ),
                    'blog_layout' => array(
                        'type'  => 'select',
                        'value' => 'classic-no-columns',
                        'desc' => 'This setting controls the theme blog layouts. If you need to you can override this setting on specific posts and pages from within that posts edit screen.',
                        'choices' => array(
                            'classic-no-columns' => __('Blog Classic', '{domain}'),
                            'pinterest-2-columns' => __('Blog Pinterest 2 Columns', '{domain}'),
                            'pinterest-3-columns' => __('Blog Pinterest 3 Columns', '{domain}'),
                            'pinterest-4-columns' => __('Blog Pinterest 4 Columns', '{domain}'),
                            'pinterest-5-columns' => __('Blog Pinterest 5 Columns', '{domain}'),
                        ),
                    ),
                    'blog_layout_sidebar' => array(
                        'type'  => 'checkbox',
                        'value' => true,
                        'desc' => 'This setting controls the theme blog sidebar.',
                    ),
                    'blog_space_between_articles' => array(
                        'type'  => 'select',
                        'value' => 'normal-space',
                        'desc' => 'This setting controls the theme space between article.',
                        'choices' => array(
                            'no-space' => __('No Space', '{domain}'),
                            'tiny-space' => __('Tiny Space', '{domain}'),
                            'small-space' => __('Small Space', '{domain}'),
                            'normal-space' => __('Normal Space', '{domain}'),
                        ),
                    ),
                ),
            ),
            'section_5' => array(
                'title' => __('Blog Texts', '{domain}'),
                'options' => array(
                    'blog_continue_reading_text' => array(
                        'label'        => __('Blog Continue Reading Test', 'fw'),
                        'type'         => 'text',
                        'value'        => 'Continue Reading',
                    ),
                ),
            ),
        ),
    ),
    'panel_3' => array(
        'title' => __('ALO: Portfolio Settings', '{domain}'),
        'options' => array(
            'section_portfolio_layout' => array(
                'title' => __('Portfolio Layout', '{domain}'),
                'options' => array(
                    'portfolio_wide' => array(
                        'label'        => __('Full Width', 'fw'),
                        'type'         => 'switch',
                    ),
                    'portfolio_layout' => array(
                        'type'  => 'select',
                        'value' => 'classic-no-columns',
                        'desc' => 'This setting controls the theme portfolio layouts. If you need to you can override this setting on specific posts and pages from within that posts edit screen.',
                        'choices' => array(
                            'classic-no-columns' => __('Portfolio Classic', '{domain}'),
                            'classic-2-columns' => __('Portfolio Classic 2 Columns', '{domain}'),
                            'classic-3-columns' => __('Portfolio Classic 3 Columns', '{domain}'),
                            'classic-4-columns' => __('Portfolio Classic 4 Columns', '{domain}'),
                            'classic-5-columns' => __('Portfolio Classic 5 Columns', '{domain}'),
                            'pinterest-2-columns' => __('Portfolio Pinterest 2 Columns', '{domain}'),
                            'pinterest-3-columns' => __('Portfolio Pinterest 3 Columns', '{domain}'),
                            'pinterest-4-columns' => __('Portfolio Pinterest 4 Columns', '{domain}'),
                            'pinterest-5-columns' => __('Portfolio Pinterest 5 Columns', '{domain}'),
                            'gallery-2-columns' => __('Portfolio Gallery 2 Columns', '{domain}'),
                            'gallery-3-columns' => __('Portfolio Gallery 3 Columns', '{domain}'),
                            'gallery-4-columns' => __('Portfolio Gallery 4 Columns', '{domain}'),
                            'gallery-5-columns' => __('Portfolio Gallery 5 Columns', '{domain}'),
                        ),
                    ),
                    'portfolio_layout_sidebar' => array(
                        'type'  => 'checkbox',
                        'value' => true,
                        'desc' => 'This setting controls the theme portfolio sidebar.',
                    ),
                    'portfolio_space_between_articles' => array(
                        'type'  => 'select',
                        'value' => 'normal-space',
                        'desc' => 'This setting controls the theme space between article.',
                        'choices' => array(
                            'no-space' => __('No Space', '{domain}'),
                            'tiny-space' => __('Tiny Space', '{domain}'),
                            'small-space' => __('Small Space', '{domain}'),
                            'normal-space' => __('Normal Space', '{domain}'),
                        ),
                    ),
                ),
            ),
            'section_portfolio_single_layout' => array(
                'title' => __('Portfolio Single Layout', '{domain}'),
                'options' => array(
                    'portfolio_single_wide' => array(
                        'label'        => __('Full Width', 'fw'),
                        'type'         => 'switch',
                    ),
                    'portfolio_single_layout' => array(
                        'type'  => 'select',
                        'value' => 'small-images',
                        'desc' => 'This setting controls the theme portfolio single layouts. If you need to you can override this setting on specific posts and pages from within that posts edit screen.',
                        'choices' => array(
                            'small-images' => __('Small Images', '{domain}'),
                            'big-images' => __('Big Images', '{domain}'),
                            'small-slider' => __('Small Slider', '{domain}'),
                            'big-slider' => __('Big Slider', '{domain}'),
                            'small-gallery' => __('Small Gallery', '{domain}'),
                            'standart-gallery' => __('Standart Gallery', '{domain}'),
                            'small-masonry' => __('Small Masonry', '{domain}'),
                            'standart-masonry' => __('Standart Masonry', '{domain}'),
                        ),
                    ),
                ),
            ),
            'section_portfolio_texts' => array(
                'title' => __('Portfolio Texts', '{domain}'),
                'options' => array(
                    'portfolio_title' => array(
                        'label'        => __('Showing title', 'fw'),
                        'desc'         => __('If you\'re wanna showing title, select Yes', 'fw'),
                        'type'         => 'switch',
                    ),
                    'portfolio_categories' => array(
                        'label'        => __('Showing categories', 'fw'),
                        'desc'         => __('If you\'re wanna showing categories, select Yes', 'fw'),
                        'type'         => 'switch',
                    ),
                    'portfolio_load_more' => array(
                        'label'        => __('Portfolio Load More button', 'fw'),
                        'type'         => 'text',
                        'value'        => 'Load More',
                    ),
                ),
            ),
            'section_portfolio_hover' => array(
                'title' => __('Portfolio Blocks hover effect', '{domain}'),
                'options' => array(
                    'portfolio_hover_type' => array(
                        'title' => 'Portfolio Hover Type for Image',
                        'type'  => 'select',
                        'value' => 'st-overlay-fw',
                        'desc' => 'This setting controls the theme portfolio layouts. If you need to you can override this setting on specific posts and pages from within that posts edit screen.',
                        'choices' => array(
                            'st-overlay-fw' => __('Full Width Overlay', '{domain}'),
                            'st-overlay-wthp' => __('Overlay with padding', '{domain}'),
                            'st-overlay-fw-frc' => __('Full Width Overlay from center', '{domain}'),
                            'st-overlay-frc' => __('Overlay from center to padding', '{domain}'),
                        ),
                    ),
                    'portfolio_transform_type' => array(
                        'title' => 'Portfolio Transform Type for Image',
                        'type'  => 'select',
                        'value' => 'st-no-transform',
                        'desc' => 'This setting controls the theme portfolio layouts. If you need to you can override this setting on specific posts and pages from within that posts edit screen.',
                        'choices' => array(
                            'st-no-transform' => __('No Transform', '{domain}'),
                            'st-matrix-img' => __('Half-turn Transform', '{domain}'),
                            'st-scale-img-down' => __('Scale Down Transform', '{domain}'),
                            'st-scale-img-up' => __('Scale Up Transform', '{domain}'),
                        ),
                    ),
                    'portfolio_hover_color' => array(
                        'title' => 'Portfolio Color Type for Image',
                        'type'         => 'color-picker',
                        'value' => '#0078FF',
                        'desc' => 'This setting controls the theme hover background color.',
                    ),
                    'portfolio_text_hover_type' => array(
                        'title' => 'Portfolio Hover Type for Text',
                        'type'  => 'select',
                        'value' => 'st-no-hover',
                        'desc' => 'This setting controls the theme portfolio layouts. If you need to you can override this setting on specific posts and pages from within that posts edit screen.',
                        'choices' => array(
                            'st-no-hover' => __('No Hover', '{domain}'),
                            'st-slide-up' => __('Slide Up From Bottom side', '{domain}'),
                            'st-showing-on-top' => __('Showing text with overlay on the top', '{domain}'),
                            'st-showing-on-bottom' => __('Showing text with overlay on the bottom', '{domain}'),
                            'st-showing-on-center' => __('Showing text with overlay on the center', '{domain}'),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'panel_4' => array(
        'title' => __('ALO: Title Bar Settings', '{domain}'),
        'options' => array(
            'titlebar_height_box' => array(
                'type' => 'multi',
                'title' => 'Block Height',
                'inner-options' => array(
                    'titlebar_set_height' => array(
                        'label'        => __('Set Height', 'fw'),
                        'desc'         => __('If you\'re wanna use custom height, select Yes', 'fw'),
                        'type'         => 'switch',
                    ),
                    'titlebar_height_size' => array(
                        'type'         => 'text',
                        'label'        => __('Height', 'fw'),
                        'desc'         => __('Define image height', 'fw'),
                        'help'         => __('As default, we use ( px ), but you\'re can use percantege (%)'),
                        'value'        => '612px',
                    ),
                ),
            ),
            'titlebar_select' => array(
                'type'  => 'select',
                'value' => 'background',
                'desc' => 'This setting controls the theme titlebar showing.',
                'choices' => array(
                    'paralax' => __('Background Image with Paralax effects', '{domain}'),
                    'image' => __('Background Image', '{domain}'),
                    'background' => __('Background Color', '{domain}'),
                ),
            ),
            'titlebar_image_background'   => array(
                'type'  => 'upload',
                'desc' => 'This setting controls the theme titlebar background image.',
            ),
            'titlebar_color_background'   => array(
                'type'  => 'color-picker',
                'value' => '#e1e1e1',
                'desc' => 'This setting controls the theme titlebar background color.',
            ),
        ),
    ),
    'footer_panel' => array(
        'title' => __('ALO: Footer Settings', '{domain}'),
        'options' => array(

            'footer_section_layout' => array(
                'title' => __('Footer Layout', '{domain}'),
                'options' => array(
                    'footer_layout' => array(
                        'type'  => 'select',
                        'value' => 'version1',
                        'desc' => 'This setting controls the theme header site-wide. If you need to you can override this setting on specific posts and pages from within that posts edit screen.',
                        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                        'choices' => array(
                            'version1' => __('Header Version 1', '{domain}'),
                            'version2' => __('Header Version 2', '{domain}'),
                        ),
                    ),
                ),
            ),
            'footer_section_icon' => array(
                'title' => __('Footer Icon Settings', '{domain}'),
                'options' => array(
                    'footer_showing_icon' => array(
                        'label'        => __('How to show?', 'fw'),
                        'type'         => 'switch',
                        'left-choice' => array(
                            'value' => 'text',
                            'label' => __('Text', '{domain}'),
                        ),
                        'right-choice' => array(
                            'value' => 'icon',
                            'label' => __('Icon', '{domain}'),
                        ),
                    ),
                    'footer_icons' => array(
                        'title' => __('Social Icon Box', '{domain}'),
                        'type'  => 'addable-box',
                        'desc'  => __('Choose Brand category and find icon what you want', '{domain}'),
                        'box-options' => array(
                            'footer_social_icon' => array(
                                'type' => 'icon'
                            ),
                            'footer_social_icon_link' => array(
                                'type' => 'text'
                            ),
                        ),
                        'add-button-text' => __('Add', '{domain}'),
                        'sortable' => true,
                    ),
                ),
            ),
        ),
    ),
);