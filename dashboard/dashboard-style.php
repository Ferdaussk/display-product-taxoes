<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$dyptt_products_taxo_value = get_option( 'dyptt-check-products-taxo-widget', 'off' );
$dyptt_button_position_value = get_option( 'dyptt-check-position-taxo-widget', 'off' );
// Taxos
$dyptt_price_taxo_value = get_option( 'dyptt-check-price-taxo-widget', 'off' );
$dyptt_categories_taxo_value = get_option( 'dyptt-check-categories-taxo-widget', 'off' );
$dyptt_tags_taxo_value = get_option( 'dyptt-check-tags-taxo-widget', 'off' );
$dyptt_weight_taxo_value = get_option( 'dyptt-check-weight-taxo-widget', 'off' );
$dyptt_dimensions_taxo_value = get_option( 'dyptt-check-dimensions-taxo-widget', 'off' );
$dyptt_stock_taxo_value = get_option( 'dyptt-check-stock-taxo-widget', 'off' );
$dyptt_sku_taxo_value = get_option( 'dyptt-check-sku-taxo-widget', 'off' );
$dyptt_date_taxo_value = get_option( 'dyptt-check-date-taxo-widget', 'off' );
$dyptt_slug_taxo_value = get_option( 'dyptt-check-slug-taxo-widget', 'off' );
$dyptt_featured_taxo_value = get_option( 'dyptt-check-featured-taxo-widget', 'off' );
$dyptt_reviews_taxo_value = get_option( 'dyptt-check-reviews-taxo-widget', 'off' );
$dyptt_shippingclass_taxo_value = get_option( 'dyptt-check-shippingclass-taxo-widget', 'off' );
// Taxos label check
$dyptt_price_taxo_label_value = get_option( 'dyptt-label-check-price-taxo-widget', 'off' );
$dyptt_categories_taxo_label_value = get_option( 'dyptt-label-check-categories-taxo-widget', 'off' );
$dyptt_tags_taxo_label_value = get_option( 'dyptt-label-check-tags-taxo-widget', 'off' );
$dyptt_weight_taxo_label_value = get_option( 'dyptt-label-check-weight-taxo-widget', 'off' );
$dyptt_dimensions_taxo_label_value = get_option( 'dyptt-label-check-dimensions-taxo-widget', 'off' );
$dyptt_stock_taxo_label_value = get_option( 'dyptt-label-check-stock-taxo-widget', 'off' );
$dyptt_sku_taxo_label_value = get_option( 'dyptt-label-check-sku-taxo-widget', 'off' );
$dyptt_date_taxo_label_value = get_option( 'dyptt-label-check-date-taxo-widget', 'off' );
$dyptt_slug_taxo_label_value = get_option( 'dyptt-label-check-slug-taxo-widget', 'off' );
$dyptt_featured_taxo_label_value = get_option( 'dyptt-label-check-featured-taxo-widget', 'off' );
$dyptt_reviews_taxo_label_value = get_option( 'dyptt-label-check-reviews-taxo-widget', 'off' );
$dyptt_shippingclass_taxo_label_value = get_option( 'dyptt-label-check-shippingclass-taxo-widget', 'off' );
// Label controls
// *** price
$dyptt_price_text_value = get_option( 'dyptt-price-text', 'Price: ' );
$dyptt_price_color_value = get_option( 'dyptt-price-color', 'black' );
$dyptt_price_fontsize_value = get_option( 'dyptt-price-fontsize');
$dyptt_price_fontfamilly_value = get_option( 'dyptt-price-fontfamilly', 'roboto' );
// *** categories
$dyptt_categories_text_value = get_option( 'dyptt-categories-text', 'Categories: ' );
$dyptt_categories_color_value = get_option( 'dyptt-categories-color', 'black' );
$dyptt_categories_fontsize_value = get_option( 'dyptt-categories-fontsize');
$dyptt_categories_fontfamilly_value = get_option( 'dyptt-categories-fontfamilly', 'roboto' );
// *** tags
$dyptt_tags_text_value = get_option( 'dyptt-tags-text', 'Tags: ' );
$dyptt_tags_color_value = get_option( 'dyptt-tags-color', 'black' );
$dyptt_tags_fontsize_value = get_option( 'dyptt-tags-fontsize');
$dyptt_tags_fontfamilly_value = get_option( 'dyptt-tags-fontfamilly', 'roboto' );
// *** weight
$dyptt_weight_text_value = get_option( 'dyptt-weight-text', 'Weight: ' );
$dyptt_weight_color_value = get_option( 'dyptt-weight-color', 'black' );
$dyptt_weight_fontsize_value = get_option( 'dyptt-weight-fontsize');
$dyptt_weight_fontfamilly_value = get_option( 'dyptt-weight-fontfamilly', 'roboto' );
// *** dimensions
$dyptt_dimensions_text_value = get_option( 'dyptt-dimensions-text', 'Dimensions: ' );
$dyptt_dimensions_color_value = get_option( 'dyptt-dimensions-color', 'black' );
$dyptt_dimensions_fontsize_value = get_option( 'dyptt-dimensions-fontsize');
$dyptt_dimensions_fontfamilly_value = get_option( 'dyptt-dimensions-fontfamilly', 'roboto' );
// *** stock
$dyptt_stock_text_value = get_option( 'dyptt-stock-text', 'Stock: ' );
$dyptt_stock_color_value = get_option( 'dyptt-stock-color', 'black' );
$dyptt_stock_fontsize_value = get_option( 'dyptt-stock-fontsize');
$dyptt_stock_fontfamilly_value = get_option( 'dyptt-stock-fontfamilly', 'roboto' );
// *** sku
$dyptt_sku_text_value = get_option( 'dyptt-sku-text', 'SKU: ' );
$dyptt_sku_color_value = get_option( 'dyptt-sku-color', 'black' );
$dyptt_sku_fontsize_value = get_option( 'dyptt-sku-fontsize');
$dyptt_sku_fontfamilly_value = get_option( 'dyptt-sku-fontfamilly', 'roboto' );
// *** date
$dyptt_date_text_value = get_option( 'dyptt-date-text', 'Date: ' );
$dyptt_date_color_value = get_option( 'dyptt-date-color', 'black' );
$dyptt_date_fontsize_value = get_option( 'dyptt-date-fontsize');
$dyptt_date_fontfamilly_value = get_option( 'dyptt-date-fontfamilly', 'roboto' );
// *** slug
$dyptt_slug_text_value = get_option( 'dyptt-slug-text', 'Slug: ' );
$dyptt_slug_color_value = get_option( 'dyptt-slug-color', 'black' );
$dyptt_slug_fontsize_value = get_option( 'dyptt-slug-fontsize');
$dyptt_slug_fontfamilly_value = get_option( 'dyptt-slug-fontfamilly', 'roboto' );
// *** featured
$dyptt_featured_text_value = get_option( 'dyptt-featured-text', 'Featured: ' );
$dyptt_featured_color_value = get_option( 'dyptt-featured-color', 'black' );
$dyptt_featured_fontsize_value = get_option( 'dyptt-featured-fontsize');
$dyptt_featured_fontfamilly_value = get_option( 'dyptt-featured-fontfamilly', 'roboto' );
// *** reviews
$dyptt_reviews_text_value = get_option( 'dyptt-reviews-text', 'Reviews: ' );
$dyptt_reviews_color_value = get_option( 'dyptt-reviews-color', 'black' );
$dyptt_reviews_fontsize_value = get_option( 'dyptt-reviews-fontsize');
$dyptt_reviews_fontfamilly_value = get_option( 'dyptt-reviews-fontfamilly', 'roboto' );
// *** shipping-class
$dyptt_shippingclass_text_value = get_option( 'dyptt-shippingclass-text', 'Shipping Class: ' );
$dyptt_shippingclass_color_value = get_option( 'dyptt-shippingclass-color', 'black' );
$dyptt_shippingclass_fontsize_value = get_option( 'dyptt-shippingclass-fontsize');
$dyptt_shippingclass_fontfamilly_value = get_option( 'dyptt-shippingclass-fontfamilly', 'roboto' );

