<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'posts_per_page' => array(
        'type'  => 'select',
        'value' => '3',
        'label' => __('Posts Per Page', '{domain}'),
        'desc'  => __('Select number of posts per page', '{domain}'),
        'choices' => array(
            'all' => 'all',
            '1'   => '1',
            '2'   => '2',
            '3'   => '3',
            '4'   => '4',
            '5'   => '5',
            '6'   => '6',
            '7'   => '7',
            '8'   => '8',
            '9'   => '9',
        ),
    ),
    'categories' => array(
        'type'  => 'multi-select',
        'label' => __('Categories', '{domain}'),
        'desc'  => __('This option allows you to choose which category or categroies will display with the blog shortcode.', '{domain}'),
        'population' => 'taxonomy',
        'source' => 'category',
        'prepopulate' => 10,
    ),
    'exclude_categories' => array(
        'type'  => 'multi-select',
        'label' => __('Exclude Categories', '{domain}'),
        'desc'  => __('This option allows you to easily exclude one or more categories.', '{domain}'),
        'population' => 'taxonomy',
        'source' => 'category',
        'prepopulate' => 10,
    ),
    'thumbnail' => array(
        'type'  => 'select',
        'value' => 'yes',
        'label' => __('Show Thumbnail', '{domain}'),
        'desc'  => __('This option allows you to show or hide the blog post image that dispalys on each of your posts.', '{domain}'),
        'choices' => array(
            'yes' => 'Yes',
            'no' => 'No',
        ),
    ),
    'excerpt' => array(
        'type'  => 'select',
        'value' => 'yes',
        'label' => __('Show Excerpt', '{domain}'),
        'desc'  => __('This option allows you to show a post excerpt or the full content of each blog post.', '{domain}'),
        'choices' => array(
            'yes' => 'Yes',
            'no' => 'No',
        ),
    ),
    'pagination' => array(
        'type'  => 'select',
        'value' => 'yes',
        'label' => __('Show Pagination', '{domain}'),
        'desc'  => __('This option allows you to show a post numerical pagination boxes.', '{domain}'),
        'choices' => array(
            'yes' => 'Yes',
            'no' => 'No',
        ),
    ),
    'scrolling' => array(
        'type'  => 'select',
        'value' => 'yes',
        'label' => __('Type Scrolling', '{domain}'),
        'desc'  => __('This option allows you to choose infinite scroll, or classic numerical pagination for your posts.', '{domain}'),
        'choices' => array(
            'pagination' => 'Pagination',
            'infinite-scrolling' => 'Infinite Scrolling',
        ),
    ),
    'show_title' => array(
        'type'  => 'select',
        'value' => 'yes',
        'label' => __('Show Title', '{domain}'),
        'desc'  => __('Display the post title below the image.', '{domain}'),
        'choices' => array(
            'yes' => 'Yes',
            'no' => 'No',
        ),
    ),
    'show_link' => array(
        'type'  => 'select',
        'value' => 'yes',
        'label' => __('Link Title To Post', '{domain}'),
        'desc'  => __('Choose if the title link to the post', '{domain}'),
        'choices' => array(
            'yes' => 'Yes',
            'no' => 'No',
        ),
    ),
    'show_author' => array(
        'type'  => 'select',
        'value' => 'yes',
        'label' => __('Show Author Name', '{domain}'),
        'desc'  => __('Choose to show the athor', '{domain}'),
        'choices' => array(
            'yes' => 'Yes',
            'no' => 'No',
        ),
    ),
    'show_categories' => array(
        'type'  => 'select',
        'value' => 'yes',
        'label' => __('Show Categories', '{domain}'),
        'desc'  => __('Choose to show the categories', '{domain}'),
        'choices' => array(
            'yes' => 'Yes',
            'no' => 'No',
        ),
    ),
    'show_date' => array(
        'type'  => 'select',
        'value' => 'yes',
        'label' => __('Show Date', '{domain}'),
        'desc'  => __('Choose to show the date', '{domain}'),
        'choices' => array(
            'yes' => 'Yes',
            'no' => 'No',
        ),
    ),
    'show_comments' => array(
        'type'  => 'select',
        'value' => 'yes',
        'label' => __('Show Comments', '{domain}'),
        'desc'  => __('Choose to show the comments', '{domain}'),
        'choices' => array(
            'yes' => 'Yes',
            'no' => 'No',
        ),
    ),
    'show_read_more_link' => array(
        'type'  => 'select',
        'value' => 'yes',
        'label' => __('Show Read More Link', '{domain}'),
        'desc'  => __('Choose to show the read more link', '{domain}'),
        'choices' => array(
            'yes' => 'Yes',
            'no' => 'No',
        ),
    ),
    'show_tags' => array(
        'type'  => 'select',
        'value' => 'yes',
        'label' => __('Show Tags', '{domain}'),
        'desc'  => __('Choose to show the tags', '{domain}'),
        'choices' => array(
            'yes' => 'Yes',
            'no' => 'No',
        ),
    ),
    'grid_columns' => array(
        'type'  => 'select',
        'value' => '3',
        'label' => __('Count of Blog Grid Columns', '{domain}'),
        'desc'  => __('Controls the column width of blog grid layout', '{domain}'),
        'choices' => array(
            '2'   => '2',
            '3'   => '3',
            '4'   => '4',
            '5'   => '5',
            '6'   => '6',
        ),
    ),
    'layout' => array(
        'type'  => 'select',
        'value' => '3',
        'label' => __('Count of Blog Grid Columns', '{domain}'),
        'desc'  => __('Controls the column width of blog grid layout', '{domain}'),
        'choices' => array(
            '2'   => '2',
            '3'   => '3',
            '4'   => '4',
            '5'   => '5',
            '6'   => '6',
        ),
    ),
    'class' => array(
        'type'  => 'text',
        'label' => __('Custom Class', '{domains}'),
        'desc'  => __('Add a custom class to the wrapping HTML element for further css customization.', '{domains}'),
    ),
    'id' => array(
        'type'  => 'text',
        'label' => __('Custom Id', '{domains}'),
        'desc'  => __('Add a custom id to the wrapping HTML element for further css customization.', '{domains}'),
    ),
);