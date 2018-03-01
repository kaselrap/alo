<?php

/** @internal */
function _action_theme_include_fw_multi_inline() {
    require_once dirname(__FILE__) . '/includes/option-types/fw-multi-inline/class-fw-option-type-fw-multi-inline.php';
}
add_action('fw_option_types_init', '_action_theme_include_fw_multi_inline');

/** @internal */
function _action_theme_include_button() {
    require_once dirname(__FILE__) . '/includes/option-types/button/class-fw-option-type-button.php';
}
add_action('fw_option_types_init', '_action_theme_include_button');
/** @internal */
function _action_theme_include_aspect_ratio() {
    require_once dirname(__FILE__) . '/includes/option-types/aspect-ratio/class-fw-option-type-aspect-ratio.php';
}
add_action('fw_option_types_init', '_action_theme_include_aspect_ratio');
/** @internal */
function _action_theme_include_social_icons() {
    require_once dirname(__FILE__) . '/includes/option-types/social-icons/class-fw-option-type-social-icons.php';
}
add_action('fw_option_types_init', '_action_theme_include_social_icons');
/**
 * @internal
 */
function _filter_theme_option_type_icon_sets($sets) {
    $sets['socicon'] = array(
        'font-style-src' => get_template_directory_uri() . '/assets/css/socicon/style.css',
        'groups' => array(
            'social' => __('Social Icons', 'fw'),
        ),
        'icons' => array(
            'socicon-facebook' => array( 'group' => 'social', 'name' => __('Facebook', 'fw')),
            'socicon-twitter' => array( 'group' => 'social', 'name' => __('Twitter', 'fw')),
            'socicon-youtube' => array( 'group' => 'social', 'name' => __('YouTube', 'fw')),
            'socicon-rss' => array( 'group' => 'social', 'name' => __('Rss', 'fw')),
            'socicon-mailru' => array( 'group' => 'social', 'name' => __('Mail', 'fw')),
            'socicon-instagram' => array( 'group' => 'social', 'name' => __('Instagram', 'fw')),
            'socicon-linkedin' => array( 'group' => 'social', 'name' => __('Linkedin', 'fw')),
            'socicon-dribbble' => array( 'group' => 'social', 'name' => __('Dribbble', 'fw')),
            'socicon-pinterest' => array( 'group' => 'social', 'name' => __('Pinterest', 'fw')),
            'socicon-flickr' => array( 'group' => 'social', 'name' => __('Flickr', 'fw')),
            'socicon-vimeo' => array( 'group' => 'social', 'name' => __('Vimeo', 'fw')),
            'socicon-tumblr' => array( 'group' => 'social', 'name' => __('Tumblr', 'fw')),
            'socicon-googleplus' => array( 'group' => 'social', 'name' => __('Googleplus', 'fw')),
            'socicon-digg' => array( 'group' => 'social', 'name' => __('Digg', 'fw')),
            'socicon-blogger' => array( 'group' => 'social', 'name' => __('Blogger', 'fw')),
            'socicon-skype' => array( 'group' => 'social', 'name' => __('Skype', 'fw')),
            'socicon-myspace' => array( 'group' => 'social', 'name' => __('Myspace', 'fw')),
            'socicon-deviantart' => array( 'group' => 'social', 'name' => __('Deviantart', 'fw')),
            'socicon-yahoo' => array( 'group' => 'social', 'name' => __('Yahoo', 'fw')),
            'socicon-reddit' => array( 'group' => 'social', 'name' => __('Reddit', 'fw')),
            'socicon-forrst' => array( 'group' => 'social', 'name' => __('Forrst', 'fw')),
            'socicon-paypal' => array( 'group' => 'social', 'name' => __('Paypal', 'fw')),
            'socicon-soundcloud' => array( 'group' => 'social', 'name' => __('Soundcloud', 'fw')),
            'socicon-vkontakte' => array( 'group' => 'social', 'name' => __('VK', 'fw')),
        ),
    );
    $sets['currency'] = array(
        'font-style-src' => $sets['font-awesome']['font-style-src'],
        'groups' => array(
            'currency' => __('Currency Icons', 'fw'),
        ),
        'icons' => array(
            'fa fa-bitcoin' => array( 'group' => 'currency' ),
            'fa fa-btc' => array( 'group' => 'currency' ),
            'fa fa-cny' => array( 'group' => 'currency' ),
            'fa fa-dollar' => array( 'group' => 'currency' ),
            'fa fa-eur' => array( 'group' => 'currency' ),
            'fa fa-euro' => array( 'group' => 'currency' ),
            'fa fa-gbp' => array( 'group' => 'currency' ),
            'fa fa-gg' => array( 'group' => 'currency' ),
            'fa fa-gg-circle' => array( 'group' => 'currency' ),
            'fa fa-ils' => array( 'group' => 'currency' ),
            'fa fa-inr' => array( 'group' => 'currency' ),
            'fa fa-jpy' => array( 'group' => 'currency' ),
            'fa fa-krw' => array( 'group' => 'currency' ),
            'fa fa-rmb' => array( 'group' => 'currency' ),
            'fa fa-rouble' => array( 'group' => 'currency' ),
            'fa fa-rub' => array( 'group' => 'currency' ),
            'fa fa-ruble' => array( 'group' => 'currency' ),
            'fa fa-rupee' => array( 'group' => 'currency' ),
            'fa fa-shekel' => array( 'group' => 'currency' ),
            'fa fa-sheqel' => array( 'group' => 'currency' ),
            'fa fa-try' => array( 'group' => 'currency' ),
            'fa fa-turkish-lira' => array( 'group' => 'currency' ),
            'fa fa-usd' => array( 'group' => 'currency' ),
            'fa fa-won' => array( 'group' => 'currency' ),
            'fa fa-yen' => array( 'group' => 'currency' ),
        ),
    );

    return $sets;
}
add_filter('fw_option_type_icon_sets', '_filter_theme_option_type_icon_sets');