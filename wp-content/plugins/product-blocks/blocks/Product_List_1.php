<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Product_List_1{

    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }

    public function get_attributes() {
        return array (
            'blockId' => '',
            'previewId' => '',
            'layout' => '1',
            'sortSection' => '["title","description","price","review","cart"]',
            'productView' => 'grid',
            'columns' => (object) array('lg' => '2','sm' => '1'),
            'columnGridGap' => (object) array('lg' => '30','unit' => 'px'),
            'rowGap' => (object) array('lg' => '30','unit' => 'px'),
            'columnGap' => (object) array('lg' => '10','unit' => 'px'),
            'slidesToShow' => (object) array('lg' => '4','sm' => '2','xs' => '1'),
            'autoPlay' => true,
            'showDots' => true,
            'showArrows' => true,
            'slideSpeed' => '3000',
            'showPrice' => true,
            'showReview' => true,
            'showWishList' => true,
            'showCompare' => false,
            'quickView' => true,
            'showCart' => false,
            'filterShow' => false,
            'paginationShow' => false,
            'headingShow' => true,
            'titleShow' => true,
            'showShortDesc' => false,
            'showImage' => true,
            'disableFlip' => false,
            'contentAlign' => 'left',
            'queryType' => 'product',
            'queryNumber' => 8,
            'queryStatus' => 'all',
            'queryExcludeStock' => false,
            'queryCat' => '[]',
            'queryOrderBy' => 'date',
            'queryOrder' => 'desc',
            'queryInclude' => '',
            'queryExclude' => '[]',
            'queryOffset' => '0',
            'queryQuick' => '',
            'queryProductSort' => 'null',
            'querySpecificProduct' => '[]',
            'queryAdvanceProductSort' => 'null',
            'queryTax' => 'product_cat',
            'queryTaxValue' => '[]',
            'queryRelation' => 'OR',
            'queryIncludeAuthor' => '[]',
            'queryExcludeAuthor' => '[]',
            'queryStockStatus' => '[]',
            'contentWrapBgColor' => (object) array('openColor' => 1,'type' => 'color','color' => ''),
            'contentWrapBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#e0e0e0','type' => 'solid'),
            'contentWrapRadius' => (object) array('lg' => (object) array('top' => '0','bottom' => '0','left' => '0','right' => '0','unit' => 'px')),
            'contentWrapPadding' => (object) array('lg' => (object) array('top' => '0','bottom' => '0','left' => '0','right' => '0','unit' => 'px')),
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
            'headingText' => 'Product List #1',
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
            'headingSpacing' => (object) array('lg' => 25,'unit' => 'px'),
            'headingRadius' => (object) array('lg' => (object) array('top' => '','bottom' => '','left' => '','right' => '','unit' => 'px')),
            'headingPadding' => (object) array('lg' => '','unit' => 'px'),
            'subHeadingShow' => false,
            'subHeadingText' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut sem augue. Sed at felis ut enim dignissim sodales.',
            'subHeadingTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '16','unit' => 'px'),'spacing' => (object) array('lg' => '0','unit' => 'px'),'height' => (object) array('lg' => '27','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize','family' => '','weight' => '500'),
            'subHeadingColor' => '#989898',
            'subHeadingSpacing' => (object) array('lg' => (object) array('unit' => 'px')),
            'priceColor' => '#565656',
            'priceTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '16','unit' => 'px'),'spacing' => (object) array('lg' => '0','unit' => 'px'),'height' => (object) array('lg' => '26','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize','family' => '','weight' => ''),
            'pricePadding' => (object) array('lg' => (object) array('top' => 0,'bottom' => 0,'unit' => 'px')),
            'reviewEmptyColor' => '#cccccc',
            'reviewFillColor' => '#ffd810',
            'reviewMargin' => (object) array('lg' => (object) array('top' => 0,'bottom' => 0,'unit' => 'px')),
            'shortDescLimit' => 7,
            'ShortDescTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '14','unit' => 'px'),'spacing' => (object) array('lg' => '0','unit' => 'px'),'height' => (object) array('lg' => '22','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize','family' => '','weight' => ''),
            'ShortDescColor' => '',
            'ShortDescPadding' => (object) array('lg' => (object) array('top' => 0,'bottom' => 0,'unit' => 'px')),
            'titleTag' => 'h3',
            'titleFull' => false,
            'titleTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '18','unit' => 'px'),'spacing' => (object) array('lg' => '0','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => '','family' => '','weight' => ''),
            'titleColor' => '#0e1523',
            'titleHoverColor' => '#828282',
            'titlePadding' => (object) array('lg' => (object) array('top' => 0,'bottom' => 2,'unit' => 'px')),
            'cartText' => '',
            'cartActive' => 'View Cart',
            'cartTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => 12,'unit' => 'px'),'height' => (object) array('lg' => '24','unit' => 'px'),'spacing' => (object) array('lg' => 0,'unit' => 'px'),'transform' => 'uppercase','weight' => '400','decoration' => 'none','family' => ''),
            'cartColor' => '#ff5845',
            'cartBgColor' => (object) array('openColor' => 0,'type' => 'color','color' => ''),
            'cartBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#ff5845','type' => 'solid'),
            'cartRadius' => (object) array('lg' => '0','unit' => 'px'),
            'cartHoverColor' => '#e63838',
            'cartBgHoverColor' => (object) array('openColor' => 0,'type' => 'color','color' => '#ff5845'),
            'cartHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#ff5845','type' => 'solid'),
            'cartHoverRadius' => (object) array('lg' => '0','unit' => 'px'),
            'cartSpacing' => (object) array('lg' => (object) array('top' => 4,'bottom' => '','left' => '','right' => '','unit' => 'px')),
            'cartPadding' => (object) array('lg' => (object) array('top' => '0','bottom' => '0','left' => '0','right' => '0','unit' => 'px')),
            'metaElementColor' => '#000',
            'metaElementBg' => '',
            'metaElementBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'metaElementRadius' => (object) array('lg' => '','unit' => 'px'),
            'metaElementShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'metaElementHoverColor' => '#ff5845',
            'metaElementHoverBg' => '',
            'metaElementHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'metaElementHoverRadius' => (object) array('lg' => '','unit' => 'px'),
            'metaElementHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'metaElementSpacer' => (object) array('lg' => '8','unit' => 'px'),
            'metaElementPadding' => (object) array('lg' => (object) array('unit' => 'px')),
            'imgFlip' => false,
            'imgCrop' => 'full',
            'imgWidth' => (object) array('lg' => '80','unit' => 'px'),
            'imgHeight' => (object) array('lg' => '','unit' => 'px'),
            'imageScale' => '',
            'imgAnimation' => 'none',
            'imgGrayScale' => (object) array('lg' => '0','unit' => '%'),
            'imgHoverGrayScale' => (object) array('lg' => '0','unit' => '%'),
            'imgRadius' => (object) array('lg' => '','unit' => 'px'),
            'imgHoverRadius' => (object) array('lg' => '','unit' => 'px'),
            'imgShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'imgHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'imgMargin' => (object) array('lg' => (object) array('top' => '0','right' => '20','bottom' => '0','left' => '0','unit' => 'px')),
            'filterType' => 'product_cat',
            'filterText' => 'all',
            'filterCat' => '[]',
            'filterTag' => '["all"]',
            'filterAction' => '[]',
            'filterActionText' => 'Top Sale|Popular|On Sale|Most Rated|Top Rated|Featured|New Arrival',
            'filterBelowTitle' => false,
            'filterAlign' => (object) array('lg' => 'center'),
            'fliterTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => 14,'unit' => 'px'),'height' => (object) array('lg' => 18,'unit' => 'px'),'decoration' => 'none','family' => '','weight' => 500),
            'filterColor' => '#0e1523',
            'filterHoverColor' => '#828282',
            'filterBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'filterHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'filterRadius' => (object) array('lg' => '','unit' => 'px'),
            'fliterSpacing' => (object) array('lg' => (object) array('top' => '','bottom' => '0','right' => '','left' => '20','unit' => 'px')),
            'fliterPadding' => (object) array('lg' => (object) array('top' => '','bottom' => '','unit' => 'px')),
            'filterDropdownColor' => '#0e1523',
            'filterDropdownHoverColor' => '#ff5845',
            'filterDropdownBg' => '#fff',
            'filterDropdownRadius' => (object) array('lg' => '0'),
            'filterDropdownPadding' => (object) array('lg' => (object) array('top' => '15','bottom' => '15','left' => '20','right' => '20','unit' => 'px')),
            'filterMobile' => true,
            'filterMobileText' => 'More',
            'paginationType' => 'pagination',
            'loadMoreText' => 'Load More',
            'paginationText' => 'Previous|Next',
            'paginationNav' => 'textArrow',
            'paginationAjax' => true,
            'navPosition' => 'topRight',
            'pagiAlign' => (object) array('lg' => 'left'),
            'pagiTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => 14,'unit' => 'px'),'height' => (object) array('lg' => 20,'unit' => 'px'),'decoration' => 'none','family' => ''),
            'pagiArrowSize' => (object) array('lg' => '14'),
            'pagiColor' => '#fff',
            'pagiBgColor' => (object) array('openColor' => 1,'type' => 'color','color' => '#0e1523'),
            'pagiBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'pagiShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'pagiRadius' => (object) array('lg' => (object) array('top' => '2','bottom' => '2','left' => '2','right' => '2','unit' => 'px')),
            'pagiHoverColor' => '#fff',
            'pagiHoverbg' => (object) array('openColor' => 1,'type' => 'color','color' => '#ff5845'),
            'pagiHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'pagiHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'pagiHoverRadius' => (object) array('lg' => (object) array('top' => '2','bottom' => '2','left' => '2','right' => '2','unit' => 'px')),
            'pagiPadding' => (object) array('lg' => (object) array('top' => '8','bottom' => '8','left' => '14','right' => '14','unit' => 'px')),
            'navMargin' => (object) array('lg' => (object) array('top' => '0','right' => '0','bottom' => '0','left' => '0','unit' => 'px')),
            'pagiMargin' => (object) array('lg' => (object) array('top' => '30','right' => '0','bottom' => '0','left' => '0','unit' => 'px')),
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
        register_block_type( 'product-blocks/product-list-1',
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

        $block_name = 'product-list-1';
        $page_post_id = wopb_function()->get_ID();
        $wraper_before = $wraper_after = $post_loop = '';
        $wrapper_main_content = '';
        $recent_posts = new \WP_Query( wopb_function()->get_query( $attr ) );
        $pageNum = wopb_function()->get_page_number($attr, $recent_posts->found_posts);

        $wishlist = wopb_function()->get_setting('wopb_wishlist') == 'true' ? true : false;
        $wishlist_data = $wishlist ? wopb_function()->get_wishlist_id() : array();
        $compare = wopb_function()->get_setting('wopb_compare') == 'true' ? true : false;
        $compare_data = $compare ? wopb_function()->get_compare_id() : array();
        $quickview = wopb_function()->get_setting('wopb_quickview') == 'true' ? true : false;

        $slider_attr = wc_implode_html_attributes(
            array(
                'data-slidestoshow'  => wopb_function()->slider_responsive_split($attr['slidesToShow']),
                'data-autoplay'      => esc_attr($attr['autoPlay']),
                'data-slidespeed'    => esc_attr($attr['slideSpeed']),
                'data-showdots'      => esc_attr($attr['showDots']),
                'data-showarrows'    => esc_attr($attr['showArrows'])
            )
        );

    
        if ( $recent_posts->have_posts() ) {
            $wraper_before .= '<div '.($attr['advanceId']?'id="'.esc_attr($attr['advanceId']).'" ':'').' class="wp-block-product-blocks-'.esc_attr($block_name).' wopb-block-'.esc_attr($attr["blockId"]).' '.(isset($attr["className"])?esc_attr($attr["className"]):''). (isset($attr["align"])? ' align' .esc_attr($attr["align"]):'') . '">';
                $wraper_before .= '<div class="wopb-block-wrapper">';

                    if ($attr['headingShow'] || $attr['filterShow'] ) {
                        $wraper_before .= '<div class="wopb-heading-filter">';
                            $wraper_before .= '<div class="wopb-heading-filter-in">';
                                
                                // Heading
                                include WOPB_PATH . 'blocks/template/heading.php';
                                
                                if ( $attr['filterShow'] && $attr['productView'] == 'grid' ) {
                                    $wraper_before .= '<div class="wopb-filter-navigation">';

                                        // Filter
                                        if ($attr['filterShow']){
                                            include WOPB_PATH . 'blocks/template/filter.php';
                                        }
                                    $wraper_before .= '</div>';
                                }
                            $wraper_before .= '</div>';
                        $wraper_before .= '</div>';
                    }

                    $wraper_before .= '<div class="wopb-wrapper-main-content">';
                        if ( $attr['productView']=='slide' ) {
                            $wrapper_main_content .= '<div class="wopb-product-blocks-slide" '.wp_kses_post($slider_attr).'>';
                        } else {
                            $wrapper_main_content .= '<div class="wopb-block-items-wrap wopb-block-row wopb-block-column-'.json_decode(json_encode($attr['columns']), true)['lg'].' wopb-block-content-'.esc_attr($attr['imgFlip']).'">';
                        }
                            $is_show = json_decode( $attr['sortSection'] );
                            $idx = $noAjax ? 1 : 0;
                            while ( $recent_posts->have_posts() ): $recent_posts->the_post();

                                $title_data = $price_data = $review_data = $cart_data = $description_data = '';

                                include WOPB_PATH . 'blocks/template/data.php';
                                if($product) {
                                    $post_loop .= '<div class="wopb-block-item wopb-block-media">';
                                        $post_loop .= '<div class="wopb-block-content-wrap '.($attr['layout']?'wopb-pl1-l'.esc_attr($attr['layout']):'').'">';

                                            if ($attr['showImage']) {
                                                $post_loop .= '<div class="wopb-block-image wopb-block-image-'.esc_attr($attr['imgAnimation']).'">';

                                                    if ( has_post_thumbnail() ) {
                                                        $post_loop .= '<a href="'.esc_url($titlelink).'">';
                                                        $post_loop .= '<img alt="'.esc_attr($title).'" src="'.esc_url(wp_get_attachment_image_url( $post_thumb_id, ($attr['imgCrop'] ? $attr['imgCrop'] : 'full') )).'" />';
                                                            if ( ! $attr['disableFlip'] ) {
                                                                $post_loop .= wopb_function()->get_flip_image($post_id, $title, $attr['imgCrop']);
                                                            }
                                                        $post_loop .= '</a>';
                                                    } else {
                                                        $post_loop .='<div class="empty-image">';
                                                            $post_loop .= '<a href="'.esc_url($titlelink).'">';
                                                                $post_loop .='<img alt='.esc_attr($title).' src="'.esc_url(wc_placeholder_img_src(($attr['imgCrop'] ? $attr['imgCrop'] : 'full'))).'"/>';
                                                            $post_loop .= '</a>';
                                                        $post_loop .='</div>';
                                                    }


                                                    if( $attr["layout"] != '1' ) {
                                                        if ( $attr["quickView"] || $attr["showCompare"] || $attr["showWishList"] ) {
                                                        $post_loop .= '<div class="wopb-product-meta">';
                                                            if( $wishlist ) {
                                                                if( $attr["showWishList"] ) {
                                                                    $post_loop .= wopb_function()->get_wishlist_html($post_id, $wishlist_active, $attr["layout"], array(1, 2, 3, 4));
                                                                }
                                                            }
                                                            if( $attr["quickView"] && $quickview ) {
                                                                $quick_params = array(
                                                                    'post' => $recent_posts,
                                                                    'post_id' => $post_id,
                                                                    'layout' => $attr['layout'],
                                                                    'position' => array(1, 2, 3, 4),
                                                                    'tooltip' => true,
                                                                );
                                                                $post_loop .= wopb_function()->get_quick_view($quick_params);
                                                            }
                                                            if( $attr["showCompare"] && $compare ) {
                                                                $post_loop .= wopb_function()->get_compare($post_id,['layout' => $attr["layout"], 'position' => array(1, 2, 3, 4)]);
                                                            }
                                                        $post_loop .= '</div>';
                                                        }

                                                    }

                                                $post_loop .= '</div>';
                                            }

                                            $post_loop .= '<div class="wopb-block-content">';

                                                // Title
                                                if($attr['titleShow'] && in_array('title',$is_show)){
                                                    include WOPB_PATH . 'blocks/template/title.php';
                                                }

                                                if($attr['showShortDesc']){
                                                    $description_data .= '<div class="wopb-short-description">'. wopb_function()->excerpt($post_id, $attr['shortDescLimit']) .'</div>';
                                                }

                                                // Review
                                                if($attr['showReview'] && in_array('review',$is_show)){
                                                    include WOPB_PATH . 'blocks/template/review.php';
                                                }

                                                // Price
                                                if($attr['showPrice'] && in_array('price',$is_show)){
                                                    $price_data .= '<div class="wopb-product-price">'.$product->get_price_html().'</div>';
                                                }

                                                // Add to Cart URL
                                                if($attr['showCart'] && in_array('cart',$is_show)){
                                                    $cart_data .= wopb_function()->get_add_to_cart($product, $attr['cartText'], $attr['cartActive'], $attr['layout'], array(), false, $attr);
                                                }

                                                foreach ($is_show as $value) {
                                                    $post_loop .= ${$value."_data"};
                                                }

                                            $post_loop .= '</div>';
                                        $post_loop .= '</div>';
                                    $post_loop .= '</div>';
                                }
                                $idx ++;
                            endwhile;

                            $wrapper_main_content .= $post_loop;

                            if ( $attr['paginationShow'] && $attr['productView'] == 'grid' && $attr['paginationType'] == 'loadMore' ) {
                                $wrapper_main_content .= '<span class="wopb-loadmore-insert-before"></span>';
                            }

                        $wrapper_main_content .= '</div>';//wopb-block-items-wrap

                        // Load More
                        if ( $attr['paginationShow'] && $attr['productView'] == 'grid' && $attr['paginationType'] == 'loadMore' ) {
                            include WOPB_PATH . 'blocks/template/loadmore.php';
                        }

                        // Pagination
                        if ( $attr['paginationShow'] && $attr['productView'] == 'grid' && $attr['paginationType'] == 'pagination' ) {
                            include WOPB_PATH . 'blocks/template/pagination.php';
                        }

                        if ( $attr['productView'] == 'slide' && $attr['showArrows'] ) {
                            include WOPB_PATH . 'blocks/template/arrow.php';
                        }

                    $wraper_after .= '</div>';//wopb-wrapper-main-content
                $wraper_after .= '</div>';
            $wraper_after .= '</div>';

            wp_reset_query();
        }

        if ( $noAjax && $attr['ajax_source'] == 'filter' ) {
            if ( $post_loop === '' ) {
                $wrapper_main_content .= '<span class="wopb-no-product-found">' . __('No products were found of your matching selection', 'product-blocks') . '</span>';
            }
            return $wrapper_main_content;
        }

        return $noAjax ? $post_loop : $wraper_before.$wrapper_main_content.$wraper_after;
    }

}