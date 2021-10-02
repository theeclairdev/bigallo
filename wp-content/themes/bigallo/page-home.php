<?php
/**
 * Template Name: Home
 */
get_header(); ?>
<?php
if ( have_posts() ) :
    while ( have_posts() ) :  the_post(); ?>

        <section class="home-hero">
            <div class="button-arrow button-arrow_show">
                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.333 8.66691L10.6663 18.0002L0.999673 8.66691" stroke="white" stroke-width="2" stroke-linecap="round"/>
                    <path d="M20.3335 1.66691L10.6668 11.0002L1.00016 1.66691" stroke="white" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="hero-menu">
                <?php wp_nav_menu('Header'); ?>
            </div>
            <div class="hero-buttons">
                <div class="hero-button hero-button--summer btn btn-transparent">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.11427 12C4.11427 11.4322 3.65349 10.9714 3.08569 10.9714H1.02859C0.460784 10.9714 0 11.4322 0 12C0 12.5678 0.460784 13.0286 1.02859 13.0286H3.08573C3.65349 13.0286 4.11427 12.5678 4.11427 12ZM5.14286 17.8286C4.85898 17.8286 4.60184 17.9438 4.41529 18.1296L3.04388 19.5011C2.85804 19.6876 2.74286 19.9447 2.74286 20.2286C2.74286 20.7964 3.20298 21.2572 3.77145 21.2572C4.05533 21.2572 4.31247 21.142 4.49831 20.9555L5.86976 19.584C6.05627 19.3982 6.17149 19.1411 6.17149 18.8572C6.17145 18.2894 5.71133 17.8286 5.14286 17.8286ZM12 4.11427C12.5685 4.11427 13.0286 3.65349 13.0286 3.08569V1.02859C13.0286 0.460784 12.5685 0 12 0C11.4315 0 10.9714 0.460784 10.9714 1.02859V3.08573C10.9714 3.65349 11.4315 4.11427 12 4.11427ZM18.8571 6.17145C19.141 6.17145 19.3982 6.05624 19.584 5.87043L20.9554 4.49898C21.1419 4.31247 21.2571 4.05533 21.2571 3.77145C21.2571 3.20369 20.797 2.74286 20.2285 2.74286C19.9447 2.74286 19.6875 2.85808 19.501 3.04459L18.1295 4.416C17.9437 4.60184 17.8285 4.85898 17.8285 5.14286C17.8286 5.71063 18.2887 6.17145 18.8571 6.17145ZM4.41529 5.87039C4.6018 6.0562 4.85894 6.17141 5.14286 6.17141C5.71063 6.17141 6.17145 5.71063 6.17145 5.14282C6.17145 4.85894 6.05624 4.6018 5.87043 4.41529L4.49898 3.04388C4.31247 2.85804 4.05533 2.74286 3.77145 2.74286C3.20369 2.74286 2.74286 3.20365 2.74286 3.77145C2.74286 4.05533 2.85808 4.31247 3.04388 4.49831L4.41529 5.87039ZM22.9714 10.9714H20.9143C20.3465 10.9714 19.8857 11.4322 19.8857 12C19.8857 12.5678 20.3465 13.0286 20.9143 13.0286H22.9714C23.5392 13.0286 24 12.5678 24 12C24 11.4322 23.5392 10.9714 22.9714 10.9714ZM19.5847 18.1296C19.3982 17.9438 19.1411 17.8286 18.8571 17.8286C18.2893 17.8286 17.8285 18.2894 17.8285 18.8572C17.8285 19.1411 17.9438 19.3982 18.1296 19.584L19.501 20.9555C19.6875 21.142 19.9447 21.2571 20.2285 21.2571C20.7964 21.2571 21.2571 20.7964 21.2571 20.2285C21.2571 19.9447 21.1419 19.6875 20.9561 19.501L19.5847 18.1296ZM12 19.8857C11.4315 19.8857 10.9714 20.3465 10.9714 20.9143V22.9715C10.9714 23.5392 11.4315 24 12 24C12.5685 24 13.0286 23.5392 13.0286 22.9714V20.9143C13.0286 20.3465 12.5685 19.8857 12 19.8857ZM12 4.8C8.02973 4.8 4.8 8.02973 4.8 12C4.8 15.9703 8.02973 19.2 12 19.2C15.9703 19.2 19.2 15.9703 19.2 12C19.2 8.02973 15.9703 4.8 12 4.8ZM12 17.1429C9.16388 17.1429 6.85714 14.8362 6.85714 12C6.85714 9.16388 9.16388 6.85714 12 6.85714C14.8361 6.85714 17.1429 9.16388 17.1429 12C17.1429 14.8361 14.8361 17.1429 12 17.1429Z" fill="white"/>
                    </svg>
                Лето</div>
                <div class="hero-button hero-button--winter btn btn-transparent">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.96908 9.11712L4.59408 8.22649L6.32846 9.2343L4.47689 9.86712C4.21908 9.96087 4.07846 10.2187 4.17221 10.4765C4.26596 10.7343 4.52377 10.8749 4.78158 10.7812L7.40658 9.89055L8.43783 10.4531C8.64877 10.5937 8.93002 10.5234 9.07064 10.289C9.21127 10.0781 9.14096 9.7968 8.90658 9.65618L7.89877 9.07024L7.35971 6.35149C7.28939 6.09368 7.05502 5.92961 6.79721 5.97649C6.53939 6.0468 6.37533 6.28118 6.42221 6.53899L6.82064 8.36712L5.08627 7.3593L4.54721 4.64055C4.47689 4.38274 4.24252 4.21867 3.98471 4.26555C3.72689 4.33586 3.56283 4.57024 3.60971 4.82805L3.98471 6.74993L2.25033 5.76555C2.03939 5.62493 1.75814 5.69524 1.61752 5.92961C1.47689 6.14055 1.54721 6.4218 1.78158 6.56243L3.51596 7.57024L1.66439 8.20305C1.40658 8.2968 1.26596 8.55462 1.35971 8.81243C1.45346 9.07024 1.71127 9.21087 1.96908 9.11712Z" fill="white"/>
                        <path d="M16.5704 12.0235C16.6407 11.7891 16.5235 11.5079 16.2657 11.4376L14.1329 10.7344L14.4376 8.43756C14.461 8.29694 14.4141 8.17975 14.297 8.086C14.1329 7.87506 13.8282 7.87506 13.6407 8.03912L11.9532 9.53912L10.1251 8.13287C10.0313 8.03913 9.8907 8.01569 9.75008 8.03912C9.49227 8.10944 9.3282 8.34381 9.37508 8.60162L9.82039 10.8047L7.68758 11.6954C7.57039 11.7422 7.47664 11.836 7.42976 11.9766C7.35945 12.211 7.47664 12.4922 7.73445 12.5626L9.86727 13.2657L9.56258 15.5626C9.53914 15.7032 9.58602 15.8204 9.67977 15.9376C9.84383 16.1485 10.1485 16.1485 10.336 15.9844L12.047 14.461L13.8751 15.8672C13.9688 15.961 14.1095 15.9844 14.2501 15.961C14.5079 15.8907 14.672 15.6563 14.6251 15.3985L14.1798 13.1954L16.3126 12.3047C16.4298 12.2579 16.5235 12.1641 16.5704 12.0235ZM13.4532 12.4922C13.2423 12.586 13.1251 12.8204 13.172 13.0313L13.4298 14.3672L12.2813 13.5001C12.0938 13.336 11.836 13.3594 11.672 13.5235L10.6407 14.4376L10.8282 13.0079C10.8751 12.7735 10.711 12.5626 10.5001 12.4922L9.21102 12.0704L10.547 11.5313C10.7579 11.4376 10.8751 11.2032 10.8282 10.9922L10.547 9.63287L11.6954 10.5001C11.8829 10.6641 12.1407 10.6407 12.3048 10.4766L13.336 9.56256L13.1485 10.9922C13.1251 11.2266 13.2657 11.4376 13.5001 11.5313L14.7891 11.9532L13.4532 12.4922Z" fill="white"/>
                        <path d="M10.055 4.42969C9.86753 4.26562 9.56284 4.28906 9.39878 4.47656C9.23471 4.66406 9.25815 4.96875 9.44565 5.13281L11.5316 6.96094V8.10937C11.5316 8.36719 11.7425 8.57812 12.0003 8.57812C12.2581 8.57812 12.4691 8.36719 12.4691 8.10937V6.96094L14.555 5.13281C14.7425 4.96875 14.766 4.66406 14.6019 4.47656C14.4378 4.28906 14.1331 4.26562 13.9456 4.42969L12.4691 5.71875V3.70312L14.555 1.875C14.7425 1.71094 14.766 1.40625 14.6019 1.21875C14.4378 1.03125 14.1331 1.00781 13.9456 1.17187L12.4691 2.46094V0.46875C12.4691 0.210937 12.2581 0 12.0003 0C11.7425 0 11.5316 0.210937 11.5316 0.46875V2.46094L10.055 1.17187C9.86753 1.00781 9.56284 1.03125 9.39878 1.21875C9.23471 1.40625 9.25815 1.71094 9.44565 1.875L11.5316 3.70312V5.71875L10.055 4.42969Z" fill="white"/>
                        <path d="M8.41414 13.5235L7.40633 14.1095L4.78133 13.1954C4.52351 13.1251 4.2657 13.2423 4.17195 13.5001C4.10164 13.7579 4.21883 14.0157 4.47664 14.1095L6.30476 14.6954L4.57039 15.7032L1.94539 14.8126C1.68758 14.7423 1.42976 14.8595 1.33601 15.1173C1.2657 15.3516 1.38289 15.6095 1.6407 15.7032L3.49226 16.336L1.75789 17.3438C1.54695 17.461 1.4532 17.7423 1.59383 17.9767C1.71101 18.1876 1.99226 18.2813 2.22664 18.1407L3.96101 17.1563L3.58601 19.0782C3.53914 19.336 3.7032 19.5938 3.96101 19.6407C4.21883 19.6876 4.47664 19.5235 4.52351 19.2657L5.03914 16.5235L6.77351 15.5157L6.39851 17.4376C6.35164 17.6954 6.5157 17.9532 6.77351 18.0001C7.03133 18.047 7.28914 17.8829 7.33601 17.6251L7.87508 14.9063L8.88289 14.3204C9.09383 14.2032 9.18758 13.922 9.04695 13.6876C8.92976 13.4766 8.64851 13.3829 8.41414 13.5235Z" fill="white"/>
                        <path d="M22.3593 8.2968L20.5078 7.66399L22.2422 6.65617C22.4531 6.53899 22.5468 6.25774 22.4062 6.02336C22.289 5.81242 22.0078 5.71867 21.7734 5.8593L20.039 6.84367L20.414 4.9218C20.4609 4.66399 20.2968 4.40617 20.039 4.3593C19.7812 4.31242 19.5234 4.47649 19.4765 4.7343L18.9609 7.47649L17.2265 8.4843L17.6015 6.56242C17.6484 6.30461 17.4843 6.0468 17.2265 5.99992C16.9687 5.95305 16.7109 6.11711 16.664 6.37492L16.125 9.09367L15.1172 9.67961C14.9062 9.7968 14.8125 10.078 14.9531 10.3124C15.0703 10.5234 15.3515 10.6171 15.5859 10.4765L16.5937 9.89055L19.2422 10.8046C19.4765 10.8749 19.7343 10.7577 19.8281 10.4999C19.8984 10.2421 19.7812 9.9843 19.5234 9.89055L17.6953 9.32805L19.4297 8.32024L22.0547 9.21086C22.3125 9.28117 22.5703 9.16399 22.664 8.90617C22.7343 8.64836 22.6172 8.39055 22.3593 8.2968Z" fill="white"/>
                        <path d="M22.0077 14.9063L19.3827 15.797L17.6483 14.7891L19.4999 14.1563C19.7577 14.0626 19.8983 13.8048 19.8046 13.547C19.7343 13.2892 19.4764 13.1485 19.2186 13.2423L16.5936 14.1329L15.5858 13.547C15.3749 13.4063 15.0936 13.4766 14.953 13.711C14.8124 13.922 14.8827 14.2032 15.1171 14.3438L16.1014 14.9298L16.6405 17.6485C16.7108 17.9063 16.9452 18.0704 17.203 18.0235C17.4608 17.9532 17.6249 17.7188 17.578 17.461L17.1561 15.6329L18.8905 16.6407L19.4296 19.3594C19.4999 19.6173 19.7343 19.7813 19.9921 19.7344C20.2499 19.6641 20.4139 19.4298 20.3671 19.1719L19.9921 17.2501L21.7264 18.2345C21.9374 18.3751 22.2186 18.3048 22.3593 18.0704C22.4999 17.8595 22.4296 17.5782 22.1952 17.4376L20.4608 16.4298L22.3124 15.797C22.5702 15.7266 22.7108 15.4688 22.6171 15.211C22.5233 14.9532 22.2655 14.8126 22.0077 14.9063Z" fill="white"/>
                        <path d="M13.9456 19.5703C14.1331 19.7344 14.4378 19.7109 14.6019 19.5234C14.766 19.3359 14.7425 19.0312 14.555 18.8672L12.4691 17.0391V15.8906C12.4691 15.6328 12.2581 15.4219 12.0003 15.4219C11.7425 15.4219 11.5316 15.6328 11.5316 15.8906V17.0391L9.44565 18.8672C9.25815 19.0312 9.23471 19.3359 9.39878 19.5234C9.56284 19.7109 9.86753 19.7344 10.055 19.5703L11.5316 18.2812V20.2969L9.44565 22.125C9.25815 22.2891 9.23471 22.5937 9.39878 22.7812C9.56284 22.9687 9.86753 22.9922 10.055 22.8281L11.5316 21.5391V23.5312C11.5316 23.7891 11.7425 24 12.0003 24C12.2581 24 12.4691 23.7891 12.4691 23.5312V21.5391L13.9456 22.8281C14.1331 22.9922 14.4378 22.9687 14.6019 22.7812C14.766 22.5937 14.7425 22.2891 14.555 22.125L12.4691 20.2969V18.2812L13.9456 19.5703Z" fill="white"/>
                    </svg>
                Зима</div>
            </div>
            <div class="hero-search">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-3">
                            <div class="hero-search_sale">
                                <div class="hero-sale_button btn">Продать недвижимость</div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="hero-search_wrapper">
                                <div class="d-flex flex-wrap justify-content-center">
                                    <div class="filters filters-main d-flex flex-wrap justify-content-center">
                                        <div class="filter">
                                            <?php echo do_shortcode('[facetwp facet="type_of_property"]'); ?>
                                        </div>
                                        <div class="filter">
                                            <?php echo do_shortcode('[facetwp facet="cities"]'); ?>
                                        </div>
                                        <div class="filter">
                                            <?php echo do_shortcode('[facetwp facet="rooms"]'); ?>
                                        </div>
                                        <div class="filter">
                                            <?php echo do_shortcode('[facetwp facet="area"]'); ?>
                                        </div>
                                        <div class="filter">
                                            <?php echo do_shortcode('[facetwp facet="price"]'); ?>
                                        </div>
                                    </div>
                                    <div class="filters filters-additional d-none flex-wrap justify-content-center">
                                        <div class="filter">
                                            <?php echo do_shortcode('[facetwp facet="sea"]'); ?>
                                        </div>
                                        <div class="filter">
                                            <?php echo do_shortcode('[facetwp facet="terrace"]'); ?>
                                        </div>
                                        <div class="filter">
                                            <?php echo do_shortcode('[facetwp facet="swimming"]'); ?>
                                        </div>
                                        <div class="filter">
                                            <?php echo do_shortcode('[facetwp facet="beach"]'); ?>
                                        </div>
                                        <div class="filter">
                                            <?php echo do_shortcode('[facetwp facet="airport"]'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-search_button d-flex justify-content-center">
                                    <div class="filters-show">Расширенный поиск</div>
                                    <div class="btn btn-green">Поиск</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-slider">
                <div class="left-slider">
                    <div class="left-head">
                        <div class="left-numbers">01</div>
                        <div class="left-was">
                            <div class="left-words">Большая вилла с бассейном 200м2</div>
                            <div class="left-subwords">Солнечный берег</div>
                        </div>
                    </div>
                    <div class="left-head">
                        <div class="left-numbers">02</div>
                        <div class="left-was">
                            <div class="left-words">Старинный дом XIX века с террасой</div>
                            <div class="left-subwords">Варна</div>
                        </div>
                    </div>
                    <div class="left-head left-head-active">
                        <div class="left-numbers">03</div>
                        <div class="left-was">
                            <div class="left-words">Уютный таунхаус с камином</div>
                            <div class="left-subwords">Пригород Софии</div>
                        </div>
                    </div>
                    <div class="left-head">
                        <div class="left-numbers">04</div>
                        <div class="left-was">
                            <div class="left-words">Уютный таунхаус с камином</div>
                            <div class="left-subwords">Пригород Софии</div>
                        </div>
                    </div>
                    <div class="left-head">
                        <div class="left-numbers">05</div>
                        <div class="left-was">
                            <div class="left-words">Уютный таунхаус с камином</div>
                            <div class="left-subwords">Пригород Софии</div>
                        </div>
                    </div>
                    <div class="left-head">
                        <div class="left-numbers">06</div>
                        <div class="left-was">
                            <div class="left-words">Уютный таунхаус с камином</div>
                            <div class="left-subwords">Пригород Софии</div>
                        </div>
                    </div>
                    <div class="left-head">
                        <div class="left-numbers">07</div>
                        <div class="left-was">
                            <div class="left-words">Уютный таунхаус с камином</div>
                            <div class="left-subwords">Пригород Софии</div>
                        </div>
                    </div>
                    <div class="left-head">
                        <div class="left-numbers">08</div>
                        <div class="left-was">
                            <div class="left-words">Уютный таунхаус с камином</div>
                            <div class="left-subwords">Пригород Софии</div>
                        </div>
                    </div>
                </div>
                <div class="right-slider">
                    <div class="right-slider_item">
                        <div class="right-subtitle">Солнечный берег</div>
                        <div class="right-title">Болгария</div>
                    </div>
                    <div class="right-slider_item">
                        <div class="right-subtitle">Солнечный берег</div>
                        <div class="right-title">БолгарияБолгария</div>
                    </div>
                    <div class="right-slider_item">
                        <div class="right-subtitle">Солнечный берег</div>
                        <div class="right-title">Болгария</div>
                    </div>
                </div>
            </div>
            
            <div class="hero-header">
                <h1 class="hero-title"><?php the_field('title'); ?></h1>
                <div class="hero-subtitle"><?php the_field('subtitle'); ?></div>
                <div class="button-arrow button-arrow_hide">
                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.333 8.66691L10.6663 18.0002L0.999673 8.66691" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        <path d="M20.3335 1.66691L10.6668 11.0002L1.00016 1.66691" stroke="white" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
            </div>
            <div class="hero-images">
                <div class="hero-half hero-summer" style="background-image: url(<?php the_field('summer'); ?>)"></div>
                <div class="hero-half hero-winter" style="background-image: url(<?php the_field('winter'); ?>)"></div>
            </div>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/rectangle.png'; ?>" alt="Rectangle" class="hero-parallax_image hero-parallax_image-1">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/triangle.png'; ?>" alt="Triangle" class="hero-parallax_image hero-parallax_image-2">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/ellipse.png'; ?>" alt="Ellipse" class="hero-parallax_image hero-parallax_image-3">
        </section>

        <section class="section-search">
            <div class="container">
                <div class="row">
                <?php $args = [
                        'post_type' => 'product',
                        'posts_per_page' => 10,
                        'facetwp' => true,
                    ];
                    $query = new WP_Query( $args );
                    while($query->have_posts()) : $query->the_post();
                    $product = wc_get_product( $post->ID ); ?>
                        <div class="col-md-6">
                            <a href="<?php echo get_the_permalink(); ?>" class="property-item">
                                <?php if(has_post_thumbnail()) : ?>
                                    <div class="property-item_image">
                                        <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" alt="<?php the_title(); ?>">
                                        <div class="property-item_buttons">

                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="property-item_content">
                                    <div class="property-item_data d-flex justify-content-between">
                                        <div>
                                            <div class="property-item_price"><?php echo $product->get_price(); ?></div>
                                            <div class="property-item_location"></div>
                                        </div>
                                        <div>
                                            <div class="property-item_square"><?php the_field('id'); ?></div>
                                            <div class="property-item_id"><?php the_field('id'); ?></div>
                                        </div>
                                    </div>
                                    <div class="property-item_excerpt"><?php the_excerpt(); ?></div>
                                    <div class="property-item_meta">
                                        <?php wc_display_product_attributes($product); ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </section>

        <section class="properties">
            <div class="container">
                <div class="row">
                    <?php $category_args = array(
                        'taxonomy'   => 'product_cat',
                        'hide_empty' => false,
                        'exclude' => array(15)
                    );
                    $categories = get_terms($category_args); 
                    foreach($categories as $category) : ?>
                        <div class="col-md-3">
                            <a class="property-type" href="/product-category/<?php echo $category->slug; ?>" style="background-image: url(<?php the_field('cat_image', 'product_cat_' . $category->term_id); ?>);">
                                <div class="property-content">
                                    <div class="property-type_title"><?php echo $category->name; ?></div>
                                    <div class="property-type_counter"><?php echo $category->count; ?></div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="offers" style="background-image: url(<?php the_field('offers_background'); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">Горячие предложения</div>
                    </div>
                    <?php $offers = get_field('hot_offers');
                    if($offers) :
                    foreach($offers as $offer) :
                    $offer_id = $offer->ID; 
                    $product = wc_get_product( $offer_id );
                    $product_price = $product->get_price();
                    $term_list = wp_get_post_terms($offer_id, 'product_cat', array('fields' => 'ids'));
                    $city_list = wp_get_post_terms($offer_id, 'city', array('fields' => 'ids'));
                    $cat_id = (int)$term_list[0];
                    $city_id = (int)$city_list[0];
                    $cat = get_term($cat_id, 'product_cat');
                    $city = get_term($city_id, 'city'); ?>
                        <div class="col-md-4">
                            <a href="<?php echo get_the_permalink($offer_id); ?>">
                                <div class="offer-item" style="background-image: url(<?php echo get_the_post_thumbnail_url($offer_id, 'full'); ?>);">
                                    <div class="offer-item_wrapper">
                                        <div class="offer-item_overlay">
                                            <div class="offer-item_type"><?php echo $cat->name; ?></div>
                                            <div class="offer-item_price"><?php echo $product_price; ?></div>
                                            <div class="offer-item_location"><?php echo $city->name; ?></div>
                                            <div class="offer-item_data">
                                                <?php wc_display_product_attributes($product); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; endif; ?>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="btn btn-green"><a href="#">Смотреть другие предложения</a></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="team">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="team-slider">
                        <?php if( have_rows('team_repeater') ):
                        $member_count = 0;
                        while( have_rows('team_repeater') ) : the_row(); $member_count++;?>
                            <div class="team-slide">
                                <div class="member-photo"><img src="<?php the_sub_field('member_photo'); ?>" alt="<?php the_sub_field('member_name'); ?>"></div>
                                <div class="member-content">
                                    <div class="member-content_counter"><?php echo $member_count; ?></div>
                                    <div class="member-content_text">
                                        <div class="member-text_title"><?php the_sub_field('member_name'); ?></div>
                                        <div class="member-text_description"><?php the_sub_field('member_text'); ?></div>
                                        <div class="d-flex">
                                            <div class="btn btn-green">Отправить Запрос</div>
                                            <div class="btn btn-green">Обратный Звонок</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="stats" style="background-image: url(<?php the_field('stat_background'); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">В цифрах о нас</div>
                    </div>
                    <?php if( have_rows('stat_repeater') ):
                        while( have_rows('stat_repeater') ) : the_row(); ?>
                            <div class="col-md-4">
                                <div class="stat-content">
                                    <div class="stat-number"><?php the_sub_field('number'); ?></div>
                                    <div class="stat-text"><?php the_sub_field('text'); ?></div>
                                </div>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </section>

        <section class="pages">
            <div class="container">
                <div class="row">
                <?php if( have_rows('pages_repeater') ):
                    while( have_rows('pages_repeater') ) : the_row(); ?>
                        <div class="col-md-4">
                            <a href="<?php echo get_sub_field('page_object')->post_name; ?>" class="page-item" style="background-image: url(<?php the_sub_field('page_image'); ?>">
                                <div class="page-title"><?php echo get_sub_field('page_object')->post_title; ?></div>
                            </a>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </section>

        <section class="feedback" style="background-image: url(<?php the_field('feedback_bckg'); ?>);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <?php echo do_shortcode(''); ?>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; wp_reset_postdata();
endif; ?>

<?php get_footer(); ?>