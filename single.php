<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php
// Ottieni tutti i custom fields del post corrente

$fields = get_field_objects();
if( $fields ): ?>
    <ul>
        <?php foreach( $fields as $field ): ?>
            <li><?php echo $field['label']; ?>: <?php echo $field['value']; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; 
?>

<?php //if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
<footer class="footer">
<?php // get_template_part( 'nav', 'below-single' ); ?>
</footer>
<?php get_footer(); ?>