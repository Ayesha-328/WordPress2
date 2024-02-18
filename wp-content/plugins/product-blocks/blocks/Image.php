<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Image{
    public function __construct() {
        add_action('init', array($this, 'register'));
    }
    public function get_attributes() {
        return array (
            'blockId' => '',
            'imageUpload' => (object) array('id' => '999999','url' => WOPB_URL.'assets/img/wopb-placeholder.jpg'),
            'linkType' => 'link',
            'imgLink' => '',
            'linkTarget' => '_blank',
            'imgAlt' => 'Image',
            'imgAlignment' => (object) array('lg' => 'left'),
            'imgWidth' => (object) array('lg' => '','unit' => 'px'),
            'imgHeight' => (object) array('lg' => '','unit' => 'px'),
            'imgAnimation' => 'none',
            'imgGrayScale' => (object) array('lg' => '0','unit' => '%'),
            'imgHoverGrayScale' => (object) array('lg' => '0','unit' => '%'),
            'imgRadius' => (object) array('lg' => '','unit' => 'px'),
            'imgHoverRadius' => (object) array('lg' => '','unit' => 'px'),
            'imgShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'imgHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'imgMargin' => (object) array('lg' => ''),
            'imgOverlay' => false,
            'imgOverlayType' => 'default',
            'overlayColor' => (object) array('openColor' => 1,'type' => 'color','color' => '#0e1523'),
            'imgOpacity' => 0.69999999999999996,
            'headingText' => 'This is a Heading Example',
            'headingEnable' => false,
            'headingColor' => '',
            'alignment' => (object) array('lg' => 'left'),
            'headingTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '14','unit' => 'px'),'height' => (object) array('lg' => '24','unit' => 'px'),'decoration' => '','transform' => '','family' => '','weight' => ''),
            'headingMargin' => (object) array('lg' => (object) array('top' => '10','bottom' => '','left' => '','right' => '','unit' => 'px')),
            'buttonEnable' => false,
            'btnText' => 'Free Download',
            'btnLink' => '#',
            'btnTarget' => '_blank',
            'btnPosition' => 'centerCenter',
            'btnTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => 14,'unit' => 'px'),'height' => (object) array('lg' => 20,'unit' => 'px'),'spacing' => (object) array('lg' => 0,'unit' => 'px'),'transform' => 'capitalize','weight' => '','decoration' => 'none','family' => ''),
            'btnColor' => '#fff',
            'btnBgColor' => (object) array('openColor' => 1,'type' => 'color','color' => '#ff5845'),
            'btnBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'btnRadius' => (object) array('lg' => '2','unit' => 'px'),
            'btnShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'btnHoverColor' => '#fff',
            'btnBgHoverColor' => (object) array('openColor' => 1,'type' => 'color','color' => '#1239e2'),
            'btnHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'btnHoverRadius' => (object) array('lg' => '','unit' => 'px'),
            'btnHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'btnSacing' => (object) array('lg' => (object) array('top' => 0,'bottom' => 0,'left' => 0,'right' => 0,'unit' => 'px')),
            'btnPadding' => (object) array('lg' => (object) array('top' => '6','bottom' => '6','left' => '12','right' => '12','unit' => 'px')),
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
        register_block_type( 'product-blocks/image',
            array(
                'editor_script' => 'wopb-blocks-editor-script',
                'editor_style'  => 'wopb-blocks-editor-css',
                'render_callback' =>  array( $this, 'content' )
            )
        );
    }

    public function content( $attr, $noAjax = false ) {
        $attr = wp_parse_args( $attr, $this->get_attributes() );
        $wraper_before = '';
        $block_name = 'image';
        $attr['headingShow'] = true;
        
        $wraper_before .= '<div '.($attr['advanceId']?'id="'.esc_attr($attr['advanceId']).'" ':'').' class="wp-block-product-blocks-'.esc_attr($block_name).' wopb-block-'.esc_attr($attr["blockId"]).' '.(isset($attr["className"])?esc_attr($attr["className"]):''). (isset($attr["align"])? ' align' .esc_attr($attr["align"]):'') . '">';
            $wraper_before .= '<div class="wopb-block-wrapper">';
                $wraper_before .= '<figure class="wopb-image-block-wrapper">';
                    $wraper_before .= '<div class="wopb-image-block wopb-image-block-'.esc_attr($attr['imgAnimation']).($attr["imgOverlay"] ? ' wopb-image-block-overlay wopb-image-block-'.esc_attr($attr["imgOverlayType"]) : '' ).'">';
                        // Single Image
                        $img_arr = (array)$attr['imageUpload'];
                        if ( ! empty( $img_arr ) ) {
                            if ( $attr['linkType'] == 'link' && $attr['imgLink'] ) {
                                $wraper_before .= '<a href="'.esc_url($attr['imgLink']).'" target="'.esc_attr($attr['linkTarget']).'"><img class="wopb-image" src="'.esc_url($img_arr['url']).'" alt="'.esc_attr($attr['imgAlt']).'" /></a>';
                            } else {
                                $wraper_before .= '<img class="wopb-image" src="'.esc_url($img_arr['url']).'" alt="'.esc_attr($attr['imgAlt']).'" />';
                            }
                        }
                        if ( $attr['btnLink'] && ($attr['linkType'] == 'button') ) {
                            $wraper_before .= '<div class="wopb-image-button wopb-image-button-'.esc_attr($attr['btnPosition']).'"><a href="'.esc_url($attr['btnLink']).'" target="'.esc_attr($attr['btnTarget']).'">'.esc_html($attr['btnText']).'</a></div>';
                        }
                    $wraper_before .= '</div>';
                    if ( $attr['headingEnable'] == 1 ) {
                        $wraper_before .= '<figcaption class="wopb-image-caption">'.esc_html($attr['headingText']).'</figcaption>';
                    }
                $wraper_before .= '</figure>';
            $wraper_before .= '</div>';
        $wraper_before .= '</div>';

        return $wraper_before;
    }

}