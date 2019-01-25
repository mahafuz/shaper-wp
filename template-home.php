<?php
/**
 * Template Name: Homepage
 */

get_header(); ?>

    <!-- hero area -->
    <section class="section">
        <div class="container">
            <div class="row">
            <?php if( ! empty(get_option('shaper_options')['banner_thumbnail']) ) : ?>
                <div class="col-md-6 text-center mb-5 mb-md-0">
                    <img src="<?php echo esc_url(get_option('shaper_options')['banner_thumbnail']); ?>" alt="">
                </div>
            <?php endif; ?>
                <div class="col-md-6 align-self-center text-center text-md-left">
                    <div class="block">
                        <?php if( ! empty(get_option('shaper_options')['hero_area_title']) ) : ?>
                        <h1 class="font-weight-bold mb-4 font-size-60"><?php echo esc_attr(get_option('shaper_options')['hero_area_title']); ?></h1>
                        <?php endif; ?>

                        <?php if( ! empty(get_option('shaper_options')['hero_area_content']) ) : ?>
                        <p class="mb-4"><?php echo wp_kses_post(get_option('shaper_options')['hero_area_content']); ?></p>
                        <?php endif; ?>
                        <?php if( (get_option('shaper_options')['ha_button_switcher'] == 1) && get_option('shaper_options')['hero_btn_text'] !== '' ) : ?>
                            <a class="btn btn-main" href="<?php echo esc_attr(get_option('shaper_options')['hero_btn_link']); ?>" role="button"><?php echo esc_attr(get_option('shaper_options')['hero_btn_text']); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- header close -->
    <!-- 
        Feature start
        ==================== -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2><?php echo esc_attr(cs_get_option('feature_section_title')); ?></h2>
                    </div>
                </div>
                <?php if( count(cs_get_option('left_side_features')) > 0 ) : ?>
                <div class="col-md-4">
                    <?php foreach(cs_get_option('left_side_features') as $feature) : ?>
                    <div class="mb-40 text-center text-md-left">
                        <i class="d-inlin-block h2 mb-10 <?php echo $feature['feature_icon']; ?>"></i>
                        <h4 class="font-weight-bold mb-2"><?php echo $feature['feature_title']; ?></h4>
                        <p><?php echo $feature['feature_content']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <?php if( ! empty(cs_get_option('feature_image')) ) : ?>
                <div class="col-md-4 text-center align-self-center mb-4 mb-md-0">
                    <img class="img-fluid" src="<?php echo esc_url(cs_get_option('feature_image')); ?>" alt="">
                </div>
                <?php endif; ?>

                <?php if( count(cs_get_option('right_side_features')) > 0 ) : ?>
                <div class="col-md-4">
                    <?php foreach(cs_get_option('right_side_features') as $feature) : ?>
                    <div class="mb-40 text-center text-md-left">
                        <i class="d-inlin-block h2 mb-10 <?php echo $feature['feature_icon']; ?>"></i>
                        <h4 class="font-weight-bold mb-2"><?php echo $feature['feature_title']; ?></h4>
                        <p><?php echo $feature['feature_content']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div><!-- .container close -->
    </section><!-- #service close -->

    <?php $promo_bg_color = cs_get_option('promo_area_bg'); ?>
    <section class="bg-orange section" <?php echo "style='background-color: {$promo_bg_color}';"; ?>>
        <div class="container">
            <div class="row">
                <?php if( ! empty(cs_get_option('promo_image')) ) : ?>
                <div class="col-md-6 text-center mb-5 mb-lg-0">
                    <img class="img-fluid" src="<?php echo esc_url(cs_get_option('promo_image')); ?>" alt="">
                </div>
                <?php endif; ?>

                <div class="col-md-6 align-self-center text-center text-md-left">
                    <div class="content">
                        <?php if( ! empty(cs_get_option('promo_area_title')) ) : ?>
                        <h2 class="subheading text-white font-weight-bold mb-10"><?php echo esc_attr(cs_get_option('promo_area_title')); ?></h2>
                        <?php endif; ?>
                        <p class="text-white"><?php echo wp_kses_post((cs_get_option('promo_area_content'))); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="feature-list section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Why Choose Apple Watch</h2>
                    </div>
                </div>

            </div>
            <div class="row mb-40">
                <div class="col-md-6 text-center mb-5 mb-lg-0">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/showcase-4.png" alt="">
                </div>
                <div class="col-md-6 align-self-center text-center text-md-left">
                    <div class="content">
                        <h4 class="subheading">Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, sed, assumenda. Tenetur
                            sed esse, voluptas voluptate est veniam numquam, quis magni. Architecto minus suscipit
                            quas, quo harum deserunt consequatur cumque!</p>
                        <a href="" class="btn btn-main btn-main-sm">Check Features</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 order-md-1 order-2 align-self-center text-center text-md-left">
                    <div class="content">
                        <h4 class="subheading">Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, sed, assumenda. Tenetur
                            sed esse, voluptas voluptate est veniam numquam, quis magni. Architecto minus suscipit
                            quas, quo harum deserunt consequatur cumque!</p>
                        <a href="#" class="btn btn-main btn-main-sm">Check Features</a>
                    </div>
                </div>
                <div class="col-md-6 order-md-2 order-1 text-center mb-5 mb-lg-0">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/showcase-3.png" alt="">
                </div>
            </div>
        </div>
    </section>


    <?php

    ?>

    <section class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Checkout some amazing Shorts</h2>
                    </div>

                    <div
                        class="gallery-slider"
                        data-slider-navigation="<?php echo cs_get_option('slider_navigation') == 1 ? 'true' : 'false'; ?>"
                        data-slider-pagination="<?php echo cs_get_option('slider_pagination') == 1 ? 'true' : 'false'; ?>"
                    >

                    <?php
                    if( isset(get_option('shaper_options')['products']) ) : 
                        foreach(get_option('shaper_options')['products'] as $product) : ?>
                        <div class="block">
                            <div class="gallery-overlay">
                                <a href="<?php echo esc_url($product['product_img']); ?>" class="image-popup gallery-popup">
                                    <i class="tf-ion-ios-search"></i>
                                </a>
                            </div>

                            <img class="img-fluid" src="<?php echo esc_url($product['product_img']); ?>" alt="">
                        </div>
                    <?php
                            endforeach;
                        endif;
                    ?>


                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php list($id, $title) = explode('|', cs_get_option('newsletter_forms')); ?>
    <section class="call-to-action section bg-opacity bg-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 text-center mx-auto">
                    <?php if( ! empty( cs_get_option('newsletter_section_title'))) :?><h2 class="subheading text-white"><?php echo cs_get_option('newsletter_section_title'); ?></h2><?php endif; ?>

                    <?php if( ! empty( cs_get_option('newsletter_section_content'))) :?>
                    <p class="text-white input-group"><?php echo (wp_kses_post(cs_get_option('newsletter_section_content'))); ?></p>
                    <?php endif; ?>
                    <?php echo do_shortcode('[contact-form-7 id="'.$id.'" title="'.$title.'"]'); ?>
                </div>
            </div>
        </div>
    </section><!-- #call-to-action close -->



    <section class="testimonials section">
        <div class="container">
            <div class="row justify-content-center">
                <?php if( ! empty(cs_get_option('testimonial_section_title')) ) : ?>
                <div class="col-12">
                    <div class="heading">
                    <h2><?php echo esc_attr(cs_get_option('testimonial_section_title')); ?></h2>
                    </div>
                </div>
                <?php endif; ?>


                <?php
                    if(cs_get_option('testimonilas')) :
                        foreach(cs_get_option('testimonilas') as $testimonial) :
                ?>
                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0 text-center">
                    <div class="testimonial-block">
                        <i class="<?php echo $testimonial['testimonial_icon']; ?>"></i>
                        <p><?php echo $testimonial['testimonial_content']; ?></p>
                        <div class="author-details">
                            <img src="<?php echo $testimonial['testimonial_img']; ?>" alt="">
                            <h4><?php echo $testimonial['author_name']; ?></h4>
                            <span><?php echo $testimonial['author_designation']; ?></span>
                        </div>
                    </div>
                </div>
                <?php
                        endforeach;
                    endif; ?>

            </div>
            <div class="row mt-100">
                <div class="col-md-12 text-center">
                    <a href="" class="btn btn-main">Grab You Product Now</a>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>