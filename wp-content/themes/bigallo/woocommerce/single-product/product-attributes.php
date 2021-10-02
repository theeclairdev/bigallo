<?php
/**
 * Product attributes
 *
 * Used by list_attributes() in the products class.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-attributes.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

if ( ! $product_attributes ) {
	return;
}
?>
<div class="woocommerce-product-attributes shop_attributes">
	<?php foreach ( $product_attributes as $product_attribute_key => $product_attribute ) : ?>
        <?php if($product_attribute['label'] == 'Общая площадь' || $product_attribute['label'] == 'Количество комнат' || 
        $product_attribute['label'] == 'Количество спален' || $product_attribute['label'] == 'Ванные комнаты' || $product_attribute['label'] == 'До пляжа') : ?>
            <div class="woocommerce-product-attributes-item woocommerce-product-attributes-item--<?php echo esc_attr( $product_attribute_key ); ?>">
            <?php if(is_single()) : ?>    
                <div class="woocommerce-product-attributes-item__label">
                    <?php echo $product_attribute['label']; ?>
                </div>
            <?php endif; ?>
            <div class="woocommerce-product-attributes-item__value"><?php echo strip_tags( $product_attribute['value'] ); ?>
                <div class="woocommerce-product-attributes-item_icon">
                    <?php if($product_attribute['label'] == 'Общая площадь') : ?>
                        <span class="icon attribute-icon attribute-icon-square"></span>
                    <?php elseif($product_attribute['label'] == 'Количество комнат') : ?>
                        <span class="icon attribute-icon attribute-icon-rooms"></span>
                    <?php elseif($product_attribute['label'] == 'Количество спален') : ?>
                        <span class="icon attribute-icon attribute-icon-bedrooms"></span>
                    <?php elseif($product_attribute['label'] == 'Ванные комнаты') : ?>
                        <span class="icon attribute-icon attribute-icon-bathrooms"></span>
                    <?php elseif($product_attribute['label'] == 'Вид на море') : ?>
                        <span class="icon attribute-icon attribute-icon-sea"></span>
                    <?php elseif($product_attribute['label'] == 'Наличие бассейна') : ?>
                        <span class="icon attribute-icon attribute-icon-swimming"></span>
                    <?php elseif($product_attribute['label'] == 'Наличие душа') : ?>
                        <span class="icon attribute-icon attribute-icon-shower"></span>
                    <?php elseif($product_attribute['label'] == 'Расстояние до пляжа') : ?>
                        <span class="icon attribute-icon attribute-icon-beach"></span>
                    <?php elseif($product_attribute['label'] == 'Расстояние до аэропорта') : ?>
                        <span class="icon attribute-icon attribute-icon-airport"></span>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
	<?php endforeach; ?>
</div>
