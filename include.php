<?php
namespace ShopProdTax;
if ( ! defined( 'ABSPATH' ) ) exit;
use ShopProdTax\PageSettings\Page_Settings;
define( "SHPT_ASFSK_ASSETS_PUBLIC_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/public" );
define( "SHPT_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/admin" );
class ClassShopProdTax {
	private static $_instance = null;
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function dyptt_all_assets_for_the_admin(){
		$all_css_js_file = array(
			'dyptt-style' => array('dyptt_path_define'=>SHPT_ASFSK_ASSETS_ADMIN_DIR_FILE . '/style.css'),

			'dyptt-script' => array('dyptt_path_define'=>SHPT_ASFSK_ASSETS_ADMIN_DIR_FILE . '/script.js'),
		);
		foreach($all_css_js_file as $handle => $fileinfo){
			wp_enqueue_style( $handle, $fileinfo['dyptt_path_define'], null, '1.0', 'all');
			wp_enqueue_script( $handle, $fileinfo['dyptt_path_define'], ['jquery'], '1.0', true);
		}
	}
	public function dyptt_admin_menu_test(){
		if(current_user_can('manage_options')){
			add_submenu_page(
				'woocommerce',
				'Display Product Taxoes',
				'Display Product Taxoes',
				'manage_options',
				'get-display-product-taxoes',
				array($this, 'dyptt_plugin_submenu_about_plugin_page'),
                10
			);
		}
    add_action('admin_init', array($this, 'dyptt_admin_controls'));
	}
    public function dyptt_admin_controls() {
        include 'dashboard/controls.php';
    }

	public function dyptt_plugin_submenu_about_plugin_page() {
		include 'dashboard/dashboard-style.php';
    }

    public function dyptt_plugin_function_for_datas_callback() {}

    public function dyptt_plugin_settings_to_whitelist( $options ) {
      $options['dyptt-plugin-settings'] = array(
        'dyptt-check-products-taxo-widget',
        'dyptt-check-pagechack-taxo-widget',
        'dyptt-check-position-taxo-widget',
        //   Taxos
        'dyptt-check-price-taxo-widget',
        'dyptt-check-categories-taxo-widget',
        'dyptt-check-tags-taxo-widget',
        'dyptt-check-weight-taxo-widget',
        'dyptt-check-dimensions-taxo-widget',
        'dyptt-check-stock-taxo-widget',
        'dyptt-check-sku-taxo-widget',
        'dyptt-check-date-taxo-widget',
        'dyptt-check-slug-taxo-widget',
        'dyptt-check-featured-taxo-widget',
        'dyptt-check-reviews-taxo-widget',
        'dyptt-check-shippingclass-taxo-widget',
        //   Taxos label check
        'dyptt-label-check-price-taxo-widget',
        'dyptt-label-check-categories-taxo-widget',
        'dyptt-label-check-tags-taxo-widget',
        'dyptt-label-check-weight-taxo-widget',
        'dyptt-label-check-dimensions-taxo-widget',
        'dyptt-label-check-stock-taxo-widget',
        'dyptt-label-check-sku-taxo-widget',
        'dyptt-label-check-date-taxo-widget',
        'dyptt-label-check-slug-taxo-widget',
        'dyptt-label-check-featured-taxo-widget',
        'dyptt-label-check-reviews-taxo-widget',
        'dyptt-label-check-shippingclass-taxo-widget',
        // Popup controls
        // *** Price
        'dyptt-price-text',
        'dyptt-price-color',
        'dyptt-price-fontsize',
        'dyptt-price-fontfamilly',
        // *** categories
        'dyptt-categories-text',
        'dyptt-categories-color',
        'dyptt-categories-fontsize',
        'dyptt-categories-fontfamilly',
        // *** tags
        'dyptt-tags-text',
        'dyptt-tags-color',
        'dyptt-tags-fontsize',
        'dyptt-tags-fontfamilly',
        // *** weight
        'dyptt-weight-text',
        'dyptt-weight-color',
        'dyptt-weight-fontsize',
        'dyptt-weight-fontfamilly',
        // *** dimensions
        'dyptt-dimensions-text',
        'dyptt-dimensions-color',
        'dyptt-dimensions-fontsize',
        'dyptt-dimensions-fontfamilly',
        // *** stock
        'dyptt-stock-text',
        'dyptt-stock-color',
        'dyptt-stock-fontsize',
        'dyptt-stock-fontfamilly',
        // *** sku
        'dyptt-sku-text',
        'dyptt-sku-color',
        'dyptt-sku-fontsize',
        'dyptt-sku-fontfamilly',
        // *** date
        'dyptt-date-text',
        'dyptt-date-color',
        'dyptt-date-fontsize',
        'dyptt-date-fontfamilly',
        // *** slug
        'dyptt-slug-text',
        'dyptt-slug-color',
        'dyptt-slug-fontsize',
        'dyptt-slug-fontfamilly',
        // *** featured
        'dyptt-featured-text',
        'dyptt-featured-color',
        'dyptt-featured-fontsize',
        'dyptt-featured-fontfamilly',
        // *** reviews
        'dyptt-reviews-text',
        'dyptt-reviews-color',
        'dyptt-reviews-fontsize',
        'dyptt-reviews-fontfamilly',
        // *** shippingclass
        'dyptt-shippingclass-text',
        'dyptt-shippingclass-color',
        'dyptt-shippingclass-fontsize',
        'dyptt-shippingclass-fontfamilly',
      );
      return $options;
    }

