<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$shpt_products_taxo_value = get_option( 'shpt-check-products-taxo-widget', 'off' );
$shpt_button_position_value = get_option( 'shpt-check-position-taxo-widget', 'off' );
// Taxos
$shpt_price_taxo_value = get_option( 'shpt-check-price-taxo-widget', 'off' );
$shpt_categories_taxo_value = get_option( 'shpt-check-categories-taxo-widget', 'off' );
$shpt_tags_taxo_value = get_option( 'shpt-check-tags-taxo-widget', 'off' );
$shpt_weight_taxo_value = get_option( 'shpt-check-weight-taxo-widget', 'off' );
$shpt_dimensions_taxo_value = get_option( 'shpt-check-dimensions-taxo-widget', 'off' );
$shpt_stock_taxo_value = get_option( 'shpt-check-stock-taxo-widget', 'off' );
$shpt_sku_taxo_value = get_option( 'shpt-check-sku-taxo-widget', 'off' );
$shpt_date_taxo_value = get_option( 'shpt-check-date-taxo-widget', 'off' );
$shpt_slug_taxo_value = get_option( 'shpt-check-slug-taxo-widget', 'off' );
$shpt_featured_taxo_value = get_option( 'shpt-check-featured-taxo-widget', 'off' );
$shpt_reviews_taxo_value = get_option( 'shpt-check-reviews-taxo-widget', 'off' );
$shpt_shippingclass_taxo_value = get_option( 'shpt-check-shippingclass-taxo-widget', 'off' );
// Taxos label check
$shpt_price_taxo_label_value = get_option( 'shpt-label-check-price-taxo-widget', 'off' );
$shpt_categories_taxo_label_value = get_option( 'shpt-label-check-categories-taxo-widget', 'off' );
$shpt_tags_taxo_label_value = get_option( 'shpt-label-check-tags-taxo-widget', 'off' );
$shpt_weight_taxo_label_value = get_option( 'shpt-label-check-weight-taxo-widget', 'off' );
$shpt_dimensions_taxo_label_value = get_option( 'shpt-label-check-dimensions-taxo-widget', 'off' );
$shpt_stock_taxo_label_value = get_option( 'shpt-label-check-stock-taxo-widget', 'off' );
$shpt_sku_taxo_label_value = get_option( 'shpt-label-check-sku-taxo-widget', 'off' );
$shpt_date_taxo_label_value = get_option( 'shpt-label-check-date-taxo-widget', 'off' );
$shpt_slug_taxo_label_value = get_option( 'shpt-label-check-slug-taxo-widget', 'off' );
$shpt_featured_taxo_label_value = get_option( 'shpt-label-check-featured-taxo-widget', 'off' );
$shpt_reviews_taxo_label_value = get_option( 'shpt-label-check-reviews-taxo-widget', 'off' );
$shpt_shippingclass_taxo_label_value = get_option( 'shpt-label-check-shippingclass-taxo-widget', 'off' );
// Label controls
// *** price
$shpt_price_text_value = get_option( 'shpt-price-text', 'Price: ' );
$shpt_price_color_value = get_option( 'shpt-price-color', 'black' );
$shpt_price_fontsize_value = get_option( 'shpt-price-fontsize');
$shpt_price_fontfamilly_value = get_option( 'shpt-price-fontfamilly', 'roboto' );
// *** categories
$shpt_categories_text_value = get_option( 'shpt-categories-text', 'Categories: ' );
$shpt_categories_color_value = get_option( 'shpt-categories-color', 'black' );
$shpt_categories_fontsize_value = get_option( 'shpt-categories-fontsize');
$shpt_categories_fontfamilly_value = get_option( 'shpt-categories-fontfamilly', 'roboto' );
// *** tags
$shpt_tags_text_value = get_option( 'shpt-tags-text', 'Tags: ' );
$shpt_tags_color_value = get_option( 'shpt-tags-color', 'black' );
$shpt_tags_fontsize_value = get_option( 'shpt-tags-fontsize');
$shpt_tags_fontfamilly_value = get_option( 'shpt-tags-fontfamilly', 'roboto' );
// *** weight
$shpt_weight_text_value = get_option( 'shpt-weight-text', 'Weight: ' );
$shpt_weight_color_value = get_option( 'shpt-weight-color', 'black' );
$shpt_weight_fontsize_value = get_option( 'shpt-weight-fontsize');
$shpt_weight_fontfamilly_value = get_option( 'shpt-weight-fontfamilly', 'roboto' );
// *** dimensions
$shpt_dimensions_text_value = get_option( 'shpt-dimensions-text', 'Price: ' );
$shpt_dimensions_color_value = get_option( 'shpt-dimensions-color', 'black' );
$shpt_dimensions_fontsize_value = get_option( 'shpt-dimensions-fontsize');
$shpt_dimensions_fontfamilly_value = get_option( 'shpt-dimensions-fontfamilly', 'roboto' );
// *** stock
$shpt_stock_text_value = get_option( 'shpt-stock-text', 'Stock: ' );
$shpt_stock_color_value = get_option( 'shpt-stock-color', 'black' );
$shpt_stock_fontsize_value = get_option( 'shpt-stock-fontsize');
$shpt_stock_fontfamilly_value = get_option( 'shpt-stock-fontfamilly', 'roboto' );
// *** sku
$shpt_sku_text_value = get_option( 'shpt-sku-text', 'SKU: ' );
$shpt_sku_color_value = get_option( 'shpt-sku-color', 'black' );
$shpt_sku_fontsize_value = get_option( 'shpt-sku-fontsize');
$shpt_sku_fontfamilly_value = get_option( 'shpt-sku-fontfamilly', 'roboto' );
// *** date
$shpt_date_text_value = get_option( 'shpt-date-text', 'Date: ' );
$shpt_date_color_value = get_option( 'shpt-date-color', 'black' );
$shpt_date_fontsize_value = get_option( 'shpt-date-fontsize');
$shpt_date_fontfamilly_value = get_option( 'shpt-date-fontfamilly', 'roboto' );
// *** slug
$shpt_slug_text_value = get_option( 'shpt-slug-text', 'Slug: ' );
$shpt_slug_color_value = get_option( 'shpt-slug-color', 'black' );
$shpt_slug_fontsize_value = get_option( 'shpt-slug-fontsize');
$shpt_slug_fontfamilly_value = get_option( 'shpt-slug-fontfamilly', 'roboto' );
// *** featured
$shpt_featured_text_value = get_option( 'shpt-featured-text', 'Featured: ' );
$shpt_featured_color_value = get_option( 'shpt-featured-color', 'black' );
$shpt_featured_fontsize_value = get_option( 'shpt-featured-fontsize');
$shpt_featured_fontfamilly_value = get_option( 'shpt-featured-fontfamilly', 'roboto' );
// *** reviews
$shpt_reviews_text_value = get_option( 'shpt-reviews-text', 'Reviews: ' );
$shpt_reviews_color_value = get_option( 'shpt-reviews-color', 'black' );
$shpt_reviews_fontsize_value = get_option( 'shpt-reviews-fontsize');
$shpt_reviews_fontfamilly_value = get_option( 'shpt-reviews-fontfamilly', 'roboto' );
// *** shipping-class
$shpt_shippingclass_text_value = get_option( 'shpt-shipping-class-text', 'Shipping Class: ' );
$shpt_shippingclass_color_value = get_option( 'shpt-shipping-class-color', 'black' );
$shpt_shippingclass_fontsize_value = get_option( 'shpt-shipping-class-fontsize');
$shpt_shippingclass_fontfamilly_value = get_option( 'shpt-shipping-class-fontfamilly', 'roboto' );

