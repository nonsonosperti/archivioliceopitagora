<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php
// Ottieni tutti i custom fields del post corrente
$custom_fields = get_post_meta(get_the_ID());

// Controlla se ci sono custom fields
if ($custom_fields) {
    echo '<div class="custom-fields">';
    echo '<h3>Custom Fields</h3>';
    echo '<ul>';
    // Itera attraverso ogni campo personalizzato
    foreach ($custom_fields as $key) {
        // Ottieni l'oggetto del campo
        $field = get_field_object($key);
        
        if ($field) {
            // La label del campo è fornita da ACF
            $label = $field['label'];
            
            echo '<li><strong>' . esc_html($label) . ':</strong> ';
            
            if ($field['type'] === 'file' && !empty($value)) {
                // Se il campo è un file, visualizza come link
                $url = $value['url'];
                $filename = $value['filename'];
                echo '<a href="' . esc_url($url) . '" target="_blank">' . esc_html($filename) . '</a>';
            } else {
                // Per altri tipi di campi
                if (is_array($value)) {
                    echo esc_html(implode(', ', $value));
                } else {
                    echo esc_html($value);
                }
            }
            
            echo '</li>';
        }
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