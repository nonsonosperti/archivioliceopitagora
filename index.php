<?php
get_header();

// Query per raccogliere tutti i post da tutti i post types


$query = new WP_Query( 
    array(
        'post_type' => 'any',  // Recupera da tutti i tipi di post
        'posts_per_page' => 40,
    ));


if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
get_template_part( 'entry' );
comments_template();
endwhile; endif;
get_template_part( 'nav', 'below' );
get_footer();