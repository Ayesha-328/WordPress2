<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Archive_Title{
    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }

    public function get_attributes() {
        return array(
            'blockId' => '',
            'layout' => '1',
            'contentAlign' => 'left',
            'excerptShow' => true,
            'prefixShow' => false,
            'showImage' => false,
            'titleTag' => 'h1',
            'customTaxTitleColor' => false,
            'seperatorTaxTitleLink' => admin_url( 'edit-tags.php?taxonomy=category' ),
            'titleColor' => '',
            'titleTypo' => (object) array('openTypography' => 0,'size' => (object) array('lg' => '28','unit' => 'px',),'spacing' => (object) array('lg' => '0','unit' => 'px',),'height' => (object) array('lg' => '32','unit' => 'px',),'transform' => '','decoration' => 'none','family' => '','weight' => '',),
            'titlePadding' => (object) array('lg' => (object) array('unit' => 'px',),),
            'titleAlign' => (object) array('lg' => 'center','sm' => 'center','xs' => 'center',),
            'excerptColor' => '',
            'excerptTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => 14,'unit' => 'px',),'height' => (object) array('lg' => '22','unit' => 'px',),'decoration' => 'none','family' => '',),
            'excerptPadding' => (object) array('lg' => (object) array('top' => '0','bottom' => '','unit' => 'px',),),
            'excerptAlign' => (object) array('lg' => 'center','sm' => 'center','xs' => 'center',),
            'prefixText' => 'Sample Prefix Text',
            'prefixColor' => '',
            'prefixTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '','unit' => 'px',),'spacing' => (object) array('lg' => '0','unit' => 'px',),'height' => (object) array('lg' => '','unit' => 'px',),'transform' => 'capitalize','decoration' => 'none','family' => '','weight' => '',),
            'prefixPadding' => (object) array('lg' => (object) array('top' => 10,'bottom' => 5,'unit' => 'px',),),
            'imgWidth' => (object) array('lg' => '','unit' => '%',),
            'imgHeight' => (object) array('lg' => '','unit' => 'px',),
            'imgSpacing' => (object) array('lg' => '10',),
            'TaxAnimation' => 'none',
            'TaxWrapBg' => '',
            'TaxWrapBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4','type' => 'solid',),
            'TaxWrapHoverBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4','type' => 'solid',),
            'TaxWrapShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4',),
            'TaxWrapHoverShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4',),
            'TaxWrapRadius' => (object) array('lg' => (object) array('top' => '','bottom' => '','unit' => 'px',),),
            'TaxWrapHoverRadius' => (object) array('lg' => (object) array('top' => '','bottom' => '','unit' => 'px',),),
            'customOpacityTax' => 0.6,
            'customTaxOpacityHover' => 0.9,
            'TaxWrapPadding' => (object) array('lg' => (object) array('top' => '20','bottom' => '20','left' => '20','right' => '20','unit' => 'px',),),
            'wrapBg' => (object) array('openColor' => 0,'type' => 'color','color' => '#f5f5f5',),
            'wrapBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4','type' => 'solid',),
            'wrapShadow' => (object) array('openShadow' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1,),'color' => '#009fd4',),
            'wrapRadius' => (object) array('lg' => '','unit' => 'px',),
            'wrapHoverBackground' => (object) array('openColor' => 0,'type' => 'color','color' => '#037fff',),
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
        register_block_type( 'product-blocks/archive-title',
            array(
                'editor_script' => 'wopb-blocks-builder-script',
                'editor_style'  => 'wopb-blocks-editor-css',
                'render_callback' =>  array($this, 'content')
            )
        );
    }

    public function get_data() {
        if ( is_admin() ) {
            // For Demonstration Purpose
            return [
                'title' => 'Archive Title',
                'image' => WOPB_URL.'assets/img/blocks/builder/builder-fallback.jpg',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam molestie aliquet molestie.',
            ];
        } else {
            if ( is_archive() ) {
                if ( is_product_category() ) {
                    $obj = get_queried_object();
                    $attachment_id = get_term_meta( $obj->term_id, 'thumbnail_id', true );
                    return [
                        'title' => $obj->name,
                        'image' => $attachment_id ? wp_get_attachment_url($attachment_id) : '',
                        'desc' => $obj->description,
                    ];
                } else if ( is_product_tag() ) {
                    $obj = get_queried_object();
                    $attachment_id = get_term_meta( $obj->term_id, 'thumbnail_id', true );
                    return [
                        'title' => $obj->name,
                        'image' => $attachment_id ? wp_get_attachment_url($attachment_id) : '',
                        'desc' => $obj->description,
                    ];
                } else if ( is_product_category() || is_tag() ) {
                    $obj = get_queried_object();
                    $attachment_id = get_term_meta( $obj->term_id, 'thumbnail_id', true );
                    return [
                        'title' => $obj->name,
                        'image' => '',
                        'desc' => $obj->description,
                    ];
                } else if ( is_date() ) {
                    $date = '';
                    if ( is_year() ) {
                        $date = get_the_date('Y');
                    } else if ( is_month() ) {
                        $date = get_the_date('F Y');
                    } else if ( is_day() ) {
                        $date = get_the_date('F j, Y');
                    }
                    return [
                        'title' => $date,
                        'image' => '',
                        'desc' => '',
                    ];
                } else if ( is_author() ) {
                    return [
                        'title' => get_the_author_meta( 'display_name' ),
                        'image' => get_avatar_url( get_the_author_meta( 'ID' ) ),
                        'desc' => get_the_author_meta( 'user_email' ),
                    ];
                } else if ( is_tax() ) {
                    $obj = get_queried_object();
                    $attachment_id = get_term_meta( $obj->term_id, 'thumbnail_id', true );
                    return [
                        'title' => $obj->name,
                        'image' => $attachment_id ? wp_get_attachment_url($attachment_id) : '',
                        'desc' => $obj->description,
                    ];
                } else if ( is_search() ) {
                    return [
                        'title' => get_search_query(),
                        'image' => '',
                        'desc' => '',
                    ];
                }
            } else if ( is_search() ) {
                return [
                    'title' => get_search_query(),
                    'image' => '',
                    'desc' => '',
                ];
            }
            return ['title' => '', 'image' => '', 'desc' => ''];   
        }
    }


    public function content( $attr, $noAjax ) {
        $data = $this->get_data(); // Dummy
        $block_name = 'archive-title';
        $wraper_before = $wraper_after = $post_loop = '';
        $attr = wp_parse_args( $attr, $this->get_attributes() );

        $wraper_before .= '<div '.($attr['advanceId']?'id="'.esc_attr($attr['advanceId']).'" ':'').' class="wp-block-product-blocks-'.esc_attr($block_name).' wopb-block-'.esc_attr($attr["blockId"]).''.(isset($attr["align"])? ' align' .esc_attr($attr["align"]):'').''.(isset($attr["className"])?' '.esc_attr($attr["className"]):'').'">';
            $wraper_before .= '<div class="wopb-block-wrapper">';
            $wraper_before .= '<div class="wopb-block-archive-title wopb-archive-layout-'.esc_attr($attr['layout']).'">';

            $style = ($attr['layout'] == '2' && $data['image']) ? 'style="background-image: url('.esc_url($data['image']).')"' : '';
            $prefix = ($attr['prefixShow'] && $attr['prefixText']) ? '<span class="wopb-archive-prefix">'.esc_html($attr['prefixText']).'</span> ' : '';
    
            $name = ($data['title']) ? '<'.esc_attr($attr['titleTag']).' class="wopb-archive-name">'.$prefix.esc_html($data['title']).'</'.esc_attr($attr['titleTag']).'>' : '';
            
            $excerpt = ($attr['excerptShow'] && $data['desc']) ? '<div class="wopb-archive-desc">'.esc_html($data['desc']).'</div>' : '';

                // Prefix
                switch ( $attr['layout'] ) {
                    case 1:
                        $img = ($attr['showImage'] && $data['image']) ? '<img class="wopb-archive-image" src="'.esc_url($data['image']).'" alt="'.esc_attr($data['title']).'"/>' : '';
                        $post_loop .= $img.$name.$excerpt;
                        break;
                    case 2:
                        $post_loop .= '<div class="wopb-archive-content" '.wp_kses_post($style).'><div class="wopb-archive-overlay"></div>'.wp_kses_post($name.$excerpt).'</div>';
                        break;
                }
            
            $wraper_after .= '</div>';
            $wraper_after .= '</div>';
        $wraper_after .= '</div>';

        return $wraper_before.$post_loop.$wraper_after;
    }

}