    public function custom_content_before_add_to_cart_button() {
        global $product;
        include 'public-inc/taxo-template.php';
    }

    public function dyptt_taxoes_styles(){
        // *** price
        $dyptt_price_color_value = get_option( 'dyptt-price-color', 'black' );
        $dyptt_price_fontsize_value = get_option( 'dyptt-price-fontsize');
        $dyptt_price_fontfamilly_value = get_option( 'dyptt-price-fontfamilly', 'roboto' );
        // *** categories
        $dyptt_categories_color_value = get_option( 'dyptt-categories-color', 'black' );
        $dyptt_categories_fontsize_value = get_option( 'dyptt-categories-fontsize');
        $dyptt_categories_fontfamilly_value = get_option( 'dyptt-categories-fontfamilly', 'roboto' );
        // *** tags
        $dyptt_tags_color_value = get_option( 'dyptt-tags-color', 'black' );
        $dyptt_tags_fontsize_value = get_option( 'dyptt-tags-fontsize');
        $dyptt_tags_fontfamilly_value = get_option( 'dyptt-tags-fontfamilly', 'roboto' );
        // *** weight
        $dyptt_weight_color_value = get_option( 'dyptt-weight-color', 'black' );
        $dyptt_weight_fontsize_value = get_option( 'dyptt-weight-fontsize');
        $dyptt_weight_fontfamilly_value = get_option( 'dyptt-weight-fontfamilly', 'roboto' );
        // *** dimensions
        $dyptt_dimensions_color_value = get_option( 'dyptt-dimensions-color', 'black' );
        $dyptt_dimensions_fontsize_value = get_option( 'dyptt-dimensions-fontsize');
        $dyptt_dimensions_fontfamilly_value = get_option( 'dyptt-dimensions-fontfamilly', 'roboto' );
        // *** stock
        $dyptt_stock_color_value = get_option( 'dyptt-stock-color', 'black' );
        $dyptt_stock_fontsize_value = get_option( 'dyptt-stock-fontsize');
        $dyptt_stock_fontfamilly_value = get_option( 'dyptt-stock-fontfamilly', 'roboto' );
        // *** sku
        $dyptt_sku_color_value = get_option( 'dyptt-sku-color', 'black' );
        $dyptt_sku_fontsize_value = get_option( 'dyptt-sku-fontsize');
        $dyptt_sku_fontfamilly_value = get_option( 'dyptt-sku-fontfamilly', 'roboto' );
        // *** date
        $dyptt_date_color_value = get_option( 'dyptt-date-color', 'black' );
        $dyptt_date_fontsize_value = get_option( 'dyptt-date-fontsize');
        $dyptt_date_fontfamilly_value = get_option( 'dyptt-date-fontfamilly', 'roboto' );
        // *** slug
        $dyptt_slug_color_value = get_option( 'dyptt-slug-color', 'black' );
        $dyptt_slug_fontsize_value = get_option( 'dyptt-slug-fontsize');
        $dyptt_slug_fontfamilly_value = get_option( 'dyptt-slug-fontfamilly', 'roboto' );
        // *** featured
        $dyptt_featured_color_value = get_option( 'dyptt-featured-color', 'black' );
        $dyptt_featured_fontsize_value = get_option( 'dyptt-featured-fontsize');
        $dyptt_featured_fontfamilly_value = get_option( 'dyptt-featured-fontfamilly', 'roboto' );
        // *** reviews
        $dyptt_reviews_color_value = get_option( 'dyptt-reviews-color', 'black' );
        $dyptt_reviews_fontsize_value = get_option( 'dyptt-reviews-fontsize');
        $dyptt_reviews_fontfamilly_value = get_option( 'dyptt-reviews-fontfamilly', 'roboto' );
        // *** shipping-class
        $dyptt_shippingclass_color_value = get_option( 'dyptt-shippingclass-color', 'black' );
        $dyptt_shippingclass_fontsize_value = get_option( 'dyptt-shippingclass-fontsize');
        $dyptt_shippingclass_fontfamilly_value = get_option( 'dyptt-shippingclass-fontfamilly', 'roboto' );
        $html = "<style>
        .dyptt-price, .dyptt-product-price{
            color:{$dyptt_price_color_value};
            font-size:{$dyptt_price_fontsize_value};
            font-family:{$dyptt_price_fontfamilly_value};
        }
        .dyptt-categories, .dyptt-categories a, .dyptt-categories a:hover, .dyptt-product-categories{
            color:{$dyptt_categories_color_value};
            font-size:{$dyptt_categories_fontsize_value};
            font-family:{$dyptt_categories_fontfamilly_value};
        }
        .dyptt-tags, .dyptt-product-tags{
            color:{$dyptt_tags_color_value};
            font-size:{$dyptt_tags_fontsize_value};
            font-family:{$dyptt_tags_fontfamilly_value};
        }
        .dyptt-weight, .dyptt-product-weight{
            color:{$dyptt_weight_color_value};
            font-size:{$dyptt_weight_fontsize_value};
            font-family:{$dyptt_weight_fontfamilly_value};
        }
        .dyptt-dimensions, .dyptt-product-dimensions{
            color:{$dyptt_dimensions_color_value};
            font-size:{$dyptt_dimensions_fontsize_value};
            font-family:{$dyptt_dimensions_fontfamilly_value};
        }
        .dyptt-stock, .dyptt-product-stock{
            color:{$dyptt_stock_color_value};
            font-size:{$dyptt_stock_fontsize_value};
            font-family:{$dyptt_stock_fontfamilly_value};
        }
        .dyptt-sku, .dyptt-product-sku{
            color:{$dyptt_sku_color_value};
            font-size:{$dyptt_sku_fontsize_value};
            font-family:{$dyptt_sku_fontfamilly_value};
        }
        .dyptt-date, .dyptt-product-date{
            color:{$dyptt_date_color_value};
            font-size:{$dyptt_date_fontsize_value};
            font-family:{$dyptt_date_fontfamilly_value};
        }
        .dyptt-price, .dyptt-product-price{
            color:{$dyptt_price_color_value};
            font-size:{$dyptt_price_fontsize_value};
            font-family:{$dyptt_price_fontfamilly_value};
        }
        .dyptt-slug, .dyptt-product-slug{
            color:{$dyptt_slug_color_value};
            font-size:{$dyptt_slug_fontsize_value};
            font-family:{$dyptt_slug_fontfamilly_value};
        }
        .dyptt-featured, .dyptt-product-featured{
            color:{$dyptt_featured_color_value};
            font-size:{$dyptt_featured_fontsize_value};
            font-family:{$dyptt_featured_fontfamilly_value};
        }
        .dyptt-reviews, .dyptt-product-reviews{
            color:{$dyptt_reviews_color_value};
            font-size:{$dyptt_reviews_fontsize_value};
            font-family:{$dyptt_reviews_fontfamilly_value};
        }
        .dyptt-shippingclass, .dyptt-product-shippingclass{
            color:{$dyptt_shippingclass_color_value};
            font-size:{$dyptt_shippingclass_fontsize_value};
            font-family:{$dyptt_shippingclass_fontfamilly_value};
        }
        ";
        $html .= '</style>';
        echo $html;
    }

