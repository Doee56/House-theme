<?php
/*
 * Template Name: single-oferta

 */
?>

<?php get_header();?>
<section id="header_fornt" class="header" <?php if ( get_field( 'tlo_strony', 6) ): ?>
    style="background:url(<?php the_field('tlo_strony', 6); ?>)no-repeat center bottom;" <?php else: ?> <?php endif; ?>
    id="">
    <div class="lines_off_real">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1><?php the_field('header', 6); ?></h1>
                    <p><?php the_field('paragraph', 6); ?></p>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pojedynczy produkt-->
<section id="my_product">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 mx-auto no-padding">

                <div class="single_desc">
                    <h2 class="under-header_pro_front"><?php $terms = get_the_terms( $post->ID, 'typproduktu' );
                    if ( !empty( $terms ) ){
                        // get the first term
                        $term = array_shift( $terms );
                        echo $term->name;
                    } ?></h2>
                    <img src="<?php echo get_field('zdjecie_produktu') ?>" alt="Grafika produktu">
                    <h1 class="product_name"><?php the_title(); ?></h1>
                    <p><?php echo the_field('yardage'); ?></p>
                    <span><?php echo the_field('garage'); ?></span>
                    <strong><?php echo the_field('price'); ?></strong>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Pojedynczy produkt-->



<?php get_footer(); ?>