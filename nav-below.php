<?php $args = array(
'prev_text' => sprintf( esc_html__( '%s più vecchi', 'blankslate' ), '<span class="meta-nav">&larr;</span>' ),
'next_text' => sprintf( esc_html__( 'più recenti %s', 'blankslate' ), '<span class="meta-nav">&rarr;</span>' )
);
the_posts_navigation( $args );