?>
<div class="admin-panel">
  <form method="post" action="options.php">
    <div class="header">
			<?php
			settings_fields( 'dyptt-plugin-settings' );
      ?>
      <a href="https://bestwpdeveloper.com/" target="_blank"><h1 class="dashboard-title"><?php _e('BEST WP DEVELOPER', 'display-product-taxoes'); ?></h1></a>
      <?php
			do_settings_sections( 'dyptt-plugin-main-menu' );
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
            <input type="checkbox" name="dyptt-check-products-taxo-widget" value="on" <?php echo checked( $dyptt_products_taxo_value, 'on', false ); ?>>
            <span class="slider"></span>
          </label>
        </div>
        <div class="choose-page"><?php _e('Choose Page:', 'display-product-taxoes'); ?></div>
        <div class="list-container">
          <div class="list-item">
            <label><?php _e('Shop page:', 'display-product-taxoes'); ?></label>
            <input type="radio" name="dyptt-check-pagechack-taxo-widget" value="on"
            <?php checked(get_option('dyptt-check-pagechack-taxo-widget', 'off'), 'on'); ?>>
          </div>
          <div class="list-item">
            <label><?php _e('Single page:', 'display-product-taxoes'); ?></label>
            <input type="radio" name="dyptt-check-pagechack-taxo-widget" value="off"
            <?php checked(get_option('dyptt-check-pagechack-taxo-widget', 'off'), 'off'); ?>>
          </div>
          <div class="list-item">
            <label><?php _e('Both:', 'display-product-taxoes'); ?></label>
            <input type="radio" name="dyptt-check-pagechack-taxo-widget" value="both"
            <?php checked(get_option('dyptt-check-pagechack-taxo-widget', 'off'), 'both'); ?>>
          </div>
        </div>
        <div class="select-container">
          <label><?php _e('Taxoes Position:', 'display-product-taxoes'); ?></label>
          <select name="dyptt-check-position-taxo-widget">
            <?php $default = 'item_title'; ?>
            <option value="<?php echo $default ?>" <?php selected($dyptt_button_position_value, $default); ?>><?php _e('Top Add To Cart', 'display-product-taxoes'); ?></option>
            <?php $style2 = 'loop_item_title'; ?>
            <option value="<?php echo $style2 ?>" <?php selected($dyptt_button_position_value, $style2); ?>><?php _e('In Loop Item', 'display-product-taxoes'); ?></option>
            <?php $style3 = 'after_title'; ?>
            <option value="<?php echo $style3 ?>" <?php selected($dyptt_button_position_value, $style3); ?>><?php _e('After Title', 'display-product-taxoes'); ?></option>
            <?php $style4 = 'after_item'; ?>
            <option value="<?php echo $style4 ?>" <?php selected($dyptt_button_position_value, $style4); ?>><?php _e('After Item', 'display-product-taxoes'); ?></option>
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
                  <input type="checkbox" name="dyptt-check-price-taxo-widget" value="on" <?php echo checked( $dyptt_price_taxo_value, 'on', false ); ?>>
                </label>
              </td>
              <td>
                <label class="checker-switch">
                  <input type="checkbox" name="dyptt-label-check-price-taxo-widget" value="on" <?php echo checked( $dyptt_price_taxo_label_value, 'on', false ); ?>>
                </label>
              </td>
              <td>
                <span class="popup-btn" data-popup-id="popup1"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup1">
                  <div class="popup-content">
                    <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('Price', 'display-product-taxoes'); ?></h2>
                      <div class="dyptt-controls">
                        <div class="dyptt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-price-text" id="dyptt-price-text" value="'.$dyptt_price_text_value.'" title="Text"  placeholder="Price">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="dyptt-price-color" id="dyptt-price-text" value="'.$dyptt_price_color_value.'" title="Text">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-price-fontsize" id="dyptt-price-fontsize" value="'.$dyptt_price_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="dyptt-price-fontfamilly">
                            <option value="roboto" <?php selected($dyptt_price_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($dyptt_price_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($dyptt_price_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($dyptt_price_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($dyptt_price_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
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
                  <input type="checkbox" name="dyptt-check-categories-taxo-widget" value="on" <?php echo checked( $dyptt_categories_taxo_value, 'on', false ); ?>>
                </label>
              </td>
              <td>
                <label class="checker-switch">
                  <input type="checkbox" name="dyptt-label-check-categories-taxo-widget" value="on" <?php echo checked( $dyptt_categories_taxo_label_value, 'on', false ); ?>>
                </label>
              </td>
              <td>
                <span class="popup-btn" data-popup-id="popup2"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup2">
                  <div class="popup-content">
                      <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('Categories', 'display-product-taxoes'); ?></h2>
                      <div class="dyptt-controls">
                        <div class="dyptt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-categories-text" id="dyptt-categories-text" value="'.$dyptt_categories_text_value.'" title="Text"  placeholder="Categories">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="dyptt-categories-color" id="dyptt-categories-text" value="'.$dyptt_categories_color_value.'" title="Text">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-categories-fontsize" id="dyptt-categories-fontsize" value="'.$dyptt_categories_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="dyptt-categories-fontfamilly">
                            <option value="roboto" <?php selected($dyptt_categories_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($dyptt_categories_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($dyptt_categories_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($dyptt_categories_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($dyptt_categories_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
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
                  <input type="checkbox" name="dyptt-check-tags-taxo-widget" value="on" <?php echo checked( $dyptt_tags_taxo_value, 'on', false ); ?>>
                </label>
              </td>
              <td>
                <label class="checker-switch">
                  <input type="checkbox" name="dyptt-label-check-tags-taxo-widget" value="on" <?php echo checked( $dyptt_tags_taxo_label_value, 'on', false ); ?>>
                </label>
              </td>
              <td>
                <span class="popup-btn" data-popup-id="popup3"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup3">
                  <div class="popup-content">
                      <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('Tags', 'display-product-taxoes'); ?></h2>
                      <div class="dyptt-controls">
                        <div class="dyptt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-tags-text" id="dyptt-tags-text" value="'.$dyptt_tags_text_value.'" title="Text"  placeholder="Tags">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="dyptt-tags-color" id="dyptt-tags-text" value="'.$dyptt_tags_color_value.'" title="Text">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-tags-fontsize" id="dyptt-tags-fontsize" value="'.$dyptt_tags_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="dyptt-tags-fontfamilly">
                            <option value="roboto" <?php selected($dyptt_tags_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($dyptt_tags_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($dyptt_tags_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($dyptt_tags_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($dyptt_tags_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
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
                  <input type="checkbox" name="dyptt-check-weight-taxo-widget" value="on" <?php echo checked( $dyptt_weight_taxo_value, 'on', false ); ?>>
                </label>
              </td>
              <td>
            <label class="checker-switch">
              <input type="checkbox" name="dyptt-label-check-weight-taxo-widget" value="on" <?php echo checked( $dyptt_weight_taxo_label_value, 'on', false ); ?>>
            </label>
          </td>
              <td>
                <span class="popup-btn" data-popup-id="popup4"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup4">
                  <div class="popup-content">
                      <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('Weight', 'display-product-taxoes'); ?></h2>
                      <div class="dyptt-controls">
                        <div class="dyptt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-weight-text" id="dyptt-weight-text" value="'.$dyptt_weight_text_value.'" title="Text"  placeholder="Weight">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="dyptt-weight-color" id="dyptt-weight-text" value="'.$dyptt_weight_color_value.'" title="Text">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-weight-fontsize" id="dyptt-weight-fontsize" value="'.$dyptt_weight_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="dyptt-weight-fontfamilly">
                            <option value="roboto" <?php selected($dyptt_weight_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($dyptt_weight_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($dyptt_weight_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($dyptt_weight_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($dyptt_weight_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
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
              <label class="checker-label"><?php _e('Dimensions: ', 'display-product-taxoes'); ?></label>
              <label class="checker-switch">
                <input type="checkbox" name="dyptt-check-dimensions-taxo-widget" value="on" <?php echo checked( $dyptt_dimensions_taxo_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <label class="checker-switch">
                <input type="checkbox" name="dyptt-label-check-dimensions-taxo-widget" value="on" <?php echo checked( $dyptt_dimensions_taxo_label_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <span class="popup-btn" data-popup-id="popup5"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup5">
                  <div class="popup-content">
                      <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('Dimensions', 'display-product-taxoes'); ?></h2>
                      <div class="dyptt-controls">
                        <div class="dyptt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-dimensions-text" id="dyptt-dimensions-text" value="'.$dyptt_dimensions_text_value.'" title="Text"  placeholder="Dimensions">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="dyptt-dimensions-color" id="dyptt-dimensions-text" value="'.$dyptt_dimensions_color_value.'" title="Text">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-dimensions-fontsize" id="dyptt-dimensions-fontsize" value="'.$dyptt_dimensions_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="dyptt-dimensions-fontfamilly">
                            <option value="roboto" <?php selected($dyptt_dimensions_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($dyptt_dimensions_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($dyptt_dimensions_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($dyptt_dimensions_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($dyptt_dimensions_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
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
                <input type="checkbox" name="dyptt-check-stock-taxo-widget" value="on" <?php echo checked( $dyptt_stock_taxo_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <label class="checker-switch">
                <input type="checkbox" name="dyptt-label-check-stock-taxo-widget" value="on" <?php echo checked( $dyptt_stock_taxo_label_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <span class="popup-btn" data-popup-id="popup6"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup6">
                  <div class="popup-content">
                      <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('Stock', 'display-product-taxoes'); ?></h2>
                      <div class="dyptt-controls">
                        <div class="dyptt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-stock-text" id="dyptt-stock-text" value="'.$dyptt_stock_text_value.'" title="Text"  placeholder="Stock">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="dyptt-stock-color" id="dyptt-stock-text" value="'.$dyptt_stock_color_value.'" title="Text">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-stock-fontsize" id="dyptt-stock-fontsize" value="'.$dyptt_stock_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="dyptt-stock-fontfamilly">
                            <option value="roboto" <?php selected($dyptt_stock_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($dyptt_stock_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($dyptt_stock_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($dyptt_stock_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($dyptt_stock_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
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
                <input type="checkbox" name="dyptt-check-sku-taxo-widget" value="on" <?php echo checked( $dyptt_sku_taxo_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <label class="checker-switch">
                <input type="checkbox" name="dyptt-label-check-sku-taxo-widget" value="on" <?php echo checked( $dyptt_sku_taxo_label_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <span class="popup-btn" data-popup-id="popup7"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup7">
                  <div class="popup-content">
                      <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('SKU', 'display-product-taxoes'); ?></h2>
                      <div class="dyptt-controls">
                        <div class="dyptt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-sku-text" id="dyptt-sku-text" value="'.$dyptt_sku_text_value.'" title="Text"  placeholder="SKU">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="dyptt-sku-color" id="dyptt-sku-text" value="'.$dyptt_sku_color_value.'" title="Text">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-sku-fontsize" id="dyptt-sku-fontsize" value="'.$dyptt_sku_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="dyptt-sku-fontfamilly">
                            <option value="roboto" <?php selected($dyptt_sku_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($dyptt_sku_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($dyptt_sku_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($dyptt_sku_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($dyptt_sku_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
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
                <input type="checkbox" name="dyptt-check-date-taxo-widget" value="on" <?php echo checked( $dyptt_date_taxo_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <label class="checker-switch">
                <input type="checkbox" name="dyptt-label-check-date-taxo-widget" value="on" <?php echo checked( $dyptt_date_taxo_label_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <span class="popup-btn" data-popup-id="popup8"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup8">
                  <div class="popup-content">
                      <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('Date', 'display-product-taxoes'); ?></h2>
                      <div class="dyptt-controls">
                        <div class="dyptt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-date-text" id="dyptt-date-text" value="'.$dyptt_date_text_value.'" title="Text"  placeholder="Date">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="dyptt-date-color" id="dyptt-date-text" value="'.$dyptt_date_color_value.'" title="Text">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-date-fontsize" id="dyptt-date-fontsize" value="'.$dyptt_date_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="dyptt-date-fontfamilly">
                            <option value="roboto" <?php selected($dyptt_date_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($dyptt_date_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($dyptt_date_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($dyptt_date_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($dyptt_date_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
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
                <input type="checkbox" name="dyptt-check-slug-taxo-widget" value="on" <?php echo checked( $dyptt_slug_taxo_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <label class="checker-switch">
                <input type="checkbox" name="dyptt-label-check-slug-taxo-widget" value="on" <?php echo checked( $dyptt_slug_taxo_label_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <span class="popup-btn" data-popup-id="popup9"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup9">
                  <div class="popup-content">
                      <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('Slug', 'display-product-taxoes'); ?></h2>
                      <div class="dyptt-controls">
                        <div class="dyptt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-slug-text" id="dyptt-slug-text" value="'.$dyptt_slug_text_value.'" title="Text"  placeholder="Slug">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="dyptt-slug-color" id="dyptt-slug-text" value="'.$dyptt_slug_color_value.'" title="Text">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-slug-fontsize" id="dyptt-slug-fontsize" value="'.$dyptt_slug_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="dyptt-slug-fontfamilly">
                            <option value="roboto" <?php selected($dyptt_slug_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($dyptt_slug_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($dyptt_slug_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($dyptt_slug_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($dyptt_slug_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
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
                <input type="checkbox" name="dyptt-check-featured-taxo-widget" value="on" <?php echo checked( $dyptt_featured_taxo_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <label class="checker-switch">
                <input type="checkbox" name="dyptt-label-check-featured-taxo-widget" value="on" <?php echo checked( $dyptt_featured_taxo_label_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <span class="popup-btn" data-popup-id="popup10"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup10">
                  <div class="popup-content">
                      <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('Featured', 'display-product-taxoes'); ?></h2>
                      <div class="dyptt-controls">
                        <div class="dyptt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-featured-text" id="dyptt-featured-text" value="'.$dyptt_featured_text_value.'" title="Text"  placeholder="Featured">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="dyptt-featured-color" id="dyptt-featured-text" value="'.$dyptt_featured_color_value.'" title="Text">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-featured-fontsize" id="dyptt-featured-fontsize" value="'.$dyptt_featured_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="dyptt-featured-fontfamilly">
                            <option value="roboto" <?php selected($dyptt_featured_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($dyptt_featured_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($dyptt_featured_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($dyptt_featured_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($dyptt_featured_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
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
                <input type="checkbox" name="dyptt-check-reviews-taxo-widget" value="on" <?php echo checked( $dyptt_reviews_taxo_label_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <label class="checker-switch">
                <input type="checkbox" name="dyptt-label-check-reviews-taxo-widget" value="on" <?php echo checked( $dyptt_reviews_taxo_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <span class="popup-btn" data-popup-id="popup11"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup11">
                  <div class="popup-content">
                      <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('Reviews', 'display-product-taxoes'); ?></h2>
                      <div class="dyptt-controls">
                        <div class="dyptt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-reviews-text" id="dyptt-reviews-text" value="'.$dyptt_reviews_text_value.'" title="Text"  placeholder="Reviews">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="dyptt-reviews-color" id="dyptt-reviews-text" value="'.$dyptt_reviews_color_value.'" title="Text">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-reviews-fontsize" id="dyptt-reviews-fontsize" value="'.$dyptt_reviews_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="dyptt-reviews-fontfamilly">
                            <option value="roboto" <?php selected($dyptt_reviews_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($dyptt_reviews_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($dyptt_reviews_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($dyptt_reviews_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($dyptt_reviews_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
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
                <input type="checkbox" name="dyptt-check-shippingclass-taxo-widget" value="on" <?php echo checked( $dyptt_shippingclass_taxo_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <label class="checker-switch">
                <input type="checkbox" name="dyptt-label-check-shippingclass-taxo-widget" value="on" <?php echo checked( $dyptt_shippingclass_taxo_label_value, 'on', false ); ?>>
              </label>
            </td>
            <td>
              <span class="popup-btn" data-popup-id="popup12"><?php _e('Go', 'display-product-taxoes'); ?></span>
                <div class="popup-container" id="popup12">
                  <div class="popup-content">
                      <span class="popup-close">&times;</span>
                    <div class="popup-con-wrap">
                      <h2><?php _e('Shipping Class', 'display-product-taxoes'); ?></h2>
                      <div class="dyptt-controls">
                        <div class="dyptt-input">
                          <label for=""><?php _e('Label ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-shippingclass-text" id="dyptt-shippingclass-text" value="'.$dyptt_shippingclass_text_value.'" title="Text"  placeholder="Shipping Class">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Color ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="color" name="dyptt-shippingclass-color" id="dyptt-shippingclass-text" value="'.$dyptt_shippingclass_color_value.'" title="Text">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Size ', 'display-product-taxoes'); ?></label>
                          <?php echo '<input type="text" name="dyptt-shippingclass-fontsize" id="dyptt-shippingclass-fontsize" value="'.$dyptt_shippingclass_fontsize_value.'" title="Number px"  placeholder="px, %, rem">';?>
                        </div>
                        <div class="dyptt-input">
                          <label for=""><?php _e('Font Familly ', 'display-product-taxoes'); ?></label>
                          <select name="dyptt-shippingclass-fontfamilly">
                            <option value="roboto" <?php selected($dyptt_shippingclass_fontfamilly_value, 'roboto'); ?>><?php _e('Roboto - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="open-sans" <?php selected($dyptt_shippingclass_fontfamilly_value, 'open-sans'); ?>><?php _e('Open Sans - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="lato" <?php selected($dyptt_shippingclass_fontfamilly_value, 'lato'); ?>><?php _e('Lato - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="montserrat" <?php selected($dyptt_shippingclass_fontfamilly_value, 'montserrat'); ?>><?php _e('Montserrat - Sans-serif', 'display-product-taxoes'); ?></option>
                            <option value="nunito" <?php selected($dyptt_shippingclass_fontfamilly_value, 'nunito'); ?>><?php _e('Nunito - Sans-serif', 'display-product-taxoes'); ?></option>
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
