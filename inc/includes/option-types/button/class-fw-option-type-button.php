<?php if (!defined('FW')) die('Forbidden');

/**
 * Rows with options
 */
class FW_Option_Type_Button extends FW_Option_Type
{
    public function get_type()
    {
        return 'button';
    }

    /**
     * @internal
     * {@inheritdoc}
     */
    protected function _enqueue_static($id, $option, $data)
    {

        fw()->backend->enqueue_options_static($option['button-options']);

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
            fw()->backend->render_options($option['button-options'], $data['value'], array(
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

        foreach (fw_extract_only_options($option['button-options']) as $inner_id => $inner_option) {
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
            'button-options' => array(
                'button_style_picker' => array(
                    'type'  => 'image-picker',
                    'label' => __('Style', '{domain}'),
                    'desc'  => __('Choose styling button', '{domain}'),
                    'choices' => array(
                        'solid' => get_template_directory_uri() .'/inc/includes/option-types/'. $this->get_type() .'/static/img/style_one.png',
                        'outline' => get_template_directory_uri() .'/inc/includes/option-types/'. $this->get_type() .'/static/img/style_two.png',
                        'outline-tb' => get_template_directory_uri() .'/inc/includes/option-types/'. $this->get_type() .'/static/img/style_three.png',
                    ),
                ),
                'button_color' => array(
                    'type' => 'multi',
                    'label' => __('Color', '{domain}'),
                    'inner-options' => array(
                        'type_color' => array(
                            'type'  => 'radio',
                            'label' => __('Type_color', '{domain}'),
                            'desc'  => __('Choose type color', '{domain}'),
                            'choices' => array(
                                'accent' => __('Accent color', '{domain}'),
                                'dark' => __('Dark color', '{domain}'),
                                'custom' => __('Custom color', '{domain}'),
                            ),
                            // Display choices inline instead of list
                            'inline' => true,
                        ),
                        'custom_color' => array(
                            'type' =>'fw-multi-inline',
                            'title' => __('Custom color', '{domain}'),
                            'value' => array(
                                'color' => '',
                                'color_hover' => '',
                                'text_color' => '',
                                'text_color_hover' => '',
                            ),

                            'fw_multi_options' => array(
                                'color' => array(
                                    'type' =>'color',
                                    'title' => __('Background Color', '{domain}'),
                                ),
                                'color_hover' => array(
                                    'type' =>'color',
                                    'title' => __('Background Color Hover', '{domain}'),
                                ),
                                'text_color' => array(
                                    'type' =>'color',
                                    'title' => __('Text Color', '{domain}'),
                                ),
                                'text_color_hover' => array(
                                    'type' =>'color',
                                    'title' => __('Text Color Hover', '{domain}'),
                                ),
                            ),
                        ),
                    ),
                ),
                'button_border_radius' => array(
                    'type'  => 'radio',
                    'label' => __('Type Border Radius', '{domain}'),
                    'choices' => array(
                        'default' => __('Default border radius', '{domain}'),
                        'no-border' => __('Without border radius', '{domain}'),
                    ),
                    // Display choices inline instead of list
                    'inline' => true,
                ),
                'button_label' => array(
                    'type'  => 'text',
                    'label' => __('Label', '{domain}'),
                    'desc'  => __('This is the text that appears on your button', '{domain}'),
                ),
                'button_link'  => array(
                    'type' => 'multi',
                    'inner-options' => array(
                        'link' => array(
                            'label' => __( 'Button Link', 'fw' ),
                            'desc'  => __( 'Where should your button link to', 'fw' ),
                            'type'  => 'text',
                            'value' => '#'
                        ),
                        'target' => array(
                            'type'  => 'switch',
                            'label'   => __( 'Open Link in New Window', 'fw' ),
                            'desc'    => __( 'Select here if you want to open the linked page in a new window', 'fw' ),
                            'right-choice' => array(
                                'value' => '_blank',
                                'label' => __('Yes', 'fw'),
                            ),
                            'left-choice' => array(
                                'value' => '_self',
                                'label' => __('No', 'fw'),
                            ),
                        ),
                    ),
                ),
                'button_size'  => array(
                    'type'  => 'radio',
                    'label' => __('Size', '{domain}'),
                    'desc'  => __('Choose button size', '{domain}'),
                    'choices' => array(
                        'small' => __('Small', '{domain}'),
                        'medium' => __('Medium', '{domain}'),
                        'large' => __('Large', '{domain}'),
                        'extra-large' => __('Extra Large', '{domain}'),
                    ),
                    // Display choices inline instead of list
                    'inline' => true,
                ),
                'button_alignment' => array(
                    'type'  => 'switch',
                    'label'   => __( 'Alignment', 'fw' ),
                    'desc'    => __( 'The button alignment in the container', 'fw' ),
                    'right-choice' => array(
                        'value' => true,
                        'label' => __('Yes', 'fw'),
                    ),
                    'left-choice' => array(
                        'value' => false,
                        'label' => __('No', 'fw'),
                    ),
                ),
            ),
            'value' => array(
                'button_style_picker' => 'solid',
                'button_label'        => __('Contact Us', '{domain}'),
                'button_size'         => 'medium',
                'button_alignment' => false,
            ),
        );
    }
}
FW_Option_Type::register('FW_Option_Type_Button');