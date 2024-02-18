<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Product_Price{

    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }

    public function get_attributes() {
        return array(
            'blockId' => '',
            'previews' => '',
            'priceAlign' => 'left',
            'salesLabel' => false,
            'salesBadge' => false,
            'priceTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '14','unit' => 'px'),'spacing' => (object) array('lg' => '','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => '','family' => '','weight' => ''),
            'priceColor' => '#000000',
            'priceSpace' => 3,
            'salesColor' => '#000000',
            'salesTextLabel' => 'Price: ',
            'salesLabelColor' => '',
            'salesLabelTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '','unit' => 'px'),'spacing' => (object) array('lg' => '','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize','family' => '','weight' => ''),
            'badgeLabel' => 'OFF',
            'badgeColor' => '#fff',
            'salesBadgeTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '12','unit' => 'px'),'spacing' => (object) array('lg' => '','unit' => 'px'),'height' => (object) array('lg' => '20','unit' => 'px'),'decoration' => 'none','transform' => '','family' => '','weight' => ''),
            'badgeBg' => '#000',
            'badgeSpace' => 10,
            'badgeBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'badgeRadius' => (object) array('lg' => (object) array('top' => '2','bottom' => '2','left' => '2','right' => '2','unit' => 'px')),
            'badgePading' => (object) array('lg' => (object) array('top' => '1','bottom' => '1','left' => '6','right' => '6','unit' => 'px')),
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
        register_block_type( 'product-blocks/product-price',
            array(
                'editor_script' => 'wopb-blocks-builder-script',
                'editor_style'  => 'wopb-blocks-editor-css',
                'render_callback' =>  array($this, 'content')
            )
        );
    }

    public function content( $attr ) {
        global $product;
        $product = wc_get_product();
        $block_name = 'product-price';
        $wraper_before = $wraper_after = $content = '';
        $attr = wp_parse_args( $attr, $this->get_attributes() );
        
        if ( ! empty( $product ) ) {
            $wraper_before .= '<div '.($attr['advanceId']?'id="'.esc_attr($attr['advanceId']).'" ':'').' class="wp-block-product-blocks-'.esc_attr($block_name).' wopb-block-'.esc_attr($attr["blockId"]).' '.(isset($attr["className"])?esc_attr($attr["className"]):'').'">';
            $wraper_before .= '<div class="wopb-product-wrapper">';

            if ( $attr['salesLabel'] ) {
                $content .= '<span class="wopb-builder-price-label"><bdi>'.esc_html($attr['salesTextLabel']).'</bdi></span>';
            }
            
            ob_start();
            woocommerce_template_single_price();
            $content .= ob_get_clean();

            if ( $product->get_sale_price() && $attr['salesBadge'] ) {
                $percentage = 100 - ( $product->get_sale_price() / $product->get_regular_price()*100 );
                $content .= '<div class="woocommerce-discount-badge">' . round( $percentage, 2 ).'% ' . esc_html( $attr['badgeLabel'] ) . '</div>';
            }

            $wraper_after .= '</div>'; 
            $wraper_after .= '</div>';
        }

        return $wraper_before.$content.$wraper_after;
    }
}