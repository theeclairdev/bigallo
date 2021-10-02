<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<form class="woocommerce-form woocommerce-form-login login" method="post">

	<?php do_action( 'woocommerce_login_form_start' ); ?>
	<div class="form-field">
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" placeholder="Email" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
		<label for="username"><?php esc_html_e( 'Email', 'woocommerce' ); ?></label>
	</div>
	<div class="form-field">
		<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" placeholder="<?php esc_html_e( 'Password', 'woocommerce' ); ?>" autocomplete="current-password" />
		<label for="password"><?php esc_html_e( 'Password', 'woocommerce' ); ?></label>
	</div>

	<?php do_action( 'woocommerce_login_form' ); ?>

	<div class="form-field d-flex flex-row justify-content-between align-items-center">
		<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>">Забыли пароль?</a>
		<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
		<button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
	</div>

	<?php do_action( 'woocommerce_login_form_end' ); ?>

</form>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
