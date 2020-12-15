<?php
get_header();
?>
	<article class="container">
			<h1><?php the_title(); ?></h1>

			<?php get_template_part( 'templates/content-flex' );?>

	</article>
<?php
get_footer();
