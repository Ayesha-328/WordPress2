<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Checkout_Coupon{
    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }

    public function get_attributes() {
        return array(
            'blockId' => '',
            'showToggle' => true,
            'couponSectionBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#efefef','type' => 'solid'),
            'toggleText' => 'Enter your promotional code',
            'toggleTextColor' => '#191919',
            'toggleTextHoverColor' => '#191919',
            'toggleTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '16','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => '','family' => '','weight' => ''),
            'toggleHeadBgColor' => '#f0f0f0',
            'toggleHeadBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#c4c4c4','type' => 'solid'),
            'toggleHeadRadius' => (object) array('lg' => '0','unit' => 'px'),
            'toggleHeadPadding' => (object) array('lg' => (object) array('top' => 4,'right' => 13,'bottom' => 4,'left' => 13,'unit' => 'px')),
            'couponTitleText' => 'Discount Coupon',
            'titleTextColor' => '#191919',
            'titleTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '16','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => '','family' => '','weight' => ''),
            'titlePosition' => 'withCoupon',
            'couponBodyBgColor' => '#ffffff',
            'couponBodyPadding' => (object) array('lg' => (object) array('top' => 14,'right' => 13,'bottom' => 14,'left' => 13,'unit' => 'px')),
            'couponInputTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '14','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => '','family' => '','weight' => ''),
            'couponInputWidth' => (object) array('lg' => '220','unit' => 'px'),
            'couponInputTextColor' => '#7e7e7e',
            'couponInputBgColor' => '#fff',
            'couponInputPlaceholder' => 'Enter Coupon Code Here.....',
            'couponInputBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#c4c4c4','type' => 'solid'),
            'couponInputRadius' => (object) array('lg' => '4','unit' => 'px'),
            'couponInputPadding' => (object) array('lg' => (object) array('top' => 9,'right' => 40,'bottom' => 9,'left' => 12,'unit' => 'px')),
            'applyBtnPosition' => 'withCoupon',
            'couponBtnText' => 'Apply Coupon',
            'couponBtnTextColor' => '#fff',
            'couponBtnTextHoverColor' => '#fff',
            'couponBtnBgColor' => '#000',
            'couponBtnBgHoverColor' => '#000',
            'couponBtnTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '16','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => '','family' => '','weight' => ''),
            'couponBtnBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#e0e0e0','type' => 'solid'),
            'couponBtnSpace' => '10',
            'couponBtnRadius' => (object) array('lg' => (object) array('top' => 4,'right' => 4,'bottom' => 4,'left' => 4,'unit' => 'px')),
            'couponBtnPadding' => (object) array('lg' => (object) array('top' => 9,'right' => 19,'bottom' => 9,'left' => 19,'unit' => 'px')),
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
        register_block_type( 'product-blocks/checkout-coupon',
            array(
                'editor_script' => 'wopb-blocks-builder-script',
                'editor_style'  => 'wopb-blocks-editor-css',
                'render_callback' => array($this, 'content')
            )
        );
    }
    
    public function content( $attr, $noAjax = false ) {
        $attr = wp_parse_args( $attr, $this->get_attributes() );
        
        if ( is_checkout() || ( is_cart() && ! WC()->cart->is_empty() ) ) {
            $block_name = 'checkout-coupon';
            $wraper_before = $wraper_after = $content = '';
            
            if ( function_exists( 'WC' ) ) {
                $wraper_before .= '<div id="' . ( $attr['advanceId'] ? $attr['advanceId'] : '' ) . '"'.' class="wp-block-product-blocks-' . $block_name . ' wopb-block-' . $attr["blockId"] . ' '.( isset( $attr["className"] ) ? $attr["className"] : '' ) . '">';
                    $wraper_before .= '<div class="wopb-product-wrapper">';
                    
                    if ( ! is_admin() ) {
                        if ( isset( WC()->customer ) ) {
                            ob_start();
                            require_once WOPB_PATH . 'addons/builder/blocks/checkout/coupon/Template.php';
                            $content .= ob_get_clean();
                        }
                    }

                    $wraper_after .= '</div> ';
                $wraper_after .= '</div> ';
            }

            return $wraper_before.$content.$wraper_after;
        }
    }

}