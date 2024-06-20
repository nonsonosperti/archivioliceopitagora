<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
<?php get_template_part( 'entry' ); ?>
<?php
// Ottieni tutti i metadati del post corrente


$fields = get_field_objects();

// echo '<pre>';
// echo var_dump($fields);
// echo '</pre>';


if ($fields) : ?>
    <h3>Info e allegati</h3>
    <ul>
        <?php foreach ($fields as $field) : ?>
            <li>
                <strong><?php echo $field['label']; ?>:</strong>
                <?php
                if (empty($field['value'])) {
                    echo 'Valore non disponibile';
                } else {
                    // Gestione diversa in base al tipo di campo
                    switch ($field['type']) {
                        case 'file':
                            $file_url = $field['value']['url'];
                            echo '<a href="' . $file_url . '">'. $field['value']['filename'] .'</a>';
                            break;
                        case 'image':
                            $image_url = $field['value']['url'];
                            echo '<img src="' . $image_url . '" alt="' . $field['label'] . '" style="max-width:200px;"/>';
                            break;
                        case 'array':
                            if (is_array($field['value'])) {
                                echo '<ul>';
                                foreach ($field['value'] as $item) {
                                    if (isset($item['url'])) {
                                        echo '<li><img src="' . $item['url'] . '" alt="' . $item['alt'] . '" style="max-width:200px;"/></li>';
                                    } else {
                                        echo '<li>' . $item . '</li>';
                                    }
                                }
                                echo '</ul>';
                            }
                            break;
                        default:
                            echo $field['value'];
                            break;
                    }
                }
                ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php //if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
<footer class="footer">
<?php // get_template_part( 'nav', 'below-single' ); ?>
</footer>
<?php get_footer(); ?>