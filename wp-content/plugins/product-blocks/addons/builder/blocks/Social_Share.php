<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Social_Share {
    public function __construct() {
        add_action('init', array($this, 'register'));
    }
    public function get_attributes() {
        return array(
            'blockId' => '',
            'repeatableSocialShare' => array (
              0 => array('type' => 'facebook','enableLabel' => true,'label' => 'Facebook','iconColor' => '#fff','iconColorHover' => '#d2d2d2','shareBg' => '#4267B2','bgHoverColor' => '#f5f5f5'),
              1 => array('type' => 'twitter','enableLabel' => true,'label' => 'Twitter','iconColor' => '#fff','iconColorHover' => '#d2d2d2','shareBg' => '#1DA1F2','bgHoverColor' => '#f5f5f5'),
              2 => array('type' => 'pinterest','enableLabel' => true,'label' => 'Pinterest','iconColor' => '#fff','iconColorHover' => '#d2d2d2','shareBg' => '#E60023','bgHoverColor' => '#f5f5f5'),
              3 => array('type' => 'linkedin','enableLabel' => true,'label' => 'Linkedin','iconColor' => '#fff','iconColorHover' => '#d2d2d2','shareBg' => '#0A66C2','bgHoverColor' => '#f5f5f5'),
              4 => array('type' => 'mail','enableLabel' => true,'label' => 'Mail','iconColor' => '#fff','iconColorHover' => '#d2d2d2','shareBg' => '#EA4335','bgHoverColor' => '#f5f5f5'),
             ),
            'shareItemTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '18','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => '','family' => '','weight' => ''),
            'shareIconSize' => (object) array('lg' => '20','unit' => 'px'),
            'shareBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#c3c3c3','type' => 'solid'),
            'shareRadius' => (object) array('lg' => '','unit' => 'px'),
            'disInline' => true,
            'itemPadding' => (object) array('lg' => (object) array('top' => '15','bottom' => '15','left' => '15','right' => '15','unit' => 'px')),
            'itemSpacing' => (object) array('lg' => (object) array('top' => '5','bottom' => '5','left' => '5','right' => '5','unit' => 'px')),
            'itemContentAlign' => 'flex-start',
            'itemAlign' => 'left',
            'shareLabelShow' => true,
            'shareLabelIconColor' => '#ff6345',
            'shareLabelStyle' => 'style1',
            'shareCountShow' => true,
            'Labels1BorderColor' => '#',
            'shareCountColor' => '#',
            'shareCountTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '14','unit' => 'px'),'height' => (object) array('lg' => '20','unit' => 'px'),'decoration' => 'none','transform' => '','family' => '','weight' => ''),
            'shareCountLabel' => 'Shares',
            'shareLabelColor' => '#',
            'shareLabelTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '12','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => '','family' => '','weight' => ''),
            'shareLabelBackground' => '#fff',
            'shareLabelBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#c3c3c3','type' => 'solid'),
            'shareLabelRadius' => (object) array('lg' => '','unit' => 'px'),
            'shareLabelPadding' => (object) array('lg' => (object) array('top' => '10','bottom' => '10','left' => '25','right' => '25','unit' => 'px')),
            'enableSticky' => false,
            'itemPosition' => 'bottom',
            'stickyLeftOffset' => '20',
            'stickyRightOffset' => '20',
            'stickyTopOffset' => '20',
            'stickyBottomOffset' => '20',
            'resStickyPost' => false,
            'floatingResponsive' => '600',
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
        register_block_type( 'product-blocks/social-share',
            array(
                'editor_script' => 'wopb-blocks-builder-script',
                'editor_style'  => 'wopb-blocks-editor-css',
                'render_callback' => array( $this, 'content' )
            )
        );
    }

    public function share_link( $key = 'facebook', $post_link = '' ) {
        $shareLink = [
            'facebook' => 'http://www.facebook.com/sharer.php?u='.$post_link,
            'twitter' => 'http://twitter.com/share?url='.$post_link,
            'linkedin' => 'https://www.linkedin.com/sharing/share-offsite/?url='.$post_link,
            'pinterest' => 'http://pinterest.com/pin/create/link/?url='.$post_link,
            'whatsapp' => 'https://api.whatsapp.com/send?text='.$post_link,
            'messenger' => 'https://www.facebook.com/dialog/send?app_id=1904103319867886&amp;link='.$post_link.'&amp;redirect_uri='.$post_link,
            'mail' => 'mailto:?body='.$post_link,
            'reddit' => 'https://www.reddit.com/submit?url='.$post_link,
            'skype' => 'https://web.skype.com/share?url='.$post_link,
        ];
        return $shareLink[$key];
    }

    public function content( $attr, $noAjax = false ) {
        $block_name = 'social-share';
        $wraper_before = $wraper_after = $wrapper_content = '';
        $attr = wp_parse_args( $attr, $this->get_attributes() );
        $post_id = get_the_ID();
        $post_link = isset($_SERVER['REQUEST_URI'])? esc_url(home_url($_SERVER['REQUEST_URI'])):''; //phpcs:ignore
        $total_share = get_post_meta($post_id, 'wopb_share_count', true);
        $total_share = $total_share ? $total_share : 0;

        if(is_product()) {
            $wraper_before.='<div '.($attr['advanceId']?'id="'.$attr['advanceId'].'" ':'').' class="wp-block-product-blocks-'.$block_name.' wopb-block-'.$attr["blockId"].' '.(isset($attr["className"])?$attr["className"]:'').'">';
                $wraper_before .= '<div class="wopb-product-wrapper">';

                    $wrapper_content .= '<div class="wopb-share">';
                        $wrapper_content .= '<div class="wopb-share-layout wopb-inline-'.($attr["disInline"]?'true':'false').'">';
                            if ($attr["shareLabelShow"]) {
                                $wrapper_content .= '<div class="wopb-share-count-section wopb-share-count-section-'.$attr["shareLabelStyle"].'">';
                                    if ($attr["shareLabelStyle"] != 'style2' && $attr["shareCountShow"]) {
                                        $wrapper_content .= '<span class="wopb-share-count">'.$total_share.'</span>';
                                    }
                                    if ($attr["shareLabelStyle"] == 'style2') {
                                        $wrapper_content .= '<span class="wopb-share-icon-section">'.wopb_function()->svg_icon('share').'</span>';
                                    }
                                    if ($attr["shareLabelStyle"] != 'style2' && $attr["shareCountLabel"]) {
                                        $wrapper_content .= '<span class="wopb-share-label">'.$attr["shareCountLabel"].'</span>';
                                    }
                                $wrapper_content .= '</div>';
                            }
                            $wrapper_content .= '<div class="wopb-share-item-inner-block" postId="'.$post_id.'" count="'.$total_share.'">';

                                foreach ($attr["repeatableSocialShare"] as $key => $value) {
                                    $wrapper_content .= '<div class="wopb-share-item wopb-repeat-'.$key.' wopb-social-'.$value["type"].'">';
                                        $wrapper_content .= '<a href="javascript:" class="wopb-share-item-'.$value["type"].'" url="'.$this->share_link($value['type'], $post_link).'">';
                                            $wrapper_content .= '<span class="wopb-share-item-icon">'.wopb_function()->svg_icon($value['type']).'</span>';
                                            $wrapper_content .= ''.$value['enableLabel'] ? '<span class="wopb-share-item-label">'.$value['label'].'</span>' : "".' ';
                                        $wrapper_content .= '</a>';
                                    $wrapper_content .= '</div>';
                                }
                            $wrapper_content .= '</div>';
                        $wrapper_content .= '</div>';
                    $wrapper_content .= '</div>';

                $wraper_after .= '</div>';
            $wraper_after .= '</div> ';
        }
            
        return $wraper_before.$wrapper_content.$wraper_after;
    }
}