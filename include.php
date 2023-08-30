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

	public function shpt_all_assets_for_the_admin(){
		$all_css_js_file = array(
			'shpt-style' => array('shpt_path_define'=>SHPT_ASFSK_ASSETS_ADMIN_DIR_FILE . '/style.css'),

			'shpt-script' => array('shpt_path_define'=>SHPT_ASFSK_ASSETS_ADMIN_DIR_FILE . '/script.js'),
		);
		foreach($all_css_js_file as $handle => $fileinfo){
			wp_enqueue_style( $handle, $fileinfo['shpt_path_define'], null, '1.0', 'all');
			wp_enqueue_script( $handle, $fileinfo['shpt_path_define'], ['jquery'], '1.0', true);
		}
	}
	public function shpt_admin_menu_test(){
		if(current_user_can('manage_options')){
			add_submenu_page(
				'woocommerce',
				'Display Product Taxoes',
				'Display Product Taxoes',
				'manage_options',
				'get-display-product-taxoes',
				array($this, 'shpt_plugin_submenu_about_plugin_page'),
                10
			);
		}
    add_action('admin_init', array($this, 'shpt_admin_controls'));
	}
    public function shpt_admin_controls() {
        include 'dashboard/controls.php';
    }

	public function shpt_plugin_submenu_about_plugin_page() {
		include 'dashboard/dashboard-style.php';
    }

    public function shpt_plugin_function_for_datas_callback() {}

    public function shpt_plugin_settings_to_whitelist( $options ) {
      $options['shpt-plugin-settings'] = array(
        'shpt-check-products-taxo-widget',
        'shpt-check-pagechack-taxo-widget',
        'shpt-check-position-taxo-widget',
        //   Taxos
        'shpt-check-price-taxo-widget',
        'shpt-check-categories-taxo-widget',
        'shpt-check-tags-taxo-widget',
        'shpt-check-weight-taxo-widget',
        'shpt-check-dimensions-taxo-widget',
        'shpt-check-stock-taxo-widget',
        'shpt-check-sku-taxo-widget',
        'shpt-check-date-taxo-widget',
        'shpt-check-slug-taxo-widget',
        'shpt-check-featured-taxo-widget',
        'shpt-check-reviews-taxo-widget',
        'shpt-check-shippingclass-taxo-widget',
        //   Taxos label check
        'shpt-label-check-price-taxo-widget',
        'shpt-label-check-categories-taxo-widget',
        'shpt-label-check-tags-taxo-widget',
        'shpt-label-check-weight-taxo-widget',
        'shpt-label-check-dimensions-taxo-widget',
        'shpt-label-check-stock-taxo-widget',
        'shpt-label-check-sku-taxo-widget',
        'shpt-label-check-date-taxo-widget',
        'shpt-label-check-slug-taxo-widget',
        'shpt-label-check-featured-taxo-widget',
        'shpt-label-check-reviews-taxo-widget',
        'shpt-label-check-shippingclass-taxo-widget',
        // Popup controls
        // *** Price
        'shpt-price-text',
        'shpt-price-color',
        'shpt-price-fontsize',
        'shpt-price-fontfamilly',
        // *** categories
        'shpt-categories-text',
        'shpt-categories-color',
        'shpt-categories-fontsize',
        'shpt-categories-fontfamilly',
        // *** tags
        'shpt-tags-text',
        'shpt-tags-color',
        'shpt-tags-fontsize',
        'shpt-tags-fontfamilly',
        // *** weight
        'shpt-weight-text',
        'shpt-weight-color',
        'shpt-weight-fontsize',
        'shpt-weight-fontfamilly',
        // *** dimensions
        'shpt-dimensions-text',
        'shpt-dimensions-color',
        'shpt-dimensions-fontsize',
        'shpt-dimensions-fontfamilly',
        // *** stock
        'shpt-stock-text',
        'shpt-stock-color',
        'shpt-stock-fontsize',
        'shpt-stock-fontfamilly',
        // *** sku
        'shpt-sku-text',
        'shpt-sku-color',
        'shpt-sku-fontsize',
        'shpt-sku-fontfamilly',
        // *** date
        'shpt-date-text',
        'shpt-date-color',
        'shpt-date-fontsize',
        'shpt-date-fontfamilly',
        // *** slug
        'shpt-slug-text',
        'shpt-slug-color',
        'shpt-slug-fontsize',
        'shpt-slug-fontfamilly',
        // *** featured
        'shpt-featured-text',
        'shpt-featured-color',
        'shpt-featured-fontsize',
        'shpt-featured-fontfamilly',
        // *** reviews
        'shpt-reviews-text',
        'shpt-reviews-color',
        'shpt-reviews-fontsize',
        'shpt-reviews-fontfamilly',
        // *** shippingclass
        'shpt-shippingclass-text',
        'shpt-shippingclass-color',
        'shpt-shippingclass-fontsize',
        'shpt-shippingclass-fontfamilly',
      );
      return $options;
    }

    public function custom_content_before_add_to_cart_button() {
        global $product;
        include 'public-inc/taxo-template.php';
    }

    public function shpt_taxoes_styles(){
        // *** price
        $shpt_price_color_value = get_option( 'shpt-price-color', 'black' );
        $shpt_price_fontsize_value = get_option( 'shpt-price-fontsize');
        $shpt_price_fontfamilly_value = get_option( 'shpt-price-fontfamilly', 'roboto' );
        // *** categories
        $shpt_categories_color_value = get_option( 'shpt-categories-color', 'black' );
        $shpt_categories_fontsize_value = get_option( 'shpt-categories-fontsize');
        $shpt_categories_fontfamilly_value = get_option( 'shpt-categories-fontfamilly', 'roboto' );
        // *** tags
        $shpt_tags_color_value = get_option( 'shpt-tags-color', 'black' );
        $shpt_tags_fontsize_value = get_option( 'shpt-tags-fontsize');
        $shpt_tags_fontfamilly_value = get_option( 'shpt-tags-fontfamilly', 'roboto' );
        // *** weight
        $shpt_weight_color_value = get_option( 'shpt-weight-color', 'black' );
        $shpt_weight_fontsize_value = get_option( 'shpt-weight-fontsize');
        $shpt_weight_fontfamilly_value = get_option( 'shpt-weight-fontfamilly', 'roboto' );
        // *** dimensions
        $shpt_dimensions_color_value = get_option( 'shpt-dimensions-color', 'black' );
        $shpt_dimensions_fontsize_value = get_option( 'shpt-dimensions-fontsize');
        $shpt_dimensions_fontfamilly_value = get_option( 'shpt-dimensions-fontfamilly', 'roboto' );
        // *** stock
        $shpt_stock_color_value = get_option( 'shpt-stock-color', 'black' );
        $shpt_stock_fontsize_value = get_option( 'shpt-stock-fontsize');
        $shpt_stock_fontfamilly_value = get_option( 'shpt-stock-fontfamilly', 'roboto' );
        // *** sku
        $shpt_sku_color_value = get_option( 'shpt-sku-color', 'black' );
        $shpt_sku_fontsize_value = get_option( 'shpt-sku-fontsize');
        $shpt_sku_fontfamilly_value = get_option( 'shpt-sku-fontfamilly', 'roboto' );
        // *** date
        $shpt_date_color_value = get_option( 'shpt-date-color', 'black' );
        $shpt_date_fontsize_value = get_option( 'shpt-date-fontsize');
        $shpt_date_fontfamilly_value = get_option( 'shpt-date-fontfamilly', 'roboto' );
        // *** slug
        $shpt_slug_color_value = get_option( 'shpt-slug-color', 'black' );
        $shpt_slug_fontsize_value = get_option( 'shpt-slug-fontsize');
        $shpt_slug_fontfamilly_value = get_option( 'shpt-slug-fontfamilly', 'roboto' );
        // *** featured
        $shpt_featured_color_value = get_option( 'shpt-featured-color', 'black' );
        $shpt_featured_fontsize_value = get_option( 'shpt-featured-fontsize');
        $shpt_featured_fontfamilly_value = get_option( 'shpt-featured-fontfamilly', 'roboto' );
        // *** reviews
        $shpt_reviews_color_value = get_option( 'shpt-reviews-color', 'black' );
        $shpt_reviews_fontsize_value = get_option( 'shpt-reviews-fontsize');
        $shpt_reviews_fontfamilly_value = get_option( 'shpt-reviews-fontfamilly', 'roboto' );
        // *** shipping-class
        $shpt_shippingclass_color_value = get_option( 'shpt-shipping-class-color', 'black' );
        $shpt_shippingclass_fontsize_value = get_option( 'shpt-shipping-class-fontsize');
        $shpt_shippingclass_fontfamilly_value = get_option( 'shpt-shipping-class-fontfamilly', 'roboto' );
        $html = "<style>
        .shpt-price, .shpt-product-price{
            color:{$shpt_price_color_value};
            font-size:{$shpt_price_fontsize_value};
            font-family:{$shpt_price_fontfamilly_value};
        }
        .shpt-categories, .shpt-product-categories{
            color:{$shpt_categories_color_value};
            font-size:{$shpt_categories_fontsize_value};
            font-family:{$shpt_categories_fontfamilly_value};
        }
        .shpt-tags, .shpt-product-tags{
            color:{$shpt_tags_color_value};
            font-size:{$shpt_tags_fontsize_value};
            font-family:{$shpt_tags_fontfamilly_value};
        }
        .shpt-weight, .shpt-product-weight{
            color:{$shpt_weight_color_value};
            font-size:{$shpt_weight_fontsize_value};
            font-family:{$shpt_weight_fontfamilly_value};
        }
        .shpt-dimensions, .shpt-product-dimensions{
            color:{$shpt_dimensions_color_value};
            font-size:{$shpt_dimensions_fontsize_value};
            font-family:{$shpt_dimensions_fontfamilly_value};
        }
        .shpt-stock, .shpt-product-stock{
            color:{$shpt_stock_color_value};
            font-size:{$shpt_stock_fontsize_value};
            font-family:{$shpt_stock_fontfamilly_value};
        }
        .shpt-sku, .shpt-product-sku{
            color:{$shpt_sku_color_value};
            font-size:{$shpt_sku_fontsize_value};
            font-family:{$shpt_sku_fontfamilly_value};
        }
        .shpt-date, .shpt-product-date{
            color:{$shpt_date_color_value};
            font-size:{$shpt_date_fontsize_value};
            font-family:{$shpt_date_fontfamilly_value};
        }
        .shpt-price, .shpt-product-price{
            color:{$shpt_price_color_value};
            font-size:{$shpt_price_fontsize_value};
            font-family:{$shpt_price_fontfamilly_value};
        }
        .shpt-slug, .shpt-product-slug{
            color:{$shpt_slug_color_value};
            font-size:{$shpt_slug_fontsize_value};
            font-family:{$shpt_slug_fontfamilly_value};
        }
        .shpt-reviews, .shpt-product-reviews{
            color:{$shpt_reviews_color_value};
            font-size:{$shpt_reviews_fontsize_value};
            font-family:{$shpt_reviews_fontfamilly_value};
        }
        .shpt-shippingclass, .shpt-product-shippingclass{
            color:{$shpt_shippingclass_color_value};
            font-size:{$shpt_shippingclass_fontsize_value};
            font-family:{$shpt_shippingclass_fontfamilly_value};
        }
        ";
        $html .= '</style>';
        echo $html;
    }

    public function shpt_settings_plugin_action_link($links, $file) {
        if (plugin_basename(__FILE__) == $file) {
            $shpt_settings_link = '<a href="' . admin_url('admin.php?page=get-display-product-taxoes') . '" target="_blank">' . esc_html__('Settings', 'text-domain') . '</a>';
            array_push($links, $shpt_settings_link);
        }
        return $links;
    }

	public function __construct() {
		add_filter( 'plugin_action_links', [$this,'shpt_settings_plugin_action_link'], 10, 2 );
		add_filter( 'whitelist_options', [$this,'shpt_plugin_settings_to_whitelist'] );
        /**
         * woocommerce_shop_loop_item_title // For shop page
         * woocommerce_before_shop_loop_item_title // For shop page
         * woocommerce_after_shop_loop_item_title // For shop page
         * woocommerce_before_add_to_cart_button // For single page
         * woocommerce_after_add_to_cart_button // For single page
         * woocommerce_after_shop_loop_item // For shop page
         */
		if (isset($_GET['page']) && $_GET['page'] === 'get-display-product-taxoes') {
		    add_action('admin_enqueue_scripts', [$this, 'shpt_all_assets_for_the_admin']);
        }
		add_action('admin_menu', [$this,'shpt_admin_menu_test']);
		$shpt_sk_products_taxo = get_option( 'shpt-check-products-taxo-widget', 'off' );
        if ( $shpt_sk_products_taxo == 'on' ) {
            $selected_value = get_option('shpt-check-pagechack-taxo-widget');
            $selected_position = get_option('shpt-check-position-taxo-widget');
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
            add_action('wp_head', [$this, 'shpt_taxoes_styles'],99);
        }
	}
}
ClassShopProdTax::instance();

