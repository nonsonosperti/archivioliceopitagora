<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
<?php get_template_part( 'entry' ); ?>
<?php
// Ottieni tutti i metadati del post corrente


$fields = get_field_objects();

if( $fields ): ?>

    <h3>Info e allegati</h3>
    <ul>
        <?php foreach( $fields as $field ): ?>
            <li><strong><?php echo $field['label']; ?>:</strong>
                <?php

                if (empty($field['value'])) {
                    echo 'Valore non disponibile';
                } else {
                // Verifica se il campo è un file

                if ($field['type'] === 'file') {
                    $file_url = $field['value']['url'];
                    echo '<a href="' . $file_url . '">'. $field['value']['filename'] .'</a>';
                } else if (is_array($field['value'])) {
                    echo '<ul>';
                    foreach ($field['value'] as $item) {
                        echo '<li>' . $item . '</li>';
                    }
                    echo '</ul>';
                } else {
                    echo $field['value'];
                }

            }
                ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php //if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
<footer class="footer">
<?php // get_template_part( 'nav', 'below-single' ); ?>
</footer>
<?php get_footer(); ?>