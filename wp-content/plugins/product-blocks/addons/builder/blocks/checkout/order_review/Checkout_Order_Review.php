<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Checkout_Order_Review{
    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }

    public function get_attributes() {
        return array(
            'blockId' => '',
            'showTitle' => true,
            'sectionTitle' => 'Your Order',
            'sectionTitleColor' => '#343434',
            'sectionTitleBg' => '',
            'headingAlign' => 'center',
            'sectionTitleTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '20','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => '','weight' => '700'),
            'sectionRadius' => (object) array('lg' => (object) array('top' => 0,'right' => 0,'bottom' => 0,'left' => 0,'unit' => 'px')),
            'sectionTitlePadding' => (object) array('lg' => (object) array('top' => 3,'right' => 8,'bottom' => 3,'left' => 8,'unit' => 'px')),
            'sectionTitleSpace' => '5',
            'headingColor' => '#343434',
            'headingBg' => '#fff',
            'headingTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '16','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize','weight' => '700'),
            'headingBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 0,'right' => 0,'bottom' => 1,'left' => 0),'color' => '#e0e0e0','type' => 'solid'),
            'headingPadding' => (object) array('lg' => (object) array('top' => 10,'right' => 10,'bottom' => 10,'left' => 10,'unit' => 'px')),
            'headingMargin' => '10',
            'bodyTextColor' => '#343434',
            'bodyPriceColor' => '#343434',
            'bodyBg' => '#fff',
            'bodyTextTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '14','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize'),
            'bodyPriceTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '14','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize'),
            'bodyBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 0,'right' => 0,'bottom' => 1,'left' => 0),'color' => '#e0e0e0','type' => 'solid'),
            'bodyPadding' => (object) array('lg' => (object) array('top' => 10,'right' => 10,'bottom' => 10,'left' => 10,'unit' => 'px')),
            'bodyMargin' => '12',
            'totalColor' => '#343434',
            'totalPriceColor' => '#343434',
            'totalTextTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '16','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize','weight' => '700'),
            'totalPriceTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '16','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize','weight' => '500'),
            'containerBg' => '#ffffff',
            'containerBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#e8e8e8','type' => 'solid'),
            'containerRadius' => (object) array('lg' => (object) array('top' => 4,'right' => 4,'bottom' => 4,'left' => 4,'unit' => 'px')),
            'containerPadding' => (object) array('lg' => (object) array('top' => 15,'right' => 15,'bottom' => 15,'left' => 15,'unit' => 'px')),
            'advanceId' => '',
            'advanceZindex' => '',
            'wrapMargin' => (object) array('lg' => (object) array('top' => '','bottom' => '','unit' => 'px')),
            'wrapOuterPadding' => (object) array('lg' => (object) array('top' => '','bottom' => '','left' => '','right' => '','unit' => 'px')),
            'wrapBg' => (object) array('openColor' => 0,'type' => 'color','color' => '#f5f5f5'),
            'wrapBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'wrapShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'wrapRadius' => (object) array('lg' => '','unit' => 'px'),
            'wrapHoverBackground' => (object) array('openColor' => 0,'type' => 'color','color' => '#ff5845'),
            'wrapHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'wrapHoverRadius' => (object) array('lg' => '','unit' => 'px'),
            'wrapHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'wrapInnerPadding' => (object) array('lg' => (object) array('unit' => 'px')),
            'hideExtraLarge' => false,
            'hideDesktop' => false,
            'hideTablet' => false,
            'hideMobile' => false,
            'advanceCss' => '',
        );
    }

    public function register() {
        register_block_type( 'product-blocks/checkout-order-review',
            array(
                'editor_script' => 'wopb-blocks-builder-script',
                'editor_style'  => 'wopb-blocks-editor-css',
                'render_callback' => array( $this, 'content' )
            )
        );
    }

    public function content( $attr, $noAjax = false ) {
        $attr = wp_parse_args( $attr, $this->get_attributes() );
        
        if ( is_checkout() ) {
            $block_name = 'checkout-order-review';
            $wraper_before = $wraper_after = $content = '';
            
            if ( function_exists( 'WC' ) ) {
                $wraper_before .= '<div id="'. ( $attr['advanceId'] ? $attr['advanceId'] : '' ) . '"'.' class="wp-block-product-blocks-' . $block_name . ' wopb-block-' . $attr["blockId"] . ' '.( isset( $attr["className"] ) ? $attr["className"] : '' ) . '">';
                    $wraper_before .= '<div class="wopb-product-wrapper">';
                    
                    if ( ! is_admin() ) {
                        if ( isset( WC()->customer ) ) {
                            ob_start();
                            require_once WOPB_PATH . 'addons/builder/blocks/checkout/order_review/Template.php';
                            $content .= ob_get_clean();
                        }
                    }

                    $wraper_after .= '</div>';
                $wraper_after .= '</div> ';
            }

            return $wraper_before.$content.$wraper_after;
        }
    }

}