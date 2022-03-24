<?php get_header(); ?>



<section id="header_fornt" class="header" <?php if (get_field('tlo_strony', 6)): ?>
    style="background: url(<?php the_field('tlo_strony', 6);?>)no-repeat center;" <?php else: ?> <?php endif;?> id="">
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


<!-- Pojedyncze produkty-->

<section id="products_front" class="head_1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="under-header_pro_front"><?php $term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );
echo $term->name; ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <div class="grid_products products_taxonomy  grid-auto-xl grid-gap-xxxs">
                    <?php

$post_query = new WP_Query(array(
     'post_type'      => 'oferta',
     'posts_per_page' => -1,
     'orderby' => 'date',
     'tax_query'      => array( array(
        'taxonomy'   => 'typproduktu',
        'field'      => 'term_id',
        'terms'      => array( get_queried_object()->term_id ),
    ) )
    
    ));
    
    while ($post_query->have_posts()):
    
     $post_query->the_post();
     $postType      = 'oferta';
     $taxonomy      = 'typproduktu';
     foreach ($termsArray as $term) { // for each term
      $termsString .= $term->slug . ' '; //create a string that has all the slugs
     }
     ?>

                    
                        <div class=" wrapper-opis_archive <?php echo $term->slug; ?>">
                            <a href="<?php echo get_permalink( $id ); ?>">
                                <div class="cont-img_offer_archive">
                                        <img src="<?php echo get_field('zdjecie_produktu') ?>" alt="Grafika produktu">
                                </div>
                                <div class="wrapp_tresc_usluga_archive">
                                    <h2><?php the_title(); ?></h2>
                                    <strong>See details</strong>

                                </div>
                            </a>
                        </div>
                        




                    <?php endwhile; ?>
                        <p>No posts found</p>
                    <?php wp_reset_query();?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pojedyncze produkty-->




<?php get_footer(); ?>