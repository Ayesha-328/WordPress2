<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Checkout_Payment_Method {
    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }

    public function get_attributes() {
        return array(
            'blockId' => '',
            'showTitle' => true,
            'sectionTitle' => 'Payment Method',
            'sectionTitleColor' => '#ffffff',
            'sectionTitleBg' => '#000000',
            'headingAlign' => 'center',
            'sectionTitleTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '20','unit' => 'px',),'height' => (object) array('lg' => '','unit' => 'px',),'decoration' => 'none','transform' => '',),
            'sectionRadius' => (object) array('lg' => (object) array('top' => 0,'right' => 0,'bottom' => 0,'left' => 0,'unit' => 'px',),),
            'sectionTitlePadding' => (object) array('lg' => (object) array('top' => 10,'right' => 0,'bottom' => 10,'left' => 10,'unit' => 'px',),),
            'sectionTitleSpace' => '10',
            'labelColor' => '#343434',
            'labelBg' => '#ebebeb',
            'labelTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '20','unit' => 'px',),'height' => (object) array('lg' => '','unit' => 'px',),'decoration' => 'none','transform' => '',),
            'checkboxSpace' => '0',
            'labelPadding' => (object) array('lg' => (object) array('top' => 5,'right' => 0,'bottom' => 5,'left' => 10,'unit' => 'px',),),
            'bodyColor' => '#343434',
            'bodyBg' => '#f5f5f5',
            'bodyTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '14','unit' => 'px',),'height' => (object) array('lg' => '','unit' => 'px',),'decoration' => 'none','transform' => '',),
            'bodyPadding' => (object) array('lg' => (object) array('top' => 3,'right' => 7,'bottom' => 3,'left' => 10,'unit' => 'px',),),
            'btnFullWIdth' => true,
            'btnAlign' => 'left',
            'btnTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '18','unit' => 'px',),'height' => (object) array('lg' => '','unit' => 'px',),'decoration' => 'none','transform' => '',),
            'btnColor' => '#fff',
            'btnBg' => '#141414',
            'btnBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#cccccc','type' => 'solid',),
            'btnRadius' => (object) array('lg' => (object) array('top' => 4,'right' => 4,'bottom' => 4,'left' => 4,'unit' => 'px',),),
            'btnPadding' => (object) array('lg' => (object) array('top' => 8,'right' => 0,'bottom' => 8,'left' => 0,'unit' => 'px',),),
            'descpColor' => '#4a4a4a',
            'linkColor' => '#51bf28',
            'hoverColor' => '#4a4a4a',
            'descpTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '14','unit' => 'px',),'height' => (object) array('lg' => '','unit' => 'px',),'decoration' => 'none','transform' => '',),
            'descpMargin' => (object) array('lg' => (object) array('top' => 3,'right' => 8,'bottom' => 10,'left' => 0,'unit' => 'px',),),
            'containerBg' => '#ffffff',
            'containerBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#cccccc','type' => 'solid',),
            'containerRadius' => (object) array('lg' => (object) array('top' => 6,'right' => 6,'bottom' => 6,'left' => 6,'unit' => 'px',),),
            'containerPadding' => (object) array('lg' => (object) array('top' => 0,'right' => 0,'bottom' => 0,'left' => 0,'unit' => 'px',),),
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
        register_block_type( 'product-blocks/checkout-payment-method',
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
            $block_name = 'checkout-payment-method';
            $wraper_before = $wraper_after = $content = '';
            
            if ( function_exists( 'WC' ) ) {
                $wraper_before .= '<div id="' . ( $attr['advanceId'] ? $attr['advanceId'] : '' ) . '"'.' class="wp-block-product-blocks-' . $block_name . ' wopb-block-' . $attr["blockId"] . ' ' . ( isset( $attr["className"] ) ? $attr["className"] : '' ) . '">';
                    $wraper_before .= '<div class="wopb-product-wrapper">';
                    
                    if ( ! is_admin() ) {
                        if ( isset( WC()->customer ) ) {
                            ob_start();
                            require_once WOPB_PATH . 'addons/builder/blocks/checkout/payment_method/Template.php';
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