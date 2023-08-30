<?php
if ( ! defined( 'ABSPATH' ) ) exit;
echo '<div class="dyptt-taxoes">';
if(get_option( 'dyptt-check-price-taxo-widget', 'off' ) == true){
    $dyptt_price_text = get_option( 'dyptt-price-text', 'off' );
    $dyptt_price_label = (get_option( 'dyptt-label-check-price-taxo-widget', 'off' ) == true)?$dyptt_price_text:'';
    echo '<div class="dyptt-item dyptt-price">'.esc_html__($dyptt_price_label);
        echo '<span class="dyptt-product-price"> ' . $product->get_price_html() . '</span>';
    echo '</div>';
}
if(get_option( 'dyptt-check-categories-taxo-widget', 'off' ) == true){
    $product_categories = get_the_terms( get_the_ID(), 'product_cat' );
    if ( ! empty( $product_categories ) ) {
    $dyptt_categories_text = get_option( 'dyptt-categories-text', 'off' );
        $dyptt_categories_label = (get_option( 'dyptt-label-check-categories-taxo-widget', 'off' ) == true)?$dyptt_categories_text:'';
        echo '<div class="dyptt-item dyptt-categories">'.esc_html__($dyptt_categories_label);
        foreach ( $product_categories as $category ) {
            echo '<span class="dyptt-product-categories"><a href="'.get_the_permalink().'"> ' . esc_html( $category->name ) . '</a></span>';
        }
        echo '</div>';
    }
}
if(get_option( 'dyptt-check-tags-taxo-widget', 'off' ) == true){
    $product_tags = get_the_terms( $product->get_id(), 'product_tag' );
    if ( ! empty( $product_tags ) ) {
    $dyptt_tags_text = get_option( 'dyptt-tags-text', 'off' );
        $dyptt_tags_label = (get_option( 'dyptt-label-check-tags-taxo-widget', 'off' ) == true)?$dyptt_tags_text:'';
        echo '<div class="dyptt-item dyptt-tags">'.esc_html__($dyptt_tags_label);
        foreach ( $product_tags as $tag ) {
            echo '<span class="dyptt-product-tags"><a href="' . esc_url( get_term_link( $tag ) ) . '"> ' . esc_html( $tag->name ) . '</a></span>';
        }
        echo '</div>';
    }
}
if(get_option( 'dyptt-check-weight-taxo-widget', 'off' ) == true){
    $dyptt_weight_text = get_option( 'dyptt-weight-text', 'off' );
    $dyptt_weight_label = (get_option( 'dyptt-label-check-weight-taxo-widget', 'off' ) == true)?$dyptt_weight_text:'';
    echo '<div class="dyptt-item dyptt-weight">'.esc_html__($dyptt_weight_label);
        echo '<span class="dyptt-product-weight"> ' . $product->get_weight() . ' ' . get_option( 'woocommerce_weight_unit' ) . '</span>';
    echo '</div>';
}
if(get_option( 'dyptt-check-dimensions-taxo-widget', 'off' ) == true){
    $dyptt_dimensions_text = get_option( 'dyptt-dimensions-text', 'off' );
    $dyptt_dimensions_label = (get_option( 'dyptt-label-check-dimensions-taxo-widget', 'off' ) == true)?$dyptt_dimensions_text:'';
    echo '<div class="dyptt-item dyptt-dimensions">'.esc_html__($dyptt_dimensions_label);
        $dimensions = $product->get_dimensions( false );
        echo '<span class="dyptt-product-dimensions"> ' . wc_format_dimensions( $dimensions ) . '</span>';
    echo '</div>';
}
if(get_option( 'dyptt-check-stock-taxo-widget', 'off' ) == true){
    $dyptt_status_text = get_option( 'dyptt-status-text', 'off' );
    $dyptt_stock_label = (get_option( 'dyptt-label-check-stock-taxo-widget', 'off' ) == true)?$dyptt_status_text:'';
    echo '<div class="dyptt-item dyptt-stock">'.esc_html__($dyptt_stock_label);
        echo '<span class="dyptt-product-stock"> ' . ( $product->is_in_stock() ? 'In Stock' : 'Out of Stock' ) . '</span>';
    echo '</div>';
}
if(get_option( 'dyptt-check-sku-taxo-widget', 'off' ) == true){
    $dyptt_sku_text = get_option( 'dyptt-sku-text', 'off' );
    $dyptt_sku_label = (get_option( 'dyptt-label-check-sku-taxo-widget', 'off' ) == true)?$dyptt_sku_text:'';
    echo '<div class="dyptt-item dyptt-sku">'.esc_html__($dyptt_sku_label);
        echo '<span class="dyptt-product-sku"> ' . $product->get_sku() . '</span>';
    echo '</div>';
}
if(get_option( 'dyptt-check-date-taxo-widget', 'off' ) == true){
    $dyptt_date_text = get_option( 'dyptt-date-text', 'off' );
    $dyptt_date_label = (get_option( 'dyptt-label-check-date-taxo-widget', 'off' ) == true)?$dyptt_date_text:'';
    echo '<div class="dyptt-item dyptt-date">'.esc_html__($dyptt_date_label);
        echo '<span class="dyptt-product-date"> ' . $product->get_date_created()->format('Y-m-d') . '</span>';
    echo '</div>';
}
if(get_option( 'dyptt-check-slug-taxo-widget', 'off' ) == true){
    $dyptt_slug_text = get_option( 'dyptt-slug-text', 'off' );
    $dyptt_slug_label = (get_option( 'dyptt-label-check-slug-taxo-widget', 'off' ) == true)?$dyptt_slug_text:'';
    echo '<div class="dyptt-item dyptt-slug">'.esc_html__($dyptt_slug_label);
        echo '<span class="dyptt-product-slug"> ' . $product->get_slug() . '</span>';
    echo '</div>';
}
if(get_option( 'dyptt-check-featured-taxo-widget', 'off' ) == true){
    $dyptt_featured_text = get_option( 'dyptt-featured-text', 'off' );
    $dyptt_featured_label = (get_option( 'dyptt-label-check-featured-taxo-widget', 'off' ) == true)?$dyptt_featured_text:'';
    echo '<div class="dyptt-item dyptt-featured">'.esc_html__($dyptt_featured_label);
        echo '<span class="dyptt-product-featured"> ' . ( $product->is_featured() ? esc_html__('Yes') : esc_html__('No') ) . '</span>';
    echo '</div>';
}
if(get_option( 'dyptt-check-reviews-taxo-widget', 'off' ) == true){
    $dyptt_reviews_text = get_option( 'dyptt-reviews-text', 'off' );
    $dyptt_reviews_label = (get_option( 'dyptt-label-check-reviews-taxo-widget', 'off' ) == true)?$dyptt_reviews_text:'';
    echo '<div class="dyptt-item dyptt-reviews">'.esc_html__($dyptt_reviews_label);
        echo '<span class="dyptt-product-reviews"> ' . $product->get_review_count() . ' (' . $product->get_average_rating() . ')</span>';
    echo '</div>';
}
if(get_option( 'dyptt-check-shippingclass-taxo-widget', 'off' ) == true){
    $dyptt_shippingclass_text = get_option( 'dyptt-shippingclass-text', 'off' );
    $dyptt_shippingclass_label = (get_option( 'dyptt-label-check-shippingclass-taxo-widget', 'off' ) == true)?$dyptt_shippingclass_text:'';
    echo '<div class="dyptt-item dyptt-shippingclass">'.esc_html__($dyptt_shippingclass_label);
        $shipping_class = $product->get_shipping_class();
        echo '<span class="dyptt-product-shipping"> ' . $shipping_class . '</span>';
    echo '</div>';
}
echo '</div>';