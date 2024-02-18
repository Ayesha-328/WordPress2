<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Product_Additional_Info{

    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }

    public function get_attributes() {
        return array(
            'blockId' => '',
            'showHeading' => true,
            'headingTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => '','family' => '','weight' => ''),
            'headingColor' => '',
            'headingSpace' => 10,
            'headingText' => 'Additional information',
            'infoPadding' => (object) array('lg' => (object) array('unit' => 'px')),
            'labelTypo' => (object) array(),
            'labelColor' => '',
            'labelBg' => (object) array(),
            'valueTypo' => (object) array(),
            'valueColor' => '',
            'valueBg' => (object) array(),
            'wrapBg' => (object) array('openColor' => 0,'type' => 'color','color' => '#f5f5f5'),
            'wrapBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'wrapShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'wrapRadius' => (object) array('lg' => '','unit' => 'px'),
            'wrapHoverBackground' => (object) array('openColor' => 0,'type' => 'color','color' => '#ff5845'),
            'wrapHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'wrapHoverRadius' => (object) array('lg' => '','unit' => 'px'),
            'wrapHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'wrapMargin' => (object) array('lg' => (object) array('top' => '','bottom' => '','unit' => 'px')),
            'wrapOuterPadding' => (object) array('lg' => (object) array('top' => '','bottom' => '','left' => '','right' => '','unit' => 'px')),
            'wrapInnerPadding' => (object) array('lg' => (object) array('unit' => 'px')),
            'advanceId' => '',
            'advanceZindex' => '',
            'hideExtraLarge' => false,
            'hideDesktop' => false,
            'hideTablet' => false,
            'hideMobile' => false,
            'advanceCss' => '',
        );
    }

    public function register() {
        register_block_type( 'product-blocks/product-additional-info',
            array(
                'editor_script' => 'wopb-blocks-builder-script',
                'editor_style'  => 'wopb-blocks-editor-css',
                'render_callback' =>  array( $this, 'content' )
            )
        );
    }

    public function content( $attr ) {
        $attr = wp_parse_args( $attr, $this->get_attributes() );
        global $product;
        global $productx_info;
        $product = wc_get_product();
        $block_name = 'product-additional-info';
        $wraper_before = $wraper_after = $content = '';
        $productx_info = $attr['showHeading'] ? $attr['headingText'] : '';

        if ( ! empty( $product ) ) {
            if ( $product->has_attributes() || $product->has_dimensions() || $product->has_weight() ) {
                $additional_heading = function() {
                    global $productx_info;
                    return $productx_info;
                };
    
                $wraper_before .= '<div '.($attr['advanceId']?'id="'.esc_attr($attr['advanceId']).'" ':'').' class="wp-block-product-blocks-'.esc_attr($block_name).' wopb-block-'.esc_attr($attr["blockId"]).' '.(isset($attr["className"])?esc_attr($attr["className"]):'').'">';
                $wraper_before .= '<div class="wopb-product-wrapper">';
    
                add_filter( 'woocommerce_product_additional_information_heading', $additional_heading );
    
                ob_start();
                woocommerce_product_additional_information_tab();
                $content .= ob_get_clean();
    
                remove_filter( 'woocommerce_product_additional_information_heading', $additional_heading );
    
                $wraper_after .= '</div>';
                $wraper_after .= '</div>';
            }
        }

        return $wraper_before.$content.$wraper_after;
    }

}