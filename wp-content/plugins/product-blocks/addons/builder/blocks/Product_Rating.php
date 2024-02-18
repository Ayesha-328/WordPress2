<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Product_Rating{

    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }

    public function get_attributes() {
        return array(
            'blockId' => '',
            'previews' => '',
            'ratingAlignment' => 'left',
            'enableLabel' => false,
            'enableOrder' => false,
            'starBgColor' => '',
            'starSize' => 20,
            'emptyStarColor' => '',
            'reivewText' => 'Reviews',
            'ratingColor' => '',
            'ratingTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => '','family' => '','weight' => ''),
            'TextLabelTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => '','family' => '','weight' => ''),
            'ratingLabeColor' => '',
            'TextHoverColor' => '',
            'orderLabelText' => 'Orders',
            'orderTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => '','family' => '','weight' => ''),
            'orderColor' => '',
            'ratingSpace' => '8',
            'ratingSeparator' => '/',
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
        register_block_type( 'product-blocks/product-rating',
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
        $block_name = 'product-rating';
        $wraper_before = $wraper_after = $content = '';
        $attr = wp_parse_args( $attr, $this->get_attributes() );        

        if ( ! empty( $product ) ) {
            if ( $product->get_average_rating() > 0 ) {
                $wraper_before .= '<div '.($attr['advanceId']?'id="'.esc_attr($attr['advanceId']).'" ':'').' class="wp-block-product-blocks-'.esc_attr($block_name).' wopb-block-'.esc_attr($attr["blockId"]).' '.(isset($attr["className"])?esc_attr($attr["className"]):'').'">';
                    $content .= '<div class="wopb-product-wrapper">';
                        if ( $attr['enableLabel'] ) {
                            $content .= '<span class="wopb-rating-label">'.esc_html($attr['reivewText']).'</span>';
                        }
                        ob_start();
                        woocommerce_template_single_rating();
                        if ( $attr['enableOrder'] && $attr['ratingSeparator'] ) {
                            echo '<span class="rating-builder-separator wopb-block-space">'.esc_html($attr['ratingSeparator']).'</span>';
                        }
                        if ( $attr['enableOrder'] ) {
                            echo '<span class="rating-builder-order">'.wp_kses_post($product->get_total_sales()).' '.esc_html($attr['orderLabelText']).'</span>';
                        }
                        $content .= ob_get_clean();
                    $content .= '</div>';
                $wraper_after .= '</div>';   
            }
        }

        return $wraper_before . $content . $wraper_after;
    }

}