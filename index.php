<?php
get_header();

$post_types = get_post_types( array(
    'public'   => true,
), 'names' );

$post_type_names = array();
foreach ( $post_types as $post_type ) {
    $post_type_names[] = $post_type->name;
}

// Query per raccogliere tutti i post da tutti i post types
$args = array(
    'post_type' => $post_types_names,  // Recupera da tutti i tipi di post
    'posts_per_page' => -1, // Recupera tutti i post (senza limiti)
);

$query = new WP_Query( $args );


if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
get_template_part( 'entry' );
comments_template();
endwhile; endif;
get_template_part( 'nav', 'below' );
get_footer();