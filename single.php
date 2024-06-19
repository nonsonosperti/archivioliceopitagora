<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
<?php get_template_part( 'entry' ); ?>
<?php

// Ottieni tutti i metadati del post corrente
$meta_fields = get_fields();

echo '<pre>';
var_dump($meta_fields);
echo '</pre>';

if ($meta_fields): ?>
    <div class="custom-fields">
        <h3>Custom Fields</h3>
        <ul>
            <?php foreach ($meta_fields as $key => $values): ?>
                <?php 
                // Ottieni l'oggetto campo utilizzando il nome del campo (key)
                $field = get_field_object($key);

                if ($field):
                    // La label del campo è fornita da ACF
                    $label = $field['label'];

                    // Ottieni il valore del campo
                    $value = $field['value'];
                ?>
                    <li>
                        <strong><?php echo esc_html($label); ?>:</strong>
                        <?php
                        if ($field['type'] === 'file' && !empty($value)) {
                            // Se il campo è un file, visualizza come link
                            $file_url = $value['url'];
                            $file_name = $value['filename'];
                            echo '<a href="' . esc_url($file_url) . '" target="_blank">' . esc_html($file_name) . '</a>';
                        } else {
                            // Per altri tipi di campi
                            if (is_array($value)) {
                                echo esc_html(implode(', ', $value));
                            } else {
                                echo esc_html($value);
                            }
                        }
                        ?>
                    </li>
                <?php endif; ?>
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