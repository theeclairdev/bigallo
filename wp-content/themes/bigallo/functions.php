<?php

function bigallo_scripts() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.5.1.min.js', array(), '', true);
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css' );
	wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/assets/css/slick.css' );
	wp_enqueue_style( 'bigallo-style', get_template_directory_uri() . '/assets/css/main.css' );
    wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'bigallo-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'bigallo_scripts' );

add_filter( 'facetwp_facet_dropdown_show_counts', '__return_false' );


function bigallo_init_functions()  {
    $labels = array(
        'name'                       => 'Города',
        'singular_name'              => 'Город',
        'menu_name'                  => 'Города',
        'all_items'                  => 'Все города',
        'parent_item'                => 'Город',
        'parent_item_colon'          => 'Город:',
        'new_item_name'              => 'Новый город',
        'add_new_item'               => 'Добавить новый город',
        'edit_item'                  => 'Редактировать город',
        'update_item'                => 'Обновить город',
        'search_items'               => 'Искать город',
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'city', 'product', $args );

    // Register Menu
    register_nav_menu('header', __( 'Header' ));
}
    
add_action( 'init', 'bigallo_init_functions', 0 );


// Registration shortcode
add_shortcode( 'wc_reg_form_bigallo', 'bigallo_separate_registration_form' );
    
function bigallo_separate_registration_form() {
   if ( is_admin() ) return;
   if ( is_user_logged_in() ) return;
   ob_start();
 
   do_action( 'woocommerce_before_customer_login_form' );
 
   ?>
      <form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >
 
         <?php do_action( 'woocommerce_register_form_start' ); ?>
 
         <div class="form-fields">

            <div class="form-field">
               <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" placeholder="Email" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
               <label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span></label>
            </div>

            <div class="form-field">
               <input type="text" class="input-text" name="billing_first_name" placeholder="Имя" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" />
               <label for="reg_billing_first_name"><?php _e( 'First name', 'woocommerce' ); ?><span class="required">*</span></label>
            </div>

            <div class="form-field">
               <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" placeholder="Пароль" name="password" id="reg_password" autocomplete="new-password" />
               <label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
            </div>

            <div class="form-field">
               <input type="text" class="input-text" name="billing_last_name" placeholder="Фамилия" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" />
               <label for="reg_billing_last_name"><?php _e( 'Last name', 'woocommerce' ); ?><span class="required">*</span></label>
            </div>

            <div class="form-field">
               <input type="text" class="input-text" name="billing_phone" id="reg_billing_phone" placeholder="Телефон" value="<?php echo ( ! empty( $_POST['billing_phone'] ) ) ? esc_attr( wp_unslash( $_POST['billing_phone'] ) ) : ''; ?>" />
               <label for="reg_billing_phone"><?php _e( 'Phone', 'woocommerce' ); ?></label>
            </div>

         </div>
 
         <?php do_action( 'woocommerce_register_form' ); ?>
 
         <div class="form-field form-field_submit">
            <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
            <button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
         </div>
 
         <?php do_action( 'woocommerce_register_form_end' ); ?>
 
      </form>
 
   <?php
     
   return ob_get_clean();
}

// Login shortcode
add_shortcode( 'wc_login_form_bigallo', 'bigallo_separate_login_form' );
  
function bigallo_separate_login_form() {
   if ( is_admin() ) return;
   if ( is_user_logged_in() ) return; 
   ob_start();
   wc_get_template_part('myaccount/form', 'login');
   return ob_get_clean();
}

/**
* register fields Validating.
*/
function wooc_validate_extra_register_fields( $username, $email, $validation_errors ) {
   if ( isset( $_POST['billing_first_name'] ) && empty( $_POST['billing_first_name'] ) ) {
          $validation_errors->add( 'billing_first_name_error', __( '<strong>Error</strong>: First name is required!', 'woocommerce' ) );
   }
   if ( isset( $_POST['billing_last_name'] ) && empty( $_POST['billing_last_name'] ) ) {
          $validation_errors->add( 'billing_last_name_error', __( '<strong>Error</strong>: Last name is required!.', 'woocommerce' ) );
   }
      return $validation_errors;
}
add_action( 'woocommerce_register_post', 'wooc_validate_extra_register_fields', 10, 3 );

function wooc_save_extra_register_fields( $customer_id ) {
   if ( isset( $_POST['billing_phone'] ) ) {
      update_user_meta( $customer_id, 'billing_phone', sanitize_text_field( $_POST['billing_phone'] ) );
   }
   if ( isset( $_POST['billing_first_name'] ) ) {
      update_user_meta( $customer_id, 'first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
      update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
   }
   if ( isset( $_POST['billing_last_name'] ) ) {
      update_user_meta( $customer_id, 'last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
      update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
   }
}
add_action( 'woocommerce_created_customer', 'wooc_save_extra_register_fields' );

add_filter( 'woocommerce_checkout_fields', 'wc_add_confirm_password_checkout', 10, 1 );
function wc_add_confirm_password_checkout( $checkout_fields ) {
   if ( get_option( 'woocommerce_registration_generate_password' ) == 'no' ) {
      $checkout_fields['account']['account_password2'] = array(
         'type'              => 'password',
         'label'             => __( 'Confirm password', 'woocommerce' ),
         'required'          => true,
         'placeholder'       => _x( 'Confirm Password', 'placeholder', 'woocommerce' )
      );
   }

   return $checkout_fields;
}

add_shortcode( 'wc_lost_password_form_bigallo', 'bigallo_separate_lost_password_form' );
  
function bigallo_separate_lost_password_form() {
   if ( is_admin() ) return;
   if ( is_user_logged_in() ) return; 
   ob_start();
   wc_get_template_part('myaccount/form', 'lost-password');
   return ob_get_clean();
}