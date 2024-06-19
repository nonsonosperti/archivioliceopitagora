<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php
// Ottieni tutti i campi personalizzati del post corrente
$fields = get_field_objects();

if( $fields ): ?>
    <div class="custom-fields">
        <h3>Custom Fields</h3>
        <ul>
            <?php foreach( $fields as $field ): ?>
                <li>
                    <strong><?php echo esc_html($field['label']); ?>:</strong> 
                    <?php 
                    if ($field['type'] === 'file' && !empty($field['value'])) {
                        // Se il campo è un file, visualizza come link
                        $file_url = $field['value']['url'];
                        $file_name = $field['value']['filename'];
                        echo '<a href="' . esc_url($file_url) . '" target="_blank">' . esc_html($file_name) . '</a>';
                    } else {
                        // Per altri tipi di campi
                        if (is_array($field['value'])) {
                            echo esc_html(implode(', ', $field['value']));
                        } else {
                            echo esc_html($field['value']);
                        }
                    }
                    ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php else: ?>
    <p>No custom fields found.</p>
<?php endif; ?>


<?php //if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
<footer class="footer">
<?php // get_template_part( 'nav', 'below-single' ); ?>
</footer>
<?php get_footer(); ?>