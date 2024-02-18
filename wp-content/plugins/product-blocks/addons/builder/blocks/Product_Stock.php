<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Product_Stock{

    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }

    public function get_attributes() {
        return array(
            'blockId' => '',
            'preview' => 'instock',
            'stockAlign' => (object) array('lg' => 'left'),
            'stockTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => '','family' => '','weight' => ''),
            'stockIn' => 'Hello',
            'stockInLabel' => 'In Stock',
            'stockColor' => '#2aab6f',
            'stockOut' => '',
            'stockOutLabel' => 'Out of Stock',
            'stockOutColor' => '#e2401c',
            'stockBack' => '',
            'stockBackLabel' => 'Available on backorder',
            'stockBackColor' => '',
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
        register_block_type( 'product-blocks/product-stock',
            array(
                'editor_script' => 'wopb-blocks-builder-script',
                'editor_style'  => 'wopb-blocks-editor-css',
                'render_callback' =>  array( $this, 'content' )
            )
        );
    }

    public function content( $attr ) {
        global $product;
        $product = wc_get_product();
        $block_name = 'product-stock';
        $wraper_before = $wraper_after = $content = '';
        $attr = wp_parse_args( $attr, $this->get_attributes() );
       
        if ( ! empty( $product ) ) {
            if ( $product->get_manage_stock() ) {
                $wraper_before .= '<div '.($attr['advanceId']?'id="'.esc_attr($attr['advanceId']).'" ':'').' class="wp-block-product-blocks-'.esc_attr($block_name).' wopb-block-'.esc_attr($attr["blockId"]).' '.(isset($attr["className"])?esc_attr($attr["className"]):'').'">';
                $wraper_before .= '<div class="wopb-product-wrapper">';
    
                $content .= wc_get_stock_html( $product );
    
                $wraper_after .= '</div>';
                $wraper_after .= '</div>';
            }
		}
        
        return $wraper_before.$content.$wraper_after;
    }

}