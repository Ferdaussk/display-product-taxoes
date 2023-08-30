<?php
if ( ! defined( 'ABSPATH' ) ) exit;
echo '<div class="shpt-taxoes">';
if(get_option( 'shpt-check-price-taxo-widget', 'off' ) == true){
    $shpt_price_text = get_option( 'shpt-price-text', 'off' );
    $shpt_price_label = (get_option( 'shpt-label-check-price-taxo-widget', 'off' ) == true)?$shpt_price_text:'';
    echo '<div class="shpt-item shpt-price">'.esc_html__($shpt_price_label);
        echo '<span class="shpt-product-price"> ' . $product->get_price_html() . '</span>';
    echo '</div>';
}
if(get_option( 'shpt-check-categories-taxo-widget', 'off' ) == true){
    $product_categories = get_the_terms( get_the_ID(), 'product_cat' );
    if ( ! empty( $product_categories ) ) {
    $shpt_categories_text = get_option( 'shpt-categories-text', 'off' );
        $shpt_categories_label = (get_option( 'shpt-label-check-categories-taxo-widget', 'off' ) == true)?$shpt_categories_text:'';
        echo '<div class="shpt-item shpt-categories">'.esc_html__($shpt_categories_label);
        foreach ( $product_categories as $category ) {
            echo '<span class="shpt-product-categories"><a href="'.get_the_permalink().'"> ' . esc_html( $category->name ) . '</a></span>';
        }
        echo '</div>';
    }
}
if(get_option( 'shpt-check-tags-taxo-widget', 'off' ) == true){
    $product_tags = get_the_terms( $product->get_id(), 'product_tag' );
    if ( ! empty( $product_tags ) ) {
    $shpt_tags_text = get_option( 'shpt-tags-text', 'off' );
        $shpt_tags_label = (get_option( 'shpt-label-check-tags-taxo-widget', 'off' ) == true)?$shpt_tags_text:'';
        echo '<div class="shpt-item shpt-tags">'.esc_html__($shpt_tags_label);
        foreach ( $product_tags as $tag ) {
            echo '<span class="shpt-product-tags"><a href="' . esc_url( get_term_link( $tag ) ) . '"> ' . esc_html( $tag->name ) . '</a></span>';
        }
        echo '</div>';
    }
}
if(get_option( 'shpt-check-weight-taxo-widget', 'off' ) == true){
    $shpt_weight_text = get_option( 'shpt-weight-text', 'off' );
    $shpt_weight_label = (get_option( 'shpt-label-check-weight-taxo-widget', 'off' ) == true)?$shpt_weight_text:'';
    echo '<div class="shpt-item shpt-weight">'.esc_html__($shpt_weight_label);
        echo '<span class="shpt-product-weight"> ' . $product->get_weight() . ' ' . get_option( 'woocommerce_weight_unit' ) . '</span>';
    echo '</div>';
}
if(get_option( 'shpt-check-dimensions-taxo-widget', 'off' ) == true){
    $shpt_dimensions_text = get_option( 'shpt-dimensions-text', 'off' );
    $shpt_dimensions_label = (get_option( 'shpt-label-check-dimensions-taxo-widget', 'off' ) == true)?$shpt_dimensions_text:'';
    echo '<div class="shpt-item shpt-dimensions">'.esc_html__($shpt_dimensions_label);
        $dimensions = $product->get_dimensions( false );
        echo '<span class="shpt-product-dimensions"> ' . wc_format_dimensions( $dimensions ) . '</span>';
    echo '</div>';
}
if(get_option( 'shpt-check-stock-taxo-widget', 'off' ) == true){
    $shpt_status_text = get_option( 'shpt-status-text', 'off' );
    $shpt_stock_label = (get_option( 'shpt-label-check-stock-taxo-widget', 'off' ) == true)?$shpt_status_text:'';
    echo '<div class="shpt-item shpt-stock">'.esc_html__($shpt_stock_label);
        echo '<span class="shpt-product-stock"> ' . ( $product->is_in_stock() ? 'In Stock' : 'Out of Stock' ) . '</span>';
    echo '</div>';
}
if(get_option( 'shpt-check-sku-taxo-widget', 'off' ) == true){
    $shpt_sku_text = get_option( 'shpt-sku-text', 'off' );
    $shpt_sku_label = (get_option( 'shpt-label-check-sku-taxo-widget', 'off' ) == true)?$shpt_sku_text:'';
    echo '<div class="shpt-item shpt-sku">'.esc_html__($shpt_sku_label);
        echo '<span class="shpt-product-sku"> ' . $product->get_sku() . '</span>';
    echo '</div>';
}
if(get_option( 'shpt-check-date-taxo-widget', 'off' ) == true){
    $shpt_date_text = get_option( 'shpt-date-text', 'off' );
    $shpt_date_label = (get_option( 'shpt-label-check-date-taxo-widget', 'off' ) == true)?$shpt_date_text:'';
    echo '<div class="shpt-item shpt-date">'.esc_html__($shpt_date_label);
        echo '<span class="shpt-product-date"> ' . $product->get_date_created()->format('Y-m-d H:i:s') . '</span>';
    echo '</div>';
}
if(get_option( 'shpt-check-slug-taxo-widget', 'off' ) == true){
    $shpt_slug_text = get_option( 'shpt-slug-text', 'off' );
    $shpt_slug_label = (get_option( 'shpt-label-check-slug-taxo-widget', 'off' ) == true)?$shpt_slug_text:'';
    echo '<div class="shpt-item shpt-slug">'.esc_html__($shpt_slug_label);
        echo '<span class="shpt-product-slug"> ' . $product->get_slug() . '</span>';
    echo '</div>';
}
if(get_option( 'shpt-check-featured-taxo-widget', 'off' ) == true){
    $shpt_featured_text = get_option( 'shpt-featured-text', 'off' );
    $shpt_featured_label = (get_option( 'shpt-label-check-featured-taxo-widget', 'off' ) == true)?$shpt_featured_text:'';
    echo '<div class="shpt-item shpt-featured">'.esc_html__($shpt_featured_label);
        echo '<span class="shpt-product-featured"> ' . ( $product->is_featured() ? esc_html__('Yes') : esc_html__('No') ) . '</span>';
    echo '</div>';
}
if(get_option( 'shpt-check-reviews-taxo-widget', 'off' ) == true){
    $shpt_reviews_text = get_option( 'shpt-reviews-text', 'off' );
    $shpt_reviews_label = (get_option( 'shpt-label-check-reviews-taxo-widget', 'off' ) == true)?$shpt_reviews_text:'';
    echo '<div class="shpt-item shpt-reviews">'.esc_html__($shpt_reviews_label);
        echo '<span class="shpt-product-reviews"> ' . $product->get_review_count() . ' (' . $product->get_average_rating() . ')</span>';
    echo '</div>';
}
if(get_option( 'shpt-check-shippingclass-taxo-widget', 'off' ) == true){
    $shpt_shippingclass_text = get_option( 'shpt-shippingclass-text', 'off' );
    $shpt_shippingclass_label = (get_option( 'shpt-label-check-shippingclass-taxo-widget', 'off' ) == true)?$shpt_shippingclass_text:'';
    echo '<div class="shpt-item shpt-shippingclass">'.esc_html__($shpt_shippingclass_label);
        $shipping_class = $product->get_shipping_class();
        echo '<span class="shpt-product-shipping"> ' . $shipping_class . '</span>';
    echo '</div>';
}
echo '</div>';