<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Product_Review{

    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }

    public function get_attributes() {
        return array(
            'blockId' => '',
            'reviewHeading' => false,
            'reviewAuthor' => false,
            'headingTypography' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '24','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => '','family' => '','weight' => ''),
            'headingSpace' => 10,
            'authorTypography' => (object) array(),
            'dateTypography' => (object) array(),
            'descTypography' => (object) array(),
            'authorSize' => '48',
            'authorSpace' => 15,
            'reviewFormLabelTypo' => (object) array(),
            'reviewFormInputTypo' => (object) array(),
            'reviewFormSpace' => 10,
            'reviewFormInputFocus' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'reviewFormInputBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'reviewFormRadius' => 4,
            'reviewFormInputPadding' => (object) array('lg' => (object) array('top' => '','bottom' => '','unit' => 'px')),
            'formSpace' => 40,
            'formBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'formRadius' => '',
            'reviewFormPadding' => (object) array('lg' => (object) array('top' => '','bottom' => '','left' => '','right' => '','unit' => 'px')),
            'btnTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => 14,'unit' => 'px'),'height' => (object) array('lg' => 20,'unit' => 'px'),'spacing' => (object) array('lg' => 0,'unit' => 'px'),'transform' => 'capitalize','weight' => '','decoration' => 'none','family' => ''),
            'btnColor' => '',
            'btnBgColor' => (object) array('openColor' => 0,'type' => 'color','color' => '#ff5845'),
            'btnBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'btnRadius' => (object) array('lg' => '','unit' => 'px'),
            'btnShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'btnHoverColor' => '',
            'btnBgHoverColor' => (object) array('openColor' => 0,'type' => 'color','color' => '#1239e2'),
            'btnHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'btnHoverRadius' => (object) array('lg' => '','unit' => 'px'),
            'btnHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'btnSacing' => (object) array('lg' => (object) array('top' => 0,'bottom' => 0,'left' => 0,'right' => 0,'unit' => 'px')),
            'btnPadding' => (object) array('lg' => (object) array('top' => '3','bottom' => '3','left' => '8','right' => '8','unit' => 'px')),
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
        register_block_type( 'product-blocks/product-review',
            array(
                'editor_script' => 'wopb-blocks-builder-script',
                'editor_style'  => 'wopb-blocks-editor-css',
                'render_callback' =>  array( $this, 'content' )
            )
        );
    }

    public function content( $attr ) {
        global $product;
        global $comment;
        $product = wc_get_product();
        $block_name = 'product-review';
        $wraper_before = $wraper_after = $content = '';
        $attr = wp_parse_args( $attr, $this->get_attributes() );

        if ( ! empty( $product ) ) {
            $wraper_before .= '<div '.($attr['advanceId']?'id="'.esc_attr($attr['advanceId']).'" ':'').' class="wp-block-product-blocks-'.esc_attr($block_name).' wopb-block-'.esc_attr($attr["blockId"]).' '.(isset($attr["className"])?esc_attr($attr["className"]):'').'">';
            $wraper_before .= '<div class="wopb-product-wrapper">';

            ob_start();
            comments_template();
            $content .= ob_get_clean();

            $wraper_after .= '</div>';
            $wraper_after .= '</div>';
        }

        return $wraper_before.$content.$wraper_after;
    }

}