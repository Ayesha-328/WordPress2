<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Free_Shipping_Progress_Bar{
    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }

    public function get_attributes() {
        return array(
            'blockId' => '',
            'showProgress' => true,
            'progressTop' => false,
            'beforePriceText' => 'Add',
            'afterPriceText' => 'to cart and get Free shipping!',
            'headerTextColor' => 'black',
            'priceColor' => '#4bbe18',
            'bodyBgColor' => '',
            'headerTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '16','unit' => 'px',),'height' => (object) array('lg' => '','unit' => 'px',),'decoration' => 'none','transform' => 'inherit','family' => 'Roboto','weight' => 'normal',),
            'bodyBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 2,'right' => 2,'bottom' => 2,'left' => 2,),'color' => '#d0d0d0','type' => 'dashed',),
            'bodyRadius' => (object) array('lg' => '0','unit' => 'px',),
            'bodyPadding' => (object) array('lg' => (object) array('top' => 30,'right' => 46,'bottom' => 30,'left' => 30,'unit' => 'px',),),
            'progressBarHeight' => '7',
            'emptyBgColor' => '#e0e0e0',
            'filledBgColor' => '#85d11c',
            'progressBarBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 0,'right' => 0,'bottom' => 0,'left' => 0,),'color' => 'black','type' => 'solid',),
            'progressBarRadius' => (object) array('lg' => '0','unit' => 'px',),
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
        register_block_type( 'product-blocks/free-shipping-progress-bar',
            array(
                'editor_script' => 'wopb-blocks-builder-script',
                'editor_style'  => 'wopb-blocks-editor-css',
                'render_callback' => array( $this, 'content' )
            )
        );
    }
    
    public function content( $attr, $noAjax = false ) {
        $attr = wp_parse_args( $attr, $this->get_attributes() );
        $free_shipping_instance_id = $this->check_free_shipping();
        
        if ( ! empty( $free_shipping_instance_id ) ) {
            $block_name = 'free_shipping_progress_bar';
            $wraper_before = $wraper_after = $content = '';
            
            if ( function_exists( 'WC' ) ) {
                $wraper_before .= '<div id="' . ( $attr['advanceId'] ? $attr['advanceId'] : '' ) . '"' . ' class="wp-block-product-blocks-' . $block_name . ' wopb-block-' . $attr["blockId"] . ' ' . ( isset( $attr["className"] ) ? $attr["className"] : '' ) . '">';
                    $wraper_before .= '<div class="wopb-product-wrapper">';
                    if ( ! is_admin() ) {
                        if ( isset( WC()->customer ) ) {
                            ob_start();
                            if ( ! WC()->cart->is_empty() ) {
                                require_once WOPB_PATH . 'addons/builder/blocks/free_shipping_progress_bar/Template.php';
                            }
                            $content .= ob_get_clean();
                        }
                    }
                    $wraper_after .= '</div> ';
                $wraper_after .= '</div> ';
            }

            return $wraper_before . $content . $wraper_after;
        }
    }

    public function check_free_shipping() {
        if ( WC()->cart ) {
            $instance_id = '';
            $shipping_packages = WC()->cart->get_shipping_packages();
            $shipping_zone = wc_get_shipping_zone( reset( $shipping_packages ) );
            $zone_id = $shipping_zone->get_id();
            $available_methods = \WC_Data_Store::load( 'shipping-zone' )->get_methods( $zone_id, '' );
            
            foreach ( $available_methods as $method ) {
                if ( $method->method_id == 'free_shipping' && $method->is_enabled ) {
                    $instance_id = $method->instance_id;
                    break;
                }
            }

            return $instance_id;
        }
    }
}