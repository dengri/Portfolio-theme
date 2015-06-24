<?php get_header();?>

<p>This is front-page.php</p>

<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

<?php endwhile; else: ?>

<?php endif; ?>

<?php get_footer();?>