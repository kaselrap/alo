<?php if (!defined('FW')) die('Forbidden');

/**
 * Rows with options
 */
class FW_Option_Type_Social_Icons extends FW_Option_Type
{
    public function get_type()
    {
        return 'social-icons';
    }

    /**
     * @internal
     * {@inheritdoc}
     */
    protected function _enqueue_static($id, $option, $data)
    {

        fw()->backend->enqueue_options_static($option['social-icons-options']);

        return true;
    }

    /**
     * @internal
     */
    protected function _render($id, $option, $data)
    {
        if (empty($data['value'])) {
            $data['value'] = array();
        }

        $div_attr = $option['attr'];
        unset($div_attr['name'], $div_attr['value']);

        return '<div '. fw_attr_to_html($div_attr) .'>'.
            fw()->backend->render_options($option['social-icons-options'], $data['value'], array(
                'id_prefix'   => $data['id_prefix'] . $id .'-',
                'name_prefix' => $data['name_prefix'] .'['. $id .']',
            )).
            '</div>';
    }

    public function _get_data_for_js($id, $option, $data = array()) {
        return false;
    }

    public function _default_label($id, $option) {
        return false;
    }

    /**
     * @internal
     */
    protected function _get_value_from_input($option, $input_value)
    {
        if ( is_array($input_value) || empty($option['value']) ) {
            $value = array();
        } else {
            $value = $option['value'];
        }

        foreach (fw_extract_only_options($option['social-icons-options']) as $inner_id => $inner_option) {
            $value[$inner_id] = fw()->backend->option_type($inner_option['type'])->get_value_from_input(
                isset($value[$inner_id])
                    ? array_merge($inner_option, array('value' => $value[$inner_id]))
                    : $inner_option,
                isset($input_value[$inner_id]) ? $input_value[$inner_id] : null
            );
        }

        return $value;
    }

    /**
     * @internal
     */
    public function _get_backend_width_type()
    {
        return 'full';
    }

    /**
     * @internal
     */
    protected function _get_defaults()
    {
        return array(
            'value' => array(
                'popup' => '',
            ),
            'social-icons-options' => array(
                'popup' => array(
                    'type' => 'popup',
                    'label' => __(''),
                    'popup-options' => array(
                        'social_icons' => array(
                            'type' => 'tab',
                            'options' => array(
                                'icon'  => array(
                                    'type' => 'addable-option',
                                    'label' => __('Icons', '{domain}'),
                                    'desc'  => __('Enter the options for Price Box', '{domain}'),
                                    'option' => array(
                                        'type' => 'fw-multi-inline',
                                        'label' => __('Icon', 'fw'),
                                        'value' => array(
                                            'icon' => '',
                                            'link' => '#',
                                            'name' => ''
                                        ),
                                        'fw_multi_options' => array(

                                            'icon' => array(
                                                'type'  => 'socicon',
                                                'set'   => 'socicon',
                                                'title' => __('Social Icon', 'fw'),
                                            ),
                                            'link' => array(
                                                'type' =>'short-text',
                                                'title' => __('Link', 'fw'),
                                            ),
                                            'name' => array(
                                                'type' =>'short-text',
                                                'title' => __('Name', 'fw'),
                                            ),
                                            'individual_color' => array(
                                                'type'  => 'color',
                                                'title' => __('Color', 'fw'),
                                            ),
                                        ),
                                    ),
                                    'add-button-text' => __('Add', '{domain}'),
                                    'sortable' => true,
                                ),
                            ),
                            'title' => __('Social Icons', '{domain}'),
                        ),
                        'settings' => array(
                            'type' => 'tab',
                            'options' => array(
                                'icon_settings'  => array(
                                    'type' => 'group',
                                    'options' => array(
                                        'boxed'   => array(
                                            'type'  => 'switch',
                                            'description' => __('Make Icon boxed?', '{domain}'),
                                            'value' => 'no',
                                            'right-choice' => array(
                                                'value' => 'yes',
                                                'label' => __('Yes', '{domain}'),
                                            ),
                                            'left-choice' => array(
                                                'value' => 'no',
                                                'label' => __('No', '{domain}'),
                                            ),
                                        ),
                                        'border-radius'   => array(
                                            'type'        => 'text',
                                            'description' => __('Set the border radius for boxed mode. You\'re can control in pixels value for square, rounded or circular;', '{domain}'),
                                            'value'       => '0',
                                        ),
                                        'color' => array(
                                            'type'     => 'multi-picker',
                                            'label'    => false,
                                            'desc'     => false,
                                            'picker' => array(
                                                'icon_color_type' => array(
                                                    'type'    => 'select',
                                                    'label'   => __( 'Color', 'fw' ),
                                                    'desc'    => __( 'Here you can choose global set color, default theme color or individual color for per icon.', 'fw' ),
                                                    'choices' => array(
                                                        'default'    => __( 'Default Color', 'fw' ),
                                                        'global' => __( 'Global Color', 'fw' ),
                                                        'individual' => __( 'Individual Color', 'fw' ),
                                                        'individual-per' => __( 'Individual Per Icon Color', 'fw' ),
                                                    )
                                                )
                                            ),
                                            'choices'     => array(
                                                'default' => array(
                                                    'individual-per' => array(
                                                        'type' => 'hidden',
                                                        'label'   => false,
                                                        'desc'    => __( 'You\'re can choose color in first tab', 'fw' ),
                                                    ),
                                                ),
                                                'global' => array(
                                                    'individual-per' => array(
                                                        'type' => 'hidden',
                                                        'label'   => false,
                                                        'desc'    => __( 'You\'re can choose color in first tab', 'fw' ),
                                                    ),
                                                ),
                                                'individual' => array(
                                                    'boxed-color' => array(
                                                        'type'  => 'color-picker',
                                                        'label' => __('Boxed Color', '{domains}'),
                                                        'description' => __('This setting control boxed color for all icons', '{domains}'),
                                                    ),
                                                    'border-color' => array(
                                                        'type'  => 'color-picker',
                                                        'label' => __('Border Color', '{domains}'),
                                                        'description' => __('This setting control border color for all icons', '{domains}'),
                                                    ),
                                                    'color'       => array(
                                                        'type'  => 'color-picker',
                                                        'label' => __('Icon Color', '{domains}'),
                                                        'description' => __('This setting control icon color for all icons', '{domains}'),
                                                    ),
                                                ),
                                                'individual-per' => array(
                                                    'individual-per' => array(
                                                        'type' => 'hidden',
                                                        'label'   => false,
                                                        'desc'    => __( 'You\'re can choose color in first tab', 'fw' ),
                                                    ),
                                                ),
                                            ),
                                        ),
                                        'tooltip' => array(
                                            'type' => 'multi',
                                            'label' => __('Tooltip', 'fw'),
                                            'value' => array(
                                                'alignment' => 'top',
                                                'active' => true
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
                                                    'label'  => __('Enabled', '{domain}'),
                                                ),
                                                'alignment' => array(
                                                    'type'  => 'select',
                                                    'label' => __('Tooltip Hover Position', 'fw'),
                                                    'desc'   => __('Set the position of the tooltip hover to up, down, left or right', 'fw'),
                                                    'choices' => array(
                                                        'top' => __('Up', '{domain}'),
                                                        'bottom' => __('Down', '{domain}'),
                                                        'left' => __('Left', '{domain}'),
                                                        'right' => __('Right', '{domain}'),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'title' => __('Settings', '{domain}'),
                        ),
                    ),
                ),
            ),
        );
    }
}
FW_Option_Type::register('FW_Option_Type_Social_Icons');