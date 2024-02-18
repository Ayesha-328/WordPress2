<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Product_Image{

    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }

    public function get_attributes() {
        return array(
            'blockId' => '',
            'previews' => '',
            'showGallery' => true,
            'showSale' => true,
            'showlightBox' => true,
            'arrowLargeImage' => true,
            'arrowGalleryImage' => true,
            'imageView' => 'onclick',
            'imageHeight' => (object) array('lg' => '','unit' => 'px'),
            'imageScale' => 'cover',
            'imageBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'imageRadius' => (object) array('lg' => (object) array('top' => '','bottom' => '','left' => '','right' => '','unit' => 'px')),
            'galleryPosition' => 'bottom',
            'galleryColumns' => (object) array('lg' => '4','sm' => '2','xs' => '2'),
            'gallerycolumnGap' => (object) array('lg' => '10','unit' => 'px'),
            'gallerySpace' => (object) array('lg' => '20','unit' => 'px'),
            'saleText' => 'Sale!',
            'salePosition' => 'topLeft',
            'saleDesign' => 'text',
            'saleStyle' => 'classic',
            'salesColor' => '#fff',
            'salesBgColor' => '#31b54e',
            'salesTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '11','unit' => 'px'),'spacing' => (object) array('lg' => '0','unit' => 'px'),'height' => (object) array('lg' => '20','unit' => 'px'),'decoration' => 'none','transform' => 'uppercase','family' => '','weight' => ''),
            'salesPadding' => (object) array('lg' => (object) array('top' => 4,'bottom' => 4,'left' => 8,'right' => 8,'unit' => 'px')),
            'salesRadius' => (object) array('lg' => '2','unit' => 'px'),
            'salesMargin' => (object) array('lg' => (object) array('top' => 4,'bottom' => 4,'left' => 8,'right' => 8,'unit' => 'px')),
            'iconPosition' => 'topRight',
            'zoomIconSize' => (object) array('lg' => '20','unit' => 'px'),
            'iconColor' => '#000',
            'iconHoverColor' => '#000',
            'iconBg' => '',
            'iconHoverBg' => '',
            'iconBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'iconHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'iconRadius' => (object) array('lg' => (object) array('top' => '','bottom' => '','left' => '','right' => '','unit' => 'px')),
            'iconHoverRadius' => (object) array('lg' => (object) array('top' => '','bottom' => '','left' => '','right' => '','unit' => 'px')),
            'iconPadding' => (object) array('lg' => (object) array('unit' => 'px')),
            'iconMargin' => (object) array('lg' => (object) array('unit' => 'px')),
            'arrowSize' => (object) array('lg' => '','unit' => 'px'),
            'arrowWidth' => (object) array('lg' => '','unit' => 'px'),
            'arrowHeight' => (object) array('lg' => '','unit' => 'px'),
            'arrowVartical' => (object) array('lg' => '','unit' => 'px'),
            'arrowHorizontal' => (object) array('lg' => ''),
            'arrowColor' => '',
            'arrowHoverColor' => '',
            'arrowBg' => '',
            'arrowHoverBg' => '',
            'arrowBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'arrowHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4','type' => 'solid'),
            'arrowRadius' => (object) array('lg' => (object) array('top' => '','bottom' => '','left' => '','right' => '','unit' => 'px')),
            'arrowHoverRadius' => (object) array('lg' => (object) array('top' => '','bottom' => '','left' => '','right' => '','unit' => 'px')),
            'arrowShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'arrowHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#009fd4'),
            'arrowGallerySize' => (object) array('lg' => '','unit' => 'px'),
            'arrowGalleryColor' => '',
            'arrowGalleryHoverColor' => '',
            'arrowGalleryBg' => '',
            'arrowGalleryHoverBg' => '',
            'arrowGalleryPadding' => (object) array('lg' => (object) array('unit' => 'px')),
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
        register_block_type( 'product-blocks/product-image',
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
        $block_name = 'product-image';
        $wraper_before = $wraper_after = $content = '';
        $attr = wp_parse_args( $attr, $this->get_attributes() );
        
        if ( ! empty( $product ) ) {
            global $productx_settings;
            $wraper_before .= '<div '.($attr['advanceId']?'id="'.esc_attr($attr['advanceId']).'" ':'').' class="wp-block-product-blocks-'.esc_attr($block_name).' wopb-block-'.esc_attr($attr["blockId"]).' '.(isset($attr["className"])?esc_attr($attr["className"]):'').'">';
            $wraper_before .= '<div class="wopb-product-wrapper wopb-product-gallery-'.esc_attr($attr['galleryPosition']).'">';

            global $productx_sales;
            global $productx_sales_text;
            $sales = $product->get_sale_price();
            $regular = $product->get_regular_price();
            $percentage = ($regular && $sales) ? round((($regular - $sales) / $regular) * 100) : 0;
            if ($attr['showSale'] && $percentage) {
                $productx_sales_text = $attr["saleDesign"] == "textDigit" ? '-'.esc_attr($percentage).'% '.esc_attr($attr["saleText"]) : ($attr["saleDesign"] == "digit" ? '-'.esc_attr($percentage).'%' : esc_attr($attr["saleText"]));
                $flash_sale = function() {
                    global $productx_sales_text;
                    return '<div class="wopb-product-gallery-sale-tag">'.esc_html($productx_sales_text).'</div>';
                };
                add_filter('woocommerce_sale_flash', $flash_sale);
                ob_start();
                woocommerce_show_product_sale_flash();
                $productx_sales = ob_get_clean();
                remove_filter( 'woocommerce_sale_flash', $flash_sale );
            }

            $gallery_classes = function($classes) {                
                if ( in_array( 'woocommerce-product-gallery', $classes ) ) {
                    $classes[] = 'woocommerce-product-gallery';
                    $classes[array_search('green', $classes)] = ' woocommerce-product-gallery-off';
                    $classes[] = 'slider';
                }
                return $classes;
            };

            $image_html = function( $gallery, $post_id ) {
                return '';
            };

            $productx_settings['onview'] = $attr['imageView'];
            $productx_settings['showlight'] = $attr['showlightBox'];
            $productx_settings['position'] = $attr['galleryPosition'];
            $productx_settings['showArrow'] = $attr['arrowLargeImage'];
            $productx_settings['showGalleryArrow'] = $attr['arrowGalleryImage'];
            $productx_settings['column'] = (array)$attr['galleryColumns'];
            $productx_settings['showGallery'] = $attr['showGallery'];

            $slick_html = function() {
                global $product;
                global $productx_settings;
                global $productx_sales;
                $attachment = $product->get_image_id();
                $gallery    = $product->get_gallery_image_ids();

                $all_id = [];
                if ( ! empty( $attachment ) ) {
                    $all_id[] = $attachment;
                }
                if ( ! empty( $gallery ) ) {
                    $all_id = array_merge( $all_id, $gallery );
                }

                $image_full = $image_thumb = '';
                $gallery_thumbnail = wc_get_image_size( 'gallery_thumbnail' );
                $thumbnail_size = apply_filters( 'woocommerce_gallery_thumbnail_size', array( $gallery_thumbnail['width'], $gallery_thumbnail['height'] ) );
                $full_size = apply_filters( 'woocommerce_gallery_full_size', apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' ) );
                
                foreach ($all_id as $key => $attachment_id) {
                    $thumbnail_src = wp_get_attachment_image_src( $attachment_id, $thumbnail_size );
                    $full_src = wp_get_attachment_image_src( $attachment_id, $full_size );
                    $alt_text = trim( wp_strip_all_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) );
                    $image_full .= '<div><img src="'.esc_url($full_src[0]).'" alt="'.esc_attr($alt_text).'" data-width="'.esc_attr($full_src[1]).'" data-height="'.esc_attr($full_src[2]).'"/></div>';
                    $image_thumb .= '<div><img src="'.esc_url($thumbnail_src[0]).'" alt="'.esc_attr($alt_text).'" /></div>';
                }

                echo '<div class="wopb-product-gallery-wrapper' . ($productx_settings['showlight'] ? ' wopb-product-zoom-wrapper' : '' ). '">';
                    if ($productx_settings['showlight']) {
                        echo '<a href="#" class="wopb-product-zoom"><svg enable-background="new 0 0 612 612" version="1.1" viewBox="0 0 612 612" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="m243.96 340.18-206.3 206.32 0.593-125.75c0-10.557-8.568-19.125-19.125-19.125s-19.125 8.568-19.125 19.125v172.12c0 5.661 2.333 10.232 6.043 13.368 3.462 3.538 8.282 5.757 13.637 5.757h171.57c10.557 0 19.125-8.567 19.125-19.125 0-10.557-8.568-19.125-19.125-19.125h-126.78l206.53-206.51-27.043-27.061zm362-334.42c-3.461-3.538-8.28-5.757-13.616-5.757h-171.59c-10.557 0-19.125 8.568-19.125 19.125s8.568 19.125 19.125 19.125h126.76l-206.51 206.53 27.042 27.042 206.32-206.32-0.612 125.75c0 10.557 8.568 19.125 19.125 19.125s19.125-8.568 19.125-19.125v-172.12c0-5.661-2.333-10.231-6.044-13.368z"/></svg></a>';
                    }
                    if($productx_sales) {
                        echo wp_kses_post($productx_sales);
                    }
                    echo '<div class="slider wopb-builder-slider-for" data-arrow="'.esc_attr($productx_settings['showArrow']).'">';
                    if($image_full) {
                        echo wp_kses_post($image_full);
                    }
                    echo '</div>';
                echo '</div>';
                if ( count( $all_id ) > 1 ) {
                    $lg = isset($productx_settings['column']['lg']) ? $productx_settings['column']['lg'] : 4;
                    $md = isset($productx_settings['column']['md']) ? $productx_settings['column']['md'] : 4;
                    $sm = isset($productx_settings['column']['sm']) ? $productx_settings['column']['sm'] : 2;
                    $xs = isset($productx_settings['column']['xs']) ? $productx_settings['column']['xs'] : 2;
                    if ( $productx_settings['showGallery'] ) {
                        echo '<div class="slider wopb-builder-slider-nav thumb-image" data-arrow="'.esc_attr($productx_settings['showGalleryArrow']).'" data-view="'.esc_attr($productx_settings['onview']).'" data-position="'.esc_attr($productx_settings['position']).'" data-collg="'.esc_attr($lg).'" data-colmd="'.esc_attr($md).'" data-colsm="'.esc_attr($sm).'" data-colxs="'.esc_attr($xs).'">';
                        if ( $image_thumb ) {
                            echo wp_kses_post( $image_thumb );
                        }
                        echo '</div>';
                    }
                }

            };



            add_action( 'woocommerce_product_thumbnails', $slick_html );
            
            add_filter( 'woocommerce_single_product_image_gallery_classes', $gallery_classes );
            add_filter( 'woocommerce_single_product_image_thumbnail_html', $image_html, 10, 2 );

            ob_start();
            woocommerce_show_product_images();
            $content .= ob_get_clean();

            remove_filter( 'woocommerce_single_product_image_gallery_classes', $gallery_classes );
            remove_filter( 'woocommerce_single_product_image_thumbnail_html', $image_html, 10, 2 );

            $wraper_after .= '</div>';
            $wraper_after .= '</div>';
            
            remove_action( 'woocommerce_product_thumbnails', $slick_html );
        }

        return $wraper_before.$content.$wraper_after;
    }

}

