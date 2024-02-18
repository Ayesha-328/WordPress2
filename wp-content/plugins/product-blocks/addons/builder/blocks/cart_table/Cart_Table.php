<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Cart_Table {
    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
        add_action( 'init', array( $this, 'woocommerce_clear_cart_url' ) );
    }

    public function get_attributes() {
        return array(
            'blockId' => '',
            'showCoupon' => true,
            'showUpdate' => true,
            'showEmpty' => true,
            'showContinue' => false,
            'showCrossSell' => false,
            'productHead' => 'Product',
            'priceHead' => 'Price',
            'qtyHead' => 'Quantity',
            'subTotalHead' => 'Subtotal',
            'tableBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#000','type' => 'solid'),
            'tableHeadBgColor' => '#fff',
            'tableHeadTextColor' => '#000',
            'headingTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '16','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize','weight' => '500'),
            'headingBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 0,'right' => 0,'bottom' => 1,'left' => 0),'color' => '#000','type' => 'solid'),
            'tableRadius' => (object) array('lg' => (object) array('top' => 0,'right' => 0,'bottom' => 0,'left' => 0),'unit' => 'px'),
            'headingPadding' => (object) array('lg' => (object) array('top' => 0,'bottom' => 0,'unit' => 'px')),
            'tableBodyTextColor' => '#000',
            'tableBodyLinkColor' => '#0000FF',
            'tableBodyLinkHoverColor' => '#0000FF',
            'bodyTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '14','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize','weight' => 'normal'),
            'bodyTitleTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '16','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize','weight' => 'normal'),
            'bodyBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 0,'right' => 0,'bottom' => 1,'left' => 0),'color' => '#000','type' => 'solid'),
            'tableBodyBgColor' => '#fff',
            'bodyPadding' => (object) array('lg' => (object) array('left' => 0,'top' => 10,'right' => 10,'bottom' => 10,'unit' => 'px')),
            'quantityBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#e5e5e5','type' => 'solid'),
            'quantityWidth' => '84',
            'quantityBgColor' => '#f8f8f8',
            'quantityRadius' => (object) array('lg' => (object) array('top' => 4,'right' => 4,'bottom' => 4,'left' => 4,'unit' => 'px')),
            'quantityPadding' => (object) array('lg' => (object) array('top' => 5,'right' => 2,'bottom' => 5,'left' => 10,'unit' => 'px')),
            'imageBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#000','type' => 'solid'),
            'imageSize' => '81',
            'imageRadius' => (object) array('lg' => (object) array('top' => 2,'right' => 2,'bottom' => 2,'left' => 2,'unit' => 'px')),
            'removeBtnTextColor' => '#fff',
            'removeBtnPosition' => 'left',
            'removeBtnHoverColor' => '#fff',
            'removeBtnBgColor' => '#222',
            'removeBtnBgHoverColor' => '#000',
            'removeBtnBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#000','type' => 'solid'),
            'removeBtnFontSize' => '19',
            'removeBtnSize' => '19',
            'removeBtnRadius' => (object) array('lg' => (object) array('top' => 10,'right' => 10,'bottom' => 10,'left' => 10,'unit' => 'px')),
            'removeBtnPadding' => (object) array('lg' => (object) array('top' => 0,'right' => 0,'bottom' => 0,'left' => 0,'unit' => 'px')),
            'tableFooterBgColor' => '',
            'tableFooterBgHoverColor' => '',
            'tableFooterBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#000','type' => 'solid'),
            'tableFooterRadius' => (object) array('lg' => (object) array('top' => 0,'right' => 0,'bottom' => 0,'left' => 0,'unit' => 'px')),
            'tableFooterPadding' => (object) array('lg' => (object) array('top' => 10,'right' => 0,'bottom' => 0,'left' => 0,'unit' => 'px')),
            'couponInputPlaceholder' => 'Enter Coupon Code Here.....',
            'couponBtnText' => 'Apply Coupon',
            'couponInputFontSize' => '14',
            'couponInputTextColor' => '#7e7e7e',
            'couponInputBgColor' => '#fff',
            'couponInputBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#8c8f94','type' => 'solid'),
            'couponInputRadius' => (object) array('lg' => (object) array('top' => 4,'right' => 4,'bottom' => 4,'left' => 4,'unit' => 'px')),
            'couponInputPadding' => (object) array('lg' => (object) array('top' => 9,'right' => 10,'bottom' => 9,'left' => 10,'unit' => 'px')),
            'couponBtnTextColor' => '#fff',
            'couponBtnTextHoverColor' => '#fff',
            'couponBtnBgColor' => '#333333',
            'couponBtnBgHoverColor' => '#000',
            'couponBtnBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#000','type' => 'solid'),
            'couponBtnFontSize' => '14',
            'couponBtnRadius' => (object) array('lg' => (object) array('top' => 4,'right' => 4,'bottom' => 4,'left' => 4,'unit' => 'px')),
            'couponBtnPadding' => (object) array('lg' => (object) array('top' => 9,'right' => 10,'bottom' => 9,'left' => 10,'unit' => 'px')),
            'continueShoppingText' => ' Continue Shopping',
            'continueShoppingTextColor' => '#fff',
            'continueShoppingBgColor' => '#333333',
            'continueShoppingTextHoverColor' => '#fff',
            'continueShoppingBgHoverColor' => '#000',
            'continueShoppingBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#000','type' => 'solid'),
            'continueShoppingFontSize' => '14',
            'continueShoppingPadding' => (object) array('lg' => (object) array('top' => 9,'right' => 10,'bottom' => 9,'left' => 10,'unit' => 'px')),
            'continueShoppingRadius' => (object) array('lg' => (object) array('top' => 4,'right' => 4,'bottom' => 4,'left' => 4,'unit' => 'px')),
            'emptyText' => 'Empty Cart',
            'emptyTextColor' => '#fff',
            'emptyBgColor' => '#333333',
            'emptyHoverTextColor' => '#fff',
            'emptyHoverBgColor' => '#000',
            'emptyBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#000','type' => 'solid'),
            'emptyFontSize' => '14',
            'emptyPadding' => (object) array('lg' => (object) array('top' => 9,'right' => 10,'bottom' => 9,'left' => 10,'unit' => 'px')),
            'emptyRadius' => (object) array('lg' => (object) array('top' => 4,'right' => 4,'bottom' => 4,'left' => 4,'unit' => 'px')),
            'updateText' => 'Update Cart',
            'updateTextColor' => '#fff',
            'updateBgColor' => '#333333',
            'updateHoverTextColor' => '#fff',
            'updateHoverBgColor' => '#000',
            'updateBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#000','type' => 'solid'),
            'updateFontSize' => '14',
            'updatePadding' => (object) array('lg' => (object) array('top' => 9,'right' => 10,'bottom' => 9,'left' => 10,'unit' => 'px')),
            'updateRadius' => (object) array('lg' => (object) array('top' => 4,'right' => 4,'bottom' => 4,'left' => 4,'unit' => 'px')),
            'crossSellPosition' => 'bottom',
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
        register_block_type( 'product-blocks/cart-table',
            array(
                'editor_script' => 'wopb-blocks-builder-script',
                'editor_style'  => 'wopb-blocks-editor-css',
                'render_callback' => array( $this, 'content' )
            )
        );
    }

    function woocommerce_clear_cart_url() {
        global $woocommerce;
        if ( isset( $_GET['empty-cart'] ) ) {
            $woocommerce->cart->empty_cart();
            header("Location: ".wc_get_cart_url());
            exit();
        }
      }

    public function content( $attr, $noAjax = false ) {
        if ( function_exists( 'WC' ) && !is_admin() && isset( WC()->customer ) ) {
            do_action('woocommerce_check_cart_items');
            $attr = wp_parse_args($attr, $this->get_attributes());
            $block_name = 'cart-table';
            $wraper_before = $wraper_after = $content = '';

            $wraper_before .= '<div id="' . ($attr['advanceId'] ? $attr['advanceId'] : '') . '"' . ' class="wp-block-product-blocks-' . $block_name . ' wopb-block-' . $attr["blockId"] . ' ' . (isset($attr["className"]) ? $attr["className"] : '') . (isset($attr["align"]) ? ' align' . esc_attr($attr["align"]) : '') . '">';
            $wraper_before .= '<div class="wopb-product-wrapper wopb-cart-table-wrapper">';

            ob_start();
                if (WC()->cart->is_empty()) {
                    wc_get_template('cart/cart-empty.php');
                } else {
                    require_once WOPB_PATH . 'addons/builder/blocks/cart_table/Template.php';
                }
            $content .= ob_get_clean();

            $wraper_after .= '</div>';
            $wraper_after .= '</div>';

            return $wraper_before . $content . $wraper_after;
        }
    }
}