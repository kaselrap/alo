<?php
/**
 * Template part for displaying title block
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ALO
 */

?>
<?php global $options_data; ?>
<?php
    if ($options_data['titlebar_select'] == 'paralax') {
        $background_class = 'st-paralax-background';
        $grid = 'fw-col-md-12';
    } else if ($options_data['titlebar_select'] == 'image') {
        $background_class = 'st-background';
        $grid = 'fw-col-md-6 fw-col-sm-6';
    } else {
        $background_class = 'st-bakground-color';
        $grid = 'fw-col-md-6 fw-col-sm-6';
    }
    if ( ( $options_data['titlebar_select'] == 'paralax' || $options_data['titlebar_select'] == 'image' ) && isset( $options_data['titlebar_image_background'] ) ){
        $style = 'style="';
        $style .= 'background-image:url(' . $options_data['titlebar_image_background']['url'] . ');';
        if( $options_data['titlebar_height_box']['titlebar_set_height'] )
            $style .= 'height:'. $options_data['titlebar_height_box']['titlebar_height_size'];
        $style .= '"';
    }
?>
<div class="st-title <?php echo $background_class; ?>" <?php if ( isset ( $style ) ) echo $style; ?>>
    <div class="st-title-holder fw-container">
        <div class="fw-row">
            <div class="<?php echo $grid; ?>">
                <h3 class="st-page-title">
                    <span>
                        <?php
                            if( is_search() )
                                echo __('Search', 'alo');
                            else
                                wp_title('');
                        ?>
                    </span>
                </h3>
            </div>
            <div class="<?php echo $grid; ?>">
                <?php echo fw_ext_get_breadcrumbs( '/' ) ?>
            </div>
        </div>
    </div>
</div>
