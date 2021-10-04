<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.2
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_lost_password_form' );
?>

<form method="post" class="woocommerce-ResetPassword lost_reset_password">

	

	<form class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
	<div class="form-field">
		<input class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="user_login" id="user_login" autocomplete="username" />
		<label for="username"><?php esc_html_e( 'Enter your email', 'woocommerce' ); ?></label>
		</div>
	</form>
	

	<div class="form-field form-field_button">

	<?php do_action( 'woocommerce_lostpassword_form' ); ?>

	<div class="woocommerce-form-row form-row">
		<input type="hidden" name="wc_reset_password" value="true" />
		<button type="submit" class="woocommerce-Button button button-lp" value="<?php esc_attr_e( 'Get new password', 'woocommerce' ); ?>"><?php esc_html_e( 'Get new password', 'woocommerce' ); ?></button>
	</div>
	</div>

	<?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>

</form>
<?php
do_action( 'woocommerce_after_lost_password_form' );
