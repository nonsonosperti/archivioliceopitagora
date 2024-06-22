<?php
get_header();

// Recuperiamo tutti i tipi di post pubblici, esclusi gli allegati per il primo loop
$post_types = get_post_types(array('public' => true, 'name !=' => 'attachment'), 'names');

// Query per i post normali
$post_query = new WP_Query(array(
    'post_type' => $post_types,
    'posts_per_page' => 40,
    'paged' => get_query_var('paged')
));

// Query per i media files
$media_query = new WP_Query(array(
    'post_type' => 'attachment',
    'posts_per_page' => -1,
));

// Uniamo i risultati in un unico array
$all_posts = array_merge($post_query->posts, $media_query->posts);

// Ordiniamo l'array per data
usort($all_posts, function($a, $b) {
    return strcmp($b->post_date, $a->post_date);
});

echo do_shortcode('[searchandfilter post_types="attachments"]');

if (!empty($all_posts)) : 
    foreach ($all_posts as $post) :
        setup_postdata($post);
        
        if ($post->post_type === 'attachment') {
            // Otteniamo il mime type dell'allegato
            $mime_type = get_post_mime_type($post);
            
            // Visualizziamo i media files in base al loro mime type
            if (strpos($mime_type, 'image/') === 0) {
                // È un'immagine
                echo '<h2>' . get_the_title($post) . '</h2>';
                echo wp_get_attachment_image($post->ID, 'thumbnail');
            } elseif ($mime_type === 'application/pdf') {
                // È un PDF
                echo '<h2>' . get_the_title($post) . '</h2>';
                echo '<a href="' . wp_get_attachment_url($post->ID) . '">Download PDF</a>';
            } else {
                // Altri tipi di allegati
                echo '<h2>' . get_the_title($post) . '</h2>';
                echo '<a href="' . wp_get_attachment_url($post->ID) . '">' . $mime_type . '</a>';
            }
        } else {
            // Visualizziamo i post normali
            get_template_part('entry');
            comments_template();
        }
    endforeach;
    wp_reset_postdata();
endif;

the_posts_pagination();

get_footer();
?>
