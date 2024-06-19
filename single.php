<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
<?php get_template_part( 'entry' ); ?>
<?php
// Ottieni tutti i metadati del post corrente


$fields = get_fields();

if( $fields ): ?>
    <ul>
        <?php foreach( $fields as $name => $value ): ?>
            <li><b><?php echo $name; ?></b> <?php echo $value; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php //if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
<footer class="footer">
<?php // get_template_part( 'nav', 'below-single' ); ?>
</footer>
<?php get_footer(); ?>