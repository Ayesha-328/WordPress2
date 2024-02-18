<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Cart_Total{
    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }

    public function get_attributes() {
        return array(
            'blockId' => '',
            'cartTotalTxt' => 'Cart Total',
            'subTotalTxt' => 'Subtotal',
            'totalTxt' => 'Total',
            'checkoutTxt' => 'Proceed to checkout',
            'tableBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#000','type' => 'solid',),
            'tableRadius' => (object) array('lg' => (object) array('top' => 4,'right' => 4,'bottom' => 4,'left' => 4,),'unit' => 'px',),
            'tablePadding' => (object) array('lg' => (object) array('top' => 0,'right' => 10,'bottom' => 10,'left' => 10,'unit' => 'px',),),
            'headerTextColor' => '#595959',
            'headerTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '22','unit' => 'px',),'height' => (object) array('lg' => '','unit' => 'px',),'decoration' => 'none','transform' => 'capitalize','weight' => '400',),
            'headerBgColor' => '#fff',
            'headerBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 0,'right' => 0,'bottom' => 1,'left' => 0,),'color' => '#8c8f94','type' => 'solid',),
            'headerRadius' => (object) array('lg' => (object) array('top' => 0,'right' => 0,'bottom' => 0,'left' => 0,),'unit' => 'px',),
            'headerPadding' => (object) array('lg' => (object) array('top' => 1,'right' => 0,'bottom' => 1,'left' => 0,'unit' => 'px',),),
            'titleTextColor' => '#3e3e3e',
            'priceTextColor' => '#444444',
            'titleTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '14','unit' => 'px',),'decoration' => 'none','transform' => 'capitalize','weight' => 'normal',),
            'priceTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '14','unit' => 'px',),'decoration' => 'none','transform' => 'capitalize','weight' => 'bold',),
            'bodyBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 0,'right' => 0,'bottom' => 1,'left' => 0,),'color' => '#ebebeb','type' => 'solid',),
            'tableBodyBgColor' => '#fff',
            'tableBodyRadius' => (object) array('lg' => (object) array('top' => 4,'right' => 4,'bottom' => 4,'left' => 4,),'unit' => 'px',),
            'bodyPadding' => (object) array('lg' => (object) array('top' => 1,'right' => 0,'bottom' => 1,'left' => 0,'unit' => 'px',),),
            'bodySpacing' => (object) array('lg' => (object) array('top' => 5,'right' => 0,'bottom' => 5,'left' => 0,'unit' => 'px',),),
            'checkoutText' => 'Proceed to Checkout',
            'checkoutTextColor' => '#fff',
            'checkoutHoverTextColor' => '#fff',
            'checkoutBgColor' => '#333333',
            'checkoutHoverBgColor' => '#000',
            'checkoutTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '16','unit' => 'px',),'height' => (object) array('lg' => '','unit' => 'px',),'decoration' => 'none','transform' => 'capitalize','weight' => '500',),
            'checkoutBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#333333','type' => 'solid',),
            'checkoutMargin' => (object) array('lg' => (object) array('top' => 0,'right' => 0,'bottom' => 0,'left' => 0,'unit' => 'px',),),
            'checkoutPadding' => (object) array('lg' => (object) array('top' => 6,'right' => 21,'bottom' => 6,'left' => 21,'unit' => 'px',),),
            'checkoutRadius' => (object) array('lg' => (object) array('top' => 4,'right' => 4,'bottom' => 4,'left' => 4,),'unit' => 'px',),
            'advanceId' => '',
            'advanceZindex' => '',
            'wrapMargin' => (object) array('lg' => (object) array('top' => '','bottom' => '','unit' => 'px',),),
            'wrapOuterPadding' => (object) array('lg' => (object) array('top' => '','bottom' => '','left' => '','right' => '','unit' => 'px',),),
            'wrapBg' => (object) array('openColor' => 0,'type' => 'color','color' => '#f5f5f5',),
            'wrapBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4','type' => 'solid',),
            'wrapShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4',),
            'wrapRadius' => (object) array('lg' => '','unit' => 'px',),
            'wrapHoverBackground' => (object) array('openColor' => 0,'type' => 'color','color' => '#ff5845',),
            'wrapHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4','type' => 'solid',),
            'wrapHoverRadius' => (object) array('lg' => '','unit' => 'px',),
            'wrapHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4',),
            'wrapInnerPadding' => (object) array('lg' => (object) array('unit' => 'px',),),
            'hideExtraLarge' => false,
            'hideDesktop' => false,
            'hideTablet' => false,
            'hideMobile' => false,
            'advanceCss' => '',
        );
    }

    public function register() {
        register_block_type( 'product-blocks/cart-total',
            array(
                'editor_script' => 'wopb-blocks-builder-script',
                'editor_style'  => 'wopb-blocks-editor-css',
                'render_callback' => array( $this, 'content' )
            )
        );
    }

    public function content( $attr, $noAjax = false ) {
        $block_name = 'cart-total';
        $wraper_before = $wraper_after = $content = '';
        $attr = wp_parse_args( $attr, $this->get_attributes() );
        
        if ( function_exists( 'WC' ) ) {
            $wraper_before .= '<div ' . ( $attr['advanceId'] ? 'id="' . $attr['advanceId'] . '" ' : '') . ' class="wp-block-product-blocks-' . $block_name . ' wopb-block-' . $attr["blockId"] . ' ' . ( isset( $attr["className"] ) ? $attr["className"] : '' ).'">';
                $wraper_before .= '<div class="wopb-product-wrapper">';
                
                if ( ! is_admin() ) {
                    if ( isset( WC()->customer ) ) {
                        ob_start();
                        if ( ! WC()->cart->is_empty() ) {
                            require_once WOPB_PATH . 'addons/builder/blocks/cart_total/Template.php';
                        }
                        $content .= ob_get_clean();
                    }
                }

                $wraper_after .= '</div>';
            $wraper_after .= '</div> ';
        }
        return $wraper_before.$content.$wraper_after;
    }
}