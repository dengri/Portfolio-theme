 <?php 

	/*Template Name: Work Page*/

	get_header();

 ?>

<p>This is work.php</p>

<?php 

	$args = array( 'post_type' => 'work' );
	$query = new WP_Query( $args );

?>

<?php if ( have_posts() ): while ( $query->have_posts() ): $query->the_post(); ?>

	<h3><?php the_title() ?></h3>
	<p><?php the_field( 'description' ); ?></p>
	<hr>

<?php endwhile; else: ?>

<p>There are no posts or pages here.</p>

<?php endif; ?>

<?php get_footer();?>