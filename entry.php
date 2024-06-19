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
// Ottieni l'ID del post corrente
$post_id = get_the_ID();

// Ottieni tutti i metadati del post corrente
$meta_fields = get_post_meta($post_id);

if ($meta_fields): ?>
    <div class="custom-fields">
        <h3>Custom Fields</h3>
        <ul>
            <?php foreach ($meta_fields as $key => $values): ?>
                <?php 
                // Ottieni l'oggetto campo utilizzando il nome del campo (key)
                $field = get_field_object($key, $post_id);

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
<?php // if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>
</article>