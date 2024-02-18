<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Product_Tab{

    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }

    public function get_attributes() {
        return array (
            'blockId' => '',
            'showDescription' => true,
            'showAddInfo' => true,
            'showReview' => true,
            'navDevider' => '',
            'navTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '18','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => '','transform' => '','family' => '','weight' => ''),
            'navtextColor' => '',
            'navbgcolor' => '',
            'navhoverBgColor' => '',
            'navpadding' => (object) array('lg' => (object) array('unit' => 'px')),
            'showDesc' => true,
            'descText' => 'Description',
            'descHeadingColor' => ' ',
            'descColor' => '',
            'descHeadingTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => '','transform' => '','family' => '','weight' => ''),
            'descTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => '','transform' => '','family' => '','weight' => ''),
            'showAddInfoHeading' => true,
            'infoPadding' => (object) array('lg' => (object) array('unit' => 'px')),
            'headingText' => 'Product Tab',
            'headingColor' => '',
            'HeadingTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => '','transform' => '','family' => '','weight' => ''),
            'labelTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => '','transform' => '','family' => '','weight' => ''),
            'labelColor' => '',
            'labelBg' => '',
            'addInfoValueBg' => '',
            'addInoValueColor' => '',
            'addInfoValueTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => '','transform' => '','family' => '','weight' => ''),
            'reviewHeading' => true,
            'reviewAuthor' => false,
            'headingTypography' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => '','transform' => '','family' => '','weight' => ''),
            'authorTypography' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => '','transform' => '','family' => '','weight' => ''),
            'dateTypography' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => '','transform' => '','family' => '','weight' => ''),
            'descTypography' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => '','transform' => '','family' => '','weight' => ''),
            'authorSize' => '48',
            'reviewFormLabelTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => '','transform' => '','family' => '','weight' => ''),
            'reviewFormInputBorderColor' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'reviewFormInputTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => '','transform' => '','family' => '','weight' => ''),
            'reviewFormSpace' => '',
            'reviewFormRadius' => '',
            'reviewFormInputPadding' => (object) array('lg' => (object) array('unit' => 'px')),
            'btnTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'spacing' => (object) array('lg' => 0,'unit' => 'px'),'transform' => '','weight' => '','decoration' => '','family' => ''),
            'btnColor' => '#fff',
            'btnBgColor' => (object) array('openColor' => 1,'type' => 'color','color' => '#ff5845'),
            'btnBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'btnRadius' => (object) array('lg' => '2','unit' => 'px'),
            'btnShadow' => '',
            'btnPadding' => (object) array('lg' => (object) array('top' => '6','bottom' => '6','left' => '12','right' => '12','unit' => 'px')),
            'btnSpacing' => (object) array('lg' => (object) array('top' => '6','bottom' => '6','left' => '12','right' => '12','unit' => 'px')),
            'btnHoverColor' => '#fff',
            'btnBgHoverColor' => (object) array('openColor' => 1,'type' => 'color','color' => '#1239e2'),
            'btnHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'btnHoverRadius' => (object) array('lg' => '','unit' => 'px'),
            'btnHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
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
        register_block_type( 'product-blocks/product-tab',
            array(
                'editor_script' => 'wopb-blocks-builder-script',
                'editor_style'  => 'wopb-blocks-editor-css',
                'render_callback' =>  array( $this, 'content' )
            )
        );
    }

    public function content( $attr ) {
        global $product;
        $product = wc_get_product();
        $block_name = 'product-tab';
        $wraper_before = $wraper_after = $content = '';
        $attr = wp_parse_args( $attr, $this->get_attributes() );        
        
        if ( ! empty( $product ) ) {
            global $productx_tab;
            $productx_tab['desc'] = $attr['showDescription'];
            $productx_tab['info'] = $attr['showAddInfo'];
            $productx_tab['review'] = $attr['showReview'];
            $hide_description = function( $tabs ) {
                global $productx_tab;
                if (!$productx_tab['desc']) {
                    unset( $tabs['description'] );
                }
                if (!$productx_tab['info']) {
                    unset( $tabs['additional_information'] );
                }
                if (!$productx_tab['review']) {
                    unset( $tabs['reviews'] );
                }
                return $tabs;
            };

            $productx_tab['add_heading'] = $attr['showAddInfoHeading'];
            $productx_tab['add_text'] = esc_html($attr['headingText']);
            $additional_heading = function() {
                global $productx_tab;
                return $productx_tab['add_heading'] ? $productx_tab['add_text'] : '';
            };

            $productx_tab['desc_heading'] = $attr['showDesc'];
            $productx_tab['desc_text'] = esc_html($attr['descText']);
            $description_heading = function() {
                global $productx_tab;
                return $productx_tab['desc_heading'] ? $productx_tab['desc_text'] : '';
            };
            
            $wraper_before .= '<div '.($attr['advanceId']?'id="'.esc_attr($attr['advanceId']).'" ':'').' class="wp-block-product-blocks-'.esc_attr($block_name).' wopb-block-'.esc_attr($attr["blockId"]).' '.(isset($attr["className"])?esc_attr($attr["className"]):''). (isset($attr["align"])? ' align' .esc_attr($attr["align"]):'') . '">';
            $wraper_before .= '<div class="wopb-product-wrapper">';
            $wraper_before .= '<div class="product">';

            add_filter( 'woocommerce_product_tabs', $hide_description );
            add_filter( 'woocommerce_product_additional_information_heading', $additional_heading );
            add_filter( 'woocommerce_product_description_heading', $description_heading );

            ob_start();
            woocommerce_output_product_data_tabs();
            $content .= ob_get_clean();
            
            remove_filter( 'woocommerce_product_tabs', $hide_description );
            remove_filter( 'woocommerce_product_additional_information_heading', $additional_heading );
            remove_filter( 'woocommerce_product_description_heading', $description_heading );
            $wraper_after .= '</div>';
            $wraper_after .= '</div>';
            $wraper_after .= '</div>';
        }

        return $wraper_before.$content.$wraper_after;
    }

}