?>
<div class="admin-panel">
  <form method="post" action="options.php">
    <div class="header">
			<?php
			settings_fields( 'shpt-plugin-settings' );
      ?>
      <a href="https://bestwpdeveloper.com/" target="_blank"><h1 class="dashboard-title"><?php _e('BEST WP DEVELOPER', 'display-product-taxoes'); ?></h1></a>
      <?php
			do_settings_sections( 'shpt-plugin-main-menu' );
      ?>
      <div class="save-button">
        <?php submit_button(); ?>
      </div>
    </div>
    <div class="section">
      <div class="clmn-wrap first-clm">
        <div class="toggle-container">
          <label class="toggle-label"><?php _e('Active', 'display-product-taxoes'); ?></label>
          <label class="toggle-switch">
            <input type="checkbox" name="shpt-check-products-taxo-widget" value="on" <?php echo checked( $shpt_products_taxo_value, 'on', false ); ?>>
            <span class="slider"></span>
          </label>
        </div>
        <div class="choose-page"><?php _e('Choose Page:', 'display-product-taxoes'); ?></div>
        <div class="list-container">
          <div class="list-item">
            <label><?php _e('Shop page:', 'display-product-taxoes'); ?></label>
            <input type="radio" name="shpt-check-pagechack-taxo-widget" value="on"
            <?php checked(get_option('shpt-check-pagechack-taxo-widget', 'off'), 'on'); ?>>
          </div>
          <div class="list-item">
            <label><?php _e('Single page:', 'display-product-taxoes'); ?></label>
            <input type="radio" name="shpt-check-pagechack-taxo-widget" value="off"
            <?php checked(get_option('shpt-check-pagechack-taxo-widget', 'off'), 'off'); ?>>
          </div>
          <div class="list-item">
            <label><?php _e('Both:', 'display-product-taxoes'); ?></label>
            <input type="radio" name="shpt-check-pagechack-taxo-widget" value="both"
            <?php checked(get_option('shpt-check-pagechack-taxo-widget', 'off'), 'both'); ?>>
          </div>
        </div>
        <div class="select-container">
          <label><?php _e('Taxoes Position:', 'display-product-taxoes'); ?></label>
          <select name="shpt-check-position-taxo-widget">
            <?php $default = 'item_title'; ?>
            <option value="<?php echo $default ?>" <?php selected($shpt_button_position_value, $default); ?>><?php _e('Top Add To Cart', 'display-product-taxoes'); ?></option>
            <?php $style2 = 'loop_item_title'; ?>
            <option value="<?php echo $style2 ?>" <?php selected($shpt_button_position_value, $style2); ?>><?php _e('In Loop Item', 'display-product-taxoes'); ?></option>
            <?php $style3 = 'after_title'; ?>
            <option value="<?php echo $style3 ?>" <?php selected($shpt_button_position_value, $style3); ?>><?php _e('After Title', 'display-product-taxoes'); ?></option>
            <?php $style4 = 'after_item'; ?>
            <option value="<?php echo $style4 ?>" <?php selected($shpt_button_position_value, $style4); ?>><?php _e('After Item', 'display-product-taxoes'); ?></option>
          </select>
        </div>
      </div>
      <div class="clmn-wrap secound-clm">
        <table class="custom-table">
          <tr>
            <th><?php _e('Taxoes', 'display-product-taxoes'); ?></th>
            <th><?php _e('Show Label', 'display-product-taxoes'); ?></th>
            <th><?php _e('Style', 'display-product-taxoes'); ?></th>
          </tr>
          <tr>
              <td class="taxo-align">
                <label class="checker-label"><?php _e('Price: ', 'display-product-taxoes'); ?></label>
                <label class="checker-switch">
                  <input type="checkbox" name="shpt-check-price-taxo-widget" value="on" <?php echo checked( $shpt_price_taxo_value, 'on', false ); ?>>
                </label>
              </td>
              <td>
                <label class="checker-switch">
                  <input type="checkbox" name="shpt-label-check-price-taxo-widget" value="on" <?php echo checked( $shpt_price_taxo_label_value, 'on', false ); ?>>
                </label>
              </td>
              <td>
                <span class="popup-btn" data-popup-id="popup1"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup1">
                  <div class="popup-content">
                    <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('Price', 'display-product-taxoes'); ?></h2>
                      <div class="shpt-controls">
                        <div class="shpt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-price-text" id="shpt-price-text" value="'.$shpt_price_text_value.'" title="Text"  placeholder="Price">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="shpt-price-color" id="shpt-price-text" value="'.$shpt_price_color_value.'" title="Text">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-price-fontsize" id="shpt-price-fontsize" value="'.$shpt_price_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="shpt-price-fontfamilly">
                            <option value="roboto" <?php selected($shpt_price_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($shpt_price_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($shpt_price_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($shpt_price_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($shpt_price_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
                          </select>
                        </div>
                        <p><?php echo _e('Save it from dashboard header save button.', 'display-product-taxoes'); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
          </tr>
          <tr>
              <td class="taxo-align">
                <label class="checker-label"><?php _e('Categories: ', 'display-product-taxoes'); ?></label>
                <label class="checker-switch">
                  <input type="checkbox" name="shpt-check-categories-taxo-widget" value="on" <?php echo checked( $shpt_categories_taxo_value, 'on', false ); ?>>
                </label>
              </td>
              <td>
                <label class="checker-switch">
                  <input type="checkbox" name="shpt-label-check-categories-taxo-widget" value="on" <?php echo checked( $shpt_categories_taxo_label_value, 'on', false ); ?>>
                </label>
              </td>
              <td>
                <span class="popup-btn" data-popup-id="popup2"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup2">
                  <div class="popup-content">
                      <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('Categories', 'display-product-taxoes'); ?></h2>
                      <div class="shpt-controls">
                        <div class="shpt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-categories-text" id="shpt-categories-text" value="'.$shpt_categories_text_value.'" title="Text"  placeholder="Categories">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="shpt-categories-color" id="shpt-categories-text" value="'.$shpt_categories_color_value.'" title="Text">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-categories-fontsize" id="shpt-categories-fontsize" value="'.$shpt_categories_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="shpt-categories-fontfamilly">
                            <option value="roboto" <?php selected($shpt_categories_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($shpt_categories_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($shpt_categories_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($shpt_categories_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($shpt_categories_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
                          </select>
                        </div>
                        <p><?php echo _e('Save it from dashboard header save button.', 'display-product-taxoes'); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
          </tr>
          <tr>
              <td class="taxo-align">
                <label class="checker-label"><?php _e('Tags: ', 'display-product-taxoes'); ?></label>
                <label class="checker-switch">
                  <input type="checkbox" name="shpt-check-tags-taxo-widget" value="on" <?php echo checked( $shpt_tags_taxo_value, 'on', false ); ?>>
                </label>
              </td>
              <td>
                <label class="checker-switch">
                  <input type="checkbox" name="shpt-label-check-tags-taxo-widget" value="on" <?php echo checked( $shpt_tags_taxo_label_value, 'on', false ); ?>>
                </label>
              </td>
              <td>
                <span class="popup-btn" data-popup-id="popup3"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup3">
                  <div class="popup-content">
                      <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('Tags', 'display-product-taxoes'); ?></h2>
                      <div class="shpt-controls">
                        <div class="shpt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-tags-text" id="shpt-tags-text" value="'.$shpt_tags_text_value.'" title="Text"  placeholder="Tags">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="shpt-tags-color" id="shpt-tags-text" value="'.$shpt_tags_color_value.'" title="Text">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-tags-fontsize" id="shpt-tags-fontsize" value="'.$shpt_tags_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="shpt-tags-fontfamilly">
                            <option value="roboto" <?php selected($shpt_tags_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($shpt_tags_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($shpt_tags_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($shpt_tags_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($shpt_tags_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
                          </select>
                        </div>
                        <p><?php echo _e('Save it from dashboard header save button.', 'display-product-taxoes'); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
          </tr>
          <tr>
              <td class="taxo-align">
                <label class="checker-label"><?php _e('Weight: ', 'display-product-taxoes'); ?></label>
                <label class="checker-switch">
                  <input type="checkbox" name="shpt-check-weight-taxo-widget" value="on" <?php echo checked( $shpt_weight_taxo_value, 'on', false ); ?>>
                </label>
              </td>
              <td>
            <label class="checker-switch">
              <input type="checkbox" name="shpt-label-check-weight-taxo-widget" value="on" <?php echo checked( $shpt_weight_taxo_label_value, 'on', false ); ?>>
            </label>
          </td>
              <td>
                <span class="popup-btn" data-popup-id="popup4"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup4">
                  <div class="popup-content">
                      <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('Weight', 'display-product-taxoes'); ?></h2>
                      <div class="shpt-controls">
                        <div class="shpt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-weight-text" id="shpt-weight-text" value="'.$shpt_weight_text_value.'" title="Text"  placeholder="Weight">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="shpt-weight-color" id="shpt-weight-text" value="'.$shpt_weight_color_value.'" title="Text">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-weight-fontsize" id="shpt-weight-fontsize" value="'.$shpt_weight_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="shpt-weight-fontfamilly">
                            <option value="roboto" <?php selected($shpt_weight_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($shpt_weight_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($shpt_weight_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($shpt_weight_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($shpt_weight_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
                          </select>
                        </div>
                        <p><?php echo _e('Save it from dashboard header save button.', 'display-product-taxoes'); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
          </tr>
          <tr>
            <td class="taxo-align">
              <label class="checker-label"><?php _e('Dimentions: ', 'display-product-taxoes'); ?></label>
              <label class="checker-switch">
                <input type="checkbox" name="shpt-check-dimensions-taxo-widget" value="on" <?php echo checked( $shpt_dimensions_taxo_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <label class="checker-switch">
                <input type="checkbox" name="shpt-label-check-dimensions-taxo-widget" value="on" <?php echo checked( $shpt_dimensions_taxo_label_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <span class="popup-btn" data-popup-id="popup5"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup5">
                  <div class="popup-content">
                      <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('Dimensions', 'display-product-taxoes'); ?></h2>
                      <div class="shpt-controls">
                        <div class="shpt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-dimensions-text" id="shpt-dimensions-text" value="'.$shpt_dimensions_text_value.'" title="Text"  placeholder="Dimensions">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="shpt-dimensions-color" id="shpt-dimensions-text" value="'.$shpt_dimensions_color_value.'" title="Text">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-dimensions-fontsize" id="shpt-dimensions-fontsize" value="'.$shpt_dimensions_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="shpt-dimensions-fontfamilly">
                            <option value="roboto" <?php selected($shpt_dimensions_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($shpt_dimensions_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($shpt_dimensions_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($shpt_dimensions_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($shpt_dimensions_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
                          </select>
                        </div>
                        <p><?php echo _e('Save it from dashboard header save button.', 'display-product-taxoes'); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
            </td>
          </tr>
          <tr>
            <td class="taxo-align">
              <label class="checker-label"><?php _e('Stock: ', 'display-product-taxoes'); ?></label>
              <label class="checker-switch">
                <input type="checkbox" name="shpt-check-stock-taxo-widget" value="on" <?php echo checked( $shpt_stock_taxo_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <label class="checker-switch">
                <input type="checkbox" name="shpt-label-check-stock-taxo-widget" value="on" <?php echo checked( $shpt_stock_taxo_label_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <span class="popup-btn" data-popup-id="popup6"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup6">
                  <div class="popup-content">
                      <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('Stock', 'display-product-taxoes'); ?></h2>
                      <div class="shpt-controls">
                        <div class="shpt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-stock-text" id="shpt-stock-text" value="'.$shpt_stock_text_value.'" title="Text"  placeholder="Stock">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="shpt-stock-color" id="shpt-stock-text" value="'.$shpt_stock_color_value.'" title="Text">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-stock-fontsize" id="shpt-stock-fontsize" value="'.$shpt_stock_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="shpt-stock-fontfamilly">
                            <option value="roboto" <?php selected($shpt_stock_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($shpt_stock_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($shpt_stock_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($shpt_stock_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($shpt_stock_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
                          </select>
                        </div>
                        <p><?php echo _e('Save it from dashboard header save button.', 'display-product-taxoes'); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
            </td>
          </tr>
          <tr>
            <td class="taxo-align">
              <label class="checker-label"><?php _e('SKU: ', 'display-product-taxoes'); ?></label>
              <label class="checker-switch">
                <input type="checkbox" name="shpt-check-sku-taxo-widget" value="on" <?php echo checked( $shpt_sku_taxo_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <label class="checker-switch">
                <input type="checkbox" name="shpt-label-check-sku-taxo-widget" value="on" <?php echo checked( $shpt_sku_taxo_label_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <span class="popup-btn" data-popup-id="popup7"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup7">
                  <div class="popup-content">
                      <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('SKU', 'display-product-taxoes'); ?></h2>
                      <div class="shpt-controls">
                        <div class="shpt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-sku-text" id="shpt-sku-text" value="'.$shpt_sku_text_value.'" title="Text"  placeholder="SKU">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="shpt-sku-color" id="shpt-sku-text" value="'.$shpt_sku_color_value.'" title="Text">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-sku-fontsize" id="shpt-sku-fontsize" value="'.$shpt_sku_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="shpt-sku-fontfamilly">
                            <option value="roboto" <?php selected($shpt_sku_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($shpt_sku_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($shpt_sku_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($shpt_sku_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($shpt_sku_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
                          </select>
                        </div>
                        <p><?php echo _e('Save it from dashboard header save button.', 'display-product-taxoes'); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
            </td>
          </tr>
          <tr>
            <td class="taxo-align">
              <label class="checker-label"><?php _e('Date: ', 'display-product-taxoes'); ?></label>
              <label class="checker-switch">
                <input type="checkbox" name="shpt-check-date-taxo-widget" value="on" <?php echo checked( $shpt_date_taxo_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <label class="checker-switch">
                <input type="checkbox" name="shpt-label-check-date-taxo-widget" value="on" <?php echo checked( $shpt_date_taxo_label_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <span class="popup-btn" data-popup-id="popup8"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup8">
                  <div class="popup-content">
                      <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('Date', 'display-product-taxoes'); ?></h2>
                      <div class="shpt-controls">
                        <div class="shpt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-date-text" id="shpt-date-text" value="'.$shpt_date_text_value.'" title="Text"  placeholder="Date">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="shpt-date-color" id="shpt-date-text" value="'.$shpt_date_color_value.'" title="Text">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-date-fontsize" id="shpt-date-fontsize" value="'.$shpt_date_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="shpt-date-fontfamilly">
                            <option value="roboto" <?php selected($shpt_date_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($shpt_date_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($shpt_date_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($shpt_date_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($shpt_date_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
                          </select>
                        </div>
                        <p><?php echo _e('Save it from dashboard header save button.', 'display-product-taxoes'); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
            </td>
          </tr>
          <tr>
            <td class="taxo-align">
              <label class="checker-label"><?php _e('Slug: ', 'display-product-taxoes'); ?></label>
              <label class="checker-switch">
                <input type="checkbox" name="shpt-check-slug-taxo-widget" value="on" <?php echo checked( $shpt_slug_taxo_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <label class="checker-switch">
                <input type="checkbox" name="shpt-label-check-slug-taxo-widget" value="on" <?php echo checked( $shpt_slug_taxo_label_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <span class="popup-btn" data-popup-id="popup9"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup9">
                  <div class="popup-content">
                      <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('Slug', 'display-product-taxoes'); ?></h2>
                      <div class="shpt-controls">
                        <div class="shpt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-slug-text" id="shpt-slug-text" value="'.$shpt_slug_text_value.'" title="Text"  placeholder="Slug">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="shpt-slug-color" id="shpt-slug-text" value="'.$shpt_slug_color_value.'" title="Text">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-slug-fontsize" id="shpt-slug-fontsize" value="'.$shpt_slug_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="shpt-slug-fontfamilly">
                            <option value="roboto" <?php selected($shpt_slug_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($shpt_slug_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($shpt_slug_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($shpt_slug_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($shpt_slug_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
                          </select>
                        </div>
                        <p><?php echo _e('Save it from dashboard header save button.', 'display-product-taxoes'); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
            </td>
          </tr>
          <tr>
            <td class="taxo-align">
              <label class="checker-label"><?php _e('Featured: ', 'display-product-taxoes'); ?></label>
              <label class="checker-switch">
                <input type="checkbox" name="shpt-check-featured-taxo-widget" value="on" <?php echo checked( $shpt_featured_taxo_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <label class="checker-switch">
                <input type="checkbox" name="shpt-label-check-featured-taxo-widget" value="on" <?php echo checked( $shpt_featured_taxo_label_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <span class="popup-btn" data-popup-id="popup10"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup10">
                  <div class="popup-content">
                      <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('Featured', 'display-product-taxoes'); ?></h2>
                      <div class="shpt-controls">
                        <div class="shpt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-featured-text" id="shpt-featured-text" value="'.$shpt_featured_text_value.'" title="Text"  placeholder="Featured">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="shpt-featured-color" id="shpt-featured-text" value="'.$shpt_featured_color_value.'" title="Text">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-featured-fontsize" id="shpt-featured-fontsize" value="'.$shpt_featured_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="shpt-featured-fontfamilly">
                            <option value="roboto" <?php selected($shpt_featured_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($shpt_featured_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($shpt_featured_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($shpt_featured_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($shpt_featured_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
                          </select>
                        </div>
                        <p><?php echo _e('Save it from dashboard header save button.', 'display-product-taxoes'); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
            </td>
          </tr>
          <tr>
            <td class="taxo-align">
              <label class="checker-label"><?php _e('Reviews: ', 'display-product-taxoes'); ?></label>
              <label class="checker-switch">
                <input type="checkbox" name="shpt-check-reviews-taxo-widget" value="on" <?php echo checked( $shpt_reviews_taxo_label_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <label class="checker-switch">
                <input type="checkbox" name="shpt-label-check-reviews-taxo-widget" value="on" <?php echo checked( $shpt_reviews_taxo_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <span class="popup-btn" data-popup-id="popup11"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup11">
                  <div class="popup-content">
                      <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('Reviews', 'display-product-taxoes'); ?></h2>
                      <div class="shpt-controls">
                        <div class="shpt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-reviews-text" id="shpt-reviews-text" value="'.$shpt_reviews_text_value.'" title="Text"  placeholder="Reviews">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="shpt-reviews-color" id="shpt-reviews-text" value="'.$shpt_reviews_color_value.'" title="Text">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-reviews-fontsize" id="shpt-reviews-fontsize" value="'.$shpt_reviews_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="shpt-reviews-fontfamilly">
                            <option value="roboto" <?php selected($shpt_reviews_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($shpt_reviews_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($shpt_reviews_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($shpt_reviews_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($shpt_reviews_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
                          </select>
                        </div>
                        <p><?php echo _e('Save it from dashboard header save button.', 'display-product-taxoes'); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
            </td>
          </tr>
          <tr>
            <td class="taxo-align">
              <label class="checker-label"><?php _e('Shipping Class: ', 'display-product-taxoes'); ?></label>
              <label class="checker-switch">
                <input type="checkbox" name="shpt-check-shippingclass-taxo-widget" value="on" <?php echo checked( $shpt_shippingclass_taxo_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <label class="checker-switch">
                <input type="checkbox" name="shpt-label-check-shippingclass-taxo-widget" value="on" <?php echo checked( $shpt_shippingclass_taxo_label_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <span class="popup-btn" data-popup-id="popup12"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup12">
                  <div class="popup-content">
                      <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('Shipping Class', 'display-product-taxoes'); ?></h2>
                      <div class="shpt-controls">
                        <div class="shpt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-shippingclass-text" id="shpt-shippingclass-text" value="'.$shpt_shippingclass_text_value.'" title="Text"  placeholder="Shipping Class">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="shpt-shippingclass-color" id="shpt-shippingclass-text" value="'.$shpt_shippingclass_color_value.'" title="Text">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="shpt-shippingclass-fontsize" id="shpt-shippingclass-fontsize" value="'.$shpt_shippingclass_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="shpt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="shpt-shippingclass-fontfamilly">
                            <option value="roboto" <?php selected($shpt_shippingclass_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($shpt_shippingclass_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($shpt_shippingclass_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($shpt_shippingclass_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($shpt_shippingclass_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
                          </select>
                        </div>
                        <p><?php echo _e('Save it from dashboard header save button.', 'display-product-taxoes'); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </form>
</div>
