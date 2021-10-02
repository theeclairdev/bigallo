<?php
/**
 * Template Name: Auth
 */
get_header('auth'); ?>
<?php
if ( have_posts() ) :
    while ( have_posts() ) :  the_post(); ?>
    <div class="auth-wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="auth-blocks">
                        <div class="auth-tab auth-login active" data-tab="login">
                            <div class="auth-title">Вход</div>
                            <div class="auth-block">
                                <div class="auth-content">
                                    <?php echo do_shortcode('[wc_login_form_bigallo]'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="auth-tab auth-registration" data-tab="register">
                            <div class="auth-title">Регистрация</div>
                            <div class="auth-block">
                                <div class="auth-content">
                                    <?php echo do_shortcode('[wc_reg_form_bigallo]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>