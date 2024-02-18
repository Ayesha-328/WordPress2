<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Product_Cart{

    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }

    public function get_attributes() {
        return array(
            'blockId' => '',
            'preview' => 'simple',
            'showQuantity' => true,
            'showCampare' => false,
            'showWishlist' => false,
            'addtocartAlignment' => (object) array('lg' => 'left'),
            'quantityBtnPosition' => 'right',
            'cartText' => 'Add to Cart',
            'showQuantityBtn' => false,
            'quantityColor' => '',
            'quantityBg' => '#e4e4e4',
            'quantityBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#f5f5f5','type' => 'solid'),
            'quantityRadius' => (object) array('lg' => '0','unit' => 'px'),
            'quantityPadding' => (object) array('lg' => (object) array('top' => '6','bottom' => '6','left' => '15','right' => '0','unit' => 'px')),
            'plusMinusColor' => '#fff',
            'plusMinusBg' => '#000',
            'plusMinusHoverColor' => '#fff',
            'plusMinusHoverBg' => '#222',
            'plusMinusSize' => '10',
            'plusMinusBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'plusMinusRadius' => (object) array('lg' => '0','unit' => 'px'),
            'plusMinusPadding' => (object) array('lg' => (object) array('top' => '2','bottom' => '2','left' => '10','right' => '10','unit' => 'px')),
            'btnTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => 15,'unit' => 'px'),'height' => (object) array('lg' => 20,'unit' => 'px'),'spacing' => (object) array('lg' => 0,'unit' => 'px'),'transform' => '','weight' => '','decoration' => 'none','family' => ''),
            'btnColor' => '#fff',
            'btnBgColor' => (object) array('openColor' => 1,'type' => 'color','color' => '#000000'),
            'btnBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'btnRadius' => (object) array('lg' => '','unit' => 'px'),
            'btnShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'btnHoverColor' => '#fff',
            'btnBgHoverColor' => (object) array('openColor' => 1,'type' => 'color','color' => '#111'),
            'btnHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'btnHoverRadius' => (object) array('lg' => '','unit' => 'px'),
            'btnHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'btnSacing' => (object) array('lg' => (object) array('top' => 0,'bottom' => 0,'left' => 0,'right' => 0,'unit' => 'px')),
            'btnPadding' => (object) array('lg' => (object) array('top' => '9','bottom' => '9','left' => '15','right' => '15','unit' => 'px')),
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
        register_block_type( 'product-blocks/product-cart',
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
        $block_name = 'product-cart';
        $wraper_before = $wraper_after = $content = '';
        $attr = wp_parse_args( $attr, $this->get_attributes() );

        if ( ! empty( $product ) ) {
            global $productx_cart;
            $productx_cart = $attr['cartText'];
            
            if ( wopb_function()->isPro() ) {
                $methods = get_class_methods( wopb_pro_function() );
                if ( in_array( 'is_simple_preorder', $methods ) ) {
                    if ( wopb_pro_function()->is_simple_preorder() && wopb_function()->get_setting('preorder_add_to_cart_button_text') ) {
                        $productx_cart = wopb_function()->get_setting( 'preorder_add_to_cart_button_text' );
                    }
                }
                if ( in_array( 'is_simple_backorder', $methods ) ) {
                    if ( wopb_pro_function()->is_simple_backorder() && wopb_function()->get_setting('backorder_add_to_cart_button_text') ) {
                        $productx_cart = wopb_function()->get_setting( 'backorder_add_to_cart_button_text' );
                    }
                }
            }

            $cart_text = function() {
                global $productx_cart;
                return $productx_cart;
            };

            $wraper_before .= '<div '.($attr['advanceId']?'id="'.esc_attr($attr['advanceId']).'" ':'').' class="wp-block-product-blocks-'.esc_attr($block_name).' wopb-block-'.esc_attr($attr["blockId"]).' '.(isset($attr["className"])?esc_attr($attr["className"]):'').'">';


            add_filter( 'woocommerce_product_single_add_to_cart_text', $cart_text );

            if ( ! $attr['showQuantity'] ) {
                add_filter( 'woocommerce_is_sold_individually', [ $this, 'remove_quantity_fields'], 10, 2 );
            }

            ob_start();
            echo '<div class="wopb-product-wrapper wopb-builder-cart" data-type="'. ( $attr['showQuantity'] && $attr['showQuantityBtn'] ? esc_attr($attr['quantityBtnPosition']) : '' ).'">';
            $this->remove_qty_element();
            woocommerce_template_single_add_to_cart();
            do_action('wopb_after_builder_add_cart_button');
            echo '</div>';
            $form = ob_get_clean();
		    $content .= str_replace( 'single_add_to_cart_button', 'single_add_to_cart_button wopb-cart-button', $form );

            remove_filter( 'woocommerce_product_single_add_to_cart_text', $cart_text );

            $wraper_after .= '</div>';
        }

        return $wraper_before.$content.$wraper_after;
    }

    public function remove_qty_element() {
        remove_action( 'woocommerce_before_quantity_input_field', 'botiga_woocommerce_before_quantity_input_field' );
        remove_action( 'woocommerce_before_quantity_input_field', 'baseket_minus_btn' );
        remove_action( 'woocommerce_before_quantity_input_field', 'plant_minus_btn' );

        remove_action( 'woocommerce_before_add_to_cart_quantity', 'big_store_display_quantity_minus' );

        remove_action( 'woocommerce_after_quantity_input_field', 'botiga_woocommerce_after_quantity_input_field' );
        remove_action( 'woocommerce_after_quantity_input_field', 'baseket_plus_btn' );
        remove_action( 'woocommerce_after_quantity_input_field', 'plant_plus_btn' );

        remove_action( 'woocommerce_after_add_to_cart_quantity', 'big_store_display_quantity_plus' );
    }

    public function remove_quantity_fields( $return, $product ) {
        return true;
    }
}