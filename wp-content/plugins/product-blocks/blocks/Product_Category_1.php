<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Product_Category_1{

    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }

    public function get_attributes() {
        return array (
            'blockId' => '',
            'previewId' => '',
            'queryType' => 'regular',
            'queryCat' => '[]',
            'queryNumber' => 8,
            'readMore' => false,
            'productView' => 'grid',
            'columns' => (object) array('lg' => '4','sm' => '2','xs' => '2'),
            'columnGridGap' => (object) array('lg' => '30','unit' => 'px'),
            'rowGap' => (object) array('lg' => '30','unit' => 'px'),
            'columnGap' => (object) array('lg' => '10','unit' => 'px'),
            'slidesToShow' => (object) array('lg' => '4','sm' => '2','xs' => '1'),
            'autoPlay' => true,
            'showDots' => true,
            'showArrows' => true,
            'slideSpeed' => '3000',
            'headingShow' => true,
            'showImage' => true,
            'titleShow' => true,
            'descShow' => true,
            'countShow' => true,
            'contentAlign' => 'center',
            'arrowStyle' => 'leftAngle2#rightAngle2',
            'arrowSize' => (object) array('lg' => '','unit' => 'px'),
            'arrowWidth' => (object) array('lg' => '60','unit' => 'px'),
            'arrowHeight' => (object) array('lg' => '60','unit' => 'px'),
            'arrowVartical' => (object) array('lg' => '','unit' => 'px'),
            'arrowHorizontal' => (object) array('lg' => ''),
            'arrowColor' => '#ffffff',
            'arrowHoverColor' => '#fff',
            'arrowBg' => 'rgba(0,0,0,0.22)',
            'arrowHoverBg' => '#ff5845',
            'arrowBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'arrowHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'arrowRadius' => (object) array('lg' => (object) array('top' => '50','bottom' => '50','left' => '50','right' => '50','unit' => 'px')),
            'arrowHoverRadius' => (object) array('lg' => (object) array('top' => '50','bottom' => '50','left' => '50','right' => '50','unit' => 'px')),
            'arrowShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'arrowHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'dotSpace' => (object) array('lg' => '4','unit' => 'px'),
            'dotVartical' => (object) array('lg' => '-50','unit' => 'px'),
            'dotHorizontal' => (object) array('lg' => ''),
            'dotWidth' => (object) array('lg' => '10','unit' => 'px'),
            'dotHeight' => (object) array('lg' => '10','unit' => 'px'),
            'dotHoverWidth' => (object) array('lg' => '16','unit' => 'px'),
            'dotHoverHeight' => (object) array('lg' => '16','unit' => 'px'),
            'dotBg' => '#f5f5f5',
            'dotHoverBg' => '#000',
            'dotBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'dotHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'dotRadius' => (object) array('lg' => (object) array('top' => '50','bottom' => '50','left' => '50','right' => '50','unit' => 'px')),
            'dotHoverRadius' => (object) array('lg' => (object) array('top' => '50','bottom' => '50','left' => '50','right' => '50','unit' => 'px')),
            'dotShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'dotHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'headingText' => 'Product Category #1',
            'headingURL' => '',
            'headingBtnText' => 'View More',
            'headingStyle' => 'style1',
            'headingTag' => 'h2',
            'headingAlign' => 'left',
            'headingTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '20','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => '','family' => '','weight' => ''),
            'headingColor' => '#0e1523',
            'headingBorderBottomColor' => '#0e1523',
            'headingBorderBottomColor2' => '#e5e5e5',
            'headingBg' => '#ff5845',
            'headingBg2' => '#e5e5e5',
            'headingBtnTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '14','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','family' => ''),
            'headingBtnColor' => '#ff5845',
            'headingBtnHoverColor' => '#0a31da',
            'headingBorder' => '3',
            'headingSpacing' => (object) array('lg' => 30,'unit' => 'px'),
            'headingRadius' => (object) array('lg' => (object) array('top' => '','bottom' => '','left' => '','right' => '','unit' => 'px')),
            'headingPadding' => (object) array('lg' => '','unit' => 'px'),
            'subHeadingShow' => false,
            'subHeadingText' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut sem augue. Sed at felis ut enim dignissim sodales.',
            'subHeadingTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '16','unit' => 'px'),'spacing' => (object) array('lg' => '0','unit' => 'px'),'height' => (object) array('lg' => '27','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize','family' => '','weight' => '500'),
            'subHeadingColor' => '#989898',
            'subHeadingSpacing' => (object) array('lg' => (object) array('unit' => 'px')),
            'titleTag' => 'h3',
            'titleFull' => false,
            'titleTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '18','unit' => 'px'),'spacing' => (object) array('lg' => '0','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => '','family' => '','weight' => ''),
            'titleColor' => '#0e1523',
            'titleHoverColor' => '#828282',
            'titlePadding' => (object) array('lg' => (object) array('top' => 0,'bottom' => 0,'unit' => 'px')),
            'ShortDescTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '12','unit' => 'px'),'spacing' => (object) array('lg' => '0','unit' => 'px'),'height' => (object) array('lg' => '20','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize','family' => '','weight' => ''),
            'ShortDescColor' => '',
            'ShortDescPadding' => (object) array('lg' => (object) array('top' => 0,'bottom' => 0,'unit' => 'px')),
            'contentVerticalPosition' => 'middlePosition',
            'contentHorizontalPosition' => 'centerPosition',
            'contenWraptWidth' => (object) array('lg' => '100','unit' => '%'),
            'contenWraptHeight' => (object) array('lg' => ''),
            'contentWrapBg' => '#fff',
            'contentWrapBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'contentWrapHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'contentWrapRadius' => (object) array('lg' => (object) array('top' => '','bottom' => '','left' => '','right' => '','unit' => 'px')),
            'contentWrapHoverRadius' => (object) array('lg' => (object) array('top' => '','bottom' => '','left' => '','right' => '','unit' => 'px')),
            'contentWrapShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 0,'right' => 5,'bottom' => 15,'left' => 0),'color' => 'rgba(0,0,0,0.15)'),
            'contentWrapHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 0,'right' => 10,'bottom' => 25,'left' => 0),'color' => 'rgba(0,0,0,0.25)'),
            'contentWrapSpacing' => (object) array('lg' => (object) array('top' => '','bottom' => '','left' => '','right' => '','unit' => 'px')),
            'contentWrapPadding' => (object) array('lg' => (object) array('top' => '20','bottom' => '20','left' => '20','right' => '20','unit' => 'px')),
            'categoryrCountText' => 'products',
            'categoryrCountTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '14','unit' => 'px'),'spacing' => (object) array('lg' => '0','unit' => 'px'),'height' => (object) array('lg' => '22','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize','family' => '','weight' => ''),
            'categoryrCountColor' => '',
            'categoryrCountPadding' => (object) array('lg' => (object) array('top' => 0,'bottom' => 0,'unit' => 'px')),
            'imgCrop' => 'full',
            'imgWidth' => (object) array('lg' => '100','unit' => '%'),
            'imgHeight' => (object) array('lg' => '250','unit' => 'px'),
            'imageScale' => 'cover',
            'imgAnimation' => 'none',
            'imgGrayScale' => (object) array('lg' => '0','unit' => '%'),
            'imgHoverGrayScale' => (object) array('lg' => '0','unit' => '%'),
            'imgRadius' => (object) array('lg' => '','unit' => 'px'),
            'imgHoverRadius' => (object) array('lg' => '','unit' => 'px'),
            'imgShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'imgHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'imgMargin' => (object) array('lg' => (object) array('top' => '0','right' => '0','bottom' => '0','left' => '0','unit' => 'px')),
            'readMoreText' => '',
            'readMoreTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => 12,'unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'spacing' => (object) array('lg' => 1,'unit' => 'px'),'transform' => 'uppercase','weight' => '400','decoration' => 'none','family' => ''),
            'readMoreColor' => '#0d1523',
            'readMoreBgColor' => (object) array('openColor' => 0,'type' => 'color','color' => ''),
            'readMoreBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'readMoreRadius' => (object) array('lg' => '','unit' => 'px'),
            'readMoreHoverColor' => '#0c32d8',
            'readMoreBgHoverColor' => (object) array('openColor' => 0,'type' => 'color','color' => ''),
            'readMoreHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'readMoreHoverRadius' => (object) array('lg' => '','unit' => 'px'),
            'readMoreSpacing' => (object) array('lg' => (object) array('top' => 15,'bottom' => '','left' => '','right' => '','unit' => 'px')),
            'readMorePadding' => (object) array('lg' => (object) array('top' => '','bottom' => '','left' => '','right' => '','unit' => 'px')),
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
        register_block_type( 'product-blocks/product-category-1',
            array(
                'editor_script' => 'wopb-blocks-editor-script',
                'editor_style'  => 'wopb-blocks-editor-css',
                'render_callback' =>  array( $this, 'content' )
            )
        );
    }

    public function content( $attr, $noAjax = false ) {

        $attr = wp_parse_args( $attr, $this->get_attributes() );

        if ( ! $noAjax ) {
            $paged = is_front_page() ? get_query_var('page') : get_query_var('paged');
            $attr['paged'] = $paged ? $paged : 1;
        }

        $block_name = 'product-category-1';
        $wraper_before = $wraper_after = $post_loop = '';
        $wrapper_main_content = '';
        $image_size = $attr["imgCrop"] ? $attr["imgCrop"] : 'full';

        $slider_attr = wc_implode_html_attributes(
            array(
                'data-slidestoshow'  => wopb_function()->slider_responsive_split($attr['slidesToShow']),
                'data-autoplay'      => esc_attr($attr['autoPlay']),
                'data-slidespeed'    => esc_attr($attr['slideSpeed']),
                'data-showdots'      => esc_attr($attr['showDots']),
                'data-showarrows'    => esc_attr($attr['showArrows'])
            )
        );

        $recent_posts = wopb_function()->get_category_data( json_decode($attr['queryCat']), $attr['queryNumber'], $attr['queryType'] );
    
        if ( ! empty( $recent_posts ) ) {
            
            $wraper_before .= '<div '.($attr['advanceId']?'id="'.esc_attr($attr['advanceId']).'" ':'').' class="wp-block-product-blocks-'.esc_attr($block_name).' wopb-block-'.esc_attr($attr["blockId"]).' '.(isset($attr["className"])?esc_attr($attr["className"]):''). (isset($attr["align"])? ' align' .esc_attr($attr["align"]):'') . '">';
                $wraper_before .= '<div class="wopb-block-wrapper">';

                    if ( $attr['headingShow'] ) {
                        $wraper_before .= '<div class="wopb-heading-filter">';
                            $wraper_before .= '<div class="wopb-heading-filter-in">';
                                include WOPB_PATH . 'blocks/template/heading.php';
                            $wraper_before .= '</div>';
                        $wraper_before .= '</div>';
                    }

                    $wraper_before .= '<div class="wopb-wrapper-main-content">';
                        if ( $attr['productView'] == 'slide' ) {
                            $wrapper_main_content .= '<div class="wopb-product-blocks-slide" '.wp_kses_post($slider_attr).'>';
                        } else {
                            $wrapper_main_content .= '<div class="wopb-block-items-wrap wopb-block-row wopb-block-column-'.json_decode(json_encode($attr['columns']), true)['lg'].'">';
                        }

                            foreach ( $recent_posts as $value ) {
                                $post_loop .= '<div class="wopb-block-item">';
                                    $post_loop .= '<div class="wopb-block-content-wrap">';
                                        if( $attr['showImage'] ){
                                            if( $value['image'] ) {
                                            $post_loop .= '<div class="wopb-block-image wopb-block-image-'.esc_attr($attr['imgAnimation']).'"><a href="'.esc_url($value['url']).'" class="wopb-product-cat-img"><img src='.esc_url($value['image'][$image_size]).' alt='.esc_attr($value['name']).'/></a></div>';
                                            } else {
                                                $post_loop .= '<a href="'.esc_url($value['url']).'" class="wopb-product-cat-img"><div class="wopb-block-image wopb-block-image-empty"></div></a>';
                                            }
                                        }
                                        if( $attr['titleShow'] || $attr['countShow'] || $attr['descShow'] || $attr['readMore']){
                                            $post_loop .= '<div class="wopb-category-content-items wopb-category-content-'.esc_attr($attr['contentVerticalPosition']).' wopb-category-content-'.esc_attr($attr['contentHorizontalPosition']).'">';
                                                $post_loop .= '<div class="wopb-category-content-item">';
                                                    if($attr['titleShow']){
                                                        $post_loop .= '<'.esc_attr($attr['titleTag']).' class="wopb-product-cat-title"><a href='.esc_url($value['url']).'>'.esc_html($value['name']).'</a></'.esc_attr($attr['titleTag']).'>';
                                                    }
                                                    if($attr['countShow']){
                                                        $post_loop .= '<span class="wopb-product-cat-count">'.esc_html($value['count']).' '.( isset($attr['categoryrCountText']) ? esc_html($attr['categoryrCountText']) : esc_html__( 'products', 'product-blocks' ) ).'</span>';
                                                    }
                                                    if($attr['descShow']){
                                                        $post_loop .= '<div class="wopb-product-cat-desc">'.esc_html($value['desc']).'</div>';
                                                    }
                                                    if($attr['readMore']){
                                                        $post_loop .= '<div class="wopb-product-readmore"><a href='.esc_url($value['url']).'>'.($attr['readMoreText'] ? esc_html($attr['readMoreText']) : esc_html__( "Read More", "product-blocks" )).'</a></div>';
                                                    }
                                                $post_loop .= '</div>';
                                            $post_loop .= '</div>';
                                        }
                                    $post_loop .= '</div>';
                                $post_loop .= '</div>';
                            }

                            $wrapper_main_content .= $post_loop;

                        $wrapper_main_content .= '</div>';//wopb-block-items-wrap

                        if ( $attr['productView'] == 'slide' && $attr['showArrows'] ) {
                            include WOPB_PATH . 'blocks/template/arrow.php';
                        }

                     $wraper_after .= '</div>';//wopb-wrapper-main-content
                $wraper_after .= '</div>';
            $wraper_after .= '</div>';

            wp_reset_query();
        }

        return $noAjax ? $post_loop : $wraper_before.$wrapper_main_content.$wraper_after;
    }

}