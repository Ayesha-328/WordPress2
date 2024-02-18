<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class My_Account{
    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }

    public function get_attributes() {
        return array(
            'blockId' => '',
            'pageLayout' => 'vertical',
            'showProfile' => true,
            'profileTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '25','unit' => 'px',),'height' => (object) array('lg' => '','unit' => 'px',),'decoration' => 'none','transform' => '','family' => '','weight' => '',),
            'profileColor' => '#221f1c',
            'profileImageWidth' => (object) array('lg' => '120','unit' => 'px',),
            'profileImageHeight' => (object) array('lg' => '120','unit' => 'px',),
            'profileImageRadius' => (object) array('lg' => (object) array('top' => '80','bottom' => '80','left' => '80','right' => '80','unit' => 'px',),),
            'profileSpacing' => (object) array('lg' => '30','unit' => 'px',),
            'navTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '20','unit' => 'px',),'height' => (object) array('lg' => '','unit' => 'px',),'decoration' => 'none','transform' => '','family' => '','weight' => '',),
            'navAlign' => 'left',
            'navWidth' => (object) array('lg' => '160','unit' => 'px',),
            'navSpacing' => (object) array('lg' => '14','unit' => 'px',),
            'navListSpacing' => (object) array('lg' => '0','unit' => 'px',),
            'navColor' => '#4d4d4d',
            'navBgColor' => (object) array('openColor' => 0,'type' => 'color','color' => '#ffffff',),
            'navBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 0,'bottom' => 0,'left' => 0,),'color' => '#000000','type' => 'solid',),
            'navRadius' => (object) array('lg' => (object) array('top' => '0','bottom' => '0','left' => '0','right' => '0','unit' => 'px',),),
            'navPadding' => (object) array('lg' => (object) array('top' => '6','bottom' => '8','left' => '10','right' => '10','unit' => 'px',),),
            'navFocusColor' => '#4d4d4d',
            'navBgFocusColor' => (object) array(),
            'navFocusBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 0,'bottom' => 1,'left' => 5,),'color' => '#4d4d4d','type' => 'solid',),
            'navFocusRadius' => (object) array('lg' => (object) array('top' => '0','bottom' => '0','left' => '0','right' => '0','unit' => 'px',),),
            'navFocusPadding' => (object) array('lg' => (object) array('top' => '6','bottom' => '8','left' => '10','right' => '10','unit' => 'px',),),
            'tabContentTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '16','unit' => 'px',),'height' => (object) array('lg' => '','unit' => 'px',),'decoration' => 'none','transform' => '','family' => '','weight' => '',),
            'tabContentColor' => '#656565',
            'tabContentLinkColor' => '#0400fa',
            'tabContentHeadingTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '20','unit' => 'px',),'height' => (object) array('lg' => '','unit' => 'px',),'decoration' => 'none','transform' => '','family' => '','weight' => '',),
            'tabContentHeadingColor' => '#1c0101',
            'tabContentBgColor' => (object) array(),
            'tabContentBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#e0e0e0','type' => 'solid',),
            'tabContentShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '',),
            'tabContentRadius' => (object) array('lg' => (object) array('top' => '0','bottom' => '0','left' => '0','right' => '0','unit' => 'px',),),
            'tabContentPadding' => (object) array('lg' => (object) array('top' => '0','bottom' => '5','left' => '','right' => '','unit' => 'px',),),
            'formRowGap' => (object) array('lg' => '4','unit' => 'px',),
            'formLabelTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '16','unit' => 'px',),'height' => (object) array('lg' => '','unit' => 'px',),'decoration' => 'none','transform' => '','family' => '','weight' => '',),
            'formLabelColor' => '#656565',
            'formInputDivider' => '',
            'formInputColor' => '#000',
            'formInputBgColor' => (object) array('openColor' => 1,'type' => 'color','color' => '#ededed',),
            'formInputBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#e0e0e0','type' => 'solid',),
            'formInputRadius' => (object) array('lg' => (object) array('top' => '4','bottom' => '4','left' => '4','right' => '4','unit' => 'px',),),
            'formInputPadding' => (object) array('lg' => (object) array('top' => '','bottom' => '','left' => '6','right' => '','unit' => 'px',),),
            'formInputFocusColor' => '#000',
            'formInputBgFocusColor' => (object) array('openColor' => 1,'type' => 'color','color' => '#fff',),
            'formInputFocusBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#e0e0e0','type' => 'solid',),
            'formInputFocusRadius' => (object) array('lg' => (object) array('top' => '4','bottom' => '4','left' => '4','right' => '4','unit' => 'px',),),
            'formInputFocusPadding' => (object) array('lg' => (object) array('top' => '','bottom' => '','left' => '6','right' => '','unit' => 'px',),),
            'formBtnDivider' => '',
            'formBtnColor' => '#ffffff',
            'formBtnBgColor' => (object) array('openColor' => 1,'type' => 'color','color' => '#343434',),
            'formBtnBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#e0e0e0','type' => 'solid',),
            'tabContformBtnShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '',),
            'formBtnRadius' => (object) array('lg' => (object) array('top' => '4','bottom' => '4','left' => '4','right' => '4','unit' => 'px',),),
            'formBtnPadding' => (object) array('lg' => (object) array('top' => '6','bottom' => '8','left' => '10','right' => '10','unit' => 'px',),),
            'formBtnHoverColor' => '#ffffff',
            'formBtnBgHoverColor' => (object) array('openColor' => 1,'type' => 'color','color' => '#343434',),
            'formBtnHoverBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#e0e0e0','type' => 'solid',),
            'formBtnHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '',),
            'formBtnHoverRadius' => (object) array('lg' => (object) array('top' => '4','bottom' => '4','left' => '4','right' => '4','unit' => 'px',),),
            'formBtnHoverPadding' => (object) array('lg' => (object) array('top' => '6','bottom' => '8','left' => '10','right' => '10','unit' => 'px',),),
            'tableAlignment' => 'center',
            'tableBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 0,'right' => 0,'bottom' => 0,'left' => 0,),'color' => '#e0e0e0','type' => 'solid',),
            'tableRadius' => (object) array('lg' => (object) array('top' => '0','bottom' => '0','left' => '0','right' => '0','unit' => 'px',),),
            'tableHeadDivider' => '',
            'tableHeadTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '20','unit' => 'px',),'height' => (object) array('lg' => '','unit' => 'px',),'decoration' => 'none','transform' => '','family' => '','weight' => '',),
            'tableHeadColor' => '#ffffff',
            'tableHeadBgColor' => (object) array('openColor' => 1,'type' => 'color','color' => '#4D4D4D',),
            'tableHeadBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 0,'right' => 0,'bottom' => 1,'left' => 0,),'color' => '#e0e0e0','type' => 'solid',),
            'tableHeadPadding' => (object) array('lg' => (object) array('top' => '8','bottom' => '8','left' => '','right' => '','unit' => 'px',),),
            'tableBodyDivider' => '',
            'tableBodyTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '16','unit' => 'px',),'height' => (object) array('lg' => '','unit' => 'px',),'decoration' => 'none','transform' => '','family' => '','weight' => '',),
            'tableBodyColor' => '',
            'tableBodyBgColor' => (object) array(),
            'tableBodyBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 0,'right' => 0,'bottom' => 1,'left' => 0,),'color' => '#e0e0e0','type' => 'solid',),
            'tableLinkColor' => '9481ff',
            'tableLinkHoverColor' => '',
            'tableBodyPadding' => (object) array('lg' => (object) array('top' => '8','bottom' => '8','left' => '','right' => '','unit' => 'px',),),
            'tableBtnDivider' => '',
            'tableBtnColor' => '#ffffff',
            'tableBtnBgColor' => (object) array('openColor' => 1,'type' => 'color','color' => '#4D4D4D',),
            'tableBtnTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '16','unit' => 'px',),'height' => (object) array('lg' => '','unit' => 'px',),'decoration' => 'none','transform' => '','family' => '','weight' => '',),
            'tableBtnBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#e0e0e0','type' => 'solid',),
            'tableBtnShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '',),
            'tableBtnRadius' => (object) array('lg' => (object) array('top' => '4','bottom' => '4','left' => '4','right' => '4','unit' => 'px',),),
            'tableBtnPadding' => (object) array('lg' => (object) array('top' => '6','bottom' => '8','left' => '10','right' => '10','unit' => 'px',),),
            'tableBtnHoverColor' => '',
            'tableBtnBgHoverColor' => (object) array(),
            'tableBtnHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#e0e0e0','type' => 'solid',),
            'tableBtnHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '',),
            'tableBtnHoverRadius' => (object) array('lg' => (object) array('top' => '4','bottom' => '4','left' => '4','right' => '4','unit' => 'px',),),
            'tableBtnHoverPadding' => (object) array('lg' => (object) array('top' => '6','bottom' => '8','left' => '10','right' => '10','unit' => 'px',),),
            'tableFooterDivider' => '',
            'tableFooterBgColor' => (object) array(),
            'tableFooterBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#e0e0e0','type' => 'solid',),
            'tableFooterRadius' => (object) array('lg' => (object) array('top' => '0','bottom' => '0','left' => '0','right' => '0','unit' => 'px',),),
            'tableFooterPadding' => (object) array('lg' => (object) array('top' => '10','bottom' => '','left' => '0','right' => '0','unit' => 'px',),),
            'tableFooterBtnColor' => '',
            'tableFooterBtnBgColor' => (object) array('openColor' => 1,'type' => 'color','color' => '#4D4D4D',),
            'tableFooterBtnBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#e0e0e0','type' => 'solid',),
            'tableFooterBtnRadius' => (object) array('lg' => (object) array('top' => '4','bottom' => '4','left' => '4','right' => '4','unit' => 'px',),),
            'tableFooterBtnPadding' => (object) array('lg' => (object) array('top' => '6','bottom' => '8','left' => '10','right' => '10','unit' => 'px',),),
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
        register_block_type( 'product-blocks/my-account',
            array(
                'editor_script' => 'wopb-blocks-builder-script',
                'editor_style'  => 'wopb-blocks-editor-css',
                'render_callback' => array( $this, 'content' )
            )
        );
    }

    public function content( $attr, $noAjax = false ) {
        $block_name = 'my-account';
        $user_id = get_current_user_id();
        $profileUrl = get_avatar_url($user_id);
        $userData = get_userdata($user_id);
        $wraper_before = $wraper_after = $content = '';
        $attr = wp_parse_args( $attr, $this->get_attributes() );

        if ( function_exists( 'WC' ) ) {
            $wraper_before .= '<div ' . ( $attr['advanceId'] ? 'id="' . $attr['advanceId'] . '" ' : '' ) . ' class="wp-block-product-blocks-' . $block_name . ' wopb-block-' . $attr["blockId"] . ' ' . ( isset( $attr["className"] ) ? $attr["className"] : '' ) . '">';
                $wraper_before .= '<div class="wopb-product-wrapper ">';
                
                if ( ! is_admin() ) {
                    ob_start();
                    require_once WOPB_PATH . 'addons/builder/blocks/my_account/Template.php';
                    $content .= ob_get_clean();
                }

                $wraper_after .= '</div>';
            $wraper_after .= '</div> ';
        }

        return $wraper_before.$content.$wraper_after;
    }
}