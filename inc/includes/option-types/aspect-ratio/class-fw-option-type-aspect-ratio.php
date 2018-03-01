<?php if ( ! defined( 'ABSPATH' ) ) die( 'Direct access forbidden.' );


class FW_Option_Type_Aspect_Ratio extends FW_Option_Type
{
    public function get_type()
    {
        return 'aspect-ratio';
    }

    /**
     * @internal
     */
    protected function _enqueue_static($id, $option, $data)
    {
        fw()->backend->enqueue_options_static($option['aspect-ratio-options']);

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
            fw()->backend->render_options($option['aspect-ratio-options'], $data['value'], array(
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

        foreach (fw_extract_only_options($option['aspect-ratio-options']) as $inner_id => $inner_option) {
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
            'aspect-ratio-options' => array(
                'ratio-picker' => array(
                    'type'     => 'multi-picker',
                    'label'    => false,
                    'desc'     => false,
                    'value' => array(
                        'ratio-picker' => array(
                            'ratio' => '4x3'
                        ),
                    ),
                    'picker' => array(
                        'ratio' => array(
                            'type'  => 'image-picker',
                            'label' => false,
                            'desc'  => __('Choose one of this ratio', '{domain}'),
                            'choices' => array(
                                '1x1' => array(
                                    'small' => array(
                                        'src' => get_template_directory_uri() .'/inc/includes/option-types/'. $this->get_type() .'/static/img/1x1.png',
                                        'height' => 60
                                    ),
                                ),
                                '4x1' => array(
                                    'small' => array(
                                        'src' => get_template_directory_uri() .'/inc/includes/option-types/'. $this->get_type() .'/static/img/4x1.png',
                                        'height' => 60
                                    ),
                                ),
                                '4x3' => array(
                                    'small' => array(
                                        'src' => get_template_directory_uri() .'/inc/includes/option-types/'. $this->get_type() .'/static/img/4x3.png',
                                        'height' => 60
                                    ),
                                ),
                                '16x9' => array(
                                    'small' => array(
                                        'src' => get_template_directory_uri() .'/inc/includes/option-types/'. $this->get_type() .'/static/img/16x9.png',
                                        'height' => 60
                                    ),
                                ),
                                'custom' => array(
                                    'small' => array(
                                        'src' => get_template_directory_uri() .'/inc/includes/option-types/'. $this->get_type() .'/static/img/custom.png',
                                        'height' => 60
                                    ),
                                ),
                            ),
                        ),
                    ),
                    'choices'     => array(
                        '1x1' => array(
                            'ratio-height' => array(
                                'type' => 'hidden',
                                'value' => '1',
                            ),
                            'ratio-width' => array(
                                'type' => 'hidden',
                                'value' => '1',
                            ),
                        ),
                        '4x1' => array(
                            'ratio-height' => array(
                                'type' => 'hidden',
                                'value' => '1',
                            ),
                            'ratio-width' => array(
                                'type' => 'hidden',
                                'value' => '4',
                            ),
                        ),
                        '4x3' => array(
                            'ratio-height' => array(
                                'type' => 'hidden',
                                'value' => '3',
                            ),
                            'ratio-width' => array(
                                'type' => 'hidden',
                                'value' => '4',
                            ),
                        ),
                        '16x9' => array(
                            'ratio-height' => array(
                                'type' => 'hidden',
                                'value' => '9',
                            ),
                            'ratio-width' => array(
                                'type' => 'hidden',
                                'value' => '16',
                            ),
                        ),
                        'custom' => array(
                            'ratio-height' => array(
                                'type' => 'text',
                                'label' => __('Height', 'fw'),
                                'desc' => __('Type here height ratio', 'fw'),
                            ),
                            'ratio-width' => array(
                                'type' => 'text',
                                'label' => __('Width', 'fw'),
                                'desc' => __('Type here width ratio', 'fw'),
                            ),
                        ),
                    ),
                ),
            ),
            'value' => array(
                'ratio-picker' => array(
                    'ratio' => '4x3'
                ),
            ),
        );
    }
}
FW_Option_Type::register('FW_Option_Type_Aspect_Ratio');