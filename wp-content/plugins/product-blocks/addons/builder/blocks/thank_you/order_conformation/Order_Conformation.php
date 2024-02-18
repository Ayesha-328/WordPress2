<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Order_Conformation {
    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }
    public function get_attributes() {
        return array(
            'blockId' => '',
            'showHead' => true,
            'showMessage' => true,
            'orderHeadText' => 'Order#',
            'orderHeadColor' => '#296e9a',
            'orderHeadTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '42','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => ''),
            'orderHeadAlign' => 'center',
            'orderHeadSpace' => '10',
            'messageText' => 'Thank you. Your order has been received.',
            'messageColor' => '#8b8b8b',
            'messageTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '20','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => ''),
            'orderMessageAlign' => 'center',
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
        register_block_type( 'product-blocks/thankyou-order-conformation',
            array(
                'editor_script' => 'wopb-blocks-builder-script',
                'editor_style' => 'wopb-blocks-editor-css',
                'render_callback' => array( $this, 'content' )
            )
        );
    }

    
    public function content( $attr, $noAjax = false ) {
        $attr = wp_parse_args( $attr, $this->get_attributes() );

        if ( is_checkout() && is_wc_endpoint_url( 'order-received' ) ) {
            $block_name = 'thankyou-order-conformation';
            $wraper_before = $wraper_after = $content = '';

            if ( function_exists( 'WC' ) ) {
                $wraper_before .= '<div id="' . ( $attr['advanceId'] ? $attr['advanceId'] : '' ) . '"'.' class="wp-block-product-blocks-' . $block_name . ' wopb-block-' . $attr["blockId"] . ' ' . ( isset( $attr["className"] ) ? $attr["className"] : '' ) . '">';
                    $wraper_before .= '<div class="wopb-product-wrapper">';
                    
                        if ( ! is_admin() ) {
                            if ( isset( WC()->customer ) ) {
                                ob_start();
                                require_once WOPB_PATH . 'addons/builder/blocks/thank_you/order_conformation/Template.php';
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