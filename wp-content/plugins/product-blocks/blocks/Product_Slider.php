<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Product_Slider{
    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }

    public function get_attributes() {
        return array(
            'blockId' => '',
            'align' => 'full',
            'layout' => 'layout1',
            'height' => (object) array('lg' => '600','unit' => 'px',),
            'slideAnimation' => 'default',
            'autoPlay' => true,
            'slideSpeed' => '3000',
            'slidesToShow' => (object) array('lg' => '1','sm' => '1','xs' => '1',),
            'contentAlign' => (object) array('lg' => 'left',),
            'contentPadding' => (object) array('lg' => (object) array('unit' => 'px',),),
            'showImage' => true,
            'showTitle' => true,
            'showTaxonomy' => true,
            'showDescription' => true,
            'showPrice' => true,
            'showCart' => true,
            'showArrows' => true,
            'showDots' => true,
            'queryType' => 'product',
            'queryNumber' => 8,
            'queryStatus' => 'all',
            'queryExcludeStock' => false,
            'queryCat' => '',
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
            'bgColor' => (object) array('openColor' => 0,'type' => 'color','color' => '',),
            'margin' => (object) array('lg' => (object) array('top' => 0,'bottom' => 0,'unit' => 'px',),),
            'padding' => (object) array('lg' => (object) array('top' => 0,'bottom' => 0,'unit' => 'px',),),
            'bgOverlay' => true,
            'border' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#dfb0a8','type' => 'solid',),
            'radius' => (object) array('lg' => '2','unit' => 'px',),
            'boxshadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4',),
            'hoverBgOverlay' => true,
            'hoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#ff5845','type' => 'solid',),
            'hoverRadius' => (object) array('lg' => '2','unit' => 'px',),
            'hoverBoxshadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4',),
            'taxonomyUnderTitle' => false,
            'taxonomyType' => 'product_cat',
            'taxonomySpacing' => 10,
            'taxonomyItemSpacing' => 10,
            'taxonomyTypo' => (object) array('openTypography' => 1,'size' => array('lg' => 14,'unit' => 'px',),'height' => array('lg' => 18,'unit' => 'px',),'decoration' => 'none','family' => '','weight' => 400,),
            'taxonomyPadding' => (object) array('lg' => (object) array('top' => '','bottom' => '','left' => '','right' => '','unit' => 'px',),),
            'taxonomyColor' => '#0e1523',
            'taxonomyBgColor' => (object) array('openColor' => 0,'type' => 'color','color' => '',),
            'taxonomyBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#B3B3B3','type' => 'solid',),
            'taxonomyRadius' => (object) array('lg' => '2','unit' => 'px',),
            'taxonomyHoverColor' => '#0e1523',
            'taxonomyHoverBgColor' => (object) array('openColor' => 0,'type' => 'color','color' => '',),
            'taxonomyHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#dfb0a8','type' => 'solid',),
            'taxonomyHoverRadius' => (object) array('lg' => '2','unit' => 'px',),
            'titleTag' => 'h3',
            'titleWidth' => (object) array('lg' => '','unit' => 'px',),
            'titleTypo' => (object) array('openTypography' => 1,'size' => array('lg' => 16,'unit' => 'px',),'height' => array('lg' => 18,'unit' => 'px',),'decoration' => 'none','family' => '','weight' => 400,'transform' => 'uppercase',),
            'titleColor' => '#0e1523',
            'titleHoverColor' => '',
            'titleSpacing' => (object) array('lg' => 16,'unit' => 'px',),
            'titleHoverEffect' => 'none',
            'titleAnimationColor' => 'Black',
            'descriptionWidth' => (object) array('lg' => '','unit' => 'px',),
            'descriptionLimit' => 190,
            'descriptionTypo' => (object) array('openTypography' => 1,'size' => array('lg' => 16,'unit' => 'px',),'height' => array('lg' => 18,'unit' => 'px',),'decoration' => 'none','family' => '','weight' => 400,),
            'descriptionColor' => '#0e1523',
            'descriptionHoverColor' => '',
            'descriptionSpacing' => (object) array('lg' => 10,'unit' => 'px',),
            'priceOverDescription' => false,
            'priceTypo' => (object) array('openTypography' => 1,'size' => array('lg' => 18,'unit' => 'px',),'height' => array('lg' => 18,'unit' => 'px',),'decoration' => 'none','family' => '','weight' => 400,),
            'salePriceColor' => '#0e1523',
            'regularPriceColor' => '#0e1523',
            'priceItemSpacing' => (object) array('lg' => 10,'unit' => 'px',),
            'priceSpacing' => (object) array('lg' => 20,'unit' => 'px',),
            'showPriceLabel' => true,
            'priceLabelText' => 'Price: ',
            'showQty' => true,
            'showPlusMinus' => true,
            'cartQtyColor' => '',
            'cartQtyBg' => '#e4e4e4',
            'cartQtyBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 0,'right' => 0,'bottom' => 0,'left' => 0,),'color' => '#f5f5f5','type' => 'solid',),
            'cartQtyRadius' => (object) array('lg' => (object) array('top' => 0,'right' => 0,'bottom' => 0,'left' => 0,'unit' => 'px',),),
            'cartQtyPadding' => (object) array('top' => 0,'right' => 10,'bottom' => 0,'left' => 10,'unit' => 'px',),
            'plusMinusPosition' => 'right',
            'plusMinusColor' => '',
            'plusMinusBg' => '#e4e4e4',
            'plusMinusHoverColor' => '',
            'plusMinusHoverBg' => '#222',
            'plusMinusSize' => 10,
            'plusMinusBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4','type' => 'solid',),
            'plusMinusRadius' => (object) array('lg' => 0,'unit' => 'px',),
            'plusMinusPadding' => (object) array('lg' => (object) array('top' => 2,'bottom' => 2,'left' => 10,'right' => 10,'unit' => 'px',),),
            'cartText' => 'Add To Cart',
            'cartSpacing' => (object) array('lg' => 3,'unit' => 'px',),
            'cartTextTypo' => (object) array('openTypography' => 1,'size' => array('lg' => 16,'unit' => 'px',),'height' => array('lg' => 18,'unit' => 'px',),'decoration' => 'none','family' => '','weight' => 500,),
            'cartButtonPadding' => (object) array('lg' => (object) array('top' => '9','bottom' => '9','left' => '15','right' => '15','unit' => 'px',),),
            'cartTextColor' => '#fff',
            'cartBgColor' => (object) array('openColor' => 1,'type' => 'color','color' => '#333',),
            'cartButtonBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#dfb0a8','type' => 'solid',),
            'cartButtonRadius' => (object) array('lg' => '2','unit' => 'px',),
            'cartButtonBoxShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4',),
            'cartTextHoverColor' => '#fff',
            'cartHoverBgColor' => (object) array('openColor' => 0,'type' => 'color','color' => '#f5f5f5',),
            'cartButtonHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#dfb0a8','type' => 'solid',),
            'cartButtonHoverBoxShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4',),
            'showImgOverlay' => false,
            'imgHeight' => (object) array('lg' => '350','unit' => 'px',),
            'imgWidth' => (object) array('lg' => '','unit' => '%',),
            'showSaleBadge' => true,
            'imgBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4','type' => 'solid',),
            'imgRadius' => (object) array('lg' => 0,'unit' => 'px',),
            'imgShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4',),
            'imgHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4','type' => 'solid',),
            'imgHoverRadius' => (object) array('lg' => 0,'unit' => 'px',),
            'imgHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4',),
            'saleText' => 'Sale!',
            'salePosition' => 'topLeft',
            'saleDesign' => 'digit',
            'saleStyle' => 'shape1',
            'salesColor' => '#fff',
            'salesBgColor' => '#31b54e',
            'salesTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '11','unit' => 'px',),'spacing' => (object) array('lg' => '0','unit' => 'px',),'height' => (object) array('lg' => '20','unit' => 'px',),'decoration' => 'none','transform' => 'uppercase','family' => '','weight' => '',),
            'salesPadding' => (object) array('lg' => (object) array('top' => 4,'bottom' => 4,'left' => 8,'right' => 8,'unit' => 'px',),),
            'salesRadius' => (object) array('lg' => '2','unit' => 'px',),
            'arrowStyle' => 'leftAngle2#rightAngle2',
            'arrowSize' => (object) array('lg' => '30','unit' => 'px',),
            'arrowWidth' => (object) array('lg' => '45','unit' => 'px',),
            'arrowHeight' => (object) array('lg' => '40','unit' => 'px',),
            'arrowVertical' => (object) array('lg' => '',),
            'leftArrowSpace' => (object) array('lg' => '','unit' => 'px',),
            'rightArrowSpace' => (object) array('lg' => '','unit' => 'px',),
            'arrowColor' => '#ffffff',
            'arrowHoverColor' => '#fff',
            'arrowBg' => 'rgba(0,0,0,0.22)',
            'arrowHoverBg' => '#ff5845',
            'arrowBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4','type' => 'solid',),
            'arrowHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4','type' => 'solid',),
            'arrowRadius' => (object) array('lg' => (object) array('top' => '0','bottom' => '0','left' => '0','right' => '0','unit' => 'px',),),
            'arrowHoverRadius' => (object) array('lg' => (object) array('top' => '0','bottom' => '0','left' => '0','right' => '0','unit' => 'px',),),
            'arrowShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4',),
            'arrowHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4',),
            'dotSpace' => (object) array('lg' => '4','unit' => 'px',),
            'dotVertical' => (object) array('lg' => '-50','unit' => 'px',),
            'dotHorizontal' => (object) array('lg' => '',),
            'dotWidth' => (object) array('lg' => '10','unit' => 'px',),
            'dotHeight' => (object) array('lg' => '10','unit' => 'px',),
            'dotHoverWidth' => (object) array('lg' => '16','unit' => 'px',),
            'dotHoverHeight' => (object) array('lg' => '16','unit' => 'px',),
            'dotBg' => '#f5f5f5',
            'dotHoverBg' => '#000',
            'dotBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4','type' => 'solid',),
            'dotHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4','type' => 'solid',),
            'dotRadius' => (object) array('lg' => (object) array('top' => '50','bottom' => '50','left' => '50','right' => '50','unit' => 'px',),),
            'dotHoverRadius' => (object) array('lg' => (object) array('top' => '50','bottom' => '50','left' => '50','right' => '50','unit' => 'px',),),
            'dotShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4',),
            'dotHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4',),
            'wrapBg' => (object) array('openColor' => 0,'type' => 'color','color' => '#f5f5f5',),
            'wrapBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4','type' => 'solid',),
            'wrapShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4',),
            'wrapRadius' => (object) array('lg' => '','unit' => 'px',),
            'wrapHoverBackground' => (object) array('openColor' => 0,'type' => 'color','color' => '#ff5845',),
            'wrapHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4','type' => 'solid',),
            'wrapHoverRadius' => (object) array('lg' => '','unit' => 'px',),
            'wrapHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4',),
            'wrapMargin' => (object) array('lg' => (object) array('top' => '','bottom' => '','unit' => 'px',),),
            'wrapOuterPadding' => (object) array('lg' => (object) array('top' => '','bottom' => '','left' => '','right' => '','unit' => 'px',),),
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
        register_block_type( 'product-blocks/product-slider',
            array(
                'editor_script' => 'wopb-blocks-editor-script',
                'editor_style'  => 'wopb-blocks-editor-css',
                'render_callback' =>  array( $this, 'content' )
            )
        );
    }

    /**
     * This
     * @return terminal
     */
    public function content( $attr, $noAjax = false ) {
        $block_key = 'product_slider';
        $blocks_settings = wopb_function()->get_setting( $block_key );
        
        if ( wopb_function()->get_setting() == '' || ! array_key_exists( $block_key, wopb_function()->get_setting() ) || $blocks_settings == 'yes' ) {
            $block_name = 'product-slider';
            $wraper_before = $wraper_after = $post_loop = '';
            $attr = wp_parse_args( $attr, $this->get_attributes() );
            $recent_posts = new \WP_Query( wopb_function()->get_query( $attr ) );

            $slider_attr = wc_implode_html_attributes(
                array(
                    'data-slidestoshow'  => wopb_function()->slider_responsive_split( $attr['slidesToShow'] ),
                    'data-autoplay'      => esc_attr( $attr['autoPlay'] ),
                    'data-slidespeed'    => esc_attr( $attr['slideSpeed'] ),
                    'data-showdots'      => esc_attr( $attr['showDots'] ),
                    'data-showarrows'    => esc_attr( $attr['showArrows'] ),
                    'data-fade'          => $attr['slideAnimation'] == 'fade' ? true : false,
                )
            );

            if ( $recent_posts->have_posts() ) {
                ob_start();
                echo '<div '.($attr['advanceId']?'id="'.esc_attr($attr['advanceId']).'" ':'').' class="wp-block-product-blocks-'.esc_attr($block_name).' wopb-block-'.esc_attr($attr["blockId"]).' '.(isset($attr["className"])?esc_attr($attr["className"]):'') . (isset($attr["align"])? ' align' .esc_attr($attr["align"]):'') . ' wopb-product-slider-block">';
?>
                        <div class="wopb-block-wrapper">
                            <div class="wopb-slider-section">
                                <div class="wopb-product-blocks-slide" <?php echo wp_kses_post($slider_attr)?>>
                                    <?php
                                        $idx = $noAjax ? 1 : 0;
                                        
                                        while ( $recent_posts->have_posts() ): $recent_posts->the_post();
                                            include WOPB_PATH . 'blocks/template/data.php';
                                            if($product) {
                                    ?>
                                                <div class="wopb-block-item">
                                                    <div class="wopb-slide-wrap">
                                                        <?php
                                                            echo $this->content_section($product, $attr); //phpcs:ignore
                                                            if($attr['showImage']) {
                                                                echo $this->image_section($product, $_discount, $attr); //phpcs:ignore
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                    <?php
                                            }
                                            $idx ++;
                                        endwhile;
                                    ?>
                                </div>

                                <?php
                                    if ( $attr['showArrows'] ) {
                                        $nav = explode('#', $attr['arrowStyle']);
                                ?>
                                    <div class="wopb-slick-nav" style="display:none">
                                        <div class="wopb-slick-prev">
                                            <div class="slick-arrow slick-prev">
                                                <?php echo wopb_function()->svg_icon($nav[0]); //phpcs:ignore ?> 
                                            </div>
                                        </div>
                                        <div class="wopb-slick-next">
                                            <div class="slick-arrow slick-next">
                                                <?php echo wopb_function()->svg_icon($nav[1]); //phpcs:ignore ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                    }
                                ?>

                            </div>
                        </div>
                    </div>
                <?php
                return ob_get_clean();
            }
        }
    }

    public function content_section( $product, $attr ) {
?>
        <div class="wopb-content-section">
            <?php
                if(!$attr['taxonomyUnderTitle']) {
                    echo $this->taxonomyContent($product, $attr); //phpcs:ignore
                }
                if($attr['showTitle']) {
            ?>
                    <<?php esc_attr_e($attr['titleTag']); ?> class="wopb-product-title <?php esc_attr_e($attr['titleHoverEffect'] == 'none' ? '' :  'wopb-title-' . $attr['titleHoverEffect']) ?>">
                    <a href="<?php echo esc_url(get_permalink($product->get_id())) ?>">
                        <?php _e($product->get_title(), 'product-blocks'); //phpcs:ignore ?>
                    </a>
                    </<?php esc_attr_e($attr['titleTag']) ?>>
            <?php
                }
                if($attr['taxonomyUnderTitle']) {
                    echo $this->taxonomyContent($product, $attr); //phpcs:ignore
                }
                if($attr['priceOverDescription']) {
                    echo $this->priceContent($product, $attr); //phpcs:ignore
                }
                if($attr['showDescription']) {
            ?>
                <div class="wopb-product-excerpt">
                    <?php
                        $product_excerpt = strlen($product->get_short_description()) > $attr['descriptionLimit'] ? substr($product->get_short_description(), 0, $attr['descriptionLimit']) . '...' : $product->get_short_description();
                        _e($product_excerpt); //phpcs:ignore
                    ?>
                </div>
            <?php
                }
                if(!$attr['priceOverDescription']) {
                    echo $this->priceContent($product, $attr); //phpcs:ignore
                }
                echo $this->cartContent($product, $attr); //phpcs:ignore
            ?>
        </div>

<?php
    }

    public function image_section($product, $_discount, $attr) {
        $shapeClass = "";
        $shape = "";
        if($attr['saleStyle'] === "shape1") {
            $shapeClass = "wopb-onsale-shape";
            switch ($attr['saleStyle']) {
                case "shape1":
                    $shape = wopb_function()->svg_icon('saleShape1');
                    break;
                default:
                    break;
            }
        }
?>
        <div class="wopb-image-section">
             <span class="wopb-product-image">
                <?php
                    if($attr['showImgOverlay']) {
                        echo '<div class="wopb-image-overlay"></div>';
                    }
                    if($attr['showSaleBadge'] && $product->is_on_sale() && $_discount) {
                ?>
                    <div class="wopb-onsale-hot <?php echo esc_attr($shapeClass); ?>">
                        <?php
                            if($shape !== '') {
                        ?>
                                <span class="wopb-sale-shape">
                                    <?php
                                        echo $shape; //phpcs:ignore
                                        echo $this->saleStyle($_discount, $attr); //phpcs:ignore
                                    ?>
                                </span>
                        <?php
                            }else {
                                echo $this->saleStyle($_discount, $attr); //phpcs:ignore
                            }
                        ?>
                    </div>
                <?php
                    }
                    if($product->get_image_id() && wp_get_attachment_image_src($product->get_image_id(), 'large')[0]) {
                ?>
                        <a href="<?php echo esc_url(get_permalink($product->get_id())) ?>">
                            <img class="wopb-block-image" alt="<?php esc_attr_e($product->get_title()); ?>" src="<?php echo esc_url(wp_get_attachment_image_src($product->get_image_id(), 'large')[0]) ?>"/>
                        </a>
                <?php }else { ?>
                        <a href="<?php echo esc_url(get_permalink($product->get_id())) ?>">
                            <img class="wopb-block-image wopb-fallback-image" alt="<?php esc_attr_e($product->get_title()); ?>" src="<?php echo esc_url(WOPB_URL . 'assets/img/wopb-fallback-img.png'); ?>"/>
                        </a>
                <?php
                    }
                ?>
             </span>
        </div>
<?php
    }

    public function saleStyle($_discount, $attr) {
?>
        <span class="wopb-onsale wopb-onsale-<?php esc_attr_e($attr["saleStyle"]); ?>">
            <?php
                if($attr["saleDesign"] == 'digit') {
                    esc_html_e('-'.$_discount);
                }elseif($attr["saleDesign"] == 'text') {
                    isset($attr["saleText"]) ? esc_html_e($attr["saleText"]) : esc_html__('Sale!', 'product-blocks');
                }elseif($attr["saleDesign"] == 'textDigit') {
                    echo esc_html('-'.$_discount) . esc_html__(' Off', 'product-blocks');
                }
            ?>
        </span>
<?php
    }

    public function taxonomyContent($product, $attr) {
        if($attr['showTaxonomy']) {
?>
            <div class="wopb-product-taxonomies">
                <?php
                    $categories = get_the_terms($product->get_id(), 'product_cat');
                    if($attr['taxonomyType'] == 'product_cat' && $categories) {
                        foreach ($categories as $category) {
                ?>
                            <a href="<?php echo esc_url(get_term_link( $category->term_id )) ?>" class="wopb-taxonomy"><?php _e($category->name, 'product-blocks') ?></a>
                <?php
                        }
                    }
                    $tags = get_the_terms($product->get_id(), 'product_tag');
                    if($attr['taxonomyType'] == 'product_tag' && $tags) {
                        foreach ($tags as $tag) {
                ?>
                            <a href="<?php echo esc_url(get_term_link( $tag->term_id )) ?>" class="wopb-taxonomy"><?php _e($tag->name, 'product-blocks') ?></a>
                <?php } } ?>
            </div>

<?php

        }
    }

    public function priceContent($product, $attr) {
        if($attr['showPrice'] && $product->get_price_html()) {
?>
            <div class="wopb-product-price-section">
                <span class="wopb-product-price">
                    <?php
                        if($attr['showPriceLabel'] && $attr['priceLabelText']) {
                    ?>
                        <span class="wopb-price-label"><?php esc_html_e($attr['priceLabelText']); ?></span>
                    <?php
                        }
                    ?>
                    <span class="wopb-prices wopb-<?php echo $product->get_type()?>-price">
                        <?php echo $product->get_price_html(); ?>
                    </span>
                </span>
            </div>
<?php
        }
    }

    public function cartContent($product, $attr) {
        if($attr['showCart']) {
?>
            <div class="wopb-product-cart-section wopb-cart-action">
                <form action="#" class="cart">
                    <?php if($attr['showQty'] && $product->is_type('simple')) { ?>
                        <div class="quantity">
                            <?php if($attr['showPlusMinus'] && $attr['plusMinusPosition'] == 'both') { ?>
                                <span class="wopb-cart-minus wopb-add-to-cart-minus"><?php echo wopb_function()->svg_icon('minus'); //phpcs:ignore ?></span>
                        <?php } ?>
                            <input type="number" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputMode="numeric"/>
                        <?php if($attr['showPlusMinus'] && $attr['plusMinusPosition'] == 'both') { ?>
                            <span class="wopb-cart-plus wopb-add-to-cart-plus"><?php echo wopb_function()->svg_icon('plus'); //phpcs:ignore ?></span>
                        <?php
                            }
                            if($attr['showPlusMinus'] && ($attr['plusMinusPosition'] == 'left' || $attr['plusMinusPosition'] == 'right')) {
                        ?>
                            <span class="wopb-cart-plus-minus-icon">
                                <?php echo $this->plusMinusContent(); //phpcs:ignore ?>
                            </span>
                        <?php
                            }
                        ?>
                        </div>
                    <?php
                        }
                        $cart_btn_class = '';
                        $cart_text = $product->add_to_cart_text();
                        if($product->is_type('simple')) {
                            $cart_btn_class = 'single_add_to_cart_button ajax_add_to_cart';
                            if($attr['cartText'])
                                $cart_text = $attr['cartText'] ? $attr['cartText'] : $cart_text;
                        }
                    ?>
                            <a href="<?php echo esc_url($product->add_to_cart_url()) ?>" class="wopb-product-cart <?php echo esc_html($cart_btn_class); ?>" data-postid="<?php esc_attr_e($product->get_id()) ?>"><?php _e($cart_text, 'product-blocks')?></a>
                </form>
            </div>
<?php
        }
    }

    public function plusMinusContent() {
?>
        <span class="wopb-cart-plus wopb-add-to-cart-plus"><?php echo wopb_function()->svg_icon('plus'); //phpcs:ignore ?></span>
        <span class="wopb-cart-minus wopb-add-to-cart-minus"><?php echo wopb_function()->svg_icon('minus'); //phpcs:ignore ?></span>
<?php
    }

}