    public function dyptt_settings_plugin_action_link($links, $file) {
        if (plugin_basename(__FILE__) == $file) {
            $dyptt_settings_link = '<a href="' . admin_url('admin.php?page=get-display-product-taxoes') . '" target="_blank">' . esc_html__('Settings', 'text-domain') . '</a>';
            array_push($links, $dyptt_settings_link);
        }
        return $links;
    }

	public function __construct() {
		add_filter( 'plugin_action_links', [$this,'dyptt_settings_plugin_action_link'], 10, 2 );
		add_filter( 'whitelist_options', [$this,'dyptt_plugin_settings_to_whitelist'] );
		if (isset($_GET['page']) && $_GET['page'] === 'get-display-product-taxoes') {
		    add_action('admin_enqueue_scripts', [$this, 'dyptt_all_assets_for_the_admin']);
        }
		add_action('admin_menu', [$this,'dyptt_admin_menu_test']);
		$dyptt_sk_products_taxo = get_option( 'dyptt-check-products-taxo-widget', 'off' );
        if ( $dyptt_sk_products_taxo == 'on' ) {
            $selected_value = get_option('dyptt-check-pagechack-taxo-widget');
            $selected_position = get_option('dyptt-check-position-taxo-widget');
            if($selected_value=='on'){ // Shop page
                if($selected_position=='item_title'){
                    add_action('woocommerce_shop_loop_item_title', [$this, 'custom_content_before_add_to_cart_button'] );
                }elseif($selected_position=='loop_item_title'){
                    add_action('woocommerce_before_shop_loop_item_title', [$this, 'custom_content_before_add_to_cart_button'] );
                }elseif($selected_position=='after_title'){
                    add_action('woocommerce_after_shop_loop_item_title', [$this, 'custom_content_before_add_to_cart_button'] );
                }elseif($selected_position=='after_item'){
                    add_action('woocommerce_after_shop_loop_item', [$this, 'custom_content_before_add_to_cart_button'] );
                }
            } elseif($selected_value=='off'){ // Single Page
                if($selected_position=='item_title'){
                    add_action('woocommerce_before_add_to_cart_button', [$this, 'custom_content_before_add_to_cart_button'] );
                }elseif($selected_position=='after_item'){
                    add_action('woocommerce_after_add_to_cart_button', [$this, 'custom_content_before_add_to_cart_button'] );
                }else{add_action('woocommerce_after_add_to_cart_button', [$this, 'custom_content_before_add_to_cart_button'] );}
            } elseif($selected_value=='both'){ // Both page
                if($selected_position=='item_title'){
                    add_action('woocommerce_shop_loop_item_title', [$this, 'custom_content_before_add_to_cart_button'] );
                    add_action('woocommerce_before_add_to_cart_button', [$this, 'custom_content_before_add_to_cart_button'] ); // Single page
                }elseif($selected_position=='loop_item_title'){
                    add_action('woocommerce_before_shop_loop_item_title', [$this, 'custom_content_before_add_to_cart_button'] );
                    add_action('woocommerce_before_add_to_cart_button', [$this, 'custom_content_before_add_to_cart_button'] ); // Single page
                }elseif($selected_position=='after_title'){
                    add_action('woocommerce_after_shop_loop_item_title', [$this, 'custom_content_before_add_to_cart_button'] );
                    add_action('woocommerce_after_add_to_cart_button', [$this, 'custom_content_before_add_to_cart_button'] ); // Single page
                }elseif($selected_position=='after_item'){
                    add_action('woocommerce_after_shop_loop_item', [$this, 'custom_content_before_add_to_cart_button'] );
                    add_action('woocommerce_after_add_to_cart_button', [$this, 'custom_content_before_add_to_cart_button'] ); // Single page
                }elseif($selected_position=='item_title'){ // Single page
                    add_action('woocommerce_before_add_to_cart_button', [$this, 'custom_content_before_add_to_cart_button'] ); // Single page
                }elseif($selected_position=='after_item'){
                    add_action('woocommerce_after_add_to_cart_button', [$this, 'custom_content_before_add_to_cart_button'] ); // Single page
                }
            }
            add_action('wp_head', [$this, 'dyptt_taxoes_styles'],99);
        }
	}
}
ClassShopProdTax::instance();

