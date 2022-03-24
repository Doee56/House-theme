<?php get_header(); ?>
<!-- HEADER-->
<header id="header_fornt" <?php if ( get_field( 'tlo_strony' ) ): ?>
    style="background: url(<?php the_field('tlo_strony'); ?>)no-repeat center top;" <?php else: ?> <?php endif; ?>
    id="">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="lines_off_real front-header">
                    <h1><?php the_field('header'); ?></h1>
                    <p><?php the_field('paragraph'); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="arrow_down">
        <a class="js-scroll-trigger" href="#products_front">
            <img src="<?php bloginfo('template_directory') ?>/img/arrow_downward.svg" alt="Arrow Down">
        </a>
    </div>
</header>
<!-- HEADER-->
<!-- Produkty-->
<section id="products_front" class="head_1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="under-header_pro_front"><?php the_field('products_header'); ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mx-auto text-center">
                <div class="grid_products grid-auto-xl grid-gap-xl">
                    <?php
                    $taxonomy        = 'typproduktu';
                    $postType        = 'oferta';
                    $current_term_id = get_queried_object()->term_id;
                    $terms           = get_terms(['taxonomy' => $taxonomy, 'orderby' => 'term_id', 'parent' => 0, 'hide_empty' => false]);
                    $term_link = get_term_link( 'tax_name' );
                    ?>

                    <?php
                    foreach ($terms as $term) {?>


                    <a href="<?php echo get_term_link($term); ?>">
                        <div class="kategoria_oferty <?php echo $term->slug; ?>">
                            <div class="prostokat">
                                <div class="box_img_area">
                                    <img src="<?php echo the_field('zdjecie_kategorii', $term); ?>"
                                        alt="Ikona realizacje">
                                </div>
                                <h3 class="term_name"><?php echo $term->name; ?></h3>
                            </div>
                        </div>
                    </a>


                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Produkty-->
<!-- Opinie-->
<section id="corusel_reviews">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php if( have_rows('reviews') ): ?>

                        <?php while( have_rows('reviews') ): the_row(); 
                            $reviews_img = get_sub_field('reviews_img');
                            $slide_text = get_sub_field('slide_text');
                          ?>
                        <div class="swiper-slide">
                            <?php if( get_sub_field('reviews_img') ){ ?>
                            <img src="<?php echo $reviews_img?>" alt="Zdjecie">
                            <?php } ?>
                            <p><?php the_sub_field('slide_text'); ?></p>
                        </div>
                        <?php endwhile; ?>

                        <?php endif; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
</section>
<!-- Opinie-->
<?php get_footer(); ?>