<?php
/**
 * Template Name: Lost Password
 */
get_header('auth'); ?>
<?php
if ( have_posts() ) :
    while ( have_posts() ) :  the_post(); ?>

<div class="lost-password-wrapper">
        <div class="container">
        <div class="lost-password-title active">Восстановить Пароль</div>
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="lost-password-blocks">
                        <div class="lost-password-tab lost-password active" data-tab="lost">
                            <div class="lost-password-block">
                                <div class="lost-password-content">
                                    <?php echo do_shortcode('[wc_lost_password_form_bigallo]'); ?>
                                    <div class="cross"><img src="/wp-content/themes/bigallo/assets/images/cross.png" alt="#"></div>
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