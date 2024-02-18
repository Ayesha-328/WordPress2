<?php
namespace WOPB\blocks;

defined('ABSPATH') || exit;

class Currency_Switcher {
    public function __construct() {
        add_action( 'init', array( $this, 'register' ) );
    }

    public function get_attributes() {
        return array (
            'blockId' => '',
            'currencySymbolPosition' => 'leftDollar',
            'containerRadius' => (object) array('lg' => (object) array('top' => 4,'right' => 4,'bottom' => 4,'left' => 4,'unit' => 'px')),
            'containerMargin' => (object) array('lg' => (object) array('top' => 0,'right' => 0,'bottom' => 0,'left' => 0,'unit' => 'px')),
            'containerPadding' => (object) array('lg' => (object) array('top' => 10,'right' => 15,'bottom' => 10,'left' => 15,'unit' => 'px')),
            'countryNameShow' => true,
            'showFlag' => true,
            'flagSpace' => '6',
            'flagHeight' => '26',
            'flagWidth' => '26',
            'flagBorder' => (object) array('openBorder' => 0,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#e5e5e5','type' => 'solid'),
            'flagRadius' => (object) array('lg' => (object) array('top' => 4,'right' => 4,'bottom' => 4,'left' => 4,'unit' => 'px')),
            'arrowSize' => '13',
            'fieldTextColor' => '#000',
            'fieldTextHoverColor' => '#000',
            'fieldBg' => (object) array('openColor' => 0,'type' => 'color','color' => ''),
            'fieldHoverBg' => (object) array('openColor' => 0,'type' => 'color','color' => ''),
            'fieldBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#e5e5e5','type' => 'solid'),
            'fieldHoverBorder' => (object) array('openBorder' => 1,'width' => (object) array('top' => 1,'right' => 1,'bottom' => 1,'left' => 1),'color' => '#e5e5e5','type' => 'solid'),
            'optionBg' => (object) array('openColor' => 1,'type' => 'color','color' => '#f0eeee'),
            'optionHoverBg' => (object) array('openColor' => 0,'type' => 'color','color' => ''),
            'prefixText' => 'Currency Switcher',
            'prefixColor' => '#000',
            'prefixTypo' => (object) array('openTypography' => 1,'size' => (object) array('lg' => '16','unit' => 'px'),'height' => (object) array('lg' => '','unit' => 'px'),'decoration' => 'none','transform' => 'capitalize','weight' => '500'),
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
        register_block_type( 'product-blocks/currency-switcher',
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
        $wraper_before = '';
        $block_name = 'currency-switcher';
        $attr = wp_parse_args( $attr, $this->get_attributes() );
        $wopb_currency_switcher = wopb_function()->get_setting('wopb_currency_switcher');
        
        $wraper_before .= '<div '.($attr['advanceId']?'id="'.esc_attr($attr['advanceId']).'" ':'').' class="wp-block-product-blocks-'.esc_attr($block_name).' wopb-block-'.esc_attr($attr["blockId"]).' '.(isset($attr["className"])?esc_attr($attr["className"]):'').'">';
            $wraper_before .= '<div class="wopb-block-wrapper">';

                if ( $wopb_currency_switcher === 'true' && wopb_function()->is_lc_active() ) {
                    $currency_code_options = get_woocommerce_currencies();
                    foreach ( wopb_function()->get_setting('wopb_currencies') as $key => $currency ) {
                        if ( $attr['currencySymbolPosition']=='leftDollar' ) {
                            $added_currency[$currency['wopb_currency']] = '( ' . get_woocommerce_currency_symbol( $currency['wopb_currency'] ) . ' ) '.$currency_code_options[$currency['wopb_currency']].' '.$currency['wopb_currency'];
                        } else if ( $attr['currencySymbolPosition'] =='rightDollar' ) {
                            $added_currency[$currency['wopb_currency']] = $currency_code_options[$currency['wopb_currency']].'( ' . get_woocommerce_currency_symbol( $currency['wopb_currency'] ) . ' ) '.' '.$currency['wopb_currency'];
                        }
                    }
                    $wopb_current_currency = array_key_exists( wopb_function()->get_setting('wopb_current_currency') , $added_currency) ?  wopb_function()->get_setting('wopb_current_currency') : wopb_function()->get_setting('wopb_default_currency');
                    $wraper_before .= '<div class="wopb-currency-switcher-prefixText">'.$attr['prefixText'].'</div>';

                    $wraper_before .= '<div class="wopb-currency-switcher-container">';
                        $wraper_before .= '<div class="wopb-selected-currency-container">';
                            $wraper_before .= isset($added_currency) && count($added_currency) > 1 ? '<span class="wopb-currency-arrow"></span>' : '';
                            if ( $attr['countryNameShow'] ) {
                                $wraper_before .= '<div class="wopb-selected-currency" value="">'.( $attr['showFlag'] ? '<img src="https://raw.githubusercontent.com/wpxpo/wpxpo_profile/main/country_flags/'.strtolower($wopb_current_currency).'.png" alt="flag"> ':'').$added_currency[$wopb_current_currency].'</div>';
                            } else {
                                $currency = '/\( ([^)]+) \)/';
                                $countryCode = preg_match($currency,$added_currency[$wopb_current_currency],$countryCodeMatches);
                                $Code = '/\b[A-Z]{3}\b/';
                                if ( preg_match( $Code, $added_currency[$wopb_current_currency], $currencyMatches ) ) {  
                                    $wraper_before .= '<div class="wopb-selected-currency" value="">'.( $attr['showFlag'] ? '<img src="https://raw.githubusercontent.com/wpxpo/wpxpo_profile/main/country_flags/'.strtolower($wopb_current_currency).'.png" alt="flag"> ':'').$countryCodeMatches[0]." ".$currencyMatches[0].'</div>';
                                }
                            }
                            
                        $wraper_before .= '</div>';

                        if ( isset( $added_currency ) && count( $added_currency ) > 1 ) {
                            $wraper_before .= '<div name="wopb_current_currency" class="wopb-set-default-currency" style="display:none">';
                                $wraper_before .= '<ul class="wopb-select-container" >';
                                    foreach ( $added_currency as $key => $label ) {
                                        if ( $attr['countryNameShow'] ) {
                                            $wraper_before .= '<li class="'.( $wopb_current_currency == $key ? "hide-currency" : '' ).'" value="'.esc_attr($key).'">'.( $attr['showFlag'] ? '<img src="https://raw.githubusercontent.com/wpxpo/wpxpo_profile/main/country_flags/'.strtolower($key).'.png" alt="flag"> ':'').strip_tags( esc_html($label) ).'</li>';
                                        } else {
                                            $currency = '/\( ([^)]+) \)/';
                                            if ( preg_match( $currency, $label, $currencyMatches ) ) {
                                              $wraper_before .= '<li class="'.( $wopb_current_currency == $key ? "hide-currency" : '' ).'" value="'.esc_attr($key).'">'.( $attr['showFlag'] ? '<img src="https://raw.githubusercontent.com/wpxpo/wpxpo_profile/main/country_flags/'.strtolower($key).'.png" alt="flag"> ':'').strip_tags( $currencyMatches[0]." ".$key ).'</li>';                     
                                            }
                                        }
                                    }
                                $wraper_before .= '</ul>';
                            $wraper_before .= '</div>';
                        }
                    $wraper_before .= '</div>';
                }else {
                    $wraper_before .= '<div class="wopb-currency-switcher-container-pro-message">Enable Currency Switcher Addon to use this block.</div>';
                }

            $wraper_before .= '</div>';
        $wraper_before .= '</div>';
        return $wraper_before;
    }

}