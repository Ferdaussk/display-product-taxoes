<?php 
function custom_content_before_add_to_cart_button() {
  echo 'Each product';
}
add_action('woocommerce_shop_loop_item_title', 'custom_content_before_add_to_cart_button' );
