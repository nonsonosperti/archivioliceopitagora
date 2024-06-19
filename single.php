<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
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
            echo '<strong>' . esc_html($key) . ':</strong> ' . esc_html($value);
            echo '</li>';
        }
    }

    echo '</ul>';
    echo '</div>';
}

?>
<?php //if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
<footer class="footer">
<?php // get_template_part( 'nav', 'below-single' ); ?>
</footer>
<?php get_footer(); ?>