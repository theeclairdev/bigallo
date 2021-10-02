<?php get_header(); ?>

<?php
if ( have_posts() ) :
    while ( have_posts() ) :  the_post();
    $product = wc_get_product( $post->ID ); ?>
        <section class="home-hero single-hero">
        <div class="hero-menu">
                <?php wp_nav_menu('Header'); ?>
            </div>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-12">
                        <a href="/catalog/" class="button-back">
                            <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.3333 20.3331L2 10.6665L11.3333 0.999811" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                <path d="M18.3333 20.3335L9 10.6668L18.3333 1.00016" stroke="white" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </a>
                    </div>
                    <div class="col-md-5">
                        <div class="property-info">
                            <div class="property-item_price"><?php echo $product->get_price_html(); ?></div>
                            <div class="property-item_categories">

                            </div>
                            <div class="property-item_excerpt"><?php the_excerpt(); ?></div>
                            <div class="property-item_meta">
                                <?php wc_display_product_attributes($product); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="galery-slider">
                            <?php if( have_rows('galery_repeater') ):
                                while( have_rows('galery_repeater') ) : the_row(); ?>
                                    <div class="galery-item">
                                        <div class="galery-item_image">
                                            <img src="<?php the_sub_field('galery_image'); ?>" alt="<?php the_sub_field('galery_text'); ?>">
                                        </div>
                                        <div class="galery-item_content">
                                            <div class="galery-item_title"><?php the_sub_field('galery_text'); ?></div>
                                            <div class="galery-item_area"><?php the_sub_field('galery_area'); ?></div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-buttons">
                <div class="product-button button-wishlist">
                    <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
                </div>
                <div class="product-button button-share">
                    <span>Поделиться</span>
                </div>
                <div class="product-button button-map">
                    <span>На карте</span>
                    <?php //echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
                </div>
            </div>

            <img src="<?php echo get_template_directory_uri() . '/assets/images/rectangle.png'; ?>" alt="Rectangle" class="hero-parallax_image hero-parallax_image-1">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/triangle.png'; ?>" alt="Triangle" class="hero-parallax_image hero-parallax_image-2">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/ellipse.png'; ?>" alt="Ellipse" class="hero-parallax_image hero-parallax_image-3">
        </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>