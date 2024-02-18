<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Checkout_Billing {
    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }

    public function get_attributes() {
        return array(
            'blockId' => '',
            'showTitle' => true,
            'billingTitle' => 'Billing Details',
            'billingTitleColor' => '#FFFFFF',
            'billingTitleBgColor' => '#353535',
            'headingAlign' => 'center',
            'billingTitleTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '20','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize'),
            'billingRadius' => (object) array('lg' => (object) array('top' => 4,'right' => 4,'bottom' => 4,'left' => 4,'unit' => 'px')),
            'billingTitlePadding' => (object) array('lg' => (object) array('top' => 10,'bottom' => 10,'left' => 0,'right' => 0,'unit' => 'px')),
            'billingTitleSpace' => '5',
            'labelColor' => '#696969',
            'requiredColor' => '#ff4646',
            'labelTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '14','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize'),
            'labelMargin' => (object) array('lg' => (object) array('top' => 0,'right' => 0,'bottom' => 5,'left' => 0,'unit' => 'px')),
            'inputHeight' => '',
            'inputColor' => '#000',
            'inputBgColor' => '#fff',
            'inputFocusColor' => '#000',
            'placeholderColor' => '#cbcbcb',
            'placeholderFocusColor' => '#000',
            'inputTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '16','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize'),
            'inputBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#e0e0e0','type' => 'solid'),
            'inputRadius' => (object) array('lg' => (object) array('top' => 4,'right' => 4,'bottom' => 4,'left' => 4,'unit' => 'px')),
            'inputMargin' => (object) array('lg' => (object) array('top' => 0,'right' => 0,'bottom' => 10,'left' => 0,'unit' => 'px')),
            'fieldConBgColor' => '#efefef',
            'fieldConBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#e0e0e0','type' => 'solid'),
            'fieldConRadius' => (object) array('lg' => (object) array('top' => 4,'right' => 4,'bottom' => 4,'left' => 4,'unit' => 'px')),
            'fieldConPadding' => (object) array('lg' => (object) array('top' => 20,'right' => 20,'bottom' => 20,'left' => 20,'unit' => 'px')),
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
        register_block_type( 'product-blocks/checkout-billing',
            array(
                'editor_script' => 'wopb-blocks-builder-script',
                'editor_style'  => 'wopb-blocks-editor-css',
                'render_callback' => array( $this, 'content' )
            )
        );
    }
    
    public function content( $attr, $noAjax = false ) {
        if ( function_exists( 'WC' ) && is_checkout() ) {
            do_action('woocommerce_check_cart_items');
            $attr = wp_parse_args($attr, $this->get_attributes());

            $block_name = 'checkout-billing';
            $wraper_before = $wraper_after = $content = '';

            $wraper_before .= '<div id="' . ($attr['advanceId'] ? $attr['advanceId'] : '') . '"' . ' class="wp-block-product-blocks-' . $block_name . ' wopb-block-' . $attr["blockId"] . ' ' . (isset($attr["className"]) ? $attr["className"] : '') . '">';
            $wraper_before .= '<div class="wopb-product-wrapper">';

            if (!is_admin()) {
                if (isset(WC()->customer)) {
                    ob_start();
                    require_once WOPB_PATH . 'addons/builder/blocks/checkout/billing/Template.php';
                    $content .= ob_get_clean();
                }
            }

            $wraper_after .= '</div> ';
            $wraper_after .= '</div> ';

            return $wraper_before . $content . $wraper_after;
        }
    }

}
