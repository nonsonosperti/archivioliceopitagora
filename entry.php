<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>
<?php if ( is_singular() ) { echo '<h1 class="entry-title" itemprop="headline">'; } else { echo '<h2 class="entry-title">'; } ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
<?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?>
<?php edit_post_link(); ?>
<?php if ( !is_search() ) { get_template_part( 'entry', 'meta' ); } ?>
</header>
<?php get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
<?php 
// Ottieni tutti i custom fields per il post corrente
$custom_fields = get_post_meta(get_the_ID());

// Controlla se ci sono custom fields
if (!empty($custom_fields)) {
    echo '<div class="custom-fields">';
    echo '<h2>Custom Fields</h2>';
    echo '<ul>';

    // Itera attraverso i custom fields
    foreach ($custom_fields as $key => $value) {
        // Evita i custom fields interni di WordPress che iniziano con _
        if (substr($key, 0, 1) !== '_') {
            echo '<li>';
            echo '<strong>' . esc_html($key) . ':</strong> ' . esc_html($value[0]);
            echo '</li>';
        }
    }

    echo '</ul>';
    echo '</div>';
}

?>
<?php // if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>
</article>