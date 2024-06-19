<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
<?php get_template_part( 'entry' ); ?>
<?php
// Ottieni tutti i metadati del post corrente


$fields = get_field_objects();

echo '<pre>';
var_dump($fields);
echo '</pre>';

if( $fields ): ?>
    <ul>
        <?php foreach( $fields as $field ): ?>
            <li><strong><?php echo $field['label']; ?>:</strong>
                <?php
                // Verifica se il campo è un file
                if ($field['type'] === 'file') {
                    $file_url = $field['value']['url'];
                    echo '<a href="' . $file_url . '">Scarica il file</a>';
                } else {
                    echo $field['value'];
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