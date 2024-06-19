<?php
get_header();

// Query per raccogliere tutti i post da tutti i post types


$query = new WP_Query( 
    array(
        'post_type' => 'any',  // Recupera da tutti i tipi di post
        'posts_per_page' => 4000,
    ));

 echo do_shortcode( '[searchandfilter fields="search,category,post_tag, post_types" post_types="all"]' );

if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
get_template_part( 'entry' );
comments_template();
endwhile; endif;
get_template_part( 'nav', 'below' );
get_footer();