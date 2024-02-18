<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Thankyou_Order_Details {
    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }

    public function get_attributes() {
        return array(
            'blockId' => '',
            'downloadText' => 'Downloads',
            'orderDetailsText' => 'Order Details',
            'titleColor' => '#484c7b',
            'titleTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '37','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize','weight' => '600'),
            'tableBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 0,'right' => 0,'bottom' => 0,'left' => 0),'color' => '#cccccc','type' => 'solid'),
            'tableRadius' => (object) array('lg' => (object) array('top' => 0,'right' => 0,'bottom' => 0,'left' => 0,'unit' => 'px')),
            'productText' => 'Product',
            'totalText' => 'Total',
            'headColor' => '#ffffff',
            'headBg' => (object) array('openColor' => 1,'type' => 'color','color' => '#000000'),
            'headTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '16','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize','weight' => '500'),
            'headBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 0,'right' => 0,'bottom' => 0,'left' => 0),'color' => '#cccccc','type' => 'solid'),
            'headPadding' => (object) array('lg' => (object) array('top' => 5,'right' => 0,'bottom' => 5,'left' => 10,'unit' => 'px')),
            'headAlign' => 'left',
            'bodyTextColor' => '#2c2c2c',
            'bodyBgColor' => (object) array('openColor' => 0,'type' => 'color','color' => ''),
            'bodyLinkColor' => '#2c2c2c',
            'bodyLinkHoverColor' => '#2c2c2c',
            'bodyTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '16','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize','weight' => '500'),
            'bodyBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 0,'right' => 0,'bottom' => 1,'left' => 0),'color' => '#e5e5e5','type' => 'solid'),
            'bodyPadding' => (object) array('lg' => (object) array('top' => 5,'right' => 0,'bottom' => 5,'left' => 10,'unit' => 'px')),
            'bodyAlign' => 'left',
            'tableBtnDivider' => '',
            'tableBtnColor' => '#3b3b3b',
            'tableBtnBgColor' => (object) array('openColor' => 1,'type' => 'color','color' => '#f4f4f4'),
            'tableBtnBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 0,'right' => 0,'bottom' => 0,'left' => 0),'color' => '#cccccc','type' => 'solid'),
            'tableBtnShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'tableBtnRadius' => (object) array('lg' => (object) array('top' => 0,'right' => 0,'bottom' => 0,'left' => 0,'unit' => 'px')),
            'tableBtnPadding' => (object) array('lg' => (object) array('top' => 10,'right' => 10,'bottom' => 10,'left' => 10,'unit' => 'px')),
            'tableBtnHoverColor' => '#2c2c2c',
            'tableBtnBgHoverColor' => (object) array('openColor' => 0,'type' => 'color','color' => ''),
            'tableBtnHoverBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 0,'right' => 0,'bottom' => 0,'left' => 0),'color' => '#cccccc','type' => 'solid'),
            'tableBtnHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'tableBtnHoverRadius' => (object) array('lg' => (object) array('top' => 0,'right' => 0,'bottom' => 0,'left' => 0,'unit' => 'px')),
            'tableBtnHoverPadding' => (object) array('lg' => (object) array('top' => 10,'right' => 10,'bottom' => 10,'left' => 10,'unit' => 'px')),
            'subTotalText' => 'Subtotal',
            'shippingText' => 'Shipping Cost:',
            'payMethodText' => 'Payment Method',
            'footTotalText' => 'Total',
            'footColor' => '#272727',
            'footBg' => (object) array('openColor' => 0,'type' => 'color','color' => ''),
            'footTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '16','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize','weight' => '500'),
            'footBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 0,'right' => 0,'bottom' => 1,'left' => 0),'color' => '#e5e5e5','type' => 'solid'),
            'footPadding' => (object) array('lg' => (object) array('top' => 5,'right' => 0,'bottom' => 5,'left' => 10,'unit' => 'px')),
            'footAlign' => 'left',
            'containerBg' => (object) array('openColor' => 0,'type' => 'color','color' => ''),
            'containerBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#cccccc','type' => 'solid'),
            'containerRadius' => (object) array('lg' => (object) array('top' => 0,'right' => 0,'bottom' => 0,'left' => 0,'unit' => 'px')),
            'containerPadding' => (object) array('lg' => (object) array('top' => 0,'right' => 0,'bottom' => 0,'left' => 0,'unit' => 'px')),
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
        register_block_type( 'product-blocks/thankyou-order-details',
            array(
                'editor_script' => 'wopb-blocks-builder-script',
                'editor_style'  => 'wopb-blocks-editor-css',
                'render_callback' => array( $this, 'content' )
            )
        );
    }

    
    public function content( $attr, $noAjax = false ) {
        $attr = wp_parse_args( $attr, $this->get_attributes() );

        if ( is_checkout() && is_wc_endpoint_url( 'order-received' ) ) {
            $block_name = 'thankyou-order-details';
            $wraper_before = $wraper_after = $content = '';
            
            if ( function_exists( 'WC' ) ) {
                $wraper_before .= '<div id="' . ( $attr['advanceId'] ? $attr['advanceId'] : '' ) . '"'.' class="wp-block-product-blocks-' . $block_name . ' wopb-block-' . $attr["blockId"] . ' ' . ( isset( $attr["className"] ) ? $attr["className"] : '' ) . '">';
                    $wraper_before .= '<div class="wopb-product-wrapper">';
                    
                        if ( ! is_admin() ) {
                            if ( isset( WC()->customer ) ) {
                                ob_start();
                                require_once WOPB_PATH . 'addons/builder/blocks/thank_you/order_details/Template.php';
                                $content .= ob_get_clean();
                            }
                        }
                        
                    $wraper_after .= '</div>';
                $wraper_after .= '</div>';
            }

            return $wraper_before.$content.$wraper_after;
        }
    }

}