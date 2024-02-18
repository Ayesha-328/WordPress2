<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Checkout_Additional_Information {
    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }

    public function get_attributes() {
        return array(
            'blockId' => '',
            'showTitle' => true,
            'sectionTitle' => 'Additional Information',
            'sectionTitleColor' => '#313131',
            'sectionTitleBg' => '',
            'sectionTitleTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '20','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => ''),
            'sectionTitlePadding' => (object) array('lg' => (object) array('top' => 3,'right' => 8,'bottom' => 3,'left' => 8,'unit' => 'px')),
            'sectionTitleSpace' => '5',
            'labelColor' => '#343434',
            'labelTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '14','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => ''),
            'labelMargin' => (object) array('lg' => (object) array('top' => 3,'right' => 8,'bottom' => 3,'left' => 8,'unit' => 'px')),
            'inputColor' => '#000',
            'placeholderColor' => '#898989',
            'inputBgColor' => '#ffffff',
            'inputTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '14','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => ''),
            'inputBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#e0e0e0','type' => 'solid'),
            'inputRadius' => (object) array('lg' => (object) array('top' => 4,'right' => 4,'bottom' => 4,'left' => 4,'unit' => 'px')),
            'inputMargin' => (object) array('lg' => (object) array('top' => 3,'right' => 8,'bottom' => 3,'left' => 3,'unit' => 'px')),
            'inputFocusColor' => '#000',
            'placeholderFocusColor' => '#000',
            'containerBg' => '#f0f0f0',
            'containerBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#e0e0e0','type' => 'solid'),
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
        register_block_type( 'product-blocks/checkout-additional-information',
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
            $wraper_before = $wraper_after = $content = '';
            $block_name = 'checkout-additional-information';
            
            if ( function_exists( 'WC' ) ) {
                $wraper_before .= '<div id="' . ($attr['advanceId'] ? $attr['advanceId'] : '') . '"'.' class="wp-block-product-blocks-'. $block_name . ' wopb-block-' . $attr["blockId"] . ' '.( isset( $attr["className"] ) ? $attr["className"] : '' ) . '">';
                    $wraper_before .= '<div class="wopb-product-wrapper">';
                    
                    if ( ! is_admin() ) {
                        if ( isset( WC()->customer ) ) {
                            ob_start();
                            require_once WOPB_PATH . 'addons/builder/blocks/checkout/additional_information/Template.php';
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