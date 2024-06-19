<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php
// Ottieni tutti i custom fields del post corrente
$custom_fields = get_post_meta(get_the_ID());

// Controlla se ci sono custom fields
if (!empty($custom_fields)) {
    echo '<div class="custom-fields">';
    echo '<h3>Custom Fields</h3>';
    echo '<ul>';
    // Itera attraverso ogni custom field
    foreach ($custom_fields as $key => $values) {
        // La chiave del custom field è la label
        the_field($key);
        
        // I valori possono essere un array (in caso di campi con valori multipli)
        foreach ($values as $value) {
            $decoded_value = maybe_unserialize($value);
            if (is_array($decoded_value)) {
                // Se il valore è un array, visualizza come stringa
                echo esc_html(implode(', ', $decoded_value));
            } else {
                echo esc_html($decoded_value);
            }
        }
        
        echo '</li>';
    }
    echo '</ul>';
    echo '</div>';
} else {
    echo '<p>No custom fields found.</p>';
}
?>

<?php //if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
<footer class="footer">
<?php // get_template_part( 'nav', 'below-single' ); ?>
</footer>
<?php get_footer(); ?>